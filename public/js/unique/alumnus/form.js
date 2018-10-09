


// Buttons 
$(document).ready(function(){

	// FOR EMPLOYED NOW BUTTONS
    $("#employedNowBtn").click(function(){
    	$("#employmentChecker").fadeOut(400);

    	setTimeout(function(){ 
        $("#employedNow").fadeIn(400);
        $("#employedNow").show();
        }, 400);   
    });
    
    $("#backToEmploymentChecker").click(function(){ // This is a previous button
    	$("#employedNow").fadeOut(400);
    	
    	setTimeout(function(){ 
        $("#employmentChecker").fadeIn(400);
        }, 400);   
    });

    $("#toEnData").click(function(){
    	$("#enGenInfo").fadeOut(400);

    	setTimeout(function(){ 
        $("#enData").fadeIn(400);
        }, 400);
    });
    $("#backToEnGenInfo").click(function(){ // This is a previous button
    	$("#enData").fadeOut(400);
    	
    	setTimeout(function(){ 
        $("#enGenInfo").fadeIn(400);
        }, 400);   
    });

    $("#toEnUnderGrad").click(function(){
    	$("#enData").fadeOut(400);

    	setTimeout(function(){ 
        $("#enUnderGrad").fadeIn(400);
        }, 400);
    });
    $("#backToEnData").click(function(){ // This is a previous button
    	$("#enUnderGrad").fadeOut(400);
    	
    	setTimeout(function(){ 
        $("#enData").fadeIn(400);
        }, 400);   
    });


    $("#employedNow").hide();
    $("#enData").hide();
    $("#enUnderGrad").hide();

});







