window.addEventListener("load", function() {

	var file = document.getElementById("training-add-review-form-file");

	file.onchange = function() {
		var pathToFile = this.value;
	    var fileName = pathToFile.slice(pathToFile.lastIndexOf("\\")+1);
		this.previousElementSibling.textContent = fileName;
	}

});