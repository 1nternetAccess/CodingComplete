<!DOCTYPE html>
<html lang="en" style="height: 100vh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Editor</title> --}}
    <title>{{$challenge}}</title>
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
                    <div class="console" id="console"></div>
                    <div class="description" id="description">
                        <h1 id="challenge-title">Title</h1>
                        <p id="challenge-description">Description</p>
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
                    <div>
                        <p id=funcHeader>function funcName(funcParams){</p>
                        <div spellcheck="false" contenteditable="true"  class="editor-input" id="editor-input">
                        </div>
                        <p>}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php if ($challenge == "sum"): ?>
<script>
    // {{--var __unit_tests = @json($person);--}}
    // {{--console.log(__unit_tests.name);--}}
    var __level_data = {};
    var __tests = [
        {"params": [[1,2,3]], "expected_result": 6},
        {"params": [[4,5,6]], "expected_result": 15},
        {"params": [[7,8,9]], "expected_result": 24},
        {"params": [[50,50,2,-5,3,-1]], "expected_result": 99}
    ];
    __level_data.tests = __tests;
    __level_data.args = ["nums"];
    __level_data.title = "Summation Function";
    __level_data.description = `
    The goal of this challenge is to create a function that accepts only one argument, a list of integers, and returns the sum of all of them.

    For example, if nums = [1, 2, 3]
    the function sum will return 6.

    1 + 2 + 3 = 6
    `
    __level_data.funcName = "sum";
    
</script>
<?php elseif ($challenge == "palindrome"): ?>
<script>
    // {{--var __unit_tests = @json($person);--}}
    // {{--console.log(__unit_tests.name);--}}
    var __level_data = {};
    var __tests = [
        {"params": ["racecar"], "expected_result": true},
        {"params": ["apple"], "expected_result": false},
        {"params": ["appa"], "expected_result": true},
        {"params": ["banana"], "expected_result": false}
    ];
    __level_data.tests = __tests;
    __level_data.args = ["word"];
    __level_data.title = "Palindrome Checker";
    __level_data.description = `
    The goal of this challenge is to create a function that accepts only one argument, a single word as a string, and returns true if the word is a palindrome or false otherwise.

    A palindrome is a word that is spelled exactly the same when reversed.

    For example, if word = racecar
    the function will return true because the word is spelled the same way regardless if it is reversed.

    However, if word = apple
    the function will return false because when the word is reversed it is spelled elppa which is different from apple.

    Every word passed will be lowercase, so you do not have to worry about switching the case of any letters, simply just the algorithm.
    `
    __level_data.funcName = "isPalindrome";
    
</script>
<?php elseif ($challenge == "vowelcount"): ?>
<script>
    // {{--var __unit_tests = @json($person);--}}
    // {{--console.log(__unit_tests.name);--}}
    var __level_data = {};
    var __tests = [
        {"params": ["hello world!"], "expected_result": 3},
        {"params": ["banana pie"], "expected_result": 5},
        {"params": ["this is a test"], "expected_result": 4},
        {"params": ["chalkboard"], "expected_result": 3}
    ];
    __level_data.tests = __tests;
    __level_data.args = ["text"];
    __level_data.title = "Vowel Counter";
    __level_data.description = `
    The goal of this challenge is to create a function that accepts only one argument, a string, and returns the number of vowels present in it.

    Essentially, we are only counting the occurrences of the characters a, e, i, o, and u.

    For example, if the string "hello world!" is passed
    the function will return 3 because there are 3 vowels in the string.

    Every string passed will be lowercase, so you do not have to worry about switching the case of any letters, simply just the algorithm.
    `
    __level_data.funcName = "countVowels";
    
</script>
<?php elseif ($challenge == "listzip"): ?>
<script>
    // {{--var __unit_tests = @json($person);--}}
    // {{--console.log(__unit_tests.name);--}}
    var __level_data = {};
    var __tests = [
        {"params": [['a', 'b', 'c'], ['1', '2', '3']], "expected_result": ['a', '1', 'b', '2', 'c', '3']},
        {"params": [['a', 'b'], ['1', '2', '3', '4']], "expected_result": ['a', '1', 'b', '2', '3', '4']},
        {"params": [['a', 'b', 'c', 'd'], ['1', '2']], "expected_result": ['a', '1', 'b', '2', 'c', 'd']},
        {"params": [[], ['1', '2', '3']], "expected_result": ['1', '2', '3']},
        {"params": [['a', 'b', 'c'], []], "expected_result": ['a', 'b', 'c']}

    ];
    __level_data.tests = __tests;
    __level_data.args = ["text"];
    __level_data.title = "List Combiner";
    __level_data.description = `
    The goal of this challenge is to create a function that accepts only two argument, two lists, and returns a new list with the elements of both.

    How the lists should be combined is in alternating order.

    For example, if
        list1 = ['a', 'b', 'c'] and
        list2 = ['1', '2', '3']

    the function will return ['a', '1', 'b', '2', 'c', '3']

    However, the lists may not always be the same length, in which case you must take the remaining items and simply add them to the end of the new list.

    For example, if
        list1 = ['a', 'b'] and
        list2 = ['1', '2', '3', '4']

    the function will return ['a', '1', 'b', '2', '3', '4']
    `
    __level_data.funcName = "countVowels";
    
</script>
<?php elseif ($challenge == "freeplay"): ?>
<script>
    // {{--var __unit_tests = @json($person);--}}
    // {{--console.log(__unit_tests.name);--}}
    var __level_data = {};
    var __tests = [];
    __level_data.tests = __tests;
    __level_data.args = [];
    __level_data.title = "Freeplay Mode";
    __level_data.description = `
    This is freeplay mode!  Test out anything you like
    `
    __level_data.funcName = "main";
    
</script>
<?php endif; ?>
<script src="{{asset("js/editor.js")}}"></script>

</body>


</html>