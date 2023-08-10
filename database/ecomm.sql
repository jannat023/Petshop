-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 10:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `appdate` date NOT NULL,
  `gname` varchar(50) NOT NULL,
  `services` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `currdate` date NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `firstname`, `lastname`, `email`, `contact`, `address`, `appdate`, `gname`, `services`, `status`, `currdate`, `uid`) VALUES
(1, 'Md. Fahad', 'Hossain', 'hossainfahad76@gmail.com', '01777777777', 'Block F, Abdur Sadek Road, House 11, Bashundhara R/A, Dhaka, Bangladesh', '0000-00-00', 'fahad hossain', ' dtgtetg', '2', '0000-00-00', 31),
(2, 'Md. Fahad', 'Hossain', 'hossainfahad76@gmail.com', '01777777777', 'Block F, Abdur Sadek Road, House 11, Bashundhara R/A, Dhaka, Bangladesh', '0000-00-00', 'fahad hossain', ' dtgtetg', '2', '2023-08-04', 28),
(3, 'Md. Fahad', 'Hossain', 'hossainfahad76@gmail.com', '01777777777', 'Block F, Abdur Sadek Road, House 11, Bashundhara R/A, Dhaka, Bangladesh', '2023-08-10', 'fahad hossain', ' dtgtetg', '2', '2023-08-04', 29),
(4, 'Md. Fahad', 'Hossain', 'hossainfahad76@gmail.com', '01777777777', 'Block F, Abdur Sadek Road, House 11, Bashundhara R/A, Dhaka, Bangladesh', '2023-08-10', 'fahad hossain', ' dtgtetg', '2', '2023-08-04', 31),
(5, 'Md. Fahad', 'Hossain', 'hossainfahad76@gmail.com', '01777777777', 'Block F, Abdur Sadek Road, House 11, Bashundhara R/A, Dhaka, Bangladesh', '2023-08-10', 'fahad hossain', ' dtgtetg', '1', '2023-08-04', 30),
(6, 'Md. Iqbal', 'Hossain', 'hossainfahad76@gmail.com', '01777777777', 'Block F, Abdur Sadek Road, House 11, Bashundhara R/A, Dhaka, Bangladesh', '2023-08-10', 'fahad hossain', ' dtgtetg', '0', '2023-08-04', 28),
(7, 'Md. Iqbal', 'Hossain', 'hossainfahad76@gmail.com', '01777777777', 'Block F, Abdur Sadek Road, House 11, Bashundhara R/A, Dhaka, Bangladesh', '2023-08-10', 'fahad hossain', ' dtgtetg', '0', '2023-08-04', 31),
(8, 'topu', 'hasan', 'topu@gmail.com', '01777777777', 'dhaka', '2023-08-09', 'Md. Fahad Hossain', ' sefs', '2', '2023-08-04', 30),
(9, 'topu', 'hasan', 'topu@gmail.com', '01777777777', 'dhaka', '2023-08-09', 'Md. Fahad Hossain', ' sefs', '1', '2023-08-04', 31),
(11, 'topu', 'hasan', 'topu@gmail.com', '01777777777', 'dhaka', '2023-08-09', 'Md. Fahad Hossain', ' sefs', '1', '2023-08-04', 28),
(12, 'laboni', 'afrose', 'afrose@gmail.com', '01777777777', 'dhaka', '2023-08-09', 'Md. Fahad Hossain', ' sefsejfsjf ', '0', '2023-08-04', 29),
(13, 'toma', 'hoque', 'toma@gmail.com', '01777777777', 'pabna', '2023-08-21', 'fahad hossain', ' sdfjsdldfnsjf', '0', '2023-08-04', 31),
(14, 'Md. Fahad', 'Hossain', 'hossainfahad76@gmail.com', '01777777777', 'Block F, Abdur Sadek Road, House 11, Bashundhara R/A, Dhaka, Bangladesh', '2023-08-17', 'fahad hossain', ' hkbhkjkjbhb hjvjhhjbhj hjb', '1', '2023-08-04', 31);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(10, 14, 29, 1),
(21, 31, 101, 3),
(22, 31, 502, 1),
(23, 31, 506, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Food', 'Food'),
(2, 'Feeder Bowls', 'Feeder Bowls'),
(3, 'Litters', 'Litters'),
(4, 'Pet House', 'Pet House'),
(5, 'Dress', 'Dress'),
(6, 'Toys', 'Toys');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `groomers`
--

CREATE TABLE `groomers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groomers`
--

INSERT INTO `groomers` (`id`, `email`, `password`, `firstname`, `lastname`, `address`, `phone`, `photo`, `qualification`, `experience`, `status`) VALUES
(1, 'fahad@gmail.com', 'fahad', 'fahad', 'hossain', 'dahaka', '01745454548', 'user.jpg', 'Level 1', '2year', '1'),
(2, 'hossainfahad76@gmail.com', '$2y$10$w6eTpD76TG3e9otE4aDm3./YLYYd95SgMTRge3wog3i', 'Md. Fahad', 'Hossain', 'Block F, Abdur Sadek Road, House 11, Bashundhara R/A, Dhaka, Bangladesh', '01777777777', 'autumn-g087672782_640.png', 'Level 01 of GCSEs', '1 year', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(101, 1, 'Blue buffalo natural dry dog food\r\n', 'Try out premium quality products for your pet!! ', 'Dog Food', 400, 'blue buffalo 101.jfif', '2023-08-04', 1),
(102, 1, 'Bonnie Dog Can Beef Chunks', 'Try out premium quality products for your pet!!', 'Bonnie-Dog-Food-Beef-2.5kg 102', 200, 'Bonnie-Dog-Food-Beef-2.5kg 102.jpg', '2022-12-17', 1),
(103, 1, 'Bonnie Dog Can Chicken Chunks', 'Try out premium quality products for your pet!!', 'Bonnie-Dog-Can-Chicken-Chunks-in-Gravy-400g 103', 300, 'Bonnie-Dog-Can-Chicken-Chunks-in-Gravy-400g 103.jpg', '2022-12-16', 1),
(104, 1, 'Brit Premium by Nature Cat Can chicken with rice', 'Try out premium quality products for your pet!!', 'brit chicken with rice104', 300, 'brit chicken with rice104.jfif', '2022-12-16', 1),
(105, 1, 'Spectrum Low Grain Kitten Food – Chicken, Turkey & Cranberry', 'Try out premium quality products for your pet!!', 'spectrum chicken,turkey105', 450, 'spectrum chicken,turkey105.jpg', '2022-12-16', 1),
(106, 1, 'BonaCibo Cat Pouch  Liver Chunks in Gravy', 'Try out premium quality products for your pet!!', 'bonachibo chunks in gravy', 350, 'bonachibo chunks in gravy_1671176568.jfif', '2022-12-17', 1),
(107, 1, 'Smart Heart Mynah Bird food', 'Try out premium quality products for your pet!!', 'Smart-Heart-Mynah-Starlings-and-SDL031955999-1-6a788 107', 600, 'Smart-Heart-Mynah-Starlings-and-SDL031955999-1-6a788 107.jpg', '2022-12-16', 1),
(108, 1, 'Wild Bird seed', 'Try out premium quality products for your pet!!', 'wild bird seed108', 200, 'wild bird seed108.jpg', '2022-12-16', 1),
(109, 1, 'Quality Gold Fish Food', 'Try out premium quality products for your pet!!', 'quality gold fish109', 500, 'quality gold fish109.jfif', '2023-08-01', 1),
(110, 1, 'Osaka Green Fish Food', 'Try out premium quality products for your pet!!', '200g-OSAKA-GREEN-1-FISH 110', 500, '200g-OSAKA-GREEN-1-FISH 110.jpg', '2023-07-31', 3),
(201, 2, 'Outward Hound Fun Feeder Slo Bowl', 'pet feeder bowl durable, strong support, easy to carry, stable performance. It is produced by experienced manufacturers using the most advanced production equipment.', 'Outward Hound Fun Feeder Slo Bowl201', 300, 'Outward Hound Fun Feeder Slo Bowl201.jfif', '2023-08-04', 1),
(202, 2, 'Basics Stainless Steel Dog Bowl', 'pet feeder bowl durable, strong support, easy to carry, stable performance. It is produced by experienced manufacturers using the most advanced production equipment.', 'Basics Stainless Steel Dog Bowl202', 400, 'Basics Stainless Steel Dog Bowl202.jpg', '2022-12-17', 1),
(203, 2, 'Birdwood Stand Perch with Stainless Steel Food Water Feeding Bowl', 'pet feeder bowl durable, strong support, easy to carry, stable performance. It is produced by experienced manufacturers using the most advanced production equipment.', 'Birdwood Stand Perch with Stainless Steel Food Water Feeding Bowl203', 400, 'Birdwood Stand Perch with Stainless Steel Food Water Feeding Bowl203.jpg', '2022-12-17', 1),
(204, 2, 'K and H Thermo Kitty Cafe StainLess', 'pet feeder bowl durable, strong support, easy to carry, stable performance. It is produced by experienced manufacturers using the most advanced production equipment.', 'K and H Thermo Kitty Cafe StainLess204', 400, 'K and H Thermo Kitty Cafe StainLess204.jpg', '2023-08-01', 1),
(301, 3, 'PetMaker Artificial Grass Pee Pad For Dogs', 'Our litters have a unique texture and smell, so your pet will not get confused with any other surfaces in your home', 'petmaker artificial301', 350, 'petmaker artificial301.jpeg', '2022-12-17', 1),
(302, 3, 'Bentonite Cat Litter Clean Apple 5L', 'Our litters have a unique texture and smell, so your pet will not get confused with any other surfaces in your home', '5L-BAY-CAT-APPLE302', 150, '5L-BAY-CAT-APPLE302.jpg', '2022-12-17', 1),
(303, 3, 'Conventional Litter Boxes', 'Our litters have a unique texture and smell, so your pet will not get confused with any other surfaces in your home', 'conventional litter box303', 150, 'conventional litter box303.jfif', '2022-12-17', 1),
(304, 3, 'Me Bentonite Cat Litter Lemon 5L', 'Our litters have a unique texture and smell, so your pet will not get confused with any other surfaces in your home', 'me-o lemon304', 150, 'me-o lemon304.png', '2022-12-17', 1),
(401, 4, 'Collapsible Cat House with Bed', 'We\'ve designed these indoor houses for your adorable pet using high quality poly fabric and soft poly-foam lining.\r\n', 'collaspeable cat house 401', 4000, 'collaspeable cat house 401.jpg', '2022-12-17', 1),
(402, 4, 'Best Pet Supplies Pet Tent - Soft Bed for Dog', 'We\'ve designed these indoor houses for your adorable pet using high quality poly fabric and soft poly-foam lining.\r\n', 'soft bed for dog402', 4000, 'soft bed for dog402.jpg', '2023-08-01', 3),
(403, 4, 'Indoor-Outdoor Small Pet Habitat Cage with Canvas Bottom', 'We\'ve designed these indoor houses for your adorable pet using high quality poly fabric and soft poly-foam lining.\r\n', 'indoor-outdoor small pet cage403', 4000, 'indoor-outdoor small pet cage403.jpg', '2025-12-10', 1),
(404, 4, 'MidWest Homes for Pets Eillo Folding Outdoor Wood Dog House', 'We\'ve designed these indoor houses for your adorable pet using high quality poly fabric and soft poly-foam lining.\r\n', 'midwest homes for dogs404', 4000, 'midwest homes for dogs404.jpg', '2022-12-17', 2),
(405, 4, 'biOrb Flow Aquarium', 'We\'ve designed these indoor houses for your adorable pet using high quality poly fabric and soft poly-foam lining.\r\n', 'biorb aquarium405', 4000, 'biorb aquarium405.jpg', '2025-12-10', 1),
(406, 4, 'Koller Products 6-Gallon AquaView 360 Aquarium Kit with LED Lighting and Power Filter Clear', '<p>We&#39;ve designed these indoor houses for your adorable pet using high quality poly fabric and soft poly-foam lining.</p>\r\n', 'koller-products-6-gallon-aquaview-360-aquarium-kit-led-lighting-and-power-filter-clear', 400, 'koller products 6-gallon aquaview406.jpg', '2025-12-10', 1),
(501, 5, '\r\nCute Dog Puppy Polo Shirts', 'Clothes for your pet durable, strong support, easy to carry, stable performance. It is produced by experienced manufacturers using the most advanced production equipment', 'cute dog polo shirts501', 400, 'cute dog polo shirts501.jpg', '2022-12-17', 2),
(502, 5, 'Little Kitten Polo Shirts', 'Clothes for your pet durable, strong support, easy to carry, stable performance. It is produced by experienced manufacturers using the most advanced production equipment', 'little kitten polo shirt 502', 500, 'little kitten polo shirt 502.jpg', '2023-08-04', 1),
(503, 5, 'Petitebella Cute Turkey Face Puppy Dog Dress', 'Clothes for your pet durable, strong support, easy to carry, stable performance. It is produced by experienced manufacturers using the most advanced production equipment', 'Petitebella Cute Turkey Face Puppy Dog Dress503', 600, 'Petitebella Cute Turkey Face Puppy Dog Dress503.jpg', '2025-12-10', 1),
(504, 5, 'Petitebella Cute Turkey Face Kitty Dress', 'Clothes for your pet durable, strong support, easy to carry, stable performance. It is produced by experienced manufacturers using the most advanced production equipment', 'Petitebella Cute Turkey Face Kitty Dress504', 600, 'Petitebella Cute Turkey Face Kitty Dress504.jpg', '2025-12-10', 1),
(505, 5, 'Birds Bowler Hat with Adjustable Chin Strap & White Feather, Funny Dress up Top Hat for Halloween an', 'Clothes for your pet durable, strong support, easy to carry, stable performance. It is produced by experienced manufacturers using the most advanced production equipment', 'Birds Bowler Hat505', 1000, 'Birds Bowler Hat505.jpg', '2025-12-10', 1),
(506, 5, 'Baosity Frog Shape Hoodie Bird Winter Clothes Cartoon Jumpsuit Sweater Warm Apparel', 'Clothes for your pet durable, strong support, easy to carry, stable performance. It is produced by experienced manufacturers using the most advanced production equipment', 'Baosity Frog Shape Hoodie Bird Winter Clothes Cartoon Jumpsuit Sweater Warm Apparel606', 1200, 'Baosity Frog Shape Hoodie Bird Winter Clothes Cartoon Jumpsuit Sweater Warm Apparel606.png', '2023-08-04', 1),
(601, 6, 'Feline Frenzy Cat Toy Critter', 'With something for every pet on offer, from tech and interactive toys that will keep them entertained for hours to soft and comforting chew toys\r\n', 'feline frenzy cat toy 601', 500, 'feline frenzy cat toy 601.jpg', '2025-12-10', 1),
(602, 6, 'Hard Squeaky Rubber Ball Toy For Dogs', 'With something for every pet on offer, from tech and interactive toys that will keep them entertained for hours to soft and comforting chew toys\r\n', 'hard squeaky rubber chew ball602', 590, 'hard squeaky rubber chew ball602.jfif', '2025-12-10', 1),
(603, 6, 'The Dogs Company Natural Rubber Dog Bone Chew Toy', 'With something for every pet on offer, from tech and interactive toys that will keep them entertained for hours to soft and comforting chew toys\r\n', 'The Dogs Company Natural Rubber Dog Bone Chew Toy603', 600, 'The Dogs Company Natural Rubber Dog Bone Chew Toy603.jpg', '2025-12-10', 1),
(604, 6, 'Boltz Bird Ladder and Hanging Chewable Wooden Bird Toys', 'With something for every pet on offer, from tech and interactive toys that will keep them entertained for hours to soft and comforting chew toys\r\n', 'Boltz Bird Ladder and Hanging Chewable Wooden Bird Toys604', 900, 'Boltz Bird Ladder and Hanging Chewable Wooden Bird Toys604.jpg', '2022-12-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(9, 9, 'PAY-1RT494832H294925RLLZ7TZA', '2018-05-10'),
(10, 9, 'PAY-21700797GV667562HLLZ7ZVY', '2018-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$0SHFfoWzz8WZpdu9Qw//E.tWamILbiNCX7bqhy3od0gvK5.kSJ8N2', 1, 'Code', 'Projects', '', '', 'thanos1.jpg', 1, '', '', '2018-05-01'),
(9, 'ishjah@gmail.com', 'nabila', 0, 'Harry', 'Den', 'Silay City, Negros Occidental', '09092735719', 'male2.png', 1, 'k8FBpynQfqsv', 'wzPGkX5IODlTYHg', '2018-05-09'),
(12, 'christine@gmail.com', '$2y$10$ozW4c8r313YiBsf7HD7m6egZwpvoE983IHfZsPRxrO1hWXfPRpxHO', 0, 'Christine', 'becker', 'demo', '7542214500', 'female3.jpg', 1, '', '', '2018-07-09'),
(13, 'ishratnabila@gmail.com', '$2y$10$285I0JMC2lZCk9PtShSUGe973RtfPnMxwHm0JkqvPAn/Yd64cdp8m', 0, 'ishrat', 'nabila', 'abcd', '', '', 1, '', '', '2022-12-13'),
(14, 'sara@gmail.com', '$2y$10$LrduXngTh0hKDRg6/l2.UusYxqdcbABHtQZP.YJ/zXvQBMiInV6N2', 0, 'sara', 'rahman', 'abc', '1234', '', 1, '', '', '2022-12-15'),
(15, 'adhmin@admin.com', '$2y$10$RbgTVUI0u.Z3tx6QTpiWreSA72LpEv2gsx/F6Cp6pqLXWuQKh2Ipm', 0, 'ishrat', 'nabila', '', '', '', 1, 'UKApWTN5B8y4', '', '2022-12-18'),
(16, 'adhminh@admin.com', '$2y$10$oKnsS9psoBDZ7YNhTEmOcOXFfhQK7oVIQI1SrUKHw0nkk8bwUaVzi', 0, 'ishrat', 'nabila', '', '', '', 1, 'LvdsRilDybrY', '', '2022-12-18'),
(17, 'adhminhd@admin.com', '$2y$10$hUd1Tk36mdOKPHk4aRD1eOz97nlhbysINy5BnnfL2LACv7Fh1gTJ.', 0, 'ishrat', 'nabila', '', '', '', 1, 'FOGzSRe4uVLo', '', '2022-12-18'),
(23, 'nahin3@gmail.com', '$2y$10$W9j0EKya5JhHSUKrHL2h3um/WWrM.uY8qsL13eTfHM1WPozyEhnhO', 0, 'nahin', 'talukdar', '', '', '', 1, 'Kh59VRTyk6nl', '', '2022-12-19'),
(24, 'nahin34@gmail.com', '$2y$10$srtFV8uSlxh7SNSD4Ybvce4.R6sIBFUsQZOXw6l74P5rbmod0frS6', 0, 'nahin', 'talukdar', '', '', '', 1, 'ijNE7oJIs31P', '', '2022-12-19'),
(25, 'fahim@gmail.com', '$2y$10$uMrUYc.xdtFjmfpjNhnuLOHZJki1sg4LoqIS4HRP65EY4Kz.n6ahO', 0, 'nahin', 'fahim', '', '', '', 1, 'viM6VcUmIDtO', '', '2022-12-19'),
(26, 'fahim2@gmail.com', '$2y$10$Q5Qp/D9ixgNwbbS1ApQcCu8jBuxXlj3dNjDZ0lSVMvq7vC16.wYXG', 0, 'nahin', 'fahim', '', '', '', 1, '8eSJYIUBu9F3', '', '2022-12-19'),
(27, 'fahim22@gmail.com', '$2y$10$K9NLPhjIh3KKTr7XyEovEeYpEQOSMUpByBZ/GrmZNwaJwV7vT0TDG', 0, 'nahin', 'fahim', '', '', '', 1, '3M89k52ySlPm', '', '2022-12-19'),
(28, 'fahim222@gmail.com', '$2y$10$Pl4UAn4SooiJ4QH5SHXlVOF9jg1HgzK6m2ziEC32C1z3TnsxWyFK2', 0, 'nahin', 'fahim', '', '', '', 1, '9Ya2d1JLGset', '', '2022-12-19'),
(29, 'fahim2224@gmail.com', '$2y$10$2K89XtWKRDlDz.VpiuSJuOXPayXeLaDsnlObYKGIscoV4oeerxv7.', 0, 'nahin', 'fahim', '', '', '', 1, 'CzWHyDFXmRbq', '', '2022-12-19'),
(30, 'fahim22254@gmail.com', '$2y$10$u.yFcyEN9WdbctxDXWeKnOvxjgnYseCHosWq0PtUP179o87Fk9o92', 0, 'nahin', 'rahman', '', '', '', 1, 'ZOwhBIJiYkyT', '', '2022-12-19'),
(31, 'hossainfahad919@gmail.com', '$2y$10$Gx89.uHZ7Ula.2EknzODI.dKEFnJZ3.URgHEP85jWocIM0U5VNKFW', 0, 'Md. Fahad', 'Hossain', 'Dhaka', '01777777777', 'pexels-mathias-reding-13046458.jpg', 1, 'zN8qRDFS7mky', '', '2023-07-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groomers`
--
ALTER TABLE `groomers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `groomers`
--
ALTER TABLE `groomers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
