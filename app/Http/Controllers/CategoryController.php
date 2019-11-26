<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesResource;
use App\model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categoryMaster;

    public function __construct()
    {
        $this->categoryMaster = new CategoryMasterController();
    }
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
    {}
}
