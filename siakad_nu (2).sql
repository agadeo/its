-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 06:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad_nu`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `code_qr` varchar(225) NOT NULL,
  `time_up` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `id_mahasiswa`, `code_qr`, `time_up`) VALUES
(1, 1, 'EDtb4B8GlcwT6fqIY392', '2023-02-26 21:00:58'),
(2, 2, 'EDtb4B8GlcwT6fqIY392', '2023-02-26 21:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(225) NOT NULL,
  `judul_seo` varchar(225) NOT NULL,
  `isi_berita` text NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `author` char(20) NOT NULL,
  `publish` char(7) NOT NULL,
  `userfile` text NOT NULL,
  `userfile_type` char(10) NOT NULL,
  `userfile_size` int(11) NOT NULL,
  `uploader` char(20) NOT NULL,
  `time_upload` datetime NOT NULL DEFAULT current_timestamp(),
  `updater` char(20) NOT NULL,
  `time_update` datetime NOT NULL DEFAULT current_timestamp(),
  `waktu` varchar(225) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `judul_seo`, `isi_berita`, `kategori`, `author`, `publish`, `userfile`, `userfile_type`, `userfile_size`, `uploader`, `time_upload`, `updater`, `time_update`, `waktu`, `views`) VALUES
(1, 'NU itu Besar, Harus Bisa Berbuat Banyak', 'nu-itu-besar-harus-bisa-berbuat-banyak', '<div id=\"attachment_982\" class=\"wp-caption alignnone\">\r\n<p id=\"caption-attachment-982\" class=\"wp-caption-text\" style=\"text-align: justify;\">&ldquo;NU itu Besar, Harus Bisa Berbuat Banyak. NU jangan pernah minder tapi harus berbuat. Tunjukkan NU terbesar, tinggal kita saja bisa menunjukkan&nbsp;atau&nbsp;tidak&rdquo;</p>\r\n</div>\r\n<p style=\"text-align: justify;\">*Sepenggal catatan oleh2 dari kegiatan Whorksop ITSNU Kalimantan</p>\r\n<p style=\"text-align: justify;\">&ldquo;NU itu Besar, Harus Bisa Berbuat Banyak. NU jangan pernah minder tapi harus berani tampil berbuat. Tunjukkan NU terbesar, tinggal kita saja bisa menunjukkan atau tidak&rdquo;</p>\r\n<p style=\"text-align: justify;\">Jelas sangat menarik untuk disimak untaian kalimat diatas. Apalagi disampaikan oleh Wakil Ketua PWNU Kalteng, Drs. H. Nuryakin, M.Si saat didaulat memberi sambutan dalam kapasitas sebagai Ketua Badan Pelaksana Penyelenggara (BPP) Institut Teknologi dan Sains Nahdlatul Ulama (ITSNU) Kalimantan, Sabtu (10/12/22).</p>\r\n<p style=\"text-align: justify;\">Menggugah semangat, itu betul. Lebih dari itu adalah memantik kesigapan untuk bagaimana setiap sudut bergerak dalam satu irama. Hal kedua,,, menggelorakan dan menyemangati kader NU untuk mengajak kita bangkit. Mengejar ketertinggalan, termasuk dari saudara tua NU yg dilahirkan di 1912 itu.</p>\r\n<p style=\"text-align: justify;\">&ldquo;Banyak saja kader kita yang mau berbakti atau mengabdi ke NU, tetapi tidak banyak yang bisa memfasilitasi atau merangkul. Maka dari itu nanti kita himpun, kita koordinasikan, dan kita komunikasikan&rdquo; tandas H. Nuryakin.</p>\r\n<p style=\"text-align: justify;\">Ia pun mengingatkan, jangan merasa besar dan merasa paling. Kita gak boleh sombong untuk mau berguru kepada saudara kita yg di MD misalnya, pendidikan sudah maju walau dulu tertatih-tatih juga membangun perguruan. Juga tatkala mereka membangun Rumah Sakit. Intinya, tidak boleh patah arang, tidak ada kata Hopeless.</p>\r\n<p style=\"text-align: justify;\">&ldquo;Bidang Pendidikan kita dan Bidang Kesehatan harus terus berjalan. Makanya kemarin Klinik NU ada kendala dan mau stop, saya bilang tidak. Kita tidak boleh merasa gagal, harus jalan terus bagaimana caranya. Kalau ada kesulitan, kabarkan, pasti ada jalan menyelesaikan, jangan minder dan jangan malu berguru ke yang lebih maju&rdquo; tandasnya mewanti-wanti.</p>\r\n<p style=\"text-align: justify;\">Ini soal semangat membangun Citra, NU tak boleh dipersepsikan lemah atau kalah, lalu redup semangat.<br />Sekali lagi penekanan ini menarik menjadi catatan, bahwa ini bukan soal janji atau komitmen, tetapi dorongan, motivasi dan trigger, bahwa kita tidak sedikit secara kuantitas, bahwa kader di sekitar kita banyak, hanya saja soal memfasilitasi sesuai bidangnya, belum maksimal terorganisir atau terjam&rsquo;iyyahkan di wadah yg bersimbol talijagat ini.</p>\r\n<p style=\"text-align: justify;\">Lalu apa menariknya? Secara bidang birokrasi, beliau &lsquo;bapak NY&rsquo; ini sudah menjadi komandan birokrasi di tubuh Pemprov. Secara organisasi, patut bangga NU memiliki kader yang meraih posisi di pucuk tertinggi piramida birokrasi. Tinggal bagaimana kemanfaatan itu bisa tertasyarufkan dengan baik dan diambil berkah, sebab kebaikan dan kemanfaatan itu juga harus dijemput, diupayakan, dikonsolidasikan, bukan sebatas menunggu kebaikan/kemanfaatan itu tiba-tiba datang sendiri tanpa ikhtiar. Akan rugi sekali kalau Fikrah tidak dilanjutkan dengan Harakah bukan? Apalagi dalam NU, sudah lama didoktrinkan &ldquo;Fikrah, Amaliah, dan Harakah&rdquo; harus sejalan dalam satu tarikan nafas. so,,,,ini hanya bicara satu sektor saja yaitu birokrasi, belum sektor yang lain. Betapa dahsyatnya jika tergarap dengan massif, kado 100 tahun kedua NU bakal makin cemerlang.</p>\r\n<p style=\"text-align: justify;\">Ketiga, bapak Sekda Kalteng ini ingin mengingatkan bahwa kuantitas SDM itu bila tidak dikualitaskan dengan cara diorganisir, maka akan menjadi pepatah &lsquo;ibarat buih dilautan&rsquo;. Persis dengan kecenderungan mayoritas kader NU saat ini, tidak banyak mewarnai tetapi juga tidak diwarnai, sebenarnya harusnya menjadi mainstream, tetapi senyatanya masih belum. Sejalan dengan Ketum PBNU yang kemudian mengambil opsi kebijakan silahkan warna apapun masuk ke tubuh NU, agar NU juga bisa memberi pesan kepada banyak warna. Salah satunya karena secara historis, kader pernah diarahkan untuk memaksimalkan di salah satu warna saja, nyatanya tidak membawa 90juta-an Nahdliyyin berada dalam satu garis komando pilihan keberpihakan.</p>\r\n<p style=\"text-align: justify;\">Khusus untuk ITSNU, H. Nuryakin bertitip pesan, agar giat melirik peluang kerjasama dan forum berbagi pengalaman misalnya dengan bentuk stadium general di kampus. Penting untuk menginisiasi kerjasama multi pihak, memberi tempat orang luar untuk datang memberi pencerahan ke kita dalam rangka menguatkan potensi.</p>\r\n<p style=\"text-align: justify;\">&ldquo;SDM NU itu banyak, perlu dirangkul dan beri peran. Banyak saja kader kita yang mau berbakti atau mengabdi ke NU, tetapi tidak banyak yang bisa memfasilitasi atau merangkul. Maka dari itu nanti kita himpun, kita koordinasikan, dan kita komunikasikan&rdquo; tandas H. Nuryakin menawarkan ide solutif.</p>\r\n<p style=\"text-align: justify;\">Catatan terakhir, kita saja belum pernah mendata, berapa kader NU yang disebut banyak tadi, tinggalnya dimana, profesinya apa, kebutuhan urgennya mereka ini apa, kita jamaahkan dan Jam&rsquo;iyyah kan di sektor apa (bc:kita siapkan dan gerakkan) mengurus apa, disentuh pada bagian mananya, dst&hellip; Adalah PR bagi kita semua.</p>\r\n<p style=\"text-align: justify;\">Saya yakin banyak Nuryakin2 yang lain, hanya saja belum muncul atau setengah muncul, atau belum berkesempatan muncul. Semoga, hari hari ke depan, makin tumbuh mekar tunas generasi NU.</p>\r\n<p style=\"text-align: justify;\">Semoga ada jalan mudah bagi kita, dan dimudahkan olehNya. Aamiin.</p>\r\n<p style=\"text-align: justify;\">By&nbsp;alfaqiir&nbsp;MMR</p>', 'Sosial', 'Agatha Deolika', 'Ya', 'nu-itu-besar-harus-bisa-berbuat-banyak', '.jpg', 106, 'Agatha Deolika', '2023-01-19 20:15:45', '', '2023-01-19 20:15:45', 'Rabu, 14-12-2022', 2),
(2, 'NU itu Besar, Harus Bisa Berbuat Banyak catatan kedua', 'nu-itu-besar-harus-bisa-berbuat-banyak-catatan-kedua', '<p style=\"text-align: justify;\">Ketua PWNU Kalteng, Dr. Wahyudi F Dirun, MM juga menggelorakan hal yang sama. Terkait hadirnya Perguruan Tinggi NU, secara historis ia ceritakan bahwa niatan sudah ada sejak kepengurusan PWNU Kalteng dijabat H. Abdul Wahid Aha, dan Ketua PBNU KH. Said Aqil Siradj. Terus berproses bertahun-tahun hingga baru terwujud di 2022 ditandai dengan keluarnya izin Operasional PTNU pada 2022 dengan nama ITSNU Kalimantan.</p>\r\n<p style=\"text-align: justify;\">Bidang Pendidikan dan Kesehatan, menjadi prioritas agar NU berkontribusi nyata terhadap masyarakat luas maupun terhadap pemerintah daerah. Dua bidang ini menjadi sumbangsih NU sejak sebelum wujud Pemerintahan Indonesia. Pesantren dan kemudian Madrasah, menjadi ciri khas sumbangan NU untuk pendidikan.</p>\r\n<p style=\"text-align: justify;\">Menangkap sinyal dari Ketua BPP ITSNU tadi, sebagai tantangan adalah kampus berjalan lancar, dan bagaimana Klinik NU bisa berdikari. &ldquo;Maka dari itu, operasional NU harus diserahkan sepenuhnya ke manajemen baru dan dibentuk yayasan khusus tentang itu. Membuat maju atau tidaknya, menjadi urusan penuh Yayasan baru ini. Selanjutnya, kita akan cover legal formalnya didepan Notaris, untuk menegaskan bahwa yayasan dan Klinik beserta aset didalamnya adalah milik NU, bukan milik perorangan. Berganti pengurus pun, aset itu terdaftar milik NU. Jangan ada lagi kejadian, salah satu Madrasah kita awalnya milik NU namun sekarang malah aset milik orang akibat tidak kuat di depan hukum&rdquo; Wahyudi menguraikan.</p>\r\n<p style=\"text-align: justify;\">Warning ini tentu harus diterjemahkan sebagai cara mendisiplinkan aset-aset milik NU baik tingkat wilayah, cabang, Anak Cabang, maupun ranting. Persoalan pemcatatan aset ini maklum kita ketahui bersama, banyak sekali perorangan atau kelompok yang memaklumatkan sebagai milik NU atau pengikut NU tetapi begitu mau dicatatkan sebagai aset NU buru-buru tidak mau.</p>\r\n<p style=\"text-align: justify;\">Tak kalah menarik adalah secara Terpisah, Rektor ITSNU Kalimantan, Dr. Katma F. Dirun, MM menguatkan ketidakbolehan Hopeless yang diungkapkan Ketua BPP ITSNU, H. Nuryakin. Semangat maju harus terpatri, dan harus diyakinkan bahwa ITSNU akan menjadi kampus besar. Kampus yang sudah didirikan penuh perjuangan, pantang untuk surut.</p>\r\n<p style=\"text-align: justify;\">&ldquo;Kita adalah kumpulan energi-energi positif, yang saya yakin ingin pendidikan di kampus ITSNU Kalimantan ini makin berkembang, setahap demi setahap makin maju. Mari kita curahkan energi-energi positif ini menjadi kekuatan, membangun dan menyatukan, maka saya optimis ITSNU ini, dengan kemampuan jaringan sumberdaya yang ada, akan cepat menjadi besar,&rdquo; ungkapnya optimistis, di sesi penutupan workshop sore itu.</p>\r\n<p style=\"text-align: justify;\">Ayo&hellip;energi positif harus mengambil momentumnya. Sinergi &amp; kolaborasi adalah kunci.</p>\r\n<p style=\"text-align: justify;\">#jabaterat<br />#yakinITSNUmaju</p>', 'Sosial', 'Agatha Deolika', 'Ya', 'nu-itu-besar-harus-bisa-berbuat-banyak-catatan-kedua', '.jpg', 352, 'Agatha Deolika', '2023-01-19 20:19:42', '', '2023-01-19 20:19:42', 'Rabu, 14-12-2022', 24);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `id_user`, `id_jurusan`, `nama_dosen`, `nip`, `jabatan`) VALUES
(22, 46, 1, 'Liyando Hermawan Hasibuan S.T., M.kom', '1122019601', 1),
(23, 51, 1, 'Erik Setiawan, ST., MT', '1113099002', 4),
(24, 52, 1, 'Achmad Arif Munaji, ST., M.Kom', '003', 0),
(25, 53, 1, 'Abdurrahman, Spi., M.Ling', '	1123069501', 3),
(26, 54, 1, 'Dorothea Sthallhani Jasi, ST., M.Han', '1124099401', 2),
(27, 55, 1, 'Azrul Azwar, ST., M.Ling', '006', 0),
(28, 56, 1, 'Lutfiah Nur Hasinah, ST., M.Ling', '007', 0),
(29, 57, 1, 'Agatha Deolika, S.Kom., M.Kom', '008', 0),
(30, 58, 1, 'Nadya Chitayae, ST, M.Kom', '009', 0),
(31, 59, 1, 'Damar Angga Saputra, S.Kom., MSi', '010', 0),
(32, 60, 1, 'Airways Parlindugan Siahaan', 'L01', 0),
(33, 61, 1, 'Dr. Nur Widiantoro', 'L02', 0),
(34, 62, 1, 'Omratul Jannah', 'L03', 0),
(35, 94, 1, 'Umratul Jannah, M.Pd', 'L03', 0),
(36, 134, 1, 'Zulfikar Hamzah', 'L04', 0),
(37, 0, 3, 'Ray Kentkhute, S.T., M.Ling', '-', 0),
(38, 0, 4, 'Dr. Ir. H. Abdul Mukti, MP', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_matakuliah` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `tanggal` varchar(225) NOT NULL,
  `jam` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_matakuliah`, `id_dosen`, `id_ruangan`, `tanggal`, `jam`) VALUES
(1, 1, 29, 1, '03/03/2023', '13.00'),
(3, 2, 30, 1, '03/13/2023', '1:00am');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'TEKNIK KOMPUTER'),
(2, 'TEKNIK INDUSTRI'),
(3, 'TEKNIK LINGKUNGAN'),
(4, 'UMUM');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `judul_kategori` varchar(20) NOT NULL,
  `kategori_seo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `judul_kategori`, `kategori_seo`) VALUES
(21, 'andi', ''),
(22, 'badu', ''),
(23, 'badu1', ''),
(24, 'badu1', '');

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `id_khs` int(11) NOT NULL,
  `id_krs` int(11) NOT NULL,
  `absen` varchar(225) NOT NULL,
  `tugas` varchar(225) NOT NULL,
  `uts` varchar(225) NOT NULL,
  `uas` varchar(225) NOT NULL,
  `jumlah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_matakuliah` int(11) NOT NULL,
  `absen` varchar(225) NOT NULL,
  `tugas` varchar(225) NOT NULL,
  `uts` varchar(225) NOT NULL,
  `uas` varchar(225) NOT NULL,
  `hasil` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id_krs`, `id_mahasiswa`, `id_matakuliah`, `absen`, `tugas`, `uts`, `uas`, `hasil`) VALUES
(19, 2, 100, '80', '70', '68', '79', '80'),
(20, 2, 93, '', '', '', '', '44'),
(21, 2, 94, '', '', '', '', '97'),
(22, 2, 95, '', '', '', '', '75'),
(23, 2, 96, '', '', '', '', '49'),
(24, 2, 97, '', '', '', '', '66'),
(25, 2, 98, '', '', '', '', '53'),
(26, 2, 99, '', '', '', '', '85'),
(28, 3, 93, '', '', '', '', '95'),
(29, 3, 94, '', '', '', '', '100'),
(30, 3, 96, '', '', '', '', '79'),
(31, 3, 95, '', '', '', '', '100'),
(32, 3, 97, '', '', '', '', '89'),
(33, 3, 98, '', '', '', '', '82'),
(34, 3, 99, '', '', '', '', '85'),
(35, 3, 100, '', '', '', '', '89'),
(36, 4, 93, '', '', '', '', '94'),
(37, 4, 94, '', '', '', '', '100'),
(38, 4, 95, '', '', '', '', '100'),
(39, 4, 96, '', '', '', '', '80'),
(40, 4, 97, '', '', '', '', '88'),
(41, 4, 98, '', '', '', '', '94'),
(42, 4, 99, '', '', '', '', '87'),
(43, 4, 100, '', '', '', '', '80'),
(44, 5, 93, '', '', '', '', '44'),
(45, 5, 94, '', '', '', '', '65'),
(46, 5, 95, '', '', '', '', '73'),
(47, 5, 96, '', '', '', '', '30'),
(48, 5, 97, '', '', '', '', '44'),
(49, 5, 98, '', '', '', '', '59'),
(50, 5, 99, '', '', '', '', '65'),
(51, 5, 100, '', '', '', '', '9'),
(52, 11, 93, '', '', '', '', '91'),
(53, 11, 94, '', '', '', '', '100'),
(54, 11, 95, '', '', '', '', '100'),
(55, 11, 96, '', '', '', '', '80'),
(56, 11, 97, '', '', '', '', '87'),
(57, 11, 98, '', '', '', '', '88'),
(58, 11, 99, '', '', '', '', '85'),
(59, 11, 100, '', '', '', '', '83'),
(60, 9, 100, '', '', '', '', '5'),
(61, 9, 99, '', '', '', '', '65'),
(62, 9, 98, '', '', '', '', '62'),
(63, 9, 97, '', '', '', '', '46'),
(64, 9, 96, '', '', '', '', '30'),
(65, 9, 95, '', '', '', '', '58'),
(66, 9, 94, '', '', '', '', '50'),
(67, 9, 93, '', '', '', '', '52'),
(68, 18, 75, '', '', '', '', '89'),
(69, 18, 77, '', '', '', '', '82'),
(70, 18, 78, '', '', '', '', '84'),
(71, 18, 79, '', '', '', '', '80'),
(72, 18, 80, '', '', '', '', '90'),
(73, 18, 81, '', '', '', '', '83'),
(74, 18, 83, '', '', '', '', '85'),
(75, 18, 84, '', '', '', '', '68'),
(76, 18, 76, '', '', '', '', '89'),
(77, 18, 82, '', '', '', '', '91'),
(78, 12, 82, '', '', '', '', '88'),
(79, 12, 76, '', '', '', '', '87'),
(80, 12, 84, '', '', '', '', '63'),
(81, 12, 83, '', '', '', '', '85'),
(82, 12, 81, '', '', '', '', '80'),
(83, 12, 80, '', '', '', '', '86'),
(84, 12, 79, '', '', '', '', '78'),
(85, 12, 78, '', '', '', '', '82'),
(86, 12, 77, '', '', '', '', '89'),
(87, 12, 75, '', '', '', '', '81'),
(88, 13, 82, '', '', '', '', '80'),
(89, 13, 76, '', '', '', '', '89'),
(90, 13, 84, '', '', '', '', '66'),
(91, 13, 83, '', '', '', '', '85'),
(92, 13, 81, '', '', '', '', '82'),
(93, 13, 80, '', '', '', '', '77'),
(94, 13, 79, '', '', '', '', '79'),
(95, 13, 78, '', '', '', '', '84'),
(96, 13, 77, '', '', '', '', '87'),
(97, 13, 75, '', '', '', '', '81'),
(98, 14, 82, '', '', '', '', '90'),
(99, 14, 76, '', '', '', '', '89'),
(100, 14, 84, '', '', '', '', '64'),
(101, 14, 83, '', '', '', '', '85'),
(102, 14, 81, '', '', '', '', '83'),
(103, 14, 80, '', '', '', '', '89'),
(104, 14, 79, '', '', '', '', '79'),
(105, 14, 78, '', '', '', '', '82'),
(106, 14, 77, '', '', '', '', '86'),
(107, 14, 75, '', '', '', '', '84'),
(108, 15, 82, '', '', '', '', ''),
(109, 15, 76, '', '', '', '', ''),
(110, 15, 84, '', '', '', '', ''),
(111, 15, 83, '', '', '', '', ''),
(112, 15, 81, '', '', '', '', ''),
(113, 15, 80, '', '', '', '', ''),
(114, 15, 79, '', '', '', '', ''),
(115, 15, 78, '', '', '', '', ''),
(116, 15, 77, '', '', '', '', ''),
(117, 15, 75, '', '', '', '', ''),
(118, 16, 82, '', '', '', '', '92'),
(119, 16, 76, '', '', '', '', '89'),
(120, 16, 84, '', '', '', '', '76'),
(121, 16, 83, '', '', '', '', '85'),
(122, 16, 81, '', '', '', '', '82'),
(123, 16, 80, '', '', '', '', '87'),
(124, 16, 79, '', '', '', '', '79'),
(125, 16, 78, '', '', '', '', '82'),
(126, 16, 77, '', '', '', '', '92'),
(127, 16, 75, '', '', '', '', '75'),
(128, 17, 82, '', '', '', '', '90'),
(129, 17, 76, '', '', '', '', '89'),
(130, 17, 84, '', '', '', '', '69'),
(131, 17, 83, '', '', '', '', '76'),
(132, 17, 81, '', '', '', '', '81'),
(133, 17, 80, '', '', '', '', '84'),
(134, 17, 79, '', '', '', '', '77'),
(135, 17, 78, '', '', '', '', '83'),
(136, 17, 77, '', '', '', '', '83'),
(137, 17, 75, '', '', '', '', '87'),
(138, 19, 82, '', '', '', '', '89'),
(139, 19, 76, '', '', '', '', '95'),
(140, 19, 84, '', '', '', '', '78'),
(141, 19, 83, '', '', '', '', '85'),
(142, 19, 81, '', '', '', '', '81'),
(143, 19, 80, '', '', '', '', '80'),
(144, 19, 79, '', '', '', '', '79'),
(145, 19, 78, '', '', '', '', '83'),
(146, 19, 77, '', '', '', '', '86'),
(147, 19, 75, '', '', '', '', '85'),
(148, 20, 82, '', '', '', '', '92'),
(149, 20, 76, '', '', '', '', '89'),
(150, 20, 84, '', '', '', '', '66'),
(151, 20, 83, '', '', '', '', '85'),
(152, 20, 81, '', '', '', '', '83'),
(153, 20, 80, '', '', '', '', '88'),
(154, 20, 79, '', '', '', '', '82'),
(155, 20, 78, '', '', '', '', '84'),
(156, 20, 77, '', '', '', '', '96'),
(157, 20, 75, '', '', '', '', '85'),
(158, 21, 82, '', '', '', '', ''),
(159, 21, 76, '', '', '', '', ''),
(160, 21, 84, '', '', '', '', ''),
(161, 21, 83, '', '', '', '', ''),
(162, 21, 81, '', '', '', '', ''),
(163, 21, 80, '', '', '', '', ''),
(164, 21, 79, '', '', '', '', ''),
(165, 21, 78, '', '', '', '', ''),
(166, 21, 77, '', '', '', '', ''),
(167, 21, 75, '', '', '', '', ''),
(168, 23, 85, '', '', '', '', '100'),
(169, 23, 86, '', '', '', '', ''),
(170, 23, 87, '', '', '', '', '75'),
(171, 23, 88, '', '', '', '', ''),
(172, 23, 89, '', '', '', '', '85'),
(173, 23, 90, '', '', '', '', '82'),
(174, 23, 91, '', '', '', '', '85'),
(175, 23, 92, '', '', '', '', '85'),
(176, 22, 91, '', '', '', '', '23'),
(177, 22, 90, '', '', '', '', '70'),
(178, 22, 89, '', '', '', '', '51'),
(179, 22, 88, '', '', '', '', ''),
(180, 22, 87, '', '', '', '', '18'),
(181, 22, 86, '', '', '', '', ''),
(182, 22, 85, '', '', '', '', '62'),
(183, 25, 92, '', '', '', '', '85'),
(184, 25, 91, '', '', '', '', '54'),
(185, 25, 89, '', '', '', '', '51'),
(186, 25, 88, '', '', '', '', ''),
(187, 25, 87, '', '', '', '', '60'),
(188, 25, 86, '', '', '', '', ''),
(189, 25, 85, '', '', '', '', '62'),
(190, 1, 92, '', '', '', '', '85'),
(191, 1, 91, '', '', '', '', '85'),
(192, 1, 90, '', '', '', '', '82'),
(193, 1, 89, '', '', '', '', '74'),
(194, 1, 88, '', '', '', '', ''),
(195, 1, 87, '', '', '', '', '75'),
(196, 1, 86, '', '', '', '', ''),
(197, 1, 85, '', '', '', '', '100'),
(198, 27, 92, '', '', '', '', '85'),
(199, 27, 91, '', '', '', '', '85'),
(200, 27, 90, '', '', '', '', '85'),
(201, 27, 89, '', '', '', '', '85'),
(202, 27, 88, '', '', '', '', ''),
(203, 27, 87, '', '', '', '', '79'),
(204, 27, 86, '', '', '', '', ''),
(205, 27, 85, '', '', '', '', '100'),
(206, 29, 82, '', '', '', '', '90'),
(207, 29, 76, '', '', '', '', '87'),
(208, 29, 84, '', '', '', '', '63'),
(209, 29, 83, '', '', '', '', '85'),
(210, 29, 81, '', '', '', '', '84'),
(211, 29, 80, '', '', '', '', '88'),
(212, 29, 79, '', '', '', '', '84'),
(213, 29, 78, '', '', '', '', '85'),
(214, 29, 77, '', '', '', '', '87'),
(215, 29, 75, '', '', '', '', '85'),
(216, 30, 82, '', '', '', '', '91'),
(217, 30, 76, '', '', '', '', '89'),
(218, 30, 84, '', '', '', '', '68'),
(219, 30, 83, '', '', '', '', '85'),
(220, 30, 81, '', '', '', '', '81'),
(221, 30, 80, '', '', '', '', '87'),
(222, 30, 79, '', '', '', '', '84'),
(223, 30, 78, '', '', '', '', '83'),
(224, 30, 77, '', '', '', '', '87'),
(225, 30, 75, '', '', '', '', '85'),
(226, 31, 82, '', '', '', '', '89'),
(227, 31, 76, '', '', '', '', '90'),
(228, 31, 84, '', '', '', '', '66'),
(229, 31, 83, '', '', '', '', '78'),
(230, 31, 81, '', '', '', '', '85'),
(231, 31, 80, '', '', '', '', '85'),
(232, 31, 79, '', '', '', '', '79'),
(233, 31, 78, '', '', '', '', '84'),
(234, 31, 77, '', '', '', '', '87'),
(235, 31, 75, '', '', '', '', '83'),
(236, 6, 100, '', '', '', '', '89'),
(237, 6, 93, '', '', '', '', '92'),
(238, 6, 95, '', '', '', '', '100'),
(239, 6, 96, '', '', '', '', '80'),
(240, 6, 97, '', '', '', '', '83'),
(241, 6, 98, '', '', '', '', '88'),
(242, 6, 99, '', '', '', '', '85'),
(244, 6, 94, '', '', '', '', '100'),
(245, 7, 94, '', '', '', '', '100'),
(246, 7, 99, '', '', '', '', '85'),
(247, 7, 98, '', '', '', '', '88'),
(248, 7, 97, '', '', '', '', '89'),
(249, 7, 96, '', '', '', '', '80'),
(250, 7, 95, '', '', '', '', '100'),
(251, 7, 93, '', '', '', '', '94'),
(252, 7, 100, '', '', '', '', '88'),
(253, 39, 25, '', '', '', '', '80'),
(254, 39, 31, '', '', '', '', ''),
(255, 39, 103, '', '', '', '', '79'),
(256, 39, 107, '', '', '', '', '60'),
(257, 39, 30, '', '', '', '', '76'),
(258, 39, 22, '', '', '', '', '82'),
(259, 39, 24, '', '', '', '', '92'),
(260, 39, 104, '', '', '', '', '80'),
(262, 40, 104, '', '', '', '', '96'),
(263, 40, 24, '', '', '', '', '91'),
(264, 40, 22, '', '', '', '', '94'),
(265, 40, 30, '', '', '', '', '81'),
(266, 40, 107, '', '', '', '', '83'),
(267, 40, 103, '', '', '', '', '88'),
(268, 40, 31, '', '', '', '', ''),
(269, 40, 25, '', '', '', '', '82'),
(270, 33, 102, '', '', '', '', '82'),
(271, 33, 106, '', '', '', '', '90'),
(272, 33, 26, '', '', '', '', '82'),
(273, 33, 21, '', '', '', '', '75'),
(274, 33, 18, '', '', '', '', '89'),
(275, 33, 109, '', '', '', '', '92'),
(276, 33, 110, '', '', '', '', '85'),
(277, 34, 110, '', '', '', '', '82'),
(278, 34, 109, '', '', '', '', '91'),
(279, 34, 18, '', '', '', '', '89'),
(280, 34, 21, '', '', '', '', '83'),
(281, 34, 26, '', '', '', '', '71'),
(282, 34, 106, '', '', '', '', '90'),
(283, 34, 102, '', '', '', '', '88'),
(284, 35, 110, '', '', '', '', '82'),
(285, 35, 109, '', '', '', '', '91'),
(286, 35, 18, '', '', '', '', '84'),
(287, 35, 21, '', '', '', '', '76'),
(288, 35, 26, '', '', '', '', '60'),
(289, 35, 106, '', '', '', '', '90'),
(290, 35, 102, '', '', '', '', '88'),
(291, 36, 110, '', '', '', '', '80'),
(292, 36, 109, '', '', '', '', '92'),
(293, 36, 18, '', '', '', '', '75'),
(294, 36, 21, '', '', '', '', '64'),
(295, 36, 26, '', '', '', '', '63'),
(296, 36, 106, '', '', '', '', '80'),
(297, 36, 102, '', '', '', '', '88'),
(298, 37, 110, '', '', '', '', '78'),
(299, 37, 109, '', '', '', '', '92'),
(300, 37, 18, '', '', '', '', '86'),
(301, 37, 21, '', '', '', '', '64'),
(302, 37, 26, '', '', '', '', '55'),
(303, 37, 106, '', '', '', '', '80'),
(304, 37, 102, '', '', '', '', '88'),
(305, 38, 110, '', '', '', '', '85'),
(306, 38, 109, '', '', '', '', '93'),
(307, 38, 18, '', '', '', '', '89'),
(308, 38, 21, '', '', '', '', '78'),
(309, 38, 26, '', '', '', '', '73'),
(310, 38, 106, '', '', '', '', '92'),
(311, 38, 102, '', '', '', '', '88'),
(312, 41, 101, '', '', '', '', '85'),
(313, 41, 105, '', '', '', '', '83'),
(314, 41, 20, '', '', '', '', '81'),
(315, 41, 19, '', '', '', '', ''),
(316, 41, 108, '', '', '', '', '91'),
(317, 41, 111, '', '', '', '', '83'),
(318, 41, 35, '', '', '', '', '88'),
(319, 41, 29, '', '', '', '', '80'),
(320, 42, 29, '', '', '', '', '73'),
(321, 42, 35, '', '', '', '', '73'),
(322, 42, 111, '', '', '', '', '78'),
(323, 42, 108, '', '', '', '', '79'),
(324, 42, 19, '', '', '', '', ''),
(325, 42, 20, '', '', '', '', '57'),
(326, 42, 105, '', '', '', '', '56'),
(327, 42, 101, '', '', '', '', '71'),
(328, 43, 29, '', '', '', '', '71'),
(329, 43, 35, '', '', '', '', '68'),
(330, 43, 111, '', '', '', '', '80'),
(331, 43, 108, '', '', '', '', '77'),
(332, 43, 19, '', '', '', '', ''),
(333, 43, 20, '', '', '', '', '57'),
(334, 43, 105, '', '', '', '', '49'),
(335, 43, 101, '', '', '', '', '68'),
(336, 44, 29, '', '', '', '', '73'),
(337, 44, 35, '', '', '', '', '68'),
(338, 44, 111, '', '', '', '', '78'),
(339, 44, 108, '', '', '', '', '81'),
(340, 44, 19, '', '', '', '', ''),
(341, 44, 20, '', '', '', '', '57'),
(342, 44, 105, '', '', '', '', '49'),
(343, 44, 101, '', '', '', '', '68'),
(344, 45, 29, '', '', '', '', '73'),
(345, 45, 35, '', '', '', '', '68'),
(346, 45, 111, '', '', '', '', '78'),
(347, 45, 108, '', '', '', '', '79'),
(348, 45, 19, '', '', '', '', ''),
(349, 45, 20, '', '', '', '', '57'),
(350, 45, 105, '', '', '', '', '49'),
(351, 45, 101, '', '', '', '', '68'),
(352, 39, 17, '', '', '', '', '68'),
(353, 40, 17, '', '', '', '', '83'),
(354, 2, 17, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `id_user`, `id_jurusan`, `nama`, `nim`) VALUES
(1, 103, 2, 'ARIFIN SAPUTRA RIANI', '22101001008'),
(2, 104, 1, 'MUHAMAD PARHAN SUSILO', '22103001002'),
(3, 105, 1, 'MUHAMMAD IQBAL', '22103001003'),
(4, 106, 1, 'MUHAMMAD NOR ARIPIN', '22103001004'),
(5, 107, 1, 'MUHAMMAD YUSRON NASHRULLOH', '22103001005'),
(6, 108, 1, 'RAITA RAHMATINA', '22103001006'),
(7, 109, 1, 'RIZKI SAPUTRA', '22103001007'),
(9, 111, 1, 'MUHAMMAD ARLIANTO', '22103001009'),
(11, 113, 1, 'NELLYANA SAFITRI', '22103001011'),
(12, 114, 3, 'ADE IRFAN SYAHRIL RAMADHAN', '22102001001'),
(13, 115, 3, 'DYAH NURVITASARI', '22102001002'),
(14, 116, 3, 'HIDAYATULLAH', '22102001003'),
(15, 117, 3, 'M. DAVI AKBAR', '22102001004'),
(16, 118, 3, 'MUHAMMAD SYAUQI', '22102001005'),
(17, 119, 3, 'HALIMATUS SA\'DIYAH', '22102001006'),
(18, 120, 3, 'NUR HASANAH', '22102001007'),
(19, 121, 3, 'MUHAMMAD VIKI FIRDAUS', '22102001008'),
(20, 122, 3, 'NISA AFRILLISKA', '22102001009'),
(21, 123, 3, 'SURYANI AHMAD', '22102001010'),
(22, 124, 2, 'RAHMAT SAIPUL', '22101001001'),
(23, 125, 2, 'MUHAMMAD IQBAL', '22101001002'),
(24, 126, 2, 'SITI MUNAWAROH', '22101001003'),
(25, 127, 2, 'FAZRI ARROZAQ', '22101001004'),
(26, 128, 2, 'AHMAD RIZKI ADITYA', '22101001005'),
(27, 129, 2, 'RESKY ANGELINA SAPUTRI', '22101001006'),
(28, 130, 2, 'RANGGA ARIA YUDA', '22101001007'),
(29, 131, 3, 'YULIANTI', '22102001011'),
(30, 132, 3, 'AMELIA VIOLINA PUTRI', '22102001012'),
(31, 133, 3, 'ADIS PAULINA PUTRI', '22102001013'),
(32, 135, 3, 'DODI', '22102001014'),
(33, 0, 3, 'DANISH RIO WAHYUDI\r\n', '23102001001'),
(34, 0, 3, 'HERLINA', '23102001002'),
(35, 0, 3, 'MUHAMAD AULIA RISKI\r\n', '23102001003'),
(36, 0, 3, 'MUHAMMAD WIBI\r\n', '23102001004'),
(37, 0, 3, 'RYAN MANAN \r\n', '23102001005'),
(38, 0, 3, 'SARMILA \r\n', '23102001006'),
(39, 0, 1, 'DEA AMANDA', '23103001001'),
(40, 0, 1, 'NOR AISYAH\r\n', '23103001002'),
(41, 0, 2, 'MUFTI HAFIDHI\r\n', '23101001001'),
(42, 0, 2, 'PUTRI SASMITA DEWI\r\n', '23101001002'),
(43, 0, 2, 'RIFKY FIRDAUS\r\n', '23101001003'),
(44, 0, 2, 'NORPARMITASARI\r\n', '23101001004'),
(45, 0, 2, 'YUYUN AYOMI\r\n', '23101001005');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matakuliah` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `kode` varchar(225) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `semester` varchar(225) NOT NULL,
  `sks` int(11) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matakuliah`, `id_dosen`, `kode`, `matakuliah`, `jurusan`, `semester`, `sks`, `hari`, `jam`) VALUES
(17, 23, 'TKOM030101', 'Pengantar Teknik Komputer', 1, '1', 2, 'senin', '14.00 â€“ 16.30'),
(18, 25, 'TLIN050101', 'Pengantar Teknik Lingkungan', 3, '1', 2, 'senin', '14.00 â€“ 16.30'),
(19, 26, 'TIND050101', 'Pengantar Teknik Industri', 2, '1', 2, 'senin', '15.50 â€“ 17.30 '),
(20, 32, 'TIND030101', 'Menggambar Teknik', 2, '1', 2, 'senin', '14.00 â€“ 15.40'),
(21, 25, 'TLIN040101', 'Analisis Pencemaran Lingkungan', 3, '1', 3, 'selasa', '14.00 â€“ 16.30'),
(22, 29, 'TKOM050101', 'Logika Digital + Lab', 1, '1', 3, 'selasa', '13.00 â€“ 15.30'),
(24, 33, 'MKUK060101', 'Pendidikan Agama', 4, '1', 2, 'rabu', '14.00 â€“ 15.40'),
(25, 35, 'MKUK070101', 'Bahasa Inggris', 4, '1', 2, 'rabu', '15.50 â€“ 17.30 '),
(26, 28, 'TLIN030101', 'Kimia Dasar ', 3, '1', 3, 'kamis', '15.40 â€“ 17.20'),
(29, 26, 'TIND040101', 'Material Teknik ', 2, '1', 2, 'jumat', '15.40 â€“ 17.20'),
(30, 29, 'TKOM040101', 'Pengantar Rekayasa dan Desain', 1, '1', 2, 'jumat', '15.40 â€“ 17.20'),
(35, 31, 'TIND080101', 'Pengantar Ekonomika ', 2, '1', 3, 'selasa', '14.00 â€“ 16.30'),
(44, 26, 'TIND130201', 'PRAKTIKUM MENGGAMBAR TEKNIK', 2, '2', 1, '', ''),
(45, 26, 'TIND120201', 'MEKANIKA TEKNIK', 2, '2', 3, '', ''),
(46, 26, 'TIND090201', 'ERGONOMIKA', 2, '2', 3, '', ''),
(47, 26, 'TIND160201', 'STATISTIK INDUSTRI I', 2, '2', 3, '', ''),
(48, 26, 'TIND140201', 'PRAKTIKUM FISIKA DAN MATERIAL TEKNIK', 2, '2', 1, '', ''),
(49, 22, 'TIND100201', 'KALKULUS II', 4, '2', 3, '', ''),
(50, 22, 'MKUI110201', 'KE NU AN', 4, '2', 2, '', ''),
(51, 22, 'MKUI150201', 'PANCASILA DAN KEWARGANEGARAAN', 2, '2', 2, '', ''),
(52, 25, 'TLIN120201\r\n', 'ILMU SOSIAL BUDAYA DASAR', 3, '2', 2, '', ''),
(53, 25, 'TLIN090201\r\n', 'HIDROLOGI DAN GEOHIDROLOGI', 3, '2', 3, '', ''),
(54, 25, 'TLIN080201', 'FISIKA LINGKUNGAN', 3, '2', 2, '', ''),
(55, 25, 'TLIN260402\r\n', 'EKOLOGI PERAIRAN RAWA', 3, '2', 2, '', ''),
(56, 25, 'TLIN270402\r\n', 'PENGELOLAAN SUMBERDAYA AIR', 3, '2', 2, '', ''),
(57, 25, 'TLIN140201\r\n', 'MENGGAMBAR TEKNIK I', 3, '2', 2, '', ''),
(58, 25, 'TLIN160201\r\n', 'MEKANIKA TANAH DAN PONDASI', 3, '2', 2, '', ''),
(59, 25, 'TLIN130201\r\n', 'KIMIA LINGKUNGAN', 3, '2', 2, '', ''),
(60, 22, 'TKOM130201\r\n', 'PENGANTAR DESAIN DIGITAL', 1, '2', 3, '', ''),
(61, 22, 'TKOM140201\r\n', 'PEMROGRAMAN II', 1, '2', 3, '', ''),
(62, 22, 'TKOM250402\r\n', 'ARTIFICIAL INTELLIGENCE', 1, '2', 3, '', ''),
(63, 22, 'TKOM120201\r\n', 'FISIKA II', 1, '2', 3, '', ''),
(64, 22, 'TKOM160201\r\n', 'SISTEM OPERASI', 1, '2', 3, '', ''),
(65, 22, 'TKOM110201\r\n', 'KALKULUS II', 1, '2', 3, '', ''),
(66, 22, 'TKOM150201\r\n', 'TECHNOPRENEURSHIP', 1, '2', 2, '', ''),
(75, 27, 'TLIN170302', 'PENGETAHUAN STRUKTUR ', 3, '3', 2, '', ''),
(76, 23, 'TLIN180302', 'STATISTIKA', 3, '3', 2, '', ''),
(77, 37, 'TLIN190302', 'PENGELOLAAN LIMBAH B3', 3, '3', 3, '', ''),
(78, 31, 'TLIN200302', 'MEKANIKA FLUIDA/HIDROLIKA', 3, '3', 2, '', ''),
(79, 25, 'TLIN210302', 'TEKNOLOGI LINGKUNGAN TEPAT GUNA ', 3, '3', 2, '', ''),
(80, 37, 'TLIN220302', 'KESEHATAN DAN KESELAMATAN KERJA (K3) ', 3, '3', 2, '', ''),
(81, 31, 'TLIN230302', 'PEMODELAN TEKNIK LINGKUNGAN (PERPETAAN)', 3, '3', 2, '', ''),
(82, 25, 'TLIN240302', 'BIOLOGI DAN MIKROBIOLOGI LINGKUNGAN ', 3, '3', 2, '', ''),
(83, 38, 'MKUL250302', 'BAHASA INDONESIA', 3, '3', 2, '', ''),
(84, 32, 'TLIN260302', 'MENGGAMBAR TEKNIK II', 3, '3', 2, '', ''),
(85, 22, 'TIND170302', 'Aljabar Linear', 2, '3', 3, '', ''),
(86, 26, 'TIND180302', 'Perilaku Organisasi', 2, '3', 2, '', ''),
(87, 32, 'TIND190302', 'Proses Manufaktur', 2, '3', 2, '', ''),
(88, 26, 'TIND200302', 'Pengukuran dan Perancangan Sistem Kerja', 2, '3', 3, '', ''),
(89, 23, 'TIND210302', 'Pemrograman Komputer', 2, '3', 3, '', ''),
(90, 29, 'TIND220302', 'Mekatronika', 2, '3', 2, '', ''),
(91, 23, 'TIND230302', 'Statistik Industri II', 2, '3', 3, '', ''),
(92, 38, 'MKUI240302', 'BAHASA INDONESIA', 2, '3', 2, '', ''),
(93, 23, 'TKOM170302', 'PROBABILITAS DAN STATISTIK', 1, '3', 3, '', ''),
(94, 22, 'TKOM180302', 'PENGOLAHAN SINYAL + LAB', 1, '3', 3, '', ''),
(95, 22, 'TKOM190302', 'ANALISIS NUMERIK', 1, '3', 3, '', ''),
(96, 30, 'TKOM200302', 'INTERAKSI MANUSIA KOMPUTER', 1, '3', 3, '', ''),
(97, 29, 'TKOM210302', 'ORGANISASI DAN ARSITEKTUR KOMPUTER', 1, '3', 3, '', ''),
(98, 24, 'TKOM220302', 'ALGORITMA DAN STRUKTUR DATA + LAB', 1, '3', 3, '', ''),
(99, 38, 'MKUK230302', 'BAHASA INDONESIA', 1, '3', 2, '', ''),
(100, 25, 'TKOM240302', 'BIOLOGI', 1, '3', 3, '', ''),
(101, 22, 'TIND010101', 'KALKULUS I', 2, '1', 3, '', ''),
(102, 22, 'TLIN010101', 'KALKULUS I', 3, '1', 3, '', ''),
(103, 22, 'TKOM010101', 'KALKULUS I', 1, '1', 3, '', ''),
(104, 24, 'TKOM080101', 'PEMROGRAMAN I + LAB', 1, '1', 3, '', ''),
(105, 28, 'TIND20101', 'FISIKA I', 2, '1', 3, '', ''),
(106, 28, 'TLIN20101', 'FISIKA I', 3, '1', 3, '', ''),
(107, 28, 'TKOM20101', 'FISIKA I', 1, '1', 3, '', ''),
(108, 33, 'MKUI060101', 'Pendidikan Agama', 4, '1', 2, 'rabu', '14.00 â€“ 15.40'),
(109, 33, 'MKUL060101', 'Pendidikan Agama', 4, '1', 2, 'rabu', '14.00 â€“ 15.40'),
(110, 35, 'MKUL070101', 'Bahasa Inggris', 4, '1', 2, 'rabu', '15.50 â€“ 17.30 '),
(111, 35, 'MKUI070101', 'Bahasa Inggris', 4, '1', 2, 'rabu', '15.50 â€“ 17.30 ');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `absen` varchar(225) NOT NULL,
  `tugas` varchar(225) NOT NULL,
  `uts` varchar(225) NOT NULL,
  `uas` varchar(225) NOT NULL,
  `jumlah` varchar(225) NOT NULL,
  `hasil` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pertemuan`
--

CREATE TABLE `pertemuan` (
  `id_pertemuan` int(11) NOT NULL,
  `id_matakuliah` int(11) NOT NULL,
  `code_qr` varchar(225) NOT NULL,
  `status` int(11) NOT NULL,
  `pertemuan` varchar(225) NOT NULL,
  `capaian` text NOT NULL,
  `bahan` text NOT NULL,
  `metode` text NOT NULL,
  `pengalaman` text NOT NULL,
  `ref` text NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `tanggal` varchar(225) NOT NULL,
  `jam_1` varchar(225) NOT NULL,
  `jam_2` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertemuan`
--

INSERT INTO `pertemuan` (`id_pertemuan`, `id_matakuliah`, `code_qr`, `status`, `pertemuan`, `capaian`, `bahan`, `metode`, `pengalaman`, `ref`, `jenis`, `tanggal`, `jam_1`, `jam_2`) VALUES
(11, 2, 'EDtb4B8GlcwT6fqIY392', 0, '1', 'Merumuskan pilihan teknik kecerdasan buatan berdasarkan konsepnya', 'a.	Teori dasar kecerdasan buatan \r\nb.	Konsep kecerdasan buatan\r\nc.	Ranah kecerdasan buatan\r\n', 'Pengajaran, dsikusi, dan project assignment', 'Mahasiswa mendiskusikan dan menjelaskan contoh konsep dan teori kecerdasan buatan.', 'Budiharto, W., dan derwin S., 2014, artificial intelligence konsep dan penerapannya, andi : yogyakarta ', 'Tatap Muka', '02/27/2023', '12:00pm', '1:00pm'),
(13, 1, 'QSd6V3awYtl9r4XpoAhT', 0, '1', 'Merumuskan pilihan teknik kecerdasan buatan berdasarkan sistem penggunaannya', 'a.	Sistem pakar\r\nb.	Sistem kecerdasan buatan\r\nc.	Sistem Konvensiona\r\n', 'Simulasi, inquiry, dan forum', 'Mahasiswa mendiskusikan dan menjelaskan perbedaan sistem pada kecerdasan buatan.', 'Daniel Mikelsten, Vasil Teigens, dan Peter Skalfist. 2020. Kecerdasan Buatan: Revolusi Industri Keempat. Cambridge Stanford Books', 'Tatap Muka', '03/02/2023', '9:00am', '11:00pm'),
(14, 1, 'Typart8qLuHMEFDvWNf0', 0, '2', 'Menjelaskan proses kerja mesin inferensi', 'Proses kerja mesin inferensi', 'Pengajaran, kuis, tanya jawab', 'Mahasiswa mendiskusikan laporan pembelajaran.', 'Daniel Mikelsten, Vasil Teigens, dan Peter Skalfist. 2020. Kecerdasan Buatan: Revolusi Industri Keempat. Cambridge Stanford Books', 'Daring', '03/10/2023', '11:00am', '1:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `ruangan` varchar(225) NOT NULL,
  `jumlah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `ruangan`, `jumlah`) VALUES
(1, 'A', '40'),
(2, 'B', '40'),
(3, 'C', '40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'Umratul', 'Umratul', 'admin'),
(46, 'liyando', 'liyando', 'dosen'),
(51, 'erik', 'erik', 'dosen'),
(52, 'arif', 'arif', 'dosen'),
(53, 'abdurrahman', 'abdurrahman', 'dosen'),
(54, 'jasi', 'jasi', 'dosen'),
(55, 'azrul', 'azrul', 'dosen'),
(56, 'lutfiah', 'lutfiah', 'dosen'),
(57, 'agatha', 'agatha', 'dosen'),
(58, 'nadya', 'nadya', 'dosen'),
(59, 'damar', 'damar', 'dosen'),
(60, 'parlindungan', 'parlindungan', 'dosen'),
(61, 'widiantoro', 'widiantoro', 'dosen'),
(94, 'Umratul', 'Umratul', 'dosen'),
(103, '22101001008', '22101001008', 'mahasiswa'),
(104, '22103001002', '22103001002', 'mahasiswa'),
(105, '22103001003', '22103001003', 'mahasiswa'),
(106, '22103001004', '22103001004', 'mahasiswa'),
(107, '22103001005', '22103001005', 'mahasiswa'),
(108, '22103001006', '22103001006', 'mahasiswa'),
(109, '22103001007', '22103001007', 'mahasiswa'),
(110, '22103001008', '22103001008', 'mahasiswa'),
(111, '22103001009', '22103001009', 'mahasiswa'),
(112, '22103001010', '22103001010', 'mahasiswa'),
(113, '22103001011', '22103001011', 'mahasiswa'),
(114, '22102001001', '22102001001', 'mahasiswa'),
(115, '22102001002', '22102001002', 'mahasiswa'),
(116, '22102001003', '22102001003', 'mahasiswa'),
(117, '22102001004', '22102001004', 'mahasiswa'),
(118, '22102001005', '22102001005', 'mahasiswa'),
(119, '22102001006', '22102001006', 'mahasiswa'),
(120, '22102001007', '22102001007', 'mahasiswa'),
(121, '22102001008', '22102001008', 'mahasiswa'),
(122, '22102001009', '22102001009', 'mahasiswa'),
(123, '22102001010', '22102001010', 'mahasiswa'),
(124, '22101001001', '22101001001', 'mahasiswa'),
(125, '22101001002', '22101001002', 'mahasiswa'),
(126, '22101001003', '22101001003', 'mahasiswa'),
(127, '22101001004', '22101001004', 'mahasiswa'),
(128, '22101001005', '22101001005', 'mahasiswa'),
(129, '22101001006', '22101001006', 'mahasiswa'),
(130, '22101001007', '22101001007', 'mahasiswa'),
(131, '22102001011', '22102001011', 'mahasiswa'),
(132, '22102001012', '22102001012', 'mahasiswa'),
(133, '22102001013', '22102001013', 'mahasiswa'),
(134, 'zulfikar', 'zulfikar', 'dosen'),
(135, '22102001014', '22102001014', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `usertype` char(10) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` datetime DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`, `phone`, `alamat`, `usertype`, `ip_address`, `salt`, `active`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `last_login`, `created_on`) VALUES
(13, 'Agatha Deolika', 'Agatha Deolika', '$2y$08$lmAxXzo0YXz7wIwuCnA40ezMzSnaORD6iOt1Lhs4rLiXf1blsGPMy', 'agatha_damian@yahoo.co.id', '082255486525', 'jl.trikora', 'superadmin', '::1', NULL, 1, '36907e75f5d5fad6e8b6792e13cf8e1db9404b20', NULL, NULL, 'tbobTDva38LpnYs8Pu3kWe', '2024-01-26 10:03:34', '2017-03-29 17:56:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`id_khs`),
  ADD KEY `id_krs` (`id_krs`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`),
  ADD KEY `id_jurusan` (`id_matakuliah`),
  ADD KEY `id_matakuliah` (`id_matakuliah`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD PRIMARY KEY (`id_pertemuan`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `khs`
--
ALTER TABLE `khs`
  MODIFY `id_khs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pertemuan`
--
ALTER TABLE `pertemuan`
  MODIFY `id_pertemuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
