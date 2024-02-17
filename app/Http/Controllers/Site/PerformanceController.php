<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Achievement;
use App\Models\Admin\Category;

class PerformanceController extends Controller
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
     * Display all achievement filter by categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function filterByCategory()
    {
        $cat = Category::all();
        return $cat;
    }

    /**
     * Display all achievement filter by date.
     *
     * @return \Illuminate\Http\Response
     */
    public function filterByDate()
    {
        $allAchieves = Achievement::where('status', 1)->orderBy('updated_at', 'desc')->paginate(5);
        return $allAchieves;
    }

    /**
     * Display all company achievements.
     *
     * @return \Illuminate\Http\Response
     */
    public function achievs()
    {
        $achievements = Achievement::where('status', 1)->orderBy('updated_at', 'desc')->paginate(4);

        return view('site.pages.cpperformance.achievements')
                ->with(['achievements' => $achievements, 'recents' => $this->recents(), 'categories' => $this->filterByCategory(), 'allAchieves' => $this->filterByDate()]);
    }

    /**
     * shows each company achievement.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $achievement = Achievement::findOrFail($id);

        return view('site.pages.cpperformance.show_achievs')
               ->with(['achievement' => $achievement, 'recents' => $this->recents(), 'filterByCategory' => $this->filterByCategory(), 'allAchieves' => $this->filterByDate()]);
    }
}
