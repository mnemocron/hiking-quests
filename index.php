<!DOCTYPE html>
<html>
<head>
    <title>Hiking Quests | simonmartin.ch</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./assets/leaflet-1.9.4/leaflet.css" />
    <link rel="icon" type="image/png" sizes="169x169"  href="./assets/icon.png">
    <meta name="theme-color" content="#ffffff">

    <!-- https://mapgenie.io/horizon-forbidden-west/maps/world -->
</head>
<body style="background: #000;">
    <div id="letitle" style="width: 98vw; height: 5vh; text-align: center;">
      <img src="./img/title-quests.png" style="height: 4vh;">
    </div>
    <div id="map" style="width: 98vw; height: 93vh; padding: 0px; margin: 0px;"></div>

    <script src="./assets/leaflet-1.9.4/leaflet.js"></script>
    <script src="./assets/leaflet-tilelayer-colorfilter.min.js"></script>

    <!-- https://github.com/mikpan/ch-maps/ -->
    <script type="text/javascript" src="./assets/ch-country.js"></script>

    <!-- TODO add Naturschutzgebiet
    <script type="text/javascript" src="https://www.pronatura.ch/sites/pronatura.ch/files//gis/latest.geojson"></script>
    -->

    <script>
      
        var map = L.map('map').setView([46.825, 8.224], 10);
        mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';

        L.tileLayer('https://wmts.geo.admin.ch/1.0.0/ch.swisstopo.swissimage/default/current/3857/{z}/{x}/{y}.jpeg', {
          attribution: '&copy; <a href="https://www.swisstopo.admin.ch/">swisstopo</a>',
          minZoom: 9,
          maxZoom: 20,
          bounds: [[45.398181, 5.140242], [48.230651, 11.47757]]
        }).addTo(map);

        const theEntireWorld = [
          [
            [-90, -180],
            [-90, 180],
            [90, 180],
            [90, -180],
            [-90, -180]
          ]
        ];
        const countryBorderCoord = countryBorder.features[0].geometry.coordinates;
        const invertedPolygon = {
          "type": "Feature",
          "geometry": {
            "type": "Polygon",
            "coordinates": [theEntireWorld[0], ...countryBorderCoord]
          }
        };

        //L.geoJson(countryBorder).addTo(map);
        L.geoJson(invertedPolygon, {
          style: {
            fillColor: 'rgba(0,0,0,1)',
            color: 'none',
            fillOpacity: 0.8,
            weight: 0
          }
        }).addTo(map);

        var iconExclamationOct = new L.Icon({
          iconUrl: './assets/icons/exclamation-octagon.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconExclamationOctGreen = new L.Icon({
          iconUrl: './assets/icons/exclamation-octagon-green.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconBoat = new L.Icon({
          iconUrl: './assets/icons/boat.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconBoatGreen = new L.Icon({
          iconUrl: './assets/icons/boat-green.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconFlag = new L.Icon({
          iconUrl: './assets/icons/flag.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconFlagGreen = new L.Icon({
          iconUrl: './assets/icons/flag-green.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconCamp = new L.Icon({
          iconUrl: './assets/icons/camp-fireplace.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconCampGreen = new L.Icon({
          iconUrl: './assets/icons/camp-fireplace-green.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconTable = new L.Icon({
          iconUrl: './assets/icons/table.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconTableGreen = new L.Icon({
          iconUrl: './assets/icons/table-green.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconHouse = new L.Icon({
          iconUrl: './assets/icons/house.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconHouseGreen = new L.Icon({
          iconUrl: './assets/icons/house-green.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconPotion = new L.Icon({
          iconUrl: './assets/icons/potion.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconPotionGreen = new L.Icon({
          iconUrl: './assets/icons/potion-green.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconPiston = new L.Icon({
          iconUrl: './assets/icons/piston.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconPistonGreen = new L.Icon({
          iconUrl: './assets/icons/piston-green.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconBiwak = new L.Icon({
          iconUrl: './assets/icons/wildcamp.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconBiwakGreen = new L.Icon({
          iconUrl: './assets/icons/wildcamp-green.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconMountains = new L.Icon({
          iconUrl: './assets/icons/mountains.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        var iconMountainsGreen = new L.Icon({
          iconUrl: './assets/icons/mountains-green.png',
          shadowUrl: './assets/icons/marker-shadow.png',
          iconSize: [40, 40],
          iconAnchor: [22, 22],
          popupAnchor: [1, -34],
          shadowSize: [40, 40]
        });

        //var latLngBounds = L.latLngBounds([[46.961034, 8.653731], [47.961034, 7.553731]]);
        //var imageOverlay = L.imageOverlay('./assets/icons/fog.png', latLngBounds, {
        //    opacity: 1.0,
        //    interactive: true
        //}).addTo(map);
        //  <?php 
        //    for ($i = 0; $i < 10; $i++){
        //      
        //    }
        //  ?>

        <?php
          $filt_years = preg_replace("/[^0-9]+/", "", explode(",", $_GET["year"]));
          $filt_cat = preg_replace("/[^a-zA-Z0-9]+/", "", explode(",", $_GET["category"]));

          $len_filt_years = count($filt_years);
          $len_filt_cat = count($filt_cat);

          if(!isset($_GET["year"])){
            $len_filt_years = 0;
          }
          if(!isset($_GET["category"])){
            $len_filt_cat = 0;
          }
        ?>

        <?php
        $filepath = "mapdata.json";
        $myfile = fopen($filepath, "r") or die("Unable to open file!");
        $jsonstr = fread($myfile, filesize($filepath));
        $jsondata = json_decode($jsonstr, true);
        fclose($myfile);

        $entries_processed = 0;
        foreach ($jsondata as $position) {
          // randomize location so that multiple at the same address are scattered around
          $blur = 0; // (rand(-1000,1000) / 1000) / 10000 * 2;
          $lat = floatval($position["lat"]) + $blur;

          $blur = 0; // (rand(-1000,1000) / 1000) / 10000 * 2;
          $lon = floatval($position["lon"]) + $blur;

          $cat = trim( explode("/", $position["category"])[0] );
          $ttl = $position["title"];
          $sub = $position["subtitle"];
          $lor = $position["lore"];
          $dat = $position["date"];
          $vid = $position["video"];
          $inf = $position["info"];
          $gog = $position["google"];
          $pic = $position["picture"];
          $display = $position["discovered"];
          $year = preg_replace("/[^0-9]+/", "", explode("-", $dat)[0]);

          $post_marker = 1;  // false
          if($len_filt_years > 0){
            if(!in_array($year, $filt_years)){
              $post_marker = 0;
            }
          } 

          if($len_filt_cat > 0){
            if(!in_array($cat, $filt_cat)){
              $post_marker = 0;
            }
          }

          $icon = "iconExclamationOct";

          if(strpos($cat, "hike") !== false){
              $icon = "iconMountains";
          }
          if(strpos($cat, "sailing") !== false){
              $icon = "iconBoat";
          }
          if(strpos($cat, "camping") !== false){
              $icon = "iconCamp";
          }
          if(strpos($cat, "home") !== false){
              $icon = "iconHouse";
          }
          //if(strpos($cat, "relax") !== false){
          //    $icon = "iconPotion";
          //}
          if(strpos($cat, "racetrack") !== false){
              $icon = "iconPiston";
          }
          if(strpos($cat, "landmark") !== false){
              $icon = "iconFlag";
          }
          if(strpos($cat, "biwak") !== false){
              $icon = "iconBiwak";
          }
          if($display === true){
            $icon = $icon . "Green";
          } else {
            $icon = $icon;
          }

          $urlspice = " target=\\\"_blank\\\" rel=\\\"nofollow noopener noreferrer\\\" ";

          if($post_marker){
            // correctly escape Anführungszeichen
            $popup = "<h3>" . str_replace("\"", "\\\"", $ttl) . "</h3><b>" . str_replace("\"", "\\\"", $sub) . "</b><br>";


            if(strlen($lor) > 0){
              $popup = $popup . "<p>" . $lor . "</p><br>";
            }
            if(strlen($pic) > 0){
              $popup = $popup . "<img width=\\\"100%\\\" src=\\\"./img/" . $pic . "\\\"></img><br>";
            }
            if(strlen($inf) > 0){
              $popup = $popup . "<a href=\\\"" . $inf . "\\\" " . $urlspice . ">Details</a><br>";
            }
            if(strlen($gog) > 0){
              $popup = $popup . "<a href=\\\"" . $gog . "\\\" " . $urlspice . ">Google Maps</a><br>";
            }
            if(strlen($vid) > 0){
              $popup = $popup . "<a href=\\\"" . $vid . "\\\" " . $urlspice . ">Video</a><br>";
            }

            $popup = "\"" . $popup . "\"";

            if(array_key_exists("lat", $position) && array_key_exists("lon", $position)){
                echo("var marker_" . $entries_processed . " = L.marker([" . $lat . ", " . $lon . "], {icon: " . $icon . "},{draggable: false,title: '" . $cat . "',opacity: 1.0}).addTo(map).bindPopup(" . $popup . ");\n");
                $entries_processed = $entries_processed +1;
            }
          }
            
        }
          echo("var dbg_ = " . $entries_processed . ";");

        ?>

    </script>
</body>
</html>
