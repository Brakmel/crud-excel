SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `salas` (
  `id` int(11) NOT NULL,
  `fecha_real_clase` varchar(100) NOT NULL,
  `hora_desde` varchar(100) NOT NULL,
  `hora_hasta` varchar(100) NOT NULL,
  `sala` varchar(100) NOT NULL,
  `tipo_evento` varchar(100) NOT NULL,
  `profesor_resp` varchar(100) NOT NULL,
  `quien_solicita` varchar(100) NOT NULL,
  `fecha_solicitud` varchar(100) NOT NULL,
  `telefono_con` varchar(100) NOT NULL,
  `material_sala` varchar(100) NOT NULL,
  `observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `salas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2780;
COMMIT;

