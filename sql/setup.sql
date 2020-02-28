CREATE DATABASE charity;
ALTER DATABASE charity CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE charity;

CREATE USER 'charity'@'localhost' IDENTIFIED BY 'test12345';
GRANT ALL PRIVILEGES ON charity.* TO 'charity'@'localhost';