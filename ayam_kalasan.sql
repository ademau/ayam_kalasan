-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2015 at 09:13 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ayam_kalasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(50) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Glyphicons` varchar(100) NOT NULL,
  `Sort` int(11) NOT NULL DEFAULT '0',
  `visit_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `category_id`, `title`, `description`, `short_description`, `image`, `active`, `created_at`, `updated_at`, `Glyphicons`, `Sort`, `visit_count`) VALUES
(16, '0', 'Ini test news', '<p>tetsetete</p>\r\n', 'etsetsetsetset', '', 1, '2014-09-05 03:26:29', '2014-09-05 03:26:29', '', 0, 0),
(17, 'News', 'Launching Event: THE EVOLUTION of HAPIS', '<p>As appreciation to our loyal Customer, here we would like to introduce The Evolution of HAPIS. By understanding your needs, combine with the growth of technology that challenge us to recreate HAPIS with new appearance. Adding new module, complete with newly features that will make jobs more efficient and easy to access.</p>\r\n\r\n<p>Please come and join the exploration of HAPIS Web</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Date</td>\r\n			<td>:</td>\r\n			<td>Wednesday , 12nd November 2014</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Time</td>\r\n			<td>:</td>\r\n			<td>09.00 &ndash; 13.30 WIB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Venue</td>\r\n			<td>:</td>\r\n			<td>Holiday Inn Hotel Kemayoran<br />\r\n			Jln. Griya Utama Blok B No. 1<br />\r\n			Jakarta 14350, Indonesia</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Who Should Attend : HR Manager , CEO, CFO</p>\r\n', 'As appreciation to our loyal Customer, here we would like to introduce our new HAPIS Web Version. By understanding your needs, combine with the growth of technology ...', '', 1, '2014-09-05 03:31:10', '2015-04-24 06:23:27', '', 0, 6),
(50, 'Career', 'Programer', '<p><b>Responsibilities:</b></p>\n\n<ul>\n	<li>Program Development</li>\n	<li>Confirm program operation by conducting tests, modifying program sequence and/or codes</li>\n	<li>Development Internal dan External.</li>\n	<li>Confirms Program Development to supervisor</li>\n	<li>Documenting program development and revisions</li>\n</ul>\n\n<p><b>Requirement :</b></p>\n\n<ul>\n	<li>Male/female</li>\n	<li>Max. 28 years old</li>\n	<li>Min. Diploma/bachelor degree ( fresh graduate ) in IT, information system, computer science, management information system or related field</li>\n	<li>Have good knowledge in java</li>\n	<li>Have good knowledge in one or more RDBMS (Oracle / Postgresql / Microsoft sql).</li>\n	<li>Have good knowledge in Crystal Report / Jasper Report.</li>\n	<li>Good communication in English both oral and written would be an advantage</li>\n	<li>Having good self motivation, fast learner, can do attitude and able to work as a team, good administration skill</li>\n</ul>\n\n<p>Send your application to sekretariat@pt-solusi.co.id with subject : Application : PRG or click <button onclick="javascript: window.location.href=''mailto:sekretariat@pt-solusi.co.id?subject=Application : PRG'';" class="btn btn-info">\nApply\n</button>\n</p>\n', 'Programer', '', 1, '2014-11-18 17:00:00', '2015-04-05 08:16:29', '', 0, 2),
(54, 'News', 'THE EVOLUTION of HAPIS', '<p>On 12 November 2014, we officially launched the latest version of HAPIS. This event held at the Holiday Inn Kemayoran Hotel, attended by HAPIS loyal customers and other invited guests, who enthusiastically give questions about the problems faced in the each company and solutions that can be provided by HAPIS to overcome these problems . In addition, the participants were also able to try out the application through notebooks demos that have been prepared.</p>\n\n<p>This latest version of HAPIS was created as appreciation to our loyal customers, by understanding their needs, adopting technological growth that encouraged us to develop HAPIS. In this version we added several new modules with a new appearance that will help users in their activities.</p>\n\n<p>This is just the beginning, we will continue to develop HAPIS in line with technological growth and needs that will create <em>a path to freedom of Payroll Tedious Task.</em></p>\n\n<p>For more information and product demo, please contact our sales team at (021) 4216892-95 or email: marketing@pt-solusi.co.id.</p>\n\n<p><strong>Our Team Member</strong></p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/DSC09595.jpg" style="width:300px" /></p>\n\n<p>&nbsp;</p>\n\n<p><strong>New Version of HAPIS</strong></p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/IMG_5449.JPG" style="width:300px" /></p>\n\n<p>Web Based Technology, easy to access, anytime, anywhere</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Company Profile Presentation</strong></p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/IMG_5487.JPG" style="width:300px" /></p>\n\n<p>by Linda Kristianto - Sales &amp; Marketing Manager</p>\n\n<p>&nbsp;</p>\n\n<p><strong>HAPIS Presentation and Demo</strong></p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/IMG_5490.JPG" style="width:300px" /></p>\n\n<p>by Linda Sugianto - Senior Operation Manager</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Our Guests</strong></p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/IMG_5473.JPG" style="width:300px" /></p>\n\n<p>&nbsp;</p>\n\n<p><strong>VIP Guests</strong></p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/IMG_5474.JPG" style="width:300px" /></p>\n\n<p>&nbsp;</p>\n\n<p><strong>The Enthusiasm</strong></p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/IMG_5500.JPG" style="width:300px" /></p>\n\n<p><img src="../../img/upload/IMG_5497.JPG" style="width:300px" /></p>\n\n<p>&nbsp;</p>\n\n<p><strong>Doorprize</strong>&nbsp;</p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/IMG_5603.JPG" style="width:300px" /></p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/IMG_5569.JPG" style="width:300px" /></p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/IMG_5578.JPG" style="width:300px" /></p>\n\n<p><img src="http://pt-solusi.co.id/img/upload/IMG_5609.JPG" style="width:300px" /></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', 'On 12 November 2014, we officially launched the latest version of HAPIS. This event held at the Holiday Inn Kemayoran Hotel', 'img/upload/logo hapis transparent3.png', 1, '2014-11-20 07:03:06', '2015-04-23 16:24:25', '', 0, 2),
(56, 'Career', 'Junior ECM Technical Specialist ', '<p><strong>Job Description</strong><br />\nWe are looking for Junior Technical Specialist to work on The IBM Filenet and Datacap Products. This position will provide analysis, design, and development for projects, enhancements, and operational&nbsp; support issues based on business requirements, provided by our clients.</p>\n\n<p><strong>Qualification</strong></p>\n\n<ul>\n	<li>Minimum Bachelor&rsquo;s Degree in IT.</li>\n	<li>Having knowledge with ECM concept is highly preferred.</li>\n	<li>Experience with any ECM product (OpenText, Filenet, Documentum etc.)&nbsp; is highly preferred</li>\n	<li>Added advantage with knowledge in the following area:\n	<ul>\n		<li>PL/SQL and JDBC&nbsp; (Ms SQL Server)</li>\n		<li>Java Technology</li>\n		<li>J2EE components, JSP, CSS, and HTML</li>\n	</ul>\n	</li>\n	<li>Fresh graduate with good knowledge on the above technology will be considered. (Internal training will be provided)</li>\n	<li>Good skills in English (spoken and written) is highly preferred.</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p>Send your application to sekretariat@pt-solusi.co.id with subject : Application : Junior ECM or click <button onclick="javascript: window.location.href=''mailto:sekretariat@pt-solusi.co.id?subject=Application : Junior ECM'';" class="btn btn-info">\nApply\n</button>\n</p>\n\n', 'We are looking for Junior Technical Specialist to work on The IBM Filenet and Datacap Products. This position will provide analysis, design, and development for projects, enhancements, and operational', '', 1, '2014-11-21 07:18:31', '2015-04-23 16:25:12', '', 0, 2),
(57, 'Career', 'System Analyst (SA)', '<p>Responsibilities:</p>\n\n<ul>\n	<li>\n	<p>Design and maintain application systems and keep application systems current with changing technologies</p>\n	</li>\n	<li>\n	<p>Providing presentation, maintenance, training and system support to the user for the applications designed</p>\n	</li>\n	<li>\n	<p>Work closely with professional technical staff in the IT management team evaluating current systems for the future development</p>\n	</li>\n</ul>\n\n<p>Qualifications:</p>\n\n<ul>\n	<li>\n	<p>Minimum Bachelor&rsquo;s Degree in Information Systems or related subject is preferred</p>\n	</li>\n	<li>\n	<p>2 years experience as System Analyst, especially in ERP, Payroll and HR systems</p>\n	</li>\n	<li>\n	<p>Experience with Linux and PostgreSQL Database on advantage</p>\n	</li>\n	<li>\n	<p>Age between 22 - 30 years old</p>\n	</li>\n	<li>\n	<p>Must have excellent presentation and communication skill</p>\n	</li>\n	<li>\n	<p>Good verbal and written communication skills in English would be an added advantage</p>\n	</li>\n	<li>\n	<p>Capability to work effectively in a team environment</p>\n	</li>\n</ul>\n\n\n<p>Send your application to sekretariat@pt-solusi.co.id with subject : Application : System Analist (SA) or click <button onclick="javascript: window.location.href=''mailto:sekretariat@pt-solusi.co.id?subject=ApplicationSystem Analist (SA)'';" class="btn btn-info">\nApply\n</button>\n</p>', 'System Analyst (SA)', '', 1, '2014-11-27 10:16:51', '2015-04-06 10:04:52', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `parent_id` varchar(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `title`, `description`, `active`, `created_at`, `updated_at`, `parent_id`, `image`) VALUES
('Career', 'Career', 'Karir', 1, '2014-11-18 17:00:51', '2014-11-18 17:00:00', '', ''),
('News', 'News', NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'News', 'img/Slider/Slide1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `login_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `ParrentId` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2015-04-05 15:57:37', '0000-00-00 00:00:00'),
(2, 'Admin', '2015-04-05 15:57:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `name` varchar(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(32) NOT NULL,
  `updated_by` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'linda', '$2y$10$TZihhp4BcWV2mrkIRZ33L.9yCbZLvgu2qSM.lPNixHiHdHF0yLd22', '', 'Linda K', '2015-08-30 06:50:11', '2015-08-29 23:50:11', 'adem', ''),
(2, 'Adem', '$2y$10$5WxWjvfj4WqZsZUy9SeMDuDG8lQuBXuIEqebTFsfrEZuCJJI1/msq', '', 'Ade Maulana', '2015-04-12 11:35:14', '2014-09-04 23:33:03', 'adem', ''),
(3, 'ademau', '123456', 'ademau@gmail.com', 'ade maulana', '2015-04-12 05:05:43', '2015-04-12 05:05:43', '', ''),
(4, 'ademaulanaa', '$2y$10$zBNGbZ1f7HMsUrYDZWlMCu7wGB/m.x4SM/fkpYz9r6CO1Mp4FLPKO', 'blankheroes@yahoo.com', 'blankheroes@yahoo.com', '2015-04-24 06:25:03', '2015-04-24 06:25:03', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `userid`, `roleid`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2015-04-05 16:00:08', '0000-00-00 00:00:00'),
(3, 3, 1, '2015-04-12 06:25:54', '2015-04-12 06:25:54');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
