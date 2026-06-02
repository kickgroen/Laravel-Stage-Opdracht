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
    
    <div style="display: flex; flex-direction: column; gap: 2rem;">
        <div style="border: 3px solid black; padding-left: 10px;">
            <h2>Create a New Post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="title">
                <textarea name="body" placeholder="body content..."></textarea>
                <button>Save Post</button>
            </form>
        </div>

        <div style="border: 3px solid black; padding-left: 10px;">
            <h2>All Posts</h2>
            @foreach($posts as $post)
            <div style="background-color: rgba(89, 89, 89, 0.199); padding: 10px; margin:10px; border-radius: 5px;">
                <h3>{{$post['title']}}</h3>
                {{$post['body']}}
                <p>Created by {{$post->user->name}} ({{$post->user->email}})</p>
            </div>
            @endforeach
        </div>
    </div>
    @endauth
</body>
</html>