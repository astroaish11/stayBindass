
$(document).ready(function(){

    $('#email-1').change(function(){

        var emailaddress = $(this).val();

        if(!validateEmail(emailaddress)) {
            //$(this).val('');
            $('#email1-error').html('Invalid Email Id');
        }

    });

    $('#email-2').change(function(){

        var emailaddress = $(this).val();

        if(!validateEmail(emailaddress)) {
            //$(this).val('');
            $('#email2-error').html('Invalid Email Id');
        }

    });


    $('#phone').change(function(){

        var phone = $(this).val();

        if(phone == '') {
            $('#mobile1-error').html('Mobile 1 is required');    
            allokay = 1;
        } else {

            if($.isNumeric(phone)){

                if(phone.length != 10) {
                    //$(this).val('');
                    $('#mobile1-error').html('10 Digits required'); 
                    allokay = 1;
                } else {
                    $('#mobile1-error').html(''); 
                }

            } else {
                //$(this).val('');
                $('#mobile1-error').html('Please enter valid Mobile No.'); 
                allokay = 1;
            }
        }

    });


    $('#submit').click(function(){

        var address = $('#address').val();
        var phone = $('#phone').val();
        var mobile2 = $('#mobile-2').val();
        var email1 = $('#email-1').val();
        var email2 = $('#email-2').val();
        var allokay = 0;

        if(address == '') {
            $('#address-error').html('Address is required');
            allokay = 1;
        }

        // Mobile No. Validation
        if(phone == '') {
            $('#mobile1-error').html('Mobile 1 is required');    
            allokay = 1;
        } else {

            if($.isNumeric(phone)){

                if(phone.length != 10) {
                    $('#mobile1-error').html('10 Digits required'); 
                    allokay = 1;
                } else {
                    $('#mobile1-error').html(''); 
                }

            } else {
                $('#mobile1-error').html('Please enter valid Mobile No.'); 
                allokay = 1;
            }
        }
        // Mobile No. Validation Complete


        if(mobile2 != '') {

            if($.isNumeric(mobile2)){

                if(mobile2.length != 10) {
                    $('#mobile2-error').html('10 Digits required'); 
                    allokay = 1;
                } else {
                    $('#mobile2-error').html(''); 
                }

            } else {
                $('#mobile2-error').html('Please enter valid Mobile No.'); 
                allokay = 1;
            }
        }


        if(email1 == '') {
            $('#email1-error').html('Email 1 is required');
            allokay = 1;
        } else {

            if(!validateEmail(email1)) {
                $('#email1-error').html('Invalid Email Id');
                allokay = 1;
            } else {
                $('#email1-error').html('');
            }


        }

        if(email2 != '')  {

            if(!validateEmail(email2)) {
                $('#email2-error').html('Invalid Email Id');
                allokay = 1;
            } else {
                $('#email2-error').html('');
            }


        }

        if(allokay == 1) {

            return false;

        }

        
    });




});



