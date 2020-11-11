-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 06:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alita_document1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `file_ext` varchar(15) NOT NULL,
  `file_size` varchar(10) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `tgl`, `nama`, `skill`, `file_ext`, `file_size`, `lokasi`, `count`) VALUES
(2, '2018-07-17', 'test', 'lari', 'pdf', '205721', 'test.pdf', 1),
(3, '2018-07-17', 'Nadia ', 'nyanyi', 'pdf', '194284', 'Nadia .pdf', 1),
(4, '2018-07-17', 'siti', 'nyapu', 'xlsx', '11049', 'siti.xlsx', 1),
(5, '2018-07-17', 'vi', 'ngepel', 'docx', '938643', 'vi.docx', 1),
(6, '2018-07-17', 'r', 'jajan', 'zip', '107229', 'r.zip', 1),
(7, '2018-07-17', 'y', 'lukis', 'pptx', '1554910', 'y.pptx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `nama_dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `nama_dept`) VALUES
(1, 'Finance'),
(2, 'HCO'),
(3, 'Legal'),
(4, 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `tanggal_upload`, `nama_file`, `category`, `tipe_file`, `ukuran_file`, `file`, `count`) VALUES
(106, '2018-07-17', 'w', 'HCO', 'pdf', '439069', 'w.pdf', 0),
(107, '2018-07-18', 'test', 'Legal', 'pdf', '372957', 'test.pdf', 1),
(108, '2018-07-30', 'k', 'Finance', 'docx', '15296', 'k.docx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user`, `message`, `date`) VALUES
(14, 'admin', 'k', '2018-06-28 04:44:54'),
(13, 'user1', 'd', '2018-06-24 03:51:33'),
(12, 'admin', 'da', '2018-06-24 03:50:27'),
(11, 'tiraasri', 'r', '2018-06-24 03:42:13'),
(10, 'tiraasri', 'hey', '2018-06-23 15:37:25'),
(15, 'ttt', 'test', '2018-06-28 07:15:30'),
(16, 'tiraasri', 'i', '2018-06-28 07:41:40'),
(17, 'tiraasri', 'halo', '2018-07-01 07:54:55'),
(18, 'tiraasri', 'halo', '2018-07-01 07:54:59'),
(19, 'nadiardhian', 'd', '2018-07-12 04:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `shoutbox`
--

CREATE TABLE `shoutbox` (
  `id_shoutbox` int(5) NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `website` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `shoutbox`
--

INSERT INTO `shoutbox` (`id_shoutbox`, `nama`, `website`, `pesan`, `tanggal`, `jam`, `aktif`) VALUES
(9, 'sigit', 'sixghakreasi.com', 'testtttttttt:-(:-(:-(:-(:-(:-(', '2014-05-16', '08:49:55', 'Y'),
(10, 'azizz', 'mantab', ';-D;-D;-D', '0000-00-00', '00:00:00', 'Y'),
(11, 'testing', 'testing', 'testing;;-)', '0000-00-00', '00:00:00', 'Y'),
(12, 'testing', 'mantab', ':-(:-(:-(:-(', '2014-05-16', '09:18:43', 'Y'),
(16, 'hai', '', 'fffffffffffff;;-)', '2018-06-08', '09:37:53', 'Y'),
(17, 'nadia', '', 'yyy', '2018-06-08', '10:11:45', 'Y'),
(18, 'nadia', '', 'uy', '2018-06-08', '12:06:54', 'Y'),
(19, 'halo', '', 'hel', '2018-06-08', '12:07:08', 'Y'),
(20, 'w', '', 'qqq', '2018-06-08', '12:11:02', 'Y'),
(21, 'helmi', '', '44', '2018-06-08', '12:18:05', 'Y'),
(22, 'o', '', 'h', '2018-06-08', '12:18:15', 'Y'),
(23, 'ooooo', '', '000', '2018-06-08', '12:44:25', 'Y'),
(24, 'p', '', 'p', '2018-06-08', '12:53:59', 'Y'),
(25, 'e', '', '3', '2018-06-21', '08:33:11', 'Y'),
(26, '000000', '', 'gggg', '2018-06-21', '09:18:39', 'Y'),
(27, 'i', '', '9', '2018-06-21', '10:09:46', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(33) NOT NULL,
  `divisi` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`, `divisi`, `role`, `date_created`) VALUES
(9, 'tiraasri', 'tira', '21232f297a57a5a743894a0e4a801fc3', 'busdev', 'administrator', '2017-11-19'),
(12, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'administrator', '2017-12-04'),
(13, 'user1', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', '', 'uploader', '2017-12-04'),
(14, 'user2', 'user2', '21232f297a57a5a743894a0e4a801fc3', '', 'downloader', '2017-12-04'),
(15, 'bambang.andjar', 'Bambang Andjar', '827ccb0eea8a706c4c34a16891f84e7b', 'HCO', 'administrator', '2017-12-20'),
(16, 'kelly', 'Kelly', '827ccb0eea8a706c4c34a16891f84e7b', 'HCO', 'uploader', '2017-12-20'),
(17, 'andri.saputra', 'Andri Saputra', '827ccb0eea8a706c4c34a16891f84e7b', 'Building Managemnet', 'administrator', '2017-12-20'),
(18, 'sasi.istika', 'Sasi Istika', 'b3f28e734ef715a80229bbdcb2a6123b', 'Sales', 'downloader', '2017-12-20'),
(19, 'alip', 'Alip', '7c2dea88ee24f95c6db2e0aa93a2f186', 'Sales', 'downloader', '2017-12-20'),
(20, 'puput', 'Puput Setyari', '0c36d933890a8c3443d28233d235ed69', 'Legal', 'uploader', '2017-12-20'),
(21, 'pian', 'Nurpian Sujudi', '827ccb0eea8a706c4c34a16891f84e7b', 'Finance', 'uploader', '2017-12-20'),
(22, 'wibowo', 'Wibowo Pudjianto', '827ccb0eea8a706c4c34a16891f84e7b', 'Finance', 'downloader', '2017-12-20'),
(23, 'anom', 'Anom Sandhi', '827ccb0eea8a706c4c34a16891f84e7b', 'Legal', 'uploader', '2017-12-20'),
(26, 'ttt', 'yyyy', '202cb962ac59075b964b07152d234b70', 'HCO', 'uploader', '2018-05-24'),
(27, 'nadiardhian', 'Nadia Ardhianie', '827ccb0eea8a706c4c34a16891f84e7b', 'HCO', 'administrator', '2018-07-16');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `waktu_dan_tanggal` BEFORE INSERT ON `user` FOR EACH ROW BEGIN
    IF NEW. date_created = '0000-00-00 00:00:00' THEN
        SET NEW.date_created = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoutbox`
--
ALTER TABLE `shoutbox`
  ADD PRIMARY KEY (`id_shoutbox`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `shoutbox`
--
ALTER TABLE `shoutbox`
  MODIFY `id_shoutbox` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
