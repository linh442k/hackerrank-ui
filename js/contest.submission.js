Split(['#contest-submission-page-right-panel-challenge-detail', '#contest-submission-page-right-panel-challenge-submission'], {sizes: [30, 70],})

var code_editor_contest = window.ace.edit("contest-code-editor");
code_editor_contest.setTheme("ace/theme/crimson_editor");
code_editor_contest.session.setMode("ace/mode/javascript");
code_editor_contest.setOptions({
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

Split(['#contest-editor-container', '#contest-challenge-code-result'], {
	direction: 'vertical',
    // minSize: [300, 150],
    expandToMin: true,
	// sizes: [90, 10],
	sizes: [30, 70],
	gutterSize: 2,
})
