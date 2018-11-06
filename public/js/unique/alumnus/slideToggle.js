

$(document).ready(function(){
	// EDIT BUTTONS TOGGLER
    $("#editProfBtn").click(function(){
        $(".editDescHolder").slideToggle("slow");
        $(".achvBtnHolder").slideToggle("slow");
        $(".skillBtnHolder").slideToggle("slow");
        $(".deleteSkillHolder").slideToggle("slow");
        $(".deleteAchvHolder").slideToggle("slow");
    });


    // FOR ADD SKILL
    // VALUE CHECKER IF INPUTS IS NULL, SUBMIT BUTTON DISABLER
	$("#addSkillForm :input").each(function(){
		var input = $(this); 

		$(input).keyup(function(){
			if(input.val() == 0){
				$('#addSkillBtnF').prop("disabled", true);
			}
			else{
				$('#addSkillBtnF').prop("disabled", false);
			}
		});
	});
	
	$('#addSkillBtnF').prop("disabled", true);


	// DISABLE ENTER KEY ON FORM
    $("#addSkillForm").bind("keypress", function(e) {
            if (e.keyCode == 13) {
                return false;
            }
     });
	// DISABLE SUBMIT AFTER CLICK
	$('#addSkillBtnF').on('click keyup keypress', function() {
    $(this).prop('disabled', true);
    $(this).html('Please wait');
    $("#addSkillForm").submit();
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




	// CLOSE WARNING SIGN FOR ALUMNUS DETAILS
	$(document).ready(function(){
    $("#closeHereBtn").click(function(){
        $(".warningAlumnus").animate({bottom: '-200px'}, 700);
    });
});
});








