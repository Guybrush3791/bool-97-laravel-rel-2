<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{

    public function show($id) {

        $post = Post :: findOrFail($id);

        return view('post-show', compact('post'));
    }

    public function create() {

        $users = User :: all();

        return view('post-create', compact('users'));
    }
    public function store(Request $request) {

        $data = $request -> all();

        $post = Post :: create($data);

        return redirect() -> route('post.show', $post -> id);
    }
}
