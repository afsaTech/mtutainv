<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorPageController extends Controller
{
      /**
       * Display a custom error page.
       *
       * @return \Illuminate\Http\Response
       */
      public function error404()
      {
          return view('site.pages.errorPage.404');
      }
}
