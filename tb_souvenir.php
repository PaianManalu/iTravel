<!DOCTYPE html>
<html>

<head>
    <title>Map</title>
    <meta charset="utf-8">
    <!--parsing code-->
    <meta name="viewport" content="initial-scale=1.0">
    <!--web mobile-->
    <link rel="stylesheet" href="maps.css">
    <script src="maps.js"></script>
    <style>
    .social-media img {
        width: 50px;
        height: 50px;
    }
    </style>

</head>

<body>
    <section class="header" id="home">
        <header>
            <a href="../php/home.php" class="logo">iTravel</a>
            <nav>
                <ul>
                    <div class="navigation">
                        <a href="home.php">Home</a>
                        <a href="tb_map.php">Map</a>
                        <a href="tb_contact.php">Contact Us</a>
                    </div>
                </ul>
            </nav>
        </header>
    </section><br><br><br><br>
    <section class="body">
        <div class="bodyBx">
            <div class="content">
                <h1>SOUVENIR<br /></h1>
                <p>

                </p>
                <div class="btn-box">
                    <a href="home.php">Try Now</a>
                </div>
            </div>
        </div>
    </section><br>
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
        <section class="Destination">
            <section class="popular-destination">
                <h1 class="heading"> Popular Destination</h1>
                <div class="container">
                    <h3 class="section-subtitle">Check out some of our most popular travel destinations</h3>
                    <ul class="destination-list">
                        <li class="destination-item">
                            <img src="img/taman eden.jpeg" alt="Destination 1" class="destination-image">
                            <h3 class="destination-title">Taman Eden 100</h3>
                            <p class="destination-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed ut iaculis
                                enim.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/efrata waterfal.jpg" alt="Destination 2" class="destination-image">
                            <h3 class="destination-title">Air Terjun Efrata</h3>
                            <p class="destination-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed ut iaculis
                                enim.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/Inna Parapat Hotel.jpg" alt="Destination 3" class="destination-image">
                            <h3 class="destination-title">Inna Parapat Hotel</h3>
                            <p class="destination-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed ut iaculis
                                enim.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/Puncak Sipinsur.jpg" alt="Destination 4" class="destination-image">
                            <h3 class="destination-title">Puncak Sipinsur</h3>
                            <p class="destination-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed ut iaculis
                                enim.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/Lembah Bakkara.jpg" alt="Destination 5" class="destination-image">
                            <h3 class="destination-title">Lembah Bakkara</h3>
                            <p class="destination-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed ut iaculis
                                enim.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/bukit-simarjarunjung.jpg" alt="Destination 6" class="destination-image">
                            <h3 class="destination-title">Bukit Indah Simarjarunjung</h3>
                            <p class="destination-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed ut iaculis
                                enim.</p>
                        </li>
                    </ul>
                </div>
            </section>
            <footer style="background-color: #222222; color: #fff; padding: 50px 0;">
                <div
                    style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
                    <div style="flex: 1;">
                        <h3 style="font-size: 24px; margin-bottom: 20px;">Kontak Kami</h3>
                        <p style="font-size: 16px;">Alamat: Jl. Raya Puncak, Bogor, Indonesia</p>
                        <p style="font-size: 16px;">Telepon: (021) 123456</p>
                        <p style="font-size: 16px;">Email: info@contoh.com</p>
                    </div>
                    <div style="flex: 1;">
                        <h3 style="font-size: 24px; margin-bottom: 20px;">Ikuti Kami</h3>
                        <div class="social-media">
                            <a href="https://www.facebook.com"><i><img src="img/facebook.png" alt="Logo"></i></a>
                            <a href="https://www.twitter.com"><i><img src="img/twiter.png" alt="Logo"></i></a>
                            <a href="https://www.instagram.com"><i><img src="img/ig.png" alt="Logo"></i></a>
                        </div>
                    </div>
                </div>
                <div style="background-color: #333; padding: 20px; text-align: center;">
                    <p style="margin: 0; font-size: 16px;">© 2023 Contoh. All rights reserved.</p>
                </div>
            </footer>

            <script>
            var input = document.getElementById("search-box");
            var select = document.getElementById("options");
            var data = [
                "Pasar Balige",
                "Batikta - Batik Batak Balige",
                "WISNU TATAH INDAH(SOUVENIR UKIRAN BATAK)",
                "Toko Enjelita Balige",
                "SEKKA Craft Supplies",
                "Souvenir pusat oleh - oleh PAPA ROZTI",
                "Toko Grosir Adriell Gultom shop balige"
            ];
            for (var i = 0; i < data.length; i++) {
                var option = document.createElement("option");
                option.value = data[i];
                select.appendChild(option);
            }

            var optionCounter = 0; // Add this line   
            input.addEventListener("input", function() {
                var value = this.value.toLowerCase();
                var options = select.getElementsByTagName("option");
                for (var i = 0; i < options.length; i++) {
                    var text = options[i].value.toLowerCase();
                    if (text.indexOf(value) !== -1 && optionCounter < 6) {
                        options[i].style.display = "";
                        optionCounter++;
                    } else {
                        options[i].style.display = "none";
                    }
                }
                select.classList.add('show');
            });

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

                    $sql = "SELECT * FROM tb_souvenir";
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
                            $row['des']
                        );
                    }
                    ?>

                var locations = <?php echo json_encode($locations); ?>;

                map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: 3.0016031867434,
                        lng: 98.61766475067328
                    },
                    zoom: 9.5
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
                            fontSize: '15px',
                        },
                        icon: {
                            url: 'https://maps.google.com/mapfiles/ms/icons/black-dot.png',
                            scaledSize: new google.maps.Size(20, 20)
                        }
                    });

                    return marker;
                }

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama Medan
                var medanLatLng = new google.maps.LatLng(3.5901099412346165, 98.67258074382252);
                var medanMarker = createMarker(medanLatLng, 'Medan');
                medanMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama lubukpakam
                var lubukpakamLatLng = new google.maps.LatLng(3.57316967302348, 98.88110164949245);
                var lubukpakamMarker = createMarker(lubukpakamLatLng, 'Lubuk Pakam');
                lubukpakamMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama Tebingtinggi
                var TebingtinggiLatLng = new google.maps.LatLng(3.3162226764522216, 99.189538047138);
                var TebingtinggiMarker = createMarker(TebingtinggiLatLng, 'Tebing tinggi');
                TebingtinggiMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama Pematangsiantar
                var PematangsiantarLatLng = new google.maps.LatLng(2.952433949861991, 99.08575987316539);
                var PematangsiantarMarker = createMarker(PematangsiantarLatLng, 'Pematang siantar');
                PematangsiantarMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama saribudolok
                var saribudolokLatLng = new google.maps.LatLng(2.844865372795513, 99.05406438008443);
                var saribudolokMarker = createMarker(saribudolokLatLng, 'Saribudolok');
                saribudolokMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama parapat
                var parapatLatLng = new google.maps.LatLng(2.6684433464759127, 98.9376498121994);
                var parapatMarker = createMarker(parapatLatLng, 'Parapat');
                parapatMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama lumbandjulu
                var lumbandjuluLatLng = new google.maps.LatLng(2.583205490921636, 99.06652764174781);
                var lumbandjuluMarker = createMarker(lumbandjuluLatLng, 'Lumban djulu');
                lumbandjuluMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama Porsea
                var porseaLatLng = new google.maps.LatLng(2.4487576185270323, 99.14404392212444);
                var porseaMarker = createMarker(porseaLatLng, 'Porsea');
                porseaMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama laguboti
                var lagubotiLatLng = new google.maps.LatLng(2.3568731716810443, 99.12883489439503);
                var lagubotiMarker = createMarker(lagubotiLatLng, 'Laguboti');
                lagubotiMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama Balige
                var baligeLatLng = new google.maps.LatLng(2.3331195644867275, 99.0825468233071);
                var baligeMarker = createMarker(baligeLatLng, 'Balige');
                baligeMarker.setMap(map);

                // Menggunakan fungsi createMarker untuk membuat marker dengan nama silangit
                var silangitLatLng = new google.maps.LatLng(2.1478720598476975, 98.9623014145697);
                var silangitMarker = createMarker(silangitLatLng, 'Silangit');
                silangitMarker.setMap(map);

                var button3 = document.createElement("button");
                button3.innerHTML = "MAP";
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(button3);
                button3.addEventListener("click", function() {
                    window.location.href = "tb_map.php";
                });

                var button1 = document.createElement("button");
                button1.id = "button1";
                button1.innerHTML = "Wisata";
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(button1);
                button1.addEventListener("click", function() {
                    window.location.href = "tb_wisata.php";
                });

                var button2 = document.createElement("button");
                button2.innerHTML = "Penginapan";
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(button2);
                button2.addEventListener("click", function() {
                    window.location.href = "tb_penginapan.php";
                });

                var button4 = document.createElement("button");
                button4.innerHTML = "Rumah Makan";
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(button4);
                button4.addEventListener("click", function() {
                    window.location.href = "tb_rumahmakan.php";
                });

                var button5 = document.createElement("button");
                button5.innerHTML = "Transportasi";
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(button5);
                button5.addEventListener("click", function() {
                    window.location.href = "tb_transportasi.php";
                });
                for (var i = 0; i < locations.length; i++) {

                    map: map

                };



                var marker;
                var infoWindow = new google.maps.InfoWindow();
                var infoSidebar = document.createElement('div');
                infoSidebar.id = 'info-sidebar';
                // Sembunyikan sidebar saat halaman pertama kali dimuat
                infoSidebar.style.display = 'none';
                map.controls[google.maps.ControlPosition.RIGHT_TOP].push(
                infoSidebar); // Gunakan RIGHT_TOP agar posisi sidebar lebih rapi

                for (var i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        icon: {
                            url: locations[i][3],
                            scaledSize: new google.maps.Size(30, 30)
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
                            var contentString = '<div style="font-weight: bold;">' + locations[i][0] +
                                '</div>';
                            infoWindow.setContent(contentString);
                            infoWindow.open(map, marker);
                            // Munculkan sidebar dan isi kontennya
                            infoSidebar.style.display = 'block';
                            infoSidebar.innerHTML = '<div class="location-info">' +
                                '<b>Keterangan :</b><br>' +
                                '<b><h1>' + locations[i][0] + '</h1><b><br>' +
                                '<b>Lokasi :</b><br>' +
                                '<h3>' + locations[i][4] + '</h3><br>' +
                                '<img src="' + locations[i][5] +
                                '" style="width: 420px; height: 250px;"><br>' +
                                '<h3> fasilitas:' + locations[i][6] + '</h3><br>' +
                                '<h3>Rating</h3><br>' +
                                '<div class="rating">' +
                                '<input type="radio" id="star5" name="rating" value="5">' +
                                '<label for="star5"></label><br>' +
                                '<input type="radio" id="star4" name="rating" value="4">' +
                                '<label for="star4"></label><br>' +
                                '<input type="radio" id="star3" name="rating" value="3">' +
                                '<label for="star3"></label><br>' +
                                '<input type="radio" id="star2" name="rating" value="2">' +
                                '<label for="star2"></label><br>' +
                                '<input type="radio" id="star1" name="rating" value="1">' +
                                '<label for="star1"></label><br>' +
                                '</div><br>' +
                                '<h3>Komentar</h3><br>' +
                                '<textarea id="comment"></textarea><br>' +
                                '</div>';

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

            <script
                src="https://maps.googleapis.com/maps/api/js?AIzaSyBA9KznFyKV2mH5JyKf1nRdJATnGRCV8bQ&callback=initMap">
            </script>
            <script src="script.js"></script>
</body>

</html>