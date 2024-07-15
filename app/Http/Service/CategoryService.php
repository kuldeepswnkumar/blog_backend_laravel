<?php

namespace App\Http\Service;

use App\Models\Category;

class CategoryService
{
    public function getCategory($id = null)
    {
        if ($id) {
            return Category::where('id', $id)->get();
        } else {
            return Category::get();
        }
    }
    //relation to many to many
    public function getPostCategory()
    {
        return Category::with('postcategory')->get();
    }

    public function createCategory($category_request_data)
    {
        return Category::create($category_request_data);
    }

    public function updateCategory($id, $category_request_data)
    {
        return Category::where('id', $id)->update($category_request_data);
    }
    public function deletCategory($id)
    {
        return Category::where('id', $id)->delete();
    }
}
