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
          slidesToShow: 2
        }
      },
      {
        breakpoint: 786,
        settings: {
          slidesToShow: 1
        }
      }
    ]
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
          slidesToShow: 2
        }
      },
      {
        breakpoint: 786,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  //when load end
  var maxHeight=0;
  $(".client-content").each(function(){
    if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
 });
 
 $(".client-content").height(maxHeight);