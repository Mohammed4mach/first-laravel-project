<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function index()
    {
        $posts = Post::all();

        return PostResource::collection($posts);
    }

    function show($id)
    {
        $post = Post::find($id);

        return new PostResource($post);
    }

    function store(StorePostRequest $request)
    {
        $post = $request->all();

        $new_post = Post::create([
            ...$post,
            "user_id" => Auth::id()
        ]);

        return new PostResource($new_post);
    }

    function update(StorePostRequest $request, $id)
    {
        $post = Post::find($id);

        $post->title       = $request->title;
        $post->description = $request->description;

        $post->save();

        return new PostResource($post);
    }

    function destroy($id)
    {
        Post::destroy($id);
    }
}
