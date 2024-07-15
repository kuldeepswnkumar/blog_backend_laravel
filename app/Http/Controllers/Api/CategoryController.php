<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Service\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category_service;
    public function __construct()
    {
        $this->category_service = new CategoryService();
    }

    public function getCategory($id = null)
    {
        $category =  $this->category_service->getCategory($id);
        return response()->json([$category, 'get all category data', 'status: 200']);
    }
    //Relation with postcategory
    public function getpostCategory()
    {
        $category =  $this->category_service->getPostCategory();
        return response()->json([$category, 'get all category data', 'status: 200']);
    }

    public function createCategory(Request $request)
    {
        $category = $this->category_service->createCategory($request->all());
        return response()->json([$category, 'category created successfully', 'status: 200']);
    }

    public function updateCategory($id, Request $request)
    {
        $this->category_service->updateCategory($id, $request->only(['name', 'slug']));
        return response()->json(['category updated successfully', 'status: 200']);
    }

    public function deletCategory($id)
    {
        $this->category_service->deletCategory($id);
        return response()->json(['category deleted successfully', 'status: 200']);
    }
}
