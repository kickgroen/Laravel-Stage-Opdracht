<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>{{$post->title}} - {{$post->author->name}} ({{$post->author->email}})</h1>
        <p>{{$post->body}}</p>
        <p><a href="/">Go Back</a></p>
    </div>
</body>
</html>