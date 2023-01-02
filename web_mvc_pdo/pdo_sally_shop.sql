-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 04, 2021 lúc 03:46 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pdo_sally_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'SallyAdmin', 'e10adc3949ba59abbe56e057f20f883e', '2021-07-05 13:57:55', '2021-07-05 13:57:55'),
(2, 'SallyUser', 'e10adc3949ba59abbe56e057f20f883e', '2021-07-05 13:57:55', '2021-07-05 13:57:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_post`
--

CREATE TABLE `tbl_category_post` (
  `id_category_post` int(11) UNSIGNED NOT NULL,
  `title_category_post` varchar(255) NOT NULL,
  `desc_category_post` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`id_category_post`, `title_category_post`, `desc_category_post`, `created_at`, `updated_at`) VALUES
(4, 'Tác giả việt nam', 'Tác giả nổi bật', '2021-07-05 13:55:08', '2021-07-05 13:55:08'),
(5, 'Tác giả trung quốc', 'Tác giả trung quốc', '2021-07-05 13:55:08', '2021-07-05 13:55:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `id_category_product` int(11) UNSIGNED NOT NULL,
  `title_category_product` varchar(255) NOT NULL,
  `desc_category_product` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`id_category_product`, `title_category_product`, `desc_category_product`, `created_at`, `updated_at`) VALUES
(4, 'Truyện đam mỹ', 'Truyện đam mỹ hấp dẫn nhất', '2021-07-05 14:00:10', '2021-07-05 14:00:10'),
(5, 'Truyện xuyên không', 'Truyện xuyên không ly kỳ nhất', '2021-07-05 14:00:10', '2021-07-05 14:00:10'),
(8, 'Truyện tiên hiệp', 'Truyện tiên hiệp kỳ ảo', '2021-07-05 14:00:10', '2021-07-05 14:00:10'),
(9, 'Truyện kiếm hiệp', 'Truyện kiếm hiệp lý thú', '2021-07-05 14:00:10', '2021-07-05 14:00:10'),
(12, 'Truyện nữ cường', 'Truyện nữ cường hay nhất mọi thời đại', '2021-07-05 14:00:10', '2021-07-05 14:00:10'),
(14, 'Truyện ngôn tình', 'Truyện Ngôn Tình Đặc Sắc', '2021-07-05 14:00:10', '2021-07-05 14:00:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id_comment` int(11) NOT NULL,
  `name_comment` varchar(255) NOT NULL,
  `email_comment` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `createdDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`id_comment`, `name_comment`, `email_comment`, `comment`, `id_post`, `id_product`, `createdDate`) VALUES
(8, 'Nguyễn Diệu Linh', 'mmeokkon@gmail.com', '123', 11, 0, '06/07/2021 09:55:49pm'),
(9, 'Nguyễn Diệu Linh', 'mmeokkon@gmail.com', '123', 0, 16, '06/07/2021 10:29:14pm'),
(10, 'Nguyễn Diệu Linh', 'mmeokkon@gmail.com', '123', 0, 16, '06/07/2021 10:30:53pm'),
(11, 'Nguyễn Diệu Linh', 'mmeokkon@gmail.com', 'sss', 16, 0, '06/07/2021 10:31:24pm'),
(12, 'Nguyễn Diệu Linh', 'mmeokkon@gmail.com', '12344', 0, 16, '06/07/2021 10:38:55pm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL,
  `title_contact` text NOT NULL,
  `address_contact` text NOT NULL,
  `phone_contact` varchar(255) NOT NULL,
  `email_contact` varchar(255) NOT NULL,
  `working_time_contact` text NOT NULL,
  `map_contact` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `title_contact`, `address_contact`, `phone_contact`, `email_contact`, `working_time_contact`, `map_contact`, `created_at`, `updated_at`) VALUES
(3, '<p>SallyShop - Nơi bạn c&oacute; thể giao lưu t&igrave;m kiếm nhưng quyển s&aacute;ch hay v&agrave; mới nhất của c&aacute;c t&aacute;c giả trong v&agrave; ngo&agrave;i nước</p>\r\n', 'Địa chỉ : Đ&ocirc;ng Ngạc - Bắc Từ Li&ecirc;m - H&agrave; Nội\r\n', '0951519999', 'sallyshop@gmail.com', '<h3><strong>Thời Gian L&agrave;m Việc</strong></h3>\r\n\r\n<p><strong>Thứ Hai - Chủ Nhật</strong>: 08AM &ndash; 22PM</p>\r\n', '<p><iframe height=\"450\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.6332307949798!2d105.77701322917744!3d21.091309399122817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134554c3fbcd34f%3A0x2835be9c6a0bb5f7!2zMTU1IMSQLlRo4buleSBQaMawxqFuZywgVGh14bu1IFBoxrDGoW5nLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1625501455260!5m2!1svi!2s\" style=\"border:0\" width=\"500\"></iframe></p>\r\n', '2021-07-14 13:24:49', '2021-07-14 13:43:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact_customer`
--

CREATE TABLE `tbl_contact_customer` (
  `id_contact_customer` int(11) NOT NULL,
  `name_customer` varchar(255) NOT NULL,
  `phone_customer` varchar(255) NOT NULL,
  `email_customer` varchar(255) NOT NULL,
  `address_customer` varchar(255) NOT NULL,
  `message_customer` text NOT NULL,
  `contact_date` varchar(255) NOT NULL,
  `contact_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact_customer`
--

INSERT INTO `tbl_contact_customer` (`id_contact_customer`, `name_customer`, `phone_customer`, `email_customer`, `address_customer`, `message_customer`, `contact_date`, `contact_status`) VALUES
(1, 'Nguyễn Diệu Linh', '1234567', 'mmeokkon@gmail.com', 'Hà Nội', 'tuuuuu', '15/07/2021 09:30:04pm', 0),
(2, 'Nguyễn Diệu Linh', '222', 'mmeokkon@gmail.com', '222', '222', '15/07/2021 09:30:44pm', 0),
(3, 'Nguyễn Diệu Linh', 'dd', 'mmeokkon@gmail.com', 'dd', 'dd', '15/07/2021 09:31:05pm', 0),
(4, 'Nguyễn Diệu Linh', 'dd', 'mmeokkon@gmail.com', 'dd', 'dđ', '15/07/2021 09:31:30pm', 0),
(5, 'Nguyễn Diệu Linh', 'dd', 'mmeokkon@gmail.com', 'đ', 'dđ', '15/07/2021 09:31:47pm', 0),
(7, 'Nguyễn Diệu Linh', 'd', 'mmeokkon@gmail.com', 'd', 'd', '15/07/2021 09:33:36pm', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_number` int(11) NOT NULL,
  `coupon_condition` int(11) NOT NULL,
  `coupon_amount` int(11) NOT NULL,
  `coupon_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_code`, `coupon_number`, `coupon_condition`, `coupon_amount`, `coupon_image`, `created_at`, `updated_at`) VALUES
(4, 'Giảm giá 8/8', 'MfnHoLCv8Jqf4pLG', 10, 2, 10000, '10k (2)1626667435.jpg', '2021-07-19 04:03:55', '2021-07-19 04:03:55'),
(5, 'Giảm giá 8/8', 'beQbA6VXLUsnAv7x', 6, 1, 10, '101626667458.png', '2021-07-19 04:04:18', '2021-07-20 15:33:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_password`, `customer_address`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Diệu Linh', '0912345678', 'mmeokkon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Nội', '2021-07-05 14:00:45', '2021-07-05 14:00:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_code`, `order_date`, `order_status`) VALUES
(46, '437401', '20/07/2021 09:57:59pm', 1),
(47, '317292', '20/07/2021 10:32:17pm', 1),
(48, '373922', '20/07/2021 10:33:41pm', 1),
(49, '49508', '23/07/2021 01:09:59pm', 0),
(50, '365546', '23/07/2021 03:46:17pm', 0),
(51, '865691', '23/07/2021 03:49:15pm', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ordering_guide`
--

CREATE TABLE `tbl_ordering_guide` (
  `id_ordering_guide` int(11) NOT NULL,
  `content_ordering_guide` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_ordering_guide`
--

INSERT INTO `tbl_ordering_guide` (`id_ordering_guide`, `content_ordering_guide`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align:center\"><span style=\"font-size:26px\"><strong>HƯỚNG DẪN ĐẶT H&Agrave;NG</strong></span></p>\r\n\r\n<p><strong>1.T&igrave;m kiếm sản phẩm:</strong></p>\r\n\r\n<p>- G&otilde; t&ecirc;n sản phẩm v&agrave;o thanh t&igrave;m kiếm.</p>\r\n\r\n<p>- T&igrave;m theo danh mục.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Th&ecirc;m sản phẩm v&agrave;o giỏ h&agrave;ng:</strong></p>\r\n\r\n<p>Khi đ&atilde; t&igrave;m được sản phẩm mong muốn, qu&yacute; kh&aacute;ch vui l&ograve;ng bấm v&agrave;o h&igrave;nh hoặc t&ecirc;n sản phẩm để v&agrave;o được trang th&ocirc;ng tin chi tiết của sản phẩm, sau đ&oacute;:</p>\r\n\r\n<p>- Kiểm tra th&ocirc;ng tin sản phẩm: gi&aacute;, th&ocirc;ng tin khuyến m&atilde;i.</p>\r\n\r\n<p>- Chọn số lượng mong muốn.</p>\r\n\r\n<p>- Th&ecirc;m sản phẩm v&agrave;o giỏ h&agrave;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3. Kiểm tra giỏ h&agrave;ng v&agrave; đặt h&agrave;ng:</strong></p>\r\n\r\n<p>Sau khi qu&yacute; kh&aacute;ch đ&atilde; c&oacute; đủ sản phẩm cần đặt trong giỏ h&agrave;ng, vui l&ograve;ng&nbsp;m&atilde; giảm gi&aacute;&nbsp;(nếu c&oacute;)&nbsp;v&agrave;&nbsp;tiếp tục c&aacute;c bước sau để đặt h&agrave;ng:</p>\r\n\r\n<p>- Chọn sản phẩm qu&yacute; kh&aacute;ch muốn mua v&agrave; điều chỉnh số lượng ph&ugrave; hợp.</p>\r\n\r\n<p>- Q&uacute;y kh&aacute;ch điền đầy đủ th&ocirc;ng tin đặt h&agrave;ng</p>\r\n\r\n<p>- Bấm &ldquo;Gửi đơn h&agrave;ng&rdquo; để bắt đầu đặt h&agrave;ng.</p>\r\n', '2021-07-13 13:32:10', '2021-07-13 14:10:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `price_now` int(11) DEFAULT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `sodienthoai` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_code`, `product_id`, `product_quantity`, `price_now`, `coupon_code`, `name`, `sodienthoai`, `diachi`, `email`, `noidung`) VALUES
(52, '913154', 32, 1, NULL, NULL, 'Nguyễn Diệu Linh', '122', '123', 'mmeokkon@gmail.com', ''),
(53, '437401', 32, 1, 77600, NULL, 'Nguyễn Diệu Linh', '111', '122', 'mmeokkon@gmail.com', '11'),
(54, '317292', 31, 1, 68600, NULL, 'Nguyễn Diệu Linh', '123', '123', 'mmeokkon@gmail.com', ''),
(55, '373922', 31, 1, 66500, 'beQbA6VXLUsnAv7x', '123', '123', '123', 'mmeokkon@gmail.com', '111'),
(56, '373922', 33, 1, 279000, 'beQbA6VXLUsnAv7x', '123', '123', '123', 'mmeokkon@gmail.com', '111'),
(57, '49508', 33, 1, 279000, NULL, 'Nguyễn Diệu Linh', '123', '123', 'mmeokkon@gmail.com', '111'),
(58, '49508', 31, 1, 66500, NULL, 'Nguyễn Diệu Linh', '123', '123', 'mmeokkon@gmail.com', '111'),
(59, '365546', 26, 1, 80000, NULL, 'Nguyễn Diệu Linh', '123', '123', 'mmeokkon@gmail.com', '123'),
(60, '865691', 14, 1, 150000, NULL, 'Nguyễn Diệu Linh', '122', '123', 'mmeokkon@gmail.com', '111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id_post` int(11) NOT NULL,
  `image_post` varchar(255) NOT NULL,
  `title_post` varchar(255) NOT NULL,
  `content_post` text NOT NULL,
  `id_category_post` int(11) UNSIGNED NOT NULL,
  `desc_post` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id_post`, `image_post`, `title_post`, `content_post`, `id_category_post`, `desc_post`, `created_at`, `updated_at`) VALUES
(11, 'tacgiatrungquoc1625494357.jpg', 'Tân Di Ổ', '<p style=\"text-align:justify\"><strong>Th&ocirc;ng tin:</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">T&ecirc;n thật: Tưởng Xu&acirc;n Linh (蒋春玲)</li>\r\n	<li style=\"text-align:justify\">B&uacute;t danh: T&acirc;n Di Ổ</li>\r\n	<li style=\"text-align:justify\">Ng&agrave;y sinh: 09/08/1981</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c phẩm ti&ecirc;u biểu:</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Anh C&oacute; Th&iacute;ch Nước Mỹ Kh&ocirc;ng?</li>\r\n	<li style=\"text-align:justify\">H&oacute;a Ra Anh Vẫn Ở Đ&acirc;y</li>\r\n	<li style=\"text-align:justify\">Th&aacute;ng ng&agrave;y ước hẹn</li>\r\n	<li style=\"text-align:justify\">Ngoảnh lại h&oacute;a tro t&agrave;n</li>\r\n	<li style=\"text-align:justify\">Cho Anh Nh&igrave;n Về Em</li>\r\n	<li style=\"text-align:justify\">Ph&ugrave; thế ph&ugrave; th&agrave;nh</li>\r\n	<li style=\"text-align:justify\">Anh Sẽ Đợi Em Trong Hồi Ức</li>\r\n	<li style=\"text-align:justify\">Th&aacute;ng ng&agrave;y ước hẹn</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">T&acirc;n Di Ổ l&agrave; b&uacute;t danh của nữ nh&agrave; văn Trung Quốc với t&ecirc;n thật l&agrave; Tưởng Xu&acirc;n Linh. C&ocirc; l&agrave; nh&agrave; văn chuy&ecirc;n viết truyện ng&ocirc;n t&igrave;nh mang hơi hướng thanh xu&acirc;n khiến độc giả m&ecirc; mẩn v&agrave; quyến luyến với những t&igrave;nh tiết, c&acirc;u chuyện rất thực trong cuộc sống m&agrave; ai cũng trải qua một lần. T&acirc;n Di Ổ mang đến cho người đọc những c&acirc;u chuyện ch&acirc;n thực. Những c&acirc;u chuyện về tuổi thanh xu&acirc;n, về những bồng bột thanh xu&acirc;n T&acirc;n Di Ổ mang đến khiến kh&ocirc;ng ai c&oacute; thể qu&ecirc;n đi được. Truyện của T&acirc;n Di Ổ mang một dư vị tiếc nuối, thường kể về hiện thực cuộc sống kh&ocirc;ng đẹp như mơ hay tuổi thanh xu&acirc;n với những t&igrave;nh y&ecirc;u chia tay đầy luyến tiếc.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">T&acirc;n Di Ổ l&agrave; nh&agrave; văn to&agrave;n thời gian v&agrave; l&agrave; c&acirc;y b&uacute;t chủ lực k&yacute; hợp đồng với c&ocirc;ng ty Cổ phần Ph&aacute;t triển Văn h&oacute;a Bắc Kinh Thời đại Bạch M&atilde;. C&ocirc; cũng l&agrave; một trong số những t&aacute;c giả đi đầu của d&ograve;ng văn học trẻ với tiểu thuyết t&igrave;nh cảm Gửi thời thanh xu&acirc;n đ&atilde; qua của ch&uacute;ng ta v&agrave; nhiều t&aacute;c phẩm kh&aacute;c đều lọt v&agrave;o danh s&aacute;ch c&aacute;c t&aacute;c phẩm b&aacute;n chạy của Nagai, được dựng th&agrave;nh phim điện ảnh v&agrave; phim truyền h&igrave;nh c&ugrave;ng t&ecirc;n. Doanh số thu về từ c&aacute;c t&aacute;c phẩm của c&ocirc; đều vượt qu&aacute; 3 triệu.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Tân Di Ổ\" src=\"https://toplist.vn/images/800px/tan-di-o-30382.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\"><em>T&acirc;n Di Ổ</em></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Truyện Hóa ra anh vẫn ở đây\" src=\"https://toplist.vn/images/800px/tan-di-o-575416.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\"><em>Truyện H&oacute;a ra anh vẫn ở đ&acirc;y</em></p>\r\n', 5, '<p><strong>T&aacute;c giả T&acirc;n Di Ổ</strong></p>\r\n\r\n<ul>\r\n</ul>\r\n', '2021-07-04 14:12:37', '2021-07-04 14:24:51'),
(12, 'phi-nga-tu-ton-5588791625494476.jpg', 'Phỉ Ngã Tư Tồn', '<p style=\"text-align:justify\"><strong>Th&ocirc;ng tin:</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">T&ecirc;n thật: Ngải Tinh Tinh (艾晶晶)</li>\r\n	<li style=\"text-align:justify\">B&uacute;t danh:\r\n	<ul>\r\n		<li>Phỉ Ng&atilde; Tư Tồn</li>\r\n		<li>Ph&iacute; Tiểu Tồn</li>\r\n		<li>Tư Tồn</li>\r\n	</ul>\r\n	</li>\r\n	<li style=\"text-align:justify\">Ng&agrave;y sinh: 26/12/1978</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c phẩm ti&ecirc;u biểu:</strong></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Thi&ecirc;n sơn mộ tuyết</li>\r\n	<li style=\"text-align:justify\">Đ&ocirc;ng cung</li>\r\n	<li style=\"text-align:justify\">Gấm r&aacute;ch</li>\r\n	<li style=\"text-align:justify\">Kh&ocirc;ng kịp n&oacute;i y&ecirc;u em</li>\r\n	<li style=\"text-align:justify\">Đừng nhắc em nhớ lại</li>\r\n	<li style=\"text-align:justify\">Đời n&agrave;y kiếp n&agrave;y</li>\r\n	<li style=\"text-align:justify\">Nợ em một đời hạnh ph&uacute;c</li>\r\n	<li style=\"text-align:justify\">Giai kỳ như mộng</li>\r\n	<li style=\"text-align:justify\">Thời gian đẹp nhất l&agrave; khi y&ecirc;u em</li>\r\n	<li style=\"text-align:justify\">C&ocirc;ng Tắc T&igrave;nh Y&ecirc;u</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Phỉ Ng&atilde; Tư Tồn (tiếng Trung: 匪我思存, b&iacute;nh &acirc;m: Fěi wǒ sī c&uacute;n) l&agrave; một nh&agrave; văn thuộc d&ograve;ng hiện đại ng&ocirc;n t&igrave;nh Trung Quốc. C&ocirc; nổi l&ecirc;n từ một t&aacute;c giả viết truyện tr&ecirc;n mạng. Năm 2005, tiểu thuyết đầu tay xuất bản, khi ấy t&aacute;c giả lấy b&uacute;t danh Tư Tồn nhận được một khoản nhuận b&uacute;t nhỏ. Hiện tại c&oacute; rất nhiều t&aacute;c phẩm của nh&agrave; văn đ&atilde; được chuyển thể th&agrave;nh phim.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Nổi tiếng với những tiểu thuyết ng&ocirc;n t&igrave;nh &quot;l&acirc;m li bi đ&aacute;t&quot; nhưng kh&ocirc;ng &quot;sến sẩm&quot; hay &quot;ủy mị&quot;, Phỉ Ng&atilde; Tư Tồn l&agrave; một c&aacute;i t&ecirc;n s&aacute;ng gi&aacute; v&agrave; nổi bậc ở thể loại ng&ocirc;n t&igrave;nh. Cũng ch&iacute;nh v&igrave; lối văn độc đ&aacute;o, bối cảnh mới lạ, x&acirc;y dựng t&iacute;nh c&aacute;ch cũng như nội t&acirc;m nh&acirc;n vật thấu đ&aacute;o m&agrave; tiểu thuyết của nữ nh&agrave; văn lu&ocirc;n g&acirc;y sốt. Đ&atilde; c&oacute; nhiều t&aacute;c phẩm được chuyển thể th&agrave;nh phim mang đến th&agrave;nh c&ocirc;ng vang dội cho nh&agrave; sản xuất.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Tiểu thuyết của Phỉ Ng&atilde; Tư Tồn rất đa dạng cả về nội dung, bối cảnh lẫn thời đại, đ&oacute; ch&iacute;nh l&agrave; nguồn cảm hứng cho c&aacute;c nh&agrave; sản xuất dựng th&agrave;nh phim. Những bộ phim được chuyển thể từ truyện của Phỉ Ng&atilde; Tư Tồn đều khiến người h&acirc;m mộ phấn kh&iacute;ch, chờ đợi v&agrave; y&ecirc;u th&iacute;ch. C&aacute;c truyện của c&ocirc; đ&atilde; được chuyển thể c&oacute; thể kể đến như: Đ&ocirc;ng cung (2019), Kh&ocirc;ng kịp n&oacute;i y&ecirc;u em (2011), Thi&ecirc;n sơn mộ tuyết (2010), Giai Kỳ như mộng (2010), C&ocirc;ng tắc t&igrave;nh y&ecirc;u (2020), Thời gian đẹp nhất l&agrave; khi y&ecirc;u em (đ&atilde; được x&aacute;c nhận chuyển th&ecirc;r th&agrave;nh phim)...</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Truyện Thiên sơn mộ tuyết\" src=\"https://toplist.vn/images/800px/phi-nga-tu-ton-575419.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\"><em>Truyện Thi&ecirc;n sơn mộ tuyết</em></p>\r\n', 5, '<p>T&aacute;c giả Phỉ Ng&atilde; Tư Tồn</p>\r\n', '2021-07-05 14:14:36', '2021-07-05 15:56:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_privacy_policy`
--

CREATE TABLE `tbl_privacy_policy` (
  `id_privacy_policy` int(11) NOT NULL,
  `content_privacy_policy` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_privacy_policy`
--

INSERT INTO `tbl_privacy_policy` (`id_privacy_policy`, `content_privacy_policy`, `created_at`, `updated_at`) VALUES
(2, '<p><strong>Ch&uacute;ng t&ocirc;i sẽ kh&ocirc;ng cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n của bạn cho bất kỳ b&ecirc;n thứ ba n&agrave;o, trừ một số hoạt động cần thiết dưới đ&acirc;y:</strong><br />\r\n- C&aacute;c đối t&aacute;c l&agrave; b&ecirc;n cung cấp dịch vụ cho ch&uacute;ng t&ocirc;i li&ecirc;n quan đến thực hiện đơn h&agrave;ng v&agrave; chỉ giới hạn trong phạm vi th&ocirc;ng tin cần thiết cũng như &aacute;p dụng c&aacute;c quy định đảm bảo an ninh, bảo mật c&aacute;c th&ocirc;ng tin c&aacute; nh&acirc;n.</p>\r\n\r\n<p><strong>Ch&uacute;ng t&ocirc;i lu&ocirc;n nỗ lực để giữ an to&agrave;n th&ocirc;ng tin c&aacute; nh&acirc;n của kh&aacute;ch h&agrave;ng, ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang thực hiện nhiều biện ph&aacute;p an to&agrave;n, bao gồm:</strong><br />\r\n- Bảo đảm an to&agrave;n trong m&ocirc;i trường vận h&agrave;nh: ch&uacute;ng t&ocirc;i lưu trữ kh&ocirc;ng tin c&aacute; nh&acirc;n kh&aacute;ch h&agrave;ng trong m&ocirc;i trường vận h&agrave;nh an to&agrave;n v&agrave; chỉ c&oacute; nh&acirc;n vi&ecirc;n, đại diện v&agrave; nh&agrave; cung cấp dịch vụ c&oacute; thể truy cập tr&ecirc;n cơ sở cần phải biết. Ch&uacute;ng t&ocirc;i tu&acirc;n theo c&aacute;c ti&ecirc;u chuẩn ng&agrave;nh, ph&aacute;p luật trong việc bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n kh&aacute;ch h&agrave;ng.<br />\r\n- Trong trường hợp m&aacute;y chủ lưu trữ th&ocirc;ng tin bị hacker tấn c&ocirc;ng dẫn đến mất m&aacute;t dữ liệu c&aacute; nh&acirc;n kh&aacute;ch h&agrave;ng, ch&uacute;ng t&ocirc;i sẽ c&oacute; tr&aacute;ch nhiệm th&ocirc;ng b&aacute;o vụ việc cho cơ quan chức năng để điều tra xử l&yacute; kịp thời v&agrave; th&ocirc;ng b&aacute;o cho kh&aacute;ch h&agrave;ng được biết.<br />\r\n- C&aacute;c th&ocirc;ng tin thanh to&aacute;n: được bảo mật theo ti&ecirc;u chuẩn ng&agrave;nh.</p>\r\n', '2021-07-13 14:41:20', '2021-07-13 14:50:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) UNSIGNED NOT NULL,
  `title_product` varchar(255) NOT NULL,
  `price_product` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `price_discount` int(11) NOT NULL,
  `desc_product` text NOT NULL,
  `content_product` text NOT NULL,
  `quantity_product` varchar(11) NOT NULL,
  `image_product` varchar(200) NOT NULL,
  `id_category_product` int(11) UNSIGNED NOT NULL,
  `detail_product` text NOT NULL,
  `product_hot` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `title_product`, `price_product`, `discount`, `price_discount`, `desc_product`, `content_product`, `quantity_product`, `image_product`, `id_category_product`, `detail_product`, `product_hot`, `created_at`, `updated_at`) VALUES
(11, 'Thiên Quan Tứ Phúc Tập 1', 100000, 0, 10, '<p>T&aacute;c giả: Mặc Hương Đ&ocirc;ng Khứu</p>\r\n', '<p style=\"text-align:justify\">C&aacute;c t&aacute;c phẩm của Mặc Hương Đồng Khứu được bạn đọc y&ecirc;u th&iacute;ch bởi t&igrave;nh tiết chặt chẽ, c&acirc;u chuyện mới lạ v&agrave; mang gi&aacute; trị nh&acirc;n văn s&acirc;u sắc, c&ugrave;ng phong c&aacute;ch h&agrave;i hước đặc trưng.</p>\r\n', '11', 'thienquantuphuc11626780967.jpg', 4, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>ZGroup</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-05 14:02:12', '2021-07-20 12:34:16'),
(12, 'Boss Là Nữ Phụ 1', 150000, 0, 10000, '<p>T&aacute;c giả: Mặc Linh</p>\r\n', '<p style=\"text-align:justify\">Trong tiểu thuyết, nữ phụ lu&ocirc;n l&agrave; thảm cỏ để t&aacute;c giả l&agrave;m nổi bật một b&ocirc;ng hoa đẹp nhất, lu&ocirc;n l&agrave; người sai, lu&ocirc;n h&agrave;nh động ngu ngốc, lu&ocirc;n quỷ kế đa đoan, v&igrave; thế cuối c&ugrave;ng lu&ocirc;n sa ch&acirc;n v&agrave;o con đường kh&ocirc;ng thể trở lạưng kh&ocirc;ng phải t&aacute;c giả n&agrave;o cũng tạo ra được nh&acirc;n vật ch&iacute;nh c&oacute; sứ mệnh tương xứng với nh&acirc;n phẩm, kết quả l&agrave;m cho v&ocirc; số vai phụ chết trong oan uổng, o&aacute;n kh&iacute; lan tr&agrave;n của Thời S&ecirc;nh - một b&agrave; mẹ kế chuy&ecirc;n đứng về ph&iacute;a nh&acirc;n vật phụ v&agrave; bức tử nh&acirc;n vật ch&iacute;nh - ch&iacute;nh l&agrave; tiến v&agrave;o những thế giới tiểu thuyết kh&aacute;c nhau, ho&agrave;n th&agrave;nh nguyện vọng cũng như giải trừ oan khuất cho c&aacute;c nh&acirc;n vật phụ.C&ocirc; xuy&ecirc;n qua v&ocirc; số thời kh&ocirc;ng, thay đổi số mệnh của v&ocirc; số người, chứng minh một điều rằng ch&iacute;nh nghĩa lu&ocirc;n thắng &acirc;m mưu quỷ kế.Mỗi thế giới c&ocirc; qua, mỗi c&acirc;u chuyện được kể lại đều khiến người ta nghiềm ngẫ&agrave; c&ocirc; phải xuy&ecirc;n qua bao nhi&ecirc;u kh&ocirc;ng gian mới t&igrave;m được ch&acirc;n &aacute;i của m&igrave;nh?</p>\r\n', '9', 'bosslanuphu1626781063.jpg', 12, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Waka</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-05 14:02:12', '2021-07-22 08:53:19'),
(14, 'Boss Là Nữ Phụ 2', 150000, 0, 10, '<p>T&aacute;c giả: Mặc Linh</p>\r\n', '<p>Trong tiểu thuyết, nữ phụ lu&ocirc;n l&agrave; thảm cỏ để t&aacute;c giả l&agrave;m nổi bật một b&ocirc;ng hoa đẹp nhất, lu&ocirc;n l&agrave; người sai, lu&ocirc;n h&agrave;nh động ngu ngốc, lu&ocirc;n quỷ kế đa đoan, v&igrave; thế cuối c&ugrave;ng lu&ocirc;n sa ch&acirc;n v&agrave;o con đường kh&ocirc;ng thể trở lạưng kh&ocirc;ng phải t&aacute;c giả n&agrave;o cũng tạo ra được nh&acirc;n vật ch&iacute;nh c&oacute; sứ mệnh tương xứng với nh&acirc;n phẩm, kết quả l&agrave;m cho v&ocirc; số vai phụ chết trong oan uổng, o&aacute;n kh&iacute; lan tr&agrave;n của Thời S&ecirc;nh - một b&agrave; mẹ kế chuy&ecirc;n đứng về ph&iacute;a nh&acirc;n vật phụ v&agrave; bức tử nh&acirc;n vật ch&iacute;nh - ch&iacute;nh l&agrave; tiến v&agrave;o những thế giới tiểu thuyết kh&aacute;c nhau, ho&agrave;n th&agrave;nh nguyện vọng cũng như giải trừ oan khuất cho c&aacute;c nh&acirc;n vật phụ.C&ocirc; xuy&ecirc;n qua v&ocirc; số thời kh&ocirc;ng, thay đổi số mệnh của v&ocirc; số người, chứng minh một điều rằng ch&iacute;nh nghĩa lu&ocirc;n thắng &acirc;m mưu quỷ kế.Mỗi thế giới c&ocirc; qua, mỗi c&acirc;u chuyện được kể lại đều khiến người ta nghiềm ngẫ&agrave; c&ocirc; phải xuy&ecirc;n qua bao nhi&ecirc;u kh&ocirc;ng gian mới t&igrave;m được ch&acirc;n &aacute;i của m&igrave;nh?</p>\r\n', '9', 'boss21624507773.jpg', 12, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Waka</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-05 14:02:12', '2021-07-23 08:49:15'),
(15, 'Gặp Gỡ Bác Sĩ Cố (Tặng Kèm 1 Bookmark)', 92000, 0, 10000, '<p>T&aacute;c giả: Kim Ốc T&agrave;ng Kiều</p>\r\n', '<p style=\"text-align:justify\">Trần H&acirc;n Di &ndash; c&ocirc; g&aacute;i hiền l&agrave;nh, chăm chỉ, lu&ocirc;n lạc quan v&agrave; nỗ lực phấn đấu mỗi ng&agrave;y. Nhưng &ocirc;ng trời dường như lu&ocirc;n th&iacute;ch tr&ecirc;u đ&ugrave;a số phận của c&ocirc;, v&agrave;o đ&uacute;ng lễ T&igrave;nh nh&acirc;n, bạn trai đ&atilde; hẹn h&ograve; nhiều năm n&oacute;i lời chia tay c&ocirc;. Để giải tỏa nỗi buồn, Trần H&acirc;n Di quyết định d&ugrave;ng số tiền bảo hiểm nha khoa để đi niềng răng. Thật t&igrave;nh cờ, Cố Th&ecirc; Tr&igrave; - b&aacute;c sĩ nha khoa m&agrave; c&ocirc; chọn lại ch&iacute;nh l&agrave; ch&agrave;ng trai đ&atilde; tranh gi&agrave;nh dầu c&aacute; với c&ocirc; ở si&ecirc;u thị l&uacute;c trước. V&agrave; từ đ&acirc;y, họ tựa như oan gia ng&otilde; hẹp, d&ugrave; c&oacute; &aacute;c cảm với đối phương nhưng đi đ&acirc;u cũng chạm mặt, l&agrave;m g&igrave; cũng thấy nhau. Những tưởng họ sẽ m&atilde;i chỉ l&agrave; oan gia, thế m&agrave; nhờ sự dẫn dắt của duy&ecirc;n phận, hai con người xa lạ với rất nhiều mảnh gh&eacute;p đối lập đ&atilde; dần dần bị cuốn v&agrave;o v&ograve;ng xo&aacute;y của t&igrave;nh y&ecirc;u, sự nghiệp v&agrave; những r&agrave;o cản t&acirc;m l&yacute;. Liệu rằng, Trần H&acirc;n Di v&agrave; Cố Th&ecirc; Tr&igrave; c&oacute; thể tạo ra kỳ t&iacute;ch, x&acirc;y dựng n&ecirc;n một c&acirc;u chuyện t&igrave;nh y&ecirc;u vi&ecirc;n m&atilde;n trăm năm?</p>\r\n', '1', 'bacsi1626780871.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Shinebooks</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-05 14:02:12', '2021-07-22 08:53:17'),
(16, 'Từng Có Người Yêu Tôi Như Sinh Mệnh', 150000, 0, 0, '<p>T&aacute;c giả: Thư Nghi</p>\r\n', '<p>Từng C&oacute; Người Y&ecirc;u T&ocirc;i Như Sinh Mệnh thời c&ograve;n trẻ ch&uacute;ng ta thường kh&ocirc;ng hiểu thế n&agrave;o l&agrave; t&igrave;nh y&ecirc;u. L&uacute;c mới bước v&agrave;o đời, t&ocirc;i từng nghĩ t&igrave;nh y&ecirc;u c&oacute; thể vượt qua tất cả. Khi đ&oacute; t&ocirc;i kh&ocirc;ng biết tr&ecirc;n đời n&agrave;y tồn tại một sức mạnh gọi l&agrave; số phận, ch&uacute;ng ta chỉ c&oacute; thể chấp nhận m&agrave; kh&ocirc;ng thể thay đổi. L&uacute;c t&ocirc;i ở trong ph&ograve;ng tắm của trường học v&agrave; cất cao tiếng h&aacute;t &quot;I love you more than I can say&quot;, t&ocirc;i kh&ocirc;ng hề hay biết, c&acirc;u chuyện đ&oacute; sẽ c&oacute; một ng&agrave;y xảy ra với t&ocirc;i. T&ocirc;i gặp anh lần đầu ti&ecirc;n l&agrave; ở một t&igrave;nh huống đẫm m&aacute;u tại th&agrave;nh phố Odessa, đất nước Ukraine...</p>\r\n', '6', 'sinhmenh1626780742.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Đinh Tị</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>14.5 x 20.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dịch Giả</td>\r\n			<td>Greenrosetq</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại b&igrave;a</td>\r\n			<td>B&igrave;a mềm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số trang</td>\r\n			<td>464</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; xuất bản</td>\r\n			<td>Nh&agrave; Xuất Bản Văn Học</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2021-07-05 14:02:12', '2021-07-22 08:53:20'),
(22, 'Thất Tịch Không Mưa (Tái Bản 2019)', 60000, 0, 0, '<p>T&aacute;c giả: L&acirc;u Vũ T&igrave;nh</p>\r\n', '<p style=\"text-align:justify\">Từ nhỏ c&ocirc; đ&atilde; thầm y&ecirc;u anh, như số kiếp kh&ocirc;ng thể thay đổi T&igrave;nh y&ecirc;u trong s&aacute;ng ấy, như lần đầu được nếm m&ugrave;i vị của quả khế mới ch&iacute;n. Sau đ&oacute; c&ocirc; v&agrave; anh xa nhau, gặp lại đều c&aacute;ch nhau ba năm.</p>\r\n\r\n<p style=\"text-align:justify\">T&igrave;nh y&ecirc;u, giống như lần đầu được nếm thử quả khế mới ch&iacute;n.</p>\r\n\r\n<p style=\"text-align:justify\">Chua chua, ch&aacute;t ch&aacute;t, nhưng kh&ocirc;ng k&igrave;m được, vẫn muốn nếm th&ecirc;m lần nữa.</p>\r\n\r\n<p style=\"text-align:justify\">Trong quả khế ch&aacute;t xanh xanh, nụ cười ngốc nghếch, ngọt ng&agrave;o của anh, t&igrave;nh đầu thơ ng&acirc;y, trong s&aacute;ng của em lặng lẽ nảy mầm.</p>\r\n', '10', 'ttkmua1626780651.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Đinh Tị</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ng&agrave;y xuất bản</td>\r\n			<td>2019-10-01 00:00:00</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>13 x 20.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại b&igrave;a</td>\r\n			<td>B&igrave;a mềm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-19 14:32:32', '2021-07-22 08:53:13'),
(23, 'Rất Nhớ, Rất Nhớ Anh (Tái Bản 2019)', 120000, 1, 5, '<p>T&aacute;c giả: Mặc Bảo Phi Bảo</p>\r\n', '<p>Một c&acirc;u chuyện t&igrave;nh y&ecirc;u được bắt đầu từ thế giới ảo.</p>\r\n\r\n<p>Ch&agrave;ng kh&ocirc;ng chỉ đẹp trai, galang, biết n&oacute;i những lời ong bướm, ch&agrave;ng c&ograve;n c&oacute; một giọng n&oacute;i m&ecirc; hoặc l&ograve;ng người. Nhưng thật kh&ocirc;ng ngờ, người được mệnh danh l&agrave; &ldquo;c&oacute; giọng n&oacute;i của thi&ecirc;n thần&rdquo; khiến cả trăm ngh&igrave;n người si m&ecirc; ấy lại bị quyến rũ bởi một giọng h&aacute;t v&ocirc; danh chuy&ecirc;n cover c&aacute;c ca kh&uacute;c tr&ecirc;n mạng của một người con g&aacute;i m&agrave; ch&agrave;ng kh&ocirc;ng hề biết mặt&hellip;</p>\r\n\r\n<p>Nếu bạn đ&atilde; từng kh&ocirc;ng thể rời mắt khỏi những trang s&aacute;ch của &quot;T&ugrave;y tiện ph&oacute;ng hỏa&quot;, &quot;Trọn đời trọn kiếp&quot;, &quot;Mỹ nh&acirc;n cốt&quot;, &quot;C&oacute; nhau trọn đời&quot; của Mặc Bảo Phi Bảo th&igrave; Rất nhớ, rất nhớ anh sẽ kh&ocirc;ng l&agrave;m bạn thất vọng bởi c&acirc;u chuyện t&igrave;nh như mơ của Thanh Thanh Mạn v&agrave; Thương Thanh Từ. Với Rất nhớ, rất nhớ anh, Mặc Bảo Phi Bảo đ&atilde; đưa t&igrave;nh y&ecirc;u trở về đ&uacute;ng nghĩa nguy&ecirc;n bản nhất của n&oacute;: ngọt ng&agrave;o như mật</p>\r\n', '10', 'rnhoanh1626780551.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Đinh Tị</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ng&agrave;y xuất bản</td>\r\n			<td>2019-01-12 00:00:00</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>14.5 x 20.5 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại b&igrave;a</td>\r\n			<td>B&igrave;a mềm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-19 14:36:05', '2021-07-20 12:32:29'),
(24, 'Tôi Đã Yêu Người Âm Thầm Như Thế (Tặng Kèm Bookmark)', 100000, 0, 5, '<p>T&aacute;c giả: Anna Turner&nbsp;</p>\r\n', '<ul>\r\n	<li style=\"text-align:justify\"><em>Khi y&ecirc;u đơn phương c&oacute; n&ecirc;n tỏ t&igrave;nh hay kh&ocirc;ng?</em></li>\r\n	<li style=\"text-align:justify\"><em>N&ecirc;n l&agrave;m g&igrave; để đối phương đ&oacute;n nhận t&igrave;nh cảm của m&igrave;nh?</em></li>\r\n	<li style=\"text-align:justify\"><em>Tỏ t&igrave;nh thất bại c&oacute; n&ecirc;n tiếp tục ki&ecirc;n tr&igrave; cố gắng hay kh&ocirc;ng?</em></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Thật ngại qu&aacute;, nếu bạn đang đi t&igrave;m đ&aacute;p &aacute;n cho những c&acirc;u hỏi tr&ecirc;n th&igrave; cuốn s&aacute;ch n&agrave;y kh&ocirc;ng thể cho bạn c&acirc;u trả lời ch&iacute;nh x&aacute;c&nbsp; được.</p>\r\n\r\n<p style=\"text-align:justify\"><em>Anna rất tiếc phải n&oacute;i rằng, kh&ocirc;ng c&oacute; một đ&aacute;p &aacute;n cụ thể n&agrave;o cho tất cả mọi trường hợp. Bạn chỉ c&oacute; thể t&ugrave;y theo ho&agrave;n cảnh bạn đang đối mặt để linh hoạt đưa ra quyết định của ri&ecirc;ng m&igrave;nh. D&ugrave; vậy, t&ocirc;i tin rằng mỗi một c&acirc;u chuyện t&ocirc;i kể trong cuốn s&aacute;ch, kể cả chuyện của bạn b&egrave; t&ocirc;i, hay l&agrave; chuyện của ch&iacute;nh t&ocirc;i, đều sẽ gợi l&ecirc;n cho bạn điều g&igrave; đ&oacute;, một ch&uacute;t cảm x&uacute;c, một ch&uacute;t thanh thản, một ch&uacute;t quyết t&acirc;m,&hellip; để tiếp th&ecirc;m sức mạnh cho bạn tr&ecirc;n suốt h&agrave;nh tr&igrave;nh y&ecirc;u v&agrave; theo đuổi t&igrave;nh y&ecirc;u của bản th&acirc;n m&igrave;nh.</em></p>\r\n\r\n<p style=\"text-align:justify\"><em>T&ocirc;i d&agrave;nh tặng cuốn s&aacute;ch n&agrave;y cho những ai đ&atilde; từng giữ trong l&ograve;ng m&igrave;nh một t&igrave;nh y&ecirc;u thầm lặng &ndash; đối với t&ocirc;i, c&aacute;c bạn ch&iacute;nh l&agrave; những chiến binh ki&ecirc;u h&ugrave;ng bất bại, bởi đ&atilde; d&aacute;m đem l&ograve;ng y&ecirc;u một người m&agrave; c&aacute;c bạn kh&ocirc;ng hề chắc chắn liệu họ c&oacute; thuộc về m&igrave;nh hay kh&ocirc;ng. H&atilde;y tin rằng, c&aacute;c bạn xứng đ&aacute;ng được tr&acirc;n trọng, xứng đ&aacute;ng được y&ecirc;u thương, xứng đ&aacute;ng được nhận những điều tuyệt vời nhất.</em></p>\r\n\r\n<p style=\"text-align:justify\"><em>&ldquo;T&ocirc;i đ&atilde; y&ecirc;u người &acirc;m thầm như thế&rdquo;</em>&nbsp;tổng hợp c&aacute;c c&acirc;u chuyện t&igrave;nh y&ecirc;u của ch&iacute;nh t&aacute;c giả v&agrave; của cả những người th&acirc;n, bạn b&egrave; của c&ocirc; trong thời ni&ecirc;n thiếu. Điểm chung của c&aacute;c c&acirc;u chuyện n&agrave;y l&agrave; đều n&oacute;i về t&igrave;nh y&ecirc;u đến từ một ph&iacute;a. Th&ocirc;ng qua mỗi c&acirc;u chuyện, t&aacute;c giả muốn nhắn gửi đến c&aacute;c độc giả th&ocirc;ng điệp t&iacute;ch cực của bản th&acirc;n, đ&oacute; l&agrave; h&atilde;y can đảm, lạc quan v&agrave; tự tin v&agrave;o bản th&acirc;n m&igrave;nh. Cho d&ugrave; bạn đang &ocirc;m ấp một mối t&igrave;nh đơn phương đi chăng nữa, mối t&igrave;nh đ&oacute; vẫn đ&aacute;ng qu&yacute;, đ&aacute;ng tr&acirc;n trọng. Rất nhiều người đ&atilde; ho&agrave;n thiện bản th&acirc;n sau khi th&iacute;ch ai đ&oacute;, rất nhiều người đ&atilde; thay đổi ch&iacute;nh m&igrave;nh, đ&atilde; trưởng th&agrave;nh hơn, đ&atilde; sống cuộc sống tốt hơn. Vậy n&ecirc;n, đừng cảm thấy đau l&ograve;ng hay mặc cảm với t&igrave;nh y&ecirc;u của m&igrave;nh, đ&oacute; l&agrave; một trong những bước ngoặt quan trọng trong tuổi trẻ của bạn, trở th&agrave;nh h&agrave;nh trang để bạn mang theo tr&ecirc;n suốt con đường đời th&ecirc;nh thang.</p>\r\n\r\n<p style=\"text-align:justify\">Khi ph&aacute;t hiện bản th&acirc;n th&iacute;ch một người, tại sao h&agrave;nh động đầu ti&ecirc;n con người ta nghĩ đến phải l&agrave; chối bỏ, l&agrave; che giấu l&agrave; trốn tr&aacute;nh, m&agrave; kh&ocirc;ng phải can đảm thừa nhận v&agrave; đối mặt với những cảm x&uacute;c ch&acirc;n thật nhất từ trong tr&aacute;i tim m&igrave;nh?</p>\r\n\r\n<p style=\"text-align:justify\">Mục ti&ecirc;u của&nbsp;<strong>Anna Turner</strong>&nbsp;l&agrave; mang đến một cuốn s&aacute;ch chứa đầy th&ocirc;ng điệp t&iacute;ch cực về t&igrave;nh y&ecirc;u &ndash; d&ugrave; chỉ l&agrave; t&igrave;nh y&ecirc;u từ một ph&iacute;a. Theo quan điểm của c&ocirc;, d&ugrave; ở dạng thức n&agrave;o, t&igrave;nh y&ecirc;u vẫn l&agrave; một m&oacute;n qu&agrave; của thế giới n&agrave;y, thay v&igrave; tr&igrave; ho&atilde;n, thay v&igrave; phủ nhận, thay v&igrave; chạy trốn khỏi n&oacute;, để rồi tự m&igrave;nh cảm thấy đau l&ograve;ng, tự m&igrave;nh cảm thấy ấm ức, tủi th&acirc;n, bạn h&atilde;y thử thay đổi g&oacute;c nh&igrave;n, thay đổi h&agrave;nh động đối với n&oacute;, biến những cảm x&uacute;c đang c&oacute; th&agrave;nh t&iacute;ch cực, vui vẻ. Như vậy, sẽ đến l&uacute;c bạn nhận ra, t&igrave;nh y&ecirc;u đơn phương thời ni&ecirc;n thiếu thật đ&aacute;ng qu&yacute; biết bao. Sau n&agrave;y khi đ&atilde; trưởng th&agrave;nh, ch&uacute;ng ta sẽ rất kh&oacute; c&oacute; thể đem l&ograve;ng y&ecirc;u mến ai một c&aacute;ch &acirc;m thầm, giản đơn v&agrave; bao dung đến như vậy.</p>\r\n\r\n<p style=\"text-align:justify\"><em>&ldquo;Nếu bạn y&ecirc;u ai đ&oacute;, h&atilde;y b&agrave;y tỏ với họ, đừng lo lắng việc t&igrave;nh cảm của bạn c&oacute; được chấp nhận v&agrave; hồi đ&aacute;p hay kh&ocirc;ng. Miễn l&agrave; bạn đ&atilde; dũng cảm y&ecirc;u, đ&atilde; ch&acirc;n th&agrave;nh y&ecirc;u, đ&atilde; hết l&ograve;ng y&ecirc;u, th&igrave; đ&oacute; đ&atilde; l&agrave; đoạn thời gian v&ocirc; c&ugrave;ng tốt đẹp của bạn rồi. Bạn kh&ocirc;ng cần phải hối tiếc hay tự tr&aacute;ch m&igrave;nh về bất cứ điều g&igrave; cả.&rdquo;</em></p>\r\n', '10', 'toidayeumotnguoiamthamnhuthe1626780436.png', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>C&Ocirc;NG TY TNHH R BOOKS</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-20 11:06:27', '2021-07-20 12:32:37'),
(25, 'Husky Và Sư Tôn Mèo Trắng Của Hắn - Tập 1', 120000, 1, 5, '<p>T&aacute;c giả: Nhục Bao Bất Cật Dục</p>\r\n', '<p>Đạp Ti&ecirc;n Qu&acirc;n Mặc Nhi&ecirc;n ngự trị thi&ecirc;n hạ suốt mười năm, khiến Tu Ch&acirc;n giới m&aacute;u chảy th&agrave;nh s&ocirc;ng, đau thương chồng chất. Đến khi nghĩa sĩ khắp nơi tụ họp lại, tấn c&ocirc;ng l&ecirc;n đỉnh Tử Sinh h&ograve;ng &eacute;p Mặc Nhi&ecirc;n tho&aacute;i vị, th&igrave; trước mắt họ chỉ c&ograve;n thi thể đ&atilde; lạnh băng của hắn.</p>\r\n\r\n<p>Mặc Nhi&ecirc;n sống lại, trở về thời ni&ecirc;n thiếu. L&uacute;c ấy hắn vẫn đang c&ugrave;ng đường đệ Tiết M&ocirc;ng v&agrave; Sư Muội - &aacute;nh trăng s&aacute;ng trong l&ograve;ng hắn kiếp trước - theo vị sư phụ thanh cao lạnh l&ugrave;ng Sở V&atilde;n Ninh tu tập, xuống n&uacute;i trừ y&ecirc;u, đi t&igrave;m vũ kh&iacute;. Song Mặc Nhi&ecirc;n dần ph&aacute;t hiện nhiều người cũ chuyện xưa vốn tưởng vậy m&agrave; kh&ocirc;ng phải vậy&hellip;</p>\r\n', '5', 'huskyvasutonmeotrangcuahan1626780250.jpg', 4, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Cẩm Phong Books</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-20 11:15:36', '2021-07-20 12:32:50'),
(26, 'All In Love - Ngập Tràn Yêu Thương (Tái Bản 2020)', 80000, 0, 0, '<p>T&aacute;c giả: Cố T&acirc;y Tước</p>\r\n', '<p>Cuốn s&aacute;ch được viết dựa tr&ecirc;n những c&acirc;u chuyện từ đời thực, xảy ra xung quanh t&aacute;c giả Cố T&acirc;y Tước v&agrave; được kể lại qua c&aacute;c nh&acirc;n vật Cố Thanh Kh&ecirc;, Từ Vi Vũ, Cố Tử Hạo. Họ cũng l&agrave; l&agrave; ba nh&acirc;n vật đại diện cho t&aacute;c giả, &ldquo;&ocirc;ng x&atilde;&rdquo; đại nh&acirc;n v&agrave; cậu em trai đ&aacute;ng y&ecirc;u của chị.&nbsp;</p>\r\n\r\n<p>Với All in love, người đọc bị cuốn h&uacute;t bởi t&igrave;nh th&acirc;n, t&igrave;nh bạn v&agrave; t&igrave;nh y&ecirc;u, giống như t&aacute;c giả Cố T&acirc;y Tước từng viết:</p>\r\n\r\n<p><em>&ldquo;Trong &ldquo;All In Love&rdquo; t&ocirc;i viết về ba thứ t&igrave;nh cảm đ&aacute;ng tr&acirc;n trọng nhất, ba thứ t&igrave;nh cảm m&agrave; tất ch&uacute;ng ta đều c&oacute;. T&igrave;nh th&acirc;n l&agrave; thứ duy&ecirc;n phận lớn nhất m&agrave; &ocirc;ng trời ban tặng; t&igrave;nh bạn l&agrave; qu&atilde;ng thời gian đẹp đẽ m&agrave; bạn lu&ocirc;n muốn được quay về; t&igrave;nh y&ecirc;u l&agrave; lời thề ước trọn đời. Phải n&oacute;i rằng &ldquo;All In Love&rdquo; l&agrave; cuốn s&aacute;ch t&ocirc;i viết vui vẻ nhất v&agrave; nhẹ nh&agrave;ng nhất.&nbsp;</em></p>\r\n\r\n<p>Với t&igrave;nh th&acirc;n, đ&oacute; l&agrave; t&igrave;nh cảm m&agrave; cậu em &ldquo;trời đ&aacute;nh&rdquo; Cố Tử Hạo đ&atilde; d&agrave;nh cho người chị của m&igrave;nh d&ugrave; hai chị em c&oacute; c&aacute;ch xa mười mấy vạn dặm kể từ khi cậu nh&oacute;c mới 10 tuổi, nhưng trong l&ograve;ng cậu ta, chị hai vẫn l&agrave; số 1. Thế n&ecirc;n mới c&oacute; chuyện, cậu em vợ n&agrave;y lu&ocirc;n c&atilde;i nhau suốt ng&agrave;y n&agrave;y tới ng&agrave;y kh&aacute;c với người anh rể Từ Vi Vũ, tất cả cũng v&igrave; cậu ta gh&eacute;t t&ecirc;n anh rể tiểu nh&acirc;n n&agrave;y cướp mất chị hai của cậu.</p>\r\n\r\n<p>T&igrave;nh cảm đ&aacute;ng tr&acirc;n trọng thứ hai của Cố Thanh Kh&ecirc; đ&oacute; ch&iacute;nh l&agrave; t&igrave;nh bạn. Trong cuốn s&aacute;ch, t&igrave;nh bạn của c&ocirc; gắn liền với qu&atilde;ng đời sinh vi&ecirc;n kh&oacute; qu&ecirc;n, nơi m&agrave; c&ocirc; đ&atilde; c&oacute; những người bạn th&acirc;n nhất, c&ugrave;ng c&ocirc; đi&ecirc;n loạn, c&ugrave;ng c&ocirc; trải qua thời thanh xu&acirc;n tươi đẹp.</p>\r\n\r\n<p>T&igrave;nh cảm thứ ba trong đời m&agrave; Cố Thanh Kh&ecirc; trọn đời khắc cốt ghi t&acirc;m, đ&oacute; l&agrave; t&igrave;nh y&ecirc;u năm năm th&aacute;ng th&aacute;ng của Từ Vi Vũ. Từ trung học l&ecirc;n đại học, qua 6 năm đi du học ở xứ người, t&igrave;nh cảm bền bỉ ấy d&agrave;nh cho c&ocirc; vẫn kh&ocirc;ng hề thay đổi.&nbsp;</p>\r\n\r\n<p>Từ Vi Vũ bề ngo&agrave;i l&agrave; một con người lạnh l&ugrave;ng &iacute;t n&oacute;i, nhưng đối với Cố Thanh Kh&ecirc; th&igrave; l&uacute;c n&agrave;o cũng lộ bản chất &ldquo;lưu manh c&oacute; văn h&oacute;a&rdquo; của m&igrave;nh, anh trẻ con h&aacute;t ngh&ecirc;u ngao suốt ng&agrave;y, anh gian tr&aacute; khi đấu khẩu với Cố Tử Hạo, anh nh&otilde;ng nhẽo suốt cả ng&agrave;y với c&ocirc;, anh đi khoe khoang suốt ng&agrave;y với mọi người về &ldquo;vợ y&ecirc;u&rdquo; cũng như &ldquo;y&ecirc;u vợ&rdquo;&hellip;&nbsp;</p>\r\n\r\n<p><em>&ldquo;Vợ ơi, mau nấu cơm cho anh, y&ecirc;u cầu hợp ph&aacute;p đó!&rdquo;&nbsp;</em></p>\r\n\r\n<p><em>&ldquo;Vợ ơi mua quần &aacute;o cho anh đi, anh chẳng c&ograve;n c&aacute;i &aacute;o n&agrave;o mặc được nữa rồi, y&ecirc;u cầu hợp ph&aacute;p đ&acirc;́y!&rdquo;&nbsp;</em></p>\r\n\r\n<p><em>&ldquo;Vợ ơi, h&ocirc;m nay xem phim đi, y&ecirc;u cầu hợp ph&aacute;p nhé!&rdquo;&nbsp;</em></p>\r\n\r\n<p><em>&ldquo;Thanh Kh&ecirc; ơi, h&aacute;t tặng anh một b&agrave;i nào, l&agrave; y&ecirc;u cầu hợp ph&aacute;p, y&ecirc;u cầu hợp ph&aacute;p!&rdquo;</em></p>\r\n\r\n<p>Một Từ Vi Vũ y&ecirc;u c&ocirc; như thế, lại đ&aacute;ng y&ecirc;u như thế, Cố Thanh Kh&ecirc; muốn chạy cũng kh&ocirc;ng được, suốt đời phải ở trong l&ograve;ng anh m&agrave; th&ocirc;i.</p>\r\n\r\n<p>T&igrave;nh th&acirc;n, t&igrave;nh bạn, t&igrave;nh y&ecirc;u đều vi&ecirc;n m&atilde;n. V&agrave; thật tuyệt khi Cố T&acirc;y Tước đ&atilde; chia sẻ điều đ&oacute; với bạn đọc qua cuốn s&aacute;ch &ldquo;All in love - Ngập tr&agrave;n y&ecirc;u thương&rdquo;. Để mỗi người khi đọc cuốn s&aacute;ch n&agrave;y, đều th&ecirc;m tin, th&ecirc;m y&ecirc;u v&agrave;o những điều tuyệt vời trong cuộc số</p>\r\n', '9', 'Allinlove1626781309.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Đinh Tị</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-20 11:41:49', '2021-07-23 08:46:17'),
(27, 'Rất Thích Rất Thích Em', 100000, 1, 3, '<p>T&aacute;c giả: V&atilde;n T&igrave;nh</p>\r\n', '<p>Sự trở lại của nữ ho&agrave;ng d&ograve;ng s&aacute;ch truyền cảm hứng V&atilde;n T&igrave;nh, c&ugrave;ng một cuốn s&aacute;ch mới lạ v&agrave; hấp dẫn. D&agrave;nh tặng bạn một giấc mơ thanh xu&acirc;n vừa ngọt ng&agrave;o vừa c&oacute; ch&uacute;t đắng ngắt, vừa hết m&igrave;nh vừa pha lẫn &iacute;t nhiều tiếc nuối.<br />\r\n<br />\r\n&ldquo;Trong cuộc đời n&agrave;y, thật sự kh&ocirc;ng dễ gặp được người m&igrave;nh th&iacute;ch m&agrave; vừa hay cũng th&iacute;ch m&igrave;nh, nếu đ&atilde; gặp được rồi th&igrave; phải n&acirc;ng niu t&igrave;nh cảm đ&oacute; hệt như n&acirc;ng niu đ&ocirc;i mắt của bản th&acirc;n, bởi v&igrave; chưa chắc kiếp sau c&ograve;n c&oacute; thể gặp lại nhau. Đi cứu v&atilde;n, đi t&igrave;m chưa chắc đ&atilde; gi&agrave;nh lại được người ta, nhưng nếu kh&ocirc;ng cố gắng l&agrave;m g&igrave; đ&oacute; th&igrave; nhất định sẽ đ&aacute;nh mất.&rdquo;<br />\r\n&ndash; Rất th&iacute;ch rất th&iacute;ch em (V&atilde;n T&igrave;nh)<br />\r\n<br />\r\nL&acirc;m Lạc Lạc hoạt b&aacute;t đ&aacute;ng y&ecirc;u, y&ecirc;u tiền như sinh mệnh, ti&ecirc;u chuẩn chọn bạn trai chỉ c&oacute;: một l&agrave; nam, hai c&ograve;n sống. Nhưng từ khi gặp nam thần Thẩm L&acirc;m Phong, Lạc Lạc biết ti&ecirc;u chuẩn ấy sớm đ&atilde; lung lay rồi. Cả thế giới của c&ocirc; co tr&ograve;n lại th&agrave;nh L&acirc;m Phong. Nhưng chinh phục giấc mơ ấy quả thực kh&ocirc;ng dễ, tr&aacute;i tim mong manh bị bầm dập kh&ocirc;ng biết bao lần, đ&atilde; thế c&ograve;n mất sức g&acirc;y chiến c&atilde;i cọ với t&ecirc;n oan gia ng&otilde; hẹp Lục Tử Kiề<br />\r\n<br />\r\nVề t&aacute;c giả</p>\r\n\r\n<p>Được coi như &ldquo;nữ ho&agrave;ng&rdquo; của d&ograve;ng s&aacute;ch cảm hứng d&agrave;nh cho ph&aacute;i nữ với những t&aacute;c phẩm thay đổi tư duy h&agrave;ng triệu phụ nữ Trung Quốc.</p>\r\n\r\n<p>Rất th&iacute;ch, rất th&iacute;ch em l&agrave; &ldquo;giấc mơ thanh xu&acirc;n&rdquo; m&agrave; V&atilde;n T&igrave;nh ấp ủ trong nhiều năm trời để viết n&ecirc;n.</p>\r\n\r\n<p>C&aacute;c t&aacute;c phẩm đ&atilde; xuất bản:</p>\r\n\r\n<p>- Bạn đắt gi&aacute; bao nhi&ecirc;u?</p>\r\n\r\n<p style=\"text-align:justify\">- Kh&iacute; chất bao nhi&ecirc;u &ndash; Hạnh ph&uacute;c bấy nhi&ecirc;u</p>\r\n\r\n<p>- Kh&ocirc;ng tự khinh bỉ &ndash; Kh&ocirc;ng tự ph&iacute; ho&agrave;i</p>\r\n\r\n<p>- Kh&ocirc;ng sợ chậm Chỉ sợ dừng</p>\r\n', '10', 'rat_thich_rat_thich_em1626781622.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Bloom Books</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-20 11:47:02', '2021-07-20 12:34:32'),
(28, 'Em Vốn Thích Cô Độc, Cho Đến Khi Có Anh (Tái bản 2020)', 80000, 0, 10, '<p>T&aacute;c giả: Diệp Lạc V&ocirc; T&acirc;m</p>\r\n', '<p style=\"text-align:justify\">Một h&ocirc;m, t&ocirc;i đi l&agrave;m lại qu&ecirc;n mang điện thoại. T&ocirc;i muốn về nh&agrave; lấy, nhưng lại bận kh&ocirc;ng dứt ra được, đang l&uacute;c băn khoăn th&igrave; nh&igrave;n thấy Kẻ phiền phức bước thẳng v&agrave;o ph&ograve;ng, điềm đạm đặt chiếc di động m&agrave; t&ocirc;i đang cần l&ecirc;n b&agrave;n.</p>\r\n\r\n<p style=\"text-align:justify\">Y&ecirc;u anh qu&aacute; đi!&rdquo; T&ocirc;i vội v&agrave;ng th&igrave; thầm v&agrave;o tai hắn, rồi lập tức lấy điện thoại xem.</p>\r\n\r\n<p style=\"text-align:justify\">Rốt cuộc th&igrave; c&oacute; chuyện g&igrave; em mới kh&ocirc;ng qu&ecirc;n đ&acirc;y hả?&rdquo; Kẻ phiền phức ch&aacute;n nản n&oacute;i.</p>\r\n\r\n<p style=\"text-align:justify\">T&ocirc;i lặng lẽ liếc nh&igrave;n hắn một c&aacute;i, n&oacute;i nhỏ: &ldquo;&hellip; Y&ecirc;u anh!&rdquo;</p>\r\n\r\n<p style=\"text-align:justify\">Mặt hắn đang hầm hầm bỗng trở n&ecirc;n rạng rỡ.</p>\r\n\r\n<p style=\"text-align:justify\">L&uacute;c rời khỏi văn ph&ograve;ng t&ocirc;i, kh&oacute;e mắt hắn c&ograve;n mang &yacute; cười.</p>\r\n', '9', 'em_von_thich_co_doc_cho_den_khi_co_anh1626782006.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Đinh Tị</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-20 11:53:26', '2021-07-20 14:05:19'),
(29, 'Nụ Hôn Của Sói (Tái Bản 2018)', 80000, 1, 3, '<p>T&aacute;c giả: Diệp Lạc V&ocirc; T&acirc;m</p>\r\n', '<p><strong>Nụ H&ocirc;n Của S&oacute;i (T&aacute;i Bản 2018)</strong></p>\r\n\r\n<p>Nếu An Dĩ Phong kh&ocirc;ng t&iacute;nh l&agrave; đ&agrave;n &ocirc;ng, tr&ecirc;n thế giới n&agrave;y kh&ocirc;ng ai d&aacute;m n&oacute;i ch&iacute;nh m&igrave;nh l&agrave; đ&agrave;n &ocirc;ng!</p>\r\n\r\n<p>Nếu An Dĩ Phong kh&ocirc;ng t&iacute;nh l&agrave; y&ecirc;u nghiệt, như vậy, tr&ecirc;n thế giới n&agrave;y cũng kh&ocirc;ng hề c&oacute; y&ecirc;u nghiệ</p>\r\n\r\n<p>Hắn l&agrave; một người đ&agrave;n &ocirc;ng như vậy, rong ruổi giang hồ mười lăm năm, ai d&aacute;m c&ugrave;ng hắn một c&acirc;u tr&aacute;i &yacute;, về sau đừng nghĩ mở miệng n&oacute;i chuyện. Hắn ki&ecirc;u ngạo ương ngạnh, ho&agrave;nh h&agrave;nh ngang dọc, hắn c&ocirc; độc, mệt mỏ nhưng mấy ai biết rằng, trong tim hắn chỉ c&oacute; một b&oacute;ng h&igrave;nh, v&agrave; c&oacute; một người lặng lẽ y&ecirc;u hắn, chờ hắ ở một nơi rất xa.</p>\r\n\r\n<p style=\"text-align:justify\">H&agrave;i hước, l&atilde;ng mạn, mi&ecirc;u tả t&acirc;m l&yacute; nh&acirc;n vật cực kh&eacute;o, cốt truyện gay cấn, t&aacute;c giả đ&atilde; tạo cho c&acirc;u chuyện t&igrave;nh y&ecirc;u đầy m&agrave;u sắc cổ t&iacute;ch giữa một nữ cảnh s&aacute;t v&agrave; anh ch&agrave;ng lừng lẫy chốn giang hồ sự hấp dẫn đặc biệt. Đan xen v&agrave;o c&acirc;u chuyện t&igrave;nh y&ecirc;u n&agrave;y l&agrave; c&acirc;u chuyện của t&igrave;nh bạn, t&igrave;nh anh em, t&igrave;nh cha con, của nghĩa kh&iacute;, chữ t&iacute;n v&agrave; sức mạnh của những ước mơ. Đ&oacute; ch&iacute;nh l&agrave; những điều tốt đẹp trong cuộc đời n&agrave;y.</p>\r\n', '10', 'nu_hon_cua_soi1626782280.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Đinh Tị</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-20 11:58:00', '2021-07-21 12:06:49'),
(30, 'Sự Dịu Dàng Khó Cưỡng (Tái Bản 2019)', 60000, 1, 4, '<p>T&aacute;c giả: Diệp Lạc V&ocirc; T&acirc;m</p>\r\n', '<p style=\"text-align:justify\">Sinh nhật lần thứ 14, Quan Tiểu &Uacute;c gặp t&igrave;nh y&ecirc;u s&eacute;t đ&aacute;nh tại Bule Pub. Anh ch&agrave;ng lạ mắt tr&ocirc;ng cao qu&yacute; v&agrave; hấp dẫn đ&atilde; thu h&uacute;t &aacute;nh nh&igrave;n v&agrave; tr&aacute;i tim c&ocirc; b&eacute; mới lớn. Rồi khi nh&igrave;n ch&agrave;ng trai xa lạ kia kho&aacute;c vai người đẹp rời đi, &ldquo;mối t&igrave;nh đầu thơ ng&acirc;y&rdquo; của c&ocirc; bỗng tan th&agrave;nh m&acirc;y kh&oacute;i.<br />\r\n<br />\r\nNăm c&ocirc; 22 tuổi, bố mẹ c&ocirc; sắp xếp một cuộc gặp mặt với &Acirc;u Dương Y Ph&agrave;m, anh ch&agrave;ng nổi tiếng đẹp trai, giỏi giang, con nh&agrave; gia, hai nh&agrave; đ&atilde; c&oacute; hẹn ước với nhau từ nhỏ. Nhưng v&igrave; nghe n&oacute;i anh ta l&agrave; một &ldquo;hoa hoa c&ocirc;ng tử&rdquo;, thay người y&ecirc;u c&ograve;n nhanh hơn cả thay &aacute;o, Quan Tiểu &Uacute;c chưa kịp gặp mặt đ&atilde; l&eacute;n trốn đi mất. C&ocirc; rất gh&eacute;t loại người như anh ta.<br />\r\n<br />\r\nRời khỏi qu&aacute;n tr&agrave;, c&ocirc; v&ocirc; t&igrave;nh đụng phải Ivan, anh ch&agrave;ng đẹp trai c&ocirc; t&igrave;nh cờ gặp trong bữa tiệc sinh nhật một người bạn. V&agrave; trong l&uacute;c &ldquo;nguy cấp&rdquo;, c&ocirc; đ&atilde; l&ecirc;n xe anh ta để chạy trốn khỏi cuộc gặp kh&ocirc;ng mong muốn. Tiếp x&uacute;c nhiều với Ivan, c&ocirc; mới hiểu đằng sau khu&ocirc;n mặt bất cần đời, lu&ocirc;n ung dung, tươi cười kia l&agrave; một người hết l&ograve;ng v&igrave; bạn b&egrave;, một con người quyết đo&aacute;n trong c&ocirc;ng việc đầy &aacute;p lực v&agrave; hơn hết l&agrave; một tr&aacute;i tim si t&igrave;nh trong t&igrave;nh y&ecirc;u. Dần dần c&ocirc; c&oacute; cảm t&igrave;nh rồi rung động trước Ivan, quyết định cho anh cơ hội để c&oacute; thể trở th&agrave;nh bạn trai của c&ocirc;.<br />\r\n<br />\r\nNhưng định mệnh thật trớ tr&ecirc;u khi đến sinh nhật lần thứ 23, Tiểu &Uacute;c ph&aacute;t hiện t&ecirc;n hoa hoa c&ocirc;ng tử &Acirc;u Dương Y Ph&agrave;m v&agrave; Ivan h&oacute;a ra chỉ l&agrave; một người&hellip;</p>\r\n', '9', 'su_diu_dang_kho_cuong1626782649.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Đinh Tị</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-20 12:04:10', '2021-07-21 12:07:27'),
(31, 'Chờ Em Lớn Nhé Được Không (Tái Bản 2019)', 70000, 1, 5, '<p>T&aacute;c giả: Diệp Lạc V&ocirc; T&acirc;m</p>\r\n', '<p style=\"text-align:justify\">H&agrave;n Mạt Mạt, từ năm 8 tuổi đến năm 18 tuổi, cả cuộc sống của c&ocirc; chỉ biết c&oacute; anh, cần anh, theo anh, v&igrave; anh&hellip; Nếu đ&oacute; kh&ocirc;ng phải l&agrave; t&igrave;nh y&ecirc;u, phải chăng Mạt Mạt sẽ kh&ocirc;ng cần đau l&ograve;ng th&ecirc;m nữa? Khi nhận ra t&igrave;nh y&ecirc;u trẻ thơ của m&igrave;nh đối với anh chỉ l&agrave; g&aacute;nh nặng, c&ocirc; đ&atilde; quyết định bu&ocirc;ng tay, rời xa sự che chở của anh, rời xa sự ấm &aacute;p của anh. Nếu hạnh ph&uacute;c của c&ocirc; phải đ&aacute;nh đổi bằng sự chịu đựng của anh th&igrave; c&oacute; lẽ cả đời n&agrave;y Mạt Mạt kh&ocirc;ng cần thứ hạnh ph&uacute;c xa xỉ ấy nữa.<br />\r\nAn Nặc H&agrave;n, từ năm 14 tuổi đến năm 32 tuổi, từ l&uacute;c n&agrave;o m&agrave; thứ t&igrave;nh cảm cưng chiều, che chở của người anh trai với em g&aacute;i đ&atilde; biến th&agrave;nh những cảm x&uacute;c kh&oacute; kiểm so&aacute;t? Anh vẫn nghĩ rằng c&ocirc; b&eacute; con của anh c&ograve;n qu&aacute; nhỏ để hiểu thế n&agrave;o l&agrave; t&igrave;nh y&ecirc;u, c&ograve;n qu&aacute; nhỏ để đ&aacute;nh đồng sự dựa dẫm ấy l&agrave; thứ t&igrave;nh cảm nam nữ, chỉ cần đợi đến khi c&ocirc; t&igrave;m thấy t&igrave;nh y&ecirc;u thực sự ở một người kh&aacute;c th&igrave; t&igrave;nh th&acirc;n giữa họ vẫn l&agrave; một mối d&acirc;y li&ecirc;n hệ kh&ocirc;ng thể t&aacute;ch rời. Anh đ&atilde; đợi, đợi từ khi Mạt Mạt 8 tuổi đến khi c&ocirc; 15 tuổi, đợi đến khi Mạt Mạt nản l&ograve;ng tho&aacute;i ch&iacute; m&agrave; bu&ocirc;ng tay, l&uacute;c ấy anh mới nhận ra ch&iacute;nh m&igrave;nh mới l&agrave; người kh&ocirc;ng hiểu t&igrave;nh y&ecirc;u l&agrave; g&igrave;. Nếu nỗi nhớ nhung khi xa c&ocirc; kh&ocirc;ng phải l&agrave; t&igrave;nh y&ecirc;u, nếu sự c&ocirc; đơn bao tr&ugrave;m khi thấy c&ocirc; b&ecirc;n người kh&aacute;c kh&ocirc;ng phải l&agrave; t&igrave;nh y&ecirc;u, c&oacute; phải An Nặc H&agrave;n sẽ kh&ocirc;ng thấy đau đớn như thế?</p>\r\n', '2', 'cho_em_lon_nhe_co_duoc_khong1626782813.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Đinh Tị</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-20 12:06:53', '2021-07-23 06:09:59'),
(32, 'Động Phòng Hoa Chúc Cách Vách (Tái Bản 2019)', 80000, 1, 3, '<p>T&aacute;c giả: Diệp Lạc V&ocirc; T&acirc;m</p>\r\n', '<p style=\"text-align:justify\">Kh&ocirc;ng ai thực sự biết r&otilde; về Diệp Ch&iacute;nh Thần. Diệp Ch&iacute;nh Thần &ndash; sinh vi&ecirc;n y khoa của trường đại học Osaka, một anh ch&agrave;ng lăng nhăng th&iacute;ch cặp k&egrave; với những c&ocirc; g&aacute;i đẹp tr&ecirc;n chiếc xe &ocirc; t&ocirc; đắt tiền hay Diệp Ch&iacute;nh Thần &ndash; một qu&acirc;n nh&acirc;n lạnh l&ugrave;ng ẩn chứa nhiều b&iacute; mật? Cả Bạc Băng cũng vậy, d&ugrave; anh c&oacute; n&oacute;i c&ocirc; h&atilde;y tin anh như thế n&agrave;o, bất chấp t&igrave;nh y&ecirc;u c&ocirc; d&agrave;nh cho anh ra sao th&igrave; vẫn kh&ocirc;ng thể x&oacute;a nh&ograve;a đi hiện thực rằng anh đang che giấu c&ocirc; qu&aacute; nhiều thứ</p>\r\n', '10', 'dong_phong_hoc_chuc_cach_vach1626782929.jpg', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Đinh Tị</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-20 12:08:49', '2021-07-21 12:07:58'),
(33, 'Combo 2 Tập: Ngỡ Chỉ Là Thoáng Qua Mà Một Đời Thương Nhớ', 310000, 1, 10, '<p>T&aacute;c giả: Thư Nghi</p>\r\n', '<p style=\"text-align:justify\">Một đời chỉ y&ecirc;u một lần, ch&iacute;nh l&agrave; k&yacute; ức khắc cốt ghi t&acirc;m nhất.<br />\r\n<br />\r\nC&oacute; một số người trong v&ograve;ng xoay vận mệnh, nếu như ngay từ đầu đ&atilde; định sẵn đến cuối c&ugrave;ng l&agrave; sự ly biệt đau thương, vậy bạn vẫn sẽ lựa chọn gặp gỡ thuở ban đầu?<br />\r\n<br />\r\nBạn vĩnh viễn kh&ocirc;ng thể biết rằng, gặp được người đ&oacute;, y&ecirc;u người đ&oacute;, cuộc đời của bạn sẽ thay đổi th&agrave;nh như thế n&agrave;o.<br />\r\n<br />\r\n&ldquo;Ngỡ chỉ l&agrave; tho&aacute;ng qua, m&agrave; một đời thương nhớ&rdquo; l&agrave; t&aacute;c phẩm mới nhất của nh&agrave; văn Thư Nghi, v&agrave; cũng l&agrave; một &ldquo;người anh em&rdquo; với cuốn s&aacute;ch nổi tiếng &ldquo;Từng c&oacute; người y&ecirc;u t&ocirc;i như sinh mệnh&rdquo; đ&atilde; khiến bao bạn đọc thổn thức.<br />\r\n<br />\r\nCũng giống như c&aacute;i t&ecirc;n của m&igrave;nh, cuốn s&aacute;ch l&agrave; c&acirc;u chuyện t&igrave;nh đẹp v&agrave; buồn giữa Nghi&ecirc;m Cẩn v&agrave; Qu&yacute; Hiểu &Acirc;u - một người đ&agrave;n &ocirc;ng &ldquo;lu&ocirc;n giấu đi tr&aacute;i tim m&igrave;nh&rdquo; v&agrave; một c&ocirc; g&aacute;i lu&ocirc;n biết c&aacute;ch đi v&agrave;o l&ograve;ng người bằng sự dịu d&agrave;ng từ tr&aacute;i tim.<br />\r\n<br />\r\nNghi&ecirc;m Cẩn c&oacute; ngoại h&igrave;nh v&ocirc; c&ugrave;ng xuất ch&uacute;ng, lại l&agrave; &ocirc;ng chủ của một nh&agrave; h&agrave;ng c&oacute; thu nhập cao ch&oacute;t v&oacute;t, thế n&ecirc;n anh đi đến đ&acirc;u cũng nhận được mu&ocirc;n v&agrave;n &aacute;nh mắt ngưỡng mộ. Với mọi người, anh lu&ocirc;n nở nụ cười ngả ngớn tr&ecirc;n m&ocirc;i, vẻ mặt bất cần, quần &aacute;o s&agrave;nh điệu, chơi bời ph&aacute; hoại kh&ocirc;ng thiếu thứ g&igrave;. Nhưng &iacute;t ai biết được, rằng đằng sau vẻ ngo&agrave;i ngỗ ngược đ&oacute;, l&agrave; một tr&aacute;i tim kh&ocirc;ng ngừng rỉ m&aacute;u với những vết sẹo chồng ch&eacute;o l&ecirc;n nhau.<br />\r\n<br />\r\nNghi&ecirc;m Cẩn đối với Qu&yacute; Hiểu &Acirc;u, ch&iacute;nh l&agrave; &ldquo;nhất kiến chung t&igrave;nh&rdquo;. Nhưng ngay lần đầu ti&ecirc;n gặp mặt trong thang m&aacute;y, c&ocirc; đ&atilde; kh&ocirc;ng c&oacute; thiện cảm với anh, đ&atilde; vậy, c&ocirc; lại lu&ocirc;n t&igrave;m c&aacute;ch tr&aacute;nh anh c&agrave;ng xa c&agrave;ng tốt. Kh&ocirc;ng c&ograve;n c&aacute;ch n&agrave;o kh&aacute;c, anh đ&agrave;nh phải giả vờ l&agrave; người đồng t&iacute;nh để c&oacute; thể tiếp cận c&ocirc;. Chỉ c&oacute; như vậy, c&ocirc; mới kh&ocirc;ng đề ph&ograve;ng anh v&agrave; đối xử với anh như bạn b&egrave;.<br />\r\n<br />\r\nThật ra, xung quanh Nghi&ecirc;m Cẩn kh&ocirc;ng thiếu những c&ocirc; g&aacute;i xinh đẹp, nhưng anh lại chỉ để mắt tới một m&igrave;nh c&ocirc; g&aacute;i c&oacute; nụ cười tươi tắn v&agrave; hồn nhi&ecirc;n giống như b&eacute; con vừa tỉnh ngủ ấy.<br />\r\n<br />\r\nQu&yacute; Hiểu &Acirc;u thực sự l&agrave; một c&ocirc; g&aacute;i lương thiện. C&ocirc; thiện lương đến mức gần như ngu ngốc, cố gắng hết sức chăm s&oacute;c một người mẹ bệnh nặng liệt giường, một sinh vi&ecirc;n đại học rắc rối đầy m&igrave;nh. Nhưng ch&iacute;nh v&igrave; sự tin người đến ngốc nghếch đ&oacute; của c&ocirc;, m&agrave; anh lại c&agrave;ng v&ocirc; thức l&uacute;n s&acirc;u v&agrave;o thế giới của c&ocirc;, m&atilde;i kh&ocirc;ng thể tự tho&aacute;t ra được. Đ&atilde; vậy, lại c&ograve;n c&ugrave;ng c&ocirc; dấn th&acirc;n v&agrave;o những phiền phức v&agrave; hiểm nguy chưa từng c&oacute;.<br />\r\n<br />\r\nC&oacute; người n&oacute;i, c&ocirc; l&agrave; &aacute;nh mặt trời tươi s&aacute;ng duy nhất c&ograve;n s&oacute;t lại tr&ecirc;n thế giới n&agrave;y. Thế nhưng, người đ&oacute; cũng n&oacute;i: trong cuộc sống lu&ocirc;n c&oacute; những người m&agrave; cuộc đời vốn mịt mờ, tăm tối, kh&ocirc;ng thể n&agrave;o c&oacute; chỗ d&agrave;nh cho &aacute;nh nắng ấm &aacute;p chan h&ograve;a. V&agrave; người đ&oacute; ch&iacute;nh l&agrave; Trạm Vũ - một ch&agrave;ng trai c&oacute; đ&ocirc;i mắt lu&ocirc;n chất chứa những u buồn.<br />\r\n<br />\r\nTrạm Vũ c&oacute; một người mẹ bị bệnh nặng, v&igrave; muốn chữa khỏi bệnh cho mẹ, v&agrave; để c&oacute; tiền đ&oacute;ng học ph&iacute;, cậu đ&atilde; chấp nhận l&agrave;m c&ocirc;ng việc m&agrave; m&igrave;nh kh&ocirc;ng muốn. Thế nhưng, thật kh&ocirc;ng may, c&oacute; một ng&agrave;y cậu lại bị s.&aacute; h.ạ một c&aacute;ch d.&atilde; , hung thủ ra tay v&ocirc; c&ugrave;ng độc &aacute;c v&agrave; t&agrave;n nhẫn, khiến t.h.ể Trạm Vũ bị chia th&agrave;nh nhiều mảnh.<br />\r\n<br />\r\nĐặc biệt, đ&ecirc;m trước khi bị nạn, Trạm Vũ đ&atilde; đến t&igrave;m Nghi&ecirc;m Cẩn, đồng thời tổ chuy&ecirc;n &aacute;n c&ograve;n t&igrave;m thấy một chiếc bật lửa b&ecirc;n cạnh thi thể của cậu. Đ&oacute; l&agrave; di vật duy nhất của T&ocirc;n Gia Ngộ trước khi c.h.ế để lại cho người bạn ch&iacute; cốt Nghi&ecirc;m Cẩn, kh&ocirc;ng ngờ đ&oacute; lại l&agrave; chứng cứ buộc tội anh.<br />\r\n<br />\r\nNghi&ecirc;m Cẩn bị kết tội mưu s&aacute;t, c&oacute; thể phải chịu &aacute;n tử h&igrave;nh, d&ugrave; trước đ&oacute; anh đ&atilde; gi&uacute;p đỡ Trạm Vũ rất nhiều.<br />\r\n<br />\r\nTrong khi mọi chứng cứ đều buộc tội anh, chỉ Qu&yacute; Hiểu &Acirc;u vẫn lu&ocirc;n tin rằng Nghi&ecirc;m Cẩn bị oan v&agrave; c&ocirc; bắt đầu tự m&igrave;nh điều tra. Thế nhưng, c&aacute;i gi&aacute; phải trả để t&igrave;m ra được sự thật lại qu&aacute; đắt&hellip;<br />\r\n<br />\r\nLiệu rằng c&ocirc; g&aacute;i thiện lương Qu&yacute; Hiểu &Acirc;u đ&atilde; l&agrave;m như thế n&agrave;o để t&igrave;m ra được sự thật đằng sau vụ &aacute;n v&agrave; trả lại c&ocirc;ng bằng cho người c&ocirc; y&ecirc;u? C&acirc;u trả lời đang chờ bạn trong trọn bộ 2 cuốn s&aacute;ch &ldquo;Ngỡ chỉ l&agrave; tho&aacute;ng qua, m&agrave; một đời thương nhớ&rdquo;.<br />\r\n<br />\r\nTh&igrave; ra tr&ecirc;n đời n&agrave;y kh&ocirc;ng c&oacute; cuộc gặp gỡ n&agrave;o l&agrave; v&ocirc; hạn, cũng chẳng c&oacute; sự ly biệt n&agrave;o l&agrave; m&atilde;i m&atilde;i.<br />\r\n<br />\r\nT&igrave;nh cảm m&agrave; ch&uacute;ng ta đ&atilde; bỏ ra, sự tương ph&ugrave;ng m&agrave; ch&uacute;ng ta tr&acirc;n qu&yacute;, người m&agrave; ch&uacute;ng ta đ&atilde; từng &ocirc;m trong v&ograve;ng tay, những tưởng l&agrave; sẽ m&atilde;i m&atilde;i ở cạnh nhau, rồi sẽ c&oacute; một ng&agrave;y, cuối c&ugrave;ng vẫn sẽ mất đi, vẫn sẽ phải n&eacute;n nỗi đau trong l&ograve;ng m&agrave; n&oacute;i một lời tạm biệt.<br />\r\n<br />\r\nEm kh&ocirc;ng muốn phải đợi đến ng&agrave;y đ&oacute; th&igrave; mới nhận ra ch&uacute;ng ta y&ecirc;u đối phương s&acirc;u đậm hơn m&igrave;nh tưởng rất nhiều. Thế n&ecirc;n sau n&agrave;y, cho d&ugrave; gia đ&igrave;nh anh, em g&aacute;i anh c&oacute; trở th&agrave;nh bụi gai cản đường trong cuộc đời em đi chăng nữa, th&igrave; em cũng sẽ kh&ocirc;ng dễ d&agrave;ng từ bỏ anh đ&acirc;u.<br />\r\n<br />\r\nL&uacute;c n&agrave;y, b&ecirc;n ngo&agrave;i cửa sổ, trời vừa mưa xong v&agrave; đang nắng, nước đang nhỏ xuống từ những chiếc l&aacute; non xanh mơn mởn, gi&oacute; đang thổi hương hoa ngọc lan tiễn bước ch&acirc;n người qua đường. C&ograve;n em, chỉ cần ngửi thấy m&ugrave;i hương dịu ngọt n&agrave;y l&agrave; lại nhớ anh&hellip;<br />\r\n<br />\r\nEm đợi anh&hellip; đợi anh trở về.</p>\r\n', '5', 'ngo_chi_la_thoang_qua_ma_mot_doi_thuong_nho1626787702.png', 14, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>AMUN</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-07-20 13:23:09', '2021-07-23 06:09:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_question`
--

CREATE TABLE `tbl_question` (
  `id_question` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_question`
--

INSERT INTO `tbl_question` (`id_question`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(2, '<p>L&agrave;m thế n&agrave;o để t&ocirc;i đặt h&agrave;ng qua website?</p>\r\n', '<p><strong>1.T&igrave;m kiếm sản phẩm:</strong></p>\r\n\r\n<p>- G&otilde; t&ecirc;n sản phẩm v&agrave;o thanh t&igrave;m kiếm.</p>\r\n\r\n<p>- T&igrave;m theo danh mục.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Th&ecirc;m sản phẩm v&agrave;o giỏ h&agrave;ng:</strong></p>\r\n\r\n<p>Khi đ&atilde; t&igrave;m được sản phẩm mong muốn, qu&yacute; kh&aacute;ch vui l&ograve;ng bấm v&agrave;o h&igrave;nh hoặc t&ecirc;n sản phẩm để v&agrave;o được trang th&ocirc;ng tin chi tiết của sản phẩm, sau đ&oacute;:</p>\r\n\r\n<p>- Kiểm tra th&ocirc;ng tin sản phẩm: gi&aacute;, th&ocirc;ng tin khuyến m&atilde;i.</p>\r\n\r\n<p>- Chọn số lượng mong muốn.</p>\r\n\r\n<p>- Th&ecirc;m sản phẩm v&agrave;o giỏ h&agrave;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3. Kiểm tra giỏ h&agrave;ng v&agrave; đặt h&agrave;ng:</strong></p>\r\n\r\n<p>Sau khi qu&yacute; kh&aacute;ch đ&atilde; c&oacute; đủ sản phẩm cần đặt trong giỏ h&agrave;ng, vui l&ograve;ng&nbsp;m&atilde; giảm gi&aacute;&nbsp;(nếu c&oacute;)&nbsp;v&agrave;&nbsp;tiếp tục c&aacute;c bước sau để đặt h&agrave;ng:</p>\r\n\r\n<p>- Chọn sản phẩm qu&yacute; kh&aacute;ch muốn mua v&agrave; điều chỉnh số lượng ph&ugrave; hợp.</p>\r\n\r\n<p>- Q&uacute;y kh&aacute;ch điền đầy đủ th&ocirc;ng tin đặt h&agrave;ng</p>\r\n\r\n<p>- Bấm &ldquo;Gửi đơn h&agrave;ng&rdquo; để bắt đầu đặt h&agrave;ng.</p>\r\n', '2021-07-12 14:09:03', '2021-07-13 14:11:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_return_policy`
--

CREATE TABLE `tbl_return_policy` (
  `id_return_policy` int(11) NOT NULL,
  `content_return_policy` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_return_policy`
--

INSERT INTO `tbl_return_policy` (`id_return_policy`, `content_return_policy`, `created_at`, `updated_at`) VALUES
(2, '<p>Thay đổi bảo h&agrave;nh</p>\r\n', '2021-07-13 14:52:18', '2021-07-13 14:54:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id_slider` int(11) NOT NULL,
  `title_slider` varchar(255) NOT NULL,
  `desc_slider` text NOT NULL,
  `image_slider` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`id_slider`, `title_slider`, `desc_slider`, `image_slider`, `created_at`, `updated_at`) VALUES
(3, 'Ảnh bìa trang chủ 1', '<p>Ảnh b&igrave;a trang chủ s&ocirc; 1</p>\r\n', 'anhbia11625063530.jpg', '2021-07-05 14:02:41', '2021-07-05 14:02:41'),
(4, 'Ảnh bìa trang chủ 2', '<p>Ảnh b&igrave;a trang chủ 2</p>\r\n', 'anhbia21625065685.jpg', '2021-07-05 14:02:41', '2021-07-05 14:02:41'),
(5, 'Ảnh bìa trang chủ 3', '<p>Ảnh b&igrave;a trang chủ 3</p>\r\n', 'anhbia41625065813.jpg', '2021-07-05 14:02:41', '2021-07-05 14:02:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_warrantly_policy`
--

CREATE TABLE `tbl_warrantly_policy` (
  `id_warrantly_policy` int(11) NOT NULL,
  `content_warrantly_policy` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_warrantly_policy`
--

INSERT INTO `tbl_warrantly_policy` (`id_warrantly_policy`, `content_warrantly_policy`, `created_at`, `updated_at`) VALUES
(2, '<p>Thay đổi bảo h&agrave;nh</p>\r\n', '2021-07-13 14:55:46', '2021-07-13 14:55:54');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  ADD PRIMARY KEY (`id_category_post`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`id_category_product`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `tbl_contact_customer`
--
ALTER TABLE `tbl_contact_customer`
  ADD PRIMARY KEY (`id_contact_customer`);

--
-- Chỉ mục cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_ordering_guide`
--
ALTER TABLE `tbl_ordering_guide`
  ADD PRIMARY KEY (`id_ordering_guide`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_category_post` (`id_category_post`);

--
-- Chỉ mục cho bảng `tbl_privacy_policy`
--
ALTER TABLE `tbl_privacy_policy`
  ADD PRIMARY KEY (`id_privacy_policy`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category_product` (`id_category_product`);

--
-- Chỉ mục cho bảng `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`id_question`);

--
-- Chỉ mục cho bảng `tbl_return_policy`
--
ALTER TABLE `tbl_return_policy`
  ADD PRIMARY KEY (`id_return_policy`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Chỉ mục cho bảng `tbl_warrantly_policy`
--
ALTER TABLE `tbl_warrantly_policy`
  ADD PRIMARY KEY (`id_warrantly_policy`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  MODIFY `id_category_post` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `id_category_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_contact_customer`
--
ALTER TABLE `tbl_contact_customer`
  MODIFY `id_contact_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `tbl_ordering_guide`
--
ALTER TABLE `tbl_ordering_guide`
  MODIFY `id_ordering_guide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_privacy_policy`
--
ALTER TABLE `tbl_privacy_policy`
  MODIFY `id_privacy_policy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_return_policy`
--
ALTER TABLE `tbl_return_policy`
  MODIFY `id_return_policy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_warrantly_policy`
--
ALTER TABLE `tbl_warrantly_policy`
  MODIFY `id_warrantly_policy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_ibfk_1` FOREIGN KEY (`id_category_post`) REFERENCES `tbl_category_post` (`id_category_post`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_category_product`) REFERENCES `tbl_category_product` (`id_category_product`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
