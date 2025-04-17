CREATE DATABASE perpus;
use perpus;
CREATE TABLE anggota(
    id_anggota BIGINT PRIMARY KEY,
    kode_anggota CHAR(10),
    nama_lengkap VARCHAR(50),
    alamat TEXT,
    no_telepon VARCHAR(13),
    jenis_kelamin ENUM('pria','wanita')
);

CREATE TABLE buku(
    id_buku INT PRIMARY KEY AUTO_INCREMENT,
    kode_buku CHAR(5),
    judul_buku VARCHAR(50),
    penulis_buku VARCHAR(50),
    penerbit_buku VARCHAR(50),
    tahun_terbit YEAR,
    stok TINYINT
);

CREATE TABLE pengembalian(
    id_pengembalian INT PRIMARY KEY AUTO_INCREMENT,
    tanggal_kembali DATE,
    jumlah_buku TINYINT,
    id_buku INT,
    id_anggota INT,
    denda BIGINT,
    id_peminjaman BIGINT
);

CREATE TABLE peminjaman(
    id_peminjaman INT PRIMARY KEY AUTO_INCREMENT,
    tanggal_pinjam DATE,
    tanggal_kembali DATE,
    id_buku INT,
    id_anggota INT,
    jumlah_buku TINYINT
);

INSERT INTO anggota(id_anggota,kode_anggota,nama_lengkap,alamat,no_telepon,jenis_kelamin) VALUES    
    (1,'KA--01','varthir','gg.keramik','08593674560','pria'),
    (2,'KA--02','Hoshimi','ngawi','08594561289','wanita');

INSERT INTO buku(kode_buku,judul_buku,penulis_buku,penerbit_buku,tahun_terbit,stok) VALUES
    ('KB--001','kopali','septian','saeful','2020-07-10',10),
    ('KB--002','quetism','PTJ','saeful','2019-11-03',20);


DELIMITER $$

CREATE TRIGGER ryus
BEFORE INSERT
ON peminjaman
FOR EACH ROW
begin
    DECLARE jumlah_stok int;
    SELECT stok INTO jumlah_stok FROM buku WHERE id_buku = new.id_buku;
    IF jumlah_stok < new.jumlah_buku THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'Peminjaman dibatalakan';
    END IF;
end$$

DELIMITER ;

INSERT INTO peminjaman(tanggal_pinjam,tanggal_kembali,id_buku,id_anggota,jumlah_buku) VALUES
    ('12-02-2025','15-03-2025',1,1,1);

DELIMITER $$

CREATE TRIGGER Kopi
AFTER INSERT
ON peminjaman
FOR EACH ROW
BEGIN
    UPDATE buku SET stok = stok - 1 WHERE id_buku = new.id_buku;
END$$

DELIMITER ;

SELECT*FROM buku;

DELIMITER $$

CREATE TRIGGER kl
AFTER INSERT
ON pengembalian
FOR EACH ROW
BEGIN
     
END$$

DELIMITER ;

DROP TRIGGER kl;

DROP TABLE pengembalian;

SELECT*FROM pengembalian;



INSERT INTO pengembalian(tanggal_kembali,jumlah_buku,id_buku,id_anggota,id_peminjaman) VALUES
    ('1-04-2025',1,1,1,1);