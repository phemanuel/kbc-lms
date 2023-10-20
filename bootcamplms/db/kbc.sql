-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 03:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbc`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `ID` int(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `pic_dir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`ID`, `user_email`, `user_pass`, `user_name`, `user_role`, `pic_dir`) VALUES
(1, 'miracle.peters@kingsconsult.com.ng', 'Jewel1995', 'Miracle Peters', 'Admin', 'profilepic.jpg'),
(2, 'femi.akinyooye@kingsconsult.com.ng', 'emma231027', 'Femi Akinyooye', 'Admin', 'profilepic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `assesment`
--

CREATE TABLE `assesment` (
  `ID` int(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_id` int(10) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `student_id` int(10) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `date_submit` date NOT NULL,
  `lapse_date` date NOT NULL,
  `file_dir` varchar(100) NOT NULL,
  `week` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assesment`
--

INSERT INTO `assesment` (`ID`, `user_email`, `course_name`, `course_id`, `course_code`, `student_id`, `student_name`, `date_submit`, `lapse_date`, `file_dir`, `week`) VALUES
(1, 'nugafose2313@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 26, 'Flourish Oshinuga', '2022-07-20', '2022-07-20', 'nugaf97732.pdf', '1'),
(2, 'onyediregrace1@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 28, 'Onyedire  Grace ', '2022-07-23', '2022-07-23', 'onyed68214.pdf', '1'),
(4, 'oluwatosin.oshin@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 27, 'Oshin Oluwatosin', '2022-07-23', '2022-07-23', 'oluwa57366.pdf', '1'),
(5, 'preciousagonsi@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 37, 'Agonsi Precious', '2022-07-23', '2022-07-23', 'preci99420.pdf', '1'),
(6, 'Idikafavor56@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 38, 'Favour Nkechinyerem', '2022-07-24', '2022-07-24', 'Idika77495.pdf', '1'),
(7, 'gracealagh5@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 32, 'GRACE Alagh', '2022-07-24', '2022-07-24', 'grace59720.pdf', '1'),
(9, 'ayenikehinde15@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 25, 'Ayeni Kehinde', '2022-07-24', '2022-07-24', 'ayeni66482.pdf', '1'),
(10, 'emmakinyooye@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 1, 'Akinyooye Akinfemi', '2022-07-25', '2022-07-25', 'emmak71044.pdf', '1'),
(11, 'miraclepeter0@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 2, 'Peters Miracle', '2022-07-25', '2022-07-25', 'mirac17983.pdf', '1'),
(12, 'zulikeemma4life@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 29, 'Eze Onuzulike', '2022-07-25', '2022-07-25', 'zulik1327.pdf', '1'),
(14, 'princessopusunju@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 40, 'Tochi  Princess ', '2022-07-25', '2022-07-25', 'princ61052.pdf', '1'),
(15, 'lambeesther@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 31, 'Lambe Esther', '2022-07-25', '2022-07-25', 'lambe26277.pdf', '1'),
(17, 'chimkamkpamogali@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 34, 'Ogali  Chimkamkpam Osawemwenghevie', '2022-07-26', '2022-07-26', 'chimk12469.pdf', '1'),
(18, 'fashtunnex@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 41, 'Fasoro  Tunmise ', '2022-07-29', '2022-07-29', 'fasht93316.pdf', '1'),
(19, 'nugafose2313@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 26, 'Flourish Oshinuga', '2022-07-31', '2022-07-31', 'nugaf61294.pdf', '2'),
(20, 'ayenikehinde15@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 25, 'Ayeni Kehinde', '2022-08-01', '2022-08-01', 'ayeni61825.pdf', '2'),
(22, 'lambeesther@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 31, 'Lambe Esther', '2022-08-02', '2022-08-02', 'lambe49872.pdf', '2'),
(23, 'oluchijessica74@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 43, 'Oluchi Jessica Ogbuehi ', '2022-08-02', '2022-08-02', 'oluch59625.pdf', '1'),
(24, 'princessopusunju@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 40, 'Tochi  Princess ', '2022-08-02', '2022-08-02', 'princ98396.pdf', '2'),
(25, 'emmanuelfavour275@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 42, 'Njideka Mbagwu', '2022-08-02', '2022-08-02', 'emman10519.pdf', '1'),
(26, 'victoriachidi446@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 52, 'Kasarachi Victoria', '2022-08-03', '2022-08-03', 'victo90718.pdf', '1'),
(27, 'oluwatosin.oshin@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 27, 'Oshin Oluwatosin', '2022-08-03', '2022-08-03', 'oluwa52735.pdf', '2'),
(28, 'preciousagonsi@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 37, 'Agonsi Precious', '2022-08-03', '2022-08-03', 'preci93728.pdf', '2'),
(29, 'olizzypelubabe@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 39, 'Olajide Elizabeth', '2022-08-10', '2022-08-10', 'olizz27253.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bootcamp_project`
--

CREATE TABLE `bootcamp_project` (
  `ID` int(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_id` int(10) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `student_id` int(10) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `date_submit` date NOT NULL,
  `lapse_date` date NOT NULL,
  `file_dir` varchar(100) NOT NULL,
  `review_status` varchar(20) NOT NULL,
  `review_comment` text NOT NULL,
  `week` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bootcamp_project`
--

INSERT INTO `bootcamp_project` (`ID`, `user_email`, `course_name`, `course_id`, `course_code`, `student_id`, `student_name`, `date_submit`, `lapse_date`, `file_dir`, `review_status`, `review_comment`, `week`) VALUES
(1, 'emmakinyooye@gmail.com', 'Social Media Management', 2, 'FREELANCE BOOTCAMP', 1, 'Akinyooye Akinfemi', '2023-05-27', '2023-05-27', 'emmak_6362.pdf', 'In review', 'n/a', ''),
(2, 'emmakinyooye@gmail.com', 'Virtual Assistance', 2, 'FREELANCE BOOTCAMP', 1, 'Akinyooye Akinfemi', '2023-05-27', '2023-05-27', 'emmak_72339.pdf', 'In review', 'n/a', ''),
(3, 'emmakinyooye@gmail.com', 'Lead Generation', 2, 'FREELANCE BOOTCAMP', 1, 'Akinyooye Akinfemi', '2023-05-27', '2023-05-27', 'emmak_58975.pdf', 'In review', 'n/a', '');

-- --------------------------------------------------------

--
-- Table structure for table `countrylist`
--

CREATE TABLE `countrylist` (
  `ID` int(10) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countrylist`
--

INSERT INTO `countrylist` (`ID`, `country`) VALUES
(2, 'Afghanistan'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Antigua and Barbuda'),
(8, 'Argentina'),
(9, 'Armenia'),
(10, 'Australia'),
(11, 'Austria'),
(12, 'Azerbaijan'),
(13, 'Bahamas'),
(14, 'Bahrain'),
(15, 'Bangladesh'),
(16, 'Barbados'),
(17, 'Belarus'),
(18, 'Belgium'),
(19, 'Belize'),
(20, 'Benin'),
(21, 'Bhutan'),
(22, 'Bolivia'),
(23, 'Bosnia and Herzegovina'),
(24, 'Botswana'),
(25, 'Brazil'),
(26, 'Brunei'),
(27, 'Bulgaria'),
(28, 'Burkina Faso'),
(29, 'Burundi'),
(30, 'Cabo Verde'),
(31, 'Cambodia'),
(32, 'Cameroon'),
(33, 'Canada'),
(34, 'Central African Republic (CAR)'),
(35, 'Chad'),
(36, 'Chile'),
(37, 'China'),
(38, 'Colombia'),
(39, 'Comoros'),
(40, 'Congo, Democratic Republic of the'),
(41, 'Congo, Republic of the'),
(42, 'Costa Rica'),
(43, 'Cote d\'Ivoire'),
(44, 'Croatia'),
(45, 'Cuba'),
(46, 'Cyprus'),
(47, 'Czechia'),
(48, 'Denmark'),
(49, 'Djibouti'),
(50, 'Dominica'),
(51, 'Dominican Republic'),
(52, 'Ecuador'),
(53, 'Egypt'),
(54, 'El Salvador'),
(55, 'Equatorial Guinea'),
(56, 'Eritrea'),
(57, 'Estonia'),
(58, 'Eswatini'),
(59, 'Ethiopia'),
(60, 'Fiji'),
(61, 'Finland'),
(62, 'France'),
(63, 'Gabon'),
(64, 'Gambia'),
(65, 'Georgia'),
(66, 'Germany'),
(67, 'Ghana'),
(68, 'Greece'),
(69, 'Grenada'),
(70, 'Guatemala'),
(71, 'Guinea'),
(72, 'Guinea-Bissau'),
(73, 'Guyana'),
(74, 'Haiti'),
(75, 'Honduras'),
(76, 'Hungary'),
(77, 'Iceland'),
(78, 'India'),
(79, 'Indonesia'),
(80, 'Iran'),
(81, 'Iraq'),
(82, 'Ireland'),
(83, 'Israel'),
(84, 'Italy'),
(85, 'Jamaica'),
(86, 'Japan'),
(87, 'Jordan'),
(88, 'Kazakhstan'),
(89, 'Kenya'),
(90, 'Kiribati'),
(91, 'Kosovo'),
(92, 'Kuwait'),
(93, 'Kyrgyzstan'),
(94, 'Laos'),
(95, 'Latvia'),
(96, 'Lebanon'),
(97, 'Lesotho'),
(98, 'Liberia'),
(99, 'Libya'),
(100, 'Liechtenstein'),
(101, 'Lithuania'),
(102, 'Luxembourg'),
(103, 'Madagascar'),
(104, 'Malawi'),
(105, 'Malaysia'),
(106, 'Maldives'),
(107, 'Mali'),
(108, 'Malta'),
(109, 'Marshall Islands'),
(110, 'Mauritania'),
(111, 'Mauritius'),
(112, 'Mexico'),
(113, 'Micronesia'),
(114, 'Moldova'),
(115, 'Monaco'),
(116, 'Mongolia'),
(117, 'Montenegro'),
(118, 'Morocco'),
(119, 'Mozambique'),
(120, 'Myanmar'),
(121, 'Namibia'),
(122, 'Nauru'),
(123, 'Nepal'),
(124, 'Netherlands'),
(125, 'New Zealand'),
(126, 'Nicaragua'),
(127, 'Niger'),
(128, 'Nigeria'),
(129, 'North Korea'),
(130, 'North Macedonia'),
(131, 'Norway'),
(132, 'Oman'),
(133, 'Pakistan'),
(134, 'Palau'),
(135, 'Palestine'),
(136, 'Panama'),
(137, 'Papua New Guinea'),
(138, 'Paraguay'),
(139, 'Peru'),
(140, 'Philippines'),
(141, 'Poland'),
(142, 'Portugal'),
(143, 'Qatar'),
(144, 'Romania'),
(145, 'Russia'),
(146, 'Rwanda'),
(147, 'Saint Kitts and Nevis'),
(148, 'Saint Lucia'),
(149, 'Saint Vincent and the Grenadines'),
(150, 'Samoa'),
(151, 'San Marino'),
(152, 'Sao Tome and Principe'),
(153, 'Saudi Arabia'),
(154, 'Senegal'),
(155, 'Serbia'),
(156, 'Seychelles'),
(157, 'Sierra Leone'),
(158, 'Singapore'),
(159, 'Slovakia'),
(160, 'Slovenia'),
(161, 'Solomon Islands'),
(162, 'Somalia'),
(163, 'South Africa'),
(164, 'South Korea'),
(165, 'South Sudan'),
(166, 'Spain'),
(167, 'Sri Lanka'),
(168, 'Sudan'),
(169, 'Suriname'),
(170, 'Sweden'),
(171, 'Switzerland'),
(172, 'Syria'),
(173, 'Taiwan'),
(174, 'Tajikistan'),
(175, 'Tanzania'),
(176, 'Thailand'),
(177, 'Timor-Leste'),
(178, 'Togo'),
(179, 'Tonga'),
(180, 'Trinidad and Tobago'),
(181, 'Tunisia'),
(182, 'Turkey'),
(183, 'Turkmenistan'),
(184, 'Tuvalu'),
(185, 'Uganda'),
(186, 'Ukraine'),
(187, 'United Arab Emirates (UAE)'),
(188, 'United Kingdom (UK)'),
(189, 'United States of America (USA)'),
(190, 'Uruguay'),
(191, 'Uzbekistan'),
(192, 'Vanuatu'),
(193, 'Vatican City (Holy See)'),
(194, 'Venezuela'),
(195, 'Vietnam'),
(196, 'Yemen'),
(197, 'Zambia'),
(198, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `coursedetail`
--

CREATE TABLE `coursedetail` (
  `lesson_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `lesson_name` varchar(100) NOT NULL,
  `lesson_no` int(10) NOT NULL,
  `lesson_duration` varchar(40) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `lesson_desc` varchar(100) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `week_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursedetail`
--

INSERT INTO `coursedetail` (`lesson_id`, `course_id`, `lesson_name`, `lesson_no`, `lesson_duration`, `course_code`, `lesson_desc`, `file_type`, `course_name`, `week_no`) VALUES
(1, 1, 'Course Introduction & Objectives', 1, '1', 'SMM BLUEPRINT', 'Course Introduction & Objectives', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1),
(2, 1, 'An overview of social media management', 2, '1', 'SMM BLUEPRINT', 'An overview of social media management', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1),
(3, 1, 'Socia media success stories vs disasters', 3, '1', 'SMM BLUEPRINT', 'Socia media success stories vs disasters', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1),
(4, 1, 'Top social media platforms', 4, '1', 'SMM BLUEPRINT', 'Top social media platforms', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1),
(5, 1, 'Setting up social media profiles', 5, '1', 'SMM BLUEPRINT', 'Setting up social media profiles', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1),
(6, 1, 'Optimizing social media profiles', 6, '1', 'SMM BLUEPRINT', 'Optimizing social media profiles', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1),
(7, 1, 'Assessment', 7, '1', 'SMM BLUEPRINT', 'Assessment', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1),
(8, 1, 'Skillls you\'ll need as a social media manager', 1, '1', 'SMM BLUEPRINT', 'Skillls you\'ll need as a social media manager', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 2),
(9, 1, 'Content creation', 2, '1', 'SMM BLUEPRINT', 'Content creation', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 2),
(10, 1, 'Content writing', 3, '1', 'SMM BLUEPRINT', 'Content writing', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 2),
(11, 1, 'What makes content viral', 4, '1', 'SMM BLUEPRINT', 'What makes content viral', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 2),
(12, 1, 'Social Media & Personal Branding', 5, '1', 'SMM BLUEPRINT', 'Social Media & Personal Branding', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 2),
(13, 1, 'Assessment', 6, '1', 'SMM BLUEPRINT', 'Assessment', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 2),
(14, 1, 'Developing a Content Strategy', 1, '1', 'SMM BLUEPRINT', 'Developing a Content Strategy', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 3),
(15, 1, 'Target audience', 2, '1', 'SMM BLUEPRINT', 'Target audience', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 3),
(16, 1, 'How to find a target audience', 3, '1', 'SMM BLUEPRINT', 'How to find a target audience', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 3),
(17, 1, 'Tools for social media managemnet', 4, '1', 'SMM BLUEPRINT', 'Tools for social media managemnet', 'Text + Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 3),
(18, 1, 'Managing your social media presnce', 5, '1', 'SMM BLUEPRINT', 'Managing your social media presnce', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 3),
(19, 1, 'Facebook advertising Strategy', 6, '1', 'SMM BLUEPRINT', 'Facebook advertising Strategy', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 3),
(20, 1, 'Facebook advertising', 7, '1', 'SMM BLUEPRINT', 'Facebook advertising', 'text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 3),
(21, 1, 'Instagram advertising', 8, '1', 'SMM BLUEPRINT', 'Instagram advertising', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 3),
(22, 1, 'Assessment', 9, '1', 'SMM BLUEPRINT', 'Assessment', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 3),
(23, 1, 'Later', 1, '1', 'SMM BLUEPRINT', 'Later', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(24, 1, 'How to increase consideration during marketing', 2, '1', 'SMM BLUEPRINT', 'How to increase consideration during marketing', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(25, 1, 'Calculating insights and ROI', 3, '1', 'SMM BLUEPRINT', 'Calculating insights and ROI', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(26, 1, 'Getting started after learning', 4, '1', 'SMM BLUEPRINT', 'Getting started after learning', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(27, 1, 'Client Intake', 5, '1', 'SMM BLUEPRINT', 'Client Intake', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(28, 1, 'Templates', 6, '1', 'SMM BLUEPRINT', 'Templates', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(29, 1, 'Webinar(Real life challenges social media managers go through)', 7, '1', 'SMM BLUEPRINT', 'Webinar(Real life challenges social media managers go through)', 'Text', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(30, 1, 'Introduction to Canva', 8, '1', 'SMM BLUEPRINT', 'Introduction to Canva', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(31, 1, 'How to use removebg', 9, '1', 'SMM BLUEPRINT', 'How to use removebg', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(32, 1, 'Shape Update', 10, '1', 'SMM BLUEPRINT', 'Shape Update', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(33, 1, 'Tables in Canva', 11, '1', 'SMM BLUEPRINT', 'Tables in Canva', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(34, 1, 'Charts in Canva', 12, '1', 'SMM BLUEPRINT', 'Charts in Canva', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(35, 1, 'Profile Creation', 13, '1', 'SMM BLUEPRINT', 'Profile Creation', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(36, 1, 'Social media design', 14, '1', 'SMM BLUEPRINT', 'Social media design', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(37, 1, 'Perfume sales flyer', 15, '1', 'SMM BLUEPRINT', 'Perfume sales flyer', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(38, 1, 'Cake flyer', 16, '1', 'SMM BLUEPRINT', 'Cake flyer', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(39, 1, 'Instagram highlight design', 17, '1', 'SMM BLUEPRINT', 'Instagram highlight design', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(40, 1, 'Product package design', 18, '1', 'SMM BLUEPRINT', 'Product package design', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(41, 1, 'Product price design', 19, '1', 'SMM BLUEPRINT', 'Product price design', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(42, 1, 'Product catalogue design', 20, '1', 'SMM BLUEPRINT', 'Product catalogue design', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(43, 1, 'Simple advert flyer', 21, '1', 'SMM BLUEPRINT', 'Simple advert flyer', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(44, 1, 'Fashion sale flyer', 22, '1', 'SMM BLUEPRINT', 'Fashion sale flyer', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(45, 1, 'New month flyer', 23, '1', 'SMM BLUEPRINT', 'New month flyer', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(46, 1, 'Social media design', 24, '1', 'SMM BLUEPRINT', 'Social media design', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(47, 1, 'Flyer design', 25, '1', 'SMM BLUEPRINT', 'Flyer design', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(48, 1, 'Design Challenge', 26, '1', 'SMM BLUEPRINT', 'Design Challenge', 'Video', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 4),
(70, 1, 'Introduction to Customer Support', 1, '6', 'FREELANCE BOOTCAMP', 'Introduction to Customer Support', 'Video', 'CUSTOMER SUPPORT', 1),
(71, 1, 'Effective Communication Skills for Customer Support', 2, '6', 'FREELANCE BOOTCAMP', 'Effective Communication Skills for Customer Support', 'Video', 'CUSTOMER SUPPORT', 1),
(72, 1, 'Customer Needs and Expectations', 3, '6', 'FREELANCE BOOTCAMP', 'Customer Needs and Expectations', 'Video', 'CUSTOMER SUPPORT', 1),
(73, 1, 'Time Management and Prioritization for Efficient Support', 4, '6', 'FREELANCE BOOTCAMP', 'Time Management and Prioritization for Efficient Support', 'Video', 'CUSTOMER SUPPORT', 1),
(74, 1, 'Multichannel Customer Support', 5, '6', 'FREELANCE BOOTCAMP', 'Multichannel Customer Support', 'Video', 'CUSTOMER SUPPORT', 1),
(75, 1, 'Resolving Complaints and Difficult Situations', 6, '6', 'FREELANCE BOOTCAMP', 'Resolving Complaints and Difficult Situations', 'Video', 'CUSTOMER SUPPORT', 1),
(76, 1, 'Ethics and Professionalism in Customer Support', 7, '6', 'FREELANCE BOOTCAMP', 'Ethics and Professionalism in Customer Support', 'Video', 'CUSTOMER SUPPORT', 1),
(77, 1, 'Introduction to Lead Generation', 1, '6', 'FREELANCE BOOTCAMP', 'Introduction to Lead Generation', 'Video', 'LEAD GENERATION', 1),
(78, 1, 'Lead Generation Strategies and Techniques', 2, '6', 'FREELANCE BOOTCAMP', 'Lead Generation Strategies and Techniques', 'Video', 'LEAD GENERATION', 1),
(79, 1, 'Tools and Software for Lead Generation', 3, '6', 'FREELANCE BOOTCAMP', 'Tools and Software for Lead Generation', 'Video', 'LEAD GENERATION', 1),
(80, 1, 'Effective Copywriting for Lead Generation', 4, '6', 'FREELANCE BOOTCAMP', 'Effective Copywriting for Lead Generation', 'Video', 'LEAD GENERATION', 1),
(81, 1, 'Lead Qualification and Follow-up', 5, '6', 'FREELANCE BOOTCAMP', 'Lead Qualification and Follow-up', 'Video', 'LEAD GENERATION', 1),
(82, 1, 'An overview of social media management', 1, '6', 'FREELANCE BOOTCAMP', 'An overview of social media management', 'Video', 'SOCIAL MEDIA MANAGEMENT', 1),
(83, 1, 'Setting up social media profiles', 2, '6', 'FREELANCE BOOTCAMP', 'Setting up social media profiles', 'Text', 'SOCIAL MEDIA MANAGEMENT', 1),
(84, 1, 'Optimizing social media profiles', 3, '6', 'FREELANCE BOOTCAMP', 'Optimizing social media profiles', 'Text', 'SOCIAL MEDIA MANAGEMENT', 1),
(85, 1, 'Social media management skills', 4, '6', 'FREELANCE BOOTCAMP', 'Social media management skills', 'Video', 'SOCIAL MEDIA MANAGEMENT', 1),
(86, 1, 'Social media Content creation', 5, '6', 'FREELANCE BOOTCAMP', 'Social media Content creation', 'Video', 'SOCIAL MEDIA MANAGEMENT', 1),
(87, 1, 'Guide to content creation', 6, '6', 'FREELANCE BOOTCAMP', 'Guide to content creation', 'Text', 'SOCIAL MEDIA MANAGEMENT', 1),
(88, 1, 'Content writing', 7, '6', 'FREELANCE BOOTCAMP', 'Content writing', 'Text', 'SOCIAL MEDIA MANAGEMENT', 1),
(89, 1, 'What makes content viral', 8, '6', 'FREELANCE BOOTCAMP', 'What makes content viral', 'Video', 'SOCIAL MEDIA MANAGEMENT', 1),
(90, 1, 'Social Media & Personal Branding', 9, '6', 'FREELANCE BOOTCAMP', 'Social Media & Personal Branding', 'Text', 'SOCIAL MEDIA MANAGEMENT', 1),
(91, 1, 'Social media Content Strategy', 10, '6', 'FREELANCE BOOTCAMP', 'Social media Content Strategy', 'Video', 'SOCIAL MEDIA MANAGEMENT', 1),
(92, 1, 'Target audience', 11, '6', 'FREELANCE BOOTCAMP', 'Target audience', 'Video', 'SOCIAL MEDIA MANAGEMENT', 1),
(93, 1, 'How to find a target audience', 12, '6', 'FREELANCE BOOTCAMP', 'How to find a target audience', 'Video', 'SOCIAL MEDIA MANAGEMENT', 1),
(94, 1, 'Tools for social media management', 13, '6', 'FREELANCE BOOTCAMP', 'Tools for social media management', 'Text', 'SOCIAL MEDIA MANAGEMENT', 1),
(95, 1, 'Social media advertising Strategy', 14, '6', 'FREELANCE BOOTCAMP', 'Social media advertising Strategy', 'Video', 'SOCIAL MEDIA MANAGEMENT', 1),
(96, 1, 'Facebook advertising', 15, '6', 'FREELANCE BOOTCAMP', 'Facebook advertising', 'Video', 'SOCIAL MEDIA MANAGEMENT', 1),
(97, 1, 'Instagram advertising', 16, '6', 'FREELANCE BOOTCAMP', 'Instagram advertising', 'Video', 'SOCIAL MEDIA MANAGEMENT', 1),
(98, 1, 'Calculating insights and ROI', 17, '6', 'FREELANCE BOOTCAMP', 'Calculating insights and ROI', 'Text', 'SOCIAL MEDIA MANAGEMENT', 1),
(99, 1, 'Getting started after learning', 18, '6', 'FREELANCE BOOTCAMP', 'Getting started after learning', 'Text', 'SOCIAL MEDIA MANAGEMENT', 1),
(100, 1, 'Client Intake', 19, '6', 'FREELANCE BOOTCAMP', 'Client Intake', 'Text', 'SOCIAL MEDIA MANAGEMENT', 1),
(101, 1, 'Templates', 20, '6', 'FREELANCE BOOTCAMP', 'Templates', 'Text', 'SOCIAL MEDIA MANAGEMENT', 1),
(102, 1, 'Project', 21, '6', 'FREELANCE BOOTCAMP', 'Project', 'text', 'SOCIAL MEDIA MANAGEMENT', 1),
(103, 1, 'Introduction to Virtual Assistance', 1, '6', 'FREELANCE BOOTCAMP', 'Introduction to Virtual Assistance', 'Video', 'VIRTUAL ASSISTANCE', 1),
(104, 1, 'Communication and Professionalism for Virtual Assistance', 2, '6', 'FREELANCE BOOTCAMP', 'Communication and Professionalism for Virtual Assistance', 'Video', 'VIRTUAL ASSISTANCE', 1),
(105, 1, 'Time and Task Management For Efficient Virtual Assistance', 3, '6', 'FREELANCE BOOTCAMP', 'Time and Task Management For Efficient Virtual Assistance', 'Video', 'VIRTUAL ASSISTANCE', 1),
(106, 1, 'Organization and File Management', 4, '6', 'FREELANCE BOOTCAMP', 'Organization and File Management', 'Video', 'VIRTUAL ASSISTANCE', 1),
(107, 1, 'Research and Data Gathering', 5, '6', 'FREELANCE BOOTCAMP', 'Research and Data Gathering', 'Video', 'VIRTUAL ASSISTANCE', 1),
(108, 1, 'Administrative Support', 6, '6', 'FREELANCE BOOTCAMP', 'Administrative Support', 'Video', 'VIRTUAL ASSISTANCE', 1),
(109, 1, 'Financial Assistance', 7, '6', 'FREELANCE BOOTCAMP', 'Financial Assistance', 'Video', 'VIRTUAL ASSISTANCE', 1),
(110, 1, 'Social Media Virtual Assistance', 8, '6', 'FREELANCE BOOTCAMP', 'Social Media Virtual Assistance', 'Video', 'VIRTUAL ASSISTANCE', 1),
(111, 1, 'Freelancing as a Virtual Assistant', 9, '6', 'FREELANCE BOOTCAMP', 'Freelancing as a Virtual Assistant', 'Video', 'VIRTUAL ASSISTANCE', 1),
(112, 1, 'Project', 10, '6', 'FREELANCE BOOTCAMP', 'Project', 'Video', 'VIRTUAL ASSISTANCE', 1),
(113, 1, 'Introduction to Customer Support', 1, '1', 'CS BLUEPRINT', 'Introduction to Customer Support', 'Video', 'CUSTOMER SUPPORT BLUEPRINT', 1),
(114, 1, 'Effective Communication Skills for Customer Support', 2, '1', 'CS BLUEPRINT', 'Effective Communication Skills for Customer Support', 'Video', 'CUSTOMER SUPPORT BLUEPRINT', 1),
(115, 1, 'Customer Needs and Expectations', 3, '1', 'CS BLUEPRINT', 'Customer Needs and Expectations', 'Video', 'CUSTOMER SUPPORT BLUEPRINT', 1),
(116, 1, 'Time Management and Prioritization for Efficient Support', 4, '1', 'CS BLUEPRINT', 'Time Management and Prioritization for Efficient Support', 'Video', 'CUSTOMER SUPPORT BLUEPRINT', 1),
(117, 1, 'Multichannel Customer Support', 5, '1', 'CS BLUEPRINT', 'Multichannel Customer Support', 'Video', 'CUSTOMER SUPPORT BLUEPRINT', 1),
(118, 1, 'Resolving Complaints and Difficult Situations', 6, '1', 'CS BLUEPRINT', 'Resolving Complaints and Difficult Situations', 'Video', 'CUSTOMER SUPPORT BLUEPRINT', 1),
(119, 1, 'Ethics and Professionalism in Customer Support', 7, '1', 'CS BLUEPRINT', 'Ethics and Professionalism in Customer Support', 'Video', 'CUSTOMER SUPPORT BLUEPRINT', 1),
(120, 1, 'Freelancing as a Customer Support Professional', 8, '1', 'CS BLUEPRINT', 'Freelancing as a Customer Support Professional', 'Video', 'CUSTOMER SUPPORT BLUEPRINT', 1),
(121, 1, 'Introduction to Lead Generation', 1, '1', 'LD BLUEPRINT', 'Introduction to Lead Generation', 'Video', 'LEAD GENERATION BLUEPRINT', 1),
(122, 1, 'Lead Generation Strategies and Techniques', 2, '1', 'LD BLUEPRINT', 'Lead Generation Strategies and Techniques', 'Video', 'LEAD GENERATION BLUEPRINT', 1),
(123, 1, 'Tools and Software for Lead Generation', 3, '1', 'LD BLUEPRINT', 'Tools and Software for Lead Generation', 'Video', 'LEAD GENERATION BLUEPRINT', 1),
(124, 1, 'Effective Copywriting for Lead Generation', 4, '1', 'LD BLUEPRINT', 'Effective Copywriting for Lead Generation', 'Video', 'LEAD GENERATION BLUEPRINT', 1),
(125, 1, 'Lead Qualification and Follow-up', 5, '1', 'LD BLUEPRINT', 'Lead Qualification and Follow-up', 'Video', 'LEAD GENERATION BLUEPRINT', 1),
(126, 1, 'Creating Compelling Lead Magnets', 6, '1', 'LD BLUEPRINT', 'Creating Compelling Lead Magnets', 'Video', 'LEAD GENERATION BLUEPRINT', 1),
(127, 1, 'Freelancing as a Lead Generation Specialist', 7, '1', 'LD BLUEPRINT', 'Freelancing as a Lead Generation Specialist', 'Video', 'LEAD GENERATION BLUEPRINT', 1),
(128, 1, 'Introduction to Virtual Assistance', 1, '1', 'VA BLUEPRINT', 'Introduction to Virtual Assistance', 'Video', 'VIRTUAL ASSISTANCE BLUEPRINT', 1),
(129, 1, 'Communication and Professionalism for Virtual Assistance', 2, '1', 'VA BLUEPRINT', 'Communication and Professionalism for Virtual Assistance', 'Video', 'VIRTUAL ASSISTANCE BLUEPRINT', 1),
(130, 1, 'Time and Task Management For Efficient Virtual Assistance', 3, '1', 'VA BLUEPRINT', 'Time and Task Management For Efficient Virtual Assistance', 'Video', 'VIRTUAL ASSISTANCE BLUEPRINT', 1),
(131, 1, 'Organization and File Management', 4, '1', 'VA BLUEPRINT', 'Organization and File Management', 'Video', 'VIRTUAL ASSISTANCE BLUEPRINT', 1),
(132, 1, 'Research and Data Gathering', 5, '1', 'VA BLUEPRINT', 'Research and Data Gathering', 'Video', 'VIRTUAL ASSISTANCE BLUEPRINT', 1),
(133, 1, 'Administrative Support', 6, '1', 'VA BLUEPRINT', 'Administrative Support', 'Video', 'VIRTUAL ASSISTANCE BLUEPRINT', 1),
(134, 1, 'Financial Assistance', 7, '1', 'VA BLUEPRINT', 'Financial Assistance', 'Video', 'VIRTUAL ASSISTANCE BLUEPRINT', 1),
(135, 1, 'Social Media Virtual Assistance', 8, '1', 'VA BLUEPRINT', 'Social Media Virtual Assistance', 'Video', 'VIRTUAL ASSISTANCE BLUEPRINT', 1),
(136, 1, 'Freelancing as a Virtual Assistant', 9, '1', 'VA BLUEPRINT', 'Freelancing as a Virtual Assistant', 'Video', 'VIRTUAL ASSISTANCE BLUEPRINT', 1),
(137, 1, 'Project', 10, '1', 'VA BLUEPRINT', 'Project', 'Video', 'VIRTUAL ASSISTANCE BLUEPRINT', 1),
(138, 1, 'Project', 6, '6', 'FREELANCE BOOTCAMP', 'Project', 'Text', 'LEAD GENERATION', 1),
(139, 1, 'Project', 8, '6', 'FREELANCE BOOTCAMP', 'Project', 'text', 'CUSTOMER SUPPORT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courselist`
--

CREATE TABLE `courselist` (
  `course_id` int(10) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_duration` varchar(10) NOT NULL,
  `course_price` double(10,2) NOT NULL,
  `course_price1` double(10,2) NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courselist`
--

INSERT INTO `courselist` (`course_id`, `course_name`, `course_code`, `course_duration`, `course_price`, `course_price1`, `last_update`) VALUES
(1, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 15000.00, 27.00, '2022-07-14'),
(2, 'FREELANCE BOOTCAMP', 'FREELANCE BOOTCAMP', '6 Weeks', 12250.00, 20.00, '2023-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `coursereg`
--

CREATE TABLE `coursereg` (
  `ID` int(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `course_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_duration` varchar(20) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `progress` int(10) NOT NULL,
  `current_stage` int(10) NOT NULL,
  `course_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursereg`
--

INSERT INTO `coursereg` (`ID`, `user_email`, `course_id`, `student_id`, `course_name`, `course_code`, `course_duration`, `student_name`, `progress`, `current_stage`, `course_status`) VALUES
(1, 'miraclepeter0@gmail.com', 1, 2, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Peters Miracle', 20, 2, 'In progress'),
(2, 'emmakinyooye@gmail.com', 1, 1, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Akinyooye Akinfemi', 100, 4, 'Completed'),
(3, 'oluwatosin.oshin@gmail.com', 1, 27, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Oshin Oluwatosin', 40, 3, 'In progress'),
(4, 'lambeesther@gmail.com', 1, 31, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Lambe Esther', 40, 3, 'In progress'),
(5, 'princessopusunju@gmail.com', 1, 40, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Tochi  Princess ', 40, 3, 'In progress'),
(6, 'chimkamkpamogali@gmail.com', 1, 34, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Ogali  Chimkamkpam Osawemwenghevie', 20, 2, 'In progress'),
(7, 'olizzypelubabe@gmail.com', 1, 39, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Olajide Elizabeth', 20, 2, 'In progress'),
(8, 'ayenikehinde15@gmail.com', 1, 25, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Ayeni Kehinde', 40, 3, 'In progress'),
(9, 'nugafose2313@gmail.com', 1, 26, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Flourish Oshinuga', 40, 3, 'In progress'),
(10, 'onyediregrace1@gmail.com', 1, 28, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Onyedire  Grace ', 20, 2, 'In progress'),
(11, 'brightagaps@gmail.com', 1, 35, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Agaptus  Bright', 0, 1, 'In progress'),
(12, 'oluchijessica74@gmail.com', 1, 43, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Oluchi Jessica Ogbuehi ', 20, 2, 'In progress'),
(13, 'adav71870@gmail.com', 1, 30, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Umeh Adaeze', 0, 1, 'In progress'),
(14, 'angeluwagbama@gmail.com', 1, 36, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Uwagbama ibeh Angel', 0, 1, 'In progress'),
(16, 'gracealagh5@gmail.com', 1, 32, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'GRACE Alagh', 20, 2, 'In progress'),
(17, 'adelekegabriel12@gmail.com', 1, 24, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Adeleke  Ayobami ', 0, 1, 'In progress'),
(18, 'preciousagonsi@gmail.com', 1, 37, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Agonsi Precious', 40, 3, 'In progress'),
(19, 'Idikafavor56@gmail.com', 1, 38, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Favour Nkechinyerem', 40, 3, 'In progress'),
(20, 'zulikeemma4life@gmail.com', 1, 29, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Eze Onuzulike', 20, 2, 'In progress'),
(21, 'temiloluwaakinyooye@gmail.com', 1, 49, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Akinyooye Temiloluwa', 0, 1, 'In progress'),
(22, 'fashtunnex@gmail.com', 1, 41, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Fasoro  Tunmise ', 20, 2, 'In progress'),
(23, 'victoriachidi446@gmail.com', 1, 52, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Kasarachi Victoria', 20, 2, 'In progress'),
(24, 'emmanuelfavour275@gmail.com', 1, 42, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Njideka Mbagwu', 20, 2, 'In progress'),
(25, 'sesstar44@gmail.com', 1, 33, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '4 Weeks', 'Odediran Oluseyi', 0, 1, 'In progress'),
(26, 'emmakinyooye@gmail.com', 2, 1, 'FREELANCE BOOTCAMP', 'FREELANCE BOOTCAMP', '6 Weeks', 'Akinyooye Akinfemi', 0, 1, 'In progress');

-- --------------------------------------------------------

--
-- Table structure for table `courseschedule`
--

CREATE TABLE `courseschedule` (
  `ID` int(10) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `connect_session_date` date NOT NULL,
  `connect_session_time` varchar(20) NOT NULL,
  `career_session_date` date NOT NULL,
  `career_session_time` varchar(20) NOT NULL,
  `assesment1_date` date NOT NULL,
  `assesment2_date` date NOT NULL,
  `assesment3_date` date NOT NULL,
  `assesment4_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseschedule`
--

INSERT INTO `courseschedule` (`ID`, `course_name`, `course_code`, `connect_session_date`, `connect_session_time`, `career_session_date`, `career_session_time`, `assesment1_date`, `assesment2_date`, `assesment3_date`, `assesment4_date`) VALUES
(1, 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 'SMM BLUEPRINT', '2022-08-06', '8:00pm', '2022-08-06', '8:50pm', '2022-07-23', '2022-07-30', '2022-08-06', '2022-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `paytransaction`
--

CREATE TABLE `paytransaction` (
  `ID` int(10) NOT NULL,
  `transref` varchar(30) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `date1` datetime NOT NULL,
  `datekeep` date NOT NULL,
  `time1` varchar(10) NOT NULL,
  `pay_status` varchar(20) NOT NULL,
  `response_code` varchar(10) NOT NULL,
  `response_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paytransaction`
--

INSERT INTO `paytransaction` (`ID`, `transref`, `last_name`, `first_name`, `amount`, `user_email`, `mobile_no`, `pay_type`, `course_code`, `date1`, `datekeep`, `time1`, `pay_status`, `response_code`, `response_desc`) VALUES
(1, 'SMM001', 'Akinyooye', 'Akinfemi', 4999.00, 'emmakinyooye@gmail.com', '7032689329', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(2, 'SMM002', 'Peters', 'Miracle', 4999.00, 'miraclepeter0@gmail.com', '', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(3, 'SMM003', 'Adeleke ', 'Ayobami ', 4999.00, 'adelekegabriel12@gmail.com', '9061859182', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(4, 'SMM004', 'Ayeni', 'Kehinde', 4999.00, 'ayenikehinde15@gmail.com', '8161722931', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(5, 'SMM005', 'Flourish', 'Oshinuga', 4999.00, 'nugafose2313@gmail.com', '8135698857', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(6, 'SMM006', 'Oshin', 'Oluwatosin', 4999.00, 'oluwatosin.oshin@gmail.com', '8037989933', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(7, 'SMM007', 'Onyedire ', 'Grace ', 4999.00, 'Onyediregrace1@gmail.com', '27685350011', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(8, 'SMM008', 'Eze', 'Onuzulike', 4999.00, 'zulikeemma4life@gmail.com', '8032908120', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(9, 'SMM009', 'Umeh', 'Adaeze', 4999.00, 'adav71870@gmail.com', '7039052681', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(10, 'SMM010', 'Lambe', 'Esther', 4999.00, 'lambeesther@gmail.com', '8165147076', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(11, 'SMM011', 'GRACE', 'Alagh', 4999.00, 'gracealagh5@gmail.com', '9055276767', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(12, 'SMM012', 'Odediran', 'Oluseyi', 4999.00, 'sesstar44@gmail.com', '2.35E+12', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(13, 'SMM013', 'Ogali ', 'Chimkamkpam Osawemwenghevie', 4999.00, 'chimkamkpamogali@gmail.com', '9030798550', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(14, 'SMM014', 'Agaptus ', 'Bright', 4999.00, 'brightagaps@gmail.com', '9038386199', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(15, 'SMM015', 'Uwagbama ibeh', 'Angel', 4999.00, 'angeluwagbama@gmail.com', '9036612236', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(16, 'SMM016', 'Agonsi', 'Precious', 4999.00, 'preciousagonsi@gmail.com', '7060980867', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(17, 'SMM017', 'Favour', 'Nkechinyerem', 4999.00, 'Idikafavor56@gmail.com', '7037444930', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(18, 'SMM018', 'Olajide', 'Elizabeth', 4999.00, 'olizzypelubabe@gmail.com', '8167249780', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(19, 'SMM019', 'Tochi ', 'Princess ', 4999.00, 'princessopusunju@gmail.com', '8105981453', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(20, 'SMM020', 'Fasoro ', 'Tunmise ', 4999.00, 'fashtunnex@gmail.com', '9038299275', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(21, 'SMM021', 'Njideka', 'Mbagwu', 4999.00, 'emmanuelfavour275@gmail.com', '2.35E+12', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(22, 'SMM022', 'Oluchi Jessica', 'Ogbuehi ', 4999.00, 'oluchijessica74@gmail.com', '8161974409', 'Course Registration', 'SMM BLUEPRINT', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution'),
(23, 'KBCLMS116172407', 'Akinyooye', 'Temiloluwa', 475.00, 'temiloluwaakinyooye@gmail.com', '08053608799', 'Course Registration', 'SMM BLUEPRINT', '2022-07-22 00:00:00', '2022-07-22', '12:56:53pm', 'Successful', 'response_c', 'Approved by Financial Institution'),
(24, 'SMM024', 'KASARACHI', 'VICTORIA', 4999.00, 'victoriachidi446@gmail.com', '08187482172', 'Course Registration', 'SMM BLUEPRINT', '2022-07-28 10:20:29', '2022-07-28', '10:20:29', 'Successful', '00', 'Approved by Financial Institution'),
(25, 'FBOOT001', 'Akinyooye', 'Akinfemi', 12250.00, 'emmakinyooye@gmail.com', '7032689329', 'Course Registration', 'FREELANCE BOOTCAMP', '0000-00-00 00:00:00', '0000-00-00', '', 'Successful', '00', 'Approved by Financial Institution');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ID` int(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_id` int(10) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `student_id` int(10) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `date_submit` datetime NOT NULL,
  `lapse_date` date NOT NULL,
  `file_dir1` text NOT NULL,
  `file_dir2` text NOT NULL,
  `file_dir3` text NOT NULL,
  `file_dir4` text NOT NULL,
  `certificate_name` varchar(100) NOT NULL,
  `review_status` varchar(30) NOT NULL,
  `review_comment` text NOT NULL,
  `week` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `user_email`, `course_name`, `course_id`, `course_code`, `student_id`, `student_name`, `date_submit`, `lapse_date`, `file_dir1`, `file_dir2`, `file_dir3`, `file_dir4`, `certificate_name`, `review_status`, `review_comment`, `week`) VALUES
(1, 'emmakinyooye@gmail.com', 'SOCIAL MEDIA MANAGEMENT BLUEPRINT', 1, 'SMM BLUEPRINT', 1, 'Akinyooye Akinfemi', '2022-10-04 00:00:00', '2022-10-04', 'https://www.w3schools.com/php/php_form_url_email.asp', 'https://www.w3schools.com/php/php_form_url_email.asp', 'https://www.w3schools.com/php/php_form_url_email.asp', 'https://www.w3schools.com/php/php_form_url_email.asp', 'AKINYOOYE AKINFEMI', 'Reviewed', 'Your project meet all requirements, congratulations.', '4');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(10) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `account_status` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `profile_info` varchar(1000) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pic_dir` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `datekeep` datetime NOT NULL,
  `location` varchar(100) NOT NULL,
  `pro_level` varchar(50) NOT NULL,
  `expectation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `last_name`, `account_status`, `first_name`, `phone_no`, `occupation`, `profile_info`, `country`, `pic_dir`, `user_email`, `user_pass`, `datekeep`, `location`, `pro_level`, `expectation`) VALUES
(1, 'Akinyooye', 1, 'Akinfemi', '08034271855', 'Student', 'Akinyooye Akinfemi, a student of University of Ibadan, currently studying Mass communication.\r\n\r\nI love to read books and make research.', 'Nigeria', '5117.pdf', 'emmakinyooye@gmail.com', 'emma231027', '2022-06-09 00:00:00', '', '', ''),
(2, 'Peters', 1, 'Miracle', '08104196102', 'Digital Marketer', '', 'Nigeria', 'miraclepeters@gmail.com.jpg', 'miraclepeter0@gmail.com', 'Jewel1995', '2022-07-15 00:00:00', '', '', ''),
(24, 'Adeleke ', 1, 'Ayobami ', '9061859182', 'Pastoral Ministry', 'n/a', 'n/a', 'blank.jpg', 'adelekegabriel12@gmail.com', 'adeola1234', '0000-00-00 00:00:00', 'Ibadan', 'Beginner level', 'Growth and knowledge '),
(25, 'Ayeni', 1, 'Kehinde', '8161722931', 'Teacher and content writer', 'n/a', 'n/a', 'blank.jpg', 'ayenikehinde15@gmail.com', 'kenziegal15', '0000-00-00 00:00:00', 'Ibadan', 'Intermediate', 'I expect to learn the nitty gritty of social media management and design professionally with Canva.'),
(26, 'Flourish', 1, 'Oshinuga', '8135698857', 'Civil servant', 'n/a', 'n/a', 'blank.jpg', 'nugafose2313@gmail.com', 'smmblueprint', '0000-00-00 00:00:00', 'Enugu', 'Beginner level', 'To become a professional through the training program. '),
(27, 'Oshin', 1, 'Oluwatosin', '8037989933', 'Civil Servant', 'n/a', 'n/a', 'blank.jpg', 'oluwatosin.oshin@gmail.com', 'oluwatosin1987', '0000-00-00 00:00:00', 'Lagos', 'Beginner level', 'To become a professional Social Manager and other things attached to it. '),
(28, 'Onyedire ', 1, 'Grace ', '27685350011', 'Freelancer/work from home ', 'n/a', 'n/a', 'blank.jpg', 'Onyediregrace1@gmail.com', 'grace##98', '0000-00-00 00:00:00', 'South Africa ', 'Beginner level', 'To be well grounded in this field of a social media manager '),
(29, 'Eze', 1, 'Onuzulike', '8032908120', 'Entrepreneur ', 'n/a', 'n/a', 'blank.jpg', 'zulikeemma4life@gmail.com', '301115', '0000-00-00 00:00:00', 'Enugu ', 'Intermediate', 'To get developed more on information and technology on social media services. '),
(30, 'Umeh', 0, 'Adaeze', '7039052681', 'Self employed', 'n/a', 'n/a', 'blank.jpg', 'adav71870@gmail.com', '1993', '0000-00-00 00:00:00', 'Ogun state', 'Beginner level', 'I really want to learn '),
(31, 'Lambe', 1, 'Esther', '8165147076', 'E-commerce businesswomen', 'n/a', 'n/a', 'blank.jpg', 'lambeesther@gmail.com', 'Tobi4testimony', '0000-00-00 00:00:00', 'Osogbo', 'Intermediate', 'To learn the art of social media management'),
(32, 'GRACE', 1, 'ALAGH ', '9055276767', 'Student', 'n/a', 'Nigeria', 'blank.jpg', 'gracealagh5@gmail.com', 'Smartie@3', '0000-00-00 00:00:00', 'Abuja', 'Beginner level', 'To get full knowledge on social media management to  kick up a career in it '),
(33, 'Odediran', 1, 'Oluseyi', '2.35E+12', 'Civil servant', 'n/a', 'n/a', 'blank.jpg', 'sesstar44@gmail.com', 'Jodink44', '0000-00-00 00:00:00', 'Ibadan', 'Beginner level', 'To become professional'),
(34, 'Ogali ', 1, 'Chimkamkpam Osawemwenghevie', '9030798550', 'Entrepreneur ', 'n/a', 'n/a', 'blank.jpg', 'chimkamkpamogali@gmail.com', 'Suyaspot04.', '0000-00-00 00:00:00', 'Ibadan', 'Beginner level', 'To gain mastery of SMM to an advanced level, where I can offer my services confidently to profitable brands.'),
(35, 'Agaptus ', 1, 'Bright', '9038386199', 'Student', 'n/a', 'n/a', 'blank.jpg', 'brightagaps@gmail.com', 'bright8556', '0000-00-00 00:00:00', 'Lagos', 'Beginner level', 'I hope to be able to learn everything on social media management '),
(36, 'Uwagbama ibeh', 1, 'Angel', '9036612236', 'Social media manager', 'n/a', 'n/a', 'blank.jpg', 'angeluwagbama@gmail.com', 'Angelibeh@13', '0000-00-00 00:00:00', 'Lagos', 'Advanced', 'Nothing but the best'),
(37, 'Agonsi', 1, 'Precious', '7060980867', 'Social Media Marketer ', 'n/a', 'n/a', 'blank.jpg', 'preciousagonsi@gmail.com', 'Mopreshysmm001@#', '0000-00-00 00:00:00', 'Lagos', 'Intermediate', 'I expect to have a more in-depth knowledge on how to use social media for business growth and learn the skills involved in effective social media management.'),
(38, 'Favour', 1, 'Nkechinyerem', '7037444930', 'Business/student', 'n/a', 'n/a', 'blank.jpg', 'Idikafavor56@gmail.com', 'divine$@$', '0000-00-00 00:00:00', 'Lekki Ajah lagos', 'Beginner level', 'My expectations are high.\nFare and nice.'),
(39, 'Olajide', 1, 'Elizabeth', '8167249780', 'Teaching', 'n/a', 'n/a', 'blank.jpg', 'olizzypelubabe@gmail.com', 'Lizzybetty08', '0000-00-00 00:00:00', 'Lagos', 'Beginner level', 'To attain my goal to an expected level'),
(40, 'Tochi ', 1, 'Princess ', '8105981453', 'Business ', 'n/a', 'n/a', 'blank.jpg', 'princessopusunju@gmail.com', 'Tochi2', '0000-00-00 00:00:00', 'Calabar ', 'Beginner level', 'To be able to create contents in differentsocialmediaplatforms, make good earnings by performing different kinds of tasks on like freelancing on social media, and also market goods that can reach as m'),
(41, 'Fasoro ', 1, 'Tunmise ', '9038299275', 'Teaching ', 'n/a', 'n/a', 'blank.jpg', 'fashtunnex@gmail.com', '3098', '0000-00-00 00:00:00', 'Ondo', 'Beginner level', 'To be well taught with no rush... '),
(42, 'Njideka', 1, 'Mbagwu', '2.35E+12', 'Teacher', 'n/a', 'n/a', 'blank.jpg', 'emmanuelfavour275@gmail.com', 'KAY1997', '0000-00-00 00:00:00', 'Abuja', 'Beginner level', 'To be a pro at social media management by the end of the class'),
(43, 'Oluchi Jessica', 1, 'Ogbuehi ', '8161974409', 'Business', 'n/a', 'n/a', 'blank.jpg', 'oluchijessica74@gmail.com', '348938386461', '0000-00-00 00:00:00', 'Owerri IMO state Nigeria', 'Beginner level', 'To learn and know all about social media management'),
(44, '', 1, '', '', '', '', '', 'profilepic.jpg', 'pinkshop.ng@gmail.com', 'Suyaspot04.', '2022-07-18 00:00:00', '', '', ''),
(45, '', 1, '', '', '', '', '', 'profilepic.jpg', 'chimkamkapamogali@gmail.com', 'Suyaspot04.', '2022-07-18 00:00:00', '', '', ''),
(47, '', 1, '', '', '', '', '', 'profilepic.jpg', 'chianugochukwudaluelizabeth@gmail.com', 'BABYLAW@1234', '2022-07-21 00:00:00', '', '', ''),
(48, '', 1, '', '', '', '', '', 'profilepic.jpg', 'royaltyacademicworld@gmail.com', 'Jewel8406', '2022-07-21 00:00:00', '', '', ''),
(49, 'Akinyooye', 1, 'Temiloluwa', '08053608799', '', '', '', 'profilepic.jpg', 'temiloluwaakinyooye@gmail.com', 'temi@2710', '2022-07-22 00:00:00', '', '', ''),
(50, 'Erons', 1, 'Reuben', '08038650516', '', '', '', 'profilepic.jpg', 'rerons4you@gmail.com', '08038650516', '2022-07-26 00:00:00', '', '', ''),
(51, '', 1, '', '', '', '', '', 'profilepic.jpg', 'mbagwunjideka2@gmail.com', 'KAY+29nj', '2022-07-27 00:00:00', '', '', ''),
(52, 'Kasarachi', 1, 'Victoria', '08187482172', '', '', '', 'profilepic.jpg', 'victoriachidi446@gmail.com', '08187482172', '2022-07-28 00:00:00', '', '', ''),
(53, 'Alozie', 1, 'Godspower', '08145767022', '', '', '', 'profilepic.jpg', 'godspoweralozie.coach@gmail.com', 'Emergeandlead@24', '2022-07-31 00:00:00', '', '', ''),
(54, '', 0, '', '', '', '', '', 'profilepic.jpg', 'somchikenneth16@gmail.com', 'Somchi912!', '2022-08-01 00:00:00', '', '', ''),
(55, 'Ohakor ', 0, 'Chisom ', 'Somchilee', '', '', '', 'profilepic.jpg', 'somchiohakor@gmail.com', 'chi91298464', '2022-08-01 00:00:00', '', '', ''),
(56, 'Nwoko', 0, 'Chiamaka', '08125845061', '', '', '', 'profilepic.jpg', 'nwokochiamaka89@gmail.com', 'Mykingly@45', '2022-08-02 00:00:00', '', '', ''),
(57, '', 0, '', '', '', '', '', 'profilepic.jpg', 'somineenakhe@gmail.com', 'Maimuna2', '2022-08-02 00:00:00', '', '', ''),
(58, '', 0, '', '', '', '', '', 'profilepic.jpg', 'jennygbanite@gmail.com', 'Ada_gbanite12345', '2022-08-02 00:00:00', '', '', ''),
(59, '', 0, '', '', '', '', '', 'profilepic.jpg', 'semilogoadeoye23@gmail.com', 'Fomosara21', '2022-08-03 00:00:00', '', '', ''),
(60, '', 0, '', '', '', '', '', 'profilepic.jpg', 'glowglory0@gmail.com', 'Fomosara21', '2022-08-03 00:00:00', '', '', ''),
(61, 'Chidiebube', 0, 'Godwin', '09123237709', '', '', '', 'profilepic.jpg', 'uzorchi65@gmail.com', 'Fineboy98', '2022-08-06 00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `waitlist`
--

CREATE TABLE `waitlist` (
  `ID` int(10) NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `email_addy` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `datekeep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waitlist`
--

INSERT INTO `waitlist` (`ID`, `service_type`, `email_addy`, `full_name`, `mobile_no`, `datekeep`) VALUES
(1, 'Resume Writing', 'emmakinyooye@gmail.com', 'AKINYOOYE AKINFEMI', '07032689329', '2023-04-24'),
(2, 'Freelance Bootcamp', 'emmakinyooye@gmail.com', 'AKINYOOYE AKINFEMI', '07032689329', '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `ID` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `emailaddy` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `workshop` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `datekeep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `assesment`
--
ALTER TABLE `assesment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bootcamp_project`
--
ALTER TABLE `bootcamp_project`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `countrylist`
--
ALTER TABLE `countrylist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `coursedetail`
--
ALTER TABLE `coursedetail`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `courselist`
--
ALTER TABLE `courselist`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `coursereg`
--
ALTER TABLE `coursereg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `courseschedule`
--
ALTER TABLE `courseschedule`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paytransaction`
--
ALTER TABLE `paytransaction`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waitlist`
--
ALTER TABLE `waitlist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assesment`
--
ALTER TABLE `assesment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `bootcamp_project`
--
ALTER TABLE `bootcamp_project`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countrylist`
--
ALTER TABLE `countrylist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `coursedetail`
--
ALTER TABLE `coursedetail`
  MODIFY `lesson_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `courselist`
--
ALTER TABLE `courselist`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coursereg`
--
ALTER TABLE `coursereg`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `courseschedule`
--
ALTER TABLE `courseschedule`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paytransaction`
--
ALTER TABLE `paytransaction`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `waitlist`
--
ALTER TABLE `waitlist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
