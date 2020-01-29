$(document).ready(() => {

    var divId;

    $('.nav-link, .navbar-brand').click(function () {
        divId = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(divId).offset().top - 80
        }, 1000);
    });

})
