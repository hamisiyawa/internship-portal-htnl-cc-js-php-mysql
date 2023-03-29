-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 11:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`) VALUES
(25, 'hamisi', 'Hamisi@gmail.com', 'hello am unable to login, please help');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `stipend` int(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `employer`, `title`, `description`, `stipend`, `start_date`, `end_date`) VALUES
(22, 'Base titanium', 'Civil engineering', '&lt;p&gt;The interested applicants should be in third or final year of study and have an attachment letter from the university, cv and any other relevant documents.&lt;/p&gt;', 7000, '2022-05-10', '2022-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `student_applications`
--

CREATE TABLE `student_applications` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_num` int(50) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_applications`
--

INSERT INTO `student_applications` (`id`, `full_name`, `email`, `phone_num`, `employer`, `title`, `gender`) VALUES
(46, 'hamisi yawa', 'Hamisi@gmail.com', 712821844, 'Base titanium', 'civil engineering', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `name`, `username`, `email`, `token`, `password`, `date_created`) VALUES
(45, 1, 'hamisi', 'hamisiyawa', 'hamisiyawa@gmail.com', '', '$2y$10$lHWCX.iwCC8Qwz8UZL1xSuPOYoNmOjMlTkJyjClCNctq/Mt70E.ve', '2022-05-02 09:35:53'),
(47, 1, 'mwanamisi', 'mwanamisi J', 'mishi22@gmail.com', '', '$2y$10$jnjzziEwSbhbVzfqsiMszOD32kCF6IgNA5sXYgYrgZey.eGrd/H5.', '2022-05-02 17:25:34'),
(53, 0, 'jacob', 'jacob n', 'jacob@gmail.com', '5b1806539ceb17a87428a1e72549bb75be600096500c445518887c30a140e178085de3d5a44af0cff0cf603ee41b86736fd7', '$2y$10$cMN/KYj2PSqIvchMoFBfJeOu9evX1PU/zvD.1Km.Xh2JQUGa7YiTC', '2022-05-02 18:02:36'),
(54, 0, 'joshua', 'joshua m', 'joshua@gmail.com', 'b1512238296ca689bedda2c3e7393118633a2a246eb8812f466581c90918005a2c01177a396223cf0f83c7ab0d59874f7862', '$2y$10$XdZnNad49ACYBvlSbgmTXeGLpH954EBuPOci9vYrS3q93kbDhbVVq', '2022-05-02 18:09:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_applications`
--
ALTER TABLE `student_applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student_applications`
--
ALTER TABLE `student_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
