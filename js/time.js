window.addEventListener("load", function() {

	var form = document.getElementById("training-registration-form");
	var formLeft = document.getElementById("training-registration-form-left");
	var defaultTime = document.getElementById("default-time");
	defaultTime.style.display = "none";

	var customTime = formLeft.insertBefore(document.createElement("div"), defaultTime.nextElementSibling);
	customTime.id = "custom-time";
	customTime.className = "not-clickable";
	customTime.appendChild(defaultTime);

	insetHtml = 
	"<span id=\"custom-time-hours\" class=\"custom-time-digits\">--</span><span id=\"custom-time-colon\">:</span><span id=\"custom-time-minutes\" class=\"custom-time-digits\">--</span>" + 
	"<span class=\"custom-time-arrow\"></span><span class=\"custom-time-arrow\"></span>";

	customTime.innerHTML += insetHtml;

	var customTimeHours = document.getElementById("custom-time-hours");
	var customTimeColon = document.getElementById("custom-time-colon");
	var customTimeMinutes = document.getElementById("custom-time-minutes");
	var customTimeArrows = form.getElementsByClassName("custom-time-arrow");

	var highlightedHours = false;
	var highlightedMinutes = false;

	var currentHours = null;
	var currentMinutes = null;

	var timerId = null;

	// Установить обработчик события "нажата левая кнопка мыши" для всего документа
	document.onmousedown = function(event) {

		timerId = setInterval(function() {

			var target = event.target;

			// Если пользователь совершил клик по области с часами, то подсветить часы
		    if(target == customTimeHours) {
		       	highlightHours();
		    	return;
		    }

			// Если пользователь совершил клик по области с минутами, то подсветить минуты
		    if(target == customTimeMinutes) {
		    	highlightMinutes();
		    	return;
		    }

		    // Если пользователь совершил клик по одной из стрелок, то не убирать подсветку
			for(var i = 0; i < customTimeArrows.length; i++) {

				if(target == customTimeArrows[i]) {

					var keyCode;

					// Если пользователь совершил клик по стрелке "вверх", иначе он совершил клик по стрелке "вниз"
					if(customTimeArrows[i] == customTimeArrows[0]) {
						keyCode = 38;
					}
					else {
						keyCode = 40;
					}

					// Если области с часами и минутами не выделены, то подсветить часы
					if(!highlightedHours && !highlightedMinutes) {
						highlightHours();
					}
					
					changeTime(keyCode);

					return;

				}
				
			}

		    // Если же пользователь совершил клик вне областей с минутами и часами, то убрать подсветку
		    notHighlightTime();

		} ,50);

	}

	// Установить обработчик события "отпущена левая кнопка мыши" для всего документа
	document.onmouseup = function(event) {
		clearInterval(timerId);
	}

	// Установить обработчик события "клавиша нажата, но не отпущена" для всего документа
	document.onkeydown = function(event) {

		// Если области с часами и минутами не выделены, то прервать выполнение обработчика, иначе проверить, какую клавишу нажал пользователь
		if(!highlightedHours && !highlightedMinutes) {
			return;
		}

		var keyCode = event.keyCode;

		// Если пользователь нажал клавишу "влево" или "вправо", то подсветить часы или минуты
		if(keyCode == 37 || keyCode == 39) {
			changeHighlightTime(keyCode);
			return false;
		}

		// Если пользователь нажал клавишу "вверх" или "вниз", то изменить количество часов или минут
		if(keyCode == 38 || keyCode == 40) {
			changeTime(keyCode);
			return false;
		}

		// Если пользователь нажал клавишу одной из цифр, то изменить количество часов или минут
		if(keyCode >= 48 && keyCode <= 57) {
			changeTime(keyCode);
			return;
		}

	}

	function changeHighlightTime(keyCode) {

		// Если пользователь нажал клавишу "влево", то убрать подсветку минут и подсветить часы
		if(keyCode == 37) {
			highlightHours();
			return;
		}

		// Если пользователь нажал клавишу "вправо", то убрать подсветку часов и подсветить минуты
		if(keyCode == 39) {
			highlightMinutes();
			return;
		}

	}

	function changeTime(keyCode) {

		// Если выделены часы, то проверить, была ли нажата клавиша "вверх" или "вниз"
		if(highlightedHours) {

			// Получить текущее количество часов
			currentHours = Number(customTimeHours.textContent);

			// Если пользователь нажал клавишу "вверх", то увеличить количество часов на единицу
			if(keyCode == 38) {
				if(isNaN(currentHours)) {
					currentHours = 23;
				}
				currentHours++;
				if(currentHours > 23) {
					currentHours = 0;
				}
			}

			// Если пользователь нажал клавишу "вниз", то уменьшить количество часов на единицу
			if(keyCode == 40) {
				if(isNaN(currentHours)) {
					currentHours = 0;
				}
				currentHours--;
				if(currentHours < 0) {
					currentHours = 23;
				}
			}

			// Если же пользователь нажал клавишу одной из цифр, то изменить количество часов
			if(keyCode >= 48 && keyCode <= 57) {
				if(isNaN(currentHours)) {
					currentHours = 0;
				}
				currentHours = addZeros(currentHours, 2);
				currentHours = Number(currentHours[1] + String.fromCharCode(keyCode));
				if(currentHours > 23) {
					currentHours = 23;
				}
			}

			customTimeHours.textContent = addZeros(currentHours, 2);

		}

		// Если же выделены минуты, то также проверить, была ли нажата клавиша "вверх" или "вниз"
		if(highlightedMinutes) {
			
			// Получить текущее количество минут
			currentMinutes = Number(customTimeMinutes.textContent);

			// Если пользователь нажал клавишу "вверх", то увеличить количество минут на единицу
			if(keyCode == 38) {
				if(isNaN(currentMinutes)) {
					currentMinutes = 59;
				}
				currentMinutes++;
				if(currentMinutes > 59) {
					currentMinutes = 0;
				}
			}

			// Если пользователь нажал клавишу "вниз", то уменьшить количество минут на единицу
			if(keyCode == 40) {
				if(isNaN(currentMinutes)) {
					currentMinutes = 0;
				}
				currentMinutes--;
				if(currentMinutes < 0) {
					currentMinutes = 59;
				}
			}

			// Если же пользователь нажал клавишу одной из цифр, то изменить количество минут
			if(keyCode >= 48 && keyCode <= 57) {
				if(isNaN(currentMinutes)) {
					currentMinutes = 0;
				}
				currentMinutes = addZeros(currentMinutes, 2);
				currentMinutes = Number(currentMinutes[1] + String.fromCharCode(keyCode));
				if(currentMinutes > 59) {
					currentMinutes = 59;
				}
			}

			customTimeMinutes.textContent = addZeros(currentMinutes, 2);

		}

		// Установить выбранное время в поле по умолчанию
		defaultTime.value = customTimeHours.textContent + customTimeColon.textContent + customTimeMinutes.textContent;

	}

	function highlightHours() {
		highlightedHours = true;
		highlightedMinutes = false;
		customTimeHours.style.backgroundColor = "#b7d4ff";
		customTimeMinutes.style.backgroundColor = "transparent";
	}

	function highlightMinutes() {
		highlightedHours = false;
		highlightedMinutes = true;
		customTimeHours.style.backgroundColor = "transparent";
		customTimeMinutes.style.backgroundColor = "#b7d4ff";
	}

	function notHighlightTime() {
		highlightedHours = false;
		highlightedMinutes = false;
		customTimeHours.style.backgroundColor = "transparent";
		customTimeMinutes.style.backgroundColor = "transparent";
	}

	function addZeros(number, numberDigits) {
	    var string = number + "";
	    while(string.length < numberDigits) {
	        string = "0" + string;
	    }
	    return string;
	}

});