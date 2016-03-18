window.addEventListener("load", function() {

	var textarea = document.getElementById("training-add-review-form-textarea");
	var hiddenTextarea = document.createElement("div");
	var content = null;

	hiddenTextarea.className = "hidden-textarea";
	textarea.style.overflow = "hidden";

	textarea.parentElement.appendChild(hiddenTextarea);

	setHeight();

	textarea.oninput = function() {
	    setHeight();
	}

	function setHeight() {
	    content = textarea.value.replace(/&/g, "&amp;").replace(/<|>/g, "&lt;").replace(/\n/g, "<br>");
	    hiddenTextarea.innerHTML = content + "<br>";

	    textarea.style.height = hiddenTextarea.offsetHeight + "px";
	}
	
});