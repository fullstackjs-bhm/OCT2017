var navBar = $('#navBar');
var topofNav = navBar.offset().top; //gets offset of header
var height = navBar.outerHeight(); //gets height of header
var navSlide = true;

$(window).scroll(function(){
  if($(this).scrollTop() > (topofNav + height) && navSlide){
    $('#scrollNav').stop().animate({top: 0},500);
    navSlide = false;
  }
  else if($(window).scrollTop() < (topofNav + height) && !navSlide){
    $('#scrollNav').stop().animate({top: -60}, 500);
    navSlide = true;
    $('#dropMenu').slideUp("slow", function(){}); //Rehides the collapsed nav menu once you scroll back to the top
  }
});

// //Shows or hides the collapsed drop down menu
$('#menu-btn').click(function(e){
		e.preventDefault(e);
		$('#dropMenu').slideToggle('menu-hidden');
});