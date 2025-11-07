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
            <li class="nav-item"><a class="nav-link" href="#"><div class="center-text">Level Select</div></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><div class="center-text">Progress</div></a></li>
        </ul>
    </nav>
    <main class="main-content">

        <div class="progress">
            <h2>Progress</h2>
          
            <div class="content-box">
              <div class="intro">Content1</div>
              <div class="posts">Content2</div>
            </div>
          </div>

          <div class="selection">
            <h2>Selection</h2>
          
            <div class="content-box2">
              <div class="intro2">Content1</div>
              <div class="posts2">Content2</div>
            </div>
          </div>
    </main>
</body>
</html>