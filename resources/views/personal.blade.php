<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/personal.css">
    <title>Document</title>
</head>
<body>
    <div class="display">
        <!-- display user's personal blogs -->
        <h1 class="header">Personal Blogs</h1>
        <form action="/">
            <button>Home</button>
        </form>
        <div class="dashboard">
            @foreach($blogs as $blog)
            <div class="blog_post">

                <h3>{{$blog['postTitle']}}</h3>
                {{$blog['postContent']}}

                <p class="button_edit"><a href="/edit-post/{{$blog->id}}">Edit</a></p>
                
                <div class="button_delete">
                    <form action="/delete-post/{{$blog->id}}" method="POST">

                    @csrf
                    @method('DELETE')
                    <button>Delete</button>

                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>