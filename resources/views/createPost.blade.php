<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/create_post.css">
    <title>Document</title>
</head>
<body>
       <!-- create a blog post -->
       <div class="dashboard">
        <h2 class="header">Create Post</h2>
         <form action="/createPost" method="post">
              @csrf
            <div>
                  <input class="title_input" name="postTitle" type="text" placeholder="Title">
            </div>
             <div>
                <textarea class="content_input" name="postContent" type="text" placeholder="Content..."></textarea>
            </div>
             <div>
                <button class="button">Submit</button>
            </div>
        </form>
    </div>
    <div class="button_discard">
        <form action="/">
            <button>Discard</button>
        </form>
    </div>    
</body>
</html>