<!DOCTYPE html>
<html>

<head>
    <title>Map</title>
    <meta charset="utf-8">
    <!--parsing code-->
    <meta name="viewport" content="initial-scale=1.0">
    <!--web mobile-->
    <link rel="stylesheet" href="maps.css">
    <link rel="stylesheet" href="map.css">
    <script src="maps.js"></script>
    <style>
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
                <h1>WISATA<br /></h1>
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
                <h1 class="heading"> Destinasi Populer</h1>
                <div class="container">
                    <h3 class="section-subtitle">Check out some of our most popular travel destinations</h3>
                    <section class="destination">
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/taman eden.jpeg" class="card-img-top" alt="Destination 1" />
                                <div class="card-body">
                                    <h5 class="card-title">Taman Eden 100</h5>
                                    <p class="card-text">Taman Eden 100 adalah destinasi wisata yang menawarkan
                                        keindahan alam yang luar biasa. Terletak di tengah hutan pinus di Kota Batu menawarkan
                                        suasana yang tenang dan menegangkan bagi pengunjung yang ingin melepas penat dari
                                        kehidupan sehari-hari. Di dalam Taman Eden 100 ini pengunjung dapat menikmati keindahan
                                        taman bunga yang indah dan air terjun spektakuler.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/efrata waterfal.jpg" class="card-img-top" alt="Destination 2" />
                                <div class="card-body">
                                    <h5 class="card-title">Air Terjun Efrata</h5>
                                    <p class="card-text">Air Terjun Efrata Sumut adalah destinasi wisata alam
                                        dengan pemandangan menakjubkan dan air yang jernih. Pengunjung dapat berenang, trekking,
                                        atau hanya menikmati keindahan pemandangan sekitar. Terdapat juga warung makan dengan
                                        kuliner khas Sumatera Utara. Cocok untuk pengunjung yang ingin menikmati suasana alami
                                        yang damai dan menenangkan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/Puncak Sipinsur.jpg" class="card-img-top" alt="Destination 3" />
                                <div class="card-body">
                                    <h5 class="card-title">Puncak Sipinsur</h5>
                                    <p class="card-text">Puncak Sipincur di Simalungun, Sumatera Utara, menawarkan
                                        pemandangan sawah, perbukitan hijau, dan pegunungan yang spektakuler. Pengunjung dapat
                                        hiking dan berkemah sambil menikmati udara segar dan keindahan alam. Cocok untuk pecinta
                                        alam dan pengunjung yang mencari ketenangan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/Lembah Bakkara.jpg" class="card-img-top" alt="Destination 4" />
                                <div class="card-body">
                                    <h5 class="card-title">Lembah Bakkara</h5>
                                    <p class="card-text">Lembah Bakkara di Humbang Hasundutan, Sumatera Utara,
                                        menawarkan pemandangan sawah, sungai, dan perbukitan yang indah. Pengunjung dapat
                                        hiking, panjat tebing, berkuda, atau mencoba aktivitas air. Juga terdapat warung makan
                                        untuk mencoba kuliner khas Sumatera Utara. Cocok untuk pengunjung yang ingin menikmati
                                        alam dan aktivitas menarik di sekitar lembah.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/bukit-simarjarunjung.jpg" class="card-img-top" alt="Destination 5" />
                                <div class="card-body">
                                    <h5 class="card-title">Bukit Indah Simarjarunjung</h5>
                                    <p class="card-text">Lembah Bakkara di Sumatera Utara menawarkan pemandangan
                                        sawah, sungai, dan perbukitan hijau yang indah. Pengunjung dapat melakukan hiking,
                                        panjat tebing, berkuda, atau aktivitas air. Terdapat juga warung makan untuk mencicipi
                                        kuliner khas. Cocok untuk pengunjung yang ingin menikmati alam dan aktivitas menarik di
                                        sekitar lembah.<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/Inna Parapat Hotel.jpg" class="card-img-top" alt="Destination 6" />
                                <div class="card-body">
                                    <h5 class="card-title">Inna Parapat Hotel</h5>
                                    <p class="card-text"> Air Inna Parapat adalah destinasi wisata di Danau Toba
                                        yang menawarkan pemandangan yang memukau dan aktivitas seperti berenang, snorkeling, dan
                                        diving. Terdapat juga fasilitas restoran, tempat penginapan, dan toko souvenir. Cocok
                                        untuk liburan bersama keluarga atau teman-teman.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section> <!--footer-->
            <!--footer-->
            <?php
            include "footer.php";
            ?>

            <script>
                var input = document.getElementById("search-box");
                var select = document.getElementById("options");
                var data = [
                    "Pantai Inna Parapat",
                    "Bukit Gibeon",
                    "Tanjung unta,Simalungun",
                    "Bukit Sipolha dan Pulau Hole",
                    "Air Terjun efrata Harian Boho",
                    "Taman Hewan",
                    "Tankahan Bah Alip",
                    "Kebun Teh Sidamanik",
                    "Air Terjun Biak- Biak",
                    "Waterpark Gundaling Paya Pasir",
                    "Bah Bolon Arum Jeram",
                    "Museum Kota",
                    "Danau Laut Tador",
                    "Air Terjun Widuri",
                    "Pantai Mutiara 88",
                    "Situmurun Waterfall",
                    "Taman Eden 100 Tobasa",
                    "Pantai Pasir Putih Parparean",
                    "Pantai BUL BUL",
                    "Museum Batak TB Silalahi Center",
                    "Tiara Bunga Hotel",
                    "Pakkodian",
                    "Desa Meat",
                    "Bukit Doa",
                    "Monumen Prasasti Geopark"
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

                    $sql = "SELECT * FROM tb_wisata";
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

                    createButton("MAP", "tb_map.php");
                    createButton("Penginapan", "tb_penginapan.php");
                    createButton("Rumah Makan", "tb_rumahmakan.php");
                    createButton("Souvenir", "tb_souvenir.php");
                    createButton("Transportasi", "tb_transportasi.php");

                    function createButton(label, url) {
                        var button = document.createElement("button");
                        button.innerHTML = label;
                        map.controls[google.maps.ControlPosition.TOP_CENTER].push(button);
                        button.addEventListener("click", function() {
                            window.location.href = url;
                        });
                    }

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
                                scaledSize: new google.maps.Size(25, 20)
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
                                    '<img src="' + locations[i][5] + '" style="width: 420px; height: 250px;"><br>' +
                                    '<h3>Rating</h3><br>' +
                                    '<form action="rating.php" method="POST">' +
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
                                    '<textarea id="comment" name="comment"></textarea>' +
                                    '<button type="submit">Simpan</button>' +
                                    '</form>' +
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

            <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBA9KznFyKV2mH5JyKf1nRdJATnGRCV8bQ&callback=initMap">
            </script>
            <script src="script.js"></script>
</body>

</html>