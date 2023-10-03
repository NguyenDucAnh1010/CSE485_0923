-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.1.0 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for btth01_cse485
CREATE DATABASE IF NOT EXISTS `btth01_cse485` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `btth01_cse485`;

-- Dumping structure for table btth01_cse485.baiviet
CREATE TABLE IF NOT EXISTS `baiviet` (
  `ma_bviet` int unsigned NOT NULL,
  `tieude` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ten_bhat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ma_tloai` int unsigned NOT NULL,
  `tomtat` text COLLATE utf8mb4_general_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_general_ci,
  `ma_tgia` int unsigned NOT NULL,
  `ngayviet` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hinhanh` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ma_bviet`),
  KEY `baiviet_ibfk_1` (`ma_tloai`),
  KEY `baiviet_ibfk_2` (`ma_tgia`),
  CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table btth01_cse485.baiviet: ~16 rows (approximately)
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(1, 'dfwqw2123', '123wdqwe', 2, '23ew e 2e234e 223 ', 'fererer ewhrwk we kjwe', 4, '2023-10-02 22:38:14', 'http://dummyimage.com/218x100.png/ff4444/ffffff'),
	(3, 'Help Desk Technician', 'Femme Nikita, La (Nikita)', 2, 'Macroptilium gibbosifolium (Ortega) A. Delgado', 'Fabaceae', 3, '2023-03-06 13:44:30', 'http://dummyimage.com/141x100.png/ff4444/ffffff'),
	(4, 'Marketing Assistant', 'Ramen Girl, The', 4, 'Buchanania Spreng.', 'Anacardiaceae', 4, '2023-02-27 07:44:20', 'http://dummyimage.com/132x100.png/ff4444/ffffff'),
	(5, 'Help Desk Technician', 'Metropolis', 5, 'Chrysothamnus Nutt.', 'Asteraceae', 5, '2023-07-06 04:37:21', 'http://dummyimage.com/100x100.png/ff4444/ffffff'),
	(6, 'Technical Writer', 'Seventh Sign, The', 6, 'Ammannia baccifera L.', 'Lythraceae', 6, '2023-04-21 18:10:25', 'http://dummyimage.com/199x100.png/5fa2dd/ffffff'),
	(7, 'Recruiting Manager', 'Out of the Fog', 7, 'Bidens tenuisecta A. Gray', 'Asteraceae', 7, '2023-02-15 04:06:28', 'http://dummyimage.com/126x100.png/ff4444/ffffff'),
	(8, 'Budget/Accounting Analyst IV', 'Man-Thing', 8, 'Ranunculus hederaceus L.', 'Ranunculaceae', 8, '2023-03-31 16:55:39', 'http://dummyimage.com/131x100.png/ff4444/ffffff'),
	(9, 'Legal Assistant', 'Scream of Fear (a.k.a. Taste of Fear)', 9, 'Lecanora deplanans Nyl.', 'Lecanoraceae', 9, '2023-07-12 02:16:46', 'http://dummyimage.com/127x100.png/dddddd/000000'),
	(10, 'VP Sales', 'After School Special (a.k.a. Barely Legal)', 10, 'Polygonatum multiflorum (L.) Allioni', 'Liliaceae', 10, '2023-03-13 01:50:06', 'http://dummyimage.com/174x100.png/ff4444/ffffff'),
	(11, 'Assistant Manager', 'Pieces of April', 1, 'Indigofera hirsuta L.', 'Fabaceae', 1, '2023-08-08 09:53:14', 'http://dummyimage.com/150x100.png/dddddd/000000'),
	(13, 'Automation Specialist III', 'Lilya 4-Ever (Lilja 4-ever)', 1, 'Parmotrema ultralucens (Krog) Hale', 'Parmeliaceae', 3, '2022-12-05 04:48:24', 'http://dummyimage.com/101x100.png/ff4444/ffffff'),
	(14, 'Professor', 'Garlic Is As Good As Ten Mothers', 4, 'Cnidoscolus urens (L.) Arthur var. stimulosus (Michx.) Govaerts', 'Euphorbiaceae', 4, '2023-04-02 22:11:10', 'http://dummyimage.com/150x100.png/dddddd/000000'),
	(15, 'Developer I', 'Marley', 5, 'Mentzelia congesta Nutt. ex Torr. & A. Gray', 'Loasaceae', 5, '2023-06-22 23:21:32', 'http://dummyimage.com/153x100.png/dddddd/000000'),
	(16, 'Sales Representative', 'Born to Be Bad', 6, 'Astragalus robbinsii (Oakes) A. Gray var. fernaldii (Rydb.) Barneby', 'Fabaceae', 1, '2023-03-23 09:39:11', 'http://dummyimage.com/237x100.png/ff4444/ffffff'),
	(17, 'Payment Adjustment Coordinator', 'Let\'s Get Those English Girls', 1, 'Neea Ruiz & Pav.', 'Nyctaginaceae', 1, '2023-02-13 00:00:40', 'http://dummyimage.com/179x100.png/dddddd/000000'),
	(18, 'Software Consultant', 'The Private Life of a Cat', 8, 'Dryopteris ×dowellii (Farw.) Wherry', 'Dryopteridaceae', 8, '2023-07-06 07:36:12', 'http://dummyimage.com/235x100.png/5fa2dd/ffffff');

-- Dumping structure for procedure btth01_cse485.sp_DSBaiViet
DELIMITER //
CREATE PROCEDURE `sp_DSBaiViet`(IN pTenTloai VARCHAR(255))
BEGIN
    DECLARE vTloaiID INT;
    
    -- Lấy ID của thể loại dựa trên tên thể loại
    SELECT ma_tloai INTO vTloaiID FROM theloai WHERE ten_tloai = pTenTloai;
    
    -- Kiểm tra xem thể loại có tồn tại hay không
    IF vTloaiID IS NULL THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Thể loại không tồn tại.';
    ELSE
        -- Truy vấn danh sách bài viết của thể loại
        SELECT baiviet.*
        FROM baiviet
        WHERE baiviet.ma_tloai = vTloaiID;
    END IF;
END//
DELIMITER ;

-- Dumping structure for table btth01_cse485.tacgia
CREATE TABLE IF NOT EXISTS `tacgia` (
  `ma_tgia` int unsigned NOT NULL,
  `ten_tgia` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `hinh_tgia` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ma_tgia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table btth01_cse485.tacgia: ~10 rows (approximately)
INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
	(1, 'Nhacvietplus', 'http://dummyimage.com/246x100.png/5fa2dd/000000'),
	(2, 'anhzaiqqw', 'http://dummyimage.com/190x100.png/dddddd/000000'),
	(3, 'ufereday2', 'http://dummyimage.com/224x100.png/5fa2dd/ffffff'),
	(4, 'isherborn3', 'http://dummyimage.com/130x100.png/dddddd/000000'),
	(5, 'mluebbert4', 'http://dummyimage.com/132x100.png/dddddd/000000'),
	(6, 'adeekes5', 'http://dummyimage.com/234x100.png/5fa2dd/ffffff'),
	(7, 'lradmore6', 'http://dummyimage.com/129x100.png/cc0000/ffffff'),
	(8, 'rcomellini7', 'http://dummyimage.com/182x100.png/cc0000/ffffff'),
	(9, 'dcarnilian8', 'http://dummyimage.com/147x100.png/dddddd/000000'),
	(10, 'mdikes9', 'http://dummyimage.com/218x100.png/ff4444/ffffff');

-- Dumping structure for table btth01_cse485.theloai
CREATE TABLE IF NOT EXISTS `theloai` (
  `ma_tloai` int unsigned NOT NULL,
  `ten_tloai` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `SLBaiViet` int DEFAULT '0',
  PRIMARY KEY (`ma_tloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table btth01_cse485.theloai: ~11 rows (approximately)
INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`, `SLBaiViet`) VALUES
	(1, 'Nhạc trữ tình', 4),
	(2, '123asdww', 5),
	(3, 'rwestfrimley2', 0),
	(4, 'con cc', 2),
	(5, 'scranefield4', 2),
	(6, 'mlipson5', 2),
	(7, 'aasassw', 1),
	(8, 'cyelden7', 2),
	(9, 'etremblay8', 1),
	(10, 'zgoulston9', 1),
	(11, 'qwew', 0);

-- Dumping structure for table btth01_cse485.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','user','author') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `status` enum('inactive','active') COLLATE utf8mb4_general_ci DEFAULT 'inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table btth01_cse485.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `status`) VALUES
	(17, 'anhzai', '$2y$10$wSeqN/lrv00aGig8/0uuy.N8YogZKjtuB8qnZTc1yl1oSFsNoomKy', 'nguyenducanh10102003@gmail.com', 'admin', 'active'),
	(18, 'anhzai1', '$2y$10$ltU2Vda5IDTEV9ql1frcMutGyCTGbwGphpEAb337EK.07rmSYVBJ6', 'ducnguyenanh2003@gmail.com', 'author', 'active');

-- Dumping structure for view btth01_cse485.vw_music
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vw_music` (
	`ma_bviet` INT(10) UNSIGNED NOT NULL,
	`tieude` VARCHAR(200) NOT NULL COLLATE 'utf8mb4_general_ci',
	`ten_tloai` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`ten_tgia` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for trigger btth01_cse485.tg_CapNhatTheLoai
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tg_CapNhatTheLoai` AFTER INSERT ON `baiviet` FOR EACH ROW BEGIN
    IF NEW.ma_tloai IS NOT NULL THEN
        UPDATE theloai
        SET SLBaiViet = SLBaiViet + 1
        WHERE ma_tloai = NEW.ma_tloai;
    END IF;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger btth01_cse485.tg_CapNhatTheLoai_Delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tg_CapNhatTheLoai_Delete` AFTER DELETE ON `baiviet` FOR EACH ROW BEGIN
    IF OLD.ma_tloai IS NOT NULL THEN
        UPDATE theloai
        SET SLBaiViet = SLBaiViet - 1
        WHERE ma_tloai = OLD.ma_tloai;
    END IF;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger btth01_cse485.tg_CapNhatTheLoai_Update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `tg_CapNhatTheLoai_Update` AFTER UPDATE ON `baiviet` FOR EACH ROW BEGIN
    IF NEW.ma_tloai IS NOT NULL THEN
        UPDATE theloai
        SET SLBaiViet = SLBaiViet + 1
        WHERE ma_tloai = NEW.ma_tloai;
    END IF;
    IF OLD.ma_tloai IS NOT NULL THEN
        UPDATE theloai
        SET SLBaiViet = SLBaiViet - 1
        WHERE ma_tloai = OLD.ma_tloai;
    END IF;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for view btth01_cse485.vw_music
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vw_music`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_music` AS select `baiviet`.`ma_bviet` AS `ma_bviet`,`baiviet`.`tieude` AS `tieude`,`theloai`.`ten_tloai` AS `ten_tloai`,`tacgia`.`ten_tgia` AS `ten_tgia` from ((`baiviet` join `theloai` on((`baiviet`.`ma_tloai` = `theloai`.`ma_tloai`))) join `tacgia` on((`baiviet`.`ma_tgia` = `tacgia`.`ma_tgia`)));

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
