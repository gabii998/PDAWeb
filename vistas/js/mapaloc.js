$(function () {
  var mapaLoc = {};

  (function (app) {
 
    var map, geocoder;
    app.init = function () {
      //Esta función pone en marcha todo
      app.iniciarMapa();
      app.bindings();

    };
    app.agregarMarker=function(location,direccionmarker,latmarker,longmarker){
        var marker = new google.maps.Marker({
            map: map,
            position: location
          });
         infowindow = new google.maps.InfoWindow({
            content: '' + direccionmarker + '<br> Latitud: ' + latmarker + '<br> Longitud: ' + longmarker
          });
          infowindow.open(map, marker)
       
    };
    app.bindings = function(){
      //Realiza el bindeo de los botones
      $( "#ubicacionLocal" ).keydown(function() {
        if($("#ubicacionLocal").val().trim().length >=0){
          //No activa el boton localizar hasta que no se complete el campo
          $("#localizar").removeAttr("disabled");
        }
      });
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
      var address = document.getElementById('ubicacionLocal').value;
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
          app.agregarMarker(results[0].geometry.location,results[0].formatted_address,results[0].geometry.location.lat().toFixed(6),results[0].geometry.location.lng().toFixed(6));
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
