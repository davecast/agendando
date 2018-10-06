-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2018 a las 02:47:07
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `urbe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reminders`
--

CREATE TABLE `reminders` (
  `rec_id` int(11) NOT NULL,
  `description` varchar(140) NOT NULL,
  `reminder_to` time NOT NULL,
  `fecha` date NOT NULL,
  `time` time NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `avatar` varchar(2083) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `email`, `password`, `token`, `avatar`) VALUES
(1, 'David Castillo', 'davecast', 'davecas26@gmail.com', '$2y$10$8U0hCa3IooH9L4DjyYuO/ehDkmZigibO.wedYfIj7BnKMrLJSj1cK', '5c845c9853aa55c596ed136a354fd3d3ef862385755a8c7e2f1df383863186bfb76d768bc005effbb739ac0d9f56d1eb7ca02cddd9047db6f6e0692337643b61', 'C:\\xampp\\htdocs\\agendando\\temp\\user.png'),
(2, 'Desiree Montiel', 'desimont', 'desiree07@gmail.com', '$2y$10$8U0hCa3IooH9L4DjyYuO/ehDkmZigibO.wedYfIj7BnKMrLJSj1cK', '3f8f8cfce6d35c982e349b4d161bed2fbc3b3c8597dc68770e73cf6f64e67e5e7cf80dfa7f8579bc4020a23b7ef844b14944626c19e6db523b778a940b6687ef', 'C:\\xampp\\htdocs\\agendando\\temp\\user.png'),
(3, 'Jose Mora', 'jgmora', 'jgmora@gmail.com', 'dwdwa', '', 'dwa'),
(6, 'dave cast', 'dave2', 'dave@gmail.com', '123456', '', 'https://lorempixel.com/640/338/people/?29130'),
(7, 'dave cast2', 'dave22', 'dave22@gmail.com', '123456', '', 'https://lorempixel.com/640/338/people/?29222'),
(8, 'David Castillo', 'dave', 'davecas@gmail.com', '$2y$10$2ZlGEr/rqml2za6orzOZW.N/JlSt6c44fabc4Yj4Ydkns03/j/kku', '20040ca6346d8cfec498fd66d278eea8d1504fa9b0b1692701b56c8d9daea19b4a4c1c6c3e832f44a670f8a91da9cbbeedc0f1895a4bea718eca713345ad2383', 'https://lorempixel.com/640/640/people/?776'),
(9, 'David Castillo', 'daver', 'daver@gmail.com', '$2y$10$73Ms06FsBYBP30ZRPVI/Ze7MSMzmx1t0wYxzVFA9xAiyYl.I3RmrK', 'd476c469b11cc0973e37e53eac70c4c9ac930c1f75ebb671e3a15674cc78dfeb6d0fb7bcddf2dfefc8ee98551ff1839ac1180df4a1f60ea7bb04a6dee64972ad', 'https://lorempixel.com/640/640/people/?189'),
(10, 'David Castillo', 'davew', 'davew@gmail.com', '$2y$10$QIX7kBQaNuuqkgSRSCEeputElcottpjr.7u4VT4NGnpGPDVUVZRoa', '1ced5363c58363bd06c6202fa4d4c3ea2fe27a1e8faad1b7fb66ea5c5e02d96c093a266fce7314ff1cd8524b9239539a01989b709a058834509fbf6c412ca094', 'https://lorempixel.com/640/640/people/?17'),
(11, 'Dafe castillo', 'dafe', 'dafe@gmail.com', '$2y$10$5tKJqk8lYy0eewfnNil7H.PF/XCkP2BpUxIu0buEd8PovKlCpTo7O', '33ca15e711f5365540c34bedaa57ea8f3087ac13299b5aca3c72bb1e34ad5fd97bc10d74f91000c5f4b6fabf830bb58561788d0e15ff51daa186c61b65555d53', 'https://lorempixel.com/640/640/people/?648'),
(12, 'Fare Castillo', 'fare', 'fare@gmail.com', '$2y$10$VvcPBKZaTuEBQICcsU0Q3ed/8OfYhwwvKBus82EjY2To2B1TT8P0q', '4e5f375e9b896fb4c019ad4151a196a2e5a579d8c8c06e534578eed3263cce7609f3af079261b931c5923b8319868239a0354964c39f846ad7e61dabe54176d3', 'https://lorempixel.com/640/640/people/?438'),
(13, 'Gaze Montiel', 'gaze', 'Gaze@gmail.com', '$2y$10$jxBz/Ox9dyoVncQRNrGA0uiLHc5g1OPmd3bVBubsdXP1PGqzINU.2', '22ac1e1831836d777723ed4e675ceae068da80e227c1702a176ce83cafa8b92295b3bad3678ada17a0c029e86c858e392a02b01ca51a3dafcffd248fea81d449', 'https://lorempixel.com/640/640/people/?608'),
(14, 'joker martinez', 'joker', 'joker@gmail.com', '$2y$10$1aMCtrNRVmlarzZunrOaBOsrnuj/EQYRcmTEpQcHTqQ8rZC/FjYee', '17ec2840ed5fc2730e094295835e9eff30c18fbf31a54775ab313350d77076cb2fb155854c3bcb1cd35afcab6ad55fc399269afde598df99684e4376d1eabfa7', 'https://lorempixel.com/640/640/people/?485'),
(15, 'jukan mole', 'jukan', 'jukan@gmail.com', '$2y$10$Unr6vNHhNOGZeHZVQ9YC5uJzPGpGp3EBK0ZF5mQPm0DyIr8adbB1K', '3f7e616d2bc35e38078543c7ef52197dda7eb39b98eaf015011eb42add58c0e6f54fb2ffb9deeb3641b5f2ea680cce70764dfc5a294debe2089275b2d63f7dbd', 'https://lorempixel.com/640/640/people/?986'),
(16, 'melan tones', 'melan', 'melan@gmail.com', '$2y$10$QdhDBl.M0EaXO9B9qnO9PuKiKRQhbr2afnVl0YLAPPlzGEgOSISoa', 'f62bd79d827be5c879ae676fe182628e22052089008b65472376515112316e1510d8900dcc8dbfa2e49ed87f42a78047c9caa57f1bbc78ee6c2b97d8f3a9b461', 'https://lorempixel.com/640/640/people/?146'),
(17, 'Isaac Morales', 'issac', 'isaac@gmail.com', '$2y$10$dZO8E3zqpJJ9N9GQX/mrlu4RHhiZ2KVg1Lt2jP4ew1txEYOVjC3jC', '31e634ec2bc0adb49653974db8c6bba0e9695e837607248ad5b955eb35e9dd0f826a3a79162b8b4de6fea7994d8cdecd4e8e67cf7fdb95094cdcd8e70cbe02bf', 'https://lorempixel.com/640/640/people/?490');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`rec_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username_2` (`username`,`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reminders`
--
ALTER TABLE `reminders`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reminders`
--
ALTER TABLE `reminders`
  ADD CONSTRAINT `reminders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
