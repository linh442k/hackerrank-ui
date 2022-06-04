var custom_test_checkbox = document.getElementById(
    "custom-test-input-checkbox"
);
var custom_test_checker = document.getElementsByClassName(
    "custom-test-checker"
)[0];

var custom_test_text_input = document.getElementById("custom-test-input-text");

custom_test_checkbox.onclick = (e) => {
    console.log(e.target.checked);
    if (e.target.checked) {
        custom_test_checker.classList.add("checked");
        custom_test_text_input.style.display = "block";
        custom_test_text_input.focus();
    } else {
        custom_test_checker.classList.remove("checked");
        custom_test_text_input.style.display = "none";
    }
};

var code_editor_challenge = window.ace.edit("challenge-code-editor");
code_editor_challenge.setTheme("ace/theme/crimson_editor");
code_editor_challenge.session.setMode("ace/mode/javascript");
code_editor_challenge.setOptions({
	newLineMode: "unix",
	selectionStyle: "line",
	highlightActiveLine: true,
	highlightSelectedWord: true,
    indentedSoftWrap: true,
    fontSize: 16,
    keyboardHandler: "ace/keyboard/vscode",
	wrap: "free",
	indentedSoftWrap: true,
	enableBasicAutocompletion: true,
	enableSnippets: true,
	enableLiveAutocompletion: false
});
