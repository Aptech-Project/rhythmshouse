DROP DATABASE IF EXISTS `rhythmhouse`;
CREATE SCHEMA `rhythmhouse` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `rhythmhouse`;

CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` int NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'customer',
  `address` varchar(255) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `promotion` int DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `demo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `address` varchar(70) NOT NULL,
  `date` datetime NOT NULL,
  `deliverydate` datetime DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `note` varchar(200) DEFAULT NULL,
  `paymentmethod` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'processing',
  `totalmoney` float NOT NULL,
  `userid` int NOT NULL,
  `voucher` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT FOREIGN KEY (`userid`) REFERENCES `user` (`id`)
);
CREATE TABLE `event` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `address` varchar(70) NOT NULL,
  `registerdate` datetime NOT NULL,
  `fromdate` datetime NOT NULL,
  `todate` datetime NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Processing',
  `views` int DEFAULT '0',
  `ticketprice` float NOT NULL,
  `totaldept` float DEFAULT '0' ,
  `haspaid` float DEFAULT '0' ,
  `userid` int DEFAULT '0',
  `url1` varchar(255) DEFAULT NULL,
  `url2` varchar(255) DEFAULT NULL,
  `url3` varchar(255) DEFAULT NULL,
  `deptremaining` float DEFAULT '0',
  PRIMARY KEY (`id`),
  CONSTRAINT FOREIGN KEY (`userid`) REFERENCES `user` (`id`)
);
CREATE TABLE `orderdetail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `promotion` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `orderid` int NOT NULL,
  `productid` int NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  CONSTRAINT FOREIGN KEY (`orderid`) REFERENCES `order` (`id`)
);

CREATE TABLE `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int UNIQUE,
  PRIMARY KEY (`id`),
  CONSTRAINT FOREIGN KEY (`userid`) REFERENCES `user` (`id`)
);

CREATE TABLE `cartdetail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quanity` int NOT NULL,
  `cartid` int NOT NULL,
  `productid` int NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT FOREIGN KEY (`cartid`) REFERENCES `cart` (`id`),
  CONSTRAINT FOREIGN KEY (`productid`) REFERENCES `product` (`id`)
);

CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(255) NOT NULL UNIQUE,
  PRIMARY KEY (`id`)
);

CREATE TABLE `productcategory` (
  `productid` int NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  CONSTRAINT FOREIGN KEY (`productid`) REFERENCES `product` (`id`),
  CONSTRAINT FOREIGN KEY (`categoryname`) REFERENCES `category` (`categoryname`)
);

CREATE TABLE `favorite` (
  `userid` int NOT NULL,
  `productid` int NOT NULL,
  CONSTRAINT FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  CONSTRAINT FOREIGN KEY (`productid`) REFERENCES `product` (`id`)
);

CREATE TABLE `voucherdata` (
  `userid` int NOT NULL,
  `value` int NOT NULL,
  `note` varchar(255) NOT NULL,
  CONSTRAINT FOREIGN KEY (`userid`) REFERENCES `user` (`id`)
);

CREATE TABLE `feedbackdata` (
  `userid` int NOT NULL,
  `productid` int NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `vote` int NOT NULL,
  CONSTRAINT FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  CONSTRAINT FOREIGN KEY (`productid`) REFERENCES `product` (`id`)
);

CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT, 
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);




-- USER
INSERT INTO `user` (`id`, `active`, `email`, `password`, `username`, `role`, `address`, `birthday`, `name`, `phonenumber`, `img1`, `img2`) VALUES
(1, 1, 'haiadmin@gmail.com', '$2y$10$vQVREYxw/Wo2ztGe1HjysulQWnbp7wxekpfmAcnI.uDv5fOOl2EFa', 'haiadmin', 'admin', 'cu chi', '1995-04-24 00:00:00', 'Dương Ngọc Hải', '0375911341', NULL, NULL),
(2, 2, 'haiuser@gmail.com', '$2y$10$vQVREYxw/Wo2ztGe1HjysulQWnbp7wxekpfmAcnI.uDv5fOOl2EFa', 'haiuser', 'customer', 'cu chi', '1995-04-24 00:00:00', 'Dương Ngọc Hải', '0375911341', NULL, NULL),
(3, 3, 'haipartner@gmail.com', '$2y$10$vQVREYxw/Wo2ztGe1HjysulQWnbp7wxekpfmAcnI.uDv5fOOl2EFa', 'haipartner', 'partner', 'cu chi', '1995-04-24 00:00:00', 'Dương Ngọc Hải', '0375911341', NULL, NULL);

-- PRODUCT & CATEGORY
-- Product
INSERT INTO `product` (`id`, `name`, `artist`, `author`, `price`, `promotion`, `description`, `image`, `demo`) VALUES
(1, 'My Love', 'West Life', 'Jörgen Elofsson, Per Magnusson', 12, NULL, '"My Love" is a song by Irish boy band Westlife. It was released on 31 October 2000 as the second single from their second studio album, Coast to Coast.', 'mylove.jpg', 'mylove.mp3'),
(2, 'One Call Away', 'Charlie Puth', 'Charlie Puth', 14, NULL, '"One Call Away" is a song by American singer Charlie Puth for his debut album Nine Track Mind. It was released on August 20, 2015, by Atlantic Records as the second single from the album', 'onecallaway.jpg', 'onecallaway.mp3'),
(3, 'Wonderful Tonight', 'Eric Clapton', 'Eric Clapton', 15, NULL, '"Wonderful Tonight" is a ballad written by Eric Clapton. It was included on Clapton\'s 1977 album Slowhand. Clapton wrote the song about Pattie Boyd.', 'wonderfultonight.jpeg', 'wonderfultonight.mp3'),
(4, 'River Flow in You', 'Sungha Jung', 'Yiruma', 13, NULL, 'One of the most most famous songs of Yiruma, “Kiss the Rain,” “May Be,” and “River Flows in You,” that are part of the “First Love” album', 'riverflowinyou.jpg', 'riverflowinyou.mp3'),
(5, 'Yesterday Once More', 'The Carpenter', '‎Richard Carpenter, John Bettis', 21, NULL, '"Yesterday Once More", written by Richard Carpenter and John Bettis, is a hit song by the Carpenters from their 1973 album Now & Then', 'yesterdayoncemore.jpg', 'yesterdayoncemore.mp3'),
(6, 'Levels', 'Avicii', 'Avicii', 14, NULL, '"Levels" (stylised as "LE7ELS") is a song by Swedish DJ Avicii. An early instrumental version of the song was first played by Avicii during an appearance on BBC Radio 1\'s Essential Mix in December 2010', 'levels.jpg', 'levels.mp3'),
(7, 'When You Say Nothing at All', 'Ronan Keating', 'Paul Overstreet, Don Schlitz', 12, NULL, ' "When You Say Nothing at All" is a country song written by Paul Overstreet and Don Schlitz. It was a hit song of Irish pop singer Ronan Keating, whose version was his first solo single and a chart-topper in the United Kingdom, Ireland and New Zealand in 1999.', 'wysntaa.jpg', 'wysntaa.mp3'),
(8, 'Rap God', 'Eminem', 'Marshall Mathers, Bigram Zayas', 17, NULL, '"Rap God" is a song by American rapper Eminem. The song premiered via YouTube on October 14, 2013, and was released in the United States on October 15, 2013', 'rapgod.jpg', 'rapgod.mp3'),
(9, 'Right Here Waiting', 'Richard Marx', 'Richard Marx', 10, NULL, '"Right Here Waiting" is a song by American singer and songwriter Richard Marx. It was released on June 29, 1989, as the second single from his second album, Repeat Offender. ', 'rhwt.jpg', 'rhwt.mp3'),
(10, 'Everything I Do', 'Bryan Adams', 'Bryan Adams, Michael Kamen, Robert "Mutt" Lange', 12, NULL, '"(Everything I Do) I Do It for You" is a song by Canadian singer-songwriter Bryan Adams. Written by Adams, Michael Kamen, and Robert John "Mutt" Lange.', 'evrtid.jpg', 'evrtid.mp3'),
(11, 'My Heart Will Go On', 'Celine Dion', 'James Horner, Will Jennings', 9, NULL, '"My Heart Will Go On" is a song recorded by Canadian singer Celine Dion. It serves as the main theme song to James Cameron\'s blockbuster film Titanic', 'mhwgo.jpg', 'mhwgo.mp3'),
(12, 'Blank', 'Disfigure', 'Disfigure', 11, NULL, '"Blank" is a EDM song introduced by Disfigure in 2013 ', 'blank.jpg', 'blank.mp3'),
(13, 'Hotel California', 'Eagles', 'Don Felder, Don Henley, Glenn Frey', 14, NULL, '"Hotel California" is the title track from the Eagles\' album of the same name and was released as a single in February 1977.', 'hotelcalifornia.jpg', 'hotelcalifornia.mp3'),
(14, 'Despacito', 'Luis Fonsi, Daddy Yankee', 'Luis Rodríguez, Erika Ender, Ramón Ayala', 19, NULL, '"Despacito" (American Spanish: [despa\'sito], transl. "Slowly") is a song by Puerto Rican singer Luis Fonsi featuring Puerto Rican rapper Daddy Yankee from Fonsi\'s 2019 studio album Vida.', 'despacito.jpeg', 'despacito.mp3'),
(15, 'I Don\'t Want To Say Goodbye', 'Teddy Thompson', 'Walden Narada Michael', 20, NULL, 'Brokeback Mountain: Original Motion Picture Soundtrack', 'idwtsby.jpg', 'idwtsby.mp3'),
(16, 'Mans Not Hot', 'Big Shaq', 'Michael Dapaah', 16, NULL, '"Man\'s Not Hot" is a novelty song by British comedian Michael Dapaah, released under the name Big Shaq. It samples an instrumental by GottiOnEm and Mazza.', 'mansnothot.jpg', 'mansnothot.mp3'),
(17, 'Kiss the Rain', 'Yiruma', 'Yiruma', 26, NULL, 'One of the most most famous songs of Yiruma, “Kiss the Rain,” “May Be,” and “River Flows in You,” that are part of the “First Love” album', 'kisstherain.jpg', 'kisstherain.mp3'),
(18, 'Canon In D', 'Per-Olov Kindgren', 'Johann Pachelbel', 20, NULL, 'Pachelbel\'s Canon is an accompanied canon by the German Baroque composer Johann Pachelbel in his Canon and Gigue for 3 violins and basso continuo', 'canonind.jpg', 'canonind.mp3'),
(19, 'Sun Flower', 'Paddy Sun', 'Paddy Sun', 18, NULL, 'One of the best guitar solo of Paddy Sun, released on Youtube in 2009', 'sunflower.jpg', 'sunflower.mp3'),
(20, 'The Day You Went Away', 'M2M', 'Matt Rowe, Dane DeViller', 15, NULL, 'The Day You Went Away: The Best of M2M is a greatest hits compilation album by Norwegian teen-pop duo M2M. It was released in 2003.', 'tdywa.jpg', 'tdywa.mp3'),
(21, 'Beautiful in White', 'Shane Filan', 'Savan Kotecha, Arnthor Birgisson', 23, NULL, '"Beautiful in White" is a song recorded by Irish singer-songwriter Shane Filan from his third studio album, Love Always (2017).', 'biw.jpg', 'biw.mp3'),
(22, 'I Want It That Way', 'Backstreet Boys', 'Andreas Carlsson, Max Martin', 15, NULL, '"I Want It That Way" is a song by American boy band the Backstreet Boys. It was released on April 12, 1999, as the lead single from their third studio album, Millennium.', 'iwitw.jpg', 'iwitw.mp3'),
(23, 'Let It Be', 'The Beatles', 'Lennon–McCartney', 19, NULL, '"Let It Be" is a song by the English pop band the Beatles, released on 6 March 1970 as a single, and (in an alternative mix) as the title track of their album Let It Be.', 'letitbe.jpg', 'letitbe.mp3'),
(24, 'Love Yourself', 'Justin Bieber', 'Ed Sheeran, Benny Blanco, Justin Bieber', 10, NULL, '"Love Yourself" is a song recorded by Canadian singer Justin Bieber for his fourth studio album Purpose (2015). The song was released as a promotional single on November 10, 2015, and as the album\'s third official single on December 7, 2015.', 'loveyourself.jpg', 'loveyourself.mp3'),
(25, 'Señorita', 'Shawn Mendes, Camila Cabello', 'Shawn Mendes, Camila Cabello', 15, NULL, '"Señorita" is a song by Canadian singer Shawn Mendes and Cuban-American singer Camila Cabello. It was released as the second single (seventh overall) from the deluxe edition of Mendes\' self-titled third studio album through Island Records on June 21, 2019.', 'senorita.jpg', 'senorita.mp3'),
(26, 'Blue Night', 'Michael Learns to Rock', 'Boe Larsen, Mikkel Lentz', 17, NULL, 'Blue Night is the fifth studio album by Danish soft rock band Michael Learns to Rock (MLTR). It was released on 1 November 2000 by Medley Records (EMI).', 'bluenight.jpg', 'bluenight.mp3'),
(27, 'Waiting for Love', 'Avicii', 'Salem Al Fakir, Simon Aldred', 16, NULL, '"Waiting for Love" is a song by late Swedish DJ and music producer Avicii, produced by Avicii and Dutch producer Martin Garrix and featuring uncredited vocals from Simon Aldred, the former lead singer of English band Cherry Ghost.', 'wfl.jpg', 'wfl.mp3'),
(28, 'Hey, Soul Sister', 'Train', 'Patrick Monahan, Espen Lind, Amund Bjørklund', 22, NULL, '"Hey, Soul Sister" is a song by American rock band Train. It was written by lead singer Patrick Monahan, Amund Bjørklund, and Espen Lind. It was released as the lead single from the band\'s fifth studio album, Save Me, San Francisco (2009).', 'hss.jpg', 'hss.mp3'),
(29, 'No Promises', 'Shayne Ward', 'Jonas Schrøder, Lucas Sieber', 15, NULL, '"No Promises" was covered by the second United Kingdom X Factor winner Shayne Ward. The cover was released on 10 April 2006 and reached number two on the UK Singles Chart. It became Ward\'s second number-one single in the Republic of Ireland and was the 10th best-selling single of 2006 there.', 'nopromises.jpg', 'nopromises.mp3'),
(30, 'Every Day I Love You', 'Boyzone', 'Gary Baker, Frank Joseph Myers', 17, NULL, '', 'edily.jpg', 'edily.mp3');
-- Category
INSERT INTO `category` (`id`, `categoryname`) VALUES
(1, 'Piano'),
(2, 'Rock'),
(3, 'Ballad'),
(4, 'Guitar'),
(5, 'Rap'),
(6, 'EDM'),
(7, 'Soft Rock'),
(8, 'Pop'),
(9, 'R&B'),
(10, 'Country');
-- Productcategory
INSERT INTO `productcategory` (`productid`, `categoryname`) VALUES
(1, 'Pop'),
(2, 'Pop'),
(3, 'Ballad'),
(4, 'Guitar'),
(5, 'Pop'),
(6, 'EDM'),
(7, 'Country'),
(8, 'Rap'),
(9, 'Soft Rock'),
(10, 'Soft Rock'),
(11, 'Pop'),
(12, 'EDM'),
(13, 'Soft Rock'),
(14, 'Pop'),
(15, 'Country'),
(16, 'Rap'),
(17, 'Piano'),
(18, 'Guitar'),
(19, 'Guitar'),
(20, 'Pop'),
(21, 'Pop'),
(22, 'Pop'),
(23, 'Rock'),
(24, 'Pop'),
(25, 'Pop'),
(26, 'Pop'),
(27, 'EDM'),
(28, 'Pop'),
(29, 'R&B'),
(30, 'Pop');

--  EVENT 
INSERT INTO `event` (`id`, `name`, `address`, `registerdate`, `fromdate`, `todate`, `description`, `type`, `artist`, `status`, `views`, `ticketprice`, `totaldept`, `haspaid`, `userid`, `url1`, `url2`, `url3`) VALUES
(1, 'Work From Home 1', '23Str, SanJose, CA, USA', '2020-08-01 09:40:57', '2020-08-07 00:00:00', '2020-08-08 00:00:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Canceled', 0, 500, 0, 0, 1, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'service-left.jpg', NULL),
(2, 'Work From Home 2', '23Str, SanJose, CA, USA', '2020-08-04 00:00:00', '2020-08-05 00:00:00', '2020-08-06 00:00:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Approved', 0, 500, 0, 0, 1, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'skill-video.jpg', NULL),
(3, 'Work From Home 3', '23Str, SanJose, CA, USA', '2020-08-04 00:00:00', '2020-08-07 00:00:00', '2020-08-08 00:00:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Approved', 0, 500, 0, 0, 1, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'Festival-del-Sole.jpg', NULL),
(4, 'Work From Home 4', '23Str, SanJose, CA, USA', '2020-08-08 00:00:00', '2020-08-15 00:00:00', '2020-08-22 00:00:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Approved', 0, 500, 0, 0, 1, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'countdown-bg.jpg', NULL),
(5, 'Work From Home 5', '23Str, SanJose, CA, USA', '2020-08-01 00:00:00', '2020-08-17 00:00:00', '2020-08-19 00:00:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Approved', 0, 500, 0, 0, 1, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'hero-bg.png', NULL),
(6, 'Work From Home 6', '23Str, SanJose, CA, USA', '2020-08-05 00:00:00', '2020-08-29 00:00:00', '2020-09-05 00:00:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Approved', 0, 500, 0, 0, 1, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'Background.jpg', NULL),
(7, 'Work From Home 7', '23Str, SanJose, CA, USA', '2020-08-05 12:39:00', '2020-08-01 12:40:00', '2020-08-08 12:40:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Processing', 0, 500, 0, 0, 1, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'br-2.jpg', NULL),
(8, 'Work From Home 8', '23Str, SanJose, CA, USA', '2020-08-05 13:07:00', '2020-08-08 13:07:00', '2020-08-14 13:07:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Processing', 0, 500, 0, 0, 1, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'blog-5.jpg', NULL),
(9, 'Work From Home 9', '23Str, SanJose, CA, USA', '2020-08-06 19:24:00', '2020-09-01 19:24:00', '2020-09-05 19:25:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Processing', 0, 500, 0, 0, 1, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'br-1.jpg', NULL),
(10, 'Work From Home 10', '23Str, SanJose, CA, USA', '2020-08-10 19:45:00', '2020-08-11 19:46:00', '2020-08-21 19:46:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Processing', 0, 500, 0, 0, 1, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'blog-6.jpg', NULL),
(11, 'Work From Home 11', '23Str, SanJose, CA, USA', '2020-08-06 20:20:00', '2020-08-05 20:20:00', '2020-08-07 20:20:00', 'blad blad blad', 'Rap', 'Fifth Harmony', 'Approved', 0, 500, 0, 0, 2, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'blog-1.jpg', NULL),
(12, 'Work From Home 12', '23Str, SanJose, CA, USA', '2020-08-06 09:37:00', '2020-08-21 09:37:00', '2020-08-22 09:37:00', 'blad blad blad', 'Pop', 'Fifth Harmony', 'Processing', 0, 500, 0, 0, 2, 'https://www.youtube.com/watch?v=5GL9JoH4Sws', 'blog-3.jpg', NULL);


