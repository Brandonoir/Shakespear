<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    //delete post
    public function deletePost(Post $post)
    {
        if (auth()->user()->id === $post['user_id']) {
            $post->delete();
        }
        return redirect()->back();
    }

    //commit post edit to database
    public function commitEditPost(Post $post, Request $request)
    {
        //redirect non-authors back to homepage
        if (auth()->user()->id !== $post->user_id) {
            return redirect()->back();
        }

        $incomingFields = $request->validate([
            "postTitle" => "required",
            "postContent" => "required",
        ]);

        $post->update($incomingFields);
        return redirect('/personal');
    }

    //show edit post screen
    public function showEditScreen(Post $post)
    {
        if (auth()->user()->id !== $post->user_id) {
            return redirect()->back();
        }

        return view("editPost", ["post" => $post]);
    }

    //show compose blog view
    public function showComposeScreen(Post $post)
    {
        return view("createPost", ["post" => $post]);
    }

    //post content
    public function createPost(Request $request)
    {
        $incomingFields = $request->validate([
            "postTitle" => "required",
            "postContent" => "required"
        ]);
        $incomingFields["user_id"] = auth()->id();
        Post::create($incomingFields);
        return redirect("/");
    }
}
