-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage des données de la table projet_final.avis : ~7 rows (environ)
/*!40000 ALTER TABLE `avis` DISABLE KEYS */;
INSERT INTO `avis` (`id`, `voiture_id`, `user_id`, `text`, `note`, `date_avis`) VALUES
	(1, 1, 1, 'Audi R8 Green Hall is not bad at all they win the race with it 4 time so Audi r8 is nice version hause car of it', 9, '2021-07-16 00:00:00'),
	(3, 1, 1, 'nice car', 9, '2016-01-01 00:00:00'),
	(5, 4, 1, 'Spider !!!!!!!!!! my dream car.', 10, '2016-01-01 00:00:00'),
	(6, 3, 1, 'nice car', 8, '2017-01-04 00:00:00'),
	(7, 4, 14, 'WOW , not bad at all !', 9, '2021-01-01 00:00:00'),
	(8, 5, 2, 'its a big car :3', 3, '2016-01-01 00:00:00');
/*!40000 ALTER TABLE `avis` ENABLE KEYS */;

-- Listage des données de la table projet_final.doctrine_migration_versions : ~0 rows (environ)
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20210715120514', '2021-07-15 12:05:20', 7958);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;

-- Listage des données de la table projet_final.marque : ~5 rows (environ)
/*!40000 ALTER TABLE `marque` DISABLE KEYS */;
INSERT INTO `marque` (`id`, `nom`, `origine`) VALUES
	(1, 'Audi', 'Allmande'),
	(2, 'BMW', 'Allmande'),
	(3, 'ferrari', 'Italien'),
	(4, 'porsche', 'Allmande'),
	(5, 'Volxwagen', 'Allmande'),
	(6, 'Land Rover', 'England');
/*!40000 ALTER TABLE `marque` ENABLE KEYS */;

-- Listage des données de la table projet_final.modele : ~6 rows (environ)
/*!40000 ALTER TABLE `modele` DISABLE KEYS */;
INSERT INTO `modele` (`id`, `marque_id`, `modele`) VALUES
	(1, 1, 'r8'),
	(2, 1, 'a3'),
	(3, 2, 'X3'),
	(4, 3, '458'),
	(5, 4, 'vlox'),
	(6, 5, 'e-Beetle eClassics'),
	(7, 4, '911'),
	(8, 6, 'Range Rover Velar');
/*!40000 ALTER TABLE `modele` ENABLE KEYS */;

-- Listage des données de la table projet_final.user : ~9 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `email`, `roles`, `password`, `created_at`) VALUES
	(1, 'tino@gmail.com', '["ROLE_ADMIN"]', '$2y$13$6mZF7xwEGNpadlJ9feSv/eK6Zw6dZHQ/pFJdwziXq3.BmsnrtxG4m', '2016-01-01'),
	(2, 'goku97@gmail.com', '["ROLE_ADMIN"]', '$2y$13$I3IW0zY1nDCG5.8gCxKxtuCIHICLTO/bM.rTa0S3zKg5XaEo3RqQO', '2021-08-17'),
	(3, 'waledo1997@hotmail.com', '["ROLE_ADMIN"]', '$2y$13$0/SwftJ9hGR5S/8RiInXuesVjzzisnn3eWYfQWmLtJ5T1owNng6W2', '2021-08-25'),
	(4, 'alex96@gmail.com', '["ROLE_USER"]', '$2y$13$NWLrTZeQXjM43gl6iUuo.uabfNH.1ml2g.k/Nay7qITfEear5EN9K', '2016-01-01'),
	(5, 'walid97@gmail.com', '["ROLE_USER"]', '$2y$13$nn8Pj.3fOsKqfjM5N//Y/.e0nkjU03Nxa0EQbn.uB48vJe4lttoau', '2016-01-01'),
	(6, 'Amir@gamil.com', '["ROLE_USER"]', '$2y$13$UQWXk9uC7pNp6OHY9/PkfuykimQfI0R0VgwouXoRQEKxdVoaKqhOK', '2016-01-01'),
	(7, 'waledo97@gmail.com', '["ROLE_ADMIN"]', '$2y$13$MVykN5OO/f3J32q3Z4RLuegs049cwK5U.0/4xWC3GxrZgfA7kNJ8C', '2016-01-01'),
	(8, 'toto@gmail.com', '["ROLE_USER"]', '$2y$13$/RIpIYS.Iac4klWAPeapkeUyhwNtzudiCvqI3RYUQmi8YxpDIuJZW', '2021-09-04'),
	(9, 'kim@gmail.com', '["ROLE_USER"]', '$2y$13$Kj5P.bh0ST8YMIwilOTjn.fJwQ19iRFwb/KSEnmLlbk2Rzi8Etmmu', '2021-09-05'),
	(10, 'kim97@gmail.com', '["ROLE_USER"]', '$2y$13$1yEUr3QVCTTwpGZ0mEVfsulES369Rir/4.KDtU8sB6FWF4JSl.x8e', '2021-09-06'),
	(11, 'zoro@gmail.com', '["ROLE_USER"]', '$2y$13$//Yr2U99nBzCR9p/O2yAQeowjhCgiTRG7QvQqHbnUKsdtKIOwApsW', '2021-09-06'),
	(13, 'waled97@gmail.com', '["ROLE_USER"]', '$2y$13$IhYTtFmTQ.PrnOd.ErkeCOjtKisA9Vu.WuiWHFzU1i3r0RfKIxE.a', '2021-09-06'),
	(14, 'kitkat@gmail.com', '["ROLE_USER"]', '$2y$13$OefzHo4eGDzEoxvyV3OwVeWBCDUcnm9gCRkQhtiVxbu2DBYVP6A7G', '2021-09-14'),
	(15, 'kim77@gmail.com', '["ROLE_USER"]', '$2y$13$sfBDI5GcdehyJ8BHuP99YeC/WEVTXxJgrNOgojmSnvvswmtGw4a9i', '2021-09-16');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Listage des données de la table projet_final.voiture : ~4 rows (environ)
/*!40000 ALTER TABLE `voiture` DISABLE KEYS */;
INSERT INTO `voiture` (`id`, `modele_id`, `type`, `description`, `nb_portes`, `couleur`, `image`, `motorisation`) VALUES
	(1, 1, 'Les auto berlines', 'L’Audi R8 Coupé V10 performance quattro hérite de la mythique motorisation atmosphérique V10 5.2 FSI reconnaissable à sa puissante sonorité rauque. Grâce à la position centrale arrière de son moteur et une transmission intégrale permanente quattro, la supercar Audi est d’une précision chirurgicale. Délivrant 50 ch de plus que la version classique, l’Audi R8 Coupé V10 performance quattro culmine à 620 ch et affiche un couple de 580 Nm. Résultat : un passage de 0 à 100 km/h en 3,1 secondes et une vitesse de pointe sur circuit qui peut s\'élever à 331 km/h.', 2, 'bleu', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgWFhYYGBgaHBkZGhocGRgaGhwYGBoZGRgaGRgeIS4lHB4rHxgYJjgoLC8xNTU1GiQ7QDszPy40NTEBDAwMEA8QGhISHjQhISE0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTQ0NP/AABEIALcBEwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAEDBAYFBwj/xABKEAACAAMEBgcDCQUHAgcAAAABAgADEQQSITEFBkFRYXETIoGRobHwBzLBFEJSYnKS0eHxFiNTgtIVM0Njk6KyRMIlNFSDo7Pi/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//EAB0RAQEBAQADAQEBAAAAAAAAAAABERICIVExQSL/2gAMAwEAAhEDEQA/ANqFMFdMWCkMUpDY1lVikAVMXFPCCKxdTFGjQ6gxbdIAg7oaZUOMPUxIawOMVDXjAloOhhqGCbQAwV2HxhVMUNdggsNeggYBUh7phAwQaIBumMvq/hbrePrSz/sjVisZjQS/+I24cJR/2iA0gEEsSdHBCXBdCDDFjEolwmlxMNQ3jvhwOMSCWIkCDdFNQdHxhdHE5HCI3EQ1EUgCggmECYqAYQLQZENdgIisCyRKUMAyRRCVEAyxMywEUQ3IaJu6HiamL5nQxmxABBARjl01JfhXzAUhwIuJ0K8Ye8YYCHuww02MK4YUODAMZZhwkOIkVYmmIrghXYsCXCMuHRiuRwhBYn6OHuQ6MQqsGqxJdMNQxNXDqsZXQoppW2Deko+AjVXTGT0WpGlrUN8lD/xgNkFEEqiIghiSkFFdh+jgMYfGM+z0LohvgujXfEZBhqRdv0yfDsg3xGwEImBhtTIAqIEoIMmBJi6YAgQFRugzzgDzi6YRbhEbGCMARFiVE5iMiJSBAtSLrOIrsKCpwhQ0x0RLELoxE4lw9wxnWsVikMEiz0ZhzLh0uK4SHuxN0cP0cToxBdh6RN0cOEETTEIWDWJAkTJZjSpAA3nCGqhBh4rPpmxKSptMtmGao19hzVKkd0PK05YmNL7Di0uag+8yACHNTqLFIV2OhJlS2UMpDKcQQagjgRnHDtOslmR3l3HLIbrYKoB/mYGnGmMOadReCwQQ7o47a0J82QTzcDyBiNta/wDJA/8AcP8ARDmk8o7t07oyFiBGmp432dD4rHQ/aj/LX/UI80inJt0oWg2noCJrIEYiaSpQGoF0qB2xOavUay6YEgxzJWsEts1YHdh+UW5ek5TfOpzHxFRDKuxOawsYlQqwqCCN4NYMyxE1cqtUwJrFkoIYqIaZVRqwBi2VECVEXpMqqVMAVMWmHGISg3xZWbqG7xhisTXBDOFGJIA4mkNMquRA0gZ1vkJ70xB/MD4CKbaes+Sszn6qkxrRdKwN2OXM1gQZI/ap+FYqz9Z1WlUIrlW8Ms/mxUd67CjgStPzGAZbLNZTiGCMQRvB2woJrbgw9YhDQ4aMY1qWGKwF6GZwImLo7vGFdER3jBT3WWhea11Fz38Bz4QkpfJIgGQFYoad1gsthS9aJgXcgF52O4KPM0EczTem3WzGap6FWKrLWlXcHMlvmdWpoOGOMeG6dtjWi0gEki8EGJOZAY8ya9wjXH1O69XOvFqtJpZpS2aWRUTZoDzWByKy/dXbmWGEC9i6XrT2mWmmJM1ryb8JQoi9ixwrPOPf5DAeVe2O3Y7XeQrtrXs/UR0njjh5eVq8k8KLqqFGwAU8oBpbsKqKjmI5tptJVWIxoCaDM0jIaU04Jil1YXRuOPbujeseM16ZofScyzv1lboyeuBjT6wptHiOyL+vGhemli0yQC6LVguPSS88N7AYjeKjdHmugtKvOs6XmOBZaV2BjQE5nAgdkb72d6wXy1mc4rVpZ3p85f5TiODH6MZ8vrXhvvxrFyZ5NCDgd0WktTDaYua3aF+SWi8opInElNyPmy8BtHA02Qv7OKreLKcARiuNdwrWItslyo0tF7C7U/Vz7ouSLK7NcAutSuOGHKKkmYQCgoKEEEUBwxU1pWLcufMvXwatShOHlSJa17X5WjHHvMvMVr8IlexPvVv9rd+RikNLuM7p7PwMWU0m5FShpvoe+kZN8oOW8xDVSynccPHJvGOlZtNbJgI+sPiPwjnfK2YZpQ7KgfpETIaVqORNf0iY1PL76aKZpCWtKuMcuPKIV0rLJoGqdwpXzjgKxFRvzU4g+t8RLOeV7ighibxoDMStKNLBwcDHA9YDK8YZGtrUPb0UVc3d1SoryLEV7IpzdYbMoJL4DbeHwBjznSVp/fOrTHNK9c4szUBAOO2sUnt80ynQsSmdKDPfXui8xnqvUF1lsxxDih+sPiBEc/WezLRVLO592Wl12PE0NFHFqCPN9W9E2i0gBepLGcxt20ID7x45c420uyWOyJdQh3OLG/Uk73cYnlDk6qabpOe+5PqJiR9pyMTyA7c4gfR0yYDeZRzJY+fxiolpWt5ScdwbDwiSZpCgIF5idtxhTwxizxZvlXKSzXScKnEVNCKjcMo7crQDlAWcKSK3aYDujjtbKMCEcgEGlxtmWyG0lpl5tAwcAbArUJ4xbL/Das6X0e8hC5dLowGd5icgMOfcY5FhsrupnFOkY16KWxFHKmhdgc0U5L89gRkGiGyynnvda/cQFygxYKKVuqcL7dUcyK4AmKlv01MBUuplXyVSWt1ioW6qooBqBQgcSCc4nv8Aq/iG0S5zMWmM5cnrVahrxGzlCjtf2Q3zpi121GNeMKNZUT6P1vnI118VIz2g746WjNa5rTAHHUOWHnFFNEyWPWmMjH3VZBnuIViT2R3NXtXwXJmFXRAKUvCrEml6uwDZyjj/AK+O2+P13p9odkBkoXY7hh2nIRXTRlqnODNQIo2hgTTaKCNDImKtAKCmQy7onFojpyxqORZgoAod1TnHF1h1bmWpxWfcRR1UCVx2sTeFT8IvWnWazSyQ85ARgQKsQRmCFBxjmzNe7IuTO3JGH/KkWSs6q2vUVpxUzbVMe6LqgIqhRwFaCOZZfZBZUdX6e0MwN7EywK8epHbsevciageWrsDvujHaDiaGCl64MxIFnmCn0sK8hTGG0yEmoVmFOvNwAHvJsw+hFiVqVZ1FA037y/0w6actDe7I76/lEyWy1t82WvOp8jDac+KP9kLONsz7w/CPIPabomzSrWkqzyphnst5xgwa/eC3UUXi2BrhtEe0q1oPvTEH2U/EwayjW8Xqd9xAe+7WJpJJ+MVqfqTL+SoJ8t5TkEuqvQ3jhXCtKgA0rhlHd0dqDY5E1J0vphMQ3lJnO3AggmhBBI7Y0AMNImvjfCruoxbCmNSQNsXaSQ2l9FSrTL6Kct5KhqVIIIyIIxBzHImOdK1OsajCW3bNmn/uixpPWKz2cAzpyS65X2AJ5LmeyKVh12sM5giWmSzHALeukncA1KnlEVa/ZWybZQb7TzG/5MYQ1UsW2yyTzQHzEddJoMHeiDiytVLCvu2SQvKUn4RZGgrOMpMv7i/hHSDQUFc3+yJH8KX9xfwh/wCx5H8JPuL+EdGGgOedESv4cv7i/hEbaHk/w0+4v4R1KQoDg2nV2zObzyUJ30IPeKRRnam2RgQZWBzF5iO5iRGspDEQMjJHVhFFEYqBgBdQ0HdEL6tnZNP3B/UI2BQQJlCGmMFP1Wnn3Jss8DfU+NY4WlNG2mRi8uYV+ktCnay+720j1drMIiMhhkTDV9vEplvelQgp9oHyJipO0mQKuwWuyp8qR6drJqhLtCkqTImZh0Auk/XlnBhyoeMeMa26PtNmmXLQgH0HWtxxvB2H6pxG7fRdfSaEFgQQufV7NpxzipoVL1oE8kuqEkAlR1iDdpebZUHsjLNNMdzRJmIoJQlG61du4EDOlIRK3baZP0W/+L+uFGKmTFqfwhRrWcaRdYiJz9GLyqhcG4FYiqirEmoTE9wi3rXrg0uyy5Vnch55dzMGDCSHZJZXK6WC57ADvrFSToBENQCDSlb7Zbs8oyuslRaJl3KUsuWo+iAirh23jzMZ63+Lzjo6C0tbLI6zb8xlqL6MxZGDHI1PUY7GNMd+Ij2+waTWdLSYhqrqGHbv4x86S7YUCMMcFDLsIBmKVPAj4R6v7N7WOimSL1RLe8h3pNqyntNT/NFGY0jbZcudNR2KssxxXHHrGlRtqKGvGObaNMpdYK6k0NOJphsi37TtH3LZfphNRXrvdeo3gEP80YspjnDqpkeg+yOWrNOvUalygOQreqacaDuj2CSUUCigcgBHifsttFy0zE+koI/kb/8AUewq0FdEThD9MIohoe9AXenhdNFS9D3oC01opsJ7vjGV1+1uaxSKoo6SYbssEg0O1yBmANm00jQXsY8Q9o1vNot7JXqSgF4CmLH1xiEZtZc61TC7lndjUsTVjXLE4AbBkIsS9DXgbovUzuPLmEDeyy2YgcSKCJJFovSpl0UCAkDbeUoUdt7e+OQpkI5luJWe7ISCHZlKnLrEqQR2GsPwegaja9TLGyyLSzPZzQK5NWlE5Yk4pwOWzdHtqWokAhGPIp/VHzbMlmdIE1gomYl1HzkvBBPujBau1w72oQMWMeqeybTxm2YyHarSCEB2mU1ejPZRl5KID0Hp/qsOyvkTFHS889HVWmLRgzXUcEoPeAanVoMf5abY6CwfZEV5/rBp20WWYFQu6Mt5HEypI5MjD0Y50jX2dtaceFLOw/4AnvgdOaBtbO0oTJby0c3FaaiuiNioutShukbcY5r6r2rNZF41rVZ1n8ukjU5T27y+0ZhmwHBrOxPes0Dwi5L9oy/5TczNl/8AY8ZdtWrYR1rHOrsImSCO5XNYqtqvaNtltA5KG8qwyG1vpftDk06yA8Jc2W3/ANlyJ29oliUVmGZLG8pfpz6IvSPLJ2hrQp/8taiRkBZpx8QlIvaC9ndstbB7SDZpINQrD9438nzebU5GFkNep6O1zsE8hZdqlMxyUkoxpieqwByiefrTYUJDWuzKRmDOl17r0ZbSel9HaEl9HLUNOIHUDAzG3GY/zV4dwjzjSOv1vnuXDSkFSBclSnu7gWdWbLlGVexPrXYZxElLWhdyAolsS5INQFug1yy2iojKz9JSFmMBbZ95WPVFmtr3SDW6duDFhQkmhxJIVl80fXO35fK3XL3big7xVEEVpms1sbO1zz9XpZw7rpp3mA97sOtEppbH9/M6MVZvk09eqWN2ist5iBQYVOFTHM0rbrJbpbWdpNpa+DStlnrRgCQwdkAUjeTHif8Aa9pNK2mew3iZaD2EFh4REdI2j+LaByd8ORLY+Ge2A48xCpIYEEEggihBGBBGwxYSYVUEF15Zc9kXLYWngs94zVW8zGlXQGlWxxYVHW2itcRjRBoo6zDPlmYsFr5W/wDEbuEKKnS/WHcfwhRUesdOu8Rh9OmWLTPDtdvlSr0Ju1RWGWPzqEbjGzmS7wIOIONMfQjKaz2Ws1nukAIhJORopRiDtoFTtMSFcKVJ69HUsoBJuENUDrDGuXjjG21B0hdtYDApfksCDQGss9TAAU6iHCkZJpNyUwqekCioFQFFQSp3sAASeNIm1Un9Ha7Ma/PVTymXlx7HEUei6/WT5VZwZas0ySxa7dNShFHUbzSjUH0Y8krH0ElkVDfFa4n32OeZNY5WkdXbHaSWeSpY5uhuuTvJQ9Y86wxJXmOoxcW6TcFb15SBuuMT5A9ke6pKYDEGMtqzqtZrFaDORpjdVlCvcN28Qahgo3UjbHSKEC4QN9RmN1cRD8We6qAQUWzMDAkhCdl2hyxNQDXZhzGUM8kbVK5VxqBXmBhnt3dhL6qtCh5yFQSATSmGAJrTLHj4RA1oUZmnMEDbtIpsPowRKWp3GPnXTE4mZaWObTWXsDH8KR9C9IGBoQcxhvpHgcxHvzQvRH97Mqj3KsQ3zQ2OGORg1FLQ80qXU0uupU1zqAWBHGop/MYWjbOrsoc3Za0Mx9ioGF6n1qHqgYksBCmaPnAEmUVa9gAjDA41U5U74f8As+kpmc3W965tIA2jMGhJGyitWhpEart2a1EsJh/c2VjdmE+86UKBLqmuCHqIMFpeJNCx6Hs/tbWfSKox/vA8h6E0vL1lpv6yUH2oyEicGlujVJUAJU1VASS9BvJpjwjofLwtqlz8qTJUw7Mao7eNYI+jkmUyidLXTOKQMM7gAkmgAqTuAxMRHkvtVsE75ZMtQVuhPRy76NirKgFHANVq2AOXGuEY6Tpi0J7s6ZSu1i/g1RHs+r9rl22zFnW8k4OHQ8SQyncQdvAGPGNa9ANYrQ8lqlfelvQUeWTgTQZjEHiDwgrpWXXK1JS8VccVIbvUindGj0Pr6rsqzC8q8QAwdmSpyvHAr3EcY8wu+qYeUK76ph5QNfSNnmzR/iv94n4xeS3uMC5MYL2c6fNokGS5/eSQACc2l5KeJHuns3xsYo8C09ZXkWmdLd2d1c1ZheZgcVcsamrKVPbFBGbEKzj5xWlBXfQH4R6J7VtE/wB3alBr/dOQaUzZCf8ActT9WPNTTI0rvvV/KFNXtFsS101I6xpShwodnbG9SWhagkonvDFFNQENXBYnJgSAc6Gojz3RNpSXMDTL90Bvcu3sRQUvYRq5mucmhCyL2F3rKuINS17E1qSe+N2ziT+pl2tM7SLsoBERryCYRKl4h5b+6Spu0ajV+rSBM5VMpb6i9LlkstwdY3kZsBT3jyJFKYCMp+27gALIQKAAMFAooooFFyAwEVzrpaclCqMBSpFMdl0jDspGNEVsu9PaWBrWSWrTAl1l1NduLA9sZ+VNIOFORoR3GOrNt7zvlMx6XjLVSy1H+LKptxqAe6OKEO4xFW/lLfQTu/OFFboz9E9xhQ0etdJFDTKK8sgioGOWwbeNCAabbsOwJyitNkufnGNIy8qyurTDMU0PXL5oQSQ3W21DV39WOU04qwZagggrvF2l3twEaK2aFmHBX6ud0g0B745z6uzd6+MKRJata7TNUJOczFGwkr33CK9sX7Pb2uK1xRhhSbdanGq/GOO2gpg3QL6PmjOsTaZGmlazunz5y7qMkwDsvUPdEkrXm0Lm8l/typinvSojHPZXG+IjIbjDTHpEnX9sL0uW32Z5TuV1HnHVsntCT6M8fYaW47kevhHjxlmBKmGmPepPtCkn3pjLweU4HaxWkX7NrXZpmCzJDZYLMCthiKAEbY+eUmsuTMORI8okNsfIsW+11vBqw0x9ISpiVqiMtabQwoAQKAHCgwjxXSasky2KtLyTGcVRGwJLN7ykjCpwpHL0ZrNabPhKmXR9Ggu/dy8IksGmWe0tMmkEzaq5AAFGFMhsyigHtsxJjEu7LVXILG6ylarUZH5uzCmEWmnUUVLPNwm3Wpijr1kr9hiaDKu8UEVt0fQqr3rzTAgav+Ci1JAywDL93jFK3Woi0TCC10THKgnYGNBwwAGEPw/UlssoUFpbX0YBsqFQfpDdWoqMKgjCIdJt1mG43fu9X4R0ZbBf3qV6PF1oRVZuAMs71bAEbqHIRxJ714xKR9M6PtF+VLf6aI33lB+McvXe3dDYbQ4OJQotM70whBT71eyMlq17QLJLs0mXMZ1dEVG6pPui6CCOABizpfWrRVtlrKn2mYku+rsESZVrtaKTcNBU1wxwgOf7JbaazbNjgBNUY4YhH2Ze4e0xrNddWfl1nuAATkJaUxyqaXkY7FYAciFMU7DrxoWxS7tlr9lJUxXYj6TuBePMmM3pn2s2ibVbOkuQn0nId6csgeBB5wHKHsq0ifmyv9QeV2GPsq0j9GV/qLTuuxRma5W8/wDXv2XR4CIm1tt//r5n3j8IK0+rfs/0nZrSk5Vl9VqOOkwZDgy4Lu8QI9WmaOfZHz5M1rtu23z+x3+BinM1mth/6y1ds6YB3XoD3rTOgWtEl5LqbrqVrStDmrDiGAPZHhz6p28OU+STzQkE9A12oNKq5FCu41yjnvp+1nO02g85sz+qK83SU5vemzG5ux+MQdn9jbcPek3ftTJKf8nFIQ1Yce9aLKh2g2qWx7kvGM+pqcWpxNT5R17LZLPTrOXPMqO7OAnOhrOtb9ukckSfMp23VHfBCRo9fenzpmFOpJloO9mY140rE8uyWYZIp5sx8zFqXJlL7qqOQWGrhpc2WiPLk2Z16QKrzJ0xXYKpr1UUKAYrlEGwReYA7/CITZQdsBUvp6EKLXyMcPGFAaUisIoIXeISnCKyXRjdDGUNxggYKsBD0QgXsw3Ra9fpD0gOe9iTcIrvotDs8I692BMvZTzgrhvoRDsis+r6xqDL5wBl9sQZGZq9FWZoBhG2KeqwxkjLzpAYF9CuPmxWfRjjYY9FaREbWQEZeEBk5NtUoEngi6rKjgVKhhdYMNvVr3DA0ivabHILM5nghmZrqoScSTQE/ERrJmi5b+8oPZFCZqxKOV4fzH41i6mMpPnigRBdQYgE4knAs3GmHAdpNJmjXnVNfpN3iIv2UG8xFZKHrGr/AGYgDq22wQGWpCpGmbV590B+zz7oDOUhUjRjV590L9n33QGchUjTDV1t0Eur5gMvSHuGNWNAU3RIugxAZISzuiRZDRrl0MoziRNGKNkBlZdnbjFuTJfjGjWwAbIlFlGX5wVyJCtxi4gMXehHCHCQNVqGFFm4N3gYaCa6VRvplvhx+WXrhEN/1sw2iDWZ+fxioNSK5+tg8YIYetsAZuQ8/WWUHXbx4RFOvbw/SHAp+kDexO/KkODwpuG2td/ZAShjxgr52mIq+vwMFXfASHicTw84QX1tiPllD7vVICUKM9nP9YYL3CBBxrjCHrCCnujzhXBhXP1ugq/lt58ocNhn5dmEQAZfrjAlOfrfEwbcezYeNO+GXx+EBGJf44wgvrCJW7MeMM1N/bXdARlcIRQeqehEt7t+G+kCQMKHw2598ACyh688YFkHrjvgyBl8YZlp+p5GnrZACycBTbAXMcIlDbK7ewQxbOAh6Mehvgbgia9ljy9dsCSPL4bIoBk9fpA9GO+JXps7/WMAfXOCIxK3etsBdiUDZ3590MzYd3CAhYcIY8oPfTHhtgOBrTPADLlXGAjYRGTtrsESMvCAIG/1vigPWcKD6InKp7IUEWCO3tpwgmTcPLnAD1+UEDXieWcA6J69esYcCvHwNT68IVSaZ+suULLZv9Vgp1U7TUV4GJA361+EQo2FKDLjlvHrfB7fIDb27IgkWZvJiRWzOeHbjEIUZbRnjUY5Q5c5EY44+HKAkXdjDgbMa86RHfpTGgoMKUh640GW/vgp/j6EOpPfjlhCB27vDLGHVhTfswIFIAkPOu7gYV8nM8sqQx4+vVYV3u3QBE7uzLLnDhqc/W6BXZj5Hwhyxz3g4U38BziAgx7fyhlauZ8fz5QCnGgrUZQ2e31nWkUSI4HLlXiPKEHpk3rtgKHADGuPrfCpkYCSpFRAqa7fXdA1yNQMczw/SEz45nHOtMoB67/jhDDPxqcu6I7+NaeqbeEOGrQAE/E02QQLEZ7O4Qr3quyEXxOHP4jhDMRgcOHqkAzGmP698Mxpl6rnBUzx4wIFMbtTjzgGv8s67j3w1an9e4QhT88TEbmuJ4DHu2DKAdn3UpxofDvgfH4/lCoMq4b/AMK7YAgchnAKAIziRmqe7ZSAb1j5xQ9TCiG7whRUTXs8T2YehnCL0xPDDlChRBKppXvHdBXjliOFa8c9uyFCiKepBNeHKmyHoeG/4/CFCgGdt+PowROGFa/DZ8IUKAVT2juqMIKY2ztOGzP8YUKAdGOz1wg1UknzrtpUwoUAwYipauYGH68YNplaVFMNm2mcNCgCSYKggkHZTYab61gb23Ej8MoUKCnvCtTX1+UFQ4V4kUpQkeUKFEEYWu7Z2QxyxJx8d8KFFCBGzf8ArieEMzU3/kThQwoUEICm78M4CYtKmvPDfDwoBiacRu5wnpjXDbhjyhQooZ2wGWUMzVzyGFTieAhQoCIvz28YcLtBxG2lPCFCgHIBOOXlxwxiPDYPyxhoUALZwHMwoUVCv8YUKFBX/9k=', 'motorsport DNA while the 562-hp V10 engine'),
	(3, 3, 'Les auto berlines', 'The BMW X3 is a compact luxury crossover SUV manufactured by German automaker BMW since 2003. The current generation is based on the BMW 5 Series (G01)', 4, 'black', 'https://www.byri.net/wp-content/uploads/2021/06/BMW-presents-restyled-versions-of-X3-and-X4.jpg', '2.0 L 4-cylinder, 2.0 L 4-cylinder diesel, 3.0 L 6'),
	(4, 4, 'Sports car (S)', 'Also called Ferrari 458 Italia , The Ferrari 458 Italia (Type F142) is a mid-engine sports car produced by Ferrari. The 458 replaced the F430, and was first officially unveiled at the 2009 Frankfurt Motor Show.[5][6] It was succeeded by the 488 GTB (Gran Turismo Berlinetta), which was unveiled at the 2015 Geneva Motor Show : 4.5 L Ferrari F136 F V8', 3, 'rouge', 'https://www.icon-icon.com/wp-content/uploads/2021/05/bulletproof-ferrari-458-speciale-by-addarmor-front-view.jpg', 'Petrol'),
	(5, 8, 'Big Car', 'Le SUV Range Rover Velar porte le nom d\'un concept qui a servi au développement du premier Range, en 1969. « Velar » veut dire « voiler » ou « dévoiler » en latin, par rapport à son toit de pavillon dissocié à son hayon sur la proue.\r\n\r\nLe nom « VELAR » est un acronyme qui signifie « V Eight LAnd Rover » : le Range Rover, avant d’avoir hérité de son nom définitif, était surtout le premier Land Rover à moteur V8, de 3,5 L, en alliage léger et d\'origine Mercury, acheté par Rover en 1965.', 4, 'gray', 'https://www.sky-future.net/wp-content/uploads/2021/04/Range-Rover-Velar-P400e-400ch-Plug-In-Hybride-Rechargeable-Hakuba-Silver-Cover-2.jpg', 'essence, Diesel ou hybride');
/*!40000 ALTER TABLE `voiture` ENABLE KEYS */;

-- Listage des données de la table projet_final.voiture_user : ~0 rows (environ)
/*!40000 ALTER TABLE `voiture_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `voiture_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
