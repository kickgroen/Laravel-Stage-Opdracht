<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name='name' type="text" placeholder="name">
            <input name='password' type="password" placeholder="password">
            <button>Log in</button>
        </form>
        <p>Don't have an account? <a href="/register">Register</a></p>
    </div>
</body>
</html>