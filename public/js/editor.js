
// Navbar Buttons
let __elem_description = document.getElementById("description");
let __elem_console = document.getElementById("console");

function __displayDescription() {
    __elem_description.style.display = "unset";
    __elem_console.style.display = "none";
}

function __displayConsole() {
    __elem_description.style.display = "none";
    __elem_console.style.display = "unset";
}

// Code Editor Area
let __elem_editor_input = document.getElementById("editor-input");
let __elem_editor_linecount = document.getElementById("editor-linecount");

__elem_editor_input.addEventListener("input", __textAreaUpdated);

function __printContent() {
    console.log(__elem_editor_input.textContent);
}

function __textAreaUpdated(event) {
    __updateLineNumbers();
}

function __updateLineNumbers() {
    var empty_line_count = (__elem_editor_input.innerHTML.match(/<br>/g) || []).length;
    var single_line_count = __elem_editor_input.innerText.split("\n").length;
    var combined_line_count = single_line_count - empty_line_count;//Math.max(1, (single_line_count - double_line_count * 2 + double_line_count));

    console.log("Single: " + single_line_count);
    console.log("Empty: " + empty_line_count);
    console.log("Combined: " + combined_line_count);

    var str_lines = "";
    for (var i = 1; i <= combined_line_count; i++) {
        str_lines += `${i}\n`;
    }
    __elem_editor_linecount.innerText = str_lines;
}


function __executeUserCode() {
    __displayConsole();

    var user_function = null;
    var user_function_output = null;
    try {
        new_function = Function("self", "window", "'use strict';" + __elem_editor_input.innerText);
    }
    catch (error) {
        __printToUserConsole(error);
        return;
    }

    try {
        user_function_output = new_function();
    }
    catch (error) {
        __printToUserConsole(error);
        return;
    }

    if (user_function_output == 3){
        __printToUserConsoleStyled("Success!", "black", "green");
    }
    else {
        __printToUserConsoleStyled("Failure...", "black", "red");
    }
}

function print(text) {
    __printToUserConsole(text);
}

// Print something to the console
function __printToUserConsole(text) {
    __elem_console.innerHTML += `${text}<br/>`;
}

// Print something to the console using css styling
function __printToUserConsoleStyled(text, text_color, background_color) {
    __elem_console.innerHTML += `<span style="color:${text_color}; background-color:${background_color}">${text}</span><br/>`
}

//printToUserConsole("Printing to the console with default styling!");
//printToUserConsoleStyled("Printing to the console with style!", "red", "black");