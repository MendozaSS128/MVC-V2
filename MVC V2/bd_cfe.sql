-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 01:10:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cfe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_medidor`
--

CREATE TABLE `tbl_medidor` (
  `Idmedidor` int(11) NOT NULL,
  `Nummedi` int(50) NOT NULL,
  `Tipomedi` varchar(50) NOT NULL,
  `Fechains` date NOT NULL,
  `Idcliente` int(50) NOT NULL,
  `FechaUlti` date NOT NULL,
  `IdFacAct` int(50) NOT NULL,
  `Marcamedi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_medidor`
--

INSERT INTO `tbl_medidor` (`Idmedidor`, `Nummedi`, `Tipomedi`, `Fechains`, `Idcliente`, `FechaUlti`, `IdFacAct`, `Marcamedi`) VALUES
(2, 123, 'Bifasicos', '2020-10-17', 65, '2023-09-07', 69, 'Volvo'),
(3, 231, 'Trifasicos', '2019-11-25', 78, '2023-10-29', 96, 'International'),
(4, 36, 'Monofasicos', '2020-06-09', 50, '2023-09-30', 87, 'Volvo'),
(5, 54, 'Trifasicos', '2021-06-21', 95, '2023-10-21', 79, 'M.AL789'),
(6, 654, 'Monofasicos', '2019-03-12', 45, '2023-09-28', 9, 'Kenworth'),
(7, 45, 'Monafasicos', '2020-12-02', 63, '2023-12-20', 20, 'Volvo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medidor`
--
ALTER TABLE `tbl_medidor`
  ADD PRIMARY KEY (`Idmedidor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
