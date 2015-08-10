-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2015 at 11:32 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profiledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `achivements`
--

CREATE TABLE IF NOT EXISTS `achivements` (
  `achivementID` int(10) NOT NULL AUTO_INCREMENT,
  `achivementName` varchar(100) NOT NULL,
  `achivementDetail` text NOT NULL,
  `achivementYear` date NOT NULL,
  `byOrganisation` varchar(100) NOT NULL,
  `personalID` int(10) NOT NULL,
  PRIMARY KEY (`achivementID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `achivements`
--


-- --------------------------------------------------------

--
-- Table structure for table `contact_detail`
--

CREATE TABLE IF NOT EXISTS `contact_detail` (
  `phoneID` int(10) NOT NULL AUTO_INCREMENT,
  `phoneNumber` int(10) NOT NULL,
  `phoneType` varchar(50) NOT NULL,
  `availableFrom` date NOT NULL,
  `availableUpto` date NOT NULL,
  `remarksInfo` text NOT NULL,
  `personalID` int(10) NOT NULL,
  PRIMARY KEY (`phoneID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE IF NOT EXISTS `educations` (
  `eduID` int(10) NOT NULL AUTO_INCREMENT,
  `examName` text NOT NULL,
  `yearOfPassing` date NOT NULL,
  `universityorBoard` text NOT NULL,
  `MarkSecured` int(10) NOT NULL,
  `personalID` varchar(10) NOT NULL,
  PRIMARY KEY (`eduID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `educations`
--


-- --------------------------------------------------------

--
-- Table structure for table `personal_detail`
--

CREATE TABLE IF NOT EXISTS `personal_detail` (
  `personalID` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `maritalStatus` varchar(10) NOT NULL,
  `bloodGroup` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `presentDesignation` varchar(100) NOT NULL,
  `aboutMe` text NOT NULL,
  PRIMARY KEY (`personalID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `personal_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `professional_exprience`
--

CREATE TABLE IF NOT EXISTS `professional_exprience` (
  `exprienceID` int(10) NOT NULL AUTO_INCREMENT,
  `company Name` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `joiningDate` date NOT NULL,
  `releaseDate` date NOT NULL,
  `yourRole` text NOT NULL,
  `personalID` int(10) NOT NULL,
  PRIMARY KEY (`exprienceID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `professional_exprience`
--


-- --------------------------------------------------------

--
-- Table structure for table `showcase`
--

CREATE TABLE IF NOT EXISTS `showcase` (
  `showcaseID` int(10) NOT NULL AUTO_INCREMENT,
  `projectName` varchar(100) NOT NULL,
  `projectDetail` text NOT NULL,
  `projectStartDate` date NOT NULL,
  `projectEndDate` date NOT NULL,
  `involvementDetail` text NOT NULL,
  `projectImage` varchar(100) NOT NULL,
  `projectCompany` varchar(100) NOT NULL,
  `TechUsed` varchar(250) NOT NULL,
  `personalID` int(10) NOT NULL,
  PRIMARY KEY (`showcaseID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `showcase`
--


-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `skillID` int(10) NOT NULL AUTO_INCREMENT,
  `skillName` text NOT NULL,
  `yearOfExprience` int(10) NOT NULL,
  `selfRating` int(10) NOT NULL,
  `personalID` int(10) NOT NULL,
  PRIMARY KEY (`skillID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `skills`
--


-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE IF NOT EXISTS `social_media` (
  `socialID` int(10) NOT NULL AUTO_INCREMENT,
  `socialMediaName` varchar(100) NOT NULL,
  `SocialMediaLink` varchar(250) NOT NULL,
  `socialIcon` varchar(100) NOT NULL,
  `personalID` int(10) NOT NULL,
  PRIMARY KEY (`socialID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `social_media`
--


-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `testimonialID` int(10) NOT NULL AUTO_INCREMENT,
  `testimonialText` varchar(250) NOT NULL,
  `testimonyBy` varchar(250) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `testimonyByImage` varchar(100) NOT NULL,
  `personalID` int(10) NOT NULL,
  PRIMARY KEY (`testimonialID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `testimonials`
--

