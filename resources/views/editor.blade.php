<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editor</title>
  <link rel="stylesheet" href={{asset("css/editor.css")}} />
</head>
<body>
    <main>
        <div class="container-1">
            
            <div class="container-2">
                <nav>
                    <ul class=navbar>
                        <li><button onclick="displayDescription()">Description</button></li>
                        <li><button onclick="displayConsole()">Console</button></li>
                    </ul>
                </nav>
                <div>
                    <div class="console" id="console"><h1>console<h1></div>
                <div class="container-3">
                    <div class="console" id="console">console</div>
                    <div class="description" id="description">
                        <h1>Title</h1>
                        <p>Description</p>
                    </div>
                </div>
            </div>
            <div class="container-2">
                <nav>
                    <ul class=navbar>
                    </ul>
                </nav>
                <div class="editor" id="editor">
                    <textarea class="editor-input"></textarea>
=======
                    <p id="editor-linecount"></p>
                    <div contenteditable="true" style="overflow: auto; max-height:  200px;" class="editor-input" id="editor-input">Test</div>
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
    </main>
</body>

<script src="{{asset("js/editor.js")}}"></script>

</html>