SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mvcposts`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `ip_pass` varchar(20) NOT NULL,
  `megas` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `localidad`, `ip`, `ip_pass`, `megas`, `precio`, `fecha`) VALUES
(4, 'Categoria 3', 'señor fcp', 'r3453534', 'fdgg4t54', 455, '344', '2021-11-26 05:00:00'),
(6, 'ifsofjsijofsdf', 'dfsfsdfsdf', '192.168.1.102', '2dsfsd', 4, '434', '2021-11-26 05:00:00'),
(7, 'sdfsdfds', 'sdfsdfsdf', 'dfsfsdf', '456456456456', 5, '4455', '2021-12-10 05:00:00');

-- --------------------------------------------------------


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(5, 'jonh doe', 'luis@gmail.com', '$2y$10$kf872YEuTS53Ghl4BCRyaOYIgj1O5mtwduRIyn.c5EBtpyew8O6by', '2020-03-09 22:34:32'),
(9, 'Alex', 'alex@correo.com', '$2y$10$sjP7r9EcJh8UIUBl20WsXuuCECv..RV4/rCJFj5vOYiBseg4De7A2', '2020-03-10 23:05:46'),
(10, 'mario sdsdsds', 'mariocaamal@gmail.com', '$2y$10$.YLjiFuvveVOl5hlOmpCGe.MUaeLZPL/V3OO4idvXAySsWemQ5Zc.', '2020-09-15 19:56:34'),
(11, 'mariela', 'coreo@gmail.com', '$2y$10$8kgzhAgmHpf4xsd5TFOwyOqAgxpZ.fdRymO5zeAWR3UO8daIpSCTy', '2020-09-15 19:57:59'),
(14, 'martinez', 'martinez@gmail.com', '$2y$10$52eaOtXCoo7Nsvumu5IbGuxsr00Q.OtfKjJNCmbm8QTTp7qh.lbe2', '2020-09-15 23:06:42'),
(15, 'Enca Cituk', 'luis2@gmail.com', '$2y$10$egbBL/DTT0xCw4IoIy3h2eC4dEOpE6mrlqP0sGUgDH0oLl1AtIIUq', '2021-11-20 21:13:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
