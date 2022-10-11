-- SQLBook: Code
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-08-2022 a las 15:12:28
-- Versión del servidor: 5.7.33
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliosoft`
--
CREATE DATABASE IF NOT EXISTS `bibliosoft` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bibliosoft`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` bigint(100) NOT NULL,
  `nombreCliente` varchar(50) NOT NULL,
  `apellidoCliente` varchar(50) NOT NULL,
  `telefonoCliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombreCliente`, `apellidoCliente`, `telefonoCliente`) VALUES
(1, 'Alejandro ', 'Duque Padilla', '3166707758'),
(2, 'Mateo Efren', 'MogollÃ³n Galeano', '1354612'),
(3, 'Alex', 'Duke', '546540'),
(4, 'Alex', 'Duke Padilla', '23165465');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `idDetalle` bigint(100) NOT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `Prestamo_idPrestamo` bigint(100) NOT NULL,
  `Prestamo_Cliente_idCliente` bigint(100) NOT NULL,
  `Libro_idLibro` bigint(100) NOT NULL,
  `Libro_Editorial_idEditorial` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `idEditorial` bigint(100) NOT NULL,
  `nombreEditorial` varchar(50) NOT NULL,
  `telefonoEditorial` varchar(50) NOT NULL,
  `ubicacionEditorial` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`idEditorial`, `nombreEditorial`, `telefonoEditorial`, `ubicacionEditorial`) VALUES
(1, 'Babel Libros', '3024361386', 'Bogotá');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `idLibro` bigint(100) NOT NULL,
  `nombreLibro` varchar(50) NOT NULL,
  `categoriaLibro` varchar(50) NOT NULL,
  `autorLibro` varchar(50) DEFAULT NULL,
  `cantidadLibro` int(11) NOT NULL,
  `detallesLibro` varchar(50) NOT NULL,
  `publicacionLibro` date DEFAULT NULL,
  `Editorial_idEditorial` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`idLibro`, `nombreLibro`, `categoriaLibro`, `autorLibro`, `cantidadLibro`, `detallesLibro`, `publicacionLibro`, `Editorial_idEditorial`) VALUES
(1, 'Cien años de soledad', 'Terror', 'Gabriel García Márquez', 100, 'Libro muy interesante', '2015-06-10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `penalizacion`
--

CREATE TABLE `penalizacion` (
  `idPenalizacion` bigint(100) NOT NULL,
  `fechaInicioPenali` date NOT NULL,
  `fechaFinPenali` date NOT NULL,
  `Cliente_idCliente` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `idPrestamo` bigint(100) NOT NULL,
  `fechaInicioPresta` date NOT NULL,
  `fechaFinPresta` date NOT NULL,
  `Cliente_idCliente` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` bigint(100) NOT NULL,
  `nombreRol` varchar(25) NOT NULL,
  `insertarRol` tinyint(4) NOT NULL,
  `editarRol` tinyint(4) NOT NULL,
  `borrarRol` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombreRol`, `insertarRol`, `editarRol`, `borrarRol`) VALUES
(1, 'Administrador', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` bigint(100) NOT NULL,
  `nombre1Usuario` varchar(50) NOT NULL,
  `nombre2Usuario` varchar(50) NOT NULL,
  `apellido1Usuario` varchar(50) NOT NULL,
  `apellido2Usuario` varchar(50) NOT NULL,
  `telefonoUsuario` varchar(50) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `usuarioUsuario` varchar(50) NOT NULL,
  `passwordUsuario` varchar(50) NOT NULL,
  `Rol_idRol` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre1Usuario`, `nombre2Usuario`, `apellido1Usuario`, `apellido2Usuario`, `telefonoUsuario`, `emailUsuario`, `usuarioUsuario`, `passwordUsuario`, `Rol_idRol`) VALUES
(1, 'Mateo', 'Efren', 'Mogollon', 'Galeano', '3024361386', 'mateomogollon00@gmail.com', 'Mateo21', '123', 1),
(2, 'Alejandro', '', 'Duque', 'Padilla', '31667755598', 'alejo@gmail.com', 'Apxel', 'Alex1', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`idDetalle`,`Prestamo_idPrestamo`,`Prestamo_Cliente_idCliente`,`Libro_idLibro`,`Libro_Editorial_idEditorial`),
  ADD KEY `fk_Detalle_Prestamo1_idx` (`Prestamo_idPrestamo`,`Prestamo_Cliente_idCliente`),
  ADD KEY `fk_Detalle_Libro1_idx` (`Libro_idLibro`,`Libro_Editorial_idEditorial`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`idEditorial`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`idLibro`,`Editorial_idEditorial`),
  ADD KEY `fk_Libro_Editorial1_idx` (`Editorial_idEditorial`);

--
-- Indices de la tabla `penalizacion`
--
ALTER TABLE `penalizacion`
  ADD PRIMARY KEY (`idPenalizacion`,`Cliente_idCliente`),
  ADD KEY `fk_Penalizacion_Cliente1_idx` (`Cliente_idCliente`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`idPrestamo`,`Cliente_idCliente`),
  ADD KEY `fk_Prestamo_Cliente1_idx` (`Cliente_idCliente`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`,`Rol_idRol`),
  ADD KEY `fk_Usuario_Rol1_idx` (`Rol_idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `idDetalle` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `idEditorial` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `idLibro` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `penalizacion`
--
ALTER TABLE `penalizacion`
  MODIFY `idPenalizacion` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `idPrestamo` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `fk_Detalle_Libro1` FOREIGN KEY (`Libro_idLibro`,`Libro_Editorial_idEditorial`) REFERENCES `libro` (`idLibro`, `Editorial_idEditorial`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_Prestamo1` FOREIGN KEY (`Prestamo_idPrestamo`,`Prestamo_Cliente_idCliente`) REFERENCES `prestamo` (`idPrestamo`, `Cliente_idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `fk_Libro_Editorial1` FOREIGN KEY (`Editorial_idEditorial`) REFERENCES `editorial` (`idEditorial`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `penalizacion`
--
ALTER TABLE `penalizacion`
  ADD CONSTRAINT `fk_Penalizacion_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `fk_Prestamo_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
