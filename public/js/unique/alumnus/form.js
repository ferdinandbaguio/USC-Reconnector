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



$(document).ready(function(){
    showPage(1)
});





