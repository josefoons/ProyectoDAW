function attachTopScroller(o) {
    $(window).scroll(function() {
        100 < $(this).scrollTop() ? $(o).fadeIn() : $(o).fadeOut()
    }), $(o).click(function() {
        return $("html, body").animate({
            scrollTop: 0
        }, 1e3), !1
    })
}
$(window).on("load", function() {
    $(".loader").delay(1e3).fadeOut("slow")
}), $(document).ready(function() {
    $("#currentYear").text((new Date).getFullYear()), attachTopScroller(".scrollUp")
});