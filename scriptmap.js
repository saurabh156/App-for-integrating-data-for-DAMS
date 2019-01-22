function initMap() {

	var siyom1 = {
		info: '<strong>Siyom River</strong>\
		<a href="report_main.php" id="buton" onclick="getReport()">Get Report</a>',
		lat: 28.2333,
		long: 95
	};
	var siyom2 = {
		info: '<strong>Siyom River</strong>\
		<a href="report_main.php" id="buton" onclick="getReport()">Get Report</a>',
		lat: 28.2433,
		long: 95.0100
	};
	var siyom3 = {
		info: '<strong>Siyom River</strong>\
		<a href="report_main.php" id="buton" onclick="getReport()">Get Report</a>',
		lat: 28.2533,
		long: 95.0200
	};

	var brahmaputra1 = {
		info: '<strong>Brahmaputra River</strong>\
		<a href="report_main.php" id="buton" onclick="getReport()">Get Report</a>',
		lat: 28.2433,
		long: 94.9103
	};
	var brahmaputra2 = {
		info: '<strong>Brahmaputra River</strong>\
		<a href="report_main.php" id="buton" onclick="getReport()">Get Report</a>',
		lat: 28.2533,
		long: 94.9003
	};
	var brahmaputra3 = {
		info: '<strong>Brahmaputra River</strong>\
		<a href="report_main.php" id="buton" onclick="getReport()">Get Report</a>',
		lat: 28.2633,
		long: 94.9203
	};

	var yarlung1 = {
		info: '<strong>Yarlung Zangbo River</strong>\
		<a href="report_main.php" id="buton" onclick="getReport()">Get Report</a>',
		lat: 28.3397745,
		long: 94.6868
	};
	var yarlung2 = {
		info: '<strong>Yarlung Zangbo River</strong>\
		<a href="report_main.php" id="buton" onclick="getReport()">Get Report</a>',
		lat: 28.3497745,
		long: 94.6868
	};
	var yarlung3 = {
		info: '<strong>Yarlung Zangbo River</strong>\
		<a href="report_main.php" id="buton" onclick="getReport()">Get Report</a>',
		lat: 28.3497745,
		long: 94.6968
	};

	var locations = [
      [siyom1.info, siyom2.lat, siyom1.long, 0],
	  [siyom2.info, siyom2.lat, siyom2.long, 1],
	  [siyom3.info, siyom3.lat, siyom3.long, 2],
	  [yarlung3.info, yarlung1.lat, yarlung3.long, 0],
	  [yarlung2.info, yarlung2.lat, yarlung2.long, 1],
	  [yarlung1.info, yarlung1.lat, yarlung1.long, 2],
	  [brahmaputra1.info, brahmaputra1.lat, brahmaputra1.long, 0],
	  [brahmaputra2.info, brahmaputra2.lat, brahmaputra2.long, 1],
	  [brahmaputra3.info, brahmaputra3.lat, brahmaputra3.long, 2],
      ];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 11,
		center: new google.maps.LatLng(28.2333,94.8903),
		mapTypeId: google.maps.MapTypeId.TERRAIN
		
	});
	
	//var image=https://maps.gstatic.com/mapfiles/ms2/micons/grn-pushpin.png;
	
	var infowindow = new google.maps.InfoWindow({});

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
		});

		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
}
function getReport() {
    $(document).ready(function(){
    $("buton").click(function(){
        $("#map").load("report_main.php");
    });
});
}
