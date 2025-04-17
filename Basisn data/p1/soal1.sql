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

DROP TABLE pembelian;

DROP TABLE barang;



CREATE TRIGGER jka
BEFORE INSERT
ON pembelian
FOR EACH ROW
BEGIN
     DECLARE jumlah_stok INT;
     SET jumlah_stok = (SELECT stok FROM barang WHERE id_brng = NEW.id_brng);
    -- cara 2
    -- SELECT stok into jumlah_stok FROM barang WHERE id_brng = NEW.id_brng;
    -- cek
    IF jumlah_stok < new jml_pembelian THEN 
        SIGNAL SQLSTATE '45000'
        -- kirim pesan
        SET MESSAGE_TEXT = 'Stok barang tidak cukup';
    END IF;
END$$







