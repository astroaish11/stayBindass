


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


/* Email Id Validation */

function validateEmail(emailid) {

  var validRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (validRegex.test(emailid)) {

    return true;

  } else {

    return false;

  }

}


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



/* Fullname Onchange Validation */

$('body').on('change', '#fullname', function(){

   var fullname = $('#fullname').val();
   fullname = fullname.trim();

   var fullnameCheck = validateOnlyCharacter(fullname);

   if(fullname == ''){

      $('#fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
       setTimeout(function(){ $('#fullname_error').html('');}, 5000);
       return false;

   }else{

     if(fullnameCheck == false){

       $('#fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
       setTimeout(function(){ $('#fullname_error').html('');}, 5000);
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

      $('#emailid_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
       setTimeout(function(){ $('#emailid_error').html('');}, 5000);
       return false;

   }else{

     if(emailcheck == false){

       $('#emailid_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
       setTimeout(function(){ $('#emailid_error').html('');}, 5000);
       return false;

     }

   }

});



/* Contact form submit */

$('body').on('click', '#submit', function(){
     
   var fullname = $('#fullname').val();
   var mobile = $('#mobile').val();
   var email = $('#email').val();
   var gender = $('#gender').val();
   var address = $('#address').val();
   var describeYou = $('#describeYou').val();

   var allok = 1;

   fullname = fullname.trim();
   mobile = mobile.trim();
   email = email.trim();
   gender = gender.trim();
   address = address.trim();
   describeYou = describeYou.trim();

   var fullnameCheck = validateOnlyCharacter(fullname);
   var emailcheck = validateEmail(email);
   var mobile = $('#mobile').val().length;

   // Fullname Validation
   if(fullname == ''){

      $('#fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
       setTimeout(function(){ $('#fullname_error').html('');}, 5000);
       var allok = 0;
       return false;

   }else{

     if(fullnameCheck == false){

       $('#fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
       setTimeout(function(){ $('#fullname_error').html('');}, 5000);
       var allok = 0;
       return false;

     }

   }

   // Mobile Number Validation
   if(mobile != 10){

     $('#mobile_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid mobile number.</p>');
     setTimeout(function(){ $('#mobile_error').html('');}, 5000);
     var allok = 0;
     return false;

   }


   // Emailid Validation
   if(email == ''){

      $('#emailid_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
       setTimeout(function(){ $('#emailid_error').html('');}, 5000);
       var allok = 0;
       return false;

   }else{

     if(emailcheck == false){

       $('#emailid_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
       setTimeout(function(){ $('#emailid_error').html('');}, 5000);
       var allok = 0;
       return false;

     }

   }

   //===password====//
  if (npass != '') {
  
    if (strlen($npass) < 6) {
      $errorMsg = "Min 6 Charcter required in password";
	  // $reg=1;
    }else{
	
	  if (strlen($npass) > 12) {
		  $errorMsg = "Max 12 Charcter required in password";
		  // $reg=1;
		}
	}
  }


   // Address Validation
   if(address == ''){

      $('#address_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a address.</p>');
       setTimeout(function(){ $('#address_error').html('');}, 5000);
       var allok = 0;
       return false;

   }

      // DescribeYou Validation
      if(describeYou == ''){

        $('#describeYou_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please Describe Yourself.</p>');
         setTimeout(function(){ $('#describeYou_error').html('');}, 5000);
         var allok = 0;
         return false;
  
     }
  
  


});