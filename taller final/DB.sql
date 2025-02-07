-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla mvc_example.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla mvc_example.categorias: ~3 rows (aproximadamente)
INSERT INTO `categorias` (`id`, `nombre`, `descripcion`) VALUES
	(1, 'trabajo', NULL),
	(2, 'personal', NULL),
	(3, 'urgente', NULL);

-- Volcando estructura para tabla mvc_example.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tarea_id` bigint(20) DEFAULT NULL,
  `usuario_id` bigint(20) DEFAULT NULL,
  `comentario` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla mvc_example.comentarios: ~0 rows (aproximadamente)

-- Volcando estructura para tabla mvc_example.tareas
CREATE TABLE IF NOT EXISTS `tareas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` bigint(20) unsigned DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `categoria_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla mvc_example.tareas: ~2 rows (aproximadamente)
INSERT INTO `tareas` (`id`, `usuario_id`, `descripcion`, `fecha_creacion`, `fecha_vencimiento`, `estado`, `categoria_id`) VALUES
	(1, 5, 'tarea de prueba', '2025-02-06', '2025-02-06', 'progreso', 2),
	(2, 5, 'tarea de prueba', '2025-02-06', '2025-02-07', 'pendiente', 1),
	(3, 5, 'examen', '2025-02-06', '2025-03-07', 'progreso', 3);

-- Volcando estructura para tabla mvc_example.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla mvc_example.usuarios: ~4 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`) VALUES
	(1, 'Juan Pérez', 'juan.perez@example.com', NULL),
	(2, 'Ana Gómez', 'ana.gomez@example.com', NULL),
	(3, 'Carlos López', 'carlos.lopez@example.com', NULL),
	(5, 'Juan Camilo', 'camilo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
