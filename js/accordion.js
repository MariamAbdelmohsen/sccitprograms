$(document).ready(function(){
   $(".minimizer1").click(function(){
       $(".container1").slideToggle('slow');
   });
    $(".minimizer2").click(function(){
       $(".container2").slideToggle('slow');
   });
    //$(".minimizer3").click(function(){
       //$(".container3").slideToggle('slow');
   //});
});
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}