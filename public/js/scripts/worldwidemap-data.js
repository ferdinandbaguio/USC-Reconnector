$(function() {

var mapData = {
    "US": 7402,
    'RU': 5105,
    "AU": 4700,
    "CN": 4650,
    "FR": 3800,
    "DE": 3780,
    "GB": 2400,
    "SA": 2350,
    "BR": 2270,
    "IN": 1870,
  }
  $('#world-map').vectorMap({
    map: 'world_mill_en',
    series: {
      regions: [{
      values: mapData,
          scale: ['#C7FFC7', '#00A300'],
          normalizeFunction: 'polynomial'
      }]
    },
    showTooltip: true,
    onRegionTipShow: function(e, el, code){
      el.html(el.html()+' (GDP - '+mapData[code]+')');
    },
    // onRegionTipShowx: function(e, el, code){
    //     el.html(el.html()+' (Visits - '+mapData[code]+')');
    // },
    markerStyle: {
      initial: {
        fill  : '#3498db',
        stroke: '#333'
      }
    },
    markers: [
      {
        latLng: [1.3, 103.8],
        name: 'Singapore : 203'
      },
      {
        latLng: [38, -105],
        name: 'USA : 755',
      },
      {
        latLng: [58, -115],
        name: 'Canada : 700',
      },
      {
        latLng: [-25, 140],
        name: 'Australia : 304',
      },
      {
        latLng: [55.00, -3.50],
        name: 'UK : 202',
      },
      {
        latLng: [21, 78],
        name: 'India : 410',
      },
      {
        latLng: [25.00, 54.00],
        name: 'UAE : 180',
      }
    ]
  });

});