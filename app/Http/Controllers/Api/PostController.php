<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Service\PostService;
use Illuminate\Http\Request;



class PostController extends Controller
{
    private $post_service;
    public function __construct()
    {
        $this->post_service = new PostService();
    }

    public function getData($id = null)
    {
        $posts = $this->post_service->getPostData($id);
        return response()->json($posts);
    }

    //relation
    public function getPost()
    {
        $posts = $this->post_service->getPost();
        return response()->json($posts);
    }

    public function createPost(Request $request)
    {
        $posts =  $this->post_service->createPost($request->all());
        return response()->json([[$posts], ['Post created successfully', 'Status: 200']]);
    }

    public function updatepost($id, Request $request)
    {
        $posts = $this->post_service->updatePost($id, $request->only(['title', 'slug', 'body']));
        return response()->json([[$posts], ['Post updated successfully', 'Status: 200']]);
    }
    public function deletepost($id)
    {
        $this->post_service->deletePost($id);
        return response()->json(['Post deleted successfully', 'status:200']);
    }
}
