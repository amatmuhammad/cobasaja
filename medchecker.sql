-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2022 pada 15.11
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medchecker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_eksipien`
--

CREATE TABLE `list_eksipien` (
  `Nama_resmi` varchar(50) NOT NULL,
  `Nama_lain` varchar(70) NOT NULL,
  `Rumus_molekul` varchar(30) NOT NULL,
  `Rumus_struktur` varchar(30) NOT NULL,
  `Berat_molekul` decimal(20,0) NOT NULL,
  `Kelarutan` varchar(50) NOT NULL,
  `Pemerian` varchar(50) NOT NULL,
  `Inkompaktibilitas` varchar(50) NOT NULL,
  `Penyimpanan` varchar(50) NOT NULL,
  `Kegunaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list_eksipien`
--

INSERT INTO `list_eksipien` (`Nama_resmi`, `Nama_lain`, `Rumus_molekul`, `Rumus_struktur`, `Berat_molekul`, `Kelarutan`, `Pemerian`, `Inkompaktibilitas`, `Penyimpanan`, `Kegunaan`) VALUES
('POVIDONE', 'Povipharm, PVP, kolidin', '(C9H9NO)n', '', '30', 'Larut dalam asam, kloroform, methanol, etanol 95%,', 'Higroskopik,bubuk berwarna putih,tidak berbau atau', 'Garam, sulfatnazole, natrium salisilat dan resin s', 'Dalam wadah tertutup dengan baik', 'Sebagai pengikat'),
('MAGNESIUM STEARAT', 'Magnesium stearat dibasik; magnesium distearat; stearas magnesii; magn', 'C36H70MgO4', '[CH3(CH2)16COO]2Mg', '591', 'Praktis tidak larut dalam etanol, etanol (95%), et', 'Bubuk yang sangat halus, putih muda, diendapkan at', 'Tidak cocok dengan asam kuat, alkali dan ion. Hind', 'dalam wadah tertutup dengan baik.', 'sebagai pelumas tablet dan kapsul. '),
('COLLOIDAL SILIKON DIOKSIDA', 'aerosil', 'SiO2', '', '60', 'praktis tidak larut dalam pelarut organik, air dan', 'bubuk ringan, hablur, berwarna putih kebiruan, tid', 'dietilstilbestrol', 'dalam wadah tertutup baik', 'sebagai glidan'),
('SODIUM STARCH GLYCOLATE', 'Carboxymethyl starch, sodium salt, SSG Sanaq', '', '', '500', 'larut dalam etanol 95%, tidak larut dalam air', 'Serbuk putih atau hampir putih, mengalir bebas, da', 'tidak kompatibel dengan asam askorbat', 'harus disimpan dalam wadah yang tertutup rapat unt', 'sebagai disintegran dari tablet dan kapsul'),
('LAKTOSA ANHIDRAT', 'LAKTOSA ANHIDRAT', 'C12H12O11', '', '342', 'mudah larut dalam air, praktis tidak larut dalam e', 'Serbuk putih atau putih', 'tidak kompaktibel dengan pengoksida kuat', 'dalam wadah tertutup rapat', 'sebagai pengisi'),
('HYDROXYPROPHYL METHYLCELLULOSE', 'Cellulose', 'CH3CH(OH)CH2', '', '0', 'praktis tidak larut dalam air panas (60 derajat), ', 'serbuk atau butiran putih, putih kekuningan atau p', '', 'disimpan dalam kondisi kering jauh dari panas', 'sebagai polimer penyalut film'),
('PROPYLENE GLYCOL ', 'Propylenglycolum', 'C3H8O2 ', '', '76', 'dapat bercampur dengan aseton, kloroform, etanol 9', 'cairan bening, tidak berwarna, kental, praktis tid', '', 'dalam wadah tertutup baik', 'sebagai plastizier'),
('TITANIUM DIOXIDE', 'Anatase titanium dioxide', 'TiO2 ', '', '80', '', 'serbuk nonhigroskopis berwarna putih, amorf, tidak', 'dapat bereaksi dengan zat aktif tertentu yaitu fam', 'dalam wadah tertutup rapat', 'sebagai pelapisan tablet (pewarna)'),
('PURIFIED WATER ', 'Aqua', 'H2O', '', '18', 'tidak dapat larut dalam polar', 'cairan jernih tidak berwarna, tidak berbau, tidak ', '', 'dalam wadah tertutup rapat', 'sebagai pelarut salut film (vehichel)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
