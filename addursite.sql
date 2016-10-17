-- phpMyAdmin SQL Dump
-- version 2.10.0.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 17, 2007 at 09:48 AM
-- Server version: 4.1.22
-- PHP Version: 4.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `lexor_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `addursite`
-- 

CREATE TABLE `addursite` (
  `id` bigint(20) NOT NULL auto_increment,
  `sitetitle` varchar(250) NOT NULL default '',
  `url` varchar(250) NOT NULL default '',
  `eadd` varchar(250) NOT NULL default '',
  `description` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `addursite`
-- 

INSERT INTO `addursite` VALUES (1, 'Anger Management', 'http://www.anger-management.be/', 'gerex_2@yahoo.com', 'Anger management related informations and articles, sites and news,etc.');
INSERT INTO `addursite` VALUES (2, 'Free PS2 Cheat Code', 'http://www.ps2cheatsdb.com/', 'gerex_2@yahoo.com', 'Play Station 2 cheats code');
INSERT INTO `addursite` VALUES (3, 'PC Games Cheats', 'http://www.pcgamescheathub.com/', 'gerex_2@yahoo.com', 'PC Games Cheats\r\n');
INSERT INTO `addursite` VALUES (4, 'Seo-Article', 'http://www.seo-article.info/', 'gerex_2@yahoo.com', 'SEO related informations and articles, sites and more.');
INSERT INTO `addursite` VALUES (5, 'Web Design Info', 'http://www.design-web-articles.info/', 'gerex_2@yahoo.com', 'Web design related informations and articles, sites and more.');
INSERT INTO `addursite` VALUES (6, 'Advetising Articles', 'http://www.advertising-articles.info/', 'gerex_2@yahoo.com', 'Advertising design related informations and articles, sites and more.');
INSERT INTO `addursite` VALUES (7, 'Aerobics Cardio', 'http://aerobics-cardioinfo.info/', 'gerex_2@yahoo.com', 'Aerobics cardio design related informations and articles, sites and more.\r\n');
INSERT INTO `addursite` VALUES (8, 'Babies-Toddler', 'http://www.babies-toddler.be/', 'gerex_2@yahoo.com', 'Toddler design related informations and articles, sites and more.');
INSERT INTO `addursite` VALUES (9, 'Affiliate Revenue', 'http://www.affiliate-revenue.be/', 'gerex_2@yahoo.com', 'Affiliate revenue design related informations and articles, sites and more.');
INSERT INTO `addursite` VALUES (10, 'Landscaping And Gardening', 'http://landscaping-gardening.be', 'gerex_2@yahoo.com', 'Landscaping and Gardening design related informations and articles, sites and news.');
INSERT INTO `addursite` VALUES (11, 'Humor', 'http://www.humor.ws/', 'xjuliox@gmail.com', 'A collection of games/jokes for everyone to enjoy.');
