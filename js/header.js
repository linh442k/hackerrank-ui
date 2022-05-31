// header dropdown menu
var header_dropdown_menu = document.getElementsByClassName(
    "header-nav-dropdown-menu"
)[0];

var header_dropdown_link = document.getElementsByClassName(
    "header-nav-dropdown-link"
)[0];

var search_input = document.getElementById("search-text");

var search_form = document.getElementsByClassName("search-form")[0];

var search_result = document.getElementsByClassName("search-result")[0];


header_dropdown_link.onclick = (e) => {
    if (header_dropdown_menu.style.display !== "block") {
        header_dropdown_link.style.color = "white";
        header_dropdown_menu.style.display = "block";
    } else {
        header_dropdown_link.style.color = "#b7c9cc";
        header_dropdown_menu.style.display = "none";
    }
};

document.addEventListener("mouseup", function (e) {
    if (
        !header_dropdown_menu.contains(e.target) &&
        !header_dropdown_link.contains(e.target)
    ) {
        header_dropdown_link.style.color = "#b7c9cc";
        header_dropdown_menu.style.display = "none";
    }

    if (!search_form.contains(e.target)) {
        search_form.classList.remove("focus");
		search_result.style.display = "none"
    }
});

search_input.onkeyup = (e) => {
    console.log(e.target.value);
    // search_form.classList.add("focus");
	// perform search
	search_result.style.display = "block"
};

search_input.onmouseup = () => {
    // console.log(e.target.value);
    search_form.classList.add("focus");
};
