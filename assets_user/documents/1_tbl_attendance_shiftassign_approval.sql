/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `tbl_attendance_shiftassign_approval` (
  `id` mediumint(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'PK',
  `create_date` datetime NOT NULL COMMENT 'Technos Standard',
  `edit_date` datetime NOT NULL COMMENT 'Technos Standard',
  `edit_user` mediumint(11) unsigned NOT NULL COMMENT 'Technos Standard',
  `is_deleted` tinyint(4) NOT NULL COMMENT 'Technos Standard',
  `assigned_by` mediumint(9) NOT NULL,
  `monthyear` date NOT NULL,
  `status` tinytext NOT NULL,
  `comment` tinytext NOT NULL,
  `approver` int(11) NOT NULL,
  `approver_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_attendance_shiftassign_approval` (`id`, `create_date`, `edit_date`, `edit_user`, `is_deleted`, `assigned_by`, `monthyear`, `status`, `comment`, `approver`, `approver_date`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 78, '2024-05-01', '', '', 79, '0000-00-00 00:00:00');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;