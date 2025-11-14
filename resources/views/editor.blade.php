<!DOCTYPE html>
<html lang="en" style="height: 100vh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editor</title>
  <link rel="stylesheet" href={{asset("css/editor.css")}} />
</head>
<body style="height: 100vh;">
    <main style="height: 100%;">
        <div class="container-1" style="height: 100%;">
            
            <div class="container-2">
                <nav>
                    <ul class=navbar>
                        <li><button onclick="__displayDescription()">Description</button></li>
                        <li><button onclick="__displayConsole()">Console</button></li>
                        <li><button onclick="__executeUserCode()">Execute</button></li>
                    </ul>
                </nav>
                <div class="container-3">
                    <div class="console" id="console">[console]</div>
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
                <div class="editor" id="editor" style="overflow-x: auto; overflow-y: auto; max-width:100%; max-height: 100%;">
                    <p class="editor-linecount" id="editor-linecount">1</p>
                    <div spellcheck="false" contenteditable="true"  class="editor-input" id="editor-input">print("Hello World!");</div>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="{{asset("js/editor.js")}}"></script>

</html>