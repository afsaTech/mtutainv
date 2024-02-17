<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Achievement;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    function __construct()
    {
       $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','show']]);
       $this->middleware('permission:category-create', ['only' => ['create','store']]);
       $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::select('*')
            ->orderBy('updated_at', 'desc')
            ->paginate(10);
        return view('admin.pages.category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'desc' => '']);

        $cat = new Category();
        $cat->name = $request->get('name');
        $cat->desc = $request->get('desc');
        $cat->save();

        return back()->with('success', "Data added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $cat = $category;
        return view('admin.pages.category.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $cat = $category;
        return view('admin.pages.category.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        $updateCat = $category->update([
            'name' => $request->get('name'),
            'desc' => $request->get('desc'),
        ]);

        if ($updateCat) {
            return redirect()
                ->route('category.index')
                ->with('success', 'Record updated');
        } else {
            return back()->with('danger', 'Error occured, please check and try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            return back()->with('success', 'Category deleted');
        }
        return back()->with('danger', 'Deletion failed, please check and try again');
    }
}
