

    // Count Up script animate
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 8000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });



    
 

    // Login to register animate
    $(document).ready(function(){
        $("#regClick").click(function(){
            $("#loginForm").slideUp(400, function() {});

            setTimeout(function(){
            $( "#chooseReg" ).slideDown(700, function() {});
            },350);

        });

        // Back to Login Form Button
        $("#logClick").click(function(){
          $("#chooseReg").slideUp(400, function() {});
          $("#regForm").slideUp(400, function() {});

          $("#loginForm").slideDown(1200, function() {});
        });

        $("#logClick1").click(function(){
          $("#chooseReg").slideUp(400, function() {});
          $("#regForm").slideUp(400, function() {});

          $("#loginForm").slideDown(1200, function() {});
        });

        // Teacher button
        $("#tForm").click(function(){
            $("#chooseReg").slideUp(400, function() {});
            $("#regForm").slideDown(1200, function() {});
        });
        // Student button
        $("#sForm").click(function(){
            $("#chooseReg").slideUp(400, function() {});
            $("#regForm").slideDown(1200, function() {});
        });
        // Alumni button
        $("#aForm").click(function(){
            $("#chooseReg").slideUp(400, function() {});
            $("#regForm").slideDown(1200, function() {});
        });


        // Automatic SlideUp for non showed forms
        $( "#regForm" ).slideUp( 10, function() {});
        $( "#chooseReg" ).slideUp( 10, function() {});
    });