<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Document</title>
</head>

<body>
    <!-- check if the user is logged in -->
    @auth

    <div class="home_page">
        <div class="header">
            <h1>Shakespear</h1>
        </div>

        <!-- navigation items -->
        <div style="display:flex">
            <div class="nav_bar">
                <h2>Menu</h2>

                <!-- personal blogs page -->
                <div class="nav_item">
                    <a href="/personal">Personal Blogs</a>
                </div>

                <!-- Compose a Blog -->
                <div class="nav_item">
                    <a href="/compose-blog">Compose</a>
                </div>
            

            <!-- logout -->
            <div class="nav_item">
                <a href="/logout">Logout</a>
            </div>
            </div>

            <div class="dashboard">

                <!-- display blogs from the database -->
                <div class="blogs">
                    <h2 class="blog_header">Blogs</h2>
                    @foreach ($blogs as $blog)
                        <div class="blog_post">
                            <h3>{{$blog['postTitle']}} ( by {{$blog->publisher->name}} )</h3>
                            {{$blog['postContent']}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- if the user is not logged in, redirect to login page -->
    @else

    <!-- register -->
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

    <!-- login -->
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