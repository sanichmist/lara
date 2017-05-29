<?php

namespace App\Http\Controllers;


class LanguageController extends Controller
{
    public function choose(Request $request)
    {
        if ($request->ajax) {
            $request->session()->put('locale', $request->locale);
            $request->session()->flash('alert-success', ('app.Locale_Change_Success'));
        }
    }
}
