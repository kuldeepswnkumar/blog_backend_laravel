<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Service\LikeService;
use Illuminate\Http\Request;


class LikeController extends Controller
{
    private $likes_service;
    public function __construct()
    {
        $this->likes_service = new LikeService();
    }
    public function getLikes()
    {
        $likes = $this->likes_service->getLikes();
        return response()->json([$likes, 'Get all likes', 'status: 200']);
    }
    public function createLikes(Request $request)
    {
        $likes =  $this->likes_service->createLikes($request->all());
        return response()->json([$likes, 'Created likes', 'status: 200']);
    }
    public function updatelikes($id, Request $request)
    {
        $this->likes_service->updateLikes($id, $request->all());
        return response()->json(['Likes updated successfully', 'status: 200']);
    }
    public function deleteLikes($id)
    {
        $this->likes_service->deleteLike($id);
        return response()->json(['Likes deleted successfully', 'status: 200']);
    }
}
