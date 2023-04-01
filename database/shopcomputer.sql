-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 07:11 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopcomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` int(10) NOT NULL,
  `item_image` varchar(100) NOT NULL,
  `item_discription` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_discription`) VALUES
(1, 'Samsung', 'Samsung Odyssey G9', 1000, './Assests/product1.jpg', 'Samsung\'s largest 1000R gaming monitor<br>NVIDIA® G-SYNC™ Compatibility reduces image tears, stuttering and screen lag'),
(2, 'ASUS', 'ASUS VP229HE', 250, './Assests/product14.jpg', '21.5-inch Full HD (1920 x 1080) LED backlight display with IPS 178° wide viewing angle panel.<br>Up to 75Hz refresh rate with Adaptive-Sync/FreeSync technology to eliminate tracing and ensure crisp and clear video playback.'),
(3, 'AOC', 'AOC Q27P2C 27 inch', 500, './Assests/product15.jps', 'Quad HD (2560 x 1440) resolution allows you to view more an incredible amount of detail, resulting in visuals that are crisp and vivid.<br>IPS displays deliver 178/178-degree viewing angles while maintaining consistent image quality and colors from all viewing positions'),
(4, 'AOC', 'AOC E970SWHEN', 150, './Assests/product16.png', 'Slim, energy-efficient LED display. Compact 18.5\" display panel size with a narrow 12.6mm bezel.<br>Displays with ultra-narrow borders allow for minimal distractions and maximum viewing size.'),
(5, 'Razer', 'Razer basilisk X wireless', 150, './Assests/product11.jpg', 'Razer hyper speed wireless technology<br>\r\n11 Programmable buttons<br>\r\n14 Customizable razer chroma RGB lighting zones'),
(6, 'Logitech', 'Logitech G Pro X', 7, './Assests/product8.jpg', 'Remove all obstacles in the way of winning with our lightest and fastest PRO mouse ever.<br>PRO X SUPERLIGHT continues our design philosophy of ZERØ OPPOSITION'),
(8, 'A4Tech', 'A4Tech N350', 5, './Assests/product7.jpg', 'Extreme quality offer over 5 million clicks guaranteed.<br>Guaranteed smooth and accurate tracking anywhere, even on furry textiles. Throw away your mouse pad!'),
(9, 'Logitech', 'Logitech G402', 20, './Assests/product5.jpg', 'The world’s fastest gaming mouse<br>Customize your mouse with 8 programmable buttons.<br>Switch through four DPI settings in an instant.'),
(10, 'Skyloong', 'Skyloong SK61S PBT', 60, './Assests/product4.jpg', 'SK61 fully know your needs and thus this model is equipped with RGB SMD light.<br>Here you have 3 layers of user editing modes'),
(11, 'A4Tech', 'A4Tech F111', 8, './Assests/product9.jpg', 'FSTYLER Sleek Multimedia Comfort Keyboard, Sleek Round-Square Keycaps,<br>Durable Fonts: Ensure you will never loose key identity, Drain Holes Design'),
(12, 'Logitech', 'Logitech G512', 110, './Assests/product10.jpg', 'G512 is a high-performance gaming keyboard featuring your choice of advanced GX mechanical switches.<br>G512 can be customizable per key with approximate 16.8 M colors.'),
(13, 'Bloody', 'Bloody S510', 35, './Assests/product12.jpg', 'Special tuned the actuation point and actuation force to bring players an unusual game speed and feel experience!<br>100% Anti-ghosting with full key rollover ensures your simultaneous key commands always register.'),
(14, 'Bloody', 'Bloody B865N Neon', 42, './Assests/product13.jpg', 'LIGHT STRIKE GAMING KEYBOARD<br>Innovative LK Optic Switch technology uses optic switch to react at lightning speed with extreme 0.2ms key response<br>exclusive \"long-lasting\" typing sound and tactile feedback, creates more passionate for gamers.'),
(15, 'SteelSeries', 'SteelSeries Arctis 7', 100, './Assests/product3.jpg', 'Lossless 2.4 GHz wireless audio designed for low latency gaming<br>Best mic in gaming: the Discord-certified ClearCast bidirectional microphone<br>Hear stunning detail in all games with award-winning Arctis sound'),
(16, 'Havit', 'Havit I62', 16, './Assests/product17.jpg', 'A 2.5 charge gives you up to 8 hours of continuous playback<br>Built-in dual 40mm large-aperture drivers, give you hi-fi stereo sound and powerful bass experience.'),
(17, 'Verbatim', 'Verbatim Stereo Headphone Classic', 14, './Assests/product18.jpg', 'Verbatim’s Over-Ear Stereo Headphones feature soft ear pads to ensure that you are always comfortable,<br>whether listening to music for hours on end, gaming, or watching back to back movies.'),
(18, 'Sennheiser', 'Sennheiser RS 120 II', 90, './Assests/product20.jpg', 'Wireless freedom and stereo sound with reception through walls and ceilings up to 328 feet<br>Simple, built-in recharging<br>Detailed, warm sound reproduction with strong bass response'),
(19, 'Sennheiser', 'Sennheiser Urbanite XL', 130, './Assests/product19.jpg', 'Sennheiser’s new URBANITE headphones are the new choice for great sound<br>Deep bass, and urban style on the move.'),
(20, 'ASUS', 'ASUS ROG GEForce RTX 4090 OC', 2000, './Assests/product2.jpg', 'Explore Your Gaming Fantasy with the Midnight Kaleidoscope.<br>Astonishing gaming experience and multimedia performance.'),
(21, 'Gigabyte', 'AORUS RTX 3090Ti', 1800, './Assests/product21.jpg', 'NVIDIA Ampere Streaming Multiprocessors<br>2nd Generation RT Cores<br>3rd Generation Tensor Cores'),
(22, 'Gigabyte', 'GigaByte GTX 1650 D6', 260, './Assests/product22.jpg', 'NVIDIA Turing™ architecture and GeForce Experience™<br>Integrated with 4GB GDDR6 128bit memory interface<br>90mm unique blade fan'),
(23, 'Gigabyte', 'GIGABYTE Radeon RX 6500 XT', 310, './Assests/product24.jpg', 'Powered by AMD RDNA™ 2 Radeon™ RX 6500 XT<br>Integrated with 4GB GDDR6 64-bit memory interface<br>WINDFORCE 2X Cooling System with alternate spinning fans'),
(24, 'Intel', 'Core I9 12900 12th Gen', 500, './Assests/product6.jpg', '10 nm enables improved performance per watt and micro architecture makes it power-efficient<br>16 Cores (8 Performance-cores, 8 Efficient-cores)<br>24 Threads (16 on Performance-cores, 8 on Efficient-cores)'),
(25, 'AMD', 'AMD Ryzen 7 5700X', 280, './Assests/product25.jpg', '8 CPU Cores & 16 Threads<br>\r\nMax. Boost Clock of Up to 4.6GHz\r\n'),
(26, 'Logitech', 'Logitech G29 Driving Force', 350, './Assests/product26.jpg', 'You will never want to race with a regular controller again after you add Driving Force to your controller selection.<br>G29 game steering wheel is designed for the latest racing games for your PlayStation®5<br>G29 Driving Force also works on your PC using Logitech Gaming Software.'),
(27, 'Lian Li', 'Lian Li O11 Dynamic EVO ATX', 210, './Assests/product27.jpg', 'Mid-tower chassis with two modes: Normal Mode/ Reverse Mode<br>Feature multi-directional power button and movable IO module<br>Front and side tempered glass panels for components and RGB display'),
(28, 'NZXT', 'NZXT H510 Compact ATX', 90, './Assests/product28.jpg', 'Iconic cable management bar and uninterrupted tempered-glass side panel<br>USB 3.2 Gen2-compatible USB-C connector on the front panel<br>Cable routing kit with pre-installed channels and straps'),
(29, 'Logitech', 'Logitech X52 HOTAS Flight Control System Joystick', 140, './Assests/product29.jpg', 'X52 delivers precise flight simulator operation,<br>employing a multifunction LCD for easy access to an astounding minimum of 105 programmable commands.'),
(30, 'Arozzi', 'Arozzi TORRETTA-SFB-DG Gaming Chair', 270, './Assests/product30.jpg', 'Durable Upholstery Furniture Fabric<br>3-Dimensional armrests<br>Rocking function that tilts the seat and backrest up to 12°');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`) VALUES
(1, 'Aqmer', 'Ijaz'),
(2, 'Affan', 'Zahoor'),
(3, 'Bilal', 'Mamji');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
