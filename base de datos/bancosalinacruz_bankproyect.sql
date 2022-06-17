-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2022 a las 23:21:26
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bancosalinacruz_bankproyect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ncontrol` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `programa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `proyecto_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreraables`
--

CREATE TABLE `carreraables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carreraable_id` bigint(20) UNSIGNED NOT NULL,
  `carreraable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jdepto_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `nombre`, `jdepto_id`, `created_at`, `updated_at`) VALUES
(1, 'INGENIERÍA EN ACUICULTURA', 1, '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(2, 'INGENIERÍA QUÍMICA', 1, '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(3, 'INGENIERÍA MECÁNICA', 2, '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(4, 'INGENIERÍA ELECTRÓNICA', 3, '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(5, 'INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIONES', 3, '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(6, 'INGENIERÍA EN GESTIÓN EMPRESARIAL', 4, '2022-06-17 15:50:16', '2022-06-17 15:50:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera_proyectograma`
--

CREATE TABLE `carrera_proyectograma` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `proyectograma_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `domicilios`
--

INSERT INTO `domicilios` (`id`, `calle`, `numero`, `colonia`, `cp`, `municipio`, `estado`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Carretera a San Antonio Monterrey, KM. 1.7', 'S/N', 'Granadillo', 70701, 'Salina Cruz', 'Oaxaca', 6, '2022-06-17 15:50:16', '2022-06-17 15:50:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicilio_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `giro`, `rfc`, `correo`, `telefono`, `titular`, `domicilio_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Instituto Tecnológico de Salina Cruz', 'Publico ', 'TNM140723GFA', 'dir_salinacruz@tecnm.mx', '9717163242', 'M. A. Macario Quiroz Cortés', 1, 6, '2022-06-17 15:50:16', '2022-06-17 15:50:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `tipo_status`, `created_at`, `updated_at`) VALUES
(1, 'EN PROCESO', '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(2, 'ASIGNADO', '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(3, 'DISPONIBLE', '2022-06-17 15:50:16', '2022-06-17 15:50:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jdeptos`
--

CREATE TABLE `jdeptos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `jdeptos`
--

INSERT INTO `jdeptos` (`id`, `apaterno`, `amaterno`, `nombre`, `departamento`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Hernández', 'Valencia', 'Má. Jorge Armando', 'Departamento de Ingenierías', 2, '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(2, 'Matías', 'Matías', 'M.E. Sergio', 'Departamento Metal-Mecánica', 3, '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(3, 'Morales', 'Cruz', 'Ing. Anita del Carmen', 'Departamento Eléctrica-Electrónica', 4, '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(4, 'Sosa', 'Pérez', 'Lic. Dolores', 'Departamento de Ciencias Económico-Administrativas', 5, '2022-06-17 15:50:16', '2022-06-17 15:50:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_15_034001_create_jdeptos_table', 1),
(6, '2022_03_15_034511_create_periodos_table', 1),
(7, '2022_03_15_035316_create_status_table', 1),
(8, '2022_03_15_035350_create_tipos_table', 1),
(9, '2022_03_15_036955_create_estados_table', 1),
(10, '2022_03_15_040656_create_carreras_table', 1),
(11, '2022_03_15_040815_create_domicilios_table', 1),
(12, '2022_03_15_040844_create_empresas_table', 1),
(13, '2022_03_15_041743_create_proyectos_table', 1),
(14, '2022_03_15_041813_create_programas_table', 1),
(15, '2022_03_15_041815_create_proyectogramas_table', 1),
(16, '2022_03_15_041842_create_alumnos_table', 1),
(17, '2022_03_15_232412_create_periodables_table', 1),
(18, '2022_03_15_243458_create_carreraables_table', 1),
(19, '2022_03_20_100254_create_periodo_proyectograma_table', 1),
(20, '2022_03_20_100745_create_carrera_proyectograma_table', 1),
(21, '2022_03_20_205804_create_convocatorias_table', 1),
(22, '2022_03_20_233853_create_solicitas_table', 1),
(23, '2022_03_21_005741_create_registros_table', 1),
(24, '2022_03_22_142559_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 4),
(6, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodables`
--

CREATE TABLE `periodables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periodable_id` bigint(20) UNSIGNED NOT NULL,
  `periodable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periodo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'FEBRERO-JUNIO 2022', '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(2, 'VERANO 2022', '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(3, 'AGOSTO-DICIEMBRE 2022', '2022-06-17 15:50:16', '2022-06-17 15:50:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo_proyectograma`
--

CREATE TABLE `periodo_proyectograma` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'home', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(2, 'tics.index', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(3, 'tics.create', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(4, 'tics.edit', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(5, 'tics.destroy', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(6, 'ticson.index', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(7, 'ticson.create', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(8, 'ticson.edit', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(9, 'ticson.destroy', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(10, 'ticsoff.index', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(11, 'ticsoff.create', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(12, 'ticsoff.edit', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(13, 'ticsoff.destroy', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(14, 'registroTicsPro.index', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(15, 'registroTicsPro.create', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(16, 'registroTicsPro.edit', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(17, 'registroTicsPro.destroy', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(18, 'registroTicsAuto.index', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(19, 'registroTicsAuto.create', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(20, 'registroTicsAuto.edit', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(21, 'registroTicsAuto.destroy', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(22, 'electronica.index', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(23, 'electronica.create', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(24, 'electronica.edit', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(25, 'electronica.destroy', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(26, 'electronicaon.index', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(27, 'electronicaon.create', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(28, 'electronicaon.edit', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(29, 'electronicaon.destroy', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(30, 'electronicaoff.index', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(31, 'electronicaoff.create', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(32, 'electronicaoff.edit', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(33, 'electronicaoff.destroy', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(34, 'registroElectronicaPro.index', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(35, 'registroElectronicaPro.create', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(36, 'registroElectronicaPro.edit', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(37, 'registroElectronicaPro.destroy', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(38, 'registroElectronicaAuto.index', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(39, 'registroElectronicaAuto.create', 'web', '2022-06-17 15:49:48', '2022-06-17 15:49:48'),
(40, 'registroElectronicaAuto.edit', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(41, 'registroElectronicaAuto.destroy', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(42, 'acuicultura.index', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(43, 'acuicultura.create', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(44, 'acuicultura.edit', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(45, 'acuicultura.destroy', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(46, 'acuiculturaon.index', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(47, 'acuiculturaon.create', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(48, 'acuiculturaon.edit', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(49, 'acuiculturaon.destroy', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(50, 'acuiculturaoff.index', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(51, 'acuiculturaoff.create', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(52, 'acuiculturaoff.edit', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(53, 'acuiculturaoff.destroy', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(54, 'registroAcuiculturaPro.index', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(55, 'registroAcuiculturaPro.create', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(56, 'registroAcuiculturaPro.edit', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(57, 'registroAcuiculturaPro.destroy', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(58, 'registroAcuiculturaAuto.index', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(59, 'registroAcuiculturaAuto.create', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(60, 'registroAcuiculturaAuto.edit', 'web', '2022-06-17 15:49:49', '2022-06-17 15:49:49'),
(61, 'registroAcuiculturaAuto.destroy', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(62, 'quimica.index', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(63, 'quimica.create', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(64, 'quimica.edit', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(65, 'quimica.destroy', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(66, 'quimicaon.index', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(67, 'quimicaon.create', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(68, 'quimicaon.edit', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(69, 'quimicaon.destroy', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(70, 'quimicaoff.index', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(71, 'quimicaoff.create', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(72, 'quimicaoff.edit', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(73, 'quimicaoff.destroy', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(74, 'registroQuimicaPro.index', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(75, 'registroQuimicaPro.create', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(76, 'registroQuimicaPro.edit', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(77, 'registroQuimicaPro.destroy', 'web', '2022-06-17 15:49:50', '2022-06-17 15:49:50'),
(78, 'registroQuimicaAuto.index', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(79, 'registroQuimicaAuto.create', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(80, 'registroQuimicaAuto.edit', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(81, 'registroQuimicaAuto.destroy', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(82, 'mecanica.index', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(83, 'mecanica.create', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(84, 'mecanica.edit', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(85, 'mecanica.destroy', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(86, 'mecanicaon.index', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(87, 'mecanicaon.create', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(88, 'mecanicaon.edit', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(89, 'mecanicaon.destroy', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(90, 'mecanicaoff.index', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(91, 'mecanicaoff.create', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(92, 'mecanicaoff.edit', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(93, 'mecanicaoff.destroy', 'web', '2022-06-17 15:49:51', '2022-06-17 15:49:51'),
(94, 'registroMecanicaPro.index', 'web', '2022-06-17 15:49:52', '2022-06-17 15:49:52'),
(95, 'registroMecanicaPro.create', 'web', '2022-06-17 15:49:52', '2022-06-17 15:49:52'),
(96, 'registroMecanicaPro.edit', 'web', '2022-06-17 15:49:52', '2022-06-17 15:49:52'),
(97, 'registroMecanicaPro.destroy', 'web', '2022-06-17 15:49:52', '2022-06-17 15:49:52'),
(98, 'registroMecanicaAuto.index', 'web', '2022-06-17 15:49:52', '2022-06-17 15:49:52'),
(99, 'registroMecanicaAuto.create', 'web', '2022-06-17 15:49:52', '2022-06-17 15:49:52'),
(100, 'registroMecanicaAuto.edit', 'web', '2022-06-17 15:49:52', '2022-06-17 15:49:52'),
(101, 'registroMecanicaAuto.destroy', 'web', '2022-06-17 15:49:52', '2022-06-17 15:49:52'),
(102, 'gestion.index', 'web', '2022-06-17 15:49:52', '2022-06-17 15:49:52'),
(103, 'gestion.create', 'web', '2022-06-17 15:49:52', '2022-06-17 15:49:52'),
(104, 'gestion.edit', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(105, 'gestion.destroy', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(106, 'gestionon.index', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(107, 'gestionon.create', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(108, 'gestionon.edit', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(109, 'gestionon.destroy', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(110, 'gestionoff.index', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(111, 'gestionoff.create', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(112, 'gestionoff.edit', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(113, 'gestionoff.destroy', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(114, 'registroGestionPro.index', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(115, 'registroGestionPro.create', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(116, 'registroGestionPro.edit', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(117, 'registroGestionPro.destroy', 'web', '2022-06-17 15:49:53', '2022-06-17 15:49:53'),
(118, 'registroGestionAuto.index', 'web', '2022-06-17 15:49:54', '2022-06-17 15:49:54'),
(119, 'registroGestionAuto.create', 'web', '2022-06-17 15:49:54', '2022-06-17 15:49:54'),
(120, 'registroGestionAuto.edit', 'web', '2022-06-17 15:49:54', '2022-06-17 15:49:54'),
(121, 'registroGestionAuto.destroy', 'web', '2022-06-17 15:49:54', '2022-06-17 15:49:54'),
(122, 'empresas.index', 'web', '2022-06-17 15:49:54', '2022-06-17 15:49:54'),
(123, 'empresas.create', 'web', '2022-06-17 15:49:54', '2022-06-17 15:49:54'),
(124, 'empresas.edit', 'web', '2022-06-17 15:49:54', '2022-06-17 15:49:54'),
(125, 'empresas.destroy', 'web', '2022-06-17 15:49:54', '2022-06-17 15:49:54'),
(126, 'domicilios.index', 'web', '2022-06-17 15:49:55', '2022-06-17 15:49:55'),
(127, 'domicilios.create', 'web', '2022-06-17 15:49:55', '2022-06-17 15:49:55'),
(128, 'domicilios.edit', 'web', '2022-06-17 15:49:55', '2022-06-17 15:49:55'),
(129, 'domicilios.destroy', 'web', '2022-06-17 15:49:55', '2022-06-17 15:49:55'),
(130, 'proyectos.index', 'web', '2022-06-17 15:49:55', '2022-06-17 15:49:55'),
(131, 'proyectos.create', 'web', '2022-06-17 15:49:55', '2022-06-17 15:49:55'),
(132, 'proyectos.edit', 'web', '2022-06-17 15:49:55', '2022-06-17 15:49:55'),
(133, 'proyectos.destroy', 'web', '2022-06-17 15:49:55', '2022-06-17 15:49:55'),
(134, 'programas.index', 'web', '2022-06-17 15:49:55', '2022-06-17 15:49:55'),
(135, 'programas.create', 'web', '2022-06-17 15:49:55', '2022-06-17 15:49:55'),
(136, 'programas.edit', 'web', '2022-06-17 15:49:56', '2022-06-17 15:49:56'),
(137, 'programas.destroy', 'web', '2022-06-17 15:49:56', '2022-06-17 15:49:56'),
(138, 'allDomicilios.index', 'web', '2022-06-17 15:49:56', '2022-06-17 15:49:56'),
(139, 'allDomicilios.create', 'web', '2022-06-17 15:49:56', '2022-06-17 15:49:56'),
(140, 'allDomicilios.edit', 'web', '2022-06-17 15:49:56', '2022-06-17 15:49:56'),
(141, 'allDomicilios.destroy', 'web', '2022-06-17 15:49:56', '2022-06-17 15:49:56'),
(142, 'allEmpresas.index', 'web', '2022-06-17 15:49:56', '2022-06-17 15:49:56'),
(143, 'allEmpresas.create', 'web', '2022-06-17 15:49:56', '2022-06-17 15:49:56'),
(144, 'allEmpresas.edit', 'web', '2022-06-17 15:49:56', '2022-06-17 15:49:56'),
(145, 'allEmpresas.destroy', 'web', '2022-06-17 15:49:57', '2022-06-17 15:49:57'),
(146, 'procesoPrograms.index', 'web', '2022-06-17 15:49:57', '2022-06-17 15:49:57'),
(147, 'procesoPrograms.create', 'web', '2022-06-17 15:49:57', '2022-06-17 15:49:57'),
(148, 'procesoPrograms.edit', 'web', '2022-06-17 15:49:57', '2022-06-17 15:49:57'),
(149, 'procesoPrograms.destroy', 'web', '2022-06-17 15:49:57', '2022-06-17 15:49:57'),
(150, 'disponiblePrograms.index', 'web', '2022-06-17 15:49:57', '2022-06-17 15:49:57'),
(151, 'disponiblePrograms.create', 'web', '2022-06-17 15:49:57', '2022-06-17 15:49:57'),
(152, 'disponiblePrograms.edit', 'web', '2022-06-17 15:49:58', '2022-06-17 15:49:58'),
(153, 'disponiblePrograms.destroy', 'web', '2022-06-17 15:49:58', '2022-06-17 15:49:58'),
(154, 'asignadoPrograms.index', 'web', '2022-06-17 15:49:58', '2022-06-17 15:49:58'),
(155, 'asignadoPrograms.create', 'web', '2022-06-17 15:49:58', '2022-06-17 15:49:58'),
(156, 'asignadoPrograms.edit', 'web', '2022-06-17 15:49:58', '2022-06-17 15:49:58'),
(157, 'asignadoPrograms.destroy', 'web', '2022-06-17 15:49:58', '2022-06-17 15:49:58'),
(158, 'solicitudAcuiculturaPro.index', 'web', '2022-06-17 15:49:58', '2022-06-17 15:49:58'),
(159, 'solicitudAcuiculturaPro.create', 'web', '2022-06-17 15:49:58', '2022-06-17 15:49:58'),
(160, 'solicitudAcuiculturaPro.edit', 'web', '2022-06-17 15:49:59', '2022-06-17 15:49:59'),
(161, 'solicitudAcuiculturaPro.destroy', 'web', '2022-06-17 15:49:59', '2022-06-17 15:49:59'),
(162, 'solicitudAcuiculturaAuto.index', 'web', '2022-06-17 15:49:59', '2022-06-17 15:49:59'),
(163, 'solicitudAcuiculturaAuto.create', 'web', '2022-06-17 15:49:59', '2022-06-17 15:49:59'),
(164, 'solicitudAcuiculturaAuto.edit', 'web', '2022-06-17 15:50:00', '2022-06-17 15:50:00'),
(165, 'solicitudAcuiculturaAuto.destroy', 'web', '2022-06-17 15:50:00', '2022-06-17 15:50:00'),
(166, 'solicitudQuimicaPro.index', 'web', '2022-06-17 15:50:00', '2022-06-17 15:50:00'),
(167, 'solicitudQuimicaPro.create', 'web', '2022-06-17 15:50:00', '2022-06-17 15:50:00'),
(168, 'solicitudQuimicaPro.edit', 'web', '2022-06-17 15:50:00', '2022-06-17 15:50:00'),
(169, 'solicitudQuimicaPro.destroy', 'web', '2022-06-17 15:50:01', '2022-06-17 15:50:01'),
(170, 'solicitudQuimicaAuto.index', 'web', '2022-06-17 15:50:01', '2022-06-17 15:50:01'),
(171, 'solicitudQuimicaAuto.create', 'web', '2022-06-17 15:50:01', '2022-06-17 15:50:01'),
(172, 'solicitudQuimicaAuto.edit', 'web', '2022-06-17 15:50:01', '2022-06-17 15:50:01'),
(173, 'solicitudQuimicaAuto.destroy', 'web', '2022-06-17 15:50:01', '2022-06-17 15:50:01'),
(174, 'solicitudMecanicaPro.index', 'web', '2022-06-17 15:50:02', '2022-06-17 15:50:02'),
(175, 'solicitudMecanicaPro.create', 'web', '2022-06-17 15:50:02', '2022-06-17 15:50:02'),
(176, 'solicitudMecanicaPro.edit', 'web', '2022-06-17 15:50:02', '2022-06-17 15:50:02'),
(177, 'solicitudMecanicaPro.destroy', 'web', '2022-06-17 15:50:02', '2022-06-17 15:50:02'),
(178, 'solicitudMecanicaAuto.index', 'web', '2022-06-17 15:50:02', '2022-06-17 15:50:02'),
(179, 'solicitudMecanicaAuto.create', 'web', '2022-06-17 15:50:03', '2022-06-17 15:50:03'),
(180, 'solicitudMecanicaAuto.edit', 'web', '2022-06-17 15:50:03', '2022-06-17 15:50:03'),
(181, 'solicitudMecanicaAuto.destroy', 'web', '2022-06-17 15:50:03', '2022-06-17 15:50:03'),
(182, 'solicitudElectronicaPro.index', 'web', '2022-06-17 15:50:03', '2022-06-17 15:50:03'),
(183, 'solicitudElectronicaPro.create', 'web', '2022-06-17 15:50:04', '2022-06-17 15:50:04'),
(184, 'solicitudElectronicaPro.edit', 'web', '2022-06-17 15:50:04', '2022-06-17 15:50:04'),
(185, 'solicitudElectronicaPro.destroy', 'web', '2022-06-17 15:50:04', '2022-06-17 15:50:04'),
(186, 'solicitudElectronicaAuto.index', 'web', '2022-06-17 15:50:04', '2022-06-17 15:50:04'),
(187, 'solicitudElectronicaAuto.create', 'web', '2022-06-17 15:50:04', '2022-06-17 15:50:04'),
(188, 'solicitudElectronicaAuto.edit', 'web', '2022-06-17 15:50:04', '2022-06-17 15:50:04'),
(189, 'solicitudElectronicaAuto.destroy', 'web', '2022-06-17 15:50:05', '2022-06-17 15:50:05'),
(190, 'solicitudTicsPro.index', 'web', '2022-06-17 15:50:05', '2022-06-17 15:50:05'),
(191, 'solicitudTicsPro.create', 'web', '2022-06-17 15:50:05', '2022-06-17 15:50:05'),
(192, 'solicitudTicsPro.edit', 'web', '2022-06-17 15:50:05', '2022-06-17 15:50:05'),
(193, 'solicitudTicsPro.destroy', 'web', '2022-06-17 15:50:05', '2022-06-17 15:50:05'),
(194, 'solicitudTicsAuto.index', 'web', '2022-06-17 15:50:06', '2022-06-17 15:50:06'),
(195, 'solicitudTicsAuto.create', 'web', '2022-06-17 15:50:06', '2022-06-17 15:50:06'),
(196, 'solicitudTicsAuto.edit', 'web', '2022-06-17 15:50:06', '2022-06-17 15:50:06'),
(197, 'solicitudTicsAuto.destroy', 'web', '2022-06-17 15:50:06', '2022-06-17 15:50:06'),
(198, 'solicitudGestionPro.index', 'web', '2022-06-17 15:50:07', '2022-06-17 15:50:07'),
(199, 'solicitudGestionPro.create', 'web', '2022-06-17 15:50:07', '2022-06-17 15:50:07'),
(200, 'solicitudGestionPro.edit', 'web', '2022-06-17 15:50:07', '2022-06-17 15:50:07'),
(201, 'solicitudGestionPro.destroy', 'web', '2022-06-17 15:50:07', '2022-06-17 15:50:07'),
(202, 'solicitudGestionAuto.index', 'web', '2022-06-17 15:50:07', '2022-06-17 15:50:07'),
(203, 'solicitudGestionAuto.create', 'web', '2022-06-17 15:50:08', '2022-06-17 15:50:08'),
(204, 'solicitudGestionAuto.edit', 'web', '2022-06-17 15:50:08', '2022-06-17 15:50:08'),
(205, 'solicitudGestionAuto.destroy', 'web', '2022-06-17 15:50:08', '2022-06-17 15:50:08'),
(206, 'users.index', 'web', '2022-06-17 15:50:08', '2022-06-17 15:50:08'),
(207, 'users.edit', 'web', '2022-06-17 15:50:09', '2022-06-17 15:50:09'),
(208, 'users.update', 'web', '2022-06-17 15:50:09', '2022-06-17 15:50:09'),
(209, 'estados.index', 'web', '2022-06-17 15:50:09', '2022-06-17 15:50:09'),
(210, 'estados.create', 'web', '2022-06-17 15:50:09', '2022-06-17 15:50:09'),
(211, 'estados.edit', 'web', '2022-06-17 15:50:10', '2022-06-17 15:50:10'),
(212, 'estados.destroy', 'web', '2022-06-17 15:50:10', '2022-06-17 15:50:10'),
(213, 'tipos.index', 'web', '2022-06-17 15:50:10', '2022-06-17 15:50:10'),
(214, 'tipos.create', 'web', '2022-06-17 15:50:10', '2022-06-17 15:50:10'),
(215, 'tipos.edit', 'web', '2022-06-17 15:50:11', '2022-06-17 15:50:11'),
(216, 'tipos.destroy', 'web', '2022-06-17 15:50:11', '2022-06-17 15:50:11'),
(217, 'periodos.index', 'web', '2022-06-17 15:50:11', '2022-06-17 15:50:11'),
(218, 'periodos.create', 'web', '2022-06-17 15:50:11', '2022-06-17 15:50:11'),
(219, 'periodos.edit', 'web', '2022-06-17 15:50:11', '2022-06-17 15:50:11'),
(220, 'periodos.destroy', 'web', '2022-06-17 15:50:12', '2022-06-17 15:50:12'),
(221, 'carreras.index', 'web', '2022-06-17 15:50:12', '2022-06-17 15:50:12'),
(222, 'carreras.create', 'web', '2022-06-17 15:50:12', '2022-06-17 15:50:12'),
(223, 'carreras.edit', 'web', '2022-06-17 15:50:12', '2022-06-17 15:50:12'),
(224, 'carreras.destroy', 'web', '2022-06-17 15:50:12', '2022-06-17 15:50:12'),
(225, 'jdeptos.index', 'web', '2022-06-17 15:50:13', '2022-06-17 15:50:13'),
(226, 'jdeptos.create', 'web', '2022-06-17 15:50:13', '2022-06-17 15:50:13'),
(227, 'jdeptos.edit', 'web', '2022-06-17 15:50:13', '2022-06-17 15:50:13'),
(228, 'jdeptos.destroy', 'web', '2022-06-17 15:50:13', '2022-06-17 15:50:13'),
(229, 'alumnos.index', 'web', '2022-06-17 15:50:13', '2022-06-17 15:50:13'),
(230, 'alumnos.create', 'web', '2022-06-17 15:50:14', '2022-06-17 15:50:14'),
(231, 'alumnos.edit', 'web', '2022-06-17 15:50:14', '2022-06-17 15:50:14'),
(232, 'alumnos.destroy', 'web', '2022-06-17 15:50:14', '2022-06-17 15:50:14'),
(233, 'perfil.index', 'web', '2022-06-17 15:50:14', '2022-06-17 15:50:14'),
(234, 'perfil.create', 'web', '2022-06-17 15:50:14', '2022-06-17 15:50:14'),
(235, 'perfil.edit', 'web', '2022-06-17 15:50:15', '2022-06-17 15:50:15'),
(236, 'perfil.destroy', 'web', '2022-06-17 15:50:15', '2022-06-17 15:50:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `actividades` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `periodo_id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectogramas`
--

CREATE TABLE `proyectogramas` (
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nalumnos` int(11) NOT NULL,
  `flimite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `proyectograable_id` bigint(20) UNSIGNED NOT NULL,
  `proyectograable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `objetivo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `problematica` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `periodo_id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alumno_id` bigint(20) UNSIGNED NOT NULL,
  `proyecto_id` bigint(20) UNSIGNED DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `vacante` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disponible` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(2, 'Vinculación', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(3, 'Jefe-Ingenierías', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(4, 'Jefe-Metal-Mecánica', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(5, 'Jefe-Eléctrica-Electrónica', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(6, 'Jefe-Económico-Administrativas', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(7, 'Empresa', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(8, 'Alumno', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47'),
(9, 'Ninguno', 'web', '2022-06-17 15:49:47', '2022-06-17 15:49:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(2, 5),
(3, 5),
(4, 5),
(5, 5),
(6, 5),
(7, 5),
(8, 5),
(9, 5),
(10, 5),
(11, 5),
(12, 5),
(13, 5),
(14, 5),
(15, 5),
(16, 5),
(17, 5),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 5),
(24, 5),
(25, 5),
(26, 5),
(27, 5),
(28, 5),
(29, 5),
(30, 5),
(31, 5),
(32, 5),
(33, 5),
(34, 5),
(35, 5),
(36, 5),
(37, 5),
(38, 5),
(39, 5),
(40, 5),
(41, 5),
(42, 3),
(43, 3),
(44, 3),
(45, 3),
(46, 3),
(47, 3),
(48, 3),
(49, 3),
(50, 3),
(51, 3),
(52, 3),
(53, 3),
(54, 3),
(55, 3),
(56, 3),
(57, 3),
(58, 3),
(59, 3),
(60, 3),
(61, 3),
(62, 3),
(63, 3),
(64, 3),
(65, 3),
(66, 3),
(67, 3),
(68, 3),
(69, 3),
(70, 3),
(71, 3),
(72, 3),
(73, 3),
(74, 3),
(75, 3),
(76, 3),
(77, 3),
(78, 3),
(79, 3),
(80, 3),
(81, 3),
(82, 4),
(83, 4),
(84, 4),
(85, 4),
(86, 4),
(87, 4),
(88, 4),
(89, 4),
(90, 4),
(91, 4),
(92, 4),
(93, 4),
(94, 4),
(95, 4),
(96, 4),
(97, 4),
(98, 4),
(99, 4),
(100, 4),
(101, 4),
(102, 6),
(103, 6),
(104, 6),
(105, 6),
(106, 6),
(107, 6),
(108, 6),
(109, 6),
(110, 6),
(111, 6),
(112, 6),
(113, 6),
(114, 6),
(115, 6),
(116, 6),
(117, 6),
(118, 6),
(119, 6),
(120, 6),
(121, 6),
(122, 3),
(122, 4),
(122, 5),
(122, 6),
(122, 7),
(123, 3),
(123, 4),
(123, 5),
(123, 6),
(123, 7),
(124, 3),
(124, 4),
(124, 5),
(124, 6),
(124, 7),
(125, 1),
(126, 3),
(126, 4),
(126, 5),
(126, 6),
(126, 7),
(127, 3),
(127, 4),
(127, 5),
(127, 6),
(127, 7),
(128, 3),
(128, 4),
(128, 5),
(128, 6),
(128, 7),
(129, 1),
(130, 3),
(130, 4),
(130, 5),
(130, 6),
(130, 7),
(131, 3),
(131, 4),
(131, 5),
(131, 6),
(131, 7),
(132, 3),
(132, 4),
(132, 5),
(132, 6),
(132, 7),
(133, 1),
(134, 2),
(134, 7),
(135, 2),
(135, 7),
(136, 2),
(136, 7),
(137, 1),
(138, 2),
(139, 2),
(140, 2),
(141, 2),
(142, 2),
(143, 2),
(144, 2),
(145, 1),
(146, 2),
(147, 2),
(148, 2),
(149, 2),
(150, 2),
(151, 2),
(152, 2),
(153, 2),
(154, 2),
(155, 2),
(156, 2),
(157, 2),
(158, 2),
(159, 2),
(160, 2),
(161, 2),
(162, 2),
(163, 2),
(164, 2),
(165, 2),
(166, 2),
(167, 2),
(168, 2),
(169, 2),
(170, 2),
(171, 2),
(172, 2),
(173, 2),
(174, 2),
(175, 2),
(176, 2),
(177, 2),
(178, 2),
(179, 2),
(180, 2),
(181, 2),
(182, 2),
(183, 2),
(184, 2),
(185, 2),
(186, 2),
(187, 2),
(188, 2),
(189, 2),
(190, 2),
(191, 2),
(192, 2),
(193, 2),
(194, 2),
(195, 2),
(196, 2),
(197, 2),
(198, 2),
(199, 2),
(200, 2),
(201, 2),
(202, 2),
(203, 2),
(204, 2),
(205, 2),
(206, 1),
(207, 1),
(208, 1),
(209, 1),
(210, 1),
(211, 1),
(212, 1),
(213, 1),
(214, 1),
(215, 1),
(216, 1),
(217, 1),
(218, 1),
(219, 1),
(220, 1),
(221, 1),
(222, 1),
(223, 1),
(224, 1),
(225, 1),
(226, 1),
(227, 1),
(228, 1),
(229, 1),
(230, 1),
(231, 1),
(231, 8),
(232, 1),
(233, 8),
(234, 8),
(235, 8),
(236, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitas`
--

CREATE TABLE `solicitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alumno_id` bigint(20) UNSIGNED NOT NULL,
  `programa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `vacante` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disponible` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` enum('Disponible','Asignado','En proceso') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_programa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `tipo_programa`, `created_at`, `updated_at`) VALUES
(1, 'Educación para adultos', '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(2, 'Desarrollo de comunidad', '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(3, 'Actividades deportivas', '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(4, 'Actividades culturales', '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(5, 'PRONASOL', '2022-06-17 15:50:16', '2022-06-17 15:50:16'),
(6, 'Otros', '2022-06-17 15:50:16', '2022-06-17 15:50:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_user` enum('Administrador','Jefe Depto','Empresa','Alumno','Nuevo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo_user`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@salinacruz.tecnm.mx', NULL, '$2y$10$.g3B5mWRW0Obb/VRKtBrNu5te9AMp0/FKc3sxKn/WP9HJ16JvvFOq', 'Administrador', '1', NULL, '2022-06-17 15:50:15', '2022-06-17 15:50:15'),
(2, 'Jorge Armando', 'ingenierias@salinacruz.tecnm.mx', NULL, '$2y$10$G3S1fGnvSuNselZFLFOCdeEJAQxHlIc3Gq2imbmHEycW6XMBtpxxe', 'Jefe Depto', '1', NULL, '2022-06-17 15:50:15', '2022-06-17 15:50:15'),
(3, 'Sergio', 'metal-mecanica@salinacruz.tecnm.mx', NULL, '$2y$10$WSATrPuA9UnJdwewKMDF.euRR5kFbTBlCOR86HNPCbmPExMGKDFaa', 'Jefe Depto', '1', NULL, '2022-06-17 15:50:15', '2022-06-17 15:50:15'),
(4, 'Anita del Carmen', 'electrica-electronica@salinacruz.tecnm.mx', NULL, '$2y$10$AbRH8oI73ipooFByPZoBHeuDS/T14nfsUeHQkPNz4XfvUvNB9CxfW', 'Jefe Depto', '1', NULL, '2022-06-17 15:50:15', '2022-06-17 15:50:15'),
(5, 'Dolores', 'economico-administrativa@salinacruz.tecnm.mx', NULL, '$2y$10$AZ6Ud4SuuN4zqYrTf949TeC0N9g5H4ZTqwcZXsfi80UHviSeclZcq', 'Jefe Depto', '1', NULL, '2022-06-17 15:50:15', '2022-06-17 15:50:15'),
(6, 'Cayetano', 'vinculacion@salinacruz.tecnm.mx', NULL, '$2y$10$y2AKXVh4DcdPlRy0OqnELez6Bf1F/mZX3Vb75rHQvwD3K0iuIv8Om', 'Jefe Depto', '1', NULL, '2022-06-17 15:50:15', '2022-06-17 15:50:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumnos_carrera_id_foreign` (`carrera_id`),
  ADD KEY `alumnos_programa_id_foreign` (`programa_id`),
  ADD KEY `alumnos_proyecto_id_foreign` (`proyecto_id`),
  ADD KEY `alumnos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `carreraables`
--
ALTER TABLE `carreraables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carreraables_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carreras_jdepto_id_foreign` (`jdepto_id`);

--
-- Indices de la tabla `carrera_proyectograma`
--
ALTER TABLE `carrera_proyectograma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD UNIQUE KEY `convocatorias_proyectograma_id_unique` (`proyectograma_id`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `domicilios_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empresas_domicilio_id_unique` (`domicilio_id`),
  ADD KEY `empresas_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jdeptos`
--
ALTER TABLE `jdeptos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jdeptos_user_id_unique` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `periodables`
--
ALTER TABLE `periodables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `periodables_periodo_id_foreign` (`periodo_id`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodo_proyectograma`
--
ALTER TABLE `periodo_proyectograma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programas_tipo_id_foreign` (`tipo_id`),
  ADD KEY `programas_periodo_id_foreign` (`periodo_id`),
  ADD KEY `programas_carrera_id_foreign` (`carrera_id`),
  ADD KEY `programas_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `proyectogramas`
--
ALTER TABLE `proyectogramas`
  ADD PRIMARY KEY (`proyectograable_id`,`proyectograable_type`),
  ADD KEY `proyectogramas_empresa_id_foreign` (`empresa_id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyectos_periodo_id_foreign` (`periodo_id`),
  ADD KEY `proyectos_carrera_id_foreign` (`carrera_id`),
  ADD KEY `proyectos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registros_alumno_id_foreign` (`alumno_id`),
  ADD KEY `registros_proyecto_id_foreign` (`proyecto_id`),
  ADD KEY `registros_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `solicitas`
--
ALTER TABLE `solicitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solicitas_alumno_id_foreign` (`alumno_id`),
  ADD KEY `solicitas_programa_id_foreign` (`programa_id`),
  ADD KEY `solicitas_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carreraables`
--
ALTER TABLE `carreraables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `carrera_proyectograma`
--
ALTER TABLE `carrera_proyectograma`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jdeptos`
--
ALTER TABLE `jdeptos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `periodables`
--
ALTER TABLE `periodables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `periodo_proyectograma`
--
ALTER TABLE `periodo_proyectograma`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `solicitas`
--
ALTER TABLE `solicitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `alumnos_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `alumnos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carreraables`
--
ALTER TABLE `carreraables`
  ADD CONSTRAINT `carreraables_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_jdepto_id_foreign` FOREIGN KEY (`jdepto_id`) REFERENCES `jdeptos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD CONSTRAINT `domicilios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_domicilio_id_foreign` FOREIGN KEY (`domicilio_id`) REFERENCES `domicilios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empresas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `jdeptos`
--
ALTER TABLE `jdeptos`
  ADD CONSTRAINT `jdeptos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `periodables`
--
ALTER TABLE `periodables`
  ADD CONSTRAINT `periodables_periodo_id_foreign` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programas`
--
ALTER TABLE `programas`
  ADD CONSTRAINT `programas_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programas_periodo_id_foreign` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programas_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `programas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectogramas`
--
ALTER TABLE `proyectogramas`
  ADD CONSTRAINT `proyectogramas_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyectos_periodo_id_foreign` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyectos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `registros_alumno_id_foreign` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registros_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registros_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `solicitas`
--
ALTER TABLE `solicitas`
  ADD CONSTRAINT `solicitas_alumno_id_foreign` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitas_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitas_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
