<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Service\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private $commnet_service;
    public function __construct()
    {
        $this->commnet_service = new CommentService();
    }
    public function getComment()
    {
        $comments = $this->commnet_service->getComment();
        return response()->json([$comments, 'Get all data', 'status: 200']);
    }
    public function createComment(Request $request)
    {
        $comments = $this->commnet_service->createComment($request->all());
        return response()->json([$comments, 'Comment create succesfully', 'status: 200']);
    }
    public function updateComment($id, Request $request)
    {
        $this->commnet_service->updateComment($id, $request->only(['body']));
        return response()->json(['Comment updated succesfully', 'status: 200']);
    }
    public function deleteComments($id)
    {
        $this->commnet_service->deleteComment($id);
        return response()->json(['Comment deleted succesfully', 'status: 200']);
    }
}
