


// Buttons 
$(document).ready(function(){

    //Testing Scripts
    $("#next1").click(function(){ // This is a next button
        $("#firstPage").fadeOut(400);
        
        setTimeout(function(){ 
        $("#secondPage").fadeIn(400);
        }, 400);   
    });

    $("#next2").click(function(){ // This is a next button
        $("#secondPage").fadeOut(400);
        
        setTimeout(function(){ 
        $("#thirdPage").fadeIn(400);
        }, 400);   
    });

    $("#next3").click(function(){ // This is a next button
        $("#thirdPage").fadeOut(400);
        
        setTimeout(function(){ 
        $("#fourthPage").fadeIn(400);
        }, 400);   
    });

    $("#next4").click(function(){ // This is a next button
        $("#fourthPage").fadeOut(400);
        
        setTimeout(function(){ 
        $("#aboutUnderProgram").fadeIn(400);
        }, 400);   
    });

    

    $("#secondPage").hide();
    $("#thirdPage").hide();
    $("#fourthPage").hide();
    $("#aboutUnderProgram").hide();
});







