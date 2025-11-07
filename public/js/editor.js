
/* Navbar Buttons */ {
    elem_description = document.getElementById("description");
    elem_console = document.getElementById("console");

    function displayDescription() {
        elem_description.style.display = "unset";
        elem_console.style.display = "none";
    }

    function displayConsole() {
        elem_description.style.display = "none";
        elem_console.style.display = "unset";
    }
}

