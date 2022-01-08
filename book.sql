-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 02:40 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `date_of_birth`, `place_of_birth`, `gender`, `author_description`, `author_image`, `created_at`, `updated_at`) VALUES
(6, 'Arthur Conan Doyle', '1859-05-22', 'Edinburgh, Skotlandia', 'Laki - Laki', '<p>Sir Arthur Ignatius Conan Doyle KStJ DL (22 Mei 1859 – 7 Juli 1930) adalah pengarang cerita fiksi terkenal berkebangsaan Inggris. Salah satu karangannya yang paling terkenal adalah serial petualangan Sherlock Holmes, seorang detektif fiksi yang eksentrik. </p>\r\n\r\n<p>Doyle dilahirkan pada tahun 1859. Ia mendapat gelar dokter dari Universitas Edinburgh dan mulai membuka praktik di Southsea, Inggris pada tahun 1882. Ia mengarang banyak cerita, dua diantaranya tidak pernah dipublikasikan.</p>\r\n\r\n<p>Pada tahun 1886, ia menciptakan tokoh Sherlock Holmes yang diilhami dari Dr. Joseph Bell, salah satu dosennya. Cerita pertama yang berjudul A Study in Scarlet (bahasa Indonesia: Penelusuran Benang Merah) ini diterima publik dengan baik. Akan tetapi, ketenaran tokoh itu baru dimulai pada tahun 1891 ketika ia menulis serial petualangan Sherlock Holmes bersama sahabat setianya, Dr. Watson, dalam bentuk kompilasi cerita pendek.</p>\r\n\r\n<p>Pada tahun 1885 Doyle menikah dengan Mary Louise (kadang dipanggil \"Louisa\") Hawkins, putri bungsu J. Hawkins, dari Minsterworth, Gloucestershire, dan saudari salah seorang pasien Doyle. Louisa menderita tuberkulosis dan meninggal pada tanggal 4 Juli 1906. Pada tahun berikutnya ia menikah dengan Jean Elizabeth Leckie, yahg pertama kali dijumpainya dan membuatnya jatuh cinta pada tahun 1897. Doyle memelihara hubungan persahabatan dengan Jean selama istri pertamanya masih hidup, karena kesetiaannya terhadap istrinya itu. Jean meninggal di London pada 27 Juni 1940.</p>\r\n\r\n<p>Doyle mempunyai lima anak. Dua insan dilahirkan oleh istri pertamanya: Mary Louise (28 Januari 1889 – 12 Juni 1976) dan Arthur Alleyne Kingsley, dikenal sebagai Kingsley (15 November 1892 – 28 Oktober 1918). Tiga berikutnya dari istri kedua: Denis Percy Stewart (17 March 1909 – 9 March 1955), suami kedua putri kerajaan Georgia, Nina Mdivani; Adrian Malcolm (19 November 1910 – 3 Juni 1970); dan Jean Lena Annette (21 Desember 1912 – 18 November 1997).[4]</p>\r\n\r\nIa meninggal pada tahun 1930 karena sakit.', 'author-image/IVmHYurlNuSdAr3X8n8JSzQ30Z2KL0UkqpTaLkpT.png', '2021-11-07 22:49:04', '2021-11-07 22:49:04'),
(7, 'Fyodor Dostoyevsky', '1821-11-11', 'Moskow, Rusia', 'Laki - Laki', '<p>Fyodor Mikhailovich Dostoyevsky (Фёдор Миха́йлович Достое́вский, kadang-kadang dialihaksarakan menjadi Dostoevsky Tentang suara ini listen (bantuan·info)) (11 November [K.J.: 30 Oktober] 1821 – 9 Februari [K.J.: 28 Januari] 1881) adalah salah seorang sastrawan Rusia terbesar, yang karya-karyanya menimbulkan dampak yang panjang terhadap fiksi abad ke-20. </p>\r\n\r\n<p>Karya-karyanya sering kali menampilkan tokoh-tokoh dalam keadaan yang putus asa dan pikiran yang sangat ekstrem, sehingga memperlihatkan pemahaman yang luar biasa tentang psikologi manusia serta analisis yang mendalam mengenai keadaan politik, sosial, dan spiritual di Rusia pada masanya. Banyak dari karya-karyanya yang paling terkenal seolah-olah meramalkan pemikiran dan kepedulian orang pada masa modern. </p>\r\n\r\n<p>Kadang-kadang ia disebut sebagai pendiri eksistensialisme, terutama dalam Catatan dari Bawah Tanah, yang digambarkan oleh Walter Kaufmann sebagai \"karya terbaik untuk eksistensialisme yang pernah ditulis\".</p>\r\n\r\n<p>Pengaruh Dostoyevsky sangat luas—dari Herman Hesse hingga Marcel Proust, William Faulkner, Albert Camus, Franz Kafka, Friedrich Nietzsche, Henry Miller, Yukio Mishima, Gabriel García Márquez dan Joseph Heller—praktis tak seorang pun penulis besar abad ke-20 yang lolos dari bayang-bayangnya yang panjang (beberapa tokoh yang tidak terpengaruhi sangat jarang, termasuk Vladimir Nabokov, Henry James, Joseph Conrad dan, dalam cara yang lebih tersamar, D.H. Lawrence). </p>\r\n\r\n<p>Novelis Amerika Ernest Hemingway juga mengutip Dostoyevsky dalam buku-buku otobiografinya, sebagai pengaruh besar dalam karyanya. Pada dasarnya Dostoyevsky adalah seorang pengarang mitos (dan dalam hal ini kadang-kadang ia dibandingkan dengan Herman Melville), dan ia telah menciptakan sebuah karya yang sangat penting dan boleh dikatakan mengandung daya hipnotis yang dicirikan oleh hal-hal berikut: suasana yang sangat didramatisir (konklaf), dengan tokoh-tokohnya, yang sering kali dalam suasana skandal dan meledak, dengan penuh semangat terlibat dalam dialog-dialog seperti Sokrates à la Russe (gaya Rusia); pencarian akan Tuhan, masalah Kkuasa Jahat dan penderitaan orang-orang yang tidak bersalah mengisi sebagian besar novel-novelnya.<p>', 'author-image/uqnbUKXsI3RS1qE9YtBggYVnYUBkudcYn0fDUrPQ.jpg', '2021-11-08 10:50:13', '2021-11-08 10:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_book` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_issue` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `author_id`, `title`, `description`, `book_image`, `publisher`, `count_book`, `date_of_issue`, `created_at`, `updated_at`) VALUES
(20, 6, 'Memoar Sherlock Holmes', '<p>Memoar Sherlock Holmes (cover baru) adalah salah satu buku karya Conan Doyle yang diterbitkan oleh Gramedia Pustaka Utama pada tahun 2012. Bukul ini menceritakan tentangkehidupan seorang detektif bernama Sherlock Holmes dan partner sekaligus penulis ceritanyayang bernama Dr.Watson. Mereka tinggal di kamar sewaan di 221B Baker Street, London. Iasekamar dengan Dr. Watson sampai Watson menikah dengan pujaan hatinya Mary Morstan. </p>\r\n\r\n<p>Induk semangnya adalah seorang wanita Skotlandia bernama Mrs. Hudson. Buku ini terdiri dari11 cerita pendek petualangan sang detektif yang menceritakan kasus-kasus kriminal yang iaselesaikan dengan metode analisisnya yang tak terduga, sistematis, dan penuh dengan pertanyaan. </p>\r\n\r\n<p>Bersama Watson, Holmes menyelidiki kasus-kasus pelik seperti lenyapnya Silver Blaze---kuda pacuan yang dijagokan dalam Kejuaraan Piala Wessex---dan misteri kematian Kolonel Barclay dari Kesatuan Royal Mallows yang diduga dibunuh oleh istrinya sendiri. Sambil mengenang masa lalu di depan perapian pada musim dingin, Holmes menuturkan kepada Watson kasus-kasus yang pernah ditanganinya sewaktu dia masih meniti karier. </p>\r\n\r\n<p>Rahasia di balik meledaknya Kapal Gloria Scott dan harta terpendam yang terkandung dalam Ritual Keluarga Musgrave adalah dua di antaranya. Sebelas cuplikan perjuangan Sherlock Holmes memerangi kejahatan dibeberkan dalam memoar ini, diakhiri dengan duel antara detektif kondang itu dengan Profesor Moriarty, sang Napoleon dunia kejahatan, di Air Terjun Reichenbach.</p>', 'book-image/rpWuBhAyLTuC42KjFPMUyeMkdPIrrVt2mBUArcjs.jpg', 'Gramedia Pustaka Utama', '5', '1992-09-01', '2021-11-07 23:12:24', '2021-11-07 23:13:06'),
(21, 6, 'The Return of Sherlock Holmes', '<p>Sherlock Holmes telah tiada, tewas dalam duel maut di Air Terjun Reichenbach. Ia berhasil membebaskan masyarakat dari Profesor Moriarty---sang Napoleon dunia kejahatan---walau harus membayar dengan nyawanya sendiri. Dr. Watson, sahabat dan rekan kerja Holmes, jelas merasa amat kehilangan, dan di hatinya kerap timbul keinginan untuk mengadakan penyelidikan sendiri, menerapkan metode-metode sang detektif kondang.</p><p>Tetapi, tak pernah terlintas dalam benaknya bahwa kematian misterius Ronald Adair yang coba dia selidiki akan melibatkannya dalam Petualangan di Rumah Kosong, dengan hasil yang amat tak terduga...</p><p>Watson kembali mendapat kesempatan untuk memecahkan berbagai kasus unik---Gambar Orang Menari, Petualangan Keenam Napoleon, Pemain Belakang yang Hilang, dan</p><p>sebagainya---bersama Sherlock Holmes yang bangkit dari kubur!</p>', 'book-image/XP0cXgjdMhH6pJmv4xhWIECF6YSPHEQQ7wpbyZkU.jpg', 'Gramedia Pustaka Utama', '5', '2019-12-23', '2021-11-08 09:38:38', '2021-11-10 20:45:53'),
(22, 6, 'The Adventure of Sherlock Holmes', '<p>Melalui para klien yang datang minta pertolongan kepada konsultan detektif pertama di dunia ini, pembaca diajak mengunjungi kamar sewaan di Baker Street No. 221B yang termasyhur itu, di tempat Holmes yang eksentrik dan dr. Watson yang istimewa pernah tinggal. \r\n\r\n<p>Lalu, pembaca juga dibawa untuk menikmati daerah perdesaan di Inggris bersama Sherlock Holmes, ketika ia menguakkan misteri, memecahkan teka-teki, dan menangkap para pelaku kejahatan---atau terkadang melepaskan mereka begitu saja.\r\n\r\n<p>Mulai dari Skandal di Bohemia ketika Holmes berjumpa dengan wanita yang sangat dikaguminya, sampai pengalamannya yang mendebarkan dalam Petualangan di Copper Beeches, cara-cara penyelesaian masalah yang\r\n\r\ndilakukannya sangat di luar dugaan, sedangkan alur ceritanya sendiri benar-benar memukau.', 'book-image/5CyBZhmSVZcTrDPZRVx0qV4I2dr4u0goX2jHs9pP.jpg', 'Gramedia Pustaka Utama', '7', '2020-02-24', '2021-11-08 09:45:40', '2021-11-08 09:52:41'),
(23, 6, 'The Case Book of Sherlock Holmes', '<p>Nama Sherlock Holmes tentu tidak asing lagi bagi pembaca setianya. Anda telah menyaksikan kiprahnya sejak Petualangan Sherlock Holmes, saat Anda mulai berkenalan dengan detektif eksentrik itu dan mengunjungi kamar sewaanya di Baker Street. Anda barangkali terpukul ketika membaca Memoar Sherlock Holmes, dan melihat duel mautnya dengan Profesor Moriarty—sang Napoleon dunia kejahatan. </p>\r\n\r\n<p>Dunia memang menjadi tempat yang lebih aman sejak Holmes menyingkirkan si Profesor, namun prestasi itu harus ditebusnya dengan nyawa.\r\nBersama sobat setianya, dr. Watson, tentu Anda menyambut gembira Kembalinya Sherlock Holmes, dan kembali mengikuti aksinya sampai ia memasuki masa pensiun. </p>\r\n\r\n<p>Namun Anda tak perlu bersedih ketika detektif kesayangan Anda ini menyampaikan Salam Terakhir, karena Watson sudah menyiapkan pelipur lara. Dalam Koleksi Kasus Sherlock Holmes, Watson mencatat berbagai kasus itu dijamin akan mengundang decak kagum, membangkitkan rasa haru, bahkan menegakkan bulu kuduk Anda.</p>', 'book-image/6X4xZI6s7HQzhhCyK8nrzqjBbBrlZ331hHE4pB9q.jpg', 'Gramedia Pustaka Utama', '3', '2019-12-23', '2021-11-08 09:51:36', '2021-11-08 09:52:10'),
(24, NULL, 'His Last Bow', '<p>Memasuki masa senjanya, Sherlock Holmes mengundurkan diri ke perdesaan––menekuni filsafat sambil beternak lebah. Berbagai tawaran untuk menangani kasus-kasus kriminal ditolaknya––tak peduli berapa pun imbalannya––karena ia sudah berniat pensiun. </p>\r\n\r\n<p>Tetapi ketika Perdana Menteri sendiri berkenan mengunjunginya dan yang dipertaruhkan adalah keutuhan negara, Holmes akhirnya terjun kembali ke tengah-tengah ingar-bingarnya dunia kriminal internasional. Watson, sobatnya yang setia, mendampinginya ketika ia melucuti kedok mata-mata Jerman yang andal, lalu menuliskan kasus ini untuk pembaca dan memberi judul Salam Terakhir Sherlock Holmes. </p>\r\n\r\n<p>Ia jugamenambahkan kasus Holmes yang spektakuler untuk melengkapi koleksi ini.</p>', 'book-image/9b7bBnEcfkrh67L8YuWIsFYGcpfjsOdmScMvabL1.jpg', 'Gramedia Pustaka Utama', '2', '2019-12-23', '2021-11-08 09:57:24', '2021-11-08 09:57:24'),
(25, 6, 'The Valley of Fear', '<p>Sherlock Homes mendapat pesan bersandi yang berisi peringatan akan datangnya bahaya bagi seorang pria. Namun peringatan itu datang terlambat, karena orang yang dimaksud ternyata mati terbunuh pada malam sebelumnya.</p>\r\n\r\n<p>Holmes dan Watson pun bekerja sama untuk mengungkap pembunuhan tersebut, dan mendapati ini bukanlah pembunuhan biasa.</p>\r\n\r\n<p>Lembah Ketakutan merupakan novel Sherlock Holmes terakhir yang ditulis oleh Sir Arthur Conan Coyle.</p>', 'book-image/KToKVVIDgWYC9Q5WvDkHUYwVMqGV0TNiQfyG6qI5.jpg', 'Gramedia Pustaka Utama', '4', '2019-07-29', '2021-11-08 10:03:59', '2021-11-08 10:07:22'),
(26, 6, 'The Hound of the Baskervilles', '<p>Kutukan anjing setan membayangi keluarga Baskerville selama beberapa generasi serta dianggap menjadi penyebab kematian para ahli waris keluarga itu. Merasa hidupnya dalam bahaya, Sir Henry Baskerville, ahli waris terakhir keluarga itu meminta bantuan Sherlock Holmes.</p>\r\n\r\n<p>Sebagai orang yang selalu mengedepankan logika, Holmes tentu saja tidak memercayai kekuatan supernatural. Tapi bagaimana ketika ia dihadapkan pada fakta-fakta yang tidak bisa dicerna akal sehat? Bisakah ia menyingkap misteri ini dan menyelamatkan kliennya?</p>', 'book-image/undNtXll36egtvnic5gEnpFSWJXG0S2QKA9WvlHv.jpg', 'Gramedia Pustaka Utama', '8', '2019-07-29', '2021-11-08 10:09:07', '2021-11-08 10:10:33'),
(27, 6, 'The Sign of Four', '<p>Mary Morstan mendatangi Sherlock Holmes untuk meminta bantuannya memecahkan sebuah misteri. Sepuluh tahun yang lalu, ayah Mary, Kapten Arthur Morstan, kembali ke London dengan mengambil cuti dari resimennya di India. </p>\r\n\r\n<p>Katanya, di sana ia dan seorang temannya, Thaddeus Sholto, mendapatkan harta karun yang sangat besar jumlahnya. Tapi ketika Mary tiba di hotel tempat ayahnya tinggal, sang ayah lenyap tanpa jejak. Sherlock Holmes menyambut misteri ini sebagai tantangan menarik.</p>', 'book-image/e1MTSCGhOM2sIYhnHgbhf1IzrVAocHqzv6azz6We.jpg', 'Gramedia Pustaka Utama', '6', '2019-07-29', '2021-11-08 10:12:36', '2021-11-08 10:12:36'),
(28, 6, 'A Study in Scarlet', '<p>Penelusuran Benang Merah merupakan buku pertama dalam seri Sherlock Holmes dan mengisahkan perkenalan dr. Watson dengan sang detektif. Sang dokter yang ketika itu belum mengetahui</p>\r\n\r\n<p>profesi Holmes, pada awalnya dibuat bingung dengan keeksentrikan pria itu serta kemampuannya yang unik. Holmes sangat pandai dalam ilmu deduksi dan mampu menebak keadaan seseorang</p>\r\n\r\n<p>hanya dalam sekali pandang. Para tamu yang mengunjungi rumah sewaan mereka di Baker Street pun berasal dari berbagai kelas sosial, mulai dari bangsawan sampai portir. Holmes juga mahir bermain biola, tetapi lebih sering menggeseknya sembarang. Dia bisa tampak sangat bersemangat, namun di lain waktu tampak merenung dengan tatapan kosong seperti orang kecanduan narkotika.</p>\r\n\r\n<p>Dr. Watson baru memahami teman barunya itu ketika ia mengetahui profesi Holmes dan mendapat kesempatan untuk menyaksikan sang detektif bekerja, menelusuri benang merah rangkaian</p>\r\n\r\n<p>pembunuhan yang terjadi di jantung kota London.</p>', 'book-image/ZNkzVfZPqnOMR8AYxFuZmRY9wNqFoKviIVBBEhGC.jpg', 'Gramedia Pustaka Utama', '6', '2019-07-29', '2021-11-08 10:16:46', '2021-11-08 10:16:46'),
(29, 6, 'Sherlock Holmes: Koleksi Kasus 1', '<p>Sejak muncul pertama kali tahun 1887, Sherlock Holmes menjadi tokoh fi ksi yang paling fenomenal. Dia menjadi jagoan klasik yang legendaris dan menginspirasi dalam budaya pop bahkan hingga abad ke-21. Bersama Dr. John Watson, Sherlock Holmes memecahkan kasus-kasus rumit berdasarkan kemampuannya menemukan petunjuk-petunjuk yang sering diabaikan orang lain.</p>\r\n\r\n<p>Koleksi Kasus Sherlock Holmes 1 ini dimulai dengan novel pertama Penelusuran Benang Merah yang memperkenalkan Sherlock Holmes si eksentrik yang genius ini dengan Dr. Watson. Empat Pemburu Harta yang menyajikan kejutan penuh teka-teki. </p>\r\n\r\n<p>Perjumpaannya dengan wanita yang sangat dikaguminya di Petualangan Sherlock Holmes. Peristiwa pertama yang mempertemukannya dengan musuh bebuyutannya, Dr. Moriarty, di Memoar Sherlock Holmes. Dan petualangan dalam Anjing Setan Sherlock Holmes yang menegakkan bulu kuduk.</p>', 'book-image/yVEJcUX9pfcfpyiPR4RDqGueNXQQv3QY66RcmnBi.jpg', 'Gramedia Pustaka Utama', '8', '2015-02-04', '2021-11-08 10:28:06', '2021-11-08 10:28:06'),
(34, 6, 'Petualangan Sherlock Holmes', '<p>Melalui tokoh-tokoh kliennya yang datang minta pertolongan kepada konsultan detektif pertama di dunia ini, pembaca diajak mengunjungi kamar sewaan di Baker Street No. 221B yang termasyur itu, di mana Holmes yang eksentrik dan Dr. Watson yang istimewa pernah tinggal. Lalu, pembaca akan juga dibawa untuk menikmati daerah pedesaan di Inggris bersama ahli pengambil kesimpulan ini, ketika ia menguakkan sebuah misteri, memecahkan teka-teki, dan menangkap para pelaku kejahatan-atau kadang-kadang melepaskan mereka begitu saja.</p>\r\n\r\n<p>Mulai dari Skandal di Bohemia di mana Holmes berjumpa dengan wanita yang sangat dikaguminya, sampai pengalamannya yang mendebarkan dalam Petualangan di Copper Beeches, cara-cara penyelesaian masalah yang dilakukannya sangat di luar dugaan, sedangkan alur ceritanya sendiri benar-benar sangat memukau.<p>', 'book-image/FVt29NZlR1H5GXXzA7bZK2hWNjKVO0hfn1lG6Pti.jpg', 'Gramedia Pustaka Utama', '5', '2013-07-25', '2021-11-10 21:31:45', '2021-11-10 21:31:45'),
(35, 6, 'Petualangan Sherlock Holmes', 'Melalui tokoh-tokoh kliennya yang datang minta pertolongan kepada konsultan detektif pertama di dunia ini, pembaca diajak mengunjungi kamar sewaan di Baker Street No. 221B yang termasyur itu, di mana Holmes yang eksentrik dan Dr. Watson yang istimewa pernah tinggal. Lalu, pembaca akan juga dibawa untuk menikmati daerah pedesaan di Inggris bersama ahli pengambil kesimpulan ini, ketika ia menguakkan sebuah misteri, memecahkan teka-teki, dan menangkap para pelaku kejahatan-atau kadang-kadang melepaskan mereka begitu saja.\r\n\r\nMulai dari Skandal di Bohemia di mana Holmes berjumpa dengan wanita yang sangat dikaguminya, sampai pengalamannya yang mendebarkan dalam Petualangan di Copper Beeches, cara-cara penyelesaian masalah yang dilakukannya sangat di luar dugaan, sedangkan alur ceritanya sendiri benar-benar sangat memukau.', 'book-image/3sApuj8KR9WreJd1oy4PWt8hd9gRr21AiGErY8De.jpg', 'Gramedia Pustaka Utama', '10', '2021-11-11', '2021-11-10 21:32:16', '2021-11-10 21:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_22_045516_create_authors_table', 1),
(6, '2021_08_19_101353_create_book_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'auth_token', 'e42b87d220d2225208a950dcc8baf70f4db06b6f56b5a7ecff94c12bfc07bc14', '[\"*\"]', NULL, '2021-11-02 08:50:04', '2021-11-02 08:50:04'),
(2, 'App\\Models\\User', 1, 'auth_token', '4be91706bd6605bde92ff98aae6ec94842726ea48164dc37194a0a5767647ba7', '[\"*\"]', NULL, '2021-11-02 08:50:30', '2021-11-02 08:50:30'),
(3, 'App\\Models\\User', 1, 'auth_token', '604e53d975b2e54f89696b8d7cf5a0d745623a9b4c89b450e44c258f63c8c41d', '[\"*\"]', NULL, '2021-11-02 08:51:27', '2021-11-02 08:51:27'),
(4, 'App\\Models\\User', 1, 'auth_token', 'ae85d0adcc5c33c599a11c4cf1af185034b85514ed8af4ee28348253f469a611', '[\"*\"]', NULL, '2021-11-03 20:46:56', '2021-11-03 20:46:56'),
(5, 'App\\Models\\User', 2, 'auth_token', '717dfda8d2f6fce407569f1ecc8ced421d478d93deb2b1647542968f4eb5ef4d', '[\"*\"]', NULL, '2021-11-03 21:16:54', '2021-11-03 21:16:54'),
(6, 'App\\Models\\User', 1, 'auth_token', 'dec5f00de8624ad8db18ab0831f96fecf2bbbbbf22771c2a2d8a5b9aafff4a6d', '[\"*\"]', NULL, '2021-11-03 21:18:30', '2021-11-03 21:18:30'),
(7, 'App\\Models\\User', 1, 'auth_token', '1035381c2032f535b50cb8aafc664c86b42b2f6351b714a32e37b1101a8fdc54', '[\"*\"]', NULL, '2021-11-04 08:01:22', '2021-11-04 08:01:22'),
(8, 'App\\Models\\User', 1, 'auth_token', 'd1928a7d6acc974783aa8c17bece357467e26703015f70c6018f1965f7390dc3', '[\"*\"]', NULL, '2021-11-05 22:17:18', '2021-11-05 22:17:18'),
(9, 'App\\Models\\User', 1, 'auth_token', '36cf4abb170bb9ae9b4c9fb1fadb5511face066b37e4b9c2f49ef41936a843ca', '[\"*\"]', NULL, '2021-11-06 04:39:20', '2021-11-06 04:39:20'),
(10, 'App\\Models\\User', 1, 'auth_token', '7e0557dd1c9cf993895119a13fb66c1379b1e86be808c616af99068967768e04', '[\"*\"]', NULL, '2021-11-06 09:00:28', '2021-11-06 09:00:28'),
(11, 'App\\Models\\User', 1, 'auth_token', '6e6d4ceaffedbece420aed10cf7d75241ecbcffdb28b22fce92982c4b065a613', '[\"*\"]', NULL, '2021-11-06 21:37:29', '2021-11-06 21:37:29'),
(12, 'App\\Models\\User', 1, 'auth_token', '3cd3cdf2e5ff91923a8df617805cfd92814adad867ffbac35ec9faa823866e5e', '[\"*\"]', NULL, '2021-11-06 22:53:24', '2021-11-06 22:53:24'),
(13, 'App\\Models\\User', 1, 'auth_token', '60d78d054c056da7cdc14a2be30c2ede91b5566bcc2d2f9172de562075b2f280', '[\"*\"]', NULL, '2021-11-06 23:42:53', '2021-11-06 23:42:53'),
(14, 'App\\Models\\User', 3, 'auth_token', 'ebf2d40baffa50171f75aa5deff60265e662713802f122250faf84d04f566026', '[\"*\"]', NULL, '2021-11-06 23:45:28', '2021-11-06 23:45:28'),
(15, 'App\\Models\\User', 3, 'auth_token', '3eb351a86e09239a845fd4f0a6c56cb9b1f6f854f158e8039a96b778499bb5f4', '[\"*\"]', NULL, '2021-11-06 23:45:41', '2021-11-06 23:45:41'),
(16, 'App\\Models\\User', 3, 'auth_token', '2f9a22d12ec7f59a508d3d39c9854987fc6f556399c486016968f1bca8b2d508', '[\"*\"]', NULL, '2021-11-07 01:28:51', '2021-11-07 01:28:51'),
(17, 'App\\Models\\User', 3, 'auth_token', '1ba1328b2f08ef6d526c3e51afac70bd0205857a106ff6dc5b90b51563c250ba', '[\"*\"]', NULL, '2021-11-07 02:08:23', '2021-11-07 02:08:23'),
(18, 'App\\Models\\User', 3, 'auth_token', '3cef2255d42ed3138616d8b27f7ebf4f7947febbd8c29d9f3cd5e740b70c0fe4', '[\"*\"]', NULL, '2021-11-07 19:36:54', '2021-11-07 19:36:54'),
(19, 'App\\Models\\User', 3, 'auth_token', '443448293dec6c1b7afe48b95b01897aad378a7ac46f74aa7e93a008a08e0e83', '[\"*\"]', NULL, '2021-11-08 09:26:05', '2021-11-08 09:26:05'),
(20, 'App\\Models\\User', 3, 'auth_token', '3917d70ad05994bcc8267ef60a921b59119e47e3210bd05aa1152f6e654fe7f7', '[\"*\"]', NULL, '2021-11-08 20:42:52', '2021-11-08 20:42:52'),
(21, 'App\\Models\\User', 3, 'auth_token', 'b7f8416e044d2d0ee4eb7604de41433dd6ed1d0169c1c83683c3b62a2162a191', '[\"*\"]', NULL, '2021-11-08 21:22:40', '2021-11-08 21:22:40'),
(22, 'App\\Models\\User', 3, 'auth_token', '745053b658eb8db37dfc24655ea5e1515c8d931477ec74b1c3f27ff6d13a777a', '[\"*\"]', NULL, '2021-11-09 02:36:32', '2021-11-09 02:36:32'),
(23, 'App\\Models\\User', 3, 'auth_token', 'a270fc4744e6a05d1587195eac2423b500e4018fb66bde1abc7b6517b72b2115', '[\"*\"]', NULL, '2021-11-10 20:33:15', '2021-11-10 20:33:15'),
(24, 'App\\Models\\User', 3, 'auth_token', '07511056724bd2863ae456c3318034861e23e6c05086b727f9c1f2d03dea3774', '[\"*\"]', NULL, '2021-11-10 20:45:04', '2021-11-10 20:45:04'),
(25, 'App\\Models\\User', 3, 'auth_token', 'acc1bb209d9c9eeb064e067653800b475a89b380ee71ba5ea4ffe1fef20b3d8f', '[\"*\"]', NULL, '2021-11-10 21:00:52', '2021-11-10 21:00:52'),
(26, 'App\\Models\\User', 4, 'auth_token', '2caf8658077c3c93bd26660cf7cf65de65e9cb1422fcf62a9173f75d4780f441', '[\"*\"]', NULL, '2021-11-17 07:33:12', '2021-11-17 07:33:12'),
(27, 'App\\Models\\User', 4, 'auth_token', '5738f0632ebd099b2bfb1604ec0b03e3457f5bf7e03aa499e622e33b4d3c5403', '[\"*\"]', '2021-11-17 09:11:47', '2021-11-17 07:34:06', '2021-11-17 09:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yudhan', 'yudhan@examplee.com', NULL, '$2y$10$bsu2xtS19IwilgDQWLsIKemJnDsuiUT0S3yI/tL7c68DgmsgoBW0K', NULL, '2021-11-02 08:50:04', '2021-11-02 08:50:04'),
(2, 'jepri', 'jepri@ex.com', NULL, '$2y$10$ERYEo/Uut/J2B.D00LF/K.KCsopmHVVY2pddmgIyEjblyOPHvQHry', NULL, '2021-11-03 21:16:54', '2021-11-03 21:16:54'),
(3, 'bawang', 'bawang@gmail.com', NULL, '$2y$10$Lw6lqWZEdAkkBO7VN.gXqumZDVKJV8eCa2OFKKwrNsOyP0BEw9lxm', NULL, '2021-11-06 23:45:28', '2021-11-06 23:45:28'),
(4, 'jepri', 'rifqi@gmail.com', NULL, '$2y$10$Kn.uDCwTTcCTPJY3UUK0YueWZmJX2Ucsje5T5C70vahRpT5HuIriq', NULL, '2021-11-17 07:33:12', '2021-11-17 07:33:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_author_id_foreign` (`author_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
