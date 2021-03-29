-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `little_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `name_author_goods` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `goods` (`id`, `name`, `little_img`, `price`, `created`, `name_author_goods`) VALUES
(1,	'Пічєнькі Roshen',	'https://juegoscocinarpasteleria.org/wp-content/uploads/2020/03/Una-galleta-con-chispas-de-chocolate-Cocina-con-clase.jpg',	12,	'2021-03-26 15:16:26',	'Петро Олексійович'),
(5,	'Піченькі',	'https://juegoscocinarpasteleria.org/wp-content/uploads/2020/03/Una-galleta-con-chispas-de-chocolate-Cocina-con-clase.jpg',	5,	'2021-03-26 15:20:54',	'Serhii Makhniuk'),
(8,	'Beer',	'https://www.volynnews.com/files/news/2020/08-29/299213/41w.jpg',	15,	'2021-03-27 00:00:00',	'Serhii Makhniuk'),
(13,	'skoda',	'https://topgir.com.ua/wp-content/uploads/2020/07/oct1.jpg',	666,	'2021-03-28 20:45:26',	'Serhii Makhniuk'),
(14,	'New Babanas',	'https://topgir.com.ua/wp-content/uploads/2020/07/oct1.jpg',	123,	'2021-03-29 00:22:04',	'Serhii Makhniuk'),
(16,	'Остання спроба',	'https://pustunchik.ua/uploads/checkyourself/cache/b669b93a00f9cbdd7fe8f345178fc23d.jpg',	66,	'2021-03-29 19:42:26',	'Антон Себастьянович');

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_author` varchar(150) DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `comment` varchar(256) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `good_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `good_id` (`good_id`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `reviews` (`id`, `name_author`, `rating`, `comment`, `created`, `good_id`) VALUES
(4,	'Аркадій',	5,	'норм',	'2021-03-29 02:11:37',	1),
(5,	'Аркадій',	5,	'Класні піченькі',	'2021-03-29 02:11:43',	1),
(6,	'Вася',	10,	'Рекомендую, пиво агонь',	'2021-03-29 02:11:09',	8),
(7,	'Вася',	4,	'Машина нормальна',	'2021-03-29 11:12:46',	13),
(8,	'Арсен',	3,	'test',	'2021-03-29 11:44:09',	1),
(9,	'Аркадій',	1,	'test',	'2021-03-29 11:44:18',	1),
(10,	'Арсен',	2,	'Класні піченькі',	'2021-03-29 11:44:36',	1),
(11,	'Арсен',	1,	'test',	'2021-03-29 11:45:07',	8),
(12,	'Вася',	9,	'Поставив 9, хай знають',	'2021-03-29 19:46:27',	16),
(13,	'Валентин',	1,	'Не розумію, при чому тут панда',	'2021-03-29 19:46:59',	16);

-- 2021-03-29 16:52:55
