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

function pageOneValidate(){
    var q01 = $('input[name=highest_educational_attainment]');
    var q02 = $('input[name=college_program_taken]');
    var q03 = $('select[name=month_year_graduated]');
    var pageOne = q01.add(q02).add(q03);
    pageOne.change(function(){
        if ($(q01).is(':checked') && $(q02).is(':checked') && $(q03).val()  != null ) {
            $(".nextButtonOne").removeAttr("disabled", false);
        } else {
            $(".nextButtonOne").attr("disabled", true);
        }
    });
    if ($(q01).is(':checked') && $(q02).is(':checked') && $(q03).val()  != null ) {
        $(".nextButtonOne").removeAttr("disabled", false);
    } else {
        $(".nextButtonOne").attr("disabled", true);
    }
}


function pageTwoValidate(){
    var q01 = $('input[name=program_pursued]');
    var q02 = $('input[name=name_of_graduate_school]');
    var q03 = $('input[name=address_of_graduate_school]');
    var q04 = $(".advance_studies");
    var pageTwo = q01.add(q02).add(q03).add(q04);
    pageCheckbox(2)
    pageTwo.change(function(){ 
       if ($(q01).val() != 0 && $(q02).val() != 0 && $(q03).val() != 0 && isQAnswered(2)) {$(".nextButtonTwo").attr("disabled", false);} 
       else {$(".nextButtonTwo").attr("disabled", true);}  
    });
 

}

            
function pageThreeValidate(){
    var q01 = $('input[name=is_presently_employed]');
    var pageThree = q01;
    pageThree.change(function(){
        if ($(q01).is(':checked')){$(".nextButtonThree").removeAttr("disabled", false);} 
        else {$(".nextButtonThree").attr("disabled", true);}
    });
    if ($(q01).is(':checked')){$(".nextButtonThree").removeAttr("disabled", false);} 
    else {$(".nextButtonThree").attr("disabled", true);}
}

function pageFourValidate(){
    var q01 = $('input[name=industry_currently_working]');
    var q02 = $('input[name=job_level]');
    var q03 = $('input[name=present_job_position]');
    var q05 = $('input[name=months_employed]');
    var q06 = $('input[name=name_of_company]');
    var q07 = $('input[name=address_of_company]');
    var q08 = $('input[name=is_first_job]');
    var pageFour = q01.add(q02).add(q03).add(q05).add(q06).add(q07).add(q08);
    pageFour.change(function(){
        if ($(q01).is(':checked') && $(q02).is(':checked') && $(q03).val() != 0 && $(q05).is(':checked') && $(q06).val() != 0 && $(q07).val() != 0 && $(q08).is(':checked')) {
            $(".nextButtonFour").removeAttr("disabled", false);
       } else {
            $(".nextButtonFour").attr("disabled", true);
       }
    });
    if ($(q01).is(':checked') && $(q02).is(':checked') && $(q03).val() != 0 && $(q05).is(':checked') && $(q06).val() != 0 && $(q07).val() != 0 && $(q08).is(':checked')) {
        $(".nextButtonFour").removeAttr("disabled", false);
   } else {
        $(".nextButtonFour").attr("disabled", true);
   }
}

function pageFiveValidate(){
    var q01 = $(".reasonsYes");
    var pageFive = q01;
    pageCheckbox(5);
    pageFive.change(function(){
        if(isQAnswered(5)){
            $(".nextButtonFive").removeAttr("disabled", false);
        }
        else {
            $(".nextButtonFive").attr("disabled", true);
        }    
    });
}

function pageSixValidate(){
    var q01 = $(".reasonsNo");
    var pageSix = q01;
    pageCheckbox(6);
    pageSix.change(function(){
        if(isQAnswered(6)){$(".nextButtonSix").removeAttr("disabled", false);}
        else {$(".nextButtonSix").attr("disabled", true);}
    });
}

function pageSevenValidate(){
    var q01 = $(".reasonUnemployedNow");
    var pageSeven = q01;
    pageCheckbox(7);
    pageSeven.change(function(){
        if(isQAnswered(7)){$(".nextButtonSeven").removeAttr("disabled", false);}
        else {$(".nextButtonSeven").attr("disabled", true);}
    });
}

function pageEightValidate(){
    var q01 = $(".reasonUnemployedNever");
    var pageEight = q01;
    pageCheckbox(8);
    pageEight.change(function(){
        if(isQAnswered(8)){$(".nextButtonEight").removeAttr("disabled", false);}
        else {$(".nextButtonEight").attr("disabled", true);}
    });
}


function pageNineValidate(){
    var q01 = $("input[name=isFirstJobRelated]");
    var q02 = $("input[name=isJobpositionFirstworkAfterCollege]");
    var q03 = $("input[name=firstCompanyworked]");
    var pageNine = q01.add(q02).add(q03);
    pageNine.change(function(){
        if ($(q01).is(':checked') && $(q02).val() != 0 && $(q03).val() != 0) {$(".nextButtonNine").removeAttr("disabled", false);} 
        else {$(".nextButtonNine").attr("disabled", true);}
    }); 
    if ($(q01).is(':checked') && $(q02).val() != 0 && $(q03).val() != 0) {$(".nextButtonNine").removeAttr("disabled", false);} 
    else {$(".nextButtonNine").attr("disabled", true);}
}

function pageTenValidate(){
    var q01 = $("input[name=monthsEmployedfirstjobAfterGraduate]");
    var q02 = $(".jobRolesExperienced");
    var q03 = $(".conceptsLearned");
    var q04 = $("input[name=programmingLanguages]");

    var pageTen = q01.add(q02).add(q03).add(q04);
    pageCheckbox(10);
    pageCheckboxTwo()
    pageTen.change(function() {
        if ($(q01).is(':checked')  && $(q04).val() != 0 && isQAnswered(10) && isQAnsweredTwo()) 
        {
            $(".nextButtonTen").removeAttr("disabled", false); 
        } else {
             $(".nextButtonTen").attr("disabled", true);
        }
    }); 
}

function pageElevenValidate(){
    var q01 = $(".reasonsUndergraduateCourse");
    var q02 = $("input[name=knowledge_for_solving_computing_problems]");
    var q03 = $("input[name=problem_analysis]");
    var q04 = $("input[name=development_of_solutions]");
    var q05 = $("input[name=modern_tool_usage]");
    var q06 = $("input[name=individual_and_team_work]");
    var q07 = $("input[name=communication]");
    var q08 = $("input[name=computing_professionalism_and_society]");
    var q09 = $("input[name=ethics]");
    var q10 = $("input[name=lifelong_learning]");
    var q11 = $("input[name=knowledge_competencies]");
    var q12 = $("input[name=personal_character_and_values]");
    var q13 = $("input[name=community_involvement]");
    var q14 = $("input[name=relevant_undergraduate_program_course_to_current_job]");
    var q15 = $("input[name=curriculum]");
    var q16 = $("input[name=workload]");
    var q17 = $("input[name=facilities]");
    var q18 = $("input[name=teaching]");
    var q19 = $("input[name=research]");
    var q20 = $("input[name=labor_market_relevance]");
    var q21 = $("input[name=OJT]");
    var q22 = $("input[name=social_and_community_involvement]");
 
    pageCheckbox(11);
    var pageEleven = q01.add(q02).add(q03).add(q04).add(q05).add(q06).add(q07).add(q08).add(q09).add(q10).add(q11).add(q12).add(q13).add(q14).add(q15).add(q16).add(q17).add(q18).add(q19).add(q20).add(q21).add(q22);
    pageEleven.change(function() {
        if (isQAnswered(11) && $(q02).is(':checked') && $(q03).is(':checked') && $(q04).is(':checked') && $(q05).is(':checked') && $(q06).is(':checked') && $(q07).is(':checked') && $(q08).is(':checked') && $(q09).is(':checked') && $(q10).is(':checked') && $(q11).is(':checked') && $(q12).is(':checked') && $(q13).is(':checked') && $(q14).is(':checked') && $(q15).is(':checked') && $(q16).is(':checked') && $(q17).is(':checked') && $(q18).is(':checked') && $(q19).is(':checked') && $(q20).is(':checked') && $(q21).is(':checked') && $(q22).is(':checked')) {
            $(".nextButtonEleven").removeAttr("disabled", false);
        } else {
             $(".nextButtonEleven").attr("disabled", true);
        }
    });
}

function isQAnswered(pageNumber){
    var currentForm = $(".formPage[page="+pageNumber+"]")
    if( currentForm.find('.other').is(":checked")){ 
        if(currentForm.find('.text').val() != ""){
            return true;
        }
        else{
            currentForm.find('.text').attr('required', true)
            return false;
        }
    }else if(currentForm.find(".notOther").is(":checked")){
        return true;
    }
     else{
         return false;
    }
     
}
function pageCheckbox(pageNumber){
    var currentForm = $(".formPage[page="+pageNumber+"]");
    var checkbox = currentForm.find(".other");
    var textbox = currentForm.find(".text");
    
    textbox.keyup(function(){
        if (this.value.length > 0) {
            checkbox.prop('checked', true);
            checkbox.trigger('change')
            console.log('other is checked');
        }
        else {
            checkbox.prop('checked', false);  
            checkbox.trigger('change')
            console.log('other is unchecked');
        }
    });
    checkbox.change(function(){
        if (textbox.val().length != 0) {
            textbox.prop("disabled", !this.checked);
        }
    });
   
}

function isQAnsweredTwo(){
    var otherTwo =  $('.otherTwo')
    var notOtherTwo =  $('.notOtherTwo')
    var textTwo =  $('.textTwo')
    if( otherTwo.is(":checked")){ 
        if(textTwo.val() != ""){
            return true;
        }
        else{
            textTwo.attr('required', true)
            return false;
        }
    }else if(notOtherTwo.is(":checked")){
        return true;
    }
     else{
         return false;
    }
     
}
function pageCheckboxTwo(){
    var checkbox =  $('.otherTwo')
    var textbox =  $('.textTwo')
    
    textbox.keyup(function(){
        if (this.value.length > 0) {
            checkbox.prop('checked', true);
            checkbox.trigger('change')
            console.log('other is checked');
        }
        else {
            checkbox.prop('checked', false);  
            checkbox.trigger('change')
            console.log('other is unchecked');
        }
    });
    checkbox.change(function(){
        if (textbox.val().length != 0) {
            textbox.prop("disabled", !this.checked);
        }
    });
   
}
$(document).ready(function(){
    $('select.selectClass option:first').attr('disabled', true);
    showPage (1);
    pageOneValidate();
    pageTwoValidate();
    pageThreeValidate();
    pageFourValidate();
    pageFiveValidate();
    pageSixValidate();
    pageSevenValidate();
    pageEightValidate();
    pageNineValidate();
    pageTenValidate();
    pageElevenValidate();
    // pageTwoCheckbox();
});





