

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


	// DISABLE SUBMIT AFTER CLICK
	$('#addSkillBtnF').on('click', function() {
    $(this).prop('disabled', true);
    $("#addSkillForm").submit();
	});





	// FOR ADD ACHIEVEMENT
	// VALUE CHECKER IF INPUTS IS NULL, SUBMIT BUTTON DISABLER
	$("#addAchvForm").keyup(function(){
	    $("#addAchvForm :input").each(function(){
		 	var input = $(this); 

			 	if(input.val() == 0){
					$('#addAchvBtnF').prop("disabled", true);
				}
				else{
					$('#addAchvBtnF').prop("disabled", false);
				}
		});
	});
	
	$('#addAchvBtnF').prop("disabled", true);


	// DISABLE SUBMIT AFTER CLICK
	$('#addAchvBtnF').on('click', function() {
    $(this).prop('disabled', true);
    $("#addAchvForm").submit();
	});
});








