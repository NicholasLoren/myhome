-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 11:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhome_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `id` int(11) NOT NULL,
  `welcome_msg` varchar(450) NOT NULL,
  `about_info` varchar(450) NOT NULL,
  `our_work` varchar(450) NOT NULL,
  `city_one` varchar(200) NOT NULL,
  `office_one` varchar(450) NOT NULL,
  `location_one` varchar(450) NOT NULL,
  `phone1` varchar(32) NOT NULL,
  `city_two` varchar(200) NOT NULL,
  `office_two` varchar(450) NOT NULL,
  `location_two` varchar(450) NOT NULL,
  `phone2` varchar(32) NOT NULL,
  `city_three` varchar(200) NOT NULL,
  `office_three` varchar(450) NOT NULL,
  `location_three` varchar(450) NOT NULL,
  `phone3` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`id`, `welcome_msg`, `about_info`, `our_work`, `city_one`, `office_one`, `location_one`, `phone1`, `city_two`, `office_two`, `location_two`, `phone2`, `city_three`, `office_three`, `location_three`, `phone3`) VALUES
(1, ' Online property marketplace to buy, sell, and rent residential and commercial properties. Used by millions of renters to find property. ', 'We are a property sellig and renting company dealing in selling and renting of Apartments, homes, condominiums, offices and shops', 'Selling and renting Houses', 'Kampala', '401 Broadway, 24th Floor,', 'Orchard View, Kampala, UG', '+2567065859575', 'Mukono', '27 Eden Walk Eden Centre,', 'Orchard, Mukono,Uganda', '+25670988775445', 'Wakiso', 'JK Building,', 'Land Rd, Wakiso', '+256712345678');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agents`
--

CREATE TABLE `tbl_agents` (
  `id` int(11) NOT NULL,
  `agent_id` varchar(32) NOT NULL,
  `agent_name` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `biography` varchar(450) NOT NULL,
  `description` varchar(450) NOT NULL,
  `photo` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agent_awards`
--

CREATE TABLE `tbl_agent_awards` (
  `id` int(11) NOT NULL,
  `agent_id` varchar(32) NOT NULL,
  `award` varchar(450) NOT NULL,
  `location` varchar(450) NOT NULL,
  `date_recieved` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agent_speciality`
--

CREATE TABLE `tbl_agent_speciality` (
  `id` int(11) NOT NULL,
  `agent_id` varchar(32) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apartment_forsale_features`
--

CREATE TABLE `tbl_apartment_forsale_features` (
  `id` int(11) NOT NULL,
  `apartment_code` varchar(32) NOT NULL,
  `refrigerator` varchar(32) NOT NULL,
  `gym` varchar(32) NOT NULL,
  `washer` varchar(32) NOT NULL,
  `barbeque` varchar(32) NOT NULL,
  `hangers` varchar(32) NOT NULL,
  `microwave` varchar(32) NOT NULL,
  `sauna` varchar(32) NOT NULL,
  `dryer` varchar(32) NOT NULL,
  `laundry` varchar(32) NOT NULL,
  `shower` varchar(32) NOT NULL,
  `internet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apartment_forsale_features`
--

INSERT INTO `tbl_apartment_forsale_features` (`id`, `apartment_code`, `refrigerator`, `gym`, `washer`, `barbeque`, `hangers`, `microwave`, `sauna`, `dryer`, `laundry`, `shower`, `internet`) VALUES
(1, 'MYHOME/AS/001', '1', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0'),
(2, 'MYHOME/AS/002', '1', '0', '0', '0', '1', '0', '0', '1', '0', '1', '1'),
(3, 'MYHOME/AS/003', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'MYHOME/AS/004', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apartment_for_sale`
--

CREATE TABLE `tbl_apartment_for_sale` (
  `apartment_id` int(11) NOT NULL,
  `apartment_code` varchar(32) NOT NULL,
  `apartment_name` varchar(32) NOT NULL,
  `location` varchar(64) NOT NULL,
  `longitude` varchar(32) NOT NULL,
  `latitude` varchar(32) NOT NULL,
  `price` varchar(64) NOT NULL,
  `measurement` varchar(250) NOT NULL,
  `description` varchar(450) NOT NULL,
  `apartment_type` varchar(32) NOT NULL,
  `year_built` varchar(32) NOT NULL,
  `accomodation_type` varchar(32) NOT NULL,
  `bedrooms` varchar(32) NOT NULL,
  `bathrooms` varchar(32) NOT NULL,
  `dining_room` varchar(32) NOT NULL,
  `sitting_room` varchar(32) NOT NULL,
  `visitors_room` varchar(32) NOT NULL,
  `office_room` varchar(32) NOT NULL,
  `kitchen` varchar(32) NOT NULL,
  `cooling` varchar(32) NOT NULL,
  `heating` varchar(32) NOT NULL,
  `parking` varchar(32) NOT NULL,
  `outdoor` varchar(32) NOT NULL,
  `swimming_pool` varchar(32) NOT NULL,
  `total_floors` varchar(32) NOT NULL,
  `living_area` varchar(32) NOT NULL,
  `ground_floor` varchar(120) NOT NULL,
  `first_floor` varchar(120) NOT NULL,
  `front_view` varchar(120) NOT NULL,
  `back_view` varchar(120) NOT NULL,
  `side_view` varchar(120) NOT NULL,
  `aerial_view` varchar(120) NOT NULL,
  `tour_video` varchar(120) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `listed_by` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apartment_for_sale`
--

INSERT INTO `tbl_apartment_for_sale` (`apartment_id`, `apartment_code`, `apartment_name`, `location`, `longitude`, `latitude`, `price`, `measurement`, `description`, `apartment_type`, `year_built`, `accomodation_type`, `bedrooms`, `bathrooms`, `dining_room`, `sitting_room`, `visitors_room`, `office_room`, `kitchen`, `cooling`, `heating`, `parking`, `outdoor`, `swimming_pool`, `total_floors`, `living_area`, `ground_floor`, `first_floor`, `front_view`, `back_view`, `side_view`, `aerial_view`, `tour_video`, `status`, `listed_by`, `date_added`) VALUES
(1, 'MYHOME/AS/001', 'Apartment 1', 'kla central, mackay road', '50', '560', '$ 20,000', '90 X 20sq ft', 'Good apartment for your family', 'Residential', '2024', 'Furnished', '3', '2', '1', '1', '0', '0', '1', 'Yes', 'No', '2 Car Parking', 'Shade seat', 'No', '1', '354m', 'images/apartments/202409061725622315.jpg', 'images/apartments/202409061725622302.jpg', 'images/apartments/202409061725621838.jpg', 'images/apartments/202409061725621822.jpg', 'images/apartments/202409061725621991.jpg', 'images/apartments/202409061725622011.jpg', 'video/202408201724148888.mp4', 1, 'K Frank', '2024-08-19 09:59:25'),
(2, 'MYHOME/AS/002', 'Apartment 2', 'kla central, mackay road', '50', '560', '$ 2000', '200sq metres', 'Best apartment for both small and larger families', 'Residential', '2024', 'Furnished', '6', '2', '2', '2', '2', '2', '2', 'Yes', 'No', '2 Car Parking', 'Shade seat', 'Yes', '1', '280m', '', '', 'images/apartments/202408211724229800.jpg', 'MH0002-back.png', 'MH0002-side.png', 'MH0002-aerial.png', 'video/202408201724148888.mp4', 1, 'K Frank', '2024-08-19 10:02:19'),
(3, 'MYHOME/AS/003', 'Apartment 3', 'kla central, mackay road', '50', '560', '$ 25,000', 'Full Apartment', '', 'Residential', '2024', 'Furnished', '6', '2', '2', '2', '2', '2', '2', 'Yes', 'No', '2 Car Parking', 'Shade seat', 'Yes', '1', '245m', '', '', 'images/apartments/202408211724229827.jpg', 'MH0002-back.png', 'MH0002-side.png', 'MH0002-aerial.png', 'video/202408201724145683.mp4', 1, 'K Frank', '2024-08-19 10:26:43'),
(6, 'MYHOME/AS/004', 'Apartment 4', 'Naguru rd', '34', '44', '245', 'ssfsfffffsf', '', 'Family Apartment', '2024', 'Furnished', '8', '8', '', '2', '2', '1', '2', 'Yes', 'Yes', '3 Car Parking', 'Simple flower garden', '', '2', 'Yes', 'IMG-20240629-WA0004.jpg', 'IMG-20240629-WA0004.jpg', 'images/apartments/202408211724229907.jpg', 'images/apartments/202408211724229929.jpg', '', 'images/apartments/202408211724229947.jpg', 'video/202408201724147047.mp4', 1, 'k Frank', '2024-08-19 18:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apartment_rentals`
--

CREATE TABLE `tbl_apartment_rentals` (
  `apartment_id` int(11) NOT NULL,
  `apartment_code` varchar(32) NOT NULL,
  `apartment_name` varchar(32) NOT NULL,
  `location` varchar(64) NOT NULL,
  `longitude` varchar(32) NOT NULL,
  `latitude` varchar(32) NOT NULL,
  `price` varchar(64) NOT NULL,
  `period` varchar(32) NOT NULL,
  `measurement` varchar(250) NOT NULL,
  `description` varchar(450) NOT NULL,
  `apartment_type` varchar(32) NOT NULL,
  `year_built` varchar(32) NOT NULL,
  `accomodation_type` varchar(32) NOT NULL,
  `bedrooms` varchar(32) NOT NULL,
  `bathrooms` varchar(32) NOT NULL,
  `dining_room` varchar(32) NOT NULL,
  `sitting_room` varchar(32) NOT NULL,
  `visitors_room` varchar(32) NOT NULL,
  `office_room` varchar(32) NOT NULL,
  `kitchen` varchar(32) NOT NULL,
  `cooling` varchar(32) NOT NULL,
  `heating` varchar(32) NOT NULL,
  `parking` varchar(32) NOT NULL,
  `outdoor` varchar(32) NOT NULL,
  `swimming_pool` varchar(32) NOT NULL,
  `total_floors` varchar(32) NOT NULL,
  `living_area` varchar(32) NOT NULL,
  `ground_floor` varchar(120) NOT NULL,
  `first_floor` varchar(120) NOT NULL,
  `front_view` varchar(120) NOT NULL,
  `back_view` varchar(120) NOT NULL,
  `side_view` varchar(120) NOT NULL,
  `aerial_view` varchar(120) NOT NULL,
  `tour_video` varchar(120) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `listed_by` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apartment_rentals`
--

INSERT INTO `tbl_apartment_rentals` (`apartment_id`, `apartment_code`, `apartment_name`, `location`, `longitude`, `latitude`, `price`, `period`, `measurement`, `description`, `apartment_type`, `year_built`, `accomodation_type`, `bedrooms`, `bathrooms`, `dining_room`, `sitting_room`, `visitors_room`, `office_room`, `kitchen`, `cooling`, `heating`, `parking`, `outdoor`, `swimming_pool`, `total_floors`, `living_area`, `ground_floor`, `first_floor`, `front_view`, `back_view`, `side_view`, `aerial_view`, `tour_video`, `status`, `listed_by`, `date_added`) VALUES
(1, 'MYHOME/AR/001', 'Kampala Apartments', 'kla central, mackay road', '50', '560', '$ 200', '1 Month', '90 X 20sq ft', 'Good apartment for your family', 'Residential', '2024', 'Furnished', '3', '2', '1', '1', '0', '0', '1', 'Yes', 'No', '2 Car Parking', 'Shade seat', 'No', '1', '354m', 'images/apartments/202408211724229767.jpg', 'images/apartments/202408211724229767.jpg', 'images/apartments/202408211724229767.jpg', 'images/apartments/202408211724229767.jpg', 'images/apartments/202408211724229767.jpg', 'images/apartments/202408211724229767.jpg', 'video/202408201724148888.mp4', 1, 'K Frank', '2024-08-19 09:59:25'),
(2, 'MYHOME/AR/002', 'Bugolobi Apartments', 'kla central, mackay road', '50', '560', '$ 2000', '1 Year', '200sq metres', 'Best apartment for both small and larger families', 'Residential', '2024', 'Furnished', '6', '2', '2', '2', '2', '2', '2', 'Yes', 'No', '2 Car Parking', 'Shade seat', 'Yes', '1', '280m', 'images/apartments/202408201724157739.jpg', '', 'images/apartments/202408211724229800.jpg', 'MH0002-back.png', 'MH0002-side.png', 'MH0002-aerial.png', 'video/202408201724148888.mp4', 1, 'K Frank', '2024-08-19 10:02:19'),
(3, 'MYHOME/AR/003', 'Kampala Apartments', 'kla central, mackay road', '50', '560', '$ 200', '1 Year', 'Full Apartment', '', 'Residential', '2024', 'Furnished', '6', '2', '2', '2', '2', '2', '2', 'Yes', 'No', '2 Car Parking', 'Shade seat', 'Yes', '1', '245m', '', '', 'images/apartments/202408211724229827.jpg', 'MH0002-back.png', 'MH0002-side.png', 'MH0002-aerial.png', 'video/202408201724145683.mp4', 1, 'K Frank', '2024-08-19 10:26:43'),
(4, 'MYHOME/AR/004', 'Naguru Suites', 'Naguru rd', '34', '44', '$ 245', '1 Month', 'ssfsfffffsf', 'good', 'Family Apartment', '2024', 'Furnished', '8', '8', '', '2', '2', '1', '2', 'Yes', 'Yes', '3 Car Parking', 'Simple flower garden', '', '2', 'Yes', 'IMG-20240629-WA0004.jpg', 'IMG-20240629-WA0004.jpg', 'images/apartments/202408211724229907.jpg', 'images/apartments/202408211724229929.jpg', '', 'images/apartments/202408211724229947.jpg', 'video/202408201724147047.mp4', 1, 'k Frank', '2024-08-19 18:49:07'),
(5, 'MYHOME/AR/005', 'AH Apartments', 'Kololo', '3', '4', '4', '4', 'rrfrfrfrfrfrf', '', 'Family Apartment', '4', 'Un furnished', '5', '5', '5', '5', '5', '5', '5', 'Yes', 'Yes', 'rrrrfrfr', 'rfrfrfrf', 'Yes', '5', 'Yes', 'images/apartments/800465.', '', '', '', '', '', '', 1, 'k Frank', '2024-08-20 02:54:47'),
(6, 'MYHOME/AR/006', 'Frankline Apartments', 'Lubaga, kampala', '456', '54', '$ 2500', '1 Year', '900 decimals', 'Apartments for hotels lodges or short term family stay.', 'Hotel & Lodge', '2023', 'Un furnished', '10', '10', '5', '0', '5', '2', '5', 'Yes', 'Yes', '8 Car Parking', 'Simple garden and shade seats', 'Yes', '3', '200m', '', '', 'images/apartments/202408211724229870.jpg', '', '', '', 'video/202408201724148888.mp4', 1, 'k Frank', '2024-08-20 09:07:55'),
(7, 'MYHOME/AR/007', 'MM Apartments', 'Kabalagala', '', '', '$ 3450', '1 Year', '', '', 'Choose Apartment type', '', 'Choose Accomodation type', '', '', '', '', '', '', '', 'Yes', 'Yes', '', '', 'Yes', '', '', '', '', '', '', '', '', '', 1, 'k Frank', '2024-08-20 09:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(250) NOT NULL,
  `blog_desc` varchar(450) NOT NULL,
  `blog_pdf` varchar(64) NOT NULL,
  `blog_image` varchar(64) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `posted_by` varchar(64) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_condominiums`
--

CREATE TABLE `tbl_condominiums` (
  `condo_id` int(11) NOT NULL,
  `condo_code` varchar(64) NOT NULL,
  `condo_name` varchar(32) NOT NULL,
  `location` varchar(64) NOT NULL,
  `longitude` varchar(32) NOT NULL,
  `latitude` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `measurement` varchar(250) NOT NULL,
  `description` varchar(450) NOT NULL,
  `condo_type` varchar(32) NOT NULL,
  `year_built` varchar(32) NOT NULL,
  `accomodation_type` varchar(32) NOT NULL,
  `bedrooms` varchar(32) NOT NULL,
  `bathrooms` varchar(32) NOT NULL,
  `dining_room` varchar(32) NOT NULL,
  `sitting_room` varchar(32) NOT NULL,
  `visitors_room` varchar(32) NOT NULL,
  `office_room` varchar(32) NOT NULL,
  `kitchen` varchar(32) NOT NULL,
  `cooling` varchar(32) NOT NULL,
  `heating` varchar(32) NOT NULL,
  `parking` varchar(32) NOT NULL,
  `outdoor` varchar(32) NOT NULL,
  `swimming_pool` varchar(32) NOT NULL,
  `total_floors` varchar(32) NOT NULL,
  `living_area` varchar(32) NOT NULL,
  `front_view` varchar(200) NOT NULL,
  `photo1` varchar(200) NOT NULL,
  `photo2` varchar(200) NOT NULL,
  `photo3` varchar(200) NOT NULL,
  `tour_video` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `listed_by` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_condominiums`
--

INSERT INTO `tbl_condominiums` (`condo_id`, `condo_code`, `condo_name`, `location`, `longitude`, `latitude`, `price`, `measurement`, `description`, `condo_type`, `year_built`, `accomodation_type`, `bedrooms`, `bathrooms`, `dining_room`, `sitting_room`, `visitors_room`, `office_room`, `kitchen`, `cooling`, `heating`, `parking`, `outdoor`, `swimming_pool`, `total_floors`, `living_area`, `front_view`, `photo1`, `photo2`, `photo3`, `tour_video`, `status`, `listed_by`, `date_added`) VALUES
(1, 'MYHOME/C/0001', 'Bukesa Condos', 'Bukesa', '34', '56', '$ 45,600', '800 sq ft', 'Best Condominium you can buy.', 'Residential', '2023', 'Furnished', '6', '6', '2', '1', '2', '1', '1', 'Yes', 'Yes', '2 Car Parking', 'Shade seat', 'Yes', '1', 'No', 'images/condos/202409061725611189.jpg', 'images/condos/202409061725611222.jpg', 'images/condos/202409061725611236.jpg', 'images/condos/202409061725611204.jpg', 'video/202408211724228333.mp4', 1, 'K Frank', '2024-08-22 16:51:38'),
(2, 'MYHOME/C/0002', 'Kampala Condos', 'Bukesa', '34', '56', '$ 20,000', '800 sq ft', 'Best Condominium you can buy.', 'Residential', '2023', 'Furnished', '6', '6', '2', '1', '2', '1', '1', 'Yes', 'Yes', '2 Car Parking', 'Shade seat', 'Yes', '1', 'No', 'images/condos/condo1.jpg', 'images/condos/condo1.jpg', 'images/condos/condo1.jpg', 'images/condos/condo1.jpg', '', 1, 'K Frank', '2024-08-22 16:52:24'),
(3, 'MYHOME/C/0003', 'Namanve Condos', 'Namanve', '34', '56', 'UGX 150M', '300 sq ft', 'Best Condominium you can buy.', 'Family Condo', '2023', 'Un furnished', '5', '2', '2', '1', '2', '0', '1', 'Yes', 'Yes', '2 Car Parking', 'Shade seat', 'Yes', '1', 'Yes', 'images/condos/condo3.jpg', 'images/condos/condo3.jpg', 'images/condos/condo3.jpg', 'images/condos/condo3.jpg', '', 1, 'K Frank', '2024-08-22 16:53:34'),
(4, 'MYHOME/C/0004', 'New Condo', 'fdgfgdg', '', '', '', '', '', 'Choose Condo type', '', 'Choose Accomodation type', '', '', '', '', '', '', '', 'Yes', 'Yes', '', '', 'Yes', '', '', '', '', '', '', '', 1, 'Admin 1', '2024-08-26 02:51:27'),
(6, 'MYHOME/C/006', 'xcxxzc', '', '', '', '', '', '', 'Choose Condo type', '', 'Choose Accomodation type', '', '', '', '', '', '', '', 'Yes', 'Yes', '', '', 'Yes', '', '', '', '', '', '', '', 1, 'Admin 1', '2024-08-28 05:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_condominium_features`
--

CREATE TABLE `tbl_condominium_features` (
  `id` int(11) NOT NULL,
  `condo_code` varchar(32) NOT NULL,
  `refrigerator` varchar(32) NOT NULL,
  `gym` varchar(32) NOT NULL,
  `washer` varchar(32) NOT NULL,
  `barbeque` varchar(32) NOT NULL,
  `hangers` varchar(32) NOT NULL,
  `microwave` varchar(32) NOT NULL,
  `sauna` varchar(32) NOT NULL,
  `dryer` varchar(32) NOT NULL,
  `laundry` varchar(32) NOT NULL,
  `shower` varchar(32) NOT NULL,
  `internet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_condominium_features`
--

INSERT INTO `tbl_condominium_features` (`id`, `condo_code`, `refrigerator`, `gym`, `washer`, `barbeque`, `hangers`, `microwave`, `sauna`, `dryer`, `laundry`, `shower`, `internet`) VALUES
(1, 'MYHOME/C/0001', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1'),
(2, 'MYHOME/C/0002', '1', '1', '1', '0', '1', '1', '0', '1', '1', '1', '1'),
(3, 'MYHOME/C/0003', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1'),
(4, 'MYHOME/C/0004', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(7, 'MYHOME/C/006', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_condo_orders`
--

CREATE TABLE `tbl_condo_orders` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(32) NOT NULL,
  `condo_code` varchar(32) NOT NULL,
  `order_by` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `description` varchar(450) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_condo_orders`
--

INSERT INTO `tbl_condo_orders` (`order_id`, `order_code`, `condo_code`, `order_by`, `phone`, `description`, `order_date`) VALUES
(1, 'MYHOME/LAND/001', '', 'K Frank', '', 'hello testing order', '2024-08-20 08:12:27'),
(2, 'MYHOME/LAND/002', '', 'K Frank', '078655644544', 'hey', '2024-08-20 08:13:57'),
(3, 'MYHOME/LAND/003', '1', 'K Frank', '078655644544', 'hey', '2024-08-20 08:15:16'),
(4, 'MYHOME/LO/004', '2', 'K frank', '0708118550', 'When can i see this land', '2024-08-22 15:19:12'),
(5, 'MYHOME/LO/005', '2', 'K frank', '0708118550', 'When can i see this land', '2024-08-22 15:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `message_id` varchar(64) NOT NULL,
  `sent_by` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `message` varchar(450) NOT NULL,
  `reply` varchar(450) NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `message_id`, `sent_by`, `email`, `phone`, `message`, `reply`, `date_sent`, `last_updated`) VALUES
(1, 'MYHOME/MSG001', 'FRANK', 'frank@gmail.com', '0787865544', 'hello', 'thanks', '2024-08-19 07:31:09', '2024-08-19 07:31:09'),
(2, 'MYHOME/F/002', 'Jacks', 'jack@gmail.com', '07968575644', 'hey testing 2', '', '2024-09-02 17:02:43', '2024-09-02 17:02:43'),
(3, 'MYHOME/F/003', 'frank', 'frank@gmail.com', '076963435', 'hey 2', 'Seen & Contacted', '2024-09-09 06:38:46', '2024-09-09 06:38:46'),
(4, 'MYHOME/F/004', 'jack', 'jack@gmail.com', '076963435', 'hhtttrf', '', '2024-09-09 06:44:56', '2024-09-09 06:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_forsale_features`
--

CREATE TABLE `tbl_home_forsale_features` (
  `id` int(11) NOT NULL,
  `home_code` varchar(64) NOT NULL,
  `refrigerator` varchar(32) NOT NULL,
  `gym` varchar(32) NOT NULL,
  `washer` varchar(32) NOT NULL,
  `barbeque` varchar(32) NOT NULL,
  `hangers` varchar(32) NOT NULL,
  `microwave` varchar(32) NOT NULL,
  `sauna` varchar(32) NOT NULL,
  `dryer` varchar(32) NOT NULL,
  `laundry` varchar(32) NOT NULL,
  `shower` varchar(32) NOT NULL,
  `internet` varchar(32) NOT NULL,
  `outdoor` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_home_forsale_features`
--

INSERT INTO `tbl_home_forsale_features` (`id`, `home_code`, `refrigerator`, `gym`, `washer`, `barbeque`, `hangers`, `microwave`, `sauna`, `dryer`, `laundry`, `shower`, `internet`, `outdoor`) VALUES
(1, 'MYHOME/HS/001', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', ''),
(2, 'MYHOME/HS/002', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', ''),
(3, 'MYHOME/HS/003', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', ''),
(4, 'MYHOME/HS/004', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_for_sale`
--

CREATE TABLE `tbl_home_for_sale` (
  `home_id` int(11) NOT NULL,
  `home_code` varchar(64) NOT NULL,
  `home_name` varchar(32) NOT NULL,
  `location` varchar(64) NOT NULL,
  `longitude` varchar(32) NOT NULL,
  `latitude` varchar(32) NOT NULL,
  `price` varchar(200) NOT NULL,
  `measurement` varchar(250) NOT NULL,
  `description` varchar(450) NOT NULL,
  `home_type` varchar(32) NOT NULL,
  `year_built` varchar(32) NOT NULL,
  `accomodation_type` varchar(32) NOT NULL,
  `bedrooms` varchar(32) NOT NULL,
  `bathrooms` varchar(32) NOT NULL,
  `dining_room` varchar(32) NOT NULL,
  `sitting_room` varchar(32) NOT NULL,
  `visitors_room` varchar(32) NOT NULL,
  `office_room` varchar(32) NOT NULL,
  `kitchen` varchar(32) NOT NULL,
  `cooling` varchar(32) NOT NULL,
  `heating` varchar(32) NOT NULL,
  `parking` varchar(120) NOT NULL,
  `outdoor` varchar(120) NOT NULL,
  `swimming_pool` varchar(32) NOT NULL,
  `total_floors` varchar(32) NOT NULL,
  `living_area` varchar(32) NOT NULL,
  `front_view` varchar(120) NOT NULL,
  `back_view` varchar(120) NOT NULL,
  `side_view` varchar(120) NOT NULL,
  `aerial_view` varchar(120) NOT NULL,
  `tour_video` varchar(120) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `listed_by` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_home_for_sale`
--

INSERT INTO `tbl_home_for_sale` (`home_id`, `home_code`, `home_name`, `location`, `longitude`, `latitude`, `price`, `measurement`, `description`, `home_type`, `year_built`, `accomodation_type`, `bedrooms`, `bathrooms`, `dining_room`, `sitting_room`, `visitors_room`, `office_room`, `kitchen`, `cooling`, `heating`, `parking`, `outdoor`, `swimming_pool`, `total_floors`, `living_area`, `front_view`, `back_view`, `side_view`, `aerial_view`, `tour_video`, `status`, `listed_by`, `date_added`) VALUES
(1, 'MYHOME/HS/001', 'Home 1', 'ntinda kla', '34', '44', 'Ugshs 250,000,000', '60 x 75 sq ft', 'A one of a kind home for a family with kids', 'Family house', '2019', 'Furnished', '5', '2', '1', '1', '0', '0', '1', 'Yes', 'No', '2 Car Parking', 'Grass compound with green trees.', 'No', '1', '20m', 'images/homes/202409061725604603.jpg', 'images/homes/202408211724220325.jpg', 'images/homes/202408211724220373.jpg', 'images/homes/202408211724220356.jpg', 'video/202408201724148888.mp4', 1, 'K Frank', '2024-08-20 16:35:28'),
(2, 'MYHOME/HS/002', 'Home 2', 'ntinda kla', '34', '44', '250', '60 x 75 sq ft', 'Nice home for a big family', 'Family house', '2019', 'Furnished', '5', '2', '1', '1', '0', '0', '1', 'Yes', 'No', '2 Car Parking', 'Grass compound with green trees.', 'No', '1', '50m', 'images/homes/MH0001-front.png', '', '', '', '', 1, 'K Frank', '2024-08-20 16:36:08'),
(3, 'MYHOME/HS/003', 'Home 3', 'Lubaga, kampala', '34', '55', '3000', '800sq ft', 'Good home for families', 'Family House', '2024', 'Furnished', '8', '4', '2', '2', '2', '1', '2', 'Yes', 'Yes', '2 Car parking', 'Flower garden and swiiming pool', 'Yes', '1', '600m', 'images/homes/202408211724220105.jpg', 'images/homes/202408211724220325.jpg', 'images/homes/202408211724220373.jpg', 'images/homes/202408211724220356.jpg', 'video/202408211724220255.mp4', 1, 'k Frank', '2024-08-21 05:34:37'),
(4, 'MYHOME/HS/004', 'Home 4', 'kampala', '34', '43', '100', '250sq ft', 'Good nice looking home for an overnight stay, tourists and long journey resting.', 'Overnight Stay', '2023', 'Furnished', '3', '2', '1', '1', '0', '0', '1', 'Yes', 'Yes', '2 Car parking', 'Shade sofa', 'No', '1', '50m', 'images/homes/202408251724556368.jpg', '', '', '', '', 1, 'k Frank', '2024-08-21 05:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_rentals`
--

CREATE TABLE `tbl_home_rentals` (
  `home_id` int(11) NOT NULL,
  `home_code` varchar(64) NOT NULL,
  `home_name` varchar(32) NOT NULL,
  `location` varchar(64) NOT NULL,
  `longitude` varchar(32) NOT NULL,
  `latitude` varchar(32) NOT NULL,
  `price` varchar(200) NOT NULL,
  `period` varchar(64) NOT NULL,
  `measurement` varchar(250) NOT NULL,
  `description` varchar(450) NOT NULL,
  `home_type` varchar(32) NOT NULL,
  `year_built` varchar(32) NOT NULL,
  `accomodation_type` varchar(32) NOT NULL,
  `bedrooms` varchar(32) NOT NULL,
  `bathrooms` varchar(32) NOT NULL,
  `dining_room` varchar(32) NOT NULL,
  `sitting_room` varchar(32) NOT NULL,
  `visitors_room` varchar(32) NOT NULL,
  `office_room` varchar(32) NOT NULL,
  `kitchen` varchar(32) NOT NULL,
  `cooling` varchar(32) NOT NULL,
  `heating` varchar(32) NOT NULL,
  `parking` varchar(120) NOT NULL,
  `outdoor` varchar(120) NOT NULL,
  `swimming_pool` varchar(32) NOT NULL,
  `total_floors` varchar(32) NOT NULL,
  `living_area` varchar(32) NOT NULL,
  `front_view` varchar(120) NOT NULL,
  `back_view` varchar(120) NOT NULL,
  `side_view` varchar(120) NOT NULL,
  `aerial_view` varchar(120) NOT NULL,
  `tour_video` varchar(120) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `listed_by` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_home_rentals`
--

INSERT INTO `tbl_home_rentals` (`home_id`, `home_code`, `home_name`, `location`, `longitude`, `latitude`, `price`, `period`, `measurement`, `description`, `home_type`, `year_built`, `accomodation_type`, `bedrooms`, `bathrooms`, `dining_room`, `sitting_room`, `visitors_room`, `office_room`, `kitchen`, `cooling`, `heating`, `parking`, `outdoor`, `swimming_pool`, `total_floors`, `living_area`, `front_view`, `back_view`, `side_view`, `aerial_view`, `tour_video`, `status`, `listed_by`, `date_added`) VALUES
(1, 'MYHOME/HR/001', 'Kampala Family House', 'ntinda kla', '34', '44', '$ 250', '1 month', '60 x 75 sq ft', 'A one of a kind home for a family with kids', 'Family house', '2019', 'Furnished', '5', '2', '1', '1', '0', '0', '1', 'Yes', 'No', '2 Car Parking', 'Grass compound with green trees.', 'No', '1', '20m', 'images/homes/202409061725605459.jpg', 'images/homes/202409061725605407.jpg', 'images/homes/202409061725605376.jpg', 'images/homes/202409061725605425.jpg', 'video/202408201724148888.mp4', 1, 'K Frank', '2024-08-20 16:35:28'),
(2, 'MYHOME/HR/002', 'Lubaga Family House', 'ntinda kla', '34', '44', '$ 250', '1 month', '60 x 75 sq ft', 'Nice home for a big family', 'Family house', '2019', 'Furnished', '5', '2', '1', '1', '0', '0', '1', 'Yes', 'No', '2 Car Parking', 'Grass compound with green trees.', 'No', '1', '50m', 'images/homes/MH0001-front.png', '', '', '', '', 1, 'K Frank', '2024-08-20 16:36:08'),
(3, 'MYHOME/HR/003', 'Frank Homes', 'Lubaga, kampala', '34', '55', '$ 3000', '1 Month', '800sq ft', 'Good home for families', 'Family House', '2024', 'Furnished', '8', '4', '2', '2', '2', '1', '2', 'Yes', 'Yes', '2 Car parking', 'Flower garden and swiiming pool', 'Yes', '1', '600m', 'images/homes/202408211724220105.jpg', 'images/homes/202408211724220325.jpg', 'images/homes/202408211724220373.jpg', 'images/homes/202408211724220356.jpg', 'video/202408211724220255.mp4', 1, 'k Frank', '2024-08-21 05:34:37'),
(4, 'MYHOME/HR/004', 'Alexis Homes', 'kla', '34', '43', '$ 100', '1Day', '250sq ft', 'Good nice looking home for an overnight stay, tourists and long journey resting.', 'Overnight Stay', '2023', 'Furnished', '3', '2', '1', '1', '0', '0', '1', 'Yes', 'Yes', '2 Car parking', 'Shade sofa', 'No', '1', '50m', '', '', '', '', '', 1, 'k Frank', '2024-08-21 05:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_landlords`
--

CREATE TABLE `tbl_landlords` (
  `id` int(11) NOT NULL,
  `landlord_id` varchar(200) NOT NULL,
  `fullnames` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `location` varchar(400) NOT NULL,
  `description` varchar(450) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_landlords`
--

INSERT INTO `tbl_landlords` (`id`, `landlord_id`, `fullnames`, `phone`, `location`, `description`, `status`, `date_added`) VALUES
(1, 'MYHOME/LL/001', 'B Alex', '070786875756', 'kampala, uganda', 'homes, apartments, shop room', 1, '2024-09-02 15:36:02'),
(2, 'MYHOME/LL/002', 'K Frank', '0708118550', 'kampala', 'Owns homes, apartments, shop room', 1, '2024-09-09 07:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_landlord_status`
--

CREATE TABLE `tbl_landlord_status` (
  `id` int(11) NOT NULL,
  `landlord_id` varchar(200) NOT NULL,
  `house_status` varchar(200) NOT NULL,
  `admin_status` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_landlord_status`
--

INSERT INTO `tbl_landlord_status` (`id`, `landlord_id`, `house_status`, `admin_status`, `date_added`) VALUES
(1, 'MYHOME/LL/001', 'Vaccant', 1, '2024-09-02 14:12:21'),
(2, 'MYHOME/LL/001', 'Vaccant', 1, '2024-09-02 14:20:09'),
(3, 'MYHOME/LL/001', 'Vaccant', 0, '2024-09-02 14:21:16'),
(4, 'MYHOME/LL/002', 'Occupieed', 1, '2024-09-02 14:23:02'),
(5, 'MYHOME/LL/002', 'Occupieed', 0, '2024-09-02 14:24:50'),
(6, 'MYHOME/LL/002', 'Occupied', 1, '2024-09-02 14:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_land_for_sale`
--

CREATE TABLE `tbl_land_for_sale` (
  `land_id` int(11) NOT NULL,
  `land_code` varchar(64) NOT NULL,
  `plot_name` varchar(250) NOT NULL,
  `price` varchar(64) NOT NULL,
  `location` varchar(250) NOT NULL,
  `longitude` varchar(32) NOT NULL,
  `latitude` varchar(32) NOT NULL,
  `land_type` varchar(250) NOT NULL,
  `measurements` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `photo1` varchar(200) NOT NULL,
  `photo2` varchar(200) NOT NULL,
  `photo3` varchar(200) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `phone` varchar(200) NOT NULL,
  `installment_payments` varchar(32) NOT NULL,
  `no_of_installments` varchar(32) NOT NULL,
  `listed_by` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_land_for_sale`
--

INSERT INTO `tbl_land_for_sale` (`land_id`, `land_code`, `plot_name`, `price`, `location`, `longitude`, `latitude`, `land_type`, `measurements`, `description`, `photo1`, `photo2`, `photo3`, `date_added`, `status`, `phone`, `installment_payments`, `no_of_installments`, `listed_by`) VALUES
(1, 'MYHOME/LAND/0001', 'Balex lands', '25 Millions', 'Kireka B', '34', '56', 'Comercial', '200 sq ft', 'Land for business', 'images/land/land4.jpg', 'images/land/202409061725624698.jpg', 'images/land/202409061725624730.jpg', '2024-08-22 14:09:36', 1, '07068575854', 'No', 'NA', ''),
(2, 'MYHOME/LAND/0002', 'Alexis lands', '5 Millions', 'Kazo', '34', '56', 'Residential', '20 sq ft', 'Land for residential', 'images/land/land6.jpg', '', '', '2024-08-22 14:10:48', 1, '0706857582', 'No', 'NA', ''),
(3, 'MYHOME/LAND/0003', 'Frankline lands', '2 Millions', 'Lubaga', '34', '56', 'Residential', '50 sq ft', 'Land for residential use', 'images/land/land7.jpg', 'images/land/202408261724643117.jpg', '', '2024-08-22 14:11:27', 1, '', 'No', 'NA', ''),
(5, 'MYland/L/005', 'dsdsadsa', '4500', 'dasasdas', '34', '45', 'Commercial', 'asdsadsa', 'daasdasd', '', '', '', '2024-08-26 15:50:27', 1, '07958574443', '', '', 'Admin 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_land_inquiries`
--

CREATE TABLE `tbl_land_inquiries` (
  `inquiry_id` int(11) NOT NULL,
  `inquiry_code` varchar(64) NOT NULL,
  `land_id` varchar(32) NOT NULL,
  `inquiry_by` varchar(64) NOT NULL,
  `sender_phone` varchar(32) NOT NULL,
  `inquiry` varchar(450) NOT NULL,
  `inquiry_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `inquiry_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_land_inquiries`
--

INSERT INTO `tbl_land_inquiries` (`inquiry_id`, `inquiry_code`, `land_id`, `inquiry_by`, `sender_phone`, `inquiry`, `inquiry_date`, `inquiry_status`) VALUES
(1, 'MYHOME/LAND/001', '1', 'K Frank', '', 'hello testing order', '2024-08-20 08:12:27', 0),
(2, 'MYHOME/LAND/002', '1', 'K Frank', '078655644544', 'hey', '2024-08-20 08:13:57', 0),
(4, 'MYHOME/LO/004', '2', 'K frank', '0708118550', 'When can i see this land', '2024-08-22 15:19:12', 0),
(5, 'MYHOME/LO/005', '2', 'K frank', '0708118550', 'When can i see this land', '2024-08-22 15:20:57', 0),
(6, 'MYHOME/LO/006', '1', 'jackson', '07065857464', 'hello, how much', '2024-09-06 12:40:53', 1),
(8, 'MYHOME/L/I/008', '1', 'jackson', '07065857464', 'hello, how much', '2024-09-06 13:17:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_office_forsale_features`
--

CREATE TABLE `tbl_office_forsale_features` (
  `id` int(11) NOT NULL,
  `office_code` varchar(64) NOT NULL,
  `refrigerator` varchar(32) NOT NULL,
  `gym` varchar(32) NOT NULL,
  `washer` varchar(32) NOT NULL,
  `barbeque` varchar(32) NOT NULL,
  `hangers` varchar(32) NOT NULL,
  `microwave` varchar(32) NOT NULL,
  `sauna` varchar(32) NOT NULL,
  `dryer` varchar(32) NOT NULL,
  `laundry` varchar(32) NOT NULL,
  `shower` varchar(32) NOT NULL,
  `internet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_office_forsale_features`
--

INSERT INTO `tbl_office_forsale_features` (`id`, `office_code`, `refrigerator`, `gym`, `washer`, `barbeque`, `hangers`, `microwave`, `sauna`, `dryer`, `laundry`, `shower`, `internet`) VALUES
(1, 'MYHOME/OFS/001', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1'),
(2, 'MYHOME/OFS/002', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1'),
(3, 'MYHOME/OFS/004', '1', '0', '1', '0', '1', '0', '0', '0', '1', '0', '0'),
(4, 'MYHOME/OFS/005', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_office_for_sale`
--

CREATE TABLE `tbl_office_for_sale` (
  `office_id` int(11) NOT NULL,
  `office_code` varchar(32) NOT NULL,
  `office_name` varchar(120) NOT NULL,
  `total_rooms` int(32) NOT NULL,
  `location` varchar(64) NOT NULL,
  `longitude` varchar(32) NOT NULL,
  `latitude` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `measurement` varchar(250) NOT NULL,
  `description` varchar(450) NOT NULL,
  `office_type` varchar(32) NOT NULL,
  `accomodation_type` varchar(64) NOT NULL,
  `year_built` varchar(32) NOT NULL,
  `waiting_room` varchar(32) NOT NULL,
  `cooling` varchar(32) NOT NULL,
  `heating` varchar(32) NOT NULL,
  `parking` varchar(120) NOT NULL,
  `outdoor` varchar(120) NOT NULL,
  `front_view` varchar(120) NOT NULL,
  `photo1` varchar(120) NOT NULL,
  `photo2` varchar(120) NOT NULL,
  `photo3` varchar(120) NOT NULL,
  `tour_video` varchar(120) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `listed_by` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_office_for_sale`
--

INSERT INTO `tbl_office_for_sale` (`office_id`, `office_code`, `office_name`, `total_rooms`, `location`, `longitude`, `latitude`, `price`, `measurement`, `description`, `office_type`, `accomodation_type`, `year_built`, `waiting_room`, `cooling`, `heating`, `parking`, `outdoor`, `front_view`, `photo1`, `photo2`, `photo3`, `tour_video`, `status`, `listed_by`, `date_added`) VALUES
(1, 'MYHOME/OFS/001', 'Office 1', 3, 'kla', '33', '33', '$3,550', '200m', 'Good office for lawyers', 'Company Office', 'Furnished', '2024', '1', 'Yes', 'Yes', '5 Car parking', 'Waiting chair', 'images/offices/202408211724231639.jpeg', 'images/offices/202408211724231639.jpeg', 'images/offices/202408211724231639.jpeg', 'images/offices/202408211724231639.jpeg', 'video/202408211724228333.mp4', 1, 'Admin 1', '2024-08-20 17:01:49'),
(2, 'MYHOME/OFS/002', 'Office 2', 3, 'kla', '33', '33', 'UGX 15,000,000', '200m', 'Good office for A branch school office', 'Company Office', 'Furnished', '2024', '1', 'Yes', 'Yes', '2 Car parking', 'Waiting chair', 'images/offices/202408211724223168.jpg', 'images/offices/202408211724223147.jpg', 'images/offices/202408211724223073.jpeg', 'images/offices/202408211724223024.jpeg', 'video/202408211724223107.mp4', 1, 'Admin 1', '2024-08-20 17:02:36'),
(4, 'MYHOME/OFS/004', 'Office 3', 0, 'kla', '', '', '', '', '', 'Branch Office', 'Un furnished', '', '', 'Yes', 'Yes', '', '', '', '', '', '', '', 1, 'k Frank', '2024-08-21 08:02:47'),
(5, 'MYHOME/OFS/005', 'Office 4', 1, 'sfdfsf', '', '', '', 'sfsfsdfdsfd', 'sfdfdsfsdfs', 'Choose office type', 'Choose Accomodation type', '', '', 'Yes', 'Yes', 'fsdfdf', '', 'images/offices/202408251724557878.jpg', '', '', '', '', 1, 'Admin 1', '2024-08-25 03:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_office_rentals`
--

CREATE TABLE `tbl_office_rentals` (
  `office_id` int(11) NOT NULL,
  `office_code` varchar(32) NOT NULL,
  `office_name` varchar(120) NOT NULL,
  `total_rooms` int(32) NOT NULL,
  `location` varchar(64) NOT NULL,
  `longitude` varchar(32) NOT NULL,
  `latitude` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `period` varchar(32) NOT NULL,
  `measurement` varchar(250) NOT NULL,
  `description` varchar(450) NOT NULL,
  `office_type` varchar(32) NOT NULL,
  `accomodation_type` varchar(64) NOT NULL,
  `year_built` varchar(32) NOT NULL,
  `waiting_room` varchar(32) NOT NULL,
  `cooling` varchar(32) NOT NULL,
  `heating` varchar(32) NOT NULL,
  `parking` varchar(120) NOT NULL,
  `outdoor` varchar(120) NOT NULL,
  `front_view` varchar(120) NOT NULL,
  `photo1` varchar(120) NOT NULL,
  `photo2` varchar(120) NOT NULL,
  `photo3` varchar(120) NOT NULL,
  `tour_video` varchar(120) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `listed_by` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_office_rentals`
--

INSERT INTO `tbl_office_rentals` (`office_id`, `office_code`, `office_name`, `total_rooms`, `location`, `longitude`, `latitude`, `price`, `period`, `measurement`, `description`, `office_type`, `accomodation_type`, `year_built`, `waiting_room`, `cooling`, `heating`, `parking`, `outdoor`, `front_view`, `photo1`, `photo2`, `photo3`, `tour_video`, `status`, `listed_by`, `date_added`) VALUES
(1, 'MYHOME/OFR/001', 'Law firm office', 3, 'kla', '33', '33', '$ 350', '1 Month', '200m', 'Good office for lawyers', 'Company Office', 'Furnished', '2024', '1', 'Yes', 'Yes', '5 Car parking', 'Waiting chair', 'images/offices/202408211724231639.jpeg', 'images/offices/202408211724231639.jpeg', 'images/offices/202408211724223024.jpeg', 'images/offices/202408211724223024.jpeg', 'video/202408201724148888.mp4', 1, 'K Frank', '2024-08-20 17:01:49'),
(2, 'MYHOME/OFR/002', 'School Branch office', 3, 'kla', '33', '33', '$ 150', '1 Month', '200m', 'Good office for A branch school office', 'Company Office', 'Furnished', '2024', '1', 'Yes', 'Yes', '2 Car parking', 'Waiting chair', 'images/offices/202408211724223168.jpg', 'images/offices/202408211724223147.jpg', 'images/offices/202408211724223073.jpeg', 'images/offices/202408211724223024.jpeg', 'video/202408211724223107.mp4', 1, 'K Frank', '2024-08-20 17:02:36'),
(4, 'MYHOME/OFR/004', 'new office', 0, 'kla', '', '', '', '', '', '', 'Branch Office', 'Un furnished', '', '', 'Yes', 'Yes', '', '', '', '', '', '', '', 1, 'k Frank', '2024-08-21 08:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(32) NOT NULL,
  `apartment_code` varchar(32) NOT NULL,
  `order_by` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `specifications` varchar(450) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `order_code`, `apartment_code`, `order_by`, `phone`, `specifications`, `order_date`) VALUES
(1, 'MYHOME/RO/001', '', 'K Frank', '', 'hello testing order', '2024-08-20 08:12:27'),
(2, 'MYHOME/RO/002', '', 'K Frank', '078655644544', 'hey', '2024-08-20 08:13:57'),
(3, 'MYHOME/RO/003', '1', 'K Frank', '078655644544', 'hey', '2024-08-20 08:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rental_apartment_features`
--

CREATE TABLE `tbl_rental_apartment_features` (
  `id` int(11) NOT NULL,
  `apartment_code` varchar(64) NOT NULL,
  `refrigerator` varchar(32) NOT NULL DEFAULT '0',
  `gym` varchar(32) NOT NULL DEFAULT '0',
  `washer` varchar(32) NOT NULL DEFAULT '0',
  `barbeque` varchar(32) NOT NULL DEFAULT '0',
  `hangers` varchar(32) NOT NULL DEFAULT '0',
  `microwave` varchar(32) NOT NULL DEFAULT '0',
  `sauna` varchar(32) NOT NULL DEFAULT '0',
  `dryer` varchar(32) NOT NULL DEFAULT '0',
  `laundry` varchar(32) NOT NULL DEFAULT '0',
  `shower` varchar(32) NOT NULL DEFAULT '0',
  `internet` varchar(32) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rental_apartment_features`
--

INSERT INTO `tbl_rental_apartment_features` (`id`, `apartment_code`, `refrigerator`, `gym`, `washer`, `barbeque`, `hangers`, `microwave`, `sauna`, `dryer`, `laundry`, `shower`, `internet`) VALUES
(1, 'MYHOME/AR/001', '1', '1', '1', '1', '1', '0', '0', '1', '1', '0', '1'),
(2, 'MYHOME/AR/002', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, 'MYHOME/AR/003', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1'),
(4, 'MYHOME/AR/004', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, 'MYHOME/AR/005', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, 'MYHOME/AR/006', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, 'MYHOME/AR/007', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rental_home_features`
--

CREATE TABLE `tbl_rental_home_features` (
  `id` int(11) NOT NULL,
  `home_code` varchar(64) NOT NULL,
  `refrigerator` varchar(32) NOT NULL,
  `gym` varchar(32) NOT NULL,
  `washer` varchar(32) NOT NULL,
  `barbeque` varchar(32) NOT NULL,
  `hangers` varchar(32) NOT NULL,
  `microwave` varchar(32) NOT NULL,
  `sauna` varchar(32) NOT NULL,
  `dryer` varchar(32) NOT NULL,
  `laundry` varchar(32) NOT NULL,
  `shower` varchar(32) NOT NULL,
  `internet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rental_home_features`
--

INSERT INTO `tbl_rental_home_features` (`id`, `home_code`, `refrigerator`, `gym`, `washer`, `barbeque`, `hangers`, `microwave`, `sauna`, `dryer`, `laundry`, `shower`, `internet`) VALUES
(1, 'MYHOME/HR/001', '1', '0', '1', '0', '1', '0', '0', '0', '1', '1', '0'),
(2, 'MYHOME/HR/002', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1'),
(3, 'MYHOME/HR/003', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1'),
(4, 'MYHOME/HR/004', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rental_office_features`
--

CREATE TABLE `tbl_rental_office_features` (
  `id` int(11) NOT NULL,
  `office_code` varchar(64) NOT NULL,
  `refrigerator` varchar(32) NOT NULL,
  `gym` varchar(32) NOT NULL,
  `washer` varchar(32) NOT NULL,
  `barbeque` varchar(32) NOT NULL,
  `hangers` varchar(32) NOT NULL,
  `microwave` varchar(32) NOT NULL,
  `sauna` varchar(32) NOT NULL,
  `dryer` varchar(32) NOT NULL,
  `laundry` varchar(32) NOT NULL,
  `shower` varchar(32) NOT NULL,
  `internet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rental_office_features`
--

INSERT INTO `tbl_rental_office_features` (`id`, `office_code`, `refrigerator`, `gym`, `washer`, `barbeque`, `hangers`, `microwave`, `sauna`, `dryer`, `laundry`, `shower`, `internet`) VALUES
(1, 'MYHOME/OFR/001', '1', '0', '1', '0', '1', '0', '0', '1', '1', '0', '1'),
(2, 'MYHOME/OFR/002', '1', '0', '1', '0', '1', '0', '0', '1', '1', '1', '1'),
(3, 'MYHOME/OFR/004', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rental_shop_features`
--

CREATE TABLE `tbl_rental_shop_features` (
  `id` int(11) NOT NULL,
  `shop_code` varchar(64) NOT NULL,
  `refrigerator` varchar(32) NOT NULL,
  `gym` varchar(32) NOT NULL,
  `washer` varchar(32) NOT NULL,
  `barbeque` varchar(32) NOT NULL,
  `hangers` varchar(32) NOT NULL,
  `microwave` varchar(32) NOT NULL,
  `sauna` varchar(32) NOT NULL,
  `dryer` varchar(32) NOT NULL,
  `laundry` varchar(32) NOT NULL,
  `shower` varchar(32) NOT NULL,
  `internet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rental_shop_features`
--

INSERT INTO `tbl_rental_shop_features` (`id`, `shop_code`, `refrigerator`, `gym`, `washer`, `barbeque`, `hangers`, `microwave`, `sauna`, `dryer`, `laundry`, `shower`, `internet`) VALUES
(1, 'MYHOME/SR/001', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1'),
(2, 'MYHOME/SR/002', '1', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0'),
(3, 'MYHOME/SR/003', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1'),
(4, 'MYHOME/SR/004', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'MYHOME/SR/006', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop_forsale_features`
--

CREATE TABLE `tbl_shop_forsale_features` (
  `id` int(11) NOT NULL,
  `shop_code` varchar(64) NOT NULL,
  `refrigerator` varchar(32) NOT NULL,
  `gym` varchar(32) NOT NULL,
  `washer` varchar(32) NOT NULL,
  `barbeque` varchar(32) NOT NULL,
  `hangers` varchar(32) NOT NULL,
  `microwave` varchar(32) NOT NULL,
  `sauna` varchar(32) NOT NULL,
  `dryer` varchar(32) NOT NULL,
  `laundry` varchar(32) NOT NULL,
  `shower` varchar(32) NOT NULL,
  `internet` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shop_forsale_features`
--

INSERT INTO `tbl_shop_forsale_features` (`id`, `shop_code`, `refrigerator`, `gym`, `washer`, `barbeque`, `hangers`, `microwave`, `sauna`, `dryer`, `laundry`, `shower`, `internet`) VALUES
(1, 'MYHOME/SS/001', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1'),
(2, 'MYHOME/SS/002', '1', '0', '0', '0', '1', '0', '0', '0', '1', '0', '1'),
(3, 'MYHOME/SS/003', '1', '0', '1', '0', '1', '1', '0', '1', '1', '1', '1'),
(4, 'MYHOME/SS/004', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'MYHOME/SS/005', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'MYHOME/SS/006', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop_for_sale`
--

CREATE TABLE `tbl_shop_for_sale` (
  `shop_id` int(11) NOT NULL,
  `shop_code` varchar(32) NOT NULL,
  `shop_name` varchar(32) NOT NULL,
  `location` varchar(64) NOT NULL,
  `longitude` varchar(32) NOT NULL,
  `latitude` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `measurement` varchar(250) NOT NULL,
  `description` varchar(450) NOT NULL,
  `shop_type` varchar(32) NOT NULL,
  `accomodation_type` varchar(64) NOT NULL,
  `year_built` varchar(32) NOT NULL,
  `total_rooms` varchar(64) NOT NULL,
  `store_room` varchar(32) NOT NULL,
  `cooling` varchar(32) NOT NULL,
  `heating` varchar(32) NOT NULL,
  `parking` varchar(200) NOT NULL,
  `outdoor` varchar(200) NOT NULL,
  `front_view` varchar(200) NOT NULL,
  `photo1` varchar(200) NOT NULL,
  `photo2` varchar(200) NOT NULL,
  `photo3` varchar(200) NOT NULL,
  `tour_video` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `listed_by` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shop_for_sale`
--

INSERT INTO `tbl_shop_for_sale` (`shop_id`, `shop_code`, `shop_name`, `location`, `longitude`, `latitude`, `price`, `measurement`, `description`, `shop_type`, `accomodation_type`, `year_built`, `total_rooms`, `store_room`, `cooling`, `heating`, `parking`, `outdoor`, `front_view`, `photo1`, `photo2`, `photo3`, `tour_video`, `status`, `listed_by`, `date_added`) VALUES
(1, 'MYHOME/SS/001', 'Shop 1', 'kampala', '33', '45', 'UGX 10,000,000', '450sq feet', 'Best shop for selling clothes', 'Clothings', 'Furnished', '2024', '1', '1', 'Yes', 'Yes', '2 Car Parking', 'Waiting Space', 'images/shops/202408211724228210.jpg', 'images/shops/202409061725608573.jpg', 'images/shops/202409061725608624.jpg', 'images/shops/202409061725608605.jpg', 'video/202409061725608655.mp4', 1, 'Admin 1', '2024-08-21 03:47:43'),
(2, 'MYHOME/SS/002', 'Shop 2', 'Lubaga', '33', '45', 'UGX 15,000,000', '450sq feet', 'Good for a cafe or take away restaurant', 'Coffee and Tea', 'Un Furnished', '2024', '1', '1', 'Yes', 'Yes', '1 Car Parking', 'Waiting Seat', 'images/shops/MH0002-front.png', '', '', '', '', 1, 'Admin 1', '2024-08-21 03:48:37'),
(3, 'MYHOME/SS/003', 'Shop 3', 'Bunga', '33', '45', '$1200', '450sq feet', 'Best store for cloth cleaning business', 'Laundry', 'Furnished', '2024', '2', '1', 'Yes', 'Yes', 'No', 'Waiting Space', 'images/shops/202408211724228300.jpg', 'images/shops/202408211724228210.jpg', 'images/shops/202408211724228250.jpg', 'images/shops/202408211724228274.jpg', 'video/202408211724228333.mp4', 1, 'Admin 1', '2024-08-21 03:50:37'),
(4, 'MYHOME/SS/004', 'Shop 4', 'dsds', '33', '33', '33', 'sdssdsd', 'sssdssdsdsds', 'General Shop', 'Furnished', '3232', '43', '343', 'Yes', 'Yes', '3 Car Parking', 'ssddsdsd', '', '', '', '', '', 1, 'Admin 1', '2024-08-21 08:31:05'),
(5, 'MYHOME/SS/005', 'Shop 5', 'hhhhj', '', '', '', '', '', 'Botique', 'Un furnished', '', '', '', 'Yes', 'Yes', '', '', '', '', '', '', '', 1, 'Admin 1', '2024-08-26 02:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop_rentals`
--

CREATE TABLE `tbl_shop_rentals` (
  `shop_id` int(11) NOT NULL,
  `shop_code` varchar(32) NOT NULL,
  `shop_name` varchar(32) NOT NULL,
  `location` varchar(64) NOT NULL,
  `longitude` varchar(32) NOT NULL,
  `latitude` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `period` varchar(120) NOT NULL,
  `measurement` varchar(250) NOT NULL,
  `description` varchar(450) NOT NULL,
  `shop_type` varchar(32) NOT NULL,
  `accomodation_type` varchar(64) NOT NULL,
  `year_built` varchar(32) NOT NULL,
  `total_rooms` varchar(64) NOT NULL,
  `store_room` varchar(32) NOT NULL,
  `cooling` varchar(32) NOT NULL,
  `heating` varchar(32) NOT NULL,
  `parking` varchar(200) NOT NULL,
  `outdoor` varchar(200) NOT NULL,
  `front_view` varchar(200) NOT NULL,
  `photo1` varchar(200) NOT NULL,
  `photo2` varchar(200) NOT NULL,
  `photo3` varchar(200) NOT NULL,
  `tour_video` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `listed_by` varchar(32) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shop_rentals`
--

INSERT INTO `tbl_shop_rentals` (`shop_id`, `shop_code`, `shop_name`, `location`, `longitude`, `latitude`, `price`, `period`, `measurement`, `description`, `shop_type`, `accomodation_type`, `year_built`, `total_rooms`, `store_room`, `cooling`, `heating`, `parking`, `outdoor`, `front_view`, `photo1`, `photo2`, `photo3`, `tour_video`, `status`, `listed_by`, `date_added`) VALUES
(1, 'MYHOME/SR/001', 'Botique Shop', 'kampala', '33', '45', '$ 150', '1 Month', '450sq feet', 'Best shop for selling clothes', 'Clothings', 'Furnished', '2024', '1', '1', 'Yes', 'Yes', '2 Car Parking', 'Waiting Space', 'images/shops/202408211724228210.jpg', 'images/shops/202408211724228210.jpg', 'images/shops/202408211724228210.jpg', 'images/shops/202408211724228210.jpg', 'video/202408211724228333.mp4', 1, 'Admin 1', '2024-08-21 03:47:43'),
(2, 'MYHOME/SR/002', 'Cafe Shop', 'Lubaga', '33', '45', '$ 150', '1 Month', '450sq feet', 'Good for a cafe or take away restaurant', 'Coffee and Tea', 'Un Furnished', '2024', '1', '1', 'Yes', 'Yes', '1 Car Parking', 'Waiting Seat', 'images/shops/MH0002-front.png', '', '', '', '', 1, 'Admin 1', '2024-08-21 03:48:37'),
(3, 'MYHOME/SR/003', 'General Merchandise Shop', 'Bunga', '33', '45', '$ 200', '1 Month', '450sq feet', 'Shop for selling general retail goods', 'Retail shop', 'Furnished', '2024', '2', '1', 'Yes', 'Yes', 'No', 'Waiting Space', 'images/shops/202408211724228300.jpg', 'images/shops/202408211724228210.jpg', 'images/shops/202408211724228250.jpg', 'images/shops/202408211724228274.jpg', 'video/202408211724228333.mp4', 1, 'Admin 1', '2024-08-21 03:50:37'),
(4, 'MYHOME/SR/004', 'dsdsdsd', 'kampala', '33', '33', '33', '1 Month', 'sdssdsd', 'sdsdsdsdsdsd', 'General Shop', 'Furnished', '3232', '43', '343', 'Yes', 'Yes', '3 Car Parking', 'ssddsdsd', '', '', '', '', '', 1, 'Admin 1', '2024-08-21 08:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specialities`
--

CREATE TABLE `tbl_specialities` (
  `id` int(11) NOT NULL,
  `speciality_id` varchar(32) NOT NULL,
  `description` varchar(450) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_code` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `fullnames` varchar(64) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(64) NOT NULL,
  `photo` varchar(64) NOT NULL,
  `user_role` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_code`, `username`, `fullnames`, `password`, `phone`, `email`, `photo`, `user_role`, `user_status`) VALUES
(1, 'MYHOME/U001', 'admin', 'Admin 1', 'd033e22ae348aeb5660fc2140aec35850c4da997', '0706868575', 'frank@gmail.com', 'userpics/frank.jpg', 1, 1),
(2, 'MYHOME/U002', 'Alexis', 'Alexis B', '37ac5e111a9b2f779e373f78efa4f7678b93feb1', '0706868585', 'alexis@gmail.com', '', 1, 1),
(5, 'MYHOME/U/005', 'frank', 'k frank', '86a8c2da8527a1c6978bdca6d7986fe14ae147fe ', '0708118550', 'frank@gmail.com', 'images/offices/202409091725875031.jpg', 1, 1),
(6, 'MYHOME/U/006', 'fdfdfdsfsdfs', 'gfgfgf', '', '076963435', 'fffds@gmail.com', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_ipaddress`
--

CREATE TABLE `tbl_user_ipaddress` (
  `ip_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `frequency` int(11) NOT NULL DEFAULT 0,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_logs`
--

CREATE TABLE `tbl_user_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout_time` datetime NOT NULL,
  `login_status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_logs`
--

INSERT INTO `tbl_user_logs` (`id`, `user_id`, `login_time`, `logout_time`, `login_status`) VALUES
(1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'logged out'),
(2, 1, '2024-08-19 06:29:51', '0000-00-00 00:00:00', 'logged out'),
(3, 1, '2024-08-19 06:35:22', '0000-00-00 00:00:00', 'logged out'),
(4, 1, '2024-08-19 06:38:55', '0000-00-00 00:00:00', 'logged out'),
(5, 1, '2024-08-19 06:39:24', '0000-00-00 00:00:00', 'logged out'),
(6, 1, '2024-08-19 06:57:38', '0000-00-00 00:00:00', 'logged out'),
(7, 1, '2024-08-19 09:02:42', '0000-00-00 00:00:00', 'logged out'),
(8, 1, '2024-08-19 14:29:19', '0000-00-00 00:00:00', 'logged out'),
(9, 1, '2024-08-20 02:53:29', '0000-00-00 00:00:00', 'logged out'),
(10, 1, '2024-08-20 10:10:02', '0000-00-00 00:00:00', 'logged out'),
(11, 1, '2024-08-21 04:56:15', '0000-00-00 00:00:00', 'logged out'),
(12, 1, '2024-08-21 13:39:55', '0000-00-00 00:00:00', 'logged out'),
(13, 1, '2024-08-22 06:05:44', '0000-00-00 00:00:00', 'logged out'),
(14, 1, '2024-08-22 11:38:00', '0000-00-00 00:00:00', 'logged out'),
(15, 1, '2024-08-22 11:38:37', '0000-00-00 00:00:00', 'logged out'),
(16, 1, '2024-08-22 11:42:16', '0000-00-00 00:00:00', 'logged out'),
(17, 1, '2024-08-23 15:27:05', '0000-00-00 00:00:00', 'logged out'),
(18, 1, '2024-08-25 02:53:58', '0000-00-00 00:00:00', 'logged out'),
(19, 1, '2024-08-26 01:58:55', '0000-00-00 00:00:00', 'logged out'),
(20, 1, '2024-08-26 15:46:41', '0000-00-00 00:00:00', 'logged out'),
(21, 1, '2024-08-28 05:25:47', '0000-00-00 00:00:00', 'logged out'),
(22, 1, '2024-08-28 05:57:49', '0000-00-00 00:00:00', 'logged out'),
(23, 1, '2024-08-28 07:09:32', '0000-00-00 00:00:00', 'logged out'),
(24, 1, '2024-08-28 07:11:06', '0000-00-00 00:00:00', 'logged out'),
(25, 1, '2024-08-28 07:11:41', '0000-00-00 00:00:00', 'logged out'),
(26, 1, '2024-08-28 07:12:41', '0000-00-00 00:00:00', 'logged out'),
(27, 1, '2024-08-28 07:18:40', '0000-00-00 00:00:00', 'logged out'),
(28, 5, '2024-08-28 07:39:55', '0000-00-00 00:00:00', 'logged out'),
(29, 5, '2024-08-28 07:46:34', '0000-00-00 00:00:00', 'logged out'),
(30, 5, '2024-08-28 07:46:46', '0000-00-00 00:00:00', 'logged out'),
(31, 1, '2024-08-28 07:47:44', '0000-00-00 00:00:00', 'logged out'),
(32, 5, '2024-08-28 07:49:37', '0000-00-00 00:00:00', 'logged out'),
(33, 5, '2024-08-28 12:13:37', '0000-00-00 00:00:00', 'logged out'),
(34, 1, '2024-09-02 12:43:03', '0000-00-00 00:00:00', 'logged out'),
(35, 1, '2024-09-02 14:42:35', '0000-00-00 00:00:00', 'logged out'),
(36, 1, '2024-09-06 06:29:58', '0000-00-00 00:00:00', 'logged out'),
(37, 1, '2024-09-06 14:49:41', '0000-00-00 00:00:00', 'logged out'),
(38, 5, '2024-09-09 07:21:33', '0000-00-00 00:00:00', 'logged out'),
(39, 5, '2024-09-09 09:03:17', '0000-00-00 00:00:00', 'logged out'),
(40, 1, '2024-09-09 09:55:13', '0000-00-00 00:00:00', 'logged out');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_roles`
--

CREATE TABLE `tbl_user_roles` (
  `user_role_id` int(11) NOT NULL,
  `user_role_name` varchar(55) NOT NULL,
  `date_created` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_roles`
--

INSERT INTO `tbl_user_roles` (`user_role_id`, `user_role_name`, `date_created`) VALUES
(1, 'admin', '2024-08-19 08:33:37'),
(2, 'accountant', '2024-08-19 08:34:00'),
(3, 'secretary', '2024-08-19 08:34:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_agents`
--
ALTER TABLE `tbl_agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_agent_awards`
--
ALTER TABLE `tbl_agent_awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_agent_speciality`
--
ALTER TABLE `tbl_agent_speciality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_apartment_forsale_features`
--
ALTER TABLE `tbl_apartment_forsale_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_apartment_for_sale`
--
ALTER TABLE `tbl_apartment_for_sale`
  ADD PRIMARY KEY (`apartment_id`);

--
-- Indexes for table `tbl_apartment_rentals`
--
ALTER TABLE `tbl_apartment_rentals`
  ADD PRIMARY KEY (`apartment_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_condominiums`
--
ALTER TABLE `tbl_condominiums`
  ADD PRIMARY KEY (`condo_id`);

--
-- Indexes for table `tbl_condominium_features`
--
ALTER TABLE `tbl_condominium_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_condo_orders`
--
ALTER TABLE `tbl_condo_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_forsale_features`
--
ALTER TABLE `tbl_home_forsale_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home_for_sale`
--
ALTER TABLE `tbl_home_for_sale`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `tbl_home_rentals`
--
ALTER TABLE `tbl_home_rentals`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `tbl_landlords`
--
ALTER TABLE `tbl_landlords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_landlord_status`
--
ALTER TABLE `tbl_landlord_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_land_for_sale`
--
ALTER TABLE `tbl_land_for_sale`
  ADD PRIMARY KEY (`land_id`);

--
-- Indexes for table `tbl_land_inquiries`
--
ALTER TABLE `tbl_land_inquiries`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `tbl_office_forsale_features`
--
ALTER TABLE `tbl_office_forsale_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_office_for_sale`
--
ALTER TABLE `tbl_office_for_sale`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `tbl_office_rentals`
--
ALTER TABLE `tbl_office_rentals`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_rental_apartment_features`
--
ALTER TABLE `tbl_rental_apartment_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rental_home_features`
--
ALTER TABLE `tbl_rental_home_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rental_office_features`
--
ALTER TABLE `tbl_rental_office_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rental_shop_features`
--
ALTER TABLE `tbl_rental_shop_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shop_forsale_features`
--
ALTER TABLE `tbl_shop_forsale_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shop_for_sale`
--
ALTER TABLE `tbl_shop_for_sale`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `tbl_shop_rentals`
--
ALTER TABLE `tbl_shop_rentals`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `tbl_specialities`
--
ALTER TABLE `tbl_specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_ipaddress`
--
ALTER TABLE `tbl_user_ipaddress`
  ADD PRIMARY KEY (`ip_id`);

--
-- Indexes for table `tbl_user_logs`
--
ALTER TABLE `tbl_user_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_roles`
--
ALTER TABLE `tbl_user_roles`
  ADD PRIMARY KEY (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_agents`
--
ALTER TABLE `tbl_agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_agent_awards`
--
ALTER TABLE `tbl_agent_awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_agent_speciality`
--
ALTER TABLE `tbl_agent_speciality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_apartment_forsale_features`
--
ALTER TABLE `tbl_apartment_forsale_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_apartment_for_sale`
--
ALTER TABLE `tbl_apartment_for_sale`
  MODIFY `apartment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_apartment_rentals`
--
ALTER TABLE `tbl_apartment_rentals`
  MODIFY `apartment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_condominiums`
--
ALTER TABLE `tbl_condominiums`
  MODIFY `condo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_condominium_features`
--
ALTER TABLE `tbl_condominium_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_condo_orders`
--
ALTER TABLE `tbl_condo_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_home_forsale_features`
--
ALTER TABLE `tbl_home_forsale_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_home_for_sale`
--
ALTER TABLE `tbl_home_for_sale`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_home_rentals`
--
ALTER TABLE `tbl_home_rentals`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_landlords`
--
ALTER TABLE `tbl_landlords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_landlord_status`
--
ALTER TABLE `tbl_landlord_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_land_for_sale`
--
ALTER TABLE `tbl_land_for_sale`
  MODIFY `land_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_land_inquiries`
--
ALTER TABLE `tbl_land_inquiries`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_office_forsale_features`
--
ALTER TABLE `tbl_office_forsale_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_office_for_sale`
--
ALTER TABLE `tbl_office_for_sale`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_office_rentals`
--
ALTER TABLE `tbl_office_rentals`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rental_apartment_features`
--
ALTER TABLE `tbl_rental_apartment_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_rental_home_features`
--
ALTER TABLE `tbl_rental_home_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_rental_office_features`
--
ALTER TABLE `tbl_rental_office_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rental_shop_features`
--
ALTER TABLE `tbl_rental_shop_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_shop_forsale_features`
--
ALTER TABLE `tbl_shop_forsale_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_shop_for_sale`
--
ALTER TABLE `tbl_shop_for_sale`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_shop_rentals`
--
ALTER TABLE `tbl_shop_rentals`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_specialities`
--
ALTER TABLE `tbl_specialities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user_ipaddress`
--
ALTER TABLE `tbl_user_ipaddress`
  MODIFY `ip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_logs`
--
ALTER TABLE `tbl_user_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_user_roles`
--
ALTER TABLE `tbl_user_roles`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
