<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth
    <p>Congrats, {{$user->name}} you are logged in.</p>
    <form action="/logout" METHOD="POST">
        @csrf
        <button>Log out</button>
    </form>
    
    <div style="display: flex; flex-direction: column; gap: 2rem;">
        <div style="border: 3px solid black; padding-left: 10px;">
            <p><a href="/post" style="background-color:#e9e9ed; border: #c7c7cf solid 1px; padding:5px; border-radius: 5px; color: black; text-decoration: none;">Create a New Post</a></p>

        </div>

        <div style="border: 3px solid black; padding-left: 10px;">
            <h2>All Posts</h2>
            @foreach($posts as $post)
            <div style="background-color: rgba(89, 89, 89, 0.199); padding: 10px; margin:10px; border-radius: 5px;">
                <h3>{{$post['title']}}</h3>
                <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$post['body']}}</p>
                <p>Created by {{$post->author->name}} ({{$post->author->email}})</p>
                <p>{{$post->created_at->format('Y-m-d')}}</p>
                <p><a href="/post/{{$post->id}}" style="background-color:#e9e9ed; border: #c7c7cf solid 1px; padding:5px; border-radius: 5px; color: black; text-decoration: none;">Open Post</a></p>
            </div>
            @endforeach
        </div>
    </div>
    @endauth
</body>
</html>