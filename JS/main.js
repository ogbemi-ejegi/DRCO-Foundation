//Responsive Nav
//alert('HELLO WORLD');
$(document).ready(function(){
  $("#contactForm").on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "includes/contact.php",
        processData: false,
        cache: false,
        contentType: false,
        data: new FormData(this),
        success: function(response){
            $("#responseText").html(response);
        }
    });
  });
});
