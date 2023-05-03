/* Register Page*/


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

$(".onlyLetters").keypress(function (event) {
  var inputValue = event.which;
  // allow letters and whitespaces only.
  if (!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)) {
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

/* Mobile Number Onchange Validation */

$('body').on('change', '#contactmobile', function(){

  var contactmobile = $('#contactmobile').val();
  var contactmobile = $('#contactmobile').val().length;

  if(contactmobile != 10){

    $('#cont_mobile_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid mobile number.</p>');
    setTimeout(function(){ $('#cont_mobile_error').html('');}, 5000);
    return false;

  }

});



/* Fullname Onchange Validation */

$('body').on('change', '#contactfullname', function () {

  var contactfullname = $('#contactfullname').val();
  contactfullname = contactfullname.trim();

  var firstnameCheck = validateOnlyCharacter(contactfullname);

  if (contactfullname == '') {

    $('#cont_fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
    setTimeout(function () { $('#cont_fullname_error').html(''); }, 5000);
    return false;

  } else {

    if (firstnameCheck == false) {

      $('#cont_fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
      setTimeout(function () { $('#cont_fullname_error').html(''); }, 5000);
      return false;

    }

  }

});


/* Password on chnage validation */

$('body').on('change', '#contactPassword', function () {

  var contactPassword = $('#contactPassword').val();
  //contactPassword = contactPassword.trim();
  var passlenghth1 = $('#contactPassword').val().length;
  if (contactPassword == '') {

    $('#cont_password_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a password.</p>');
    setTimeout(function () { $('#cont_password_error').html(''); }, 5000);
    return false;

  }
  if(passlenghth1<6)
    {
      $('#cont_password_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter password of minimum 6 characters</p>');
    setTimeout(function () { $('#cont_password_error').html(''); }, 5000);
    var allok = 0;
    return false;
    }

});

/* Confirm Password on chnage validation */

$('body').on('change', '#contactconfirmPassword', function () {

  var contactconfirmPassword = $('#contactconfirmPassword').val();
  //contactPassword = contactPassword.trim();
  var passlenghth2 = $('#contactconfirmPassword').val().length;
  if (contactconfirmPassword == '') {

    $('#cont_confirmpassword_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a password.</p>');
    setTimeout(function () { $('#cont_confirmpassword_error').html(''); }, 5000);
    return false;

  }
  if(passlenghth2<6)
    {
      $('#cont_confirmpassword_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter password of minimum 6 characters</p>');
    setTimeout(function () { $('#cont_confirmpassword_error').html(''); }, 5000);
    var allok = 0;
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

$('body').on('change', '#contactEmailid', function () {

  var contactEmailid = $('#contactEmailid').val();
  contactEmailid = contactEmailid.trim();

  var emailcheck = validateEmail(contactEmailid);

  

  if (contactEmailid == '') {

    $('#cont_emailid_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
    setTimeout(function () { $('#cont_emailid_error').html(''); }, 5000);
    return false;

  } else {

    if (emailcheck == false) {
      $('#cont_emailid_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
      setTimeout(function () { $('#cont_emailid_error').html(''); }, 5000);
      return false;

    }

  }


  /*if( $ok == 1)
  {
    var dataString = 'checkemailidExists=' + contactEmailid;

  $.ajax({
    type: "POST",
    url: "ajax_function.php",
    data: dataString,
    success: function (data) {
      if (data == 0) {

        // $('#cont_form_error').html('<p style="font-size: 16px; color: red; position: absolute; margin-top: 50px; margin-left: 20px;">Email id alerady exists</p>');
        // setTimeout(function () { $('#cont_emailid_error').html(''); }, 5000);
        // return false;
        alert("validated email");
      }
      else {
        alert("nonvalidated email");
        // $('#contactEmailid').val('');
        // //$('#cont_emailid_error').val('');

        // $('#cont_form_error').html('<p style="font-size: 16px; color: red; position: absolute; margin-top: 50px; margin-left: 20px;">Email id alerady exists</p>');
        // setTimeout(function () { $('#cont_emailid_error').html(''); }, 5000);
        // return false;
      }

    }

  });
  }*/
  


});

/* Register form submit on click */

$('body').on('click', '#register_submit', function () {
  
  var contactfullname = $('#contactfullname').val();
  var contactmobile = $('#contactmobile').val();
  var contactEmailid = $('#contactEmailid').val();
  var contactPassword = $('#contactPassword').val();
  var contactconfirmPassword = $('#contactconfirmPassword').val();
  var passlenghth =  $('#contactPassword').val().length;
  var passlenghth2 =  $('#contactconfirmPassword').val().length;
  var mobilelength = $('#contactmobile').val().length;
  var allok = 1;
  var a = CryptoJS.MD5(contactPassword); 
  var b = CryptoJS.MD5(contactconfirmPassword);
 
  

  contactfullname = contactfullname.trim();
  contactmobile = contactmobile.trim();
  contactEmailid = contactEmailid.trim();

  var firstnameCheck = validateOnlyCharacter(contactfullname);
  var emailcheck = validateEmail(contactEmailid);

  //password validation

  if (contactPassword == '') {

    $('#cont_password_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a password.</p>');
    setTimeout(function () { $('#cont_password_error').html(''); }, 5000);
    var allok = 0;
    return false;

  }
  else{
    if(passlenghth<6)
    {
      $('#cont_password_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter password of minimum 6 characters</p>');
    setTimeout(function () { $('#cont_password_error').html(''); }, 5000);
    var allok = 0;
    return false;
    }
  }

    //Confirm Password validation

    if (contactconfirmPassword == '') {

      $('#cont_confirmpassword_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a Confirm password.</p>');
      setTimeout(function () { $('#cont_confirmpassword_error').html(''); }, 5000);
      var allok = 0;
      return false;
  
    }
    else{
      if(passlenghth2 <6)
      {
        $('#cont_confirmpassword_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter Confirm password of minimum 6 characters</p>');
      setTimeout(function () { $('#cont_confirmpassword_error').html(''); }, 5000);
      var allok = 0;
      return false;
      }
    }

// Password  Match

    if (contactconfirmPassword != contactPassword) {
      $('#cont_confirmpassword_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Password And Confirm password Does not match.</p>');
      setTimeout(function () { $('#cont_confirmpassword_error').html(''); }, 5000);
      var allok = 0;
      return false;
    }



  // Fullname Validation
  if (contactfullname == '') {

    $('#cont_fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
    setTimeout(function () { $('#cont_fullname_error').html(''); }, 5000);
    var allok = 0;
    return false;

  } else {

    if (firstnameCheck == false) {

      $('#cont_fullname_error').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
      setTimeout(function () { $('#cont_fullname_error').html(''); }, 5000);
      var allok = 0;
      return false;

    }

  }

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


  if (allok == 1) {

 
   

    //$('#contact-submit').hide();
    //$('#contact-submit-new').show();

    var dataString = 'contactFormSubmit=' + contactfullname + '&contactEmailid=' + contactEmailid +'&contactmobile=' + contactmobile +'&contactconfirmPassword=' + contactconfirmPassword + '&contactPassword=' + encodeURIComponent(a);

    $.ajax({
      type: "POST",
      url: mainlink+"ajax_function.php",
      data: dataString,
      success: function (data) {

        //  $('#contact-submit-new').hide();
        //  $('#contact-submit').show();

        if (data == 1) {

          window.location.assign("");

          $('#contactfullname').val('');
          $('#contactmobile').val('');
          $('#contactEmailid').val('');
          $('#contactPassword').val('');
          $('#contactconfirmPassword').val('');

          $('#cont_form_error').html('<p style="font-size: 16px; color: green; position: absolute; margin-top: 50px; margin-left: 20px;">Thank you for Registering with us. !!</p>');
         // setTimeout(function () {$('#cont_form_error').html('');$('#aa').hide();}, 5000);
         setTimeout(function () {$('#cont_form_error').html(''); }, 3800);
          return false;

        } else {

          $('#cont_form_error').html('<p style="font-size: 18px; color: red; position: absolute; margin-top: 50px; margin-left: 20px;">' + data + '</p>');
         // setTimeout(function () { $('#cont_form_error').html('');}, 5000);
         //setTimeout(function () {$('#cont_form_error').html('');$('#aa').hide();}, 5000);
         setTimeout(function () {$('#cont_form_error').html(''); }, 3800);
          return false;

          

        }

      }

    });

  }

});



/* Sign In Page */


$('body').on('change', '#contactEmailid1', function () {

  var contactEmailid1 = $('#contactEmailid1').val();
  contactEmailid1 = contactEmailid1.trim();

  var emailcheck1 = validateEmail(contactEmailid1);


  if (contactEmailid1 == '') {

    $('#cont_emailid_error1').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
    setTimeout(function () { $('#cont_emailid_error1').html(''); }, 5000);
    return false;

  } else {

    if (emailcheck1 == false) {

      $('#cont_emailid_error1').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
      setTimeout(function () { $('#cont_emailid_error1').html(''); }, 5000);
      return false;

    }

  }


});


/* Login form submit */

$('body').on('click', '#login_submit', function () {

  var contactEmailid1 = $('#contactEmailid1').val();
  var contactPassword1 = $('#contactPassword1').val();
  var allok = 1;
  var a = CryptoJS.MD5(contactPassword1);
  //alert(a);

  contactEmailid1 = contactEmailid1.trim();

  var emailcheck1 = validateEmail(contactEmailid1);

    // Emailid Validation
    if (contactEmailid1 == '') {

      $('#cont_emailid_error1').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
      setTimeout(function () { $('#cont_emailid_error1').html(''); }, 5000);
      var allok = 0;
      return false;
  
    } else {
  
      if (emailcheck1 == false) {
  
        $('#cont_emailid_error1').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
        setTimeout(function () { $('#cont_emailid_error1').html(''); }, 5000);
        var allok = 0;
        return false;
  
      }
  
    }

  //password validation

  if (contactPassword1 == '') {

    $('#cont_password_error1').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a password.</p>');
    setTimeout(function () { $('#cont_password_error1').html(''); }, 5000);
    var allok = 0;
    return false;

  }





  if (allok == 1) {

    //$('#contact-submit').hide();
    //$('#contact-submit-new').show();

    var dataString = 'contactLoginSubmit=' + contactEmailid1 + '&contactPassword1=' + encodeURIComponent(a);
    
    $.ajax({
      type: "POST",
      url: mainlink+"ajax_function.php",
      data: dataString,
      success: function (data) {

        //  $('#contact-submit-new').hide();
        //  $('#contact-submit').show();

        if (data == 1) {

          window.location.assign("");

        } else {

          $('#cont_form_error1').html('<p style="font-size: 16px; color: red; position: absolute; margin-top: 50px; margin-left: 20px;">'+data+'</p>');
          setTimeout(function () { $('#cont_form_error1').html(''); }, 3800);
          //setTimeout(function () { $('#aa').modal('hide'); }, 500);
          return false;

        }

      }

    });

  }

});



// /* Review form submit */

// $('body').on('click', '#submitreview', function () {

//   var emailreview = $('#emailreview').val();
//   var userreview = $('#userreview').val();
//   var allok = 1;
 
//   emailreview = emailreview.trim();

//   var emailreviewcheck1 = validateEmail(emailreview);

//     // Emailid Validation
//     if (emailreview == '') {

//       $('#cont_emailid_error1').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a email address.</p>');
//       setTimeout(function () { $('#cont_emailid_error1').html(''); }, 5000);
//       var allok = 0;
//       return false;
  
//     } else {
  
//       if (emailreviewcheck1 == false) {
  
//         $('#cont_emailid_error1').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a valid email address.</p>');
//         setTimeout(function () { $('#cont_emailid_error1').html(''); }, 5000);
//         var allok = 0;
//         return false;
  
//       }
  
//     }

//   if (allok == 1) {

//     //$('#contact-submit').hide();
//     //$('#contact-submit-new').show();

//     var dataString = 'submitreview=' + emailreview ;
    
//     $.ajax({
//       type: "POST",
//       url: mainlink+"ajax_function.php",
//       data: dataString,
//       success: function (data) {

//         //  $('#contact-submit-new').hide();
//         //  $('#contact-submit').show();

//         if (data == 1) {

//           $('#contactEmailid1').val('');
//           $('#contactPassword1').val('');

//           $('#cont_form_error1').html('<p style="font-size: 16px; color: red; position: absolute; margin-top: 50px; margin-left: 20px;">Incorrect Credentials</p>');

//          //setTimeout(function () { $('#cont_form_error1').html(''); }, 5000);
//          setTimeout(function () { $('#aa').modal('hide'); }, 500);
//           return false;

//         } else {

//           $('#cont_form_error1').html('<p style="font-size: 13px; color: red; position: absolute; margin-top: 50px; margin-left: 20px;">' + data + '</p>');
//          // setTimeout(function () { $('#cont_form_error1').html(''); }, 5000);
//          setTimeout(function () { $('#aa').modal('hide'); }, 500);
//           return false;

//         }

//       }

//     });

//   }

// });
