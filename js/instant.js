/* Only Number Validation */

$('.onlynumber').on('keypress', function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
      return false;
    }
});

/* No Space Validation */

$('.nospace').on('keypress', function (e) {
  if (e.which == 32)
    return false;
});

/* Mobile Number Onchange Validation */

$('body').on('change', '#mobile', function(){

    var mobile = $('#mobile').val();
    var mobile = $('#mobile').val().length;
 
    if(mobile != 10){
 
      $('#mobile_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid mobile number.</p>');
      setTimeout(function(){ $('#mobile_error').html('');}, 5000);
      return false;
 
    }
 
 });
 


/* Instant call  submit */

$('body').on('click', '#instant_submit', function () {

  var mobile_no = $('#mobile').val();
  var allok = 1;

  mobile_no = mobile_no.trim();

  var mobile = $('#mobile').val().length;
  
 
   // Mobile Number Validation
   if(mobile != 10){

    $('#mobile_error').html('<p style="font-size: 11px; color: white; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid mobile number.</p>');
    setTimeout(function(){ $('#mobile_error').html('');}, 5000);
    var allok = 0;
    return false;

  }

  if (allok == 1) {


    var dataString = 'instantSubmit=' + mobile_no ;

    $.ajax({
      type: "POST",
      url: "ajax_function.php",
      data: dataString,
      success: function (data) {

        if (data == 1) {

          $('#mobile').val('');
        

          $('#alertMessage').html('<p style="font-size: 16px; color: white; position: absolute; margin-top: 61px; margin-left: 20px;">Thank you. We will get back to you soon!</p>');
         setTimeout(function () {$('#alertMessage').html(''); location.href = "";}, 5000);
          return false;

        } else {

          $('#alertMessage').html('<p style="font-size: 18px; color: white; position: absolute; margin-top: 61px; margin-left: 20px;">' + data + '</p>');
         setTimeout(function () {$('#alertMessage').html(''); location.href = "";}, 5000);
          return false;

        
        }

      }

    });

  }

});

