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

/* Only Character Validation */

function validateOnlyCharacter(inputtxt) {

  var validRegex = /^[A-Za-z_ ]+$/;

  if (validRegex.test(inputtxt)) {

    return true;

  } else {

    return false;

  }

}

/* Fullname Onchange Validation */

$('body').on('change', '#contactfullname', function(){

  var contactfullname = $('#contactfullname').val();
  contactfullname = contactfullname.trim();

  var firstnameCheck = validateOnlyCharacter(contactfullname);

  if(contactfullname == ''){

     $('#cont_fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
      setTimeout(function(){ $('#cont_fullname_error').html('');}, 5000);
      return false;

  }else{

    if(firstnameCheck == false){

      $('#cont_fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
      setTimeout(function(){ $('#cont_fullname_error').html('');}, 5000);
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

/* Email Id Onchange Validation */

$('body').on('change', '#contactEmailid', function(){

  var contactEmailid = $('#contactEmailid').val();
  contactEmailid = contactEmailid.trim();

  var emailcheck = validateEmail(contactEmailid);

  if(contactEmailid == ''){

     $('#email_err').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
      setTimeout(function(){ $('#email_err').html('');}, 5000);
      return false;

  }else{

    if(emailcheck == false){

      $('#email_err').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
      setTimeout(function(){ $('#email_err').html('');}, 5000);
      return false;

    }

  }


});

/* Register form submit */

$('body').on('click', '#register_submit', function(){
     
  var contactfullname = $('#contactfullname').val();
  var contactEmailid = $('#contactEmailid').val();
  var contactPassword = $('#contactPassword').val();
  var allok = 1;
  var a= CryptoJS.MD5(contactPassword);
  //alert(a);

  contactfullname = contactfullname.trim();
  contactEmailid = contactEmailid.trim();

  var firstnameCheck = validateOnlyCharacter(contactfullname);
  var emailcheck = validateEmail(contactEmailid);

  // Fullname Validation
  if(contactfullname == ''){

     $('#cont_fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
      setTimeout(function(){ $('#cont_fullname_error').html('');}, 5000);
      var allok = 0;
      return false;

  }else{

    if(firstnameCheck == false){

      $('#cont_fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
      setTimeout(function(){ $('#cont_fullname_error').html('');}, 5000);
      var allok = 0;
      return false;

    }

  }

  // Emailid Validation
  if(contactEmailid == ''){

     $('#cont_emailid_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
      setTimeout(function(){ $('#cont_emailid_error').html('');}, 5000);
      var allok = 0;
      return false;

  }else{

    if(emailcheck == false){

      $('#cont_emailid_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
      setTimeout(function(){ $('#cont_emailid_error').html('');}, 5000);
      var allok = 0;
      return false;

    }

  }


  if(allok == 1){

     //$('#contact-submit').hide();
     //$('#contact-submit-new').show();

     var dataString = 'contactFormSubmit='+contactfullname+'&contactEmailid='+contactEmailid+'&contactPassword='+encodeURIComponent(a);
     
     $.ajax({
       type: "POST", 
       url: "ajax_function.php", 
       data: dataString, 
       success: function(data){

       //  $('#contact-submit-new').hide();
      //  $('#contact-submit').show();

         if(data == 1){

           $('#contactfullname').val('');
           $('#contactEmailid').val('');
           $('#contactPassword').val('');

           $('#cont_form_error').html('<p style="font-size: 16px; color: green; position: absolute; margin-top: 25px; margin-left: 20px;">Thank you for writing to us. We will get back to you soon!</p>');
           setTimeout(function(){ $('#cont_form_error').html('');}, 5000);
           return false;

         }else{

           $('#cont_form_error').html('<p style="font-size: 13px; color: red; position: absolute; margin-top: 25px; margin-left: 20px;">'+data+'</p>');
           setTimeout(function(){ $('#cont_form_error').html('');}, 5000);
           return false;

         }

       }

     });

  }
  
});
