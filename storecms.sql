-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2024 a las 15:52:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `storecms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updated_at`) VALUES
(1, 'admin', 'admin', '2022-07-13 21:00:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `port_title` varchar(500) NOT NULL,
  `port_desc` varchar(1000) NOT NULL,
  `port_detail` varchar(2000) NOT NULL,
  `ufile` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `portfolio`
--

INSERT INTO `portfolio` (`id`, `port_title`, `port_desc`, `port_detail`, `ufile`, `updated_at`) VALUES
(3, 'App Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. ', '926070de04f0-df57-11ec-85a8-bda8f2c6ca77-rimg-w720-h720-gmir.jpg', '2022-07-19 00:48:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(60) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `ufile` varchar(100) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `update_at` datetime DEFAULT current_timestamp(),
  `brand` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_title` varchar(500) NOT NULL,
  `service_desc` varchar(1000) NOT NULL,
  `service_detail` varchar(2000) NOT NULL,
  `ufile` varchar(1000) NOT NULL,
  `upadated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `service`
--

INSERT INTO `service` (`id`, `service_title`, `service_desc`, `service_detail`, `ufile`, `upadated_at`) VALUES
(2, 'Casacas', 'Casacas para mantenerte abrigado y con estilo.', 'Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.', '1582casaca-mod003-varios.jpg', '2024-12-07 22:22:18'),
(3, 'Polos', 'Polos versátiles para cualquier ocasión.', 'Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.', '5056polo.jpg', '2024-12-07 22:23:12'),
(4, 'Zapatillas', 'Descubre nuestra selección de zapatillas diseñadas para cada paso de tu día.', 'Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.\r\n\r\nLearn More Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.\r\n\r\nLearn More', '648Eternity.jpg', '2024-12-07 21:11:02'),
(6, 'Gorras', 'Gorras modernas para complementar tu look diario.', 'Este es el detalle del servicio de mas de  caracteres para que deje ingresar segun la validacion', '8601gorras.png', '2024-12-07 22:19:39'),
(7, 'Camisas', 'Camisas para todas las ocasiones.', 'este ess la decriocion grande del servicio de mas de  caracteres segun esta validadooooooooo', '4098camisas .png', '2024-12-07 22:26:37'),
(8, 'Zapatillas', 'Zapatillas diseñadas para cada paso de tu vida.', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffdddddddd', '9204zapatillas.jpeg', '2024-12-07 22:24:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitecontact`
--

CREATE TABLE `sitecontact` (
  `id` int(11) NOT NULL,
  `phone1` varchar(150) NOT NULL,
  `phone2` varchar(150) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sitecontact`
--

INSERT INTO `sitecontact` (`id`, `phone1`, `phone2`, `email1`, `email2`, `updated_at`) VALUES
(1, '954 306 622', '954 306 622', '221181@unamba.edu.pe', '221181@unamba.edu.pe', '2024-12-09 01:17:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slide_title` varchar(150) NOT NULL,
  `slide_text` varchar(500) NOT NULL,
  `ufile` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `slide_title`, `slide_text`, `ufile`, `updated_at`) VALUES
(1, 'We are digital agency & Marketing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nihil tenetur minus quidem est deserunt molestias accusamus harum ullam tempore debitis et, expedita, repellat delectus aspernatur neque itaque qui quod.', '58806059d354562031616499540.png', '2022-07-18 00:23:07'),
(2, 'cronerrr', 'sssssssssssssssssssssssss', '3123image.png', '2024-12-07 20:42:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `static`
--

CREATE TABLE `static` (
  `id` int(11) NOT NULL,
  `stitle` varchar(150) NOT NULL,
  `stext` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `static`
--

INSERT INTO `static` (`id`, `stitle`, `stext`, `updated_at`) VALUES
(1, 'Estilo Único: Elegancia Urbana', 'Descubre la última tendencia en moda urbana con nuestras prendas diseñadas para el estilo de vida moderno y dinámico.', '2024-12-07 04:24:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` varchar(100) NOT NULL,
  `ufile` varchar(1000) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `testimony`
--

INSERT INTO `testimony` (`id`, `message`, `name`, `position`, `ufile`, `updated_at`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'Yasmin Akter', 'Founder, Themeland', '5110avatar-2.png', '2022-07-18 05:41:45'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'Md. Arham', 'CEO, Themeland', '4068avatar-3.png', '2022-07-18 05:48:56'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'Junaid Hasan', 'CEO, Themeland', '5842avatar-1.png', '2022-07-18 05:50:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sitecontact`
--
ALTER TABLE `sitecontact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sitecontact`
--
ALTER TABLE `sitecontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `static`
--
ALTER TABLE `static`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `service` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
