window.addEventListener("load", function() {

	var form = document.getElementById("training-registration-form");
	var formLeft = document.getElementById("training-registration-form-left");
	var defaultDate = document.getElementById("default-date");
	defaultDate.style.display = "none";

	var customDate = formLeft.insertBefore(document.createElement("div"), defaultDate.nextElementSibling);
	customDate.id = "custom-date";
	customDate.appendChild(defaultDate);

	var inputText = document.createElement("input");
	inputText.type = "text";
	inputText.id = "textfield";

	customDate.appendChild(inputText);

	var calendarHtml = 
	"<div id=\"calendar\">" + 
		"<div id=\"calendar-title\">" + 
			"<a id=\"calendar-title-arrow-prev-month\" class=\"calendar-title-arrow\"><span class=\"calendar-title-arrow-main\"></span></a>" + 
			"<a id=\"calendar-title-arrow-next-month\" class=\"calendar-title-arrow\"><span class=\"calendar-title-arrow-main\"></span></a>" + 
			"<div id=\"calendar-title-main\">" + 
				"<span id=\"calendar-title-main-month\"></span>&nbsp;<span id=\"calendar-title-main-year\"></span>" + 
			"</div>" + 
		"</div>" + 
		"<table id=\"calendar-table\">" + 
			"<thead id=\"calendar-table-head\">" + 
				"<tr>" + 
					"<th>Пн</th><th>Вт</th><th>Ср</th><th>Чт</th><th>Пт</th><th>Сб</th><th>Вс</th>" + 
				"</tr>" + 
			"</thead>" + 
			"<tbody id=\"calendar-table-body\"></tbody>" + 
		"</table>" + 
	"</div>";

	var rowHtml = 
	"<tr>" + 
		"<td></td><td></td><td></td><td></td><td></td><td></td><td></td>" + 
	"</tr>";

	customDate.innerHTML += calendarHtml;

	var calendar = document.getElementById("calendar");
	var textfield = document.getElementById("textfield");
	var titleArrow = calendar.getElementsByClassName("calendar-title-arrow");
	var titleMonth = document.getElementById("calendar-title-main-month");
	var titleYear = document.getElementById("calendar-title-main-year");
	var tableBody = document.getElementById("calendar-table-body");

	var date = new Date();
	var day = date.getDate(); // Текущий день, от 1 до 31
	var month = date.getMonth(); // Текущий месяц, от 0 до 11
	var year = date.getFullYear(); // Текущий год (из четырех цифр)

	var selectedMonth = null;
	var selectedYear = null;

	var checkedDay = null;
	var checkedMonth = null;
	var checkedYear = null;

	var minimumYear = 1800;
	var maximumYear = 2400;

	var namesOfMonths = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];

	var numberDaysOfWeek = 7;

	// На всякий случай скрыть календарь
	hideCalendar();

	// Установить обработчик события "получение фокуса" для текстового поля. Если оно получило фокус, то показать календарь
	textfield.onfocus = function() {
		showCalendar();
	}

	// Установить обработчик события "клик левой кнопкой мыши" для всего документа. Если клик был совершен на документе, то убедиться, что он был совершен не на текстовом поле или календаре, и тогда скрыть его. Иначе оставить его видимым
	document.onclick = function(event) {
		
		var target = event.target;

		// Если клик был совершен на текстовом поле, то оставить календарь видимым
	    if(target == textfield) {
	    	return;
	    }

		while(target != document) {

			// Если клик был совершен на календаре, то оставить его видимым
			if(target == calendar) {
				return;
			}

			target = target.parentNode;

		}

	    // Иначе скрыть календарь
	    hideCalendar();

	}

	// Установить обработчик события "клик левой кнопкой мыши" для стрелок выбора месяца. Если на одной из них был совершен клик, то поменять выбранный месяц и заполнить календарь его числами
	for(var i = 0; i < titleArrow.length; i++) {

		titleArrow[i].onclick = function() {

			// Если клик был совершен на стрелке "предыдущий месяц", то уменьшить значение выбранного месяца на единицу
			if(this.id == "calendar-title-arrow-prev-month") {
				selectedMonth--;
				if(selectedMonth < 0) {
					selectedMonth = 11;
					selectedYear--;
					if(selectedYear < minimumYear) {
						selectedYear++;
						selectedMonth = 0;
						return;
					}
				}
			}
			// Иначе увеличить значение выбранного месяца на единицу
			else {
				selectedMonth++;
				if(selectedMonth > 11) {
					selectedMonth = 0;
					selectedYear++;
					if(selectedYear > maximumYear) {
						selectedYear--;
						selectedMonth = 11;
						return;
					}
				}
			}

			// И затем заполнить календарь
			fillCalendar(selectedMonth, selectedYear);

		}

	}

	// Установить обработчик события "клик левой кнопкой мыши" для тела таблицы календаря. Если на нем был совершен клик, то убедиться, что он был совершен на ячейке, записать отмеченную дату в текстовое поле и скрыть календарь
	tableBody.onclick = function(event) {
		
		var target = event.target;

		// Если клик был совершен не на ячейке или ячейка пуста, то прервать выполнение обработчика
		if(target.tagName != "TD" || target.textContent == "") {
			return;
		}

		// Иначе получить отмеченную дату
		checkedDay = Number(target.textContent);
		checkedMonth = selectedMonth;
		checkedYear = selectedYear;

		// При необходимости к значениям дня и месяца добавить нули
		var tempDay = addZeros(checkedDay, 2);
		var tempMonth = addZeros(checkedMonth+1, 2);

		// Установить отмеченную дату в текстовое поле и поле по умолчанию
		var dateString = tempDay + "." + tempMonth + "." + checkedYear;
		textfield.value = dateString;

		defaultDate.value = dateString;

		// И затем скрыть календарь
		hideCalendar();

	}

	function hideCalendar() {
		calendar.style.display = "none";
	}

	function showCalendar() {
		calendar.style.display = "block";
		selectedMonth = month;
		selectedYear = year;
		fillCalendar(selectedMonth, selectedYear);
	}

	function fillCalendar(selectedMonth, selectedYear) {

		// Получить название выбранного месяца
		var selectedMonthText = namesOfMonths[selectedMonth];

		// Записать выбранные месяц и год в заголовок календаря
		titleMonth.textContent = selectedMonthText;
		titleYear.textContent = selectedYear;

		// Получить день недели первого числа выбранного месяца, воскресенье-0, понедельник-1, вторник-2 и т.д.
		var firstWeekday = new Date(selectedYear, selectedMonth, 1).getDay();

		// Получить количество дней в выбранном месяце
		var lastDayOfMonth = new Date(selectedYear, selectedMonth+1, 0).getDate();

		// Очистить тело таблицы календаря перед его заполнением
		tableBody.innerHTML = "";

		// Заполнить тело таблицы календаря номерами дней
		outer:
		for(var r = 0, d = 1; ; r++) {
			tableBody.innerHTML += rowHtml;

			for(var c = 0; c < numberDaysOfWeek; c++) {
				// Если установить первое число выбранного месяца
				if(r == 0 && c == 0) {
					// Если первым числом выбранного месяца является воскресенье
					if(!firstWeekday) {
						c = 6;
					}
					else {
						c = firstWeekday-1;
					}
				}

				// Если установлены не все числа выбранного месяца
				if(d <= lastDayOfMonth) {
					tableBody.rows[r].cells[c].textContent = d++;

					// Если установить текущую дату, в том числе день, месяц и год
					if(selectedYear == year && selectedMonth == month && d == day+1) {
						tableBody.rows[r].cells[c].classList.add("current");
					}

					// Если установить отмеченную дату, в том числе день, месяц и год
					if(selectedYear == checkedYear && selectedMonth == checkedMonth && d == checkedDay+1) {
						var checkedCells = tableBody.getElementsByClassName("checked");

						for(var i = 0; i < checkedCells.length; i++) {
							checkedCells[i].classList.remove("checked");
						}
						
						tableBody.rows[r].cells[c].classList.add("checked");
					}
				}
				else {
					break outer;
				}
			}
		}

	}

	function addZeros(number, numberDigits) {
	    var string = number + "";
	    while(string.length < numberDigits) {
	        string = "0" + string;
	    }
	    return string;
	}

});