<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

        $image = Image::make(public_path("storage/{$imagePath}"))->fit('1200', '1200');
        $image->save();

        //creates a new post with the caption from data and uploads img at the path created
        auth()->user()->posts()->create([
            "caption" => $data['caption'],
            "image" => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);

//        \App\Models\Post::create($data);

//        dd(request()->all());
    }

    public function show(\App\Models\Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');

        /*
         * Loads the posts where user_id is in the users array
         * Sorts them by latest
         * Connects them with the model User
         * Paginates them by 5
         * */
        $posts = Post::whereIn('user_id', $users)->latest()->with('user')->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function discover()
    {
        $posts = Post::all()->sortByDesc('created_at');
        return view('posts.discover', compact('posts'));
    }
}
