import $ from "jquery";
import "@popperjs/core";
import "bootstrap/dist/js/bootstrap";
import "select2/dist/js/select2.min.js";
// import "../../node_modules/masonry-layout/dist/masonry.pkgd.min";

import { App } from "./parts/app.js";
import { Plugins } from "./parts/plugins.js";
import { Parts } from "./parts/parts.js";
import { Truncate } from "./parts/truncate.js";
import { Accordion } from "./parts/accordion.js";
import { Privacy } from "./parts/privacy.js";
import { ColorMode } from "./parts/colormode.js";
import { Servicecards } from './parts/servicecards.js';
import { Form } from "./parts/form.js";
import { Select } from "./parts/select.js";
import { Gsapanimation } from "./parts/gsapanimation.js";
import { Header } from "./parts/header.js";
// export for others scripts to use
window.$ = $;
window.jQuery = jQuery;

$(function () {
	window.windowWidth = $(window).width();
	window.windowHeight = $(window).height();

	window.isiPhone = navigator.userAgent.toLowerCase().indexOf("iphone");
	window.isiPad = navigator.userAgent.toLowerCase().indexOf("ipad");
	window.isiPod = navigator.userAgent.toLowerCase().indexOf("ipod");

	//Functions List Below

	window.app = new App();
	window.app.init();

	window.plugins = new Plugins();
	window.plugins.init();

	window.parts = new Parts();
	window.parts.init();

	window.truncate = new Truncate();
	window.truncate.init();

	window.accordion = new Accordion();
	window.accordion.init();

	window.privacy = new Privacy();
	window.privacy.init();

	window.privacy = new Privacy();
	window.privacy.init();

	window.colormode = new ColorMode();
	window.colormode.init();

	window.servicecards = new Servicecards();
	window.servicecards.init();

	window.form = new Form();
	window.form.init();

	window.select = new Select();
	window.select.init();

	window.header = new Header();
	window.header.init();

	window.gsapanimation = new Gsapanimation();
	window.gsapanimation.init();

	$(document).on("click", ".team-card", function () {
		var memberId = $(this).data("id");
		console.log("memberId", memberId);
		$(".carousel-item").removeClass("active");
		$("#" + memberId).addClass("active");
	});
});


// ===========================================================================

const carouselElement = document.querySelector("#modalCarouselControls");
const carouselInstance = new bootstrap.Carousel(carouselElement, {
	interval: 2000, // Slide interval (optional)
	wrap: false, // Disable infinite loop
});


