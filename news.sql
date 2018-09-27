-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 12:40 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `article` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `author`, `category`, `image`, `article`, `created_at`) VALUES
(4, 'Google Wants to Answer the Questions You Haven\'t Even Asked Yet', 'Gerrit De Vynck and Nico Grant', 'technology', 'uploads/myImg5bad162dc30656.88711180.jpeg', '<p>For two decades, typing a line of text into a blank search bar was the way almost everyone interacted with&nbsp;<strong>Google.</strong> Now the company is taking an even more active role in leading users around the Internet.</p>\r\n\r\n<p>The search giant announced a raft of new features at an event Monday to celebrate its 20th anniversary. A&nbsp;<strong>Facebook-</strong>like newsfeed populated with videos and articles the company thinks an individual user would find interesting will now show up on the <em>Google homepage </em>just below the search bar on all mobile web browsers.</p>\r\n\r\n<p>&quot;It helps you come across the things you haven&#39;t even started looking for,&quot; Karen Corby, a product manager on Google&#39;s search team, said in a&nbsp;<strong>blog post</strong>. The company also unveiled a feature to let people save searches in a collection and pick them up again later, and said it would present more information directly in search results, ostensibly helping people find what they&#39;re looking for without having to click through to a different website.</p>\r\n\r\n<p>The&nbsp;<a href=\"https://gadgets.ndtv.com/tags/alphabet\">Alphabet</a>&nbsp;unit wants to expand its presence on the web and get people to spend more time directly on Google rather than on independent websites. In its drive to help people find information they&#39;re looking for, the company is taking on tasks that were previously left to others. At the same time, politicians, activists and competitors are calling for greater scrutiny of Google&#39;s ever-growing power over data.</p>\r\n', '2018-09-27 23:11:01'),
(5, 'Asia Cup 2018 Final Preview: Overwhelming Favourites India Meet Upbeat Bangladesh', 'Tanya Rudra', 'sports', 'uploads/myImg5bad190d7f6979.90116807.jpg', '<p>Team India will be aiming to reassert their continental supremacy when they take on injury-hit Bangladesh in the summit clash of the&nbsp;<a href=\"https://sports.ndtv.com/asia-cup-2018\">Asia Cup 2018</a>&nbsp;in Dubai on Friday. A passionate Bangladesh wrecked the prospects of an India-Pakistan summit clash with a&nbsp;<a href=\"https://sports.ndtv.com/asia-cup-2018/gritty-bangladesh-stun-pakistan-to-set-up-asia-cup-final-date-with-india-1922817\">gutsy performance on Wednesday</a>&nbsp;despite losing key players to injury. On paper, India will remain overwhelming favourites to win the tournament for a record seventh time while Bangladesh will be hoping to be third-time lucky in a grand finale. The Indo-Bangla cricketing rivalry has grown in intensity over the years, but Bangladesh&#39;s injury woes might play a dampener heading into the final.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Star batsman Tamim Iqbal is already out with a fractured hand and Bangladesh will also not have premier all-rounder Shakib Al-Hasan in the line-up owing to a finger injury.</p>\r\n\r\n<p>He is expected to undergo surgery which will also force him out of the home series against Zimbabwe starting on September 30.</p>\r\n\r\n<p>For India, it will be a different kind of test though. A victory in the Asia Cup without regular skipper and best batsman Virat Kohli will be a big statement going into next year&#39;s World Cup. Not to forget, the&nbsp;<em>Asia Cup</em>&nbsp;trophy will be a healing touch after 1-4 Test series defeat in England.</p>\r\n\r\n<p>After resting five regulars during a wake-up call from Afghanistan in their tied Super Four encounter, the order is expected to be restored in the summit clash.</p>\r\n\r\n<p>The explosive opening pair of stand-in skipper Rohit Sharma and his deputy Shikhar Dhawan will be back at the top of the order while Jasprit Bumrah, Bhuvneshwar Kumar and Yuzvendra Chahal will bolster the bowling.</p>\r\n\r\n<p>A lot will depend on the start provided by Rohit (269 runs) and Shikhar (327 runs) as the middle order has looked shaky at times.</p>\r\n\r\n<p>Ambati Rayudu has looked set in all the games but has not finished off well while Kedar Jadhav and&nbsp;Mahendra Singh Dhoni&nbsp;have struggled in middle overs.</p>\r\n', '2018-09-27 23:23:17'),
(6, 'New article news', 'Kumar Shashwat', 'technology', 'uploads/myImg5bad2eba67e127.22705687.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2018-09-28 00:55:46'),
(7, 'Thugs of Hindostan trailer draws mixed reactions; Twitterati call Aamir Khan\'s Firangi \'Sasta Jack Sparrow\'', 'Kumar Shashwat', 'entertainment', 'uploads/myImg5bad4eef946b87.02500592.jpg', '<p><strong><em>Thugs of Hindostan</em></strong>&nbsp;makers released the much awaited trailer of the film on 27 September. Being one of the most anticipated releases of 2018, this magnum opus of sorts was sure to garner a strong social media reaction. Directed by&nbsp;Vijay Krishna Acharya,&nbsp;<em>Thugs of Hindostan&nbsp;</em>also features <strong>Amitabh Bachchan</strong>,&nbsp;<strong>Fatima Sana Shaikh</strong> and&nbsp; <strong>Katrina Kaif</strong>. Amidst polarised opinions, here are some of the best ones.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2018-09-28 03:13:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
