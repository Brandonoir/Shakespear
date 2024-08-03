<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <h1>Personal Blogs</h1>
    <div style="border:3px solid black";>
        @foreach($blogs as $blog)
        <div style="background-color: lightgray; padding: 5px; margin:20px">
            <h3>{{$blog['postTitle']}}</h3>
            {{$blog['postContent']}}
        </div>
        @endforeach
    </div>
    <form action="/">
        <button>Home</button>
    </form>
</div>
