var description_count = document.getElementsByClassName(
    "description-input-help-hint"
)[0];
var problem_statement_count = document.getElementsByClassName(
    "statement-input-help-hint-left"
)[0];

var admin_edit_description_input = document.getElementsByClassName(
    "admin-edit-challenge-description-input"
)[0];

// var problem_statement_input = document.getElementsByClassName("")[0];

admin_edit_description_input.onkeyup = (e) => {
    // console.log(e.target.value.length);
    if (e.target.value.length <= 140)
        description_count.innerText =
            "Characters left: " + (140 - e.target.value.length);
    else {
		var a = e.target.value.slice(0, 140);
		e.target.value = a;
    }
};

var admin_edit_challenge_public = document.getElementById("admin-edit-public-challenge");

var admin_edit_challenge_public_checkbox = document.getElementsByClassName("admin-create-challenge-page-form-element-challenge-label-input")[0];

admin_edit_challenge_public.onclick = (e) => {
	// console.log(e.target.checked);
	if(e.target.checked){
		admin_edit_challenge_public_checkbox.classList.add("checked");
	}else{
		admin_edit_challenge_public_checkbox.classList.remove("checked");
	}
}