<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset("css/login.style.css")}}>
    <title>Register</title>
</head>
<body>
<main>
    <form action="register.blade.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2">
        </div>
        
        <button type="submit">Register</button>
        <footer>Already have an account? <a href="{{ route('login') }}">Login</a></footer>
    </form>
</main>
</body>
</html>