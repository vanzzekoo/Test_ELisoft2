<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
