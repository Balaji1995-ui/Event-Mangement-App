-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2022 at 03:58 PM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loapnaghar_mybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `ad_email` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_email`, `ad_password`) VALUES
(1, 'admin', 'admin@mail.com', 'admin'),
(5, 'testuser', 'testuser1@mail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `descrip` varchar(10000) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `category`, `descrip`, `img`, `url`, `date`, `status`) VALUES
(19, 'Google inks pact for new 35-storey office', 'Inspiration', '<p><span style=\"color: rgb(16, 40, 93); font-family: Roboto, sans-serif;\">There arge many variations ohf passages of sorem gpsum ilable, but the majority have suffered alteration in some form, by ected humour, or randomised words whi.rere arge many variations ohf passages of sorem gpsum ilable.</span><br></p>', '732419286learn_about_bg.png', '', 'Thu 10 Nov 2022', '0'),
(20, 'Google inks pact for new 35-storey office', 'Modern technology', '<p><span style=\"color: rgb(16, 40, 93); font-family: Roboto, sans-serif;\">There arge many variations ohf passages of sorem gpsum ilable, but the majority have suffered alteration in some form, by ected humour, or randomised words whi.rere arge many variations ohf passages of sorem gpsum ilable.</span><br></p>', '1672966367single_blog_5.png', '', 'Thu 10 Nov 2022', '0'),
(22, 'Google inks pact for new 35-storey office', 'Transportations', '<p>There arge many variations ohf passages of sorem gpsum ilable, but the majority have suffered alteration in some form, by ected humour, or randomised words whi.rere arge many variations ohf passages of sorem gpsum ilable.<br></p>', '2064137135single_blog_1.png', '', 'Thu 10 Nov 2022', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(5, 'Transportations'),
(6, 'Technology'),
(13, 'Travel news'),
(14, 'Modern technology'),
(15, 'Product'),
(16, 'Inspiration'),
(17, 'Health Care ');

-- --------------------------------------------------------

--
-- Table structure for table `eventcategory`
--

CREATE TABLE `eventcategory` (
  `id` int(11) NOT NULL,
  `Event_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventcategory`
--

INSERT INTO `eventcategory` (`id`, `Event_name`) VALUES
(11, 'Sports'),
(12, 'Reception'),
(13, 'Tourism Pack'),
(14, 'Marriage Functions'),
(17, 'Corporate Functions');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descc` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `descc`, `status`) VALUES
(2, 'Hello', 'sddfdfdf', '0'),
(3, 'What warranties do i have for my shipments?', 'Equal blame belongs to those who fail in their duty through weaknes of will which is the same as saying through shrinking from toil and\r\npain. These cases are perfectly simple and easy to distinguish.', '0'),
(4, ' What are the usual methods of freight payment in transida?', 'Equal blame belongs to those who fail in their duty through weaknes of will which is the same as saying through shrinking from toil and\r\npain. These cases are perfectly simple and easy to distinguish.', '0');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(400) NOT NULL,
  `response` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `message`, `response`) VALUES
(1, 3, 'This is a demo test.', NULL),
(3, 6, 'Demo Test - 2', 'Are you sure that this is another test? '),
(8, 4, 'This is a feedback text', NULL),
(9, 6, 'Test Test Test Test Test', NULL),
(11, 8, 'This is a demo test for feedback sections!!!', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `title_img` varchar(200) DEFAULT NULL,
  `blog_head` varchar(200) DEFAULT NULL,
  `blog_img` varchar(200) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `blog_para` varchar(455) DEFAULT NULL,
  `blog_para_sub` varchar(455) DEFAULT NULL,
  `whendate` varchar(100) DEFAULT NULL,
  `blog_img1` varchar(100) DEFAULT NULL,
  `blog_img2` varchar(100) DEFAULT NULL,
  `Event` varchar(300) DEFAULT NULL,
  `Event_para` varchar(600) DEFAULT NULL,
  `Event_Day4` varchar(100) DEFAULT NULL,
  `Event_Day1` varchar(100) DEFAULT NULL,
  `Event_Day2` varchar(100) DEFAULT NULL,
  `Event_Day3` varchar(100) DEFAULT NULL,
  `Event_Day1_sha` varchar(100) DEFAULT NULL,
  `Event_Day1_para` varchar(100) DEFAULT NULL,
  `Event_Day1_con1` varchar(100) DEFAULT NULL,
  `Event_Day1_con2` varchar(100) DEFAULT NULL,
  `Event_Day1b` varchar(80) DEFAULT NULL,
  `Event_Day1a` varchar(80) DEFAULT NULL,
  `sponsor1` varchar(100) DEFAULT NULL,
  `sponsor2` varchar(100) DEFAULT NULL,
  `silder1` varchar(255) DEFAULT NULL,
  `silder2` varchar(255) DEFAULT NULL,
  `silder3` varchar(255) DEFAULT NULL,
  `silder4` varchar(255) DEFAULT NULL,
  `silder5` varchar(255) DEFAULT NULL,
  `silder6` varchar(255) DEFAULT NULL,
  `silder_blog` varchar(255) DEFAULT NULL,
  `silder_Head` varchar(255) DEFAULT NULL,
  `links` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `title`, `sub_title`, `title_img`, `blog_head`, `blog_img`, `Address`, `blog_para`, `blog_para_sub`, `whendate`, `blog_img1`, `blog_img2`, `Event`, `Event_para`, `Event_Day4`, `Event_Day1`, `Event_Day2`, `Event_Day3`, `Event_Day1_sha`, `Event_Day1_para`, `Event_Day1_con1`, `Event_Day1_con2`, `Event_Day1b`, `Event_Day1a`, `sponsor1`, `sponsor2`, `silder1`, `silder2`, `silder3`, `silder4`, `silder5`, `silder6`, `silder_blog`, `silder_Head`, `links`) VALUES
(1, 'Digital Conference For Designers', 'Committed to success', '1375870736snk-law-associates.jpg', 'BLOG POSTER', '504967827snk-law-associates.jpg', 'Newland, London', 'There arge many variations ohf passages of sorem gpsum ilable, but the majority have suffered alteration in some form, by ected humour, or randomised words whi.rere arge many variations ohf passages of sorem gpsum ilable.', 'alteration in some form, by ected humour, or randomised words whi.rere arge many variations ohf passages of sorem gpsum ilable.', '23 Jan 2022', '348183703ReduceImageSize.net_30kb_3333.jpg', '1508108999ReduceImageSize.net_30kb_351.jpg', '125704171710567605928935284241470211745gallery2-min.png', 'There arge many variations ohf passages of sorem gp ilable, but the majority have ssorem gp iluffe.', '1944978454cisco_brand4.png', '2104054434ReduceImageSize.net_30kb_351.jpg', 'Our Top Genaral Sponsors.', '1595071325cisco_brand2.png', '167066690518588067gallery1-min.png', '53472674210567605928935284241470211745gallery2-min.png', '1182717561204558141gallery5-min.png', '613904760cisco_brand3.png', '1919861889cisco_brand.png', '871104635204558141gallery5-min.png', '418501946cisco_brand5.png', '375451193cisco_brand6.png', '1156754337ReduceImageSize.net_100kb_43651.jpg', '714889824ReduceImageSize.net_100kb_43651.jpg', '769132961ReduceImageSize.net_100kb_43651.jpg', '714612404ReduceImageSize.net_100kb_43651.jpg', '528833348ReduceImageSize.net_100kb_43651.jpg', '1211373756ReduceImageSize.net_100kb_43651.jpg', '', '', 'https://www.cruiselakegeneva.com/');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `image7` varchar(255) NOT NULL,
  `video1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `video1`) VALUES
(1, '103270426809915276gallery4_11zon.jpg', '1034177703gallery3_11zon.jpg', '6645468gallery4_11zon.jpg', '1463352768693012193201678670single_blog_4_11zon.jpg', '212062149136533251511749939351736854931single_blog_2_11zon.jpg', '2083911812131620971714821501517466436021043475303single_blog_3_11zon.jpg', '37607742833124434316683272638234121711560662676learn_about_bg_11zon.jpg', '943379917videos.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Post` varchar(255) DEFAULT NULL,
  `post_header` varchar(255) DEFAULT NULL,
  `post_logo` varchar(555) DEFAULT NULL,
  `date` varchar(555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `Post`, `post_header`, `post_logo`, `date`) VALUES
(27, '', 'sdsd', 'sdsd', '444124420logo1.png', '2022-11-23T14:46'),
(28, '', 'Hello', 'Sample Doc', '313454895logo.png', '2022-11-12T15:19'),
(29, '', 'fot design', 'Add new poster', '1110323560h1_hero.png', '2022-11-10T16:10');

-- --------------------------------------------------------

--
-- Table structure for table `recentpost`
--

CREATE TABLE `recentpost` (
  `id` int(11) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `post_logo` varchar(255) DEFAULT NULL,
  `post_header` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `short` varchar(1500) DEFAULT NULL,
  `descrip` varchar(10000) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `mini_Guest` varchar(100) DEFAULT NULL,
  `max_Guest` varchar(100) DEFAULT NULL,
  `Create_time` varchar(100) DEFAULT NULL,
  `Venue` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `short`, `descrip`, `img`, `url`, `date`, `status`, `category`, `mini_Guest`, `max_Guest`, `Create_time`, `Venue`) VALUES
(56, 'Sports Day', '', '<p>There arge many variations ohf passages<span style=\"font-size: 1rem;\">of&nbsp;</span></p>', '85977520710567605928935284241470211745gallery2.png', NULL, 'Fri 11 Nov 2022', '0', 'Sports', '100', '200', '2022-11-18', 'MY studium');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(100) NOT NULL,
  `header_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_desc` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fot_about` varchar(255) DEFAULT NULL,
  `New_letter` varchar(80) DEFAULT NULL,
  `copyr` varchar(50) DEFAULT NULL,
  `map` varchar(1000) DEFAULT NULL,
  `title_logo` varchar(120) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `header_logo`, `email`, `phone`, `phone2`, `footer_logo`, `footer_desc`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `address`, `city`, `state`, `country`, `pin`, `site_name`, `fot_about`, `New_letter`, `copyr`, `map`, `title_logo`, `video`) VALUES
(1, '982864562WhatsApp_Image_2022-11-12_at_7.36.56_PM-removebg-preview.png', 'Text@gmail.com', '+918610451834', '+91 7878787878', '1241936175WhatsApp_Image_2022-11-12_at_7.36.56_PM-removebg-preview.png', 'New website will update soon..!!!!', 'https://www.facebook.com', 'www.twitter.com', 'www.linked.in', 'www.instagram.com', 'www.youtube.com', '55 , ste A, Dover, DE 19901 USA', 'testaddressno', 'Mon to Sat 9am to 6pm', 'Brown village, Noida', '6568548', 'MSK', 'one of the leading site website in this section', 'enquiry@gmail.com', 'MSK', '                                                                                                                                                                                                                                                                                                                                                                                                 <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4013436.3643496064!2d78.2885026!3d10.78283645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1667967264286!5m2!1sen!2sin\" width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>                                                                                                                                                                                                                                                                                          ', '1265890351WhatsApp_Image_2022-11-12_at_7.36.56_PM-removebg-preview.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tagcloud`
--

CREATE TABLE `tagcloud` (
  `id` int(11) NOT NULL,
  `Tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagcloud`
--

INSERT INTO `tagcloud` (`id`, `Tag`) VALUES
(1, 'Project'),
(2, 'Love'),
(3, 'Support'),
(4, 'Technology'),
(1, 'Project'),
(2, 'Love'),
(3, 'Support'),
(4, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `descrip` varchar(10000) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `designation`, `descrip`, `img`, `url`, `date`, `status`) VALUES
(31, 'Hi', 'Software Engineer', 'ssdsd', '1746023373gallery-1.jpg', NULL, 'Wed 09 Nov 2022', '0'),
(32, 'Jon', 'Software Developer', 'he is Five years Experience in Software Field', '1216811324heroman.png', NULL, 'Wed 09 Nov 2022', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `Event_Book_ticket` varchar(50) DEFAULT NULL,
  `Even_Category` varchar(100) DEFAULT NULL,
  `Venue` varchar(100) DEFAULT NULL,
  `BOOK_date` varchar(100) DEFAULT NULL,
  `bookcode` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `city`, `state`, `img`, `status`, `phone`, `Event_Book_ticket`, `Even_Category`, `Venue`, `BOOK_date`, `bookcode`, `country`, `pincode`) VALUES
(64, 'admin', 'admin@mail.com', '123456', 'Namakkal', '123456', 'Tamilnadu', NULL, NULL, '8610451834', NULL, NULL, NULL, NULL, NULL, 'india', '637002'),
(65, 'Balaji', 'Balakarthi3448@gmail.com', NULL, '2/387 anbu nagar-2 ', 'Namakkal', 'Tamilnadu', NULL, '', '8610452128', '500', 'Reception', 'MY studium', '2022-12-01', '94809', 'chennai', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventcategory`
--
ALTER TABLE `eventcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_index` (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recentpost`
--
ALTER TABLE `recentpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_index` (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_index` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `eventcategory`
--
ALTER TABLE `eventcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `recentpost`
--
ALTER TABLE `recentpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
