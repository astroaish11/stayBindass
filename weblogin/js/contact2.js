

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

$('body').on('change', '#phone', function(){

  var contactmobile = $('#phone').val();
  var contactmobile = $('#phone').val().length;

  if(contactmobile != 10){

    $('#phone_err').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid mobile number.</p>');
    setTimeout(function(){ $('#phone_err').html('');}, 5000);
    return false;

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

/* Email Id Onchange Validation */

$('body').on('change', '#email', function () {

  var contactEmailid = $('#email').val();
  contactEmailid = contactEmailid.trim();

  var emailcheck = validateEmail(contactEmailid);

  

  if (contactEmailid == '') {

    $('#email_err').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
    setTimeout(function () { $('#email_err').html(''); }, 5000);
    return false;

  } else {

    if (emailcheck == false) {
      $('#email_err').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
      setTimeout(function () { $('#email_err').html(''); }, 5000);
      return false;

    }

  }


});

/* Register form submit on click */

$('body').on('click', '#submit', function () {

  var contactmobile = $('#mobile').val();
  var contactEmailid = $('#email').val();
  var mobilelength = $('#mobile').val().length;
  var allok = 1;

  contactmobile = contactmobile.trim();
  contactEmailid = contactEmailid.trim();

  var firstnameCheck = validateOnlyCharacter(contactfullname);
  var emailcheck = validateEmail(contactEmailid);



   // Mobile Number Validation
   if(mobilelength != 10){

    $('#cont_mobile_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter 10 digit mobile number.</p>');
    setTimeout(function(){ $('#cont_mobile_error').html('');}, 5000);
    var allok = 0;
    return false;

  }


  

  // Emailid Validation
  if (contactEmailid == '') {

    $('#cont_emailid_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
    setTimeout(function () { $('#cont_emailid_error').html(''); }, 5000);
    var allok = 0;
    return false;

  } else {

    if (emailcheck == false) {

      $('#cont_emailid_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
      setTimeout(function () { $('#cont_emailid_error').html(''); }, 5000);
      var allok = 0;
      return false;

    }

  }


  
});

