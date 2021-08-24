-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 24, 2021 lúc 12:00 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dhtl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canbo`
--

CREATE TABLE `canbo` (
  `IDCanBo` int(11) NOT NULL,
  `TenCanBo` text NOT NULL,
  `ChucVu` text NOT NULL,
  `Email` text NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `IDDonVi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `canbo`
--

INSERT INTO `canbo` (`IDCanBo`, `TenCanBo`, `ChucVu`, `Email`, `SDT`, `IDDonVi`) VALUES
(81, 'Nguyễn Thanh Tùng', 'Trưởng khoa', 'tung@gmail.com', '0998745125', 2),
(82, 'Đặng Thị Thu Hiền', 'P.Trưởng khoa', 'hien@gmail.com', '0998745162', 2),
(83, 'Nguyễn Thị Thu Hương', 'Trợ lý khoa', 'huong@gmail.com', '0322541521', 2),
(84, 'Nguyễn Khánh Linh', 'Trợ lý khoa', 'linh@gmail.com', '0336478456', 2),
(85, 'Nguyễn Hữu Thọ', 'Trưởng BM', 'tho@gmail.com', '0845562351', 2),
(86, 'Đỗ Lân', 'Phó BM', 'lan@gmail.com', '0352145789', 2),
(88, 'Nguyễn Đức Hậu', 'Phó BM', 'hau@gmail.com', '0332145789', 2),
(90, 'Nguyễn Trọng Linh', '', 'linh@gmail.com', '0112554695', 2),
(91, 'Phạm Thị Hải', '', 'hai@gmail.com', '0988745112', 2),
(92, 'Ngô Quyền Linh', '', 'linh@gmail.com', '0874512563', 2),
(93, 'Trần Mạnh Dũng', '', 'dung@gmail.com', '0847512562', 2),
(94, 'Lê Thị Ngọc', '', 'ngoc@gmail.com', '0332514568', 2),
(95, 'Vũ Ngọc Anh', '', 'anh@gmail.com', '0847512562', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`IDCanBo`),
  ADD KEY `IDDonVi` (`IDDonVi`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `canbo`
--
ALTER TABLE `canbo`
  MODIFY `IDCanBo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD CONSTRAINT `aaaaaaa` FOREIGN KEY (`IDDonVi`) REFERENCES `donvichinh` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
