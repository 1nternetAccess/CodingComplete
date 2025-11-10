
// Navbar Buttons
let elem_description = document.getElementById("description");
let elem_console = document.getElementById("console");

function displayDescription() {
    elem_description.style.display = "unset";
    elem_console.style.display = "none";
}

function displayConsole() {
    elem_description.style.display = "none";
    elem_console.style.display = "unset";
}

// Code Editor Area
let elem_editor_input = document.getElementById("editor-input");
let elem_editor_linecount = document.getElementById("editor-linecount");

elem_editor_input.addEventListener("input", textAreaUpdated);

function printContent() {
    console.log(elem_editor_input.textContent);
}

function textAreaUpdated(event) {
    updateLineNumbers();
}

function updateLineNumbers() {
    var line_count = (elem_editor_input.value.match(/\n/g) || []).length + 1; // Regex expression to find the number of \n occurences.
    var str_lines = "";
    for (var i = 1; i <= line_count; i++) {
        str_lines += `${i}<br/>`;
    }
    elem_editor_linecount.innerHTML = str_lines;
}