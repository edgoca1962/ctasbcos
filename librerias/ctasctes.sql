-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2020 at 04:03 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctasctes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bancos`
--

CREATE TABLE `bancos` (
  `id` int(11) NOT NULL,
  `nombre_banco` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `codigo_pais` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cuentas_bancarias`
--

CREATE TABLE `cuentas_bancarias` (
  `id` int(11) NOT NULL,
  `id_entidad` int(11) NOT NULL,
  `id_usuario_apertura` int(11) NOT NULL,
  `id_usuario_cierre` int(11) NOT NULL,
  `id_banco` int(11) NOT NULL,
  `iban` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `saldo_cuenta` decimal(15,2) NOT NULL,
  `codigo_moneda` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `estatus_cuenta` tinyint(1) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_apertura` date NOT NULL,
  `fecha_cierre` date NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entidades`
--

CREATE TABLE `entidades` (
  `id` int(11) NOT NULL,
  `nombre_entidad` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menues`
--

CREATE TABLE `menues` (
  `id` int(11) NOT NULL,
  `id_vista` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `tipo_usuario_menu` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rubros`
--

CREATE TABLE `rubros` (
  `id` int(11) NOT NULL,
  `categoria` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `sub_categoria` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rutas_proyecto`
--

CREATE TABLE `rutas_proyecto` (
  `id` int(11) NOT NULL,
  `ruta_descripcion` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `ruta` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `rutas_proyecto`
--

INSERT INTO `rutas_proyecto` (`id`, `ruta_descripcion`, `ruta`, `fecha_proceso`) VALUES
(1, 'dominio', 'http://localhost/ctasctes/', '2020-11-23 15:18:52'),
(3, 'css', 'vistas/css/', '2020-11-23 15:18:52'),
(4, 'js', 'vistas/js/', '2020-11-23 15:18:52'),
(5, 'contenidos', 'vistas/contenidos/', '2020-11-23 15:18:52'),
(8, 'img_anuncios', 'vistas/img/anuncios/', '2020-11-23 15:18:52'),
(10, 'img_banners', 'vistas/img/banners/', '2020-11-23 15:18:52'),
(11, 'img_generales', 'vistas/img/generales/', '2020-11-23 15:18:52'),
(13, 'img_usrs', 'vistas/img/usuarios/', '2020-11-23 15:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_sesion` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `hora_inicio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `hora_salida` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_sesion` tinyint(1) NOT NULL DEFAULT '0',
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `sesiones`
--

INSERT INTO `sesiones` (`id`, `id_usuario`, `id_sesion`, `fecha_inicio`, `hora_inicio`, `fecha_salida`, `hora_salida`, `estado_sesion`, `fecha_proceso`) VALUES
(27, 2, 'e4090qki1uu8j8mvcjiiin2snv', '2020-11-25', '19:56:07', '2020-11-25', '20:01:28', 0, '2020-11-26 01:56:07'),
(28, 2, 'k7u7q82ulokmhtdcc1eq420ngh', '2020-11-25', '20:01:42', '2020-11-25', '20:12:40', 0, '2020-11-26 02:01:42'),
(29, 2, '137me01gk3t45laguas217nhbr', '2020-11-28', '13:25:34', '2020-11-28', '13:35:16', 0, '2020-11-28 19:25:34'),
(30, 2, 'epo8nng7328t3jogim8voleoqm', '2020-11-28', '13:35:32', '2020-11-28', '13:49:16', 0, '2020-11-28 19:35:32'),
(31, 2, '5ad4a6g19o1cck488d9m83dnmg', '2020-11-28', '13:49:27', '2020-11-28', '13:54:57', 0, '2020-11-28 19:49:27'),
(32, 2, 'iaji7dfiecv2rj1jq1ahcohrt5', '2020-11-29', '08:07:52', '2020-12-01', '10:48:53', 0, '2020-11-29 14:07:52'),
(33, 2, 'm3avu3dqg9u5p1ba4p4iiggigb', '2020-12-01', '10:49:05', '2020-12-01', '10:49:21', 0, '2020-12-01 16:49:05'),
(34, 2, 'rji5pjhgdcuvff9h0r7h66fsm4', '2020-12-01', '10:51:28', '2020-12-01', '10:52:28', 0, '2020-12-01 16:51:28'),
(35, 2, '6jr9t638rm2so1qrq3b02m7794', '2020-12-01', '10:53:34', '2020-12-01', '10:57:46', 0, '2020-12-01 16:53:34'),
(36, 2, 'phrodf25uioii0jmib7nrb2he7', '2020-12-01', '10:57:58', '2020-12-01', '10:58:06', 0, '2020-12-01 16:57:58'),
(37, 2, 'i2u1elg7jcft7l362icntl4por', '2020-12-01', '11:20:55', '2020-12-01', '11:21:08', 0, '2020-12-01 17:20:55'),
(38, 2, '21nldkude6o55bqhjqt69enfg2', '2020-12-01', '11:23:00', '2020-12-01', '11:26:37', 0, '2020-12-01 17:23:00'),
(39, 2, 'eivufeqd1usp57nsja92tpovlc', '2020-12-01', '11:27:08', '2020-12-01', '11:29:04', 0, '2020-12-01 17:27:08'),
(40, 2, '0v5lmsktv5g0cqv4ff9mkfi115', '2020-12-01', '11:29:28', '2020-12-01', '11:32:42', 0, '2020-12-01 17:29:28'),
(41, 2, 'ng9o1ipr45ivdiqgq6d428pu6c', '2020-12-01', '11:40:22', '2020-12-01', '11:40:33', 0, '2020-12-01 17:40:22'),
(42, 2, 'b897p8ikv2tk96ma85mma6i44o', '2020-12-01', '11:43:53', '2020-12-01', '11:43:58', 0, '2020-12-01 17:43:53'),
(43, 2, '77lom98e0o4gnm0mfril8tu3gg', '2020-12-01', '11:45:34', '2020-12-01', '11:45:38', 0, '2020-12-01 17:45:34'),
(44, 2, 'hb9p171mhjre12v4p3bd1e0947', '2020-12-01', '11:48:32', '2020-12-01', '11:48:35', 0, '2020-12-01 17:48:32'),
(45, 2, 'bfb2il9gaju27g4n1c7cd4deav', '2020-12-01', '11:52:46', '2020-12-01', '11:52:50', 0, '2020-12-01 17:52:46'),
(46, 2, '0rhfctknrr7mnloi73d6smhfp2', '2020-12-01', '12:00:03', '2020-12-01', '12:00:13', 0, '2020-12-01 18:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_movimientos`
--

CREATE TABLE `tipo_movimientos` (
  `id` int(11) NOT NULL,
  `codigo_movimiento` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transacciones`
--

CREATE TABLE `transacciones` (
  `id` int(11) NOT NULL,
  `id_ctacte` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_tipo_movimiento` int(11) NOT NULL,
  `fecha_movimiento` date NOT NULL,
  `monto_movimiento` decimal(10,0) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `correo_usuario` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `clave` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `foto_usuario` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `correo_usuario`, `clave`, `tipo_usuario`, `foto_usuario`, `fecha_proceso`) VALUES
(1, 'Edwin González', 'edgoca1962@gmail.com', '$2y$10$if3oxWHAEYUG9UeIqlVzBOFvMI9jYjo260HYy/llo2lslIKfV9Fw6', 0, '', '2020-11-23 15:22:04'),
(2, 'Usuario Prueba', 'prueba@prueba.com', '$2y$10$KatAMAZSbHHeUIcg6BqIb.dkJ5M6xYP4g0.a6WkAHqCVni6lLm1ZO', 0, '', '2020-11-23 15:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `vistas`
--

CREATE TABLE `vistas` (
  `id` int(11) NOT NULL,
  `nombre_vista` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `palabras_claves` text COLLATE utf8_spanish_ci NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_proceso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `vistas`
--

INSERT INTO `vistas` (`id`, `nombre_vista`, `titulo`, `descripcion`, `palabras_claves`, `icono`, `logo`, `fecha_proceso`) VALUES
(1, 'Plantilla', 'Inicio', 'Somos una comunidad multigeneracional apasionada por seguir a Jesús, equipándonos en Su Palabra y sumándonos a la restauración del mundo.', 'iglesia, congregación, semilla, semillaCR, semilla CR, amor, escritura, crecimiento, inclusividad, servicio, vulnerabilidad, compasión, generosidad', 'icono.png', 'Semilla.jpg', '2020-12-01 15:01:33'),
(2, 'Ingreso', 'Ingreso', 'Somos una comunidad multigeneracional apasionada por seguir a Jesús, equipándonos en Su Palabra y sumándonos a la restauración del mundo.', 'iglesia, congregación, semilla, semillaCR, semilla CR, amor, escritura, crecimiento, inclusividad, servicio, vulnerabilidad, compasión, generosidad', '', '', '2020-12-01 15:01:33'),
(3, 'Inicio', 'Inicio', 'Somos una comunidad multigeneracional apasionada por seguir a Jesús, equipándonos en Su Palabra y sumándonos a la restauración del mundo.', 'iglesia, congregación, semilla, semillaCR, semilla CR, amor, escritura, crecimiento, inclusividad, servicio, vulnerabilidad, compasión, generosidad', '', '', '2020-12-01 15:02:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuentas_bancarias`
--
ALTER TABLE `cuentas_bancarias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entidad` (`id_entidad`,`id_usuario_apertura`,`id_usuario_cierre`,`id_banco`),
  ADD KEY `id_usuario_apertura` (`id_usuario_apertura`),
  ADD KEY `id_usuario_cierre` (`id_usuario_cierre`),
  ADD KEY `id_banco` (`id_banco`);

--
-- Indexes for table `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menues`
--
ALTER TABLE `menues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vista` (`id_vista`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `rubros`
--
ALTER TABLE `rubros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rutas_proyecto`
--
ALTER TABLE `rutas_proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `tipo_movimientos`
--
ALTER TABLE `tipo_movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transacciones`
--
ALTER TABLE `transacciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ctacte` (`id_ctacte`,`id_categoria`,`id_tipo_movimiento`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_tipo_movimiento` (`id_tipo_movimiento`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vistas`
--
ALTER TABLE `vistas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuentas_bancarias`
--
ALTER TABLE `cuentas_bancarias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entidades`
--
ALTER TABLE `entidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menues`
--
ALTER TABLE `menues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rubros`
--
ALTER TABLE `rubros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rutas_proyecto`
--
ALTER TABLE `rutas_proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tipo_movimientos`
--
ALTER TABLE `tipo_movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transacciones`
--
ALTER TABLE `transacciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vistas`
--
ALTER TABLE `vistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuentas_bancarias`
--
ALTER TABLE `cuentas_bancarias`
  ADD CONSTRAINT `cuentas_bancarias_ibfk_1` FOREIGN KEY (`id_usuario_apertura`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `cuentas_bancarias_ibfk_2` FOREIGN KEY (`id_usuario_cierre`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cuentas_bancarias_ibfk_3` FOREIGN KEY (`id_banco`) REFERENCES `bancos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cuentas_bancarias_ibfk_4` FOREIGN KEY (`id_entidad`) REFERENCES `entidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menues`
--
ALTER TABLE `menues`
  ADD CONSTRAINT `menues_ibfk_1` FOREIGN KEY (`id_vista`) REFERENCES `vistas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menues_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesiones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transacciones`
--
ALTER TABLE `transacciones`
  ADD CONSTRAINT `transacciones_ibfk_1` FOREIGN KEY (`id_ctacte`) REFERENCES `cuentas_bancarias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transacciones_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `rubros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transacciones_ibfk_3` FOREIGN KEY (`id_tipo_movimiento`) REFERENCES `tipo_movimientos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
