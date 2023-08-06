<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function index()
    {
        $posts = Post::all();

        return view("posts.index", compact("posts"));
    }

    function create()
    {
        return view("posts.create");
    }

    function edit($id)
    {
        $post = Post::find($id);

        return view("posts.edit", $post);
    }

    function show($id)
    {
        $post = Post::find($id);

        return view("posts.show", compact("post"));
    }

    function store(StorePostRequest $request)
    {
        // Get data
        $post = $request->all();

        // Validate

        // Store data
        Post::create([
            ...$post,
            "user_id" => Auth::id()
        ]);

        return redirect("/posts");
    }

    function update(StorePostRequest $request, $id)
    {
        $post = Post::find($id);

        $post->title       = $request["title"];
        $post->description = $request["description"];

        $post->save();

        return redirect("/posts");
    }

    function destroy($id)
    {
        Post::destroy($id);

        return redirect("/posts");
    }
}
