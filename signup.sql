-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2021 at 02:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(200) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `Name`, `Email`, `Phone`, `Age`, `Password`, `Cpassword`) VALUES
(15, 'Dev narayan', 'narayan@outlook.com', '8312829312', '24', '$2y$10$KDwreQcicaRkOTnefPKhuOh7uWZtjZdjhMrCxzoKPw1', '$2y$10$jlt6Wgip5yR9yDIf/HaW0.5Z/ISTTamBdwuCNmHqPv9'),
(16, 'shardul', 'shardul@gmail.com', '8318943278', '26', '$2y$10$XiKv.XpA8/x4/OvTFNpCiuSrwIixEjUHtYPBg0fliXT', '$2y$10$cXIpEt3AxG.u6YdiVcY1vOl5D2YqREnFYmcfAxtM0su'),
(17, 'kiran kukreja', 'kiran@gmail.com', '7138421387', '22', '$2y$10$UMw1hKplOwktlvBZwuYb.eiWs7/EsY3GCRJARwuyCs/', '$2y$10$bFq65XHfkZOthYpH5vXeX.PDe4onYPjo54fsG3seYMo'),
(18, 'lokesh', 'lokesh@gmail.com', '78474432783', '30', '$2y$10$MBRh3Dmz0ivxMVrL9aZyTO4Z.rLEuPkxO.sinMTKCg2', '$2y$10$oHXqXpFb3sR4m7CHa0PMGe1hCPFI.ef3mjHPqa12yO0'),
(19, 'trilok kamble', 'trilok@gmail.com', '8731278342', '24', '$2y$10$O/B1/vy8EiFMhOOrFszlWOnAGzCFP737B.Cnil0ApLd', '$2y$10$TXc4SifDKp/.0qulFVMRNuUiHsyfUnQ95zg4Gj5Se22'),
(20, 'Om Patil', 'om@gmail.com', '7312724212', '25', '$2y$10$K21jy1djpeahatGSEIdYCehFViP1EkETktcNCd3RBZb', '$2y$10$BksC92EPSrpjhu3/mA08pOlIIbM5P9Q9/HKLRSVBWfW'),
(21, 'virat kohli', 'kohli2gmail.com', '8914768432', '38', '$2y$10$0/iCCxpcsnfnxvpCqYeWdu8aSeAXfDeDJyNXcTgrxDs', '$2y$10$yZKt.FgHd4K281mJrE/QzeO7kOpfj9cvViw925FuIXb'),
(22, 'rukshar', 'ruk@gmail.com', '8981329874', '42', '$2y$10$3z4odAt2GwX.Kz3Twsd13OUV1r4WkAmEDC3ZDbRP06X', '$2y$10$4hsCfiHf8yJDZgdWTvL8u.mpTXRRnSLYbFUr.YrcbBi'),
(23, 'Salman', 'salman@outlook.com', '6321744124', '31', '$2y$10$cEdxEFhod6whQPf18VeDVu0//RajKirMUTRV0v1lD34', '$2y$10$lvGzieoeXAtbI4KPfaLs3eAc4BcILv0ydrbl68GdV1T'),
(24, 'kiran malhotra', 'malhotrak@gmail.com', '8932783423', '41', '$2y$10$EQWpD.c0RPwsItry0fs/C.rTGeqzep8nHz493XPgoeg', '$2y$10$zPYxZ.yfbTyknsY8MeiMyO1wzEda5FaqWnOJ.VMddUj'),
(25, 'Ravi Verma', 'verma@gmail.com', '8913227797', '32', '$2y$10$0qU8szpu2T76IYnVza/iuehH2HWRdXByc9OL7yFUtW4', '$2y$10$CpSp23viiE1H9k//qxrA/.O78tYY6o7MG9slfznVc7d'),
(26, 'Bhavik gala', 'bhavik@gmail.com', '9843797432', '31', '$2y$10$geBDDxDpYz/eyxSDVWalSuYallqVbH9LPUiSEZN7VKz', '$2y$10$ZkLFp/LpNOUiqOWxHqG9G..HZ2u2VzExLPsVHTSAobm'),
(27, 'Bhavik gala', 'bhavik@gmail.com', '9843797432', '31', '$2y$10$qSfocA2zFnb3/fLg5R35reIz8MVypjOhV4cqEiKnCUg', '$2y$10$fthdoPGIYXHLHQXhkQHu.u.L78s0cJx0Net.ESSTcS9'),
(28, 'mansi chawla', 'mansi@gmail.com', '7891377987', '44', '$2y$10$x..mA/TNIoeE.EsAij1WP.rVF/TMTJYP7/Cjp6ACYix', '$2y$10$N.5HXy69PJJRFasJChIUj.ng9bXqBwe8cBwpsadnwir'),
(29, 'kranveer', 'karan@gmail.com', '8312783122', '31', '$2y$10$wDi5E7MKXEZQmluqNdChjeAfRzoOy.xb5ZRdNLgmBut', '$2y$10$rMcsYH08GYyu6KFiYeRPXeMVt3n.I/ghzoimw21e7zf'),
(30, 'jagdish', 'jagdish@gmail.com', '8932176722', '19', '$2y$10$0BXtscIJAQoQ2LA.Szhqv.9srdiE2fsk7eaqwXv9vV/', '$2y$10$0930kmj4vZj0btXY1Bl.YOuIC/vog18JoREGOkyVBt6'),
(31, 'trilok', 'trilok@gmail.com', '8879893272', '40', '$2y$10$uxtOTUmf7D6RxTvGXnlPee.h/Wikm0hyb48y4Q8yHqP', '$2y$10$aRh5GY6ZWow2x39XSm/qwOCmVB1dkPAcSHztT/OF5BW'),
(32, 'qarim khan', 'khan@gmail.com', '7832167828', '25', '$2y$10$1O/Cx6KErrYuKHm7uNMfG.1boCCYKvcXNdy3a6fvnYV', '$2y$10$HFEKdkCX9PHD9Rfflfz7v.mloG2RUX6z71x3CL3QRph'),
(33, 'pravin mahtre', 'mahtre@gmail.com', '9821398772', '42', '$2y$10$crmZyOdU8AQD6eCHlP42o.OIhLVF9WL8LBJjLfBnkG3', '$2y$10$uvSu5EPG3ckEv9lOfhjlg.OnOGOsXXRjGgGO.85GkTx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
