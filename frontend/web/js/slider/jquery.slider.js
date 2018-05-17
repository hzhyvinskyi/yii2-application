function sliderJS(index, slider) { // slide
	var ul = $(slider).find("ul"),
		bl = $(slider).find("li[data-slide=" + index + "]"),
		step = $(bl).width();

	$(slider)
		.find("span").removeClass("on")
		.end()
		.find("span[data-slide=" + index + "]").addClass("on");

	$(ul).animate({
		marginLeft: "-" + step * index
	}, 500);
}

$(document).on("click", ".slider .nav span", function(e) { // slider click navigate
	e.preventDefault();
	var slider = $(this).closest(".slider"),
		index = $(this).data("slide");

	sliderJS(index, slider);
});