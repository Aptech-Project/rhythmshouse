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
  PRIMARY KEY (`id`),
);