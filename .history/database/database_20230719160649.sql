use website;

CREATE TABLE Category (
    id INT AUTO_INCREMENT,
    name_category VARCHAR(255) NOT NULL,
    mota VARCHAR(255) NOT NULL,

    PRIMARY KEY (id)
);

CREATE TABLE Customers(
    id CHAR(25) NOT NULL,
    name_kh VARCHAR(255) NOT NULL,
    sdt CHAR(11) NOT NULL,
    email VARCHAR(255),
    address_kh VARCHAR(255),
    avatar VARCHAR(255),
    gioitinh VARCHAR(25),

    PRIMARY KEY(id)
);

CREATE TABLE Product (
    id CHAR(25) NOT NULL,
    name_sp VARCHAR(255) NOT NULL,
    soluong INT,
    price INT,
    mota VARCHAR(255),
    img VARCHAR(255),
    category_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (category_id) REFERENCES Category(id)
);

CREATE TABLE BIll(
    id INT AUTO_INCREMENT NOT NULL,
    id_kh CHAR(25) NOT NULL,
    ngaymua DATE NOT NULL,
    trangthai_dh VARCHAR(255) NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY(id_kh) REFERENCES Customers(id)
);

CREATE TABLE BIll_detailed (
    id_bill INT AUTO_INCREMENT NOT NULL,
    id_sp CHAR(25) NOT NULL,
    dongia INT NOT NULL,
    tinhtrang_sp VARCHAR(255) NOT NULL,

    FOREIGN KEY (id_bill) REFERENCES BIll(id),
    FOREIGN KEY(id_sp) REFERENCES Product(id)
);