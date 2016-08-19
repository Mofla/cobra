

<div id="map"></div>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: {lat: 48.691480, lng: 6.216089}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
            geocodeAddress(geocoder, map);
        });
    }

    function geocodeAddress(geocoder, resultsMap) {
        var selectElmt = document.getElementById("ville");
        var address = selectElmt.options[selectElmt.selectedIndex].text;
        geocoder.geocode({'address': address}, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                resultsMap.setCenter(results[0].geometry.location);
                document.getElementById('lat').value = results[0].geometry.location.lat();
                document.getElementById('lng').value = results[0].geometry.location.lng();
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location
                });
            } else {
                alert('veuillez rentrer un champ "ville" correct ' + status);
            }
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfSTbiHj6oUWf6jPrPmUcHVgjbcvOeoHo&signed_in=true&callback=initMap"
        async defer></script>


