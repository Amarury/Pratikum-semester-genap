CREATE DATABASE preview;
use preview;
CREATE TABLE pelanggan(
    pelanggan_id INT PRIMARY KEY,
    nama_pelanggan VARCHAR(255),
    alamat TEXT,
    nomor_telepon VARCHAR(15)
);
CREATE TABLE petugas(
    petugas_id INT PRIMARY KEY,
    nama_petugas VARCHAR(255),
    username VARCHAR(100),
    password VARCHAR(255),
    role ENUM("kepala toko","kasir")
);
CREATE TABLE penjualan(
    penjualan_id INT PRIMARY KEY,
    tanggal_penjualan DATE,
    total_harga DECIMAL(10,2),
    pelanggan_id INT,
    petugas_id INT
);
CREATE TABLE produk(
    produk_id INT PRIMARY KEY,
    nama_produk VARCHAR(255),
    harga DECIMAL(10,2),
    stok INT
);

CREATE TABLE detail_penjualan(
    detail_id INT PRIMARY KEY,
    penjualan_id INT,
    produk_id INT,
    jumlah_produk INT,
    subtotal INT
);

INSERT INTO pelanggan(pelanggan_id,nama_pelanggan,alamat,nomor_telepon) VALUES  
    (1,'john doe','123 main st,springfield','555-1234'),
    (2,'jane smith','456 st,springfield','555-5678');

INSERT INTO petugas(petugas_id,nama_petugas,username,password,role) VALUES
    (1,'alice johnson','alicej','password123','kepala_toko'),
    (2,'bob brown','bobb','password456','kasir');

INSERT INTO produk(produk_id,nama_produk,harga,stok) VALUES
    (1,'laptop',1500.00,10),
    (2,'smartphone',800.00,20);

INSERT INTO penjualan(penjualan_id,tanggal_penjualan,total_harga,pelanggan_id,petugas_id) VALUES
    (1,'2023-10-01',2300.00,1,2),
    (2,'2023-10-02',800.00,2,2);
INSERT INTO detail_penjualan(detail_id,penjualan_id,produk_id,jumlah_produk,subtotal) VALUES    
    (1,1,1,1,1500.00),
    (2,1,2,1,800.00),
    (3,2,2,1,800.00);

--1
SELECT SUM(detail_penjualan.subtotal * produk.harga) AS total_pendapatan
FROM detail_penjualan 
JOIN produk
ON detail_penjualan.produk_id = produk.produk_id;


--2
SELECT produk.nama_produk, SUM(detail_penjualan.jumlah_produk) AS total_terjual
FROM detail_penjualan 
JOIN produk
ON detail_penjualan.produk_id = produk.produk_id
GROUP BY produk.nama_produk;


--3
SELECT*FROM produk ORDER BY harga DESC;

--4
SELECT pelanggan.nama_pelanggan, COUNT(penjualan.penjualan_id) AS jumlah_transaksi
FROM penjualan
JOIN pelanggan ON penjualan.pelanggan_id = pelanggan.pelanggan_id
GROUP BY pelanggan.nama_pelanggan;

--5
SELECT AVG(harga) FROM produk WHERE stok > 0;

--6
SELECT penjualan.penjualan_id, pelanggan.nama_pelanggan, petugas.nama_petugas, penjualan.tanggal_penjualan
FROM penjualan
JOIN pelanggan ON penjualan.pelanggan_id = pelanggan.pelanggan_id
JOIN petugas ON penjualan.petugas_id = petugas.petugas_id;


--7
SELECT produk.nama_produk,pelanggan.nama_pelanggan
FROM produk
join detail_penjualan
ON detail_penjualan.detail_id = produk.produk_id
JOIN penjualan
ON detail_penjualan.detail_id = penjualan.penjualan_id
JOIN pelanggan
ON penjualan.penjualan_id = pelanggan.pelanggan_id
GROUP BY pelanggan.nama_pelanggan,produk.nama_produk;

--8
SELECT pelanggan.nama_pelanggan
FROM penjualan
JOIN pelanggan
ON penjualan.pelanggan_id = pelanggan.pelanggan_id
JOIN detail_penjualan 
ON penjualan.penjualan_id = detail_penjualan.penjualan_id
JOIN produk 
ON detail_penjualan.produk_id = produk.produk_id
WHERE produk.harga > 1000;

--9

DELIMITER $$

CREATE TRIGGER kurangi_stok_produk
AFTER INSERT ON detail_penjualan
FOR EACH ROW
BEGIN
  UPDATE produk
  SET stok = stok -1 WHERE produk_id = NEW.produk_id;
END$$

DELIMITER ;

--10

DELIMITER $$

CREATE TRIGGER cek_stok_produk
BEFORE INSERT ON detail_penjualan
FOR EACH ROW
BEGIN
  DECLARE stok_saat_ini INT;

  SELECT stok INTO stok_saat_ini
  FROM produk
  WHERE produk_id = NEW.produk_id;

  IF NEW.jumlah_produk > stok_saat_ini THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'Transaksi ditolak: jumlah pesanan melebihi stok yang tersedia.';
  END IF;
END$$

DELIMITER ;
