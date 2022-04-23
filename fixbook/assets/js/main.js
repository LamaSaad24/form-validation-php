// add active class to links in navbar on click 
$('.nav-link').click( function (){
    $('.nav-link').removeClass('active')
    $(this).addClass('active')
})


//summernote
$(document).ready(function() {
    $('#summernote').summernote();
  });