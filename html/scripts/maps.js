var markers= []
function initMap() {

	var KEY= "AIzaSyBybtSNB8gBPm5QwaE4hF_k0hwBF8uiCbo";
	var kampala = {lat: 0.3476, lng: 32.5825};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 6,
		center: kampala
	});
	var marker = new google.maps.Marker({
		position: kampala,
		map: map
	});
	markers.push(marker);

	function get_location(latlng) {
    var xmlHttp = new XMLHttpRequest();
    var data= "https://maps.googleapis.com/maps/api/geocode/json?latlng=";
    data+= latlng.lat()+","+latlng.lng()+"&key="+KEY;
    xmlHttp.open( "GET", data , false ); // false for synchronous request
    xmlHttp.send();
    info= JSON.parse(xmlHttp.responseText);
    try{
    	return info.results[2].formatted_address;
    }catch(e){
    	console.log("Error :(")
    	return "";
    }
	}

	function placeMarker(location) {
    var new_marker = new google.maps.Marker({
        position: location,
        label: get_location(location),
        map: map
    });
    markers.push(new_marker);
	}

	google.maps.event.addListener(map, 'click', function(event) {
   placeMarker(event.latLng);
	});
}