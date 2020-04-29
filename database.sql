CREATE TABLE line (
	id INT AUTO_INCREMENT PRIMARY KEY not null,
	first_name VARCHAR(15) not null,
    last_name VARCHAR(15) not null,
    phone_number VARCHAR(10) not null,
    email VARCHAR(40),
)

CREATE TABLE removed (
	id INT AUTO_INCREMENT PRIMARY KEY not null,
	first_name VARCHAR(15) not null,
    last_name VARCHAR(15) not null,
    phone_number VARCHAR(9) not null,
    email VARCHAR(40)
)