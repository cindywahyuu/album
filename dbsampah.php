<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="DIVSIG UGM">
    <meta name="description" content="leaflet basic">

    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    />
    <!-- Marker Cluster -->
    <link
      rel="stylesheet"
      href="assets/plugins/leaflet-markercluster/MarkerCluster.css"
    />
    <link
      rel="stylesheet"
      href="assets/plugins/leaflet-markercluster/MarkerCluster.Default.css"
    />
    <!-- Routing -->
    <link
      rel="stylesheet"
      href="assets/plugins/leaflet-routing/leaflet-routing-machine.css"
    />
    <!-- Search CSS Library -->
    <link
      rel="stylesheet"
      href="assets/plugins/leaflet-search/leaflet-search.css"
    />
    <!-- Geolocation CSS Library for Plugin -->
    <link
      rel="stylesheet"
      href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css"
    />
    <!-- Leaflet Mouse Position CSS Library -->
    <link
      rel="stylesheet"
      href="assets/plugins/leaflet-mouseposition/L.Control.MousePosition.css"
    />
    <!-- Leaflet Measure CSS Library -->
    <link
      rel="stylesheet"
      href="assets/plugins/leaflet-measure/leaflet-measure.css"
    />
    <!-- EasyPrint CSS Library -->
    <link
      rel="stylesheet"
      href="assets/plugins/leaflet-easyprint/easyPrint.css"
    />

    <!-- Judul pada tab browser -->
    <title>Partisipatif Pemetaan Bank Sampah</title>

    <!-- Bootstrap CSS Library -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Leaflet CSS Library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css">

    <!-- Tab browser icon -->
    <link rel="icon" type="image/x-icon" href="http://luk.staff.ugm.ac.id/logo/UGM/Resmi/Warna.gif">

    <style>
        /* Tampilan peta fullscreen */
        html,
        body,
        #map {
            height: 97%;
            width: 100%;
            margin: 0px;
        }

        
    </style>
</head>

<body>

<!-- Leaflet and Plugins -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="assets/plugins/leaflet-markercluster/leaflet.markercluster.js"></script>
<script src="assets/plugins/leaflet-markercluster/leaflet.markercluster-src.js"></script>
<script src="assets/plugins/leaflet-routing/leaflet-routing-machine.js"></script>
<script src="assets/plugins/leaflet-routing/leaflet-routing-machine.min.js"></script>
<script src="assets/plugins/leaflet-search/leaflet-search.js"></script>
<script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>
<script src="assets/plugins/leaflet-mouseposition/L.Control.MousePosition.js"></script>
<script src="assets/plugins/leaflet-measure/leaflet-measure.js"></script>
<script src="assets/plugins/leaflet-easyprint/leaflet.easyPrint.js"></script>

 <!-- Include your GeoJSON data -->
 <script src="./data.js"></script>



 <!-- Bootstrap Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Partisipatif Pemetaan Bank Sampah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Input <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand" href="index.html">Back to home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ayo berpatisipasi untuk lingkungan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <!-- Form to input data -->
                <form action="process.php" method="post">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Bank Sampah:</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" required placeholder="Masukkan Nama Bank Sampah">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="latitude" class="col-sm-2 col-form-label">Latitude:</label>
                            <div class="col-sm-10">
                                <input type="text" name="latitude" class="form-control" required placeholder="Contoh: -7.794760241050732">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="longitude" class="col-sm-2 col-form-label">Longitude:</label>
                            <div class="col-sm-10">
                                <input type="text" name="longitude" class="form-control" required placeholder="Contoh: 110.36718249219427">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <input type="submit" value="Tambahkan Bank Sampah" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Leaflet JavaScript Library -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script> 

    <div id="map"></div> 

    <script>
        /* Initial Map */
        var map = L.map('map').setView([-7.794760241050732, 110.36718249219427], 11); //lat, long, zoom
        /* Tile Basemap */
        var basemap1 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> | <a href="DIVSIG UGM" target="_blank">DIVSIG UGM</a>' //menambahkan nama//
        });
        var basemap2 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{ z } / { y } / { x }',
            {
                attribution: 'Tiles &copy; Esri | <a href="Latihan WebGIS" target="_blank">DIVSIG UGM</a>'
            });
        var basemap3 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{ z } / { y } / { x }',
            {
                attribution: 'Tiles &copy; Esri | <a href="Lathan WebGIS" target="_blank">DIVSIG UGM</a>'
            });
        var basemap4 = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptile s.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
        });
        basemap1.addTo(map);

/* Control Layer */
var baseMaps = {
            "OpenStreetMap": basemap1,
            "Esri World Street": basemap2,
            "Esri Imagery": basemap3,
            "Stadia Dark Mode": basemap4
        };
        var overlayMaps = {
            // "Gedung B DIVSIG UGM": marker1,
            // "RS.Akademik UGM": marker2,
        };
        L.control.layers(baseMaps, overlayMaps, { collapsed: false }).addTo(map);

        /* Scale Bar */
        L.control.scale({
            maxWidth: 150, position: 'bottomright'
        }).addTo(map); 

        //  // Definisikan ikon kustom
        //  var customIcon = L.icon({
        //     iconUrl: 'https://www.freepnglogos.com/uploads/lokasi-logo-png/lokasi-logo-map-pin-klaris-apartments-8.png', // Ganti URL_GAMBAR_ICON dengan URL gambar ikon Anda
        //     iconSize: [50, 50], // Atur ukuran ikon
        //     iconAnchor: [16, 32], // Anchor point ikon (titik yang menunjukkan lokasi)
        //     popupAnchor: [0, -32] // Anchor point untuk popup (jika Anda menggunakan popup)
        // });




        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "responsi_pgweb";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM banksampah";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $lat = $row["Latitude"];
                $long = $row["Longitude"];
                $info = $row["Nama"];
                echo "L.marker([$lat, $long]).addTo(map).bindPopup('$info');";
            } 
        }
        else {
            echo "0 results";
        }
            $conn->close();
    ?>

     // Create a GeoJSON layer for polygon data
     var wfsgeoserver1 = L.geoJson(null, {
        style: function (feature) {
          // Adjust this function to define styles based on your polygon properties
          var value = feature.properties.jumlah_pen; // Change this to your actual property name
          return {
            fillColor: getColor(value),
            weight: 2,
            opacity: 1,
            color: "white",
            dashArray: "3",
            fillOpacity: 0.7,
          };
        },
        onEachFeature: function (feature, layer) {
          // Adjust the popup content based on your polygon properties
          var content =
            "Kecamatan: " +
            feature.properties.kecamatan +
            "<br>" +
            "Jumlah Penduduk: " +
            feature.properties.jumlah_pen +
            "<br>";

          layer.bindPopup(content);
        },
      });

      // Fetch GeoJSON data from geoserver.php
      $.getJSON("wfsgeoserver1.php", function (data) {
        wfsgeoserver1.addData(data);
        wfsgeoserver1.addTo(map);
        map.fitBounds(wfsgeoserver1.getBounds());
      });

      // Array of markers
      var markersArray = [
        {
          coordinates: [-7.766715, 110.37746],
          options: { draggable: true },
          popupContent: "Gedung B DIVSIG UGM",
        },
        {
          coordinates: [-7.743168, 110.350276],
          options: {},
          popupContent: "RS.Akademik UGM",
        },
      ];

      // // Add GeoJSON data to the map
      // L.geoJson(data).addTo(map);

      // // Create a marker cluster group
      // var markers = L.markerClusterGroup();

      // // Add markers to the cluster group
      // markersArray.forEach(function (markerInfo) {
      //   var marker = L.marker(markerInfo.coordinates, markerInfo.options);
      //   marker.addTo(markers);
      //   marker.bindPopup(markerInfo.popupContent);
      // });

    //   // Title
    //   var title = new L.Control();
    //   title.onAdd = function (map) {
    //     this._div = L.DomUtil.create("div", "info");
    //     this.update();
    //     return this._div;
    //   };
    //   title.update = function () {
    //     this._div.innerHTML =
    //       "<h2>Persebaran Bank Sampah</h2>Responsi PG Web";
    //   };
    //   title.addTo(map);

      

      // Watermark 
      L.Control.Watermark = L.Control.extend({
        onAdd: function (map) {
          var container = L.DomUtil.create("div", "leaflet-control-watermark");
          var img = L.DomUtil.create("img", "watermark-image");
          img.src = "assets/img/logo/LOGO_SIG_BLUE.png";
          img.style.width = "120px";
          container.appendChild(img);
          return container;
        },
      });
      L.control.watermark = function (opts) {
        return new L.Control.Watermark(opts);
      };

      L.control.watermark({ position: "bottomleft" }).addTo(map);
      
      // Legend
      L.Control.Legend = L.Control.extend({
        onAdd: function (map) {
          var img = L.DomUtil.create("img");
          img.src = "assets/img/legend/legend_bank.jpg";
          img.style.width = "250px";
          return img;
        },
      });
      L.control.Legend = function (opts) {
        return new L.Control.Legend(opts);
      };

      L.control.Legend({ position: "bottomleft" }).addTo(map);

       // Plugin Search
      var searchControl = new L.Control.Search({
        position: "topleft",
        layer: wfsgeoserver1, // Nama variabel layer
        propertyName: "kecamatan", // Field untuk pencarian
        marker: false,
        moveToLocation: function (latlng, title, map) {
          var zoom = map.getBoundsZoom(latlng.layer.getBounds());
          map.setView(latlng, zoom);
        },
      });

      searchControl
        .on("search:locationfound", function (e) {
          e.layer.setStyle({
            fillColor: "#ffff00",
            color: "#0000ff",
          });
        })
        .on("search:collapse", function (e) {
          wfsgeoserver1.eachLayer(function (layer) {
            wfsgeoserver1.resetStyle(layer);
          });
        });

      map.addControl(searchControl);

      // Plugin Geolocation
      var locateControl = L.control
        .locate({
          position: "topleft",
          drawCircle: true,
          follow: true,
          setView: true,
          keepCurrentZoomLevel: false,
          markerStyle: {
            weight: 1,
            opacity: 0.8,
            fillOpacity: 0.8,
          },
          circleStyle: {
            weight: 1,
            clickable: false,
          },
          icon: "fas fa-crossha irs",
          metric: true,
          strings: {
            title: "Click for Your Location",
            popup: "You're here. Accuracy {distance} {unit}",
            outsideMapBoundsMsg: "Not available",
          },
          locateOptions: {
            maxZoom: 16,
            watch: true,
            enableHighAccuracy: true,
            maximumAge: 10000,
            timeout: 10000,
          },
        })
        .addTo(map);

      // Plugin Mouse Position Coordinate
      L.control
        .mousePosition({
          position: "bottomright",
          separator: ",",
          prefix: "Point Coodinate: ",
        })
        .addTo(map);

      // Plugin Measurement Tool
      var measureControl = new L.Control.Measure({
        position: "topleft",
        primaryLengthUnit: "meters",
        secondaryLengthUnit: "kilometers",
        primaryAreaUnit: "hectares",
        secondaryAreaUnit: "sqmeters",
        activeColor: "#FF0000",
        completedColor: "#00FF00",
      });

      measureControl.addTo(map);

      // Plugin EasyPrint
      L.easyPrint({
        title: "Print",
      }).addTo(map);

      // Plugin Routing
      L.Routing.control({
        waypoints: [
          L.latLng(-7.774876989477508, 110.3746770621709),
          L.latLng(-7.789865101510259, 110.37792578946565),
        ],
        routeWhileDragging: true,
      }).addTo(map);

    //   $.getJSON("wfsgeoserver2.php", function (data) {
    //         var clusters = L.markerClusterGroup();
    //         var incidents = L.geoJson(data, {
    //             pointToLayer: function (feature, latlng) {
    //                 var marker = L.marker(latlng);
    //                 marker.bindPopup('Nama:' + feature.properties.name + '<br/>' + 'Detail: ' + feature.properties.descriptio );
    //                 return marker;
    //             },
    //             onEachFeature: function (feature, layer) {
    //                 layer.addTo(clusters);
    //             }
    //         });
    //         map.addLayer(clusters);
    //       });


      // Layer Marker
      // var addressPoints = [
      //   [-7.782204332909739, 110.38794788218894, "Taman Demangan"],
      //   [-7.776846614149278, 110.38701115206385, "Taman Randu Alas UNY"],
      //   [-7.776500348808241, 110.38721298654116, "UNY Sport Yars"],
      //   [-7.770113807162658, 110.38194671720578, "Wisdom Park UGM"],
      //   [-7.775846936550977, 110.38051341473567, "Taman Kolam Retensi Lembah UGM"],
      //   [-7.776911066763327, 110.37709623233381, "Taman Yesus dan Petrus"],
      //   [-7.774746329724046, 110.30990772703166, "Taman Hati Sebaran"],
      //   [-7.6968179655054785, 110.36207391484245, "Taman Budaya Sleman"],
      //   [-7.70038772233213, 110.36367490392647, "Taman Pandowo"],
      //   [-7.698404527806858, 110.34926600217034, "Taman Segitiga Sleman"],
      //   [-7.716118540739202, 110.35071717608514, "Taman Rusa"],
      //   [-7.726298373076706, 110.32738897019466, "Taman Ringin Cebongan"],
      //   [-7.726740776731795, 110.38757454164504, "Taman Belakang Rumah"],
      //   [-7.746114251157899, 110.41731475068755, "Maguoharjo Stadium"],
      // ];

      // var markers = L.markerClusterGroup();

    

      // for (var i = 0; i < addressPoints.length; i++) {
      //   var a = addressPoints[i];
      //   var title1 = a[2];
      //   var marker = L.marker(new L.LatLng(a[0], a[1]), { title: title1 });

      //   marker.bindPopup(title1);
      //   markers.addLayer(marker);
      // }

      // map.addLayer(markers);
      //Function to determine the color based on the 'value' attribute

      function getColor(value) {
  return value < 10.000
    ? "#bdd7e7"    // Warna biru tua untuk nilai di bawah 50000
    : value >= 10.000 && value <= 50.000
    ? "#74a9cf"  // Warna biru muda untuk nilai antara 50000 dan 75000
    : value > 50.000
    ? "#045a8d" // Warna biru cerah untuk nilai di atas 75000
    : "#fff5f0"; // Warna default jika nilai kurang dari atau sama dengan 10
}


        
    </script>
   <!-- Bootstrap JavaScript Library (Popper.js and jQuery required) -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>