<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Achievement;
use App\Models\Admin\Category;
use App\Models\Admin\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     **  Middleware to handle authentication to the adminhub panel
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function index()
    {
        $users = User::count();
        $achievements = Achievement::count();
        $categories = Category::count();
        $messages = Contact::count();

        $recents = $this->recents();
        return view('admin.index', compact('users', 'achievements', 'categories', 'messages','recents'));
    }
}
