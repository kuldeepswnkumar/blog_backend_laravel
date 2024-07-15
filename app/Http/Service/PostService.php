<?php

namespace App\Http\Service;

use App\Models\Post;

class PostService
{
    public function getPostData($id = null)
    {
        if ($id) {
            return Post::where('id', $id)->get();
        } else {
            return Post::get();
        }
    }
    //reverse relation
    public function getPost()
    {
        $posts = Post::with(['user', 'comments', 'likes'])->get();
        return $posts;
    }

    public function createPost($post_request_data)
    {
        return Post::create($post_request_data);
    }

    public function updatePost($id, $post_request_data)
    {
        return Post::where('id', $id)->update($post_request_data);
    }
    public function deletePost($id)
    {
        return Post::where('id', $id)->delete();
    }
}
