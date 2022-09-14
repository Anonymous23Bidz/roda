jQuery(function ($) {
  
  $(".form-field i").on('mousedown', function(e) {
    $(this).parent().toggleClass('active');
    $(this).css({'display' : 'none'});
  })

  $(".form-field i").on('mouseup', function(e) {
    $(this).next('input').focus()
    if (!$(this).parent().hasClass('active')) {
      $(this).next('input').blur()
    }
  })

  $(".form-field input").on('focus', function(e) {
    if (!$(this).parent().hasClass('active')) {
      $(this).blur();
    }
  })

  $(".form-field input").on('blur', function(e) {
    $(this).parent().removeClass('active');
    $(".form-field i").css({'display' : 'block'});
  })

  $(document).ready(function(){
    $('.wpml-ls-current-language a').css({'font-weight' : '600'});
  });

  //slick slider participants
  $(document).ready(function(){
    
    $('.slider-nav').slick({
      centerMode: false,
      arrows: true,
      slidesToShow: 4,
      adaptiveHeight: true,
      slidesToScroll: 1,
      prevArrow: '<div class="slick-prev btn btn-prev"><i aria-hidden="true"></i></div>',
      nextArrow: '<div class="slick-next btn btn-next hidden d-none" ><i aria-hidden="true"></i></div>',
      responsive: [
        {
          breakpoint: 992,
          settings: {
            centerMode: true,
            slidesToShow: 3 
          }
        },
        {
          breakpoint: 760,
          settings: {
            centerMode: true,
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 450,
          settings: {
            centerMode: true,
            dots: true,
            slidesToShow: 1,
          }
        },
       ]
    });

    $('.slider-nav').on('afterChange', function (event, slick, currentSlide) {
    
      // if(slick.currentSlide >= slick.slideCount - slick.options.slidesToShow) {
    
        $(".btn-next").removeClass('hidden');
    
      // else {
      //   $(".btn-prev").removeClass('hidden');
      // }
      // if(slick.currentSlide === 0){
      //   $(".btn-next").addClass('hidden');
      // }
      // else {
      //   $(".btn-next").removeClass('hidden');
      // }
    })

      // $(".slick-slide, .btn-next").hover(function(){
      //   $(".btn-next").removeClass('hidden');
      //   },function(){
      //     $(".btn-next").addClass('hidden');
      // })
  });

  $(document).ready(function(){
    $('.slider-effort').slick({
      dots: false,
      infinite: false,
      slidesToShow: 1,
      prevArrow: '<div class="slick-prev btn btn-prev""><i aria-hidden="true"></i></div>',
      nextArrow: '<div class="slick-next btn btn-next"><i aria-hidden="true"></i></div>',
      responsive: [
        {
          breakpoint: 992,
          settings: {
            dots: true,
            arrows: false,
          }
        }
      ]
    });
  });
});

