
function disableSelectFirst(){
    var selectFirst = $('select[name=countries]');
    selectFirst.change(function(){ 
        $('select.selectClass option:first').attr('disabled', true);
    });

}

$(document).ready(function(){
    disableSelectFirst()

});   



