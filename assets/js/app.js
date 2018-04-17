require('../css/app.scss');

var $ = require('jquery');

var valid = true
$('#btnOne, #btnTwo, #bBtnTwo, #bBtnThree').click(function () {
	if (this.id == 'btnOne') {
	valid = true;
        if($('#fName').length > 0) valid = false;
        if($('#lName').length > 0) valid = false;
    if(valid){
      		$('#stepOne').slideUp();
      		$('#stepTwo').slideDown();
  		}
   }

   if (this.id == 'btnTwo') {
      $('#stepTwo').slideUp();
      $('#stepThree').slideDown();
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