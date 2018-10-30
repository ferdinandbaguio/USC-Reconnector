var pageHistory = []

function showPage (pageNumber){
    $(".formPage").hide();
    //show specific page
    $(".formPage[page="+pageNumber+"]").show();
    pageHistory.push(pageNumber);
}
function getPreviousPage(){
    pageHistory.pop()
    return pageHistory.pop()
}
function isEmployed (){
    switch($(".isEmployed:checked").val()){
        case "No, I'm not employed now":
         return 7;
        case "No, I was never employed":
         return 8;
        default:
         return 4;
    }
}

function yesNo(){
    switch($(".yesNo:checked").val()){
        case "Yes":
         return 5;
        default:
         return 6;
    }
}

// function checkbox() {
//     var checkBox = document.getElementById("myCheck");
//     var text = document.getElementById("text");
//     if (checkBox.checked == true){
//         text.style.display = "block";
//     } else {
//        text.style.display = "none";
//     }
// }

$(document).ready(function(){

    var q01 = $('input[name=highest_educational_attainment]');
    var q02 = $('input[name=college_program_taken]');
    var q03 = $('input[name=month_year_graduated]');

    var pageOne = q01.add(q02);
    console.log(q02)
    validate();

    pageOne.change(validate);
    
    function validate() {
        if ($(q01).is(':checked') && $(q02).is(':checked') ) {
             $(".nextButton").removeAttr("disabled", false);
        } else {
             $(".nextButton").attr("disabled", true);
        }
     
    }
});  

$(document).ready(function(){
    $('select.selectClass option:first').attr('disabled', true);
    showPage(1)
});





