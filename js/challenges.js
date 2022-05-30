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