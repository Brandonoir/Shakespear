<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
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
