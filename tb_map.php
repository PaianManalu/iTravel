<!DOCTYPE html>
<html>

<head>
    <title>Map</title>
    <meta charset="utf-8"><!--parsing code-->
    <meta name="viewport" content="initial-scale=1.0"> <!--web mobile-->
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
                        <a href="login.php">Login</a>
                        <a href="tb_contact.php">Contact Us</a>
                        <li class="nav-item dropdown">
                            <a href="home.php" class="nav-link dropdown-toggle">Account</a>
                            <div class="dropdown-menu">
                                <a href="home.php" class="dropdown-item">Keluar</a>
                            </div>
                        </li>
                    </div>
                </ul>
            </nav>
        </header>
    </section><br><br><br><br>
    <section class="body">
        <div class="bodyBx">
            <div class="content">
                <h1>MAPS<br /></h1>
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
        <div class="map">
            <div id="map"></div>
        </div>
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
                            <p class="destination-description">Taman Eden 100 di Sumatera Utara menawarkan keindahan alam
                                yang menakjubkan.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/toledo.jpg" alt="Destination 4" class="destination-image">
                            <h3 class="destination-title">Toledo InnToledo Inna</h3>
                            <p class="destination-description">Hotel di Pematangsiantar, Sumatera Utara menawarkan kamar-kamar modern dengan fasilitas seperti AC dan TV layar datar. Terdapat juga restoran, lounge, dan ruang rapat. Dekat dengan tempat wisata seperti Air Terjun Sipiso-piso dan Danau Toba. Pilihan tepat untuk menginap di Pematangsiantar.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/baren.jpg" alt="Destination 5" class="destination-image">
                            <h3 class="destination-title">Baren Coffee & Roastery</h3>
                            <p class="destination-description">Baren's Coffee & Roastery adalah tempat kopi yang menawarkan kopi berkualitas tinggi yang dipanggang dengan baik, serta suasana yang modern dan nyaman untuk menikmati kopi. Dalam lingkungan yang ramah pengunjung</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/Puncak Sipinsur.jpg" alt="Destination 4" class="destination-image">
                            <h3 class="destination-title">Puncak Sipinsur</h3>
                            <p class="destination-description">Puncak Sipincur di Simalungun, Sumatera Utara, menawarkan pemandangan sawah, perbukitan hijau, dan pegunungan yang spektakuler. Pengunjung dapat hiking dan berkemah sambil menikmati udara segar dan keindahan alam. Cocok untuk pecinta alam dan pengunjung yang mencari ketenangan.</p>
                        </li>
                        </li>
                        <li class="destination-item">
                            <img src="img/airport kualanamu.jpg" alt="Destination 1" class="destination-image">
                            <h3 class="destination-title">Airport Kualanamu</h3>
                            <p class="destination-description">Bandara Internasional Kualanamu adalah bandara modern yang melayani penerbangan domestik dan internasional di Sumatera Utara. Dengan fasilitas yang lengkap dan modern, bandara ini menjadi pintu gerbang utama bagi wisatawan yang ingin menjelajahi Sumatera Utara.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/airport silangit.jpg" alt="Destination 2" class="destination-image">
                            <h3 class="destination-title">Airport Silangit</h3>
                            <p class="destination-description">Bandara Silangit adalah gerbang utama ke Danau Toba yang terkenal di Sumatera Utara, Indonesia. Dengan terminal modern dan berbagai penerbangan langsung dari kota-kota besar di Indonesia, Bandara Silangit adalah pilihan terbaik untuk memulai perjalanan Anda ke destinasi wisata yang menakjubkan di sekitarnya.</p>
                        </li>
                    </ul>
                </div>
            </section>
            <footer class="footer">
                <div class="footer-container">
                    <div class="kontak">
                        <h3 class="footer-heading">Kontak Kami</h3>
                        <p class="footer-text">Alamat: Jl. Raya Puncak, Bogor, Indonesia</p>
                        <p class="footer-text">Telepon: (021) 123456</p>
                        <p class="footer-text">Email: info@contoh.com</p>
                    </div>
                    <div class="ikuti">
                        <h3 class="footer-heading">Ikuti Kami</h3>
                        <div class="social-media">
                            <a href="https://www.facebook.com"><i><img src="img/facebook.png" alt="Logo"></i></a>
                            <a href="https://www.twitter.com"><i><img src="img/twiter.png" alt="Logo"></i></a>
                            <a href="https://www.instagram.com"><i><img src="img/ig.png" alt="Logo"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p class="footer-text">© 2023 Contoh. All rights reserved.</p>
                </div>
            </footer>


            <script>
                var input = document.getElementById("search-box");
                var select = document.getElementById("options");
                var data = [
                    "Lago Hotel & Resto",
                    "Pondok Berata Dapdap",
                    "Hotel Santo Djaya",
                    "inagodang Park",
                    "PIK ( Penginapan Indah Kirana",
                    "Parapat Danau Toba",
                    "Rumah Nek Ribut",
                    "Desa Huta Baru",
                    "OYO 90920 Agave Hotel",
                    "OYO 90509 Nadia Hotel",
                    "Batavia Hotel",
                    "Sapadia Hotel",
                    "Pancur Gading Hotel dan Resort",
                    "Lim's Hotel dan Cafe",
                    "Perumahan Beringin Indah Permai",
                    "Grand Family",
                    "Pancur Gading Hotel dan Resort",
                    "Tiara Bunga Hotel",
                    "Rumah Makan Srikandi",
                    "Rumah Makan Muslim Bundo Minang",
                    "Restaurant Asia",
                    "Parapat Pansit",
                    "Damar Toba ~ Lakeside Eatery & Stay",
                    "Rm Asido Rohana ",
                    "Rumah makan jahir tombur bpk gultom",
                    "Rest Area Modern Bamboo",
                    "RM MUSLIM MAS ARI",
                    "RM. Khas Batak Horas Silindung",
                    "Restaurant Panorama ori",
                    "Mie Gacoan Medan Karya",
                    "Ayam Penyet Ar - Rahman Pasar 10 Tembung",
                    "RUMAH MAKAN AJO TANJUNG",
                    "Warung Pak Dikun",
                    "Rumah Makan Restu",
                    "WISNU TATAH INDAH (SOUVENIR UKIRAN BATAK)",
                    "Pasar Balige",
                    "SEKKA Craft Supplies",
                    "Toko Grosir Adriell Gultom shop balige",
                    "Remon Ponsel Situmorang",
                    "Lapak Rosa Girsang (Fresh Farmers Market)",
                    "Toko Raja Oloan 2",
                    "Jaya Ponsel Mandiri",
                    "Pekan Tiga Dolok",
                    "Pekan Tiga Balata",
                    "Roti Kacang R2.961105723051156ajawali",
                    "TOKO 35 Siantar",
                    "Poshop.Id",
                    "Irian Supermarket & Dept. Store",
                    "Alfamart setia budi t.tinggi",
                    "Alfamart Simpang Matapao",
                    "Carrefour - Medan Citra Garden",
                    "Pekan Minggu Percut Sei Tuan Deli Serdang",
                    "Stasiun Kereta Api Baja Linggei",
                    "Stasiun Siantar",
                    "Stasiun KA Galang",
                    "Terminal Amplas",
                    "Terminal Bus Sumatera Transport",
                    "Terminal Pinang Baris Medan",
                    "Terminal Helvetia",
                    "Terminal Tanjung Gusta",
                    "Pelabuhan Tigaraja / Tiga Raja Pier",
                    "Pelabuhan Penyeberangan Balige",
                    "Bandara Silangit International Airport",
                    "Bandara Kualanamu International Airport",
                    "Pantai Inna Parapat",
                    "Bukit Gibeon",
                    "Bukit Sipolha dan Pulau Hole",
                    "Air Terjun efrata Harian Boho",
                    "Tankahan Bah Alip",
                    "Air Terjun Biak- Biak",
                    "Waterpark Gundaling Paya Pasir ",
                    "Bah Bolon Arum Jeram",
                    "Pantai Mutiara 88",
                    "Pantai Pasir Putih Parparean",
                    "Museum Batak TB Silalahi Center",
                    "Bukit Doa",
                    "Tanjung unta,Simalungun",
                    "Kebun Teh Sidamanik",
                    "Bah Bolon Arum Jeram",
                    "Museum Kota",
                    "Desa Meat",
                    "Pakkodian"

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

                    $sql = "SELECT * FROM tb_map";
                    $result = $conn->query($sql);

                    $locations = [];

                    while ($row = $result->fetch_assoc()) {
                        $locations[] = array(
                            $row['nama'],
                            $row['garis_lintang'],
                            $row['garis_bujur'],
                            $row['icon'],
                            $row['alamat'],
                            $row['gambar']
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
                                fontSize: '15   px',
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

                    var delLatLng = new google.maps.LatLng(2.3832437410753893, 99.14860188961029);
                    var delMarker = new google.maps.Marker({
                        position: delLatLng,
                        map: map,
                        icon: 'img/del.png' // Ganti 'path/ke/del.png' dengan path file gambar del.png
                    });


                    var button1 = document.createElement("button");
                    button1.id = "button1";
                    button1.innerHTML = "Wisata";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button1);
                    button1.addEventListener("click", function() {
                        window.location.href = "tb_wisata.php";
                    });

                    var button2 = document.createElement("button");
                    button2.innerHTML = "Rumah Makan";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button2);
                    button2.addEventListener("click", function() {
                        window.location.href = "tb_rumahmakan.php";
                    });

                    var button3 = document.createElement("button");
                    button3.innerHTML = "Penginapan";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button3);
                    button3.addEventListener("click", function() {
                        window.location.href = "tb_penginapan.php";
                    });

                    var button4 = document.createElement("button");
                    button4.innerHTML = "Souvenir";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button4);
                    button4.addEventListener("click", function() {
                        window.location.href = "tb_souvenir.php";
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


                    //pemanggilan marker
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
                                scaledSize: new google.maps.Size(25, 25)
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
                        // jika marker di klik
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                var contentString = '<div style="font-weight: bold;">' + locations[i][0] + '</div>';
                                infoWindow.setContent(contentString);
                                infoWindow.open(map, marker);

                                // Munculkan sidebar dan isi kontennya
                                infoSidebar.style.display = 'block';
                                infoSidebar.innerHTML = '<div class="location-info">' +
                                    '<b>Keterangan :</b><br>' +
                                    '<b><h1>' + locations[i][0] + '</h1><b><br>' +
                                    '<b>Lokasi :</b><br>' +
                                    '<h3>' + locations[i][4] + '</h3><br>' +
                                    '<h3>' + locations[i][7] + '</h3><br>' +
                                    '<img src="' + locations[i][5] + '" style="width: 420px; height: 250px;"><br>' +
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
                        q.fitBounds(bounds);
                    });

                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBA9KznFyKV2mH5JyKf1nRdJATnGRCV8bQ&callback=initMap"></script>
            <script src="script.js"></script>
</body>

</html>