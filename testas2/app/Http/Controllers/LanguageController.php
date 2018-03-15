<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function language($language)
    {
        \App::setlocale($language);
       // return redirect('\radars');
       \Session::put('locale', $language);
      return  redirect()->back();
    }  //
}
