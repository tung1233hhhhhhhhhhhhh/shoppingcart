CREATE database shopstore;


CREATE table Category (
    id INT auto_increment,
    name_category varchar(255) not null,
    mota varchar(255) not null,

    primary key (id),
);


CREATE table Customers(
    id CHAR(25) not null,
    name_kh VARCHAR(255) not null,
    sdt CHAR(11) not null,
    email VARCHAR(255),
    address_kh VARCHAR(255),
    avatar VARCHAR(255),
    gioitinh VARCHAR(25),

    primary key(id),
);


create table Product (

    id CHAR(25) not null,
    name_sp varchar(255) not null,
    soluong INT ,
    price int,
    mota VARCHAR(255),
    img VARCHAR(255),
    category_id INT auto_increment not null,
    primary key (id),
    foreign key (category_id) references Category(id)

    
);
CREATE TABLE BIll(
    id INT auto_increment not null,
    id_kh char(25) not null,
    ngaymua date not null,
    trangthai_dh varchar(255) not null,

    primary key (id),
    foreign key(id_kh) references Customers(id),
);

CREATE TABLE BIll_detailed (
    id_bill INT auto_increment not null,
    id_sp CHAR(25) not null,
    dongia int not null,
    tinhtrang_sp varchar(255) not null,

    foreign key (id_bill) references BIll(id),
    foreign key(id_sp) references Product(id),
);