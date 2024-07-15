<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostCategoryController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\LikeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//users
Route::get('/view/{id?}', [UserController::class, 'getUser']);
Route::post('/create', [UserController::class, 'createUser']);
Route::put('/updateuser/{id}', [UserController::class, 'updatuser']);
Route::delete('/deleteuser/{id}', [UserController::class, 'deleteUser']);

//Posts
Route::get('/getpost/{id?}', [PostController::class, 'getData']);
//One to many relation
Route::get('/post', [PostController::class, 'getPost']);
Route::post('/createpost', [PostController::class, 'createPost']);
Route::put('/updatepost/{id}', [PostController::class, 'updatepost']);
Route::delete('/deletepost/{id}', [PostController::class, 'deletepost']);

//Category
Route::get('/getcategory/{id?}', [CategoryController::class, 'getCategory']);
//Relation many to many
Route::get('/getpostcategorydata', [CategoryController::class, 'getpostCategory']);
Route::post('/createcategory', [CategoryController::class, 'createCategory']);
Route::put('/updatecategory/{id}', [CategoryController::class, 'updateCategory']);
Route::delete('/deletecategory/{id}', [CategoryController::class, 'deletCategory']);

//Post Category
Route::get('/getpostcategory', [PostCategoryController::class, 'getPostCategory']);
Route::post('/createpostcategory', [PostCategoryController::class, 'createPostCategory']);
Route::delete('/deletepostcategory/{id}', [PostCategoryController::class, 'deletePostCategory']);

//Comment
Route::get('/getcomments', [CommentController::class, 'getComment']);
Route::post('/createcomments', [CommentController::class, 'createComment']);
Route::put('/updatecomments/{id}', [CommentController::class, 'updateComment']);
Route::delete('/deletecomments/{id}', [CommentController::class, 'deleteComments']);

//Likes
Route::get('/getlikes', [LikeController::class, 'getLikes']);
Route::get('/createlikes', [LikeController::class, 'createLikes']);
Route::get('/updatelikes', [LikeController::class, 'updatelikes']);
Route::get('/deletelikes', [LikeController::class, 'deleteLikes']);
