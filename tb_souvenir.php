<!DOCTYPE html>
<html>

<head>
    <title>Map</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="maps.css">
    <link rel="stylesheet" href="map.css">
    <script src="maps.js"></script>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /*content*/
        .body .bodyBx {
            position: relative;
            background: linear-gradient(to left, #00000000, transparent),
                linear-gradient(to right, #000000 1%, transparent), url(img/bgbg2.jpg );
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            height: 39vh;
        }

        .body::before {
            display: flex;
            align-items: center;
            content: "";
            background: #000;
            position: absolute;
            max-height: 43vh;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
        }

        .body .content h1 {
            font-size: 70px;
            font-weight: 750;
            color: white;
        }

        .body .content p {
            max-width: 700px;
            font-size: 40px;
            margin: 20px 0 40px;
            color: #fff;
        }

        .body .content .btn-box {
            display: flex;
            width: 345px;
            height: 50px;
        }

        .btn-box a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 100%;
            background: transparent;
            font-size: 26px;
            color: #0dcdc2;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
            padding: 10px 20px;
        }

        .btn-box .raise {
            border: 2px solid #0dcdc2;
            border-radius: 20px;
            background: transparent;

        }

        .navigation button.raise {
            --color: #0dcdc2;
            --hover: #00bab0;
        }

        button {
            color: var(--color);
            transition: 0.25s;
        }

        button:hover,
        button:focus {
            border-color: var(--hover);
            color: #fff;
        }

        .raise:hover,
        .raise:focus {
            box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
            transform: translateY(-0.25em);
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
    </section>
    <section class="body">
        <div class="bodyBx">
            <div class="content">
                <h1>SOUVENIR<br /></h1>
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
                                <img src="img/citra.jpg" class="card-img-top" alt="Destination 1" />
                                <div class="card-body">
                                    <h5 class="card-title"> <i class="fas fa-gift"></i>&nbsp Toko Citra</h5>
                                    <p class="card-text">Toko Citra terletak di Kota Pematangsiantar, Sumatera
                                        Utara. Perusahaan ini bekerja di industri berikut: Toko bahan makanan dan
                                        supermarket.<br>
                                        Terlibat dalam: Toko bahan makanan dan supermarket
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/oke.jpg" class="card-img-top" alt="Destination 2" />
                                <div class="card-body">
                                    <h5 class="card-title"> <i class="fas fa-gift"></i>&nbsp Oke Supermarket</h5>
                                    <p class="card-text"> Alamat: Jl. Gaperta Ujung No.87 C, Tj. Gusta, Kec. Medan
                                        Helvetia, Kota Medan, Sumatera Utara 20126, Indonesia<br>
                                        Telepon: +62 61 8442065
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/simpang.jpg" class="card-img-top" alt="Destination 3" />
                                <div class="card-body">
                                    <h5 class="card-title"> <i class="fas fa-gift"></i>&nbsp Alfamart Simpang Matapao</h5>
                                    <p class="card-text">Alfamart Simpang Matapao (Tempat kerja) terletak di
                                        Perbaungan, Sumatera Utara. Perusahaan ini bekerja di industri berikut: Toko bahan
                                        makanan dan supermarket.<br>
                                        Telepon: 0812-5054-4731
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/batikta.jpg" class="card-img-top" alt="Destination 4" />
                                <div class="card-body">
                                    <h5 class="card-title"> <i class="fas fa-gift"></i>&nbsp Batikta - Batik Batak Balige</h5>
                                    <p class="card-text">toko batik yang berlokasi di Kabupaten Samosir. Toko
                                        batik ini menawarkan berbagai macam jenis kain dan motif batik khas Indonesia dan
                                        berbagai daerah di Provinsi Sumatera Utara. Batik untuk pria dan wanita tersedia disini
                                        dengan berbagai jenis seperti batik formal, batik lengan panjang dan pendek, casual,
                                        baik tradisional dan batik modern, batik tulis, sogan, batik couple dan
                                        lainnya.<br>Nomor telepon : 0811-949-680
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/kim.jpg" class="card-img-top" alt="Destination 5" />
                                <div class="card-body">
                                    <h5 class="card-title"> <i class="fas fa-gift"></i>&nbsp Indomaret kim star</h5>
                                    <p class="card-text"> Alamat: Dirgantara Mitramahardi Pt., Tj. Morawa B, Kec.
                                        Tj. Morawa, Kabupaten Deli Serdang, Sumatera Utara 20362, Indonesia<br>
                                        Kategori Bangunan: Toko Bahan Makanan .<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cardbx">
                            <div class="card mb-3">
                                <img src="img/indomsret2.jpg" class="card-img-top" alt="Destination 6" />
                                <div class="card-body">
                                    <h5 class="card-title"> <i class="fas fa-gift"></i>&nbsp Indomaret Karang Sari Tambung Nabolon</h5>
                                    <p class="card-text"> Alamat: 232P+962, Tambun Nabolon, Kec. Siantar Martoba,
                                        Kota Pematang Siantar, Sumatera Utara 21154, Indonesia<br>
                                        Kategori Bangunan: Toko Bahan Makanan .<br>
                                        Telepon: Website: https://indomaret.co.id/
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section> <!--footer-->
            <?php
            include "footer.php";
            ?>


            <script>
                var input = document.getElementById("search-box");
                var select = document.getElementById("options");
                var data = [
                    "Pasar Balige",
                    "Batikta - Batik Batak Balige",
                    "WISNU TATAH INDAH (SOUVENIR UKIRAN BATAK)",
                    "Toko Enjelita Balige",
                    "SEKKA Craft Supplies",
                    "Souvenir pusat oleh-oleh PAPA ROZTI",
                    "Toko Grosir Adriell Gultom shop balige",
                    "Toko P Sihombing",
                    "Remon Ponsel Situmorang",
                    "Indomaret",
                    "Lapak Rosa Girsang (Fresh Farmers Market)",
                    "Toko N. Sinaga / UD.Florencia (NEGER SINAGA)",
                    "Toko Raja Oloan 2",
                    "Alfamidi sm raja parapat",
                    "Jaya Ponsel Mandiri",
                    "Distro kaos Batak CKT",
                    "Pekan Tiga Dolok",
                    "Panglong Pertukangan Kayu",
                    "Pekan Tiga Balata",
                    "Toko Citra",
                    "Roti Kacang",
                    "Parluasan Traditional Market",
                    "TOKO 35 Siantar | RAMBUNGMERAH |",
                    "Indomaret Karang Sari Tambung Nabolon",
                    "Poshop.Id"
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
                        var marker = createMarker(new google.maps.LatLng(locati.position.lat, locati.position.lng), locati.name);
                        marker.setMap(map);
                    });
                    createButton("MAP", "tb_map.php");
                    createButton("Wisata", "tb_wisata.php");
                    createButton("Penginapan", "tb_penginapan.php");
                    createButton("Rumah Makan", "tb_rumahmakan.php");
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