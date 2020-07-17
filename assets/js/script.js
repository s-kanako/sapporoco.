$(function() {
    $('.toggle').click(function() {
        $(this).toggleClass('active');        
        if ($(this).hasClass('active')) {
            $('.header_list').addClass('open');
            $('.toggle span').addClass('active');
        } else {
            $('.header_list').removeClass('open');
            $('.toggle span').removeClass('active');

        }
        $('body').toggleClass('fixed');
    });

    var Height = $('.row').outerHeight(); 

    $(window).scroll(function() {
        if ($(this).scrollTop() > Height) {
            $('.header_content').css('background-color', 'rgba(255,255,255,0.8)'); 
        } else {
            $('.header_content').css('background', 'none'); 
        }
    });



});

