window.addEventListener("load", function() {
    
    var forms = document.getElementsByClassName("form");

    var overlay = document.body.appendChild(document.createElement("div"));
    overlay.id = "overlay";
    overlay.style.display = "none";

    var modalWindowHtml = 
    "<div id=\"modal-window\">" + 
        "<p id=\"modal-window-prompt\">Ошибки заполнения. Пожалуйста, проверьте все поля и отправьте снова.</p>" + 
        "<span id=\"modal-window-button\">OK</span>" + 
    "</div>";

    overlay.innerHTML = modalWindowHtml;

    var modalWindowButton = document.getElementById("modal-window-button");

    for(var i = 0; i < forms.length; i++) {
        
        forms[i].onsubmit = function() {
            var requiredInputs = this.getElementsByClassName("required");
            for(var i = 0; i < requiredInputs.length; i++) {

                if(requiredInputs[i].value.replace(/^\s+/, "").replace(/\s+$/, "") == "") {
                    overlay.style.display = "block";
                    return false;
                }

            }
        }

    }

    modalWindowButton.onclick = function() {
        overlay.style.display = "none";
    }

});