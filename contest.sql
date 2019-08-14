-- phpMyAdmin SQL Dump

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Δομή πίνακα για τον πίνακα `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `SettingsId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  `Value` text NOT NULL,
  PRIMARY KEY (`SettingsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Άδειασμα δεδομένων του πίνακα `settings`
--

INSERT INTO `settings` (`SettingsId`, `Name`, `Value`) VALUES
(1, 'Salt', '1A88A53891E05E76666301A5421A1620'),
(2, 'Open Date', '2015-03-27 14:13:22'),
(3, 'Close Date', '2015-11-28 14:13:22');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Cell` varchar(25) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Postcode` varchar(25) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `DateOfBirth` datetime NOT NULL,  
  `WebsiteLanguage` tinyint(1) NOT NULL, 
  
  `Photograph` mediumblob,
  `PhotographName` varchar(200) DEFAULT NULL,
  `PhotographType` varchar(20) DEFAULT NULL,
  `Affirmation` mediumblob,
  `AffirmationName` varchar(200) DEFAULT NULL,
  `AffirmationType` varchar(20) DEFAULT NULL, 
  `CV` mediumblob,
  `CVName` varchar(200) DEFAULT NULL,
  `CVType` varchar(20) DEFAULT NULL,
  `Graduated` int(4) NOT NULL,
  `CreationDate` datetime NOT NULL,
  `LastLoginDate` datetime NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  `IsJudge` tinyint(1) NOT NULL,
  `JudgeId1` int(11) NOT NULL,
  `JudgeId2` int(11) NOT NULL,
  `JudgeId3` int(11) NOT NULL,
  `JudgeId4` int(11) NOT NULL,
  `JudgeId5` int(11) NOT NULL,
  `JudgeId6` int(11) NOT NULL,
  `JudgeId7` int(11) NOT NULL,
  `JudgeId8` int(11) NOT NULL,
  `JudgeId9` int(11) NOT NULL,
  `Rate1` float(11,2) NOT NULL,
  `Rate2` float(11,2) NOT NULL,
  `Rate3` float(11,2) NOT NULL,
  `Rate4` float(11,2) NOT NULL,
  `Rate5` float(11,2) NOT NULL,
  `Rate6` float(11,2) NOT NULL,
  `Rate7` float(11,2) NOT NULL,
  `Rate8` float(11,2) NOT NULL,
  `Rate9` float(11,2) NOT NULL,
  `Phase1` tinyint(1) NOT NULL,
  `Phase2` tinyint(1) NOT NULL,
  `Phase3` tinyint(1) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=186 ;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`UserId`, `Name`, `Email`, `Cell`, `Address`, `City`, `Postcode`, `Country`, `Password`, `DateOfBirth`, `WebsiteLanguage`, 
`Photograph`, `PhotographName`, `PhotographType`, `Affirmation`, `AffirmationName`, `AffirmationType`, `CV`, `CVName`, `CVType`, `Graduated`, 
`CreationDate`, `LastLoginDate`, `IsAdmin`, `IsJudge`, `JudgeId1`, `JudgeId2`, `JudgeId3`, `JudgeId4`, `JudgeId5`, `JudgeId6`, `JudgeId7`, 
`JudgeId8`, `JudgeId9`, `Rate1`, `Rate2`, `Rate3`, `Rate4`, `Rate5`, `Rate6`, `Rate7`, `Rate8`, `Rate9`, `Phase1`, `Phase2`, `Phase3`) VALUES

(11, '---', '----', '242-2323', '', '', '', '', '-----', '2017-11-28 00:00:00', 0, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 0, '2017-11-28 00:00:00', '2018-08-28 09:09:31', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0),
(12, '---', '----', '242-2323', '', '', '', '', '----', '2017-11-28 00:00:00', 0, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 0, '2017-11-28 00:00:00', '2018-08-28 09:09:31', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0),
(16, '---', '------', '242-2323', '', '', '', '', '---', '2017-11-28 00:00:00', 0, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 0, '2017-12-11 04:51:21', '2018-08-28 09:09:31', 0, 0, 11, 0, 0, 0, 11, 0, 0, 0, 2, 10.00, 0.00, 0.00, 0.00, 20.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 1);


-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `submissions`
--

CREATE TABLE IF NOT EXISTS `submissions` (
  `SubmissionId` int(11) NOT NULL AUTO_INCREMENT,
  `Data` text NOT NULL,
  `Document` mediumblob,
  `DocumentName` varchar(200) DEFAULT NULL,
  `DocumentType` varchar(20) DEFAULT NULL,
  
  `Area1Data` text NOT NULL,
  `Area1WordCount` int(11) NOT NULL,   
  `Area1GoogleMapDocument` mediumblob,
  `Area1GoogleMapDocumentName` varchar(200) DEFAULT NULL,
  `Area1GoogleMapDocumentType` varchar(20) DEFAULT NULL, 
  
  `Area1GoogleMapname` VARCHAR( 60 ) NOT NULL ,
  `Area1GoogleMapaddress` VARCHAR( 80 ) NOT NULL ,
  `Area1GoogleMaplat` FLOAT( 10, 6 ) NOT NULL ,
  `Area1GoogleMaplng` FLOAT( 10, 6 ) NOT NULL ,
  `Area1GoogleMaptype` VARCHAR( 30 ) NOT NULL ,
  
  `Area1Photograph1` mediumblob,
  `Area1PhotographName1` varchar(200) DEFAULT NULL,
  `Area1PhotographType1` varchar(20) DEFAULT NULL,    
  `Area1Photograph2` mediumblob,
  `Area1PhotographName2` varchar(200) DEFAULT NULL,
  `Area1PhotographType2` varchar(20) DEFAULT NULL, 
  `Area1Photograph3` mediumblob,
  `Area1PhotographName3` varchar(200) DEFAULT NULL,
  `Area1PhotographType3` varchar(20) DEFAULT NULL, 
  `Area1Photograph4` mediumblob,
  `Area1PhotographName4` varchar(200) DEFAULT NULL,
  `Area1PhotographType4` varchar(20) DEFAULT NULL, 
  `Area1Photograph5` mediumblob,
  `Area1PhotographName5` varchar(200) DEFAULT NULL,
  `Area1PhotographType5` varchar(20) DEFAULT NULL, 
  `Area1Photograph6` mediumblob,
  `Area1PhotographName6` varchar(200) DEFAULT NULL,
  `Area1PhotographType6` varchar(20) DEFAULT NULL,   
  
  `Area2Data` text NOT NULL,
  `Area2WordCount` int(11) NOT NULL,   
  `Area2GoogleMapDocument` mediumblob,
  `Area2GoogleMapDocumentName` varchar(200) DEFAULT NULL,
  `Area2GoogleMapDocumentType` varchar(20) DEFAULT NULL, 
  
  `Area2GoogleMapname` VARCHAR( 60 ) NOT NULL ,
  `Area2GoogleMapaddress` VARCHAR( 80 ) NOT NULL ,
  `Area2GoogleMaplat` FLOAT( 10, 6 ) NOT NULL ,
  `Area2GoogleMaplng` FLOAT( 10, 6 ) NOT NULL ,
  `Area2GoogleMaptype` VARCHAR( 30 ) NOT NULL ,
  
  `Area2Photograph1` mediumblob,
  `Area2PhotographName1` varchar(200) DEFAULT NULL,
  `Area2PhotographType1` varchar(20) DEFAULT NULL,    
  `Area2Photograph2` mediumblob,
  `Area2PhotographName2` varchar(200) DEFAULT NULL,
  `Area2PhotographType2` varchar(20) DEFAULT NULL, 
  `Area2Photograph3` mediumblob,
  `Area2PhotographName3` varchar(200) DEFAULT NULL,
  `Area2PhotographType3` varchar(20) DEFAULT NULL, 
  `Area2Photograph4` mediumblob,
  `Area2PhotographName4` varchar(200) DEFAULT NULL,
  `Area2PhotographType4` varchar(20) DEFAULT NULL, 
  `Area2Photograph5` mediumblob,
  `Area2PhotographName5` varchar(200) DEFAULT NULL,
  `Area2PhotographType5` varchar(20) DEFAULT NULL, 
  `Area2Photograph6` mediumblob,
  `Area2PhotographName6` varchar(200) DEFAULT NULL,
  `Area2PhotographType6` varchar(20) DEFAULT NULL,    
  
  `Area3Data` text NOT NULL,
  `Area3WordCount` int(11) NOT NULL, 
  `Area3GoogleMapDocument` mediumblob,
  `Area3GoogleMapDocumentName` varchar(200) DEFAULT NULL,
  `Area3GoogleMapDocumentType` varchar(20) DEFAULT NULL, 
 
  `Area3GoogleMapname` VARCHAR( 60 ) NOT NULL ,
  `Area3GoogleMapaddress` VARCHAR( 80 ) NOT NULL ,
  `Area3GoogleMaplat` FLOAT( 10, 6 ) NOT NULL ,
  `Area3GoogleMaplng` FLOAT( 10, 6 ) NOT NULL ,
  `Area3GoogleMaptype` VARCHAR( 30 ) NOT NULL ,
  
  `Area3Photograph1` mediumblob,
  `Area3PhotographName1` varchar(200) DEFAULT NULL,
  `Area3PhotographType1` varchar(20) DEFAULT NULL,    
  `Area3Photograph2` mediumblob,
  `Area3PhotographName2` varchar(200) DEFAULT NULL,
  `Area3PhotographType2` varchar(20) DEFAULT NULL, 
  `Area3Photograph3` mediumblob,
  `Area3PhotographName3` varchar(200) DEFAULT NULL,
  `Area3PhotographType3` varchar(20) DEFAULT NULL, 
  `Area3Photograph4` mediumblob,
  `Area3PhotographName4` varchar(200) DEFAULT NULL,
  `Area3PhotographType4` varchar(20) DEFAULT NULL, 
  `Area3Photograph5` mediumblob,
  `Area3PhotographName5` varchar(200) DEFAULT NULL,
  `Area3PhotographType5` varchar(20) DEFAULT NULL, 
  `Area3Photograph6` mediumblob,
  `Area3PhotographName6` varchar(200) DEFAULT NULL,
  `Area3PhotographType6` varchar(20) DEFAULT NULL,  
  
  `UploadedDate` datetime NOT NULL,
  `LastUpdatedDate` datetime NOT NULL,
  `UploadedUserId` int(11) NOT NULL,
  `LastUpdatedUserId` int(11) NOT NULL,
  `Winner` tinyint(1) NOT NULL,
  `WordCount` int(11) NOT NULL,
  PRIMARY KEY (`SubmissionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Άδειασμα δεδομένων του πίνακα `submissions`
--

INSERT INTO `submissions` (`SubmissionId`, `Data`, `Document`, `DocumentName`, `DocumentType`,   

`Area1Data`, `Area1WordCount`, `Area1GoogleMapDocument`, `Area1GoogleMapDocumentName`, `Area1GoogleMapDocumentType`, 
`Area1GoogleMapname`, `Area1GoogleMapaddress`, `Area1GoogleMaplat`, `Area1GoogleMaplng`, `Area1GoogleMaptype`, 
`Area1Photograph1`, `Area1PhotographName1`, `Area1PhotographType1`, `Area1Photograph2`, `Area1PhotographName2`, `Area1PhotographType2`, `Area1Photograph3`, `Area1PhotographName3`,
`Area1PhotographType3`, `Area1Photograph4`, `Area1PhotographName4`, `Area1PhotographType4`, `Area1Photograph5`, `Area1PhotographName5`, `Area1PhotographType5`, 
`Area1Photograph6`, `Area1PhotographName6`, `Area1PhotographType6`, 

`Area2Data`, `Area2WordCount`, `Area2GoogleMapDocument`, `Area2GoogleMapDocumentName`,
`Area2GoogleMapDocumentType`, `Area2GoogleMapname`, `Area2GoogleMapaddress`, `Area2GoogleMaplat`, `Area2GoogleMaplng`, `Area2GoogleMaptype`, `Area2Photograph1` ,
`Area2PhotographName1`, `Area2PhotographType1`, `Area2Photograph2`, `Area2PhotographName2`, `Area2PhotographType2`, `Area2Photograph3`, `Area2PhotographName3`,
`Area2PhotographType3`, `Area2Photograph4`, `Area2PhotographName4`, `Area2PhotographType4`, `Area2Photograph5`, `Area2PhotographName5`, `Area2PhotographType5`, 
`Area2Photograph6`, `Area2PhotographName6`, `Area2PhotographType6`, 

`Area3Data`, `Area3WordCount`, `Area3GoogleMapDocument`, `Area3GoogleMapDocumentName`, `Area3GoogleMapDocumentType`, 
`Area3GoogleMapname`, `Area3GoogleMapaddress`, `Area3GoogleMaplat`, `Area3GoogleMaplng`, `Area3GoogleMaptype`, `Area3Photograph1`, `Area3PhotographName1`,
`Area3PhotographType1`, `Area3Photograph2`, `Area3PhotographName2`, `Area3PhotographType2`, `Area3Photograph3`, `Area3PhotographName3`, `Area3PhotographType3`, 
`Area3Photograph4`, `Area3PhotographName4`, `Area3PhotographType4`, `Area3Photograph5`, `Area3PhotographName5`, `Area3PhotographType5`, `Area3Photograph6`,
`Area3PhotographName6`, `Area3PhotographType6`,  

`UploadedDate`, `LastUpdatedDate`, `UploadedUserId`, `LastUpdatedUserId`, `Winner`, `WordCount`) VALUES

(3, 'skata', '', NULL, NULL, 

'Area1Data', 0, '', NULL, NULL, 
'', '', 0.00,0.00, '',
'', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL,

'Area2Data', 0, '', NULL, NULL, 
'', '', 0.00,0.00, '',
'', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL,

'Area3Data', 0, '', NULL, NULL, 
'', '', 0.00,0.00, '',
'', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL,


'2012-12-17 17:30:18', '2012-12-17 17:30:18', 16, 11, 0, 30);

----------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
