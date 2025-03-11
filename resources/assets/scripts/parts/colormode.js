export class ColorMode {
	init() {
		this.Color();
	}

	Color() {
		$("#toggle-mode").click(function () {
			if ($("html").hasClass("light-mode")) {
				localStorage.setItem("theme", "dark");
				$("html").removeClass("light-mode");
			} else {
				localStorage.setItem("theme", "light");
				$("html").addClass("light-mode");
			}
		});
		$(window).ready(function () {
			let theme = localStorage.getItem("theme", "light");
			if (theme == "light") {
				$("html").addClass("light-mode");
                $("#toggle-mode").prop("checked", true);
			} else {
				$("html").removeClass("light-mode");
                $("#toggle-mode").prop("checked", false);
			}
		});
	}
}
