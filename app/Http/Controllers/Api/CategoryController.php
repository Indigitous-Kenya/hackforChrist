<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResource;

class CategoryController extends Controller
{
    public $categoryMaster;

    public function __construct()
    {
        $this->categoryMaster = new CategoryMasterController();
    }
    public function index()
    {
        return new CategoriesResource($this->categoryMaster->index()) ;
    }

    public function show($id)
    {}
}
