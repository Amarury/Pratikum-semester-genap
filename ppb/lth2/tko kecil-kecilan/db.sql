-- Active: 1729038042277@@127.0.0.1@3306@byul
CREATE DATABASE teke;
use teke;
CREATE TABLE pelanggan (
    pelangganId INT PRIMARY KEY,
    namaPelanggan VARCHAR(100) NOT NULL,
    alamat VARCHAR(255),
    nomorTelepon VARCHAR(15)
);
CREATE TABLE petugas (
    petugasId INT PRIMARY KEY,
    namaPetugas VARCHAR(100) NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(50) NOT NULL,
    role VARCHAR(50) NOT NULL
);
CREATE TABLE produk (
    produkId INT PRIMARY KEY,
    namaProduk VARCHAR(100) NOT NULL,
    harga INT NOT NULL,
    stok INT NOT NULL
);
CREATE TABLE penjualan (
    penjualanId INT PRIMARY KEY,
    tanggalPenjualan DATE NOT NULL,
    totalHarga INT NOT NULL,
    pelangganId INT NOT NULL,
    petugasId INT NOT NULL,
    FOREIGN KEY (pelangganId) REFERENCES pelanggan(pelangganId),
    FOREIGN KEY (petugasId) REFERENCES petugas(petugasId)
);
CREATE TABLE detailpenjualan (
    detailId INT PRIMARY KEY,
    penjualanId INT NOT NULL,
    produkId INT NOT NULL,
    jumlahProduk INT NOT NULL,
    subtotal INT NOT NULL,
    FOREIGN KEY (penjualanId) REFERENCES penjualan(penjualanId),
    FOREIGN KEY (produkId) REFERENCES produk(produkId)
);

-- data tabel
INSERT INTO pelanggan (pelangganId, namaPelanggan, alamat, nomorTelepon) VALUES
(1, 'Agus Santoso', 'Jl. Merpati No. 15', '081234567891'),
(2, 'Dewi Lestari', 'Jl. Mawar No. 20', '081345678912'),
(3, 'Budi Setiawan', 'Jl. Anggrek No. 5', '081456789123'),
(4, 'Citra Permata', 'Jl. Kenanga No. 10', '081567891234'),
(5, 'Eko Prasetyo', 'Jl. Melati No. 25', '081678912345');

INSERT INTO petugas (petugasId, namaPetugas, username, password, role) VALUES
(1, 'Indra Wijaya', 'iwijaya', 'pass123', 'kasir'),
(2, 'Siti Aisyah', 'saisyah', 'pass456', 'kasir'),
(3, 'Dani Pratama', 'dpratama', 'pass789', 'kasir'),
(4, 'Fajar Kurniawan', 'fkurniawan', 'pass101', 'kasir'),
(5, 'Rina Kartika', 'rkartika', 'pass202', 'kepala toko');

INSERT INTO produk (produkId, namaProduk, harga, stok) VALUES
(1, 'Buku Tulis', 5000, 100),
(2, 'Pulpen', 3000, 200),
(3, 'Penghapus', 2000, 150),
(4, 'Pensil', 2500, 180),
(5, 'Rautan', 1500, 120);

INSERT INTO penjualan (penjualanId, tanggalPenjualan, totalHarga, pelangganId, petugasId) VALUES
(1, '2025-02-01', 15000, 1, 1),
(2, '2025-02-05', 12000, 2, 2),
(3, '2025-02-10', 18000, 3, 3),
(4, '2025-02-15', 10000, 4, 4),
(5, '2025-02-20', 14000, 5, 5),
(6, '2025-02-25', 16000, 1, 2),
(7, '2025-02-28', 13000, 2, 3),
(8, '2025-03-01', 19000, 3, 1),
(9, '2025-03-05', 15000, 4, 4),
(10, '2025-03-10', 12000, 5, 5),
(11, '2025-03-15', 14000, 1, 2),
(12, '2025-03-20', 17000, 2, 3),
(13, '2025-03-25', 20000, 3, 1),
(14, '2025-03-28', 11000, 4, 4),
(15, '2025-03-30', 15000, 5, 5),
(16, '2025-02-03', 16000, 1, 2),
(17, '2025-02-08', 14000, 2, 3),
(18, '2025-02-12', 13000, 3, 1),
(19, '2025-02-18', 12000, 4, 4),
(20, '2025-02-23', 15000, 5, 5);

INSERT INTO detailpenjualan (detailId, penjualanId, produkId, jumlahProduk, subtotal) VALUES
(1, 1, 1, 2, 10000),
(2, 1, 2, 1, 3000),
(3, 1, 3, 2, 4000),
(4, 2, 1, 1, 5000),
(6, 3, 2, 3, 9000),
(7, 3, 3, 1, 2000),
(8, 3, 4, 2, 5000),
(9, 3, 5, 2, 3000),
(10, 4, 1, 2, 10000),
(11, 4, 5, 1, 1500),
(12, 5, 2, 2, 6000),
(13, 5, 3, 2, 4000),
(14, 5, 5, 2, 3000),
(15, 6, 1, 1, 5000),
(16, 6, 2, 2, 6000),
(17, 6, 3, 2, 4000),
(18, 6, 4, 1, 2500),
(19, 7, 3, 3, 9000),
(20, 7, 5, 2, 3000),
(21, 8, 1, 2, 10000),
(22, 8, 3, 1, 2000),
(23, 8, 4, 2, 5000),
(24, 9, 2, 2, 6000),
(25, 9, 3, 1, 2000),
(26, 9, 5, 3, 4500),
(27, 9, 4, 1, 2500),
(28, 10, 1, 3, 15000),
(29, 10, 5, 2, 3000),
(30, 11, 2, 1, 3000),
(31, 11, 3, 4, 8000),
(32, 11, 4, 2, 5000),
(33, 12, 1, 2, 10000),
(34, 12, 2, 2, 6000),
(35, 12, 3, 1, 2000),
(36, 12, 4, 3, 7500),
(37, 13, 5, 2, 3000),
(38, 13, 4, 1, 2500),
(39, 14, 2, 2, 6000),
(40, 14, 3, 2, 4000),
(41, 14, 5, 1, 1500),
(42, 15, 1, 3, 15000),
(43, 15, 2, 1, 3000),
(44, 15, 3, 3, 9000),
(45, 15, 4, 2, 5000),
(46, 16, 3, 4, 8000),
(47, 16, 5, 2, 3000),
(48, 17, 1, 2, 10000),
(49, 17, 2, 2, 6000),
(50, 17, 4, 1, 2500),
(51, 18, 1, 1, 5000),
(52, 18, 3, 2, 4000),
(53, 18, 4, 3, 7500),
(54, 18, 5, 2, 3000),
(55, 19, 3, 2, 4000),
(56, 19, 5, 3, 4500),
(57, 20, 1, 2, 10000),
(58, 20, 2, 1, 3000),
(59, 20, 4, 2, 5000);

SELECT COUNT(*) as total_penjualan FROM penjualan;

SELECT*FROM penjualan;

SELECT SUM(totalharga) as total_penjualan FROM penjualan;

SELECT tanggalpenjualan,SUM(totalharga) as total_pendapatan FROM penjualan WHERE tanggalpenjualan BETWEEN '2025-02-1' AND '2025-02-14' GROUP BY tanggalpenjualan;