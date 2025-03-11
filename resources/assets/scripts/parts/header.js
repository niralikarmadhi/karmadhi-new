export class Header {
    init() {
        this.HeaderFixed();
        this.HeaderResponsive();
    }
    HeaderFixed() {
        // header fixed js
        var prevScrollPos = window.pageYOffset || document.documentElement.scrollTop;
		$(window).scroll(function () {
			var sticky = $(".header"),
				scroll = $(window).scrollTop();
			if (scroll >= 50) {
				sticky.addClass("header-fixed");
				sticky.removeClass("header-fixed-os");
			} else {
				sticky.removeClass("header-fixed");
				sticky.addClass("header-fixed-os");
			}
			var currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;
			if (prevScrollPos > currentScrollPos || currentScrollPos === 0) {
				$(".header").removeClass("hidden");
			} else {
				$(".header").addClass("hidden");
			}
			prevScrollPos = currentScrollPos;
		});
    }
    HeaderResponsive(){
        $(document).ready(function(){
            $('.menu-icon').click(function(){
                if(!$(this).hasClass('close-header')){
                    $(this).addClass('close-header');
                    $('body').addClass('overflow-hidden');
                    $('.header').addClass('header-open');
                }else{
                    $(this).removeClass('close-header');
                    $('body').removeClass('overflow-hidden');
                    $('.header').removeClass('header-open');
                }
            })
            $('.sub-menu-link').click(function(){
                let sub_menu = $(this).find('.sub-menu')
                if(!sub_menu.hasClass('active-sub-menu')){
                    sub_menu.addClass('active-sub-menu');
                }else{
                    sub_menu.removeClass('active-sub-menu');
                }
            })
        })
    }
}