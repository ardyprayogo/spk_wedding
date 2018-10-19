-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 01:11 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `pass`, `email`) VALUES
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `g_id` int(11) NOT NULL,
  `g_title` varchar(225) NOT NULL,
  `g_content` text NOT NULL,
  `g_img` varchar(225) NOT NULL,
  `g_img_parent` varchar(225) NOT NULL,
  `g_parent_content` varchar(225) NOT NULL,
  `g_date_insert` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_title`, `g_content`, `g_img`, `g_img_parent`, `g_parent_content`, `g_date_insert`) VALUES
(1, 'Sunda', 'Pengantin Sunda putri memancarkan keanggunan dengan Sanggul puspasari yang hadir dengan tujuh buah kembang goyang sebagai hiasan, lima diantaranya dipasang menghadap ke depan, sementara dua lainnya menghadap ke belakang. Mahkota kecil disematkan tepat di tengah di depan kembang goyang. Mangle atau ronce bunga tersusun indah menghias sanggul, sebanyak enam susun menggantung di sisi telinga kiri, dan tujuh susun menjuntai hingga ke dada sebelah kanan. Sedangkan pengantin pria menggunakan bendo atau blangkon Sunda bermotif sama dengan kain yang dikenakan, dengan bros tersemat di sisi depan. Keris dengan ombyok melati  terselip di sabuk. Tali bodong atau kalung imitasi dan ronce bunga melati tergantung di leher menghiasi dada hingga ke pinggang.\n</p>', 'sunda-full.jpg', 'sunda-thumbnail.jpg', 'Pengantin Adat Sunda', '2018-09-30'),
(2, 'Solo Putri', 'Ciri khas pengantin wanita yaitu adanya paes di dahi yang terdiri dari empat bentuk yaitu gajahan, pangapit, penitis, dan godheg, hiasan rambut menggunakan sanggul menyerupai bokor tengkurap. Tak lupa hiasan ronce melati, kembang goyang, dan pin rambut bernama sundhuk muntul.\nSedangkan pada pengantin pria memakai Beskap Jawa resmi dengan bentuk tidak berkerah lipat, dipadankan dengan kain batik bermotif serasi seperti yang dikenakan mempelai wanita dengan hiasan kepala menggunakan blangkon. Aksesoris lain untuk yakni bros dada, kalung rangkaian melati, sertai keris ladrang berhias untaian melati.\n</p>', 'solo-full.jpg', 'solo-thumbnail.jpg', 'Pengantin Adat Solo Putri', '2018-09-30'),
(3, 'Batak Mandailing', 'Mahkota menyerupai tanduk kerbau, yang biasa disebut bulang, tinggi menjulang berpadu indah dengan baju godang atau baju kurung hitam bersulam ragam hias keemasan dipadankan dengan kain songket Sipirok atau ulos dari Tapanuli Selatan, dilengkapi dua helai selendang atau ulos tonun patani (tenunan petani) yang diselempangkan dari bahu hingga pinggang. Tinggi rendahnya bulang menunjukkan tingkat sosial pemakainya. \nPengantin pria pun memiliki tutup kepala yang khas, yang disebut ampu/hampu \n</p>', 'Batak mandailing-full.jpg', 'Batak mandailing-thumbnail.jpg', 'Pengantin Adat Batak Mandailing', '2018-09-30'),
(4, 'Padang', 'Aura cantik dan elegan yang menebar dari mahkota bernama sunting ini memang memikat. Tak heran, para anak daro Minang rela menahan beratnya demi untuk tampil cantik di hari istimewa. Sekitar 9-11 tingkat sunting yang dikenakan oleh pengantin dengan berat minimal 1 kg.\nDitambah dengan busana berwarna khas warna merah keemasan yang serasi, pengantin pria Padang tak banyak ornamen yang tersemat, hanya penutup kepala berupa destar ikat (deta ikek), berhias manik-manik bunga cempaka dengan warna keemasan menemani penampilannya. </p>', 'Padang-full.png', 'Padang-thumbnail.png', '', '2018-09-30'),
(5, 'Lampung', 'Perhiasan yang dikenakan pengantin wanita sama persis dengan pengantin wanita Abung, mulai dari siger suhun sebagai mahkota, kalung dan juga gelang.\nPengantin pria dikenakan kopiah mas/ siger sebagai penutup kepala. Menyilang di dada dipasang buah jukum, lalu kalung papang jajar, sabik inuh dan sabik buluh. Sama seperti pengantin Abung, pengantin pria juga mengenakan gelang burung dan gelang kano. Serta terapang tersemat di pinggang yang kemudian dilapis atau dihias dengan selendang andak.\n</p>', 'Lampung-full.jpg', 'Lampung-thumbnail.jpg', '', '2018-09-30'),
(6, 'Jogja Putri', 'Paes yang membingkai wajah ayu menjadi salah satu ciri khas pengantin wanita Yogyakarta. Keindahan paes yang penuh makna ini dipercantik dengan prada atau warna keemasan di sepanjang sisinya, menghadirkan kemewahan.semakin menarik dengan aksesori keemasan yang tersusun cantik di kepala. Mulai dari sisir gunungan yang dipasang tegak lurus yang melambangkan keagungan Tuhan, lima buah cunduk mentul yang berjajar dibelakangnya sebagai simbol nafsu manusia, nafsu kasih sayang, nafsu kenikmatan, nafsu keinginan, nafsu kekuasaan, dan nafsu kesucian. Diharapkan, dengan memahami dan mampu mengendalikan seluruh nafsu ini, seseorang akan menjadi manusia sempurna.</p>', 'Jogja-full.jpg', '', '', '2018-09-30'),
(7, 'Solo Basahan', 'Aura keanggunan puteri kraton seketika memancar ketika sang ratu sehari mengenakan busana pengantin corak Solo Basahan. Lukisan paes indah menghias dahi. Ronce melati hadir mempercantik sanggul, dengan roncean panjang hingga ke dada yang dinamakan juga tiba dada (bunga di dada). Busana pengantin pria pun berupa kampuh atau dodot yang dibentuk dari kain batik motif alas-alasan dan tumbuhan hutan. Buntal udan mas juga disematkan di pinggang dan membentuk setengah lingkaran, searah dengan lekukan dodot di bagian bawah. Kuluk mathak sebagai penutup kepala merupakan ciri khas pengantin Jawa. Bunga melati disematkan di atas telinga kiri dan kanan. Kalung karset ulur dan kalung bunga melati tergantung di dada yang terbuka. </p>', 'Dodot_solo-full.jpg', '', '', '2018-09-30'),
(8, 'Jogja Paes Ageng', 'Tak dapat disangkal, ketika hadir dalam balutan busana pengantin Yogya Paes Ageng, sang pengantin wanita pun seakan menjelma bak putri kraton. Balutan kampuh dodot melapisi kain cinde yang melilit tubuh sang dara ayu. Pada dodot kampuh, motif Sido Mukti yang mengandung harapan untuk kebahagian pengantin, atau Sido Asih yang bermakna saling menyayangi, dipadukan dengan motif semen yang berisi harapan untuk tumbuh subur. Kain kampuh dodot juga dikenakan oleh pengantin pria Yogya Paes Ageng. Dengan bertelanjang dada, celana panjang cinde dikenakan dibalik dodot kampuh yang memiliki motif yang sama dengan pengantin wanita. </p>', 'Dodot jogja-full.jpg', '', '', '2018-09-30'),
(9, 'Bugis', 'Busana pengantin wanita adalah baju bodo dengan tata rias hiasan paes dadas Makassar berbentuk runcing di tengah dahi, sanggul unik yang berdiri tegak di bagian kepala, sering disebut dengan istilah Teppo Jakka (Bugis) atau Ni-Suakki (Makassar) dan juga mengenakan hiasan bando dan aksen kutu-kutu (kecil bulat putih seperti mutiara) berjumlah 17 buah yang menghiasi sasakan rambut serta mahkota berhiasan pinang goyang serta anting panjang (bangkarak).\nPengantin pria mengenakan belladada atau serupa dengan jas berkerah yang dipadu dengan sarung bermotif (tope) dipadu dengan perhiasan keemasan seperti gelang, rante sembang, salempang, kalung, sapu tangan (passapu ambara), dan keris berbentuk ular naga.\n</p>', 'Bugis-full.jpg', '', '', '2018-09-30'),
(10, 'Betawi', 'Hiasan dahi yang bentuknya mirip cadar, terbuat dari manik-manik emas yang menjuntai indah menutupi wajah, sehingga juga disebut Siangko Cadar yang dipergunakan untuk busana Rias Besar. Selain Siangko Cadar juga terdapat Siangko kecil bentuknya menyerupai mahkota atau disebut juga sisir galu yang dipasang di ubun-ubun.\nUntuk pengantin lelaki memakai gamis\npanjang dan longgar berkerah Shanghai atau sekarang disebut istilah baju koko namun panjanganya sampai ke mata kaki dan Alprie yaitu penutup kepala khas haji yang menyatu dengan kain surban yang digulung indah. Pada bagian kiri diberi hiasan untai melati dengan aksen mawar di bagian atas, serta bunga cempaka bagian ujungnya.\n\n</p>', 'Betawi1-full.jpg', '', '', '2018-09-30'),
(11, 'Palembang', 'Mahkota Aesan Gede yang begitu mewah membingkai wajah cantik ditemani susunan bungo cempako, kelapo standan dan kembang goyang beringin. Refleksi kejayaan Sriwijaya yang begitu anggun dan mewah. Di sisi kanan dan kiri tergantung sumping atau hiasan bola-bola warna-warni, yang kini telah dimodifikasi menjadi ronce mawar dan melati. Ronce melati panjang pun tersampir di leher hingga ke pinggang.Seakan tak ingin kalah, kemewahan pun terpancar dari pengantin pria Aesan Gede. Kopiah cupak dalam nuansa keemasan ditemani sumping yang juga telah dimodifikasi menjadi ronce bunga mawar dan melati menghias kepala. Menghadirkan nuansa megah keluarga kerajaan.</p>', 'Palembang1-full.jpg', '', '', '2018-09-30'),
(12, 'Aceh', 'Uniknya dari pakaian Aceh ini adalah sang mempelai wanita mengunakan baju kurung yang dipadukan dengan kain songket dan juga celana panjang. Dilengkapi dengan sejumlah aksesoris yang melekat pada pakaian sang pengantin wanita. Dimulai dari hiasan kepala sejenis suntiang, ditambah lagi dengan perhiasan pendukung, seperti kalung, gelang, ikat pinggang (taloe ike pieng) , dan juga perhiasan simplah yang menggantung di pundak dan menyilang hingga ke bagian dada. Sedangkan untuk pakaian pengantin pria terlihat lebih simpel namun tidak mengurangi kesan gagah bak raja-raja Aceh. Sang pria biasanya mengenakan baju lengan panjang (bajee), celana panjang hitam (siluweuwe) yang berpadu dengan kain songket Aceh, dan juga kopiah (kupiah meukuetob). </p>', 'Aceh2-full.jpg', '', '', '2018-09-30'),
(14, 'Gold', 'Warna emas biasanya dipadankan dengan hitam. Perpaduan dua warna ini bermakna anggun dan gemerlap, penuh wibawa dan bijaksana. Meski banyak orang beranggapan warna ini kurang tepat dikenakan pada acara pernikahan, namun faktanya warna hitam tak mengurangi makna sakral dari pernikahan itu sendiri.\nBegitu melihat warna kuning, yang terlintas dalam pikirn adalah keceriaan. Padahal, di balik itu semua, warna ini menyimpan sebuah kehangatan persahabatan dan kedekatan, serta kebahagiaan yang terpancar dari cerah warnanya. </p>', 'Gaun kuning-full.jpg', '', '', '2018-09-30'),
(15, 'Biru Navy', 'Biru mempunyai makna ketenangan dan kedamaian. Warna ini juga menunjukkan kefemininan, kehidupan, kemurnian, sama seperti apa yang ditunjukkan oleh air. Biru juga bermakna stabilitas, keamanan, dan hidup yang panjang umur. Barangkali mereka yang memilih biru sebagai warna busana pengantin berharap agar kehidupan pernikahannya kelak penuh dengan ketenangan, rasa damai dan juga langgeng. Khusus warna biru navy ini karena tergolong gelap jadi bisa menutupi bagian tubuhmu yang terlihat agak besar supaya tidak mencolok.</p>', 'Gaun navi-full.jpg', '', '', '2018-09-30'),
(16, 'Coklat Cream', 'Pada 2016, warna-warna coklat cream yang membumi banyak digunakan oleh desainer sebagai warna dasar koleksinya. Sekarang warna ini menjadi booming kembali karena termasuk salah satu warna pastel. Warna coklat yang melambangkan ketenangan dan juga kelembutan sepertinya menjadi favorit bagi setiap wanita . Arti warna coklat melekat pada sosok wanita yang pekerja keras dan juga produktif.</p>', 'Gaun choco-full.jpg', '', '', '2018-09-30'),
(17, 'Peach', 'Warna peach termasuk warna pastel yang lembut dan banyak digemari para kaum hawa. Yup, warna pastel memang sedang banyak dipakai karena menggambarkan pribadi yang lembut dan feminin. \nWarna peach merupakan salah satu warna pastel yang semakin booming. Warna pastel menjadi warna yang diminati wanita karena dapat membuat mereka semakin manis.\n</p>', 'Gaun2-full.jpg', '', '', '2018-09-30'),
(18, 'Merah', 'Merah dianggap warna keberuntungan, membuka banyak peluang dan menunjukkan kalau pengantin yang memilih warna ini suka dengan tantangan, penuh percaya diri dan tak takut akan rintangan yang akan dihadapi setelah menjadi suami-istri nantinya.</p>', 'Gaun merah-full.jpg', '', '', '2018-09-30'),
(19, 'Biru Toska', 'Biru mempunyai makna ketenangan dan kedamaian. Warna ini juga menunjukkan kefemininan, kehidupan, kemurnian, sama seperti apa yang ditunjukkan oleh air. Biru juga bermakna stabilitas, keamanan, dan hidup yang panjang umur. Barangkali mereka yang memilih biru sebagai warna busana pengantin berharap agar kehidupan pernikahannya kelak penuh dengan ketenangan, rasa damai dan juga langgeng.</p>', 'Gaun mint1-full.jpg', '', '', '2018-09-30'),
(20, 'Pink', 'Merah muda yang identik dengan warnanya kaum hawa bermakna kepolosan, manja, kesegaran, kemurnian, kesehatan dan hidup yang baik. Warna ini juga menunjukkan sisi feminisme serta cinta yang sedang mekar-mekarnya sebagai pengantin baru. Pemilihan warna merah muda biasanya dipadupadankan dengan silver sehingga menambah kesan anggun dan elegan.</p>', 'Gaun3-full.jpg', '', '', '2018-09-30'),
(21, 'Biru Navy', 'Biru mempunyai makna ketenangan dan kedamaian. Warna ini juga menunjukkan kefemininan, kehidupan, kemurnian, sama seperti apa yang ditunjukkan oleh air. Biru juga bermakna stabilitas, keamanan, dan hidup yang panjang umur. Barangkali mereka yang memilih biru sebagai warna busana pengantin berharap agar kehidupan pernikahannya kelak penuh dengan ketenangan, rasa damai dan juga langgeng. Khusus warna biru navy ini karena tergolong gelap jadi bisa menutupi bagian tubuhmu yang terlihat agak besar supaya tidak mencolok.</p>', 'Gaun Navy-full.jpg', '', '', '2018-09-30'),
(22, 'Putih', 'Selain bermakna suci, putih juga berarti elegan, cahaya, kebaikan, kepolosan, kemurnian, keperawanan, dan sebagai lambang kesempurnaan. Mengenakan busana pengantin berwarna putih juga berarti penuh dengan kesakralan dan juga sebagai pertanda membuka kehidupan baru sebagai pasangan suami istri yang dimulai dengan lembaran putih yang masih kosong. Di Indonesia sendiri, busana pengantin berwarna putih masih menjadi warna yang paling banyak dipilih.</p>', 'Gaun putih-full.jpg', '', '', '2018-09-30'),
(23, 'Abu-Abu', 'Warna hasil dari campuran warna putih dan hitam ini mencerminkan keamanan, kepandaian, keseriusan dan kestabilan. Negatifnya, warna abu-abu juga mencerminkan kesedihan. Karena itulah warna abu-abu jarang digunakan sebagai warna utama pada tema sebuah pesta pernikahan, tapi lebih seringnya dipadukan dengan warna primer lainnya yang lebih cerah seperti pink, kuning, hijau, ungu.</p>', 'Gaun silver-full.jpg', '', '', '2018-09-30'),
(24, 'Silver', 'Seperti halnya warna abu-abu, silver juga memiliki arti keseriusan dan kestabilan. Bedanya, karena warna silver adalah warna perak yang pada dasarnya juga memiliki kandungan warna abu-abu, silver lebih mengeluarkan sisi glamour dari pada sisi kesedihan yang ada pada warna abu-abu. Untuk sebuah pesta resepsi penrikahan sebaiknya gunakan silver yang memberikan efek shimmery agar lebih glamour.</p>', 'Gaun1-full.jpg', '', '', '2018-09-30'),
(25, 'Dusty Pink', 'Merah muda yang identik dengan warnanya kaum hawa bermakna kepolosan, manja, kesegaran, kemurnian, kesehatan dan hidup yang baik. Warna ini juga menunjukkan sisi feminisme serta cinta yang sedang mekar-mekarnya sebagai pengantin baru. Pemilihan warna merah muda biasanya dipadupadankan dengan silver sehingga menambah kesan anggun dan elegan.</p>', 'Gaun dusty-full.jpg', '', '', '2018-09-30'),
(39, 'test aja', 'test aja', '1539158753D-full.jpg', '', '', '2018-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id_inbox` int(11) NOT NULL,
  `date_post` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `status` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id_inbox`, `date_post`, `nama`, `email`, `telp`, `isi`, `status`) VALUES
(2, '2018-10-09', 'nama', 'email', 'telp', 'isi', 'read'),
(3, '2018-10-16', 'nama', 'email', 'telp', 'isi', 'read'),
(4, '2018-10-03', 'teststastast', 'awdawdasdas@mail.co', '1234', 'rwst', ''),
(6, '2018-10-04', 'ardy prayogo', 'ardy.prayogo@yahoo.com', '1234', 'test', 'read'),
(7, '2018-10-02', 'ardy prayogo', 'ardy.prayogo@yahoo.com', '1234', 'test', ''),
(8, '2018-10-02', 'ardy prayogo', 'ardy.prayogo@yahoo.com', '1234', 'test', ''),
(9, '2018-10-02', 'ardy prayogo', 'ardy.prayogo@yahoo.com', '1234', 'test', ''),
(10, '2018-10-02', 'anto', 'anto@mil.com', '123123', 'apa', 'read'),
(11, '2018-10-06', 'anto', 'anto@mil.com', '23213123', 'apapapapapa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id_inbox`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id_inbox` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
