CREATE DATABASE megadata;
USE megadata;
CREATE TABLE inventaris (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(20),
    merek VARCHAR(20),
    jumlah INT(10),
    serial_number VARCHAR(30)
);