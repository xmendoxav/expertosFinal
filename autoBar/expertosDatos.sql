-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2018 a las 22:07:57
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `expertos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumo`
--

CREATE TABLE `consumo` (
  `id_usuario` int(11) NOT NULL,
  `id_ menu` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `consumo_total` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `tipo_comida` varchar(5) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `imagen` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `tipo_comida`, `descripcion`, `nombre`, `precio`, `imagen`) VALUES
(1, 'D', 'Desayuno bambino exquisito, listo para disfrutar', 'Bambino archivo', 45, 'http://italiannis.com.mx/wp-content/uploads/9070bcc69dd4b90d7cc74f47e64e1c10.jpg'),
(2, 'D', 'Huevo, tocino, hot-cakes brochetas de fruta', 'Huevos mundialistas', 89, 'https://selecciones.com.mx/wp-content/uploads/2018/06/desayunos-mundialistas.jpg'),
(3, 'D', 'Omelet de huevo de queso Philadelphia', 'Philadelphia', 105.64, 'https://www.philadelphia.com.mx/modx/assets/img/recetas/principal/recetas_full_v2/desayunos/Omelette_de_espinacas.png'),
(4, 'D', 'Enchiladas en salsa verde', 'Adios cruda', 68.45, 'https://elasador.com.mx/wp-content/uploads/2017/10/desayunos3.png'),
(5, 'D', 'Muesli con yogurth', 'Muesli con yogurth', 34.3, 'https://www.clara.es/medio/2018/02/06/desayunos-saludables2_99463c57_600x900.jpg'),
(6, 'D', 'Si optas por un desayuno salado, prueba este. En u', 'Sandwich de salmón ', 34, 'https://www.clara.es/medio/2018/02/06/desayunos-saludables19_ee94ed3b_600x900.jpg'),
(7, 'C', 'Burrito bañado en salsa brasileña con pico de gall', 'Infierno', 100.23, 'https://www.coca-colamexico.com.mx/content/dam/journey/mx/es/private/historia/2017/febrero/Coca-Cola-combina-con-cualquier-platillo-y-los-mexicanos-lo-saben-1.jpg'),
(8, 'C', 'Pozole de res', 'Pozoleando', 98.1, 'https://www.frontera.info/Edicionenlinea/Fotos/VidayEstilo/714392-N.JPG'),
(9, 'C', 'Espagueti a la bolegnesa con el estilo de la casa', 'La casa', 123.56, 'https://gastronomiaycia.republica.com/wp-content/uploads/2016/01/calorias_restaurantes_usa-680x492.jpg'),
(10, 'C', 'Orden de 4 tacos rellenos de queso en salsa Hondur', 'Takearte', 98.79, 'https://etn.com.mx/blog/wp-content/uploads/2017/06/DestinoCelaya.jpg'),
(11, 'CE', 'Rollos de torilla y jamon', 'Otro Rollo', 89, 'https://minimfit.com/wp-content/uploads/2017/12/tortilla.jpg'),
(12, 'CE', 'Rellenas de verduras, setas y atún ', 'Berenjenas rellenas', 123.54, 'https://minimfit.com/wp-content/uploads/2017/12/berenjena.jpg'),
(13, 'CE', 'Especialidad de la casa', 'Espaguetis de calabacín', 95, 'https://minimfit.com/wp-content/uploads/2017/12/spaguetis.jpeg'),
(14, 'CE', 'Sola ideal para despues descansar', 'Detox', 87.78, 'https://minimfit.com/wp-content/uploads/2017/12/sopa.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `psw` varchar(8) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `luga_nacimiento` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` smallint(6) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `psw`, `nombre`, `apellidos`, `luga_nacimiento`, `edad`, `sexo`, `email`) VALUES
(1, '1112008', 'XaviDiego', 'Angeles García', 'Toluca, México', 23, 1, 'xmendoxaveco4109@hotmail.com'),
(2, '1234', 'sofi', 'Mendoza', 'jiqui', 20, 2, 'sofi@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consumo`
--
ALTER TABLE `consumo`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_ menu` (`id_ menu`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consumo`
--
ALTER TABLE `consumo`
  ADD CONSTRAINT `consumo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `consumo_ibfk_2` FOREIGN KEY (`id_ menu`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
