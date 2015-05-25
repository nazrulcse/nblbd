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

    $('.main-nav-hidden').click(function() {
        var menu = $('.art-menu');
        if(menu.is(':visible')) {
            menu.slideUp();
        }
        else {
            menu.slideDown();
        }
    });
});