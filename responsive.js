$(function() {
    $('.media-icon-hidden').click(function() {
        var header_media = $('.art-header-media');
        if(header_media.hasClass('show-media-item')) {
            header_media.removeClass('show-media-item');
            $(this).text('+ Contact');
        }
        else {
            header_media.addClass('show-media-item');
            $(this).text('X');
        }
    });

    $('.main-nav-hidden img').click(function() {
        var menu = $('.res-menu');
        if(menu.is(':visible')) {
            $(this).attr('src', 'images/collep.png');
            menu.slideUp();
        }
        else {
            $(this).attr('src', 'images/cross_menu.png');
            menu.slideDown();
        }
    });

    $('.colleps-slide-menu').click(function() {
        var element = $(this).parents('li').find('ul').first();
        if(element.is(':visible')) {
            element.slideUp();
        }
        else {
            element.slideDown();
        }
    });
});