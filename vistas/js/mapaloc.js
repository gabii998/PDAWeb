$(function () {
  var mapaLoc = {};

  (function (app) {
    var map, geocoder;
    app.init = function () {
      //Esta función pone en marcha todo
      app.iniciarMapa();
      app.bindings();

    };

    app.bindings = function(){
      //Realiza el bindeo de los botones
      $("#localizar").click(function(e){
        app.codeAddress(map,geocoder);
      }
      )};

    app.iniciarMapa = function () {
      //Inicializa el mapa
      var latlng = new google.maps.LatLng(-32.8868558, -68.8473679);

      var mapOptions = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
      // llama a la funcion
      geocoder = new google.maps.Geocoder();
    };

    app.codeAddress = function () {
      //Codifica la direccion
      var address = document.getElementById('address').value;
      // Función completa de Geocoding
      geocoder.geocode({
        'address': address
        // 'latLng': 
      }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          $("#x").html(results[0].geometry.location.lat().toFixed(6));
          $("#y").html(results[0].geometry.location.lng().toFixed(6));
          map.setCenter(results[0].geometry.location);
          $("#direccion").html(results[0].formatted_address);
          var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
          });
          //podemos personalisar el toltip aqui
          infowindow = new google.maps.InfoWindow({
            content: '' + results[0].formatted_address + '<br> Latitud: ' + results[0].geometry.location.lat().toFixed(6) + '<br> Longitud: ' + results[0].geometry.location.lng().toFixed(6)
          });
          infowindow.open(map, marker)
        }
        // error
        else {
          if (status == 'ZERO_RESULTS') { alert('NO SE ENCONTRO LA UBICACION') } else {
            alert('Geocode no tuvo éxito por la siguiente razón: ' + status)
          }
        }
      })
    };
    app.init();
  })(mapaLoc);
});
