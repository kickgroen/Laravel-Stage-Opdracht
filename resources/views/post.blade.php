<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @isset($post)
    <div>
        <h1>{{$post->title}} - {{$post->author->name}} ({{$post->author->email}})</h1>
        <p>{{$post->body}}</p>
        <p><a href="/">Go Back</a></p>
    <div>
    @else
    <div style="border: 3px solid black; padding-left: 10px;">
        <h2>Create a New Post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input name="name" type="text" value="{{$user->name}}" disabled>
            <input name="email" type="email" value="{{$user->email}}" disabled>
            <input type="text" name="title" placeholder="title">
            <textarea name="body" placeholder="body content..."></textarea>
            <button>Save Post</button>
        </form>
    </div>
    @endisset
    
</body>
</html>