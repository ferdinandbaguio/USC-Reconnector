initMap();
function initMap() {
            var alumLoc1 = $('#loc1').text();
            var alumLongit = $('#loc2').text();
            // The location of San Carlos
            var jobLocationAlumnus = new google.maps.LatLng(alumLoc1,alumLongit);
            // The map, centered at San Carlos
            var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 16, center: jobLocationAlumnus});

            // The marker, positioned at San Carlos
            var iconPNG = {
                    url: "/img/others/mapPin.png", // url
                    scaledSize: new google.maps.Size(50, 50), // scaled size
                    };
            var marker = new google.maps.Marker({
              position: jobLocationAlumnus,
              animation: google.maps.Animation.BOUNCE,
              //icon: iconPNG,
              map: map
             });
            // The circle area by jonas
              var specifiedLoc = new google.maps.Circle({
                center: jobLocationAlumnus,
                radius: 220,
                strokeColor: "#616161",
                strokeOpacity: 0.5,
                strokeWeight: 2,
                fillColor: "#616161",
                fillOpacity: 0.4,
                scale:10
              });
              specifiedLoc.setMap(map);        
          }