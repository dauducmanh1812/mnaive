-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2019 lúc 04:56 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `onlineflea`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) UNSIGNED NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodiem` int(10) DEFAULT NULL,
  `traloi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kieubl` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `sanpham_id`, `user_id`, `hoten`, `email`, `noidung`, `sodiem`, `traloi`, `kieubl`, `created_at`, `updated_at`) VALUES
(29, 22, 2, 'manhdd1', 'manhdd1@asdsad.com', 'Mặt hàng này còn không ạ ?', 4, NULL, 0, '2019-11-20 08:41:33', '2019-11-20 08:41:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdon`
--

CREATE TABLE `chitietdon` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `donhangshop_id` int(10) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(10) NOT NULL,
  `mausac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdon`
--

INSERT INTO `chitietdon` (`id`, `shop_id`, `donhangshop_id`, `sanpham_id`, `soluong`, `mausac`, `size`, `created_at`, `updated_at`) VALUES
(68, 1, 57, 11, 1, NULL, NULL, '2017-12-13 06:40:09', '2017-12-13 06:40:09'),
(69, 1, 57, 19, 1, NULL, NULL, '2017-12-13 06:40:09', '2017-12-13 06:40:09'),
(70, 1, 57, 22, 1, NULL, NULL, '2017-12-13 06:40:09', '2017-12-13 06:40:09'),
(71, 2, 58, 23, 1, NULL, NULL, '2017-12-13 06:40:09', '2017-12-13 06:40:09'),
(72, 1, 59, 22, 1, NULL, NULL, '2017-12-14 06:28:59', '2017-12-14 06:28:59'),
(73, 1, 59, 19, 1, NULL, NULL, '2017-12-14 06:29:00', '2017-12-14 06:29:00'),
(74, 2, 60, 24, 1, NULL, NULL, '2017-12-14 06:29:00', '2017-12-14 06:29:00'),
(75, 1, 61, 11, 1, NULL, NULL, '2017-12-14 08:32:14', '2017-12-14 08:32:14'),
(76, 2, 62, 23, 1, NULL, NULL, '2017-12-14 08:32:14', '2017-12-14 08:32:14'),
(77, 1, 63, 11, 1, NULL, NULL, '2017-12-14 08:35:26', '2017-12-14 08:35:26'),
(78, 2, 64, 23, 1, NULL, NULL, '2017-12-14 08:35:26', '2017-12-14 08:35:26'),
(79, 1, 65, 11, 1, NULL, NULL, '2019-11-11 06:08:19', '2019-11-11 06:08:19'),
(80, 1, 66, 22, 1, NULL, NULL, '2019-11-21 05:59:59', '2019-11-21 05:59:59'),
(81, 1, 67, 22, 2, NULL, NULL, '2019-11-23 15:37:23', '2019-11-23 15:37:23'),
(82, 2, 68, 23, 1, NULL, NULL, '2019-11-23 15:37:23', '2019-11-23 15:37:23'),
(83, 1, 69, 22, 1, NULL, NULL, '2019-11-23 15:39:51', '2019-11-23 15:39:51'),
(84, 2, 70, 23, 1, NULL, NULL, '2019-11-23 15:44:12', '2019-11-23 15:44:12'),
(85, 1, 71, 22, 1, NULL, NULL, '2019-11-23 15:52:53', '2019-11-23 15:52:53'),
(86, 2, 72, 24, 1, NULL, NULL, '2019-11-23 15:54:57', '2019-11-23 15:54:57'),
(87, 1, 73, 22, 1, NULL, NULL, '2019-11-23 16:23:08', '2019-11-23 16:23:08'),
(88, 1, 74, 22, 1, NULL, NULL, '2019-11-23 16:40:46', '2019-11-23 16:40:46'),
(89, 1, 75, 22, 1, NULL, NULL, '2019-11-23 16:49:47', '2019-11-23 16:49:47'),
(90, 1, 76, 22, 1, NULL, NULL, '2019-11-23 17:53:17', '2019-11-23 17:53:17'),
(91, 1, 77, 22, 2, NULL, NULL, '2019-11-23 18:05:50', '2019-11-23 18:05:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `sodiem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tongtien` double NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhthucthanhtoan` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `user_id`, `tongtien`, `hoten`, `email`, `sodienthoai`, `diachi`, `ghichu`, `hinhthucthanhtoan`, `created_at`, `updated_at`) VALUES
(61, 2, 0, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', NULL, NULL, '2019-11-21 06:06:57', '2019-11-21 06:06:57'),
(62, NULL, 0, 'đậu đức mạnh', 'ttducmanh.1812@gmail.com', '0912586034', 'áduhasuid', 'ádsad', 0, '2019-11-21 11:03:10', '2019-11-21 11:03:10'),
(63, 2, 640000, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', NULL, NULL, '2019-11-23 15:37:22', '2019-11-23 15:37:22'),
(64, 2, 0, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', NULL, NULL, '2019-11-23 15:38:46', '2019-11-23 15:38:46'),
(65, 2, 70000, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', NULL, NULL, '2019-11-23 15:39:51', '2019-11-23 15:39:51'),
(66, 2, 500000, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', NULL, NULL, '2019-11-23 15:44:12', '2019-11-23 15:44:12'),
(67, 2, 0, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', NULL, NULL, '2019-11-23 15:44:15', '2019-11-23 15:44:15'),
(68, 2, 70000, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', NULL, NULL, '2019-11-23 15:52:53', '2019-11-23 15:52:53'),
(69, 2, 200000, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', NULL, NULL, '2019-11-23 15:54:56', '2019-11-23 15:54:56'),
(70, 2, 70000, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', 'ádsad', NULL, '2019-11-23 16:23:08', '2019-11-23 16:23:08'),
(71, 2, 70000, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', 'ádsadsad', NULL, '2019-11-23 16:40:46', '2019-11-23 16:40:46'),
(72, 2, 70000, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', '123214 asdasd', NULL, '2019-11-23 16:49:47', '2019-11-23 16:49:47'),
(73, NULL, 0, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', 'asdsadsa', NULL, '2019-11-23 17:51:39', '2019-11-23 17:51:39'),
(74, NULL, 70000, 'ád', 'asd@gmail.com', 'áda', 'ádsad', 'sda', 1, '2019-11-23 17:53:17', '2019-11-23 17:53:17'),
(75, 2, 140000, 'manhdd1', 'manhdd1@asdsad.com', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', NULL, NULL, '2019-11-23 18:05:49', '2019-11-23 18:05:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangshop`
--

CREATE TABLE `donhangshop` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(11) NOT NULL,
  `donhang_id` int(10) NOT NULL,
  `tongtien` double NOT NULL,
  `tinhtrangdon` int(11) NOT NULL,
  `hinhthuc` int(11) NOT NULL,
  `nhanhang` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangshop`
--

INSERT INTO `donhangshop` (`id`, `shop_id`, `donhang_id`, `tongtien`, `tinhtrangdon`, `hinhthuc`, `nhanhang`, `created_at`, `updated_at`) VALUES
(57, 1, 48, 1870000, 1, 0, 1, '2017-12-13 17:32:50', '2017-12-13 17:33:07'),
(58, 2, 48, 500000, 1, 0, 1, '2019-11-11 06:19:42', '2019-11-11 06:19:42'),
(59, 1, 49, 1770000, 1, 0, 1, '2017-12-14 08:27:51', '2017-12-14 08:27:56'),
(60, 2, 49, 200000, 1, 0, 0, '2019-11-11 06:19:43', '2019-11-11 06:19:43'),
(61, 1, 50, 100000, 1, 0, 0, '2019-11-10 15:02:38', '2019-11-10 15:02:38'),
(62, 2, 50, 500000, 1, 0, 0, '2019-11-11 06:19:47', '2019-11-11 06:19:47'),
(63, 1, 51, 100000, 0, 0, 0, '2017-12-14 08:35:25', '2017-12-14 08:35:25'),
(64, 2, 51, 500000, 1, 0, 0, '2019-11-11 06:19:48', '2019-11-11 06:19:48'),
(65, 1, 69, 100000, 0, 0, 0, '2019-11-11 06:08:19', '2019-11-11 06:08:19'),
(66, 1, 55, 70000, 0, 0, 0, '2019-11-21 05:59:59', '2019-11-21 05:59:59'),
(67, 1, 63, 140000, 0, 0, 0, '2019-11-23 15:37:22', '2019-11-23 15:37:22'),
(68, 2, 63, 500000, 0, 0, 0, '2019-11-23 15:37:23', '2019-11-23 15:37:23'),
(69, 1, 65, 70000, 0, 0, 0, '2019-11-23 15:39:51', '2019-11-23 15:39:51'),
(70, 2, 66, 500000, 0, 0, 0, '2019-11-23 15:44:12', '2019-11-23 15:44:12'),
(71, 1, 68, 70000, 0, 0, 0, '2019-11-23 15:52:53', '2019-11-23 15:52:53'),
(72, 2, 69, 200000, 0, 0, 0, '2019-11-23 15:54:57', '2019-11-23 15:54:57'),
(73, 1, 70, 70000, 0, 0, 0, '2019-11-23 16:23:08', '2019-11-23 16:23:08'),
(74, 1, 71, 70000, 0, 0, 0, '2019-11-23 16:40:46', '2019-11-23 16:40:46'),
(75, 1, 72, 70000, 0, 0, 0, '2019-11-23 16:49:47', '2019-11-23 16:49:47'),
(76, 1, 74, 70000, 0, 0, 0, '2019-11-23 17:53:17', '2019-11-23 17:53:17'),
(77, 1, 75, 140000, 0, 0, 0, '2019-11-23 18:05:49', '2019-11-23 18:05:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenloaisanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `tenloaisanpham`) VALUES
(1, 'THỜI TRANG'),
(2, 'SÁCH'),
(3, 'ĐIỆN THOẠI\r\n'),
(4, 'VĂN PHÒNG PHẨM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(30, '2017_10_22_013414_create_sanphamshop_table', 1),
(34, '2017_10_22_012430_create_shop_table', 2),
(35, '2017_10_22_013337_create_sanpham_table', 2),
(36, '2017_10_22_014541_create_loaisanpham_table', 2),
(37, '2017_10_22_160630_create_taoshop_table', 2),
(38, '2017_10_22_161535_create_users_table', 2),
(39, '2017_11_01_135250_create_tichdiem_table', 3),
(40, '2017_11_01_140821_create_donhang_table', 3),
(41, '2017_11_01_141324_create_donhangshop_table', 3),
(42, '2017_11_01_141533_create_chitietdon_table', 3),
(43, '2017_11_01_142046_create_thanhtoan_table', 3),
(44, '2017_11_01_142330_create_binhluan_table', 3),
(45, '2017_11_01_142624_create_danhgia_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(11) NOT NULL,
  `loaisanpham_id` int(11) NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `kmtile` int(11) DEFAULT NULL,
  `kmdonggia` double DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(1) NOT NULL,
  `hangsx` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigiankmdonggia` datetime DEFAULT NULL,
  `thoigiankmtile` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `shop_id`, `loaisanpham_id`, `tensanpham`, `hinhanh`, `gia`, `kmtile`, `kmdonggia`, `mota`, `trangthai`, `hangsx`, `thoigiankmdonggia`, `thoigiankmtile`, `created_at`, `updated_at`) VALUES
(22, 1, 2, 'Sát thủ bán hàng', '8wKr_satthubanhang.png', 70000, NULL, NULL, '<p>Sách cung cấp kiến thức về bán hàng marketing chuyên nghiệp</p>', 0, 'ALPHABOOK', NULL, NULL, '2017-11-27 08:55:22', '2017-12-07 17:54:43'),
(23, 2, 1, 'giày Adidas mới về', 'Q5mQ_sTlw1N_simg_b5529c_250x250_maxb.jpeg', 500000, NULL, 500000, '<p>giày đẹp kiểu dáng tốt</p>', 0, 'ADIDAS', NULL, NULL, '2017-11-27 15:48:39', '2017-11-30 18:23:57'),
(24, 2, 2, 'ĐNT', 'aI3r_tải xuống.png', 200000, NULL, 500000, '<p>SÁCH</p>', 0, 'ALPHABOOK', NULL, NULL, '2017-11-27 15:51:09', '2017-11-30 16:17:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamshop`
--

CREATE TABLE `sanphamshop` (
  `id` int(10) UNSIGNED NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `soluongnhap` int(11) NOT NULL,
  `soluongxuat` int(11) NOT NULL,
  `sodiem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamshop`
--

INSERT INTO `sanphamshop` (`id`, `sanpham_id`, `shop_id`, `soluongnhap`, `soluongxuat`, `sodiem`) VALUES
(1, 11, 1, 12, 11, 13),
(2, 12, 1, 20, 5, 0),
(5, 19, 1, 26, 2, 4),
(6, 20, 1, 50, 0, 0),
(7, 21, 1, 40, 2, 1),
(8, 22, 1, 70, 15, 4),
(9, 23, 2, 50, 12, 0),
(10, 24, 2, 20, 2, 0),
(11, 25, 1, 112, 0, 0),
(12, 26, 1, 112, 0, 0),
(13, 27, 8, 212321, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop`
--

CREATE TABLE `shop` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenshop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shop`
--

INSERT INTO `shop` (`id`, `user_id`, `name`, `tenshop`, `created_at`, `updated_at`) VALUES
(1, 2, 'Admin', 'Shop1', '2017-11-01 07:34:24', '2017-11-01 07:34:39'),
(2, 2, 'Admin', 'Shop2', '2017-11-01 07:35:08', '2017-11-01 07:35:13'),
(3, 2, 'Admin', 'Shop3', '2017-11-02 00:16:32', '2017-11-02 00:16:43'),
(4, 2, 'Admin', 'Shop4', '2017-12-04 09:29:32', '2017-12-04 09:30:29'),
(7, 2, 'manhdd1', 'Shop5', '2019-11-10 14:14:48', '2019-11-10 14:25:39'),
(8, 2, 'manhdd1', 'Shop6', '2019-11-10 14:27:00', '2019-11-10 14:28:00'),
(10, 6, 'linhnnn', 'Linh\'s Shop', '2019-11-10 14:42:23', '2019-11-10 14:42:37'),
(11, 2, 'manhdd1', 'Shop moi', '2019-11-11 06:25:46', '2019-11-11 06:25:55'),
(12, 2, 'manhdd1', 'shop nek', '2019-11-21 06:07:24', '2019-11-21 06:07:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoppingcard`
--

CREATE TABLE `shoppingcard` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `qty` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `img` text NOT NULL,
  `mashop` varchar(45) NOT NULL,
  `tenshop` varchar(45) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taoshop`
--

CREATE TABLE `taoshop` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenshop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tichdiem`
--

CREATE TABLE `tichdiem` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tichdiem`
--

INSERT INTO `tichdiem` (`id`, `user_id`, `diem`, `created_at`, `updated_at`) VALUES
(1, 2, 675, NULL, '2019-11-23 18:05:49'),
(2, 4, 60, NULL, '2017-12-13 23:28:59'),
(3, 5, 0, '2019-11-03 23:42:42', '2019-11-03 23:42:42'),
(4, 6, 0, '2019-11-10 07:41:42', '2019-11-10 07:41:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `sodienthoai`, `diachi`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$UPU1ev1yDxit4oo8HAvNtOiua0GDsgX.e8KT/APuniPxaKIkcmy6e', '113', 'admin', 4, 'd7Y0PBzw98UhNigDMm9Yl1a2QGUuFKVnRYpphYb027eRUhPtzKhzHOV9gGJL', '2017-11-01 07:32:18', '2017-11-01 07:32:18'),
(2, 'manhdd1', 'manhdd1@asdsad.com', '$2y$10$gcfOUwSccrCFMD0vXvXPae3SzIZJoUEshk1c3rBe./sdyB9V7m0zC', '0775895240', 'Số 2 ngõ 599 Nguyễn Trãi', 2, 'ZW3lddljkLMIBsGu7lzZ18Yxkl9eqeA3M01LY6uAMsEZ0tZNxpA7D66JToAT', '2019-11-04 06:42:42', '2019-11-21 06:07:35'),
(6, 'linhnnn', 'a@gmail.com', '$2y$10$vqQMHfd3zauXFzP0V2tVsOfc5u1ktJ28Yb0BVlv/bUzbHiZYORTyi', '12345677889', 'abc', 2, 'TDSmb1PQuhYRu7DRIqISYdXTdkzeopUd24rgjhrkjs5a7Qi0A1fphQECFabD', '2019-11-10 14:41:42', '2019-11-10 14:42:38');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietdon`
--
ALTER TABLE `chitietdon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhangshop`
--
ALTER TABLE `donhangshop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanphamshop`
--
ALTER TABLE `sanphamshop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shoppingcard`
--
ALTER TABLE `shoppingcard`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taoshop`
--
ALTER TABLE `taoshop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `chitietdon`
--
ALTER TABLE `chitietdon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `donhangshop`
--
ALTER TABLE `donhangshop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `sanphamshop`
--
ALTER TABLE `sanphamshop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `shoppingcard`
--
ALTER TABLE `shoppingcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `taoshop`
--
ALTER TABLE `taoshop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
