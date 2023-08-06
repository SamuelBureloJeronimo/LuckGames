-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-01-2023 a las 17:01:46
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbluckgames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listgames`
--

DROP TABLE IF EXISTS `listgames`;
CREATE TABLE IF NOT EXISTS `listgames` (
  `Number` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Etiquetas` varchar(45) DEFAULT NULL,
  `Categorias` varchar(45) DEFAULT NULL,
  `URL_Minia` varchar(160) NOT NULL,
  `URL_Link` varchar(105) DEFAULT NULL,
  PRIMARY KEY (`Number`,`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listgames`
--

INSERT INTO `listgames` (`Number`, `Nombre`, `Descripcion`, `Etiquetas`, `Categorias`, `URL_Minia`, `URL_Link`) VALUES
(1, 'Crysis 3 Remastered', '', '', 'Aventura', 'imgJuegos/crysis-3-remastered.jpg', 'https://www.elamigos-games.com/games/crysis-3-remastered'),
(2, 'Forza Horizon 5 Premium Edition', '', '', 'Clasicos Carreras', 'imgJuegos/forza-horizon-5-premium-edition.jpg', 'https://www.elamigos-games.com/games/forza-horizon-5-premium-edition-pc-es'),
(3, 'Ghost Song', '', 'Reciente', 'Suspenso', 'imgJuegos/ghost-song-cover-ecl.jpg', 'https://www.elamigos-games.com/games/ghost-song'),
(4, 'God of War', '', '', 'Aventura Accion', 'imgJuegos/god-of-war.jpg', 'https://www.elamigos-games.com/games/god-of-war-2022-pc-esp'),
(5, 'Halo Infinite', '', 'Reciente', 'Aventura', 'imgJuegos/halo-infinite.jpg', 'https://www.elamigos-games.com/games/halo-infinite-pc'),
(6, 'Iron Harvest', '', '', 'Clasicos Accion', 'imgJuegos/iron-harvest.jpg', 'https://www.elamigos-games.com/games/iron-harvest-deluxe-edition'),
(7, 'Metal Gear Rising Revengeance', '', '', 'Clasicos', 'imgJuegos/metal-gear-rising-revengeance.jpg', 'https://www.elamigos-games.com/games/metal-gear-rising-revengeance-pc-e'),
(8, 'Metal Hellsinger', '', 'Reciente', 'Terror Aventura', 'imgJuegos/metal-hellsinger-cover-2uc.jpg', 'https://www.elamigos-games.com/games/metal-hellsinger'),
(9, 'Metro EXODUS con RTX', '', 'Reciente', 'Terror', 'imgJuegos/metro-exodus-enhanced-edition-cover-zjv.jpg', 'https://www.elamigos-games.com/games/metro-exodus-enhanced-edition-p'),
(10, 'Red Dead Redemption 2', '', '', 'Aventura Shooters', 'imgJuegos/red-dead-redemption-2.jpg', 'https://www.elamigos-games.com/games/red-dead-redemption-2'),
(11, 'Spider Man Remastered', '', 'Popular #1', 'Aventura', 'imgJuegos/Spider-man-remastered.jpg', 'https://www.elamigos-games.com/games/marvels-spider-man-remastered-pc-e'),
(12, 'The Last Stand Aftermath', '', '', 'Aventura Terror', 'imgJuegos/the-last-stand-aftermath.jpg', 'https://www.elamigos-games.com/games/the-last-stand-aftermath'),
(13, 'Xena Bridge of Spirits', '', '', 'Anime Terror Aventura', 'imgJuegos/kena-bridge-of-spirits-cover-ueg.jpg', 'https://www.elamigos-games.com/games/kena-bridge-of-spirits'),
(14, 'Dark Souls', NULL, NULL, 'Terror Aventura', 'imgJuegos/dark-souls-remastered.jpg', 'https://www.elamigos-games.com/games/dark-souls-remastered-pc-me'),
(15, 'Ciberpunk 2077', NULL, 'Reciente', 'Futurista Accion Ficcion', 'imgJuegos/cyberpunk-2077-cover-uu1.jpg', 'https://www.elamigos-games.com/games/cyberpunk-2077-pc-elamigos-2021-mediafire-espanh'),
(16, 'Song of the Deep', NULL, NULL, NULL, 'imgJuegos/song-of-the-deep-cover-ag3.jpg', 'https://www.elamigos-games.com/games/song-of-the-deep');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblelogin`
--

DROP TABLE IF EXISTS `tblelogin`;
CREATE TABLE IF NOT EXISTS `tblelogin` (
  `Usuario` varchar(25) NOT NULL,
  `Pass` varchar(25) NOT NULL,
  `Rol` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblelogin`
--

INSERT INTO `tblelogin` (`Usuario`, `Pass`, `Rol`) VALUES
('SpartanLuck', 'numero', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
