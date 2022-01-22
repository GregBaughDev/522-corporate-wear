CREATE DATABASE IF NOT EXISTS corporate_wear;

CREATE TABLE catalogue (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    size ENUM('xs', 's', 'm', 'l', 'xl', 'xxl') NOT NULL,
    colour varchar(20) NOT NULL,
    category ENUM('clothing', 'merchandise') NOT NULL,
    gender ENUM('male', 'female', 'unisex') NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE customer (
    id int NOT NULL AUTO_INCREMENT,
    company varchar(50) NOT NULL,
    contact varchar(50) NOT NULL,
    streetAddress varchar(50) NOT NULL,
    city varchar(50) NOT NULL,
    state ENUM('VIC', 'NSW', 'QLD', 'SA', 'WA', 'TAS', 'NT', 'ACT', 'OTHER') NOT NULL,
    postcode tinyint(4) NOT NULL,
    phone varchar(12) NOT NULL,
    email varchar(100) NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE department (
    id int NOT NULL AUTO_INCREMENT,
    customerId int NOT NULL,
    name varchar(50) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (customerId) REFERENCES customer(id)
);


CREATE TABLE orders (
    id int NOT NULL AUTO_INCREMENT,
    customerId int NOT NULL,
    departmentId int NOT NULL,
    payment ENUM('credit card', 'invoice','purchase order') NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (customerId) REFERENCES customer(id),
    FOREIGN KEY (departmentId) REFERENCES department(id)
);

CREATE TABLE order_items (
    id int NOT NULL AUTO_INCREMENT,
    catalogueId int NOT NULL,
    orderId int NOT NULL,
    customerId int NOT NULL,
    qty blob(100000) NOT NULL,
    size ENUM('XS', 'S', 'M', 'L', 'XL', 'XXL') NOT NULL,
    colour varchar(50) NOT NULL,
    gender ENUM('Male', 'Female', 'Unisex') NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (catalogueId) REFERENCES catalogue(id),
    FOREIGN KEY (orderId) REFERENCES orders(id),
    FOREIGN KEY (customerId) REFERENCES customer(id)
);
