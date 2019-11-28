<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\PostResource;
use App\model\Category;

class CategoryController extends Controller
{
    public $categoryMaster;

    public function __construct()
    {
        $this->categoryMaster = new CategoryMasterController();
    }
    public function index()
    {
        $categories = new Category();
        return CategoryResource::collection($categories) ;
    }

    public function show($id)
    {}

    public function posts($id)
    {
        $category = Category::find($id);
        $posts = $category->posts;
        return new PostResource($posts);
    }
}
