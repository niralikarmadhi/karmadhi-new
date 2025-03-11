export class Form {
	init() {
		this.fileInput();
	}

	fileInput() {
		$(document).ready(function () {
			$("#file-input").on("change", function () {
				var fileName = $(this).val().split("\\").pop();

				if (fileName) {
					$("#file-name-display").text(fileName);
				} else {
					$("#file-name-display").text("Upload");
				}
				setTimeout(() => {
					$(".wpcf7-not-valid-tip").each(function () {
						$(this).insertAfter($(this).closest(".file-uploader"));
					});
				}, 100);
			});
		});
	}
}
