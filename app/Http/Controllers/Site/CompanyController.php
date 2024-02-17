<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a company about us.
     *
     * @return \Illuminate\Http\Response
     */
      public function about()
      {
          return view('site.pages.company.about');
      }

    /**
     * Display a company management structure details.
     *
     * @return \Illuminate\Http\Response
     */
    public function management()
    {
        return view('site.pages.company.management_structure');
    }
}
