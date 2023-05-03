function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
}



// function validatePhone(txtPhone) {
//     var a = document.getElementById(txtPhone).value;
//     var filter = /[1-9]{1}[0-9]{9}/;
//     if (filter.test(a)) {
//         return true;
//     }
//     else {
//         return false;
//     }
// }
