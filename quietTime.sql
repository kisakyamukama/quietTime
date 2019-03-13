-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2019 at 04:12 AM
-- Server version: 5.7.25-0ubuntu0.18.10.2
-- PHP Version: 7.2.15-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quietTime`
--

-- --------------------------------------------------------

--
-- Table structure for table `devotions`
--

CREATE TABLE `devotions` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `scripture` tinytext NOT NULL,
  `lessons` text NOT NULL,
  `added_by` int(3) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devotions`
--

INSERT INTO `devotions` (`id`, `title`, `scripture`, `lessons`, `added_by`, `date_added`) VALUES
(1, '.,/l', 'kkkkkkkkkkkk', 'l;;;;;;;;;;;;;;;;;;;;;;', 1, '2019-03-09 18:00:22'),
(2, 'Parabale of the Sower', 'Matthew 12', 'Hearts: \r\n- pathway\r\n- no root\r\n- with thorns\r\n- good ground\r\n\r\nPathway: this heart does not understand the Word. \r\nUnderstand scripture is when the Word ministers to you, communicates to you.', 1, '2019-03-11 02:55:07'),
(3, 'what happens if i decide to si', 'Matthew 13:11-15  Romans 6 Heb', 'God expects me to walk in the Truth I have known of Him else my heart may become dull of taking in from Him.', 1, '2019-03-13 01:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `Idea`
--

CREATE TABLE `Idea` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `insight` text NOT NULL,
  `added_by` int(3) NOT NULL,
  `when_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Idea`
--

INSERT INTO `Idea` (`id`, `title`, `insight`, `added_by`, `when_added`) VALUES
(1, 'this is an idea', 'hdjdkkfkfkfkkfkfkf', 1, '2019-01-16 13:19:15'),
(2, 'jdjjdj', 'jsjjsssssssssssssssssssssssssssssssssssssssssssssskdkdk', 1, '2019-01-16 13:20:28'),
(3, 'dlsdpod', 'dalsdsaldjjjjjjjjjjjjj', 1, '2019-01-16 13:21:20'),
(4, 'personal management system', 'i want to create a personal scheduler and task management system', 1, '2019-03-10 16:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `Quote`
--

CREATE TABLE `Quote` (
  `id` int(11) NOT NULL,
  `quote` tinytext NOT NULL,
  `insight` text NOT NULL,
  `added_by` int(4) NOT NULL,
  `when_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Quote`
--

INSERT INTO `Quote` (`id`, `quote`, `insight`, `added_by`, `when_added`) VALUES
(1, 'askljf', 'lkdadssssssssspoenop\'', 1, '2019-01-16 13:22:05'),
(2, 'aLKEEEEEEEEEEEEEEEEE', 'ALKNFFFFFFFFFFFFFFFFF', 1, '2019-01-16 13:23:36'),
(3, 'sldslk', 'kdklskd', 1, '2019-01-16 13:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `Testimony`
--

CREATE TABLE `Testimony` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `insight` text NOT NULL,
  `added_by` int(3) NOT NULL,
  `when_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Testimony`
--

INSERT INTO `Testimony` (`id`, `title`, `insight`, `added_by`, `when_added`) VALUES
(1, 'aslkffffffffffff', 'lkdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '2019-01-16 13:21:44'),
(2, '24 years', 'And when the Philistines heard that the children of Israel were gathered together to Mizpeh, the lords of the Philistines went up against Israel. And when the children of Israel heard it, they were afraid of the Philistines.\r\n And the children of Israel said to Samuel, Cease not to cry unto the LORD our God for us, that he will save us out of the hand of the Philistines.\r\n \r\nAnd Samuel took a sucking lamb, and offered it for a burnt offering wholly unto the LORD: and Samuel cried unto the LORD for Israel; and the LORD heard him.\r\n And as Samuel was offering up the burnt offering, the Philistines drew near to battle against Israel: but the LORD thundered with a great thunder on that day upon the Philistines, and discomfited them; and they were smitten before Israel.\r\n And the men of Israel went out of Mizpeh, and pursued the Philistines, and smote them, until they came under Beth–car.\r\n Then Samuel took a stone, and set it between Mizpeh and Shen, and called the name of it Eben–ezer, saying, Hitherto hath the LORD helped us.\r\n\r\n(I Samuel 7:7-12 [KJV])\r\n\r\nverse 12 ISV\r\nThen Samuel took a stone, placed it between Mizpah and Shen and named it Ebenezer. He said, \"The LORD has helped us this far.\"\r\n\r\nI thank God for bringing me this far.\r\nYesterday, I turned 24 years. Am so grateful to Jesus for bringing me this far so grateful. Thank You Lord Jesus.\r\n\r\nHave had storms in life before getting saved had challenges and God kept me when I got saved have had storms two great ones but Jesus has sustained me. During which each storm my salvation has been checked and everyone of the two somehow I wished I was not saved in the hope that would be going through the storms but I know I have always been wrong because at the end of each I have come to love God more and more and understand salvation and got rooted more and more.\r\n\r\nJesus I thank You for saving me, I don\'t regret  am so grateful, thank You for helping me be alive at 24. at 23 thought of ending my life but You made a way in secondary when had lost hope for being alive You gave me  hope, You kept me.\r\n\r\nJeremiah 29:11 I know the plans that I have for you, declares the LORD. They are plans for peace and not disaster, plans to give you a future filled with hope. \r\n\r\nI can\'t forget that moment living life with all resources but no hope was dead to life that was form 6 ( this storm took like 8 month from s5 second term  to s6 like a month to UACE ). So am there walking along the way without hope and    this truck passes and goes ahead and on it was written Jeremiah 29:11  I needed to know I was loved honestly can\'t explain much about the truck was it real I knew God was speaking to me..... Jesus I can\'t thank You enough naye webale nyo.\r\n\r\nTo all my friends God has used on my journey God bless u all you all too dear to me wish I could write about each one of you individually, but know you so special to me. Thank You for the special messages God bless each one of You.\r\n\r\nBorn on 20 03 1995  got saved at Lubiri SS in my from 3 2011 at Premium boys Hostel. (it were the papa Sajjabi moving around hostels preaching) I bless the name of the Lord.\r\n\r\nEbeneezer \r\nHosanna to the King of Kings', 1, '2019-03-11 07:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(16) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `username` varchar(15) NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `residence` varchar(16) NOT NULL,
  `zip_code` int(6) NOT NULL,
  `password` varchar(15) NOT NULL,
  `profile_photo` varchar(20) NOT NULL,
  `total_devotions` int(3) NOT NULL,
  `status` enum('Active','Not Active') NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `gender`, `residence`, `zip_code`, `password`, `profile_photo`, `total_devotions`, `status`, `date_added`) VALUES
(1, 'Michael', 'Kisakyamukama', 'Kisakyamukama', '', 'Katale', 256, 'michael', '', 0, 'Active', '2019-01-16 12:45:47'),
(2, 'Michael', 'Kabali', 'Michael', '', 'Katale, Wakiso', 256, 'MICHAEL', '', 0, 'Active', '2019-01-16 12:48:15'),
(3, 'Michael', 'Kisakyamukama', 'admin', '', 'Katale', 256, 'admin', '', 0, 'Active', '2019-01-16 12:53:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devotions`
--
ALTER TABLE `devotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Idea`
--
ALTER TABLE `Idea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Quote`
--
ALTER TABLE `Quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Testimony`
--
ALTER TABLE `Testimony`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devotions`
--
ALTER TABLE `devotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Idea`
--
ALTER TABLE `Idea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Quote`
--
ALTER TABLE `Quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Testimony`
--
ALTER TABLE `Testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
