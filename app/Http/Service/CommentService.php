<?php

namespace App\Http\Service;

use App\Models\Comment;

class CommentService
{
    public function getComment()
    {
        return Comment::get();
    }
    public function createComment($user_req_comments)
    {
        return Comment::create($user_req_comments);
    }
    public function updateComment($id, $req_comments)
    {
        return Comment::where('id', $id)->update($req_comments);
    }
    public function deleteComment($id)
    {
        return Comment::where('id', $id)->delete();
    }
}
