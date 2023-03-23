-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 05:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_bixwe`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `housename` varchar(50) NOT NULL,
  `postoffice` varchar(50) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `user_id`, `housename`, `postoffice`, `locality`, `city`, `district`, `pincode`, `status`) VALUES
(3, 13, 'Azhimukham', 'Kanjikuzhy', 'Thallakkanam', 'Kanjikuzhy', 'Idukki', 685606, 1),
(4, 15, 'Azhimukham', 'Kanjikuzhy', 'Thallakkanam', 'Kanjikuzhy', 'Idukki', 685606, 1),
(5, 13, 'Puthenpurackal', 'Karinilam', 'Amaravathy', 'Mundakkayam', 'Kottayam', 686513, 1),
(6, 16, 'Puthenpurackal', 'Karinilam', 'Amaravathy', 'Mundakkayam', 'Kottayam', 686513, 1),
(7, 17, 'Azhimukham', 'Karinilam', 'Punnayar', 'Kanjikuzhy', 'Kottayam', 685606, 1),
(8, 18, 'Puthenpurackal', 'Kanjikuzhy', 'Thallakkanam', 'Kanjikuzhy', 'Kottayam', 686513, 1),
(9, 19, 'Puthenpurackal', 'Kanjikuzhy', 'Punnayar', 'Kanjikuzhy', 'Kottayam', 685606, 1),
(10, 20, 'Azhimukham', 'Karinilam', 'Punnayar', 'Mundakkayam', 'Kottayam', 686513, 1),
(11, 23, 'Azhimukham', 'Maniyar', 'Thallakkanam', 'Kanjikuzhy', 'Kottayam', 685606, 1),
(12, 24, 'Puthenpurackal', 'Karinilam', 'Thallakkanam', 'Mundakkayam', 'Idukki', 686513, 1),
(13, 25, 'Azhimukham', 'Maniyar', 'Amaravathy', 'Vadaserikkara', 'Kottayam', 689662, 1);

-- --------------------------------------------------------

--
-- Table structure for table `body_type`
--

CREATE TABLE `body_type` (
  `type_id` int(11) NOT NULL,
  `body_type_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `body_type`
--

INSERT INTO `body_type` (`type_id`, `body_type_name`, `status`) VALUES
(1, 'Pear', 1),
(2, 'Rectangle', 1),
(3, 'Inverted Triangle', 1),
(4, 'Apple', 1),
(5, 'Triangle ', 1),
(6, 'Trapezoid', 1),
(7, 'Athletic', 1),
(8, 'Hourglass', 1),
(9, 'Oval', 1),
(10, 'All', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `entry_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `cart_quantity` int(20) NOT NULL,
  `net_total` int(20) NOT NULL,
  `is_checked_out` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`entry_id`, `user_id`, `product_id`, `size_id`, `color_id`, `price`, `cart_quantity`, `net_total`, `is_checked_out`) VALUES
(82, 13, 14, 3, 1, 320, 1, 320, 1),
(83, 13, 14, 5, 1, 320, 2, 640, 1),
(84, 13, 14, 5, 1, 320, 1, 320, 1),
(88, 13, 16, 3, 44, 449, 1, 449, 1),
(89, 13, 16, 2, 8, 389, 2, 778, 1),
(90, 13, 14, 3, 1, 320, 1, 320, 1),
(92, 13, 16, 5, 8, 389, 1, 389, 1),
(93, 13, 16, 7, 44, 389, 1, 389, 1),
(94, 13, 14, 3, 1, 320, 1, 320, 1),
(95, 13, 14, 5, 1, 350, 1, 350, 1),
(96, 13, 14, 3, 1, 320, 1, 320, 1),
(97, 13, 17, 13, 1, 755, 1, 755, 1),
(98, 13, 16, 5, 44, 389, 1, 389, 1),
(99, 13, 14, 3, 1, 320, 7, 2240, 1),
(100, 13, 16, 3, 8, 449, 8, 3592, 1),
(101, 13, 13, 5, 1, 731, 1, 731, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `usergroup_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `usergroup_id`, `category_name`, `status`) VALUES
(10, 1, 'Western Wear', 1),
(11, 1, 'Ethnic and Fusion Wear', 1),
(12, 1, 'Sports and Active Wear', 1),
(13, 2, 'Top Wear', 1),
(14, 2, 'Bottom Wear', 1),
(15, 2, 'Sports and Active Wear Men', 1),
(16, 2, 'Ethnic Wear', 1),
(17, 3, 'Girls Clothing', 1),
(18, 3, 'Boys Clothing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`color_id`, `color_name`, `status`) VALUES
(1, 'Black', 1),
(2, 'White', 1),
(3, 'Blue', 1),
(4, 'Red', 0),
(5, 'Beige', 1),
(6, 'Silver', 1),
(7, 'Bronze', 1),
(8, 'Brown', 1),
(9, 'Burgundy', 1),
(10, 'Charcoal', 1),
(11, 'Coffee Brown', 1),
(12, 'Copper', 1),
(13, 'Coral', 1),
(14, 'Cream', 1),
(15, 'Fluorescent Green', 1),
(16, 'Gold', 1),
(17, 'Green', 1),
(18, 'Grey', 1),
(19, 'Grey', 1),
(20, 'Khaki', 1),
(21, 'Lavender', 1),
(22, 'Lime Green', 1),
(23, 'Magenta', 1),
(24, 'Maroon', 1),
(25, 'Mauve', 1),
(26, 'Metallic', 1),
(27, 'Multi', 1),
(28, 'Mustard', 1),
(29, 'Navy Blue', 1),
(30, 'Nude', 1),
(31, 'Off White', 1),
(32, 'Olive', 1),
(33, 'Orange', 1),
(34, 'Peach', 1),
(35, 'Pink', 1),
(36, 'Purple', 1),
(37, 'Rose', 1),
(38, 'Rust', 1),
(39, 'Sea Green', 1),
(40, 'Tan', 1),
(41, 'Taupe', 1),
(42, 'Teal', 1),
(43, 'Turquoise Blue', 1),
(44, 'Yellow', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cut`
--

CREATE TABLE `cut` (
  `cut_id` int(11) NOT NULL,
  `cut_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cut`
--

INSERT INTO `cut` (`cut_id`, `cut_name`, `status`) VALUES
(1, 'A line', 1),
(2, 'Boot Cut', 1),
(3, 'Flared', 1),
(4, 'Straight Cut', 1),
(5, 'Princess ', 1),
(6, 'Long Torso', 1),
(7, 'One Piece', 1),
(8, 'Square Neckline', 1),
(9, 'V neckline', 1),
(10, 'Empire Waist', 1),
(11, 'Shift Cut', 1),
(12, 'Sheath', 1),
(13, 'Basque or V Waist', 1),
(14, 'Bias Cut', 1),
(15, 'Dropped Waist', 1),
(16, 'Maxi', 1),
(17, 'Mermaid Cut', 1),
(18, 'Revel Cut', 1),
(19, 'Wrap Cut', 1),
(20, 'Halter', 1),
(21, 'Tunic ', 1),
(22, 'Bodycon', 1),
(23, 'None', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fade`
--

CREATE TABLE `fade` (
  `entry_id` int(11) NOT NULL,
  `fade_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fade`
--

INSERT INTO `fade` (`entry_id`, `fade_name`, `status`) VALUES
(2, 'Light Fade', 1),
(3, 'Heavy Fade', 1),
(4, 'No Fade', 1),
(5, 'Clean Look', 1),
(6, 'None', 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `entry_id` int(11) NOT NULL,
  `feature_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`entry_id`, `feature_name`, `status`) VALUES
(1, 'Printed', 1),
(2, 'Acid Wash', 1),
(3, 'Applique', 1),
(4, 'Bleached', 1),
(5, 'Coated', 1),
(6, 'Colourblocked', 1),
(7, 'Cuffed Hem', 1),
(8, 'Embellished', 1),
(9, 'Embroidered', 1),
(10, 'Ombre', 1),
(11, 'Side Stripes', 1),
(12, 'Zip', 1),
(13, 'None', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fit`
--

CREATE TABLE `fit` (
  `fit_id` int(11) NOT NULL,
  `fit_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fit`
--

INSERT INTO `fit` (`fit_id`, `fit_name`, `status`) VALUES
(1, 'Skinny', 1),
(2, 'Slim', 1),
(3, 'Regular', 1),
(4, 'Tailored', 1),
(5, 'Petite', 1),
(6, 'Plus Size', 1),
(7, 'Maternity', 1),
(8, 'Boyfriend Fit', 1),
(9, 'Dad Fit', 1),
(10, 'Flared', 1),
(11, 'Jogger', 1),
(12, 'Mom Fit', 1),
(13, 'Relaxed', 1),
(14, 'Straight', 1),
(15, 'Super Skinny', 1),
(16, 'Tapered Fit', 1),
(17, 'Wide Leg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `material_id` int(11) NOT NULL,
  `material_name` varchar(20) NOT NULL,
  `durability` longtext NOT NULL,
  `comfort` longtext NOT NULL,
  `maintenance` longtext NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `material_name`, `durability`, `comfort`, `maintenance`, `status`) VALUES
(1, 'Cotton', 'Cotton has a high tensile strength making it strong durable and less likely to rip or tear', 'Cotton is a natural hollow fiber which means air can pass through it with ease ', 'Wash in cold water whether using a washing machine or washing by hand Give garments a gentle stretch when they come out of the wash to get them back into shape Always air dry dry clothes flat and out ', 1),
(2, 'Polyester', 'When blended with cotton polyester improves the shrinkage durability and wrinkling profile of this widely produced natural fiber Polyester fabric is highly resistant to environmental conditions which ', 'When blended with cotton polyester improves the shrinkage durability and wrinkling profile of this widely produced natural fiber Polyester fabric is highly resistant to environmental conditions which ', 'When blended with cotton polyester improves the shrinkage durability and wrinkling profile of this widely produced natural fiber Polyester fabric is highly resistant to environmental conditions which ', 1),
(3, 'Georgette', 'It has good strength but is lightweight and tear resistant it is easily dyed in any colors and is one of the most popular fabrics for printing Georgette cloth is woven in highly twisted yarns which re', 'Georgette is a versatile fabric often sold in beautiful big floral patches different prints and even in solid colors that everyone loves to explore This fabric is super lightweight it is exceptionally', 'Though this material is strong hand washing is best Fill a sink or tub with cold water Add a small amount of mild detergent and agitate the water to mix Add the clothing and gently swish it around in ', 1),
(4, 'Crepe', 'Crepe fabric is typically a silk or wool cloth which threads are strongly twisted in opposite directions or specifically interlaced. Created of different fibres, it is commonly known for crispy texture and outstanding durability.', 'Crepe fabric gives the wearer a slimming appearance and has a very graceful fall, making it a great fabric for party events or other formal occasions; however, crepe fabrics are also preferred for daily wear because they require little to no ironing and are very soft and comfortable.', 'The exact care instructions are dependent on the fiber that is used in your material, but crepe usually needs to be dry cleaned. It cannot be machine washed under any circumstance. Some crepe fabrics can also be washed by hand in cold water.', 1),
(5, 'Chiffon', 'n general, the chiffon fabric is light and rough to the touch. Although it is a fairly wear-resistant cloth, it tends to fray and can be easily damaged by hot iron and steam, so be careful. ', 'Chiffon is quite soft to touch and drapes very well. This fabric is why it is used to create movements or to give a sleek look because it is not stiff. Chiffon fabric is plain-woven in a mesh-like fashion which makes it slightly transparent.', 'ilk chiffon needs to be dry cleaned. Polyester chiffon and nylon chiffon can be hand washed or washed in the washing machine on gentle. Use a mild, gentle detergent. Wash with cold water and soak for 30 minutes.', 1),
(6, 'Denim', 'Denim is a sturdy and durablefabric, which is woven in a manner that it can be effortlessly worn in rough conditions.', 'Probably one of the main reasons denim has been able to stick around for so long, they are so darn comfortable. ', 'Denim is a thick fabric (unlike your average T-shirt) so you can get away with more wears between washes.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `entry_id` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `notif_id` int(11) NOT NULL,
  `read_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`entry_id`, `receiver`, `notif_id`, `read_status`) VALUES
(15, 15, 2, 1),
(16, 14, 1, 1),
(17, 14, 1, 1),
(18, 15, 2, 1),
(19, 14, 1, 1),
(20, 14, 1, 0),
(21, 14, 1, 0),
(22, 14, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notif_type`
--

CREATE TABLE `notif_type` (
  `notif_id` int(11) NOT NULL,
  `notification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notif_type`
--

INSERT INTO `notif_type` (`notif_id`, `notification`) VALUES
(1, 'New Seller Registration'),
(2, 'Stock Up Products');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_phone` varchar(20) NOT NULL,
  `c_address` int(11) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `total_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `c_name`, `c_email`, `c_phone`, `c_address`, `payment_mode`, `payment_id`, `total_amount`) VALUES
(29, 13, '2023-03-08', 'Agnes Benny', 'agnesbenny641@gmail.com', '7902934850', 5, '1', 0, 729),
(35, 13, '2023-03-08', 'Agnes Benny', 'agnesbenny641@gmail.com', '7902934850', 5, '2', 0, 690),
(36, 13, '2023-03-08', 'Agnes Benny', 'agnesbenny641@gmail.com', '7902934850', 3, '1', 0, 690),
(37, 13, '2023-03-08', 'Agnes Benny', 'agnesbenny641@gmail.com', '7902934850', 3, '2', 4, 775),
(38, 13, '2023-03-08', 'Agnes Benny', 'agnesbenny641@gmail.com', '7902934850', 3, '2', 5, 1164),
(39, 13, '2023-03-08', 'Agnes Benny', 'agnesbenny641@gmail.com', '7902934850', 5, '2', 6, 1164),
(44, 13, '2023-03-08', 'Agnes Benny', 'agnesbenny641@gmail.com', '7902934850', 5, '1', 0, 3404),
(45, 13, '2023-03-09', 'Agnes Benny', 'agnesbenny641@gmail.com', '7902934850', 3, '1', 0, 3612);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `quantity` int(20) NOT NULL,
  `size` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `total_price` int(20) NOT NULL,
  `order_status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `brand`, `quantity`, `size`, `color`, `price`, `total_price`, `order_status`) VALUES
(39, 29, 16, 15, 1, 7, 44, 389, 389, 2),
(40, 29, 14, 15, 1, 3, 1, 320, 320, 2),
(41, 36, 14, 15, 1, 5, 1, 350, 350, 0),
(42, 36, 14, 15, 1, 3, 1, 320, 320, 0),
(53, 44, 14, 15, 7, 3, 1, 320, 2240, 0),
(54, 44, 16, 15, 1, 5, 44, 389, 389, 0),
(55, 44, 17, 16, 1, 13, 1, 755, 755, 0),
(56, 45, 16, 15, 8, 3, 8, 449, 3592, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `status_name`) VALUES
(1, 'Processing'),
(2, 'Shipped'),
(3, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `pattern`
--

CREATE TABLE `pattern` (
  `pattern_id` int(11) NOT NULL,
  `pattern_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pattern`
--

INSERT INTO `pattern` (`pattern_id`, `pattern_name`, `status`) VALUES
(1, 'Solid', 1),
(2, 'Ethnic Motifs', 1),
(3, 'Floral', 1),
(4, 'Abstract', 1),
(5, 'Alphanumeric', 1),
(6, 'Animal', 1),
(7, 'Bohemian', 1),
(8, 'Brand Logo', 1),
(9, 'Cartoon Characters', 1),
(10, 'Checked', 1),
(11, 'Colourblocked', 1),
(12, 'Conversational', 1),
(13, 'Embellished', 1),
(14, 'Geometric', 1),
(15, 'Graphic', 1),
(16, 'Humour and Comic', 1),
(17, 'Polka Dots', 1),
(18, 'Striped', 1),
(19, 'Tie and Dye', 1),
(20, 'Tribal', 1),
(21, 'Tropical', 1),
(22, 'Typography', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `transaction_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `order_id`, `transaction_id`) VALUES
(4, 37, '608b5d3496bd5edd6364709881f5c8f6'),
(5, 38, 'be8210f84b7e82fe088114674c48d7fd'),
(6, 39, '94b968ed4c90867ee40d4e8330ee1d0c');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `cut` int(11) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `body_type` int(11) DEFAULT NULL,
  `fade` int(11) DEFAULT NULL,
  `feature` int(11) DEFAULT NULL,
  `fit` int(11) DEFAULT NULL,
  `material` int(11) DEFAULT NULL,
  `pattern` int(11) DEFAULT NULL,
  `texture` int(11) DEFAULT NULL,
  `wear` int(11) NOT NULL,
  `usergroup` int(11) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `subcategory` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `product_name`, `product_desc`, `cut`, `brand`, `body_type`, `fade`, `feature`, `fit`, `material`, `pattern`, `texture`, `wear`, `usergroup`, `image1`, `image2`, `image3`, `category`, `subcategory`, `status`) VALUES
(13, 'Sleeveless V Neck Crop Top', 'Black crop regular top Solid  V-neck, sleeveless, no sleeves  Smocked detail Woven georgette', 1, 16, 1, 3, 1, 2, 1, 10, 2, 13, 1, './uploads/top-1.jpg', './uploads/top-2.jpg', './uploads/top-3.jpg', 10, 41, 1),
(14, 'Women Fit and Flare Multicolor Dress', 'Sporting a lovely boat neck and sleeveless puff sleeves, this dress will add to your charm.  Stunning magenta tone Printed pattern Boat neck Sleeveless puff sleeves', 3, 15, 8, 2, 1, 2, 4, 3, 1, 3, 1, './uploads/dress2-1.jpg', './uploads/dress2-2.jpg', './uploads/dress2-3.jpg', 10, 40, 1),
(15, 'Floral Print Wrap Dress', 'White and pink printed woven wrap dress with tie-up detail has a v neck three-quarter sleeves  conce', 19, 17, 1, 6, 12, 2, 2, 3, 10, 3, 1, './uploads/dress1.jpg', './uploads/dress1-2.jpg', './uploads/dress1-3.jpg', 10, 40, 1),
(16, 'Women Rust Floral Printed A Line Top', 'Rust embellished A-line top, has a mandarin collar, three-quartered sleeves, and button closure', 1, 15, 3, 6, 1, 3, 1, 3, 1, 2, 1, './uploads/tunic-1.jpg', './uploads/tunic-2.jpg', './uploads/tunic-3.jpg', 11, 55, 1),
(17, 'Men Black Slim Fit Mid Rise Clean Look Stretchable', 'Black dark wash 5-pocket mid-rise jeans, clean look, no fade, has a button and zip closure, and waistband with belt loops', 4, 16, 2, 4, 12, 2, 6, 1, 1, 2, 2, './uploads/jeans-1.jpg', './uploads/jeans-2.jpg', './uploads/jeans-3.jpg', 14, 70, 1),
(18, 'Women Blue Skinny Fit High Rise Clean Look Stretch', 'Blue medium wash 5-pocket high-rise jeans, clean look, no fade, has a button and zip closure, and waistband with belt loops', 4, 16, 10, 4, 12, 1, 1, 1, 1, 2, 1, './uploads/wjeans-1.jpg', './uploads/wjeans-2.jpg', './uploads/wjeans-3.jpg', 10, 42, 1),
(19, 'Black High Neck Cropped Top', 'Black solid knitted crop top, has a high neck, and long sleeves', 22, 17, 10, 4, 13, 3, 1, 1, 1, 2, 1, './uploads/crop-1.jpg', './uploads/crop-2.jpg', './uploads/crop-3.jpg', 10, 41, 1),
(20, 'Men Green and White Slim Fit Printed Casual Shirt', 'Green and White printed casual shirt, has a spread collar, short sleeves, button placket, curved hem, and 1 patch pocket', 4, 17, 2, 4, 1, 2, 1, 3, 1, 2, 2, './uploads/casualshirt-1.jpg', './uploads/casualshirt-2.jpg', './uploads/casualshirt-3.jpg', 13, 62, 1),
(21, 'Girls Yellow Striped Cotton Midi Dress With Printe', 'Yellow & White striped fit & flare dress comes with a printed shrug \r\nShoulder straps\r\nSleeveless, no sleeves\r\nGathered or pleated detail\r\nMidi length in flared hem\r\nCotton fabric', 3, 20, 10, 6, 1, 5, 1, 18, 1, 2, 3, './uploads/kidsg-1.jpg', './uploads/kidsg-2.jpg', './uploads/kidsg-3.jpg', 17, 81, 1),
(22, 'Boys Beige Standard Buffalo Checked Casual Shirt', 'Beige buffalo checked opaque Casual shirt ,has a spread collar, button placket, 2 flap pocket, long regular sleeves, curved hem', 4, 20, 10, 6, 13, 3, 1, 10, 1, 2, 3, './uploads/kidsb-1.jpg', './uploads/kidsb-2.jpg', './uploads/kidsb-3.jpg', 18, 88, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_color_var`
--

CREATE TABLE `product_color_var` (
  `var_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_color_var`
--

INSERT INTO `product_color_var` (`var_id`, `product_id`, `color_id`) VALUES
(1, 14, 1),
(2, 16, 44),
(3, 16, 8),
(4, 17, 1),
(5, 13, 1),
(6, 18, 3),
(7, 15, 2),
(8, 15, 17),
(9, 15, 1),
(10, 19, 1),
(11, 20, 2),
(12, 21, 44),
(13, 22, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_var`
--

CREATE TABLE `product_var` (
  `var_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `bust` int(20) NOT NULL,
  `front` int(20) NOT NULL,
  `waist` int(20) NOT NULL,
  `shoulder` int(20) NOT NULL,
  `inseam` int(20) NOT NULL,
  `chest` int(20) NOT NULL,
  `rise` int(20) NOT NULL,
  `hips` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_var`
--

INSERT INTO `product_var` (`var_id`, `product_id`, `size_id`, `bust`, `front`, `waist`, `shoulder`, `inseam`, `chest`, `rise`, `hips`, `quantity`, `price`) VALUES
(16, 14, 3, 28, 30, 28, 0, 0, 0, 0, 0, 10, 320),
(17, 14, 5, 30, 32, 30, 0, 0, 0, 0, 0, 19, 350),
(18, 16, 3, 37, 26, 34, 15, 0, 0, 0, 0, 2, 449),
(19, 16, 5, 39, 26, 36, 15, 0, 0, 0, 0, 5, 389),
(20, 16, 2, 41, 27, 38, 16, 0, 0, 0, 0, 10, 389),
(21, 16, 7, 43, 27, 40, 17, 0, 0, 0, 0, 9, 389),
(22, 17, 9, 0, 0, 28, 0, 34, 0, 9, 37, 10, 755),
(23, 17, 10, 0, 0, 30, 0, 34, 0, 10, 39, 10, 755),
(24, 17, 11, 0, 0, 32, 0, 34, 0, 10, 40, 10, 755),
(25, 17, 12, 0, 0, 34, 0, 34, 0, 11, 42, 10, 755),
(26, 17, 13, 0, 0, 36, 0, 34, 0, 11, 44, 6, 755),
(27, 17, 14, 0, 0, 38, 0, 34, 0, 11, 46, 10, 755),
(28, 17, 15, 0, 0, 40, 0, 34, 0, 12, 48, 10, 755),
(29, 18, 9, 0, 0, 26, 0, 26, 0, 0, 0, 10, 959),
(30, 18, 10, 0, 0, 30, 0, 26, 0, 0, 0, 10, 959),
(31, 18, 11, 0, 0, 32, 0, 26, 0, 0, 0, 10, 959),
(32, 18, 12, 0, 0, 34, 0, 25, 0, 0, 0, 10, 959),
(33, 13, 5, 36, 17, 0, 0, 0, 0, 0, 0, 10, 731),
(34, 13, 2, 38, 17, 0, 0, 0, 0, 0, 0, 10, 731),
(35, 20, 3, 0, 25, 0, 17, 0, 41, 0, 0, 10, 419),
(36, 20, 5, 0, 26, 0, 18, 0, 43, 0, 0, 10, 419),
(37, 20, 2, 0, 26, 0, 18, 0, 45, 0, 0, 10, 545),
(38, 20, 7, 0, 26, 0, 19, 0, 47, 0, 0, 10, 545),
(39, 19, 4, 32, 21, 26, 0, 0, 0, 0, 0, 10, 399),
(40, 19, 3, 34, 22, 28, 0, 0, 0, 0, 0, 10, 399),
(41, 19, 5, 36, 23, 30, 0, 0, 0, 0, 0, 10, 399),
(42, 19, 2, 38, 23, 32, 0, 0, 0, 0, 0, 10, 399),
(43, 19, 7, 40, 24, 34, 0, 0, 0, 0, 0, 10, 399),
(44, 19, 8, 42, 24, 36, 0, 0, 0, 0, 0, 10, 399),
(45, 15, 4, 32, 45, 26, 0, 0, 0, 0, 36, 10, 719),
(46, 15, 3, 34, 46, 28, 0, 0, 0, 0, 38, 10, 719),
(47, 15, 5, 36, 47, 30, 0, 0, 0, 0, 40, 10, 719),
(48, 15, 2, 38, 47, 32, 0, 0, 0, 0, 42, 10, 719),
(49, 15, 7, 40, 48, 34, 0, 0, 0, 0, 44, 10, 719),
(50, 15, 8, 42, 48, 36, 0, 0, 0, 0, 46, 10, 719),
(51, 21, 16, 0, 26, 24, 10, 0, 24, 0, 28, 10, 800),
(52, 21, 17, 0, 29, 26, 11, 0, 26, 0, 29, 10, 800),
(53, 21, 18, 0, 33, 29, 12, 0, 30, 0, 33, 10, 800),
(54, 21, 19, 0, 35, 31, 13, 0, 32, 0, 35, 10, 800),
(55, 21, 20, 0, 37, 33, 14, 0, 34, 0, 37, 10, 800),
(56, 22, 21, 0, 16, 0, 10, 0, 25, 0, 0, 10, 1329),
(57, 22, 22, 0, 17, 0, 11, 0, 27, 0, 0, 10, 1329),
(58, 22, 23, 0, 18, 0, 12, 0, 28, 0, 0, 10, 1329),
(59, 22, 16, 0, 19, 0, 13, 0, 30, 0, 0, 10, 1329),
(60, 22, 17, 0, 20, 0, 13, 0, 31, 0, 0, 10, 1329);

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_rating` int(20) NOT NULL,
  `user_review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_id`, `product_id`, `user_rating`, `user_review`) VALUES
(4, 13, 16, 4, 'good product'),
(5, 13, 14, 1, 'bad product');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `certificate` varchar(200) NOT NULL,
  `approval_status` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `user_id`, `certificate`, `approval_status`) VALUES
(1, 15, './uploads/activity diagram.pdf', 1),
(2, 16, './uploads/activity diagram.pdf', 1),
(3, 17, './uploads/activity diagram.pdf', 1),
(4, 18, './uploads/activity diagram.pdf', 0),
(5, 19, './uploads/Abstract.pdf', 1),
(6, 20, './uploads/Abstract.pdf', 1),
(7, 23, './uploads/Agnes Benny Resume Image Infosystems.pdf', 0),
(8, 24, './uploads/Agnes Benny Resume Image Infosystems.pdf', 0),
(9, 25, './uploads/Agnes Benny Resume Image Infosystems.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_name`, `status`) VALUES
(1, 'XXS', 1),
(2, 'L', 1),
(3, 'S', 1),
(4, 'XS', 1),
(5, 'M', 1),
(7, 'XL', 1),
(8, 'XXL', 1),
(9, '28', 1),
(10, '30', 1),
(11, '32', 1),
(12, '34', 1),
(13, '36', 1),
(14, '38', 1),
(15, '40', 1),
(16, '4-6Y', 1),
(17, '6-8Y', 1),
(18, '8-10Y', 1),
(19, '10-12Y', 1),
(20, '12-14Y', 1),
(21, '18-24M', 1),
(22, '2-3Y', 1),
(23, '3-4Y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_category_id`, `category_id`, `sub_category`, `status`) VALUES
(40, 10, 'Dresses and Jumpsuits', 1),
(41, 10, 'Tops Tshirts and Shirts', 1),
(42, 10, 'Jeans and Jeggings', 1),
(43, 10, 'Trousers', 1),
(44, 10, 'Skirts', 1),
(45, 10, 'Shorts', 1),
(46, 10, 'Coords', 1),
(47, 10, 'Playsuits', 1),
(48, 10, 'Sweaters and Sweatshirts', 1),
(49, 10, 'Jackets and Coats', 1),
(50, 10, 'Shrugs', 1),
(51, 10, 'Blazers and Waistcoats', 1),
(52, 11, 'Kurtas and Kurta Sets', 1),
(53, 11, 'Sarees and Blouses', 1),
(54, 11, 'Ethnic Dresses ', 1),
(55, 11, 'Kurtis Tunics and Tops', 1),
(56, 11, 'Palazzos and Trousers', 1),
(57, 11, 'Lehengas', 1),
(58, 11, 'Ethnic Bottomwear and Skirts', 1),
(59, 11, 'Dupattas and Shawls', 1),
(60, 12, 'Sports Apparel', 1),
(61, 13, 'Tshirts', 1),
(62, 13, 'Casual Shirts', 1),
(63, 13, 'Formal Shirts', 1),
(65, 13, 'Sweatshirts', 1),
(66, 13, 'Jackets', 1),
(67, 13, 'Sweaters', 1),
(68, 13, 'Blazers and Suits', 1),
(69, 13, 'Coats', 1),
(70, 14, 'Jeans', 1),
(71, 13, 'Chinos and Casual Trousers', 1),
(72, 14, 'Formal Trousers', 1),
(73, 14, 'Shorts', 1),
(74, 14, 'Trackpants', 1),
(75, 14, 'Joggers', 1),
(76, 15, 'Sports Apparel', 1),
(77, 16, 'Kurtas and Kurta Sets', 1),
(78, 16, 'Nehru Jackets', 1),
(79, 16, 'Sherwanis', 1),
(80, 16, 'Ethnic Blazers', 1),
(81, 17, 'Dresses Frocks and Jumpsuits', 1),
(82, 17, 'Tops Tshirts and Shirts', 1),
(83, 17, 'Skirts and Shorts', 1),
(84, 17, 'Jeans Trousers and Capris', 1),
(85, 17, 'Ethnicwear', 1),
(86, 17, 'Winterwear and Thermals', 1),
(87, 18, 'T shirts', 1),
(88, 18, 'Shirts', 1),
(89, 18, 'Jeans and Trousers', 1),
(90, 18, 'Shorts and Capris', 1),
(91, 18, 'Winterwear and Thermals', 1),
(92, 18, 'Ethnicwear', 1);

-- --------------------------------------------------------

--
-- Table structure for table `texture`
--

CREATE TABLE `texture` (
  `entry_id` int(11) NOT NULL,
  `texture_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `texture`
--

INSERT INTO `texture` (`entry_id`, `texture_name`, `status`) VALUES
(1, 'Smooth', 1),
(2, 'Coarse', 1),
(3, 'Washed', 1),
(4, 'Rough', 1),
(5, 'Fine', 1),
(6, 'Crisp', 1),
(7, 'Clingy', 1),
(8, 'Soft', 1),
(9, 'Stiff', 1),
(10, 'Sheer', 1),
(11, 'Lace', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`group_id`, `group_name`, `status`) VALUES
(1, 'Women', 1),
(2, 'Men', 1),
(3, 'Kids', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL,
  `code` varchar(100) NOT NULL,
  `quiz_taken` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `contact_no`, `role`, `code`, `quiz_taken`) VALUES
(13, 'Agnes Benny', 'agnesbenny641@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '7902934850', 'Customer', '', 1),
(14, 'Admin', 'agnesbenny@mca.ajce.in', '4a0eb8d1a084b36658c9df19b5f933cb', '7896541230', 'Admin', '', 0),
(15, 'Zara', 'zara@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '7895241630', 'Seller', '', 0),
(16, 'HandM', 'H&M@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '7894561230', 'Seller', '', 0),
(17, 'SASSAFRAS', 'sassafras@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '7418529630', 'Seller', '', 0),
(18, 'Roadster', 'roadster@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '8956231470', 'Seller', '', 0),
(19, 'MANGO', 'mango@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '8974561230', 'Seller', '', 0),
(20, 'AvaDesigns', 'ava@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '7854123690', 'Seller', '', 0),
(21, 'Rincy Reji', 'rincy@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '7418529630', 'Customer', '', 1),
(22, 'Ann Thomas', 'ann@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '9638521470', 'Customer', '', 0),
(23, 'SNITCH', 'snitch@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '7895623140', 'Seller', '', 0),
(24, 'Ahalyaa', 'ahalyaa@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '8956231740', 'Seller', '', 0),
(25, 'AVNI', 'avni@gmail.com', '4a0eb8d1a084b36658c9df19b5f933cb', '8567413208', 'Seller', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wear`
--

CREATE TABLE `wear` (
  `wear_id` int(11) NOT NULL,
  `wear_name` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wear`
--

INSERT INTO `wear` (`wear_id`, `wear_name`, `status`) VALUES
(1, 'Formal', 1),
(2, 'Casual', 1),
(3, 'Romantic', 1),
(4, 'Sleek Chic', 1),
(5, 'Glam', 1),
(6, 'Minimalist', 1),
(7, 'Vintage Femme', 1),
(8, 'Boho', 1),
(9, 'Editorial', 1),
(10, 'Androgynous', 1),
(11, 'Edgy', 1),
(12, 'Preppy', 1),
(13, 'Semi Formal', 1),
(14, 'Athleisure', 1),
(15, 'Hipster', 1),
(16, 'Norm Core', 1),
(17, 'Hip Hop', 1),
(18, 'Softboy', 1),
(19, 'Biker', 1),
(20, 'Grunge', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `entry_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `user` (`user_id`);

--
-- Indexes for table `body_type`
--
ALTER TABLE `body_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_prod_id` (`product_id`),
  ADD KEY `fk_size_id` (`size_id`),
  ADD KEY `fk_color_id` (`color_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `cut`
--
ALTER TABLE `cut`
  ADD PRIMARY KEY (`cut_id`);

--
-- Indexes for table `fade`
--
ALTER TABLE `fade`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `fit`
--
ALTER TABLE `fit`
  ADD PRIMARY KEY (`fit_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `notiffk` (`notif_id`);

--
-- Indexes for table `notif_type`
--
ALTER TABLE `notif_type`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_user_id_order` (`user_id`),
  ADD KEY `caddress` (`c_address`),
  ADD KEY `paymentid-fk` (`payment_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_prod_id_order` (`product_id`),
  ADD KEY `fk_order_id` (`order_id`),
  ADD KEY `size` (`size`),
  ADD KEY `color` (`color`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pattern`
--
ALTER TABLE `pattern`
  ADD PRIMARY KEY (`pattern_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk_order` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `fk_cut` (`cut`),
  ADD KEY `fk_body_type` (`body_type`),
  ADD KEY `fk_fade` (`fade`),
  ADD KEY `fk_feature` (`feature`),
  ADD KEY `fk_fit` (`fit`),
  ADD KEY `fk_material` (`material`),
  ADD KEY `fk_pattern` (`pattern`),
  ADD KEY `fk_texture` (`texture`),
  ADD KEY `fk_usergroup` (`usergroup`),
  ADD KEY `fk_cat` (`category`),
  ADD KEY `fk_subcat` (`subcategory`),
  ADD KEY `fk_wear` (`wear`),
  ADD KEY `fk_brand` (`brand`);

--
-- Indexes for table `product_color_var`
--
ALTER TABLE `product_color_var`
  ADD PRIMARY KEY (`var_id`),
  ADD KEY `prod-fk` (`product_id`),
  ADD KEY `col-fk` (`color_id`);

--
-- Indexes for table `product_var`
--
ALTER TABLE `product_var`
  ADD PRIMARY KEY (`var_id`),
  ADD KEY `prod` (`product_id`),
  ADD KEY `siz` (`size_id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `fkuser_key` (`user_id`),
  ADD KEY `fkprod_key` (`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`),
  ADD KEY `userfkid` (`user_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD KEY `fkcat` (`category_id`);

--
-- Indexes for table `texture`
--
ALTER TABLE `texture`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wear`
--
ALTER TABLE `wear`
  ADD PRIMARY KEY (`wear_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `fkproductid` (`product_id`),
  ADD KEY `userfk` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `body_type`
--
ALTER TABLE `body_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `colour`
--
ALTER TABLE `colour`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cut`
--
ALTER TABLE `cut`
  MODIFY `cut_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `fade`
--
ALTER TABLE `fade`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fit`
--
ALTER TABLE `fit`
  MODIFY `fit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notif_type`
--
ALTER TABLE `notif_type`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pattern`
--
ALTER TABLE `pattern`
  MODIFY `pattern_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_color_var`
--
ALTER TABLE `product_color_var`
  MODIFY `var_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_var`
--
ALTER TABLE `product_var`
  MODIFY `var_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `texture`
--
ALTER TABLE `texture`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wear`
--
ALTER TABLE `wear`
  MODIFY `wear_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_color_id` FOREIGN KEY (`color_id`) REFERENCES `colour` (`color_id`),
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`prod_id`),
  ADD CONSTRAINT `fk_size_id` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notiffk` FOREIGN KEY (`notif_id`) REFERENCES `notif_type` (`notif_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `caddress` FOREIGN KEY (`c_address`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `fkuserid` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `color` FOREIGN KEY (`color`) REFERENCES `colour` (`color_id`),
  ADD CONSTRAINT `fk_productid` FOREIGN KEY (`product_id`) REFERENCES `product` (`prod_id`),
  ADD CONSTRAINT `fkorderid` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `size` FOREIGN KEY (`size`) REFERENCES `size` (`size_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_body_type` FOREIGN KEY (`body_type`) REFERENCES `body_type` (`type_id`),
  ADD CONSTRAINT `fk_brand` FOREIGN KEY (`brand`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `fk_cat` FOREIGN KEY (`category`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `fk_cut` FOREIGN KEY (`cut`) REFERENCES `cut` (`cut_id`),
  ADD CONSTRAINT `fk_fade` FOREIGN KEY (`fade`) REFERENCES `fade` (`entry_id`),
  ADD CONSTRAINT `fk_feature` FOREIGN KEY (`feature`) REFERENCES `features` (`entry_id`),
  ADD CONSTRAINT `fk_fit` FOREIGN KEY (`fit`) REFERENCES `fit` (`fit_id`),
  ADD CONSTRAINT `fk_material` FOREIGN KEY (`material`) REFERENCES `material` (`material_id`),
  ADD CONSTRAINT `fk_pattern` FOREIGN KEY (`pattern`) REFERENCES `pattern` (`pattern_id`),
  ADD CONSTRAINT `fk_subcat` FOREIGN KEY (`subcategory`) REFERENCES `subcategory` (`sub_category_id`),
  ADD CONSTRAINT `fk_texture` FOREIGN KEY (`texture`) REFERENCES `texture` (`entry_id`),
  ADD CONSTRAINT `fk_usergroup` FOREIGN KEY (`usergroup`) REFERENCES `usergroup` (`group_id`),
  ADD CONSTRAINT `fk_wear` FOREIGN KEY (`wear`) REFERENCES `wear` (`wear_id`);

--
-- Constraints for table `product_color_var`
--
ALTER TABLE `product_color_var`
  ADD CONSTRAINT `col-fk` FOREIGN KEY (`color_id`) REFERENCES `colour` (`color_id`),
  ADD CONSTRAINT `prod-fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`prod_id`);

--
-- Constraints for table `product_var`
--
ALTER TABLE `product_var`
  ADD CONSTRAINT `prod` FOREIGN KEY (`product_id`) REFERENCES `product` (`prod_id`),
  ADD CONSTRAINT `siz` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`);

--
-- Constraints for table `review_table`
--
ALTER TABLE `review_table`
  ADD CONSTRAINT `fkprod_key` FOREIGN KEY (`product_id`) REFERENCES `product` (`prod_id`),
  ADD CONSTRAINT `fkuser_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `userfkid` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `fkcat` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fkproductid` FOREIGN KEY (`product_id`) REFERENCES `product` (`prod_id`),
  ADD CONSTRAINT `userfk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
