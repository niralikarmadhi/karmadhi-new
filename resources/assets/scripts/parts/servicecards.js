export class Servicecards {
    init() {
        this.ServiceCardHover();
    }

    ServiceCardHover() {
        $(document).ready(function () {
            $('.service-content-img').hide().eq(0).show();

            $('.service-content-cards').hover(
                function () {
                    let index = $(this).index('.service-content-cards');
                    $('.service-content-img').hide();
                    $('.service-content-img').eq(index).show(); 
                },
                function () {
                    $('.service-content-img').hide().eq(0).show();
                }
            );
        });

    }
}