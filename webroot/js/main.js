//  controle menu "ativo"
$(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
        $('header').addClass('active');
    }
    if ($(window).scrollTop() < 50) {
        $('header').removeClass('active');
    }
});
// fim controle menu "ativo"

// fim scroll suave para elemento na página

//  controle menu mobile
$('.toggleMobile').click(function () {
    $('.header-menu, .toggleMobile, .fancyMobile').toggleClass('active');
    $('html').toggleClass('hidden');
});

$('.fancyMobile').click(function () {
    $('.header-menu, .toggleMobile, .fancyMobile').removeClass('active');
    $('html').removeClass('hidden');
});

var footerToggle = $('.collapse');

footerToggle.on('click', function () {
    $(this).toggleClass('active');  

});
