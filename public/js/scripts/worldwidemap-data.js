$(document).ready(function() {
  var obj = {
    flag: country_flag,
    ctry: country_name,
    code: country_code,
  };
  $('#countryField').val(JSON.stringify(obj));
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