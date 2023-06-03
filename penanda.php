<!DOCTYPE html>
<html>

<head>
    <title>Map</title>
    <meta charset="utf-8"><!--parsing code-->
    <meta name="viewport" content="initial-scale=1.0"> <!--web mobile-->
    <link rel="stylesheet" href="maps.css">
    <script src="maps.js"></script>
    <style>

    </style>

</head>

<body>
    <section class="header" id="home">

    </section><br><br><br><br>

    <div class="datalist-wrapper">
        <div class="search">
            <input type="text" id="search-box" name="search" list="search-options" placeholder="Temukan lokasi....">
            <datalist id="search-options">
                <select id="options">
                    <option value="">--Pilih Lokasi--</option>
                </select>
            </datalist>
        </div>
        <div id="map"></div>
        <!--rekomendation-->


        <script>
            // Hide options when click outside
            document.addEventListener('click', function(event) {
                var isClickInside = select.contains(event.target);
                if (!isClickInside) {
                    select.classList.remove('show');
                    optionCounter = 0; // Reset optionCounter when hiding options
                }
            });
            var map;
            var markers = [];

            function initMap() {
                <?php
                include "database.php";

                $sql = "SELECT * FROM tb_transportasi";
                $result = $conn->query($sql);

                $locations = [];

                while ($row = $result->fetch_assoc()) {
                    $locations[] = array(
                        $row['nama'],
                        $row['garis_lintang'],
                        $row['garis_bujur'],
                        $row['icon'],
                        $row['alamat'],
                        $row['gambar'],
                        $row['marker_khusus']
                    );
                }
                ?>

                var locations = <?php echo json_encode($locations); ?>;

                map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: 3.0016031867434,
                        lng: 98.61766475067328
                    },
                    zoom: 9
                });

                // Membuat marker pada koordinat yang ditentukan untuk nama kota
                function createMarker(position, name) {
                    var marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        title: name,
                        label: {
                            text: name,
                            color: 'white',
                            fontSize: '16px',
                            fontWeight: 'bold'
                        },
                        icon: {
                            url: 'https://maps.google.com/mapfiles/ms/icons/black-dot.png',
                            scaledSize: new google.maps.Size(20, 20)
                        }
                    });

                    return marker;
                }

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama Medan
                var medanLatLng = new google.maps.LatLng(2.2343, 99.46347);
                var medanMarker = createMarker(medanLatLng, 'Medan');
                medanMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama Balige
                var baligeLatLng = new google.maps.LatLng(2.2354667, 99.25367);
                var baligeMarker = createMarker(baligeLatLng, 'Balige');
                baligeMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama Porsea
                var porseaLatLng = new google.maps.LatLng(2.45344, 99.12436556);
                var porseaMarker = createMarker(porseaLatLng, 'Porsea');
                porseaMarker.setMap(map);


                var marker;
                var infoWindow = new google.maps.InfoWindow();
                var infoSidebar = document.createElement('div');
                infoSidebar.id = 'info-sidebar';
                // Sembunyikan sidebar saat halaman pertama kali dimuat
                infoSidebar.style.display = 'none';
                map.controls[google.maps.ControlPosition.RIGHT_TOP].push(infoSidebar); // Gunakan RIGHT_TOP agar posisi sidebar lebih rapi

                for (var i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        icon: {
                            url: locations[i][3],
                            scaledSize: new google.maps.Size(25, 30)
                        },
                        map: map
                    });
                    //membuat marker posisi pengguna
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var lat = position.coords.latitude;
                        var lng = position.coords.longitude;

                        // Add a marker at the user's location
                        var marker = new google.maps.Marker({
                            position: {
                                lat: lat,
                                lng: lng
                            },
                            map: map,
                            title: 'Posisi Saya'
                        });
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            var contentString = '<div style="font-weight: bold;">' + locations[i][0] + '</div>';
                            infoWindow.setContent(contentString);
                            infoWindow.open(map, marker);
                            // Munculkan sidebar dan isi kontennya


                        };
                    })(marker, i));
                    markers.push(marker);
                }

                google.maps.event.addListener(map, 'click', function() {
                    infoSidebar.style.display = 'none'; // sembunyikan sidebar
                });

                // Tambahkan event listener untuk input pencarian
                document.getElementById('search-box').addEventListener('input', function() {
                    var searchString = this.value.toLowerCase();

                    // Tampilkan semua marker jika pencarian kosong
                    if (searchString === '') {
                        for (var i = 0; i < markers.length; i++) {
                            markers[i].setVisible(true);
                        }
                        infoSidebar.style.display = 'none'; // Sembunyikan sidebar saat pencarian kosong
                        return;
                    }

                    // Sembunyikan semua marker yang tidak sesuai
                    for (var i = 0; i < markers.length; i++) {
                        var locationName = locations[i][0].toLowerCase();
                        if (locationName.indexOf(searchString) === -1) {
                            markers[i].setVisible(false);
                        } else {
                            markers[i].setVisible(true);
                        }
                    }
                });
                var input = document.getElementById("search-box");
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                var searchBox = new google.maps.places.SearchBox(input);

                searchBox.addListener('places_changed', function() {
                    var places = searchBox.getPlaces();
                    if (places.length == 0) {
                        return;
                    }

                    // Sembunyikan semua marker yang tidak sesuai dengan pencarian
                    for (var i = 0; i < markers.length; i++) {
                        markers[i].setVisible(false);
                    }

                    // Tampilkan marker yang sesuai dengan tempat yang dicari
                    var bounds = new google.maps.LatLngBounds();
                    for (var i = 0; i < places.length; i++) {
                        var place = places[i];
                        for (var j = 0; j < markers.length; j++) {
                            if (markers[j].getPosition().equals(place.geometry.location)) {
                                markers[j].setVisible(true);
                                bounds.extend(place.geometry.location);
                                break;
                            }
                        }

                    }
                    map.fitBounds(bounds);
                });

            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBA9KznFyKV2mH5JyKf1nRdJATnGRCV8bQ&callback=initMap"></script>
        <script src="script.js"></script>
</body>

</html>

</body>

</html>