$(function($) {
    
    $(".btnMovetop").on('click', function () {
        $("html, body").animate({scrollTop: 0}, 400);
    });

    // cookie
    $(".btnCookie").click(function(event) {
        event.preventDefault();
        $(".cookie").hide('slow/400/fast', function() {});
    });

    // button dropdown
    $('.btn_dropdown').hover( function() {
        $('.arrow').toggleClass('active');
    });

    $('.btn_dropdown').on('click', function() {
        $('.arrow').toggleClass('active');
    });

    // $('.btn_dropdown3').hover( function() {
    //     $('.arrow').toggleClass('active');
    // });

    // $('.btn_dropdown3').on('click', function() {
    //     $('.btn_dropdown3 .arrow').toggleClass('active');
    // });

    // side menu
    $('#menu_sideleft').metisMenu();

    $('.acc_ctrl').on('click', function(e) {
        e.preventDefault();
        if ($(this).hasClass('active')) {
          $(this).removeClass('active');
          $(this).next()
          .stop()
          .slideUp(300);
        } else {
          $(this).addClass('active');
          $(this).next()
          .stop()
          .slideDown(300);
        }
    });


});

 $(document).ready(function() {
    
    $('.register').click(function(){
       var email = $('#email').val();
       var name = $('#name').val();
       var vorname = $('#vorname').val();
       var unternehmen = $('#unternehmen').val();
       var telephone = $('#telephone').val();
       
       $.cookie('email', email);
       $.cookie('name', name);
       $.cookie('vorname', vorname);
       $.cookie('unternehmen', unternehmen);
       $.cookie('telephone', telephone);
       
       
//       result.person.email = email;
//       result.person.name = name;
//       result.person.vorname = vorname; 
    })
    
    $('.owl_banner').owlCarousel({
        items: 1,
        animateOut: 'fadeOut',
        loop: true,
        margin: 10,
        nav: true
    });

    $('.owl_brands').owlCarousel({
        loop: true,
        margin: 0,
        responsive:{
            0:{
                items:1,
                dots: true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items: 6,
            }
        }
    });

});