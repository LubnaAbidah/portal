-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Okt 2017 pada 09.36
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmscoba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_judul` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_judul`) VALUES
(1, 'PHP7'),
(2, 'SQL'),
(3, 'Javascript'),
(4, 'MySQLi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL,
  `post_categories` varchar(20) NOT NULL,
  `post_judul` varchar(20) NOT NULL,
  `post_author` varchar(20) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` varchar(20) NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(20) NOT NULL,
  `post_comment` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`post_id`, `post_categories`, `post_judul`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment`) VALUES
(1, '2', 'Belajar PHP', 'Lubna', '2016-10-31', 'singn.jpg', 'hai lubna', 'PHP', 'Like this'),
(2, '3', 'Miracle Javascript', 'Lubna Abidah', '2016-10-31', 'jh.jpg', 'hai', 'Javascript', 'like this is'),
(4, '2', 'Mimimi', 'Malika', '2016-11-01', 'b.jpg', 'Lalala', 'SQL', 'hdhshs'),
(5, '2', 'sdadw', ' Lubna Abidah h', '2017-09-23', 'tanya2.JPG', 'fdfsfd', 'sdfefe', 'vcxcdsdsdsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
