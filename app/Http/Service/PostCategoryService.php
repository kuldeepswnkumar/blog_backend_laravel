<?php

namespace App\Http\Service;

use App\Models\Postcategorie;

class PostCategoryService
{
    public function getPostCategory()
    {
        return Postcategorie::get();
    }
    public function createPostCategory($request_data)
    {
        return Postcategorie::create($request_data);
    }
    public function deletePostCategory($id)
    {
        return Postcategorie::where('id', $id)->delete();
    }
}
