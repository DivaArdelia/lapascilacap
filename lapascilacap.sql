-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2026 pada 14.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapascilacap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi_barang` text DEFAULT NULL,
  `harga_barang` varchar(255) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `foto_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `id_kategori`, `nama_barang`, `deskripsi_barang`, `harga_barang`, `stok_barang`, `foto_barang`) VALUES
(1, 1, 'ZA Mahkota (50 Kg)', 'Memperbaiki kualitas dan meningkatkan produksi serta nilai gizi hasil panen dan pakan ternak karena peningkatan kadar protein pati, padi, gula, lemak, vitamin, dan lainnya.', '265000', 100, 'SF3WQBSPQYBU7QHOZA Mahkota.jpg'),
(2, 1, 'ZA Plus Petro (50 Kg)', 'Petro ZA Plus memiliki kandungan Nitrogen 21%, Sulfur 24%, dan Zinc 1000 ppm. Keunggulan pupuk ini mampu memacu pertumbuhan jumlah anakan, tinggi tanaman, jumlah daun dan menjadikan warna daun nampak lebih hijau.', '420000', 100, 'SF3WU9CFLX82IF49ZA Petro.jpg'),
(3, 1, 'Urea Nitrea (50 Kg)', 'Berikut bbrp manfaat pupuk Urea pd tanaman:\r\n- Membuat Daun tampak lebih segar, hijau & rimbun\r\n- Meningkatkan jumlah anakan tanaman\r\n- Mempercepat pertumbuhan tunas & tinggi tanaman\r\n- Mempercepat proses fotosintesis\r\n- Memacu pertumbuhan tanaman\r\n- Memp', '425500', 100, 'SF3WWNWBKBK30GB9Nitrea.jpg'),
(4, 1, 'Urea Mestac Laoying (50 Kg)', 'Mestac merupakan pupuk tunggal yang memiliki kandungan :\r\n– Nitrogen-Amonium 26%\r\n– Berbentuk butiran (granule)\r\n\r\n#Fungsi :\r\n– Merangsang dan mempercepat pertumbuhan tanaman\r\n– Membuat daun tumbuhan lebih hijau\r\n– Meningkatkan daya tahan tanaman terhadap', '675500', 100, 'SF3X10FWMCYFLWOOMestac Laoying.jpg'),
(5, 1, 'Urea Cair Cuan (5 Liter)', 'Manfaat Pupuk Urea.\r\n- Penggunaan urea yang sangat populer adalah sebagai pupuk karena kandungan unsur nitrogama yang sangat tinggi.\r\n\r\nManfaat unsur Nitrogen (N) bagi tanaman :\r\nMerangsang pertumbuhan vegetative(pembentukan anakan, tinggi tanaman, lebar ', '171000', 100, 'SF3X35QQ6MZE5RV6Urea Cair (cuan).jpg'),
(6, 1, 'Yaramila 25-7-7 (1 Kg)', 'Pupuk Yara mila Faster 25-7-7\r\nDiproduksi oleh Yara\r\nNetto : 1 kg\r\nKEMASAN REPACK (ISI 100% ORIGINAL PABRIK) \r\n\r\nPupuk ini mengandung kombinasi yang sangat baik dari nitrat nitrogen yang tersedia dan melepaskan nitrogen amonium lebih lambat.\r\nSumber nitro', '19500', 100, 'SF3X5NTLWL3SURZIYara Mila 25-7-7.jpg'),
(7, 1, 'Yaramila 16-16-16 (1 Kg)', 'Pupuk NPK 16-16-16 Mutiara YaraMila UNIK adalah pupuk pada masa bertumbuhan, berkualitas terpercaya yang sudah dipakai oleh petani di seluruh dunia. Dengan segala kelebihan dan keutamaannya pupuk ini dapat meningkatkan produksi serta meningkatkan kualitas', '19000', 100, 'SF3XALM2KHQ6S7PSYara Mila 16-16-16.jpg'),
(8, 1, 'Yaramila Winner (1 Kg)', 'Pupuk NPK YaraMila Winner\r\nDiproduksi oleh : Yara\r\nNetto : 1 Kg\r\nKemasan : Repack\r\n\r\nPupuk NPK YaraMila Winner 15 - 09 - 20 (S) merupakan pupuk yang dapat diaplikasikan pada segala jenis tanaman.\r\n\r\nNPK Yara Winner mengandung unsur hara Makro dan Mikro ya', '28000', 100, 'SF3ZSC6TIEB5H9XPYala Mila Winner.jpg'),
(9, 1, 'NPK Pak Tani (1 Kg)', 'PUPUK NPK 16-16-16 PAK TANI ORIGIN RUSIA KEMASAN PABRIK 1 KG\r\n\r\nKomposisi:\r\nN (Nitrogen) 16,0%\r\nNitrat Nitrogen 6,4%\r\nAmmonium Nitrogen 9,6%\r\nP2O5 (Phospate) 16,0%\r\nK2O (Potassium Oxide) 16,0%\r\nMgO (Magnesium Oxide) 1,0%\r\n\r\nKeunggulan:\r\n1. Mengandung unsu', '20000', 100, 'SF3ZUU9WVZ92YLBPNPK Pak Tani.jpg'),
(10, 2, 'Gramoxone (1 Liter)', 'Gramoxone adalah herbisida dengan cara kerja kontak, begitu penggunaan bisa langsun nampak jelas efeknya. Gramoxone sangat efektif untuk mengendalikan semua jenis gulma pada tanaman pertanian atau perkebunan. Keunggulan dari Gramoxone ialah memiliki tiga ', '155000', 100, 'SF5HTDWCA87ARYVGGramoxon.jpg'),
(11, 2, 'Passxone (1 Liter)', 'PASSXONE 276 SL merupakan herbisida kontak purna tumbuh berbentuk larutan dalam air untuk mengendalikan gulma berdaun lebar dan gulma golongan rumput pada budidaya Karet (TBM).', '64500', 100, 'SF5HVJV9DSB03L8QPassxone.jpg'),
(12, 2, 'Roundup (200 ml)', 'Roundup adalah herbisida atau bahan kimia yang digunakan sejak lama untuk membasmi rumput liar / ilalang dan berbagai jenis gulma\r\n\r\nBerikut beberapa keunggulan dari roundup :\r\n- Tahan hujan 1-2 jam setelah penyemprotan\r\n- Daya basmi lebih unggul dalam ja', '28000', 99, 'SF5HY7VDQ7FDG7NSRoundup.jpg'),
(13, 2, 'Bablas (1 Liter)', 'Herbisida berbahan aktif gliposat untuk membasmi hama gulma liar pas tanaman sawit, karet, jagung, padi, dll\r\n', '129000', 100, 'SF5I28J2CUJX2ZY1Bablas.jpg'),
(14, 2, 'Gempur (500 ml)', 'Herbisida sistemik purna tumbuh berbentuk larutan yang dapat larut dalam air untuk mengendalikan gulma pada hutan tanaman industri Acacia mangium, pertanaman kakao (TBM), pertanaman karet (TBM), pertanaman kelapa sawit (TBM), pertanaman kopi (TBM),lahan t', '36000', 100, 'SF5I4IXBJEC3BTPSGempur.jpg'),
(15, 3, 'Paket Anti Gulma (PAG Jagung) 500 ml ', 'Paket Anti Gulma Jagung sangat efektif mengendalikan gulma/rumput yang tumbuh di lahan jagung, karena menggunakan dua herbisida sistemik dan selektif yaitu ATRAZ 600SC dan ALERON 60SC ditambah dengan BESMOR jagung 600SL sebagai surfaktan.\r\n\r\nCukup campurkan formulasi dalam paket Anti Gulma Jagung ini sesuai dosis yang dianjurkan, dan semprot pada lahan jagung umur 2-3 minggu, maka gulma akan mati dan bersih.\r\n\r\nTidak perlu khawatir tanaman jagung akan rusak karena Paket Anti Gulma Jagung ini selektif terhadap tanaman jagung.\r\n\r\nBerat bersih:\r\n- Atraz 500 ml\r\n- Aleron 500 ml\r\n- Besmor 200 ml', '165000', 95, 'SF5JEARCD7DC6TDZPag.jpg'),
(16, 3, 'Kayabas (1 Liter)', 'Kayabas adalah herbisida sistemik yang efektif mengendalikan gulma berdaun lebar dan rumput pada tanaman jagung. Herbisida ini bekerja dengan cara diserap oleh daun dan akar, kemudian ditranslokasikan ke seluruh bagian tanaman gulma, sehingga menyebabkan kematian gulma secara menyeluruh.', '75000', 100, 'SF7UJPRHS1NARLJTKayabas.jpg'),
(17, 3, 'Lares (1 Liter)', 'Lares adalah herbisida yang dirancang khusus untuk mengendalikan gulma di lahan jagung. Dengan bahan aktif yang kuat, Lares mampu menekan pertumbuhan gulma tanpa merusak tanaman jagung, sehingga meningkatkan efisiensi produksi pertanian.', '68000', 100, 'SF7UJC57NHLCLHUKLares.jpg'),
(18, 3, 'Calaris (1 Liter)', 'Calaris adalah herbisida pasca tumbuh untuk mengendalikan berbagai jenis gulma pada tanaman jagung. Dengan kombinasi bahan aktif yang ampuh, Calaris memberikan perlindungan optimal untuk tanaman jagung, sehingga dapat tumbuh dengan lebih baik dan produktif.', '89000', 100, 'SF7UJ191QNP90LAYCalaris.jpg'),
(19, 4, 'Tabas (1 Liter)', 'Tabas adalah herbisida pra-tumbuh yang efektif untuk mengendalikan gulma pada tanaman padi. Dengan penggunaan Tabas, pertumbuhan gulma dapat ditekan sejak awal, sehingga tanaman padi dapat tumbuh optimal tanpa terganggu oleh persaingan dengan gulma.', '70000', 100, 'SF7UIS4RRQ3EZY8ETabas.jpg'),
(20, 4, 'Badax (1 Liter)', 'Badax adalah herbisida pra-tumbuh yang digunakan untuk mengendalikan gulma pada lahan padi. Dengan formula khusus, Badax mampu menekan pertumbuhan gulma tanpa merusak tanaman padi, sehingga mendukung pertumbuhan padi yang sehat dan produktif.', '75000', 100, 'SF7UIKSZIR87BA08Badax.jpg'),
(21, 4, 'Novlect (1 Liter)', 'Novlect adalah herbisida sistemik untuk tanaman padi yang efektif mengendalikan gulma daun lebar dan rumput. Dengan bahan aktif yang kuat, Novlect memastikan tanaman padi bebas dari gulma, sehingga hasil panen dapat meningkat.', '77000', 100, 'SF7UIBSNXPV8A08MNovlect.jpg'),
(22, 4, 'Top Shot (1 Liter)', 'Top Shooy adalah herbisida sistemik yang dirancang untuk mengendalikan gulma pada tanaman padi. Herbisida ini bekerja dengan cepat dan efektif, sehingga tanaman padi dapat tumbuh dengan baik tanpa gangguan dari gulma.', '80000', 100, 'SF7UHYPBIP1IGSJOTop Shot.jpg'),
(23, 4, 'ET. Prorice (1 Liter)', 'ET. Prorice adalah herbisida selektif untuk padi yang efektif mengendalikan gulma. Dengan aplikasi yang tepat, ET. Prorice dapat menekan pertumbuhan gulma tanpa merusak tanaman padi, sehingga membantu meningkatkan hasil panen.', '82000', 100, 'SF7UGX7P44OWKEG9ET. Prorice.jpg'),
(24, 4, 'Council Complete (1 Liter)', 'Council Complete adalah herbisida sistemik yang efektif mengendalikan berbagai jenis gulma pada tanaman padi. Dengan bahan aktif yang ampuh, Council Complete memberikan perlindungan optimal untuk tanaman padi, sehingga hasil panen dapat lebih maksimal.', '85000', 100, 'SF7UGN0N4JGF3I2TCouncil Complete.jpg'),
(25, 5, 'Victory (1 Kg)', 'Victory adalah fungisida sistemik yang digunakan untuk mengendalikan berbagai penyakit jamur pada tanaman. Dengan bahan aktif yang efektif, Victory memberikan perlindungan menyeluruh terhadap penyakit seperti bercak daun, embun tepung, dan busuk batang. Aplikasinya mudah, baik dengan penyemprotan langsung ke daun maupun melalui sistem irigasi.', '95000', 100, 'SF7UGDQJPQOLF7HNVictory.jpg'),
(26, 5, 'Nativo (1 Kg)', 'Nativo adalah fungisida yang efektif mengendalikan berbagai penyakit pada tanaman. Dengan kombinasi bahan aktif yang kuat, Nativo memberikan perlindungan maksimal terhadap penyakit tanaman, sehingga tanaman dapat tumbuh sehat dan produktif.', '98000', 100, 'SF7UG1FJLGQMNIVLNativo.jpg'),
(27, 5, 'Fujiwan (1 Kg)', 'Fujiwan adalah fungisida sistemik yang dirancang untuk melindungi tanaman dari serangan berbagai penyakit jamur. Dengan aplikasi yang tepat, Fujiwan dapat menekan perkembangan penyakit, sehingga tanaman tetap sehat dan produktif.', '102000', 100, 'SF7UFRSMET3PTJHEFujiwan.jpg'),
(28, 5, 'Tandem (1 Kg)', 'Tandem adalah fungisida sistemik yang digunakan untuk mengendalikan berbagai penyakit pada tanaman. Dengan bahan aktif yang efektif, Tandem memberikan perlindungan menyeluruh terhadap penyakit seperti bercak daun, embun tepung, dan busuk batang.', '105000', 100, 'SF7UFH3P6DDZXVR7Tandem.jpg'),
(29, 5, 'Score (1 Kg)', 'Score adalah fungisida sistemik yang efektif untuk mengendalikan berbagai penyakit pada tanaman. Dengan aplikasi yang tepat, Score dapat melindungi tanaman dari serangan penyakit, sehingga tanaman dapat tumbuh dengan baik dan hasil panen meningkat.', '108000', 100, 'SF7UF9KRXWQP7KSTScore.jpg'),
(30, 5, 'Seltima (1 Kg)', 'Seltima adalah fungisida sistemik yang digunakan untuk mengendalikan berbagai penyakit pada tanaman. Dengan bahan aktif yang efektif, Seltima memberikan perlindungan menyeluruh terhadap penyakit seperti bercak daun, embun tepung, dan busuk batang.', '110000', 100, 'SF7UF2CO8O0UDWJBSeltima.jpg'),
(31, 5, 'Amistartop (1 Kg)', 'Amistartop adalah fungisida sistemik yang dirancang untuk melindungi tanaman dari serangan berbagai penyakit jamur. Dengan aplikasi yang tepat, Amistartop dapat menekan perkembangan penyakit, sehingga tanaman tetap sehat dan produktif.', '115000', 100, 'SF7UERI060XNNJHZAmistartop.jpg'),
(32, 6, 'De Bestan (1 Kg)', 'De Bestan adalah moluskisida yang efektif untuk mengendalikan hama keong pada tanaman. Dengan bahan aktif yang kuat, De Bestan memberikan perlindungan maksimal terhadap serangan hama keong, sehingga tanaman dapat tumbuh dengan baik.', '90000', 100, 'SF7UEI06KPN5K5HKDe Bestan.jpg'),
(33, 6, 'Jinn (1 Kg)', 'Jinn adalah moluskisida yang digunakan untuk mengendalikan hama keong pada tanaman. Dengan aplikasi yang tepat, Jinn dapat menekan populasi hama keong, sehingga tanaman terlindungi dari kerusakan.', '95000', 100, 'SF7UE7RUA9KRCX3GJinn.jpg'),
(34, 6, 'Rostok (1 Kg)', 'Rostok adalah moluskisida yang efektif mengendalikan hama keong pada tanaman. Dengan bahan aktif yang kuat, Rostok memberikan perlindungan maksimal terhadap serangan hama keong, sehingga tanaman dapat tumbuh dengan baik.', '100000', 100, 'SF7UDX8991UF3P5ZRostok.jpg'),
(35, 6, 'Toxiput (1 Kg)', 'Toxiput adalah moluskisida yang digunakan untuk mengendalikan hama keong pada tanaman. Dengan aplikasi yang tepat, Toxiput dapat menekan populasi hama keong, sehingga tanaman terlindungi dari kerusakan.', '105000', 100, 'SF7UDOPKYTVJ2IJCToxiput.jpg'),
(36, 6, 'Barrier (1 Kg)', 'Barrier adalah moluskisida yang efektif mengendalikan hama keong pada tanaman. Dengan bahan aktif yang kuat, Barrier memberikan perlindungan maksimal terhadap serangan hama keong, sehingga tanaman dapat tumbuh dengan baik.', '110000', 100, 'SF7UD9K1IFSN3262Barrier.jpg'),
(37, 7, 'Agrogib (500 ml)', 'Agrogib adalah hormon pertumbuhan yang digunakan untuk merangsang pertumbuhan tanaman. Dengan bahan aktif yang kuat, Agrogib membantu meningkatkan hasil panen dan kualitas tanaman.', '50000', 100, 'SF7UCUETJPODUWWAAgrogib.jpg'),
(38, 7, 'Speed Extra (500 ml)', 'Speed Extra adalah hormon pertumbuhan yang efektif untuk merangsang pertumbuhan tanaman. Dengan aplikasi yang tepat, Speed Extra dapat meningkatkan produktivitas tanaman dan hasil panen.', '55000', 100, 'SF7UCGQQB3PJ5H6BSpeed Extra.jpg'),
(39, 7, 'Bambu Ijo (500 ml)', 'Bambu Ijo adalah hormon pertumbuhan yang digunakan untuk merangsang pertumbuhan tanaman. Dengan bahan aktif yang kuat, Bambu Ijo membantu meningkatkan hasil panen dan kualitas tanaman.', '60000', 100, 'SF7UC5NML6JPXOWYBambu Ijo.jpg'),
(40, 7, 'ABC (500 ml)', 'ABC adalah hormon pertumbuhan yang efektif untuk merangsang pertumbuhan tanaman. Dengan aplikasi yang tepat, ABC dapat meningkatkan produktivitas tanaman dan hasil panen.', '65000', 100, 'SF7UBTJ82A9QLC1BABC.jpg'),
(41, 7, 'POC (500 ml)', 'POC adalah hormon pertumbuhan yang digunakan untuk merangsang pertumbuhan tanaman. Dengan bahan aktif yang kuat, POC membantu meningkatkan hasil panen dan kualitas tanaman.', '70000', 100, 'SF7UBLSZURZR3MD4POC.jpg'),
(42, 7, 'Megarizo (500 ml)', 'Megarizo adalah hormon pertumbuhan yang efektif untuk merangsang pertumbuhan tanaman. Dengan aplikasi yang tepat, Megarizo dapat meningkatkan produktivitas tanaman dan hasil panen.', '75000', 100, 'SF7UBB798JDTJX52Megarizo.jpg'),
(43, 7, 'POC Hantu (500 ml)', 'POC Hantu adalah hormon pertumbuhan yang digunakan untuk merangsang pertumbuhan tanaman. Dengan bahan aktif yang kuat, POC Hantu membantu meningkatkan hasil panen dan kualitas tanaman.', '80000', 100, 'SF7UB1J21M912RQ9POC Hantu.jpg'),
(44, 8, 'Copcide (1 Kg)', 'Copcide adalah bakterisida yang efektif mengendalikan berbagai jenis penyakit bakteri pada tanaman. Dengan bahan aktif yang ampuh, Copcide memberikan perlindungan maksimal terhadap serangan penyakit bakteri.', '85000', 100, 'SF7UAJJ05MC0WAYQCopcide.jpg'),
(45, 8, 'Nordox (1 Kg)', 'Nordox adalah bakterisida yang digunakan untuk mengendalikan berbagai jenis penyakit bakteri pada tanaman. Dengan aplikasi yang tepat, Nordox dapat melindungi tanaman dari serangan penyakit bakteri.', '90000', 100, 'SF7UA9LUPDPLTJGSNordox.jpg'),
(46, 8, 'Bactocyn (1 Kg)', 'Bactocyn adalah bakterisida yang efektif mengendalikan berbagai jenis penyakit bakteri pada tanaman. Dengan bahan aktif yang ampuh, Bactocyn memberikan perlindungan maksimal terhadap serangan penyakit bakteri.', '95000', 100, 'SF7U9XZVLQ9KNGH4Bactocyn.jpg'),
(47, 8, 'Kuproxat (1 Kg)', 'Kuproxat adalah bakterisida yang digunakan untuk mengendalikan berbagai jenis penyakit bakteri pada tanaman. Dengan aplikasi yang tepat, Kuproxat dapat melindungi tanaman dari serangan penyakit bakteri.', '100000', 100, 'SF7U9OAYQZLP0PJ5Kuproxat.jpg'),
(48, 9, 'Roscel (1 Liter)', 'Roscel adalah insektisida yang efektif mengendalikan berbagai jenis hama pada tanaman. Dengan bahan aktif yang kuat, Roscel memberikan perlindungan maksimal terhadap serangan hama, sehingga tanaman dapat tumbuh dengan baik.', '105000', 100, 'SF7U9DO5UWF2ZQTMRoscel.jpg'),
(49, 9, 'Demolish (1 Liter)', 'Demolish adalah insektisida yang digunakan untuk mengendalikan berbagai jenis hama pada tanaman. Dengan aplikasi yang tepat, Demolish dapat menekan populasi hama, sehingga tanaman terlindungi dari kerusakan.', '110000', 100, 'SF7U95CP897U0WDCDemolish.jpg'),
(50, 9, 'Sagribeat (1 Liter)', 'Sagribeat adalah insektisida yang efektif mengendalikan berbagai jenis hama pada tanaman. Dengan bahan aktif yang kuat, Sagribeat memberikan perlindungan maksimal terhadap serangan hama, sehingga tanaman dapat tumbuh dengan baik.', '115000', 100, 'SF7U8WLI1AFM2NVLSagribeat.jpg'),
(51, 9, 'Demeter (1 Liter)', 'Demeter adalah insektisida yang digunakan untuk mengendalikan berbagai jenis hama pada tanaman. Dengan aplikasi yang tepat, Demeter dapat menekan populasi hama, sehingga tanaman terlindungi dari kerusakan.', '120000', 100, 'SF7U8QCJ5MS7RLWVDemeter.jpg'),
(52, 9, 'Emacel (1 Liter)', 'Emacel adalah insektisida yang efektif mengendalikan berbagai jenis hama pada tanaman. Dengan bahan aktif yang kuat, Emacel memberikan perlindungan maksimal terhadap serangan hama, sehingga tanaman dapat tumbuh dengan baik.', '125000', 100, 'SF7U8G9QKEEHG11UEmacel.jpg'),
(53, 9, 'Curacron (1 Liter)', 'Curacron adalah insektisida yang digunakan untuk mengendalikan berbagai jenis hama pada tanaman. Dengan aplikasi yang tepat, Curacron dapat menekan populasi hama, sehingga tanaman terlindungi dari kerusakan.', '130000', 100, 'SF7U8804YNHTNNTICuracron.jpg'),
(54, 9, 'Prevathon (1 Liter)', 'Prevathon adalah insektisida yang efektif mengendalikan berbagai jenis hama pada tanaman. Dengan bahan aktif yang kuat, Prevathon memberikan perlindungan maksimal terhadap serangan hama, sehingga tanaman dapat tumbuh dengan baik.', '135000', 100, 'SF7U7YUKS0MIU4PMPrevathon.jpg'),
(55, 9, 'Davat (1 Liter)', 'Davat adalah insektisida yang digunakan untuk mengendalikan berbagai jenis hama pada tanaman. Dengan aplikasi yang tepat, Davat dapat menekan populasi hama, sehingga tanaman terlindungi dari kerusakan.', '140000', 100, 'SF7U7KR4DFFLLDOIDavat.jpg'),
(56, 9, 'Thioxam (1 Liter)', 'Thioxam adalah insektisida yang efektif mengendalikan berbagai jenis hama pada tanaman. Dengan bahan aktif yang kuat, Thioxam memberikan perlindungan maksimal terhadap serangan hama, sehingga tanaman dapat tumbuh dengan baik.', '145000', 100, 'SF7U7AHBEUFKEEW8Thioxam.jpg'),
(57, 9, 'Akron (1 Liter)', 'Akron adalah insektisida yang digunakan untuk mengendalikan berbagai jenis hama pada tanaman. Dengan aplikasi yang tepat, Akron dapat menekan populasi hama, sehingga tanaman terlindungi dari kerusakan.', '150000', 100, 'SF7U70TUZVTM0KKXAkron.jpg'),
(58, 10, 'Instagro 06 (1 Kg)', 'Instagro 06 adalah pupuk daun yang mengandung berbagai unsur hara yang diperlukan tanaman. Dengan penggunaan Instagro 06, tanaman dapat tumbuh lebih sehat dan produktif.', '70000', 100, 'SF7U6L5ZHY8LIJXHInstagro 06.jpg'),
(59, 10, 'Instagro 02 (1 Kg)', 'Instagro 02 adalah pupuk daun yang dirancang untuk memberikan nutrisi optimal bagi tanaman. Dengan aplikasi yang tepat, Instagro 02 dapat meningkatkan pertumbuhan dan hasil panen tanaman.', '75000', 100, 'SF7U6CFZJNPWT5S3Instagro 02.jpg'),
(60, 10, 'Ekstra green (1 Kg)', 'Ekstra green adalah pupuk daun yang efektif memberikan nutrisi lengkap bagi tanaman. Dengan penggunaan Ekstra green, tanaman dapat tumbuh lebih hijau dan subur.', '80000', 100, 'SF7U64X6WL1V4P0YEkxtra Green.jpg'),
(61, 11, 'CNG (1 Kg)', 'CNG adalah pupuk kalsium yang digunakan untuk memperbaiki kualitas tanah dan meningkatkan pertumbuhan tanaman. Dengan kandungan kalsium yang tinggi, CNG membantu memperkuat struktur tanaman dan meningkatkan hasil panen.', '85000', 100, 'SF7U5X3JNFKMB7ZSCN-G.jpg'),
(62, 11, 'Fortune (1 Kg)', 'Fortune adalah pupuk kalsium yang dirancang untuk memberikan nutrisi esensial bagi tanaman. Dengan penggunaan Fortune, tanaman dapat tumbuh lebih kuat dan sehat.', '90000', 100, 'SF7U5MSCQ3QM5XWXFortune.jpg'),
(63, 12, 'Axer (1 Liter)', 'Axer adalah perekat yang digunakan untuk meningkatkan efektivitas aplikasi pestisida pada tanaman. Dengan Axer, pestisida dapat menempel lebih lama pada daun tanaman, sehingga memberikan perlindungan yang lebih baik.', '50000', 100, 'SF7U5CHHWWEAHI0EAxer.jpg'),
(64, 13, 'Propar (1 Liter)', 'Propar adalah akarisida yang efektif mengendalikan hama tungau pada tanaman. Dengan bahan aktif yang kuat, Propar memberikan perlindungan maksimal terhadap serangan hama tungau.', '100000', 100, 'SF7U4Y62RTKXT6MMPropar.jpg'),
(65, 13, 'Samite (1 Liter)', 'Samite adalah akarisida yang digunakan untuk mengendalikan hama tungau pada tanaman. Dengan aplikasi yang tepat, Samite dapat menekan populasi hama tungau, sehingga tanaman terlindungi dari kerusakan.', '105000', 100, 'SF7U4K3KWEBXSABDSamite.jpg'),
(66, 14, 'Power Soil (1 Liter)', 'Power Soil adalah produk MMT yang digunakan untuk memperbaiki struktur tanah dan meningkatkan kesuburan. Dengan Power Soil, tanaman dapat tumbuh lebih sehat dan produktif.', '75000', 100, 'SF7U4AD5L7CPPNITPower Soil.jpg'),
(67, 14, 'Calha (1 Liter)', 'Calha adalah produk MMT yang dirancang untuk memberikan nutrisi lengkap bagi tanaman. Dengan Calha, tanaman dapat tumbuh lebih subur dan sehat.', '80000', 100, 'SF7U3W9COSLFKSX6Calcha.jpg'),
(68, 14, 'Kalinet (1 Liter)', 'Kalinet adalah produk MMT yang efektif memberikan nutrisi esensial bagi tanaman. Dengan Kalinet, tanaman dapat tumbuh lebih kuat dan sehat.', '85000', 100, 'SF7U3KI3D5W4MDKFKalinet.jpg'),
(69, 14, 'Kover WP (1 Liter)', 'Kover WP adalah produk MMT yang digunakan untuk memperbaiki kualitas tanah dan meningkatkan pertumbuhan tanaman. Dengan Kover WP, tanaman dapat tumbuh lebih subur dan produktif.', '90000', 100, 'SF7U3CF8W77MMAIPKover WP.jpg'),
(70, 14, 'Vitaron (1 Liter)', 'Vitaron adalah produk MMT yang dirancang untuk memberikan nutrisi esensial bagi tanaman. Dengan Vitaron, tanaman dapat tumbuh lebih kuat dan sehat.', '95000', 100, 'SF7U31PH6G1BYT20Vitaron.jpg'),
(71, 14, 'Silica Carbon (1 Liter)', 'Silica Carbon adalah produk MMT yang efektif meningkatkan kualitas tanah dan pertumbuhan tanaman. Dengan Silica Carbon, tanaman dapat tumbuh lebih subur dan produktif.', '100000', 100, 'SF7U2SDQGAH39SLFSilica Carbon.jpg'),
(72, 14, 'Modern Foll (1 Liter)', 'Modern Foll adalah produk MMT yang dirancang untuk memberikan nutrisi lengkap dan meningkatkan kesehatan tanaman. Dengan aplikasi Modern Foll, tanaman dapat tumbuh lebih kuat dan produktif.', '105000', 100, 'SF7U2IBX8R67ZY2YModern Foll.jpg'),
(73, 15, 'Benih Timun (10 gram)', 'Benih timun berkualitas tinggi yang cocok untuk ditanam di berbagai jenis tanah. Benih ini menghasilkan timun yang segar dan renyah dengan produktivitas tinggi.', '15000', 100, 'SF7U22OEQJFZONP5Timun.jpg'),
(74, 15, 'Benih Cabe (10 gram)', 'Benih cabe unggul yang dirancang untuk menghasilkan buah cabe yang pedas dan berkualitas tinggi. Cocok untuk ditanam di berbagai kondisi tanah dan iklim.', '20000', 100, 'SF7U1S4EOW5L1AE4Cabe.jpg'),
(75, 15, 'Benih Kacang Panjang (10 gram)', 'Benih kacang panjang yang dirancang untuk memberikan hasil panen yang melimpah. Benih ini cocok untuk ditanam di berbagai jenis tanah dan kondisi iklim.', '12000', 100, 'SF7U1HWKG2OBK018Kacang Panjang.jpg'),
(76, 15, 'Benih Tomat (10 gram)', 'Benih tomat berkualitas tinggi yang menghasilkan buah tomat yang segar dan berukuran besar. Benih ini cocok untuk ditanam di berbagai jenis tanah dan kondisi iklim.', '17000', 100, 'SF7U174IHBM4HER1Tomat.jpg'),
(77, 15, 'Benih Pare (10 gram)', 'Benih pare unggul yang dirancang untuk menghasilkan buah pare yang berkualitas tinggi. Cocok untuk ditanam di berbagai kondisi tanah dan iklim.', '13000', 100, 'SF7U0RWIDQUH7VU6Pare.jpg'),
(78, 15, 'Benih Bayam (10 gram)', 'Benih bayam berkualitas tinggi yang menghasilkan daun bayam yang hijau dan subur. Benih ini cocok untuk ditanam di berbagai jenis tanah dan kondisi iklim.', '10000', 100, 'SF7U0F8FFTCHM8Z4Bayam.jpg'),
(79, 15, 'Benih Ceme (10 gram)', 'Benih ceme unggul yang dirancang untuk menghasilkan tanaman ceme yang subur dan produktif. Cocok untuk ditanam di berbagai kondisi tanah dan iklim.', '11000', 100, 'SF7U06XP1N7VZX98Ceme.jpg'),
(80, 15, 'Benih Kangkung (10 gram)', 'Benih kangkung berkualitas tinggi yang menghasilkan daun kangkung yang hijau dan segar. Benih ini cocok untuk ditanam di berbagai jenis tanah dan kondisi iklim.', '9000', 100, 'SF7TZVD5BN77J56FKangkung.jpg'),
(81, 15, 'Benih Sawi (10 gram)', 'Benih sawi unggul yang dirancang untuk menghasilkan tanaman sawi yang hijau dan subur. Cocok untuk ditanam di berbagai kondisi tanah dan iklim.', '9500', 100, 'SF7TZN9S76HZCWJBSawi.jpg'),
(82, 15, 'Benih Buncis (10 gram)', 'Benih buncis berkualitas tinggi yang menghasilkan tanaman buncis dengan buah yang panjang dan renyah. Benih ini cocok untuk ditanam di berbagai jenis tanah dan kondisi iklim.', '16000', 100, 'SF7TZFR2NPZQRS98Buncis.jpg'),
(83, 15, 'Benih Jagung (10 gram)', 'Benih jagung unggul yang dirancang untuk menghasilkan tanaman jagung yang subur dan produktif. Cocok untuk ditanam di berbagai kondisi tanah dan iklim.', '14000', 100, 'SF7TZ39U8YIC67W7Jagung.jpg'),
(84, 15, 'Benih Padi (10 gram)', 'Benih padi berkualitas tinggi yang dirancang untuk menghasilkan tanaman padi dengan hasil panen yang melimpah. Cocok untuk ditanam di berbagai jenis tanah dan kondisi iklim.', '12000', 100, 'SF7TYEOQUXZAT8W2Padi.jpg'),
(85, 16, 'Bran Kuda (1 Kg)', 'Pakan kuda berkualitas tinggi yang dirancang untuk memenuhi kebutuhan nutrisi harian kuda. Pakan ini mengandung berbagai vitamin dan mineral yang penting untuk kesehatan kuda.', '15000', 100, 'SF7TMXU7FQ5PXP2UBran Kuda.jpg'),
(86, 16, 'Growol (1 Kg)', 'Growol adalah pakan ternak yang dirancang untuk meningkatkan pertumbuhan dan kesehatan ternak. Dengan kandungan nutrisi yang seimbang, Growol membantu ternak tumbuh lebih sehat dan produktif.', '9000', 100, 'SF7TMB1UC4PZM59UGrowol.jpg'),
(87, 16, 'Pellet (1 Kg)', 'Pellet adalah pakan ternak yang terbuat dari bahan-bahan berkualitas tinggi. Pellet ini dirancang untuk memberikan nutrisi lengkap yang diperlukan untuk pertumbuhan dan kesehatan ternak.', '12000', 100, 'SF7TM030ZKGGQ07HPellet.jpg'),
(88, 17, 'Sepatu Boot', 'Sepatu boot untuk perlindungan kaki', '150000', 50, 'SFA3GFHEZ7QW68WIsepatu boot.png'),
(90, 17, 'Jetspray', 'Semprotan manual kapasitas 1 liter', '30000', 75, 'SFA3G6ACD0FDOBMVjetspray.jpeg'),
(91, 17, 'Semprotan Scarlet 2 Liter', 'Semprotan manual kapasitas 2 liter', '45000', 60, 'SFA3FVSFWS21M8EVsemprotan scarlet 2 liter.jpg'),
(92, 17, 'Tali Keloh', 'Tali untuk berbagai keperluan pertanian', '10000', 200, 'SFA3FKPYB3J9YORPtali keluh.jpg'),
(93, 17, 'Cangkul', 'Cangkul untuk menggali tanah', '70000', 80, 'SFA3FBMD1X41YU5Gcangkul.jpeg'),
(94, 17, 'Cengkek', 'Cengkek untuk mencabut paku', '50000', 90, 'SFA3EPS1LASFAKCXcengkek.jpg'),
(95, 17, 'Sujen', 'Alat untuk menjahit karung', '20000', 150, 'SFA3EEFJ6JJ8MG59sujen.jpg'),
(96, 17, 'Mulsa Jaring', 'Mulsa jaring untuk penutup tanaman', '30000', 100, 'SFA3E2ZH12CQLPIAmulsa jaring.png'),
(97, 17, 'Pelobang Tanah', 'Alat untuk membuat lubang di tanah', '45000', 70, 'SFA3DT9J8Q89UCJ7pelubang tanah.png'),
(98, 17, 'Tali Tambang', 'Tali tambang untuk keperluan pertanian', '20000', 120, 'SFA3DKCKPV75J15Gtali tambang.png'),
(99, 17, 'Waring', 'Jaring untuk berbagai keperluan', '25000', 100, 'SFA3DBAF18WXQELOwaring.jpg'),
(100, 17, 'Paranet', 'Paranet untuk pelindung tanaman', '35000', 60, 'SFA3D3PRXUS9QEEPparanet.jpg'),
(101, 17, 'Batu Asah', 'Batu untuk mengasah alat', '15000', 180, 'SFA3CRAMVZYX8WI8batu asah.png'),
(102, 17, 'Tali Karet Ban', 'Tali karet untuk berbagai keperluan', '10000', 200, 'SFA3CID0W0A05EP6tali karet ban.png'),
(103, 17, 'Tray', 'Tempat untuk menyimpan alat', '5000', 300, 'SFA3C9BWJG81XC3Gtray.jpg'),
(104, 17, 'Tali Perak Pertanian', 'Tali untuk mengikat tanaman', '15000', 150, 'SFA3C12RA7FF41YStali perak.jpg'),
(105, 17, 'Caping', 'Topi tradisional untuk melindungi dari matahari', '20000', 100, 'SFA3BRY0ZV27SVE9caping.jpeg'),
(106, 17, 'Alat Semprot CBA', 'Alat semprot merk CBA', '100000', 50, 'SFA3BJRE7OGCXQ54cba.jpeg'),
(107, 17, 'Alat Semprot Swan', 'Alat semprot merk Swan', '110000', 50, 'SFA3B9HC4AQ35ZLBswan.jpg'),
(108, 17, 'Alat Semprot Dragon', 'Alat semprot merk Dragon', '120000', 50, 'SFA3AXCT2H0V3A76dragon.jpg'),
(109, 17, 'Alat Semprot Banzai', 'Alat semprot merk Banzai', '130000', 50, 'SFA3AP257URYZGP2banzai.jpg'),
(110, 17, 'Alat Semprot Yoto', 'Alat semprot merk Yoto', '140000', 50, 'SFA3AGQHJFTM9U2Oyoto.png'),
(111, 17, 'Alat Semprot Top Agri', 'Alat semprot merk Top Agri', '150000', 50, 'SFA3A2XRJ5Z79USXagri.png'),
(112, 17, 'Gembor', 'Alat penyiram tanaman', '25000', 100, 'SFA392IGV9AU3XXEgembor.png'),
(113, 18, 'Potensio', 'Potensio untuk mengatur tegangan', '5000', 200, 'SFA2GUJV1PGOYJDLpotensio.jpg'),
(114, 18, 'Saringan Bawah', 'Saringan bawah untuk alat semprot', '10000', 150, 'SFA26U6VCI54PPWNSaringan bawah.jpg'),
(115, 18, 'Aki', 'Aki untuk alat elektronik', '75000', 80, 'SFA2ER54XL1HE58Qaki.jpg'),
(116, 18, 'Adaptive Power Charger EIKO', 'Charger untuk alat elektronik merk EIKO', '50000', 100, 'SFA26K1FXKXBHW0AAdaptive power charger EIKO.jpg'),
(117, 18, 'Dinamo Pump', 'Dinamo untuk pompa', '85000', 70, 'SFA2IP76WYI40466dinamo pump.png'),
(118, 18, 'Tanika Plastik Lubang 4 (Biru Putih)', 'Tanika plastik dengan 4 lubang warna biru putih', '20000', 120, 'SFA268BHI937BVY7Tanika plastik lubang 4.jpg'),
(119, 18, 'Spayer Lubang 4 SH', 'Spayer dengan 4 lubang merk SH', '25000', 110, 'SFA260LCNH3MCSYVSpayer lubang 4 SH.jpg'),
(120, 18, 'Spayer Lubang 7 Hiu', 'Spayer dengan 7 lubang merk Hiu', '30000', 90, 'SFA25PURIMLP91SNSpayer lubang 7 Hiu.jpg'),
(121, 18, 'Saringan Atas', 'Saringan atas untuk alat semprot', '15000', 130, 'SFA25E847HJE4N2DSaringan atas.jpg'),
(122, 18, 'Keran Pencet Elektrik Pestisida ', 'Keran pencet elektrik untuk pestisida warna merah', '25000', 120, 'SFA255E2QQZN4M49Keran pencet elektrik pestisida.jpg'),
(123, 18, 'Keran Pencet Multi Pestisida ', 'Keran pencet multi untuk pestisida warna kuning', '25000', 120, 'SFA24ODGCGV5I6IXKeran pencet multi pestisida.jpg'),
(124, 18, 'Keran Pencet Swan', 'Keran pencet merk Swan', '20000', 140, 'SFA20WH1XGN9M8E0Keran pencet swan.jpg'),
(125, 18, 'Torong Air', 'Torong air untuk mengalirkan cairan', '15000', 160, 'SFA2CHAK47BJBHXUtorong air.png'),
(126, 18, 'Stik 3 Meter', 'Stik sepanjang 3 meter', '10000', 180, 'SFA3MXS3SL6EJOQMstik 3 meter.jpg'),
(127, 18, 'Stik Elektrik Plastik', 'Stik elektrik dari plastik', '12000', 170, 'SFA3N5SLQMNCOO4Wstik elektrik plastik.jpg'),
(128, 18, 'Arit', 'Arit untuk memotong rumput dan tanaman', '25000', 100, 'SFA3LJIHP9EYPMBTperkakas arit.jpg'),
(129, 18, 'Selang Elektrik Orange', 'Selang elektrik warna orange', '20000', 150, 'SFA3NCJK433FRSGTSelang elektrik orange.jpg'),
(130, 18, 'Sepuyer Corong Sakai Orange', 'Sepuyer corong merk Sakai warna orange', '25000', 140, 'SFA3ODA7MPB9ZLO7Sepuyer corong sakai orange.jpg'),
(131, 18, 'Sepuyer Corong Hijau', 'Sepuyer corong warna hijau', '25000', 140, 'SFA3KCZHVGC2AIW3sepuyer corong hijau.jpeg'),
(132, 18, 'Sabuk Elektrik Warna Kuning', 'Sabuk elektrik warna kuning', '15000', 130, 'SFA243J1EZ6YU0NXSabuk elektrik warna kuning.jpg'),
(133, 18, 'Sabuk Manual', 'Sabuk manual untuk alat semprot', '10000', 200, 'SFA24ACQYHEYBMZESabuk manual.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bukti`
--

CREATE TABLE `tb_bukti` (
  `id_bukti` int(11) NOT NULL,
  `id_pesanan` varchar(255) NOT NULL,
  `foto_bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_bukti`
--

INSERT INTO `tb_bukti` (`id_bukti`, `id_pesanan`, `foto_bukti`) VALUES
(6, 'SEV611PARGJ0IID0', 'SEV62VWPFA0PKI3ISEV5RVVYM5QUONT8pakanternak.png'),
(7, 'SF4482P7AE03Z353', 'SF46XO139PJJI0C1sabit rumput.jpeg'),
(8, 'SF4LH6XKHXCHJNOA', 'SF4LWHE47VK236U5arit padi.jpg'),
(9, 'SF4N2LEWIAFV13DV', 'SF4N3S86FGFLK7F7facebook.png'),
(10, 'SF63CFWCD45K2RKB', 'SF63HLW2LK9BVM93IMG-20240601-WA0078.jpg'),
(11, 'SF68732H28G4IQ5X', 'SF6881G3JDV4R2UCShoes porto bg (6).png'),
(12, 'SF69FGDN1MFZ1LFK', 'SF69FSTFV13S088GJoyce Curie Marketing Head.png'),
(13, 'SF6N4TJHLP8CE0QX', 'SF6N8DGIAW37MEB5Joyce Curie Marketing Head.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_pesanan`
--

CREATE TABLE `tb_detail_pesanan` (
  `id_detail` int(11) NOT NULL,
  `id_pesanan` varchar(255) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `subtotal_harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_detail_pesanan`
--

INSERT INTO `tb_detail_pesanan` (`id_detail`, `id_pesanan`, `id_barang`, `jumlah_pesanan`, `subtotal_harga`) VALUES
(14, 'SEV5FH74K58PDDK1', 15, 1, '100000'),
(15, 'SEV5VYRUO07XORLV', 16, 1, '100000'),
(16, 'SEV611PARGJ0IID0', 16, 1, '100000'),
(17, 'SF3LJDH6DHNTF7TV', 18, 1, '50000'),
(18, 'SF3PDIQRE024WOP6', 18, 19, '950000'),
(19, 'SF4482P7AE03Z353', 27, 1, '28000'),
(20, 'SF47S67X15H076F1', 27, 1, '28000'),
(21, 'SF484WEVMP1IHV5E', 27, 1, '28000'),
(22, 'SF4LH6XKHXCHJNOA', 27, 1, '28000'),
(23, 'SF4MONJQ5D1SIZ74', 27, 1, '28000'),
(24, 'SF4MU4HZFBLSFAZM', 27, 1, '28000'),
(25, 'SF4N2LEWIAFV13DV', 27, 1, '28000'),
(26, 'SF63CFWCD45K2RKB', 33, 1, '36000'),
(27, 'SF63CFWCD45K2RKB', 35, 1, '165000'),
(28, 'SF68732H28G4IQ5X', 35, 1, '165000'),
(29, 'SF69FGDN1MFZ1LFK', 35, 1, '165000'),
(30, 'SF6N4TJHLP8CE0QX', 35, 4, '660000'),
(31, 'SF6NCNA08IULBK6Q', 31, 1, '28000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pupuk'),
(2, 'Herbasida (Lahan)'),
(3, 'Herbasida (Jagung)'),
(4, 'Herbasida (Padi)'),
(5, 'Fungisida'),
(6, 'Moluskisida'),
(7, 'Hormon'),
(8, 'Bakterisida'),
(9, 'Insektisida'),
(10, 'Pupuk Daun'),
(11, 'Kalsium'),
(12, 'Perekat'),
(13, 'Akarsida'),
(14, 'MMT'),
(15, 'Benih'),
(16, 'Pakan Ternak'),
(17, 'Perkakas'),
(18, 'Sparepart');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` varchar(255) NOT NULL,
  `nama_pesanan` varchar(255) NOT NULL,
  `alamat_pesanan` varchar(255) NOT NULL,
  `no_hp_pesanan` varchar(255) NOT NULL,
  `email_pesanan` varchar(255) NOT NULL,
  `total_harga_pesanan` varchar(255) NOT NULL,
  `status_pesanan` enum('Menunggu Pembayaran','Diproses','Dikirim','Ditolak','Selesai') NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `jenis_pembayaran` enum('COD','Transfer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `nama_pesanan`, `alamat_pesanan`, `no_hp_pesanan`, `email_pesanan`, `total_harga_pesanan`, `status_pesanan`, `tanggal_pesanan`, `jenis_pembayaran`) VALUES
('SF69FGDN1MFZ1LFK', 'Ardhan', 'asasasasa', '089696949439', '', '165000', 'Selesai', '2024-06-16', 'Transfer'),
('SF6N4TJHLP8CE0QX', 'Salsabila Nadia Kusuma', 'Jalan Pasopati', '089696949439', 'salsabila@gmail.com', '660000', 'Diproses', '2024-06-16', 'Transfer'),
('SF6NCNA08IULBK6Q', 'Salsabila Nadia Kusuma', 'JL. CILIK RIWUT NO.64 RT.01 PULAU TELO KEC.SELAT', '0896949439', 'dssdsad@gmail.com', '78000', 'Menunggu Pembayaran', '2024-06-17', 'Transfer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_popups`
--

CREATE TABLE `tb_popups` (
  `id_popup` int(11) NOT NULL,
  `judul` varchar(150) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_popups`
--

INSERT INTO `tb_popups` (`id_popup`, `judul`, `gambar`, `is_active`, `created_at`) VALUES
(1, 'Uji Coba Popup', '1767598894_494.jpg', 1, '2026-01-05 07:41:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_statistik_pegawai`
--

CREATE TABLE `tb_statistik_pegawai` (
  `id` int(11) NOT NULL,
  `laki_laki` int(11) NOT NULL,
  `perempuan` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_statistik_pegawai`
--

INSERT INTO `tb_statistik_pegawai` (`id`, `laki_laki`, `perempuan`, `updated_at`) VALUES
(1, 53, 10, '2026-01-05 07:19:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_statistik_penghuni`
--

CREATE TABLE `tb_statistik_penghuni` (
  `id` int(11) NOT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `isi_penghuni` int(11) DEFAULT NULL,
  `residivis` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_statistik_penghuni`
--

INSERT INTO `tb_statistik_penghuni` (`id`, `kapasitas`, `isi_penghuni`, `residivis`, `created_at`) VALUES
(1, 254, 556, 142, '2026-01-05 07:20:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_bukti`
--
ALTER TABLE `tb_bukti`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indeks untuk tabel `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `tb_popups`
--
ALTER TABLE `tb_popups`
  ADD PRIMARY KEY (`id_popup`);

--
-- Indeks untuk tabel `tb_statistik_pegawai`
--
ALTER TABLE `tb_statistik_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_statistik_penghuni`
--
ALTER TABLE `tb_statistik_penghuni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT untuk tabel `tb_bukti`
--
ALTER TABLE `tb_bukti`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_popups`
--
ALTER TABLE `tb_popups`
  MODIFY `id_popup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_statistik_pegawai`
--
ALTER TABLE `tb_statistik_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_statistik_penghuni`
--
ALTER TABLE `tb_statistik_penghuni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
