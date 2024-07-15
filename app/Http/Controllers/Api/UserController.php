<?php

namespace App\Http\Controllers\Api;

use App\Http\Service\UserService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user_service;
    public function __construct()
    {
        $this->user_service = new UserService();
    }
    public function getUser($id = null)
    {
        $users = $this->user_service->getUserData($id);
        return response()->json($users);
    }
    public function createUser(Request $request)
    {
        $users = $this->user_service->createUser($request->all());
        return response()->json($users);
    }

    //One to many relationship
    public function gettabledata()
    {
        $users = $this->user_service->getdata();
        return response()->json($users);
    }

    //update
    // There are two request method except and only
    public function updatuser($id, Request $request)
    {
        $users = $this->user_service->updateUser($id, $request->only(['name', 'email']));
        return response()->json($users);
    }

    //delete
    public function deleteUser($id)
    {
        $this->user_service->deleteUser($id);
        return response()->json(['User deleted successfully'], 200);
    }
}
