-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2021 lúc 07:30 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websitebansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` text DEFAULT NULL,
  `id_use` text DEFAULT NULL,
  `id_image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `alt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` text DEFAULT NULL,
  `id_publishing_company` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sell` float DEFAULT NULL,
  `id_category` text DEFAULT NULL,
  `date_publishing` date DEFAULT NULL,
  `description_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `id_publishing_company`, `name`, `description`, `price`, `sell`, `id_category`, `date_publishing`, `description_detail`) VALUES
('xc11', 'h12', 'goicuon', 'xc', 23000, 2563, 'c12', '2020-02-03', 'fgh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_address_shipping`
--

CREATE TABLE `tbl_address_shipping` (
  `id_address` text NOT NULL,
  `id_user` text NOT NULL,
  `diachi` text NOT NULL,
  `phuong` text NOT NULL,
  `quan` text NOT NULL,
  `tinh` text NOT NULL,
  `is_defaul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `id_parten_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name`, `description`, `id_parten_category`) VALUES
('gh1', 'dhy', 'gh', 'bnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` text NOT NULL,
  `id_user` text NOT NULL,
  `id_address` text NOT NULL,
  `amount` int(11) NOT NULL,
  `status` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `id_order_detail` text NOT NULL,
  `id_product` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_publishing_company`
--

CREATE TABLE `tbl_publishing_company` (
  `id_publishing_company` text COLLATE utf8_vietnamese_ci NOT NULL,
  `name` text COLLATE utf8_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` text COLLATE utf8_vietnamese_ci NOT NULL,
  `address` text COLLATE utf8_vietnamese_ci NOT NULL,
  `email` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` text DEFAULT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `name`, `description`) VALUES
('a1', 'admin', ''),
('a2', 'customer', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` text NOT NULL,
  `id_role` text NOT NULL,
  `name` text NOT NULL,
  `sex` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `birthday` date NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_role`, `name`, `sex`, `email`, `phone`, `birthday`, `username`, `password`) VALUES
('a1236', 'a1', 'tam', 'nu', 'avf.email', '09115689785', '1998-02-26', 'ahz', '12345678'),
('a12', 'a2', 'Hang', 'nu', 'abc12.@gmail.com', '01356897402', '1999-05-01', 'abc', '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_use_vouncher`
--

CREATE TABLE `tbl_use_vouncher` (
  `id` text COLLATE utf8_vietnamese_ci NOT NULL,
  `id_vouncher` text COLLATE utf8_vietnamese_ci NOT NULL,
  `id_user` text COLLATE utf8_vietnamese_ci NOT NULL,
  `date_user` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vouncher`
--

CREATE TABLE `tbl_vouncher` (
  `id_vouncher` text COLLATE utf8_vietnamese_ci NOT NULL,
  `name` text COLLATE utf8_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8_vietnamese_ci NOT NULL,
  `code` text COLLATE utf8_vietnamese_ci NOT NULL,
  `sell` text COLLATE utf8_vietnamese_ci NOT NULL,
  `date_start` date NOT NULL,
  `date_end` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
