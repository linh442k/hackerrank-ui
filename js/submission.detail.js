var code_editor_submission = window.ace.edit("submission-code-editor");
code_editor_submission.setTheme("ace/theme/crimson_editor");
code_editor_submission.session.setMode("ace/mode/javascript");
code_editor_submission.setOptions({
	newLineMode: "unix",
	selectionStyle: "line",
	highlightActiveLine: true,
	highlightSelectedWord: true,
    indentedSoftWrap: true,
    fontSize: 18,
    keyboardHandler: "ace/keyboard/vscode",
	wrap: "free",
	indentedSoftWrap: true,
	enableBasicAutocompletion: true,
	enableSnippets: true,
	enableLiveAutocompletion: false
});
code_editor_submission.session.setUseWorker(false);
code_editor_submission.setShowPrintMargin(false);
code_editor_submission.setReadOnly(true);