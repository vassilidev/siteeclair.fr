<?php

namespace App\Http\Controllers;

use App\Enums\Offer;
use App\Http\Requests\PreOrderRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PreorderController extends Controller
{
    public function view(Offer $offer)
    {
        if ($offer->isCustom()) {
            return redirect()->route('contact');
        }

        return view('pages.preorder', compact('offer'));
    }

    public function store(PreOrderRequest $request, Offer $offer)
    {
        $password = Str::password();

        /** @var User $user */
        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name'       => $request->name,
                'phone'      => $request->phone,
                'company'    => $request->company,
                'siren'      => $request->siren,
                'vat_number' => $request->vat_number,
                'password'   => $password,
            ]
        );

        $today = now()->format('Ymd');
        $nextOrderNumber = Order::where('number', 'like', "ORD-$today-%")->count() + 1;

        $formattedOrderNumber = sprintf('ORD-%s-%03d', $today, $nextOrderNumber);

        $order = Order::create([
            'number'               => $formattedOrderNumber,
            'user_id'              => $user->id,
            'offer'                => $offer->value,
            'goals'                => $request->goals,
            'target_audience'      => $request->target_audience,
            'content_available'    => $request->content_available,
            'preferred_style'      => $request->preferred_style,
            'reference_sites'      => $request->reference_sites,
            'special_requirements' => $request->special_requirements,
            'status'               => 'pending',
        ]);

        Auth::once(['email' => $request->email, 'password' => $password]);

        return $user->allowPromotionCodes()
            ->checkout([$offer->getStripePriceId() => 1], [
                'success_url' => route('order.success', $order),
                'cancel_url'  => route('preorder', ['offer' => $offer]),
            ]);
    }

    public function success(Order $order)
    {
        return view('pages.orderSuccess', compact('order'));
    }
}
