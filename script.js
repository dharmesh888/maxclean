
////////////////////////////headerimg/////////////////////

  AOS.init();

///////////////////COUNTER//////////////////////////////////////

  $('.counter').counterUp({
    delay: 15,
    time: 1000
});

  
  $(document).ready(function(){
$('.card-tag').click(function(){

  if($("this").find("i.fas").hasClass("fa-greater-than"))
  {
    $(this).find("i.fas").removeClass("fa-greater-than");
        $(this).find("i.fas").addClass("fa-angle-down");

  }
  else{
    $(this).find("i.fas").removeClass("fa-angle-down");
        $(this).find("i.fas").addClass("fa-greater-than");
  }
});
  });

////////////////////////////////////client slide////////////////////////////////////////
$('.cleint-slider').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows:false,
});

  /////////////////////////OUR CUSTOMER////////////////////////////
$(document).ready(function(){

$('.our-customer').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows:false,
  dots:false,
  pauseOnHover:false,
  responsive:[
  {
    breakpoint:768,
    settings:{
      slidesToShow:3
    }
  },
  {
    breakpoint:520,
    settings:{
      slidesToShow:2
    }
  }]
});
});
