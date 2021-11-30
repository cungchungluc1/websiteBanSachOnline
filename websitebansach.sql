-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 05:04 AM
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
('bdb0c1c19943cf7b4fd72857c564d70f', 'fc5eb55eda530e852791f25a4fc29348', 'bdb0c1c19943cf7b4fd72857c564d70f', 'rrr', 'image/', NULL, 0, ''),
('9c14ade594ec15799bd459970aa1396c', '85eae759490ff9c24862f70d0310e1c9', '9c14ade594ec15799bd459970aa1396c', 'NXB tuổi trẻ', 'image/', NULL, 0, ''),
('3febfa43564603475c68cb3f360a320f', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '3febfa43564603475c68cb3f360a320f', '', 'image/', '', 0, ''),
('471ec5185b3f195baef1d1a1f4052a6a', '846d1bb4c1b20c62566f1182d5ce3bb7', '471ec5185b3f195baef1d1a1f4052a6a', '', 'image/', '', 1, ''),
('e5b24fae2b203040efb2334f16b2b9e0', 'd4af35cabca83d28e5ac84f37a8df430', 'e5b24fae2b203040efb2334f16b2b9e0', '', 'image/', '', 1, ''),
('354cd09bd0af9ac8e6a463f1580e99ba', '311f1f63279318baade6883d3eb57983', '354cd09bd0af9ac8e6a463f1580e99ba', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 1, ''),
('9786ab35eb98a46e04d977de51303aea', 'f3c3d5b89486ec348dc1f7016aaea02f', '9786ab35eb98a46e04d977de51303aea', 'cha15843577768538.png', 'image/cha15843577768538.png', 'cha15843577768538.png', 1, ''),
('061640e43d84d60a97e83c6089892919', '3a9141131886045ed69aa295e0c6a8ce', '061640e43d84d60a97e83c6089892919', 'cha15843577768538.png', 'image/cha15843577768538.png', 'cha15843577768538.png', 1, 'product'),
('23ad68817427f3605fcb0cb5c0962913', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '23ad68817427f3605fcb0cb5c0962913', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 0, 'product'),
('9b3b2522f6a2725a07b3ebe437a0e1fe', 'a12', '9b3b2522f6a2725a07b3ebe437a0e1fe', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 0, 'user'),
('5d33edc4a3935e1602eaa94cb3a6ba09', 'a12', '5d33edc4a3935e1602eaa94cb3a6ba09', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 0, 'user'),
('4a407ba4bd15d43eea46ba59753bae6a', 'a12', '4a407ba4bd15d43eea46ba59753bae6a', 'ttt.jpg', 'image/ttt.jpg', 'ttt.jpg', 0, 'user'),
('1b0855735e7ede396208f556d8e7be4d', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '1b0855735e7ede396208f556d8e7be4d', 'AI-Machine-learning-Deep-learning (2).png', 'image/AI-Machine-learning-Deep-learning (2).png', 'AI-Machine-learning-Deep-learning (2).png', 1, 'product'),
('11d058603fd6d04fa58ee62d7e074440', 'fc5eb55eda530e852791f25a4fc29348', '11d058603fd6d04fa58ee62d7e074440', 'AI-Machine-learning-Deep-learning.png', 'image/AI-Machine-learning-Deep-learning.png', 'AI-Machine-learning-Deep-learning.png', 1, 'publishing_company'),
('bae4778e2eed5f6a617dd41d89759716', '85eae759490ff9c24862f70d0310e1c9', 'bae4778e2eed5f6a617dd41d89759716', 'AI-Machine-learning-Deep-learning.png', 'image/AI-Machine-learning-Deep-learning.png', 'AI-Machine-learning-Deep-learning.png', 1, 'publishing_company'),
('ac813f868f38cdca8c8d2c288140d6c4', '83606ccd7b349f1225c1c0fa5b21fa1c', 'ac813f868f38cdca8c8d2c288140d6c4', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 0, 'vouncher'),
('156df0e0c5e047866e97ede2679bce60', '83606ccd7b349f1225c1c0fa5b21fa1c', '156df0e0c5e047866e97ede2679bce60', 'icon.png', 'image/icon.png', 'icon.png', 1, 'vouncher'),
('3a51414d9242c38c650e41a7b7910f0a', '1092af7d7d2eab4fc36f4bf6e85b5fd3', '3a51414d9242c38c650e41a7b7910f0a', 'icon.png', 'image/icon.png', 'icon.png', 1, 'product'),
('ea97ec0e013565275dd9e3c9f558203b', 'a12', 'ea97ec0e013565275dd9e3c9f558203b', 'icon.png', 'image/icon.png', 'icon.png', 1, 'user');

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
('c6e3fdd5fd8d80ebbe116eb75e55fd28', '85eae759490ff9c24862f70d0310e1c9', 'test 09101', '', 0, 0, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', '0000-00-00', 0),
('d4af35cabca83d28e5ac84f37a8df430', 'fc5eb55eda530e852791f25a4fc29348', 'demo', '', 0, 0, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', '2021-11-19', 60),
('846d1bb4c1b20c62566f1182d5ce3bb7', '85eae759490ff9c24862f70d0310e1c9', 'sadasjdnjas', '32424', 34234, 343, '6a9c4cd671a51f539636b08ab8f40679', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>demo test type 1</p>\r\n</body>\r\n</html>\r\n', '2021-11-19', 23),
('3a9141131886045ed69aa295e0c6a8ce', '85eae759490ff9c24862f70d0310e1c9', 'sách trung cấp', 'abc', 643856, 6437, 'b1d3c540ce9400dda0d13ef9cb22f4cb', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>ewrhwe</p>\r\n\r\n<p>sdfsdfsdg</p>\r\n\r\n<p>sdfdsf</p>\r\n\r\n<ul>\r\n	<li>ầ</li>\r\n	<li>ầ</li>\r\n	<li>&acirc;f</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>\r\n', '1995-06-12', 435),
('1092af7d7d2eab4fc36f4bf6e85b5fd3', '85eae759490ff9c24862f70d0310e1c9', 'sagdkjasdh', 'ádas', 270000, 0, '6a9c4cd671a51f539636b08ab8f40679', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>&aacute;vsavd<br />\r\ns</p>\r\n\r\n<p>adasd</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&aacute;d</p>\r\n</body>\r\n</html>\r\n', '2021-11-19', 6),
('eff84e9fc1f6673aa9946fb412b6afe8', '85eae759490ff9c24862f70d0310e1c9', 'ajdasgd', '', 20000, 6667, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', '2021-11-18', 67),
('dfce8ef1dd950c95884d1538318a5839', '', 'dsfsdf', '', 0, 0, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', '0000-00-00', 0),
('ca58b7a3f9105901c5c8c94030ec3a39', '', '354234234', '', 0, 0, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', '0000-00-00', 0),
('9f105f30f55d8b0a19c3c017965f9ee4', '', '53453dfsfsdf', '', 0, 0, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', '0000-00-00', 0);

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

--
-- Đang đổ dữ liệu cho bảng `tbl_address_shipping`
--

INSERT INTO `tbl_address_shipping` (`id_address`, `id_user`, `name`, `phone`, `diachi`, `phuong`, `quan`, `tinh`, `is_defaul`) VALUES
('e580407d2e16e9aed369c8fb0f2bd2b2', 'a12', 'huy nguyễn', '3264872347', 'sdbdshfkjsdh', 'đậu yên', 'trung đô', 'Vinh', 0),
('157e3476e92f08f7952f74f1439e591f', 'a12', 'huy nguyễn', '0982865948', 'đâsdas', 'đậu yên', 'trung đô', 'Vinh', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_add_vouncher`
--

CREATE TABLE `tbl_add_vouncher` (
  `id` text COLLATE utf8_vietnamese_ci NOT NULL,
  `id_vouncher` text COLLATE utf8_vietnamese_ci NOT NULL,
  `id_use` text COLLATE utf8_vietnamese_ci NOT NULL,
  `table_name` text COLLATE utf8_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_add_vouncher`
--

INSERT INTO `tbl_add_vouncher` (`id`, `id_vouncher`, `id_use`, `table_name`, `status`) VALUES
('3a2023a8f1b6e07a7ede5a1369e0fe94', '83606ccd7b349f1225c1c0fa5b21fa1c', 'a1236', 'voucher_to_user', 1),
('117c95d409c6147bb056b21e0c52345d', '2642f898af732f2468ff0da3a553336c', 'a1236', 'voucher_to_user', 1),
('3381e16de4f67a9266d84c883208dcbf', '83606ccd7b349f1225c1c0fa5b21fa1c', 'a12', 'voucher_to_user', 1),
('8ce05aeef0dac8f345dd096a7b67f67d', '2642f898af732f2468ff0da3a553336c', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', 'voucher_to_user', 1),
('e2b3267cdb9b8a4b6515446e458daddb', '83606ccd7b349f1225c1c0fa5b21fa1c', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', 'voucher_to_user', 1),
('8a373d30028990cc0e19b88883578e84', '2642f898af732f2468ff0da3a553336c', 'f3c3d5b89486ec348dc1f7016aaea02f', 'voucher_to_user', 1),
('f4ab35232c51e2ca1b6bf25531b276ef', '2642f898af732f2468ff0da3a553336c', 'a7efed2e317b37131ef42fc62a119ab4', 'voucher_to_user', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `user_id` text COLLATE utf8_vietnamese_ci NOT NULL,
  `product_id` text COLLATE utf8_vietnamese_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

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
('b1d3c540ce9400dda0d13ef9cb22f4cb', 'trung cấp', '', '547b5f5767fc02b92c97dd13714cccda'),
('abc898d98db71bd8e3e2ddff3765b62d', 'sách lớp 3', 'dfsdf', '2a680230fb6184ac6a3090f803f85968'),
('136f9e5f6d390de8b04d585b67331a3e', 'toán lớp 1', 'demo', '6a9c4cd671a51f539636b08ab8f40679');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` text NOT NULL,
  `id_user` text NOT NULL,
  `id_address` text NOT NULL,
  `description` text NOT NULL,
  `amount` int(11) NOT NULL,
  `status` text NOT NULL,
  `status_payment` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_user`, `id_address`, `description`, `amount`, `status`, `status_payment`, `date_added`) VALUES
('b8bc756d33a22fdccc263feaae9ffce1', 'a12', '157e3476e92f08f7952f74f1439e591f', '', 613435, 'Đang giao hàng', 'Chưa thanh toán', '2021-11-28');

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

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`id_order_detail`, `id_product`, `description`, `price`, `quantity`, `total_price`) VALUES
('4c73d71e76350dfe2b7630ff0d41cd5b', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '', 0, 1, 0),
('7e671e359bb1053c65acd1f80c98782f', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 343435, 1, 686870),
('7915da40790bf672cca0a9785f6697a1', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 343435, 1, 343435),
('3d87383e54b6afe1792fce1da3c4acca', 'eff84e9fc1f6673aa9946fb412b6afe8', '', 20000, 2, 40000),
('b8bc756d33a22fdccc263feaae9ffce1', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 343435, 1, 343435),
('b8bc756d33a22fdccc263feaae9ffce1', '1092af7d7d2eab4fc36f4bf6e85b5fd3', '', 270000, 1, 270000),
('3f55029b665c2e66aefb1f4a1f99adc1', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 343435, 1, 343435),
('ac696c89b3cd4e4269495b3ae5be68fd', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 343435, 1, 343435);

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
('85eae759490ff9c24862f70d0310e1c9', 'NXB tuổi trẻ', '<html>\r\n<head>\r\n</head>\r\n<body></body>\r\n</html>\r\n<title></title>\r\n<p>demo 112 333 444</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0987654321', 'hjhk shdkhsj sdhfksdh', 'sdkhhj@hgdf.df'),
('fc5eb55eda530e852791f25a4fc29348', 'rrr', '<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>value=&quot;</p>\r\n</body>\r\n</html>\r\n<title></title>\r\n<p>rrr</p>\r\n\r\n<p>&quot;</p>\r\n', 'rrrrr', 'rrrr', 'rrr@ddd.dd'),
('f744122a4e0c53c17af6ccf82a5e1d62', 'Nhà xuất bản tuổi trẻ', '<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>value=&quot;</p>\r\n</body>\r\n</html>\r\n<title></title>\r\n<p>sdsfsd</p>\r\n\r\n<p>&quot;</p>\r\n', 'ưdqeqwe', 'qưeqw', 'wqewq@sds.dsfs'),
('13154165eeaffd9256d4d368f8b5e7d1', 'dsdsad', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>ưeqw</p>\r\n</body>\r\n</html>\r\n', '342342', '324234', '324234@dsfsdf.dsfsd');

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
('a1236', 'a1', 'tam', 'nu', 'avf.email', '09115689785', '1998-02-26', 'admin', '25d55ad283aa400af464c76d713c07ad', '6ab0bc6a8b780c92bf5e561de30e64f3'),
('a12', 'a2', 'huynguyen', 'nam', 'xbcbsdbsab@sdfjs.dsfhsd', '623429837489', '2021-11-21', 'a', '25d55ad283aa400af464c76d713c07ad', '3713acf106414deb431ee5def08614a6');

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

--
-- Đang đổ dữ liệu cho bảng `tbl_vouncher`
--

INSERT INTO `tbl_vouncher` (`id_vouncher`, `name`, `description`, `code`, `sell`, `date_start`, `date_end`) VALUES
('83606ccd7b349f1225c1c0fa5b21fa1c', '33', '44', 'ghtyrt', '33', '2021-11-26', '2021-12-23'),
('2642f898af732f2468ff0da3a553336c', 'sadasdasdas', 'ádas', 'ádasdasd', '4753', '2021-11-26', '2021-12-23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
