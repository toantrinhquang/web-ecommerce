DROP TABLEtbl_admin;

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO tbl_admin VALUES("1","admin","21232f297a57a5a743894a0e4a801fc3","1");



DROP TABLEtbl_baiviet;

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenbaiviet` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO tbl_baiviet VALUES("2","Giữ “phong độ” cho Sneaker trắng ra sao","","Bạn đã biết cách làm sạch giày sneaker trắng thế nào cho đúng cách để vừa giữ được vẻ tinh khôi sành điệu cho đôi giày lại vừa không làm ảnh hưởng đến độ bền chưa.","5","1","tin1.png");
INSERT INTO tbl_baiviet VALUES("3","7 cách bảo quản giày thể thao tốt nhất","","Để giúp cho đôi giày thể thao của bạn được sử dụng lâu bên. XSHOP đưa ra cách bảo quản giày thể thao đúng cách nhất để giữ cho đôi giầy của bạn luôn giữ được độ bền tốt nhất.","5","1","tin2.png");



DROP TABLEtbl_cart;

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL AUTO_INCREMENT,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  PRIMARY KEY (`id_cart`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

INSERT INTO tbl_cart VALUES("24","1","8685","0");
INSERT INTO tbl_cart VALUES("25","1","5772","0");
INSERT INTO tbl_cart VALUES("26","1","5260","1");
INSERT INTO tbl_cart VALUES("27","1","9828","0");
INSERT INTO tbl_cart VALUES("29","1","2026","0");
INSERT INTO tbl_cart VALUES("30","1","8222","1");
INSERT INTO tbl_cart VALUES("31","1","7842","0");
INSERT INTO tbl_cart VALUES("32","15","5579","0");
INSERT INTO tbl_cart VALUES("33","16","5022","1");



DROP TABLEtbl_cart_details;

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL AUTO_INCREMENT,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  PRIMARY KEY (`id_cart_details`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

INSERT INTO tbl_cart_details VALUES("32","8685","21","1");
INSERT INTO tbl_cart_details VALUES("33","8685","22","1");
INSERT INTO tbl_cart_details VALUES("34","5772","21","4");
INSERT INTO tbl_cart_details VALUES("35","5260","34","1");
INSERT INTO tbl_cart_details VALUES("36","9828","29","1");
INSERT INTO tbl_cart_details VALUES("38","2026","32","1");
INSERT INTO tbl_cart_details VALUES("39","2026","26","1");
INSERT INTO tbl_cart_details VALUES("40","2026","35","1");
INSERT INTO tbl_cart_details VALUES("41","2026","17","1");
INSERT INTO tbl_cart_details VALUES("42","2026","15","1");
INSERT INTO tbl_cart_details VALUES("43","2026","20","1");
INSERT INTO tbl_cart_details VALUES("44","8222","32","1");
INSERT INTO tbl_cart_details VALUES("45","8222","17","2");
INSERT INTO tbl_cart_details VALUES("46","7842","15","1");
INSERT INTO tbl_cart_details VALUES("47","7842","35","1");
INSERT INTO tbl_cart_details VALUES("48","5579","15","1");
INSERT INTO tbl_cart_details VALUES("49","5579","16","2");
INSERT INTO tbl_cart_details VALUES("50","5022","15","2");



DROP TABLEtbl_dangky;

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(200) NOT NULL,
  PRIMARY KEY (`id_dangky`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO tbl_dangky VALUES("1","Quang Toan","toan@gmail.com","Thổ hà","202cb962ac59075b964b07152d234b70","0332136556");
INSERT INTO tbl_dangky VALUES("12","Quang Toan new","toan1@gmail.com","BG","202cb962ac59075b964b07152d234b70","0332136556");
INSERT INTO tbl_dangky VALUES("13","Quang Toan123","toan2@gmail.com","BG","202cb962ac59075b964b07152d234b70","0332136556");
INSERT INTO tbl_dangky VALUES("15","Quang Toan","quantoan@gmail.com","Bắc giang","202cb962ac59075b964b07152d234b70","0332136556");
INSERT INTO tbl_dangky VALUES("16","Quang Toan123","QuangToan123@gmail.com","Bắc giang","202cb962ac59075b964b07152d234b70","0332136556");



DROP TABLEtbl_danhmuc;

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL,
  PRIMARY KEY (`id_danhmuc`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

INSERT INTO tbl_danhmuc VALUES("2","New Balance","2");
INSERT INTO tbl_danhmuc VALUES("3","Nike","1");
INSERT INTO tbl_danhmuc VALUES("7","Converse","3");
INSERT INTO tbl_danhmuc VALUES("8","Adidas","4");



DROP TABLEtbl_danhmucbaiviet;

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL AUTO_INCREMENT,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL,
  PRIMARY KEY (`id_baiviet`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO tbl_danhmucbaiviet VALUES("5","tin nike33","3");



DROP TABLEtbl_sanpham;

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL AUTO_INCREMENT,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  PRIMARY KEY (`id_sanpham`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

INSERT INTO tbl_sanpham VALUES("12","nike air ","001","250.000","2","air.jpg","hh","hh","1","1");
INSERT INTO tbl_sanpham VALUES("14","puma1","003","254000","2","MS327TSCa-L.jpg","hh","hh","1","2");
INSERT INTO tbl_sanpham VALUES("15","nike low trăng 1","004","250000","2","air.jpg","hh","hh","1","3");
INSERT INTO tbl_sanpham VALUES("16","convern","004","240000","5","conven.jpg","hh","gg","1","7");
INSERT INTO tbl_sanpham VALUES("17","Nike low mid 77 ","005","300000","6","Nike_Blazer_Mid_77_VNTG_White_Black.jpg","bbb","nnn","1","3");
INSERT INTO tbl_sanpham VALUES("18","Adidas NZ","006","250000","2","H02765a-L.jpg","lkl","oo","1","8");
INSERT INTO tbl_sanpham VALUES("19","1","333","250.000","10","555088-134_ta1-L.jpg","hh","hh","1","3");
INSERT INTO tbl_sanpham VALUES("20","2","ggg","250000","20","640734-180a-L.jpg","hh","hhg","1","3");
INSERT INTO tbl_sanpham VALUES("21","3","gbgb","250000","10","171659Ca-L.jpg","bv","vbv","1","7");
INSERT INTO tbl_sanpham VALUES("22","4","bgb","250000","10","170086Ca-L.jpg","bvb","vbv","1","7");
INSERT INTO tbl_sanpham VALUES("23","5","e44","250000","10","conven.jpg","gfgf","fgf","1","7");
INSERT INTO tbl_sanpham VALUES("24","6","trhtht","250000","10","CRT300CLa-L.jpg","gbgb","bgbg","1","2");
INSERT INTO tbl_sanpham VALUES("25","8","ggnh","250000","10","DB0732-200_ta-L.jpg","hnhn","fgfg","1","3");
INSERT INTO tbl_sanpham VALUES("26","9","fnhm","250000","20","DB1760a-L.jpg","fgdf","dfhdf","1","8");
INSERT INTO tbl_sanpham VALUES("27","10","hgmhj","250000","20","DB5074-100a-L.jpg","dfbdfb","ddfb","1","3");
INSERT INTO tbl_sanpham VALUES("29","Nike ari grow","00dfb","250000","20","DH3064-300_a-L.jpg","dfbd","dfb","1","3");
INSERT INTO tbl_sanpham VALUES("30","Nike jordan x","dfgd","250000","10","DH4268-001_ta-L.jpg","dfhdf","dfhdh","1","3");
INSERT INTO tbl_sanpham VALUES("31","New Balance sport","dfgfdg","250000","20","ML574VNRa-L.jpg","sdfs","sdgdsg","1","2");
INSERT INTO tbl_sanpham VALUES("32","Adidas black","gng","250000","20","GZ0893a-L.jpg","fbdbd","","1","8");
INSERT INTO tbl_sanpham VALUES("33","Adidas bom","gnfgn","250000","20","GZ5443a-L.jpg","gsdgs","sdgsdg","1","2");
INSERT INTO tbl_sanpham VALUES("34","Adidas pink","rg5h","250000","10","H02765a-L.jpg","sdfsdf","sdfsd","1","8");
INSERT INTO tbl_sanpham VALUES("35","Adidas star","242","250000","10","H03954a-L.jpg","fgnf","fgnfgn","1","8");



