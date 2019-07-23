$(document).ready(function(){
  //Navbar Responsive
$('#hamburgericon').click(function(){
   $('.navbar .hamburger i.fa-bars').css('display','none');
   $('.navbar .hamburger i.fa-times').css('display','inline-block');
   $('.navbar_responsive').css('display', 'block');

});
$('#timesicon').click(function(){
   $('.navbar .hamburger i.fa-bars').css('display','inline-block');
   $('.navbar .hamburger i.fa-times').css('display','none');
   $('.navbar_responsive').css('display', 'none');

});

//Slick Slider 

$(".slider1").slick({
  infinite:true,
  draggable: false,
  fade: true,
  dots: true,
  autoplay: true,
  speed: 2000,
  autoplaySpeed: 7000,
  pauseOnDotsHover:true,
  pauseOnHover:false,
  cssEase: 'linear',
  prevArrow: $('#arrow_slick_left'),
  nextArrow: $('#arrow_slick_right')
});

//Magnific Popup
 $('.popupgallery').magnificPopup({
    type: 'image',
    removalDelay: 400,
    closeOnContentClick: true,
    overflowY:"hidden",
    fixedContentPos: true,
    fixedBgPos: true,
    midClick: true,
    closeBtnInside: true,
    image: {
      verticalFit: false,
      },
    gallery: {
    enabled: true,
    navigateByImgClick: true,
    preload: [0,1]
      },
    callbacks: {
    beforeOpen: function() { 
       this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  }


 }); 
//Parallax
    var $window = $(window);
    if($('section[data-type="background"]').length){
        $('section[data-type="background"]').each(function(){

            var $obj = $(this);
            var offset = $obj.offset().top;

            $(window).scroll(function()
            {
                offset = $obj.offset().top;

                if ($window.scrollTop() > (offset - window.innerHeight))
                {
                    var yPos = -(($window.scrollTop() - offset) / 2 );
                    var coords = '50% ' + ( yPos ) + 'px';
                    $obj.css({ backgroundPosition:  coords });
                }
            });
            $(window).resize(function()
            {
                offset = $obj.offset().top;
            });
        });
    }

    // Button Up
    var $btnUp = $(".btn-up")
    $(window).on("scroll", function(){
      if ($(window).scrollTop()>= 20){
        $btnUp.fadeIn();
      }else{
        $btnUp.fadeOut();
      }
    });
    $btnUp.on("click", function(){
      $("html,body").animate({scrollTop:0}, 900)
    });
});
  
 //Parallax on page About

(function($) {
  $.fn.extend({
    jParallax: function(opt) {
      var defaults = { moveFactor: 5, targetContainer: 'body' },
        o = $.extend(defaults, opt);
      return this.each(function() {
        var background = $(this);
        $(o.targetContainer).on('mousemove', function(e){
          mouseX = e.pageX;
          mouseY = e.pageY;
          windowWidth = $(window).width();
          windowHeight = $(window).height();
          percentX = (0-((mouseX/windowWidth)*o.moveFactor) - (o.moveFactor/2)+o.moveFactor)/2;
          percentY = (0-((mouseY/windowHeight)*o.moveFactor) - (o.moveFactor/2)+o.moveFactor)/2;
          background[0].style.transform = "translate("+percentX+"%,"+percentY+"%)";
        });
      });
    }         
  });
}(jQuery));

$('.bg1').jParallax({ moveFactor: 15, targetContainer: '.parallax' });
