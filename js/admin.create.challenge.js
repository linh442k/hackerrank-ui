var description_count = document.getElementsByClassName(
    "description-input-help-hint"
)[0];
var problem_statement_count = document.getElementsByClassName(
    "statement-input-help-hint-left"
)[0];

var description_input = document.getElementsByClassName(
    "admin-create-challenge-description-input"
)[0];

// var problem_statement_input = document.getElementsByClassName("")[0];

description_input.onkeyup = (e) => {
    // console.log(e.target.value.length);
    if (e.target.value.length <= 140)
        description_count.innerText =
            "Characters left: " + (140 - e.target.value.length);
    else {
		var a = e.target.value.slice(0, 140);
		e.target.value = a;
    }
};
