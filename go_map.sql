-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2023 pada 12.10
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_map`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'iTravel', '$2y$10$U5xXIvXPzJpBe8Etq9pPbeN3XOGyxnlEaGcgQ0TG1ue/MYqg8TS1.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal_waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `subjek`, `pesan`, `tanggal_waktu`) VALUES
(2, 'Ezra Agustini Pasaribu', 'ezrapasaribu08@gmail.com', 'YHYJIKLP[', 'WEBSITENYA BAGUS', '2023-05-19 07:31:42'),
(3, 'Paian', 'rika@gmail.com', 'cccc', '316475890', '2023-05-25 04:08:25'),
(4, 'mama', 'SD@gmail.com', 'map', 'sangat menarik', '2023-06-07 02:35:09'),
(5, 'ryka', 'rika@gmail.com', 'web', 'sangat membanggakan', '2023-06-07 02:39:00'),
(6, 'Paian', 'Paian@gmail.com', 'transportasi', '123', '2023-06-13 00:54:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ratings`
--

CREATE TABLE `ratings` (
  `id_rating` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ratings`
--

INSERT INTO `ratings` (`id_rating`, `rating`, `comment`) VALUES
(66, 1, 'semangat\r\n'),
(70, 1, 'mana'),
(71, 5, 'paian manalu\r\n'),
(73, 0, 'aku sayang kamu'),
(75, NULL, 'jam berapa ditutup'),
(77, 5, 'mantap'),
(111, 4, 'afghul'),
(112, 5, 'kapan stasiun unu ditutup?'),
(114, 4, NULL),
(115, 1, 'kut7ruo'),
(116, 4, 'this good');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_map`
--

CREATE TABLE `tb_map` (
  `id` int(225) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `garis_lintang` varchar(255) NOT NULL,
  `garis_bujur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `category` varchar(255) NOT NULL,
  `id_rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_map`
--

INSERT INTO `tb_map` (`id`, `nama`, `garis_lintang`, `garis_bujur`, `alamat`, `icon`, `gambar`, `category`, `id_rating`) VALUES
(0, 'Lago Hotel & Resto.', '2.345955263234745', '99.07822608947754', 'Jl. Sibola HotangSibola HotangsasToba', 'img/inapan.png', 'img/lago.jpg', 'inapan', NULL),
(1, '\r\nPondok Berata Dapdap', '2.354188079215087', '99.02544021606445', 'Tara Bunga\r\nKec. Tampahan\r\nToba', 'img/inapan.png', 'img/berata.jpg', 'inapan', NULL),
(2, 'Hotel Santo Djaya', '2.445174570633177', '99.15530204772949', 'Jl. Sm Raja\r\nPasar Porsea\r\nPorsea, Samosir', 'img/inapan.png', 'img//santo.jpg', 'inapan', NULL),
(3, 'Sinagodang Park', '2.538084189959342', '99.10466194152832', 'Sihiong\r\nKec. Bonatua Lunasi\r\nToba', 'img/inapan.png', 'img/sinagodang.jpg', 'inapan', NULL),
(4, 'PIK ( Penginapan Indah Kirana )', '2.6138818417921588', '98.99844646453857', 'Jl. Siborong Borong - Parapat\r\nSipangan Bolon\r\nKec. Girsang Sipangan Bolon\r\nKabupaten Simalungun', 'img/inapan.png', 'img/pik.jpg\r\n', 'inapan', NULL),
(5, 'Parapat Danau Toba', '2.664939791741215', '98.92905235290527', 'Taman\r\nDolok\r\nsipiak', 'img/inapan.png', 'im/parapat.jpg', 'inapan', NULL),
(6, 'Rumah Nek Ribut', '2.8404324135359404', '99.02127742767334', 'Sibunga Bunga\r\nKec. Jorlang Hataran\r\nKabupaten Simalungun', 'img/inapan.png', 'img/nek ribut.jpg', 'inapan', NULL),
(7, '\r\nDesa Huta Baru', '2.8844514800807257', '99.01252269744873', 'Huta Baru\r\nBah Sampuran\r\nKabupaten Simalungun', 'img/inapan.png', 'img/huta baru.jpg', 'inapan', NULL),
(8, 'OYO 90920 Agave Hotel', '99.01990413665771', '99.01990413665771', 'Jl. Saribu Dolok\r\nSimpang\r\nPanei\r\nPematang Siantar City, Northa', 'img/inapan.png', 'img/oyo 90920.jpg', 'inapan', NULL),
(9, 'OYO 90509 Nadia Hotel', '2.9354120279102416', '99.04380798339844', 'Naga Huta\r\nSiantar Marimbun\r\nPematang Siantar City', 'img/inapan.png', 'img/oyo 90509.jpg', 'inapan', NULL),
(10, 'Batavia Hotel', '2.9468981901471016', '99.05573844909668', 'Jl. Gereja No.101\r\nMartimbang\r\nSouth Siantar\r\nPematang Siantar City', 'img/inapan.png', 'img/batavia.jpg', 'inapan', NULL),
(11, 'Sapadia Hotel', '2.9524697933418977', '99.0648365020752', 'Jl. P Diponegoro No.21A\r\nKaro\r\nSouth Siantar\r\nPematang Siantar City', 'img/inapan.png', 'img/sapadia.jpg\r\n', 'inapan', NULL),
(12, 'Pancur Gading Hotel dan Resort', '3.530212090307762', '98.6623764038086', 'Desa Kwala Simeme Kec. Namo Rambe Kec. Deli Tua Kabupaten Deli Serdang, Sumatera Utara 20355 Indonesia', 'img/inapan.png', 'img/pancur.jpg', 'inapan', NULL),
(13, 'Lim\'s Hotel dan Cafe', '3.320216991303679', '99.15367126464844', 'l. Sisingamangaraja No.47\r\nBandar Sono\r\nKec. Padang Hulu\r\nKota Tebing Tinggi, Sumatera Utara 20625, Indonesia', 'img/inapan.png', 'img/lim\'s.jpg', 'inapan', NULL),
(14, 'Perumahan Beringin Indah Permai', '3.0248980728777224', '99.08758163452148', 'l. Veteran\r\nSinaksak\r\nKec. Tapian Dolok, Kabupaten Simalungun', 'img/inapan.png', 'img/beringin.jpg', 'inapan', NULL),
(15, 'Grand Family', '3.5518001300518773', '\r\n99.03385162353516\r\n', 'Jl. Lintas Sumatra\r\nSei Sijenggi\r\nKec. Perbaungan, Kabupaten Serdang Bedagai, Sumatera Utara 20986, Indonesia', 'img/inapan.png', 'img/grand.jpg', 'inapan', NULL),
(16, 'Pancur Gading Hotel dan Resort', '3.4729842316021324', '98.67988586425781', 'Desa Kwala Simeme Kec. Namo Rambe\r\nKec. Deli Tua\r\nKabupaten Deli Serdang, Sumatera Utara 20355\r\nIndonesia', 'img/inapan.png', 'img/pancur.jpg', 'inapan', NULL),
(17, '\r\nTiara Bunga Hotel', '2.362935392902554', '99.03084754943848', 'Jl. Raya TaraBunga\r\nTara Bunga\r\nTampahan\r\nToba', 'img/inapan.png', 'img/tiara.jpg', 'inapan', NULL),
(18, 'Rumah Makan Srikandi', '2.6675302a', '98.9385833', '34 Jl. Lintas Sumatera Parapat Sumatera Utara', 'img/rm.png', 'img/srikandi.jpg', 'rumahmakan', NULL),
(19, 'Rumah Makan Muslim Bundo Minang', '2.6690659195136295', '98.9375764131546', 'Jl. Sisingamangaraja No.11\r\nParapat\r\nKec. Girsang Sipangan Bolon\r\nKabupaten Simalungun', 'img/rm.png', 'img/bundominang.jpg', 'rumahmakan', NULL),
(20, 'Restaurant Asia', '2.6679084616912996', '98.93832206726074', 'Jl. Sisingamangaraja No.65\r\nParapat\r\nGirsang Sipangan Bolon\r\nSimalungun', 'img/rm.png', 'img/asia.jpg', 'rumahmakan', NULL),
(21, 'Parapat Pansit', '2.666858174946632', '98.94076824188232', 'Jl. Sisingamangaraja\r\nParapat\r\nKec. Girsang Sipangan Bolon\r\nKabupaten Simalungun', 'img/rm.png', 'img/pansit.jpg', 'rumahmakan', NULL),
(22, 'Damar Toba ~ Lakeside Eatery & Stay', '2.340466692313098', '99.05050277709961', 'Jl. Pemandian No.94\r\nLumban Silintong\r\nKec. Balige', 'img/rm.png', 'img/damar toba.jpg', 'rumahmakan', NULL),
(23, '\r\nRm \"Asido Rohana\"', '2.495015979215072', '99.13772361751981', 'Kec. Porsea\r\nToba, Sumatera Utara\r\nIndonesia\r\n', 'img/rm.png', 'img/asido rohana.jpg', 'rumahmakan', NULL),
(24, 'Rumah makan jahir tombur bpk gultom', '2.5260367521718403', '99.10873889923096', 'Jl. Siborong Borong - Parapat\r\nLumban Lobu\r\nKec. Bonatua Lunasi, Toba', 'img/rm.png', 'img/jahir tombur.jpg', 'rumahmakan', NULL),
(25, 'Rest Area Modern Bamboo\r\n', '2.758947727268868', '98.97793292999268', 'Pd. Buluh\r\nKec. Dolok Panribuan\r\nKabupaten Simalungun, Sumatera Utara 21173, Indonesia.', 'img/rm.png', 'img/bamboo.jpg', 'rumahmakan', NULL),
(26, 'RM MUSLIM MAS ARI', '2.8700501022323337', '99.01900291442871', 'Bah Sampuran\r\nKec. Jorlang Hataran\r\nKabupaten Simalungun, Sumatera Utara\r\nIndonesia', 'img/rm.png', 'img/tdk ada.png', 'rumahmakan', NULL),
(27, 'RM. Khas Batak Horas Silindung', '2.9522126430399025', '99.07299041748047', 'KBS\r\nJl. Narumonda Bawah No.115\r\nKebun Sayur\r\nSiantar Timur, Pematang Siantar City, North Sumatra 21134, Indonesia', 'img/rm.png', 'img/silindung.jpg', 'rumahmakan', NULL),
(29, 'Restaurant Panorama ori.', '2.967470124442919', '99.07565116882324', '99.07565116882324', 'img/rm.png', 'img/panorama ori.jpg', 'rumahmakan', NULL),
(31, 'Mie Gacoan Medan Karya', '3.6105650048661846', '98.66546630859375', 'Jl. Karya\r\nSei Agul\r\nMedan Barat\r\nMedan City, North Sumatra 20235, Indonesia', 'img/rm.png', 'img/gacoan.jpeg', 'rumahmakan', NULL),
(32, 'Ayam Penyet Ar - Rahman Pasar 10 Tembung', '3.607309906645533', '98.75215530395508', 'Jl. Bustamam No.152\r\nBandar Khalipah\r\nKec. Percut Sei Tuan\r\nKabupaten Deli Serdang, Sumatera Utara 20371, Indonesia', 'img/rm.png', 'img/ayam penyet.jpg', 'rumahmakan', NULL),
(33, 'RUMAH MAKAN AJO TANJUNG', '3.3592893126092975', '98.94021034240723', 'Jalan Raya Dolok Masihul Karang Tengah Serba Jadi\r\nTj. Harap\r\nKec. Serbajadi, Kabupaten Serdang Bedagai, Sumatera Utara 20991, Indonesiaa', 'img/rm.png', 'img/ajo.jpg', 'rumahmakan', NULL),
(34, 'Warung Pak Dikun', '3.5231444681137702', '98.97304058074951a', 'Jl. Dusun Belimbing\r\nMelati Dua\r\nKec. Perbaungan, Kabupaten Serdang Bedagai, Sumatera Utara 20986, Indonesia\r\n', 'img/rm.png', 'img/dikum.jpg', 'rumahmakan', NULL),
(35, 'Rumah Makan Restu', '3.1427014972435816', '99.10603523254395', 'Limbong\r\nKec. Dolok Merawan\r\nKabupaten Serdang Bedagai, Sumatera Utara 20993, Indonesia', 'img/rm.png', 'img/restu.jpg', 'rumahmakan', NULL),
(36, 'WISNU TATAH INDAH (SOUVENIR UKIRAN BATAK)', '2.3328448326104327', '99.04822289943695', 'Silalahi Pagar Batu\r\nBalige\r\nToba, North Sumatra 22312, Indonesia', 'img/sou.png', 'img/wisnu.jpg', 'souvenir', NULL),
(37, 'Pasar Balige', '2.3342277047415982', '99.06567335128784', 'Jl. Sm Raja\r\nNapitupulu Bagasan\r\nBalige\r\nToba, North Sumatra, Indonesia', 'img/sou.png', 'img/pasar balige.jpeg', 'souvenir', NULL),
(38, 'SEKKA Craft Supplies', '2.333455869301221', '99.06482577323914', '+/- 30 mtr dari RM Batak Panca,50 mtr dari\r\nJl. Raja Paindoan No.2\r\nPardede Onan\r\nBalige, Toba, North Sumatra 22314, Indonesia', 'img/sou.png', 'img/craft.jpg', 'souvenir', NULL),
(40, 'Toko Grosir Adriell Gultom shop balige', '2.3482841474177834', '99.0726088732481', 'Jl. Sibola Hotang\r\nKec. Balige\r\nToba, Sumatera Utara 22312\r\nIndonesia', 'img/sou.png', 'img/adriell.jpg', 'souvenir', NULL),
(41, 'Remon Ponsel Situmorang', '2.65981694373132', '98.95105451345444', 'Jl. Sisingamangaraja\r\nTiga Raja\r\nKec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174, Indonesia', 'img/sou.png', 'img/ponsel.jpg\r\n', 'souvenir', NULL),
(42, 'Lapak Rosa Girsang (Fresh Farmers Market)', '2.666930516154227', '98.94143342971802', 'Jl. Lintas Sumatera\r\nTiga Raja\r\nGirsang Sipangan Bolon, Simalungun Regency, North Sumatra, Indonesia', 'img/sou.png', 'img/lapak.jpg', 'souvenir', NULL),
(43, 'Toko Raja Oloan 2', '2.667037688305824', '98.93907845020294', 'Jalan Sisingamangaraja No.46 Kelurahan Parapat\r\nBolon\r\nKecamatan Girsang Sipangan\r\nKabupaten Simalungun, Sumatera Utara 21174, Indonesia', 'img/sou.png', 'img/toko raja.jpg', 'souvenir', NULL),
(44, 'Jaya Ponsel Mandiri', '2.6687926309594108', '98.93778562545776', 'Jl. Sisingamangaraja\r\nParapat\r\nKec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174, Indonesia', 'img/sou.png', 'img/jaya ponsel.jpg', 'souvenir', NULL),
(45, 'Pekan Tiga Dolok', '2.81615048522898', '99.03144836425781', 'Jl. Parapat No.46\r\nTiga Dolok\r\nKec. Dolok Panribuan\r\nKabupaten Simalungun, Sumatera Utara 21173, Indonesia', 'img/sou.png', 'img/pekan tiga.jpg', 'souvenir', NULL),
(46, 'Pekan Tiga Balata', '2.8592489497022324', '99.02653455734253', 'Tiga Balata\r\nKec. Jorlang Hataran\r\nKabupaten Simalungun, Sumatera Utara 21172\r\nIndonesia', 'img/sou.png', 'img/balata.jpg', 'souvenir', NULL),
(47, 'Roti Kacang R2.961105723051156ajawali', '2.961105723051156', '99.06369924545288', 'Jl. Prambanan\r\nMelayu\r\nSiantar Utara, Pematang Siantar City, North Sumatra 21146, Indonesia', 'img/sou.png', 'img/rajawali.jpg', 'souvenir', NULL),
(48, 'TOKO 35 Siantar | RAMBUNGMERAH |', '2.9769416572912126', '99.08365488052368', 'Jl. H. Ulakma Sinaga No.194\r\nPematang Simalungun\r\nKec. Siantar\r\nKabupaten Simalungun, Sumatera Utara 21151, Indonesia', 'img/sou.png', 'img/toko 35.jpg', 'souvenir', NULL),
(49, 'Poshop.Id', '3.03820463943875', '99.08296823501587', 'Jl. Mesjid\r\nDolok Ulu\r\nKec. Tapian Dolok, Kabupaten Simalungun, Sumatera Utara 21154, Indonesia', 'img/sou.png', 'img/poshop.jpg', 'souvenir', NULL),
(50, 'Irian Supermarket & Dept. Store', '3.329192623586467', '99.15656805038452', 'Jl. DR. Kumpulan Pane No.226\r\nDurian\r\nKec. Tebing Tinggi Kota\r\nKota Tebing Tinggi, Suma', 'img/sou.png', 'img/rsud.jpg', 'souvenir', NULL),
(51, 'Alfamart setia budi t.tinggi', '3.3413813583870247', '99.14332866668701', 'Jl. Koperasi No.6f\r\nBerohol\r\nKec. Bajenis\r\nKota Tebing Tinggi, Sumatera Utara 20998, Indonesia', 'img/sou.png', 'img/setia budi.jpg', 'souvenir', NULL),
(52, 'Alfamart Simpang Matapao', '3.5319254451683335', '99.08783912658691', 'Liberia\r\nKec. Tlk. Mengkudu\r\nKabupaten Serdang Bedagai, Sumatera Utara 20997, Indonesia', 'img/sou.png', 'img/simpang.jpg', 'souvenir', NULL),
(54, 'Carrefour - Medan Citra Garden', '3.547602495102054', '98.65911483764648', 'Jl. Jamin Ginting No.583\r\nTiti Rantai\r\nMedan Baru\r\nMedan City, North Sumatra 20157, Indonesia', 'img/sou.png', 'img/carrefour.jpg', 'souvenir', NULL),
(55, 'Pekan Minggu Percut Sei Tuan Deli Serdang', '3.6802898158700965', '98.75301361083984', 'Desa\r\nCinta Rakyat\r\nPercut Sei Tuan, Deli Serdang Regency, North Sumatra 20371, Indonesia', 'img/sou.png\r\n', 'img/percut.jpg', 'souvenir', NULL),
(56, 'Stasiun Kereta Api Baja Linggei', '3.1672707866418954', '99.11092221736908', 'Dolok Merangir I, Kec. Dolok Batu Nanggar, Kabupaten Simalungun, Sumatera Utara 21155', 'img/trans.png', 'img/baja linggei.jpg', 'transportasi', NULL),
(58, 'Stasiun Siantar', '2.9591985384050634', '99.06295895576477a', 'Jl. W. R. Supratman, Proklamasi, Kec. Siantar Bar., Kota Pematang Siantar, Sumatera Utara 21146', 'img/trans.png', 'img/stasiun siantar.jpg', 'transportasi', NULL),
(59, 'Stasiun KA Galang', '3.436375679042274', '98.89618558660376', 'CVPW+JGC, Jl. Sersan M. Arifin, Sungei Putih, Kec. Galang, Kabupaten Deli Serdang, Sumatera Utara 20585', 'img/trans.png', 'img/galang.jpeg\r\n', 'transportasi', NULL),
(60, 'Stasiun Lubuk Pakam', '3.5644785849316936', '98.8785195350647', 'Tanjung Garbus Satu, Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20518', 'img/trans.png', 'img/lubuk pakam.jpg', 'transportasi', NULL),
(61, 'Terminal Amplas', '3.5362088184811062', '98.71782302856445', 'GPQ9+F7H, Timbang Deli, Kec. Medan Amplas, Kota Medan, Sumatera Utara 20149', 'img/trans.png', 'img/amplas.jpg', 'transportasi', NULL),
(62, 'Terminal Bus Sumatera Transport', '3.5399781706280424', '98.653804063797', 'Jl. Jamin Ginting No.107, Kwala Bekala, Kec. Medan Johor, Kota Medan, Sumatera Utara 20131v', 'img/trans.png', 'img/sampri.jpg', 'transportasi', NULL),
(64, 'Terminal Pinang Baris Medan', '3.588833791397953', '98.60998213291168', 'Jl. Tahi Bonar Simatupang, Lalang, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20127', 'img/trans.png', 'img/pinang.jpg', 'transportasi', NULL),
(65, 'Terminal Helvetia', '3.6105757124068587', '98.62998604774475', 'Helvetia, Kec. Medan Helvetia, Kota Medan, Sumatera Utara', 'img/trans.png', 'img/helvetia.jpg', 'transportasi', NULL),
(66, 'Terminal Tanjung Gusta', '3.6186170397817223', '98.60912919044495', '98.60912919044495', 'img/trans.png', 'img/gusta.jpg', 'transportasi', NULL),
(67, 'Pelabuhan Tigaraja / Tiga Raja Pier', '2.660824367406991', '98.93051147460938', 'MW6J+86F, Tiga Raja, Kec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', 'img/kapal.png', 'img/tigaraja.jpg', 'transportasi', NULL),
(68, 'Pelabuhan Penyeberangan Balige', '2.3374651209977486', '99.06277656555176', 'MW6J+86F, Tiga Raja, Kec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', 'img/kapal.png', 'img/pelabuhan balige.jpg', 'transportasi', NULL),
(69, 'Bandara Silangit International Airport', '2.2624237734585084', '98.98784637451172', 'Jalan Silangit, Silando Muara, Silando, Kec. Siborongborong, Kabupaten Tapanuli Utara, Sumatera Utara 22476', 'img/pesawat.png', 'img/airport silangit.jpg', 'transportasi', NULL),
(70, 'Bandara Kualanamu International Airport', '3.6312945666794962', '98.87489318847656', 'Jl. Bandara Kuala Namu, Ps. Enam Kuala Namu, Kec. Beringin, Kabupaten Deli Serdang, Sumatera Utara 20553', 'img/pesawat.png', 'img/airport kualanamu.jpg', 'transportasi', NULL),
(71, 'Pantai Inna Parapat', '2.6653577637558565', '98.93090844154358', ' Jl. Marihat No.1, Danau Toba, Kec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', 'img/wisata.png', 'img/parapat.jpg', 'wisata', NULL),
(72, 'Bukit Gibeon', '2.591846112708185', '98.97419929504395', 'Parsaoran Sibisa Ajibata,Sionggang Utara,Kec.Lumban Julu,Toba,Sumatera Utara 21174', 'img/wisata.png', 'img/gib1.jpg', 'wisata', NULL),
(73, 'Bukit Sipolha dan Pulau Hole', '2.7348784497948793', '98.85929882526398', 'Bukit Sipolha, Sipolha Horison, Pematang Sidamanik,Simalungun Regency,North Sumatra 21186', 'img/wisata.png', 'img/sipolha1.jpg', 'wisata', NULL),
(75, 'Air Terjun efrata Harian Boho', '2.5370123584000273', '98.64486694335938', 'GJPV+QX4, Sosor Dolok, Kec. Harian, Kabupaten Samosir, Sumatera Utara 22396', 'img/wisata.png', 'img/boho1.jpg', 'wisata', NULL),
(76, 'Tankahan Bah Alip', '3.1261181047992537', '99.2080020904541', '46G5+C6P,Bandar Tongah, Kec. Bandar Huluan, Kabupaten Simalungun, Sumatera Utara 21184', 'img/wisata.png', 'img/tankahan1.jpg', 'wisata', NULL),
(77, 'Air Terjun Biak- Biak', '2.8346030826285302', '98.89720916748047', 'Sidamanik, Kec. Sidamanik, Sumatera Utara', 'img/wisata.png', 'img/biak1.jpg', 'wisata', NULL),
(78, 'Waterpark Gundaling Paya Pasir', '3.3422382057597924', '99.1904067993164', 'Jl Soekarno Hatta LK III, Tambangan, Kec. Padang Hilir, Kota Tebing Tinggi, Sumatera Utara', 'img/wisata.png', 'img/waterpark1.jpg', 'wisata', NULL),
(79, 'Bah Bolon Arum Jeram', '3.200505620178142', '99.05754089355469', 'Bumdes Buduma Arung Jeram Bahbolon', 'img/wisata.png', 'img/arum1.jpg', 'wisata', NULL),
(80, 'Pantai Mutiara 88', '3.6585335147436564', '98.9703369140625', 'Kota Pari, Kec. Pantai Cermin, Kabupaten Serdang Bedagai, Sumatera Utara', 'img/wisata.png', 'img/mutiara1.jpg', 'wisata', NULL),
(81, 'Pantai Pasir Putih Parparean', '2.4320543679985795', '2.4320543679985795', 'Parparean II\r\nPorsea\r\nToba', 'img/wisata.png', 'img/parparean.jpg', 'wisata', NULL),
(82, '\r\nMuseum Batak TB Silalahi Center', '2.362935392902554', '99.03076171875', 'Jl. Dr. TB. Silalahi No.88\r\nSilalahi Pagar Batu\r\nBalige\r\nToba', 'img/wisata.png', 'img/tb silalahi.jpg', 'wisata', NULL),
(83, 'Bukit Doa', '.3149102517872717', '98.98029327392578', 'Huta Ginjang\r\nMuara', 'img/wisata.png', 'img/doa.jpg', 'wisata', NULL),
(84, 'Tanjung unta,Simalungun', '2.772193123856728', '98.80828857421875', 'Jalan St H.H. Damanik Pardamean, Kabupaten Simalungun, Sumatera Utara', 'img/wisata.png', 'img/unta1.jpg', 'wisata', NULL),
(85, 'Kebun Teh Sidamanik', '2.856377197574594', '98.90785217285156', 'Jl.Pematang Purba - Parapat', 'img/wisata.png', 'img/sidamanik1.jpg', 'wisata', NULL),
(86, 'Bah Bolon Arum Jeram', '3.200505620178142', '99.05754089355469', 'Bumdes Buduma Arung Jeram Bahbolon', 'img/wisata.png', 'img/arum1.jpg', 'wisata', NULL),
(87, 'Museum Kota', '3.328595500229028', '99.1629409790039', 'Jl. Kotamadya', 'img/wisata.png', 'img/museum1.jpg', 'wisata', NULL),
(88, 'Desa Meat', '2.321428045697961', '99.00106430053711', 'Jl. Raya Meat\r\nMeat\r\nKec. Tampahan\r\nToba', 'img/wisata.png', 'img/meat.jpg', 'wisata', NULL),
(90, 'Pakkodian', '2.339780619435901', '99.01342391967773', 'Danau Toba\r\nLintong Nihuta\r\nTampahan\r\nToba', 'img/wisata.png', 'img/pakkodian.jpg', 'wisata', NULL),
(91, 'Hotel Nabasa', '2.335921453250044', '99.06243324279785', 'Jl. Siliwangi No.8\r\nBalige\r\nToba', 'img/inapan.png', 'img/nabasa.jpg', 'inapan', NULL),
(92, 'HOTRONA HOTEL', '2.354016562710956', '99.12500381469727', 'Jl. Sm Raja No.17\r\nPs. Laguboti\r\nKec. Laguboti\r\nToba', 'img/inapan.png', 'img/hotrona.jpg', 'inapan', NULL),
(93, 'Mabar Homestay & Taxi', '2.425108326663928', '99.16543006896973', 'Sipitu Pitu\r\nNarumonda V\r\nKec. Siantar Narumonda\r\nTob...', 'img/inapan.png', 'img/mabar.jpg', 'inapan', NULL),
(94, 'Patane l', '2.4756592508109816', '99.13727760314941', 'Patane I\r\nKec. Porsea\r\nToba', 'img/inapan.png', 'img/patane.jpg\r\n ', 'inapan', NULL),
(95, 'Desa Bonandolok Sosortaguru Sinurat', '2.524321805309736', '99.11521911621094', 'Lumban Lobu\r\nBonatua Lunasi\r\nToba', 'img/inapan.png', 'img/bonandolok.jpg\r\n', 'inapan', NULL),
(96, 'BAGAS HOMESTAY', '2.5521465375517107', '99.08410549163818', 'Jangga Dolok\r\nKec. Lumban Julu\r\nToba', 'img/inpan.png', 'img/bagas.jpg', 'inapan', NULL),
(97, 'Ps. Lumbun Julu', '\r\n2.601063439244597\r\n', '99.05157566070557', 'Ps. Lumban Julu\r\nKec. Lumban Julu\r\nToba', 'img/inapan.png', 'img/lumban julu.jpg', 'inapan', NULL),
(98, 'Star Beach Hotel', '2.6518218288109865', '98.93068313598633', 'Pardamean Ajibata\r\nAjibata\r\nToba', 'img/inapan.png', 'img/star.jpg', 'inapan', NULL),
(99, 'Hotel Niagara Parapat', '2.661596010516721', '98.94372940063477', 'Jl. Pembangunan No.1\r\nParapat\r\nKec. Girsang Sipangan Bolon\r\nKabupaten Simalungun', 'img/inapan.png', 'img/niagara.jpg', 'inapan', NULL),
(101, 'Rumah Nek Ribut', '2.8404324135359404', '99.02127742767334', 'Sibunga Bunga\r\nKec. Jorlang Hataran\r\nKabupaten Simalungun', 'img/inapan.png', 'img/nek ribut.jpg', 'inapan', NULL),
(102, 'OYO 2045 Hotel 211', '2.667254711884197', '98.93943786621094', 'Jl. Sisingamangaraja No.95\r\nTiga Raja\r\nGirsang Sipangan Bolon, Simalungun Regency', 'img/inapan.png', 'img/oyo 20045.jpg', 'inapan', NULL),
(103, 'Patra Parapat Hotel', '2.695719298515823', '98.91772270202637', 'JI. Pertamina Siuhan Rantauprapat Rantauprapat Pematangsiantar Sumatera Utara\r\nSibaganding\r\nKec. Girsang Sipangan Bolon\r\nKabupaten Simalungun', 'img/inapan.png', 'img/patra.jpg', 'inapan', NULL),
(104, 'Desa Lumban Holbung Nabalau', '2.862463589078287', '98.99994850158691', 'Unnamed Road\r\nManik Hataran\r\nKec. Sidamanik\r\nKabupaten Simalungun', 'img/inapan.png', 'img/holbung.jpg', 'inapan', NULL),
(105, 'Rumah Makan Padang SABANA MINANG', '2.6685201', '98.9378726', 'Pantai Bebas, Jl. Sisingamangaraja, Tiga Raja, Kec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', 'img/rm.png', 'img/sabana.jpg', 'rumahmakan', NULL),
(106, 'Restaurant Sehat', '2.6683371499007014', '98.93800020217896', 'Jl. Sisingamangaraja Jl. Parapat No.43\r\nTiga Raja\r\nKec. Girsang Sipangan Bolon\r\nKabupaten Simalungun', 'img/rm.png', 'img/restaurant sehaat.jpg', 'rumahmakan', NULL),
(107, 'Restaurant Istana Minang 2', '2.666858174946632', '98.9399528503418ac', '\r\nJl. Sisingamangaraja No.65\r\nParapat\r\nGirsang Sipangan Bolon\r\n', 'img/rm.png', 'img/istana minang.jpg', 'rumahmakan', NULL),
(108, 'Restaurant Asia', '2.6679084616912996', '98.93832206726074', 'Jl. Sisingamangaraja No.65\r\nParapat\r\nGirsang Sipangan Bolon\r\nSimalungun', 'img/rm.png', 'img/asia.jpg', 'rumahmakan', NULL),
(109, 'Restaurant Istana Minang 2', 'Restaurant Istana Minang 2', '98.9399528503418ac', '\r\nJl. Sisingamangaraja No.65\r\nParapat\r\nGirsang Sipangan Bolon\r\n', 'img/rm.png', 'img/istana minang.jpg', 'rumahmakan', NULL),
(110, 'Rumah Makan Lembah Anai Salero Minang', '2.6664402034416423', '98.94265651702881', 'MW8V+H3V\r\nJl. Sisingamangaraja\r\nTiga Raja\r\nKec. Girsang Sipangan Bolon, Kabupaten Simalungun,', 'img/rm.png', 'img/lembah anal.jpg', 'rumahmakan', NULL),
(113, '\r\nRM. Fly Over Laguboti', '2.386248656071095', '99.10980053184805', 'Jl. Siborong Borong - Parapat No.22\r\nPardomuan Nauli\r\nKec. Laguboti\r\nToba', 'img/rm.png', 'img/fly over.jpg', 'rumahmakan', NULL),
(114, '\r\nBpk \"Jaya\"', '2.5217896335044805', '99.1201629715251', 'Sampuara\r\nKec. Bonatua Lunasi\r\nToba', 'img/rm.png', 'img/jaya.jpg\r\n', 'rumahmakan', NULL),
(115, '\r\nWr. Muslim', '\r\n2.5863541001381125', '99.0448330622402', 'Ps. Lumban Julu\r\nKec. Lumban Julu\r\nToba', 'img/rm.png', 'img/wr muslim.jpg', 'rumahmakan', NULL),
(116, 'Rest Area Modern Bamboo\r\n', '2.758947727268868', '98.97793292999268', 'Pd. Buluh\r\nKec. Dolok Panribuan\r\nKabupaten Simalungun, Sumatera Utara 21173, Indonesia.', 'img/rm.png', 'img/bamboo.jpg', 'rumahmakan', NULL),
(117, 'Rumah Makan Sri Kemuning', '2.7753222735939787', '98.9966869354248', 'Tiga Dolok\r\nKec. Dolok Panribuan\r\nKabupaten Simalungun, Sumatera Utara 21173, Indonesia', 'img/rm.png', 'img/kemuning.jpg', 'rumahmakan', NULL),
(118, 'Pintu Batu Tepi Sawah', '2.918868318200042', '99.04367923736572', 'Jl. Parapat No.25\r\nSimarimbun\r\nKec. Siantar Marihat\r\nKota Pematang Siantar, Sumatera Utara 21129, Indonesia', 'img/rm.png', 'img/pintu batu.jpg', 'rumahmakan', NULL),
(120, 'Kepiting Gokil\'s', '2.9483125228323384', '99.05346393585205', 'Jl. Enggang No.19\r\nSipinggol-Pinggol\r\nKec. Siantar Bar.\r\nKota Pematang Siantar, Sumatera Utara 21117, Indonesia', 'img/rm.png', 'img/kepiting.jpg', 'rumahmakan', NULL),
(121, 'Lemang Barokah', '3.0971929565497742', '99.09573554992676', 'Jl. Pematang Siantar - Tebing Tinggi\r\nDolok Ulu\r\nKec. Tapian Dolok, Kabupaten Simalungun, Sumatera Utara 21154, Indonesia', 'img/rm.png', 'img/lemang.jpg', 'rumahmakan', NULL),
(122, 'Rumah Makan Barokah', '3.2491374032503773', '99.11028385162354', 'Penonggol\r\nKec. Tebing Tinggi\r\nKabupaten Serdang Bedagai, Sumatera Utara 20998, Indonesia', 'img/rm.png', 'img/barokah.jpg', 'rumahmakan', NULL),
(123, 'KFC', '3.6280395429505528', '98.66220474243164', 'Jl. Veteran\r\nSIMPANG JIPUR\r\nMedan Marelan\r\nDeli Serdang Regency, North Sumatra 20116, Indonesia', 'img/rm.png', 'img/kfc.jpg', 'rumahmakan', NULL),
(124, 'RM Pondok Senangkong', '3.5080238599067277', '99.1102409362793', 'l. Negara\r\nDesa No.Km 57\r\nFirdaus\r\nKec. Sei Rampah, Kabupaten Serdang Bedagai, Sumatera Utara 20695, Indonesia', 'img/rm.png', 'img/pondok.jpg', 'rumahmakan', NULL),
(125, 'Pelangi FC & Rainbow Cafe\r\nFWR4+P3P\r\n', '3.4918749515650336', '98.90519142150879', 'Jl. Pasar Miring, Pagar Merbau, Galang\r\nKotasan\r\nKec. Galang, Kabupaten Deli Serdang, Sumatera Utara 20585, Indonesia', 'img/rm..png', 'img/pelangi.jpg', 'rumahmakan', NULL),
(126, 'Batikta - Batik Batak Balige', '2.3383119935549486', '99.08136427402496', 'Jl. P. Siantar No.KM\r\nTampubolon\r\nKec. Balige\r\nToba, Sumatera Utara 22315, Indonesia', 'img/sou.png', 'img/wisnu.jpg', 'souvenir', NULL),
(127, 'Toko Enjelita Balige', '2.333150350989013', '99.05865401029587', 'Jl. Siborong Borong - Parapat\r\nPardede Onan\r\nKec. Balige\r\nToba, Sumatera Utara 22312, Indonesia', 'mg/sou.png', 'img/enjelita.jpg', 'souvenir', NULL),
(128, 'Souvenir pusat oleh-oleh PAPA ROZTI', '2.3341633851377486', '99.13229942321777', 'Perum Korpri Lor 4 No.100\r\nSibarani Nasampulu\r\nKec. Laguboti\r\nToba, Sumatera Utara 22381, Indonesia\r\n', 'img/sou.png', 'img/rozti.jpg', 'souvenir', NULL),
(129, 'Toko P Sihombing ', '2.6458093826036997', '98.97204279899597', 'Girsang II Bonan Dolok\r\nGirsang\r\nGirsang Sipangan Bolon\r\nSimalungun Regency, North Sumatra 21174, Indonesia', 'img/sou.png', 'img/toko sihombing.jpg', 'souvenir', NULL),
(130, 'Toko N. Sinaga / UD.Florencia (NEGER SINAGA)', '2.6667590406922796', '98.94062608480453', 'Jl. Sisingamangaraja No.80\r\nTiga Raja\r\nKec. Girsang Sipangan Bolon\r\nKabupaten Simalungun, Sumatera Utara 21174, Indonesia', 'img/sou.png', 'img/n sinaga.jpg\r\n', 'souvenir', NULL),
(131, 'Alfamidi sm raja parapat', '2.668004916551442', '98.93814504146576', 'Jl. Sisingamangaraja\r\nTiga Raja\r\nKec. Girsang Sipangan Bolon\r\nKabupaten Simalungun, Sumatera Utara 21174, Indonesia', 'img/sou.png', 'img/alfa.jpg\r\n\r\n\r\n', 'souvenir', NULL),
(132, 'Distro kaos Batak CKT', '2.6795955204145323', '98.9321905374527', 'Jl. Parapat\r\nTiga Raja\r\nKec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174, Indonesia', 'img/sou.png', 'img/distro.jpg', 'souvenir', NULL),
(133, 'Panglong Pertukangan Kayu UD. SITOLU SADA CIPTA GESIMAN', '2.8443543365252837', '99.04031038284302', 'Dolok Marlawan\r\nKec. Jorlang Hataran\r\nKabupaten Simalungun, Sumatera Utara 21151, Indonesia', 'img/sou.png', 'img/pangloang.jpg', 'souvenir', NULL),
(134, 'Toko Citra', '2.90725328831171', '99.03337955474854', 'Jl. Pematang Purba - Parapat\r\nSimarimbun\r\nKec. Siantar Marihat, Kota Pematang Siantar, Sumatera Utara 21165, Indonesia', 'img/sou.png', 'img/citra.jpg', 'souvenir', NULL),
(135, 'Parluasan Traditional Market', '2.9681772778923636', '99.06949281692505', 'Jl. Gotong Royong No.37\r\nSuka Dame\r\nSiantar Utara\r\nPematang Siantar City, North Sumatra 21143, Indonesia', 'img/sou.png', 'img/perluasan.jpg', 'souvenir', NULL),
(136, 'Stasiun Siantar', '3.11761205105955', '99.11704301834106', 'Dolok Merangir I, Kec. Dolok Batu Nanggar, Kabupaten Simalungun, Sumatera Utara 21155', 'img/trans.png', 'img/merangir.jpg', 'transportasi', NULL),
(137, 'Stasiun K.A. Sei Rampah', '3.485578087037388', '99.13839340209961', 'Jl. Lintas Sumatra No.155, Sei Rampah, Kec. Sei Rampah, Kabupaten Serdang Bedagai, Sumatera Utara 20995', 'img/trans.png', 'img/rampah.jpg', 'transportasi', NULL),
(138, 'Stasiun Kereta Api Perbaungan', '3.566898607996022', '98.95126104354858', 'Jalan Stasiun No.6, Simpang Tiga Pekan, Perbaungan, Kabupaten Serdang Bedagai, Sumatera Utara 20986', 'img/trans.png', 'img/perbaungan.jpg', 'transportasi', NULL),
(139, 'Terminal Amplas', '3.5362088184811062', '98.71782302856445', 'GPQ9+F7H, Timbang Deli, Kec. Medan Amplas, Kota Medan, Sumatera Utara 20149', 'img/trans.png', 'img/amplas.jpg', 'transportasi', NULL),
(140, 'Tanjung unta,Simalungun', '2.772193123856728', '98.80828857421875', 'Jalan St H.H. Damanik Pardamean, Kabupaten Simalungun, Sumatera Utara', 'img/wisata.png', 'img/unta1.jpg', 'wisata', NULL),
(142, 'Bukit Sipolha dan Pulau Hole', '2.7348784497948793', '98.85929882526398', 'Bukit Sipolha, Sipolha Horison, Pematang Sidamanik,Simalungun Regency,North Sumatra 21186', 'img/wisata.png', 'img/sipolha1.jpg', 'wisata', NULL),
(143, 'Taman Hewan', '2.9526197976572437', '99.05936479568481', 'Jl. Gunung Simanuk Manuk NO.2, Teladan, Kec.Siantar Bar., Kota Pematang Siantar,Sumatera Utara 21144', 'img/wisata.png', 'img/hewan1.jpg', 'wisata', NULL),
(144, 'Kebun Teh Sidamanik', '2.856377197574594', '98.90785217285156', 'Jl.Pematang Purba - Parapat', 'img/wisata.png', 'img/sidamanik1.jpg', 'wisata', NULL),
(145, 'Waterpark Gundaling Paya Pasir', '3.3422382057597924', '99.1904067993164', 'Jl Soekarno Hatta LK III, Tambangan, Kec. Padang Hilir, Kota Tebing Tinggi, Sumatera Utara', 'img/wisata.png', 'img/waterpark1.jpg', 'wisata', NULL),
(147, 'Bah Bolon Arum Jeram', '3.200505620178142', '99.05754089355469', 'Bumdes Buduma Arung Jeram Bahbolon', 'img/wisata.png', 'img/arum1.jpg', 'wisata', NULL),
(148, 'Museum Kota', '3.328595500229028', '99.1629409790039', 'Jl. Kotamadya', 'img/wisata.png', 'img/museum1.jpg', 'wisata', NULL),
(150, 'Danau Laut Tador', '3.268032470288308', '99.2424201965332', 'Kec. Sei Suka Kabupaten Batu Bara Sumatera Utara', 'img/wisata.png', 'img/tador1.jpg', 'wisata', NULL),
(171, 'Air Terjun Widuri', '3.1726537775790833', '99.14680480957031', 'Jl. Bangun Rejo, Dolok Merawan, Kec. Dolok Merawan, Kabupaten Serdang Bedagai, Sumatera Utara', 'img/wisata.png', 'img/widuri1.jpg', 'wisata', NULL),
(172, 'Situmurun Waterfall', '2.53769833070035', '99.00775909423828', 'Jonggi Nihuta, Lumban Julu\r\nHatinggian\r\nKec. Lumban Julu\r\nToba', 'img/wisata.png', 'img/situmurun.jpg', 'wisata', NULL),
(173, 'Taman Eden 100 Tobasa', '2.5912030409073177', '99.0388298034668', 'Taman eden 100 Lumbanrang\r\nPs. Lumban Julu\r\nKec. Lumban Julu\r\nToba', 'img/wisata.png', 'img/eden.jpg', 'wisata', NULL),
(174, 'Pantai Pasir Putih Parparean', '2.4320543679985795', '99.14886474609375', 'Parparean II\r\nPorsea\r\nToba', 'img/wisata.png', 'img/parparean.jpg', 'wisata', NULL),
(175, 'Pantai BUL BUL', '2.348528023442635', '99.07316207885742', 'Lumban Bulbul\r\nBalige\r\nToba', 'img/wisata.png', 'img/bul bul.jpg', 'wisata', NULL),
(176, '\r\nMuseum Batak TB Silalahi Center', '2.362935392902554', '99.03076171875', 'Jl. Dr. TB. Silalahi No.88\r\nSilalahi Pagar Batu\r\nBalige\r\nToba', 'img/wisata.png', 'img/tb silalahi.jpg', 'wisata', NULL),
(177, 'Tiara Bunga Hotel', '2.362935392902554', '99.03076171875', 'Jl. Raya TaraBunga\r\nTara Bunga\r\nTampahan\r\nToba', 'img/inapan.png', 'img/tiara bunga.jpg', 'inapan', NULL),
(178, 'Pakkodian', '2.339780619435901', '99.01342391967773', 'Danau Toba\r\nLintong Nihuta\r\nTampahan\r\nToba', 'img/wisata.png', 'img/pakkodian.jpg', 'wisata', NULL),
(180, 'Desa Meat', '2.321428045697961', '99.00106430053711', 'Jl. Raya Meat\r\nMeat\r\nKec. Tampahan\r\nToba', 'img/wisata.png', 'img/meat.jpg', 'wisata', NULL),
(181, 'Bukit Doa', '.3149102517872717', '98.98029327392578', 'Huta Ginjang\r\nMuara', 'img/wisata.png', 'img/doa.jpg', 'wisata', NULL),
(184, 'Monumen Prasasti Geopark', '.3248584514782293', '98.9535140991211', 'Sitanggor\r\nKec. Muara\r\nKabupaten Tapanuli Utara', 'img/wisata.png', 'img/geopark.jpg', 'wisata', NULL),
(185, 'Puncak Sipinsur', '2.3291448232', '98.8788193534', 'Parulohan, Kec. Paranginan, Kabupaten Humbang Hasundutan, Sumatera Utara 22476', 'img/wisata.png', 'img/Puncak Sipinsur.jpg\r\n', 'wisata', NULL),
(186, 'Lembah Bakkara', '2.27189033564', '98.76289292454', '7QC8+Q54, Jl. Bakara, Pasaribu, Kec. Dolok sanggul, Kabupaten Humbang Hasundutan, Sumatera Utara 22457', 'img/wisata.png', 'img/Lembah Bakkara.jpg', 'wisata', NULL),
(187, 'IT DEL', '2.3832437410753893', '99.14860188961029', 'Depan gerbang Institut Teknologi Del\nSitoluama\nBalige\nToba, North Sumatra 22381, Indonesia', 'img/del.png', 'img/del.png', 'wisata\r\n', NULL),
(189, 'IT DEL', '2.3832437410753893', '99.14860188961029', 'Depan gerbang Institut Teknologi Del\r\nSitoluama\r\nBalige\r\nToba, North Sumatra 22381, Indonesia', 'img/del.png', 'img/del.png', 'inapan', NULL),
(190, 'IT DEL', '2.3832437410753893', '99.14860188961029', 'Depan gerbang Institut Teknologi Del\r\nSitoluama\r\nBalige\r\nToba, North Sumatra 22381, Indonesia', 'img/del.png', 'img/del.png', 'transportasi', NULL),
(191, 'IT DEL', '2.3832437410753893', '99.14860188961029', 'Depan gerbang Institut Teknologi Del\r\nSitoluama\r\nBalige\r\nToba, North Sumatra 22381, Indonesia', 'img/del.png', 'img/del.png', 'souvenir', NULL),
(192, 'IT DEL', '2.3832437410753893', '99.14860188961029', 'Depan gerbang Institut Teknologi Del\r\nSitoluama\r\nBalige\r\nToba, North Sumatra 22381, Indonesia', 'img/del.png', 'img/del.png', 'rumahmakan', NULL),
(193, 'Kios Ferry', '3.367086453272347', '98.93239974975586', 'Tj. Harap\r\nKec. Serbajadi\r\nKabupaten Serdang Bedagai, Sumatera Utara 20991, Indonesia', 'img/souvenir.png', 'img/tdk ada.png', 'souvenir', NULL),
(194, 'Kedai Toko SRC Syahrul / SABAR.S', '3.3833231555574215', '98.91984701156616', 'Desa\r\nBaru Titi Besi\r\nKec. Galang\r\nKabupaten Deli Serdang, Sumatera Utara 20991, Indonesia', 'img/rm.png', 'img/SABAR.S.jpg', 'rumahmakan', NULL),
(200, 'Graha Sultan Hotel\r\n', '3.470756729464911', '99.14371490478516', 'Sei Rampah\r\nSerdang Bedagai Regency\r\nNorth Sumatra 20995\r\nIndonesia', 'img/inapan.png', 'img/tdk ada.png', 'inapan', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `tb_map`
--
ALTER TABLE `tb_map`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rating` (`id_rating`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_map`
--
ALTER TABLE `tb_map`
  ADD CONSTRAINT `fk_rating` FOREIGN KEY (`id_rating`) REFERENCES `ratings` (`id_rating`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
