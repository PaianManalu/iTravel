<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="../js/home.js"></script>
    <title>i-Travel</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /*header*/
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 20px 10%;
            z-index: 100;
            transition: 0.6s;
            background: #000;
            align-items: center;
        }

        .logo {
            position: relative;
            font-weight: bold;
            color: #0dcdc2;
            text-decoration: none;
            font-size: 3.5em;
            letter-spacing: 2px;
            transition: 0.6s;
        }

        /* navigasi */
        .navigation a {
            font-size: 26px;
            color: #ffffff;
            text-decoration: none;
            font-weight: 400;
            margin-left: 5px;
            transition: background 0.3s ease;
            position: relative;
            z-index: 1;
            padding: 7px 15px;
            /* Tambahkan border tipis putih pada menu yang aktif */
            border: 1px solid transparent;
        }

        .navigation a::before {
            content: "";
            position: absolute;
            top: 0;
            left: -5px;
            right: -5px;
            bottom: 0;
            border-radius: 100px;
            background: rgba(255, 255, 255, 0.233);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .navigation a:hover::before,
        .navigation a.active::before {
            opacity: 1;
        }

        /* Tambahkan style untuk menu yang aktif */
        .navigation a.active {
            border-color: #ffffff;
            border-radius: 100px;
        }

        .nav-item.dropdown {
            position: relative;
            float: right;
            margin-left: 15px;
        }

        .nav-link.dropdown-toggle::after {
            display: inline-block;
            margin-left: 5px;
            vertical-align: middle;
            content: "\25BC";
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
            padding: 0;
            margin: 0;
        }

        .dropdown-item {
            display: block;
            padding: 10px 20px;
            color: #fff;
            background-color: #000;
            text-decoration: none;
            padding: 0;
            margin: 0;
            list-style: none;
            pointer-events: none;
        }

        .nav-item:hover .dropdown-menu {
            display: block;
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
            height: 58vh;
            margin-left: 10%;
            margin-right: 0;
            min-height: 100%;
            margin-top: 115px;
        }

        .body::before {
            display: flex;
            align-items: center;
            content: "";
            background: #000;
            position: absolute;
            max-height: 69.5vh;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
        }

        .body .content h1 {
            font-size: 70px;
            font-weight: 750;
            color: #0dcdc2;
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
            border: 2px solid #0dcdc2;
            border-radius: 20px;
            font-size: 26px;
            color: #0dcdc2;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* Popular Destination */
        .popular-destination {
            padding: 20px 0;
        }

        .section-title {
            font-size: 36px;
            font-weight: bold;
        }

        .section-subtitle {
            font-size: 24px;
            color: #000000;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .destination-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .destination-item {
            width: calc(33.33% - 40px);
            padding: 20px;
            margin: 20px;
            text-align: center;
            position: relative;
            /* menambahkan posisi relatif untuk efek mengambang */
            overflow: hidden;
            /* mengatur overflow menjadi hidden untuk mengatur efek mengambang */
        }

        .destination-image {
            width: 650px;
            height: 350px;
            /* ukuran gambar yang diperbesar */
            object-fit: cover;
            border-radius: 20px;
            transition: transform 0.3s ease-in-out;
            /* menambahkan transisi transform untuk efek mengambang */
        }

        .destination-title {
            font-size: 28px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .destination-description {
            font-size: 22px;
            color: #000000;
            margin-bottom: 10px;
        }

        .destination-link {
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }

        .destination-link:hover {
            text-decoration: underline;
        }

        /* Efek mengambang saat hover */
        .destination-item:hover .destination-image {
            transform: scale(1.1);
            border-radius: 20px;
            /* memberikan efek perbesaran pada gambar saat hover */
        }

        /*testinmonials*/

        .testimonial {
            background: url(img/1.jpeg);
            background-size: cover;
            min-height: 800px;
            padding: 60px 0;
        }

        .testimonial .heading {
            text-align: center;
            font-size: 72px;
            font-weight: bold;
            color: #0dcdc2;
            margin-bottom: 40px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
        }

        .contentBx {
            width: 600px;
            padding: 50px;
            background-color: rgba(0, 0, 0, 0.4);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 160px;
        }

        .testimonialContent {
            flex: 1;
        }

        .testimonialImg {
            margin-top: 20px;
        }

        .contentBx p {
            font-size: 24px;
            color: #ffffff;
            line-height: 1.6;
        }

        h3 {
            font-size: 28px;
            font-weight: bold;
            color: #0dcdc2;
            margin-top: 20px;
        }

        .testimonial .rating {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .testimonial .rating .star {
            color: #f8d32a;
            margin: 0 2px;
        }

        /*service*/
        .heading {
            text-align: center;
            padding: 2.5rem;
            font-size: 3.9rem;
            border-radius: 0.5rem;
            padding: 2rem 1rem;
            color: #0dcdc2;
        }

        .services {
            text-align: center;
            color: #000;
        }

        .services a {
            text-align: center;
            color: #000;
            text-decoration: none;
        }

        .services a:hover {
            color: #0dcdc2
        }

        .services .box-container {
            display: flex;
            flex-wrap: nowrap;
            overflow: auto;
            gap: 1.5rem;
            justify-content: center;
        }

        .services .box-container .box {
            max-width: 20%;
            border-radius: 0.5rem;
            padding: 1rem;
            text-align: center;
            white-space: normal;
        }

        .services .box-container .box:hover {
            color: #0dcdc2;
        }

        .services .box-container .box i {
            padding: 1rem;
            font-size: 5.5rem;
        }

        .services .box-container .box h3 {
            font-size: 2.5rem;
            margin-top: 1rem;
        }

        .services .box-container .box p {
            font-size: 1.4rem;
            padding: 0.5rem 0;
        }

        .services .box-container :hover {
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
        }

        /*about us*/
        .about {
            position: relative;
            width: 100%;
            display: flex;
            color: #000;
            padding: 50px;
        }

        .about .left {
            padding: 100px;
            display: flex;
            width: 50%;
        }

        .about .left img.imgabout {
            position: sticky;
            max-width: 1000px;
            border-radius: 100px;
            box-shadow: -30px 20px 40px 0 rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease-in-out;
        }

        .about .left img.imgabout:hover {
            transform: translateY(-20px);
            box-shadow: -50px 40px 40px 0 rgba(0, 0, 0, 0.5);
        }

        .about .about-content {
            padding: 100px;
            width: 50%;
        }

        .headingabout {
            color: #0dcdc2;
            font-size: 50px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        hr {
            color: #0dcdc2;
            border: none;
            height: 1px;
            background-color: #0dcdc2;
            margin-bottom: 20px;
            position: relative;
        }

        hr::before {
            content: "";
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            background-color: #0dcdc2;
            border-radius: 50%;
        }

        hr::after {
            content: "";
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 10px;
            height: 10px;
            background-color: #fff;
            border-radius: 50%;
        }

        .text {
            color: #000000;
            font-size: 32px;
            font-weight: 300;
            letter-spacing: 1px;
        }

        ul {
            margin: 0px;
            padding: 0px;
        }

        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /*header*/
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 20px 10%;
            z-index: 100;
            transition: 0.6s;
            background: #000;
            align-items: center;
        }

        .logo {
            position: relative;
            font-weight: bold;
            color: #0dcdc2;
            text-decoration: none;
            font-size: 3.5em;
            letter-spacing: 2px;
            transition: 0.6s;
        }

        /* navigasi */
        .navigation a {
            font-size: 26px;
            text-decoration: none;
            color: #0dcdc2;
            font-weight: 400;
            margin-left: 5px;
            transition: background 0.3s ease;
            position: relative;
            z-index: 1;
            padding: 7px 15px;
            /* Tambahkan border tipis putih pada menu yang aktif */
            border: 1px solid transparent;
        }

        .navigation button {
            background: none;
            border: 2px solid;
            font: inherit;
            line-height: 1;
            margin: 0.5em;
            padding: 1em 2em;
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
            height: 58vh;
            margin-left: 10%;
            margin-right: 0;
            min-height: 100%;
            margin-top: 115px;
        }

        .body::before {
            display: flex;
            align-items: center;
            content: "";
            background: #000;
            position: absolute;
            max-height: 69.5vh;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
        }

        .body .content h1 {
            font-size: 70px;
            font-weight: 750;
            color: #0dcdc2;
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

        /* Popular Destination */
        .popular-destination {
            padding: 20px 0;
        }

        .section-title {
            font-size: 36px;
            font-weight: bold;
        }

        .section-subtitle {
            font-size: 24px;
            color: #000000;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .destination {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            justify-content: space-between;
            padding-top: 50px;
            padding: 0 50px;
        }

        .card {
            width: 600px;
            height: 680px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 1rem 3rem rgba(13, 205, 194, 0.2);
            padding-bottom: 2rem;
            margin: 3rem 3rem;
            transition: transform 0.3s, box-shadow 0.3s;
            border: 2px solid #0dcdc2;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(13, 205, 194, 0.4), 0 0.5rem 1rem rgba(13, 205, 194, 0.3);
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            width: 100%;
            height: 350px;
            object-fit: cover;
            margin-bottom: 25px;
            transition: filter 0.3s;
        }

        .card-img-top:hover {
            filter: brightness(60%);
        }

        .card-body {
            padding: 1rem 4.5rem;
            margin-bottom: 120px;
        }

        .card-title {
            font-size: 30px;
            margin-bottom: 10px;
            letter-spacing: 1px;
            color: #0dcdc2;
        }

        .card-text {
            font-size: 20px;
        }


        /*testinmonials*/

        .testimonial {
            background: url(img/1.jpeg);
            background-size: cover;
            min-height: 800px;
            padding: 60px 0;
        }

        .testimonial .heading {
            text-align: center;
            font-size: 72px;
            font-weight: bold;
            color: #0dcdc2;
            margin-bottom: 40px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
        }

        .contentBx {
            width: 600px;
            padding: 50px;
            background-color: rgba(0, 0, 0, 0.4);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 160px;
        }

        .testimonialContent {
            flex: 1;
        }

        .testimonialImg {
            margin-top: 20px;
        }

        .contentBx p {
            font-size: 24px;
            color: #ffffff;
            line-height: 1.6;
        }

        h3 {
            font-size: 28px;
            font-weight: bold;
            color: #0dcdc2;
            margin-top: 20px;
        }

        .testimonial .rating {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .testimonial .rating .star {
            color: #f8d32a;
            margin: 0 2px;
        }

        /*service*/
        .heading {
            text-align: center;
            padding: 2.5rem;
            font-size: 3.9rem;
            border-radius: 0.5rem;
            padding: 2rem 1rem;
            color: #0dcdc2;
        }

        .services {
            text-align: center;
            color: #000;
        }

        .services a {
            text-align: center;
            color: #000;
            text-decoration: none;
        }

        .services a:hover {
            color: #0dcdc2
        }

        .services .box-container {
            display: flex;
            flex-wrap: nowrap;
            overflow: auto;
            gap: 1.5rem;
            justify-content: center;
        }

        .services .box-container .box {
            max-width: 20%;
            border-radius: 0.5rem;
            padding: 1rem;
            text-align: center;
            white-space: normal;
        }

        .services .box-container .box:hover {
            color: #0dcdc2;
        }

        .services .box-container .box i {
            padding: 1rem;
            font-size: 5.5rem;
        }

        .services .box-container .box h3 {
            font-size: 2.5rem;
            margin-top: 1rem;
        }

        .services .box-container .box p {
            font-size: 1.4rem;
            padding: 0.5rem 0;
        }

        .services .box-container :hover {
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
        }

        /*about us*/
        .about {
            position: relative;
            width: 100%;
            display: flex;
            color: #000;
            padding: 50px;
        }

        .about .left {
            padding: 100px;
            display: flex;
            width: 50%;
        }

        .about .left img.imgabout {
            position: sticky;
            max-width: 1000px;
            border-radius: 100px;
            box-shadow: -30px 20px 40px 0 rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease-in-out;
        }

        .about .left img.imgabout:hover {
            transform: translateY(-20px);
            box-shadow: -50px 40px 40px 0 rgba(0, 0, 0, 0.5);
        }

        .about .about-content {
            padding: 100px;
            width: 50%;
        }

        .headingabout {
            color: #0dcdc2;
            font-size: 50px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        hr {
            color: #0dcdc2;
            border: none;
            height: 1px;
            background-color: #0dcdc2;
            margin-bottom: 20px;
            position: relative;
        }

        hr::before {
            content: "";
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            background-color: #0dcdc2;
            border-radius: 50%;
        }

        hr::after {
            content: "";
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 10px;
            height: 10px;
            background-color: #fff;
            border-radius: 50%;
        }

        .text {
            color: #000000;
            font-size: 32px;
            font-weight: 300;
            letter-spacing: 1px;
        }

        h5 {
            color: #0dcdc2;
            font-size: 72px;
        }


        /*efek responsif*/
    </style>
</head>

<body>
    <!--header-->
    <section class="header" id="home">
        <header>
            <a href="home.php" class="logo">iTravel</a>
            <nav>
                <ul>
                    <div class="navigation">
                        <div id:"button">
                            <button class:"raise">
                                <a href="#home">Home</a>
                            </button>
                            <button class:"raise">
                                <a href="tb_map.php">Map</a>
                            </button>
                            <button class:"raise">
                                <a href="#service">Service</a>
                            </button>
                            <button class:"raise">
                                <a href="#about">About</a>
                            </button>
                        </div>
                    </div>

                </ul>
            </nav>
            <script src="../js/nav.js">
                /*active navigation*/
            </script>
        </header>
    </section>
    <!--body-->
    <section class="body" ">
      <div class=" bodyBx">
        <div class="content">
            <h1>Selamat datang di iTravel <br /></h1>
            <p>
                Nikmati Eksplorasi Sumatera Utara dengan i-Travel: Panduan Komprehensif untuk Akomodasi, Restoran,
                Suvenir, dan Transportasi dari Kualanamu hingga Bandara Silangit!
            </p>
            <div class="btn-box">
                <button class="raise">
                    <a href="home.php">Eksplorasi</a>
                </button>

            </div>
        </div>
        </div>
        </div>
    </section>
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
                                <p class="card-text">

                                    Taman Eden 100 di Sumatera Utara menawarkan keindahan alam yang menakjubkan. Dengan
                                    pemandangan yang memukau dan lingkungan yang indah, Taman Eden 100 menjadi destinasi
                                    yang sempurna bagi pecinta alam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cardbx">
                        <div class="card mb-3">
                            <img src="img/toledo.jpg" class="card-img-top" alt="Destination 2" />
                            <div class="card-body">
                                <h5 class="card-title">Toledo InnToledo Inna</h5>
                                <p class="card-text">
                                    Hotel di Pematangsiantar, Sumatera Utara menawarkan kamar-kamar
                                    modern dengan fasilitas seperti AC dan TV layar datar. Terdapat
                                    juga restoran, lounge, dan ruang rapat. Dekat dengan tempat
                                    wisata seperti Air Terjun Sipiso-piso dan Danau Toba. Pilihan
                                    tepat untuk menginap di Pematangsiantar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cardbx">
                        <div class="card mb-3">
                            <img src="img/baren.jpg" class="card-img-top" alt="Destination 3" />
                            <div class="card-body">
                                <h5 class="card-title">Baren Coffee & Roastery</h5>
                                <p class="card-text">
                                    Baren's Coffee & Roastery adalah tempat kopi yang menawarkan
                                    kopi berkualitas tinggi yang dipanggang dengan baik, serta
                                    suasana yang modern dan nyaman untuk menikmati kopi. Dalam
                                    lingkungan yang ramah pengunjung.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cardbx">
                        <div class="card mb-3">
                            <img src="img/Puncak Sipinsur.jpg" class="card-img-top" alt="Destination 4" />
                            <div class="card-body">
                                <h5 class="card-title">Puncak Sipinsur</h5>
                                <p class="card-text">
                                    Puncak Sipincur di Simalungun, Sumatera Utara, menawarkan
                                    pemandangan sawah, perbukitan hijau, dan pegunungan yang
                                    spektakuler. Pengunjung dapat hiking dan berkemah sambil
                                    menikmati udara segar dan keindahan alam. Cocok untuk pecinta
                                    alam dan pengunjung yang mencari ketenangan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cardbx">
                        <div class="card mb-3">
                            <img src="img/airport silangit.jpg" class="card-img-top" alt="Destination 5" />
                            <div class="card-body">
                                <h5 class="card-title">Airport Silangit</h5>
                                <p class="card-text">
                                    Bandara Silangit adalah gerbang utama ke Danau Toba yang
                                    terkenal di Sumatera Utara, Indonesia. Dengan terminal modern
                                    dan berbagai penerbangan langsung dari kota-kota besar di
                                    Indonesia, Bandara Silangit adalah pilihan terbaik untuk memulai
                                    perjalanan Anda ke destinasi wisata yang menakjubkan di
                                    sekitarnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cardbx">
                        <div class="card mb-3">
                            <img src="img/airport kualanamu.jpg" class="card-img-top" alt="Destination 6" />
                            <div class="card-body">
                                <h5 class="card-title">Airport Kualanamu</h5>
                                <p class="card-text">
                                    Bandara Internasional Kualanamu adalah bandara modern yang
                                    melayani penerbangan domestik dan internasional di Sumatera
                                    Utara. Dengan fasilitas yang lengkap dan modern, bandara ini
                                    menjadi pintu gerbang utama bagi wisatawan yang ingin
                                    menjelajahi Sumatera Utara.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <!--testimonials-->
        <section class="testimonial">
            <h2 class="heading">Apa yang klien kami sampaikan</h2>
            <div class="container">
                <div class="contentBx">
                    <div>
                        <p>
                            Sistem informasi wisata Kualanamu Sialangit di website ini sangat lengkap dan mudah
                            diakses,
                            sangat membantu saya dalam merencanakan perjalanan wisata.
                        </p>
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                        </div>
                        <br />
                    </div>
                </div>
                <div class="contentBx">
                    <div>
                        <p>
                            Website ini sangat user-friendly dan memberikan informasi wisata yang akurat, terima
                            kasih
                            atas pengalaman browsing yang menyenangkan.
                        </p>
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--service-->
    <section class="services" id="service">
        <h1 class="heading">Service</h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <a href="tabel.php?table=tb_penginapan">
                    <h3>Hotel</h3>
                </a>
                <p>
                    Temukan pilihan penginapan nyaman dan terjangkau di sekitar Bandara
                    Kualanamu dan Bandara Silangit untuk memastikan Anda memiliki tempat
                    istirahat yang sempurna.
                </p>
                </a>
            </div>
            <div class=" box">
                <i class="fas fa-camera"></i>
                <a href="tabel.php?table=tb_wisata">
                    <h3>Wisata</h3>
                </a>
                <p>
                    Temukan destinasi wisata menarik di sekitar Bandara Kualanamu dan
                    Bandara Silangit yang memukau dengan keindahan alam, budaya, dan
                    atraksi wisata unik.
                </p>
                </a>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <a href="tabel.php?table=tb_rumahmakan">
                    <h3>Rumah Makan</h3>
                </a>
                <p>
                    Cicipi kuliner lokal terbaik di sekitar Bandara Kualanamu dan
                    Bandara Silangit yang memanjakan lidah Anda dengan cita rasa khas
                    daerah dan masakan internasional.
                </p>
                </a>
            </div>
            <div class="box">
                <i class="fas fa-bus"></i>
                <a href="tabel.php?table=tb_transportasi">
                    <h3>Transportasi</h3>
                </a>
                <p>
                    Dapatkan informasi lengkap tentang layanan shuttle, angkutan umum,
                    dan penyewaan mobil/sepeda motor di sekitar Bandara Kualanamu dan
                    Bandara Silangit untuk memudahkan perjalanan Anda dan menjadikan
                    pengalaman liburan Anda lebih nyaman.
                </p>
                </a>
            </div>
            <div class="box">
                <i class="fas fa-gift"></i>\
                <a href="tabel.php?table=tb_souvenir">
                    <h3>Souvenir</h3>
                </a>
                <p>
                    Temukan toko-toko souvenir terbaik di sekitar Bandara Kualanamu dan
                    Bandara Silangit yang menawarkan produk unik dan khas daerah sebagai
                    oleh-oleh yang sempurna untuk diambil pulang.
                </p>
                </a>
            </div>
        </div>
    </section>
    <script>
        function changeTable(tableName) {
            window.location.href = 'tabel.php?table=' + tableName;
        }
    </script>

    <section class="about" id="about">
        <div class="left">
            <img src="img/2.jpg" alt="" class="imgabout">
        </div>
        <div class="about-content">
            <h2 class="headingabout">About us</h2>
            <hr />
            <h5>Temukan Pesona Sumatera Utara Bersama i-Travel!</h5>
            <br />
            <p class="text">
                i-Travel adalah teman perjalanan Anda yang siap membantu Anda menjelajahi pesona Sumatera Utara. Dengan
                informasi terpercaya tentang destinasi wisata, penginapan, kuliner, souvenir, dan transportasi, kami
                hadir untuk membuat perjalanan Anda menjadi pengalaman tak terlupakan.
            </p><br>
            <p class="text">
                Kami adalah tim yang terdiri dari pecinta wisata dan teknologi yang berkomitmen untuk memberikan
                pengalaman pengguna yang mengesankan dan memudahkan Anda dalam merencanakan perjalanan impian Anda.
            </p><br>
            <p class="text">
                Kami juga berfokus pada keberlanjutan dan pelestarian lingkungan serta budaya daerah yang kami
                promosikan. Kami bekerja sama dengan pihak lokal, menjaga keberagaman budaya, menghargai tradisi, dan
                berpartisipasi dalam kegiatan konservasi alam.
            </p><br>
            <p class="text">Kami berharap i-Travel dapat menjadi sumber inspirasi bagi Anda dalam merencanakan
                perjalanan Anda di sekitar Bandara Kualanamu hingga Bandara Silangit. Jangan ragu untuk menghubungi kami
                jika Anda membutuhkan informasi lebih lanjut atau memiliki pertanyaan. Terima kasih telah memilih
                i-Travel sebagai teman perjalanan Anda. Selamat menjelajahi keindahan Sumatera Utara!</p>
        </div>
    </section>

    <!--footer-->
    <?php
    include "footer.php";
    ?>

</body>

</html>