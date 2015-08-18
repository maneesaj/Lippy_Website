function loop(){
$("#head").fadeIn("slow")
     .animate({marginTop:'-50'},1600)
     .delay(1200)
     .animate({marginTop:'80',},1000, loop)
     .delay(1400);

}
  loop(); 

function Hide_Overlay(){
    $("#overlay").css("visibility","hidden");

}

function shutit(){
    
    $("#lippy_box").css("visibility","hidden");
    Hide_Overlay();
    console.log("Clicked");
}

$('.intro').fadeOut(1500, function() {
    $('.intro').fadeIn(100);
});

/* Overlay */
function OverlayDisplay(event){
      event.preventDefault();
var docHeight = $(document).height();
    document.getElementById("lippy_box").style.visibility = "visible";
   $("body").append("<div id='overlay'></div>");

   $("#overlay")
      .height(docHeight)
      .css({
         'opacity' : 0.4,
         'position': 'absolute',
         'top': 0,
         'left': 0,
         'background-color': 'black',
         'width': '100%',
         'z-index': 600
      });
}

/* Sticky Header */
  var $header = $("header"),
      $clone = $header.before($header.clone().addClass("clone"));

  $(window).on("scroll", function() {
    var fromTop = $("body").scrollTop();
    $('body').toggleClass("down", (fromTop > 200));
  });



