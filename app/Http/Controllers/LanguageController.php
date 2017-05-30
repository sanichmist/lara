<?php

namespace App\Http\Controllers;

use App;

class LanguageController extends Controller
{
    public function choose(Request $request)
    {

    }

    public static function getCountryByLocale()
    {
        if (App::isLocale('en')) {
            $localeName = 'Eng';
        }
        if (App::isLocale('ua')) {
            $localeName = 'Укр';
        }
        if (App::isLocale('ru')) {
            $localeName = 'Рус';
        }

        return $localeName;
    }
}
