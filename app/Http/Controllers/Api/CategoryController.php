<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResource;
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
        return new CategoriesResource($categories) ;
    }

    public function show($id)
    {}
}
