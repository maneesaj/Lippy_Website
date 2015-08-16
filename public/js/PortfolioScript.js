function loop(){

$("#head").fadeIn("slow")
     .animate({marginTop:'-50'},1600)
     .delay(1200)
     .animate({marginTop:'80',},1000, loop)
     .delay(1400);

}

  loop(); 

$('.intro').fadeOut(1500, function() {
    $('.intro').fadeIn(100);
});

function hover(element) {
    $("#logo").setAttribute('src', '../img/logottransition.png');
}
function unhover(element) {
    $("#logo").setAttribute('src', '../img/logo.png');
}

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

$(document).ready(function() {
  var $header = $("header"),
      $clone = $header.before($header.clone().addClass("clone"));

  $(window).on("scroll", function() {
    var fromTop = $("body").scrollTop();
    $('body').toggleClass("down", (fromTop > 200));
  });
});