-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `thriftophia-store`;
CREATE DATABASE `thriftophia-store` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `thriftophia-store`;

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `blogs` (`id`, `title`, `category`, `description`, `date`, `photo`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4,	'5 Strategi Bangun Tim Yang Bersinergi',	'Startup',	'<p>Salah satu hal yang bisa menguatkan sebuah perusahaan adalah karyawan yang saling bersinergi dalam bekerja. Sinergi berarti kemampuan bekerja sama yang baik dan mampu menghasilkan keseimbangan dalam prosesnya, sehingga akan menghasilkan sesuatu yang lebih maksimal.</p><p>Bekerja dalam tim, memang gak selalu berjalan mulus. Hal tersebut karena di dalamnya terdapat bermacam-macam karakter manusia. Berkolaborasi dengan baik, itu akan menciptakan sinergi antara satu sama lain.</p><blockquote><p><i><strong>\"Kerja tim yang hebat adalah satu-satunya cara kami menciptakan terobosan yang menentukan karier kita.\"</strong></i> - Pat Riley</p></blockquote><p>Maka dari itu ada 5 cara membangun Tim Yang Bersinergi,Apa aja sih? Yuk,Simak Penjelasan Selengkapnya.</p><h3>1. Mulailah Dengan Kenal Diri Sendiri</h3><p>Dengan mengenal diri sendiri itu berartikan bahwa kita sudah mampu untuk bekerja dengan Tim. Karena kita tahu dimana kelebihan dan kekurangan kita.</p><p>Bagi kamu yang belum terlalu mengenal dirinya sendiri,Tentu saja ada solusinya dengan mengisi matrix diri sendiri. Saat mengisi Matrix tersebut maka kamu akan tau pekerjaan atau pun peranan yang cocok untukmu</p><h3>2. Tentukan Tujuan Bersama</h3><p>Bekerja dalam sebuah tim, tentu kamu gak akan mengerjakan segala hal secara sendiri. Maka dari itu,kita perlu menentukan Tujuan bersama. Penting bagi kamu untuk menentukan tujuan bersama,menyamakan isi kepala kamu dengan anggota tim agar bisa bertahan di perjalanan yang jauh.</p><p>Hal itu mampu membuatmu semakin termotivasi untuk bekerja lebih baik lagi, sehingga mampu menghasilkan sesuatu secara lebih maksimal. Saling bersinergi akan membuat anggota tim atau sesama rekan kerja, menjadi semakin kompak dalam bekerja dan mencapai tujuan bersama.</p><h3>3. Tentukan Peran Masing-Masing</h3><p>Dalam kerja tim yang bersinergi, kamu perlu menentukan &amp; memahami peran Masing-Masing anggota tim agar pekerjaan menjadi ringan.</p><p>Menentukan Peran tidak bisa sembarangan,maka dari itu kita perlu berdiskusi untuk menentukan siapa yang cocok untuk peranan terkait. Dan Semua Perlu berkontribusi dengan menjalankan perannya dan juga apapun perannya sama pentingnya untuk mengsukseskan Tujuan Bersama.</p><h3>4. Pakai Online Manajemen Tools</h3><p>Di zaman yang segalanya menggunakan teknologi,kamu perlu memanfaatkannya dengan baik, Yaitu dengan memakai online Manajemen Tools</p><p>Jika tidak menggunakan Manajemen Tools maka semuanya akan menjadi ruwet,Salah satu contoh Online Manajemen Tools adalah Google docs,Google Sheet,Coda.id dll. Dengan adanya Online Manajemen Tools kamu bisa melihat check point terkait kerja Tim kamu.</p><h3>5. Bangun Trust &amp; Kebersamaan</h3><p>Dari segala hal untuk menjadi Tim yang Bersinergi, Kunci utamanya adalah membangun Kepercayaan dan Kebersamaan. Tanpa adanya kepercayaan didalam sebuah tim, maka inovasi, kolaborasi, creative thinking, sampai dengan produktivitas tim tersebut akan kurang. Tanpa kepercayaan juga, orang-orang akan menghabiskan waktu mereka untuk melindungi diri mereka sendiri, yang berarti waktu yang seharusnya dihabiskan untuk membantu tim dalam mencapai tujuannya akan terbuang dengan sia-sia. Tidak hanya itu, kepercayaan juga penting untuk berbagi pengetahuan. Sederhananya, ketika anggota tim percaya satu sama lain, maka mereka jauh lebih mungkin untuk saling berbagi pengetahuan yang mereka miliki.</p><p>Maka dari itu, kepercayaan merupakan suatu hal yang penting dalam sebuah tim yang bersinergi, karena kepercayaan dapat memberikan rasa aman bagi para anggotanya.</p>',	'Senin, 2 Januari 2023',	'assets/product/FElze41e5iDY7nnoCf7XmFblovvGogihrGwlV4xh.png',	'5-strategi-bangun-tim-yang-bersinergi',	NULL,	'2022-12-31 21:05:54',	'2023-01-02 02:36:31'),
(5,	'Macam-Macam Growth Hacking',	'Bisnis',	'<p>Bagaimana perusahaan khususnya yang bergerak di startup dapat menggunakan strategi growth hacking untuk mengembangkan bisnisnya?Modal, produk, dan pemasaran merupakan tiga hal penting dalam memulai dan menjalankan sebuah bisnis. Ketiga hal tersebut saling terkait untuk menciptakan usaha yang berkelanjutan.</p><p>Namun seringkali justru ketiga hal itu pula yang menjadi menjadi masalah dan menghambat seseorang dalam memulai bisnisnya. Ini terjadi khususnya pada bisnis yang baru mulai merintis ataupun bisnis yang memulai dengan modal yang kecil. Usaha rintisan atau startup contohnya, modal yang besar akan selalu menjadi kendala yang serius. Untuk mengatasi masalah ini maka muncul lah sebuah strategi yang dinamakan growth hacking.</p><p>Apa itu Growth Hacking?</p><blockquote><p><i><strong>Growth hacking merupakan sebuah teknik marketing yang biasanya digunakan oleh perusahaan startup dalam bidang teknologi yang berbasis kemampuan berpikir analitis, berbasis kreativitas dan metrik sosial untuk mendapatkan publikasi dan menjual produk.</strong></i></p></blockquote><p>Setelah Mengetahui apa itu Growth Hacking, ternyata ada 5 Macam Growth Hacking loh. Yuk simak kelanjutannya</p><h3>1. Word of Mouth (Virality)</h3><p>Maksud yang mudah dipahami dari \"Word of Mouth\" yaitu dari mulut ke mulut. Tentu saja menggunakan metode ini pertumbuhan customer dengan biaya marketing = 0</p><p>Strategi ini sangatlah ampuh dan mampu membantu pertumbuhan bisnis kamu dengan cepat. Dan untuk mendorong pelanggan tetap kamu melakukan promosi ke orang lain, maka kamu diberikan bonus setiap berhasil mengajak orang lain. Misalnya, diskon khusus, cashback, fitur tambahan, dan semacamnya.</p><h3>2. Pitch by Website (Landing Page)</h3><p>Landing Page adalah muara dari seluruh strategi dan aktivitas akuisisi. Tahapan ini sangatlah penting, sebab, kamu bisa mengetahui apakah calon pelanggan tertarik lebih jauh ke bisnis kamu. Tapi jangan lupa juga untuk memastikan landing page sudah berjalan optimal, serta terdapat monitor hasil dari setiap kanal dan materi promosi.</p><h3>3. Social Media Strategic</h3><p>Dalam metode Social Media Strategic kamu dapat menggunakan sosial media toko kamu dengan baik untuk selalu memposting yang berkaitan dengan produk yang kamu jual,tidak hanya tentang itu kamu pun bisa memposting hal lainnya,seperti Promosi,edukasi,serta interaktif kepada customer</p><p>Di tahapan ini kamu harus bisa menjangkau banyak calon pembeli alias memperluas brand awareness. Bagaimana caranya? Alih-alih promosi di berbagai platform, sebaiknya kamu promosi di tempat yang memang ramai dengan calon konsumen. Misal, startup kamu menyasar milenial atau generasi Z. Berarti, supaya tahapan ini bisa bekerja secara optimal, kamu promosi di media sosial Instagram atau TikTok yang mayoritas penggunanya adalah anak muda.</p><h3>4. Paid Acquisition</h3><p>Paid Acquisition artinya kita memanfaatkan iklan digital berbayar dengan melakukan penempatan di media sosial, Google, Amazon atau platform belanja lainnya, dan situs web lain yang terkait dengan produk atau layanan kita.</p><p>Di zaman siapa yang tidak tahu istilah Influencer,Youtubers atau istilah lainnya? Tentu Kamu tahu tentang itu,dalam metode Paid Acquisition ini juga bisa dilakukan dengan membayar salah satu Influencer terkenal untuk mempromosikan Produk Kamu loh!</p>',	'Minggu, 1 Januari 2023',	'assets/product/2dCDoDrZScgy0dVqyG9Tmm1tPgI2Fh3ff12wh3q0.png',	'macam-macam-growth-hacking',	NULL,	'2022-12-31 21:23:20',	'2022-12-31 21:28:39'),
(6,	'Bagaimana bisnis menghasilkan Revenue?',	'Bisnis',	'<p>Dalam dunia bisnis, Anda pasti kerap mendengar istilah revenue bukan? Apa itu Revenue?</p><p>Revenue model adalah suatu cara perusahaan atau produk untuk mendapatkan pendapatan. Ada banyak cara yang bisa digunakan untuk meningkatkan revenue perusahaan diantaranya adalah dengan membangun tim sales yang baik, meningkatkan aktivitas sales, meningkatkan penjualan dengan melakukan kampanye pemasaran dan hal-hal lain yang bisa dilakukan untuk meningkatkan revenue perusahaan.</p><p>Tapi, cara-cara tersebut tidak menjamin akan berhasil diterapkan setiap saat. Revenue model sendiri sangat terkait dengan Siapa Customer, Value apa yang ditawarkan dan Struktur Biaya. Perolehan Revenue sendiri terdiri dari beberapa sumber diantaranya :</p><h3>1. Hasil Penjualan</h3><p>Pada dasarnya revenue bisa diperoleh dari hasil penjualan produk yang dilakukan oleh sebuah perusahaan. Dari hasil penjualan ini bisa diperoleh keuntungan bagi perusahaan. Maka keuntungan ini bisa saja digolongkan sebagai revenue. Tentunya untuk mencapai hasil penjualan berlebih harus dilakukan upaya yang cukup sulit.</p><h3>2. Bunga Deposito</h3><p>Sumber perolehan revenue bagi perusahaan juga bisa berasal dari bunga deposito. Barangkali saja seorang pemilik bisnis mendepositokan uangnya di suatu lembaga keuangan seperti misalnya di bank. Maka apa yang disimpannya di lembaga keuangan dalam bentuk deposito ini akan menghasilkan bunga. Tentunya bunga deposito tersebut bisa menambah penghasilan atau pendapatan perusahaan.</p><h3>3. Investasi</h3><p>Seperti yang kita ketahui bahwa semakin berkembangnya zaman, banyak orang yang semakin “membuka mata” bahwa investasi sangatlah penting. Sehingga banyak dari mereka yang melakukan investasi jangka panjang demi mendapatkan keuntungan di masa depan nanti. Tidak hanya individu saja, perusahaan juga perlu melakukan investasi, karena memang investasi ini menjadi salah satu sumber keuntungan dari perusahaan.</p><p>Sebenarnya apa saja bisa kok menjadi investasi bagi perusahaan sehingga juga bisa menjadi sumber dari revenue. Investasi ini memang bisa hadir dalam bentuk apa saja, salah satunya saham. Yang jelas segala bentuk investasi ini bisa menambah pendapatan atau penghasilan bagi sebuah perusahaan. Maka dengan adanya investasi ini tentu saja perusahaan bisa mendapatkan keuntungan tersendiri.</p>',	'Minggu, 1 Januari 2023',	'assets/product/YVVzGrow570WdGDvfIkytMbrObgJGenTlPtCidrP.png',	'bagaimana-bisnis-menghasilkan-revenue',	NULL,	'2022-12-31 21:03:13',	'2022-12-31 21:20:17'),
(7,	'Seberapa Pentingnya Memiliki Legal Bisnis?',	'Bisnis',	'<p>Sebagai negara hukum, segala sesuatu yang ada di Indonesia sudah diatur dalam peraturan – undangan yang berlaku. Salah satu tentang perusahaan, perusahaan agar disetujui oleh pemerintah dan diproteksi, perusahaan ini harus memiliki izin usaha yang jelas.</p><p>Apa itu Legalitas?</p><p>Kata legalitas berasal dari kata \'legal\' adalah suatu hal yang sesuai dengan peraturan perundang-undangan atau hukum. Menurut KBBI, pengertian legalitas adalah perihal atau keadaan sah atau keabsahan.</p><p>Dari pengertian tersebut, legalitas berbicara mengenai suatu perbuatan atau benda yang diakui keberadaannya. Jadi, jika suatu perusahaan ingin diakui keberadaannya, maka perusahaan tersebut perlu mengurus legalitas perusahaan.</p><p>Jadi Seberapa Pentingnya Memiliki Legal Bisnis ? Jawabannya <strong>Sangat Penting </strong>karena merupakan jati diri yang menegaskan suatu usaha agar nantinya diakui oleh masyarakat dan negara. Legalitas perusahaan harus sah di mata hukum dengan dilindungi berbagai dokumen yang sesuai dengan peraturan perundang-undangan.</p><p>Tanpa adanya legalitas atau izin usaha, sebuah perusahaan akan susah berkembang. hal ini karena tidak ada kepercayaan orang, lembaga, atau perusahaan lain terhadap perusahaan tersebut. Perusahaan yang disetujui izin juga menunjukkan pemilik perusahaan melawan hukum yang berlaku di Indonesia.</p>',	'Minggu, 1 Januari 2023',	'assets/product/KMI7pwEQ6JnzsMTRzvpNoMDUri4EWbDXnElEJMYu.png',	'seberapa-pentingnya-memiliki-legal-bisnis',	NULL,	'2022-12-31 21:25:15',	'2022-12-31 21:25:15'),
(8,	'Business Idea mulai darimana?',	'Bisnis',	'<p>Beberapa orang tidak memulai bisnis karena tidak tahu bagaimana memulainya atau bahkan bingung mencari ide bisnis. Mereka lebih suka bekerja di sebuah perusahaan mapan daripada mencari peluang bisnis dan memulainya, yang mana penuh dengan ketidakpastian. Ide bisnis yang sangat baik adalah suatu ide yang bersumber dari pengalaman kerja kamu. Dengan pengalaman kerja pada suatu perusahaan, maka tentu saja akan menjadikan kamu sebagai orang yang mahir dalam hal tersebut. Sehingga untuk membangun bisnis yang serupa akan lebih mudah.</p><p>Banyak pengusaha sukses yang menemukan ide bisnis mereka dari pengalaman yang tidak menyenangkan atau pengalaman pahit. Mereka tidak ingin orang lain mengalami hal yang sama, maka mereka menciptakan suatu usaha yang mampu memecahkan masalah yang telah dialaminya tersebut. Sebagai contohnya, karena susahnya mendapatkan area parkir yang nyaman, aman dan mudah, maka muncul suatu ide usaha tempat parkir kendaraan dengan fasilitas parkir valet.</p><p>Selain itu kamu juga bisa menemukan ide bisnis dengan melihat kondisi dan permasalahan yang ada di sekitar. Banyak dari mereka yang memiliki beberapa ide tapi tidak tahu mana yang layak untuk dijalankan. Mereka belum mampu mengidentifikasi peluang pasar yang tepat, yang mana menjanjikan permintaan yang cukup untuk menghasilkan keuntungan. Dari mana sumber ide bisnis berasal? Itu dapat berasal dari:</p><ul><li>Keterampilan atau hobi</li><li>Pengalaman atau permasalah pribadi dan orang lain</li><li>Pengalaman Kerja sebelumnya</li><li>Konferensi dan pameran</li><li>Riset pasar</li></ul><p>Dengan mempelajari kebutuhan masyarakat, apa saja yang kita, teman, tetangga cari tetapi tidak ditemukan atau susah untuk dipenuhi oleh pasar sekitar. Dengan menemukan masalah-masalah tersebut, maka kita akan menemukan celah untuk menjadi pengusaha sukses.</p>',	'Senin, 9 Januari 2023',	'assets/product/2mXVPrTiaLat7ciFWElgmABSZb3byjrSI9KBbV4s.png',	'business-idea-mulai-darimana',	NULL,	'2022-12-31 21:26:19',	'2023-01-08 21:41:21'),
(9,	'Membuat Pitch Deck Idea',	'Bisnis',	'<p>Jika kamu terlibat dalam pengembangan startup, memiliki pitch deck adalah penting. Tentu, kamu berharap perusahaan tempatmu bernaung mendapatkan pendanaan, bukan?</p><p>Nah, pitch deck adalah presentasi singkat yang menjelaskan gambaran umum mengenai rencana bisnismu.</p><blockquote><p>“<i><strong>Pitching is about sell your dream,your believe, Not your product”</strong></i> - Pak Mumu</p></blockquote><p>Pitch deck biasanya dibuat menggunakan berbagai macam tools umum seperti PowerPoint, KeyNote, Canva atau Prezi.</p><p>Tak hanya untuk menjelaskan rencana bisnis, pitch deck juga bisa kamu gunakan saat bertemu dengan perusahaan lain untuk bekerja sama atau orang yang akan menjadi calon co-founder.</p><p>Tujuan dari dibuatnya pitch deck adalah untuk menarik investor agar mau membiayai atau mendanai startup yang dibuat.</p><p>Oleh karena itu, dalam membuat pitch deck tidaklah boleh asal-asalan. Tampilannya haruslah menarik dan informatif. Nah, bagaimana cara membuat pitch deck yang benar? Yuk simak selengkapnya</p><p>Susunan Pitch Deck ada 3 macam,Yaitu :</p><p><strong>1. Validation yang berisi : Cover, problem ,solution dan progress</strong></p><p><strong>2. Opportunity yang berisi : Market size dan business model</strong></p><p><strong>3. Execution : Team, vision dan call to action</strong></p><p>Kamu harus mempelajari delivery presentasi singkat tetapi seperti storytelling. Dengan kamu membuat script presentasi dan melakukan latihan maka kamu dapat mempersingkat waktu presentasi dan menyampaikannya dengan jelas.</p><p>Ternyata untuk menghasilkan presentasi yang lancar diperlukan latihan setidaknya sekitar 1-2 Minggu, Latihan di depan kaca adalah salah satu solusi latihan buat kamu yang pemalu.</p>',	'Senin, 2 Januari 2023',	'assets/product/7kYaGY6T7jKbPnzh7whGMjrOhRS0VnodVVjTHSY9.png',	'membuat-pitch-deck-idea',	NULL,	'2022-12-31 21:27:41',	'2023-01-02 02:44:54'),
(10,	'Tips Mencari barang thrift',	'Fashion',	'<p>Jika melirik pada sejarahnya, budara thrifting ini merupakan bentuk protes atas budaya konsumen fast fashion. Budaya thrift shop ini juga memberikan nilai cinta lingkungan.</p><p>Pasalnya saat membeli baju thrift berarti kita sedang berkontribusi untuk mengurangi sampah anorganik terutama yang berasal dari pakaian.</p><h3>Tips Memilih Baju Thrift</h3><p>&nbsp;</p><h4>Cek Kualitas Jahitan</h4><p>Hal pertama yang harus kamu lihat saat hendak membeli pakaian thrift yaitu cek kualitas jahitan dari pakaian yang akan dibeli. Pastikan semua jahitan dalam pakaian masih bagus. Dengan jahitan yang bagus, maka pakaian tersebut bisa lebih awet dan dapat dikenakan dalam waktu yang lama.</p><h4>Lihat warna baju</h4><p>Selain memperhatikan jahitan baju, Anda juga harus memastikan warna pakaian masih bagus dan cerah. Selain menunjukan bahwa pakaian tersebut berkualitas, warna baju thrift yang masih cerah juga membuat Anda lebih percaya diri saat mengenakannya.</p><h4>Pastikan tidak ada noda</h4><p>Dalam memilih baju thrift, pastikan untuk memeriksa noda pada pakaian tersebut. Jika pakaian bekas terdapat noda, sebaiknya jangan membeli baju tersebut. Karena pakaian yang sudah bernoda selain kurang nyaman dipandang, juga terlihat tidak rapi.</p><h4>Cari ukuran yang sesuai</h4><p>Baju thrift biasanya dikirim dari luar negeri. Itu artinya, ukurannya akan relatif lebih besar dibandingkan baju yang dibuat di Indonesia. Maka dari itu, Anda harus cermat untuk membeli baju thrifting yang ukurannya sesuai dengan badan Anda. Dengan demikian, Anda bisa nyaman saat mengenakannya.</p><h4>Cek keaslian barang</h4><p>Salah satu daya tarik dari membeli baju thrift yaitu karena harganya yang relatif terjangkau. Bahkan untuk produk branded pun harganya bisa sangat miring dibandingkan produk baru. Meskipun demikian, jika ingin membeli produk thrift yang bermerek, pastikan Anda mengecek keaslian produk tersebut. Jangan sampai Anda membeli produk palsu atau KW.</p><h4>Beli ditempat Terpercaya</h4><p>Tips memilih baju thrift berkualitas lainnya yaitu, pastikan Anda membeli pakaian tersebut di thrift shop&nbsp;terpercaya. Cek keberadaan toko tersebut dan lihat juga review dari pelanggan sebelumnya. Tak hanya itu, pastikan juga toko yang dituju telah melakukan sortasi dan membersihkan pakaian thrift sebelum dijualnya. Dengan demikian, barang yang Anda dapatkan tak hanya bagus namun juga aman.</p><p>Kamu bisa percayakan pada kami di <strong>Thriftophia</strong></p>',	'Senin, 2 Januari 2023',	'assets/product/gH956o8o6NON918WmmBtKmeYze7pT8z6IutDzKga.png',	'tips-mencari-barang-thrift',	NULL,	'2022-12-31 21:28:24',	'2023-01-01 23:55:43'),
(11,	'Apa Itu Marketsize?',	'Bisnis',	'<p>Market size adalah total nilai penjualan atau konsumen yang dapat dilihat para pemangku kepentingan. Market size sering diukur dalam kurun waktu satu tahun. Market size dapat membantu potensi pasar sebelum meluncurkan lini produk atau bisnis baru. Pasalnya kamu dapat melihat apakah uang dan waktu kamu layak diinvestasikan ke produk atau bisnis baru tersebut.</p><p>Konsep ini serupa dengan market share atau pangsa pasar, artinya total bagian dari keseluruhan pasar yang dimiliki bisnis atas penjualan dan konsumennya.</p><p>Market size juga digunakan untuk mengetahui keberhasilan investasi beberapa tahun yang lalu. Apabila profit investasi tidak stabil, perusahaan dapat menunda peluncuran produk atau bisnis baru.</p><p>Contoh market size yaitu pemilik usaha dapat melihat keberhasilan investasinya yang diperoleh dalam beberapa tahun. Jika prospeknya tidak bagus, perusahaan dapat menunda terlebih dahulu rilis produk atau proyek lainnya yang akan mengeluarkan biaya besar.</p><p>Jika kamu hendak mengeluarkan produk baru yang sama sekali berbeda dengan kompetitor, kamu harus berpikir lebih tentang potensi pasar baru dan mengestimasikan market size yang baru berdasarkan asumsi permintaan.</p><p>kamu juga harus memutuskan apakah kamu membidik pasar global, pasar domestik, atau pasar regional untuk barang atau jasa yang ditawarkan. Hal ini biasanya berdasarkan rencana lokasi penjualan produk kamu.</p>',	'Minggu, 1 Januari 2023',	'assets/product/EE9R6LgToKrDxwkGztTs8qZlm8dojekIeLVO7Ynq.png',	'apa-itu-marketsize',	NULL,	'2022-12-31 21:24:06',	'2023-01-01 01:14:38')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `title` = VALUES(`title`), `category` = VALUES(`category`), `description` = VALUES(`description`), `date` = VALUES(`date`), `photo` = VALUES(`photo`), `slug` = VALUES(`slug`), `deleted_at` = VALUES(`deleted_at`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int NOT NULL,
  `products_id` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `carts` (`id`, `users_id`, `products_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9,	22,	8,	NULL,	'2022-12-27 21:33:12',	'2022-12-27 21:33:12'),
(10,	22,	7,	NULL,	'2022-12-27 22:15:13',	'2022-12-27 22:15:13')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `users_id` = VALUES(`users_id`), `products_id` = VALUES(`products_id`), `deleted_at` = VALUES(`deleted_at`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Faqih Azhar',	'faqih@gmail.com',	'Ini komentar percobaan',	NULL,	'2022-12-26 08:17:31',	'2022-12-26 08:17:31'),
(2,	'Anyong',	'anyong@example.com',	'Ini testing kedua',	'2022-12-29 06:14:29',	'2022-12-27 21:09:58',	'2022-12-29 06:14:29')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `email` = VALUES(`email`), `comment` = VALUES(`comment`), `deleted_at` = VALUES(`deleted_at`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2022_12_14_135928_create_categories_table',	1),
(6,	'2022_12_14_140438_create_products_table',	1),
(7,	'2022_12_14_141136_create_product_galleries_table',	1),
(8,	'2022_12_14_143253_create_transactions_table',	1),
(9,	'2022_12_14_144224_create_transaction_details_table',	1),
(10,	'2022_12_14_145133_create_carts_table',	1),
(11,	'2022_12_14_145640_create_comments_table',	1),
(12,	'2022_12_29_012121_create_transactions_table',	2),
(13,	'2022_12_29_012856_create_transaction_details_table',	2),
(14,	'2022_12_29_014319_create_transaction_details_table',	3),
(15,	'2022_12_29_014358_create_transactions_table',	3),
(16,	'2023_01_01_020504_create_blogs_table',	4)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `migration` = VALUES(`migration`), `batch` = VALUES(`batch`);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `product_galleries`;
CREATE TABLE `product_galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `products_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `product_galleries` (`id`, `products_id`, `photo`, `is_default`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(15,	'9',	'assets/product/ID0sbrNgt7c9Ta8JxmRkqMXU60AlmBZlsjXs92jJ.webp',	1,	'nike-heritage',	NULL,	'2022-12-28 06:42:38',	'2022-12-28 06:42:38'),
(18,	'4',	'assets/product/0hI0GMfrmHll109Ym1GwW2zo17NSK2eilueiG54a.webp',	1,	'luka-1-next-nature-pf',	NULL,	'2022-12-28 06:45:30',	'2022-12-28 06:45:30'),
(19,	'5',	'assets/product/1U00wijRcXXQAjH4Qd4zop9CuAvBaPr6sbH7psZ5.webp',	1,	'nike-air-max-90-gtx',	NULL,	'2022-12-28 06:45:59',	'2022-12-28 06:45:59'),
(20,	'5',	'assets/product/SyJ3e8hOIcCUdX0MQkYwKL7ykqBYwHYqoNSNmoMC.jpg',	0,	'nike-air-max-90-gtx',	NULL,	'2022-12-28 06:46:14',	'2022-12-28 06:46:14'),
(21,	'5',	'assets/product/8gygwQMaPyyCXKfWPTmhnxfMqTjRUpDMynwkDzd2.webp',	0,	'nike-air-max-90-gtx',	NULL,	'2022-12-28 06:46:29',	'2022-12-28 06:46:29'),
(22,	'5',	'assets/product/FPCNTkaoylYmUTBXjm2hbOVTe1eCJCwLzD2mOhOv.webp',	0,	'nike-air-max-90-gtx',	NULL,	'2022-12-28 06:47:00',	'2022-12-28 06:47:00'),
(23,	'5',	'assets/product/QHUTMdIb1ZDpe9ea3fuFaQCiK95TrGcVujYhUdRI.webp',	0,	'nike-air-max-90-gtx',	NULL,	'2022-12-28 06:47:16',	'2022-12-28 06:47:16'),
(24,	'8',	'assets/product/m09vL35zNSlhEiRwt9zbeNx5oqJXumiDF7LZdhj5.jpg',	1,	'nike-zoomx-vaporfly-2',	NULL,	'2022-12-28 06:47:46',	'2022-12-28 06:47:46'),
(25,	'7',	'assets/product/EZzs0zJgpAHrJ9x4n5QlDGKm7bCnouLDjQLpZRCV.webp',	1,	'nike-acg-icon-fleece-polartec',	NULL,	'2022-12-28 06:48:08',	'2022-12-28 06:48:08'),
(26,	'10',	'assets/product/KFJVidmQcgvKgP8DHgtEpdvrSH2wQIuaZzN9yTCt.webp',	1,	'nike-air-force-1-low-retro',	NULL,	'2022-12-28 07:41:40',	'2022-12-28 07:41:40'),
(27,	'10',	'assets/product/U0VbyfmJ9MoRJFtusRReT1lbZxlxh2uaU0zCXb6M.webp',	0,	'nike-air-force-1-low-retro',	NULL,	'2022-12-28 07:42:03',	'2022-12-28 07:42:03'),
(28,	'10',	'assets/product/OGykdUM0gNXGKoGpDWr6pbpp4qGYFqhvObrQqW0p.webp',	0,	'nike-air-force-1-low-retro',	NULL,	'2022-12-28 07:42:22',	'2022-12-28 07:42:22'),
(29,	'10',	'assets/product/hRFL2K2u8CPIHo0zYULRj4i5NZsB2YN2ZzEVkGvJ.webp',	0,	'nike-air-force-1-low-retro',	NULL,	'2022-12-28 07:42:44',	'2022-12-28 07:42:44'),
(30,	'10',	'assets/product/dCMd8A6bSTWOprI1F9a7a4ledBuVC2CoR6CPyisb.webp',	0,	'nike-air-force-1-low-retro',	NULL,	'2022-12-28 07:42:59',	'2022-12-28 07:42:59'),
(31,	'8',	'assets/product/e4csGGl9AiaO0Z7WKLX9O98RT5RV2lb6DvCRJS2x.webp',	0,	'nike-zoomx-vaporfly-2',	NULL,	'2022-12-28 07:45:50',	'2022-12-28 07:45:50'),
(32,	'8',	'assets/product/s7FSdXMmzu5UomL6CzTuX1ccv769giCibg83ipu3.jpg',	0,	'nike-zoomx-vaporfly-2',	NULL,	'2022-12-28 07:46:07',	'2022-12-28 07:46:07'),
(33,	'8',	'assets/product/j4trwutDZ7tySXvG9fwW6OcG7r3yXfPpDdYElFVh.jpg',	0,	'nike-zoomx-vaporfly-2',	NULL,	'2022-12-28 07:46:21',	'2022-12-28 07:46:21'),
(34,	'8',	'assets/product/YPnCkd9fJJgoqnAAoI0jQKiEBOPrKNO8xWlL8aLT.webp',	0,	'nike-zoomx-vaporfly-2',	NULL,	'2022-12-28 07:46:32',	'2022-12-28 07:46:32'),
(35,	'9',	'assets/product/F7amTqEqXkjzbUlmRm1qpza5cjTIaYXZ6QlBY7Lh.webp',	0,	'nike-heritage',	NULL,	'2022-12-28 07:48:06',	'2022-12-28 07:48:06'),
(36,	'9',	'assets/product/wulAoXahNBk4ZJy4jGpJzYdIMr6vbxLZi0vwYX5Y.jpg',	0,	'nike-heritage',	NULL,	'2022-12-28 07:48:20',	'2022-12-28 07:48:20'),
(37,	'9',	'assets/product/Guby8C7OMLNFmAAiekBfRbQIjENhaHUJxcPyekMg.jpg',	0,	'nike-heritage',	NULL,	'2022-12-28 07:48:34',	'2022-12-28 07:48:34'),
(38,	'7',	'assets/product/4FFusDQ5WJkG3JSBFxnTGI9Gq8H4A6ILfavdVJ07.webp',	0,	'nike-acg-icon-fleece-polartec',	NULL,	'2022-12-28 07:50:42',	'2022-12-28 07:50:42'),
(39,	'7',	'assets/product/pGoN1E1oqTdeCcPUsQbuAXBftb5gVs9HZJnayqEK.jpg',	0,	'nike-acg-icon-fleece-polartec',	NULL,	'2022-12-28 07:50:56',	'2022-12-28 07:50:56'),
(40,	'7',	'assets/product/7aJTaX9JuYHr4E3Qbw4CA5VCZjm8PH35RwbR0XIk.webp',	0,	'nike-acg-icon-fleece-polartec',	NULL,	'2022-12-28 07:51:09',	'2022-12-28 07:51:09'),
(41,	'4',	'assets/product/jTC0QY65MWCsFGW7fWHaAxje4D3QPTcxm9WMPpnR.webp',	0,	'luka-1-next-nature-pf',	NULL,	'2022-12-28 07:51:18',	'2022-12-28 07:51:18'),
(42,	'4',	'assets/product/EI2SaK4Px3V7kfbW3md39eHj3qkvXNqJHHhaIE2G.webp',	0,	'luka-1-next-nature-pf',	NULL,	'2022-12-28 07:51:27',	'2022-12-28 07:51:27'),
(43,	'4',	'assets/product/PNOGAWgI1iJt1lUxmcAMwlk5jbTIIuSI2sMJoM7A.webp',	0,	'luka-1-next-nature-pf',	NULL,	'2022-12-28 07:51:46',	'2022-12-28 07:51:46'),
(44,	'4',	'assets/product/XsPixi8oVsXKiZWJefoDuaWzjpan8verNnHU1rpM.webp',	0,	'luka-1-next-nature-pf',	NULL,	'2022-12-28 07:51:54',	'2022-12-28 07:51:54'),
(45,	'11',	'assets/product/ba8yNFRA76opelYWZjOKpKKMwtO5nYHhP549Qbm9.png',	1,	'nike-hyperdunk-2017',	NULL,	'2023-01-13 23:37:51',	'2023-01-13 23:37:51')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `products_id` = VALUES(`products_id`), `photo` = VALUES(`photo`), `is_default` = VALUES(`is_default`), `slug` = VALUES(`slug`), `deleted_at` = VALUES(`deleted_at`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `type`, `description`, `price`, `quantity`, `slug`, `size`, `condition`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4,	'Luka 1 \"Next Nature\" PF',	'Sepatu',	'<p>Didesain untuk No. 77 dan dibuat untuk setiap atlet yang mendambakan kecepatan dan efisiensi, debut Luka menghadirkan barang-barang tersebut. Sepatu pertama dengan busa Formula 23 full-length, memiliki ukuran ultra-mendukung yang dibuat dengan mempertimbangkan step-back. Sementara itu, kabel Flight Wire yang kuat dan ringan membuat Anda merasa terkendali—dan versi ini dibuat lebih lebar dan didesain untuk bermain di lapangan luar ruangan.</p>',	1729000,	1,	'luka-1-next-nature-pf',	'42',	'Sangat Bagus',	NULL,	'2022-12-19 07:18:53',	'2022-12-31 18:37:23'),
(5,	'Nike Air Max 90 GTX',	'Sepatu',	'<p>Dirancang untuk membuat Anda tetap bersenang-senang saat hujan mulai turun, Nike Air Max 90 GTX menghadirkan sepatu lari juara tahan air yang membantu mendefinisikan era 90-an. Tentu menjadi edisi yang didambakan, Anda yang telah mencoba dan mengujinya mendapatkan bagian atas GORE-TEX sehingga Anda dapat membuat cipratan air tanpa basah.</p>',	2329000,	1,	'nike-air-max-90-gtx',	'42',	'Sangat Bagus',	NULL,	'2022-12-19 07:21:34',	'2022-12-31 18:37:28'),
(7,	'Nike ACG Icon Fleece Polartec',	'Jaket Anak',	'<p>Pergi untuk hiking sehari, perjalanan berkemah, atau sekadar jalan-jalan pagi yang dingin ke sekolah? Nike ACG Icon Fleece Hoodie adalah lapisan pilihan Anda untuk petualangan luar ruangan. Terbuat dari bulu Polartec®, terasa mewah dan sangat lembut untuk getaran ekstra nyaman. Plus, ada banyak penyimpanan saku. Oversized fit memberi Anda ruang untuk melapisi sehingga Anda siap untuk petualangan apa pun yang telah Anda rencanakan.</p>',	849000,	1,	'nike-acg-icon-fleece-polartec',	'L',	'Sangat Bagus',	NULL,	'2022-12-19 07:45:32',	'2022-12-31 18:37:34'),
(8,	'Nike ZoomX Vaporfly 2',	'Sepatu',	'<p>Lanjutkan evolusi kecepatan berikutnya dengan sepatu balap yang dibuat untuk membantu Anda mengejar tujuan dan rekor baru. Ini membantu meningkatkan kenyamanan dan sirkulasi udara dengan bagian atas yang didesain ulang. Dari lari 10K hingga maraton, model ini, seperti versi sebelumnya, memiliki bantalan yang responsif dan penyangga yang aman untuk mendorong Anda mencapai kemampuan terbaik Anda.</p>',	3209000,	1,	'nike-zoomx-vaporfly-2',	'42',	'Sangat Bagus',	NULL,	'2022-12-19 07:47:07',	'2022-12-31 18:37:38'),
(9,	'Nike Heritage',	'Drawstring Bag',	'<p>Ambil perlengkapan Anda dan gunakan Nike Heritage Gymsack. Ringan dan sederhana, ini adalah cara mudah untuk menyimpan dan membawa perlengkapan yang Anda butuhkan untuk berlatih, bermain, dan memaksimalkan hari Anda. Produk ini terbuat dari setidaknya 65% poliester daur ulang.</p>',	259000,	1,	'nike-heritage',	'L',	'Sangat Bagus',	NULL,	'2022-12-27 21:05:28',	'2022-12-31 18:38:23'),
(10,	'Nike Air Force 1 Low Retro',	'Sepatu',	'<p>Sudah punya warna fav kamu belum? Jangan khawatir. Seri <i>\"Colour of the Month\"</i> memungkinkan Anda memenuhi kebutuhan Anda sambil merayakan sepotong sejarah Nike yang tidak banyak diketahui—seri Color of the Month asli, pada tahun 1984, mungkin telah menyelamatkan Air Force 1 dari kepunahan. Itu benar, penerbitan ulang tidak pasti di awal sepatu, tetapi toko olahraga di Baltimore melihat mereka menjual seperti kue panas dan tahu AF-1 akan menjadi identik dengan fashion dan budaya jalanan.</p><p>Jadi, mereka meminta cara warna khusus untuk dijual dari etalase toko mereka… dan sisanya adalah sejarah. Dari bahan yang murni hingga warna yang tajam (dan bahkan sikat pembersih sepatu), edisi ini memberikan pelajaran tentang gaya di luar lapangan yang didambakan. Setiap kali Anda mengguncang mereka, pastikan untuk memikirkan pemilik toko visioner di Baltimore yang mewujudkan semuanya.</p>',	2149000,	1,	'nike-air-force-1-low-retro',	'43',	'Bagus',	NULL,	'2022-12-28 07:40:30',	'2022-12-31 18:12:18'),
(11,	'Nike Hyperdunk 2017',	'Sepatu',	'<p><strong>ENERGI UNTUK REAKSI INSTAN</strong></p><p>Nike React Hyperdunk 2017 Flyknit Basketball Shoe menghadirkan revolusi terbaru dalam bantalan bola basket: busa Nike React ultra-responsif yang dirancang untuk membantu Anda bermain lebih keras dan bermain lebih lama.</p><p>&nbsp;</p><p><strong>Respon kenyal. </strong>Busa Nike React yang sangat ringan dan tahan lama menghadirkan sensasi lembut dan kenyal untuk membantu menjaga kaki Anda tetap nyaman hingga bel akhir.</p><p><strong>Dukungan yang Ditargetkan. </strong>Bernapas Flyknit mengintegrasikan area peregangan dan dukungan di mana Anda paling membutuhkannya, berkontur dengan bentuk kaki Anda untuk rasa nyaman dan ringan. Kabel Flywire terintegrasi dengan tali untuk dukungan tambahan.</p><p><strong>Traksi. </strong>Sol luar karet mendukung titik tekanan Anda sekaligus memberikan traksi di tempat yang tepat.</p><p>&nbsp;</p><p><strong>Keterangan lebih lanjut:</strong></p><p>Template yang dapat dilepas, cocok untuk diganti dengan template pribadi Anda.</p><p>Direkomendasikan untuk penggunaan di dalam ruangan (platform atau karet), dapat digunakan pada permukaan luar tetapi daya tahannya dapat dikurangi</p>',	300000,	1,	'nike-hyperdunk-2017',	'42/27 cm',	'Bagus',	NULL,	'2023-01-13 23:37:22',	'2023-01-13 23:37:22')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `type` = VALUES(`type`), `description` = VALUES(`description`), `price` = VALUES(`price`), `quantity` = VALUES(`quantity`), `slug` = VALUES(`slug`), `size` = VALUES(`size`), `condition` = VALUES(`condition`), `deleted_at` = VALUES(`deleted_at`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `transaction_details`;
CREATE TABLE `transaction_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `transactions_id` int NOT NULL,
  `products_id` int NOT NULL,
  `price` int NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transaction_details` (`id`, `transactions_id`, `products_id`, `price`, `code`, `shipping_status`, `resi`, `created_at`, `updated_at`) VALUES
(7,	3,	5,	2329000,	'TRXTF524002',	'PENDING',	'',	'2022-12-29 05:49:45',	'2022-12-29 05:49:45'),
(8,	3,	4,	1729000,	'TRXTF996988',	'PENDING',	'',	'2022-12-29 05:49:45',	'2022-12-29 05:49:45'),
(9,	3,	8,	3209000,	'TRXTF346237',	'PENDING',	'',	'2022-12-29 05:49:45',	'2022-12-29 05:49:45')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `transactions_id` = VALUES(`transactions_id`), `products_id` = VALUES(`products_id`), `price` = VALUES(`price`), `code` = VALUES(`code`), `shipping_status` = VALUES(`shipping_status`), `resi` = VALUES(`resi`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int NOT NULL,
  `inscurance_price` int NOT NULL,
  `shipping_price` int NOT NULL,
  `total_price` int NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transactions` (`id`, `users_id`, `inscurance_price`, `shipping_price`, `total_price`, `address`, `transaction_status`, `code`, `zip_code`, `phone`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3,	1,	0,	0,	7267000,	'Kp.Kukun RT.009/005 Desa Sirnagalih Kec.Jonngol Kab.Bogor',	'SUCCESS',	'THRTF45743',	16830,	'081291968989',	'Muhamad Faqih Azhar',	NULL,	'2022-12-29 05:49:45',	'2022-12-29 05:57:34')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `users_id` = VALUES(`users_id`), `inscurance_price` = VALUES(`inscurance_price`), `shipping_price` = VALUES(`shipping_price`), `total_price` = VALUES(`total_price`), `address` = VALUES(`address`), `transaction_status` = VALUES(`transaction_status`), `code` = VALUES(`code`), `zip_code` = VALUES(`zip_code`), `phone` = VALUES(`phone`), `name` = VALUES(`name`), `deleted_at` = VALUES(`deleted_at`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `number`, `roles`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Faqih Azhar',	'faqih@gmail.com',	NULL,	'$2y$10$izrvOmXuwmvQh0G2BusmF.LNC1AVMYr.F1Lzpyv7jcDKMm4iT6bxu',	'081291968989',	'ADMIN',	NULL,	NULL,	'2022-12-23 01:55:20',	'2022-12-23 02:01:41'),
(2,	'Annisa Maulida',	'nisa@gmail.com',	NULL,	'$2y$10$0saPr.LQHogYUNmiQ2pHmeFj4bjPtnKtoi2MDmorE7ax6m608J7la',	'087891230789',	'ADMIN',	NULL,	NULL,	'2022-12-23 01:38:27',	'2023-01-02 00:23:13'),
(3,	'Fahri Prastyo',	'fahri@gmail.com',	NULL,	'$2y$10$rtYZZTmnECEntZRkTZxPPOPHkmAmJt7y0IFelz.hNBBWbCX51UsYe',	'081225096785',	'ADMIN',	NULL,	NULL,	'2022-12-23 01:58:50',	'2023-01-02 00:23:21'),
(4,	'Siti Nur Kaffah',	'eva@gmail.com',	NULL,	'$2y$10$YhoLetja03gawcIsnIaGHObKFoHTIt25nBHAG/UJyQN1OtlWBv3Fm',	'087814325643',	'ADMIN',	NULL,	NULL,	'2022-12-23 02:01:06',	'2023-01-02 00:23:31'),
(23,	'Test',	'test@example.com',	NULL,	'$2y$10$84LW9MJpbYLOsowzqIeaMOn6QvoSrIwYbV0I55pDJBw5bxNzOOVii',	'000000000000',	'USER',	NULL,	NULL,	'2023-01-09 21:13:48',	'2023-01-09 21:13:48')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `email` = VALUES(`email`), `email_verified_at` = VALUES(`email_verified_at`), `password` = VALUES(`password`), `number` = VALUES(`number`), `roles` = VALUES(`roles`), `deleted_at` = VALUES(`deleted_at`), `remember_token` = VALUES(`remember_token`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

-- 2023-06-28 12:27:52
