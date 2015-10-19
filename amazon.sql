DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS seller;

CREATE TABLE seller (
	sellerId    INT UNSIGNED AUTO_INCREMENT NOT NULL ,
	email VARCHAR(128),
	UNIQUE(email),
	PRIMARY KEY (sellerId)
);

CREATE TABLE product (
	productId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	sellerId INT UNSIGNED NOT NULL,
	name VARCHAR(32),
	description VARCHAR(500),
	price DECIMAL(9, 2) NOT NULL,
	starrating INT,
	INDEX (productId),
	FOREIGN KEY(sellerId) REFERENCES seller(sellerId),
	PRIMARY KEY(productId)
);