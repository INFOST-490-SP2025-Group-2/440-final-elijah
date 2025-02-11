-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2025 at 09:22 AM
-- Server version: 8.0.41
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vande433_FinalProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE `blogposts` (
  `blogid` int NOT NULL COMMENT 'Id of the blog post',
  `userid` int NOT NULL COMMENT 'ID of the user who created this post',
  `blogtitle` varchar(255) NOT NULL COMMENT 'Title of the blogpost',
  `blogbody` text NOT NULL COMMENT 'Body of the blogpost',
  `blogposttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Timestamp of when this was posted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`blogid`, `userid`, `blogtitle`, `blogbody`, `blogposttime`) VALUES
(2, 1, 'Diving into Diversity: A Quick Guide to Linux Distros', 'Welcome to the Linux galaxy, where an array of distributions (distros) cater to every taste and need. In this blog, we\'ll take a whirlwind tour of some standout Linux distros, offering insights into their unique features and ideal use cases.\r\n\r\nLet\'s start with Ubuntu, a perennial favorite known for its user-friendly interface and robust community support. Whether you\'re a newcomer or a seasoned pro, Ubuntu\'s reliability makes it a top choice for desktop and server environments alike.\r\n\r\nFor those craving bleeding-edge technology and customization, Arch Linux beckons. Its minimalist approach empowers users to build their system from scratch, tailored to their exact specifications.\r\n\r\nMeanwhile, Debian shines as a rock-solid foundation, beloved for its stability and commitment to free software. It\'s the go-to choice for those seeking reliability without sacrificing flexibility.\r\n\r\nSpecialized distros like Kali Linux, prized for its cybersecurity tools, and Tails, designed for privacy and anonymity, cater to specific needs in the digital realm.\r\n\r\nFedora, with its focus on innovation, and Linux Mint, offering a polished experience out of the box, showcase the diverse offerings within the Linux ecosystem.\r\n\r\nBut the exploration doesn\'t end there. From lightweight distros for older hardware to niche offerings for specific industries, Linux continues to expand its reach, inviting users to explore new territories.\r\n\r\nWhether you prioritize stability, customization, or security, there\'s a Linux distro ready to welcome you into its orbit. Join us as we navigate the depths of diversity in the Linux galaxy.', '2024-05-06 22:46:14'),
(4, 2, 'Unraveling the Mystery: Exploring the Hidden Gems of History', 'In the vast tapestry of human history, there are countless stories waiting to be discovered, hidden beneath the layers of time and obscured by the passage of years. These hidden gems offer us glimpses into the lives, cultures, and events that have shaped our world, often revealing surprising and illuminating insights along the way.\r\n\r\nFrom forgotten civilizations to overlooked individuals, the exploration of these hidden historical treasures can lead us down unexpected paths of discovery. Whether its uncovering lost artifacts buried deep within the earth or piecing together fragments of ancient texts, each revelation adds another piece to the puzzle of our collective past.\r\n\r\nOne such hidden gem is the story of the Voynich manuscript, a mysterious book dating back to the 15th century. Written in an unknown script and filled with enigmatic illustrations, its pages have baffled historians and cryptographers for centuries. Despite numerous attempts to decipher its secrets, the manuscript remains an unsolved riddle, tantalizing researchers with its tantalizing mysteries.\r\n\r\nAnother example lies in the ruins of Göbekli Tepe, an ancient archaeological site in Turkey that predates Stonehenge by thousands of years. Buried beneath the sands of time for millennia, this remarkable site challenges our understanding of early human civilization and raises intriguing questions about the origins of agriculture and the development of complex societies.\r\n\r\nBut hidden gems of history are not limited to ancient times. In more recent history, there are still untold stories waiting to be unearthed. From forgotten heroes of the past to overlooked events that shaped the course of nations, each discovery adds richness and depth to our understanding of the world around us.\r\n\r\nAs we delve into the past, we uncover not only the stories of those who came before us but also echoes of our own lives and experiences. In the hidden gems of history, we find a connection to the past that enriches our present and guides us into the future.', '2024-05-02 16:00:55'),
(5, 3, 'Powering Dynamic Web Solutions: SQL and PHP Essentials', 'In the dynamic realm of web development, SQL and PHP stand as pillars of power, enabling the creation of robust and interactive web solutions. Let\'s delve into the essentials of these technologies and their symbiotic relationship in crafting dynamic websites and applications.\r\n\r\nStructured Query Language (SQL) serves as the backbone for managing relational databases. With SQL, developers can perform a myriad of operations, from creating and querying databases to modifying and deleting data. Its intuitive syntax and powerful capabilities make it a fundamental tool for storing and manipulating data efficiently.\r\n\r\nComplementing SQL\'s backend prowess is PHP, a versatile scripting language designed for web development. PHP seamlessly integrates with HTML, allowing developers to embed dynamic content within web pages. Its extensive feature set, including file manipulation, form handling, and database connectivity, empowers developers to build dynamic and interactive web applications with ease.\r\n\r\nAt the heart of the SQL-PHP synergy lies database interaction. PHP\'s built-in database extensions, such as PDO (PHP Data Objects) and MySQLi, facilitate seamless communication with SQL databases. Developers can execute SQL queries, fetch results, and handle transactions directly from their PHP scripts, enabling dynamic content generation based on user input or system requirements.\r\n\r\nMoreover, PHP\'s object-oriented programming (OOP) capabilities enhance code reusability and maintainability, allowing developers to encapsulate SQL operations within classes and methods, promoting a modular and scalable architecture.\r\n\r\nTogether, SQL and PHP form a formidable duo, empowering developers to create dynamic, data-driven web applications that engage users and deliver rich, personalized experiences. Whether building e-commerce platforms, content management systems, or social networking sites, mastering SQL and PHP opens doors to a world of endless possibilities in web development', '2024-05-06 23:01:07'),
(14, 5, 'Unlocking the Power of Mindfulness: How to Cultivate Inner Peace in a Chaotic World', 'In a world that seems to move at lightning speed, finding moments of peace and calm can feel like an elusive dream. The constant barrage of notifications, deadlines, and responsibilities can leave us feeling overwhelmed and disconnected from ourselves. However, amidst the chaos, there exists a powerful tool that has the potential to transform our lives from the inside out: mindfulness.\r\n\r\nMindfulness is more than just a buzzword; its a practice rooted in ancient wisdom that has been scientifically proven to reduce stress, increase focus, and enhance overall well-being. At its core, mindfulness is about being fully present in the moment, without judgment or attachment to the past or future.\r\n\r\nSo, how can we cultivate mindfulness in our daily lives? It starts with simple practices that anyone can incorporate into their routine. From mindful breathing exercises to mindful eating, there are countless ways to bring awareness to the present moment and quiet the chatter of the mind.\r\n\r\nBut mindfulness isnt just about what we do; its also about how we approach life. Its about cultivating an attitude of openness, curiosity, and compassion towards ourselves and others. By practicing self-compassion and empathy, we can learn to navigate lifes challenges with greater ease and resilience.\r\n\r\nIn this blog post, we will explore the transformative power of mindfulness and offer practical tips for incorporating it into your daily routine. Whether you are new to mindfulness or a seasoned practitioner, theres always room to deepen your practice and experience the profound benefits it has to offer. So, take a deep breath, and join us on this journey towards inner peace and well-being.', '2024-05-06 17:09:53'),
(16, 5, 'Finding Stillness in the Chaos: The Zen of Rocks', 'In the chaotic rush of life, amidst the flurry of deadlines and the whirlwind of obligations, finding a moment of calm can seem like an impossible feat. But what if I told you that amidst all this chaos, there lies a tranquil oasis waiting to be discovered? Enter the world of rocks.\r\n\r\nRocks, seemingly mundane and unassuming, have a profound lesson to impart: the art of stillness. Just like the ancient boulders weathering the storms of time, we too can learn to weather lifes challenges with grace and poise.\r\n\r\nThe practice of mindfulness, when applied to rocks, becomes a gateway to inner peace. As we hold a smooth stone in our hands, feeling its weight and texture, we are reminded to ground ourselves in the present moment. With each breath, we let go of our worries and immerse ourselves fully in the here and now.\r\n\r\nBut mindfulness with rocks extends beyond mere observation; it invites us to contemplate the deeper truths they hold. Like the layers of sedimentary rock, each representing a chapter in Earths history, we too have layers of experiences that shape who we are. By reflecting on these layers, we gain insight into our own journey and the interconnectedness of all things.\r\n\r\nIn this fast-paced world, where time seems to slip through our fingers like grains of sand, the wisdom of rocks offers a beacon of hope. So, the next time life feels overwhelming, take a moment to pick up a rock, feel its solidity, and remember: amidst the chaos, there is always a place of stillness waiting to be found.', '2024-05-06 17:20:22'),
(17, 5, 'Unveiling the Dark Side: Nintendos Controversial Relationship with Its Users', 'Nintendo, a household name in the gaming industry, has long been revered for its iconic franchises and innovative gaming experiences. However, beneath its cheerful facade lies a troubling truth: a pattern of behavior that suggests a disregard for the very users who have propelled it to success.\r\n\r\nThe tyranny of Nintendo manifests in various forms, from its draconian approach to copyright enforcement to its reluctance to embrace modern gaming practices. One of the most glaring examples is Nintendos aggressive stance on fan projects and emulation. Despite the passionate creativity of its fan base, Nintendo has consistently shut down fan-made games and ROM sites, often resorting to legal threats and cease-and-desist orders. This heavy-handed approach not only stifles fan expression but also alienates loyal supporters who seek to celebrate Nintendos beloved franchises in their own way.\r\n\r\nFurthermore, Nintendos treatment of its online services and user experience leaves much to be desired. The companys reluctance to adopt industry-standard features like cloud saves and voice chat has frustrated users and hindered the overall gaming experience. While other gaming platforms prioritize user convenience and accessibility, Nintendo seems content to lag behind, clinging to outdated practices that prioritize control over user satisfaction.\r\n\r\nEven Nintendos hardware decisions have sparked controversy, with the company often accused of anti-consumer practices. From the limited availability of its consoles to the persistent issues with Joy-Con drift, Nintendos products have left many users feeling disillusioned and betrayed.\r\n\r\nDespite these challenges, Nintendo continues to enjoy unwavering support from a dedicated fan base. However, as the gaming landscape evolves and consumer expectations shift, Nintendo must recognize the importance of fostering a positive relationship with its users. By embracing transparency, listening to feedback, and prioritizing user-centric design, Nintendo has the opportunity to redeem its reputation and regain the trust of its audience.\r\n\r\nIn conclusion, while Nintendo has undoubtedly left an indelible mark on the gaming industry, its authoritarian tendencies and disregard for user satisfaction threaten to tarnish its legacy. As the company navigates the ever-changing landscape of gaming, it must confront the tyranny of its past and chart a new course toward a brighter, more inclusive future.', '2024-05-07 23:07:38'),
(18, 5, '', '', '2024-05-10 04:55:34'),
(20, 5, 'Test blog', 'Test content', '2025-02-10 23:42:03'),
(22, 5, '', '', '2025-02-11 00:51:50'),
(23, 5, '', 'test', '2025-02-11 00:52:01'),
(24, 5, 'test', 'test', '2025-02-11 00:52:16'),
(25, 5, '', '', '2025-02-11 00:52:19'),
(26, 5, 'test', 'test', '2025-02-11 00:52:23'),
(27, 5, '', '', '2025-02-11 00:52:35'),
(28, 5, '', 'test', '2025-02-11 00:52:38'),
(29, 5, 'test', 'test', '2025-02-11 00:52:45'),
(30, 5, 'test', '', '2025-02-11 00:53:45'),
(31, 5, 'NO BODY', '', '2025-02-11 00:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int NOT NULL COMMENT 'ID for this comment',
  `userid` int NOT NULL COMMENT 'ID for the user that created this comment',
  `blogid` int NOT NULL COMMENT 'ID for the bloig post this comment is tied to',
  `commentbody` text NOT NULL COMMENT 'Body of this comment',
  `commenttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Timestamp of when this comment was posted.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentid`, `userid`, `blogid`, `commentbody`, `commenttime`) VALUES
(6, 6, 2, 'This was such a good blog', '2024-05-07 22:57:24'),
(7, 6, 2, 'This was such a good blog', '2024-05-07 22:57:40'),
(8, 5, 4, 'I love rocks so many rocks', '2024-05-07 23:12:51'),
(9, 5, 4, 'I love rocks so many rocks', '2024-05-07 23:14:47'),
(10, 5, 4, 'I love rocks so many rocks', '2024-05-07 23:15:27'),
(11, 7, 2, '', '2024-05-10 04:54:53'),
(12, 7, 2, 'asdfas', '2024-05-10 04:54:59'),
(13, 8, 2, 'TESTING', '2025-02-09 21:00:20'),
(14, 5, 2, 'comment', '2025-02-10 23:44:40'),
(15, 5, 2, 'comment', '2025-02-10 23:46:10'),
(16, 5, 2, 'comment!!!', '2025-02-10 23:46:26'),
(17, 5, 2, 'comment!!!', '2025-02-10 23:46:54'),
(18, 5, 2, 'my comment', '2025-02-11 00:09:28'),
(19, 5, 29, '', '2025-02-11 00:53:07'),
(20, 5, 31, '', '2025-02-11 00:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int NOT NULL COMMENT 'ID of this user',
  `fname` varchar(255) NOT NULL COMMENT 'First name of this user',
  `lname` varchar(255) NOT NULL COMMENT 'Last name of this user',
  `email` varchar(255) NOT NULL COMMENT 'Email address this user registered with',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Password this user created for this blog site',
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Timestamp of when this user registered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `password`, `regdate`) VALUES
(1, 'Jebediah', 'Joblonski', 'jebby@hotmail.com', '9fa7ab8183322817e016df523587d11ee5f2b15be6d3c300a7bf72486a8b73b3', '2024-04-24 02:00:21'),
(2, 'Joshua', 'Javelin', 'jav@ymail.com', '0ee13f31f66afa41dccdb16b1ffbcc899f32ed3c9d8c8dbeebf659d065c927c5', '2024-04-24 02:05:14'),
(3, 'Jefer', 'Jellyfish', 'jefer@jelly.com', '22d8ec27fc129158128c5bf5fecae0342ea0937913c5cb1fe381a0c5e5d4cf09', '2024-04-25 15:52:51'),
(5, 'Admin', 'Istrator', 'admin@istrator.com', 'c87ccf6bb784f2848161ae3c0ab9cf4fb3a1d53f14a8d07aef6d8cd30e8c450b', '2024-05-02 15:31:04'),
(6, 'test', 'test', 'te@st.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '2024-05-06 21:58:54'),
(7, 'test', 'test', 'test', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '2024-05-10 04:54:10'),
(8, 'barry', 'molina', 'bhmolina@uwm.edu', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', '2025-02-09 20:59:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`blogid`),
  ADD KEY `userid` (`userid`) USING BTREE;

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`),
  ADD KEY `userid` (`userid`) USING BTREE,
  ADD KEY `blogid` (`blogid`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `blogid` int NOT NULL AUTO_INCREMENT COMMENT 'Id of the blog post', AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int NOT NULL AUTO_INCREMENT COMMENT 'ID for this comment', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT COMMENT 'ID of this user', AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD CONSTRAINT `blogposts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`blogid`) REFERENCES `blogposts` (`blogid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
