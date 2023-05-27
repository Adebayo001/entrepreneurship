-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2023 at 10:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entrepreneurship`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `matric_no` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `std_status` varchar(255) NOT NULL,
  `std_level` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL DEFAULT '2022/2023',
  `semester` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `training_centre` varchar(255) NOT NULL,
  `training_address` varchar(255) NOT NULL,
  `trainer_name` varchar(255) NOT NULL,
  `trainer_phone` varchar(255) NOT NULL,
  `training_duration` varchar(255) NOT NULL,
  `nature_of_work` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `matric_no`, `full_name`, `campus`, `college`, `faculty`, `department`, `std_status`, `std_level`, `session`, `semester`, `state`, `lga`, `training_centre`, `training_address`, `trainer_name`, `trainer_phone`, `training_duration`, `nature_of_work`, `image`) VALUES
(1, '2022/12345', 'Adebayo', 'Osogbo', 'Science, Engineering & Technology', 'Fabassa', 'ICT', 'Fresher', '100 Level', '2022/2023', 'Rain', 'Osun', 'Osogbo', 'Aidapay', 'Bodija, Oyo State', 'Agbeniga', '', '', '', ''),
(2, '2022/34212', 'Akinlade', 'Okuku', 'Management & Social Science', 'Famsa', 'Business Administration', 'Fresher', '100 Level', '2022/2023', 'Harmattan', 'Osun', 'Boripe', 'Sarah Cakes & Confectionaries', 'Ogun State', 'Eghosa', '08023456523', '6 weeks', 'Cakes and Makeup', 'pass.jpg'),
(3, '2022/34312', 'Akinrinade Kolawole', 'Ikire', 'Humanities & Culture', 'Linguistics', 'Linguistics', 'Fresher', '200 Level', '2022/2023', 'Rain', 'Cross River', 'Akpabuyo', 'Bead Making', 'Osogbo', 'Kazeem', '08123456789', '6 weeks', 'Learning of cake and decoration', 'peace.png'),
(4, '2023/12342', 'Abayomi', 'Osogbo', 'Science, Engineering & Technology', 'Fabassa', 'Microbiology', 'Fresher', '100 Level', '2022/2023', 'Harmattan', 'Osun', 'Osogbo', 'photography', 'Ekiti', 'Ajalekoko', '08123456789', '6 weeks', 'Photography and Editing', 'SLYTECH LOGO.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_email`, `user_password`) VALUES
(1, 'adex@gmail.com', '$2y$12$0aPj6d4vpChRfVW/936DA.Se27jexqDy44Ot70Qon12zzBg0qwJUy'),
(2, 'ade@yahoo.com', '$2y$12$WqTm.DdbfZxy68h9pybudesGeYI3scpDJs6UncOf6VRHnFlRz05cS'),
(3, 'ade@gmail.com', '$2y$12$/xd5KZUbXZEbC//9evBXteSR5h9BFP6EyZQZD29MG7d1RPEhRSXDC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
