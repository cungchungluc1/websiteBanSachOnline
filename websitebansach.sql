-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 02:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitebansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` text DEFAULT NULL,
  `id_use` text DEFAULT NULL,
  `id_image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `alt` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `tbl_table` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `id_use`, `id_image`, `name`, `url`, `alt`, `status`, `tbl_table`) VALUES
('e5e21d1defded2955f12ff1af3047d1b', 'a7efed2e317b37131ef42fc62a119ab4', 'e5e21d1defded2955f12ff1af3047d1b', '', 'image/', '', 0, ''),
('de2dc86a603128695d627fa200f8cf26', 'bc59440df94d7d16b128cfabab0a3360', 'de2dc86a603128695d627fa200f8cf26', '', 'image/', '', 0, ''),
('bdb0c1c19943cf7b4fd72857c564d70f', 'fc5eb55eda530e852791f25a4fc29348', 'bdb0c1c19943cf7b4fd72857c564d70f', 'rrr', 'image/', NULL, 0, ''),
('9c14ade594ec15799bd459970aa1396c', '85eae759490ff9c24862f70d0310e1c9', '9c14ade594ec15799bd459970aa1396c', 'NXB tuổi trẻ', 'image/', NULL, 0, ''),
('3febfa43564603475c68cb3f360a320f', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '3febfa43564603475c68cb3f360a320f', '', 'image/', '', 0, ''),
('471ec5185b3f195baef1d1a1f4052a6a', '846d1bb4c1b20c62566f1182d5ce3bb7', '471ec5185b3f195baef1d1a1f4052a6a', '', 'image/', '', 0, ''),
('e5b24fae2b203040efb2334f16b2b9e0', 'd4af35cabca83d28e5ac84f37a8df430', 'e5b24fae2b203040efb2334f16b2b9e0', '', 'image/', '', 0, ''),
('354cd09bd0af9ac8e6a463f1580e99ba', '311f1f63279318baade6883d3eb57983', '354cd09bd0af9ac8e6a463f1580e99ba', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 0, ''),
('9786ab35eb98a46e04d977de51303aea', 'f3c3d5b89486ec348dc1f7016aaea02f', '9786ab35eb98a46e04d977de51303aea', 'cha15843577768538.png', 'image/cha15843577768538.png', 'cha15843577768538.png', 0, ''),
('061640e43d84d60a97e83c6089892919', '3a9141131886045ed69aa295e0c6a8ce', '061640e43d84d60a97e83c6089892919', 'cha15843577768538.png', 'image/cha15843577768538.png', 'cha15843577768538.png', 0, 'product'),
('23ad68817427f3605fcb0cb5c0962913', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '23ad68817427f3605fcb0cb5c0962913', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 0, 'product'),
('9b3b2522f6a2725a07b3ebe437a0e1fe', 'a12', '9b3b2522f6a2725a07b3ebe437a0e1fe', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 0, 'user'),
('5d33edc4a3935e1602eaa94cb3a6ba09', 'a12', '5d33edc4a3935e1602eaa94cb3a6ba09', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 0, 'user'),
('4a407ba4bd15d43eea46ba59753bae6a', 'a12', '4a407ba4bd15d43eea46ba59753bae6a', 'ttt.jpg', 'image/ttt.jpg', 'ttt.jpg', 0, 'user'),
('1b0855735e7ede396208f556d8e7be4d', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '1b0855735e7ede396208f556d8e7be4d', 'AI-Machine-learning-Deep-learning (2).png', 'image/AI-Machine-learning-Deep-learning (2).png', 'AI-Machine-learning-Deep-learning (2).png', 0, 'product'),
('11d058603fd6d04fa58ee62d7e074440', 'fc5eb55eda530e852791f25a4fc29348', '11d058603fd6d04fa58ee62d7e074440', 'AI-Machine-learning-Deep-learning.png', 'image/AI-Machine-learning-Deep-learning.png', 'AI-Machine-learning-Deep-learning.png', 0, 'publishing_company'),
('bae4778e2eed5f6a617dd41d89759716', '85eae759490ff9c24862f70d0310e1c9', 'bae4778e2eed5f6a617dd41d89759716', 'AI-Machine-learning-Deep-learning.png', 'image/AI-Machine-learning-Deep-learning.png', 'AI-Machine-learning-Deep-learning.png', 0, 'publishing_company'),
('ac813f868f38cdca8c8d2c288140d6c4', '83606ccd7b349f1225c1c0fa5b21fa1c', 'ac813f868f38cdca8c8d2c288140d6c4', '100040855_547595315833303_99017052215312384_n (2).jpg', 'image/100040855_547595315833303_99017052215312384_n (2).jpg', '100040855_547595315833303_99017052215312384_n (2).jpg', 0, 'vouncher'),
('156df0e0c5e047866e97ede2679bce60', '83606ccd7b349f1225c1c0fa5b21fa1c', '156df0e0c5e047866e97ede2679bce60', 'icon.png', 'image/icon.png', 'icon.png', 1, 'vouncher'),
('3a51414d9242c38c650e41a7b7910f0a', '1092af7d7d2eab4fc36f4bf6e85b5fd3', '3a51414d9242c38c650e41a7b7910f0a', 'icon.png', 'image/icon.png', 'icon.png', 0, 'product'),
('ea97ec0e013565275dd9e3c9f558203b', 'a12', 'ea97ec0e013565275dd9e3c9f558203b', 'icon.png', 'image/icon.png', 'icon.png', 1, 'user'),
('e01425d04ab748d0db25bb5d7d36a400', 'c4177d1a0ffd08e79166a66324cbf2bc', 'e01425d04ab748d0db25bb5d7d36a400', '61iycLXkOJS._AC_SL1080_.jpg', 'image/61iycLXkOJS._AC_SL1080_.jpg', '61iycLXkOJS._AC_SL1080_.jpg', 1, 'vouncher'),
('a5cb5def1776849c897cd7b54f3aeafa', '85eae759490ff9c24862f70d0310e1c9', 'a5cb5def1776849c897cd7b54f3aeafa', 'download.png', 'image/download.png', 'download.png', 1, 'publishing_company'),
('5e296eb2064f1517ff106535226e73ac', 'f744122a4e0c53c17af6ccf82a5e1d62', '5e296eb2064f1517ff106535226e73ac', 'logo-1584088346.jpeg', 'image/logo-1584088346.jpeg', 'logo-1584088346.jpeg', 1, 'publishing_company'),
('926eeadb343947022b34c64a6d5006d6', '13154165eeaffd9256d4d368f8b5e7d1', '926eeadb343947022b34c64a6d5006d6', 'Logo_nxb_Kim_Đồng.png', 'image/Logo_nxb_Kim_Đồng.png', 'Logo_nxb_Kim_Đồng.png', 1, 'publishing_company'),
('b817ea63d0e53312155c31ecff0e7070', 'fc5eb55eda530e852791f25a4fc29348', 'b817ea63d0e53312155c31ecff0e7070', 'logo_nxb_thanhnien.jpg', 'image/logo_nxb_thanhnien.jpg', 'logo_nxb_thanhnien.jpg', 0, 'publishing_company'),
('32619dc17701a87a2ab5d8dc409a75e7', 'a7efed2e317b37131ef42fc62a119ab4', '32619dc17701a87a2ab5d8dc409a75e7', 'e27d30a15fd77db963dbd908dd2cb65e.jpg', 'image/e27d30a15fd77db963dbd908dd2cb65e.jpg', 'e27d30a15fd77db963dbd908dd2cb65e.jpg', 0, 'product'),
('4fb14afd3d80c25c8253f9e597822932', 'fc5eb55eda530e852791f25a4fc29348', '4fb14afd3d80c25c8253f9e597822932', 'download.jpg', 'image/download.jpg', 'download.jpg', 1, 'publishing_company'),
('7f3ab340cd151d3ccae3574abdae7880', 'bc59440df94d7d16b128cfabab0a3360', '7f3ab340cd151d3ccae3574abdae7880', 'sach-giao-khoa-tieng-viet-lop-1.jpg', 'image/sach-giao-khoa-tieng-viet-lop-1.jpg', 'sach-giao-khoa-tieng-viet-lop-1.jpg', 0, 'product'),
('064e9ff65d2fae1f350210e18ed34e8a', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '064e9ff65d2fae1f350210e18ed34e8a', 'image_2021-12-01_183203.png', 'image/image_2021-12-01_183203.png', 'image_2021-12-01_183203.png', 0, 'product'),
('535cd4625f703fc3fb5a3b77626f28b7', '846d1bb4c1b20c62566f1182d5ce3bb7', '535cd4625f703fc3fb5a3b77626f28b7', 'sach-giao-khoa-toan-lop-1.jpg', 'image/sach-giao-khoa-toan-lop-1.jpg', 'sach-giao-khoa-toan-lop-1.jpg', 1, 'product'),
('cd5e78c744b67f9df1a7f9f72b55bb3c', 'd4af35cabca83d28e5ac84f37a8df430', 'cd5e78c744b67f9df1a7f9f72b55bb3c', 'image_2021-12-01_184156.png', 'image/image_2021-12-01_184156.png', 'image_2021-12-01_184156.png', 0, 'product'),
('e08351ab9a39027f70271ea0016f6865', '311f1f63279318baade6883d3eb57983', 'e08351ab9a39027f70271ea0016f6865', 'image_2021-12-01_184319.png', 'image/image_2021-12-01_184319.png', 'image_2021-12-01_184319.png', 0, 'product'),
('a88f1506e2b6aeb649e40cca25cf5eba', 'f3c3d5b89486ec348dc1f7016aaea02f', 'a88f1506e2b6aeb649e40cca25cf5eba', 'aa7d15f73d122da752782aabcf8e3e5b.jpg', 'image/aa7d15f73d122da752782aabcf8e3e5b.jpg', 'aa7d15f73d122da752782aabcf8e3e5b.jpg', 1, 'product'),
('672883e98b79a93fd60f65faf02c9494', '3a9141131886045ed69aa295e0c6a8ce', '672883e98b79a93fd60f65faf02c9494', '5961525d15874e615912484eb4d8d3cb.jpg', 'image/5961525d15874e615912484eb4d8d3cb.jpg', '5961525d15874e615912484eb4d8d3cb.jpg', 1, 'product'),
('67323caf1a6ccd3bde9133a11d0d3478', 'db862133f3a8521ca9998ce9448f136b', '67323caf1a6ccd3bde9133a11d0d3478', 'a96ae8fa8e8540895c60e185d0f3a8b1.jpg', 'image/a96ae8fa8e8540895c60e185d0f3a8b1.jpg', 'a96ae8fa8e8540895c60e185d0f3a8b1.jpg', 1, 'product'),
('1c1e118bad8e5ba9d33275ed1484a7cf', '1092af7d7d2eab4fc36f4bf6e85b5fd3', '1c1e118bad8e5ba9d33275ed1484a7cf', '23bcd60b85f3f9ad135425099a3800e3.jpg', 'image/23bcd60b85f3f9ad135425099a3800e3.jpg', '23bcd60b85f3f9ad135425099a3800e3.jpg', 1, 'product'),
('47fffb15d57edb8e8acc845f92b3fa40', 'eff84e9fc1f6673aa9946fb412b6afe8', '47fffb15d57edb8e8acc845f92b3fa40', 'sach-giao-khoa-tieng-viet-lop-3.jpg', 'image/sach-giao-khoa-tieng-viet-lop-3.jpg', 'sach-giao-khoa-tieng-viet-lop-3.jpg', 1, 'product'),
('03b7dbcbd387db53259820773ae7eece', 'dfce8ef1dd950c95884d1538318a5839', '03b7dbcbd387db53259820773ae7eece', 'bcbe82a19efce0ce6df8cfd695e6c590.jpg', 'image/bcbe82a19efce0ce6df8cfd695e6c590.jpg', 'bcbe82a19efce0ce6df8cfd695e6c590.jpg', 1, 'product'),
('b4bdccb15c578174f815a555e4de19c0', 'ca58b7a3f9105901c5c8c94030ec3a39', 'b4bdccb15c578174f815a555e4de19c0', '5d03a540e1c0f8110740939bc2cf72c1.jpg', 'image/5d03a540e1c0f8110740939bc2cf72c1.jpg', '5d03a540e1c0f8110740939bc2cf72c1.jpg', 1, 'product'),
('fa75d2a868551688f3c65de892031245', '9f105f30f55d8b0a19c3c017965f9ee4', 'fa75d2a868551688f3c65de892031245', '74623fd86c52a5a90e04ebe20cbd82a4.jpg', 'image/74623fd86c52a5a90e04ebe20cbd82a4.jpg', '74623fd86c52a5a90e04ebe20cbd82a4.jpg', 1, 'product'),
('4b7040498ec8cd5f94191b8ee9434040', '804a7004a82382d17074c9aba4f52a4d', '4b7040498ec8cd5f94191b8ee9434040', '25b1d3a9d7fa753ec1539a71bafa4606.jpg', 'image/25b1d3a9d7fa753ec1539a71bafa4606.jpg', '25b1d3a9d7fa753ec1539a71bafa4606.jpg', 1, 'product'),
('7d5148a6a4264c0559f619b6defdc088', 'a7efed2e317b37131ef42fc62a119ab4', '7d5148a6a4264c0559f619b6defdc088', '5d03a540e1c0f8110740939bc2cf72c1.jpg', 'image/5d03a540e1c0f8110740939bc2cf72c1.jpg', '5d03a540e1c0f8110740939bc2cf72c1.jpg', 0, 'product'),
('28557a876d03f5f0b45b8fceea238b0a', 'bc59440df94d7d16b128cfabab0a3360', '28557a876d03f5f0b45b8fceea238b0a', 'a96ae8fa8e8540895c60e185d0f3a8b1.jpg', 'image/a96ae8fa8e8540895c60e185d0f3a8b1.jpg', 'a96ae8fa8e8540895c60e185d0f3a8b1.jpg', 1, 'product'),
('83382efbcae1792ebe22e18d1d17380b', 'd4af35cabca83d28e5ac84f37a8df430', '83382efbcae1792ebe22e18d1d17380b', 'U1ntitled.png', 'image/U1ntitled.png', 'U1ntitled.png', 1, 'product'),
('9877ddcb5949a0aaf31cfff207a5a0a8', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '9877ddcb5949a0aaf31cfff207a5a0a8', 'Untitled.png', 'image/Untitled.png', 'Untitled.png', 1, 'product'),
('45f6fbc693d9777d542cefc54cded204', '311f1f63279318baade6883d3eb57983', '45f6fbc693d9777d542cefc54cded204', 'Unti5tled.png', 'image/Unti5tled.png', 'Unti5tled.png', 1, 'product'),
('e71c9f1dd217812721c12b9abc4951c8', 'a7efed2e317b37131ef42fc62a119ab4', 'e71c9f1dd217812721c12b9abc4951c8', '5961525d15874e615912484eb4d8d3cb.jpg', 'image/5961525d15874e615912484eb4d8d3cb.jpg', '5961525d15874e615912484eb4d8d3cb.jpg', 1, 'product');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` text DEFAULT NULL,
  `id_publishing_company` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sell` float DEFAULT NULL,
  `id_category` text DEFAULT NULL,
  `description_detail` text DEFAULT NULL,
  `date_publishing` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_publishing_company`, `name`, `description`, `price`, `sell`, `id_category`, `description_detail`, `date_publishing`, `quantity`) VALUES
('f3c3d5b89486ec348dc1f7016aaea02f', '13154165eeaffd9256d4d368f8b5e7d1', 'Truyện Cổ Tích Nổi Tiếng Song Ngữ Việt – Anh', 'Truyện cổ tích', 15000, 30000, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Bộ s&aacute;ch gồm những c&acirc;u chuyện cổ t&iacute;ch nổi tiếng của thế giới được kể bằng hai ng&ocirc;n ngữ tiếng Việt v&agrave; tiếng Anh. Phần dịch tiếng Việt kh&ocirc;ng dịch s&aacute;t từng từ m&agrave; chuyển &yacute; linh hoạt, ph&ugrave; hợp với văn phong tiếng Việt. Phần tiếng Anh ngắn gọn, dễ hiểu sẽ gi&uacute;p c&aacute;c em học ngoại ngữ hiệu quả.</p>\r\n</body>\r\n</html>\r\n', '2012-02-05', 56),
('bc59440df94d7d16b128cfabab0a3360', '13154165eeaffd9256d4d368f8b5e7d1', 'Sách tiếng việt lớp 1', 'Sách Giáo Khoa Tiếng Việt Lớp 1 ', 50000, 100000, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Ph&acirc;n biệt chữ thường, chữ hoa trong c&aacute;ch viết. Với những h&igrave;nh vẽ sinh động, thực tế v&agrave; c&aacute;ch ph&aacute;t &acirc;m ch&iacute;nh x&aacute;c gi&uacute;p c&aacute;c em l&agrave;m quen với m&ocirc;n tiếng việt dễ d&agrave;ng.</p>\r\n\r\n<p>Tiếng việt 1, tập 2, tiếp tục gi&uacute;p c&aacute;c em n&acirc;ng cao bằng c&aacute;c b&agrave;i học vần, c&aacute;c em sẽ được hỗ trợ c&aacute;ch đọc, c&aacute;ch ph&aacute;t &acirc;m bằng giọng đọc chuẩn. Ngo&agrave;i ra c&aacute;c em c&ograve;n được l&agrave;m quen với c&aacute;c h&igrave;nh ảnh mang t&iacute;nh thực tế, x&aacute;c thực, gi&uacute;p c&aacute;c em nhận biết được c&aacute;c sự vật,hiện tượng xung quanh một c&aacute;ch dễ d&agrave;ng.</p>\r\n</body>\r\n</html>\r\n', '2012-02-05', 200),
('a7efed2e317b37131ef42fc62a119ab4', '85eae759490ff9c24862f70d0310e1c9', 'Sách tiếng Hàn tổng hợp', 'Giới thiệu về cuốn Giáo trình tiếng Hàn tổng hợp dành cho người Việt Nam – Sơ cấp 1\r\n', 150000, 200000, '547b5f5767fc02b92c97dd13714cccda', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>2 cuốn s&aacute;ch trong bộ Sơ cấp được x&acirc;y dựng với 30 b&agrave;i kh&oacute;a v&agrave; bảng chữ c&aacute;i. Trong đ&oacute; quyển 1 gồm phần bảng chữ c&aacute;i v&agrave; 15 b&agrave;i đầu. Học hết quyển 1, bạn sẽ học đến quyển sơ cấp 2 với 15 b&agrave;i c&ograve;n lại.</p>\r\n\r\n<p>Cấu tr&uacute;c tổng thể của gi&aacute;o tr&igrave;nh được x&acirc;y dựng theo c&aacute;c chủ đề; mỗi chủ đề được li&ecirc;n kết thống nhất với một hệ thống c&aacute;c từ vựng v&agrave; cấu tr&uacute;c ngữ ph&aacute;p cơ bản, b&agrave;i tập ứng dụng, kỹ năng v&agrave; t&igrave;m hiểu văn h&oacute;a.</p>\r\n\r\n<p>Trong mỗi b&agrave;i học, nội dung học được chia th&agrave;nh c&aacute;c phần như: luyện từ vựng, luyện ngữ ph&aacute;p cơ bản, luyện tập kỹ năng nghe &ndash; n&oacute;i &ndash; đọc &ndash; viết, luyện ph&aacute;t &acirc;m, t&igrave;m hiểu văn h&oacute;a của đất nước H&agrave;n Quốc xinh đẹp. V&agrave; kết th&uacute;c mỗi b&agrave;i đều c&oacute; th&ecirc;m bảng từ mới xuất hiện trong b&agrave;i học.</p>\r\n\r\n<p>Phần cuối của s&aacute;ch, c&aacute;c t&aacute;c giả đưa ra hệ thống từ mới được sắp xếp theo thứ tự của bảng chữ c&aacute;i. Đ&acirc;y l&agrave; những từ kh&ocirc;ng xuất hiện trong phần ngữ ph&aacute;p, từ vựng cơ bản; nhưng lại xuất hiện nhiều ở phần luyện tập của từng b&agrave;i.</p>\r\n</body>\r\n</html>\r\n', '2019-06-05', 50),
('311f1f63279318baade6883d3eb57983', '85eae759490ff9c24862f70d0310e1c9', 'Sách tiếng việt 2', 'Sách Giáo Khoa Tiếng Việt Lớp 2 ', 80000, 125000, 'fd0f9e6a9703a3206cdf3adce91892df', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p><em><strong>S&aacute;ch Gi&aacute;o Khoa Tiếng Việt Lớp 2 tập 1</strong></em>&nbsp;bao gồm :</p>\r\n\r\n<p>&ndash; Chủ điểm 1-2: Em l&agrave; học sinh</p>\r\n\r\n<p>&ndash; Chủ điểm 3-4: Bạn b&egrave;</p>\r\n\r\n<p>&ndash; Chủ điểm 5-6: Trường học</p>\r\n\r\n<p>&ndash; Chủ điểm 7-8: Thầy c&ocirc;</p>\r\n\r\n<p>&ndash; Chủ điểm 9: &Ocirc;n tập</p>\r\n\r\n<p><em><strong>S&aacute;ch Gi&aacute;o Khoa Tiếng Việt Lớp 2 tập 2</strong></em>&nbsp;tiếp tục gi&uacute;p c&aacute;c em r&egrave;n luyện c&aacute;c kĩ năng của m&igrave;nh về phần đọc kể chuyện, luyện từ c&acirc;u, tập l&agrave;m văn v&agrave; ch&iacute;nh tả qua c&aacute;c chủ đề bằng những c&acirc;u chuyện sinh động, gi&uacute;p c&aacute;c em hứng th&uacute; hơn trong việc t&igrave;m hiểu v&agrave; học m&ocirc;n n&agrave;y</p>\r\n\r\n<p>Nội dung s&aacute;ch:</p>\r\n\r\n<p>&ndash; Chủ điểm 19-20: Bốn m&ugrave;a</p>\r\n\r\n<p>&ndash; Chủ điểm 21-22: Chim ch&oacute;c</p>\r\n\r\n<p>&ndash; Chủ điểm 23-24: Mu&ocirc;ng th&uacute;</p>\r\n\r\n<p>&ndash; Chủ điểm 25-26: S&ocirc;ng biển</p>\r\n</body>\r\n</html>\r\n', '2016-10-26', 200),
('c6e3fdd5fd8d80ebbe116eb75e55fd28', '85eae759490ff9c24862f70d0310e1c9', 'Sách tập đánh vần tiếng việt', 'SÁCH - TẬP ĐÁNH VẦN TIẾNG VIỆT PHIÊN BẢN 4.0 CÓ FILE ĐỌC, BÉ KHỞI ĐẦU TẬP VIẾT VÀ BÉ CHINH PHỤC TOÁN HỌC ', 45000, 85000, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Từ mẫu gi&aacute;o l&ecirc;n tiểu học l&agrave; bước tiến quan trọng để b&eacute; bước ch&acirc;n v&agrave;o thế giới tri thức, cũng l&agrave; một bước ngoặt lớn trong cuộc đời c&aacute;c b&eacute;. Ch&iacute;nh v&igrave; vậy, bố mẹ cần quan t&acirc;m v&agrave; đầu tư nhiều hơn trong việc chuẩn bị h&agrave;nh trang để con v&agrave;o lớp 1.</p>\r\n\r\n<p>&nbsp;Nh&agrave; s&aacute;ch Hoa Anh Thảo - Nơi ba mẹ sẽ t&igrave;m thấy những đầu s&aacute;ch tập t&ocirc;, tập viết,&hellip; bổ &iacute;ch d&agrave;nh cho b&eacute; chuẩn bị đến trường. H&atilde;y để Nh&agrave; s&aacute;ch Hoa Anh Thảo đồng h&agrave;nh c&ugrave;ng cha mẹ trong việc chuẩn bị h&agrave;nh trang gi&uacute;p b&eacute; tự tin hơn khi đến lớp.</p>\r\n\r\n<p>TH&Ocirc;NG TIN CHI TIẾT S&aacute;ch - Tập đ&aacute;nh vần tiếng việt phi&ecirc;n bản 4.0 c&oacute; file đọc, b&eacute; khởi đầu tập viết v&agrave; b&eacute; chinh phục to&aacute;n học combo 3 cuốn</p>\r\n\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>\r\n', '2019-01-01', 100),
('d4af35cabca83d28e5ac84f37a8df430', 'f744122a4e0c53c17af6ccf82a5e1d62', 'Đọc Vị Mọi Vấn Đề Của Trẻ', 'Sách Nuôi Dạy Con Của Cha Mẹ Giỏi', 200000, 300000, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p><em>&quot;</em>Trong cuốn s&aacute;ch n&agrave;y, t&ocirc;i muốn gi&uacute;p bạn, xoa dịu nỗi sợ của bạn v&agrave; chỉ cho bạn c&aacute;ch tự tạo cho m&igrave;nh sức mạnh của một người l&agrave;m cha mẹ. T&ocirc;i muốn dạy cho bạn những g&igrave; t&ocirc;i đ&atilde; học được từ c&ocirc;ng việc cả đời th&igrave; thầm với trẻ cũng như trả lời những c&acirc;u hỏi m&agrave; bạn đặt ra cho t&ocirc;i. T&ocirc;i muốn dạy bạn c&aacute;ch nghĩ giống như t&ocirc;i. Tất nhi&ecirc;n, d&ugrave; t&ocirc;i c&oacute; cố gắng liệt k&ecirc; tất cả những vấn đề m&agrave; bạn c&oacute; thể gặp phải th&igrave; mỗi một em b&eacute; v&agrave; mỗi một gia đ&igrave;nh lại c&oacute; một ch&uacute;t kh&aacute;c biệt. V&igrave; thế, khi c&aacute;c &ocirc;ng bố b&agrave; mẹ t&igrave;m đến t&ocirc;i với một vấn đề cụ thể n&agrave;o đ&oacute;, để đ&aacute;nh gi&aacute; xem chuyện g&igrave; đang xảy ra trong ng&ocirc;i nh&agrave; v&agrave; với đứa con sơ sinh hoặc đứa con mới chập chững biết đi của họ, t&ocirc;i lu&ocirc;n hỏi &iacute;t nhất một, nếu kh&ocirc;ng th&igrave; phải một loạt những c&acirc;u hỏi về cả đứa trẻ v&agrave; việc m&agrave; cha mẹ đ&atilde; l&agrave;m để ứng ph&oacute; với t&igrave;nh huống đ&oacute;. Sau đ&oacute;, t&ocirc;i mới c&oacute; thể nghĩ ra kế hoạch h&agrave;nh động ph&ugrave; hợp. Mục ti&ecirc;u của t&ocirc;i l&agrave; gi&uacute;p bạn hiểu được qu&aacute; tr&igrave;nh tư duy v&agrave; h&igrave;nh th&agrave;nh th&oacute;i quen tự đặt c&acirc;u hỏi. Như vậy, bạn sẽ kh&ocirc;ng chỉ l&agrave; người th&igrave; thầm với trẻ, m&agrave; c&ograve;n trở th&agrave;nh một người giải quyết vấn đề xuất sắc - một Qu&yacute; b&agrave; hoặc Qu&yacute; &ocirc;ng vạn năng.</p>\r\n</body>\r\n</html>\r\n', '2020-11-19', 186),
('846d1bb4c1b20c62566f1182d5ce3bb7', '85eae759490ff9c24862f70d0310e1c9', 'Sách Giáo Khoa Toán Lớp 1', 'Sách giáo khoa toán lớp 1', 68000, 105000, '136f9e5f6d390de8b04d585b67331a3e', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p><a href=\"https://metaisach.com/sach-giao-khoa-toan-lop-1/\"><em><strong>S&aacute;ch gi&aacute;o khoa To&aacute;n lớp 1</strong></em></a>, gồm c&aacute;c phần: C&aacute;c số đến 10, h&igrave;nh vu&ocirc;ng, h&igrave;nh tr&ograve;n, h&igrave;nh tam gi&aacute;c. Ph&eacute;p cộng, ph&eacute;p trừ trong phạm vi 10. C&aacute;c số trong phạm vi 100, đo độ d&agrave;i. Ph&eacute;p cộng, ph&eacute;p trừ trong phạm vi 100, đo thời gian.</p>\r\n</body>\r\n</html>\r\n', '2016-01-27', 48),
('3a9141131886045ed69aa295e0c6a8ce', 'f744122a4e0c53c17af6ccf82a5e1d62', 'Sách - Luyện Nghe - Nói Tiếng Hàn Trung Cấp', 'sách trung cấp tiếng hàn', 100000, 6437, 'b1d3c540ce9400dda0d13ef9cb22f4cb', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Mỗi b&agrave;i học bao gồm những phần sau:</p>\r\n\r\n<p>Mở đầu: L&yacute; giải những l&yacute; do tại sao bạn cần phải học chủ đề n&agrave;y</p>\r\n\r\n<p>Hoạt động bổ trợ: Gi&uacute;p người học &ocirc;n lại những g&igrave; đ&atilde; học trong b&agrave;i</p>\r\n\r\n<p>Từ mới: Liệt k&ecirc; một số từ mới xuất hiện trong b&agrave;i nghe.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>\r\n', '2000-09-15', 120),
('1092af7d7d2eab4fc36f4bf6e85b5fd3', '85eae759490ff9c24862f70d0310e1c9', 'Sách toán nâng cao lớp 3', 'Sách: Toán Nâng Cao Và Bồi Dưỡng Học Sinh Giỏi Lớp 3', 70000, 70000, 'abc898d98db71bd8e3e2ddff3765b62d', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>S&aacute;ch: To&aacute;n N&acirc;ng Cao &amp; Bồi Dưỡng Học Sinh Giỏi Lớp 3</p>\r\n\r\n<p>T&aacute;c giả :Nguyễn Bảo Minh - L&ecirc; Yến Ngọc</p>\r\n\r\n<p>NXB: Đại Học Sư Phạm</p>\r\n\r\n<p>K&iacute;ch thước : 17 x 24 cm</p>\r\n\r\n<p>Năm xuất bản : 2016</p>\r\n\r\n<p>Số trang : 132</p>\r\n\r\n<p>Khối lượng : 180 grams</p>\r\n\r\n<p>B&igrave;a : B&igrave;a mềm</p>\r\n\r\n<ul>\r\n</ul>\r\n</body>\r\n</html>\r\n', '2016-10-26', 80),
('eff84e9fc1f6673aa9946fb412b6afe8', '85eae759490ff9c24862f70d0310e1c9', 'Sách tiếng việt lớp 3', 'SGK tiếng việt lớp 3', 80000, 80000, 'abc898d98db71bd8e3e2ddff3765b62d', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p><a href=\"https://metaisach.com/sach-giao-khoa-tieng-viet-lop-3/\"><strong><em>S&aacute;ch Gi&aacute;o Khoa Tiếng Việt Lớp 3</em></strong></a>&nbsp;bao gồm hai tập&nbsp;gi&uacute;p c&aacute;c em r&egrave;n luyện c&aacute;c kĩ năng về phần tập đọc v&agrave; kể chuyện th&ocirc;ng qua giọng đọc chuẩn, th&ecirc;m v&agrave;o cho c&aacute;c em r&egrave;n luyện từ v&agrave; c&acirc;u, ch&iacute;nh tả, tập l&agrave;m văn qua c&aacute;c chủ đề bằng c&aacute;c h&igrave;nh ảnh sinh động mang nhiều &yacute; nghĩa thiết thực trong cuộc sống.</p>\r\n\r\n<p>Bằng những giọng đọc diễn cảm, ch&iacute;nh x&aacute;c, những h&igrave;nh ảnh sinh động, thực tế gi&uacute;p cho c&aacute;c em r&egrave;n luyện được c&aacute;c kiến thức cơ bản: ch&iacute;nh tả, đọc, viết, tập l&agrave;m văn</p>\r\n</body>\r\n</html>\r\n', '2008-10-01', 67),
('dfce8ef1dd950c95884d1538318a5839', '13154165eeaffd9256d4d368f8b5e7d1', 'Kho Tàng Truyện Cổ Tích Việt Nam ', 'Những câu truyện đã nuôi dưỡng bồi đắp tâm hồn, phát huy trí tưởng tượng của biết bao thế hệ thiếu nhi Việt Nam.', 85000, 85000, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Bộ sưu tập truyện cổ t&iacute;ch Việt Nam trọn vẹn v&agrave; đầy đủ nhất l&agrave; bộ s&aacute;ch Kho t&agrave;ng truyện cổ t&iacute;ch Việt Nam, bộ s&aacute;ch đưa ra nhiều kiến giải mới mẻ về truyện cổ t&iacute;ch Việt Nam trong mối tương quan với truyện cổ t&iacute;ch thế giới v&agrave; được sắp xếp theo một hệ thống khoa học, hợp l&yacute;&hellip;</p>\r\n\r\n<p>Kho t&agrave;ng truyện cổ t&iacute;ch Việt Nam, tổng hợp rất nhiều c&acirc;u chuyện được y&ecirc;u th&iacute;ch đặc biệt ph&ugrave; hợp với c&aacute;c bạn nhỏ. Trước khi ngủ, cha mẹ h&atilde;y cho b&eacute; nghe một v&agrave;i c&acirc;u chuyện cổ t&iacute;ch sẽ gi&uacute;p b&eacute; ngủ ngon hơn, ch&igrave;m v&agrave;o thế giới cổ t&iacute;ch với c&aacute;c c&ocirc; c&ocirc;ng ch&uacute;a, ho&agrave;ng tử hay thế giới động vật.</p>\r\n\r\n<p>Với những điều tr&ecirc;n, ch&uacute;ng t&ocirc;i hi vọng &ldquo; kho tang truyện cổ t&iacute;ch Việt Nam&rdquo; vẫn sẽ l&agrave; một m&oacute;n qu&agrave; qu&yacute; gi&aacute; d&agrave;nh tặng cho c&aacute;c em nhỏ cũng như cho những người c&ograve;n y&ecirc;u c&aacute;c c&acirc;u chuyện cổ t&iacute;ch.</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. B&ecirc;n cạnh đ&oacute;, tuỳ v&agrave;o loại sản phẩm, h&igrave;nh thức v&agrave; địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, thuế nhập khẩu (đối với đơn h&agrave;ng giao từ nước ngo&agrave;i c&oacute; gi&aacute; trị tr&ecirc;n 1 triệu đồng).....</p>\r\n</body>\r\n</html>\r\n', '2007-06-28', 85),
('ca58b7a3f9105901c5c8c94030ec3a39', 'fc5eb55eda530e852791f25a4fc29348', 'Tô Màu Phát Triển Trí Não Bộ Cho Bé 1-3 Tuổi ', 'SÁCH TÔ MÀU PHÁT TRIỂN NÃO BỘ', 45000, 45000, '2a680230fb6184ac6a3090f803f85968', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Bố mẹ biết chứ, trẻ dưới 18 th&aacute;ng đ&atilde; c&oacute; khả năng chuyển tải suy nghĩ v&agrave; cảm x&uacute;c bằng h&igrave;nh ảnh c&oacute; m&agrave;u sắc. T&ocirc; m&agrave;u gi&uacute;p trẻ r&egrave;n kỹ năng điều khiển vận động của đ&ocirc;i tay, tăng khả năng quan s&aacute;t, được s&aacute;ng tạo v&agrave; tưởng tượng một c&aacute;ch tự nhi&ecirc;n, được luyện khả năng tập trung v&agrave; ki&ecirc;n tr&igrave;, tăng khả năng thưởng thức c&aacute;i đẹp trong cuộc sống. Với trẻ nhỏ tuổi, học l&agrave; chơi v&agrave; chơi l&agrave; học. Tranh t&ocirc; m&agrave;u ch&iacute;nh l&agrave; những &quot;b&agrave;i học&quot; c&oacute; sức mạnh to lớn với trẻ, bố mẹ ạ!</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. B&ecirc;n cạnh đ&oacute;, tuỳ v&agrave;o loại sản phẩm, h&igrave;nh thức v&agrave; địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, thuế nhập khẩu (đối với đơn h&agrave;ng giao từ nước ngo&agrave;i c&oacute; gi&aacute; trị tr&ecirc;n 1 triệu đồng).....</p>\r\n</body>\r\n</html>\r\n', '2018-06-26', 20),
('9f105f30f55d8b0a19c3c017965f9ee4', 'f744122a4e0c53c17af6ccf82a5e1d62', 'Tự Học Tiếng Hàn Dành Cho Người Mới Bắt Đầu ', 'Tự Học Tiếng Hàn Dành Cho Người Mới Bắt Đầu', 120000, 120000, '547b5f5767fc02b92c97dd13714cccda', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p><strong>Tr&igrave;nh độ người học</strong></p>\r\n\r\n<p>S&aacute;ch được x&acirc;y dựng từ cơ bản d&agrave;nh cho những người chưa từng học qua tiếng H&agrave;n đều c&oacute; thể học được. Cuốn s&aacute;ch được chia th&agrave;nh 2 phần tối ưu cho người tự học:</p>\r\n\r\n<p>Phần 1 - Hướng dẫn ph&aacute;t &acirc;m tiếng H&agrave;n Nguy&ecirc;n &acirc;m, phụ &acirc;m, phụ &acirc;m cuối, quy tắc viết chữ, quy tắc ph&aacute;t &acirc;m. Đ&acirc;y l&agrave; những b&agrave;i học cơ bản nhất v&agrave; được tr&igrave;nh b&agrave;y rất r&otilde; r&agrave;ng, dễ hiểu.</p>\r\n\r\n<p>Phần 2 - Luyện nghe n&oacute;i Hướng dẫn từng mẫu c&acirc;u v&agrave; từ vựng cơ bản cho c&aacute;c chủ đề gần gũi trong cuộc sống như ch&agrave;o hỏi, phương hướng, gi&aacute; cả, thời gian, ng&agrave;y th&aacute;ng, thời tiết, nh&agrave; h&agrave;ng, mua sắm...</p>\r\n</body>\r\n</html>\r\n', '2019-10-02', 70),
('db862133f3a8521ca9998ce9448f136b', '85eae759490ff9c24862f70d0310e1c9', 'Pomath Toán Tư Duy Cho Trẻ Em Lớp 1 - Tập 1', 'Pomath Toán tư duy cho trẻ em lớp 1 - Tập 1', 85000, 85000, '136f9e5f6d390de8b04d585b67331a3e', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Bộ s&aacute;ch POMATH &ndash; To&aacute;n tư duy cho trẻ em được nghi&ecirc;n cứu, ph&aacute;t triển cho đối tượng 4-6 tuổi đ&atilde; nhận được sự đ&aacute;nh gi&aacute; rất cao của c&aacute;c phụ huynh, học sinh cũng như những người l&agrave;m chuy&ecirc;n m&ocirc;n. Tiếp nối th&agrave;nh c&ocirc;ng đ&oacute;, cuốn s&aacute;ch Pomath &ndash; To&aacute;n tư duy cho trẻ em lớp 1 được bi&ecirc;n soạn, nhằm gi&uacute;p học sinh r&egrave;n luyện, ph&aacute;t triển năng lực, đ&aacute;nh thức niềm say m&ecirc; v&agrave; t&igrave;nh y&ecirc;u học tập với m&ocirc;n to&aacute;n.<br />\r\nGiải ph&aacute;p của cuốn s&aacute;ch n&agrave;y ch&iacute;nh l&agrave; c&aacute;c hoạt động học tập được thiết kế theo quy tr&igrave;nh hoạt động 3 bước, n&acirc;ng cao dần về tr&igrave;nh độ nhận thức, nhằm gia tăng cơ hội trải nghiệm dựa v&agrave;o bối cảnh học tập từ phạm tr&ugrave; c&aacute; nh&acirc;n, m&ocirc;n học, khoa học kh&aacute;c v&agrave; thực tế đời sống.<br />\r\nBộ s&aacute;ch gồm 2 tập, tương ứng với 2 kỳ học</p>\r\n</body>\r\n</html>\r\n', '2016-05-26', 50),
('804a7004a82382d17074c9aba4f52a4d', 'fc5eb55eda530e852791f25a4fc29348', 'Sách tiếng hàn sơ cấp', 'Sách học tiếng hàn sơ cấp cấp tốc', 97000, 97000, 'a1863ca8c853a52fd8e68c0721ae14c5', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Dựa tr&ecirc;n phương ph&aacute;p học ng&ocirc;n ngữ như 1 đứa trẻ, cuốn s&aacute;ch đặc biệt ch&uacute; trọng đến yếu tố ph&aacute;t &acirc;m khi bắt đầu học. Mở đầu chương tr&igrave;nh, người học sẽ được giới thiệu về nguồn gốc tiếng H&agrave;n v&agrave; nguy&ecirc;n tắc, đặc điểm bảng chữ c&aacute;i. Tiếp theo, người học bước v&agrave;o từng nh&oacute;m phụ &acirc;m, nguy&ecirc;n &acirc;m trong bảng chữ c&aacute;i th&ocirc;ng qua c&aacute;c hoạt động ghi nhớ mặt chữ, luyện viết, tập ph&aacute;t &acirc;m. Với mỗi &acirc;m, c&aacute;ch ph&aacute;t &acirc;m sẽ được hướng dẫn th&ocirc;ng qua 3 c&ocirc;ng cụ: l&yacute; thuyết, h&igrave;nh vẽ minh họa khẩu h&igrave;nh miệng, v&agrave; nghe đĩa đọc bắt chước.</p>\r\n\r\n<p>Với phương ph&aacute;p học ch&uacute; trọng v&agrave;o c&aacute;ch ph&aacute;t &acirc;m n&agrave;y, người học kh&ocirc;ng chỉ c&oacute; được nền tảng vững chắc để r&egrave;n luyện sang kỹ năng nghe &ndash; n&oacute;i sau n&agrave;y, m&agrave; c&ograve;n c&oacute; khả năng ghi nhớ từ mới nhanh ch&oacute;ng v&agrave; l&acirc;u hơn gấp nhiều lần.</p>\r\n</body>\r\n</html>\r\n', '2021-12-22', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address_shipping`
--

CREATE TABLE `tbl_address_shipping` (
  `id_address` text DEFAULT NULL,
  `id_user` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `diachi` text DEFAULT NULL,
  `phuong` text DEFAULT NULL,
  `quan` text DEFAULT NULL,
  `tinh` text DEFAULT NULL,
  `is_defaul` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_address_shipping`
--

INSERT INTO `tbl_address_shipping` (`id_address`, `id_user`, `name`, `phone`, `diachi`, `phuong`, `quan`, `tinh`, `is_defaul`) VALUES
('e580407d2e16e9aed369c8fb0f2bd2b2', 'a12', 'huy nguyễn', '3264872347', 'sdbdshfkjsdh', 'đậu yên', 'trung đô', 'Vinh', 0),
('157e3476e92f08f7952f74f1439e591f', 'a12', 'huy nguyễn', '0982865948', 'đâsdas', 'đậu yên', 'trung đô', 'Vinh', 1),
('c632878e1eec7fe78295e662abb741c3', '712786065a0f9bc510bac2275a2b2240', 'Tran Ngoc Thang', '0935891990', 'aaa', 'aaa', 'aaa', 'aa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_vouncher`
--

CREATE TABLE `tbl_add_vouncher` (
  `id` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `id_vouncher` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `id_use` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `table_name` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_add_vouncher`
--

INSERT INTO `tbl_add_vouncher` (`id`, `id_vouncher`, `id_use`, `table_name`, `status`) VALUES
('3a2023a8f1b6e07a7ede5a1369e0fe94', '83606ccd7b349f1225c1c0fa5b21fa1c', 'a1236', 'voucher_to_user', 1),
('117c95d409c6147bb056b21e0c52345d', '2642f898af732f2468ff0da3a553336c', 'a1236', 'voucher_to_user', 1),
('3381e16de4f67a9266d84c883208dcbf', '83606ccd7b349f1225c1c0fa5b21fa1c', 'a12', 'voucher_to_user', 1),
('8ce05aeef0dac8f345dd096a7b67f67d', '2642f898af732f2468ff0da3a553336c', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', 'voucher_to_user', 1),
('e2b3267cdb9b8a4b6515446e458daddb', '83606ccd7b349f1225c1c0fa5b21fa1c', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', 'voucher_to_user', 1),
('8a373d30028990cc0e19b88883578e84', '2642f898af732f2468ff0da3a553336c', 'f3c3d5b89486ec348dc1f7016aaea02f', 'voucher_to_user', 1),
('f4ab35232c51e2ca1b6bf25531b276ef', '2642f898af732f2468ff0da3a553336c', 'a7efed2e317b37131ef42fc62a119ab4', 'voucher_to_user', 1),
('abcd00286f6c5dee5d6b1b7ebbbc8170', 'c4177d1a0ffd08e79166a66324cbf2bc', 'a7efed2e317b37131ef42fc62a119ab4', 'voucher_to_user', 1),
('21b75b5873a737b3f370e5edc461007a', '83606ccd7b349f1225c1c0fa5b21fa1c', '712786065a0f9bc510bac2275a2b2240', 'voucher_to_user', 1),
('328f8a52788e7c0531533581ac60bc78', '2642f898af732f2468ff0da3a553336c', '712786065a0f9bc510bac2275a2b2240', 'voucher_to_user', 1),
('ed7fdeb6bb3e5ee4f95dd147d61469c8', 'c4177d1a0ffd08e79166a66324cbf2bc', '712786065a0f9bc510bac2275a2b2240', 'voucher_to_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `user_id` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `product_id` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `date_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`user_id`, `product_id`, `quantity`, `date_update`) VALUES
('a1236', '3a9141131886045ed69aa295e0c6a8ce', 1, '2021-11-30'),
('a1236', 'a7efed2e317b37131ef42fc62a119ab4', 1, '2021-11-30'),
(NULL, 'bc59440df94d7d16b128cfabab0a3360', 1, '2021-12-01'),
(NULL, 'dfce8ef1dd950c95884d1538318a5839', 1, '2021-12-01'),
(NULL, '804a7004a82382d17074c9aba4f52a4d', 1, '2021-12-01'),
(NULL, 'c6e3fdd5fd8d80ebbe116eb75e55fd28', 1, '2021-12-01'),
(NULL, 'd4af35cabca83d28e5ac84f37a8df430', 1, '2021-12-01'),
(NULL, 'd4af35cabca83d28e5ac84f37a8df430', 1, '2021-12-01'),
('712786065a0f9bc510bac2275a2b2240', '1092af7d7d2eab4fc36f4bf6e85b5fd3', 1, '2021-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `id_parten_category` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name`, `description`, `id_parten_category`) VALUES
('2a680230fb6184ac6a3090f803f85968', 'sách tiếng việt', '', ''),
('6a9c4cd671a51f539636b08ab8f40679', 'sách lớp 1', '', '2a680230fb6184ac6a3090f803f85968'),
('fd0f9e6a9703a3206cdf3adce91892df', 'sách lớp 2', '', '2a680230fb6184ac6a3090f803f85968'),
('547b5f5767fc02b92c97dd13714cccda', 'sách tiếng hàn', '', ''),
('a1863ca8c853a52fd8e68c0721ae14c5', 'sơ cấp', '', '547b5f5767fc02b92c97dd13714cccda'),
('b1d3c540ce9400dda0d13ef9cb22f4cb', 'trung cấp', '', '547b5f5767fc02b92c97dd13714cccda'),
('abc898d98db71bd8e3e2ddff3765b62d', 'sách lớp 3', 'dfsdf', '2a680230fb6184ac6a3090f803f85968'),
('136f9e5f6d390de8b04d585b67331a3e', 'toán lớp 1', 'demo', '6a9c4cd671a51f539636b08ab8f40679'),
('6f91a14fade8d0c3292b6faac8f2f2cf', 'Sách tiếng trung', 'tiếng trung quốc', ''),
('6fe18f2fb8c35e82d294f3474d7cc94c', 'Tiếng trung sơ cấp', '', '6f91a14fade8d0c3292b6faac8f2f2cf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like`
--

CREATE TABLE `tbl_like` (
  `id_user` text NOT NULL,
  `id_product` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_like`
--

INSERT INTO `tbl_like` (`id_user`, `id_product`) VALUES
('a12', 'ca58b7a3f9105901c5c8c94030ec3a39'),
('a12', 'a7efed2e317b37131ef42fc62a119ab4'),
('712786065a0f9bc510bac2275a2b2240', '1092af7d7d2eab4fc36f4bf6e85b5fd3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` text DEFAULT NULL,
  `id_user` text DEFAULT NULL,
  `id_address` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `status_payment` text DEFAULT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_user`, `id_address`, `description`, `amount`, `status`, `status_payment`, `date_added`) VALUES
('b8bc756d33a22fdccc263feaae9ffce1', 'a12', '157e3476e92f08f7952f74f1439e591f', '', 613435, 'Đang giao hàng', 'Chưa thanh toán', '2021-11-28'),
('9a947d3d83636dea862ad950dbf38ce5', '712786065a0f9bc510bac2275a2b2240', 'c632878e1eec7fe78295e662abb741c3', NULL, 30000, 'Đã Đặt', 'Chưa thanh toán', '2021-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `id_order_detail` text DEFAULT NULL,
  `id_product` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`id_order_detail`, `id_product`, `description`, `price`, `quantity`, `total_price`) VALUES
('4c73d71e76350dfe2b7630ff0d41cd5b', 'c6e3fdd5fd8d80ebbe116eb75e55fd28', '', 0, 1, 0),
('7e671e359bb1053c65acd1f80c98782f', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 343435, 1, 686870),
('7915da40790bf672cca0a9785f6697a1', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 343435, 1, 343435),
('3d87383e54b6afe1792fce1da3c4acca', 'eff84e9fc1f6673aa9946fb412b6afe8', '', 20000, 2, 40000),
('b8bc756d33a22fdccc263feaae9ffce1', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 343435, 1, 343435),
('b8bc756d33a22fdccc263feaae9ffce1', '1092af7d7d2eab4fc36f4bf6e85b5fd3', '', 270000, 1, 270000),
('3f55029b665c2e66aefb1f4a1f99adc1', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 343435, 1, 343435),
('ac696c89b3cd4e4269495b3ae5be68fd', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 343435, 1, 343435),
('9a947d3d83636dea862ad950dbf38ce5', 'f3c3d5b89486ec348dc1f7016aaea02f', '', 15000, 2, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publishing_company`
--

CREATE TABLE `tbl_publishing_company` (
  `id_publishing_company` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `name` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `description` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phone` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `address` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_publishing_company`
--

INSERT INTO `tbl_publishing_company` (`id_publishing_company`, `name`, `description`, `phone`, `address`, `email`) VALUES
('85eae759490ff9c24862f70d0310e1c9', 'NXB tuổi trẻ', '<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>\r\n<p><br />\r\n<title></title>\r\n</p>\r\n\r\n<p>demo 112 333 444</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0987654321', 'Duong so 38, q7, tp.hcm', 'nbxtuoitre@gmail.com'),
('fc5eb55eda530e852791f25a4fc29348', 'NXB Thanh Niên', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>NXB Thanh Ni&ecirc;n&nbsp;</p>\r\n</body>\r\n</html>\r\n', '09571858294', '64 Bà Triệu, Hoàn Kiếm, Hà Nội', 'nxbthanhnien@gmail.com'),
('f744122a4e0c53c17af6ccf82a5e1d62', 'NXB Lao Động', '<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>NXB Lao Động&nbsp;</p>\r\n</body>\r\n</html>\r\n', '0957894828', '175 P. Giảng Võ, Chợ Dừa, Đống Đa, Hà Nội', 'nxblaodong@gmail.com'),
('13154165eeaffd9256d4d368f8b5e7d1', 'NXB Kim Đồng', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>NXB Kim Đồng</p>\r\n</body>\r\n</html>\r\n', '0958283822', 'Số 55 Quang Trung, Nguyễn Du, Hai Bà Trưng, Hà Nội', 'cskh_online@nxbkimdong.com.vn');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` text DEFAULT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `name`, `description`) VALUES
('a1', 'admin', ''),
('a2', 'customer', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` text DEFAULT NULL,
  `id_role` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `sex` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `codeSession` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_role`, `name`, `sex`, `email`, `phone`, `birthday`, `username`, `password`, `codeSession`) VALUES
('a1236', 'a1', 'tam', 'nu', 'avf.email', '09115689785', '1998-02-26', 'admin', '25d55ad283aa400af464c76d713c07ad', '41db28d5e032cfa5d71233db3eaeea36'),
('a12', 'a2', 'huynguyen', 'nam', 'xbcbsdbsab@sdfjs.dsfhsd', '623429837489', '2021-11-21', 'a', '25d55ad283aa400af464c76d713c07ad', '1d7cb5928ec544e03e02fc8022b2dc3e'),
('0d20d6e20da48b6f1c87ab48369bfbd7', 'a2', 'huynguyen', NULL, 'huynguyen000@gmail.com', NULL, NULL, 'abc', '25d55ad283aa400af464c76d713c07ad', ''),
('712786065a0f9bc510bac2275a2b2240', 'a2', 'Tran Ngoc Thang1', NULL, 'ngocthang119@gmail.com', NULL, NULL, 'user2', '25d55ad283aa400af464c76d713c07ad', 'bd22a9c9682fc837fe5448f64ddd889b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_use_vouncher`
--

CREATE TABLE `tbl_use_vouncher` (
  `id` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `id_vouncher` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `id_user` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `date_user` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vouncher`
--

CREATE TABLE `tbl_vouncher` (
  `id_vouncher` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `name` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `description` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `code` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `sell` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_vouncher`
--

INSERT INTO `tbl_vouncher` (`id_vouncher`, `name`, `description`, `code`, `sell`, `date_start`, `date_end`) VALUES
('83606ccd7b349f1225c1c0fa5b21fa1c', 'KHUYENMAI100K', 'GIAM GIA 100K', 'KM100', 'KHUYENMAI100K', '2021-11-26', '2021-12-23'),
('2642f898af732f2468ff0da3a553336c', 'KHUYENMAI50K', 'VOUCHER GIAM GIA 50K', 'KM50', 'KHUYENMAI50K', '2021-11-26', '2021-12-23'),
('c4177d1a0ffd08e79166a66324cbf2bc', 'KHUYENMAI 10k', 'Giam gia 10k', 'KM10', 'KHUYENMAI 10k', '2021-11-23', '2021-12-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
