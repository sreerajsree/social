-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2023 at 03:11 AM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `answer_value` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audiences`
--

CREATE TABLE `audiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `audiences`
--

INSERT INTO `audiences` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(101, 'test audience', 101, '2023-08-18 04:58:34', '2023-08-18 04:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `modality_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `description`, `created_at`, `updated_at`, `modality_id`) VALUES
(4, 'Main Category', 'main-category', NULL, NULL, '2023-08-18 03:54:08', '2023-08-18 03:54:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `certificate_number` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `responsible_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `responsible_position` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `partner_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_user`
--

CREATE TABLE `chat_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `chat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'US', 'United States'),
(2, 'CA', 'Canada'),
(3, 'AF', 'Afghanistan'),
(4, 'AL', 'Albania'),
(5, 'DZ', 'Algeria'),
(6, 'AS', 'American Samoa'),
(7, 'AD', 'Andorra'),
(8, 'AO', 'Angola'),
(9, 'AI', 'Anguilla'),
(10, 'AQ', 'Antarctica'),
(11, 'AG', 'Antigua and/or Barbuda'),
(12, 'AR', 'Argentina'),
(13, 'AM', 'Armenia'),
(14, 'AW', 'Aruba'),
(15, 'AU', 'Australia'),
(16, 'AT', 'Austria'),
(17, 'AZ', 'Azerbaijan'),
(18, 'BS', 'Bahamas'),
(19, 'BH', 'Bahrain'),
(20, 'BD', 'Bangladesh'),
(21, 'BB', 'Barbados'),
(22, 'BY', 'Belarus'),
(23, 'BE', 'Belgium'),
(24, 'BZ', 'Belize'),
(25, 'BJ', 'Benin'),
(26, 'BM', 'Bermuda'),
(27, 'BT', 'Bhutan'),
(28, 'BO', 'Bolivia'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British lndian Ocean Territory'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CV', 'Cape Verde'),
(41, 'KY', 'Cayman Islands'),
(42, 'CF', 'Central African Republic'),
(43, 'TD', 'Chad'),
(44, 'CL', 'Chile'),
(45, 'CN', 'China'),
(46, 'CX', 'Christmas Island'),
(47, 'CC', 'Cocos (Keeling) Islands'),
(48, 'CO', 'Colombia'),
(49, 'KM', 'Comoros'),
(50, 'CG', 'Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'CD', 'Democratic Republic of Congo'),
(58, 'DK', 'Denmark'),
(59, 'DJ', 'Djibouti'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'Dominican Republic'),
(62, 'TP', 'East Timor'),
(63, 'EC', 'Ecudaor'),
(64, 'EG', 'Egypt'),
(65, 'SV', 'El Salvador'),
(66, 'GQ', 'Equatorial Guinea'),
(67, 'ER', 'Eritrea'),
(68, 'EE', 'Estonia'),
(69, 'ET', 'Ethiopia'),
(70, 'FK', 'Falkland Islands (Malvinas)'),
(71, 'FO', 'Faroe Islands'),
(72, 'FJ', 'Fiji'),
(73, 'FI', 'Finland'),
(74, 'FR', 'France'),
(75, 'FX', 'France, Metropolitan'),
(76, 'GF', 'French Guiana'),
(77, 'PF', 'French Polynesia'),
(78, 'TF', 'French Southern Territories'),
(79, 'GA', 'Gabon'),
(80, 'GM', 'Gambia'),
(81, 'GE', 'Georgia'),
(82, 'DE', 'Germany'),
(83, 'GH', 'Ghana'),
(84, 'GI', 'Gibraltar'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JM', 'Jamaica'),
(109, 'JP', 'Japan'),
(110, 'JO', 'Jordan'),
(111, 'KZ', 'Kazakhstan'),
(112, 'KE', 'Kenya'),
(113, 'KI', 'Kiribati'),
(114, 'KP', 'Korea, Democratic People\'s Republic of'),
(115, 'KR', 'Korea, Republic of'),
(116, 'KW', 'Kuwait'),
(117, 'KG', 'Kyrgyzstan'),
(118, 'LA', 'Lao People\'s Democratic Republic'),
(119, 'LV', 'Latvia'),
(120, 'LB', 'Lebanon'),
(121, 'LS', 'Lesotho'),
(122, 'LR', 'Liberia'),
(123, 'LY', 'Libyan Arab Jamahiriya'),
(124, 'LI', 'Liechtenstein'),
(125, 'LT', 'Lithuania'),
(126, 'LU', 'Luxembourg'),
(127, 'MO', 'Macau'),
(128, 'MK', 'Macedonia'),
(129, 'MG', 'Madagascar'),
(130, 'MW', 'Malawi'),
(131, 'MY', 'Malaysia'),
(132, 'MV', 'Maldives'),
(133, 'ML', 'Mali'),
(134, 'MT', 'Malta'),
(135, 'MH', 'Marshall Islands'),
(136, 'MQ', 'Martinique'),
(137, 'MR', 'Mauritania'),
(138, 'MU', 'Mauritius'),
(139, 'TY', 'Mayotte'),
(140, 'MX', 'Mexico'),
(141, 'FM', 'Micronesia, Federated States of'),
(142, 'MD', 'Moldova, Republic of'),
(143, 'MC', 'Monaco'),
(144, 'MN', 'Mongolia'),
(145, 'MS', 'Montserrat'),
(146, 'MA', 'Morocco'),
(147, 'MZ', 'Mozambique'),
(148, 'MM', 'Myanmar'),
(149, 'NA', 'Namibia'),
(150, 'NR', 'Nauru'),
(151, 'NP', 'Nepal'),
(152, 'NL', 'Netherlands'),
(153, 'AN', 'Netherlands Antilles'),
(154, 'NC', 'New Caledonia'),
(155, 'NZ', 'New Zealand'),
(156, 'NI', 'Nicaragua'),
(157, 'NE', 'Niger'),
(158, 'NG', 'Nigeria'),
(159, 'NU', 'Niue'),
(160, 'NF', 'Norfork Island'),
(161, 'MP', 'Northern Mariana Islands'),
(162, 'NO', 'Norway'),
(163, 'OM', 'Oman'),
(164, 'PK', 'Pakistan'),
(165, 'PW', 'Palau'),
(166, 'PA', 'Panama'),
(167, 'PG', 'Papua New Guinea'),
(168, 'PY', 'Paraguay'),
(169, 'PE', 'Peru'),
(170, 'PH', 'Philippines'),
(171, 'PN', 'Pitcairn'),
(172, 'PL', 'Poland'),
(173, 'PT', 'Portugal'),
(174, 'PR', 'Puerto Rico'),
(175, 'QA', 'Qatar'),
(176, 'SS', 'Republic of South Sudan'),
(177, 'RE', 'Reunion'),
(178, 'RO', 'Romania'),
(179, 'RU', 'Russian Federation'),
(180, 'RW', 'Rwanda'),
(181, 'KN', 'Saint Kitts and Nevis'),
(182, 'LC', 'Saint Lucia'),
(183, 'VC', 'Saint Vincent and the Grenadines'),
(184, 'WS', 'Samoa'),
(185, 'SM', 'San Marino'),
(186, 'ST', 'Sao Tome and Principe'),
(187, 'SA', 'Saudi Arabia'),
(188, 'SN', 'Senegal'),
(189, 'RS', 'Serbia'),
(190, 'SC', 'Seychelles'),
(191, 'SL', 'Sierra Leone'),
(192, 'SG', 'Singapore'),
(193, 'SK', 'Slovakia'),
(194, 'SI', 'Slovenia'),
(195, 'SB', 'Solomon Islands'),
(196, 'SO', 'Somalia'),
(197, 'ZA', 'South Africa'),
(198, 'GS', 'South Georgia South Sandwich Islands'),
(199, 'ES', 'Spain'),
(200, 'LK', 'Sri Lanka'),
(201, 'SH', 'St. Helena'),
(202, 'PM', 'St. Pierre and Miquelon'),
(203, 'SD', 'Sudan'),
(204, 'SR', 'Suriname'),
(205, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(206, 'SZ', 'Swaziland'),
(207, 'SE', 'Sweden'),
(208, 'CH', 'Switzerland'),
(209, 'SY', 'Syrian Arab Republic'),
(210, 'TW', 'Taiwan'),
(211, 'TJ', 'Tajikistan'),
(212, 'TZ', 'Tanzania, United Republic of'),
(213, 'TH', 'Thailand'),
(214, 'TG', 'Togo'),
(215, 'TK', 'Tokelau'),
(216, 'TO', 'Tonga'),
(217, 'TT', 'Trinidad and Tobago'),
(218, 'TN', 'Tunisia'),
(219, 'TR', 'Turkey'),
(220, 'TM', 'Turkmenistan'),
(221, 'TC', 'Turks and Caicos Islands'),
(222, 'TV', 'Tuvalu'),
(223, 'UG', 'Uganda'),
(224, 'UA', 'Ukraine'),
(225, 'AE', 'United Arab Emirates'),
(226, 'GB', 'United Kingdom'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8_unicode_ci,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `duration_in_minutes` int(11) NOT NULL,
  `status` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `featured` int(11) NOT NULL DEFAULT '0',
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `moderator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `contributor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `modality_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `topic_id` bigint(20) UNSIGNED DEFAULT NULL,
  `audience` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `language_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `subtitle`, `summary`, `url`, `duration_in_minutes`, `status`, `featured`, `slug`, `user_id`, `moderator_id`, `contributor_id`, `level_id`, `category_id`, `price_id`, `type_id`, `modality_id`, `created_at`, `updated_at`, `topic_id`, `audience`, `start_date`, `end_date`, `language_id`) VALUES
(101, 'Health and Safety', 'Health and Safety is the term used to describe the sensible measures taken to ensure the safety of workers and those affected by your work in your organisation – giving your clients confidence in the service you provide.', 'This outstanding online training resource will enable you to comprehensively protect and promote the wellbeing of both your employees and those in your care.', NULL, 60, '3', 0, 'health-and-safety', 1, NULL, NULL, 2, 4, 1, 1, 2, '2023-08-18 04:30:56', '2023-09-04 09:03:00', 14, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_tag`
--

CREATE TABLE `course_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `end_date` timestamp NULL DEFAULT NULL,
  `certificate_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`, `status`, `end_date`, `certificate_id`) VALUES
(1, 30, 101, NULL, NULL, 0, NULL, NULL),
(2, 31, 101, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `faq_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_tags`
--

CREATE TABLE `faq_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(106, 'Introduction', 101, '2023-09-04 08:44:22', '2023-09-04 08:44:22'),
(108, 'Passenger lifts', 101, '2023-09-04 08:46:52', '2023-09-04 08:46:52'),
(109, 'Employers', 101, '2023-09-04 08:46:59', '2023-09-04 08:46:59'),
(110, 'Bed rails', 101, '2023-09-04 08:47:12', '2023-09-04 08:47:12'),
(111, 'Employees', 101, '2023-09-04 08:47:22', '2023-09-04 08:47:22'),
(112, 'Violence and aggression', 101, '2023-09-04 08:47:35', '2023-09-04 08:47:35'),
(113, 'Risk assessment', 101, '2023-09-04 08:47:45', '2023-09-04 08:47:45'),
(114, 'Mental health', 101, '2023-09-04 08:47:53', '2023-09-04 08:47:53'),
(115, 'CoSHH', 101, '2023-09-04 08:48:00', '2023-09-04 08:48:00'),
(116, 'Bullying', 101, '2023-09-04 08:48:08', '2023-09-04 08:48:08'),
(117, 'PPE', 101, '2023-09-04 08:48:16', '2023-09-04 08:48:16'),
(118, 'Contractors', 101, '2023-09-04 08:48:33', '2023-09-04 08:48:33'),
(119, 'Infection Control', 101, '2023-09-04 08:48:44', '2023-09-04 08:48:44'),
(120, 'Fire safety', 101, '2023-09-04 08:48:58', '2023-09-04 08:48:58'),
(121, 'Hand hygiene', 101, '2023-09-04 08:49:07', '2023-09-04 08:49:07'),
(122, 'Gas equipment', 101, '2023-09-04 08:49:15', '2023-09-04 08:49:15'),
(123, 'Use of sharps and needlestick injuries', 101, '2023-09-04 08:49:25', '2023-09-04 08:49:25'),
(124, 'Building security', 101, '2023-09-04 08:49:34', '2023-09-04 08:49:34'),
(125, 'Immunisations', 101, '2023-09-04 08:49:42', '2023-09-04 08:49:42'),
(126, 'Asbestos', 101, '2023-09-04 08:49:49', '2023-09-04 08:49:49'),
(127, 'Sharp containers', 101, '2023-09-04 08:50:07', '2023-09-04 08:50:07'),
(128, 'Radon', 101, '2023-09-04 08:50:14', '2023-09-04 08:50:14'),
(129, 'Spillages', 101, '2023-09-04 08:50:21', '2023-09-04 08:50:21'),
(130, 'Electricity', 101, '2023-09-04 08:50:28', '2023-09-04 08:50:28'),
(131, 'Administration of medicines', 101, '2023-09-04 08:50:36', '2023-09-04 08:50:36'),
(132, 'Display screen equipment', 101, '2023-09-04 08:50:45', '2023-09-04 08:50:45'),
(133, 'Food hygiene', 101, '2023-09-04 08:50:54', '2023-09-04 08:50:54'),
(134, 'Safety when outside', 101, '2023-09-04 08:51:02', '2023-09-04 08:51:02'),
(135, 'Food poisoning', 101, '2023-09-04 08:51:11', '2023-09-04 08:51:11'),
(136, 'Vehicle safety', 101, '2023-09-04 08:51:19', '2023-09-04 08:51:19'),
(137, 'Laundry and linen', 101, '2023-09-04 08:51:27', '2023-09-04 08:51:27'),
(138, 'Welfare facilities', 101, '2023-09-04 08:51:36', '2023-09-04 08:51:36'),
(139, 'Infectious diseases', 101, '2023-09-04 08:51:44', '2023-09-04 08:51:44'),
(140, 'Smoking', 101, '2023-09-04 08:51:51', '2023-09-04 08:51:51'),
(141, 'Legionella', 101, '2023-09-04 08:51:59', '2023-09-04 08:51:59'),
(142, 'Working Time Regulations', 101, '2023-09-04 08:52:06', '2023-09-04 08:52:06'),
(143, 'Scalding', 101, '2023-09-04 08:52:13', '2023-09-04 08:52:13'),
(144, 'Health checks', 101, '2023-09-04 08:52:21', '2023-09-04 08:52:21'),
(145, 'Moving and Handling risks, assessment and training', 101, '2023-09-04 08:52:29', '2023-09-04 08:52:29'),
(146, 'Pregnancy', 101, '2023-09-04 08:52:36', '2023-09-04 08:52:36'),
(147, 'Slips and trips', 101, '2023-09-04 08:52:44', '2023-09-04 08:52:44'),
(148, 'Lone working', 101, '2023-09-04 08:53:00', '2023-09-04 08:53:00'),
(149, 'Good housekeeping', 101, '2023-09-04 08:53:16', '2023-09-04 08:53:16'),
(150, 'First aid', 101, '2023-09-04 08:53:26', '2023-09-04 08:53:26'),
(151, 'Window restriction', 101, '2023-09-04 08:53:34', '2023-09-04 08:53:34'),
(152, 'When accidents occur', 101, '2023-09-04 08:53:43', '2023-09-04 08:53:43'),
(153, 'Use of equipment in the workplace', 101, '2023-09-04 08:53:52', '2023-09-04 08:53:52'),
(154, 'RIDDOR', 101, '2023-09-04 08:53:59', '2023-09-04 08:53:59'),
(155, 'Wheelchairs', 101, '2023-09-04 08:54:09', '2023-09-04 08:54:09'),
(156, 'Whistleblowing', 101, '2023-09-04 08:54:16', '2023-09-04 08:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `imageable_id` bigint(20) UNSIGNED NOT NULL,
  `imageable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(100, 'courses/196b2d4d6601250fb8fd509510b617bf.png', 100, 'App\\Models\\Course', '2023-06-23 04:35:03', '2023-06-23 04:35:03'),
(101, 'courses/lJxaoymsspo64Klvobwi5RBbAEAj2D2FJj0zsTpM.jpg', 101, 'App\\Models\\Course', '2023-08-18 04:30:57', '2023-09-07 13:03:21'),
(102, 'courses/B8G3lYsW2SF5LzAUVmzbflMERdhWdY5oJAcB2zXi.webp', 102, 'App\\Models\\Course', '2023-08-21 04:30:02', '2023-08-21 04:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'en', 'English', '2023-06-23 04:26:58', '2023-06-23 04:26:58'),
(2, 'es-ES', 'Spanish (Spain)', '2023-06-23 04:26:58', '2023-06-23 04:26:58'),
(3, 'es-DO', 'Spanish (Dominican Republic)', '2023-06-23 04:26:58', '2023-06-23 04:26:58'),
(4, 'fr', 'French', '2023-06-23 04:26:58', '2023-06-23 04:26:58'),
(5, 'it', 'Italian', '2023-06-23 04:26:58', '2023-06-23 04:26:58'),
(6, 'pt', 'Portuguese', '2023-06-23 04:26:58', '2023-06-23 04:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `iframe` text COLLATE utf8_unicode_ci,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `platform_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `name`, `url`, `iframe`, `section_id`, `platform_id`, `created_at`, `updated_at`) VALUES
(1601, 'Module 1', 'https://www.youtube.com/watch?v=7HBp0OMc1TE', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7HBp0OMc1TE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 401, 3, '2023-08-21 03:54:08', '2023-09-04 09:34:57'),
(1602, 'Module 2', 'https://www.youtube.com/watch?v=pcXlu974TQk', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pcXlu974TQk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 401, 3, '2023-08-21 04:09:27', '2023-09-04 09:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_subject`
--

CREATE TABLE `lesson_subject` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_user`
--

CREATE TABLE `lesson_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lesson_user`
--

INSERT INTO `lesson_user` (`id`, `lesson_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1601, 30, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Beginner', '2023-06-23 04:26:49', '2023-08-18 05:27:44'),
(2, 'Intermediate', '2023-06-23 04:26:49', '2023-08-18 05:28:48'),
(3, 'Advanced', '2023-06-23 04:26:49', '2023-08-18 05:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `target` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'none',
  `relationship` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metadata` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link_category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `description`, `target`, `relationship`, `metadata`, `created_at`, `updated_at`, `link_category_id`) VALUES
(1, 'Facebook', 'https://www.facebook.com/MTrabajoRD', NULL, '_blank', NULL, '{\"class\":\"\",\"icon\":\"fab fa-facebook-f\",\"image\":\"\",\"color\":\"\",\"width\":\"\",\"height\":\"\",\"rss\":\"\",\"order\":\"3\",\"before_link\":\"\",\"between_link\":\"\",\"after_link\":\"\",\"rating\":\"\"}', '2023-06-23 04:26:58', '2023-06-23 04:26:58', 1),
(2, 'Instagram', 'https://www.instagram.com/mtrabajord/', NULL, '_blank', NULL, '{\"class\":\"\",\"icon\":\"fab fa-instagram\",\"image\":\"\",\"color\":\"\",\"width\":\"\",\"height\":\"\",\"rss\":\"\",\"order\":\"1\",\"before_link\":\"\",\"between_link\":\"\",\"after_link\":\"\",\"rating\":\"\"}', '2023-06-23 04:26:58', '2023-06-23 04:26:58', 1),
(3, 'Twitter', 'https://twitter.com/MTrabajoRD', NULL, '_blank', NULL, '{\"class\":\"\",\"icon\":\"fab fa-twitter\",\"image\":\"\",\"color\":\"\",\"width\":\"\",\"height\":\"\",\"rss\":\"\",\"order\":\"2\",\"before_link\":\"\",\"between_link\":\"\",\"after_link\":\"\",\"rating\":\"\"}', '2023-06-23 04:26:58', '2023-06-23 04:26:58', 1),
(4, 'YouTube', 'https://www.youtube.com/channel/UCvQVfiyRPCxmWMrmH5QYqdg', NULL, '_blank', NULL, '{\"class\":\"\",\"icon\":\"fab fa-youtube\",\"image\":\"\",\"color\":\"\",\"width\":\"\",\"height\":\"\",\"rss\":\"\",\"order\":\"4\",\"before_link\":\"\",\"between_link\":\"\",\"after_link\":\"\",\"rating\":\"\"}', '2023-06-23 04:26:58', '2023-06-23 04:26:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `link_categories`
--

CREATE TABLE `link_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `link_categories`
--

INSERT INTO `link_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Redes Sociales', 'redes-sociales', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `document_id` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `name`, `email`, `document_id`, `created_at`, `updated_at`) VALUES
(1, 'sree', 'sreeraj@gmail.com', 'sree', '2023-06-23 04:44:48', '2023-06-23 04:44:48'),
(2, 'sree', 'sreeraj@gmail.com', 'sree', '2023-06-23 04:44:48', '2023-06-23 04:44:48'),
(3, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-16 02:16:54', '2023-08-16 02:16:54'),
(4, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-16 02:16:54', '2023-08-16 02:16:54'),
(5, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-16 04:00:15', '2023-08-16 04:00:15'),
(6, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-16 04:00:15', '2023-08-16 04:00:15'),
(7, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-18 02:49:36', '2023-08-18 02:49:36'),
(8, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-18 02:49:36', '2023-08-18 02:49:36'),
(9, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-21 02:19:52', '2023-08-21 02:19:52'),
(10, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-21 02:19:53', '2023-08-21 02:19:53'),
(11, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-21 03:53:05', '2023-08-21 03:53:05'),
(12, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-21 03:53:05', '2023-08-21 03:53:05'),
(13, 'Test', 'testuser@gmail.com', 'CB', '2023-08-21 04:11:24', '2023-08-21 04:11:24'),
(14, 'Test', 'testuser@gmail.com', 'CB', '2023-08-21 04:11:25', '2023-08-21 04:11:25'),
(15, 'Test', 'testuser@gmail.com', 'CB', '2023-08-21 04:23:38', '2023-08-21 04:23:38'),
(16, 'Test', 'testuser@gmail.com', 'CB', '2023-08-21 04:23:38', '2023-08-21 04:23:38'),
(17, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-21 04:26:43', '2023-08-21 04:26:43'),
(18, 'sree', 'sreeraj@gmail.com', NULL, '2023-08-21 04:26:43', '2023-08-21 04:26:43'),
(19, 'Test', 'testuser@gmail.com', 'CB', '2023-08-21 04:40:03', '2023-08-21 04:40:03'),
(20, 'Test', 'testuser@gmail.com', 'CB', '2023-08-21 04:40:03', '2023-08-21 04:40:03'),
(21, 'sree', 'sreeraj@gmail.com', NULL, '2023-09-04 08:24:02', '2023-09-04 08:24:02'),
(22, 'sree', 'sreeraj@gmail.com', NULL, '2023-09-04 08:24:02', '2023-09-04 08:24:02'),
(23, 'sree', 'sreeraj@gmail.com', NULL, '2023-09-04 08:59:40', '2023-09-04 08:59:40'),
(24, 'sree', 'sreeraj@gmail.com', NULL, '2023-09-04 08:59:40', '2023-09-04 08:59:40'),
(25, 'Test', 'testuser@gmail.com', 'CB', '2023-09-04 09:04:32', '2023-09-04 09:04:32'),
(26, 'Test', 'testuser@gmail.com', 'CB', '2023-09-04 09:04:32', '2023-09-04 09:04:32'),
(27, 'Test', 'testuser@gmail.com', 'CB', '2023-09-05 12:36:58', '2023-09-05 12:36:58'),
(28, 'Test', 'testuser@gmail.com', 'CB', '2023-09-05 12:36:59', '2023-09-05 12:36:59'),
(29, 'Asad', 'asad0202@hotmail.co.uk', 'CB', '2023-09-05 18:04:13', '2023-09-05 18:04:13'),
(30, 'Asad', 'asad0202@hotmail.co.uk', 'CB', '2023-09-05 18:04:13', '2023-09-05 18:04:13'),
(31, 'Test', 'testuser@gmail.com', 'CB', '2023-09-05 18:30:16', '2023-09-05 18:30:16'),
(32, 'Test', 'testuser@gmail.com', 'CB', '2023-09-05 18:30:16', '2023-09-05 18:30:16'),
(33, 'Test', 'testuser@gmail.com', 'CB', '2023-09-07 13:02:27', '2023-09-07 13:02:27'),
(34, 'Test', 'testuser@gmail.com', 'CB', '2023-09-07 13:02:27', '2023-09-07 13:02:27'),
(35, 'sree', 'sreeraj@gmail.com', NULL, '2023-09-07 13:02:55', '2023-09-07 13:02:55'),
(36, 'sree', 'sreeraj@gmail.com', NULL, '2023-09-07 13:02:55', '2023-09-07 13:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `chat_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(317, '0000_00_00_000000_create_websockets_statistics_entries_table', 1),
(318, '2014_10_12_000000_create_users_table', 1),
(319, '2014_10_12_100000_create_password_resets_table', 1),
(320, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(321, '2018_08_08_100000_create_telescope_entries_table', 1),
(322, '2019_08_19_000000_create_failed_jobs_table', 1),
(323, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(324, '2020_05_21_100000_create_teams_table', 1),
(325, '2020_05_21_200000_create_team_user_table', 1),
(326, '2020_05_21_300000_create_team_invitations_table', 1),
(327, '2021_03_01_141723_create_sessions_table', 1),
(328, '2021_03_02_092441_create_images_table', 1),
(329, '2021_03_02_150605_create_types_table', 1),
(330, '2021_03_02_151925_create_countries_table', 1),
(331, '2021_03_03_050706_add_columns_to_users_table', 1),
(332, '2021_03_03_050912_create_levels_table', 1),
(333, '2021_03_03_051013_create_categories_table', 1),
(334, '2021_03_03_051117_create_prices_table', 1),
(335, '2021_03_03_051551_create_modalities_table', 1),
(336, '2021_03_03_055545_create_courses_table', 1),
(337, '2021_03_03_055712_create_course_user_table', 1),
(338, '2021_03_03_060004_create_reviews_table', 1),
(339, '2021_03_03_060102_create_profiles_table', 1),
(340, '2021_03_03_060451_create_requirements_table', 1),
(341, '2021_03_03_060601_create_goals_table', 1),
(342, '2021_03_03_060725_create_audiences_table', 1),
(343, '2021_03_03_060902_create_sections_table', 1),
(344, '2021_03_03_061141_create_platforms_table', 1),
(345, '2021_03_03_061252_create_subscriptions_table', 1),
(346, '2021_03_03_061433_create_lessons_table', 1),
(347, '2021_03_03_061556_create_subscription_user_table', 1),
(348, '2021_03_03_061807_create_descriptions_table', 1),
(349, '2021_03_03_062513_create_lesson_user_table', 1),
(350, '2021_03_03_062709_create_subjects_table', 1),
(351, '2021_03_03_063555_create_lesson_subject_table', 1),
(352, '2021_03_03_064018_create_resources_table', 1),
(353, '2021_03_03_064126_create_comments_table', 1),
(354, '2021_03_03_064423_create_reactions_table', 1),
(355, '2021_03_05_191642_create_permission_tables', 1),
(356, '2021_03_15_022931_create_jobs_table', 1),
(357, '2021_03_15_182405_create_observations_table', 1),
(358, '2021_03_18_050426_create_partners_table', 1),
(359, '2021_04_12_145054_create_tags_table', 1),
(360, '2021_04_12_145333_create_course_tag_table', 1),
(361, '2021_04_12_153531_create_menu_items_table', 1),
(362, '2021_04_14_024231_create_links_table', 1),
(363, '2021_04_14_025935_create_link_categories_table', 1),
(364, '2021_04_14_030336_add_columns_to_links_table', 1),
(365, '2021_04_21_155556_create_terms_table', 1),
(366, '2021_04_21_165542_create_term_tags_table', 1),
(367, '2021_04_21_171930_create_faq_categories_table', 1),
(368, '2021_04_21_172154_create_faqs_table', 1),
(369, '2021_04_21_172619_create_faq_tags_table', 1),
(370, '2021_04_22_015404_create_topics_table', 1),
(371, '2021_04_22_022318_add_columns_to_tags_table', 1),
(372, '2021_04_23_035723_add_columns_to_categories_table', 1),
(373, '2021_04_25_051553_add_columns_to_courses_table', 1),
(374, '2021_04_28_061854_create_slides_table', 1),
(375, '2021_05_07_152508_create_login_history_table', 1),
(376, '2021_05_08_045745_add_last_login_column_to_users_table', 1),
(377, '2021_05_17_002238_create_certificates_table', 1),
(378, '2021_05_17_005740_create_programs_table', 1),
(379, '2021_05_17_015654_add_columns_to_certificates_table', 1),
(380, '2021_05_17_021905_add_columns_to_course_user_table', 1),
(381, '2021_06_06_011641_create_chats_table', 1),
(382, '2021_06_06_011801_create_chat_user_table', 1),
(383, '2021_06_06_011802_create_messages_table', 1),
(384, '2021_06_17_143503_create_questions_table', 1),
(385, '2021_06_17_144058_create_answers_table', 1),
(386, '2021_06_17_144636_create_tests_table', 1),
(387, '2021_06_17_180723_create_results_table', 1),
(388, '2021_06_17_185002_create_user_tests_table', 1),
(389, '2021_06_18_012140_create_question_result_pivot_table', 1),
(390, '2021_06_18_012846_add_relationship_fields_to_questions_table', 1),
(391, '2021_06_18_014215_create_user_answer_pivot_table', 1),
(392, '2021_06_18_134150_add_relationship_fields_to_answers_table', 1),
(393, '2021_06_21_174316_create_contacts_table', 1),
(394, '2021_11_19_150835_create_languages_table', 1),
(395, '2021_11_24_093321_add_language_to_courses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modalities`
--

CREATE TABLE `modalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modalities`
--

INSERT INTO `modalities` (`id`, `name`, `slug`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'E-learning', 'e-learning', 'fas fa-graduation-cap', 'E-learning es un proceso de aprendizaje que tiene lugar vía Internet y con el apoyo de herramientas tecnológicas. En este modelo, la educación cuenta con un ambiente de aprendizaje totalmente virtual, en el cual, los instructores ponen a disposición el contenido y los estudiantes acceden desde cualquier ordenador o dispositivo móvil.', '2023-06-23 04:26:56', '2023-06-23 04:26:56'),
(2, 'B-learning', 'b-learning', 'fas fa-graduation-cap', 'El aprendizaje semipresencial se refiere a la combinación del trabajo presencial, y del trabajo en línea, ​ en donde el alumno puede controlar algunos factores como el lugar, momento y espacio de trabajo.', '2023-06-23 04:26:56', '2023-06-23 04:26:56'),
(3, 'Face-to-Face', 'face-to-face', 'fas fa-graduation-cap', 'La educación presencial es la estructura de aprendizaje básica que requiere y comprende la presencia necesaria de un docente y alumnos en un aula de clase. El profesor es el encargado de dirigir la jornada de formación, transmitiendo sus conocimientos, ideas y experiencias relacionadas con el tema central.', '2023-06-23 04:26:57', '2023-06-23 04:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 5),
(6, 'App\\Models\\User', 6),
(7, 'App\\Models\\User', 7),
(8, 'App\\Models\\User', 8),
(9, 'App\\Models\\User', 9),
(10, 'App\\Models\\User', 10),
(11, 'App\\Models\\User', 11),
(4, 'App\\Models\\User', 12),
(4, 'App\\Models\\User', 13),
(4, 'App\\Models\\User', 14),
(4, 'App\\Models\\User', 15),
(4, 'App\\Models\\User', 16),
(4, 'App\\Models\\User', 17),
(4, 'App\\Models\\User', 18),
(4, 'App\\Models\\User', 19),
(4, 'App\\Models\\User', 20),
(4, 'App\\Models\\User', 21),
(4, 'App\\Models\\User', 22),
(4, 'App\\Models\\User', 23),
(4, 'App\\Models\\User', 24);

-- --------------------------------------------------------

--
-- Table structure for table `observations`
--

CREATE TABLE `observations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view-dashboard', 'web', '2023-06-23 04:25:12', '2023-06-23 04:25:12'),
(2, 'approve-request', 'web', '2023-06-23 04:25:12', '2023-06-23 04:25:12'),
(3, 'enroll', 'web', '2023-06-23 04:25:13', '2023-06-23 04:25:13'),
(4, 'take-test', 'web', '2023-06-23 04:25:13', '2023-06-23 04:25:13'),
(5, 'evaluate-test', 'web', '2023-06-23 04:25:13', '2023-06-23 04:25:13'),
(6, 'generate-certificate', 'web', '2023-06-23 04:25:13', '2023-06-23 04:25:13'),
(7, 'asign-role', 'web', '2023-06-23 04:25:13', '2023-06-23 04:25:13'),
(8, 'asign-permission', 'web', '2023-06-23 04:25:13', '2023-06-23 04:25:13'),
(9, 'asign-course', 'web', '2023-06-23 04:25:13', '2023-06-23 04:25:13'),
(10, 'moderate-course', 'web', '2023-06-23 04:25:13', '2023-06-23 04:25:13'),
(11, 'asign-user', 'web', '2023-06-23 04:25:13', '2023-06-23 04:25:13'),
(12, 'manage-attendance', 'web', '2023-06-23 04:25:14', '2023-06-23 04:25:14'),
(13, 'send-email', 'web', '2023-06-23 04:25:14', '2023-06-23 04:25:14'),
(14, 'edit-profile', 'web', '2023-06-23 04:25:14', '2023-06-23 04:25:14'),
(15, 'send-message', 'web', '2023-06-23 04:25:14', '2023-06-23 04:25:14'),
(16, 'view-log', 'web', '2023-06-23 04:25:14', '2023-06-23 04:25:14'),
(17, 'delete-log', 'web', '2023-06-23 04:25:14', '2023-06-23 04:25:14'),
(18, 'moderate-content', 'web', '2023-06-23 04:25:14', '2023-06-23 04:25:14'),
(19, 'moderate-comment', 'web', '2023-06-23 04:25:14', '2023-06-23 04:25:14'),
(20, 'manage-comment', 'web', '2023-06-23 04:25:14', '2023-06-23 04:25:14'),
(21, 'reply-comment', 'web', '2023-06-23 04:25:14', '2023-06-23 04:25:14'),
(22, 'manage-user', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(23, 'create-role', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(24, 'update-role', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(25, 'view-role', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(26, 'list-role', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(27, 'delete-role', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(28, 'create-permission', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(29, 'update-permission', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(30, 'view-permission', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(31, 'list-permission', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(32, 'delete-permission', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(33, 'create-user', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(34, 'update-user', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(35, 'view-user', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(36, 'list-user', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(37, 'delete-user', 'web', '2023-06-23 04:25:15', '2023-06-23 04:25:15'),
(38, 'create-course', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(39, 'update-course', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(40, 'view-course', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(41, 'list-course', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(42, 'delete-course', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(43, 'create-post', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(44, 'update-post', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(45, 'view-post', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(46, 'list-post', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(47, 'delete-post', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(48, 'create-page', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(49, 'update-page', 'web', '2023-06-23 04:25:16', '2023-06-23 04:25:16'),
(50, 'view-page', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(51, 'list-page', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(52, 'delete-page', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(53, 'create-category', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(54, 'update-category', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(55, 'view-category', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(56, 'list-category', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(57, 'delete-category', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(58, 'create-certificate', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(59, 'update-certificate', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(60, 'view-certificate', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(61, 'list-certificate', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(62, 'delete-certificate', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(63, 'create-comment', 'web', '2023-06-23 04:25:17', '2023-06-23 04:25:17'),
(64, 'update-comment', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(65, 'view-comment', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(66, 'list-comment', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(67, 'delete-comment', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(68, 'create-language', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(69, 'update-language', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(70, 'view-language', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(71, 'list-language', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(72, 'delete-language', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(73, 'create-lesson', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(74, 'update-lesson', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(75, 'view-lesson', 'web', '2023-06-23 04:25:18', '2023-06-23 04:25:18'),
(76, 'list-lesson', 'web', '2023-06-23 04:25:19', '2023-06-23 04:25:19'),
(77, 'delete-lesson', 'web', '2023-06-23 04:25:19', '2023-06-23 04:25:19'),
(78, 'create-level', 'web', '2023-06-23 04:25:19', '2023-06-23 04:25:19'),
(79, 'update-level', 'web', '2023-06-23 04:25:19', '2023-06-23 04:25:19'),
(80, 'view-level', 'web', '2023-06-23 04:25:19', '2023-06-23 04:25:19'),
(81, 'list-level', 'web', '2023-06-23 04:25:19', '2023-06-23 04:25:19'),
(82, 'delete-level', 'web', '2023-06-23 04:25:19', '2023-06-23 04:25:19'),
(83, 'create-link', 'web', '2023-06-23 04:25:19', '2023-06-23 04:25:19'),
(84, 'update-link', 'web', '2023-06-23 04:25:19', '2023-06-23 04:25:19'),
(85, 'view-link', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(86, 'list-link', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(87, 'delete-link', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(88, 'create-membership', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(89, 'update-membership', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(90, 'view-membership', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(91, 'list-membership', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(92, 'delete-membership', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(93, 'create-message', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(94, 'update-message', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(95, 'view-message', 'web', '2023-06-23 04:25:20', '2023-06-23 04:25:20'),
(96, 'list-message', 'web', '2023-06-23 04:25:21', '2023-06-23 04:25:21'),
(97, 'delete-message', 'web', '2023-06-23 04:25:21', '2023-06-23 04:25:21'),
(98, 'create-modality', 'web', '2023-06-23 04:25:21', '2023-06-23 04:25:21'),
(99, 'update-modality', 'web', '2023-06-23 04:25:21', '2023-06-23 04:25:21'),
(100, 'view-modality', 'web', '2023-06-23 04:25:21', '2023-06-23 04:25:21'),
(101, 'list-modality', 'web', '2023-06-23 04:25:21', '2023-06-23 04:25:21'),
(102, 'delete-modality', 'web', '2023-06-23 04:25:21', '2023-06-23 04:25:21'),
(103, 'create-observation', 'web', '2023-06-23 04:25:21', '2023-06-23 04:25:21'),
(104, 'update-observation', 'web', '2023-06-23 04:25:21', '2023-06-23 04:25:21'),
(105, 'view-observation', 'web', '2023-06-23 04:25:21', '2023-06-23 04:25:21'),
(106, 'list-observation', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(107, 'delete-observation', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(108, 'create-partner', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(109, 'update-partner', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(110, 'view-partner', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(111, 'list-partner', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(112, 'delete-partner', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(113, 'create-platform', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(114, 'update-platform', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(115, 'view-platform', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(116, 'list-platform', 'web', '2023-06-23 04:25:22', '2023-06-23 04:25:22'),
(117, 'delete-platform', 'web', '2023-06-23 04:25:23', '2023-06-23 04:25:23'),
(118, 'create-price', 'web', '2023-06-23 04:25:23', '2023-06-23 04:25:23'),
(119, 'update-price', 'web', '2023-06-23 04:25:23', '2023-06-23 04:25:23'),
(120, 'view-price', 'web', '2023-06-23 04:25:23', '2023-06-23 04:25:23'),
(121, 'list-price', 'web', '2023-06-23 04:25:23', '2023-06-23 04:25:23'),
(122, 'delete-price', 'web', '2023-06-23 04:25:23', '2023-06-23 04:25:23'),
(123, 'create-program', 'web', '2023-06-23 04:25:23', '2023-06-23 04:25:23'),
(124, 'update-program', 'web', '2023-06-23 04:25:23', '2023-06-23 04:25:23'),
(125, 'view-program', 'web', '2023-06-23 04:25:24', '2023-06-23 04:25:24'),
(126, 'list-program', 'web', '2023-06-23 04:25:24', '2023-06-23 04:25:24'),
(127, 'delete-program', 'web', '2023-06-23 04:25:24', '2023-06-23 04:25:24'),
(128, 'create-question', 'web', '2023-06-23 04:25:24', '2023-06-23 04:25:24'),
(129, 'update-question', 'web', '2023-06-23 04:25:24', '2023-06-23 04:25:24'),
(130, 'view-question', 'web', '2023-06-23 04:25:24', '2023-06-23 04:25:24'),
(131, 'list-question', 'web', '2023-06-23 04:25:24', '2023-06-23 04:25:24'),
(132, 'delete-question', 'web', '2023-06-23 04:25:24', '2023-06-23 04:25:24'),
(133, 'create-reaction', 'web', '2023-06-23 04:25:24', '2023-06-23 04:25:24'),
(134, 'update-reaction', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(135, 'view-reaction', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(136, 'list-reaction', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(137, 'delete-reaction', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(138, 'create-requirement', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(139, 'update-requirement', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(140, 'view-requirement', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(141, 'list-requirement', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(142, 'delete-requirement', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(143, 'create-resource', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(144, 'update-resource', 'web', '2023-06-23 04:25:25', '2023-06-23 04:25:25'),
(145, 'view-resource', 'web', '2023-06-23 04:25:26', '2023-06-23 04:25:26'),
(146, 'list-resource', 'web', '2023-06-23 04:25:26', '2023-06-23 04:25:26'),
(147, 'delete-resource', 'web', '2023-06-23 04:25:26', '2023-06-23 04:25:26'),
(148, 'create-result', 'web', '2023-06-23 04:25:26', '2023-06-23 04:25:26'),
(149, 'update-result', 'web', '2023-06-23 04:25:26', '2023-06-23 04:25:26'),
(150, 'view-result', 'web', '2023-06-23 04:25:26', '2023-06-23 04:25:26'),
(151, 'list-result', 'web', '2023-06-23 04:25:26', '2023-06-23 04:25:26'),
(152, 'delete-result', 'web', '2023-06-23 04:25:27', '2023-06-23 04:25:27'),
(153, 'create-review', 'web', '2023-06-23 04:25:27', '2023-06-23 04:25:27'),
(154, 'update-review', 'web', '2023-06-23 04:25:27', '2023-06-23 04:25:27'),
(155, 'view-review', 'web', '2023-06-23 04:25:27', '2023-06-23 04:25:27'),
(156, 'list-review', 'web', '2023-06-23 04:25:27', '2023-06-23 04:25:27'),
(157, 'delete-review', 'web', '2023-06-23 04:25:27', '2023-06-23 04:25:27'),
(158, 'create-section', 'web', '2023-06-23 04:25:27', '2023-06-23 04:25:27'),
(159, 'update-section', 'web', '2023-06-23 04:25:27', '2023-06-23 04:25:27'),
(160, 'view-section', 'web', '2023-06-23 04:25:27', '2023-06-23 04:25:27'),
(161, 'list-section', 'web', '2023-06-23 04:25:27', '2023-06-23 04:25:27'),
(162, 'delete-section', 'web', '2023-06-23 04:25:28', '2023-06-23 04:25:28'),
(163, 'create-slide', 'web', '2023-06-23 04:25:28', '2023-06-23 04:25:28'),
(164, 'update-slide', 'web', '2023-06-23 04:25:28', '2023-06-23 04:25:28'),
(165, 'view-slide', 'web', '2023-06-23 04:25:28', '2023-06-23 04:25:28'),
(166, 'list-slide', 'web', '2023-06-23 04:25:28', '2023-06-23 04:25:28'),
(167, 'delete-slide', 'web', '2023-06-23 04:25:28', '2023-06-23 04:25:28'),
(168, 'create-subject', 'web', '2023-06-23 04:25:28', '2023-06-23 04:25:28'),
(169, 'update-subject', 'web', '2023-06-23 04:25:28', '2023-06-23 04:25:28'),
(170, 'view-subject', 'web', '2023-06-23 04:25:28', '2023-06-23 04:25:28'),
(171, 'list-subject', 'web', '2023-06-23 04:25:28', '2023-06-23 04:25:28'),
(172, 'delete-subject', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(173, 'create-subscription', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(174, 'update-subscription', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(175, 'view-subscription', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(176, 'list-subscription', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(177, 'delete-subscription', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(178, 'create-tag', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(179, 'update-tag', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(180, 'view-tag', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(181, 'list-tag', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(182, 'delete-tag', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(183, 'create-test', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(184, 'update-test', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(185, 'view-test', 'web', '2023-06-23 04:25:29', '2023-06-23 04:25:29'),
(186, 'list-test', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(187, 'delete-test', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(188, 'create-topic', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(189, 'update-topic', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(190, 'view-topic', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(191, 'list-topic', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(192, 'delete-topic', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(193, 'create-type', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(194, 'update-type', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(195, 'view-type', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(196, 'list-type', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(197, 'delete-type', 'web', '2023-06-23 04:25:30', '2023-06-23 04:25:30'),
(198, 'assign-administrator', 'web', '2023-06-23 04:25:31', '2023-06-23 04:25:31'),
(199, 'assign-manager', 'web', '2023-06-23 04:25:31', '2023-06-23 04:25:31'),
(200, 'assign-coursemoderator', 'web', '2023-06-23 04:25:31', '2023-06-23 04:25:31'),
(201, 'assign-coursecreator', 'web', '2023-06-23 04:25:31', '2023-06-23 04:25:31'),
(202, 'assign-contentmoderator', 'web', '2023-06-23 04:25:31', '2023-06-23 04:25:31'),
(203, 'assign-contentcreator', 'web', '2023-06-23 04:25:31', '2023-06-23 04:25:31'),
(204, 'assign-internalinstructor', 'web', '2023-06-23 04:25:31', '2023-06-23 04:25:31'),
(205, 'assign-externalinstructor', 'web', '2023-06-23 04:25:31', '2023-06-23 04:25:31'),
(206, 'assign-helper', 'web', '2023-06-23 04:25:31', '2023-06-23 04:25:31'),
(207, 'assign-student', 'web', '2023-06-23 04:25:31', '2023-06-23 04:25:31'),
(208, 'assign-guest', 'web', '2023-06-23 04:25:32', '2023-06-23 04:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Microsoft Learn', '2023-06-23 04:26:57', '2023-06-23 04:26:57'),
(2, 'LinkedIn Learning', '2023-06-23 04:26:57', '2023-06-23 04:26:57'),
(3, 'Youtube', '2023-06-23 04:26:57', '2023-06-23 04:26:57'),
(4, 'Vimeo', '2023-06-23 04:26:57', '2023-06-23 04:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `value` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Free', 0.00, '2023-06-23 04:26:55', '2023-06-23 04:26:55'),
(2, 'US$ 19.99', 19.99, '2023-06-23 04:26:55', '2023-06-23 04:26:55'),
(3, 'US$ 49.99', 49.99, '2023-06-23 04:26:55', '2023-06-23 04:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` text COLLATE utf8_unicode_ci,
  `phone` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `responsible_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsible_position` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `document_id_required` tinyint(4) NOT NULL DEFAULT '1',
  `adult_required` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `question_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `test_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_result_pivot`
--

CREATE TABLE `question_result_pivot` (
  `points` int(11) NOT NULL DEFAULT '0',
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `result_id` bigint(20) UNSIGNED NOT NULL,
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reactionable_id` bigint(20) UNSIGNED NOT NULL,
  `reactionable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(108, 'Whether for induction, vocational, refresher or management training, this is health and safety training you will want to use time after time. You can start the course right now.', 101, '2023-09-04 08:42:53', '2023-09-04 08:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `resourceable_id` bigint(20) UNSIGNED NOT NULL,
  `resourceable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `url`, `resourceable_id`, `resourceable_type`, `created_at`, `updated_at`) VALUES
(1, 'resources/s4jXWloDE7SmImsbqKN3WkHTAM5d5yTvjwr3oTxN.pdf', 1602, 'App\\Models\\Lesson', '2023-09-04 09:42:25', '2023-09-04 09:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `score` double(5,2) DEFAULT NULL,
  `correct` int(11) DEFAULT NULL,
  `incorrect` int(11) DEFAULT NULL,
  `incomplete` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'web', '2023-06-23 04:25:32', '2023-06-23 04:25:32'),
(2, 'manager', 'web', '2023-06-23 04:25:47', '2023-06-23 04:25:47'),
(3, 'coursemoderator', 'web', '2023-06-23 04:26:07', '2023-06-23 04:26:07'),
(4, 'coursecreator', 'web', '2023-06-23 04:26:11', '2023-06-23 04:26:11'),
(5, 'contentmoderator', 'web', '2023-06-23 04:26:18', '2023-06-23 04:26:18'),
(6, 'contentcreator', 'web', '2023-06-23 04:26:19', '2023-06-23 04:26:19'),
(7, 'internalinstructor', 'web', '2023-06-23 04:26:22', '2023-06-23 04:26:22'),
(8, 'externalinstructor', 'web', '2023-06-23 04:26:27', '2023-06-23 04:26:27'),
(9, 'helper', 'web', '2023-06-23 04:26:33', '2023-06-23 04:26:33'),
(10, 'student', 'web', '2023-06-23 04:26:35', '2023-06-23 04:26:35'),
(11, 'guest', 'web', '2023-06-23 04:26:39', '2023-06-23 04:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1),
(172, 1),
(173, 1),
(174, 1),
(175, 1),
(176, 1),
(177, 1),
(178, 1),
(179, 1),
(180, 1),
(181, 1),
(182, 1),
(183, 1),
(184, 1),
(185, 1),
(186, 1),
(187, 1),
(188, 1),
(189, 1),
(190, 1),
(191, 1),
(192, 1),
(193, 1),
(194, 1),
(195, 1),
(196, 1),
(197, 1),
(198, 1),
(199, 1),
(200, 1),
(201, 1),
(202, 1),
(203, 1),
(204, 1),
(205, 1),
(206, 1),
(207, 1),
(208, 1),
(1, 2),
(2, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(18, 2),
(19, 2),
(21, 2),
(22, 2),
(25, 2),
(26, 2),
(30, 2),
(31, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(39, 2),
(40, 2),
(41, 2),
(45, 2),
(46, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(59, 2),
(60, 2),
(61, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 2),
(66, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(75, 2),
(76, 2),
(78, 2),
(79, 2),
(80, 2),
(81, 2),
(82, 2),
(83, 2),
(84, 2),
(85, 2),
(86, 2),
(87, 2),
(88, 2),
(89, 2),
(90, 2),
(91, 2),
(92, 2),
(93, 2),
(94, 2),
(95, 2),
(96, 2),
(97, 2),
(98, 2),
(99, 2),
(100, 2),
(101, 2),
(102, 2),
(103, 2),
(104, 2),
(105, 2),
(106, 2),
(107, 2),
(108, 2),
(109, 2),
(110, 2),
(111, 2),
(112, 2),
(113, 2),
(114, 2),
(115, 2),
(116, 2),
(117, 2),
(118, 2),
(119, 2),
(120, 2),
(121, 2),
(122, 2),
(123, 2),
(124, 2),
(125, 2),
(126, 2),
(127, 2),
(130, 2),
(131, 2),
(135, 2),
(136, 2),
(140, 2),
(141, 2),
(145, 2),
(146, 2),
(150, 2),
(151, 2),
(155, 2),
(156, 2),
(160, 2),
(161, 2),
(165, 2),
(166, 2),
(168, 2),
(169, 2),
(170, 2),
(171, 2),
(172, 2),
(173, 2),
(174, 2),
(175, 2),
(176, 2),
(177, 2),
(178, 2),
(179, 2),
(180, 2),
(181, 2),
(182, 2),
(185, 2),
(186, 2),
(188, 2),
(189, 2),
(190, 2),
(191, 2),
(192, 2),
(193, 2),
(194, 2),
(195, 2),
(196, 2),
(197, 2),
(198, 2),
(199, 2),
(200, 2),
(201, 2),
(202, 2),
(203, 2),
(204, 2),
(205, 2),
(206, 2),
(207, 2),
(208, 2),
(10, 3),
(13, 3),
(14, 3),
(15, 3),
(19, 3),
(20, 3),
(40, 3),
(41, 3),
(45, 3),
(46, 3),
(50, 3),
(51, 3),
(55, 3),
(56, 3),
(60, 3),
(61, 3),
(75, 3),
(76, 3),
(80, 3),
(81, 3),
(93, 3),
(95, 3),
(96, 3),
(97, 3),
(100, 3),
(101, 3),
(103, 3),
(104, 3),
(105, 3),
(106, 3),
(107, 3),
(115, 3),
(116, 3),
(120, 3),
(121, 3),
(125, 3),
(126, 3),
(130, 3),
(131, 3),
(135, 3),
(136, 3),
(140, 3),
(141, 3),
(145, 3),
(146, 3),
(150, 3),
(151, 3),
(155, 3),
(156, 3),
(160, 3),
(161, 3),
(170, 3),
(171, 3),
(175, 3),
(176, 3),
(178, 3),
(180, 3),
(181, 3),
(185, 3),
(186, 3),
(190, 3),
(191, 3),
(195, 3),
(196, 3),
(2, 4),
(5, 4),
(9, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(20, 4),
(21, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 4),
(42, 4),
(45, 4),
(46, 4),
(50, 4),
(51, 4),
(55, 4),
(56, 4),
(60, 4),
(61, 4),
(63, 4),
(64, 4),
(65, 4),
(66, 4),
(67, 4),
(70, 4),
(71, 4),
(73, 4),
(74, 4),
(75, 4),
(76, 4),
(77, 4),
(80, 4),
(81, 4),
(93, 4),
(95, 4),
(96, 4),
(97, 4),
(100, 4),
(101, 4),
(105, 4),
(106, 4),
(115, 4),
(116, 4),
(120, 4),
(121, 4),
(125, 4),
(126, 4),
(128, 4),
(129, 4),
(130, 4),
(131, 4),
(132, 4),
(135, 4),
(136, 4),
(138, 4),
(139, 4),
(140, 4),
(141, 4),
(142, 4),
(143, 4),
(144, 4),
(145, 4),
(146, 4),
(147, 4),
(148, 4),
(150, 4),
(151, 4),
(155, 4),
(156, 4),
(158, 4),
(159, 4),
(160, 4),
(161, 4),
(162, 4),
(170, 4),
(171, 4),
(175, 4),
(176, 4),
(178, 4),
(180, 4),
(181, 4),
(183, 4),
(184, 4),
(185, 4),
(186, 4),
(187, 4),
(190, 4),
(191, 4),
(195, 4),
(196, 4),
(13, 5),
(14, 5),
(15, 5),
(18, 5),
(19, 5),
(20, 5),
(45, 5),
(46, 5),
(50, 5),
(51, 5),
(93, 5),
(95, 5),
(96, 5),
(97, 5),
(103, 5),
(104, 5),
(105, 5),
(106, 5),
(107, 5),
(135, 5),
(136, 5),
(145, 5),
(146, 5),
(155, 5),
(156, 5),
(3, 6),
(4, 6),
(11, 6),
(13, 6),
(14, 6),
(15, 6),
(20, 6),
(21, 6),
(43, 6),
(44, 6),
(45, 6),
(46, 6),
(47, 6),
(48, 6),
(49, 6),
(50, 6),
(51, 6),
(52, 6),
(55, 6),
(56, 6),
(63, 6),
(64, 6),
(65, 6),
(66, 6),
(67, 6),
(93, 6),
(95, 6),
(96, 6),
(97, 6),
(105, 6),
(106, 6),
(115, 6),
(116, 6),
(125, 6),
(126, 6),
(135, 6),
(136, 6),
(143, 6),
(144, 6),
(145, 6),
(146, 6),
(147, 6),
(155, 6),
(156, 6),
(178, 6),
(180, 6),
(181, 6),
(2, 7),
(5, 7),
(9, 7),
(11, 7),
(12, 7),
(13, 7),
(14, 7),
(15, 7),
(20, 7),
(21, 7),
(38, 7),
(39, 7),
(40, 7),
(41, 7),
(42, 7),
(55, 7),
(56, 7),
(60, 7),
(61, 7),
(63, 7),
(64, 7),
(65, 7),
(66, 7),
(67, 7),
(70, 7),
(71, 7),
(73, 7),
(74, 7),
(75, 7),
(76, 7),
(77, 7),
(80, 7),
(81, 7),
(93, 7),
(95, 7),
(96, 7),
(97, 7),
(100, 7),
(101, 7),
(105, 7),
(106, 7),
(115, 7),
(116, 7),
(120, 7),
(121, 7),
(125, 7),
(126, 7),
(128, 7),
(129, 7),
(130, 7),
(131, 7),
(132, 7),
(135, 7),
(136, 7),
(138, 7),
(139, 7),
(140, 7),
(141, 7),
(142, 7),
(143, 7),
(144, 7),
(145, 7),
(146, 7),
(147, 7),
(148, 7),
(150, 7),
(151, 7),
(155, 7),
(156, 7),
(158, 7),
(159, 7),
(160, 7),
(161, 7),
(162, 7),
(170, 7),
(171, 7),
(175, 7),
(176, 7),
(178, 7),
(180, 7),
(181, 7),
(183, 7),
(184, 7),
(185, 7),
(186, 7),
(187, 7),
(190, 7),
(191, 7),
(195, 7),
(196, 7),
(2, 8),
(5, 8),
(11, 8),
(12, 8),
(13, 8),
(14, 8),
(15, 8),
(20, 8),
(21, 8),
(39, 8),
(40, 8),
(41, 8),
(42, 8),
(55, 8),
(56, 8),
(60, 8),
(61, 8),
(63, 8),
(64, 8),
(65, 8),
(66, 8),
(67, 8),
(70, 8),
(71, 8),
(73, 8),
(74, 8),
(75, 8),
(76, 8),
(77, 8),
(80, 8),
(81, 8),
(93, 8),
(95, 8),
(96, 8),
(97, 8),
(100, 8),
(101, 8),
(105, 8),
(106, 8),
(115, 8),
(116, 8),
(120, 8),
(121, 8),
(125, 8),
(126, 8),
(128, 8),
(129, 8),
(130, 8),
(131, 8),
(132, 8),
(135, 8),
(136, 8),
(138, 8),
(139, 8),
(140, 8),
(141, 8),
(142, 8),
(143, 8),
(144, 8),
(145, 8),
(146, 8),
(147, 8),
(148, 8),
(150, 8),
(151, 8),
(155, 8),
(156, 8),
(158, 8),
(159, 8),
(160, 8),
(161, 8),
(162, 8),
(170, 8),
(171, 8),
(175, 8),
(176, 8),
(178, 8),
(180, 8),
(181, 8),
(183, 8),
(184, 8),
(185, 8),
(186, 8),
(187, 8),
(190, 8),
(191, 8),
(195, 8),
(196, 8),
(2, 9),
(5, 9),
(12, 9),
(13, 9),
(14, 9),
(15, 9),
(21, 9),
(40, 9),
(41, 9),
(55, 9),
(60, 9),
(61, 9),
(63, 9),
(64, 9),
(65, 9),
(66, 9),
(67, 9),
(70, 9),
(75, 9),
(76, 9),
(80, 9),
(93, 9),
(95, 9),
(96, 9),
(97, 9),
(100, 9),
(120, 9),
(125, 9),
(126, 9),
(130, 9),
(131, 9),
(135, 9),
(136, 9),
(140, 9),
(141, 9),
(145, 9),
(146, 9),
(148, 9),
(150, 9),
(151, 9),
(155, 9),
(156, 9),
(160, 9),
(161, 9),
(170, 9),
(171, 9),
(175, 9),
(176, 9),
(180, 9),
(185, 9),
(186, 9),
(190, 9),
(195, 9),
(3, 10),
(4, 10),
(5, 10),
(6, 10),
(13, 10),
(14, 10),
(15, 10),
(21, 10),
(40, 10),
(41, 10),
(55, 10),
(60, 10),
(61, 10),
(63, 10),
(64, 10),
(65, 10),
(66, 10),
(67, 10),
(70, 10),
(75, 10),
(76, 10),
(80, 10),
(93, 10),
(95, 10),
(96, 10),
(97, 10),
(100, 10),
(120, 10),
(125, 10),
(130, 10),
(131, 10),
(133, 10),
(134, 10),
(135, 10),
(136, 10),
(137, 10),
(140, 10),
(141, 10),
(143, 10),
(144, 10),
(145, 10),
(146, 10),
(147, 10),
(150, 10),
(151, 10),
(155, 10),
(156, 10),
(160, 10),
(161, 10),
(170, 10),
(171, 10),
(175, 10),
(176, 10),
(180, 10),
(185, 10),
(186, 10),
(190, 10),
(195, 10),
(40, 11),
(55, 11),
(70, 11),
(75, 11),
(80, 11),
(100, 11),
(125, 11),
(140, 11),
(155, 11),
(160, 11),
(180, 11),
(190, 11),
(195, 11);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(401, 'Health and Safety', 101, '2023-08-18 04:50:18', '2023-09-04 09:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8NHqi4mdtoShUqzAqyq9PXPSDglDdhOmxk5gP3HZ', NULL, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWWdDb0hQaFNrRERqZE1PQW1xelRmVWk5elRRbFA2YjZBUElDeFhJViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoibG9jYWxlIjtzOjI6ImVuIjt9', 1692631425),
('SxOJRUJmmyBmwMMhtACNV54bBsUPuXHOwZcfcXUF', 30, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiT3FJbjFHUnhQSzdlNlAxTndqVUxVUk5YMllDTE13bGtRVUxmMHRQbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lbi9jb3Vyc2Utc3RhdHVzL2Vzc2UtYmxhbmRpdGlpcy1jb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6ImxvY2FsZSI7czoyOiJlbiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MzA7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQzQkU5RTlWSzZXWldVL1NlS2dNVnguQ2duNzEzeVAuNlZuTmprZ0JscUZneWhWTEN1ODNyLiI7fQ==', 1692625455);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `title_color` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_color_saturation` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_color` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_color_saturation` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `background_color` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `background_color_saturation` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `background_color_opacity` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci,
  `link_text` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'font-italic',
  `link_color` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_color_saturation` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_bg_color` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_bg_color_saturation` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `information` text COLLATE utf8_unicode_ci,
  `target` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'none',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_user`
--

CREATE TABLE `subscription_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `topic_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'administrators', 1, '2023-06-23 04:26:40', '2023-06-23 04:26:40'),
(3, 26, 'Zephania\'s Team', 1, '2023-08-16 01:30:00', '2023-08-16 01:30:00'),
(4, 27, 'Eaton\'s Team', 1, '2023-08-16 01:31:29', '2023-08-16 01:31:29'),
(5, 28, 'Brenda\'s Team', 1, '2023-08-16 01:33:11', '2023-08-16 01:33:11'),
(6, 29, 'Jakeem\'s Team', 1, '2023-08-16 01:38:47', '2023-08-16 01:38:47'),
(7, 30, 'Test\'s Team', 1, '2023-08-21 02:50:41', '2023-08-21 02:50:41'),
(8, 31, 'Asad\'s Team', 1, '2023-09-05 17:54:43', '2023-09-05 17:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries`
--

CREATE TABLE `telescope_entries` (
  `sequence` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `batch_id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `family_hash` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `should_display_on_index` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries_tags`
--

CREATE TABLE `telescope_entries_tags` (
  `entry_uuid` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_monitoring`
--

CREATE TABLE `telescope_monitoring` (
  `tag` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `term_tags`
--

CREATE TABLE `term_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` longtext COLLATE utf8_unicode_ci NOT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `is_required` tinyint(4) NOT NULL DEFAULT '0',
  `start_at` timestamp NULL DEFAULT NULL,
  `end_at` timestamp NULL DEFAULT NULL,
  `time_limit` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `handle_time_over` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'autoabandon',
  `grace_period` int(11) NOT NULL DEFAULT '0',
  `attempts` int(11) NOT NULL DEFAULT '1',
  `grade_method` tinyint(4) NOT NULL DEFAULT '1',
  `nav_method` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'free',
  `password` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_net` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `browser_security` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`, `icon`, `category_id`, `created_at`, `updated_at`) VALUES
(14, 'Sub Category', 'sub-category', NULL, 4, '2023-08-18 03:59:28', '2023-08-18 03:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Learning Path', '2023-06-23 04:26:56', '2023-06-23 04:26:56'),
(2, 'Module', '2023-06-23 04:26:56', '2023-06-23 04:26:56'),
(3, 'Video', '2023-06-23 04:26:56', '2023-06-23 04:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT '1',
  `profile_photo_path` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `profile_visibility` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'S',
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `document_id`, `name`, `lastname`, `email`, `phone`, `mobile`, `company`, `home`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `options`, `profile_visibility`, `active`, `last_login`) VALUES
(1, NULL, 'sree', 'raj', 'sreeraj@gmail.com', NULL, NULL, NULL, NULL, '2023-06-23 14:15:07', '$2y$10$GDnBcFM6Heg77M9Sjt89TuXa8D16n8R.91rSA5vaBRNR5z.HhiZ/K', NULL, NULL, NULL, 1, NULL, '2023-06-23 04:26:41', '2023-09-07 13:02:55', '{\"language\":\"es\"}', 'S', 1, '2023-09-07 13:02:55'),
(30, 'CB', 'Test', 'User', 'testuser@gmail.com', '9999999999', NULL, 'Test Company', 'Test Address', '2023-08-21 02:50:41', '$2y$10$3BE9E9VK6WZWU/SeKgMVx.Cgn713yP.6VnNjkgBlqFgyhVLCu83r.', NULL, NULL, NULL, 1, NULL, '2023-08-21 02:50:41', '2023-09-07 13:02:27', NULL, 'S', 1, '2023-09-07 13:02:27'),
(31, 'CB', 'Asad', 'Hussain', 'asad0202@hotmail.co.uk', '07426404094', NULL, 'Just Homes Surrey', 'Douglas Close', '2023-09-05 17:54:43', '$2y$10$cNkv8PXEBK3KM9MlCLamgepH5QBiu.Jm.DphqNLc192ZjqBttuNke', NULL, NULL, NULL, 1, NULL, '2023-09-05 17:54:43', '2023-09-05 18:04:13', NULL, 'S', 1, '2023-09-05 18:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_answer_pivot`
--

CREATE TABLE `user_answer_pivot` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tests`
--

CREATE TABLE `user_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attempt` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `time_check_state` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `test_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `audiences`
--
ALTER TABLE `audiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audiences_course_id_foreign` (`course_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_modality_id_foreign` (`modality_id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificates_user_id_foreign` (`user_id`),
  ADD KEY `certificates_course_id_foreign` (`course_id`),
  ADD KEY `certificates_partner_id_foreign` (`partner_id`),
  ADD KEY `certificates_program_id_foreign` (`program_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_user`
--
ALTER TABLE `chat_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_user_id_foreign` (`user_id`),
  ADD KEY `courses_moderator_id_foreign` (`moderator_id`),
  ADD KEY `courses_contributor_id_foreign` (`contributor_id`),
  ADD KEY `courses_level_id_foreign` (`level_id`),
  ADD KEY `courses_category_id_foreign` (`category_id`),
  ADD KEY `courses_price_id_foreign` (`price_id`),
  ADD KEY `courses_type_id_foreign` (`type_id`),
  ADD KEY `courses_modality_id_foreign` (`modality_id`),
  ADD KEY `courses_topic_id_foreign` (`topic_id`),
  ADD KEY `courses_language_id_foreign` (`language_id`);

--
-- Indexes for table `course_tag`
--
ALTER TABLE `course_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_tag_course_id_foreign` (`course_id`),
  ADD KEY `course_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_user_user_id_foreign` (`user_id`),
  ADD KEY `course_user_course_id_foreign` (`course_id`),
  ADD KEY `course_user_certificate_id_foreign` (`certificate_id`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `descriptions_lesson_id_foreign` (`lesson_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_faq_category_id_foreign` (`faq_category_id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_tags`
--
ALTER TABLE `faq_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_tags_faq_id_foreign` (`faq_id`),
  ADD KEY `faq_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `goals_course_id_foreign` (`course_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_section_id_foreign` (`section_id`),
  ADD KEY `lessons_platform_id_foreign` (`platform_id`);

--
-- Indexes for table `lesson_subject`
--
ALTER TABLE `lesson_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_subject_lesson_id_foreign` (`lesson_id`),
  ADD KEY `lesson_subject_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `lesson_user`
--
ALTER TABLE `lesson_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_user_lesson_id_foreign` (`lesson_id`),
  ADD KEY `lesson_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `links_link_category_id_foreign` (`link_category_id`);

--
-- Indexes for table `link_categories`
--
ALTER TABLE `link_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modalities`
--
ALTER TABLE `modalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `observations`
--
ALTER TABLE `observations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `observations_course_id_foreign` (`course_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_test_id_foreign` (`test_id`);

--
-- Indexes for table `question_result_pivot`
--
ALTER TABLE `question_result_pivot`
  ADD KEY `question_result_pivot_question_id_foreign` (`question_id`),
  ADD KEY `question_result_pivot_result_id_foreign` (`result_id`),
  ADD KEY `question_result_pivot_answer_id_foreign` (`answer_id`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requirements_course_id_foreign` (`course_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`),
  ADD KEY `results_question_id_foreign` (`question_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_course_id_foreign` (`course_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_course_id_foreign` (`course_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_user`
--
ALTER TABLE `subscription_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscription_user_user_id_foreign` (`user_id`),
  ADD KEY `subscription_user_subscription_id_foreign` (`subscription_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  ADD PRIMARY KEY (`sequence`),
  ADD UNIQUE KEY `telescope_entries_uuid_unique` (`uuid`),
  ADD KEY `telescope_entries_batch_id_index` (`batch_id`),
  ADD KEY `telescope_entries_family_hash_index` (`family_hash`),
  ADD KEY `telescope_entries_created_at_index` (`created_at`),
  ADD KEY `telescope_entries_type_should_display_on_index_index` (`type`,`should_display_on_index`);

--
-- Indexes for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD KEY `telescope_entries_tags_entry_uuid_tag_index` (`entry_uuid`,`tag`),
  ADD KEY `telescope_entries_tags_tag_index` (`tag`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_tags`
--
ALTER TABLE `term_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `term_tags_term_id_foreign` (`term_id`),
  ADD KEY `term_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_section_id_foreign` (`section_id`),
  ADD KEY `tests_course_id_foreign` (`course_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_category_id_foreign` (`category_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_answer_pivot`
--
ALTER TABLE `user_answer_pivot`
  ADD KEY `user_answer_pivot_user_id_foreign` (`user_id`),
  ADD KEY `user_answer_pivot_question_id_foreign` (`question_id`),
  ADD KEY `user_answer_pivot_answer_id_foreign` (`answer_id`);

--
-- Indexes for table `user_tests`
--
ALTER TABLE `user_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_tests_user_id_foreign` (`user_id`),
  ADD KEY `user_tests_test_id_foreign` (`test_id`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audiences`
--
ALTER TABLE `audiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_user`
--
ALTER TABLE `chat_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `course_tag`
--
ALTER TABLE `course_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1601;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_tags`
--
ALTER TABLE `faq_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1605;

--
-- AUTO_INCREMENT for table `lesson_subject`
--
ALTER TABLE `lesson_subject`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson_user`
--
ALTER TABLE `lesson_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `link_categories`
--
ALTER TABLE `link_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT for table `modalities`
--
ALTER TABLE `modalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `observations`
--
ALTER TABLE `observations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reactions`
--
ALTER TABLE `reactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_user`
--
ALTER TABLE `subscription_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  MODIFY `sequence` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term_tags`
--
ALTER TABLE `term_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_tests`
--
ALTER TABLE `user_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `audiences`
--
ALTER TABLE `audiences`
  ADD CONSTRAINT `audiences_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_modality_id_foreign` FOREIGN KEY (`modality_id`) REFERENCES `modalities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `certificates_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `certificates_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `certificates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_contributor_id_foreign` FOREIGN KEY (`contributor_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_modality_id_foreign` FOREIGN KEY (`modality_id`) REFERENCES `modalities` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_moderator_id_foreign` FOREIGN KEY (`moderator_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_price_id_foreign` FOREIGN KEY (`price_id`) REFERENCES `prices` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `course_tag`
--
ALTER TABLE `course_tag`
  ADD CONSTRAINT `course_tag_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `course_user_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`),
  ADD CONSTRAINT `course_user_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `course_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD CONSTRAINT `descriptions_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_faq_category_id_foreign` FOREIGN KEY (`faq_category_id`) REFERENCES `faq_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faq_tags`
--
ALTER TABLE `faq_tags`
  ADD CONSTRAINT `faq_tags_faq_id_foreign` FOREIGN KEY (`faq_id`) REFERENCES `faqs` (`id`),
  ADD CONSTRAINT `faq_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `goals`
--
ALTER TABLE `goals`
  ADD CONSTRAINT `goals_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_platform_id_foreign` FOREIGN KEY (`platform_id`) REFERENCES `platforms` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `lessons_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lesson_subject`
--
ALTER TABLE `lesson_subject`
  ADD CONSTRAINT `lesson_subject_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lesson_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lesson_user`
--
ALTER TABLE `lesson_user`
  ADD CONSTRAINT `lesson_user_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lesson_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_link_category_id_foreign` FOREIGN KEY (`link_category_id`) REFERENCES `link_categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `observations`
--
ALTER TABLE `observations`
  ADD CONSTRAINT `observations_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_result_pivot`
--
ALTER TABLE `question_result_pivot`
  ADD CONSTRAINT `question_result_pivot_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_result_pivot_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_result_pivot_result_id_foreign` FOREIGN KEY (`result_id`) REFERENCES `results` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reactions`
--
ALTER TABLE `reactions`
  ADD CONSTRAINT `reactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscription_user`
--
ALTER TABLE `subscription_user`
  ADD CONSTRAINT `subscription_user_subscription_id_foreign` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subscription_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD CONSTRAINT `telescope_entries_tags_entry_uuid_foreign` FOREIGN KEY (`entry_uuid`) REFERENCES `telescope_entries` (`uuid`) ON DELETE CASCADE;

--
-- Constraints for table `term_tags`
--
ALTER TABLE `term_tags`
  ADD CONSTRAINT `term_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `term_tags_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`);

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tests_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_answer_pivot`
--
ALTER TABLE `user_answer_pivot`
  ADD CONSTRAINT `user_answer_pivot_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_answer_pivot_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_answer_pivot_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_tests`
--
ALTER TABLE `user_tests`
  ADD CONSTRAINT `user_tests_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_tests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
