-- Active: 1729038042277@@127.0.0.1@3306@lovely
CREATE DATABASE lovely;
use lovely;
CREATE TABLE karyawan(
    id BIGINT PRIMARY KEY,
    nama VARCHAR(20),
    no_hp VARCHAR(13),
    jabatan VARCHAR(10)
);

CREATE TABLE absensi(
    id BIGINT PRIMARY KEY,
    tanggal DATE,
    karyawan_id BIGINT,
    Foreign Key (karyawan_id) REFERENCES karyawan(id)
);

CREATE TABLE rekap(
    id INT PRIMARY KEY,
    karyawan_id BIGINT,
    jumlah_hari INT,
    Foreign Key (karyawan_id) REFERENCES karyawan(id)
);

INSERT INTO karyawan(id,nama,no_hp,jabatan) VALUES
    (1,'Sodikin','0812124563','Direktur'),
    (2,'Melati','0813131452','Manager');

INSERT INTO rekap(id,karyawan_id,jumlah_hari) VALUES
    (1,1,0),
    (2,2,0);

DELIMITER $$

CREATE TRIGGER add_tambah
AFTER INSERT
ON absensi
FOR EACH ROW
BEGIN
    UPDATE rekap SET jumlah_hari = jumlah_hari + 1 WHERE karyawan_id = NEW.karyawan_id;
END$$

DELIMITER ;

INSERT INTO absensi(id,tanggal,karyawan_id) VALUES
    (1,'2025-01-06',1);

SELECT*FROM rekap;

DELIMITER $$

CREATE TRIGGER tambah_add
AFTER DELETE
ON absensi
FOR EACH ROW
BEGIN
    UPDATE rekap SET jumlah_hari = jumlah_hari - 1 WHERE karyawan_id = OLD.karyawan_id;
END$$

DELIMITER;

DELETE FROM absensi WHERE id = 1;