-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 04:53 PM
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
-- Database: `phpadminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `navbar_status` tinyint(1) DEFAULT 0,
  `status` tinyint(1) DEFAULT 0 COMMENT '0=visible,1=hidden,2=delete',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`) VALUES
(8, 'Farming blog', 'rrr', 'The agricultural crop year in India is from July to June. The Indian cropping season is classified into two main seasons-(i) Kharif and (ii) Rabi based on the monsoon. The Kharif farming seasons is from July –October during the south-west monsoon and the Rabi farming seasons is from October-March (winter).\r\n\r\nThe crops grown between March and June are summer crops. Pakistan and Bangladesh are two other countries that are using the term ‘kharif’ and ‘rabi’ to describe their cropping patterns. The terms ‘kharif’ and ‘rabi’ originate from the Arabic language where Kharif means autumn and Rabi means spring.', 'd', 'dddddddddddd', 'd', 0, 0, '2023-03-12 17:46:42'),
(9, 'shaswat gusain', 'rrr', 'xcx', 'xx', 'xxx', 'xxx', 0, 2, '2023-03-13 01:20:37'),
(10, 'shubham', 'd', 'd', 'd', 'd', 'd', 0, 2, '2023-03-13 02:52:48'),
(11, 'new schemes', 'fsaffsa', 'The Government launches a central government scheme for agriculture in India to address India’s agricultural, social and economic welfare. \r\n\r\nThese agricultural schemes in India play a vital role in solving many agriculture or socio-economic problems, and every individual or person of India must be aware of new scheme for farmers or govt schemes for farmers.\r\nThese agriculture or government schemes are generated or launched by the Government of India for better employment and wealth creation for farmers or other citizens. The goal of government schemes for farmers in India is to develop and innovate new services and increase the employment and agriculture rate in India.', 'fsafs', 'fsa', 'fasf', 0, 0, '2023-03-13 07:14:56'),
(14, 'shaswat', 'c', 'c', 'c', 'c', 'c', 0, 2, '2023-03-13 09:39:01'),
(15, 'y', 'd', 'd', 'd', 'd', 'x', 0, 2, '2023-03-13 11:32:49'),
(16, 'News', 'l', 'News related to farming every single day ', 'l', 'l', 'l', 0, 0, '2023-03-13 11:35:59'),
(17, 'css', 'css', 'css', 'csscs', 'ccs', 'csss', 0, 2, '2023-03-13 19:52:27'),
(18, 'x', 's', 's', 's', 's', 's', 0, 2, '2023-03-13 20:06:14'),
(19, 'shaswat', 's', 'ss', 's', 's', 's', 0, 2, '2023-03-14 02:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'shubham', 'n1@gmail.com', '07df3ab8f103b933b1a0c9d171bb2eba', '350bfcb1e3cfb28ddff48ce525d4f139'),
(2, 'shaswat', 'shaswatgusain1@gmail.com', '41fcba09f2bdcdf315ba4119dc7978dd', '8277e0910d750195b448797616e091ad'),
(3, 'c', 'c@q', '41fcba09f2bdcdf315ba4119dc7978dd', 'd2f2297d6e829cd3493aa7de4416a18f'),
(4, 'c', 'c@q', '41fcba09f2bdcdf315ba4119dc7978dd', 'd2f2297d6e829cd3493aa7de4416a18f'),
(8, 's', 'shaswatgusain1@gmail.com', '03c7c0ace395d80182db07ae2c30f034', '03c7c0ace395d80182db07ae2c30f034'),
(9, 'd', 'shaswatgusain1@gmail.com', 'd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_form`
--

CREATE TABLE `newsletter_form` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter_form`
--

INSERT INTO `newsletter_form` (`id`, `email`) VALUES
(5, 'n1@gmail.com'),
(6, 'c@q'),
(7, 'shaswatgusain1@gmail.com'),
(8, 'shaswatgusain1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '0=show,1=hide',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`) VALUES
(16, 8, 'Farming blog', 'x', '<p style=\"font-family: &quot;Minion Pro&quot;, serif; margin: 10px 0px 30px; color: rgba(0, 0, 0, 0.84); font-size: 22px; line-height: 1.48; letter-spacing: -0.013em;\">The agricultural crop year in India is from July to June. The Indian cropping season is classified into two main seasons-(i) Kharif and (ii) Rabi based on the monsoon. The Kharif farming seasons is from July –October during the south-west monsoon and the Rabi farming seasons is from October-March (winter).</p><p style=\"font-family: &quot;Minion Pro&quot;, serif; margin: 10px 0px 30px; color: rgba(0, 0, 0, 0.84); font-size: 22px; line-height: 1.48; letter-spacing: -0.013em;\">The&nbsp;<a href=\"https://www.toppr.com/guides/biology/crop-production-and-management/types-of-crops/\" style=\"color: rgb(85, 187, 234); text-decoration: none; transition: color 0.8s ease-out 0s; border: 0px;\">crops</a>&nbsp;grown between March and June are summer crops. Pakistan and Bangladesh are two other countries that are using the term ‘kharif’ and ‘rabi’ to describe their cropping patterns. The terms ‘kharif’ and ‘rabi’ originate from the Arabic language where Kharif means autumn and Rabi means spring.</p><p style=\"font-family: &quot;Minion Pro&quot;, serif; margin: 10px 0px 30px; color: rgba(0, 0, 0, 0.84); font-size: 22px; line-height: 1.48; letter-spacing: -0.013em;\"><br></p><p style=\"font-family: &quot;Minion Pro&quot;, serif; margin: 10px 0px 30px; color: rgba(0, 0, 0, 0.84); font-size: 22px; line-height: 1.48; letter-spacing: -0.013em;\">Farmers can be divided into different categories such as&nbsp;<em>large farmers</em>&nbsp;which have their own lands and use modern agricultural machinery and use types of equipment in their farms and hire people for cultivating the land.</p><p style=\"font-family: &quot;Minion Pro&quot;, serif; margin: 10px 0px 30px; color: rgba(0, 0, 0, 0.84); font-size: 22px; line-height: 1.48; letter-spacing: -0.013em;\">The second type of farmers is small farmers who have their own smaller land than large farmers. As they do not earn much money, they grow crops to meet their family’s food requirements. They have to borrow money for&nbsp;<a href=\"https://www.toppr.com/guides/evs/seeds-and-seeds/seed/\" style=\"color: rgb(85, 187, 234); text-decoration: none; transition: color 0.8s ease-out 0s; border: 0px;\">seeds</a>, fertilizers and other things which are required to cultivate their fields.</p><p style=\"font-family: &quot;Minion Pro&quot;, serif; margin: 10px 0px 30px; color: rgba(0, 0, 0, 0.84); font-size: 22px; line-height: 1.48; letter-spacing: -0.013em;\">The third types of farmers are called Agricultural labourers which are landless farmers. They hardly produce enough crops to meet their family’s requirements. For regular&nbsp;<a href=\"https://www.toppr.com/guides/general-awareness/economy/national-income/\" style=\"color: rgb(85, 187, 234); text-decoration: none; transition: color 0.8s ease-out 0s; border: 0px;\">income</a>, they work on other farmer’s land.</p><p style=\"font-family: &quot;Minion Pro&quot;, serif; margin: 10px 0px 30px; color: rgba(0, 0, 0, 0.84); font-size: 22px; line-height: 1.48; letter-spacing: -0.013em;\">Small farmers do not have sufficient money for their needs. Therefore, they are forced to borrow money from lenders (Mukadam) to cultivate their lands. Moneylender or Mukadam is an agent who lends money. He explains to villagers in which areas they would go for the next six months. He also gives them some money as a&nbsp;<a href=\"https://www.toppr.com/guides/general-awareness/banks/loans/\" style=\"color: rgb(85, 187, 234); text-decoration: none; transition: color 0.8s ease-out 0s; border: 0px;\">loan</a>, for their expenses.</p><p style=\"font-family: &quot;Minion Pro&quot;, serif; margin: 10px 0px 30px; color: rgba(0, 0, 0, 0.84); font-size: 22px; line-height: 1.48; letter-spacing: -0.013em;\">Farmers borrow money from money lenders. There are so many reasons behind it, such as poor irrigation or sometimes no rainfall, crop failure, for buying seeds and fertilizers or fulfil their other needs, they required money. So everyone borrows money from the Mukadam. To pay back this money, they have to work for Mukadam. This non-institutional credit has often more harmful than beneficial to the farmers.</p><p style=\"font-family: &quot;Minion Pro&quot;, serif; margin: 10px 0px 30px; color: rgba(0, 0, 0, 0.84); font-size: 22px; line-height: 1.48; letter-spacing: -0.013em;\">After harvesting most of their crop goes in the settlement of the loan and with the little that is left, the family survive for a few months. For other months of the year, they have to find other work for their income and other expenses.</p>', '1678807311.jpg', 'x', 'x', 'x', 0, '2023-03-13 12:30:09'),
(18, 11, 'new schemes', 'rrr', '<h4 style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-weight: 700; line-height: 1.35; font-size: 18px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.4px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">1. Pradhan Mantri Krishi Sinchai Yojana (PMKSY)</span></h4><h4 style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-weight: 700; line-height: 1.35; font-size: 18px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.4px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\"><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\"><i style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">“Har Khet ko Pani”</i></span>&nbsp;slogan by&nbsp;<span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\"><i style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">“Prime Minister Krishi Sinchai Yojana”</i></span>.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\">The Government of India resolves the high accord needed for water preservation and its administration.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">With this impact,&nbsp;</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Pradhan Mantri Krishi Sinchayee Yojana (PMKSY)</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">&nbsp;has detailed with the :</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Vision&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Government’s vision is to spread the inclusion of the water system ‘Har Khet ko pani’ and improve water use proficiency.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Mission&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Government has decided to achieve ‘More harvest per drop’ in an engaging way with start to finish arrangement on source creation, distribution, the board, field application and development exercises for farmers.</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\"><br></span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\"></span></p></span></h4><h4 style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-weight: 700; line-height: 1.35; font-size: 18px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.4px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">2. Pradhan Mantri Fasal Bima Yojana (PMFBY)</span></h4><h4 style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-weight: 700; line-height: 1.35; font-size: 18px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.4px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\"><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Indian Government has started the&nbsp;</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Pradhan Mantri Fasal Bima Yojana (PMFBY)</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">&nbsp;to insure the crops and unite multiple persons who impact positively in the organization on a single platform. Government has a vision and mission for this plan.</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Vision</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">In future, the Government wants to see the farmers to stabilize their income and ensure their farming continuance.</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Mission&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Government has decided to provide insurance schemes and financial support to the farmers. They want to free the farmers and their failed crops from natural calamities, pests &amp; diseases.</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">They also want a farmer should be adaptable with new innovative and modern agriculture activities along with he/she should ensure with the flow of the income to the agriculture sector which the Government decides.&nbsp;</span></p></span></h4><h4 style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-weight: 700; line-height: 1.35; font-size: 18px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.4px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">3. National Mission For Sustainable Agriculture (NMSA)</span></h4><h4 style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-weight: 700; line-height: 1.35; font-size: 18px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.4px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\"><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Indian Government introduced the&nbsp;</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">National Mission for Sustainable Agriculture (NMSA)</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">&nbsp;to make agriculture activities more productive, sustainable, and flexible. With this scheme, the Government also looks for their vision and mission.</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Vision&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Government always seeks things that prove to be beneficial for the farmers. A vision which they see is that a farmer should be able to implement the objectives with new modern technologies in future.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Mission&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Government provides significant components as their mission,&nbsp;</span><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\"><i style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">“On Farm Water Management” (OFWM)</i></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">. Its objective is to increase the effective use of water by modern technologies such as small irrigation, efficient water consumption, and better distribution of channels.</span></p></span></h4><h4 style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-weight: 700; line-height: 1.35; font-size: 18px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.4px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">4. Paramparagat Krishi Vikas Yojana (PKVY)</span></h4><h4 style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-weight: 700; line-height: 1.35; font-size: 18px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.4px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\"><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">One of the most popular ministry of agriculture schemes or central government scheme is The&nbsp;</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Paramparagat Krishi Vikas Yojana (PKVY)</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">&nbsp;which encourages the farmers to implement traditional or Government schemes for organic farming in India.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Paramparagat Krishi Vikas Yojana (PKVY) comes under the central government scheme, the Indian Government provides financial help to the farmers of Rs. 50,000 per hectare every three years for organic process, certification, labelling, packaging and transportation in organic production. Government always sets their visions and missions with their schemes.</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Vision</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Government helps the farmers financially by this scheme and plans to make organic Indian farming, which helps grow our farmers mentally and economically. They will be able to understand organic farming and its advantages for our Indians.</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Mission</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">This scheme focuses on the welfare of farmers in organic farming. It focuses on reducing the ill or harmful effects of excessive use of chemical fertilizers and agro-chemicals by increasing organic manures, bio-fertilizers and bio-pesticides as much as possible.&nbsp;</span></p></span></h4><h4 style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-weight: 700; line-height: 1.35; font-size: 18px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.4px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">5. Kisan Credit Card (KCC)</span></h4><h4 style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-weight: 700; line-height: 1.35; font-size: 18px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: 0.4px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\"><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">To provide enough credit to the farmers for their farming or agriculture expenditures, the&nbsp;</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Kisan Credit Card (KCC)</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">&nbsp;scheme was launched as the central government scheme or agriculture scheme in 1998. Under these agricultural or central government scheme, the Government of India provides help to farmers with farm credit at the subsidized rate of 4% per annum as government subsidies for agriculture. It is a part of the Atma Nirbhar Bharat scheme.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Vision&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">In the coming time, the Government wants no farmer crying due to money and not seeing die. Therefore, the Modi government wants to help them in every way, such as by introducing the Kisan credit card scheme in India.&nbsp;&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">Mission&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Indian Government wants farmers to avail the benefits of Kisan Credit Card or subsidy schemes for farmers to the animals, farming, dairies and fisheries farmers for their working capital.&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Modi government has a great mission to cover 2.5 crore farmers under the KCC scheme and want to prove a better central government schemes for farmers. They want to raise the limit of existing free loans from Rs. 1 lakh to Rs.1.60 lakh.</span></p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; line-height: 1.8em; color: rgb(65, 65, 65); font-weight: 400; letter-spacing: 0.2px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; background: 0px 0px; overflow-wrap: break-word;\">The Government only wants the farmers to be Atma Nirbhar and not depend on others too much.&nbsp;</span></p></span></h4>', '1678807474.jpg', 's', 's', 'ss', 0, '2023-03-13 18:18:05'),
(19, 16, 'news', 's', '<p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: Heebo, sans-serif; font-size: 18px;\">We have launched the Change The Climate campaign in India. The aim is to tackle the effects of climate change, and help farmers restore biodiversity in farms while earning extra income.</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: Heebo, sans-serif; font-size: 18px;\">Climate change is having an adverse effect on the people of India and its economy.&nbsp;<a href=\"https://news.stanford.edu/press-releases/2019/04/22/climate-change-wnomic-inequality/\" style=\"color: rgb(233, 78, 44); text-decoration: none;\">A 2019 study by Stanford University</a>&nbsp;showed that India’s economy is 31 percent smaller than it would have been in the absence of global warming. At the forefront of these risks are farmers, in north Indian states such as Haryana and Punjab,&nbsp;<a href=\"https://qz.com/india/1802034/indias-retail-inflation-shows-rbi-must-consider-climate-change/\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"color: rgb(233, 78, 44); text-decoration: none;\">crop yields will decline by 15 to 17 percent</a>&nbsp;for every 2 degrees centigrade increase in temperature.</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: Heebo, sans-serif; font-size: 18px;\">To combat some of these risks, the Indian Government aims to have around 33 percent of tree cover by 2030. At the end of 2019, tree cover stood at about 24 percent. Out of this, about 22 percent was from government-controlled forests, while around 2 percent came from agro-forestry - farming practices that incorporate trees among crops.</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: Heebo, sans-serif; font-size: 18px;\">Our Change The Climate campaign aims to work towards making up for the remaining 9 percent of target forest cover and help farmers restore biodiversity in farms.</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: Heebo, sans-serif; font-size: 18px;\">After detailed farm surveys, soil sampling and water testing, farmers are chosen and farms are readied for tree-planting. Tree species are chosen by scientists and progressive local farmers, while sowing and nurturing techniques follow scientific principles to ensure survival.</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: Heebo, sans-serif; font-size: 18px;\">These trees will provide farmers with extra income, as well as restore biodiversity in their farms through a variety of trees -- timber, fruits, flower, herbs and shrubs. This extra income makes farmers resilient and more open to chemical-free farming, which is especially key to our work in Bhatinda, Punjab, which has been dubbed the cancer belt of India because of excessive chemical use.</p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-family: Heebo, sans-serif; font-size: 18px;\">Donors will have transparency through a QR code for each lot of 10,000 saplings. This QR includes GPS locations of farms, the plantation journey, quarterly monitoring reports and impact statistics on soil and carbon. For more information, follow our QR code links&nbsp;<a href=\"http://changetheclimate.co.in/company/MTI\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"color: rgb(233, 78, 44); text-decoration: none;\">here&nbsp;</a>and&nbsp;<a href=\"http://changetheclimate.co.in/company/MTQ\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"color: rgb(233, 78, 44); text-decoration: none;\">here</a>. Or watch our video below.</p>', '1678807620.jpg', 'd', 's', 's', 0, '2023-03-14 15:27:00'),
(20, 16, 'animals', 's', '<p class=\"c10\" style=\"margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-family: Barlow, sans-serif; font-size: 22px;\"><span class=\"c0 c9 c2\">Animal diseases routinely emerge from factory farming operations and put them at significant financial risk.</span></p><p class=\"c10\" style=\"margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-family: Barlow, sans-serif; font-size: 22px;\"><span class=\"c0\">Overcrowding and unmanaged waste as well as animal illness, infection, and stress all rank among the standard factory farming conditions that diminish animals’ ability to fend off disease and enhance the inevitability of outbreaks and spread. As of mid-2020, the Paris-based World Organisation for Animal Health (OIE) has identified 117 infections and transmissible illnesses affecting factory-farmed animals around the globe.</span><span class=\"c0 c11\" style=\"position: relative; font-size: 16.5px; line-height: 0; vertical-align: baseline; top: -0.5em;\"><a href=\"https://pivotfood.org/animal-diseases/#ftnt1\" id=\"ftnt_ref1\" style=\"color: rgb(13, 165, 196); text-decoration: none;\">[1]</a></span><span class=\"c0\">&nbsp;</span></p><p class=\"c10\" style=\"margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-family: Barlow, sans-serif; font-size: 22px;\"><span class=\"c0 c9 c2\">A number of financial risks are associated with animal diseases. Outbreaks can result in costly livestock losses as a result of both infection and the intentional culling of flocks or herds as well as supply chain interruptions, cessation of import/export activity, decreased consumer demand, diminished market prices, and significant reputational damage—even to factory farming operations whose livestock has not been directly affected.</span></p>', '1678807689.jpg', 's', 's', 's', 0, '2023-03-14 15:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `created_at`) VALUES
(10, 'shubham', '6398840580', 'gusainshubhaam991@gmail.com', '1', NULL),
(11, 'shaswat', '6398840580', 'shaswatgusain1@gmail.com', 'shah', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(4, 'shaswat', 'shaswatgusain1@gmail.com', '0763db6cdb0d31c7034b15af3249f662', 'farmer'),
(5, 'shubham', 'gusainshubhaam991@gmail.com', '3b6beb51e76816e632a40d440eab0097', 'consumer'),
(7, 'speedyshaswat', 'speedyshaswat@gandu.com', '6eea9b7ef19179a06954edd0f6c05ceb', 'consumer'),
(8, 'c', 'c@q', 'c4ca4238a0b923820dcc509a6f75849b', 'consumer'),
(9, 'shaswat', 'shaswatgusain1@gmail.com', 'f1290186a5d0b1ceab27f4e77c0c5d68', 'consumer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_form`
--
ALTER TABLE `newsletter_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `newsletter_form`
--
ALTER TABLE `newsletter_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
