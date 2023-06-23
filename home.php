<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="homes.css">
    <script src="../js/home.js"></script>
    <title>i-Travel</title>

</head>

<body>
    <!--header-->
    <section class="header" id="home">
        <header>
            <a href="home.php" class="logo">iTravel</a>
            <nav>
                <div class="navigation">
                    <div id="button">
                        <button class="raise">
                            <a href="#home">
                                Beranda</a>
                        </button>
                        <button class="raise">
                            <a href="tb_map.php">Map</a>
                        </button>
                        <button class="raise">
                            <a href="#service">Layanan</a>
                        </button>
                        <button class="raise">
                            <a href="#about">Tentang Kami</a>
                        </button>
                        <button class="raise">
                            <a href="tb_contact.php">Kontak</a>
                        </button>
                    </div>
                </div>
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
                    <?php
$host = "localhost";
$user = "root";
$password = "";
$db = "go_map";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon) {
    die("Koneksi gagal:" . mysqli_connect_error());
}
$query = mysqli_query($kon, "SELECT * FROM tb_map WHERE category = 'wisata' ORDER BY id LIMIT 12");

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
            </div>
        </section>
        <!--testimonials-->
        <section class="testimonial">
            <h2 class="heading">Feedback</h2>
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
        <h1 class="heading">Layanan</h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"></i> <a href="query.php?category=inapan" class="query-button">
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
                <i class="fas fa-camera"></i> <a href="query.php?category=wisata" class="query-button">
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
                <i class="fas fa-utensils"></i> <a href="query.php?category=rumahmakan" class="query-button">
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
                <i class="fas fa-bus"></i> <a href="query.php?category=transportasi" class="query-button">
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
                <i class="fas fa-gift"></i> <a href="query.php?category=souvenir" class="query-button">
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
            <h2 class="headingabout">Tentang kami</h2>
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