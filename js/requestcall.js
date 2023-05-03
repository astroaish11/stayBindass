// date validation 
$('body').on('change', '#checkindate', function () {
  var date = $(this).val();
  $('#checkoutdate').attr('min' , date);
});

/*------------------------------------Validations-------------------------------------------*/

/* No Space Validation */

$('.nospace').on('keypress', function (e) {
  if (e.which == 32)
    return false;
});

/* only numbers Validation */
$('.numbersOnly').keypress(function (e) {
  if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
});

/* Only Letters Validation */

$(".onlyLetters").keypress(function (event) {
  var inputValue = event.which;
  // allow letters and whitespaces only.
  if (!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)) {
    event.preventDefault();
  }
});


/* Only Character Validation for FULL NAME */

function validateOnlyCharacter(inputtxt) {

  var validRegex = /^[A-Za-z_ ]+$/;

  if (validRegex.test(inputtxt)) {

    return true;

  } else {

    return false;

  }

}


$('body').on('change', '#fullname', function () {

  var contactfullname = $('#fullname').val();
  contactfullname = contactfullname.trim();

  var firstnameCheck = validateOnlyCharacter(contactfullname);

  if (contactfullname == '') {

    $('#fullnameerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
    setTimeout(function () { $('#fullnameerror').html(''); }, 5000);
    return false;

  } else {

    if (firstnameCheck == false) {

      $('#fullnameerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
      setTimeout(function () { $('#fullnameerror').html(''); }, 5000);
      return false;

    }

  }

});

/* Email Id Validation */

function validateEmail(emailid) {

  var validRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (validRegex.test(emailid)) {

    return true;

  } else {

    return false;

  }

}

$('body').on('change', '#emailid', function () {

  var contactEmailid = $('#emailid').val();
  contactEmailid = contactEmailid.trim();

  var emailcheck = validateEmail(contactEmailid);

  if (contactEmailid == '') {

    $('#emailiderror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
    setTimeout(function () { $('#emailiderror').html(''); }, 5000);
    return false;

  } else {

    if (emailcheck == false) {
      $('#emailiderror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
      setTimeout(function () { $('#emailiderror').html(''); }, 5000);
      return false;

    }

  }

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


/*-------------------------------------------------------------------------------*/

// on Submit pass data to ajax
$('body').on('click', '#submit_host', function () {
 var propertyId = $('#hiddenslug').val();
 var fullname = $('#fullname').val();
 var emailid = $('#emailid').val();
 var mobile = $('#mobile').val();
 var guest = $('#guest').val();
 var checkindate = $('#checkindate').val();
 var checkoutdate = $('#checkoutdate').val();
 var allok = 1;

 contactfullname = fullname.trim();
 contactEmailid = emailid.trim();

 var firstnameCheck = validateOnlyCharacter(contactfullname);
 var emailcheck = validateEmail(contactEmailid);

//date require validation
if(checkindate == ''){
  $('#dateerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please select a checkin date.</p>');
  setTimeout(function () { $('#dateerror').html(''); }, 5000);
  var allok = 0;
  return false;

}

if(checkoutdate == ''){
  $('#dateerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please select a checkout date.</p>');
  setTimeout(function () { $('#dateerror').html(''); }, 5000);
  var allok = 0;
  return false;

}

 // Fullname Validation
 if (fullname == '') {

  $('#fullnameerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
  setTimeout(function () { $('#fullnameerror').html(''); }, 5000);
  var allok = 0;
  return false;

} else {

  if (firstnameCheck == false) {

    $('#fullnameerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
    setTimeout(function () { $('#fullnameerror').html(''); }, 5000);
    var allok = 0;
    return false;

  }

}

// Emailid Validation
if (emailid == '') {

  $('#emailiderror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
  setTimeout(function () { $('#emailiderror').html(''); }, 5000);
  var allok = 0;
  return false;

} else {

  if (emailcheck == false) {

    $('#emailiderror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
    setTimeout(function () { $('#emailiderror').html(''); }, 5000);
    var allok = 0;
    return false;

  }

}

// Mobile Validation

if (mobile == '') {

  $('#mobileerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter 10 digit mobile number.</p>');
  setTimeout(function () { $('#mobileerror').html(''); }, 5000);
  var allok = 0;
  return false;

} 


//call ajax

if (allok == 1) {

  var dataString = 'RequestFormSubmit=' + propertyId +'&fullname=' + contactfullname + '&emailid=' + contactEmailid + '&mobile=' + mobile + '&guest=' + guest +'&checkindate=' + checkindate +  '&checkoutdate=' + checkoutdate ;
  $.ajax({
    type: "POST",
    url: "https://staybindass.com/ajax_function.php",
    data: dataString,
    success: function (data) {

        $('#fullname').val('');
        $('#emailid').val('');
        $('#mobile').val('');
        $('#checkindate').val('');
        $('#checkoutdate').val('');

        if(data ==1){
         $('#request_form_error').html('<p style="font-size: 16px; color: green; position: absolute; margin-top: -6px; margin-left: 20px;">Thank you for writing to us. We will get back to you soon!</p>');
       // setTimeout(function () {$('#request_form_error').html('');}, 5000);
       setTimeout(function () { $('#ab .icon-close').click(); }, 1000);
         return false;
        }
        else
        {

         $('#request_form_error').html('<p style="font-size: 18px; color: red; position: absolute; margin-top: 50px; margin-left: 20px;">' + data + '</p>');
        //setTimeout(function () {$('#request_form_error').html('');}, 5000);
        setTimeout(function () { $('#ab .icon-close').click(); }, 1000);
         return false;

        }
    }

  });

}


});