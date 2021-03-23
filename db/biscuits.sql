# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.00.0.1 (MySQL 5.7.33)
# Database: biscuits
# Generation Time: 2021-03-23 10:11:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table biscuits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `biscuits`;

CREATE TABLE `biscuits` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(19) NOT NULL,
  `img` varchar(181) NOT NULL,
  `RDT` int(11) NOT NULL,
  `description` varchar(355) NOT NULL,
  `wikipedia` varchar(68) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `biscuits` WRITE;
/*!40000 ALTER TABLE `biscuits` DISABLE KEYS */;

INSERT INTO `biscuits` (`name`, `img`, `RDT`, `description`, `wikipedia`, `ID`)
VALUES
	('Bourbon','/images/bourbons-unedited.jpg',7,'The Bourbon biscuit is a sandwich style biscuit consisting of two thin rectangular dark chocolate-flavoured biscuits with a chocolate buttercream filling.','https://en.wikipedia.org/wiki/Bourbon_biscuit',1),
	('Choc Chip Cookie','/images/cookies-unedited.jpg',6,'A chocolate chip cookie is a drop cookie that features chocolate chips or chocolate morsels as its distinguishing ingredient. Chocolate chip cookies originated in the United States around 1938, when Ruth Graves Wakefield chopped up a Nestlé semi-sweet chocolate bar and added the chopped chocolate to a cookie recipe.','https://en.wikipedia.org/wiki/Chocolate_chip_cookie',2),
	('Chocolate Digestive','/images/chocolate-digestives-unedited.jpg',4,'Digestive biscuits which are coated on the bottom with milk, dark or white chocolate are also available. Originally produced by McVitie\'s in 1925 in the UK as the Chocolate Homewheat Digestive, other varieties include the basic biscuit with chocolate shavings throughout, or a layer of caramel.','https://en.wikipedia.org/wiki/Digestive_biscuit#Chocolate_digestives',3),
	('Chocolate Hobnob','/images/Two-Chocolate-Hobnobs.jpg',9,'Hobnobs is the brand name of a commercial biscuit. They are made from rolled oats and jumbo oats, similar to a flapjack-digestive biscuit hybrid, and are among the most popular British biscuits. McVitie\'s launched Hobnobs in 1985 and a milk chocolate variant in 1987.','https://en.wikipedia.org/wiki/Hobnob_biscuit',4),
	('Custard Cream','/images/custard-cream-unedited.jpg',8,'A custard cream is a type of sandwich biscuit popular in the United Kingdom and Republic of Ireland filled with a creamy, custard-flavoured centre. Traditionally, the filling was buttercream but nowadays cheaper fats have replaced butter in mass-produced biscuits.','https://en.wikipedia.org/wiki/Custard_cream',5),
	('Digestive','/images/d05662cfb32042c9894dddf8ed73ce22.jpg',5,'A digestive biscuit, sometimes described as a sweet-meal biscuit, is a semi-sweet biscuit that originated in Scotland. The digestive was first developed in 1839 by two Scottish doctors to aid digestion.','https://en.wikipedia.org/wiki/Digestive_biscuit',6),
	('Fig Roll','/images/Fig-Newtons-Stacked.jpg',4,'The fig roll or fig bar is a cookie or biscuit consisting of a rolled cake or pastry filled with fig paste.','https://en.wikipedia.org/wiki/Fig_roll',7),
	('Garibaldi','/images/garibaldi-unedited.jpg',5,'The Garibaldi biscuit consists of currants squashed and baked between two thin oblongs of biscuit dough?a sort of currant sandwich. The biscuits are similar to Eccles cake as well as the Golden Raisin Biscuits once made by Sunshine Biscuits.','https://en.wikipedia.org/wiki/Garibaldi_biscuit',8),
	('Ginger Nut','/images/gingernut.jpg',3,'A Ginger Nut is a globally popular biscuit flavoured with ginger. Ginger snaps are flavoured with powdered ginger and a variety of other spices, most commonly cinnamon, molasses and clove.','https://en.wikipedia.org/wiki/Ginger_snap',9),
	('Hobnob','/images/Hobnobs.jpg',5,'Hobnobs is the brand name of a commercial biscuit. They are made from rolled oats and jumbo oats, similar to a flapjack-digestive biscuit hybrid, and are among the most popular British biscuits. McVitie\'s launched Hobnobs in 1985 and a milk chocolate variant in 1987.','https://en.wikipedia.org/wiki/Hobnob_biscuit',10),
	('Jammie Dodger','/images/jammie-dodgers-unedited.jpg',8,'Jammie Dodgers are a popular British biscuit, made from shortbread with a raspberry or strawberry flavoured jam filling. They are currently produced by Burton\'s Biscuit Company at its factory in Llantarnam. In 2009, Jammie Dodgers were the most popular children\'s sweet biscuit brand in the United Kingdom, with 40% of the year\'s sales consumed by adults.','https://en.wikipedia.org/wiki/Jammie_Dodgers',11),
	('Malted Milk','/images/malted-milk-unedited.jpg',6,'The malted milk is a type of biscuit, first produced by Elkes Biscuits of Uttoxeter (now owned by Fox\'s Biscuits) in 1924. They are named after their malt flavouring and milk content.','https://en.wikipedia.org/wiki/Malted_milk_(biscuit)',12),
	('Nice','/images/nice-unedited.jpg',4,'A Nice biscuit is a plain or coconut-flavoured biscuit. It is thin, rectangular in shape, with rounded bumps on the edges, and lightly covered with a scattering of large sugar crystals, often with the word \'NICE\' imprinted on top in sans-serif capital letters.','https://en.wikipedia.org/wiki/Nice_biscuit',13),
	('Oreo','/images/oreo-unedited.jpg',3,'Oreo is an American sandwich cookie consisting of two (usually chocolate) wafers with a sweet crème filling. Introduced on March 6, 1912, Oreo is the best selling cookie brand in the United States.','https://en.wikipedia.org/wiki/Oreo',14),
	('Party Ring','/images/party-ring-unedited.jpg',5,'The party ring is a British biscuit first made by Fox\'s Biscuits in 1983.[1] It is a circular biscuit with a central finger-sized hole. On top of this is a layer of hard, coloured icing with \'wiggly\' lines in a different colour.','https://en.wikipedia.org/wiki/Fox%27s_Biscuits',15),
	('Rich Tea','/images/rich-tea-unedited.jpg',4,'Rich tea is a type of sweet biscuit; the ingredients generally include wheat flour, sugar, vegetable oil and malt extract. Originally called Tea Biscuits, they were developed in the 17th century in Yorkshire, England for the upper classes as a light snack between full-course meals.','https://en.wikipedia.org/wiki/Rich_Tea',16),
	('Shortbread','/images/shortbread-unedited.jpg',11,'Shortbread is a traditional Scottish biscuit usually made from one part white sugar, two parts butter, and three to four parts plain wheat flour. Other ingredients such as rice flour or cornflour are often added or part-substitute the flour to alter the texture.','https://en.wikipedia.org/wiki/Shortbread',17);

/*!40000 ALTER TABLE `biscuits` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
