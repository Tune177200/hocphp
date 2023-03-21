-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 21, 2023 lúc 10:59 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phpdevk8`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Super admin', '2023-03-10 04:36:49', '2023-03-10 04:36:49'),
(2, 'Administrators', '2023-03-10 04:36:49', '2023-03-10 04:36:49'),
(3, 'Super admin', '2023-03-10 04:36:51', '2023-03-10 04:36:51'),
(4, 'Administrators', '2023-03-10 04:36:51', '2023-03-10 04:36:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `group_id`, `status`, `total`, `password`, `created_at`, `updated_at`) VALUES
(1, 'văn tú', 'tu@gmail.com', 1, 0, 123, '27a0b19ccb3447950d2f5dd6c8905d31', '2023-03-10 04:21:24', '2023-03-10 04:21:24'),
(2, 'văn tú', 'tu@gmail.com', 4, 1, 123, '27a0b19ccb3447950d2f5dd6c8905d31', '2023-03-10 04:21:29', '2023-03-10 04:21:29'),
(3, 'văn tú 1', 'tu@gmail.com', 1, 0, 123, NULL, '2023-03-10 04:21:24', '2023-03-10 04:21:24'),
(4, 'văn tú 2 ', 'tu@gmail.com', 4, 1, 123, NULL, '2023-03-10 04:21:29', '2023-03-10 04:21:29'),
(5, 'văn tú 3', 'tu@gmail.com', 1, 0, 123, NULL, '2023-03-10 04:21:24', '2023-03-10 04:21:24'),
(6, 'văn tú 4', 'tu@gmail.com', 4, 1, 123, NULL, '2023-03-10 04:21:29', '2023-03-10 04:21:29'),
(7, 'văn tú 5', 'tu@gmail.com', 1, 0, 123, NULL, '2023-03-10 04:21:24', '2023-03-10 04:21:24'),
(8, 'văn tú 6', 'tu@gmail.com', 4, 1, 123, NULL, '2023-03-10 04:21:29', '2023-03-10 04:21:29'),
(22, 'Tú 3', 'tu1@gmail.com', 2, 1, NULL, NULL, '2023-03-13 03:54:29', '2023-03-13 04:41:33'),
(23, 'tu2', 'tune3@gmail.com', 2, 1, NULL, NULL, '2023-03-13 03:57:47', '2023-03-13 03:57:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
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
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
