-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 06:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 'Lorem ipsum', '063-555-222', 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Man', ''),
(2, 'Woman', '\r\n'),
(3, 'Kids', ''),
(4, 'Other', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_image`, `customer_ip`) VALUES
(2, 'testt', 'testt.testt@gmail.com', '555', '', '::1'),
(6, 'ivonna', 'ivonna.s@gmail.com', '555', '', '::1'),
(7, 'ivona', 'ivona.s@gmail.com', '1234', '', '::1'),
(20, 'ivana', 'ivana.skobic@gmail.com', '7896', '', '::1'),
(21, 'ana', 'ana.skobic@gmail.com', '444', '', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(14, 21, 50, 1733521016, 1, 'Medium', '2021-03-04', 'Complete'),
(15, 21, 16, 1733521016, 1, 'Small', '2021-03-04', 'pending'),
(16, 21, 45, 1733521016, 1, 'Small', '2021-03-04', 'pending'),
(17, 21, 50, 1733521016, 1, 'Medium', '2021-03-04', 'pending'),
(18, 21, 100, 5001136, 2, 'Small', '2021-03-04', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(3, 1733521016, 50, 'Back Code', 4569, 1234, '04/03/2021');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(14, 21, 1733521016, '14', 1, 'Medium', 'Complete'),
(15, 21, 1733521016, '17', 1, 'Small', 'pending'),
(16, 21, 1733521016, '22', 1, 'Small', 'pending'),
(17, 21, 1733521016, '24', 1, 'Medium', 'pending'),
(18, 21, 5001136, '13', 2, 'Small', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(12, 4, 2, '2021-02-06 18:18:33', 'Kosulja od Denima ', 'kosulja1.jpg', 'kosulja1a.jpg', 'kosulja1b.jpg', 30, 'ripped', '<p>Kosulja dugih rukava s preklopnim ovratnikom. Iskrizani donji rub. Kopcanje gumbima sprijeda.</p>'),
(13, 5, 2, '2021-02-06 18:20:53', 'Traperice Mom kroja S Sive', 'sivejeans1.jpg', 'sivejeans1a.jpg', 'sivejeans1b.jpg', 50, 'ripped', '<p>Traperice visokog struka s pet dzepova.Poderotine sprijeda i straga.&nbsp;</p>'),
(14, 5, 2, '2021-02-06 18:22:25', 'Traperice Mom kroja S', 'jeans1.jpg', 'jeans1a.jpg', 'jeans1b.jpg', 50, 'ripped', '<p>Traperice visokog struka s pet dzepova. Poderotine sprijeda i straga. Metalni gumb sprijeda.</p>'),
(15, 2, 2, '2021-02-06 18:23:26', 'Paket ogrlica s medaljnom', 'kocka1.jpg', 'kocka1a.jpg', 'kocka1b.jpg', 20, 'gold', '<p>Paket od dvije ogrlice</p>'),
(16, 4, 2, '2021-02-06 18:24:58', 'Kosulja od Popelina', 'bijelakos1.jpg', 'bijelakos1a.jpg', 'bijelakos1b.jpg', 45, 'white', '<p>Kosulja s ovratnikom i dugim rukavima sa spustenom ramenima i manzetama s naborima.</p>'),
(17, 4, 2, '2021-02-06 18:26:11', 'Majica s natpisom na prednjici', 'blackshirt1.jpg', 'blackshirt1a.jpg', 'blackshirt1b.jpg', 16, 'black', '<p>majica kratkih rukava s okruglim ovratnikom i kombiniranom porukom sprijeda.</p>'),
(18, 5, 2, '2021-02-06 18:32:15', 'Duge traperice sirokih nogavica', 'jeansrasp1.jpg', 'jeansrasp1a.jpg', 'jeansrasp1b.jpg', 60, 'ripped', '<p>Traperice visokog struka i sirokih nogavica. Isprani izgled s pet dzepova i poderotina sprijeda</p>'),
(19, 5, 2, '2021-02-06 18:34:07', 'Rebraste tajice s prorezima', 'crnatrap1.jpg', 'crnetrap1a.jpg', 'crnetrap1b.jpg', 36, 'black', '<p>Tajice viskog elasticnog struka. Prorezi sprijeda na rubovima nogavica.</p>'),
(20, 2, 2, '2021-02-06 18:36:08', 'Reljefne nausnice', 'nausnice1.jpg', 'naucnice1a.jpg', 'nausnice1b.jpg', 20, 'gold', '<p>Otvorene reljefne okrugle nausnice ucvrscene iglicom i leptir osiguracem</p>'),
(22, 4, 2, '2021-02-06 20:19:29', 'Kombinirana Sweather Majica s djevojkama', 'sarena1.jpg', 'sarena1a.jpg', 'sarena1b.jpg', 45, 'Hood', '<p>Majica sa printom</p>'),
(23, 4, 1, '2021-02-06 20:34:24', 'Majica Neon Print', 'crnasare1.jpg', 'crnasare1a.jpg', 'crnasare1b.jpg', 40, 't-shirt', '<p>Predimenzionirana majica s okruglim ovratniko, kratkim rukavima i kontrastnim otiscima sprijeda i straga.</p>'),
(24, 4, 1, '2021-02-06 20:35:41', 'Polo Majica', 'plavapolo1.jpg', 'plavapolo1a.jpg', 'plavapolo1b.jpg', 50, 'polo', '<p>Polo majica od pamuka. Redovni ovratnik, dugi rukavi s rebrastim ukrasima i henley za gumbe</p>'),
(25, 4, 1, '2021-02-06 20:36:53', 'Majica Fit Fit', 'obicnacrna1.jpg', 'obicnacrna1a.jpg', 'obicnacrna1b.jpg', 20, 'black', '<p>Istegnuta pamucna majica s okruglim vratom i kratkim rukavima</p>'),
(26, 4, 1, '2021-02-06 20:38:23', 'Duks sa Zip-om', 'tamna1.jpg', 'tamna1a.jpg', 'tamna1b.jpg', 50, 'duks', '<p>Dukserica sirokog krojas viskim ovratnikom s patentnim zatvaracem, dugim rukavima i rebrastim oblogama.</p>'),
(27, 5, 1, '2021-02-06 20:40:03', 'Hlace od pamuka', 'obicneplave1.jpg', 'obicneplave1a.jpg', 'obicneplave1b.jpg', 80, 'blue', '<p>Hlace od kompaktne pamucne tkanine. struk s nabranim detaljima na prednjem dzepovima.</p>'),
(28, 5, 1, '2021-02-06 20:41:47', 'Jogger Hlace', 'bez1.jpg', 'bez1a.jpg', 'bez1b.jpg', 50, 'bez', '<p>Hlace s elasticnim pojasom i podesivim vezicama. Dzepovi prednji i straznji</p>'),
(29, 5, 1, '2021-02-06 20:42:56', 'Osnovne Slim Fit Jeans', 'dzens1.jpg', 'dzens1a.jpg', 'dzens1b.jpg', 50, 'blue', '<p>Izblijedele traperice slim fit dizajna s pet dzepova.</p>'),
(30, 5, 1, '2021-02-06 20:44:08', 'Slim Fit Traperice 90-ih', 'crnee1.jpg', 'crnee1a.jpg', 'crnee1b.jpg', 50, 'black', '<p>TRaperice slim fit dizajna s pet dzepova. Izblijedeli efekt.</p>'),
(31, 1, 1, '2021-02-06 20:45:14', 'Tehnicka Jakna', 'plavajakna1.jpg', 'plavajakna1a.jpg', 'plavajakna1b.jpg', 100, 'blue', '<p>Jakna s prilagodljivom kapuljacom i dugim rukavima s elasticnim manzetama.</p>'),
(32, 1, 1, '2021-02-06 20:46:36', 'Svijelo Plava Jakna', 'tamnajakna1.jpg', 'tamnajakna1a.jpg', 'tamnajakna1b.jpg', 60, 'blue', '<p>Jakna s lagano podstavljenim interijerom. visoki vrat i dugi rukavi.</p>'),
(33, 1, 1, '2021-02-06 20:47:41', 'Kontrast Jakna Corduroy', 'crvenajakna1.jpg', 'crvenajakna1a.jpg', 'crvenajakna1b.jpg', 100, 'red', '<p>Jakna s ovratnikom kosulje dugim rukavima i zakopcanim lisicama.</p>'),
(34, 1, 1, '2021-02-06 20:48:46', 'Kasamirno-Blend Kaput', 'muskikaput1.jpg', 'muskikaput1a.jpg', 'muskikaput1b.jpg', 200, 'black', '<p>Kaput Sirokog kroja izradjen od mjesavine kasmira.</p>'),
(35, 3, 1, '2021-02-06 20:49:37', 'Crne Cizme ', 'gleznjace1.jpg', 'gleznjace1a.jpg', 'gleznjace1b.jpg', 80, 'black', '<p>Crne cizme chelsa</p>'),
(36, 3, 1, '2021-02-06 20:50:37', 'Kontrast Tenisice', 'tenemuske1.jpg', 'tenemuske1a.jpg', 'tenemuske1b.jpg', 70, 'white', '<p>Tenisice na vezanje. Okrenut prema sedam usica.</p>'),
(37, 3, 1, '2021-02-06 20:51:46', 'Crno bijele tenisice', 'crnebijele1.jpg', 'crnebijele1a.jpg', 'crnebijele1b.jpg', 80, 'black', '<p>Tenisice, zdepast podplat. tetro sportski stil</p>'),
(38, 3, 2, '2021-02-06 21:06:47', 'Kozni Lamferi s kopcom', 'zenaplava1.jpg', 'zenaplava1a.jpg', 'zenaplava1b.jpg', 80, 'blue', '<p>Ravne kozne natikace.</p>'),
(39, 3, 2, '2021-02-06 21:08:06', 'Ravne Sude Cizme do Koljena', 'smedjecizme1.jpg', 'smejdecizme1a.jpg', 'smedjecizme1b.jpg', 199, 'bez', '<p>Ravne kozne cizme preko koljena boje pijeska</p>'),
(40, 3, 2, '2021-02-06 21:09:33', 'Cizme visoka potpetica-carapa', 'carapa1.jpg', 'carapa1a.jpg', 'carapa1b.jpg', 70, 'brown', '<p>Camel gleznjace s visokom potpeticom</p>'),
(41, 3, 2, '2021-02-06 21:10:48', 'Vinilne Sandale ', 'staklene1.jpg', 'staklene1a.jpg', 'staklene1b.jpg', 60, 'bez', '<p>Sandale na visoku petu. prozirno remenje</p>'),
(42, 2, 2, '2021-02-06 21:12:05', 'Mini Krosbozijska Torba', 'torbaplava1.jpg', 'torbaplava1a.jpg', 'torbaplava1b.jpg', 40, 'blue', '<p>Plava mini torba s crossbody</p>'),
(43, 2, 2, '2021-02-06 21:12:53', 'Tote Torba', 'baggy1.jpg', 'baggy1a.jpg', 'baggy1b.jpg', 60, 'black', '<p>crna torba&nbsp;</p>'),
(44, 2, 2, '2021-02-06 21:14:00', 'Torba Lak Crna', 'crnozlatna1.jpg', 'crnozlatna1a.jpg', 'crnozlatna1b.jpg', 60, 'black', '<p>Crna torba na remenu.</p>'),
(45, 1, 2, '2021-02-06 21:22:04', 'Vuneni Kaput', 'zena1.jpg', 'zena1a.jpg', 'zena1b.jpg', 100, 'black', '<p>Krsatki kaput mjesavina vuna</p>'),
(46, 1, 2, '2021-02-06 21:23:14', 'Bez Vuneni Kaput', 'bezzena1.jpg', 'bezzena1a.jpg', 'bezzena1b.jpg', 180, 'bez', '<p>Kaput od mjesavine vune sadrzi ovrartnik i reverom</p>'),
(47, 1, 2, '2021-02-06 21:24:20', 'Denim Jakna', 'jaknapl1.jpg', 'jaknapl1a.jpg', 'jaknapl1b.jpg', 50, 'denim', '<p>Jakna s ovratnikom s dugim rukavima</p>'),
(48, 1, 2, '2021-02-06 21:25:38', 'Vodootporna Jakna', 'lila1.jpg', 'lila1a.jpg', 'lila1b.jpg', 50, 'lila', '<p>Obrezana jakna s visokim ovratnikom</p>'),
(49, 1, 2, '2021-02-06 21:26:55', 'Bikerska Jakna ', 'kozna1.jpg', 'kozna1a.jpg', 'kozna1b.jpg', 100, 'kozna', '<p>Jakna s dugim rukavima i s ovratnikom na reveru</p>'),
(50, 1, 3, '2021-02-06 21:40:16', 'Bez Djecji Kaput', 'djecakaput1.jpg', 'djecakaput1a.jpg', 'djecakapit1b.jpg', 60, 'bez', '<p>Kaput s ogrlicom</p>'),
(51, 1, 3, '2021-02-06 21:41:14', 'Satiny Bomber Jakna', 'zelena1.jpg', 'zelena1a.jpg', 'zelena1b.jpg', 50, 'zelena', '<p>Prosivena bomber</p>'),
(52, 4, 3, '2021-02-06 21:42:04', 'Majica s Natpisom', 'love1.jpg', 'love1a.jpg', 'love1b.jpg', 10, 'blue', '<p>Majica s kratkim rukavima</p>'),
(53, 4, 3, '2021-02-06 21:43:21', 'Mickey i Prijatelji Disney Majica', 'mickey1.jpg', 'mickey1a.jpg', 'mickey1b.jpg', 10, 'black', '<p>Majica okruglog vrata s dugim rukavima</p>'),
(54, 3, 3, '2021-02-06 21:44:33', 'Patike u Stilu Carape', 'plavedjeca1.jpg', 'plavedjeca1a.jpg', 'plavedjeca1b.jpg', 45, 'blue', '<p>Tenisice u stilu carape</p>'),
(55, 3, 3, '2021-02-06 21:45:42', 'Kozne tenisice', 'smedjedjeca1.jpg', 'smedjedjeca1a.jpg', 'smedjedjeca1b.jpg', 65, 'bez', '<p>kozne tenisice od kravlje koze</p>'),
(56, 5, 3, '2021-02-06 21:46:53', 'Kino Hlace s elasticnim detaljem', 'redd1.jpg', 'redd1a.jpg', 'redd1b.jpg', 30, 'red', '<p>Chino hlace s elasticnim pojasom</p>'),
(57, 5, 3, '2021-02-06 21:48:03', 'Traperice Tamne', 'tamnad1.jpg', 'tamnad1a.jpg', 'tamnad1b.jpg', 35, 'blue', '<p>TRaperice sa pet dzepova s podesivim unutarnjim pojasom</p>'),
(58, 5, 3, '2021-02-06 21:49:03', 'Paperbag traperice', 'djecadenim1.jpg', 'djecadenim1a.jpg', 'djecadenim1b.jpg', 40, 'ripped', '<p>Traperice s elasticnim pojasom</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Jackets & Coats', ''),
(2, 'Accessories', ''),
(3, 'Shoes', ''),
(4, 'Shirts', ''),
(5, 'Trousers & Jeans', ''),
(7, 'Belts', 'hasgiza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
