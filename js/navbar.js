$(document).ready(() => {

    var divId;

    $('.nav-link').click(function () {
        divId = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(divId).offset().top - 70
        }, 1000);
    });

})
