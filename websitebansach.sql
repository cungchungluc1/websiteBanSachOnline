-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2021 lúc 03:34 PM
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
('xc11', 'h12', 'goicuon', 'xc', 23000, 2563, 'c12', '2020-02-03', 'fgh'),
('fsdd', 'tryr5t', 'gtrgtr', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>trtr</p>\r\n</body>\r\n</html>\r\n', 0, 0, 'Choose...', '2012-02-05', ''),
('fsdd', 'rtf', 'an', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>rgrefdrrrfre</p>\r\n</body>\r\n</html>\r\n', 225, 12, 'Choose...', '2012-02-05', ''),
('fsdd', 'frf', 'frfr', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>chung</p>\r\n</body>\r\n</html>\r\n', 4516, 12, 'Choose...', '2012-02-05', ''),
('fsdd', 'ctytn', 'hang', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>abc</p>\r\n</body>\r\n</html>\r\n', 2385, 13, 'gh1', '2012-02-05', ''),
('fsdd', '', 'hyu', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>fdsfsd</p>\r\n</body>\r\n</html>\r\n', 0, 0, '', '2012-02-05', ''),
('207e9f9f0183df30854d73acac1b4103', 'sdfsd', 'dfd', 'fgdfgdfgd            ', 23, 23, 'gh1', '2012-02-05', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>fgdfgdfg</p>\r\n</body>\r\n</html>\r\n'),
('5cb198c0c2a7138854692415ba742d1e', 'huy', 'địa ngục xanh', 'demo585', 345566, 20000, 'fyuuyfuyuy', '2012-02-05', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<ul>\r\n	<li>T&ecirc;n Phim:&nbsp;\r\n	<h1><strong>Địa Ngục Xanh</strong></h1>\r\n	</li>\r\n	<li>T&ecirc;n Tiếng Anh:&nbsp;\r\n	<h2><strong>The Green Inferno</strong></h2>\r\n	</li>\r\n	<li>Năm sản xuất:&nbsp;<a href=\"http://hdo.tv/danh-sach/phim-theo-nam/2014.html\" title=\"Phim sản xuất năm 2014\">2014</a></li>\r\n	<li>Thể loại:&nbsp;<strong><a href=\"http://hdo.tv/xem-phim-phieu-luu.html\">Phim Phi&ecirc;u Lưu</a>,&nbsp;<a href=\"http://hdo.tv/xem-phim-kinh-di.html\">Phim Kinh Dị</a></strong></li>\r\n	<li>Quốc gia:&nbsp;<strong><a href=\"http://hdo.tv/quoc-gia-my.html\">Phim Mỹ</a></strong></li>\r\n	<li>Thời lượng: 100 Ph&uacute;t</li>\r\n	<li>Đạo diễn:&nbsp;<a href=\"http://hdo.tv/phim-eli-roth.html\">Eli Roth</a></li>\r\n	<li><img src=\"http://static.hdo.tv/template/frontend/images/imdb.png\" />&nbsp;5.7</li>\r\n</ul>\r\n\r\n<p>8.8</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Của bạn:</p>\r\n\r\n<p>&nbsp;&nbsp;</p>\r\n\r\n<p>0/10</p>\r\n\r\n<p>Đ&aacute;nh gi&aacute;&nbsp;<strong>8.8</strong>&nbsp;từ&nbsp;21&nbsp;th&agrave;nh vi&ecirc;n</p>\r\n\r\n<p><strong>Phim Địa Ngục Xanh -&nbsp;The Green Inferno&nbsp;(2013)</strong>&nbsp;xoay quanh một&nbsp;nh&oacute;m sinh vi&ecirc;n t&igrave;nh nguyện c&ugrave;ng nhau&nbsp;tới v&ugrave;ng Amazon để cứu gi&uacute;p một bộ lạc đang c&oacute; nguy cơ bị x&oacute;a sổ. Nhưng thật kh&ocirc;ng may l&agrave; chiếc m&aacute;y bay chở họ gặp tai nạn v&agrave;&nbsp;rơi xuống rừng. Ch&iacute;nh bộ lạc m&agrave; nh&oacute;m sinh vi&ecirc;n đang muốn cứu gi&uacute;p lại đưa họ tới những trải nghiệm kinh ho&agrave;ng. Phim sẽ diễn biến ra sao, mời c&aacute;c bạn c&ugrave;ng theo d&otilde;i.</p>\r\n</body>\r\n</html>\r\n'),
('d6a8ccd49b82996c66326354778c126f', 'huy', 'địa ngục xanh', 'demo', 345566, 20000, '10516a889e1811d1224b0565f85d83b1', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<ul>\r\n	<li>T&ecirc;n Phim:&nbsp;\r\n	<h1><strong>Địa Ngục Xanh</strong></h1>\r\n	</li>\r\n	<li>T&ecirc;n Tiếng Anh:&nbsp;\r\n	<h2><strong>The Green Inferno</strong></h2>\r\n	</li>\r\n	<li>Năm sản xuất:&nbsp;<a href=\"http://hdo.tv/danh-sach/phim-theo-nam/2014.html\" title=\"Phim sản xuất năm 2014\">2014</a></li>\r\n	<li>Thể loại:&nbsp;<strong><a href=\"http://hdo.tv/xem-phim-phieu-luu.html\">Phim Phi&ecirc;u Lưu</a>,&nbsp;<a href=\"http://hdo.tv/xem-phim-kinh-di.html\">Phim Kinh Dị</a></strong></li>\r\n	<li>Quốc gia:&nbsp;<strong><a href=\"http://hdo.tv/quoc-gia-my.html\">Phim Mỹ</a></strong></li>\r\n	<li>Thời lượng: 100 Ph&uacute;t</li>\r\n	<li>Đạo diễn:&nbsp;<a href=\"http://hdo.tv/phim-eli-roth.html\">Eli Roth</a></li>\r\n	<li><img src=\"http://static.hdo.tv/template/frontend/images/imdb.png\" />&nbsp;5.7</li>\r\n</ul>\r\n\r\n<p>8.8</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Của bạn:</p>\r\n\r\n<p>&nbsp;&nbsp;</p>\r\n\r\n<p>0/10</p>\r\n\r\n<p>Đ&aacute;nh gi&aacute;&nbsp;<strong>8.8</strong>&nbsp;từ&nbsp;21&nbsp;th&agrave;nh vi&ecirc;n</p>\r\n\r\n<p><strong>Phim Địa Ngục Xanh -&nbsp;The Green Inferno&nbsp;(2013)</strong>&nbsp;xoay quanh một&nbsp;nh&oacute;m sinh vi&ecirc;n t&igrave;nh nguyện c&ugrave;ng nhau&nbsp;tới v&ugrave;ng Amazon để cứu gi&uacute;p một bộ lạc đang c&oacute; nguy cơ bị x&oacute;a sổ. Nhưng thật kh&ocirc;ng may l&agrave; chiếc m&aacute;y bay chở họ gặp tai nạn v&agrave;&nbsp;rơi xuống rừng. Ch&iacute;nh bộ lạc m&agrave; nh&oacute;m sinh vi&ecirc;n đang muốn cứu gi&uacute;p lại đưa họ tới những trải nghiệm kinh ho&agrave;ng. Phim sẽ diễn biến ra sao, mời c&aacute;c bạn c&ugrave;ng theo d&otilde;i.</p>\r\n</body>\r\n</html>\r\n'),
('fa65a01b0859a6dbce44ffe74ae87e12', 'huy', 'địa ngục xanh', 'demo', 345566, 20000, 'fyuuyfuyuy', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<ul>\r\n	<li>T&ecirc;n Phim:&nbsp;\r\n	<h1><strong>Địa Ngục Xanh</strong></h1>\r\n	</li>\r\n	<li>T&ecirc;n Tiếng Anh:&nbsp;\r\n	<h2><strong>The Green Inferno</strong></h2>\r\n	</li>\r\n	<li>Năm sản xuất:&nbsp;<a href=\"http://hdo.tv/danh-sach/phim-theo-nam/2014.html\" title=\"Phim sản xuất năm 2014\">2014</a></li>\r\n	<li>Thể loại:&nbsp;<strong><a href=\"http://hdo.tv/xem-phim-phieu-luu.html\">Phim Phi&ecirc;u Lưu</a>,&nbsp;<a href=\"http://hdo.tv/xem-phim-kinh-di.html\">Phim Kinh Dị</a></strong></li>\r\n	<li>Quốc gia:&nbsp;<strong><a href=\"http://hdo.tv/quoc-gia-my.html\">Phim Mỹ</a></strong></li>\r\n	<li>Thời lượng: 100 Ph&uacute;t</li>\r\n	<li>Đạo diễn:&nbsp;<a href=\"http://hdo.tv/phim-eli-roth.html\">Eli Roth</a></li>\r\n	<li><img src=\"http://static.hdo.tv/template/frontend/images/imdb.png\" />&nbsp;5.7</li>\r\n</ul>\r\n\r\n<p>8.8</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Của bạn:</p>\r\n\r\n<p>&nbsp;&nbsp;</p>\r\n\r\n<p>0/10</p>\r\n\r\n<p>Đ&aacute;nh gi&aacute;&nbsp;<strong>8.8</strong>&nbsp;từ&nbsp;21&nbsp;th&agrave;nh vi&ecirc;n</p>\r\n\r\n<p><strong>Phim Địa Ngục Xanh -&nbsp;The Green Inferno&nbsp;(2013)</strong>&nbsp;xoay quanh một&nbsp;nh&oacute;m sinh vi&ecirc;n t&igrave;nh nguyện c&ugrave;ng nhau&nbsp;tới v&ugrave;ng Amazon để cứu gi&uacute;p một bộ lạc đang c&oacute; nguy cơ bị x&oacute;a sổ. Nhưng thật kh&ocirc;ng may l&agrave; chiếc m&aacute;y bay chở họ gặp tai nạn v&agrave;&nbsp;rơi xuống rừng. Ch&iacute;nh bộ lạc m&agrave; nh&oacute;m sinh vi&ecirc;n đang muốn cứu gi&uacute;p lại đưa họ tới những trải nghiệm kinh ho&agrave;ng. Phim sẽ diễn biến ra sao, mời c&aacute;c bạn c&ugrave;ng theo d&otilde;i.</p>\r\n</body>\r\n</html>\r\n'),
('f1bcca215e8bcba5e2d3c0d67ffbef38', 'huy', 'địa ngục xanh', 'demo', 345566, 20000, 'fyuuyfuyuy', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<ul>\r\n	<li>T&ecirc;n Phim:&nbsp;\r\n	<h1><strong>Địa Ngục Xanh</strong></h1>\r\n	</li>\r\n	<li>T&ecirc;n Tiếng Anh:&nbsp;\r\n	<h2><strong>The Green Inferno</strong></h2>\r\n	</li>\r\n	<li>Năm sản xuất:&nbsp;<a href=\"http://hdo.tv/danh-sach/phim-theo-nam/2014.html\" title=\"Phim sản xuất năm 2014\">2014</a></li>\r\n	<li>Thể loại:&nbsp;<strong><a href=\"http://hdo.tv/xem-phim-phieu-luu.html\">Phim Phi&ecirc;u Lưu</a>,&nbsp;<a href=\"http://hdo.tv/xem-phim-kinh-di.html\">Phim Kinh Dị</a></strong></li>\r\n	<li>Quốc gia:&nbsp;<strong><a href=\"http://hdo.tv/quoc-gia-my.html\">Phim Mỹ</a></strong></li>\r\n	<li>Thời lượng: 100 Ph&uacute;t</li>\r\n	<li>Đạo diễn:&nbsp;<a href=\"http://hdo.tv/phim-eli-roth.html\">Eli Roth</a></li>\r\n	<li><img src=\"http://static.hdo.tv/template/frontend/images/imdb.png\" />&nbsp;5.7</li>\r\n</ul>\r\n\r\n<p>8.8</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Của bạn:</p>\r\n\r\n<p>&nbsp;&nbsp;</p>\r\n\r\n<p>0/10</p>\r\n\r\n<p>Đ&aacute;nh gi&aacute;&nbsp;<strong>8.8</strong>&nbsp;từ&nbsp;21&nbsp;th&agrave;nh vi&ecirc;n</p>\r\n\r\n<p><strong>Phim Địa Ngục Xanh -&nbsp;The Green Inferno&nbsp;(2013)</strong>&nbsp;xoay quanh một&nbsp;nh&oacute;m sinh vi&ecirc;n t&igrave;nh nguyện c&ugrave;ng nhau&nbsp;tới v&ugrave;ng Amazon để cứu gi&uacute;p một bộ lạc đang c&oacute; nguy cơ bị x&oacute;a sổ. Nhưng thật kh&ocirc;ng may l&agrave; chiếc m&aacute;y bay chở họ gặp tai nạn v&agrave;&nbsp;rơi xuống rừng. Ch&iacute;nh bộ lạc m&agrave; nh&oacute;m sinh vi&ecirc;n đang muốn cứu gi&uacute;p lại đưa họ tới những trải nghiệm kinh ho&agrave;ng. Phim sẽ diễn biến ra sao, mời c&aacute;c bạn c&ugrave;ng theo d&otilde;i.</p>\r\n</body>\r\n</html>\r\n'),
('7960e674948ef56b60f07d3a00244bc3', 'text 111111', 'địa ngục xanh', 'demo', 345566, 20000, 'fyuuyfuyuy', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<ul>\r\n	<li>T&ecirc;n Phim:&nbsp;\r\n	<h1><strong>Địa Ngục Xanh</strong></h1>\r\n	</li>\r\n	<li>T&ecirc;n Tiếng Anh:&nbsp;\r\n	<h2><strong>The Green Inferno</strong></h2>\r\n	</li>\r\n	<li>Năm sản xuất:&nbsp;<a href=\"http://hdo.tv/danh-sach/phim-theo-nam/2014.html\" title=\"Phim sản xuất năm 2014\">2014</a></li>\r\n	<li>Thể loại:&nbsp;<strong><a href=\"http://hdo.tv/xem-phim-phieu-luu.html\">Phim Phi&ecirc;u Lưu</a>,&nbsp;<a href=\"http://hdo.tv/xem-phim-kinh-di.html\">Phim Kinh Dị</a></strong></li>\r\n	<li>Quốc gia:&nbsp;<strong><a href=\"http://hdo.tv/quoc-gia-my.html\">Phim Mỹ</a></strong></li>\r\n	<li>Thời lượng: 100 Ph&uacute;t</li>\r\n	<li>Đạo diễn:&nbsp;<a href=\"http://hdo.tv/phim-eli-roth.html\">Eli Roth</a></li>\r\n	<li><img src=\"http://static.hdo.tv/template/frontend/images/imdb.png\" />&nbsp;5.7</li>\r\n</ul>\r\n\r\n<p>8.8</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Của bạn:</p>\r\n\r\n<p>&nbsp;&nbsp;</p>\r\n\r\n<p>0/10</p>\r\n\r\n<p>Đ&aacute;nh gi&aacute;&nbsp;<strong>8.8</strong>&nbsp;từ&nbsp;21&nbsp;th&agrave;nh vi&ecirc;n</p>\r\n\r\n<p><strong>Phim Địa Ngục Xanh -&nbsp;The Green Inferno&nbsp;(2013)</strong>&nbsp;xoay quanh một&nbsp;nh&oacute;m sinh vi&ecirc;n t&igrave;nh nguyện c&ugrave;ng nhau&nbsp;tới v&ugrave;ng Amazon để cứu gi&uacute;p một bộ lạc đang c&oacute; nguy cơ bị x&oacute;a sổ. Nhưng thật kh&ocirc;ng may l&agrave; chiếc m&aacute;y bay chở họ gặp tai nạn v&agrave;&nbsp;rơi xuống rừng. Ch&iacute;nh bộ lạc m&agrave; nh&oacute;m sinh vi&ecirc;n đang muốn cứu gi&uacute;p lại đưa họ tới những trải nghiệm kinh ho&agrave;ng. Phim sẽ diễn biến ra sao, mời c&aacute;c bạn c&ugrave;ng theo d&otilde;i.</p>\r\n</body>\r\n</html>\r\n');

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
('gh1', 'Tiếng Anh', 'Những quyển sách ngôn ngữ anh', '10516a889e1811d1224b0565f85d83b1'),
('fyuuyfuyuy', 'vfdgtr', '898987979gtrgtr', ''),
('10aec74fa9b9f301338d8832f9d765be', 'fhfghgfhtyrtytr', 'demo', 'fyuuyfuyuy'),
('10516a889e1811d1224b0565f85d83b1', 'sách giáo khoa', 'sách giáo khoa', ''),
('e1de2af8f80bb6d94efc2bd6c5121903', 'lớp 10', 'sách giáo khoa lớp 10', '10516a889e1811d1224b0565f85d83b1'),
('d97d2f2b7f383b1011bacc4a3ecf4a25', 'lớp 11', '', '10516a889e1811d1224b0565f85d83b1');

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
  `password` text NOT NULL,
  `codeSession` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_role`, `name`, `sex`, `email`, `phone`, `birthday`, `username`, `password`, `codeSession`) VALUES
('a1236', 'a1', 'tam', 'nu', 'avf.email', '09115689785', '1998-02-26', 'ahz', '12345678', ''),
('a12', 'a2', 'Hang', 'nu', 'abc12.@gmail.com', '01356897402', '1999-05-01', 'abc', '12345678', '');

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
