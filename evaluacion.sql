-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla evaluacion.bands
DROP TABLE IF EXISTS `bands`;
CREATE TABLE IF NOT EXISTS `bands` (
  `id` int NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `gender` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `song` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla evaluacion.bands: ~17 rows (aproximadamente)
DELETE FROM `bands`;
INSERT INTO `bands` (`id`, `title`, `img`, `gender`, `song`, `tipo`) VALUES
	(1, 'teya & selena', 'teya&selena.jpg', 'Pop', 'pop1.mp3', '1'),
	(2, 'kaarija', 'kaarija.jpg', 'Tecno', 'tecno1.mp3', '1'),
	(3, 'the lost', 'lord_of_the_lost.jpg', 'Rock', 'rock1.mp3', '1'),
	(4, 'LaRosa', 'isabel_larosa.jpg', 'Pop', 'pop2.mp3', '1'),
	(5, 'Ari Addul', 'ari.jpg', 'Pop', 'pop3.mp3', '1'),
	(6, 'Joker Out', 'joker.jpg', 'Indie', 'indie1.mp3', '1'),
	(7, 'vesna', 'vesna.jpeg', 'Dubstep', 'dubstep1.mp3', '1'),
	(8, 'pasha', 'pasha.jpeg', 'Dubstep', 'dubstep2.mp3', '1'),
	(9, 'luke', 'luke.jpg', 'Tecno', 'tecno2.mp3', '1'),
	(10, 'the dirty ', 'dirty.jpg', 'Rock', 'rock2.mp3', '1'),
	(11, 'dilija', 'dilija.jpg', 'Tecno', 'tecno3.mp3', '1'),
	(12, 'voyager', 'voyager.jpg', 'Rock', 'rock3.mp3', '1'),
	(13, 'super', 'super.jpg', 'Indie', 'indie2.mp3', '1'),
	(14, 'go_ab', 'goa.jpg', 'Dubstep', 'dubstep3.mp3', '1'),
	(15, 'atreyu', 'atreyu.jpg', 'Rock', NULL, '2'),
	(16, 'loreant', 'loreant.jpg', 'Pop', NULL, '2'),
	(17, 'fallen free', 'fallen_free.jpg', 'Indie', NULL, '2');

-- Volcando estructura para tabla evaluacion.galeria
DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '',
  `year` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla evaluacion.galeria: ~24 rows (aproximadamente)
DELETE FROM `galeria`;
INSERT INTO `galeria` (`id`, `title`, `year`) VALUES
	(1, '2021/1.jpg', '2021'),
	(2, '2021/2.jpg', '2021'),
	(3, '2021/3.jpg', '2021'),
	(4, '2021/4.jpg', '2021'),
	(5, '2021/5.jpg', '2021'),
	(6, '2021/6.jpg', '2021'),
	(7, '2021/7.jpg', '2021'),
	(8, '2021/8.jpg', '2021'),
	(9, '2022/1.jpg', '2022'),
	(10, '2022/2.jpg', '2022'),
	(11, '2022/3.jpg', '2022'),
	(12, '2022/4.jpg', '2022'),
	(13, '2022/5.jpg', '2022'),
	(14, '2022/6.jpg', '2022'),
	(15, '2022/7.jpg', '2022'),
	(16, '2022/8.jpg', '2022'),
	(17, '2023/1.jpg', '2023'),
	(18, '2023/2.jpg', '2023'),
	(19, '2023/3.jpg', '2023'),
	(20, '2023/4.jpg', '2023'),
	(21, '2023/5.jpg', '2023'),
	(22, '2023/6.jpg', '2023'),
	(23, '2023/7.jpg', '2023'),
	(24, '2023/8.jpg', '2023');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
