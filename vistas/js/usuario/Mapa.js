function initMap() {
    var uluru = {lat: 0, lng: 0};
    // The map, centered at Uluru
    
    var map = new google.maps.Map(
    document.getElementById('map'), {zoom: 15, center: uluru});
    infoWindow = new google.maps.InfoWindow;
    miUbicacion(map)
    getPlaces(map);
    getSendedLocation(map);

  }
  function miUbicacion(map){
    if(navigator.geolocation){
        var meImage=window.location.origin+"/vistas/img/ic_person.png";
        navigator.geolocation.getCurrentPosition(function(position){
           // navigator.geolocation.watchPosition(function(position){
          var pos={
              lat: position.coords.latitude,
              lng: position.coords.longitude
        }
        map.setCenter(pos);
        var locationMarker= new google.maps.Marker({position: pos,
             map:map,
              title:"Yo",
              icon: meImage
            });
            },function(){alert("No se pudo acceder a la ubicación")},function (){},{enableHighAccuracy:true}
        );
    }else{
        alert("No se pudo acceder a la ubicación")
    }
  }
  function getPlaces(mapa){
   //Funcion para obtener y dibujar los puntos en el mapa
    $.ajax({
        url: window.location.origin+"/GetComercios",
        dataType: "JSON",
        success: function(json){
            console.log(json)
            var image=window.location.origin+"/vistas/img/ic_pda.png"
            var infoWindow= new google.maps.InfoWindow()
            for(var i=0;i< json.length;i++){
                var lat=json[i].latitud;
                var lng=json[i].longitud;
                var marker = new google.maps.Marker({position: new google.maps.LatLng(lat,lng),
                     map: mapa, 
                     title: json[i].nombre,
                    icon: image});
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infoWindow.setContent(json[i].nombre);
                            if(infoWindow.getMap()){
                                infoWindow.close();
                            }else{//Si no esta abierta,getMap() es nulo
                                infoWindow.open(mapa, marker);
                            }
                        }    
                    })(marker, i));
                    
            }
        }
    })
      
  }
  function getSendedLocation(mapa){
    //Funcion para obtener y dibujar los puntos en el mapa
     $.ajax({
         url: "",
         type : "get",
         data : {
             func : getUrlVars()["func"],
             id : getUrlVars()["id"]
         },
         dataType: "JSON",
         success: function(json){
             var obj= jQuery.parseJSON(JSON.stringify(json));
             var lugares= obj.Lugares;
             for(var i=0;i<lugares.length;i++){
                var lat=lugares[i].latitud
                var lng=lugares[i].longitud
                var marker = new google.maps.Marker({position: new google.maps.LatLng(lat,lng),
                    map: mapa, 
                    title: "otro"});
             }
         }
     })
       
   }
  function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
