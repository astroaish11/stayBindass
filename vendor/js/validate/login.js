
function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
    }
    
    $('#login').click(function(){
    
        var email = $('#exampleInputEmail').val();
        var password = $('#exampleInputPassword').val();
        var allokay = 0;
    
        if(email == '') {
        $('#email_error').html('Email is required');
        allokay = 1;
    } else {
    
        if(!validateEmail(email)) {
            $('#email_error').html('Invalid Email Id');
            allokay = 1;
        } else {
            $('#email_error').html('');
        }
    
    }
    
        if(password == '') {
            $('#pass_error').html('Password is required');
            allokay = 1;
        }
    
    
    
    
    if(allokay == 1) {
    
        return false;
    
    }
    
    });
    