

// Count Up script animate
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    // Login to register animate
    $(document).ready(function(){
      $("#regClick").click(function(){
        $("#loginForm").hide();
            $("#regForm").fadeIn(500);
      });
      $("#logClick").click(function(){
          $("#regForm").hide();
            $("#loginForm").fadeIn(500);
      });
    });