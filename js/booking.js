/* Booking Page*/


/* Only Number Validation */

$('.onlynumber').on('keypress', function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
      return false;
    }
});


/* No Space Validation */

$('.nospace').on('keypress', function(e) {
  if (e.which == 32)
    return false;
});


/* Only Letters Validation */

$(".onlyLetters").keypress(function(event){
    var inputValue = event.which;
    // allow letters and whitespaces only.
    if(!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)) { 
        event.preventDefault(); 
    }
});


/* Fullname Onchange Validation */

$('body').on('change', '#book_fullname', function(){

   var book_fullname = $('#book_fullname').val();
   book_fullname = book_fullname.trim();

   var fullnameCheck = validateOnlyCharacter(book_fullname);

   if(booking_fullname == ''){

      $('#book_fullname_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
       setTimeout(function(){ $('#book_fullname_error').html('');}, 5000);
       return false;

   }else{

     if(fullnameCheck == false){

       $('#book_fullname_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
       setTimeout(function(){ $('#book_fullname_error').html('');}, 5000);
       return false;

     }

   }

});



/* Email Id Onchange Validation */

$('body').on('change', '#book_email', function(){

   var book_email = $('#book_email').val();
   book_email = book_email.trim();

   var emailcheck = validateEmail(book_email);

   if(book_email == ''){

      $('#book_email_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
       setTimeout(function(){ $('#book_email_error').html('');}, 5000);
       return false;

   }else{

     if(emailcheck == false){

       $('#book_email_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
       setTimeout(function(){ $('#book_email_error').html('');}, 5000);
       return false;

     }

   }

});


/* Mobile Number Onchange Validation */

$('body').on('change', '#book_mobileno', function(){

   var book_mobileno = $('#book_mobileno').val();
   var mobile = $('#book_mobileno').val().length;

   if(mobile != 10){

     $('#book_mobile_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid mobile number.</p>');
     setTimeout(function(){ $('#book_mobile_error').html('');}, 5000);
     return false;

   }

});


/* City Onchange Validation */

$('body').on('change', '#book_city', function(){

   var book_city = $('#book_city').val();
   book_city = book_city.trim();

   var cityCheck = validateOnlyCharacter(book_city);

   if(book_city == ''){

      $('#book_city_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a city.</p>');
       setTimeout(function(){ $('#book_city_error').html('');}, 5000);
       return false;

   }else{

     if(cityCheck == false){

       $('#book_city_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
       setTimeout(function(){ $('#book_city_error').html('');}, 5000);
       return false;

     }

   }

});


/* GST Onchange Validation */

$('body').on('change', '#book_gst', function(){

   var book_gst = $('#book_gst').val();
   book_gst = book_gst.trim();

   var gstcheck = validateGST(book_gst);

   if(book_gst == ''){

      $('#book_gst_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a GST No.</p>');
       setTimeout(function(){ $('#book_gst_error').html('');}, 5000);
       return false;

   }else{

     if(gstcheck == false){

       $('#book_gst_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid GST No.</p>');
       setTimeout(function(){ $('#book_gst_error').html('');}, 5000);
       return false;

     }

   }

});


$('body').on('click', '#submit_paynow', function () {

  var book_fullname = $('#book_fullname').val();
  var book_email = $('#book_email').val();
  var book_mobileno = $('#book_mobileno').val();
  var mobile = $('#book_mobileno').val().length;
  var book_city = $('#book_city').val();
  var book_special_request = $('#book_special_request').val();
  var book_compname = $('#book_compname').val();
  var book_gst = $('#book_gst').val();
  var book_address = $('#book_address').val();
  var book_state = $('#book_state').val();
  var book_state_id = $('#book_state_id').val();
  var bookingId = $('#bookingId').val();
  var allok = 1;

  book_fullname = book_fullname.trim();
  book_email = book_email.trim();
  book_gst = book_gst.trim();
  book_city = book_city.trim();

  var fullnameCheck = validateOnlyCharacter(book_fullname);
  var emailcheck = validateEmail(book_email);
  var gstcheck = validateGST(book_gst);
  var cityCheck = validateOnlyCharacter(book_city);

  if(book_fullname == ''){

     $('#book_fullname_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
     setTimeout(function(){ $('#book_fullname_error').html('');}, 5000);
     $('#booking_error').html('<p style="font-size: 12px; color: red; margin-top: 5px; margin-left: 0; text-align: center;">Please fill booking details.</p>');
     setTimeout(function(){ $('#booking_error').html('');}, 5000);
     var allok = 0;
     return false;

  }else{

   if(fullnameCheck == false){

     $('#book_fullname_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
     setTimeout(function(){ $('#book_fullname_error').html('');}, 5000);
     $('#booking_error').html('<p style="font-size: 12px; color: red; margin-top: 5px; margin-left: 0; text-align: center;">Please fill booking details.</p>');
     setTimeout(function(){ $('#booking_error').html('');}, 5000);
     var allok = 0;
     return false;

   }

  }
  

  if(book_email == ''){

     $('#book_email_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
     setTimeout(function(){ $('#book_email_error').html('');}, 5000);
     $('#booking_error').html('<p style="font-size: 12px; color: red; margin-top: 5px; margin-left: 0; text-align: center;">Please fill booking details.</p>');
     setTimeout(function(){ $('#booking_error').html('');}, 5000);
     var allok = 0;
     return false;

  }else{

   if(emailcheck == false){

     $('#book_email_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
     setTimeout(function(){ $('#book_email_error').html('');}, 5000);
     $('#booking_error').html('<p style="font-size: 12px; color: red; margin-top: 5px; margin-left: 0; text-align: center;">Please fill booking details.</p>');
     setTimeout(function(){ $('#booking_error').html('');}, 5000);
     var allok = 0;
     return false;

   }

  }


  if(mobile != 10){

    $('#book_mobile_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid mobile number.</p>');
    setTimeout(function(){ $('#book_mobile_error').html('');}, 5000);
    $('#booking_error').html('<p style="font-size: 12px; color: red; margin-top: 5px; margin-left: 0; text-align: center;">Please fill booking details.</p>');
    setTimeout(function(){ $('#booking_error').html('');}, 5000);
    var allok = 0;
    return false;

  }


  if(book_city == ''){

      $('#book_city_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a city.</p>');
      setTimeout(function(){ $('#book_city_error').html('');}, 5000);
      $('#booking_error').html('<p style="font-size: 12px; color: red; margin-top: 5px; margin-left: 0; text-align: center;">Please fill booking details.</p>');
      setTimeout(function(){ $('#booking_error').html('');}, 5000);
      var allok = 0;
      return false;

  }else{

   if(cityCheck == false){

      $('#book_city_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
      setTimeout(function(){ $('#book_city_error').html('');}, 5000);
      $('#booking_error').html('<p style="font-size: 12px; color: red; margin-top: 5px; margin-left: 0; text-align: center;">Please fill booking details.</p>');
      setTimeout(function(){ $('#booking_error').html('');}, 5000);
      var allok = 0;
      return false;

   }

  }

  if(book_gst != ''){

     if(gstcheck == false){

       $('#book_gst_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid GST No.</p>');
       setTimeout(function(){ $('#book_gst_error').html('');}, 5000);
       $('#booking_error').html('<p style="font-size: 12px; color: red; margin-top: 5px; margin-left: 0; text-align: center;">Please fill booking details.</p>');
       setTimeout(function(){ $('#booking_error').html('');}, 5000);
       var allok = 0;
       return false;

     }

  }

  if(book_state_id == 0){

     $('#book_state_error').html('<p style="font-size: 12px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a state.</p>');
     setTimeout(function(){ $('#book_state_error').html('');}, 5000);
     $('#booking_error').html('<p style="font-size: 12px; color: red; margin-top: 5px; margin-left: 0; text-align: center;">Please fill booking details.</p>');
     setTimeout(function(){ $('#booking_error').html('');}, 5000);
     var allok = 0;
     return false;

  }

  if (allok == 1) {

    $('#submit_paynow').hide();
    $('#submit_paynow_dummy').show();

    var dataString = 'propertybooking='+book_fullname+'&book_email='+book_email+'&book_mobileno='+book_mobileno+'&book_city='+book_city+'&book_special_request='+encodeURIComponent(book_special_request)+'&book_compname='+encodeURIComponent(book_compname)+'&book_gst='+book_gst+'&book_address='+encodeURIComponent(book_address)+'&book_state='+encodeURIComponent(book_state)+'&book_state_id='+book_state_id+'&bookingId='+bookingId;
    
    $.ajax({
      type: "POST",
      url: mainlink+"ajax_function.php",
      data: dataString,
      success: function (data) {

        $('#submit_paynow_dummy').hide();
        $('#submit_paynow').show();

        const myObj = JSON.parse(data);

        if(myObj.status == 1){

          window.location.assign("thank-you/"+myObj.msg);

        } else {

          $('#booking_error').html('<p style="font-size: 12px; color: red; margin-top: 5px; margin-left: 0; text-align: center;">'+myObj.msg+'</p>');
          setTimeout(function(){ $('#booking_error').html('');}, 5000);
          return false;

        }

      }

    });

  }

});



/* Only Character Validation */

function validateOnlyCharacter(inputtxt) {

  var validRegex = /^[A-Za-z_ ]+$/;

  if (validRegex.test(inputtxt)) {

    return true;

  } else {

    return false;

  }

}


/* Only Character & Number Validation */

function validateOnlyCharacterNumber(inputtxt) {

  var validRegex = /^[0-9a-zA-Z]+$/;

  if (validRegex.test(inputtxt)) {

    return true;

  } else {

    return false;

  }

}


/* Email Id Validation */

function validateEmail(emailid) {

  var validRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (validRegex.test(emailid)) {

    return true;

  } else {

    return false;

  }

}


/* GST Validation */

function validateGST(gstno) {

  var validRegex = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;

  if (validRegex.test(gstno)) {

    return true;

  } else {

    return false;

  }

}

$('body').on('click', '.stateclick', function () {

  var state_id = $(this).attr('data-id');
  var state_name = $(this).attr('data-state');

  $('#book_state_id').val(state_id);
  $('#book_state').val(state_name);

});