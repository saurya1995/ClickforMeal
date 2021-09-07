-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 07:43 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `password`) VALUES
(1234, 'core');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `email` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email`, `product_id`, `name`, `quantity`, `price`, `img`) VALUES
('sauryathome@gmail.com', 10, 'Masala Dosa', 1, 130, 'images/allday/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` varchar(250) NOT NULL,
  `sub_cat` varchar(250) NOT NULL,
  `cat_title` varchar(250) NOT NULL,
  PRIMARY KEY (`sub_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `sub_cat`, `cat_title`) VALUES
('a1', 'ap', 'allday'),
('f1', 'bu', 'fastfood'),
('d1', 'ca', 'desert'),
('f2', 'ch', 'fastfood'),
('c1', 'cm', 'comfortmain'),
('d2', 'ic', 'desert'),
('b1', 'mo', 'beverage'),
('b2', 'ob', 'beverage'),
('f3', 'pi', 'fastfood'),
('d3', 'pu', 'desert'),
('b3', 'tc', 'beverage');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('Saurya', 'sauryathome@gmail.com', 'Fun and nice experience while shopping:-)');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_contact` int(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_contact`) VALUES
(5, 'saash', 'saash@gmail.com', '5f3c95df7bdd9b67fa2e5f079a5c8b60', 2761901),
(6, 'saurya', 'sauryathome@gmail.com', 'a74ad8dfacd4f985eb3977517615ce25', 2771231);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `email` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`email`, `product_id`, `name`, `quantity`, `price`, `img`) VALUES
('saash@gmail.com', 11, 'Idli', 1, 50, 'images/allday/4.jpg'),
('saash@gmail.com', 10, 'Masala Dosa', 1, 130, 'images/allday/3.jpg'),
('sauryathome@gmail.com', 23, 'Forest Fire', 1, 110, 'images/beverages/mocktails/1.jpg'),
('sauryathome@gmail.com', 8, 'Aloo Paratha', 1, 20, 'images/allday/1.jpg'),
('sauryathome@gmail.com', 12, 'Eggs', 1, 45, 'images/allday/5.jpg'),
('saash@gmail.com', 12, 'Eggs', 1, 45, 'images/allday/5.jpg'),
('sauryathome@gmail.com', 8, 'Aloo Paratha', 2, 40, 'images/allday/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `image_id` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `sub_cat` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `image_id`, `cat_id`, `product_title`, `product_price`, `product_desc`, `product_image`, `sub_cat`) VALUES
(8, 'alldayimg1', 'a1', 'Aloo Paratha', 20, 'Aloo parathas consist of unleavened dough stuffed with a spiced mixture of mashed potato, which is rolled out and cooked on a hot tawa with butter or ghee.Aloo paratha is usually served with butter, chutney, curd or Indian pickles in different parts of northern and western India.', 'images/allday/1.jpg', 'ad'),
(9, 'alldayimg2', 'a1', 'Poori Bhaji', 30, 'Regional dish of potatoes tossed With peanuts and local spices,served with Indian bread\r\n\r\n', 'images/allday/2.jpg', 'ad'),
(10, 'alldayimg3', 'a1', 'Masala Dosa', 130, 'Masala dosa is stuffed dosa. The two parts are the dosa and the stuffing. The dosa is made in the usual way by soaking rice and lentils overnight in water and then grinding it to a batter. The stuffing is made from boiled potatoes with a seasoning of mustard seeds and garnishing of grated coconut, coriander, and lemon juice.', 'images/allday/3.jpg', 'ad'),
(11, 'alldayimg4', 'a1', 'Idli', 50, '', 'images/allday/4.jpg', 'ad'),
(12, 'alldayimg5', 'a1', 'Eggs', 45, 'Boiled eggs are eggs (typically chicken eggs) cooked with their shells unbroken, usually by immersion in boiling water. Hard-boiled eggs are cooked so that the egg white and egg yolk both solidify, while for a soft-boiled egg the yolk, and sometimes the white, remain at least partially liquid.', 'images/allday/5.jpg', 'ad'),
(13, 'alldayimg6', 'a1', 'Country Breakfast', 300, '', 'images/allday/6.jpg', 'ad'),
(14, 'alldayimg7', 'a1', 'Pancakes', 100, '', 'images/allday/7.jpg', 'ad'),
(15, 'alldayimg8', 'a1', 'French Toost', 100, '', 'images/allday/8.jpg', 'ad'),
(16, 'alldayimg9', 'a2', 'Dough Bread', 65, '', 'images/allday/9.jpg', 'ads'),
(17, 'alldayimg10', 'a2', 'Tomato Shorba', 75, '', 'images/allday/10.jpg', 'ads'),
(19, 'alldayimg12', 'a2', 'Glazed Nachos', 85, '', 'images/allday/12.jpg', 'ads'),
(20, 'alldayimg13', 'a2', 'Lamb Seekh', 95, '', 'images/allday/13.jpg', 'ads'),
(21, 'alldayimg14', 'a2', 'Chicken Tikka', 95, '', 'images/allday/14.jpg', 'ads'),
(22, 'alldayimg15', 'a2', 'Paneer Tikka', 195, '', 'images/allday/15.jpg', 'ads'),
(23, 'mocktail1', 'b1', 'Forest Fire', 110, 'Basil raspberry tamarind water melon juice', 'images/beverages/mocktails/1.jpg', 'moc'),
(24, 'mocktail2', 'b1', 'Strawberry Spritzer', 120, '', 'images/beverages/mocktails/2.jpg', 'moc'),
(25, 'mocktail3', 'b1', 'Kiwi Ale', 100, '', 'images/beverages/mocktails/3.jpg', 'moc'),
(26, 'mocktail4', 'b1', 'Fruit Cup', 140, '', 'images/beverages/mocktails/4.jpg', 'moc'),
(27, 'mocktail5', 'b1', 'After Sunset', 240, 'Corriander grapefruit cranberry juice apple juice soda', 'images/beverages/mocktails/5.jpg', 'moc'),
(28, 'mocktail6', 'b1', 'Not A Martini', 340, '', 'images/beverages/mocktails/6.jpg', 'moc'),
(29, 'other1', 'b2', 'Carbonated water', 30, '', 'images/beverages/other/1.jpg', 'ob'),
(30, 'other2', 'b2', 'Tonic Water', 20, '', 'images/beverages/other/2.jpg', 'ob'),
(31, 'other3', 'b2', 'Aerated Beverages', 40, '', 'images/beverages/other/3.jpg', 'ob'),
(32, 'other4', 'b2', 'Himalayan', 45, '', 'images/beverages/other/4.jpg', 'ob'),
(33, 'other5', 'b2', 'Energy Drink', 75, '', 'images/beverages/other/5.jpg', 'ob'),
(34, 'other6', 'b2', 'Coconut Water', 55, '', 'images/beverages/other/6.jpg', 'ob'),
(35, 'coffee1', 'b3', 'Estate Tea', 70, '', 'images/beverages/coffee/1.jpg', 'ct'),
(36, 'coffee2', 'b3', 'House Blend Tea', 50, '', 'images/beverages/coffee/2.jpg', 'ct'),
(37, 'coffee3', 'b3', 'Single Coffee', 150, '', 'images/beverages/coffee/3.jpg', 'ct'),
(38, 'coffee4', 'b3', 'Espresso Coffee', 50, '', 'images/beverages/coffee/4.jpg', 'ct'),
(39, 'comfortmains1', 'c1', 'Mac and Cheese', 150, '', 'images/comfortmains/1.jpg', 'cm'),
(40, 'comfortmains2', 'c1', 'Shephard Pie', 200, '', 'images/comfortmains/2.jpg', 'cm'),
(41, 'comfortmains3', 'c1', 'Roast Chicken Basket', 400, '', 'images/comfortmains/3.jpg', 'cm'),
(42, 'comfortmains4', 'c1', 'Veg Lakra', 100, '', 'images/comfortmains/4.jpg', 'cm'),
(43, 'comfortmains5', 'c1', 'Nasi Goreng', 150, '', 'images/comfortmains/5.jpg', 'cm'),
(44, 'comfortmains6', 'c1', 'Rajma Masala', 150, '', 'images/comfortmains/6.jpg', 'cm'),
(45, 'comfortmains7', 'c1', 'Chicken Lababdar', 250, '', 'images/comfortmains/7.jpg', 'cm'),
(46, 'comfortmains8', 'c1', 'Penne Arrabbiate', 450, '', 'images/comfortmains/8.jpg', 'cm'),
(47, 'comfortmains9', 'c1', 'Farfalle Salsiccia', 150, '', 'images/comfortmains/9.jpg', 'cm'),
(48, 'comfortmains10', 'c1', 'Risotto Gamberi', 250, '', 'images/comfortmains/10.jpg', 'cm'),
(49, 'pci1', 'p', 'Rice Pudding', 100, '', 'images/cakes/c1.jpg', 'p1'),
(50, 'pci2', 'p', 'Almond Cake', 150, '', 'images/cakes/c2.jpg', 'p1'),
(51, 'pci3', 'p', 'Chocolate Brownie', 50, '', 'images/cakes/c3.jpg', 'p1'),
(52, 'pi1', 'p2', 'Rasmalie', 150, '', 'images/cakes/d1.jpg', 'p2'),
(53, 'pi2', 'p2', 'Chocolate Mousse', 100, '', 'images/cakes/d2.jpg', 'p2'),
(54, 'pi3', 'p2', 'Sundae', 200, '', 'images/cakes/d3.jpg', 'p2'),
(55, 'po1', 'p3', 'Bombay Icecream', 250, '', 'images/cakes/i1.jpg', 'p3'),
(56, 'po2', 'p3', 'Vanilla', 200, '', 'images/cakes/i2.jpg', 'p3'),
(57, 'po3', 'p3', 'Butter Scotch', 100, '', 'images/cakes/i3.jpg', 'p3'),
(58, 'others1', 'o1', 'Herb Burger', 120, '', 'images/others/b1.jpg', 'b1'),
(59, 'others2', 'o1', 'Lamb Burger', 110, '', 'images/others/b2.jpg', 'b1'),
(60, 'others3', 'o1', 'Schnitzel Burger', 150, '', 'images/others/b3.jpg', 'b1'),
(61, 'pizza1', 'o2', 'Margherita Pizza', 250, '', 'images/others/p1.jpg', 'p1'),
(62, 'pizza2', 'o2', 'Vegetariana Pizza', 200, '', 'images/others/p2.jpg', 'p1'),
(63, 'pizza3', 'o2', 'Papperoni Pizza', 400, '', 'images/others/p3.jpg', 'p1'),
(64, 'chinese1', 'o3', 'Hakka Noodles', 150, '', 'images/others/c1.jpg', 'ch1'),
(65, 'chinese2', 'o3', 'Schezwan Noodles', 170, '', 'images/others/c2.jpg', 'ch1'),
(66, 'chinese3', 'o3', 'Gravy Roll', 160, '', 'images/others/c3.jpg', 'ch1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
