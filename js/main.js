$(document).ready(function () {

    $('main').addClass('main');
    $('footer').addClass('footer');
    $('header').addClass('menu-bar');
    $('nav').addClass('navbar navbar-expand-lg navbar-light');
    $('table').addClass('table table-sm col-xl-6');
    $('h2').addClass('main__title');
    $('label').addClass('main__text');
    $('textarea').addClass('form-control');
    $('select').addClass('form-control col-md-8');
    $('section').addClass('section');
    $('section > p').addClass('main__text');
    $('section > img').addClass('main__img col-xl-12');
    $('section > ul > li').addClass('main__text');
    $('aside').addClass('aside col-xl-2');
    $('aside > p').addClass('main__text main__text_bold');
    $('aside > ul > li').addClass('aside__item main__text');
    $('aside > ul > li > a').addClass('aside__link');
    $('#navbarNavDropdown').addClass('collapse navbar-collapse d-flex justify-content-end');
    $('#navbarNavDropdown > ul').addClass('navbar-nav');
    $('#navbarNavDropdown > ul > li').addClass('nav-item');
    $('#navbarNavDropdown > ul > li > a').addClass('nav-link');
    $('#navbarDropdownMenuLink').addClass('dropdown-toggle');
    $('#preloader').addClass('visible');
    $('#myForm').addClass('form');
    $('td').addClass('main__text');
    $('td:first-child').addClass('main__text_gray');
    $('p > a').addClass('main__link');
    $('div.col-xl-2 > p').addClass('footer__text');
    $('div.form-group > input').addClass('form-control');
    $('div.form-check > input').addClass('form-check-input');
    $('div.form-check > label').addClass('form-check-label');
    $('div.wrapper > img').addClass('card-img-top card__img');
    $('div.card-body > h5').addClass('card-title');
    $('div.card-body > p').addClass('card-text');
    $('div.card__footer > button').addClass('btn btn-primary main__btn btn__text');
    $('div.card__footer > p').addClass('main__text main__text_bold');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            $('.up').addClass('up-show');
        } else {
            $('.up').removeClass('up-show');
        }
    });
    $('.up').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

    setInterval(function() {
        $.ajax({
            url: "../clock.php",
            cache: false,
            success: function (html) {
                $("#MyClockDisplay").html(html);
            }
        });
    }, 1000);

    function loadData() {
        let preloader = jQuery.Deferred();

        setTimeout(function() {
            preloader.resolve();
        }, 2000);

        setTimeout(function() {
            preloader.reject();
        }, 2000 );

        return preloader.promise();
    }

    $.when(loadData()).then(
        function() {
            $('#preloader').addClass('hidden');
            $('#preloader').removeClass('visible');
        }
    );
    
    $(".aside__link")
        .on("mouseenter", function () {
            $(this).css({
                "text-decoration": "none",
                "color": "#33a9e0"
            });
        })
        .on("mouseleave", function () {
            let styles = {
                color: "#333333"
            };
            $(this).css(styles);
        });

    setTimeout(function() {
        swal("Подпишитесь на нас ", "");
    }, 5000);
});