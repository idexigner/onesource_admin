-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 04:37 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourcees_inquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_rent`
--

CREATE TABLE `available_rent` (
  `a_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `aname` varchar(255) DEFAULT NULL,
  `aphoneNumber` varchar(255) DEFAULT NULL,
  `acareOf` varchar(255) DEFAULT NULL,
  `acompleteAddress` varchar(255) DEFAULT NULL,
  `asocietyName` varchar(255) DEFAULT NULL,
  `atype` varchar(255) DEFAULT NULL,
  `aDemand` varchar(255) DEFAULT NULL,
  `anature` varchar(255) DEFAULT NULL,
  `aarea` varchar(255) DEFAULT NULL,
  `aareaDrop` varchar(255) DEFAULT NULL,
  `aDirection` varchar(255) DEFAULT NULL,
  `afloor` varchar(255) DEFAULT NULL,
  `afloorOther` varchar(255) DEFAULT NULL,
  `aroom` varchar(255) DEFAULT NULL,
  `aroomOther` varchar(255) DEFAULT NULL,
  `adocument` varchar(255) DEFAULT NULL,
  `adocumentOther` varchar(255) DEFAULT NULL,
  `aauthority` varchar(255) DEFAULT NULL,
  `aauthorityOther` varchar(255) DEFAULT NULL,
  `autility` varchar(255) DEFAULT NULL,
  `aProject` varchar(255) DEFAULT NULL,
  `aotherDetails` varchar(5000) DEFAULT NULL,
  `anearby` varchar(5000) DEFAULT NULL,
  `aotherFacilities` varchar(5000) DEFAULT NULL,
  `ahealthFacilities` varchar(5000) DEFAULT NULL,
  `aDues` varchar(255) NOT NULL,
  `apicName` varchar(255) NOT NULL,
  `aPicNumber` varchar(255) NOT NULL,
  `u_Id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_rent`
--

INSERT INTO `available_rent` (`a_id`, `date`, `aname`, `aphoneNumber`, `acareOf`, `acompleteAddress`, `asocietyName`, `atype`, `aDemand`, `anature`, `aarea`, `aareaDrop`, `aDirection`, `afloor`, `afloorOther`, `aroom`, `aroomOther`, `adocument`, `adocumentOther`, `aauthority`, `aauthorityOther`, `autility`, `aProject`, `aotherDetails`, `anearby`, `aotherFacilities`, `ahealthFacilities`, `aDues`, `apicName`, `aPicNumber`, `u_Id`) VALUES
(1, '', 'are aname', '12122121', 'care of', 'comeplte', 'soxiety', 'banglow', '211221', 'commercial', 'sdaffds', 'acre', 'corner', 'other', '3424', '[\"2beddd\",\"3beddd\",\"other\"]', 'sadsafd', '1221212', NULL, 'dsafdsfdsafdsa', NULL, '[\"lineWater\",\"electricity\",\"gas\"]', 'proejcet', 'otehre deatil', 'location fa', 'other faic', 'helath fac', '1221212121', '', '', 'guest'),
(2, '', 'ava', '121221', 'cacr', 'com', 'soc', 'plot', '12', 'residential', '2', 'sqfeet', 'corner', '4', '', '[\"3beddd\"]', '', '90yearLease', NULL, 'mda', NULL, '[\"electricity\"]', '', '', '', '', '', '', '', '', 'abc'),
(3, '', 'ava', '121221', 'cacr', 'com', 'soc', 'plot', '12', 'residential', '2', 'sqfeet', 'corner', '4', '', '[\"3beddd\"]', '', '90yearLease', NULL, 'mda', NULL, '[\"electricity\"]', '', '', '', '', '', '', '', '', 'abc'),
(4, '', 'ava test', '12', '', 'as', 'sa', 'banglow', '12', '', 'as', 'sqfeet', 'corner', '1', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '21', 'avai_[object HTMLInputElement]', '4', 'test'),
(5, '', 'ava1', '17', '', 'sa', 'wq', 'plot', '12', 'residential', 'asd', 'sqfeet', 'eastOpen', '1', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_ava117', '0', 'test2'),
(6, '', 'aviltesting', '988', '', '12', 'a', 'plot', '', '', 'q', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_aviltesting988', '0', 'test2'),
(7, '', '123', '21', '', '12', 'as', 'plot', '', '', '12', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_12321', '0', 'test6'),
(8, '', 'QW21', '21', '', 'QW', '12', 'plot', '33', '', 'QW', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_QW2121', '0', 'aAS'),
(10, '', 'aq', '876', '', '3', '3', 'plot', '', '', '3', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_aq876', '3', 'aAS'),
(11, '', 'aq', '876', '', '3', '3', 'plot', '', '', '3', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_aq876', '9', 'aAS'),
(12, '', 'aq', '876', '', '3', '3', 'plot', '333', '', '3', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_aq876', '9', 'aAS'),
(13, '', 'aq', '876', '', '3', '3', 'plot', '333', '', '3', 'sqfeet', 'westOpen', '', '', '', '', '30yearLease', '', 'kda', '', '', '', '', '', '', '', '', '', '', 'guest'),
(14, '', 'avilabel tsting', '12', '', '2', 's', 'plot', '2', 'residential', '2', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_avilabel tsting12', '0', 'aAS'),
(15, '', 'available le tesitn', '65', '', 'd', 'd', 'plot', '3', '', 'd', 'sqfeet', 'westOpen', '1', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_available le tesitn65', '0', 'aASaa'),
(16, '', 'as', '2', '', '2', 's', 'plot', '2', '', '2', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_as2', '0', 'aASaa'),
(17, '', 'avialbel', '12', '', '2', 's', 'plot', '2', '', '22', 'sqfeet', 'eastOpen', 'ground', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_avialbel12', '2', 'aASaates'),
(18, '', 'availeblads', '12', '', '2', 's', 'plot', '2', '', '22', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '30yearLease', NULL, 'kda', NULL, '[]', '', '', '', '', '', '', 'avai_availeblads12', '3', 'farTestFinal');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `p_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `careOf` varchar(255) DEFAULT NULL,
  `ranges` varchar(255) DEFAULT NULL,
  `societyName` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `nature` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `areaUnit` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `downPayment` varchar(255) DEFAULT NULL,
  `schedulePayment` varchar(255) DEFAULT NULL,
  `monthlyPayment` varchar(255) DEFAULT NULL,
  `floor` varchar(255) DEFAULT NULL,
  `floorOther` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `roomOther` varchar(255) DEFAULT NULL,
  `otherDetail` varchar(5000) DEFAULT NULL,
  `nearby` varchar(5000) DEFAULT NULL,
  `otherFacilities` varchar(5000) DEFAULT NULL,
  `healthFacilities` varchar(5000) DEFAULT NULL,
  `picName` varchar(255) NOT NULL,
  `picNumber` varchar(255) NOT NULL,
  `u_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`p_id`, `date`, `name`, `phone`, `careOf`, `ranges`, `societyName`, `type`, `nature`, `area`, `areaUnit`, `payment`, `downPayment`, `schedulePayment`, `monthlyPayment`, `floor`, `floorOther`, `room`, `roomOther`, `otherDetail`, `nearby`, `otherFacilities`, `healthFacilities`, `picName`, `picNumber`, `u_id`) VALUES
(22, '12/4/2019', 'name 1', '1221221', '', '4321', 'soc', 'house', 'residential', 'area', 'sqfeet', 'cheque', '', '', '', 'ground', '', '[\"2bedl\",\"3beddd\"]', '', '', '', '', '', 'pur_name 11221221', '3', 'sdsafasdfaaa'),
(23, '12/4/2019', 'purname', '12212', 'car', '121221121', 'sssss', 'banglow', 'residential', '12dsadsa', 'sqyards', 'cheque', '1212', '1221', '1207', '3', '', '[\"2bedl\",\"3beddd\"]', '', 'oit', 'near', 'fac', 'heal', 'pur_purname12212', '2', 'gue'),
(26, '12/4/2019', 'p232323', '11111', '', '11', '2ss', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', 'h', 'pur_p23232311111', '2', 'guq'),
(27, '12/4/2019', 'a', '2', '', '2', 's', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_a2', '2', 'guq'),
(28, '12/4/2019', 'wq', '21', '', '12', 'xss', 'banglow', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[\"2bedl\",\"3beddd\"]', '', '', '', '', '', 'pur_wq21', '2', 'gue'),
(30, '12/4/2019', 'zXxzc', '123', '', '21', 'zxc', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', 'qw', '', '', 'pur_zXxzc123', '2', 'gue'),
(31, '12/4/2019', 'zXxzc', '123', '', '21', 'zxc', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', 'qw', '', '', 'pur_zXxzc123', '2', 'gue'),
(32, '12/4/2019', 'sadsadsa', '21', '', '22', 'assa', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', 'qw', '1e2', 'cz', 'pur_sadsadsa21', '', 'gue'),
(33, '12/4/2019', 'as', '18', '', '1', '2s', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_as18', '2', 'gue'),
(34, '12/4/2019', 'xz', '12', '', '2', 'd', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_xz12', '3', 'gue'),
(35, '12/4/2019', 'faraz', '213', 'sad', '21', '21', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_faraz213', '8', 'gue'),
(36, '12/4/2019', 'ahmed', '099', '', '900000', 's', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_ahmed099', '3', 'gueqq'),
(37, '12/4/2019', 'asdasdassad', '12', '', '2', 'd', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_asdasdassad12', '1', 'gueqq'),
(38, '12/4/2019', 'ahfa', '12', '', '12', 'sa', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_ahfa12', '0', 'gueqq2'),
(39, '12/4/2019', 'far', '12', 's', '2', 's', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_far12', '7', 'far'),
(40, '12/4/2019', 'purtet', '12', '', '12', 'a', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_purtet12', '2', '<br /><b>Notice</b>:  Undefined index: uid in <b>C:xampphtdocsinquiry_demoindex.php</b> on line <b>18</b><br />'),
(41, '12/4/2019', 'puc', '12', '', '12', 'as', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_puc12', '6', 'test'),
(42, '12/4/2019', 's6', '2', '', '2', 'ds', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_s62', '3', 'test'),
(43, '12/4/2019', 'p2', '12', '', '2', 'xs', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_p212', '2', 'test'),
(44, '12/4/2019', 'as2', '21', '', '21', 'qq', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_as221', '2', 'test6'),
(45, '12/4/2019', '21', '21', '', '2', '2', 'plot', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_2121', '3', 'aAS'),
(46, '12/4/2019', 'far last', '12', '', '12', 's', 'plot', 'residential', '', 'sqfeet', 'cheque', '', '', '', 'ground', '', '[\"2bedl\",\"3beddd\"]', '', '', '', '', '', 'pur_far last12', '0', 'farTestFinal'),
(47, '12/4/2019', 'Faraz Ahmed', '123', '', '123', 'dwq', 'portion', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_Faraz Ahmed123', '2', 'test'),
(48, '12/4/2019', 'Faraz Ahmed', '123', '', '123', 'dwq', 'portion', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_Faraz Ahmed123', '2', 'test'),
(49, '12/4/2019', 'qwexax', '12', '', '213', 'dsa', 'portion', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_qwexax12', '2', 'test'),
(50, '12/4/2019', 'faraz2', '12312332', '', '321321', 'asd', 'flat', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_faraz212312332', '2', 'test'),
(51, '16/4/2019', 'f1chk', '98', '', '987', 'So', 'portion', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_f1chk98', '4', '1'),
(52, '16/4/2019', 'f2chk', '877', '', '3435', 'adasd', 'banglow', '', '', 'sqfeet', '', '', '', '', 'ground', '', '[]', '', '', '', '', '', 'pur_f2chk877', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `required_rent`
--

CREATE TABLE `required_rent` (
  `r_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `rname` varchar(255) DEFAULT NULL,
  `rphoneNumber` varchar(255) DEFAULT NULL,
  `rcareOf` varchar(255) DEFAULT NULL,
  `rrange` varchar(255) DEFAULT NULL,
  `rsocietyName` varchar(255) DEFAULT NULL,
  `rarea` varchar(255) DEFAULT NULL,
  `rareaDrop` varchar(255) DEFAULT NULL,
  `rtype` varchar(255) DEFAULT NULL,
  `rfloor` varchar(255) DEFAULT NULL,
  `rfloorOther` varchar(255) DEFAULT NULL,
  `rroom` varchar(255) DEFAULT NULL,
  `rroomOther` varchar(255) DEFAULT NULL,
  `rOtherDetails` varchar(5000) DEFAULT NULL,
  `rnearby` varchar(5000) DEFAULT NULL,
  `rotherFacilities` varchar(5000) DEFAULT NULL,
  `rhealthFacilities` varchar(5000) DEFAULT NULL,
  `u_id` varchar(255) NOT NULL,
  `rpicName` varchar(255) NOT NULL,
  `rPicNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `required_rent`
--

INSERT INTO `required_rent` (`r_id`, `date`, `rname`, `rphoneNumber`, `rcareOf`, `rrange`, `rsocietyName`, `rarea`, `rareaDrop`, `rtype`, `rfloor`, `rfloorOther`, `rroom`, `rroomOther`, `rOtherDetails`, `rnearby`, `rotherFacilities`, `rhealthFacilities`, `u_id`, `rpicName`, `rPicNumber`) VALUES
(1, '', 'asdf', '1234', 'wdfgh', '345', 'qwe', 'y777', 'sqfeet', 'portion', '2', '', '[\"1bedl\"]', '', '', '', '', '', 'guest', '', ''),
(2, '', 'req name', '121221', 'care of', '1212212', 'societ', '1212', 'sqyards', 'portion', 'other', '7', '[\"1bedl\",\"2beddd\"]', '', 'det', 'location', 'facilit', 'heal', 'guest', '', ''),
(3, '', 'req test', '1212', '', '12', 'xa', '', 'sqfeet', 'portion', 'ground', '', '[]', '', '', '', '', '', '<br /><b>Notice</b>:  Undefined index: uid in <b>C:xampphtdocsinquiry_demoindex.php</b> on line <b>18</b><br />', 'rent_[object HTMLInputElement]', '2'),
(4, '', 'req rent', '12', '', '432', 'soci', '', 'sqfeet', 'portion', 'ground', '', '[]', '', '', '', '', '', 'test', 'rent_[object HTMLInputElement]', '3'),
(5, '', 'QW', '3', '', '23', 'EE', '', 'sqfeet', 'plot', 'ground', '', '[]', '', '', '', '', '', 'test', 'rent_[object HTMLInputElement]', '3'),
(6, '', 'QW', '3', '', '23', 'EE', '', 'sqfeet', 'plot', '', '', '', '', '', '', '', '', 'guest', '', ''),
(8, '', 'reqtestst', '12', '', '2', 'ws', '', 'sqfeet', 'plot', 'ground', '', '[]', '', '', '', '', '', 'farTestFinal', 'rent_reqtestst12', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `s_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `sphoneNumber` varchar(255) DEFAULT NULL,
  `scareOf` varchar(255) DEFAULT NULL,
  `scompleteAddress` varchar(255) DEFAULT NULL,
  `ssocietyName` varchar(255) DEFAULT NULL,
  `stype` varchar(255) DEFAULT NULL,
  `sdemand` varchar(255) DEFAULT NULL,
  `snature` varchar(255) DEFAULT NULL,
  `sarea` varchar(255) DEFAULT NULL,
  `sareaDrop` varchar(255) DEFAULT NULL,
  `sdirection` varchar(255) DEFAULT NULL,
  `sfloor` varchar(255) DEFAULT NULL,
  `sfloorOther` varchar(255) DEFAULT NULL,
  `sroom` varchar(255) DEFAULT NULL,
  `sroomOther` varchar(255) DEFAULT NULL,
  `sdocument` varchar(255) DEFAULT NULL,
  `sdocumentOther` varchar(255) DEFAULT NULL,
  `sauthority` varchar(255) DEFAULT NULL,
  `sauthorityOther` varchar(255) DEFAULT NULL,
  `spayment` varchar(255) DEFAULT NULL,
  `spaymentOther1` varchar(255) DEFAULT NULL,
  `spaymentOther2` varchar(255) DEFAULT NULL,
  `spaymentOther3` varchar(255) DEFAULT NULL,
  `spaymentOther4` varchar(255) DEFAULT NULL,
  `sutility` varchar(255) DEFAULT NULL,
  `sproject` varchar(255) DEFAULT NULL,
  `sotherDetails` varchar(5000) DEFAULT NULL,
  `snearby` varchar(5000) DEFAULT NULL,
  `sotherFacilities` varchar(5000) DEFAULT NULL,
  `shealthFacilities` varchar(5000) DEFAULT NULL,
  `spicName` varchar(255) NOT NULL,
  `sPicNumber` varchar(255) NOT NULL,
  `u_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`s_id`, `date`, `sname`, `sphoneNumber`, `scareOf`, `scompleteAddress`, `ssocietyName`, `stype`, `sdemand`, `snature`, `sarea`, `sareaDrop`, `sdirection`, `sfloor`, `sfloorOther`, `sroom`, `sroomOther`, `sdocument`, `sdocumentOther`, `sauthority`, `sauthorityOther`, `spayment`, `spaymentOther1`, `spaymentOther2`, `spaymentOther3`, `spaymentOther4`, `sutility`, `sproject`, `sotherDetails`, `snearby`, `sotherFacilities`, `shealthFacilities`, `spicName`, `sPicNumber`, `u_id`) VALUES
(1, '12/4/2019', 'farazz', '12312', 'ad', 'wqqew', 'qwe', 'tt', '12', 'residential', '1212', 'sqfeet', 'westOpen', 'dummy,ground,1,other', 'asdf', 'dummy', '', 'other', 'adfafdafda', 'other', 'adsfafddfdsf', 'installment', '1', '2', '34', '4', 'dummy', 'adfafddf', '', '2', '3', '4', '', '', 'guest'),
(2, '12/4/2019', 'sal e name', '122121', 'care f', 'compl', 'socie', 'banglow', '1221', 'commercial', 'aasd', 'sqfeet', 'corner', '2', '', '[\"2bedl\"]', '', '', NULL, 'mda', NULL, '', '', NULL, NULL, NULL, '[]', '', '', '', '', '', '', '', 'guest'),
(3, '12/4/2019', 'sale name ', '12122121', 'care offff', 'xompol', 'oscie', 'banglow', '12212121', 'commercial', '1221', 'acre', 'corner', 'other', '8', '[\"1bedl\",\"3bedl\"]', '', '', NULL, 'mda', NULL, 'cash', '', NULL, NULL, NULL, '[\"lineWater\",\"electricity\"]', 'project', 'de', 'location failti', 'other facilit', 'health faciliteis', '', '', 'guest'),
(4, '12/4/2019', 'saletesta', '12', '', 'as', 'f', 'plot', '', '', 's', 'sqfeet', 'eastOpen', 'ground', '', '[\"3bedl\"]', '', '', NULL, 'mda', NULL, '', 'a', NULL, NULL, NULL, '[]', '', '', '', '', '', '', '', '<br /><b>Notice</b>:  Undefined index: uid in <b>C:xampphtdocsinquiry_demoindex.php</b> on line <b>18</b><br />'),
(5, '12/4/2019', 'saletestaaaa', '12', '', 'as', 'f', 'plot', '12', '', 's', 'sqfeet', 'eastOpen', 'ground', '', '[\"3bedl\"]', '', '', NULL, 'mda', NULL, '', '', NULL, NULL, NULL, '[]', '', '', '', '', '', '', '', '<br /><b>Notice</b>:  Undefined index: uid in <b>C:xampphtdocsinquiry_demoindex.php</b> on line <b>18</b><br />'),
(6, '12/4/2019', 'saletestas', '12', '', 'as', 'f', 'plot', '', '', 's', 'sqfeet', 'eastOpen', 'ground', '', '[\"3bedl\"]', '', '', NULL, 'mda', NULL, '', 'a', NULL, NULL, NULL, '[]', '', '', '', '', '', 'sale_saletestas12', '2', '<br /><b>Notice</b>:  Undefined index: uid in <b>C:xampphtdocsinquiry_demoindex.php</b> on line <b>18</b><br />'),
(7, '12/4/2019', 'sale test', '10', '', 'ss', 'cc', 'plot', '12', '', 's', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '', NULL, 'mda', NULL, '', '', NULL, NULL, NULL, '[]', '', '', '', '', '', '', '', 'test'),
(8, '12/4/2019', 'saletest', '12', '', 'qw', 's', 'plot', '', '', '22', 'sqfeet', 'westOpen', 'ground', '', '[]', '', '', NULL, 'kda', NULL, '', 'a', NULL, NULL, NULL, '[]', '', '', '', '', '', 'sale_saletest12', '3', 'farTestFinal'),
(10, '12/4/2019', 'Salee2w', '123', '', '21dsa', '123asd', 'portion', '', '', 'asdx', 'sqfeet', 'eastOpen', 'ground', '', '[]', '', '', NULL, 'builder', NULL, '', 'a', NULL, NULL, NULL, '[]', '', '', '', '', '', 'sale_Salee2w123', '6', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fatherName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `fatherName`, `address`, `username`, `pass`, `email`, `contact`, `role`, `url`) VALUES
(1, 'guest', '', '', 'guest', '123', 'guest@guest.com', '', 'guest', '37429861'),
(2, 'Hasham', 'Father', 'Address', 'hasham', '123', 'hashamahmedsiddiqui@hotmail.co.uk', '03122121212', 'admin', ''),
(3, 'chk', 'fath', 'add', 'idex', '123', 'farazahmed34296@gmail.com', '45453653', 'admin', '24253855'),
(4, 'chk2', 'dsa', '12', 'idexs', '12322', 'faraz_dj96@yahoo.com', '12321', 'admin', '79030780'),
(5, 'adminsaas', '21', '12', 'idexsad', '1232112', 'asd@asdasd.com', '12312', 'admin', '92185226');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_rent`
--
ALTER TABLE `available_rent`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `required_rent`
--
ALTER TABLE `required_rent`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_rent`
--
ALTER TABLE `available_rent`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `required_rent`
--
ALTER TABLE `required_rent`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
