-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 06:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eastern_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tb`
--

CREATE TABLE `about_tb` (
  `aid` int(200) NOT NULL,
  `afimage` varchar(200) NOT NULL,
  `asimage` varchar(200) NOT NULL,
  `atimage` varchar(200) NOT NULL,
  `aftimage` varchar(200) NOT NULL,
  `afthimage` varchar(200) NOT NULL,
  `asximage` varchar(200) NOT NULL,
  `asvimage` varchar(200) NOT NULL,
  `aetimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_tb`
--

INSERT INTO `about_tb` (`aid`, `afimage`, `asimage`, `atimage`, `aftimage`, `afthimage`, `asximage`, `asvimage`, `aetimage`) VALUES
(6, '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `uid` int(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `upassword` varchar(200) NOT NULL,
  `uimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`uid`, `uname`, `upassword`, `uimage`) VALUES
(1, 'Dominic', '1966', 'adminpic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `calidonb_tb`
--

CREATE TABLE `calidonb_tb` (
  `cbid` int(200) NOT NULL,
  `cbname` varchar(200) NOT NULL,
  `cbcat` varchar(200) NOT NULL,
  `cbdesc` longtext NOT NULL,
  `cbfsize` varchar(200) NOT NULL,
  `cbfbottle` varchar(200) NOT NULL,
  `cbssize` varchar(200) NOT NULL,
  `cbsbottle` varchar(200) NOT NULL,
  `cbtsize` varchar(200) NOT NULL,
  `cbtbottle` varchar(200) NOT NULL,
  `cbftsize` varchar(200) NOT NULL,
  `cbftbottle` varchar(200) NOT NULL,
  `cbfimage` varchar(200) NOT NULL,
  `cbsimage` varchar(200) NOT NULL,
  `cbtimage` varchar(200) NOT NULL,
  `cbftimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calidonb_tb`
--

INSERT INTO `calidonb_tb` (`cbid`, `cbname`, `cbcat`, `cbdesc`, `cbfsize`, `cbfbottle`, `cbssize`, `cbsbottle`, `cbtsize`, `cbtbottle`, `cbftsize`, `cbftbottle`, `cbfimage`, `cbsimage`, `cbtimage`, `cbftimage`) VALUES
(1, 'Calidon\'s Brandy', ' Brandy', 'Calidon\'s Brandy is distilled with fine spirits and aged by the traditional Calidonian system in the oak butts.\r\n\r\nIt retains its old tradition of high quality and is blended with flavour. It is a drink for all occasions whether on rocks, straight or mixed.', '750 ml', 'Bottle', '200 ml', 'PET Bottle', '120 ml', 'PET Bottle', '30 ml', 'Sachet', 'Brandy_A.png', 'Brandy_A.png', 'Brandy_C.jpg', 'Brandy_D.jpg'),
(2, 'Calidon\'s Herbal Cafe', 'Cafe Liqueur', 'Calidon\'sCafé liqueur is formulated with rich aroma, smooth and carefully\r\n\r\nroasted recipes that deliver a sustained physical stimulation and enduring energy level.', '120 ml', 'PET Bottle', '50ml', 'Sachet', '', '', '', '', 'Cafe_A.png', 'Cafe_C.jpg', 'Cafe_D.jpg', ''),
(3, 'Calidon\'s Eskala', 'Dry Gin', 'Calidon\'s Eskala Dry Gin is specially prepared to escalate your passion and set you on the right frame of mind to pursue that which is important to you.\r\n\r\nIt is filled with ideal ingredients to spur you to reach that zenith and fulfill that innermost passion you have already dreamed of.', '750 ml', 'Bottle', '120ml', 'PET Bottle', '', '', '', '', 'Eskala_A.png', 'Eskala_C.jpg', 'Eskala_D.jpg', ''),
(4, 'Calidon\'s SCHNAPPS', 'Schnapps', 'Calidon\'s ® Aromatic Schnapps consists of high quality ingredients of natural origins specially blended to produce the best Schnapps flavours, which can be enjoyed by lovers of spirits at all occasions especially for libation, picnics and traditional parties.\r\n\r\nCalidon\'s ® AROMATIC SCHNAPPS is a safe, free from impurities with an old age tradition of the highest quality which has been doggedly maintained even in this modern ear. Calidon\'s ® AROMATIC SCHNAPPS Remains the one and only aromatic schnapps that rises up to your taste anytime, anywhere. The feeling is real and the smoothness is ideal', '750 ml', 'Bottle', '', '', '', '', '', '', 'Schn_A.png', 'Schn_B.jpg', '', ''),
(5, 'Calidon\'s Ponche', 'Ponche', 'Calidon\'s Ponche is a sweet alcoholic beverage.\r\n\r\nIt is carefully prepared to suit the present generation. It can be diluted with fruit juice.', '750 ml', 'Bottle', '120ml', 'PET Bottle', '', '', '', '', 'Ponche_A.png', 'Ponche_D.jpg', '', ''),
(6, 'Calidon\'s TopSquad', 'Dark Rum', 'Calidon\'s Top Squad is a spirit drink made of the finest quality ingredients under strict hygiene conditions.\r\n\r\nA result of many years research into the Danish and Spanish distillations. Calidon�s Top Squad Blended Dark Rum is an acclaimed special treat for mature minds in every occasion.', '750 ml', 'Bottle', '120ml', 'PET Bottle', '', '', '', '', 'Squad_A.png', 'Squad_C.jpg', '', ''),
(7, 'Calidon\'s Varga', ' Dry Gin', 'Calidon\'s Varga Dry Gin is safe, free from impurities with an age old tradition of the highest quality which has been doggedly maintained even in the modern era.\r\n\r\nVarga Dry Gin remains one and only gin that rises up to your taste anytime anywhere.', '750 ml', 'Bottle', '200ml', 'PET Bottle', '120 ml', 'PET Bottle', '30ml', 'Sachet', 'Varga_A.png', 'Varga_B.jpg', 'Varga_C.jpg', 'Varga_D.jpg'),
(8, 'Calidon\'s White Rum', 'White Rum', 'Calidon\'s Imperial White Rum is a light bodied drink that is carefully distilled under the strictest hygienic conditions\r\n\r\nto produce a natural smooth taste. It can be blended with fruit juice or served with ice rocks.', '750 ml', 'Bottle', '120ml', 'PET Bottle', '30ml', 'Sachet', '', '', 'WRum_A.png', 'WRum_C.jpg', 'WRum_D.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_tb`
--

CREATE TABLE `event_tb` (
  `eid` int(200) NOT NULL,
  `etitle` varchar(200) NOT NULL,
  `ewriteup` mediumtext NOT NULL,
  `elink` varchar(200) NOT NULL,
  `eimage` varchar(200) NOT NULL,
  `edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_tb`
--

INSERT INTO `event_tb` (`eid`, `etitle`, `ewriteup`, `elink`, `eimage`, `edate`) VALUES
(1, 'Wakeup Raves', 'Ofili Stephen wins the inaugural Brandy Almondia Music Challenge, impressing judges and audience with his exceptional performance at the grand finale', '', 'wakeuprave1.JPG', '2024-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `pbrand_tb`
--

CREATE TABLE `pbrand_tb` (
  `pbid` int(200) NOT NULL,
  `pbname` varchar(200) NOT NULL,
  `pbimage` varchar(200) NOT NULL,
  `pbdescription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pbrand_tb`
--

INSERT INTO `pbrand_tb` (`pbid`, `pbname`, `pbimage`, `pbdescription`) VALUES
(8, 'palmy cola', 'PALMY.png', 'Whatever happens, it is ideal that we devote our time to identify our inner roots, our heritage, where we come from and the societal bond that holds us together as a people. Palmy Cola is that reminder that we must not loose sight our roots. It is specially crafted to kick off that longing for the communion of best friends, where we gather and revel in the beauty things of life. Palmy Cola is filled with a unique palmy aroma that evokes that palm wine aromatic freshness that serves as an emblem of friendship and brotherhood.'),
(9, 'Aston Malt', 'malt.png', 'Aston Malt is a rich, creamy and satisfying drink that is fortified with essential vitamins and minerals required for your daily nourishment for a revitalized body.'),
(10, 'BALLAMOUR BITTERS', 'PREMIUM BALLAMOUR.png', 'A blend of Ballamour natural root extracts and pure botanical seasonings, hygienically prepared to offer you a lingering mouth-feel and keep you ecstatically charged all day long'),
(11, 'GRANDEUR EMPEROR', 'emperor.png', 'Grandeur Emperor, a lively bouquet of Pinot Noir, Merlot and Chardonnay that\'s perfectly crafted to deliver a full-bodied velvety wine that unravels slowly on the palate with a fruity finish and ripe tannin taste that leaves you wanting for more. This vintage gets even better with every sip.'),
(12, 'Wake up', 'WAKEUP.png', 'Wake Up Vodka Mixed Power Drink is a crisp, refreshing, tasty vodka mixed with an invigorating taste. It\'s designed to boost your momentum to carry out your daily tasks and provide you with the required energy to make it through the day. Wake Up Vodka Mixed Power Drink contains taurine and other essentials supplements that will accelerate your metabolism, maintain your muscle strength, and improve your mental and athletic performance.'),
(13, 'MERRY MAUSA', 'mausa.png', 'Blend of carefully selected recipes to kick off that spirit of celebration in you. Enriched with healthy full body grape, Merry Mausa delivers an overwhelming and refreshing sensuous aromas to keep you in that mood at all times.'),
(14, 'WHISKY ELEGAMON', 'whisky.png', 'It\'s been our promise that Whisky of International Standard will be manufactured in Nigeria and here it is. Whisky Elegamon is a reflection of a painstaking aging resulting in a sense of balance infused with a strong aroma of oak, vanilla and frosting.'),
(15, 'BRANDY ALMONDIA V.S.O.P', 'brandy.png', 'The inspiration for Brandy Almondia came from the fact that Nigerians are very stylish and very quality conscious. The rate at which we patronize foreign products is amazing. I began to ask myself how do we contribute and how do we take advantage of our local consumption capacity instead of depending on imported product'),
(16, 'OMEGA AROMATIC SCHNAPPS', 'omega.png', 'Omega Aromatic Schnapps is the conclusion of concerted efforts of the Research and Development of Eastern Distilleries and Food industires Limited (EDFI) into the ancient Dutch tradition of spirit flavour popularly known and called schnapps.'),
(17, 'VARGA SUPER PREMIUM DRY GIN', 'Varga.png', '...is a testimony of more than two decades of EDFI\'s passion for Quality and Excellenc e.Redistilled from premium neutral spirit of Agricultural origins with the purest of water and botanicals...'),
(18, 'merry maurri', 'merrymousa.png', 'Crisp and stylish with a velvety finely-carbonated fruit body designed to offer you a premium sparkling wine with a light oak aroma and a rich taste that stays with you all the time.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_tb`
--
ALTER TABLE `about_tb`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `calidonb_tb`
--
ALTER TABLE `calidonb_tb`
  ADD PRIMARY KEY (`cbid`);

--
-- Indexes for table `event_tb`
--
ALTER TABLE `event_tb`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `pbrand_tb`
--
ALTER TABLE `pbrand_tb`
  ADD PRIMARY KEY (`pbid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_tb`
--
ALTER TABLE `about_tb`
  MODIFY `aid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `uid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calidonb_tb`
--
ALTER TABLE `calidonb_tb`
  MODIFY `cbid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_tb`
--
ALTER TABLE `event_tb`
  MODIFY `eid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pbrand_tb`
--
ALTER TABLE `pbrand_tb`
  MODIFY `pbid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
