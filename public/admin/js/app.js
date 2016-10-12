$(document).ready(function() {

    $("#side-menu").metisMenu();

    $(".minimize_btn").click(function() {
        $("body").toggleClass("mini-navbar");
        $('#side-menu').hide();
        setTimeout(function () {
            $('#side-menu').fadeIn(400);
        }, 150);
    });

});
