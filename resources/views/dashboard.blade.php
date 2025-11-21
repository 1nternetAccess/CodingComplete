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
    <header><span><h1>Dashboard<h1></span></header>
    <nav>
        <ul class="navbar">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}"><div class="center-text">Home</div></a></li>
        </ul>
    </nav>
    <main class="main-content">
          <div class="selection">
            <h2>Selection</h2>
          
            <div class="content-box2">
              <button class="level-btn">Level 1</button>
              <button class="level-btn">Level 2</button>
              <button class="level-btn">Level 3</button>
              <button class="level-btn">Level 4</button>
          </div>
          </div>
    </main>
</body>
</html>