function initMap() {
    var uluru = {lat: 0, lng: 0};
    // The map, centered at Uluru
    
    var map = new google.maps.Map(
    document.getElementById('map'), {zoom: 15, center: uluru});
    infoWindow = new google.maps.InfoWindow;
  }