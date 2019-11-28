<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesResource;
use App\model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index()
    {
        return view('category/index')->with(
            [
                'categories' => new CategoriesResource(Category::paginate() ),
            ]
        );
    }

    public function show($id)
    {
        return view('category/index')->with(
            [
                'categories' => Category::findOrFail($id)
            ]
        );
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_title' => 'required',
            'category_color' => 'required'
        ]);

        $category = new Category();

        $category-> title = $request->get('category_title');
        $category-> color = $request->get('category_color');
        $category->save();
        return redirect()->back()->with('message', 'Category Created Successful');
    }
}
