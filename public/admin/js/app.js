$(document).ready(function() {

    $("#side-menu").metisMenu();

    $(".minimize_btn").click(function() {
        $("body").toggleClass("mini-navbar");
    });

});
