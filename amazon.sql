DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS seller;
DROP TABLE IF EXISTS sellerb;

CREATE TABLE seller (
	sellerId INT UNSIGNED AUTO_INCREMENT NOT NULL ,
	email VARCHAR(128),
	UNIQUE(email),
	PRIMARY KEY (sellerId)
);

CREATE TABLE product (
	productId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	sellerId INT UNSIGNED NOT NULL,
	description VARCHAR(500),
	name VARCHAR(32),
	price DECIMAL(9, 2) NOT NULL,
	starrating INT,
	INDEX (productId),
	FOREIGN KEY(sellerId) REFERENCES seller(sellerId),
	PRIMARY KEY(productId)

);

CREATE TABLE product (
	productId   INT UNSIGNED AUTO_INCREMENT NOT NULL,
	sellerId    INT UNSIGNED                NOT NULL,
	description VARCHAR(500),
	name        VARCHAR(32),
	price       DECIMAL(9, 2)               NOT NULL,
	starrating  INT,
	INDEX (productId),
	FOREIGN KEY (sellerId) REFERENCES seller (sellerId),
	PRIMARY KEY (productId)
);


INSERT INTO seller(sellerId, email) VALUES (1, "email@email.com");
INSERT INTO product(sellerId, description, name, price, starrating) VALUES (1, "winter jacket for young children", "insulated jacket", 34.99, 4);
INSERT INTO product(sellerId, description, name, price, starrating) VALUE  (1, "winter sock for young chrildren", "warm up", 8.99, 3);
INSERT INTO product(sellerId, description, name, price, starrating)  VALUE (1, "smart cut for smart men", "smart trim", 19.99, 4);
INSERT INTO seller(sellerId, email) VALUE (2, "bemail@email.com");
INSERT INTO product(sellerId, description, name, price, starrating) VALUE (2, "outter covering for wind effects", "wind breaker", 24.99, 3);
INSERT INTO product(sellerId, description, name, price, starrating)  VALUE (2, "all terrain water proof boots", "tough boots", 64.99, 4);

/*UPDATE seller SET email= WHERE sellerId=42;
DELETE from seller WHERE sellerId = 42;
SELECT email ;*/