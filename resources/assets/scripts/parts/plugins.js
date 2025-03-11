import "slick-carousel";

export class Plugins {
	init() {
		this.TeamSlider();
	}
	TeamSlider() {
		$(".team-section-slider").slick({
			slidesToShow: 3,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 2000,
		});
	}
}
