// modal.js
var modal = document.getElementById("myModal");
var closeBtn = document.getElementsByClassName("close")[0];

function displayModalWithMessage(message) {
    var modalMessage = document.getElementById("modal-message");
    modalMessage.textContent = message;
    modal.style.display = "block";
}

closeBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
