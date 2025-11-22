CREATE DATABASE quan_ly_web_phim;
USE quan_ly_web_phim;

CREATE TABLE the_loai(
    ma_the_loai INT,
    ten_the_loai VARCHAR(100)
);
CREATE TABLE quoc_gia(
    quoc_gia_id INT, 
    ten_quoc_gia VARCHAR(100)
);
CREATE TABLE phim(
    phim_id INT,
    ten_phim VARCHAR(100),
    nam_phat_hanh INT,
    thoi_luong INT,
    anh_bia VARCHAR(100),
    quoc_gia_id INT,
    ngay_tao DATE,
    id_dien_vien VARCHAR(50),
    id_dao_dien VARCHAR(50),
    mo_ta TEXT
);
CREATE TABLE nguoi_dung(
    id INT,
    ten_dang_nhap VARCHAR(50),
    mat_khau VARCHAR(255),
    ho_ten VARCHAR(50),
    email VARCHAR(50),
    sdt VARCHAR(50),
    quyen_id INT,
    ngay_sinh DATETIME
);
CREATE TABLE quyen(
    id_quyen INT,
    ten_quyen VARCHAR(20)
);
CREATE TABLE dien_vien(
    id INT,
    phim_id INT,
    dien_vien_id VARCHAR(20)
);
;CREATE TABLE tap_phim(
    tap_id INT,
    phim_id INT,
    so_tap INT,
    tieu_de VARCHAR(50),
    link_phim VARCHAR(255),
    thoi_luong INT,
    ngay_phat_hanh DATE,
    trailer VARCHAR(50)
);



CREATE DATABASE IF NOT EXISTS quan_ly_web_phim;
USE quan_ly_web_phim;

DROP TABLE IF EXISTS the_loai;
CREATE TABLE the_loai (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_the_loai VARCHAR(50) NOT NULL UNIQUE
);

DROP TABLE IF EXISTS nguoi_dung;
CREATE TABLE nguoi_dung (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_dang_nhap VARCHAR(50) NOT NULL UNIQUE,
    mat_khau VARCHAR(255) NOT NULL, -- Dùng 255 để lưu trữ mật khẩu đã mã hóa (nên làm)
    ho_ten VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    sdt VARCHAR(15),
    vai_tro_id INT,
    ngay_sinh DATE,
    -- Khóa ngoại liên kết với bảng vai_tro
    FOREIGN KEY (vai_tro_id) REFERENCES vai_tro(id)
);

DROP TABLE IF EXISTS vai_tro;
CREATE TABLE vai_tro (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_vai_tro VARCHAR(20) NOT NULL UNIQUE
);

DROP TABLE IF EXISTS phim;
CREATE TABLE phim (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_phim VARCHAR(255) NOT NULL,
    dao_dien_id INT, -- Liên kết với người_dùng
    nam_phat_hanh INT,
    poster VARCHAR(255),
    quoc_gia_id INT,
    so_tap INT DEFAULT 1, -- Mặc định là 1 (phim lẻ)
    trailer VARCHAR(255),
    mo_ta TEXT,
    -- Khóa ngoại liên kết với bảng người_dùng (cho đạo diễn)
    FOREIGN KEY (dao_dien_id) REFERENCES nguoi_dung(id),
    -- Khóa ngoại liên kết với bảng quốc_gia
    FOREIGN KEY (quoc_gia_id) REFERENCES quoc_gia(id)
);

DROP TABLE IF EXISTS phim_dien_vien;
CREATE TABLE phim_dien_vien (
    id INT PRIMARY KEY AUTO_INCREMENT,
    phim_id INT NOT NULL,
    dien_vien_id INT NOT NULL, -- Dùng id của nguoi_dung
    -- Khóa ngoại
    FOREIGN KEY (phim_id) REFERENCES phim(id),
    FOREIGN KEY (dien_vien_id) REFERENCES nguoi_dung(id),
    -- Đảm bảo mỗi diễn viên chỉ được thêm 1 lần vào 1 phim
    UNIQUE (phim_id, dien_vien_id)
);

DROP TABLE IF EXISTS phim_the_loai;
CREATE TABLE phim_the_loai (
    id INT PRIMARY KEY AUTO_INCREMENT,
    phim_id INT NOT NULL,
    the_loai_id INT NOT NULL,
    -- Khóa ngoại
    FOREIGN KEY (phim_id) REFERENCES phim(id),
    FOREIGN KEY (the_loai_id) REFERENCES the_loai(id),
    -- Đảm bảo mỗi cặp phim/thể loại là duy nhất
    UNIQUE (phim_id, the_loai_id)
);

DROP TABLE IF EXISTS quoc_gia;
CREATE TABLE quoc_gia (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_quoc_gia VARCHAR(100) NOT NULL UNIQUE
);

DROP TABLE IF EXISTS tap_phim;
CREATE TABLE tap_phim (
    id INT PRIMARY KEY AUTO_INCREMENT,
    so_tap INT NOT NULL,
    tieu_de VARCHAR(255),
    phim_id INT NOT NULL,
    thoi_luong FLOAT,
    trailer VARCHAR(255),
    -- Khóa ngoại liên kết với bảng phim
    FOREIGN KEY (phim_id) REFERENCES phim(id),
    -- Ràng buộc số tập và id phim phải là duy nhất (không có 2 tập cùng số trong 1 phim)
    UNIQUE (phim_id, so_tap)
);
