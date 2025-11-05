<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    {{-- Import all CSS files --}}
    <link rel="stylesheet" href={{asset("css/dashboard.css")}}>
</head>
<body>
    <div class="titlebar">Dashboard</div>
    <nav>
        <ul class="navbar">
            <li class="nav-item"><a class="nav-link" href="#"><div class="center-text">Home</div></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><div class="center-text">Level Select</div></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><div class="center-text">Progress</div></a></li>
        </ul>
    </nav>
    <main class="main-content">
        <div class="display-area">
            <h1>Progress</h1>
            <p></p>
        </div>
    </main>
</body>
</html>