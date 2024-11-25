<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class LandingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('pages.landing');
    }

    public function cgs()
    {
        SEOTools::setTitle('Conditions Générales de Service');
        SEOTools::setDescription('Consultez nos conditions générales de service pour en savoir plus sur nos prestations.');

        return view('pages.cgs');
    }

    public function contact()
    {
        SEOTools::setTitle('Contactez-nous');
        SEOTools::setDescription('Vous avez une question ou un projet en tête ? N\'hésitez pas à nous contacter pour en discuter !');

        return view('pages.contact');
    }
}
