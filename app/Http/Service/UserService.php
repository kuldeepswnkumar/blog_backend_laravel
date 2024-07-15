<?php

namespace App\Http\Service;

use App\Models\Post;
use App\Models\User;


class UserService
{
    //get
    public function getUserData($id = null)
    {
        if ($id) {
            $users = User::where('id', $id)->get();
        } else {
            $users = User::get();
        }
        return $users;
    }
    //Create
    public function createUser($user_request_data)
    {
        return User::create($user_request_data);
    }

    //Getting data from two table one to many relation
    public function getdata()
    {
        return User::with('post')->get();
    }

    //update
    public function updateUser($id, $user_request_data)
    {
        return User::where('id', $id)->update($user_request_data);
    }

    public function deleteUser($id)
    {
        return User::where('id', $id)->delete();
    }
}
