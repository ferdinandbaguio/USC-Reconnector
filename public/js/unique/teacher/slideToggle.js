

$(document).ready(function(){
	// EDIT BUTTONS TOGGLER
    $("#editProfBtn").click(function(){
        $(".editDescHolder").slideToggle("slow");
        $(".achvBtnHolder").slideToggle("slow");
        $(".deleteAchvHolder").slideToggle("slow");
    });


	// FOR ADD ACHIEVEMENT
	// VALUE CHECKER IF INPUTS IS NULL, SUBMIT BUTTON DISABLER
	$('input[name="achTitle"],input[name="achYear"]').keyup(function(){
		var i1 = $('input[name="achTitle"]');
		var i2 = $('input[name="achYear"]');
		if (i1.val() == 0 || i2.val() == 0) {
			$('#addAchvBtnF').prop("disabled", true);
		}
		else{
			$('#addAchvBtnF').prop("disabled", false);
		}
	})
	
	$('#addAchvBtnF').prop("disabled", true);

	// DISABLE ENTER KEY ON FORM
    $("#addAchvForm").bind("keypress", function(e) {
            if (e.keyCode == 13) {
                return false;
            }
     });
	// DISABLE SUBMIT AFTER CLICK
	$('#addAchvBtnF').on('click',function()
	  {
	  	$(this).attr('disabled','disabled');
	    $(this).html('Please wait');
	    $('#addAchvForm').submit();
	 });

});








