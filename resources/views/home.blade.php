<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    @auth
    <div style="border:3px solid black";>
        <h2>Create Post</h2>
        <form action="/createPost" method="post">
        @csrf
        <input name="postTitle" type="text" placeholder="Title">
        <textarea name="postContent" type="text" placeholder="content"></textarea>
        <button>Submit</button>
    </form>
    </div>

    <div style="border:3px solid black";>
        <h2>Blogs</h2>
        @foreach ($blogs as $blog)
            <div style="background-color: lightgray; padding: 5px; margin: 10px">
                <h3>{{$blog['postTitle']}}</h3>
                {{$blog['postContent']}}
            </div>
        @endforeach
    </div>

    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>

    <form action="/personal" method="GET">
    <button>Personal</button>
    </form>

    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Login</button>
        </form>
    </div>
    @endauth

</body>

</html>