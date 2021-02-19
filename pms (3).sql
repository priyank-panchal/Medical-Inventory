-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 08:27 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_email` varchar(40) NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'ZalaTejasviba9906@gmail.com', 'Tejasvi@123'),
(2, 'admin@gmail.com', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(5) NOT NULL,
  `area_name` varchar(15) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `pincode`, `city_id`) VALUES
(1, 'bapunagar', 380024, 1),
(2, 'Odhav', 382415, 1),
(3, 'narol', 382405, 1),
(4, 'naroda', 382330, 1),
(5, 'krishnanagar', 389992, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(5) NOT NULL,
  `brand_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'johnsons & johnsons'),
(2, 'himalya'),
(3, 'Nestle'),
(4, 'P & G'),
(5, 'Nevia'),
(6, 'Vaseline'),
(7, 'Colgate'),
(8, 'Crocin'),
(9, 'Amul'),
(10, 'Horlicks'),
(11, 'Imoduim'),
(12, 'Paracetamol'),
(14, 'acrod life care');

-- --------------------------------------------------------

--
-- Table structure for table `cart_temp`
--

CREATE TABLE `cart_temp` (
  `cart_id` int(5) NOT NULL,
  `session_id` text NOT NULL,
  `p_qty` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `cart_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_temp`
--

INSERT INTO `cart_temp` (`cart_id`, `session_id`, `p_qty`, `p_id`, `cart_date`) VALUES
(77, '78gjv7fp8sfqdbvf3ptflrlpvk', 1, 1, '2020-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(5) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Personal care'),
(2, 'Health Care'),
(3, 'Baby Care'),
(4, 'Medical Supllies'),
(5, 'Home clean');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `co_id` int(5) NOT NULL,
  `session_id` text NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `city_id` int(5) NOT NULL,
  `area_id` int(5) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `contact_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`co_id`, `session_id`, `name`, `address`, `city_id`, `area_id`, `email_id`, `contact_no`) VALUES
(1, 'eku0feeb51uci3h5jag01daqo6', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(2, 'ev2s7uul6368vhdmp33oq64bgu', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(3, 'k1k812p85cgfuu3s34po5umbhk', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(4, 'ct9fponi6qjrdoo4svi733lji9', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(5, '5j4h4nh36ric01mf6u6bs4k48j', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(6, 'il67ja1cfci08j9l81dr0rgg7a', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(7, 'i6htk0pna4givelmftn1k6voul', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(8, 'm0pttknftq9t61ke1i4h68scgr', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(9, '6a85dotn6ittif1h6nk6hf6qhi', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(10, 'ujhdatmkqh5ghn2nk6gj9791q5', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(11, 'n8b4htp90rj1hv0jt0klppsgdm', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(12, 'lfveg1753f20l5g3rtti1r8qvm', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 3698521470),
(13, '78gjv7fp8sfqdbvf3ptflrlpvk', 'Priyank', '2/6 chandrabag society part-1 bapunagar', 1, 1, 'priyankpanchal872000@gmail.com', 9825678477);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `area_id` int(5) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` text NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `area_id`, `gender`, `address`, `contact_no`, `email_id`, `Password`) VALUES
(1, 'yash', 1, 'male', 'fjeiefieejfief', 9825678476, 'yash2000@gmail.com', 'Cusomer@12'),
(2, 'Priyank', 1, 'Male', '2/6 chandrabag society part-1 bapunagar', 3698521470, 'priyankpanchal872000@gmail.com', 'Priyank@1'),
(3, 'Tejasvi', 1, 'Female', '68 rajdeep park ', 6355851261, 'tejasvi@gmail.com', 'teju');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `d_id` int(5) NOT NULL,
  `In_id` int(5) NOT NULL,
  `date_delivery` date NOT NULL,
  `e_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`d_id`, `In_id`, `date_delivery`, `e_id`) VALUES
(1, 1, '2020-04-11', 7);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_status`
--

CREATE TABLE `delivery_status` (
  `ds_id` int(5) NOT NULL,
  `d_id` int(5) NOT NULL,
  `date_ds` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_status`
--

INSERT INTO `delivery_status` (`ds_id`, `d_id`, `date_ds`, `status`) VALUES
(1, 1, '2020-04-01', 'dispatched'),
(2, 1, '2020-04-01', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(5) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `contact_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `address`, `email_id`, `password`, `contact_no`) VALUES
(6, 'Priyank', '                                  ', 'priyank@gmail.com', 'P', 9825678475),
(7, 'Dhaval', '54 narol ahmedabad                                                    \r\n                                                                                                    \r\n                                                                                                    \r\n                                                ', 'dhaval@gmail.com', '', 8322244446);

-- --------------------------------------------------------

--
-- Table structure for table `expire_date`
--

CREATE TABLE `expire_date` (
  `expire_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `p_qty` int(5) NOT NULL,
  `expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `feedback_date` date NOT NULL,
  `feedback_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `p_id`, `c_id`, `feedback_date`, `feedback_des`) VALUES
(1, 6, 2, '2020-03-11', 'this is use full product ..');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `In_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `shipping_charges` int(5) NOT NULL,
  `tax` float NOT NULL,
  `grand_total` int(5) NOT NULL,
  `date_In` date NOT NULL,
  `discount` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`In_id`, `c_id`, `total`, `shipping_charges`, `tax`, `grand_total`, `date_In`, `discount`) VALUES
(1, 2, 1040, 0, 187.2, 936, '2020-03-28', '104'),
(2, 2, 989, 0, 178.02, 890, '2020-03-28', '98.9'),
(3, 2, 1290, 0, 232.2, 1161, '2020-03-28', '129'),
(4, 2, 159, 49, 28.62, 192, '2020-03-28', '15.9'),
(5, 2, 300, 49, 54, 319, '2020-04-01', '30');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `pr_id` int(5) NOT NULL,
  `In_id` int(5) NOT NULL,
  `image` text NOT NULL,
  `date_pr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(5) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `brand_id` int(5) NOT NULL,
  `p_price` int(9) NOT NULL,
  `subcategory_id` int(5) NOT NULL,
  `image` text NOT NULL,
  `u_pre` varchar(4) NOT NULL,
  `expiry_date` date NOT NULL,
  `description` text NOT NULL,
  `year` int(5) NOT NULL,
  `size` text NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `brand_id`, `p_price`, `subcategory_id`, `image`, `u_pre`, `expiry_date`, `description`, `year`, `size`, `qty`) VALUES
(1, 'Body lotion', 3, 300, 1, '190bodilotion.png', 'no', '2020-03-31', 'this is use for skin ', 2020, '300ML', 19),
(2, 'Sun Cream', 2, 150, 1, '606suncream.png', 'no', '2023-07-08', 'Protects skin from tanning. Protects against sun damage. Suitable for all skin types.  Dermatologically tested.', 2020, '50ml', 25),
(3, 'Winter cream', 6, 100, 1, '223vaselinecream.jpg', 'no', '2023-02-09', 'Rejuvenate your skin with the original, Pure Skin Jelly from Vaseline. Formulated with 100% pure petroleum jelly, this skin protectant provides your dry skin with long-lasting moisture. Its triple-purified advanced solution feels gentle on your skin. It gives you smooth and even looking skin avoiding dryness and preventing pore-clogging. It reaches your deepest skin cells and locks in the moisture giving you nourished and healthy skin. Whether its your heels, lips or your hands, the effective skin protectant keeps your skin from chapping, windburns, scrapes, and cuts. It is specially designed for itchy dry skin and is ideal to use during the harsh winter season. This is a 21 g pack that can be carried easily while you travel!', 2020, '20g', 35),
(4, 'Baby Body lotion', 2, 243, 6, '382winter cream.png', 'no', '2023-10-31', 'A Specially formulated soft cream for dry cheeks, tender noses, rubbed elbows and knees. Olive Oil improves Skin lustre, Country Mallow, an anti-oxidant, protects and soothes skin.', 2020, '200ml', 47),
(5, 'Nestlé CEREGROW Fortified Mult', 3, 200, 5, '739babyfood_nestle.jpg', 'no', '2023-10-31', 'This is a Vegetarian product.\r\nA nutrient dense junior cereal with the goodness of multigrain, milk and fruits for 2-5 year olds\r\nA rich source of Iron for regular cognitive development and 17 vitamins & minerals\r\nContains Protein, Vitamin A, C, and D, an Calcium that help in growth & Development\r\nFree from preservatives and flavours, especially made for your little one\r\nBag-in-Box format ensures enhanced safety, hygiene and convenience\r\nContact_us on : [ 1800-103-1947 , Tel: +91-124-412-1212 ] Customer Care: wecare@in.nestle.com;', 2020, '300g', 48),
(6, 'Colgate Mouthwash - Plax Fresh', 7, 30, 4, '703mouthfreshner.png', 'no', '2023-02-09', 'Colgate Plax Fresh Tea Mouthwash contains natural tea extracts for a refreshing and pleasant tea aroma. This mouthwash removes upto 99.9% germs thereby providing 12 hour protection against Plaque and Germs. This mouthwash has an alcohol free formulation. Colgate plax mouthwash helps get rid of bad breath, with a tingling minty flavour to keep you feeling fresh. Use Colgate Plax twice a day after brushing for a cleaner, fresher, healthier mouth. Enjoy long lasting freshness with this great taste, no burn mouthwash. It protects against germ build-up and helps prevent cavities.', 2020, '250ml', 48),
(7, 'Colgate MaxFresh Toothpaste - ', 7, 89, 4, '995colgate.jpg', 'no', '2023-07-08', 'Colgate MaxFresh Peppermint Ice Gel Toothpaste comes with cooling crystals which help in keeping you refreshed for a long time. Experience intense cooling and a refreshing blast of peppermint ice to transform your day and fight cavities at the same time. It keeps germ build-up at bay and maintains a healthy and refreshing oral hygiene. The clear blue gel toothpaste also whitens your teeth with every brush, so you can smile with a never before confidence! Colgate is India’s No. 1 recommended toothpaste brand and offers unique oral hygiene solutions to ensure complete protection against germs and plague build-up.', 2020, '150g', 48),
(8, 'CROCIN PAIN RELIEF TABLET', 8, 53, 9, '484crocin_painRelief.jpg', 'yes', '2023-07-09', 'CROCIN PAIN RELIEF TAB', 2020, '1 streap', 37),
(9, 'Amul Pro Whey Protein - Malt B', 9, 300, 8, '815weight.jpg', 'no', '2023-02-28', 'Amul pro whey protein malt beverage with malt is the most excellent energy drinking which is been made from best healthy flours and natural grains. It also contains Whey Protein, which is measured as Complete Protein as it contains all the essential amino acids. It is easy to digest and provides fast nourishment to muscles.', 2020, '500g', 39),
(10, 'Horlicks Health and Nutrition ', 10, 235, 7, '548health-drinks.jpg', 'no', '2023-10-31', 'This is a Vegetarian product.\r\nHealth Drink that has nutrients to support immunity.\r\nClinically proven to improve 5 signs of growth\r\nClinically proven to make kids Taller, Stronger & Sharper\r\nScientifically proven to improve Power of Milk', 2020, '250g', 48),
(11, 'PARACETAMOL', 12, 20, 10, '776279medicine.jpg', 'no', '2023-10-31', 'Panadol Actifast contains a unique formulation which gets to the source of pain fast. It acts faster than standard paracetamol tablets to give fast, effective pain relief. Suitable for: Headache, Rheumatic pain, Muscular ache/pain, Toothache, Period pain, Cold & flu symptoms- Fast acting formula- Effective pain relief- Gentle on the stomachThis section contains an overview of Panadol products and does not include full product information. Always read the label/leaflet and only use as directed. Contains paracetamol.', 2020, '1 streap', 48),
(13, 'Corex dx', 14, 56, 10, '980corex.jpg', 'yes', '2025-02-23', 'Chlorpheniramine Maleate (4mg/5ml) + Dextromethorphan Hydrobromide (10mg/5ml)', 2020, '100 ml', 48),
(18, 'Himalaya Gentle Refreshing Fac', 2, 130, 1, '302himalaya.jpg', 'no', '2030-01-01', 'Soap-free daily use face wash gel that gently cleanses your face and removes excess oil without over-drying. Enriched with Citron, a natural astringent and cooling agent that tones your skin, and Honey that deep cleanses and nourishes, it leaves your skin feeling softer, healthier and refreshed.', 2020, '150ML', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `pur_id` int(5) NOT NULL,
  `sup_id` int(5) NOT NULL,
  `pur_name` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `date_purchase` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_detail`
--

INSERT INTO `purchase_detail` (`pur_id`, `sup_id`, `pur_name`, `description`, `date_purchase`) VALUES
(1, 1, 'face care', 'this is use for skin', '2019-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return`
--

CREATE TABLE `purchase_return` (
  `pur_r_id` int(5) NOT NULL,
  `pur_id` int(5) NOT NULL,
  `date_pur_return` date NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_return`
--

INSERT INTO `purchase_return` (`pur_r_id`, `pur_id`, `date_pur_return`, `reason`) VALUES
(4, 1, '2020-02-06', 'expired this product');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sd_id` int(5) NOT NULL,
  `sd_date` date NOT NULL,
  `p_id` int(5) NOT NULL,
  `p_qty` int(5) NOT NULL,
  `In_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`sd_id`, `sd_date`, `p_id`, `p_qty`, `In_id`) VALUES
(1, '2020-03-28', 18, 8, 1),
(2, '2020-03-28', 4, 3, 2),
(3, '2020-03-28', 18, 2, 2),
(4, '2020-03-28', 1, 3, 3),
(5, '2020-03-28', 18, 3, 3),
(6, '2020-03-28', 8, 3, 4),
(7, '2020-04-01', 1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(5) NOT NULL,
  `subcategory_name` text NOT NULL,
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(1, 'skin care', 1),
(2, 'Hair Care', 1),
(3, 'Face Care', 1),
(4, 'Oral Care', 1),
(5, 'Baby Food', 3),
(6, 'Baby needs', 3),
(7, 'Health drinks', 2),
(8, 'weight management', 2),
(9, 'Pain Relief', 2),
(10, 'medicines', 4),
(11, 'Equipment', 4),
(12, 'fenail', 5);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(5) NOT NULL,
  `sup_name` varchar(25) NOT NULL,
  `sup_address` text NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_name`, `sup_address`, `email_id`, `contact_no`, `password`) VALUES
(1, 'accord life care', 'nikol', 'priyank@gmail.com', 6699999999, 'Priyank@1'),
(3, 'cadila', '240 narol ahmdebad', 'cadila@gmail.com', 9825678476, 'Supplier@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `FORIEGN` (`city_id`) USING BTREE;

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_temp`
--
ALTER TABLE `cart_temp`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`co_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `e_id` (`e_id`),
  ADD KEY `In_id` (`In_id`);

--
-- Indexes for table `delivery_status`
--
ALTER TABLE `delivery_status`
  ADD PRIMARY KEY (`ds_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `expire_date`
--
ALTER TABLE `expire_date`
  ADD PRIMARY KEY (`expire_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`In_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `In_id` (`In_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `brand_id` (`brand_id`,`subcategory_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`pur_id`),
  ADD KEY `sup_id` (`sup_id`);

--
-- Indexes for table `purchase_return`
--
ALTER TABLE `purchase_return`
  ADD PRIMARY KEY (`pur_r_id`),
  ADD KEY `pur_id` (`pur_id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sd_id`),
  ADD KEY `p_id` (`p_id`,`In_id`),
  ADD KEY `sales_details_ibfk_1` (`In_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `FORIEGN` (`category_id`) USING BTREE;

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart_temp`
--
ALTER TABLE `cart_temp`
  MODIFY `cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `co_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `d_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery_status`
--
ALTER TABLE `delivery_status`
  MODIFY `ds_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expire_date`
--
ALTER TABLE `expire_date`
  MODIFY `expire_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `In_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `pr_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `pur_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_return`
--
ALTER TABLE `purchase_return`
  MODIFY `pur_r_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_temp`
--
ALTER TABLE `cart_temp`
  ADD CONSTRAINT `cart_temp_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`);

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`In_id`) REFERENCES `invoice_details` (`In_id`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`e_id`) REFERENCES `employee` (`e_id`);

--
-- Constraints for table `delivery_status`
--
ALTER TABLE `delivery_status`
  ADD CONSTRAINT `delivery_status_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `delivery` (`d_id`);

--
-- Constraints for table `expire_date`
--
ALTER TABLE `expire_date`
  ADD CONSTRAINT `expire_date_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`In_id`) REFERENCES `invoice_details` (`In_id`);

--
-- Constraints for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD CONSTRAINT `purchase_detail_ibfk_1` FOREIGN KEY (`sup_id`) REFERENCES `supplier` (`sup_id`);

--
-- Constraints for table `purchase_return`
--
ALTER TABLE `purchase_return`
  ADD CONSTRAINT `purchase_return_ibfk_1` FOREIGN KEY (`pur_id`) REFERENCES `purchase_detail` (`pur_id`);

--
-- Constraints for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD CONSTRAINT `sales_details_ibfk_1` FOREIGN KEY (`In_id`) REFERENCES `invoice_details` (`In_id`),
  ADD CONSTRAINT `sales_details_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
