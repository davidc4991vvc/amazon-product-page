CREATE TABLE seller2 (
	seller2Id INT UNSIGNED AUTO_INCREMENT NOT NULL,
	email     VARCHAR(128),
	UNIQUE (email),
	PRIMARY KEY (seller2Id)
);


CREATE TABLE product (
	productId   INT UNSIGNED AUTO_INCREMENT NOT NULL,
	seller2Id    INT UNSIGNED                NOT NULL,
	description VARCHAR(500),
	name        VARCHAR(32),
	price       DECIMAL(9, 2)               NOT NULL,
	starrating  INT,
	INDEX (productId),
	FOREIGN KEY (seller2Id) REFERENCES seller (seller2Id),
	PRIMARY KEY (productId)
);
