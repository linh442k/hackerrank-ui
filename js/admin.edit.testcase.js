var admin_edit_testcase_button = document.getElementsByClassName("admin-edit-testcase-upload-button")[0]
var admin_edit_testcase_modal = document.getElementById("admin-edit-testcase-modal")
var admin_edit_testcase_modal_close = document.getElementsByClassName("admin-edit-testcase-modal-close")[0];

var admin_edit_testcase_add_sample_checkbox = document.getElementById("admin-edit-testcase-sample");
var admin_edit_testcase_add_explanation = document.getElementById("admin-edit-testcase-explanation-container");
var admin_edit_testcase_add_sample_checkbox_container = document.getElementById("admin-edit-testcase-sample-container");


admin_edit_testcase_button.onclick = () => {
	admin_edit_testcase_modal.style.display = "block";
}

admin_edit_testcase_modal_close.onclick = () =>{
	admin_edit_testcase_modal.style.display = "none";
}

admin_edit_testcase_add_sample_checkbox.onclick = (e) => {
	console.log(e.target.checked)
	if(e.target.checked){
		admin_edit_testcase_add_sample_checkbox_container.classList.add("checked");
		admin_edit_testcase_add_explanation.style.display = "block"
	}
	else{
		admin_edit_testcase_add_sample_checkbox_container.classList.remove("checked");
		admin_edit_testcase_add_explanation.style.display = "none"
	}
}