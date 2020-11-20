$(document).ready(function () {

    // *Селекторы

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
});