
//<![CDATA[

var map, geocoder;
window.onload = function () {
                                                                
  var latlng = new google.maps.LatLng(-32.8868558 , -68.8473679 );
    
  var mapOptions = {
    zoom: 15,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
  // llama a la funcion
  geocoder = new google.maps.Geocoder();
};
 
function codeAddress() {
  var address = document.getElementById('address').value;
  // Función completa de Geocoding
  geocoder.geocode({
    'address': address
// 'latLng': 
  }, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      document.getElementById('x').innerHTML = results[0].geometry.location.lat().toFixed(6);
      document.getElementById('y').innerHTML = results[0].geometry.location.lng().toFixed(6);
      map.setCenter(results[0].geometry.location);
      document.getElementById('direccion').innerHTML = results[0].formatted_address;
      var marker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location
      });
	  //podemos personalisar el toltip aqui
      infowindow = new google.maps.InfoWindow({
        content: ''+results[0].formatted_address + '<br> Latitud: ' + results[0].geometry.location.lat().toFixed(6) + '<br> Longitud: ' + results[0].geometry.location.lng().toFixed(6)
      });
      infowindow.open(map, marker)
    }
// error
else {
    if(status=='ZERO_RESULTS'){alert('NO SE ENCONTRO LA UBICACION')}else{
      alert('Geocode no tuvo éxito por la siguiente razón: ' + status)}
    }
  })
};
//]]>
