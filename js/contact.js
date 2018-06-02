/**
*JS for opening each main div individually
*/

/*$(document).ready(function(){
	$('.mainToggle').hide();
	$('.toggle').click(function(){
		var selection1 = $(this).attr('id');
		//$('#show').append(selection1);
		$('.mainToggle#' + selection1).show(function(){
			if(selection1 == 'directory'){
				$(".adminMenu:not(#menu1)").hide();
				$('button.menu').click(function(){
					var selection2 = $(this).data('category');
					$('.adminMenu#' + selection2).show();
					//$('#show').append(selection2);
					$(".adminMenu:not(#" + selection2 + ")").hide();
				});
			};
			$(".mainToggle:not(#" + selection1 + ")").hide()
		});
	});
});
   */

//upon page loading, show admin, hide advisor, instructor, department
    $(document).ready(function(){
        $("#menu1").show();
        $("#menu3").hide();
        $("#menu4").hide();
    });
    
    //when clicking advisor, hide instructor, department
    $(document).ready(function(){
        $(".faculty-nav2").click(function(){
        $("#menu1").fadeIn("slow");
        $("#menu3").hide();
        $("#menu4").hide();
    });
});
    
    //when clicking instructor, hide admin, advisor, department
    $(document).ready(function(){
        $(".faculty-nav3").click(function(){
        $("#menu3").fadeIn();
        $("#menu3").fadeIn("slow");
        $("#menu1").hide();
        $("#menu4").hide();
    });
});
    //when clicking department, hide admin, advisor, instructor
    $(document).ready(function(){
        $(".faculty-nav4").click(function(){
        $("#menu4").fadeIn();
        $("#menu4").fadeIn("slow");
        $("#menu1").hide();
        $("#menu3").hide();
    });
});

  // When the user scrolls down 20px from the top of the document, show the button
   //     window.onscroll = function() {scrollFunction()};
   //        function scrollFunction() {
   //         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
   //         document.getElementById("myBtn").style.display = "block";
   //         } else {
   //         document.getElementById("myBtn").style.display = "none";
   //             }
   //     }
        // When the user clicks on the button, scroll to the top of the document
   //     function topFunction() {
   //         document.body.scrollTop = 0; // For Chrome, Safari and Opera 
   //         document.documentElement.scrollTop = 0; // For IE and Firefox
   //     }
	