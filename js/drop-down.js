
$(document).ready(function(){
            $("#mobile-nav").click(function(){ 
                $(this).next(".menu-sccit-container").slideToggle('slow');
            });
            $("#drop-sub").click(function(){ 
                $("#sub-nav").slideToggle('slow');
            });
			
			$('.flexslider').flexslider({
    			animation: "slide"
			});
        });


