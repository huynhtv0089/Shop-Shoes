-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 11:33 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo3`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `maBinhLuan` int(11) NOT NULL,
  `tenDangNhap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maSP` int(11) NOT NULL,
  `ngayBinhLuan` date NOT NULL,
  `noiDung` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `maNV` text NOT NULL,
  `maSP` int(11) NOT NULL,
  `soLuongSP` int(11) NOT NULL,
  `tien` int(11) NOT NULL,
  `size` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `maNV`, `maSP`, `soLuongSP`, `tien`, `size`) VALUES
(16, 'tv2', 5, 3, 3000, ''),
(17, 'tv2', 7, 1, 400, ''),
(18, 'tv2', 12, 6, 9000, ''),
(19, '', 2, 1, 1500, ''),
(25, 'tv1', 2, 1, 1500, '36'),
(26, 'tv1', 3, 1, 900, '36'),
(27, 'vt5', 2, 1, 1500, '36'),
(28, 'vt5', 4, 1, 950, '36'),
(30, '12356', 3, 5, 4500, '36'),
(31, '3211', 1, 1, 550, '36'),
(32, '12356', 3, 1, 900, '36'),
(33, '12356', 3, 1, 900, '36'),
(34, '12356', 4, 1, 950, '36'),
(35, '12356', 4, 1, 950, '36'),
(36, '12356', 4, 1, 950, '36'),
(37, '12356', 2, 1, 1500, '36'),
(38, '12356', 8, 1, 700, '36');

-- --------------------------------------------------------

--
-- Table structure for table `ct_dondat`
--

CREATE TABLE `ct_dondat` (
  `maDD` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `maSP` int(11) NOT NULL,
  `tenDangNhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dondat`
--

CREATE TABLE `dondat` (
  `maDonDat` int(11) NOT NULL,
  `tenDangNhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maNhanVien` int(11) NOT NULL,
  `trangThai` tinyint(1) NOT NULL,
  `noiGiao` text COLLATE utf8_unicode_ci NOT NULL,
  `ngayDat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `maLoaiSP` int(11) NOT NULL,
  `TenLoai` text COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`maLoaiSP`, `TenLoai`, `MoTa`) VALUES
(1, 'Giày Nữ', 'mô tả loại 1: Giày nữ siêu xinh, bảo hành keo trọn đời,xuất khẩu'),
(2, 'Giày Nam', 'mô tả loại 2: Giày nam cực chất bảo hành keo trọn đời'),
(3, 'Giày bé', 'Giày em bé siêu êm xuất khẩu bảo hành keo trọn đời');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` int(11) NOT NULL,
  `hoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `tenDangNhap` text COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaySinh` date NOT NULL,
  `gioiTinh` tinyint(1) NOT NULL,
  `dienThoai` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `hoTen`, `tenDangNhap`, `matKhau`, `ngaySinh`, `gioiTinh`, `dienThoai`) VALUES
(1, 'Nguyễn văn A', 'username1', 'khongmothaiba', '2017-04-10', 1, '012345654432'),
(2, 'Võ Thị Hoàng Yến', 'username2', 'qưertyuio', '2017-04-10', 1, '098765543'),
(3, 'Võ Thị Hoàng Lan', 'username3', 'xcvbnm\r\n', '2017-04-10', 1, '098760987'),
(4, 'Võ Hoàng Điệp', 'username4', 'lkjhgf', '2017-04-10', 1, '09876987'),
(5, 'Lê Minh Minh', 'username5', 'lkjhgfd\r\n', '2017-04-10', 0, '092345645'),
(6, 'Đặng Nhi', 'username6', 'nhi133', '2017-04-10', 1, '09876987');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `maSP` int(11) NOT NULL,
  `tenSP` text COLLATE utf8_unicode_ci NOT NULL,
  `soLuong` int(11) NOT NULL,
  `anh` text COLLATE utf8_unicode_ci NOT NULL,
  `anh2` text COLLATE utf8_unicode_ci NOT NULL,
  `anh3` text COLLATE utf8_unicode_ci NOT NULL,
  `donGia` decimal(15,3) NOT NULL,
  `thongTin` text COLLATE utf8_unicode_ci NOT NULL,
  `trangThai` text COLLATE utf8_unicode_ci NOT NULL,
  `maLoaiSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `soLuong`, `anh`, `anh2`, `anh3`, `donGia`, `thongTin`, `trangThai`, `maLoaiSP`) VALUES
(1, 'Giày Nam MAN', 12, 'gn1a.png', 'gn1b.png', 'gn1c.png', '550.000', 'Giày Nam Xuất khẩu loại 1 \r\nĐế cao su đúc nguyên khối dẻo dai, chống trơn trượt hiệu quả\r\nThiết kế mũi giày cong mượt; hạn chế tiếp xúc vơi đất\r\nĐường may tinh xảo, tỉ mỉ', 'còn hàng', 2),
(2, 'Giày Nam NIVI', 33, 'gn2a.png', 'gn2b.png', 'gn2c.png', '1500.000', 'Giày Nam Xuất khẩu loại 1 \r\nĐế cao su đúc nguyên khối chống trơn, trợt. Bảo hành 12 tháng về da và đế.', 'còn hàng', 2),
(3, 'Giày JUSTBOY', 30, 'gn3a.png', 'gn3b.png', 'gn3c.png', '900.000', 'Giày Nam Xuất khẩu loại 1\r\nsiêu hot bảo hành keo trọn đời.. mua 2 đôi tặng ba đôi ', 'còn hàng', 2),
(4, 'Giày Nam LIKAY', 45, 'gn4a.png', 'gn4b.png', 'gn4c.png', '950.000', 'Giày Nam Xuất khẩu loại 1 ', 'còn hàng', 2),
(5, 'Giày Nam KAISY', 40, 'gn5a.png', 'gn5b.png', 'gn5c.png', '1000.000', 'Giày Nam Xuất khẩu loại 1\r\nĐế cao su đúc nguyên khối chống trơn, trợt. Bảo hành 12 tháng về da và đế. ', 'còn hàng', 2),
(6, 'Giày BÂNKA', 30, 'gn6a.png', 'gn6b.png', 'gn6c.png', '900.000', 'Giày Nam Xuất khẩu loại 1 ', 'còn hàng', 2),
(7, 'Giày Nam GC', 30, 'gn7a.png', 'gn7b.png', 'gn7c.png', '400.000', 'Giày Nam Xuất khẩu loại 1 ', 'còn hàng', 2),
(8, 'Giày Nam LIKAY', 45, 'gn8a.png', 'gn8b.png', 'gn8c.png', '700.000', 'Giày Nam Xuất khẩu loại 1 ', 'còn hàng', 2),
(9, 'Giày Nam KAISY', 40, 'gn9a.png', 'gn9b.png', 'gn9c.png', '1600.000', 'Giày Nam Xuất khẩu loại 1 \r\nĐế cao su đúc nguyên khối chống trơn, trợt. Bảo hành 12 tháng về da và đế.\r\nmua 7 tặng 3', 'còn hàng', 2),
(10, 'Giày Nam LV', 30, 'gn10a.png', 'gn10b.png', 'gn10c.png', '800.000', 'Giày Nam Xuất khẩu loại 1 \r\nĐế cao su đúc nguyên khối chống trơn, trợt. Bảo hành 12 tháng về da và đế.', 'còn hàng', 2),
(11, 'Giày KIKO', 12, '1a.png', '1b.png', '1c.png', '600.000', 'Giày Nữ Xuất khẩu loại 1 bảo hành keo trọn đời mua 5 tặng 1', 'còn hàng', 1),
(12, 'Giày MIMI', 33, '2a.png', '2b.png', '2c.png', '1500.000', 'Giày Nữ Xuất khẩu loại 1 bảo hành keo trọn đời', 'còn hàng', 1),
(13, 'Giày GIRLBAND', 30, '3a.png', '3b.png', '3c.png', '900.000', 'Giày Nữ Xuất khẩu loại 1 bảo hành keo trọn đời', 'còn hàng', 1),
(14, 'Giày Nam LIKAY', 45, '4a.png', '4b.png', '4c.png', '950.000', 'Giày Nữ Xuất khẩu loại 1 bảo hành keo trọn đời', 'còn hàng', 1),
(15, 'Giày Nữ KAISY', 40, '5a.png', '5b.png', '5c.png', '1000.000', 'Giày Nữ Xuất khẩu loại 1 bảo hành keo trọn đời', 'còn hàng', 1),
(16, 'Giày Nữ Êm', 30, '6a.png', '6b.png', '6c.png', '400.000', 'Giày Nữ Xuất khẩu loại 1 bảo hành keo trọn đời', 'còn hàng', 1),
(17, 'Giày Nữ Hiệu GC', 30, '7a.png', '7a.png', '7a.png', '550.000', 'Giày Nữ Xuất khẩu loại 1 bảo hành keo trọn đời', 'còn hàng', 1),
(18, 'Giày Nữ MIMI', 45, 'gnu8a.png', 'gnu8b.png', 'gn8a.png', '700.000', 'Giày Nữ Xuất khẩu loại 1 bảo hành keo trọn đời', 'còn hàng', 1),
(19, 'Giày Nữ KAISY', 40, 'g3.png', 'g3.png', 'g23.png', '1600.000', 'Giày Nữ Xuất khẩu loại 1 bảo hành keo trọn đời', 'còn hàng', 1),
(20, 'Giày Nữ Hiệu LV', 30, 's-4.jpg', 's-4.jpg', 's-4.jpg', '800.000', 'Giày Nữ Xuất khẩu loại 1 bảo hành keo trọn đời', 'còn hàng', 1),
(21, 'Giày bé GC', 12, 'B1a.png', 'B1b.png', 'B1c.png', '550.000', 'Giày bé siêu êm loại 1  chuẩn size', 'còn hàng', 3),
(22, 'Giày Bé MILAN', 33, 'B2a.png', 'B2b.png', 'B2c.png', '1500.000', 'Giày bé siêu êm loại 1  chuẩn size', 'còn hàng', 3),
(23, 'Giày BOYBAND', 30, 'B3.jpg', 'B3.jpg', 'B3.jpg', '900.000', 'Giày bé siêu êm loại 1  chuẩn size', 'còn hàng', 3),
(24, 'Giày bé LIKAY', 45, 'B4.jpg', 'B4.jpg', 'B4.jpg', '250.000', 'Giày bé siêu êm loại 1  chuẩn size', 'còn hàng', 3),
(25, 'Giày bé KAISY', 40, 'B5.png', 'B5.png', 'B5.png', '1000.000', 'Giày bé siêu êm loại 1  chuẩn size', 'còn hàng', 3),
(26, 'Giày bé KIKO', 30, 'B7.jpg', 'B7.jpg', 'B7.jpg', '900.000', 'Giày bé siêu êm loại 1  chuẩn size', 'còn hàng', 3),
(27, 'Giày bé Hiệu GC', 30, 'B8.jpg', 'B8.jpg', 'B8.jpg', '400.000', 'Giày bé siêu êm loại 1  chuẩn size', 'còn hàng', 3),
(28, 'Giày bé Hiệu LIKAY', 45, 'B9.jpg', 'B9.jpg', 'B9.jpg', '700.000', 'Giày bé siêu êm loại 1  chuẩn size', 'còn hàng', 3),
(29, 'Giày bé hiệu KAISY', 50, 'B10.jpg', 'B10.jpg', 'B10.jpg', '1600.000', 'Giày bé siêu êm loại 1  chuẩn size', 'còn hàng', 3),
(30, 'Giày bé Hiệu LV', 30, 'B11.jpg', 'B11.jpg', 'B11.jpg', '800.000', 'Giày bé siêu êm loại 1  chuẩn size', 'còn hàng', 3),
(32, 'Giày Mọi Da Nâu G64', 25, 'giay-moi-da-nau-g64-6799-slide-1.jpg', 'giay-moi-da-nau-g64-6799-slide-2.jpg', 'giay-moi-da-nau-g64-6799-slide-3.jpg', '100.000', '', 'còn hàng', 2),
(33, 'Giày Tây Đen G104', 0, '', '', '', '0.000', 'aaaa', 'còn hàng', 2),
(34, 'Giày Tây Đen G129', 10, 'giay-tay-den-g152-8717.jpg', 'giay-tay-den-g152-8717-slide-2.jpg', 'giay-tay-den-g152-8717-slide-3.jpg', '200.000', 'aa1', 'còn hàng', 2),
(50, 'Giày Tây Đen G153', 100, 'giay-tay-den-g129-8561.jpg', 'giay-tay-den-g129-8561-slide-2.jpg', 'giay-tay-den-g129-8561-slide-3.jpg', '100.000', 'aaaa', 'còn hàng', 2);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `tenDangNhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` text COLLATE utf8_unicode_ci NOT NULL,
  `hoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaySinh` date NOT NULL,
  `gioiTinh` text COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` text COLLATE utf8_unicode_ci NOT NULL,
  `dienThoai` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`tenDangNhap`, `matKhau`, `hoTen`, `ngaySinh`, `gioiTinh`, `diaChi`, `dienThoai`, `Email`) VALUES
('12356', '123', 'tri', '2017-05-20', 'Nam', 'go vap', '0933399999', '1234@yahooo.com'),
('3211', '123', 'sdfs', '1999-02-05', 'Nam', 'sdf', '1259877', '123@abc.com'),
('sdf', '123', 'sdfs', '1999-02-05', 'Nam', 'sdf', '1259877', '123@abc.com'),
('tv1', '123', 'Hoàng Yến', '1996-02-11', 'Nữ', 'Bình Tân tp hồ chí minh', '01639393939', 'vthyen@gmail.com'),
('tv2', '123', 'Nguyễn Thị Miền', '1996-02-11', 'Nữ', 'Bình Tân tp hồ chí minh', '0987654321', 'miennguyen@gmail.com'),
('tv3', '09876', 'Đặng Hồng NHi', '1996-02-11', 'Nữ', 'Bình Tân tp hồ chí minh', '01639393939', 'vthnhi@gmail.com'),
('tv4', 'vth', 'Linh Đan', '1996-02-11', 'Nam', 'q12 tp hồ chí minh', '0987654321', 'minhđan@gmail.com'),
('vt5', '1234', 'Linh Linh', '0000-00-00', 'Nữ', 'Tp sdfghjk', '0987654321', 'linhlinh@gmail.com'),
('vt6', '1234', 'Quân Nhã', '1997-02-11', 'Nam', 'binh tân tp hcm', '0968123456', 'minhminh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `maTin` int(11) NOT NULL,
  `tenTin` text COLLATE utf8_unicode_ci NOT NULL,
  `anhTin` text COLLATE utf8_unicode_ci NOT NULL,
  `moTaTin` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`maTin`, `tenTin`, `anhTin`, `moTaTin`) VALUES
(1, 'Người gầy dựng triều đại hoàng kim cho đế chế thể thao của adidas', 'tt2.png', 'adidas là một trong những tên tuổi lớn, đầy quyền năng trong lĩnh vực thể thao. Đối với nhiều người, adidas thậm chí còn là một di sản gắn liền với hoạt động thể thao của nhân loại kéo dài suốt một thế kỷ.\r\n\r\nCùng vén bức màn bí mật đằng sau thương hiệu adidas với chữ a không bao giờ viết hoa đã chinh phục được biết bao thế hệ yêu thể thao.\r\n\r\nHành trình của người thợ sửa giày…\r\n\r\nTrở về sau chiến tranh thế giới thứ nhất, Adolf, cậu con trai thứ của gia đình Dassler từ vùng Bavaria, Đức được bố - một công nhân cần mẫn làm việc cho nhà máy sản xuất giày – dạy nghề đóng và sửa chữa giày. Trong căn buồng giặt giũ của mẹ, chàng trai với biệt danh Adi đã dùng những vật liệu còn sót lại từ cuộc chiến tranh để chế tác ra những đôi giày chạy bằng vải bố đầu tiên. Không lâu sau đó, người anh trai của Adi là Rudolf Dassler cùng tham gia vào công việc chế tạo giày của em trai. Họ thành lập “Xưởng giày Anh em nhà Dassler”. Trong khi Adolf tập trung vào công việc nghiên cứu và sáng chế, Rudolf chịu trách nhiệm trong mảng kinh doanh.\r\n\r\nKỳ 1: Người gầy dựng triều đại hoàng kim cho đế chế thể thao của adidas - Ảnh 1.\r\nAdi Dassler tại xưởng giày của mình, năm 1925\r\nVốn là một người yêu thể thao chân chính, Adi luôn khao khát làm ra những đôi giày thể thao hoàn hảo phục vụ cho các vận động viên, bảo vệ họ khỏi những chấn thương và giúp họ đạt được thành tích tốt nhất. Không chỉ tự mình trải nghiệm các môn thể thao, Adi Dassler còn tạo dựng mối quan hệ thân hữu với các vận động viên thi đấu chuyên nghiệp, trò chuyện để thấu hiểu nhu cầu của họ. Ông luôn bị thôi thúc bởi ý tưởng, một vận động viên chuyên nghiệp phải có được đôi giày thích hợp nhất với họ, chế tác đặc thù cho môn thể thao họ chơi. Vì vậy, tất cả các thiết kế của ông đều dựa trên một nền tảng duy nhất: lấy thể thao làm cốt lõi và không ngừng cải tiến để phục vụ tối ưu cho người chơi thể thao.\r\n\r\nKỳ 1: Người gầy dựng triều đại hoàng kim cho đế chế thể thao của adidas - Ảnh 2.\r\nAdi Dassler đã đi khắp nơi để gặp gỡ, trao đổi và xin phản hồi từ nhiều vận động viên khác nhau nhằm tạo nên những sản phẩm thể thao hoàn hảo nhất.\r\nMột trong những thành tựu đầu tiên của hiệu giày Anh Em nhà Dassler chính là dòng giày đinh chuyên dụng cho bóng đá sân cỏ đầu tiên trên thế giới. Phần đế và đinh giày có thể tháo rời ra để thay thế khi cần đã làm nên một sự chấn động trong giới thể thao lúc bấy giờ. Ngoài ra, giày chạy điền kinh phục vụ cho các cự ly khác nhau làm từ các chất liệu cải tiến để giảm trọng lượng tối đa cũng là một sản phẩm chính trong những năm đầu khởi nghiệp của anh em nhà Dassler.\r\n\r\nKỳ 1: Người gầy dựng triều đại hoàng kim cho đế chế thể thao của adidas - Ảnh 3.\r\nĐôi giày chạy điền kinh Adi Dassler làm riêng cho nữ vận động viên Lina Radke, người được huy chương vàng Olympic 1928 ở đường chạy 800m nữ.\r\n… trở thành nhà sáng lập thương hiệu toàn cầu\r\n\r\nKỳ thế vận hội Oplympics năm 1936 là một cột mốc đã làm nên lịch sử cho Adi Dassler và hãng giày của ông khi vận động viên người Mỹ gốc Phi Jesse Owens tham gia các đường chạy điền kinh tại Berlin. Vượt qua tất cả những rào cản mang tính chính trị lúc bấy giờ như màu da, khả năng Jesse sẽ đạt thành tích cao hơn các vận động viên nước Đức chủ nhà… , Adi đã làm mọi cách để Jesse Owens chấp nhận mang giày chạy Dassler lúc thi đấu. Và vận may đã mỉm cười với cả hai khi Jesse Owens đã gặt hái đến 4 huy chương vàng, phá 5 kỷ lục thế giới trong kỳ Olympics đó và trở thành huyền thoại trong làng điền kinh thế giới.\r\n\r\nKỳ 1: Người gầy dựng triều đại hoàng kim cho đế chế thể thao của adidas - Ảnh 4.\r\nHình từ những di vật Adi Dassler để lại: Ảnh Jesse Owens đang thay đôi giày Adi Dassler đã làm riêng cho ông; bức ảnh bị chụp đè hai lần do cuộn phim quấn không đúng cách.\r\nTiếng lành đồn xa, từ thành công vang dội đó của Adi Dassler và Jesse Owens, ngày càng có nhiều vận động viên mong muốn được trở thành khách hàng của thương hiệu giày đến từ ngôi làng nhỏ miền Nam nước Đức. Công việc kinh doanh tưởng chừng như đang rất thuận lợi thì chiến tranh thế giới thứ 2 nổ ra dẫn theo một loạt các biến cố trong doanh nghiệp giày của Anh Em nhà Dassler. Năm 1949, nhận ra hai anh em không còn đồng chí hướng, Adi đã thiết lập tên riêng cho thương hiệu giày của mình là adidas – kết hợp biệt danh và họ của ông, trong khi người anh Rudolf thì ra đi với thương hiệu Puma.\r\n\r\nTrong những năm tiếp theo một mình lèo lái thương hiệu, Adi vẫn trung thành với sứ mệnh ban đầu của mình, đó chính là tập trung vào công năng sản phẩm; không ngừng tìm tòi các chất liệu mới, cải tiến công nghệ để cho ra đời các sản phẩm tối ưu nhất cho thể thao đỉnh cao. Với biểu tượng ba sọc đặc trưng, adidas liên tục gặt hái những thành công đáng ngưỡng mộ. Năm 1952, trở thành thương hiệu thể thao Đức được sử dụng nhiều nhất tại Olympics Helsinki. Năm 1960, 75% các vận động viên chạy bộ đều sử dụng giày adidas. Năm 1962, adidas thống trị World Cup tại Chile khi mỗi trận đấu đều có cầu thủ sử dụng giày.\r\n\r\nTrong suốt các thập niên 60 và 70, giới mộ điệu thể thao liên tục chứng kiến những màn ra mắt các sản phẩm mang tính cách mạng như đôi giày chạy Tokyo 64 nhẹ nhất thế giới, quần áo thể thao hoạ tiết 3 sọc mang tính biểu tượng hay quả bóng adidas Telstar được dùng chính thức trong World Cup. Những sản phẩm ngôi sao này cho đến hôm nay vẫn chưa bao giờ hết giá trị bởi nó biểu trưng cho một tinh thần thể thao chân chính, tiếp sức cho các vận động viên vươn đến đỉnh vinh quang.\r\n\r\nKỳ 1: Người gầy dựng triều đại hoàng kim cho đế chế thể thao của adidas - Ảnh 5.\r\nAdi Dassler cầm trên tay đôi “Miracle of Berne” được đội tuyển bóng đá Tây Đức mang thời bấy giờ, năm 1954.\r\nCó thể nói, Adi Dassler với tất cả tâm huyết và tài năng của mình đã gầy dựng một triều đại hoàng kim cho adidas. Đặt thể thao làm giá trị cốt lõi cho cả thương hiệu và chưa bao giờ đi chệch hướng trong hơn 50 năm lèo lái adidas, Adolf “Adi” Dassler đã liên kết từng cá nhân trong công ty, nâng đỡ các vận động viên và truyền cảm hứng cho người hâm mộ bằng chính tinh thần thể thao thuợng võ của mình.\r\n\r\nThế nhưng, khi ông qua đời năm 1978 cũng là lúc cả đế chế adidas sang đến một bước ngoặt mới, cam go hơn, thậm chí đối mặt với sự suy thoái và xuống dốc không điểm dừng.'),
(2, 'Thương hiệu Mango tôn vinh tính duy nhất của mỗi cá nhân', 'tt1.png', 'Bạn đọc mến,\n\nVẻ đẹp cơ thể có lẽ là một trong những nỗi băn khoăn, niềm đam mê bất tận nhất của loài người. Nghệ thuật văn chương tự cổ chí kim luôn tìm về cơ thể con người, đặc biệt là cơ thể phụ nữ, để tìm nguồn cảm hứng sáng tạo. Trong chiều dài lịch sử, quan niệm về vẻ đẹp cơ thể cũng thay đổi không ngừng. Đã có thời loài người tôn vinh cái đẹp mũm mĩm, lại có thời họ muốn phụ nữ phải có chút gân guốc, rồi cũng có thời những cô gái trẻ mảnh mai trở thành biểu tượng của cái đẹp.\n\nCòn riêng trong số báo này, ELLE muốn gửi tới bạn một thông điệp khác về vẻ đẹp cơ thể. Một cơ thể đẹp trước hết phải là một cơ thể khỏe mạnh. Một phụ nữ đẹp là một phụ nữ tự tin với cơ thể của chính mình. Cơ thể cũng như sự hiện diện của mỗi người, luôn độc nhất vô nhị, có những khiếm khuyết, có những thế mạnh, và luôn cần được chú ý, yêu thương. Vậy nên, bạn đọc hãy cùng ELLE lật giở qua từng trang báo, tìm hiểu những bài tập và cách chăm sóc cơ thể tốt nhất, lắng nghe chia sẻ của những người phụ nữ với nhiều kiểu hình thể khác nhau. Đặc biệt hơn, chúng ta sẽ cùng trò chuyện với những người phụ nữ đã và đang sống với căn bệnh ung thư để biết cách tốt nhất để yêu bản thân chính là một tinh thần khỏe mạnh.\n\nBên cạnh chủ đề về yêu thương, đây là số báo ELLE đặc biệt giới thiệu những thiết kế Haute Couture đáng khao khát và những món đồ trang sức như cổ tích hóa thành hiện thực. Nếu đã cảm thấy nắng Hè có phần ngột ngạt, hãy tiếp tục cùng ELLE tìm đến vùng biển Greenland, thả mình vào những giấc mơ hoang dã nhất và một lần nữa thấy rằng, chẳng có gì ngăn được ta, một khi ta biết cách\nyêu chính mình.'),
(3, 'Muốn mix đồ vừa điệu vừa chất, các nàng "bánh bèo" nên mua giày buộc nơ ngay và luôn', 'tt3.png', 'Vừa bắt mắt, tiện lợi lại phá cách, những mẫu giày mới toanh này chắc chắn sẽ giúp bạn nổi bần bật giữa phố đấy.\r\n\r\nNhiều người vẫn luôn có suy nghĩ rằng giày thể thao chỉ dành cho những cô gái cá tính, có phong cách khỏe khoắn chứ không phải sinh ra để dành cho mấy nàng bánh bèo. Thế nhưng, với sự sáng tạo và tinh tế, các thương hiệu thời trang vẫn không ngừng đổi mới và cho ra đời mẫu giày buộc nơ vừa điệu đà nhưng phảng phất nét cá tính. Mà điển hình là mẫu giày hồng buộc nơ đến từ bộ sưu tập Fenty x Puma của Rihanna, hợp tác cùng thương hiệu đồ thể thao đình đám này.\r\n\r\nDù chỉ xuất hiện trong thời gian ngắn nhưng mẫu giày buộc nơ dường như đã tạo thành cơn sốt và trở thành trào lưu mà mọi tín đồ thời trang trên thế giới mải miết theo đuổi. Thừa thắng xông lên, hàng loạt thương hiệu từ bình dân tới cao cấp khác cũng theo chân Puma, ra mắt nhiều mẫu giày buộc nơ thú vị.\r\n\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 1.\r\nĐôi giày nơ màu hồng hiện đang "phá đảo thế giới ảo, đánh bật thế giới thật" trong thời gian gần đây.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 2.\r\nGiày nơ tưởng không chất nhưng lại chất không tưởng.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 3.\r\nBạn thậm chí có thể đi giày nơ với quần short.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 4.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 5.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 7.\r\nTừ giày lười (slip on) cho tới sneaker buộc dây thông thường đều được nhiều thương hiệu cải biên theo phong cách hoàn toàn mới. Không chỉ có hình dáng mới lạ, mẫu giày này còn hợp với nhiều kiểu áo phông, quần culottes hay thậm chí là váy liền, váy midi dài ngang bắp chân.\r\n\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 8.\r\nGiày vải buộc nơ màu be khi kết hợp cùng váy babydoll màu trắng cực hợp với mấy cô nàng ngọt ngào.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 9.\r\nVới những cô nàng e dè, ngại đột phá thì mẫu giày nơ đơn giản, ví dụ như mẫu Puma Basket Heart dưới đây chính là lựa chọn an toàn. Ngược lại, mẫu giày với phần nơ được cách điệu, to bản lại hợp với những ai thích đột phá và nổi bật giữa đám đông. Thông thường, các thương hiệu bình dân như Zara, Pull & Bear, H&M chỉ có giày màu trắng, đen, be, hồng pastel cơ bản. Vì thế, nếu muốn mua giày màu xanh navy, xanh rêu hay hồng neon độc đáo, bạn có thể tham khảo các sản phẩm của Puma hay cao cấp hơn là Joshua Sanders và Ports 1961.\r\n\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 10.\r\nPuma Basket Heart chính là sự lựa chọn an toàn cho mọi cô gái.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 11.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 12.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 13.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 14.\r\nBên cạnh những mẫu giày vải, giày da lộn thông thường, bạn cũng có thể chọn giày da bóng dễ lau chùi và bảo quản. Tùy vào nhu cầu sử dụng và điều kiện của môi trường xung quanh, bạn có thể cân nhắc lựa chọn chất liệu phù hợp. Ngoài ra, để có thể khoe được hết nét thú vị trên giày, bạn hãy mặc quần/váy trên mắt cá chân nhé.\r\n\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 15.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 16.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 17.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 18.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 19.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 20.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 21.\r\nSự kết hợp của ghi và đen cũng đủ khiến bạn trở nên sành điệu, thời thượng.\r\nMuốn mix đồ vừa điệu vừa chất, các nàng bánh bèo nên mua giày buộc nơ ngay và luôn - Ảnh 22.\r\nNếu can đảm chọn giày xanh navy, bạn sẽ là cô gái nổi bật nhất khu phố.'),
(4, 'Ngấm ngầm là thế, hóa ra Dara lại là cô nàng "đầu giày" cứng cựa nhất nhì Kbiz!', 'tt4.png', 'BST của nàng "đầu giày" xinh đẹp này khá đa dạng, hầu như có mặt đầy đủ các dòng sneakers được đại chúng ưa chuộng nhất.\r\n\r\n"Đầu giày" - "Sneakerhead" là từ thường dùng để chỉ những người có niềm đam mê mãnh liệt với giày. Vốn cụm từ "đầu giày" hay gắn liền với các phái mạnh, bởi tư duy số đông thì con gái chỉ mải mân mê đôi giày cao gót mà thôi. Nếu bạn cũng nghĩ thế là nhầm to nhé, bởi ngày nay, số lượng "đầu giày" nữ cũng đông chẳng kém quân Nguyên, có trong tay những bộ sưu tập chất lượng tuyệt đỉnh.\r\n\r\nNếu xét trong phạm vi Kbiz thì Dara là một "đầu giày" rất cứng tay. Cựu thành viên của 2NE1 không chỉ được nhớ đến nhờ diện mạo như "lão hóa ngược", ngày càng trẻ trung xinh đẹp, mà còn bởi thú chơi giày sneakers khá có tiếng. BST của Dara chủ yếu hội tụ những dòng sneaker mang tính đại chúng nhất. Dưới đây là những đôi sneaker thường xuyên xuất hiện cùng nàng cựu thành viên 2NE1 do trang KoreaBoo chọn lọc:\r\n\r\nNgấm ngầm là thế, hóa ra Dara lại là cô nàng đầu giày cứng cựa nhất nhì Kbiz! - Ảnh 1.\r\nĐầu tiên phải kể đến đôi Vans Old Skool – thường được nhớ đến như cú lội ngược dòng ngoạn mục của những đôi giày cổ điển. Dara sở hữu đôi màu xanh sọc trắng tươi trẻ năng động.\r\nNgấm ngầm là thế, hóa ra Dara lại là cô nàng đầu giày cứng cựa nhất nhì Kbiz! - Ảnh 2.\r\nTiếp đến là Supreme x Nike Air Max 98. Đây sẽ là lần thứ 3 phiên bản này được retro kể từ khi lần đầu xuất hiện vào năm 1998 và sau đó là 2014.\r\nNgấm ngầm là thế, hóa ra Dara lại là cô nàng đầu giày cứng cựa nhất nhì Kbiz! - Ảnh 3.\r\nĐôi Yeezy Boost 350 phối màu "Pirate Black" thì khỏi bàn, sở hữu phần đế boost từng được xem là một trong những bộ đệm được giới chuyên môn đánh giá cao nhất trong số các bộ đệm hiện nay. Sắc màu của nó rất thích hợp cho việc mặc "cả cây đen".\r\nNgấm ngầm là thế, hóa ra Dara lại là cô nàng đầu giày cứng cựa nhất nhì Kbiz! - Ảnh 4.\r\nĐôi Adidas Stan Smith CF với phối màu hồng này quả là ước mơ của mọi cô nàng.\r\nNgấm ngầm là thế, hóa ra Dara lại là cô nàng đầu giày cứng cựa nhất nhì Kbiz! - Ảnh 5.\r\nTiếp đến là đôi Superstar từ thương hiệu Golden Goose với phối màu xanh ngọc tuyệt đẹp.\r\nNgấm ngầm là thế, hóa ra Dara lại là cô nàng đầu giày cứng cựa nhất nhì Kbiz! - Ảnh 6.\r\nĐôi Pierre Hardy Kelis này nhìn từ xa đã thấy hút mắt với các mảng màu rực rỡ thú vị.\r\nNgấm ngầm là thế, hóa ra Dara lại là cô nàng đầu giày cứng cựa nhất nhì Kbiz! - Ảnh 7.\r\nConverse Custom Chuck Taylor All Star Shoreline với màu vàng chanh cũng đáng để Dara cho vào BST ngồn ngộn của mình.'),
(5, '4 xu hướng sneaker đang "ám ảnh" các tín đồ thời trang toàn cầu bạn không thể ngó lơ', 'tt5.png', 'Trong những năm qua, sneaker trắng và đen không chỉ chiếm thế thượng phong trong làng sneaker mà còn là "trùm sò" trong tủ đồ của các tín đồ thời trang. Tuy nhiên, sang đến năm nay, cuộc chơi sneaker đã trở nên thú vị hơn rất nhiều với sự xuất hiện của nhiều nhân tố mới vui mắt hơn, sôi động hơn. Mùa hè này, thay vì chỉ quanh đi quẩn lại với sneaker đen trắng, sao bạn không thử "đổi gió" với 4 xu hướng sau đây nhỉ? Đây chính là 4 xu hướng sneaker "hot" nhất, được các tín đồ thời trang toàn cầu hưởng ứng nhiệt tình nhất thời gian này đấy chứ không phải dạng vừa đâu!\r\n\r\n1. Sneaker màu hồng\r\n\r\nCó lẽ sẽ là thừa khi quảng cáo thêm cho sneaker màu hồng bởi độ phủ sóng ác liệt của em nó thời gian qua đã đủ để chứng minh đây là đôi sneaker phải-có mùa hè này rồi. Thời gian qua, hàng loạt thương hiệu sneaker đã thi nhau tung ra phối màu "bánh bèo" này để chiều lòng các tín đồ thời trang nữ. Những đôi sneaker màu hồng ngọt lịm cứ thế mà đánh chiếm hết Instagram cho đến Pinterest khiến ai cũng phải chú ý. Nếu bạn đứng trước tủ giày của mình mà thấy có gì đó thiếu thiếu thì chắc chắn câu trả lời là sneaker màu "hường" rồi.\r\n\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 1.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 2.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 3.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 4.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 5.\r\n2. Sneaker chất liệu satin\r\n\r\nTừ đầu năm nay, sneaker chất liệu satin đã được dự đoán sẽ là một trong những xu hướng "đinh". Tuy không ầm ĩ như sneaker màu hồng nhưng sneaker satin vẫn được các tín đồ thời trang yêu thích bởi vẻ bóng bẩy, kiểu cách vốn rất khó tìm ở những đôi sneaker truyền thống. Nếu bạn thích diện sneaker nhưng đồng thời vẫn muốn trông mình thật "sang chảnh" thì hãy sắm ngay một đôi sneaker kiểu này thôi.\r\n\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 6.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 7.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 8.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 9.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 10.\r\n3. Sneaker màu metallic\r\n\r\nNếu như sneaker satin hút hồn các cô nàng bởi chất liệu sang-mịn-xịn thì sneaker màu metallic lại quyến rũ ở sắc ánh kim lộng lẫy đã nhìn là không thể rời mắt. Một đôi sneaker màu bạc, vàng kim hay vàng hồng sẽ giúp đôi chân bạn tỏa sáng theo cả nghĩa đen lẫn nghĩa bóng, khiến mọi set đồ dù bình thường đến đâu cũng trở nên thời trang hơn hẳn.\r\n\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 11.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 12.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 13.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 14.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 15.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 16.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 17.\r\n4. Sneaker thêu\r\n\r\nĐược châm ngòi từ năm ngoái nhưng sang đến năm nay, xu hướng sneaker thêu mới thực sự bùng nổ và lan tỏa mạnh mẽ hơn bao giờ hết. Lướt Instagram hay xem ảnh street style trên Vogue, bạn sẽ thấy những đôi sneaker thêu hoa lá xuất hiện với tần suất đáng nể. Sneaker thêu "hot" cũng là dễ hiểu, bởi khi đã diện sneaker trơn màu quá lâu, người ta sẽ muốn đổi gió với thứ gì đó "lồng lộn" hơn và sneaker thêu chính là mảnh ghép còn thiếu.\r\n\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 18.\r\n4 xu hướng sneaker đang ám ảnh các tín đồ thời trang toàn cầu bạn không thể ngó lơ - Ảnh 19.'),
(6, 'Bộ sưu tập sneaker chất chơi được làm từ sushi ngon mắt', 'tt6.png', 'Dưới đôi bàn tay của đầu bếp tài hoa, những mẫu giày sneaker từ các thương hiệu hàng đầu thế giới bỗng trở nên hấp dẫn hơn bao giờ hết.\r\n\r\nẨm thực và thời trang tưởng chừng là hai lĩnh vực chẳng hề liên quan đến nhau. Thế nhưng, một đầu bếp kiêm nghệ sĩ người Trung Quốc tên là Yujia Hu mới đây đã cho ra mắt bộ sưu tập sushi với hình dáng những đôi giày và dép thể thao của các thương hiệu đình đám trên thế giới khiến không ít người thèm thuồng. Người mê ẩm thực thì chỉ muốn thưởng thức ngay món ăn độc đáo này còn người yêu thời trang thì không nỡ bỏ một đôi giày hiệu vào miệng dù chúng chỉ là đồ ăn.\r\n\r\nTác giả của bộ sưu tập sushi mới lạ này là đầu bếp Yujia Hu sống tại thành phố Milan, Ý.\r\n\r\nBộ sưu tập giày dép được làm từ sushi vô cùng ngon mắt - Ảnh 1.\r\nAnh hiện đang là đầu bếp cho một nhà hàng Nhật Bản có tên Sakana tại nơi mình sống.\r\n\r\nBộ sưu tập giày dép được làm từ sushi vô cùng ngon mắt - Ảnh 3.\r\nYujia đã nảy ra ý tưởng độc đáo này cách đây 12 tuần và ngay lập tức bắt tay vào thực hiện chúng.\r\n\r\nBộ sưu tập giày dép được làm từ sushi vô cùng ngon mắt - Ảnh 5.\r\nYujia Hu đặt tên cho những miếng sushi của mình là "shoe-shi" (kết hợp giữa giày và sushi).\r\n\r\nBộ sưu tập giày dép được làm từ sushi vô cùng ngon mắt - Ảnh 7.\r\nChúng được làm từ các nguyên liệu cơ bản của món ăn Nhật Bản như cá hồi, cơm và rong biển.\r\n\r\nBộ sưu tập giày dép được làm từ sushi vô cùng ngon mắt - Ảnh 9.\r\nHiện anh đã cho ra mắt 21 mẫu sushi như vậy tại nhà hàng và chia sẻ hình ảnh của chúng trên instagram cá nhân.\r\n\r\nBộ sưu tập giày dép được làm từ sushi vô cùng ngon mắt - Ảnh 11.\r\nNhững miếng sushi có hình dáng giày sneaker của các hãng lớn như Nike, Adidas hay Vans.\r\n\r\nBộ sưu tập giày dép được làm từ sushi vô cùng ngon mắt - Ảnh 13.\r\nMới đây, anh còn bổ sung thêm các mẫu sushi hình dép thể thao của Nike.\r\n\r\nBộ sưu tập giày dép được làm từ sushi vô cùng ngon mắt - Ảnh 15.\r\nCác thực khách vô cùng thích thú với ý tưởng đồ ăn sáng tạo này.\r\n\r\nBộ sưu tập giày dép được làm từ sushi vô cùng ngon mắt - Ảnh 17.\r\nTuy nhiên, cũng không có ít người vì quá yêu thích chúng mà không nỡ ăn.\r\n\r\nBộ sưu tập giày dép được làm từ sushi vô cùng ngon mắt - Ảnh 19.'),
(7, 'Không chỉ tiền hay vàng, mẫu sneaker hiếm có adidas Yeezy giờ đây cũng đã trở thành miếng mồi béo bở của hội đạo chích', 'tin001.jpg', '<div class="knc-content">\r\n<!-- Kham pha -->\r\n\r\n\r\n<p><span style="">Bạn có thể phá bỏ nguyên tắc của bạn đến đâu chỉ vì 1 đôi giày YEEZY Boost 350 V2? Hy vọng là không tới mức như những nhân vật trong câu chuyện sau đây.</span><br></p><p>Không chỉ là một trong những đôi giày được các tín đồ thời trang "thèm khát" nhất, adidas Yeezy còn là mẫu sneaker có giá bán lại (resell) cao nhất thị trường. Một đôi Yeezy với giá gốc 200 USD ~ 4,5 triệu đồng có thể được đẩy lên tận 1.000 USD ~ 22,7 triệu đồng trên eBay. Do đó, không ngạc nhiên khi "em nó" trở thành mục tiêu béo bở của đạo chích.<span style=""><br></span></p><div class="VCSortableInPreviewMode" type="Photo" style=""><div><a href="http://kenh14cdn.com/2017/4-1493286627108-1493287240975.jpg" rel="img-lightbox" title="Không chỉ tiền hay vàng, mẫu sneaker Yeezy giờ đây cũng đã trở thành đích nhắm của hội đạo chích." target="_blank" class="detail-img-lightbox"><img src="http://kenh14cdn.com/thumb_w/650/2017/4-1493286627108-1493287240975.jpg" id="img_5f7b4c30-2b30-11e7-915b-19efc46c8118" w="2048" h="1366" alt="4 container giày Yeezy 350 V2 bản phối Cream White bị đánh cắp ngay trước ngày lên kệ - Ảnh 1." title="4 container giày Yeezy 350 V2 bản phối Cream White bị đánh cắp ngay trước ngày lên kệ - Ảnh 1." rel="lightbox" photoid="5f7b4c30-2b30-11e7-915b-19efc46c8118" type="photo" style="max-width:100%;" data-original="http://kenh14cdn.com/2017/4-1493286627108-1493287240975.jpg" width="" height="" class="lightbox-content"></a></div><div class="PhotoCMS_Caption" style="width: 650px; margin: 0px auto; display: block;"><p data-placeholder="[nhập chú thích]" class="">Không chỉ tiền hay vàng, mẫu sneaker Yeezy giờ đây cũng đã trở thành đích nhắm của hội đạo chích.</p></div></div><p>Mới đây, cảnh sát Đan Mạch đã đang phải kêu gọi toàn bộ dân nghiện giày ở đất nước này hỗ trợ truy bắt một nhóm trộm đã cả gan cướp nguyên một xe tải đang trên đường vận chuyển một lô giày Yeezy Boost 350 V2 màu "Cream White" nổi tiếng.</p><div class="VCSortableInPreviewMode" type="Photo" style=""><div><a href="http://kenh14cdn.com/2017/adidas-yeezy-guide-12-1200x800-1493286083860.jpg" rel="img-lightbox" title="Giày YEEZY Boost 350 V2" target="_blank" class="detail-img-lightbox"><img src="http://kenh14cdn.com/thumb_w/650/2017/adidas-yeezy-guide-12-1200x800-1493286083860.jpg" id="img_b17b9b00-2b2d-11e7-b3d7-d9e94ef10d9e" w="1200" h="800" alt="4 container giày Yeezy 350 V2 bản phối Cream White bị đánh cắp ngay trước ngày lên kệ - Ảnh 2." title="4 container giày Yeezy 350 V2 bản phối Cream White bị đánh cắp ngay trước ngày lên kệ - Ảnh 2." rel="lightbox" photoid="b17b9b00-2b2d-11e7-b3d7-d9e94ef10d9e" type="photo" style="max-width:100%;" data-original="http://kenh14cdn.com/2017/adidas-yeezy-guide-12-1200x800-1493286083860.jpg" width="" height="" class="lightbox-content"></a></div><div class="PhotoCMS_Caption" style="width: 650px; margin: 0px auto; display: block;"><p data-placeholder="[nhập chú thích]" class="">Giày YEEZY Boost 350 V2</p></div></div><p>Vụ trộm theo phong cách GTA (một game cướp ô tô rất nổi tiếng) này diễn ra ở Copenhagen, trong lúc một xe tải đang dỡ hàng ở Rezet Store - cửa hàng giày nổi tiếng ở thủ đô của Đan Mạch.</p><p>Mặc dù cảnh sát hiện vẫn chưa xác định rõ được lượng giày bị mất, nhà cung cấp ước tính ít nhất 4 (!) công-ten-nơ đã "không cánh mà bay".</p><p>Đây chắc hẳn là một cơn ác mộng đối với nhiều tín đồ Yeezy đang móng ngóng mua được bản phối "Cream White" với giá gốc tại Rezet Store. Theo lịch, mẫu Yeezy 350 V2 "Cream White" sẽ chính thức ra mắt vào 29/4 tới.</p><div class="VCSortableInPreviewMode noCaption active" type="Photo" style=""><div><a href="http://kenh14cdn.com/2017/5-1493286627110-1493287627102.jpg" rel="img-lightbox" title="" target="_blank" class="detail-img-lightbox"><img src="http://kenh14cdn.com/thumb_w/650/2017/5-1493286627110-1493287627102.jpg" id="img_457c37d0-2b31-11e7-b630-eb19d879ac9b" w="940" h="1190" alt="4 container giày Yeezy 350 V2 bản phối Cream White bị đánh cắp ngay trước ngày lên kệ - Ảnh 3." title="4 container giày Yeezy 350 V2 bản phối Cream White bị đánh cắp ngay trước ngày lên kệ - Ảnh 3." rel="lightbox" photoid="457c37d0-2b31-11e7-b630-eb19d879ac9b" type="photo" data-original="http://kenh14cdn.com/2017/5-1493286627110-1493287627102.jpg" width="" height="" class="lightbox-content"></a></div></div><p><span style="">Vụ việc này khiến nhiều người nhớ lại vụ cướp táo tợn đến mức không thể ngờ nhắm vào cửa hàng Chanel nằm trên phố Brompton Road, khu vực South Kensington (Anh Quốc) vào hồi đầu năm 2016. Bọn cướp đã lao thẳng xe vào cửa kính cường lực của cửa hàng và cướp đi nhiều túi xách Chanel có giá trị từ 65 triệu đồng trở lên. </span></p><div id="admzone474524"><div id="ads_zone474524"><div id="ads_zone474524_slot1"><div id="ads_zone474524_banner514406" class="banner0" style="display: none;"><div id="iplayzone_474462"></div></div></div></div></div><p>Dẫu vậy, người dân Đan Mạch giờ hãy cứ hy vọng vì vẫn có thể tham gia sự kiện xổ số thắng giày và ngóng chờ kết quả vào thứ bảy, mặc dù kết quả này có thể bị ảnh hưởng phần nào bởi vụ việc vừa xảy ra.</p><p style="text-align: right; "><i>Nguồn: Highsnobiety</i></p>\r\n\r\n\r\n</div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBinhLuan`),
  ADD KEY `tenDangNhap` (`tenDangNhap`(191)),
  ADD KEY `maSP` (`maSP`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_dondat`
--
ALTER TABLE `ct_dondat`
  ADD PRIMARY KEY (`maDD`,`maSP`),
  ADD KEY `ctdondat_sanpham` (`maSP`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`maSP`,`tenDangNhap`),
  ADD KEY `danhgia_thanhvien` (`tenDangNhap`);

--
-- Indexes for table `dondat`
--
ALTER TABLE `dondat`
  ADD PRIMARY KEY (`maDonDat`),
  ADD KEY `tenDangNhap` (`tenDangNhap`),
  ADD KEY `maNhanVien` (`maNhanVien`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maLoaiSP`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSP`),
  ADD KEY `maLoaiSP` (`maLoaiSP`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`tenDangNhap`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`maTin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `maBinhLuan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `dondat`
--
ALTER TABLE `dondat`
  MODIFY `maDonDat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `maLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `maNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `maTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_sanpham` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`);

--
-- Constraints for table `ct_dondat`
--
ALTER TABLE `ct_dondat`
  ADD CONSTRAINT `ctdondat_dondat` FOREIGN KEY (`maDD`) REFERENCES `dondat` (`maDonDat`),
  ADD CONSTRAINT `ctdondat_sanpham` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_sanpham` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`),
  ADD CONSTRAINT `danhgia_thanhvien` FOREIGN KEY (`tenDangNhap`) REFERENCES `thanhvien` (`tenDangNhap`);

--
-- Constraints for table `dondat`
--
ALTER TABLE `dondat`
  ADD CONSTRAINT `dondat_nhanvien` FOREIGN KEY (`maNhanVien`) REFERENCES `nhanvien` (`maNV`),
  ADD CONSTRAINT `dondat_thanhvien` FOREIGN KEY (`tenDangNhap`) REFERENCES `thanhvien` (`tenDangNhap`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_loaisp` FOREIGN KEY (`maLoaiSP`) REFERENCES `loaisp` (`maLoaiSP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
