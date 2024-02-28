<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //SERVICES 
    public function transportation()
    {
        return view('site.pages.services.transportation');
    }

    public function tax(){

        return view('site.pages.services.tax');
    }

    public function stationary(){

        return view('site.pages.services.stationary');
    }

    public function candf(){

        return view('site.pages.services.candf');
    }
}
