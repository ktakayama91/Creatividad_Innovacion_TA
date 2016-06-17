$( document ).ready(function(){	


});

function initMap() {

  var mapDiv = document.getElementById('map');
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;   
  var map = new google.maps.Map(mapDiv, {
    center: {lat: -12.0689431, lng: -77.0823786},
    zoom: 15
  });

  map.setOptions({'scrollwheel': false});

  map.addListener('click',function(){
    directionsDisplay.setMap();
  });
 
  setMyPos(map);  

  setSampleMarkers(map,directionsService,directionsDisplay);  
}

function initMapQuinoa(){

  var mapDiv = document.getElementById('map');
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;   
  var map = new google.maps.Map(mapDiv, {
    center: {lat: -12.106231, lng:-77.038863},
    zoom: 15
  });

  map.setOptions({'scrollwheel': false});
  setMyPos(map);

  setQuinoaMarker(map,directionsService,directionsDisplay);
}

function LocationControl(controlDiv, map, pos) {

  // Set CSS for the control border.
  var firstChild = document.createElement('button');
    firstChild.style.backgroundColor = '#fff';
    firstChild.style.border = 'none';
    firstChild.style.outline = 'none';
    firstChild.style.width = '28px';
    firstChild.style.height = '28px';
    firstChild.style.borderRadius = '2px';
    firstChild.style.boxShadow = '0 1px 4px rgba(0,0,0,0.3)';
    firstChild.style.cursor = 'pointer';
    firstChild.style.marginRight = '10px';
    firstChild.style.padding = '0';
    firstChild.title = 'Your Location';
    controlDiv.appendChild(firstChild);

  // Set CSS for the control interior.
  var secondChild = document.createElement('div');
    secondChild.style.margin = '5px';
    secondChild.style.width = '18px';
    secondChild.style.height = '18px';
    secondChild.style.backgroundImage = 'url(https://maps.gstatic.com/tactile/mylocation/mylocation-sprite-2x.png)';
    secondChild.style.backgroundSize = '180px 18px';
    secondChild.style.backgroundPosition = '0 0';
    secondChild.style.backgroundRepeat = 'no-repeat';
    firstChild.appendChild(secondChild);

    google.maps.event.addListener(map, 'center_changed', function () {
        secondChild.style['background-position'] = '0 0';
    });

  // Setup the click event listeners: simply set the map to Chicago.
  firstChild.addEventListener('click', function() {
    map.setCenter(pos);
    map.setZoom(15);
  });
}

function calculateAndDisplayRoute(directionsService, directionsDisplay,start,end) {
  directionsService.route({
    origin: start,
    destination: end,
    travelMode: google.maps.TravelMode.DRIVING
  }, function(response, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

function setMyPos(map){

  if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
       var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        var infoWindow = new google.maps.InfoWindow();
        
        map.setCenter(pos);

        var marker = new google.maps.Marker({
        position: pos,
        map: map,
        icon: 'http://i.stack.imgur.com/orZ4x.png',
        title: 'Location'
        });        

        var centerControlDiv = document.createElement('div');
        var centerControl = new LocationControl(centerControlDiv, map, pos);
        centerControlDiv.index = 1;
        map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(centerControlDiv);

      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }  
}

function setSampleMarkers(map, directionsService, directionsDisplay){

  var marker1 = new google.maps.Marker({
    position: {lat: -12.106231, lng:-77.038863},
    map: map,
    title: 'Quinoa Cafe'
  });
  marker1.addListener('click', function() {
    navigator.geolocation.getCurrentPosition(function(position) {
       var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        directionsDisplay.setMap(map);
        calculateAndDisplayRoute(directionsService, directionsDisplay, pos, marker1.position);
      });    
  });

  var marker2 =new google.maps.Marker({
    position: {lat: -12.110868, lng: -77.037107},
    map: map,
    title: 'Mandala Juice Bar'
  });
  marker2.addListener('click', function() {
    navigator.geolocation.getCurrentPosition(function(position) {
       var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        directionsDisplay.setMap(map);
        calculateAndDisplayRoute(directionsService, directionsDisplay, pos, marker2.position);
      });
  });

  var marker3 =new google.maps.Marker({
    position: {lat: -12.09445, lng: -77.018356},
    map: map,
    title: 'Green Is Better'    
  });
  marker3.addListener('click', function() {
    navigator.geolocation.getCurrentPosition(function(position) {
       var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        directionsDisplay.setMap(map);
        calculateAndDisplayRoute(directionsService, directionsDisplay, pos, marker3.position);
      });
  });

  var marker4 =new google.maps.Marker({
    position: {lat: -12.089623, lng: -77.049326},
    map: map,
    title: 'Ino'    
  });
  marker4.addListener('click', function() {
    navigator.geolocation.getCurrentPosition(function(position) {
       var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        directionsDisplay.setMap(map);
        calculateAndDisplayRoute(directionsService, directionsDisplay, pos, marker4.position);
      });
  });

  var marker5 =new google.maps.Marker({
    position: {lat: -12.076807, lng: -77.0838775},
    map: map,
    title: 'Plaza San Miguel'    
  });
  marker5.addListener('click', function() {
    navigator.geolocation.getCurrentPosition(function(position) {
       var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        directionsDisplay.setMap(map);
        calculateAndDisplayRoute(directionsService, directionsDisplay, pos, marker5.position);
      });
  });
}

function setQuinoaMarker(map, directionsService, directionsDisplay){
  var marker1 = new google.maps.Marker({
    position: {lat: -12.106231, lng:-77.038863},
    map: map,
    title: 'Quinoa Cafe'
  });  
  
    navigator.geolocation.getCurrentPosition(function(position) {
       var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        directionsDisplay.setMap(map);
        calculateAndDisplayRoute(directionsService, directionsDisplay, pos, marker1.position);
       
  });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}