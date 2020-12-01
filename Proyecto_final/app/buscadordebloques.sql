-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2020 a las 13:30:05
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `buscadordebloques`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `fechaDeEstreno` varchar(25) NOT NULL,
  `directores` varchar(25) NOT NULL,
  `recaudacion` varchar(25) NOT NULL,
  `clasificacion` varchar(10) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `presupuesto` varchar(25) NOT NULL,
  `añoDeEstreno` int(11) NOT NULL,
  `vizualizaciones` int(11) DEFAULT 0,
  `status` varchar(25) NOT NULL,
  `portada` varchar(80) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `link` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id`, `nombre`, `descripcion`, `fechaDeEstreno`, `directores`, `recaudacion`, `clasificacion`, `duracion`, `categoria`, `presupuesto`, `añoDeEstreno`, `vizualizaciones`, `status`, `portada`, `tipo`, `link`) VALUES
(3, 'Scarface', 'Un inmigrante cubano de las cárceles de Fidel Castro provoca un camino de destrucción en su ascenso en el mundo de las drogas de Miami.', '20 de septiembre de 1984', 'Brian de palma', '66 millones usd', 'C', '2hr 55 min', 'Accion', '25 Millones USD', 1984, 1, 'Activo', '../Imagenes/Covers/d258cb5cd0dac66ff7efa7f4ec45b596.jpg', 'pelicula', 'Olgn9sXNdl0'),
(4, 'El padrino', 'El padrino (título original en inglés: The Godfather1​) es una película estadounidense de 1972 dirigida por Francis Ford Coppola. La película fue producida por Albert S. Ruddy, de la compañía Paramount Pictures. Está basada en la novela homónima (que a su vez está basada en la familia real de los Mortillaro de Sicilia, Italia), de Mario Puzo, quien adaptó el guion junto a Coppola y Robert Towne, este último sin ser acreditado.2​ Protagonizada por Marlon Brando y Al Pacino como los líderes de una poderosa familia criminal ficticia de Nueva York, la historia, ambientada desde 1945 a 1955, cuenta las crónicas de la Familia Corleone liderada por Vito Corleone (Brando), enfocándose en el personaje de Michael Corleone (Pacino), y su transformación de un reacio joven ajeno a los asuntos familiares a un implacable jefe de la mafia italo-estadounidense.', '5 de octubre de 1972', 'Francis Ford Coppola', '245 066 411 Mundo', 'C', '175 minuto', 'Crimen', '6 000 000 Estimado', 1972, 1, 'Activo', '../Imagenes/Covers/godfather_.jpg', 'pelicula', '8Pf8BkFLBRw'),
(5, 'The Great Gatsby', 'Nick Carraway (Tobey Maguire), nativo del Medio Oeste, llega a Nueva York en 1922 en busca del sueño americano. Nick, un aspirante a escritor, se muda al lado del millonario Jay Gatsby (Leonardo DiCaprio) y al otro lado de la bahía de su prima Daisy (Carey Mulligan) y su esposo mujeriego, Tom (Joel Edgerton). Nick se involucra en un mundo cautivador de riqueza y -- mientras observa sus ilusiones y engaños -- escribe una historia de amor imposible, sueños y tragedia.', '31 de mayo de 2013', 'Baz Luhrmann', '$351 040 419', 'B-15', '2h 23m', 'Drama', '105 millones USD', 2013, 2, 'Activo', '../Imagenes/Covers/gats.jpg', 'pelicula', 'rARN6agiW7o'),
(6, 'El padrino 2', 'Michael Corleone lidera el imperio criminal de su padre, mientras que se recuerda el ascenso al poder del joven Vito.', '12 de diciembre de 1974', 'Francis Ford Coppola', 'USD 193 000 000​.', 'C', '3h 22m', 'Crimen', '13 millones USD', 1974, 1, 'Activo', '../Imagenes/Covers/c261b65c5b51dbd6ab5ce4dbdb7f0408.jpg', 'pelicula', 'gCdXiOssbM0'),
(7, 'Karate Kid', 'Daniel LaRusso llega a Los Ángeles dispuesto a hacer amigos, pero rápidamente se convierte en el blanco de los ataques de un grupo de estudiantes de karate. Por eso, le pide ayuda a Miyagi, un maestro de artes marciales que cambiará su vida.', '22 de junio de 1984 ', 'John G. Avildsen', '100 millones USD', 'B', '2h 7m', 'Juvenil', '8 millones USD', 1984, 11, 'Activo', '../Imagenes/Coverskkratekid.jpg', 'pelicula', 'CiFxNjMf5Bc'),
(8, 'The Walking Dead', 'Basado en la historieta escrita por Robert Kirkman, este drama crudo describe las vidas de un grupo de sobrevivientes que está siempre en movimiento en busca de un hogar seguro durante las semanas y meses de un apocalipsis zombi. Sin embargo, la presión de estar con vida cada día, lleva a algunos del grupo a la crueldad profunda de cada ser humano y descubren que el miedo abrumador puede ser más mortal que los zombis que caminan a su alrededor. Los conflictos interpersonales pueden representar una amenaza mayor para su supervivencia que los caminantes que deambulan por las calles.', ' 31 de octubre de 2010', 'Robert Kirkman', '-', 'B-15', '45 Min', 'Suspenso', '-', 2010, 4, 'Activo', '../Imagenes/Covers6609111_so.jpg', 'Serie', 'cTw07vrJGIM'),
(9, 'Jojo Rabbit', 'Durante la Segunda Guerra Mundial, un niño que pertenece a las Juventudes Hitlerianas descubre que su madre está ocultando en el ático de su casa a una niña judía. La concepción del mundo que tienen el pequeño y su amigo imaginario, Hitler, cambia por completo con la irrupción en sus vidas de la joven hebrea.', '24 de enero de 2020', 'Taika Waititi', '90.3 millones USD', 'B', '1h 48m', 'Belico', '14 millones USD', 2020, 6, 'Activo', '../Imagenes/Coversjojo-rabbit-1842475.jpg', 'Estreno', '9LMCzMHq9aE'),
(10, 'Aquaman', 'Aquaman debe recuperar el legendario Tridente de Atlan para salvar a la ciudad subacuática de Atlantis, y al mundo de la superficie, de su hermano hambriento de poder.', '13 de diciembre de 2018', 'James Wan', '1.148 miles de millones U', 'B', '2h 22m', 'Fantasia', '$200 000 000', 2018, 0, 'Activo', '../Imagenes/Covers2cc1025ac8d10b86e53eaf3fa94270d5.jpg', '4K', '9Yam5B_iasY'),
(11, 'Mujer Maravilla 1984', 'Diana Prince, conocida como Wonder Woman se enfrenta a Cheetah, una villana que posee fuerza y agilidad sobrehumanas.', '16 de diciembre de 2020', 'Patty Jenkins', '-', 'B', '2h 31m', 'Fantasia', '200 millones USD', 2020, 0, 'Activo', '../Imagenes/Coverswonder-woman-1984-poster.jpg', 'Trailers', 'XW2E2Fnh52w'),
(12, 'La La Land', 'Sebastian, un pianista de jazz, y Mia, una aspirante a actriz, se enamoran locamente; pero la ambición desmedida que tienen por triunfar en sus respectivas carreras, en una ciudad como Los Ángeles, repleta de competencia y carente de piedad, pone en peligro su amor.', '9 de noviembre de 2016', 'Damien Chazelle', '447.4 millones USD', 'B', '2h 8m', 'Romance', '30 millones USD', 2018, 0, 'Activo', '../Imagenes/Covers3d97531c70164e1b1fb1ecc407e591a3.jpg', 'Pelicula', 'waTDxRZ93Qc'),
(13, 'Saturday Night Fever', 'El empleado de una tienda de pintura de Brooklyn usa un traje blanco y se convierte en el rey de la disco local.', '13 de julio de 1978', 'John Badham', '237.1 millones USD', 'B-15', '1h 59m', 'Drama', '3.5 millones USD', 1978, 0, 'Activo', '../Imagenes/Covers10fdb7787ce4c1450b736ba3a7ae378e.jpg', 'Pelicula', 'RZTP586-Y9E'),
(14, 'Cobra Kai', 'Treinta y cuatro años después de los eventos del torneo de karate All Valley de 1984, Johnny Lawrence busca la redención al abrir un dojo Cobra Kai, reavivando su rivalidad con un exitoso Daniel LaRusso.', '2 de mayo de 2018', '-', '-', 'B-15', '40 min/ ca', 'Accion', '-', 2018, 0, 'Activo', '../Imagenes/Covers71A0zlH-MJL._AC_SL1500_.jpg', 'Serie', '_rB36UGoP4Y');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `correoElectronico` varchar(50) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  `rol` varchar(15) DEFAULT NULL,
  `agregado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `correoElectronico`, `contrasena`, `rol`, `agregado`) VALUES
(4, 'root', 'root', 'root@gmail.com', 'root', NULL, '2020-12-01 04:21:50'),
(6, 'admin', 'admin', 'admin', 'admin', NULL, '2020-12-01 04:24:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
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
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
