$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });

});

$(window).scroll(function(event) {
	function footer()
    {
        var scroll = $(window).scrollTop();
        if(scroll >50)
        {
            $(".footer-hide-show").fadeIn("slow").showClass("show");
        }
        else
        {
            $(".footer-hide-show").fadeOut("slow").removeClass("show");
        }

        clearTimeout($.data(this, 'scrollTimer'));
        $.data(this, 'scrollTimer', setTimeout(function() {
            if ($('.footer-hide-show').is(':hover')) {
	        	footer();
    		}
            else
            {
            	$(".footer-hide-show").fadeOut("slow");
            }
		}, 2000));
    }
    footer();
});
