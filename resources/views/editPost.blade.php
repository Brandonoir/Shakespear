<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/edit_post.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="display">
        <h1 class="header">Edit Post</h1>

        <form class="dashboard" action="/edit-post/{{$post->id}}" method="post">
             @csrf
            @method('put')
            <input class="title" name="postTitle" type="text" value="{{$post->postTitle}}">
            <textarea class="content" name="postContent" type="text">{{$post->postContent}}</textarea>
            <button class="button_save">Save Changes</button>
        </form>

    </div>
    <form action="/personal">
        <button class="button_discard" >Discard</button>
    </form>
</body>
</html>