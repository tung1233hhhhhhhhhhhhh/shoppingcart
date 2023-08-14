USE website;

CREATE TABLE Category (
    id INT AUTO_INCREMENT,
    name_category VARCHAR(255) NOT NULL,
    mota VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE tbl_users(
    id INT(100) NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(255) NOT NULL,
    sdt INT(10) NOT NULL,
    password CHAR(100) NOT NULL,
    gender ENUM('male','female') NOT NULL,
    email VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE Product (
    id INT NOT NULL AUTO_INCREMENT,
    name_sp VARCHAR(255) NOT NULL,
    soluong INT,
    price INT,
    mota VARCHAR(255),
    img VARCHAR(255),
    category_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (category_id) REFERENCES Category(id) ON DELETE SET NULL
);

CREATE TABLE BIll(
    id INT AUTO_INCREMENT NOT NULL,
    id_kh int NOT NULL,
    ngaymua DATE NOT NULL,
    trangthai_dh VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY(id_kh) REFERENCES tbl_users(id) ON DELETE SET NULL
);

CREATE TABLE BIll_detailed (
    id_bill INT AUTO_INCREMENT NOT NULL,
    id_sp INT ,
    dongia INT NOT NULL,
    tinhtrang_sp VARCHAR(255) NOT NULL,
    size VARCHAR(5),
    soluong INT,
    FOREIGN KEY (id_bill) REFERENCES BIll(id) ON DELETE CASCADE,
    FOREIGN KEY (id_sp) REFERENCES Product(id) ON DELETE SET NULL
);

CREATE TABLE `website`.`tbl_useradmin` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `password` CHAR(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
