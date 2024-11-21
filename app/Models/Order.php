<?php

namespace App\Models;

use App\Enums\Offer;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'number',
        'user_id',
        'offer',
        'goals',
        'target_audience',
        'content_available',
        'preferred_style',
        'reference_sites',
        'special_requirements',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'offer' => Offer::class,
        ];
    }

    /**
     * Relationship: An order belongs to a user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
