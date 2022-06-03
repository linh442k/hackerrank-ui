var custom_test_checkbox = document.getElementById("custom-test-input-checkbox");
var custom_test_checker = document.getElementsByClassName("custom-test-checker")[0];

var custom_test_text_input = document.getElementById("custom-test-input-text");

custom_test_checkbox.onclick = (e) => {
	console.log(e.target.checked);
	if(e.target.checked){
		custom_test_checker.classList.add("checked");
		custom_test_text_input.style.display = "block";
		custom_test_text_input.focus()
	}else{
		custom_test_checker.classList.remove("checked");
		custom_test_text_input.style.display = "none";
	}
}