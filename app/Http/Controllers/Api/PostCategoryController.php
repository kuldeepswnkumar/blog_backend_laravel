<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Service\PostCategoryService;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    //
    private $post_category;
    public function __construct()
    {
        $this->post_category = new PostCategoryService();
    }

    public function getPostCategory()
    {
        $postcategory = $this->post_category->getPostCategory();
        return response()->json([$postcategory, 'Get Data', 'Status: 200']);
    }
    public function createPostCategory(Request $request)
    {
        $postcategory = $this->post_category->createPostCategory($request->all());
        return response()->json([$postcategory, 'Post category created', 'Status: 200']);
    }
    public function deletePostCategory($id)
    {
        $postcategory = $this->post_category->deletePostCategory($id);
        return response()->json([$postcategory, 'Post delete', 'Status: 200']);
    }
}
