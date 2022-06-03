// var x = document.getElementById("admin-add-challenge-name");
// x.onclick = () => {
// 	console.log("fetch dâta")
// 	// co da ta roi thi thoi fetch
// }

var admin_add_challenge_button = document.getElementById("admin-add-challenge-button")
var admin_add_challenge_modal = document.getElementById("admin-add-challenge-modal")
var admin_add_challenge_modal_close = document.getElementsByClassName("admin-add-challenge-modal-close")[0];

admin_add_challenge_button.onclick = () => {
	admin_add_challenge_modal.style.display = "block";
}

admin_add_challenge_modal_close.onclick = () =>{
	admin_add_challenge_modal.style.display = "none";
}