
// Checks if class in side navigation is open. 
function deToggle(){
      var ariaValue = document.getElementById("classCollapse").getAttribute("aria-expanded");
      if(ariaValue==="true"){
        document.getElementById('classCollapse').click();
      }
    }