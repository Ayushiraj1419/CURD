$(document).ready(function() {
   $('#myform').submit(function(e){
      e.preventDefault()
      $.ajax({
        url : "./php/insert.php",
        type : "POST",
        data : $(this).serialize(),
        success : function(resp){
          $('#msg').html(resp);
        }
      });
   });
});

