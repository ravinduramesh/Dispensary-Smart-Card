var map;

function initMap() {
 
    //The center location of our map.
    var myLat = document.getElementById('lat').value;
    var myLng = document.getElementById('lng').value;
    var centerOfMap = new google.maps.LatLng(myLat, myLng);
 
    //Map options.
    var options = {
      center: centerOfMap, //Set center.
      zoom: 7 //The zoom value.
    };
 
    //Create the map object.
    map = new google.maps.Map(document.getElementById('map'), options);
 
    var clickedLocation = centerOfMap;

    marker = new google.maps.Marker({
        position: clickedLocation,
        map: map,
        draggable: false
    });

    //Get the marker's location.
    var currentLocation = marker.getPosition();
}
        
        
//Load the map when the page has finished loading.
google.maps.event.addDomListener(window, 'load', initMap);