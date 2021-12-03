-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 05:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_izzi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(7) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo_electronico` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `fecha_a.p` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cliente1`
--

CREATE TABLE `cliente1` (
  `id_cliente` int(7) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `telefono` bigint(15) NOT NULL,
  `correo_electronico` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `fecha_ap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente1`
--

INSERT INTO `cliente1` (`id_cliente`, `nombre`, `apellidos`, `telefono`, `correo_electronico`, `direccion`, `fecha_ap`) VALUES
(1200017, 'Luis', 'mendez', 2147483647, 'luis12@gmail.com', 'calle piña #3456 col valle', '0000-00-00'),
(1200020, 'Luis', 'mendez', 6561213456, 'luis12@gmail.com', 'calle piña #3456 col valle', '2021-10-02'),
(1200021, 'ernesto', 'fong', 6563228990, 'ernesto1@gmail.com', 'calle piña #3456 col valle', '2021-10-02'),
(1200022, 'pedro', 'gonzalez', 6563346789, 'pedro12@gmail.com', 'calle limon col valle #5678', '2016-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `No_control` int(4) NOT NULL,
  `telefono` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `apellidos`, `fecha_ingreso`, `direccion`, `No_control`, `telefono`) VALUES
(1033, 'Lisa', 'Manobal', '2020-09-19', 'Calle Nijeria Col.Oasis #7838', 0, 0),
(1034, 'Jessica', 'Fong', '2017-10-17', 'Calle almendra col aves del sur #7020', 1234, 6563542881),
(1036, 'Celeste', 'Castillo', '2015-02-17', 'calle limon col.glaciar #4567', 6087, 6563228990);

-- --------------------------------------------------------

--
-- Table structure for table `pago_online`
--

CREATE TABLE `pago_online` (
  `id_transaccion` int(4) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `No_tarjeta` bigint(20) NOT NULL,
  `PIN` int(4) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pago_online`
--

INSERT INTO `pago_online` (`id_transaccion`, `nombre`, `apellidos`, `No_tarjeta`, `PIN`, `fecha`, `cantidad`) VALUES
(1, 'Luis', 'mendez', 2147483647, 1234, '2021-03-06', 0),
(4, 'Luis', 'mendez', 12345678901345, 1234, '2021-03-06', 605),
(5, 'Luis', 'fong', 4056783536, 1234, '2021-03-06', 600);

-- --------------------------------------------------------

--
-- Table structure for table `paquete`
--

CREATE TABLE `paquete` (
  `id_paquete` int(7) NOT NULL,
  `nombre_paq` varchar(50) NOT NULL,
  `precio` int(10) NOT NULL,
  `fecha_act` date NOT NULL,
  `fecha_ven` date NOT NULL,
  `tipo de plan` varchar(20) NOT NULL,
  `beneficios` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paquete1`
--

CREATE TABLE `paquete1` (
  `id_paquete` int(7) NOT NULL,
  `nombre_paq` varchar(50) NOT NULL,
  `precio` int(8) NOT NULL,
  `fecha_act` date NOT NULL,
  `fecha_ven` date NOT NULL,
  `tipo_de_plan` varchar(40) NOT NULL,
  `beneficios` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paquete1`
--

INSERT INTO `paquete1` (`id_paquete`, `nombre_paq`, `precio`, `fecha_act`, `fecha_ven`, `tipo_de_plan`, `beneficios`) VALUES
(1300006, '0', 0, '0000-00-00', '0000-00-00', '0', '0'),
(1300010, 'internet ilimitado', 550, '2021-08-03', '2022-08-03', 'internet y cable', 'redes sociales ilimitadas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `cliente1`
--
ALTER TABLE `cliente1`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indexes for table `pago_online`
--
ALTER TABLE `pago_online`
  ADD PRIMARY KEY (`id_transaccion`);

--
-- Indexes for table `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`id_paquete`);

--
-- Indexes for table `paquete1`
--
ALTER TABLE `paquete1`
  ADD PRIMARY KEY (`id_paquete`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente1`
--
ALTER TABLE `cliente1`
  MODIFY `id_cliente` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1200023;

--
-- AUTO_INCREMENT for table `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1042;

--
-- AUTO_INCREMENT for table `pago_online`
--
ALTER TABLE `pago_online`
  MODIFY `id_transaccion` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paquete`
--
ALTER TABLE `paquete`
  MODIFY `id_paquete` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paquete1`
--
ALTER TABLE `paquete1`
  MODIFY `id_paquete` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1300011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
