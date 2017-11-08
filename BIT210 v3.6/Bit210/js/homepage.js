/*This is to implement the feature when the navbar scroll until the value given
, the navbar background will change from transparent to black color and
when it scroll back to top, it change back to transparent
*/
var amountScrolled = 700;

$(window).scroll(function() {
    if ( $(window).scrollTop() > amountScrolled ) {
        $('a.scroll_top ').fadeIn('slow');
    } else {
        $('a.scroll_top ').fadeOut('slow');
    }
});

$('a.scroll_top ').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 7000);
    return false;
});

$(".toggle-icon").click(function() {
  $('#nav-container').toggleClass("pushed");
});

/*This function works when the button at bottom right corner of the
  the homepage is clicked, it add on the css class to run the animation
  to scroll up to the top of the page 
*/
function toggleColor() {
  var myButtonClasses = document.getElementById("btn-scroll-top").classList;


  myButtonClasses.add("bounce-in-up-animation");

}
