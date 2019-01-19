$('.talk-aboutme').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    // autoplay: true,
    autoplaySpeed: 2000,
    dots:true,
    edge: 'slick',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  $('#list-project').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    edge: 'slick',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  $('.client-logo').slick({
    infinite: true,
    slidesToShow: 9,
    variableWidth: true,
    slidesToScroll: 1,
    autoplaySpeed: 300
  });

  $('#friend').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    edge: 'slick',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });