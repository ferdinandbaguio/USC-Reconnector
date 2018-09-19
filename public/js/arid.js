function deToggle(){
    var ariaValue = document.getElementById('classCollapse').getAttribute("aria-expanded");
    if(ariaValue==="true"){
      document.getElementById('classCollapse').click()
    }
}