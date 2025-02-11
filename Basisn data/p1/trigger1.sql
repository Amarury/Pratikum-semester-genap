CREATE DATABASE gpt;
USE gpt;
CREATE TABLE siswa(
    nis INT PRIMARY KEY,
    nama VARCHAR(20),
    alamat VARCHAR(50),
    no_telp VARCHAR(13),
    tanggal_lahir DATE
);

CREATE TABLE Logsiswa(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nis INT,
    deskripsi VARCHAR(50),
    waktu TIMESTAMP
);

CREATE TABLE Loghp(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nis INT,
    no_telp_baru VARCHAR(13),
    no_telp_lama VARCHAR(13),
    waktu TIMESTAMP
);

INSERT INTO siswa(nis,nama,alamat,no_telp,tanggal_lahir) VALUES
    (10918,'Solim','Rawa mekar','0987654321','15-02-2007'),
    (20876,'sajad','ciwangi','0123456789','20-07-2008');

DELIMITER $$

CREATE TRIGGER kurang
AFTER INSERT
ON siswa
FOR EACH ROW
BEGIN
   INSERT INTO logsiswa(nis,deskripsi) VALUES (NEW.nis,'Data ditambahkan');
END$$

DELIMITER ;

DROP TRIGGER kurang;

INSERT INTO siswa(nis,nama,alamat,no_telp,tanggal_lahir) VALUES
    (97626,'sadak','purwamekar','0895806280505','19-07-2008');

SELECT*FROM logsiswa;

DELIMITER $$

CREATE TRIGGER tambah
AFTER UPDATE
ON siswa
FOR EACH ROW
BEGIN
    UPDATE logsiswa SET nama = 'himeji' WHERE nis = 10918 = NEW.nis;
    ins
END$$

DELIMITER ;

SELECT*fro