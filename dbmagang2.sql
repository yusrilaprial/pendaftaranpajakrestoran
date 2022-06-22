-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2022 pada 03.36
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmagang2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(10) NOT NULL,
  `info` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_info`, `info`, `deskripsi`) VALUES
(1, 'WhatsApp Image 2022-02-08 at 19.59.04.jpeg', 'Palembang, InfoPublik - Pemerintah Kota Palembang tahun ini menargetkan Pendapatan Asli Daerah (PAD) senilai Rp1,070 triliun.\r\nKepala Badan Pengelolaan Pajak Daerah (BPPD) Kota Palembang, Herly Kurniawan, mengatakan, tahun 2021, target PAD Rp1,08 triliun terealisasi Rp837,94 miliar atau 77,39 persen.\r\nMemang tidak mencapai target. Tapi, jika dibandingkan 2019 sebelum COVID-19 yang Rp832 miliar, tahun 2021 ini melampaui Rp5 miliar.\r\n\"Capaian tahun lalu cukup memuaskan meski di saat COVID-19 sedang memuncak, jika dibandingkan sebelum COVID-19 capaian tahun 2021 itu lebih tinggi,\" katanya, usai Rapat Evaluasi penerimaan pajak daerah (PPD), sekaligus penandatanganan surat pernyataan pencapaian target 2022 di Lingkungan BPPD Kota Palembang, Senin (10/1/2022).\r\nPenandatanganan surat pernyataan pencapaian target pajak oleh Kepala BPPD dan para pegawai pajak, ini sebagai bukti komitmen untuk mengejar target pajak.\r\n“Komitmen kita pegawai BPPD ini (surat pernyataan pencapaian target) menjadi pemacu untuk kerja yang optimal. Ketika tidak capai target, kita siap diberhentikan,” ujar Herly.\r\nIa mengatakan, dari 11 jenis pajak sumber PAD Kota Palembang, hampir seluruhnya jadi andalan, kecuali 3 jenis yang selama ini tidak potensial.\r\n\"Yaitu air Pajak Air Tanah, Pajak Burung Walet, dan dan Pajak Mineral Bukan Logam dan Batuan, karena sumber dan hasilnya sedikit,” kata Herly.\r\nAdapun 8 item pajak lainnya sangat potensial untuk kita kembangkan di 2022. Seperti PBB, BPHTB, Hotel, Restoran, PPJ Non PLN, Hiburan, Pajak Penerangan Jalan (PPJ) PLN, Reklame dan Parkir.\r\nDari 11 pajak, pajak PBB paling tinggi capaianya, yakni sebesar Rp241.699.42.652, kedua adalah Pajak Penerangan Lampu Jalan dari PLN Rp187.250.939.537, BPHTB Rp176.969.413.553, pajak Restoran Rp130.756.784.483, pajak hotel Rp42.604.697.471, pajak reklame Rp22.892.112.519, pajak parkir Rp17.684.098.185 dan pajak hiburan Rp11.202.910.881.\r\n\"Melalui kerja sama dengan Kejari Palembang, tahun 2021 berhasil menagih piutang Rp1,9 miliar,\" ujar Herly.\r\nWali Kota Palembang, H Harnojoyo, Harnojoyo mengatakan, komitmen pegawai BPPD ini perlu dilakukan. Bukan hanya di pimpinan saja.\r\n\"Tapi juga semua yang ada di BPPD ini harus punya komitmen jika tidak capai target siap diberhentikan,\" katanya.\r\nKarena itu, Harnojoyo meminta pegawai BPPD harus tahu potensi pajak dan apa yang mesti dilakukan.\r\n\"Yang bertugas untuk pajak hotel bisa catat. Berapa jumlah hotel kita, berapa harganya, kalau tak capai target kenapa. Harus paham dengan ini, dan posisi saudara sebagai pegawai BPPD,\" ujarnya.\r\nBegitupun yang item Pajak PBB, harus tahu berapa jumlah SPT diterbitkan. Harus tahu berapa potensi. Kemudian, harus update data, yang dulu belum ada gedung, sekarang ada, ruang yang dulu belum ada NJOP sudah ada NJOP.\r\n\"Kita juga tekankan pegawai jangan sesekali bermain. Apa yang ditandatangani tadi tidak hanya jadi seremoni saja. Tapi, hasilnya dilihat dengan kinerja melalui capaian pajak,” ujar Harnojoyo.\r\nDalam evaluasi kinerja pegawai di lingkungan BPPD untuk menilai kinerja berdasarkan komitmen yang sudah ditandatangani, maka ini akan dilakukan per semester.\r\n\"Akan kita evaluasi per 6 bulan sekali, kalau 3 bulan sekali waktunya terlalu singkat (mepet), kalau sudah 6 bulan capaian masih jauh artinya itu tanda tanya ada apa,\" katanya.\r\nDalam kesempatan itu juga, Wali Kota Palembang dua periode ini mengimbau kepada masyarakat dan wajib pajak untuk tertib membayar pajak.\r\n“Marilah masyarakat dan wajib pajak dari ritel, restoran dan parkir untuk patuh membayar pajak dengan tertib,” ujar Harnojoyo.\r\nHadir di acara penandatanganan ini, antara lain, Ketua DPRD Kota Palembang Zainal Abidin, Kapolrestabes Palembang Kombes Pol Mokhamad Ngajib, Ketua Kejati Palembang Rustam Gaus.\r\nSerta, Sekretaris Daerah Palembang Ratu Dewa, Kadin Kominfo Edison, Kepada BPPD Palembang Herly Kurniawan dan kepada OPD Pemkot Palembang terkait. (Kemal/toeb)'),
(2, 'WhatsApp Image 2022-02-08 at 19.58.44.jpeg', 'Realisasi penerimaan pajak daerah kota Palembang capai 75,69 persen\r\n\r\nSumatera Selatan (ANTARA) - Realisasi penerimaan pajak daerah Kota Palembang, Sumatera Selatan, sudah mencapai 75,69 persen atau senilai Rp819,4 miliar yang dihimpun Badan Pengelolaan Pajak Daerah (BPPD) setempat.\r\nBesaran nilai tersebut merupakan akumulasi dari 11 jenis penerimaan pajak yakni pajak hotel, restoran, hiburan, reklame, penerangan jalan diharilkan sendiri (non PLN), penerangan jalan sumber lain (PLN), retribusi parkir, air tanah, sarang burung walet, mineral bukan logam dan buatan, pajak bumi dan bangunan, bea perolehan hak atas tanah dan bangunan (BPHTPB) per Kamis (16/12).\r\n\r\nKepala Badan Pengelolaan Pajak Daerah (BPPD) Kota Palembang Herly Kurniawan di Palembang, Sabtu mengatakan, secara umum besaran nilai pungutan pajak tersebut masih dibawah total target penerimaan yang disepakati untuk tahun 2021 ini yaitu senilai Rp1,082 triliun.\r\nMeskipun demikian, besaran nilai pungutan pajak di semester II-2021 ini lebih baik bila dibandingkan Pada semester I-2021 saat Kota Palembang berada di zona merah penyebaran COVID-19. Pendapatan dari 11 pajak daerah terbilang stagnan atau hanya tercapai Rp300 miliar.\r\n\r\n“Masih dibawah target. Tapi jelas ada pertumbuhan yang baik seiring membaiknya kondisi COVID-19 di Palembang,” kata dia.\r\nMenurutnya, dari 11 jenis penerimaan pajak tersebut saat ini rata-rata sudah mencapai lebih dari 100 persen atas target minimal yang ditetapkan.\r\nSebagai contoh misalnya pajak hotel, restoran dan pajak bumi dan bangunan (PBB). Jenis penerimaan pajak tersebut menempati tiga teratas yang melampaui target minimal pungutan pajak.\r\nDimana pajak hotel ditarget minimal mendapatkan Rp34 miliar maka saat ini besaran yang diperoleh Rp42,536 miliar atau 125,11 persen. Pajak restoran sudah mencapai 112,64 persen atau Rp129,533 miliar dari target minimal yaitu Rp116,305 miliar. Kemudian pungutan PBB sudah mencapai Rp238,987 miliar atau 106,22 persen dari target minimal senilai Rp225 miliar.\r\n\r\n“Besaran nilai yang masuk sebagai pendapatan daerah perharinya mencapai Rp57,812 miliar atau 5,34 persen. Melihat kondisi ini kami optimis target tahun ini bisa tercapai,” ujarnya.\r\nSementara itu Sekretaris Daerah Kota Palembang Ratu Dewa mengatakan, supaya target menerimaan pajak senilai Rp1,082 triliun tersebut bisa tercapai kedepan, pihaknya bakal melibatkan semua unsur forum koordinasi pimpinan daerah (Forkopimda).\r\n\r\nDalam hal ini khususnya aparat penegak hukum seperti Polrestabes, Kodim dan Kejaksaan Negeri yang mana tugasnya untuk mendampingi pemungutan seluruh pajak.\r\n\"Terus dioptimalkan. Bahkan kami melibatkan seluruh pejabat untuk memberikan sosialisasi keseluruh wajib pajak (WP),\" kata dia. Sebab menurutnya, perolehan pajak ini perlu dioptimalkan karena sangat penting sebagai sumber pendapatan asli daerah (PAD) Kota Palembang yang menjadi modal untuk menjalankan program-program pembangunan, tutupnya.'),
(3, 'pajak-restoran.jpg', 'Dengan Nama Pajak Restoran dipungut Pajak sebagai pembayaran atas pelayanan yang disediakan oleh Restoran. Objek Pajak Restoran adalah pelayanan yang disediakan oleh restoran. Pelayanan yang disediakan restoran sebagaimana dimaksud meliputi pelayanan penjualan makanan dan/atau minuman yang dikonsumsi oleh pembeli, baik dikonsumsi di tempat pelayanan maupun di tempat lain.\r\n\r\n \r\n\r\nTidak termasuk objek Pajak Restoran adalah pelayanan yang disediakan oleh restoran yang nilai penjualannya tidak melebihi Rp.30.000.000,00 (tiga puluh juta rupiah) per bulan.\r\n\r\n \r\n\r\nDasar pengenaan, tarif, dan cara penghitungan pajak\r\nTarif Pajak Restoran= 10% x dasar pengenaan Pajak Restoran\r\n\r\nDasar pengenaan Pajak Restoran adalah jumlah pembayaran yang diterima atau yang seharusnya diterima restoran. Tarif Pajak Restoran ditetapkan sebesar 10% (sepuluh persen) dari dasar pengenaan Pajak Restoran. Besaran pokok Pajak Restoran yang terutang dihitung dengan cara mengalikan tarif dengan dasar pengenaan pajak. Pajak Restoran yang terutang dipungut di wilayah daerah tempat restoran berlokasi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`, `nama`, `jabatan`, `jenis_kelamin`, `foto`) VALUES
(1, 'admin@gmail.com', 'admin', 'Administrator', 'Operator', 'L', 'admin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(10) NOT NULL,
  `tgl_daftar` date NOT NULL DEFAULT current_timestamp(),
  `nama_wp` varchar(50) NOT NULL,
  `nama_op` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `sptpd` varchar(50) NOT NULL,
  `spopd` varchar(50) NOT NULL,
  `foto_op` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `tgl_daftar`, `nama_wp`, `nama_op`, `alamat`, `no_telp`, `ktp`, `sptpd`, `spopd`, `foto_op`, `status`) VALUES
(1, '2022-02-08', 'M Yusril Aprial', 'Roti Bakar', 'Jl. Kalidoni', '081356786545', 'Cuplikan layar 2020-12-10 211210.jpg', 'Cuplikan layar 2020-12-10 211809.jpg', 'Cuplikan layar 2020-12-10 212058.jpg', 'Cuplikan layar 2020-12-10 212148.jpg', 'Diterima'),
(27, '2022-02-10', 'M Faturahman', 'Bakso Bakar', 'Jl. Kesatuan Bersama', '081367528932', 'KTP.jpg', 'SPTPD.pdf', 'SPTPD.pdf', 'Restoran.jpg', ''),
(28, '2022-02-10', 'Siti Rahmat', 'Warung Bu Siti', 'Jl. Karya 60', '081367528726', 'KTP.jpg', 'SPTPD.pdf', 'SPOPD.pdf', 'Restoran.jpg', ''),
(29, '2022-02-10', 'Amelia Putri', 'Ayam Geprek', 'Jl. Kesatuan', '08148923751', 'KTP.jpg', 'SPTPD.pdf', 'SPOPD.pdf', 'Restoran.jpg', ''),
(30, '2022-02-17', 'Zidan', 'Yamyam Bakar', 'Jl. Ahmad Sunaidi', '081367467832', 'KTP.jpg', 'SPTPD.pdf', 'SPOPD.pdf', 'Restoran.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
