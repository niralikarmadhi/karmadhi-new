export class Select {
    init() {
        this.CategorySelect2();
        this.CategorySelect3();
    }
    CategorySelect2() {
        $(document).ready(function () {
            $(".js-select2").select2({
                placeholder:'Select Language',
                closeOnSelect: true,
                minimumResultsForSearch: Infinity,
                allowClear: false,
                dropdownCssClass: "categories-select2",
            });
        })
    }
    CategorySelect3() {
        $(document).ready(function () {
            $(".js-select3").select2({
                closeOnSelect: true,
                minimumResultsForSearch: Infinity,
                allowClear: false,
                dropdownCssClass: "categories-select2"
            });
        })
    }
}