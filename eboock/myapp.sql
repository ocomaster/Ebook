-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-09-2019 a las 21:09:25
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myapp`
--

--
-- Volcado de datos para la tabla `authors`
--

INSERT INTO `authors` (`id`, `name`, `bio`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pablo Neruda', 'Pablo Neruda, seudónimo de Ricardo Eliécer Neftalí Reyes Basoalto, fue un poeta chileno, considerado entre los más destacados e influyentes artistas de su siglo; «el más grande poeta del siglo XX en cualquier idioma», según Gabriel García Márquez.', 'http://localhost/eboock/public/photos/oMCOh0GYyEd3c7lM2xHA2W0vUsJYvZUZhDGrfYpv.jpeg', '2019-09-03 19:01:02', '2019-09-03 19:01:02', NULL),
(2, 'Gabriel Garcia Marquez', 'Gabriel José de la Concordia García Márquez fue un escritor, guionista, editor y periodista colombiano. En 1982 recibió el Premio Nobel de Literatura.​ Fue conocido por su apodo Gabo, y familiarmente y por sus amigos como Gabito.', 'http://localhost/eboock/public/photos/eYtmiuCHQOAlCTfT9KfgOy0sF5OhUbhzPQJrnkv1.jpeg', '2019-09-03 19:06:46', '2019-09-03 19:06:46', NULL),
(3, 'William Shakespeare', '<p><strong>William Shakespeare (Reino Unido 1564 – 1616). </strong>Dramaturgo<i>, poeta y actor inglés conocido</i> en ocasiones como el Bardo de Avon (o simplemente El Bardo), Shakespeare es considerado el escritor...</p>', 'http://localhost/eboock/public/photos/Y3uoi0Wty8HQ8buQZcBQjvRdMIQtSMkd0T6faTtF.jpeg', '2019-09-03 19:42:25', '2019-09-03 20:04:38', NULL),
(4, 'Julio Cortázar', 'Julio Florencio Cortázar fue un escritor, traductor e intelectual argentino. Sin renunciar a su nacionalidad argentina, optó por la nacionalidad francesa en 1981, en protesta contra el régimen militar argentino', 'http://localhost/eboock/public/photos/UaCG242QwwF22linxDRRWiVDcT4RsgJmZBr1CqVe.jpeg', '2019-09-03 19:42:50', '2019-09-03 19:46:48', NULL),
(5, 'Julio Verne', '<p>Jules Gabriel Verne, conocido en los países hispanohablantes como Julio Verne, fue un escritor, poeta y dramaturgo francés célebre por sus novelas de aventuras y por su profunda influencia en el género literario de la ciencia ficción.&nbsp;</p>', 'http://localhost/eboock/public/photos/TWJkOJot9ctNkxaftuaHmvtGnpoSYAp4IMqviHBW.jpeg', '2019-09-03 20:30:50', '2019-09-03 20:30:50', NULL);

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id`, `title`, `review`, `cover`, `author_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'De la tierra a la luna', 'De la Tierra a la Luna es una novela «científica» y «satírica» del escritor Julio Verne, publicada en el \"Journal des débats politiques et littéraires\" desde el 14 de septiembre hasta el 14 de octubre de 1865, y como un solo volumen el 25 de octubre de ese mismo año.', 'http://localhost/eboock/public/covers/kpJ0PGsE9LWepohMANuXmJlqnHQKhLz43MwnydWn.jpeg', 5, '2019-09-03 20:31:19', '2019-09-03 20:50:16', NULL),
(2, 'Otelo', 'Otelo: el moro de Venecia u Othello: el moro de Venecia es una obra teatral de William Shakespeare escrita alrededor de 1603.​ Otelo es una tragedia, como Hamlet, Macbeth y El rey Lear. Shakespeare escribió Otelo probablemente después de Hamlet pero antes que las dos últimas.', 'http://localhost/eboock/public/covers/y3MmDCWPftuoSI12jt2hRIyWR75g94LnZTuJCHbu.jpeg', 3, '2019-09-03 20:55:23', '2019-09-03 20:55:23', NULL),
(3, 'Julio César', 'La tragedia de Julio César es una obra trágica escrita por William Shakespeare, probablemente en 1599. Recrea la conspiración en contra del dictador romano, su homicidio y sus secuelas, así como su lugar de desarrollo: la antigua Roma. Constituye uno de los varios trabajos shakespearianos basados en hechos históricos.', 'http://localhost/eboock/public/covers/lG7bNPbc5V1vXprs5dlN8lbr6WITbA9B3Isxhy0z.jpeg', 3, '2019-09-03 20:56:08', '2019-09-03 20:56:08', NULL),
(4, 'Cien años de soledad', 'Cien años de soledad es una novela del escritor colombiano Gabriel García Márquez, ganador del Premio Nobel de Literatura en 1982. Es considerada una obra maestra de la literatura hispanoamericana y universal, así como una de las obras más traducidas y leídas en español.', 'http://localhost/eboock/public/covers/xXtGjDlQrYAVyQttyQow4LHWZAg9zhZ8XSgfQvhU.jpeg', 2, '2019-09-03 20:57:36', '2019-09-03 20:57:36', NULL),
(5, '1 Don Quijote de la Mancha', '<p>dewsa<strong>fefa</strong></p>', 'http://localhost/eboock/public/covers/vHzxUfWafhQoXXT0l0QFHkcTBX8WS4aHGppoZPb7.jpeg', 3, '2019-09-04 00:53:50', '2019-09-10 01:14:30', '2019-09-10 01:14:30');

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_03_134330_create_authors_table', 1),
(4, '2019_09_03_151205_create_books_table', 2);

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$XhviAH7ANYWffo3bouAqM.fa9IYFKE5Wf3f2fKTJKF2qoSveaghX2', NULL, '2019-09-03 18:46:45', '2019-09-03 18:46:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
