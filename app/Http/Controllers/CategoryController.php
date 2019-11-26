<?php

namespace App\Http\Controllers;

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
        return $this->categoryMaster->index();
    }

    public function show($id)
    {}
    public function store(Request $request)
    {}
}
