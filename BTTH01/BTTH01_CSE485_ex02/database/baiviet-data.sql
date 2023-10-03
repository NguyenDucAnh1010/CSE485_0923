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

-- Dumping data for table btth01_cse485.baiviet: ~20 rows (approximately)
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(1, 'Food Chemist', 'Pola X', 1, 'Ipomoea purpurea (L.) Roth', 'Convolvulaceae', 1, '2023-01-31 19:38:42', 'http://dummyimage.com/125x100.png/5fa2dd/ffffff'),
	(2, 'Graphic Designer', 'Yearling, The', 2, 'Triticum turgidum L.', 'Poaceae', 2, '2023-09-14 04:04:58', 'http://dummyimage.com/182x100.png/ff4444/ffffff'),
	(3, 'Help Desk Technician', 'Femme Nikita, La (Nikita)', 3, 'Macroptilium gibbosifolium (Ortega) A. Delgado', 'Fabaceae', 3, '2023-03-06 13:44:30', 'http://dummyimage.com/141x100.png/ff4444/ffffff'),
	(4, 'Marketing Assistant', 'Ramen Girl, The', 4, 'Buchanania Spreng.', 'Anacardiaceae', 4, '2023-02-27 07:44:20', 'http://dummyimage.com/132x100.png/ff4444/ffffff'),
	(5, 'Help Desk Technician', 'Metropolis', 5, 'Chrysothamnus Nutt.', 'Asteraceae', 5, '2023-07-06 04:37:21', 'http://dummyimage.com/100x100.png/ff4444/ffffff'),
	(6, 'Technical Writer', 'Seventh Sign, The', 6, 'Ammannia baccifera L.', 'Lythraceae', 6, '2023-04-21 18:10:25', 'http://dummyimage.com/199x100.png/5fa2dd/ffffff'),
	(7, 'Recruiting Manager', 'Out of the Fog', 7, 'Bidens tenuisecta A. Gray', 'Asteraceae', 7, '2023-02-15 04:06:28', 'http://dummyimage.com/126x100.png/ff4444/ffffff'),
	(8, 'Budget/Accounting Analyst IV', 'Man-Thing', 8, 'Ranunculus hederaceus L.', 'Ranunculaceae', 8, '2023-03-31 16:55:39', 'http://dummyimage.com/131x100.png/ff4444/ffffff'),
	(9, 'Legal Assistant', 'Scream of Fear (a.k.a. Taste of Fear)', 9, 'Lecanora deplanans Nyl.', 'Lecanoraceae', 9, '2023-07-12 02:16:46', 'http://dummyimage.com/127x100.png/dddddd/000000'),
	(10, 'VP Sales', 'After School Special (a.k.a. Barely Legal)', 10, 'Polygonatum multiflorum (L.) Allioni', 'Liliaceae', 10, '2023-03-13 01:50:06', 'http://dummyimage.com/174x100.png/ff4444/ffffff'),
	(11, 'Assistant Manager', 'Pieces of April', 1, 'Indigofera hirsuta L.', 'Fabaceae', 1, '2023-08-08 09:53:14', 'http://dummyimage.com/150x100.png/dddddd/000000'),
	(12, 'Clinical Specialist', 'A Phantasy', 2, 'Physaria oregona S. Watson', 'Brassicaceae', 2, '2022-12-10 16:51:37', 'http://dummyimage.com/193x100.png/5fa2dd/ffffff'),
	(13, 'Automation Specialist III', 'Lilya 4-Ever (Lilja 4-ever)', 1, 'Parmotrema ultralucens (Krog) Hale', 'Parmeliaceae', 3, '2022-12-05 04:48:24', 'http://dummyimage.com/101x100.png/ff4444/ffffff'),
	(14, 'Professor', 'Garlic Is As Good As Ten Mothers', 4, 'Cnidoscolus urens (L.) Arthur var. stimulosus (Michx.) Govaerts', 'Euphorbiaceae', 4, '2023-04-02 22:11:10', 'http://dummyimage.com/150x100.png/dddddd/000000'),
	(15, 'Developer I', 'Marley', 5, 'Mentzelia congesta Nutt. ex Torr. & A. Gray', 'Loasaceae', 5, '2023-06-22 23:21:32', 'http://dummyimage.com/153x100.png/dddddd/000000'),
	(16, 'Sales Representative', 'Born to Be Bad', 6, 'Astragalus robbinsii (Oakes) A. Gray var. fernaldii (Rydb.) Barneby', 'Fabaceae', 1, '2023-03-23 09:39:11', 'http://dummyimage.com/237x100.png/ff4444/ffffff'),
	(17, 'Payment Adjustment Coordinator', 'Let\'s Get Those English Girls', 1, 'Neea Ruiz & Pav.', 'Nyctaginaceae', 1, '2023-02-13 00:00:40', 'http://dummyimage.com/179x100.png/dddddd/000000'),
	(18, 'Software Consultant', 'The Private Life of a Cat', 8, 'Dryopteris ×dowellii (Farw.) Wherry', 'Dryopteridaceae', 8, '2023-07-06 07:36:12', 'http://dummyimage.com/235x100.png/5fa2dd/ffffff'),
	(19, 'Physical Therapy Assistant', 'Debutantes, Los', 1, 'Isoetes ×foveolata A.A. Eaton ex R. Dodge (pro sp.)', 'Isoetaceae', 9, '2023-02-19 10:14:11', 'http://dummyimage.com/164x100.png/cc0000/ffffff'),
	(20, 'Graphic Designer', 'Hannah Arendt', 2, 'Acacia spectabilis A. Cunn. ex Benth.', 'Fabaceae', 2, '2022-12-29 17:15:42', 'http://dummyimage.com/167x100.png/cc0000/ffffff');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
