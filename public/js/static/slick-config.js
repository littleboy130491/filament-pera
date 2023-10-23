/* Start Carousel */
/* from https://kenwheeler.github.io/slick/ */

$('.slider').slick({
    autoplay: true,
    autoplaySpeed: 1500,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    
      {
        breakpoint: 921,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]


  });

  $('.s-youtube').slick({
     autoplay: true,
    autoplaySpeed: 1500,
    infinite: true,
    slidesToShow: 1, 
    slidesToScroll: 1
  })
 
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object


