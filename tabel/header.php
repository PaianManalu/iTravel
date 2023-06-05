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

    .nav-item:hover .dropdown-menu {
        display: block;
    }

    section {
        padding-top: 57px;
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
                        <a href="../home.php">Home</a>
                        <a href="../tb_map.php">Map</a>
                        <a href="../home.php">Service</a>
                        <a href="../home.php">About</a>
                    </div>

                </ul>
            </nav>
            <script src="../js/nav.js">
            /*active navigation*/
            </script>
        </header>
    </section>

    <section></section>