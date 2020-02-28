  
<form>
  <div id="googleMap" style="height:400px;width:100%;"></div>
</form>

<script>

function myMap() {
 var puntos = [ 
      ['Punto 1', 13.705243, -89.24231, 4],
      ['Punto 2', 13.696674, -89.197927, 5],
      ['Punto 3', 14.692511, -87.86136, 3],
      ['Punto 4', 12.02274, -86.252007, 2],
      ['Punto 5',  8.103289, -80.596013, 1]
    ];
	
var mapOptions = {
  zoom: 4,
  center: new google.maps.LatLng(13.705243,-89.24231),
  mapTypeId: google.maps.MapTypeId.ROADMAP
}

var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
var infowindow = new google.maps.InfoWindow();
var marker, i;

    for (i = 0; i < puntos.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(puntos[i][1], puntos[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(puntos[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

	marker.setMap(map);
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjyM0CyjiksJbMk4SVzZTz-Uzn5QusoRE&callback=myMap"></script>
