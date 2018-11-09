

//Script for Announcements and Job Posts Tab
function hideJob() {
      var jobClasses = document.querySelectorAll('.jobHolder'),
            i = 0,
            l = jobClasses.length;

        for (i; i < l; i++) {
            jobClasses[i].style.display = 'none';
      }
      document.getElementById("jobI").style.display = "none";

      var annClasses = document.querySelectorAll('.annHolder'),
            i = 0,
            l = annClasses.length;

        for (i; i < l; i++) {
            annClasses[i].style.display = 'block';
      }
      document.getElementById("annI").style.display = "inline";
    }


function hideAnn() {
      var annClasses = document.querySelectorAll('.annHolder'),
            i = 0,
            l = annClasses.length;

        for (i; i < l; i++) {
            annClasses[i].style.display = 'none';
      }

      document.getElementById("annI").style.display = "none";
      var jobClasses = document.querySelectorAll('.jobHolder'),
            i = 0,
            l = jobClasses.length;

        for (i; i < l; i++) {
            jobClasses[i].style.display = 'block';
      }

      document.getElementById("jobI").style.display = "inline";
    }


// TEXT AREA AUTOMATIC HEIGHT
$(document).ready(function(){ 
  $('.annTextArea').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;resize:none');
  }).on('input', function () {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
  });
});

// EDIT TOGGLE FORM
function editPost(id){
  $('#origHolder' + id).slideUp();
  $('#editHolder' + id).slideDown();
  CKEDITOR.replace('article-ckeditor' + id);
}
function cancelEdit(id){
  $('#origHolder' + id).slideDown();
  $('#editHolder' + id).slideUp();
}
function editJPost(id){
  $('#origJHolder' + id).slideUp();
  $('#editJHolder' + id).slideDown();
}
function cancelJEdit(id){
  $('#origJHolder' + id).slideDown();
  $('#editJHolder' + id).slideUp();
}
  


