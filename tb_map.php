<!DOCTYPE html>
<html>

<head>
    <title>Map</title>
    <meta charset="utf-8">
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
            <ul>
                <div class="navigation">
                    <div id="button">
                        <button class="raise">
                            <a href="home.php">
                                Beranda</a>
                        </button>
                        <button class="raise">
                            <a href="tb_map.php">
                                MAP</a>
                        </button>
                        <button class="raise">
                            <a href="tb_contact.php">
                                Kontak</a>
                        </button>
                    </div>
                </div>
            </ul>
        </header>
    </section>
    <section class="body">
        <div class="bodyBx">
            <div class="content">
                <h1>MAP<br /></h1>
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
                        <?php
$host = "localhost";
$user = "root";
$password = "";
$db = "go_map";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon) {
    die("Koneksi gagal:" . mysqli_connect_error());
}
$query = mysqli_query($kon, "SELECT * FROM tb_map WHERE category = 'wisata' ORDER BY id LIMIT 6");

if (mysqli_num_rows($query) > 0) {
    while ($data = mysqli_fetch_assoc($query)) {
        ?>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <a href="deskripsi.php?id=<?php echo $data['id']; ?>">
                                    <img src="<?php echo $data['gambar']; ?>" class="card-img-top"
                                        alt="<?php echo $data['nama']; ?>" />
                                </a>
                                <div class="card-body">
                                    <a href="deskripsi.php?id=<?php echo $data['id']; ?>">
                                        <h5 class="card-title">
                                            <i class="fas fa-camera"></i>&nbsp; <?php echo $data['nama']; ?>
                                        </h5>
                                    </a>
                                    <a href="deskripsi.php?id=<?php echo $data['id']; ?>">
                                        <p class="card-text">
                                            <?php echo $data['deskripsi']; ?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
    }
} else {
    echo "Maaf, data tidak ada.";
}
?>
                    </section>
                </div>
            </section>

            <?php
            include "footer.php";
            ?>

            <script>
            var input = document.getElementById("search-box");
            var select = document.getElementById("options");
            var data = [

                "Lago Hotel & Resto", "Pondok Berata Dapdap", "Hotel Santo Djaya", "Sinagodang Park",
                "PIK ( Penginapan Indah Kirana )", "Parapat Danau Toba", "Rumah Nek Ribut", "Desa Huta Baru",
                "OYO 90920 Agave Hotel", "OYO 90509 Nadia Hotel", "Batavia Hotel", "Sapadia Hotel", "Pancur Gading",
                "Lim's Hotel dan Cafe", "Perumahan Beringin Indah Permai", "Grand Family",
                "Pancur Gading Hotel dan Resort", "Tiara Bunga Hotel", "Rumah Makan Srikandi",
                "Rumah Makan Muslim Bundo Minang", "Restaurant Asia", "Parapat Pansi",
                "Damar Toba ~ Lakeside Eatery & Stay", "Rm Asido Rohana", "Rumah makan jahir tombur bpk gultom",
                "Rest Area Modern Bamboo", "RM MUSLIM MAS ARI", "RM. Khas Batak Horas Silindung",
                "Restaurant Panorama ori", "Mie Gacoan Medan Karya", "Ayam Penyet Ar - Rahman Pasar 10 Tembung",
                "RUMAH MAKAN AJO TANJUNG", "Warung Pak Dikun", "Rumah Makan Restu",
                "WISNU TATAH INDAH (SOUVENIR UKIRAN BATAK", "Pasar Balige", "SEKKA Craft Supplies",
                "Toko Grosir Adriell Gultom shop balige",
                "Remon Ponsel Situmorang Lapak Rosa Girsang (Fresh Farmers Market)", "Toko Raja Oloan 2",
                "Jaya Ponsel Mandiri", "Pekan Tiga Dolok", "Pekan Tiga Balata",
                "Roti Kacang R2.961105723051156ajawali", "TOKO 35 Siantar | RAMBUNGMERAH |", "Poshop.Id",
                "Irian Supermarket & Dept. Store", "Alfamart setia budi t.tinggi", "Alfamart Simpang Matapao",
                "Carrefour - Medan Citra Garden", "Pekan Minggu Percut Sei Tuan Deli Serdang",
                "Stasiun Kereta Api Baja Linggei", "Stasiun Siantar", "Stasiun KA Galang", "Stasiun Lubuk Pakam",
                "Terminal Amplas", "Terminal Bus Sumatera Transport", "Terminal Pinang Baris Medan",
                "Terminal Helvetia", "Terminal Tanjung Gusta", "Pelabuhan Tigaraja / Tiga Raja Pier",
                "Pelabuhan Penyeberangan Balige", "Bandara Silangit International Airport",
                "Bandara Kualanamu International Airport", "Pantai Inna Parapat", "Bukit Gibeon",
                "Bukit Sipolha dan Pulau Hole", "Air Terjun efrata Harian Boho", "Tankahan Bah Alip",
                "Air Terjun Biak- Biak", "Waterpark Gundaling Paya Pasir", "Bah Bolon Arum Jeram",
                "Pantai Mutiara 88", "Pantai Pasir Putih Parparean", "Museum Batak TB Silalahi Center", "Bukit Doa",
                "Tanjung unta,Simalungun", "Kebun Teh Sidamanik", "Bah Bolon Arum Jeram", "Museum Kota",
                "Desa Meat", "Pakkodian", "Hotel Nabasa", "HOTRONA HOTEL", "Mabar Homestay & Taxi", "Patane l",
                "Desa Bonandolok Sosortaguru Sinurat", "BAGAS HOMESTAY", "Ps. Lumbun Julu", "Star Beach Hotel",
                "Hotel Niagara Parapat", "Rumah Nek Ribut", "OYO 2045 Hotel 211", "Patra Parapat Hotel",
                "Desa Lumban Holbung Nabalau", "Rumah Makan Padang SABANA MINANG", "Restaurant Sehat",
                "Restaurant Istana Minang 2", "Restaurant Asia", "nama", "Restaurant Istana Minang 2",
                "Rumah Makan Lembah Anai Salero Minang", "RM. Fly Over Laguboti", "Bpk 'Jaya'", "Wr. Muslim",
                "Rest Area Modern Bamboo", "Rumah Makan Sri Kemuning", "Pintu Batu Tepi Sawah", "Kepiting Gokil's",
                "Lemang Barokah", "Rumah Makan Barokah", "KFC", "RM Pondok Senangkong", "Pelangi FC & Rainbow Cafe",
                "FWR4+P3P", "Batikta - Batik Batak Balige", "Toko Enjelita Balige",
                "Souvenir pusat oleh-oleh PAPA ROZTI", "Toko P Sihombing",
                "Toko N. Sinaga / UD.Florencia (NEGER SINAGA)", "Alfamidi sm raja parapat", "Distro kaos Batak CKT",
                "Panglong Pertukangan Kayu UD. SITOLU SADA CIPTA GE...", "Toko Citra",
                "Parluasan Traditional Market", "Stasiun Siantar", "Stasiun K.A. Sei Rampah",
                "Stasiun Kereta Api Perbaungan", "Terminal Amplas", "Tanjung unta,Simalungun",
                "Bukit Sipolha dan Pulau Hole", "Taman Hewan", "Kebun Teh Sidamanik",
                "Waterpark Gundaling Paya Pasir", "Bah Bolon Arum Jeram", "Museum Kota", "Danau Laut Tador",
                "Air Terjun Widuri", "Situmurun Waterfall", "Taman Eden 100 Tobasa", "Pantai Pasir Putih Parparean",
                "Pantai BUL BUL", "Museum Batak TB Silalahi Center", "Tiara Bunga Hotel", "Pakkodian", "Desa Meat",
                "Bukit Doa", "Monumen Prasasti Geopark", "Puncak Sipinsur", "Lembah Bakkara", "IT DEL"
            ];
            //loop for yang akan berjalan sebanyak elemen dalam array data berdasar option yang diberikan
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
                            fontSize: '15px',
                        },
                        icon: {
                            url: 'https://maps.google.com/mapfiles/ms/icons/black-dot.png',
                            scaledSize: new google.maps.Size(20, 20)
                        }
                    });

                    return marker;
                }

                // Menggunakan fungsi createMarker untuk membuat marker dengan setiap nama 
                var locati = [{
                        position: {
                            lat: 3.5901099412346165,
                            lng: 98.67258074382252
                        },
                        name: 'Medan'
                    },
                    {
                        position: {
                            lat: 3.57316967302348,
                            lng: 98.88110164949245
                        },
                        name: 'Lubuk Pakam'
                    },
                    {
                        position: {
                            lat: 3.3162226764522216,
                            lng: 99.189538047138
                        },
                        name: 'Tebing Tinggi'
                    },
                    {
                        position: {
                            lat: 2.952433949861991,
                            lng: 99.08575987316539
                        },
                        name: 'Pematang Siantar'
                    },
                    {
                        position: {
                            lat: 2.844865372795513,
                            lng: 99.05406438008443
                        },
                        name: 'Saribudolok'
                    },
                    {
                        position: {
                            lat: 2.6684433464759127,
                            lng: 98.9376498121994
                        },
                        name: 'Parapat'
                    },
                    {
                        position: {
                            lat: 2.583205490921636,
                            lng: 99.06652764174781
                        },
                        name: 'Lumban Djulu'
                    },
                    {
                        position: {
                            lat: 2.4487576185270323,
                            lng: 99.14404392212444
                        },
                        name: 'Porsea'
                    },
                    {
                        position: {
                            lat: 2.3568731716810443,
                            lng: 99.12883489439503
                        },
                        name: 'Laguboti'
                    },
                    {
                        position: {
                            lat: 2.3331195644867275,
                            lng: 99.0825468233071
                        },
                        name: 'Balige'
                    },
                    {
                        position: {
                            lat: 2.1478720598476975,
                            lng: 98.9623014145697
                        },
                        name: 'Silangit'
                    }
                ];

                locati.forEach(function(locati) {
                    var marker = createMarker(new google.maps.LatLng(locati.position.lat, locati.position.lng),
                        locati.name);
                    marker.setMap(map);
                });



                createButton("Wisata", "tb_wisata.php");
                createButton("Rumah Makan", "tb_rumahmakan.php");
                createButton("Penginapan", "tb_penginapan.php");
                createButton("Souvenir", "tb_souvenir.php");
                createButton("Transportasi", "tb_transportasi.php");

                function createButton(label, url) {
                    var button = document.createElement("button");
                    button.innerHTML = label;
                    button.classList.add("button"); // Menambahkan kelas CSS "button" pada tombol
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
                            scaledSize: new google.maps.Size(15, 20)
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
                                '<b></b>Lokasi :</b><br>' +
                                '<h3>' + locations[i][4] + '</h3><br>' +
                                '<img src="' + locations[i][5] +
                                '" style="width: 420px; height: 250px;"><br><br>' +
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
                                '<div class="button-wrapper">' +
                                '<button type="submit"><i class="fas fa-paper-plane"></i></button>' +
                                '</div>' +
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

            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGl5e95hdB_l6vlyar0aNSv8pkK36Ccrg&callback=initMap"
                async defer></script>
</body>

</html>