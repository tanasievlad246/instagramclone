<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        //creates a new post with the caption from data and uploads img at the path created
        auth()->user()->posts()->create([
            "caption" => $data['caption'],
            "image" => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);

//        \App\Models\Post::create($data);

//        dd(request()->all());
    }
}
