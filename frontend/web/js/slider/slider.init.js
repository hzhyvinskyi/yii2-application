$(document).ready(function() {
	$(".slider").each(function() {

		var repeats = 1000, // кількість повторювань автоматичного прокручування
			interval = 5, // інтервал в секундах
			repeat = true, // чи треба автоматично прокручувати (true/false)
			slider = $(this),
			repeatCount = 0,
			elements = $(slider).find("li").length;

		$(slider)
			.append("<div class='nav'></div>")
			.find("li").each(function() {
			$(slider).find(".nav").append("<span data-slide='"+$(this).index()+"'></span>");
			$(this).attr("data-slide", $(this).index());
		})
			.end()
			.find("span").first().addClass("on");

		// add timeout

		if (repeat) {
			repeat = setInterval(function() {
				if (repeatCount >= repeats - 1) {
					window.clearInterval(repeat);
				}

				var index = $(slider).find('.on').data("slide"),
					nextIndex = index + 1 < elements ? index + 1 : 0;

				sliderJS(nextIndex, slider);

				repeatCount += 1;
			}, interval * 1000);
		}

	});
});