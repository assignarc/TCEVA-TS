function modalPopup(){
	document.getElementById("modalPopup").style.display='block';
}
function modalPopdown(){
	document.getElementById("modalPopup").style.display='none';
}

function setAction(action){
	document.getElementById("submitChoice").value = action;
	document.getElementById("modalForm").submit();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	var modal = document.getElementById('modalPopup');
    if (modal != null && event.target == modal) {
        modal.style.display = "none";
    }
}