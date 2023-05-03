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

/* Only Letters Validation */

$(".onlyLetters").keypress(function(event){
    var inputValue = event.which;
    // allow letters and whitespaces only.
    if(!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)) { 
        event.preventDefault(); 
    }
});


/* Email Id Validation */

function validateEmail(email) {

  var validRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (validRegex.test(email)) {

    return true;

  } else {

    return false;

  }

}


/* Only Character Validation */

function validateOnlyCharacter(name) {

    var validRegex = /^[A-Za-z_ ]+$/;
  
    if (validRegex.test(name)) {
  
      return true;
  
    } else {
  
      return false;
  
    }
  
  }

  
/* Fullname Onchange Validation */

$('body').on('change', '#fullname', function(){

    var name = $('#fullname').val();
    full_name = name.trim();
 
    var firstnameCheck = validateOnlyCharacter(full_name);
 
    if(name == ''){
 
       $('#name_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
        setTimeout(function(){ $('#name_error').html('');}, 5000);
        return false;
 
    }else{
 
      if(firstnameCheck == false){
 
        $('#name_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
        setTimeout(function(){ $('#name_error').html('');}, 5000);
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
 
/* Email Id Onchange Validation */

$('body').on('change', '#email', function(){

    var email = $('#email').val();
    email = email.trim();
 
    var emailcheck = validateEmail(email);
 
    if(email == ''){
 
       $('#email_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
        setTimeout(function(){ $('#email_error').html('');}, 5000);
        return false;
 
    }else{
 
      if(emailcheck == false){
 
        $('#email_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
        setTimeout(function(){ $('#email_error').html('');}, 5000);
        return false;
 
      }
 
    }
 
 });
 
