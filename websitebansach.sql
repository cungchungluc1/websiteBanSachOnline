-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2021 lúc 10:15 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `alt` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `tbl_table` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id`, `id_use`, `id_image`, `name`, `url`, `alt`, `status`, `tbl_table`) VALUES
('e5e21d1defded2955f12ff1af3047d1b', 'a7efed2e317b37131ef42fc62a119ab4', 'e5e21d1defded2955f12ff1af3047d1b', '', 'image/', '', 1, ''),
('de2dc86a603128695d627fa200f8cf26', 'bc59440df94d7d16b128cfabab0a3360', 'de2dc86a603128695d627fa200f8cf26', '', 'image/', '', 1, ''),
('bdb0c1c19943cf7b4fd72857c564d70f', 'fc5eb55eda530e852791f25a4fc29348', 'bdb0c1c19943cf7b4fd72857c564d70f', 'rrr', 'image/', NULL, 1, ''),
('9c14ade594ec15799bd459970aa1396c', '85eae759490ff9c24862f70d0310e1c9', '9c14ade594ec15799bd459970aa1396c', 'NXB tuổi trẻ', 'image/', NULL, 1, ''),
('3febfa43564603475c68cb3f360a320f', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '3febfa43564603475c68cb3f360a320f', '', 'image/', '', 1, ''),
('471ec5185b3f195baef1d1a1f4052a6a', '846d1bb4c1b20c62566f1182d5ce3bb7', '471ec5185b3f195baef1d1a1f4052a6a', '', 'image/', '', 1, ''),
('e5b24fae2b203040efb2334f16b2b9e0', 'd4af35cabca83d28e5ac84f37a8df430', 'e5b24fae2b203040efb2334f16b2b9e0', '', 'image/', '', 1, ''),
('354cd09bd0af9ac8e6a463f1580e99ba', '311f1f63279318baade6883d3eb57983', '354cd09bd0af9ac8e6a463f1580e99ba', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 1, ''),
('9786ab35eb98a46e04d977de51303aea', 'f3c3d5b89486ec348dc1f7016aaea02f', '9786ab35eb98a46e04d977de51303aea', 'cha15843577768538.png', 'image/cha15843577768538.png', 'cha15843577768538.png', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` text DEFAULT NULL,
  `id_publishing_company` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `sell` float NOT NULL,
  `id_category` text NOT NULL,
  `description_detail` text NOT NULL,
  `date_publishing` date NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `id_publishing_company`, `name`, `description`, `price`, `sell`, `id_category`, `description_detail`, `date_publishing`, `quantity`) VALUES
('f3c3d5b89486ec348dc1f7016aaea02f', '', 'địa ngục máu', 'ưeqwe', 343435, 3423, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>eqwe</p>\r\n\r\n<p>sdqw</p>\r\n\r\n<p>ưqeqe</p>\r\n</body>\r\n</html>\r\n', '2012-02-05', 56),
('bc59440df94d7d16b128cfabab0a3360', '', 'demo', '', 0, 0, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', '2012-02-05', NULL),
('a7efed2e317b37131ef42fc62a119ab4', 'demo', 'test', 'demo', 0, 0, '547b5f5767fc02b92c97dd13714cccda', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', '2012-02-05', NULL),
('311f1f63279318baade6883d3eb57983', '', 'sadasdas', '', 2, 2, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>eqw</p>\r\n</body>\r\n</html>\r\n', '2021-11-26', 0),
('c6e3fdd5fd8d80ebbe116eb75e55fd28', '85eae759490ff9c24862f70d0310e1c9', '', '', 0, 0, '', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', '0000-00-00', 0),
('d4af35cabca83d28e5ac84f37a8df430', 'fc5eb55eda530e852791f25a4fc29348', 'demo', '', 0, 0, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', '2021-11-19', 60),
('846d1bb4c1b20c62566f1182d5ce3bb7', '85eae759490ff9c24862f70d0310e1c9', 'sadasjdnjas', '32424', 34234, 343, '6a9c4cd671a51f539636b08ab8f40679', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>demo test type 1</p>\r\n</body>\r\n</html>\r\n', '2021-11-19', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_address_shipping`
--

CREATE TABLE `tbl_address_shipping` (
  `id_address` text NOT NULL,
  `id_user` text NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
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
('2a680230fb6184ac6a3090f803f85968', 'sách tiếng việt', '', ''),
('6a9c4cd671a51f539636b08ab8f40679', 'sách lớp 1', '', '2a680230fb6184ac6a3090f803f85968'),
('fd0f9e6a9703a3206cdf3adce91892df', 'sách lớp 2', '', '2a680230fb6184ac6a3090f803f85968'),
('547b5f5767fc02b92c97dd13714cccda', 'sách tiếng hàn', '', ''),
('a1863ca8c853a52fd8e68c0721ae14c5', 'sơ cấp', '', '547b5f5767fc02b92c97dd13714cccda'),
('b1d3c540ce9400dda0d13ef9cb22f4cb', 'trung cấp', '', '547b5f5767fc02b92c97dd13714cccda');

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

--
-- Đang đổ dữ liệu cho bảng `tbl_publishing_company`
--

INSERT INTO `tbl_publishing_company` (`id_publishing_company`, `name`, `description`, `phone`, `address`, `email`) VALUES
('85eae759490ff9c24862f70d0310e1c9', 'NXB tuổi trẻ', '<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>demo 112 333 444</p>\r\n\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>\r\n', '0987654321', 'hjhk shdkhsj sdhfksdh', 'sdkhhj@hgdf.df'),
('fc5eb55eda530e852791f25a4fc29348', 'rrr', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>rrr</p>\r\n</body>\r\n</html>\r\n', 'rrrrr', 'rrrr', 'rrr@ddd.dd');

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
  `password` text NOT NULL,
  `codeSession` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_role`, `name`, `sex`, `email`, `phone`, `birthday`, `username`, `password`, `codeSession`) VALUES
('a1236', 'a1', 'tam', 'nu', 'avf.email', '09115689785', '1998-02-26', 'admin', '12345678', '25a9df3a2cd3f766fb217e336a91c7e7'),
('a12', 'a2', 'Hang', 'nu', 'abc12.@gmail.com', '01356897402', '1999-05-01', 'a', '12345678', 'c2f22500183af167512a007da06e74e2');

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
