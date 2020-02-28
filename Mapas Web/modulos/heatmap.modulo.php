
  <form>
	<div id="heatmap" style="height:400px;width:100%;"></div>
  </form>
 
<script>

function myMap() {

var PuntosDeCalor = [
  new google.maps.LatLng(13.705243, -89.24231),
  new google.maps.LatLng(13.696674, -89.197927),
  new google.maps.LatLng(14.692511, -87.86136,),
  new google.maps.LatLng(12.02274, -86.252007),
  new google.maps.LatLng(8.103289, -80.596013),
];

var PuntoCentral = new google.maps.LatLng(13.696674, -89.197927);

	map = new google.maps.Map(document.getElementById('heatmap'), {
		center: PuntoCentral,
		zoom: 4,
		mapTypeId: 'satellite'
	});

	var heatmap = new google.maps.visualization.HeatmapLayer({
		data: PuntosDeCalor
	});

	heatmap.setMap(map);
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjyM0CyjiksJbMk4SVzZTz-Uzn5QusoRE&libraries=visualization&callback=myMap"></script>



 