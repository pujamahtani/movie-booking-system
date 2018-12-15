
//owl-carousel
$(function(){
	//login
$('#myModal').modal('show');

function close(){
$('#myModal').modal('hide');
}
$(".owl-carousel").owlCarousel({
         items:1,
         autoplay: true,
         smartSpeed: 700,
         loop: true,
         autoplayHoverPause: true,
      
     });

});

	