<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Post\PostServiceInterface;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postInterface;

    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct(PostServiceInterface $postInterface)
    {
        // $this->middleware('auth');
        $this->postInterface = $postInterface;
    }

    public function index( ) {
        return view('post/post-list');
    }

    public function getCreatePost() {
        return view('post/create-post');
    }

    public function createPost(Request $request) {
        $this->postInterface->createPost($request);
        return view('post/post-list');
    }
}
