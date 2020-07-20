$(document).ready(function(){
   $('.tab_menu li').on('click', function(){
      $('.tab_content').removeClass('active')
      $('.tab_menu li').removeClass('active');
      $(this).addClass('active');
      let id = $(this).data('tab');
      $('#'+id).addClass('active');
  })
   $('.responsive').slick({
      dots: true,
      infinite: false,
      speed: 2100,
      slidesToShow: 4,
      slidesToScroll: 4,
      nextArrow: '<span class="setas ion-ios-arrow-forward"></span>',
      prevArrow: '<span class="setas ion-ios-arrow-back "></span>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    $('.modal_body .close, .pdt_close').on('click',function(e){
      e.preventDefault();
      $('.modal').removeClass('active');
  })
  $('.modal_body .close_frete').on('click',function(){
    $('#table_fretes').removeClass('active');
})
  $('.open_modal').on('click',function(e){
       e.preventDefault();
       let id = $(this).data('id');
       $('.modal').removeClass('active');
       $('.modal#'+id).addClass('active');
})
$('.open_frete').on('click',function(e){
  e.preventDefault();
  let id = $(this).data('id');
  $('.modal#'+id).addClass('active');
})
})