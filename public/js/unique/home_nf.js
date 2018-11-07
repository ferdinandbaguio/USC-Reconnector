

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
  $('#title' + id).attr('readonly', false)
  .removeClass("form-control-plaintext")
  .addClass('form-control');

  $('#content' + id).attr('readonly', false)
  .removeClass("form-control-plaintext")
  .addClass('form-control');

  $('#formBtn' + id).slideDown("slow");
  $('#titleLabel' + id).slideDown("slow");
  $('#contentLabel' + id).slideDown("slow");
}
function cancelEdit(id){
  $('#title' + id).attr('readonly', true)
  .removeClass("form-control")
  .addClass('form-control-plaintext');

  $('#content' + id).attr('readonly', true)
  .removeClass("form-control")
  .addClass('form-control-plaintext');

  $('#formBtn' + id).slideUp("slow");
  $('#titleLabel' + id).slideUp("slow");
  $('#contentLabel' + id).slideUp("slow");
}



