-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 11:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--
CREATE DATABASE IF NOT EXISTS `ghib` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ghib`;

-- --------------------------------------------------------

--
-- Table structure for table `studioghib`
--

CREATE TABLE `studioghib` (
  `movieTitle` varchar(50) NOT NULL,
  `maincharacters` varchar(50) NOT NULL,
  `descriptions` varchar(1000) NOT NULL,
  UNIQUE (movieTitle)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studioghib`
--

INSERT INTO `studioghib` (`movieTitle`, `maincharacters`, `descriptions`) VALUES
('My Neighbor Totoro', 'Mei, Satsuke, Susawatari, Totoro, Catbus', 'The movie My Neighbour Totoro is about two sisters, Satsuki and Mei, who move with their Dad to a house in the countryside. Their new neighbour happens to be a spiritual tree guardian, Totoro. When the family arrives, they see their new house for the first time. It looks very rundown and has a neglected feeling around it.\r\n'),
('Spirited Away', 'Chiriro, Haku, Yubaba, Zeniba', 'Spirited Away tells the story of Chihiro Ogino, a ten-year-old girl who, while moving to a new neighborhood, enters the world of Kami'),
('Howls Moving Castle', 'Howl, Sophie, Witch of the Waste', 'A love story between an 18-year-old girl named Sophie, cursed by a witch into an old womans body, and a magician named Howl. Under the curse, Sophie sets out to seek her fortune, which takes her to Howls strange moving castle. In the castle, Sophie meets Howls fire demon, named Karishifâ. Seeing that she is under a curse, the demon makes a deal with Sophie--if she breaks the contract he is under with Howl, then Karushifâ will lift the curse that Sophie is under, and she will return to her 18-year-old shape.'),
('Princess Mononoke', 'San, Ashitaka, Lady Eboshi', 'The story follows a young Emishi prince named Ashitaka, and his involvement in a struggle between the gods of a forest and the humans who consume its resources.'),
('Castle in the Sky', 'Pazu and Sheeta', 'Castle in the Sky is set many years after Laputa was deserted, and it is no more than a myth in most people’s eyes. A girl named Sheeta is sought after by pirates as well as the military; both groups are after the crystal necklace in her possession, as they all believe it is the key to finding Laputa and unlocking its secrets.'),
('Kiki’s Delivery Service', 'Kiki, Jiji', '13-year-old Kiki moves to a seaside town with her talking cat, Jiji, to spend a year alone, in accordance with her village ’s tradition for witches in training. After learning to control her broomstick, Kiki sets up a flying courier service and soon becomes a fixture in the community. But when the insecure young witch begins questioning herself and loses her magic abilities, she must overcome her self-doubt to get her powers back.\r\n'),
('Ponyo', 'Ponyo, Sosuke,', 'A goldfish who escapes from the ocean and is rescued by a five-year-old human boy, Sosuke after she is washed ashore while trapped in a glass jar.'),
('The Wind Rises', 'Jiro Horikoshi, Naomi Satomi', 'The Wind Rises is a fictionalised biographical film of Jiro Horikoshi (1903–1982), designer of the Mitsubishi A5M fighter aircraft and its successor, the Mitsubishi A6M Zero, used by the Empire of Japan during World War II.'),
('The Secret World of Arriety', 'Arietty, Sho', '14-year-old Arrietty and the rest of the four inch Clock family live in peaceful anonymity as they make their own home from items that they borrow from the house’ s human inhabitants. However, life changes for the Clocks when a human boy discovers Arrietty.');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewer`
-- (See below for the actual view)
--
CREATE TABLE `viewer` (
`movieTitle` varchar(50)
,`maincharacters` varchar(50)
,`descriptions` varchar(1000)
);

-- --------------------------------------------------------

--
-- Structure for view `viewer`
--
DROP TABLE IF EXISTS `viewer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewer`  AS SELECT `studioghib`.`movieTitle` AS `movieTitle`, `studioghib`.`maincharacters` AS `maincharacters`, `studioghib`.`descriptions` AS `descriptions` FROM `studioghib` ;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;


ALTER TABLE studioghib
ADD COLUMN imgLink VARCHAR(200) AFTER descriptions;

ALTER TABLE studioghib
ADD COLUMN wikiLink VARCHAR(200) AFTER descriptions;

UPDATE `studioghib` SET `wikiLink`='https://en.wikipedia.org/wiki/Spirited_Away',`imgLink`='https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTqTEoJUOlTg4HakvM3SHU0a7a3gFpAQ1HrBL21fBAr1OYOeocP' WHERE `movieTitle`='Spirited Away';
UPDATE `studioghib` SET `wikiLink`='https://en.wikipedia.org/wiki/Howl%27s_Moving_Castle_(film)',`imgLink`='https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQDBfEqTdzcHrY1ry2MNFKQ81_br7TLbmNltyQBiX8u7z6X_VzW' WHERE `movieTitle`='Howls Moving Castle';
UPDATE `studioghib` SET `wikiLink`='https://en.wikipedia.org/wiki/Princess_Mononoke',`imgLink`='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQntZTJb1c6O4iFaT_Ll3w4a-R3TzlpID2dJ0wDdwjemnMbOx7r' WHERE `movieTitle`='Princess Mononoke';
UPDATE `studioghib` SET `wikiLink`='https://en.wikipedia.org/wiki/Castle_in_the_Sky',`imgLink`='https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ3gy0BOh3rY2r6jy1iTZiHImXBKQHpckBP140_OrDaPyjZrxyK' WHERE `movieTitle`='Castle in the Sky';
UPDATE `studioghib` SET `wikiLink`='https://en.wikipedia.org/wiki/Kiki%27s_Delivery_Service',`imgLink`='https://upload.wikimedia.org/wikipedia/en/0/07/Kiki%27s_Delivery_Service_%28Movie%29.jpg' WHERE `movieTitle`LIKE'Kiki%';
UPDATE `studioghib` SET `wikiLink`='https://en.wikipedia.org/wiki/Ponyo',`imgLink`='https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRnq1XgiWqipOvWHyQ4jW4LOabNAZbDmC1iOIpMUpBLgd7qabdS' WHERE `movieTitle`='Ponyo';
UPDATE `studioghib` SET `wikiLink`='https://en.wikipedia.org/wiki/The_Wind_Rises',`imgLink`='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkETC5JWhNPs7i_XIbtgaNCafGeOHP2Pno4ZhZedvjpCF-rs8U"' WHERE `movieTitle`='The Wind Rises';
UPDATE `studioghib` SET `wikiLink`='https://en.wikipedia.org/wiki/Arrietty',`imgLink`='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_csxC3qkPH-KE_UvLEyy3tR8-m759jcwmIq9-Dy1KxNuWdbo_' WHERE `movieTitle`='The Secret World of Arriety';
UPDATE `studioghib` SET `wikiLink`='https://en.wikipedia.org/wiki/My_Neighbor_Totoro',`imgLink`='https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcShhQmWrd7gqouln_mhRDdoLy8MkIOwZj1cNx7xhUU2I4cB0IEJ' WHERE `movieTitle`='My Neighbor Totoro';


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
