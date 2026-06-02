<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth
    <p>Congrats you are logged in.</p>
    <form action="/logout" METHOD="POST">
        @csrf
        <button>Log out</button>
    </form>
    
    <div style="border: 3px solid black;">
        <h2>Create a New Post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="title">
            <textarea name="body" placeholder="body content..."></textarea>
            <button>Save Post</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>All Posts</h2>
        @foreach($posts as $post)
        <div style="background-color: gray; padding: 10px; margin:10px;">
            <h3>{{$post['title']}}</h3>
            {{$post['body']}}
            <p>Created by {{$post->user->name}}</p>
        </div>
        @endforeach
    </div>
    

    @else
    <?php redirect()->route('login') ?>
    @endauth
</body>
</html>