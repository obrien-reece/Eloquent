-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2023 at 11:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eloquent`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `age` int(11) DEFAULT NULL,
  `about` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `age`, `about`, `name`, `slug`) VALUES
(7, 45, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'Avram Landry', 'avram-landry'),
(8, 90, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'Victor Crane', 'victor-crane'),
(9, 58, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'Eve Hunt', 'eve-hunt'),
(10, 18, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'Ivory Witt', 'ivory-witt'),
(11, 26, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'Demetria Vargas', 'demetria-vargas'),
(12, 37, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'McKenzie Boyle', 'mckenzie-boyle'),
(13, 49, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'Alvin Vance', 'alvin-vance'),
(14, 84, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'Thaddeus Conner', 'thaddeus-conner'),
(15, 28, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'Byron Dalton', 'byron-dalton'),
(16, 16, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'Helen Lindsey', 'helen-lindsey'),
(17, 93, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'Lewis Macias', 'lewis-macias'),
(18, 23, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'Aretha Mooney', 'aretha-mooney');

-- --------------------------------------------------------

--
-- Table structure for table `actor_movie`
--

CREATE TABLE `actor_movie` (
  `actor_id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actor_movie`
--

INSERT INTO `actor_movie` (`actor_id`, `movie_id`) VALUES
(7, 9),
(8, 13),
(9, 16),
(10, 20),
(11, 13),
(12, 21),
(13, 18),
(14, 11),
(15, 14),
(16, 20),
(17, 11),
(18, 16);

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `age` int(11) DEFAULT NULL,
  `about` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `age`, `about`, `name`, `slug`, `image`) VALUES
(11, 86, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'Steven Spielberg', 'steven-spielberg', 'director_image_thumbnails/steven_spielberg.jpg'),
(12, 82, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'Christopher Nolan', 'christopher-nolan', 'director_image_thumbnails/christopher_nolan.jpg'),
(13, 81, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'Martin Scorsese', 'martin-scorsese', 'director_image_thumbnails/martin_scorsese.jpg'),
(14, 34, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'Quentin Tarantino', 'quentin-tarantino', 'director_image_thumbnails/quentin_tarantino.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(100) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(100) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_21_204114_create_movies_table', 1),
(7, '2023_02_21_211059_create_directors_table', 1),
(8, '2023_02_22_063810_add_director_id_to_movies', 1),
(9, '2023_02_22_093616_add_slug_to_directors', 1),
(10, '2023_02_24_121419_create_actors_table', 1),
(11, '2023_03_03_044707_add_financees_to_movies', 1),
(12, '2023_03_03_063524_create_movie__actors_table', 1),
(13, '2023_03_03_093039_add_image_to_directors', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `studio` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `director_id` bigint(20) UNSIGNED NOT NULL,
  `domestic_box_office` int(11) DEFAULT NULL,
  `international_box_office` int(11) DEFAULT NULL,
  `worldwide_box_office` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `studio`, `description`, `slug`, `image`, `created_at`, `updated_at`, `director_id`, `domestic_box_office`, `international_box_office`, `worldwide_box_office`) VALUES
(9, 'Shannara Chronicles', 'Iste dolorem eveniet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'shannara-chronicles', 'movie_thumbnails/shannara_chronicles.jpg', '2023-03-23 03:14:37', '2023-03-23 03:14:37', 11, 58000000, 6000000, 64000000),
(10, 'Shaeleigh Callahan', 'Ab excepteur quam cu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'shaeleigh-callahan', 'movie_thumbnails/shaeleigh_callahan.jpg', '2023-03-23 03:16:08', '2023-03-23 03:16:08', 13, 40000000, 55000000, 95000000),
(11, 'Aspen Sanders', 'At qui ad repellendu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'aspen-sanders', 'movie_thumbnails/aspen_sanders.jpg', '2023-03-23 03:18:42', '2023-03-23 03:18:42', 13, 47000000, 92000000, 139000000),
(12, 'Alec Walton', 'Quisquam adipisci mo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'alec-walton', 'movie_thumbnails/alec_walton.jpg', '2023-03-23 03:19:04', '2023-03-23 03:19:04', 14, 30000000, 77000000, 107000000),
(13, 'Carlos Dominguez', 'Et sed temporibus de', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'carlos-dominguez', 'movie_thumbnails/carlos_dominguez.jpg', '2023-03-23 03:19:36', '2023-03-23 03:19:36', 11, 40000000, 62000000, 102000000),
(14, 'Lareina Berry', 'Qui beatae qui conse', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'lareina-berry', 'movie_thumbnails/lareina_berry.jpg', '2023-03-23 03:20:15', '2023-03-23 03:20:15', 11, 270000, 640000, 910000),
(15, 'Madison Odom', 'Nemo nemo in vel opt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid animi, architecto consequuntur, debitis dicta, eum ex expedita harum illo in iure iusto laborum magnam magni minus nemo porro possimus quia quidem repudiandae ut voluptatem! Consequuntur debitis id minus modi quasi? Aut doloribus eaque incidunt iste magnam, minus quae voluptate.', 'madison-odom', 'movie_thumbnails/madison_odom.jpg', '2023-03-23 03:20:42', '2023-03-23 03:20:42', 13, 13000000, 89000000, 102000000),
(16, 'Denise Watkins', 'Ut quod aliquid ex e', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'denise-watkins', 'movie_thumbnails/denise_watkins.jpg', '2023-03-23 07:18:34', '2023-03-23 07:18:34', 14, 23000000, 8900000, 31900000),
(17, 'Kevyn Meadows', 'Deserunt quo eveniet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'kevyn-meadows', 'movie_thumbnails/kevyn_meadows.jpg', '2023-03-23 07:19:08', '2023-03-23 07:19:08', 13, 79000000, 33000000, 112000000),
(18, 'Karen Valentine', 'Nemo sint voluptatem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'karen-valentine', 'movie_thumbnails/karen_valentine.jpg', '2023-03-23 07:19:28', '2023-03-23 07:19:28', 13, 78000000, 73000000, 151000000),
(19, 'Galena Rodriquez', 'Hic et libero numqua', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'galena-rodriquez', 'movie_thumbnails/galena_rodriquez.jpg', '2023-03-23 07:19:45', '2023-03-23 07:19:45', 11, 530000, 99000000, 99530000),
(20, 'MacKensie Wall', 'Obcaecati dicta proi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'mackensie-wall', 'movie_thumbnails/mac_kensie_wall.png', '2023-03-23 07:20:03', '2023-03-23 07:20:03', 14, 46000000, 4800000, 50800000),
(21, 'Gannon Kelly', 'Magni minima at dele', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem est in ipsa iste velit vero voluptates. Cumque cupiditate fugiat iusto sed. Alias consequuntur deserunt dicta dolore enim, excepturi itaque rem repellat sint tenetur? Adipisci aperiam distinctio ducimus id impedit, libero maxime molestiae molestias, mollitia nam natus nesciunt nisi obcaecati possimus?', 'gannon-kelly', 'movie_thumbnails/gannon_kelly.jpg', '2023-03-23 07:20:23', '2023-03-23 07:20:23', 13, 75000000, 30000000, 105000000);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(100) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Reece', 'reece@gmail.xcom', NULL, '$2y$10$cIIs7nBYNpOkm/Q76JziEughusyCd6K0HygY47Y.NThEBsB3YHJ16', NULL, '2023-03-22 10:40:34', '2023-03-22 10:40:34'),
(2, 'Kuame Rush', 'taxuj@mailinator.com', NULL, '$2y$10$RtEDjJt/hlNW57Nx.Fgz8uEDdd.ye9f2djy5qJCv054PNJ3SIKqfW', NULL, '2023-03-23 01:58:12', '2023-03-23 01:58:12'),
(4, 'Jael Carney', 'obrien@admin.org', NULL, '$2y$10$ckoTRKGCPiKWtbK8RLA2yeHFu.wf/obC39fP/Em3I9vi8xbzqv2FS', NULL, '2023-03-23 07:14:50', '2023-03-23 07:14:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `actors_name_unique` (`name`),
  ADD UNIQUE KEY `actors_slug_unique` (`slug`);

--
-- Indexes for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD KEY `actor_movie_actor_id_foreign` (`actor_id`),
  ADD KEY `actor_movie_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `directors_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movies_name_unique` (`name`),
  ADD KEY `movies_director_id_foreign` (`director_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD CONSTRAINT `actor_movie_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `actor_movie_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_director_id_foreign` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
