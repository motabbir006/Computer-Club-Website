-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 08:29 PM
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
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_data`
--

CREATE TABLE `admin_login_data` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `password` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `selection` text COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `admin_login_data`
--

INSERT INTO `admin_login_data` (`ID`, `username`, `password`, `selection`) VALUES
(1, 'sourov006', 'nbiu1234', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `approve_member`
--

CREATE TABLE `approve_member` (
  `id` int(11) NOT NULL,
  `first_name` text COLLATE latin1_general_cs NOT NULL,
  `last_name` text COLLATE latin1_general_cs NOT NULL,
  `student_id` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `batch` int(255) NOT NULL,
  `dept` varchar(255) COLLATE latin1_general_cs DEFAULT NULL,
  `available` varchar(100) COLLATE latin1_general_cs DEFAULT NULL,
  `computer_skill` text COLLATE latin1_general_cs NOT NULL,
  `other_skill` text COLLATE latin1_general_cs NOT NULL,
  `what_to_learn` text COLLATE latin1_general_cs NOT NULL,
  `email` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `contact_number` varchar(255) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `approve_member`
--

INSERT INTO `approve_member` (`id`, `first_name`, `last_name`, `student_id`, `batch`, `dept`, `available`, `computer_skill`, `other_skill`, `what_to_learn`, `email`, `contact_number`) VALUES
(12, 'Motabbir Hossain', 'Sourov', '21', 21, 'EEE', '0', 'Nothing', 'Nothing', 'Everything', 'sourov00p@gmail.com', '01788107942');

-- --------------------------------------------------------

--
-- Table structure for table `event_notice`
--

CREATE TABLE `event_notice` (
  `ID` int(11) NOT NULL,
  `date` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `title` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `description` varchar(6000) COLLATE latin1_general_cs DEFAULT NULL,
  `image` varbinary(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `event_notice`
--

INSERT INTO `event_notice` (`ID`, `date`, `title`, `description`, `image`) VALUES
(22, '3 march', 'NBIU CSE FEST 2024', 'The NBIU CSE Fest 2024 is a dynamic celebration of technology, innovation, and camaraderie at North Bengal International University. With an exciting blend of academic brilliance and creative flair, the festival showcases the talents of computer science enthusiasts. Students engage in stimulating competitions, hackathons, and insightful tech talks, fostering a spirit of learning and collaboration. The event is a platform for networking, where participants can connect with industry professionals and fellow students. NBIU CSE Fest 2024 promises a vibrant atmosphere, filled with coding challenges, project exhibitions, and a shared passion for advancing the frontiers of computer science. Join us for an unforgettable celebration of knowledge and creativity!', 0x6576656e74312e6a7067),
(23, '19 October', 'Pahela Falgun', 'his list of the 100 most common vocabulary words in English can be used as a reference for beginner English students. It\'s a good idea to master these words fully before trying to move on to less common words, since this is the vocabulary you will encounter most often. These are some of the first words that native English speaking children learn how to spell. You can also make sure that you not only recognize these words and know how to pronounce them, but that you can also spell them correctly. Mistakes in spelling these short, common words are more significant than mistakes spelling more complicated words', 0x73746f72792e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `name` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `text` varchar(5000) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `name`, `text`) VALUES
(29, '20116433006', 'Motabbir Hossain Sourov', 'Lorem');

-- --------------------------------------------------------

--
-- Table structure for table `latest_notice`
--

CREATE TABLE `latest_notice` (
  `ID` int(11) NOT NULL,
  `date` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `title` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `description` varchar(6000) COLLATE latin1_general_cs DEFAULT NULL,
  `image` varbinary(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `latest_notice`
--

INSERT INTO `latest_notice` (`ID`, `date`, `title`, `description`, `image`) VALUES
(25, '29 january', 'kg.he looo dear', ' Tor nanir hedaaa bedii', 0x746f6d2e6a7067),
(26, '19 October', 'Hello World!', 'Nothing to say', 0x6576656e742e6a7067),
(27, '19 October', 'Just do something', 'Descriptionloooooooooooooo', 0x64657369676e322e706e67),
(28, '19 October', 'Do some thing', 'Just do it', 0x6576656e742e6a7067),
(29, '19 October', 'Hello world', 'NBIU Computer club', 0x6465766c6f7065722e706e67),
(44, '10 January ', 'Bangabandhu\'s Homecoming Day is celebrated at North Bengal International University', 'Press Release: Father of the Nation Bangabandhu Sheikh Mujibur Rahman\'s Homecoming Day was celebrated at North Bengal International University through various programs. On Wednesday, January 10, at 11:30 a.m., on the occasion of the day, a floral wreath was placed on the portrait of Bangabandhu at its own campus of Chauddapaistha University in Rajshahi city on the initiative of the university administration. After that a discussion meeting was organized to commemorate the day. Founder Vice-Chancellor of North Bengal International University and currently advisor, Rabi\'s former Vice-Chancellor, distinguished educationist Professor Dr. Honorable Vice-Chancellor Professor Dr. Vidhan Chandra Das. Highlighting the significance of the day, Professor Dr. Dean of the Faculty of Social Sciences and Law spoke as a special guest. Maqsudur Rahman, Dean of Faculty of Arts and Business Studies Prof. Abdur Rauf. IQAC Additional Director of the University. Prof. Dr. Abdul Quddus conducted the program. Ajibar Rahman, Controller of Examination Jonab Ali spoke. University teachers and staff were present on the occasion.', 0x6576656e74312e6a7067),
(45, '2 February', 'Professor Ansar Uddin was appointed as the Treasurer of North Bengal International University', 'Press release: As the treasurer of North Bengal International University of Rajshahi, professor of political science department of Rajshahi University (retired). Ansar Uddin was appointed by His Excellency the President and Chancellor. Thursday (November 16, 2023) Deputy Secretary of Secondary and Higher Education Department of the Ministry of Education. Md. This information was informed through a notification signed by Farhad Hossain. It is mentioned that, with the approval of His Excellency the President and the Chancellor, according to Section 33(1) of the Private University Act, 2010, Professor (Retired) of Political Science Department of Rajshahi University. Ansar Uddin has been appointed as the Treasurer of North Bengal International University. His term of appointment as Treasurer will be 4 years from the date of joining. By the way, Professor Md. Ansar Uddin obtained BSS (Hons) and MSS degrees from Department of Public Administration, Dhaka University. In addition to teaching in Rajshahi University, he held various administrative duties including President of Political Science Department, Director of Education and Research Institute, Dean of Social Science Faculty, Administrator of Central Cafeteria, Provost of Shaheed Habibur Rahman Hall. He has also served as an expert member of various universities including academic council member of Begum Rokeya University and National University.', 0x6a657272792e6a7067),
(46, '3 march', 'Hello friends', 'Become a pioneer in the digital canvas at Pixel Pioneers! This workshop focuses on graphics and design, providing hands-on sessions to enhance your skills. Join us to discover the artistry within pixels and design captivating visuals.', 0x31202832292e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `login_db`
--

CREATE TABLE `login_db` (
  `User_id` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `User_password` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `login_db`
--

INSERT INTO `login_db` (`User_id`, `User_password`) VALUES
('20116433006', '201116'),
('20116433010', '201116'),
('20116433025', '201116'),
('20116433003', '201116'),
('20116433005', '201116'),
('20116433013', '201116'),
('20116433019', '201116'),
('20116433026', '201116'),
('20116433027', '201116'),
('20116433001', '201116'),
('0712230012101001', '201116'),
('0712230012101002', '201116'),
('0712230012101003', '201116'),
('0712230012101004', '201116'),
('0712230012101005', '201116'),
('0712230012101006', '201116'),
('0712230012101007', '201116'),
('0712230012101008', '201116'),
('0712230012101009', '201116'),
('0712230012101010', '201116'),
('0712230012101011', '201116'),
('0712230012101012', '201116'),
('0712230012101013', '201116'),
('0712230012101014', '201116'),
('0712230012101015', '201116'),
('0712230012101016', '201116'),
('0712230012101017', '201116'),
('0712230012101018', '201116'),
('0712230012101019', '201116'),
('0712230012101020', '201116'),
('0712230012101021', '201116'),
('0712230012101022', '201116'),
('0712230012101023', '201116'),
('0712230012101024', '201116'),
('0712230012101025', '201116'),
('0712230012101026', '201116'),
('0712230012101027', '201116'),
('0712230012101028', '201116'),
('0712230012101029', '201116'),
('0712230012101030', '201116'),
('0712230012101031', '201116'),
('0712230012101032', '201116'),
('0712230012101033', '201116'),
('0712230012101034', '201116'),
('0712310012101001', '201116'),
('0712310012101002', '201116'),
('0712310012101003', '201116'),
('0712310012101004', '201116'),
('0712310012101005', '201116'),
('0712310012101006', '201116'),
('0712310012101007', '201116'),
('0712310012101008', '201116'),
('0712310012101009', '201116'),
('0712310012101010', '201116'),
('0712310012101011', '201116'),
('0712310012101012', '201116'),
('0712310012101013', '201116'),
('0712310012101014', '201116'),
('0712310012101015', '201116'),
('0712310012101016', '201116'),
('0712310012101017', '201116'),
('0712310012101018', '201116'),
('0712310012101019', '201116'),
('0712310012101020', '201116'),
('0712310012101021', '201116'),
('0712310012101022', '201116'),
('0712310012101023', '201116'),
('0712310012101024', '201116'),
('0712310012101025', '201116'),
('0712310012101026', '201116'),
('0712310012101027', '201116'),
('0712310012101028', '201116'),
('0712310012101029', '201116'),
('0712310012101030', '201116'),
('0712310012101031', '201116'),
('0712310012101032', '201116'),
('0712310012101033', '201116'),
('0712310012101034', '201116'),
('0712310012101035', '201116'),
('0712310012101036', '201116'),
('0712310012101037', '201116'),
('0712310012101038', '201116'),
('0712340012101001', '201116'),
('0712340012101002', '201116'),
('0712340012101003', '201116'),
('0712340012101004', '201116'),
('0712340012101005', '201116'),
('0712340012101006', '201116'),
('0712340012101007', '201116'),
('0712340012101008', '201116'),
('0712340012101009', '201116'),
('0712340012101010', '201116'),
('0712340012101011', '201116'),
('0712340012101012', '201116'),
('0712340012101013', '201116'),
('0712340012101014', '201116'),
('0712340012101015', '201116'),
('0712340012101016', '201116'),
('0712340012101017', '201116'),
('0712340012101018', '201116'),
('0712340012101019', '201116'),
('0712340012101020', '201116'),
('0712340012101021', '201116'),
('0712340012101022', '201116'),
('0712340012101023', '201116'),
('0712340012101024', '201116'),
('0712340012101025', '201116'),
('0712340012101026', '201116'),
('0712340012101027', '201116'),
('0712340012101028', '201116'),
('0712340012101029', '201116'),
('0712340012101030', '201116'),
('0712340012101031', '201116'),
('0712340012101032', '201116'),
('0712340012101033', '201116'),
('0712340012101034', '201116'),
('0712340012101035', '201116'),
('0712340012101036', '201116'),
('0712340012101037', '201116'),
('0712340012101038', '201116'),
('0712340012101039', '201116'),
('0712340012101040', '201116'),
('0712340012101041', '201116'),
('0712340012101042', '201116'),
('0712340012101043', '201116'),
('0712340012101044', '201116'),
('0712340012101045', '201116'),
('0712340012101046', '201116'),
('0712340012101047', '201116'),
('0712340012101048', '201116'),
('0712340012101049', '201116'),
('0712340012101050', '201116');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `id` int(11) NOT NULL,
  `first_name` text COLLATE latin1_general_cs NOT NULL,
  `last_name` text COLLATE latin1_general_cs NOT NULL,
  `student_id` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `batch` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `dept` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `available` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `computer_skill` varchar(2000) COLLATE latin1_general_cs NOT NULL,
  `other_skill` varchar(2000) COLLATE latin1_general_cs NOT NULL,
  `what_to_learn` varchar(2000) COLLATE latin1_general_cs NOT NULL,
  `email` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `contact_number` varchar(255) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- --------------------------------------------------------

--
-- Table structure for table `r1`
--

CREATE TABLE `r1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `position` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `image_path` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `description` text COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `r1`
--

INSERT INTO `r1` (`id`, `name`, `position`, `image_path`, `description`) VALUES
(3, 'Motabbir Hossain Sourov', 'Team Lead', 'sourov.jpg', '\r\nPioneering Leadership: Former CEO, Accomplished Manager, Skilled Developer, Inspiring Mentor');

-- --------------------------------------------------------

--
-- Table structure for table `r2`
--

CREATE TABLE `r2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `position` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `image_path` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `description` text COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `r2`
--

INSERT INTO `r2` (`id`, `name`, `position`, `image_path`, `description`) VALUES
(2, 'MD. Mahfuz Sarkar', 'DESIGN & DECORATION LEAD', 'mahfuz.jpg', 'Lead in Artistry, Decor Maestro, Creative Visionary, Inspiring Trendsetter');

-- --------------------------------------------------------

--
-- Table structure for table `r3`
--

CREATE TABLE `r3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `position` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `image_path` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `description` text COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `r3`
--

INSERT INTO `r3` (`id`, `name`, `position`, `image_path`, `description`) VALUES
(3, 'Rubayat Khusbu', 'DESIGN & DECORATION LEAD', 'khusbu.jpg', 'Lead in Artistry, Decor Maestro, Creative Visionary, Inspiring Trendsetter');

-- --------------------------------------------------------

--
-- Table structure for table `r4`
--

CREATE TABLE `r4` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `position` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `image_path` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `description` text COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `r4`
--

INSERT INTO `r4` (`id`, `name`, `position`, `image_path`, `description`) VALUES
(3, 'Tonmoy Rafi', 'SOCIAL AWARENESS LEAD', 'rafi.jpg', 'Lead in Artistry, Decor Maestro, Creative Visionary, Inspiring Trendsetter');

-- --------------------------------------------------------

--
-- Table structure for table `r5`
--

CREATE TABLE `r5` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `position` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `image_path` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `description` text COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `r5`
--

INSERT INTO `r5` (`id`, `name`, `position`, `image_path`, `description`) VALUES
(2, 'Rubaiya Saimin', 'LOGISTIC LEAD', 'saimin.jpg', 'Lead in Artistry, Decor Maestro, Creative Visionary, Inspiring Trendsetter');

-- --------------------------------------------------------

--
-- Table structure for table `r6`
--

CREATE TABLE `r6` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `position` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `image_path` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `description` text COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `r6`
--

INSERT INTO `r6` (`id`, `name`, `position`, `image_path`, `description`) VALUES
(2, 'Tom', 'SOCIAL AWARENESS LEAD', 'tom.jpg', 'Lead in Artistry, Decor Maestro, Creative Visionary, Inspiring Trendsetter');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_notice`
--

CREATE TABLE `upcoming_notice` (
  `ID` int(11) NOT NULL,
  `date` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `title` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `description` varchar(6000) COLLATE latin1_general_cs DEFAULT NULL,
  `image` varbinary(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `upcoming_notice`
--

INSERT INTO `upcoming_notice` (`ID`, `date`, `title`, `description`, `image`) VALUES
(16, '9 January', 'PC Gaming Marathon', 'Gear up for an epic gaming experience at our \"PC Gaming Marathon.\" Bring your gaming rig or use one of ours, and dive into an all-night gaming extravaganza. From multiplayer showdowns to solo adventures, this event is a celebration of the gaming community', 0x496e666c75656e6365722e706e67),
(17, '14 January', 'Tech Innovators Symposium', 'Unlock the future at our \"Tech Innovators Symposium,\" where visionaries and innovators come together to explore the latest advancements in technology. Engage in thought-provoking discussions, witness cutting-edge demos, and network with industry leaders. ', 0x496e666c75656e6365722e706e67),
(18, '18 January', 'Tech Trek: Industry Field Trip', ' Embark on a journey behind the scenes of leading tech companies! Tech Trek is your passport to explore cutting-edge workplaces, meet professionals, and gain insights into the tech industry\'s inner workings. Get ready for an eye-opening adventure!', 0x496e666c75656e6365722e706e67),
(25, '12 march', 'Job\'s Fair in NBIU Arrange By NBIU Computer Club', 'Connect with fellow tech enthusiasts at Byte Bites, our exclusive networking mixer. Share experiences, exchange ideas, and build valuable connections in a relaxed and tech-savvy atmosphere. It\'s the perfect blend of socializing and tech talk! Description: Connect with fellow tech enthusiasts at Byte Bites, our exclusive networking mixer. Share experiences, exchange ideas, and build valuable connections in a relaxed and tech-savvy atmosphere. It\'s the perfect blend of socializing and tech talk! Description: Connect with fellow tech enthusiasts at Byte Bites, our exclusive networking mixer. Share experiences, exchange ideas, and build valuable connections in a relaxed and tech-savvy atmosphere. It\'s the perfect blend of socializing and tech talk!', 0x616e6e69766572736172792e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `student_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `batch` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `dept` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`ID`, `name`, `student_id`, `batch`, `dept`) VALUES
(1, 'Motabbir Hossain Sourov', '20116433006', '16', 'CSE'),
(2, 'Mahfuz Sarkar', '20116433010', '16', 'CSE'),
(3, 'Rubayat Islam', '20116433025', '16', 'CSE'),
(4, 'Abdula Al Rafi', '20116433010', '16', 'CSE'),
(5, 'Rubaiya Saimin', '20116433019', '16', 'CSE'),
(6, 'Md. Nasim Sonar', '20116433026', '16', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_data`
--
ALTER TABLE `admin_login_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `approve_member`
--
ALTER TABLE `approve_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_notice`
--
ALTER TABLE `event_notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_notice`
--
ALTER TABLE `latest_notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r1`
--
ALTER TABLE `r1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r2`
--
ALTER TABLE `r2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r3`
--
ALTER TABLE `r3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r4`
--
ALTER TABLE `r4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r5`
--
ALTER TABLE `r5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r6`
--
ALTER TABLE `r6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_notice`
--
ALTER TABLE `upcoming_notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login_data`
--
ALTER TABLE `admin_login_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `approve_member`
--
ALTER TABLE `approve_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event_notice`
--
ALTER TABLE `event_notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `latest_notice`
--
ALTER TABLE `latest_notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `member_info`
--
ALTER TABLE `member_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `r1`
--
ALTER TABLE `r1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `r2`
--
ALTER TABLE `r2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r3`
--
ALTER TABLE `r3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `r4`
--
ALTER TABLE `r4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `r5`
--
ALTER TABLE `r5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r6`
--
ALTER TABLE `r6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upcoming_notice`
--
ALTER TABLE `upcoming_notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
