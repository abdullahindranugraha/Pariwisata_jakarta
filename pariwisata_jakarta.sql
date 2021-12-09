-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 04:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata_jakarta`
--

-- --------------------------------------------------------

--
-- Table structure for table `pariwisata`
--

CREATE TABLE `pariwisata` (
  `id_pariwisata` int(6) NOT NULL,
  `nama_pariwisata` varchar(30) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `gambar` varchar(126) NOT NULL,
  `harga` int(12) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pariwisata`
--

INSERT INTO `pariwisata` (`id_pariwisata`, `nama_pariwisata`, `alamat`, `gambar`, `harga`, `kategori`, `deskripsi`) VALUES
(2, 'kota tua', 'Kota Tua, Mangga Besar, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta', 'kota_tua.jpg', 5000, 'sejarah', 'Kota tua di Jakarta, yang juga bernama Kota Tua, berpusat di Alun-Alun Fatahillah, yaitu alun-alun yang ramai dengan pertunjukan rutin tarian tradisional. Museum Sejarah Jakarta adalah bangunan era Belanda dengan lukisan dan barang antik, sedangkan Museum Wayang memamerkan boneka kayu khas Jawa. Desa Glodok, atau Chinatown, terkenal dengan makanan kaki lima, seperti pangsit dan mi goreng. Di dekatnya, terdapat sekunar dan kapal penangkap ikan di pelabuhan Sunda Kelapa yang kuno. '),
(25, 'Ancol', 'Ancol, Kota Jakarta Utara', 'img1638776758.jpg', 25000, 'hiburan', 'Destinasi di tepi laut Ancol memiliki pantai yang populer untuk olahraga air dan kompleks di tepi laut yang dilengkapi rollercoaster serta wahana di Dunia Fantasi dan taman rekreasi air Atlantis Water Adventure. Keluarga juga dapat menikmati akuarium SeaWorld dengan hiu dan kura-kuranya, serta Ocean Dream Samudra yang menampilkan pertunjukan lumba-lumba dan singa laut. Pasar Seni Ancol menampilkan seniman lokal yang baru muncul dan mengadakan pertunjukan tarian di akhir pekan');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `nama_pariwisata` varchar(30) NOT NULL,
  `harga` int(12) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_beli` int(3) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama_pariwisata`, `harga`, `nama`, `id_pengguna`, `email`, `tanggal`, `jumlah_beli`, `total_bayar`) VALUES
(28, 'kota tua', 5000, 'Abdullah Indra Nugraha', 1, 'indra123@gmail.com', '2021-12-27', 2, 10000),
(29, 'kota tua', 5000, 'Abdullah Indra Nugraha', 1, 'indra123@gmail.com', '2021-12-31', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1, 'Abdullah Indra Nugraha', 'indra123@gmail.com', 'pro1638603954.jpg', '$2y$10$ZFQ08qqD5FEfBWa5VFSEDOd.ntcjYF6dmD3yKEgMoC.zx6HyU7X0O', 2, 1, 1636703578),
(3, 'Dimas Nugraha', 'dimas123@gmail.com', 'default.jpg', '$2y$10$zuehlKTZC6XWjRayFFaSoOzMC4nQ1R8nCp63oe4fu0S1WIMsLA6h.', 1, 1, 1638599412),
(4, 'salma', 'salmas123@gmail.com', 'default.jpg', '$2y$10$Qen8ZxhqHQmwYkbJJ566S.s7gEcZyKFwK35IG1W16zBR8WIDf0hZS', 2, 1, 1638787794);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD PRIMARY KEY (`id_pariwisata`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id_pariwisata` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
