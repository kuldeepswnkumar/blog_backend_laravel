<?php

namespace App\Http\Service;

use App\Models\Like;

class LikeService
{
    public function getLikes()
    {
        return Like::get();
    }
    public function createLikes($user_req_likes)
    {
        return Like::create($user_req_likes);
    }
    public function updateLikes($id, $user_req_likes)
    {
        return Like::where('id', $id)->update($user_req_likes);
    }
    public function deleteLike($id)
    {
        return Like::where('id', $id)->delete();
    }
}
