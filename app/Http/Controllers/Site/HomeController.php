<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\Achievement;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Display a recents achievements.
     *
     * @return \Illuminate\Http\Response
     */
    public function recents()
    {
        $recents = Achievement::select('*')->where([['status', 1], ['date', '<', date('Y-m-d') ], ])
          ->orderBy('updated_at')
          ->inRandomOrder()
          ->paginate(3);

          return $recents;
    }

    /**
     * Display a home page (index page)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.pages.home.index')->with('recents', $this->recents());
    }
}
