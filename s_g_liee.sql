-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2024 a las 00:07:01
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `s_g_liee`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo_electronico` varchar(40) DEFAULT NULL,
  `razon_social` varchar(50) DEFAULT NULL,
  `rfc` varchar(50) DEFAULT NULL,
  `nombre_responsable` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `empresa`, `direccion`, `telefono`, `correo_electronico`, `razon_social`, `rfc`, `nombre_responsable`, `password`) VALUES
(1, 'Liee', 'calle 3 sur', '3115561615', 'lieee@gmail.com', 'pruebas', '12345678', 'David alva', '$2y$12$yP0TbvO9GreAaJoz24tdXOdS8hmufZMWvKnhQAjRebUDTek90pTU2'),
(2, 'buap', 'insurgentes norte', '263453454', 'buap@gmail.com', 'pruebas', '6543232121', 'Isaac', '$2y$12$MzEChIr0P1SA5LAaXgWZTuhBR9u/QILmNjeG/5z4un5TW1e.iJE1.'),
(3, 'BUAP', 'Blvd. Audi Sur, 75012 Cdad. Modelo, Pue.', '2761326702', 'luis.alva@alumno.buap.mx', '12314125464', 'AAVL050300', 'Eduardo Vallejo', '$2y$12$CRb5iR738tEdpRtV1g7jHuOBbWNvVQODKYOjC6dIjsxU97jtQhRCK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_documento` int(5) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `acceso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensayos`
--

CREATE TABLE `ensayos` (
  `id_ensayos` int(11) NOT NULL,
  `tipo` char(2) DEFAULT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `seleccion_030` tinyint(1) DEFAULT 0,
  `seleccion_031` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ensayos`
--

INSERT INTO `ensayos` (`id_ensayos`, `tipo`, `codigo`, `descripcion`, `nom`, `seleccion_030`, `seleccion_031`) VALUES
(1, 'A', '030/7.1', 'Eficacia luminosa', 'NOM 030 ENER 2016', 0, 0),
(2, 'A', '030/7.2', 'Variación del flujo luminoso total nominal', 'NOM 030 ENER 2016', 0, 0),
(3, 'A', '030/7.3', 'Temperatura de color correlacionado (TCC)', 'NOM 030 ENER 2016', 0, 0),
(4, 'A', '030/7.4', 'Flujo luminoso total mínimo mantenido', 'NOM 030 ENER 2016', 0, 0),
(5, 'A', '030/7.5', 'Índice de rendimiento de color (IRC)', 'NOM 030 ENER 2016', 0, 0),
(6, 'A', '030/7.6', 'Factor de potencia (PU)', 'NOM 030 ENER 2016', 0, 0),
(7, 'A', '030/7.7', 'Distribución espacial de luz', 'NOM 030 ENER 2016', 0, 0),
(8, 'A', '030/7.8', 'Ciclo de choque térmico', 'NOM 030 ENER 2016', 0, 0),
(9, 'A', '030/7.9', 'Ciclo de conmutación', 'NOM 030 ENER 2016', 0, 0),
(10, 'A', '030/7.10', 'Sobretensiones transitorias', 'NOM 030 ENER 2016', 0, 0),
(11, 'A', '030/7.11', 'Distorsión armónica total', 'NOM 030 ENER 2016', 0, 0),
(12, 'A*', '031/8.1', 'Eficacia luminosa', 'NOM 031 ENER 2019', 0, 0),
(13, 'A*', '031/8.2', 'Variación de flujo luminoso nominal', 'NOM 031 ENER 2019', 0, 0),
(14, 'A', '031/8.3', 'Temperatura de color correlacionada (TCC)', 'NOM 031 ENER 2019', 0, 0),
(15, 'A', '031/8.4', 'Flujo luminoso total mantenido', 'NOM 031 ENER 2019', 0, 0),
(16, 'A', '031/8.5', 'Índice de rendimiento de color (IRC)', 'NOM 031 ENER 2019', 0, 1),
(17, 'A*', '031/8.6', 'Factor de potencia (PU)', 'NOM 031 ENER 2019', 0, 1),
(18, 'A', '031/8.7', 'Distorsión armónica total en corriente', 'NOM 031 ENER 2019', 0, 0),
(19, 'A', '031/8.8', 'Flujo luminoso de deslumbramiento', 'NOM 031 ENER 2019', 0, 0),
(20, 'A', '031/8.9', 'Resistencia al choque térmico y a la conmutación', 'NOM 031 ENER 2019', 0, 0),
(21, 'A', '031/8.10', 'Resistencia a las descargas atmosféricas', 'NOM 031 ENER 2019', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especimen`
--

CREATE TABLE `especimen` (
  `id_especimen` int(11) NOT NULL,
  `id_cliente` int(5) NOT NULL,
  `id_personal` int(5) DEFAULT NULL,
  `id_solicitud` int(5) DEFAULT NULL,
  `recepcion` date DEFAULT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `indicador_admision` int(1) DEFAULT NULL,
  `envio` date DEFAULT NULL,
  `Nombre` varchar(60) DEFAULT NULL,
  `Descripcion` varchar(10) DEFAULT NULL,
  `Uso` varchar(10) DEFAULT NULL,
  `Cantidad` int(100) DEFAULT NULL,
  `Marca_modelo` varchar(60) DEFAULT NULL,
  `Numero_serie` varchar(30) DEFAULT NULL,
  `Tension_electrica` int(11) DEFAULT NULL,
  `Potencia_electrica` int(11) DEFAULT NULL,
  `Valor_flujo_luminoso` int(11) DEFAULT NULL,
  `Temperatura_color_correlacionada` int(11) DEFAULT NULL,
  `Indice_rendimiento_color` int(11) DEFAULT NULL,
  `Horas_vida` int(100) DEFAULT NULL,
  `Factor_potencia_nominal` int(11) DEFAULT NULL,
  `Material_carcasa` varchar(60) DEFAULT NULL,
  `Material_reflector` varchar(60) DEFAULT NULL,
  `Tipo_montaje` varchar(60) DEFAULT NULL,
  `Tipo_controlador` varchar(60) DEFAULT NULL,
  `Posicion_luminario_grados` int(11) DEFAULT NULL,
  `Fabricante_luminaria` varchar(40) DEFAULT NULL,
  `Num_modulos_tarjetas_LED` int(100) DEFAULT NULL,
  `Num_LEDs_por_modulo_tarjetas_LED` int(100) DEFAULT NULL,
  `Num_catalogo` int(100) DEFAULT NULL,
  `Dimensiones` varchar(100) DEFAULT NULL,
  `Fecha_registro` datetime DEFAULT NULL,
  `Fecha_modificacion` datetime DEFAULT NULL,
  `Fecha_recepcion` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especimen`
--

INSERT INTO `especimen` (`id_especimen`, `id_cliente`, `id_personal`, `id_solicitud`, `recepcion`, `estado`, `indicador_admision`, `envio`, `Nombre`, `Descripcion`, `Uso`, `Cantidad`, `Marca_modelo`, `Numero_serie`, `Tension_electrica`, `Potencia_electrica`, `Valor_flujo_luminoso`, `Temperatura_color_correlacionada`, `Indice_rendimiento_color`, `Horas_vida`, `Factor_potencia_nominal`, `Material_carcasa`, `Material_reflector`, `Tipo_montaje`, `Tipo_controlador`, `Posicion_luminario_grados`, `Fabricante_luminaria`, `Num_modulos_tarjetas_LED`, `Num_LEDs_por_modulo_tarjetas_LED`, `Num_catalogo`, `Dimensiones`, `Fecha_registro`, `Fecha_modificacion`, `Fecha_recepcion`, `created_at`, `updated_at`) VALUES
(7, 3, NULL, NULL, NULL, NULL, NULL, NULL, 'Luna Pro', 'Lámpara', 'Exterior', 55, 'Moody-Norris air', '2BHIMBRR8L', 240, 80, 11600, 5800, 76, 84000, 1, 'Plástico', 'Aluminio', 'Pared', 'Integrada al módulo de led', 142, 'Torres, Chandler and Lozano', 7, 15, 12312414, '41.6x27.1x14.5 cm', NULL, NULL, NULL, '2024-05-17 21:51:59', '2024-05-17 21:51:59'),
(8, 3, NULL, NULL, NULL, NULL, NULL, NULL, 'Luna Pro', 'Luminario', 'Interior', 5, 'Moody-Norris air', '2BHIMBRR8L', 5, 60, 6, 79, 1, 1500, 1, 'Plástico', 'Aluminio', 'Pared', 'Integrada al módulo de led', 45, 'Torres, Chandler and Lozano', 15, 15, 45, '41.6x27.1x14.5 cm', NULL, NULL, NULL, '2024-05-21 04:05:56', '2024-05-21 04:05:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_26_024445_update_personal_table', 2),
(6, '2024_05_14_230626_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(5) NOT NULL,
  `id_rol` int(1) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido_paterno` varchar(20) DEFAULT NULL,
  `apellido_materno` varchar(20) DEFAULT NULL,
  `correo_electronico` varchar(40) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `id_rol`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo_electronico`, `password`) VALUES
(3, 2, 'Isaac', 'rivera', 'Vega', 'narutoasumaki244@gmail.com', '$2y$12$umpwuY6DtYTDU6IZDSqrp.hvyIAweY5nOTZwx85TKJfwJdyDKEPfO'),
(4, 4, 'Isaac', 'Bob', 'luis', 'isaac@gmil.com', '$2y$12$Mzx0NbBzxbuxUrg.4hb2NugjZS8u293FqFbC22j3/ljvZnUpuOSt.'),
(5, 4, 'Misael', 'Bob', 'pacheco', 'misal@gamil.com', '$2y$12$JAGQrX2uIwQVox/97mNAVOqtGo329qRiV9dlJq2u99cCxaLo9n6yC'),
(6, 1, 'Misael', 'Vazquez', 'Perez', 'kiritovazquez4@gmail.com', '$2y$12$MYwb8Kk8A/eMwH8m2H.MHOuAy8TcciYc/7.QjRg8LpFBU0fy4eIkG'),
(7, 3, 'David', 'rivera', 'Alova', 'dealer@gmail.com', '$2y$12$dvCSYXuUGaCUEXWo/JlhUuTms5jEKNJ2rYU/yhSX/sc9Hp6geBF3u'),
(8, 1, 'daniel', 'alonso', 'carrazco', 'dani@gmail.com', '$2y$12$RYCAk5Ytwn/VmRK0OyFxS.2K7YcrbfyUTE/O9tGYDVJTpB319xNNS'),
(9, 4, 'Eduardo', 'Vallejo', 'Alva', 'eduardo@example.com', '$2y$12$gMs.YwK2OtKLLXo3uSze8.krakyU7Vd2vMSCVLMGZ9hFe/ziQDWY.'),
(10, 1, 'Humberto', 'Flores', 'García', 'hgarflo@inaoe.edu.mx', '$2y$12$3EijVWG4NkV2um7zJM6dDOwDGoqB9H7myZOQk9nfuODLF5GDvB81.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(1) NOT NULL,
  `cargo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `cargo`) VALUES
(1, 'Responsable del LIEE'),
(2, 'Responsable del SGC'),
(3, 'Responsable de Ensayos'),
(4, 'Técnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(5) NOT NULL,
  `id_cliente` int(10) DEFAULT NULL,
  `id_especimen` int(5) DEFAULT NULL,
  `id_solicitud` int(5) DEFAULT NULL,
  `inicio` date DEFAULT NULL,
  `estatus` varchar(15) DEFAULT NULL,
  `fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(5) NOT NULL,
  `id_cliente` int(5) DEFAULT NULL,
  `id_personal` int(5) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `folio` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `ensayos`
--
ALTER TABLE `ensayos`
  ADD PRIMARY KEY (`id_ensayos`);

--
-- Indices de la tabla `especimen`
--
ALTER TABLE `especimen`
  ADD PRIMARY KEY (`id_especimen`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_personal` (`id_personal`),
  ADD KEY `id_solicitud` (`id_solicitud`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `fk_servicio_cliente` (`id_cliente`),
  ADD KEY `fk_servicio_especimen_idx` (`id_especimen`),
  ADD KEY `fk_servicio_solicitud_idx` (`id_solicitud`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `id_personal` (`id_personal`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ensayos`
--
ALTER TABLE `ensayos`
  MODIFY `id_ensayos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `especimen`
--
ALTER TABLE `especimen`
  MODIFY `id_especimen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(5) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `especimen`
--
ALTER TABLE `especimen`
  ADD CONSTRAINT `especimen_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `especimen_ibfk_2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`),
  ADD CONSTRAINT `especimen_ibfk_3` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_servicio_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `fk_servicio_especimen` FOREIGN KEY (`id_especimen`) REFERENCES `especimen` (`id_especimen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicio_solicitud` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`),
  ADD CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
