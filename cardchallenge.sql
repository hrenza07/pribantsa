SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE DATABASE IF NOT EXISTS `cardchallenge` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cardchallenge`;
CREATE TABLE IF NOT EXISTS `activegame` (
`PlayerID` mediumint(9)
,`GameID` mediumint(9)
);
CREATE TABLE IF NOT EXISTS `game` (
  `GameID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `GameStep` int(11) NOT NULL,
  `GamePlayerCard` char(1) DEFAULT NULL,
  `GamePlayerBet` int(11) DEFAULT NULL,
  `GameComputerCard` char(1) DEFAULT NULL,
  `PlayerID` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`GameID`,`GameStep`),
  KEY `fk_Game_Player_idx` (`PlayerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `game` (`GameID`, `GameStep`, `GamePlayerCard`, `GamePlayerBet`, `GameComputerCard`, `PlayerID`) VALUES
(1, 1, '1', 10, '2', 1),
(2, 2, '3', 5, '1', 1);

CREATE TABLE IF NOT EXISTS `player` (
  `PlayerID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `PlayerName` varchar(45) DEFAULT NULL,
  `PlayerPassword` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PlayerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

INSERT INTO `player` (`PlayerID`, `PlayerName`, `PlayerPassword`) VALUES
(1, 'Lucky Luke', 'Password1'),
(2, 'Super Susan', 'Password2'),
(3, 'Edgy Ed', 'Password3'),
(4, 'Chilled Clive', 'Password4');
DROP TABLE IF EXISTS `activegame`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `activegame` AS select `player`.`PlayerID` AS `PlayerID`,`game`.`GameID` AS `GameID` from (`game` join `player`) where (`game`.`PlayerID` = `player`.`PlayerID`);


ALTER TABLE `game`
  ADD CONSTRAINT `fk_Game_Player` FOREIGN KEY (`PlayerID`) REFERENCES `player` (`PlayerID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

