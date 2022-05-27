var header_dropdown_menu = document.getElementsByClassName(
    "header-nav-dropdown-menu"
)[0];

var header_dropdown_link = document.getElementsByClassName(
    "header-nav-dropdown-link"
)[0];

header_dropdown_link.onclick = () => {
    header_dropdown_link.style.color = "white";
    header_dropdown_menu.style.display = "block";
};

document.addEventListener("mouseup", function (e) {
    if (!header_dropdown_menu.contains(e.target)) {
        header_dropdown_link.style.color = "#b7c9cc";
        header_dropdown_menu.style.display = "none";
    }
});
