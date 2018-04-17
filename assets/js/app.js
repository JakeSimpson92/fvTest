require('../css/app.scss');

var $ = require('jquery');


$('#btnOne, #btnTwo, #bBtnTwo, #bBtnThree').click(function () {
	if (this.id == 'btnOne') {


        var fName = validateString('#fNameErr', $('#fName').val());
        var lName = validateString('#lNameErr', $('#lName').val());
        var email = validateEmail($('#email').val());
    if(fName && lName && email){
      		$('#stepOne').slideUp();
      		$('#stepTwo').slideDown();
  		}
   }

   if (this.id == 'btnTwo') {

       var mobile = validateMobile($('#mobile').val());
       var gender = validateGender($('#gender').val());

	    var month = doubleDigit($('#user_dateOfBirth_month').val());
	    var day = doubleDigit($('#user_dateOfBirth_day').val());
        var DOB = $('#user_dateOfBirth_year').val() + '' + month + '' + day;
       var DOB = validateDOB(DOB);
       if(mobile && gender && DOB) {
           $('#stepTwo').slideUp();
           $('#stepThree').slideDown();
       }
   }

   if (this.id == 'bBtnTwo') {
      $('#stepTwo').slideUp();
      $('#stepOne').slideDown();
   }

   if (this.id == 'bBtnThree') {
      $('#stepThree').slideUp();
      $('#stepTwo').slideDown();
   }
});

function validateString(field,string){
    if (string == "")
    {
        $(field).text('Please enter a valid name');
        return false;
    }
    else {
        $(field).text('');
        return true;
    }
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(email)){
        $('#emailErr').text('');
        return true;
    } else {
        $('#emailErr').text('Please enter a valid email');
        return false;
    }
}

function validateMobile(mobile) {
    var re = /(\d)7(\d\d\d\d\d\d\d\d\d)/;
    if(re.test(mobile)){
        $('#mobileErr').text('');
        return true;
    } else {
        $('#mobileErr').text('Please enter a valid mobile');
        return false;
    }
}
function validateGender(gender) {

    if(gender == 'null'){
        $('#genderErr').text('Please enter a gender');
        return false;
    } else {
        $('#genderErr').text('');
        return true;
    }
}

function doubleDigit(num) {
    if(num.toString().length == 1)
        return num = "0" + num;
    else return num;
}

function validateDOB(DOB) {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    DOB.replace('-','');
    today = yyyy + '' + mm + '' + dd;
    if(DOB > today){
        $('#dateOfBirthErr').text('Please enter a valid Date of Birth');
        return false;
    } else {
        $('#dateOfBirthErr').text('');
        return true;
    }
}

