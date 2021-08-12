-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 11:24 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_admin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_posts`
--

CREATE TABLE `banner_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` int(10) UNSIGNED NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner_posts`
--

INSERT INTO `banner_posts` (`id`, `title`, `status`) VALUES
(1, 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(190) NOT NULL,
  `tags` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `posted` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `tags`, `content`, `photo`, `posted`, `date`, `author`, `category`) VALUES
(2, 'Benefits of livig in this world', 'life,life tips', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>', '19292400_1524780270.jpg', 'publish', '2018-04-27', 'admin', '14'),
(3, 'The future of web developement on earth', 'web,development,earth', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<span style=\"font-size: 0.857em;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 0.857em;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 0.857em;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 0.857em;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 0.857em;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>', '46981800_1524780339.jpg', 'publish', '2018-04-27', 'admin', '11'),
(4, 'The subtle art of not giving a fuck-Mark Manson', 'books,reading,novels', '<span style=\"font-size: 12.855px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span style=\"font-size: 0.857em;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 0.857em;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 0.857em;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 0.857em;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 0.857em;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span style=\"font-size: 12.855px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span style=\"font-size: 0.857em;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 0.857em;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 0.857em;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 0.857em;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 0.857em;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br>', '98308700_1524790852.jpg', 'publish', '2018-04-27', 'admin', '12'),
(5, 'The challanges of being a writter', 'witting,blogging', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<span style=\"font-size: 0.857em;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 0.857em;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 0.857em;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 0.857em;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 0.857em;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>', '57894000_1524856026.jpg', 'publish', '2018-04-27', 'etemesi', '10'),
(6, 'Why i ventured into writting as a proffesion', 'witting,blogging', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<span style=\"font-size: 0.857em;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 0.857em;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 0.857em;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 0.857em;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 0.857em;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span style=\"font-size: 11.0167px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span style=\"font-size: 11.0167px;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style=\"font-size: 11.0167px;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style=\"font-size: 11.0167px;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style=\"font-size: 11.0167px;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style=\"font-size: 11.0167px;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>', '30278600_1524856225.jpg', 'publish', '2018-04-27', 'etemesi', '13'),
(9, 'This year is my year', 'freedom', 'nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO<span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span><span style=\"font-size: 12.855px;\">nkjverfrfkroflk;.frfporefl;wf\\EPOFWEO</span>', '09722500_1595164755.jpg', 'publish', '2020-07-19', 'admin', '11'),
(10, 'This is test rum', 'nj\'li', '<span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span><span style=\"font-size: 12.855px;\">jbjnklkjjkkmjjnkljioj</span>', '07867800_1595254407.jpg', 'publish', '2020-07-20', 'senami', '11'),
(11, 'Today is a new day', 'lifestyle', '<span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><span style=\"font-size: 12.855px;\">desrdtyuhijoplresdryugiujmk,lgvhbjk</span><br>', '87217300_1595254742.jpg', 'publish', '2020-07-20', 'senami', '12'),
(12, 'Why I did what I did', 'Fiction, Story, Horror', '<span style=\"font-size: 12.855px;\">The reason why I did what I did is because of the kind of nature that happen on that varyu day. The sky was blue and everything was normal until everything turned upside down. The end of the beginning is that you should not pit your trust on no ono one. I do not know if I am making sense.</span><span style=\"font-size: 12.855px;\">The reason why I did what I did is because of the kind of nature that happen on that varyu day. The sky was blue and everything was normal until everything turned upside down. The end of the beginning is that you should not pit your trust on no ono one. I do not know if I am making sense.</span><span style=\"font-size: 12.855px;\">The reason why I did what I did is because of the kind of nature that happen on that varyu day. The sky was blue and everything was normal until everything turned upside down. The end of the beginning is that you should not pit your trust on no ono one. I do not know if I am making sense.</span><span style=\"font-size: 12.855px;\">The reason why I did what I did is because of the kind of nature that happen on that varyu day. The sky was blue and everything was normal until everything turned upside down. The end of the beginning is that you should not pit your trust on no ono one. I do not know if I am making sense.</span><span style=\"font-size: 12.855px;\">The reason why I did what I did is because of the kind of nature that happen on that varyu day. The sky was blue and everything was normal until everything turned upside down. The end of the beginning is that you should not pit your trust on no ono one. I do not know if I am making sense.</span><span style=\"font-size: 12.855px;\">The reason why I did what I did is because of the kind of nature that happen on that varyu day. The sky was blue and everything was normal until everything turned upside down. The end of the beginning is that you should not pit your trust on no ono one. I do not know if I am making sense.</span>', '81911300_1595320539.jpg', 'publish', '2020-07-21', 'admin', '13'),
(13, 'Why haven\'t left your comfort zone', 'Motivation, Wealth, Wisdom', '<span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span><span style=\"font-size: 12.855px;\">Why HAvekjjkedwedifewkkjjlasfjhrfe,fejkfchfre</span>', '10720200_1595320796.jpg', 'publish', '2020-07-21', 'admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`) VALUES
(10, 'Sunday Digest'),
(11, 'Monday Challenge'),
(12, 'Weekend Groove'),
(13, 'Book Review'),
(14, 'Vocabulary');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `comments` varchar(255) NOT NULL,
  `comment_sender` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `editors_choice`
--

CREATE TABLE `editors_choice` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editors_choice`
--

INSERT INTO `editors_choice` (`id`, `blog`) VALUES
(2, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(40) DEFAULT NULL,
  `twitter` varchar(40) DEFAULT NULL,
  `googleplus` varchar(40) DEFAULT NULL,
  `pinterest` varchar(40) DEFAULT NULL,
  `dribble` varchar(40) DEFAULT NULL,
  `comments_script` text DEFAULT NULL,
  `sharing_script` text DEFAULT NULL,
  `javascript` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `facebook`, `twitter`, `googleplus`, `pinterest`, `dribble`, `comments_script`, `sharing_script`, `javascript`) VALUES
(1, 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.plus.google.com', 'http://www.pinterest.com', 'http://www.dribble.com', '<div class=\"fb-comments container\" data-href=\"http://www.uoecu.org/newsview.php?id=<?php echo $row[\'id\'];?>\" data-numposts=\"20\" width=\"100%\"></div>', '<div class=\"addthis_sharing_toolbox\"></div>', '<script>(function(d, s, id) {\r\n		var js, fjs = d.getElementsByTagName(s)[0];\r\n		if (d.getElementById(id)) return;\r\n		js = d.createElement(s); js.id = id;\r\n		js.src = \'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=298807240601869\';\r\n		fjs.parentNode.insertBefore(js, fjs);\r\n	}(document, \'script\', \'facebook-jssdk\'));</script>\r\n<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57587edcb1479678\"></script>');

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'titles', 1, 3, 3, 3),
(2, 2, 'links', 1, 3, 3, 3),
(3, 2, 'blog_categories', 1, 3, 3, 3),
(4, 2, 'blogs', 1, 3, 3, 3),
(5, 2, 'banner_posts', 1, 3, 3, 3),
(6, 2, 'editors_choice', 1, 3, 3, 3),
(47, 3, 'titles', 0, 0, 0, 0),
(48, 3, 'links', 0, 0, 0, 0),
(49, 3, 'blog_categories', 0, 3, 0, 0),
(50, 3, 'blogs', 1, 1, 1, 1),
(51, 3, 'editors_choice', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2018-04-26', 0, 0),
(2, 'Admins', 'Admin group created automatically on 2018-04-26', 0, 1),
(3, 'authors', 'contains all the guest authors', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(20) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'titles', '1', 'admin', 1524766759, 1595328897, 2),
(2, 'links', '1', 'admin', 1524766827, 1524878963, 2),
(9, 'banner_posts', '1', 'admin', 1524779492, 1524779492, 2),
(10, 'blogs', '2', 'admin', 1524780270, 1595322336, 2),
(11, 'blogs', '3', 'admin', 1524780339, 1595322324, 2),
(12, 'blogs', '4', 'admin', 1524790853, 1595322310, 2),
(13, 'editors_choice', '1', 'admin', 1524799889, 1524799889, 2),
(14, 'editors_choice', '2', 'admin', 1524799903, 1524799903, 2),
(15, 'blogs', '5', '', 1524856026, 1595322294, 3),
(16, 'blogs', '6', '', 1524856225, 1595322274, 3),
(22, 'blog_categories', '10', 'admin', 1592234837, 1592234864, 2),
(23, 'blog_categories', '11', 'admin', 1592234890, 1592234908, 2),
(24, 'blog_categories', '12', 'admin', 1592234947, 1592234952, 2),
(25, 'blog_categories', '13', 'admin', 1592234977, 1592234983, 2),
(26, 'blog_categories', '14', 'admin', 1592235010, 1592235010, 2),
(28, 'blogs', '9', 'admin', 1595163296, 1595164755, 2),
(29, 'blogs', '10', 'admin', 1595254407, 1595254412, 2),
(30, 'blogs', '11', 'admin', 1595254742, 1595254742, 2),
(31, 'blogs', '12', 'admin', 1595320539, 1595320539, 2),
(32, 'blogs', '13', 'admin', 1595320796, 1595320815, 2);

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text DEFAULT NULL,
  `custom2` text DEFAULT NULL,
  `custom3` text DEFAULT NULL,
  `custom4` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`) VALUES
('admin', 'adminpassword', 'samuelaholu@gmail.com', '2020-05-01', 2, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2020-05-01\nRecord updated automatically on 2020-05-01\nRecord updated automatically on 2020-05-01\nRecord updated automatically on 2020-05-01\nRecord updated automatically on 2020-05-01\nRecord updated automatically on 2020-06-15\nRecord updated automatically on 2020-07-24', NULL, NULL),
('guest', NULL, NULL, '2018-04-26', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2018-04-26', NULL, NULL),
('senami', 'fa196139dd42250fd008d19016203d13', 'Greatnessabolade@outlook.com', '2020-07-20', 3, 0, 1, 'Aholu Samuel', 'Lagos State', 'Lagos', '09013131363', 'member signed up through the registration form.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_hits`
--

CREATE TABLE `page_hits` (
  `page` varchar(255) NOT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_hits`
--

INSERT INTO `page_hits` (`page`, `count`) VALUES
('', 1),
('Benefits of livig in this world', 9),
('The beginning of the end of the world', 4),
('The challanges of being a writter', 16),
('The future of web developement on earth', 24),
('The subtle art of not giving a fuck-Mark Manson', 34),
('This is test rum', 3),
('Today is a new day', 1),
('Why I did what I did', 1),
('Why i ventured into writting as a proffesion', 16);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` varchar(40) DEFAULT NULL,
  `tagline` varchar(40) DEFAULT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `keywords` varchar(220) DEFAULT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `bannertext1` varchar(150) DEFAULT NULL,
  `bannertext2` varchar(150) DEFAULT NULL,
  `bannertext3` varchar(150) DEFAULT NULL,
  `bannertext4` varchar(150) DEFAULT NULL,
  `detailed_description` text DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `googlemap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `website_name`, `tagline`, `icon`, `keywords`, `short_description`, `bannertext1`, `bannertext2`, `bannertext3`, `bannertext4`, `detailed_description`, `address`, `email`, `phone`, `googlemap`) VALUES
(1, 'Olapearls Condunt Sphere', '...we\'re Young, we\'re fun, we\'re dynamic', '75779200_1595328897.jpg', 'blog,tech blog,tricks,hacks,technology news,fantastic blog', 'This is a blog and content management system,You can easily setup your blog and customize it according to your needs.This is a short description of your blog.You can change this', 'Create a lifestyle <span>you desire</span>', 'Engaging Purposeful <span>and Creative</span>', 'Create the lifestyle <span>you desire</span>', 'Engaging Purposeful <span>and Creative</span>', 'This is a blog and content management system,You can easily setup your blog and customize it according to your needs.It is easy to use and manage.Multiple users can signup and be able contribute content.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lagos, Nigeria', 'samuelaholu15@gmail.com', '08138865571', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_info`
--

CREATE TABLE `visitor_info` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `time_accessed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_info`
--

INSERT INTO `visitor_info` (`id`, `ip_address`, `user_agent`, `time_accessed`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:26:52'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:01'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:40'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:55'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:01'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:12'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:19'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:22'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:29'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:32'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:35'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:38'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:05'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:09'),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:18'),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:25'),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:28'),
(18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:51'),
(19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:57'),
(20, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:00'),
(21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:07'),
(22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:15'),
(23, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:39:41'),
(24, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:40:41'),
(25, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:41:27'),
(26, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:26:10'),
(27, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:27:34'),
(28, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:28:20'),
(29, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:28:42'),
(30, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:26'),
(31, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:38'),
(32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:41'),
(33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:43'),
(34, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:45'),
(35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:48'),
(36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:51'),
(37, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:53'),
(38, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:56'),
(39, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:59'),
(40, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:02'),
(41, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:05'),
(42, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:07'),
(43, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:10'),
(44, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 19:08:04'),
(45, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 19:08:14'),
(46, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:43:06'),
(47, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:47:01'),
(48, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:47:08'),
(49, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:48:58'),
(50, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:49:18'),
(51, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 22:22:28'),
(52, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:41:41'),
(53, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:43:58'),
(54, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:46:23'),
(55, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-20 16:55:12'),
(56, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:18:56'),
(57, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:18:57'),
(58, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:19:40'),
(59, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:19:49'),
(60, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:19:49'),
(61, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:30:52'),
(62, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-22 11:00:53'),
(63, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-22 11:00:53'),
(64, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-22 11:04:32'),
(65, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-22 11:04:32'),
(66, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-23 18:50:19'),
(67, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-26 15:05:16'),
(68, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:39:45'),
(69, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:41:10'),
(70, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:51:25'),
(71, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:51:38'),
(72, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:52:34'),
(73, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Mobile Safari/537.36', '2020-05-07 16:04:11'),
(74, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '2020-05-17 11:45:03'),
(75, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '2020-05-18 18:09:04'),
(76, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', '2020-05-31 13:22:16'),
(77, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-15 17:26:28'),
(78, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-15 19:18:38'),
(79, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-15 22:12:31'),
(80, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 16:42:38'),
(81, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 16:42:56'),
(82, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 17:06:25'),
(83, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 17:06:34'),
(84, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-17 16:55:14'),
(85, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-11 21:39:17'),
(86, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-11 21:39:17'),
(87, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-15 19:47:58'),
(88, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-18 20:18:39'),
(89, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-18 20:18:55'),
(90, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-19 12:42:07'),
(91, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-19 12:58:34'),
(92, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-21 07:49:29'),
(93, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 16:39:26'),
(94, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 17:10:29'),
(95, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 17:28:22'),
(96, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:08:18'),
(97, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:21:49'),
(98, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:22:31'),
(99, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:23:46'),
(100, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:30:46'),
(101, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:36:54'),
(102, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:39:39'),
(103, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-23 11:31:22'),
(104, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:47:42'),
(105, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:48:17'),
(106, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:48:30'),
(107, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:48:48'),
(108, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-24 00:40:33'),
(109, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-26 15:02:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_posts`
--
ALTER TABLE `banner_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `editors_choice`
--
ALTER TABLE `editors_choice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog` (`blog`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `page_hits`
--
ALTER TABLE `page_hits`
  ADD PRIMARY KEY (`page`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_info`
--
ALTER TABLE `visitor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_posts`
--
ALTER TABLE `banner_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `editors_choice`
--
ALTER TABLE `editors_choice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor_info`
--
ALTER TABLE `visitor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
