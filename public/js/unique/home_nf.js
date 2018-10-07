

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