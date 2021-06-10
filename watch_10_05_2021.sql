-- use id16850513_dongho;
use dongho;

-- tao table admin --
create table account(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password varchar(50) NOT NULL,
	gmail varchar(50) NOT NULL,
	day_add date 
);

-- tao table san pham --
create table sanpham(
	idSP int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	maSP varchar(50) NOT NULL,
	hangSP varchar(100) NOT NULL,
	tenSP varchar(100) NOT NULL,
	xuatXu varchar(100) NOT NULL,
	kieuMay varchar(100) NOT NULL,
	loai varchar(50) NOT NULL,
	duongKinh varchar(100) NOT NULL,
	chatLieuVo varchar(100) NOT NULL,
	chatLieuDay varchar(100) NOT NULL,
	chatLieuKinh varchar(100) NOT NULL,
	doChiuNuoc varchar(100) NOT NULL,
	giaSP int(100) NOT NULL
);

-- tao table anh --
create table anhsanpham(
	idImage int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idSP int(11) NOT NULL, 
	urlImage varchar(255),
	FOREIGN KEY (idSP) REFERENCES sanpham (idSP) ON DELETE CASCADE
);

-- tao table nhap kho
create table nhapkho(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idSP int(11) NOT NULL,
	maSP varchar(50) NOT NULL,
	soLuong int(100) NOT NULL,
	dvt varchar(50) NOT NULL,
	ngayNhap date,
	FOREIGN KEY (idSP) REFERENCES sanpham (idSP) ON DELETE CASCADE
);

-- tao table xuất kho
create table xuatkho(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idSP int(11) NOT NULL,
	maSP varchar(50) NOT NULL,
	soLuong int(100) NOT NULL,
	dvt varchar(50) NOT NULL,
	ngayXuat date,
	FOREIGN KEY (idSP) REFERENCES sanpham (idSP) ON DELETE CASCADE
);

-- tao table phieu dat hang --
create table dathang(
	idPhieu int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	tenKH varchar(100) NOT NULL,
	sdt text NOT NULL,
	diaChi text NOT NULL,
	tongSoLuong int(100) NOT NULL,
	tongTien int(11) NOT NULL,
	trangThai boolean default True
);

-- tao table thong tin dat hang --
CREATE TABLE thongtindathang (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idPhieu int(11) NOT NULL,
	idSP int(11) NOT NULL,
	soLuong int(11) NOT NULL,
	giaSP int(100) NOT NULL,
	FOREIGN KEY (idPhieu) REFERENCES dathang (idPhieu) ON DELETE CASCADE,
	FOREIGN KEY (idSP) REFERENCES sanpham (idSP)
);

-- tao table hoa don --
create table hoadon(
	idHoaDon int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idPhieu int(11) NOT NULL,
	FOREIGN KEY (idPhieu) REFERENCES dathang (idPhieu) ON DELETE CASCADE
);

-- insert admin --
insert into account(username, password, gmail, day_add) values ('admin', 'admin123', 'admin123@gmail.com', '2021-4-9');

-- insert san pham --
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('H9030PM','Mathey Tissot','Mathey Tissot RETRO RENAISSANCE AUTOMATIC','Thụy Sĩ','Automatic (máy cơ)','Đồng hồ nam','43mm','Thép không gỉ 316L/Mạ PVD','Dây Da Thật','Kính Sapphire','50M', 19396000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('HB611251ATAN','Mathey Tissot','Mathey Tissot CITY AUTOMATIC','Thụy Sĩ','Automatic (máy cơ)','Đồng hồ nam','42mm','Thép không gỉ 316L','Dây Da Thật','Kính Sapphire coated','50M', 12076000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('H900ATLV','Mathey Tissot','Mathey Tissot ROLLY VINTAGE AUTOMATIC','Thụy Sĩ','Automatic (máy cơ)','Đồng hồ nam','43mm','Thép không gỉ 316L/Mạ Carbon','Dây Da Thật','Kính Sapphire','100M', 65905000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('S3O','Mathey Tissot','Mathey Tissot STORM','Thụy Sĩ','Automatic (máy cơ)','Đồng hồ nam','40mm','Thép không gỉ 316L','Dây Da Thật','Kính Sapphire coated','100M', 16916000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('EG1886ATV','Mathey Tissot','Mathey Tissot ERIC GIROUD AUTOMATIC','Thụy Sĩ','Automatic (máy cơ)','Đồng hồ nam','42mm','Thép không gỉ 316L','Dây Da Thật','Kính Sapphire Antireflex','50M', 61005000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('H7030AM','Mathey Tissot','Mathey Tissot Retrograde Chrono','Thụy Sĩ',' Quartz (máy pin)','Đồng hồ nam','43mm','Thép không gỉ 316L','Dây Da Thật','Kính Sapphire','50M', 14496000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('H7030RSO','Mathey Tissot','Mathey Tissot Retrograde Chrono','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nam','43mm','Thép không gỉ 316L/Mạ Carbon','Dây Da Thật','Kính Sapphire','50M', 14496000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('AMH1886AS','Mathey Tissot','Mathey Tissot Edmond Automatic','Thụy Sĩ','Automatic (máy cơ)','Đồng hồ nam','42mm','Thép không gỉ 316L','Dây Da Thật','Kính Sapphire Antireflex','50M', 31218000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('MC1886AV','Mathey Tissot','Mathey Tissot Edmond Automatic','Thụy Sĩ','Automatic (máy cơ)','Đồng hồ nam','42mm','Thép không gỉ 316L','Dây Da Bò','Kính Sapphire','50M', 30225000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('H1886PS','Mathey Tissot','Mathey Tissot Edmond Automatic','Thụy Sĩ','Automatic (máy cơ)','Đồng hồ nam','42mm','Thép không gỉ 316L/Mạ PVD','Dây Da Thật','Kính Sapphire','50M', 21756000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('D410ALI','Mathey Tissot','Mathey Tissot Elegance','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nữ','32mm','Thép không gỉ 316L','Dây Da ','Kính Sapphire','50M', 5340000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('D31186ABU','Mathey Tissot','Mathey Tissot City','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nữ','28mm','Thép không gỉ 316L','Dây Da ','Kính Sapphire coated','50M', 3848000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('D865PI','Mathey Tissot','Mathey Tissot SPLASH','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nữ','38mm','Thép không gỉ 316L','Dây Da ','Kính Sapphire','50M', 5300000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('D411ABU','Mathey Tissot','Mathey Tissot Urban','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nữ','30mm','Thép không gỉ 316L','Dây Da ','Kính Sapphire coated','50M', 4090000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('D1086PQI','Mathey Tissot','Mathey Tissot ARTEMIS','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nữ','32mm','Thép không gỉ 316L/Mạ PVD','Thép không gỉ 316L/Mạ PVD','Kính Sapphire','30M', 9656000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('D2111AN','Mathey Tissot','Mathey Tissot Elisa','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nữ','30mm','Thép không gỉ 316L','Thép không gỉ 316L','Kính Sapphire coated','50M', 5542000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('D3082RN','Mathey Tissot','Mathey Tissot Lucrezia','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nữ','32mm','Thép không gỉ 316L/Mạ PVD','Thép không gỉ 316L/Mạ PVD','Kính Sapphire','50M', 8446000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('D410AQN','Mathey Tissot','Mathey Tissot Elegance','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nữ','32mm','Thép không gỉ 316L','Thép không gỉ 316L','Kính Sapphire','50M', 9656000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('D810AV','Mathey Tissot','Mathey Tissot Rolly III','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nữ','26mm','Thép không gỉ 316L','Thép không gỉ 316L','Kính Cứng','50M', 4322000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('D593SANI','Mathey Tissot','Mathey Tissot ATHENA','Thụy Sĩ','Quartz (máy pin)','Đồng hồ nữ','32mm','Thép không gỉ 316L','Thép không gỉ 316L','Kính Sapphire','50M', 12076000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('OG1929-24AGS-GL-T','Ogival','Ogival OG1929-24AGS-GL-T','Thụy Sỹ','Automatic','Đồng hồ nam','40mm','Thép không gỉ 316L','Dây da cao cấp','Kính Sapphire','50M', 15062400);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('OG30327-1DMW-T','Ogival','Ogival OG30327-1DMW-T','Thụy Sỹ','Automatic','Đồng hồ nam','38mm','Đính đá SWAROVSKI','Thép không gỉ 316L','Kính Sapphire','30M', 20413800);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('OG358.63AGR-GL','Ogival','Ogival OG358.63AGR-GL','Thụy Sỹ','Automatic','Đồng hồ nam','40mm','Thép không gỉ 316L/Mạ PVD','Dây da cao cấp','Kính Sapphire','50M', 23294700);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('OG3360AMBR-D','Ogival','Ogival OG3360AMBR-D','Thụy Sỹ','Automatic','Đồng hồ nam','42mm','Thép không gỉ 316L','Thép không gỉ 316L','Kính Sapphire','50M', 16297200);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('OG385-022GK-D','Ogival','Ogival OG385-022GK-D','Thụy Sỹ','Quatar','Đồng hồ nam','40mm','Thép không gỉ 316L/Mạ PVD','Thép không gỉ 316L/Mạ PVD','Kính Sapphire','30M', 9309600);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('OP2460LK-T','Olympia','Olympia OP2460LK-T','Thụy Sỹ','Quatar','Đồng hồ nữ','28mm','Thép không gỉ 316L/Mạ PVD','Thép không gỉ 316L/Mạ PVD','Kính Sapphire','30M', 2754000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('OP130-07LS-GL-T','Olympia','Olympia OP130-07LS-GL-T','Thụy Sỹ','Quatar','Đồng hồ nữ','24mm','Thép không gỉ 316L','Dây da','Kính Sapphire','30M', 1695600);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('OP2460DLSK-T','Olympia','Olympia OP2460DLSK-T','Thụy Sỹ','Quatar','Đồng hồ nữ','26mm','Thép không gỉ 316L','Thép không gỉ 316L/Mạ PVD','Kính Sapphire','30M', 3684600);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('OPA28015DLS-T','Olympia','Olympia OPA28015DLS-T','Thụy Sỹ','Quatar','Đồng hồ nữ','22.7mm','Thép không gỉ 316L','Thép không gỉ 316L','Kính Sapphire','30M', 3645900);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('OPA28018DLSK-T','Olympia','Olympia OPA28018DLSK-T','Thụy Sỹ','Quatar','Đồng hồ nữ','28mm','Thép không gỉ 316L/Mạ PVD','Thép không gỉ 316L/Mạ PVD','Kính Sapphire','30M', 4537800);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('AG8354-53E','Citizen','Citizen AG8354-53E','Nhật Bản','Quatar','Đồng hồ nam','40mm','Thép không gỉ 316L','Thép không gỉ 316L','Kính Khoáng','50M', 3645000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('BI1088-53P','Citizen','Citizen BI1088-53P','Nhật Bản','Quatar','Đồng hồ nam','41mm','Thép không gỉ','Thép không gỉ','Kính Mineral','50M', 3159000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('NH7524-55A','Citizen','Citizen NH7524-55A','Nhật Bản','Automatic','Đồng hồ nam','40mm','Thép không gỉ','Thép không gỉ','Kính Sapphire','50M', 6993000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('K4054-53E','Citizen','Citizen BK4054-53E','Nhật Bản','Quatar','Đồng hồ nam','35mm','Thép không gỉ','Thép không gỉ','Kính Mineral','50M', 2430000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('NP1010-01A','Citizen','Citizen NP1010-01A','Nhật Bản','Automatic','Đồng hồ nam','40mm','Thép không gỉ 316L','Dây da','Kính Sapphire','100M', 11781000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('FDB0B001W0','Orient','Orient FDB0B001W0','Nhật Bản','Automatic','Đồng hồ nữ','38.5mm','Thép không gỉ 316L/Mạ PVD','Dây da cao cấp','Kính Cứng','50M', 6100000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('FUNG6005W0','Orient','Orient FUNG6005W0','Nhật Bản','Quatar','Đồng hồ nữ','34mm','Thép không gỉ 316L','Dây da','Kính Sapphire','30M', 3132000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('FUB9B005W0','Orient','Orient FUB9B005W0','Nhật Bản','Quatar','Đồng hồ nữ','30.5mm','Thép không gỉ 316L','Dây da','Kính Sapphire','30M', 3924000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('CDB0100BW0','Orient','Orient CDB0100BW0','Nhật Bản','Automatic','Đồng hồ nữ','37mm','Thép không gỉ 316L/Mạ vàng','Dây da cao cấp','Kính Cứng','50M', 4167000);
INSERT INTO sanpham(maSP, hangSP, tenSP, xuatXu, kieuMay, loai, duongKinh, chatLieuVo, chatLieuDay, chatLieuKinh, doChiuNuoc, giaSP) VALUES ('FUA07004W0','Orient','Orient FUA07004W0','Nhật Bản','Quatar','Đồng hồ nữ','35mm','Thép không gỉ 316L/Mạ vàng','Dây da','Kính Sapphire','50M', 3429000);

-- insert san pham nhap kho
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 1,'H9030PM', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 2,'HB611251ATAN', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 3,'H900ATLV', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 4,'S3O', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 5,'EG1886ATV', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 6,'H7030AM', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 7,'H7030RSO', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 8,'AMH1886AS', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 9,'MC1886AV', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 10,'H1886PS', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 11,'D410ALI', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 12,'D31186ABU', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 13,'D865PI', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 14,'D411ABU', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 15,'D1086PQI', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 16,'D2111AN', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 17,'D3082RN', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 18,'D410AQN', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 19,'D810AV', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 20,'D593SANI', 25, 'chiếc', '2021-4-19');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 21,'OG1929-24AGS-GL-T', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 22,'OG30327-1DMW-T', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 23,'OG358.63AGR-GL', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 24,'OG3360AMBR-D', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 25,'OG385-022GK-D', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 26,'OP2460LK-T', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 27,'OP130-07LS-GL-T', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 28,'OP2460DLSK-T', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 29,'OPA28015DLS-T', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 30,'OPA28018DLSK-T', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 31,'AG8354-53E', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 32,'BI1088-53P', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 33,'NH7524-55A', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 34,'K4054-53E', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 35,'NP1010-01A', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 36,'FDB0B001W0', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 37,'FUNG6005W0', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 38,'FUB9B005W0', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 39,'CDB0100BW0', 25, 'Chiếc', '2021-4-27');
INSERT INTO nhapkho(idSP, maSP, soLuong, dvt, ngayNhap) VALUES ( 40,'FUA07004W0', 25, 'Chiếc', '2021-4-27');

-- insert don hang
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Lê Thái Dương ', '0905332211', 'Hà Nội', 8 , 132864000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Nguyễn Thành Công ', '0905124568', 'Đà Nẵng', 1 , 61005000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Phạm Thông Đạt ', '0905323536', 'Sài Gòn', 1 , 30225000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Nguyên Thị Ngọc Hoa ', '0905212455', 'Huế', 1 , 12076000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Trần Thiên Di', '0905656964', 'Đà Nẵng', 1 , 3848000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Nguyễn Phạm Thiên Thanh', '0905121456', 'Hà Nội', 1 , 5542000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Trần Thạch Thảo ', '0905332211', 'Nha Trang', 1 , 3924000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Nguyễn Trúc Chi', '0905124568', 'Huế', 3 , 223053000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Phạm Kim Chi ', '0905323536', 'Đà Nẵng', 1 , 3645900);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Lê Thanh Hà', '0905212455', 'Nha Trang', 2 , 30225000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Nguyễn Thu Cúc ', '0905656964', 'Sài Gòn', 1 , 2754000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Phạm Đăng Khoa', '0905121456', 'Hà Nội', 1 , 6993000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Lê Khang Kiện', '0905656842', 'Sài Gòn', 1 , 4537800);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Võ Tuấn Kiệt', '0905784215', 'Nha Trang', 1 , 1695600);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('test', '0905784215', 'Nha Trang', 1 , 1695600);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('test1', '0905784215', 'Nha Trang', 1 , 1695600);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('test2', '0905784215', 'Nha Trang', 14 , 372008000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Lê Minh Đức', '0123456788', 'Huế', 15, 188400000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Minh Đức', '0123456788', 'Đà Nẵng', 9, 108305000);
INSERT INTO dathang(tenKH, sdt, diaChi, tongSoLuong, tongTien) VALUES ('Đức', '0123456788', 'Đà Nẵng', 22, 285032000);

-- insert thong tin dat hang
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (1, 2, 3, 12076000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (2, 5, 2, 8446000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (3, 9, 1, 16916000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (4, 20, 2, 30225000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (5, 12, 4, 9656000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (6, 16, 5, 8446000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (7, 38, 3, 12076000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (8, 22, 2, 8446000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (9, 29, 1, 16916000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (10, 34, 2, 30225000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (11, 26, 4, 9656000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (12, 33, 5, 8446000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (13, 30, 3, 12076000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (14, 27, 2, 8446000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (15, 4, 1, 16916000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (16, 9, 2, 30225000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (17, 15, 4, 9656000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (17, 4, 10, 16916000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (1, 12, 5, 3848000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (8, 3, 1, 65905000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (18, 4, 10, 16916000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (18, 12, 5, 3848000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (19, 3, 1, 65905000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (19, 13, 8, 5300000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (20, 4, 10, 16916000);
INSERT INTO thongtindathang (idPhieu, idSP, soLuong, giaSP) VALUES (20, 15, 12, 9656000);

-- insert hoa don
-- INSERT INTO hoadon(idPhieu, tenKH, idSP, maSP, tenSP, soluong, giaSP) VALUES ( , '', , '', '', , );



-- SELECT sp.maSP, sp.hangSP, sp.tenSP, sp.loai, nk.soluong, nk.dvt, sp.giaSP
--             FROM sanpham sp
--             INNER JOIN nhapkho nk ON (sp.maSP = nk.maSp)
--             where sp.idSP = 22 

-- SELECT dh.tenKH, dh.sdt, dh.diaChi, dh.maSP, dh.tenSP, dh.soluong, dh.giaSP
-- FROM dathang dh
-- inner join nhapkho nk ON (sp.idSP = nk.idSP)
-- WHERE sp.idSP = 1 



-- update sanpham 
-- set maSP = 'HB611251ATAN', hangSP = 'Mathey Tissot', 
-- tenSP = 'Mathey Tissot CITY AUTOMATIC', 
-- xuatXu = 'Thụy Sĩ', kieuMay = 'Automatic', 
-- loai = 'Đồng hồ nam', duongKinh = '42mm', 
-- chatLieuVo = 'Thép không gỉ 316L', 
-- chatLieuDay = 'Dây Da Thật', chatLieuKinh = 'Kính Sapphire coated', 
-- doChiuNuoc = '50M', giaSP = 12076000
-- where idSP = 2


-- drop table hoadon 
-- drop table dathang 
-- drop table xuatkho 
-- drop table nhapkho 
-- drop table anhsanpham 
-- drop table sanpham 

-- SELECT sp.idSP, sp.maSP, sp.hangSP, sp.tenSP, sp.loai, nk.soluong, nk.dvt, sp.giaSP
--             FROM sanpham sp
--             LEFT JOIN nhapkho nk ON (sp.idSP = nk.idSP)
--             
-- DELETE FROM sanpham WHERE idSP = 2


-- ALTER TABLE anhsanpham
-- DROP FOREIGN KEY anhsanpham_ibfk_1;

-- ALTER TABLE dathang
-- ADD column trangThai boolean default True


-- SELECT * FROM dathang  where trangThai = 1 LIMIT 10 OFFSET 0

-- SELECT  tt.*, COUNT(soLuong) AS tong
-- FROM thongtindathang tt
-- GROUP BY id;

-- SELECT dh.tenKH, dh.sdt, dh.diaChi, sp.maSP, sp.tenSP, count(tt.soLuong) AS tongSoLuong, (dh.tongSoLuong * dh.tongTien) AS TongTien, dh.trangThai
-- FROM dathang dh 
-- INNER JOIN thongtindathang tt ON (dh.idPhieu = tt.idPhieu)
-- INNER JOIN sanpham sp ON (tt.idSP = sp.idSP)
-- -- where dh.idPhieu = 1

-- SELECT dh.idPhieu, sp.idSP
-- FROM dathang dh 
-- INNER JOIN thongtindathang tt ON (dh.idPhieu = tt.idPhieu)
-- INNER JOIN sanpham sp ON (tt.idSP = sp.idSP)

-- SELECT dh.tenKH, sp.maSP, sp.tenSP, dh.soLuong, (dh.soLuong * dh.giaSP) AS giaSP
-- FROM hoadon hd
-- INNER JOIN dathang dh ON (hd.idPhieu = dh.idPhieu)
-- INNER JOIN thongtindathang tt ON (dh.idPhieu = tt.idPhieu)
-- INNER JOIN sanpham sp ON (tt.idSP = sp.idSP)
-- -- WHERE hd.idSP = 

-- select tt.*, sp.tenSP
-- from thongtindathang tt 
-- LEFT JOIN sanpham sp on (tt.idSP = sp.idSP)

-- select * from anhsanpham order by idImage desc
-- ALTER TABLE hoadon 
-- DROP column idSP

-- SELECT dh.tenKH, dh.sdt, dh.diaChi, tt.soLuong, tt.giaSP,(tt.soLuong * tt.giaSP) AS tongTien
-- FROM  hoadon hd
-- LEFT JOIN dathang dh ON (dh.idPhieu = hd.idPhieu)
-- LEFT JOIN thongtindathang tt ON (dh.idPhieu = tt.idPhieu)
-- LEFT JOIN sanpham sp ON (tt.idSP = sp.idSP)
-- WHERE hd.idHoaDon = 2



