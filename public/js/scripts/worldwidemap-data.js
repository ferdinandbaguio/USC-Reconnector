$(document).ready( function() {

  function isEmpty(obj) {
    for(var key in obj) {
        if(obj.hasOwnProperty(key))
            return false;
    }
    return true;
}
  // Dynamic Data
  var obj = {"o1": country_flag,"o2": country_name,"o3": code_value};
  console.log(obj);

  var n = 1;
  var percentage = 0;

  $("button#load").click(function(){
    for(var i = n;n <= i+4;n++){
      if(isEmpty(obj)) {
          i=0;
        }
      else{
        percentage = Math.floor((Math.random() * 100) + 1);
        $('tbody').append("<tr><td><img class='m-r-10' src="+obj["o1"][n]+" />"+obj["o2"][n]+"</td><td>"+obj["o3"][country_code[n]]+"</td><td><div class='progress'><div class='progress-bar progress-bar-success' role='progressbar' style='width:"+percentage+"%; height:5px;' aria-valuenow='52' aria-valuemin='0' aria-valuemax='100'></div></div>"+percentage+"%</td></tr>");
      }
    }
  });

  for(var ii = 1;ii <= 175;ii++){
    percentage = Math.floor((Math.random() * 27) + 1);
    $('tbody').append("<tr><td><img class='m-r-10' src="+obj["o1"][ii]+" />"+obj["o2"][ii]+"</td><td>"+obj["o3"][country_code[ii]]+"</td><td><div class='progress'><div class='progress-bar progress-bar-success' role='progressbar' style='width:"+percentage+"%; height:5px;' aria-valuenow='52' aria-valuemin='0' aria-valuemax='100'></div></div>"+percentage+"%</td></tr>");
  }
 
}); 
$(function() {

  $('#world-map').vectorMap({
    map: 'world_mill_en',
    backgroundColor: 'SkyBlue',
    series: {
      regions: [{
      values: code_value,
          scale: ['#E6FFE6', '#008000'],
          normalizeFunction: 'polynomial'
      }]
    },
    showTooltip: true,
    onRegionTipShow: function(e, el, code){
      el.html(el.html()+' (Alumni: '+ code_value[code]+')');
    },
    
    markerStyle: {
      initial: {
        fill  : '#cc0000',
        stroke: '#333'
      }
    },
    markers: [
      {
        latLng: [1.3, 103.8],
        name: 'Singapore : 12 Alumni'
      },
      {
        latLng: [38, -105],
        name: 'USA : 11 Alumni',
      },
      {
        latLng: [58, -115],
        name: 'Canada : 7 Alumni',
      },
      {
        latLng: [-25, 140],
        name: 'Australia : 8 Alumni',
      },
      {
        latLng: [55.00, -3.50],
        name: 'UK : 2 Alumni',
      },
      {
        latLng: [21, 78],
        name: 'India : 3 Alumni',
      },
      {
        latLng: [25.00, 54.00],
        name: 'UAE : 9 Alumni',
      }
    ]
  });

  $(function() {
    $('#example-table').DataTable({
        pageLength: 10, 
    });
  })

});