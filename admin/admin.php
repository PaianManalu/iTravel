<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="js/admin.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            padding: 64px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both
        }

        .column-66 {
            float: left;
            width: 66.66666%;
            padding: 20px;
        }

        .column-33 {
            float: left;
            width: 33.33333%;
            padding: 20px;
        }

        .large-font {
            font-size: 48px;
        }

        .xlarge-font {
            font-size: 64px
        }

        .button {
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            background-color: #04AA6D;
        }

        img {
            display: block;
            height: auto;
            max-width: 100%;
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

        @media screen and (max-width: 1000px) {

            .column-66,
            .column-33 {
                width: 100%;
                text-align: center;
            }

            img {
                margin: auto;
            }
        }
    </style>
</head>

<body>

    <div style="text-align:center">
        <h1 class="heading">ADMIN</h1>
    </div>



    <!-- Clarity Section -->
    <div class="container" style="background-color:#f1f1f1">
        <div class="row">

        </div>
        <div class="row">
            <section class="services" id="service">

                <div class="box-container">
                    <<div class="box">
                        <i class="fas fa-comment"></i> <!-- Ganti dengan ikon komentar yang sesuai -->
                        <a href="tb_Komentar.php">
                            <h3>Komentar</h3>
                        </a>
                </div>
                <div class="box">
                    <i class="fas fa-star"></i> <!-- Ganti dengan ikon rating yang sesuai -->
                    <a href="tb_rating.php">
                        <h3>Rating</h3>
                    </a>
                </div>
                <div class="box">
                    <i class="fas fa-map-marker-alt"></i> <!-- Ganti dengan ikon map yang sesuai -->
                    <a href="queryyy.php" class="query-button">
                        <h3>MAP</h3>
                    </a>
                </div>
                <div class="box">
                    <i class="fas fa-upload"></i> <a href="upload_form.php"><!-- Ganti dengan ikon upload yang sesuai -->
                        <h3>Upload</h3>
                    </a>
                </div>
        </div>
        </section>
    </div>

    <script>
        function changeTable(tableName) {
            window.location.href = 'tabel.php?table=' + tableName;
        }
    </script>

</body>

</html>