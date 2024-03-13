

document.addEventListener('click',function(e){
  // Hamburger menu
  if(e.target.classList.contains('hamburger-toggle')){
    e.target.children[0].classList.toggle('active');
  }
})

$(document).ready(function() {

  // Gets the video src from the data-src on each button
  
  var $videoSrc;  
  $('.video-btn').click(function() {
      $videoSrc = $(this).data( "src" );
  });
  console.log($videoSrc);
  
    
    
  // when the modal is opened autoplay it  
  $('#myModal').on('shown.bs.modal', function (e) {
      
  // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
  $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
  })
    
  
  
  // stop playing the youtube video when I close the modal
  $('#myModal').on('hide.bs.modal', function (e) {
      // a poor man's stop video
      $("#video").attr('src',$videoSrc); 
  }) 
      
      
  
  
    
    
  // document ready  
  });
/**
   * Scroll with ofset on page load with hash links in the url
   */
 window.addEventListener('load', () => {
  if (window.location.hash) {
    if (select(window.location.hash)) {
      scrollto(window.location.hash)
    }
  }
});

/**
 * Preloader
 */


    window.onload = function(){
        //hide the preloader
        document.querySelector("#preloader").style.display = "none";
    }

   

  //   $(function() {
  //     var header = $("#header");
  //     $(window).scroll(function() {    
  //         var scroll = $(window).scrollTop();
      
  //         if (scroll >= 1) {
  //             header.removeClass('header').addClass("header-fixed");
  //         } else {
  //             header.removeClass("header-fixed").addClass('header');
  //         }
  //     });
  // });



 //Sticky Navigation

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("header");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}