CREATE DATABASE lpk;
use lpk;
CREATE TABLE barang(
    id_brng VARCHAR(50) PRIMARY KEY,
    nama_brng VARCHAR(50),
    stok INT
);

CREATE TABLE pembelian(
    id_pembelian INT PRIMARY KEY AUTO_INCREMENT,
    id_brng VARCHAR(50),
    jml_pembelian INT
);

INSERT INTO barang(id_brng,nama_brng,stok) VALUES
    ("A10","Mouse",10),
    ("A11","Keyboard",15),
    ("A12","DVD-RW",19);

INSERT INTO pembelian(id_brng,jml_pembelian) VALUES
    ("A10",5);

DELIMITER $$

CREATE TRIGGER jka
BEFORE INSERT
ON barang
FOR EACH ROW
BEGIN
    SET NEW.stok = NEW.stok + 1;
END$$

DELIMITER;

INSERT INTO barang(id_brng,nama_brng,stok) VALUES
    ("A13","Ram",5);

SELECT*FROM barang;



DELIMITER $$

CREATE TRIGGER multiplayer
AFTER INSERT
ON pembelian
FOR EACH ROW
BEGIN
    

DELIMITER;

