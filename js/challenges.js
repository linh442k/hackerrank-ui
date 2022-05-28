// header dropdown menu
var header_dropdown_menu = document.getElementsByClassName(
    "header-nav-dropdown-menu"
)[0];

var header_dropdown_link = document.getElementsByClassName(
    "header-nav-dropdown-link"
)[0];

header_dropdown_link.onclick = () => {
	if(header_dropdown_menu.style.display !== "block"){
		header_dropdown_link.style.color = "white";
		header_dropdown_menu.style.display = "block";
	}else{
		header_dropdown_link.style.color = "#b7c9cc";
        header_dropdown_menu.style.display = "none";
	}
};

document.addEventListener("mouseup", function (e) {
    if (!header_dropdown_menu.contains(e.target)) {
        header_dropdown_link.style.color = "#b7c9cc";
        header_dropdown_menu.style.display = "none";
    }
});

// right section sticky
var sticky_wrapper = document.getElementsByClassName("challenges-list-right-panel-outer-wrapper")[0];

window.onscroll = () => {
	// console.log(window.scrollY);
	if(window.scrollY>=200){
		if(!sticky_wrapper.classList.contains("challenges-list-right-panel-outer-wrapper-sticky"))
		sticky_wrapper.classList.add("challenges-list-right-panel-outer-wrapper-sticky")
	}else{
		if(sticky_wrapper.classList.contains("challenges-list-right-panel-outer-wrapper-sticky"))
		sticky_wrapper.classList.remove("challenges-list-right-panel-outer-wrapper-sticky")
	}
}