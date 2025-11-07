<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coding Complete</title>
  <link rel="stylesheet" href={{asset("css/front.css")}} />
</head>
<body>
    <nav>
        <a href="{{ url('/login') }}">Login</a>
      </nav>
    
  <header>
    <h1>Welcome to Coding Complete!</h1>
    <p>Your journey to mastering code starts here.</p>
  </header>

  
  <main>
    <section class="intro">
      <p>
        Learning code step by step
      </p>
      <a href="{{ url('/login') }}" class="btn">Start Journey →</a>
      
    </section>

    <section class="posts">
      <article class="card">
        <h3>Learn coding through connected challenges</h3>
        <p>
          Many programs that teach users how to code teach fundamentals through many different challenges.
          This can lead to confusion as the challenges aren't connected to each other in meaningful ways.
        </p>
        <p>
          Coding complete aims to solve this issue by having you create your own library from scratch to use for future challenges.
          Instead of being given an entire language and its quality of life tools from the start, you are tasked with creating them yourself to use them for future challenges.
        </p>
      </article>

      <article class="card">
        <h3>Free to use</h3>
        <p>
          Coding Complete aims to be a free resource for anyone to use.
          Coding as a whole is a valuable skill to have, so having a cheap and easy way to learn it is very important.
        </p>
        <p>
          Not everyone is willing to spend money on a learning program that they're unsure if they have the time or money for.
          So Coding Complete is available for anyone to use without cost.
        </p>
        <p>
          All you need to do is register so your progress can be saved.
        </p>
      </article>

    </section>
  </main>

  <footer>
    <p>© 2025 Coding Complete</p>
  </footer>
</body>
</html>
