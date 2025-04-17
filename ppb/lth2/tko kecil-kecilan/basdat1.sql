-- Active: 1736687440739@@127.0.0.1@3306@tringger_jualan
CREATE DATABASE tringger_jualan;
use tringger_jualan;

CREATE table pelanggan(
    pelanggan_id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pelanggan VARCHAR(255),
    alamat TEXT,
    nomor_telepon VARCHAR(15)
);

SELECT * FROM pelanggan;
CREATE table penjualan(
    penjualan_id INT AUTO_INCREMENT PRIMARY KEY,
    tanggal_penjualan DATE,
    total_harga DECIMAL(10,2),
    pelanggan_id INT,
    petugas_id INT
);

CREATE table detail_penjualan(
    detail_id INT,
    penjualan_id INT,
    produk_id INT,
    jumlah_produk INT,
    subtotal INT
);

CREATE table petugas(
    petugas_id INT AUTO_INCREMENT PRIMARY KEY,
    nama_petugas VARCHAR(255),
    username VARCHAR(100),
    password VARCHAR(255),
    role ENUM("kepala toko","kasir")
);

CREATE table produk(
    produk_id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(255),
    harga DECIMAL(10,2),
    stok INT
);

INSERT INTO pelanggan(pelanggan_id,nama_pelanggan,alamat,nomor_telepon) VALUES
(1,"John Doe","123 Main St, Springfield",555-1234),
(2,"Jane Smith","456 Elm St, Springfield",555-5678);

INSERT INTO petugas(petugas_id,nama_petugas,username,password,role) VALUES
(1,"Alice Johnson","alicej","password123","kepala toko"),
(2,"Bob Brown","bobb","password456","kasir");

INSERT INTO produk(produk_id,nama_produk,harga,stok) VALUES
(1,"Laptop",1500.00,10),
(2,"Smartphone",800.00,20);


INSERT INTO penjualan(penjualan_id,tanggal_penjualan,total_harga,pelanggan_id,petugas_id) VALUES
(1,2023-10-01,2300.00,1,2),
(2,2023-10-02,800.00,2,1);

INSERT INTO detail_penjualan(detail_id,penjualan_id,produk_id,jumlah_produk,subtotal) VALUES
(1,1,1,1,1500.00),
(2,1,2,1,800.00),
(3,2,2,1,800.00);


--1
SELECT SUM(subtotal) total_harga FROM detail_penjualan;


--DROP table produk;



INSERT INTO produk (produk_id,nama_produk,harga,stok) VALUES
('TB001', 'Hujan', 63613.00, 26),
('TB002', 'Ghaisan', 56818.00, 55),
('TB003', 'Pergi', 59507.00, 17),
('TB004', 'Rindu', 132099.00, 25),
('TB005', 'Tentang Kamu', 133028.00, 23),
('TB006', 'Bumi', 133179.00, 38),
('TB007', 'Bulan', 142373.00, 14),
('TB008', 'Matahari', 80059.00, 42),
('TB009', 'Bintang', 103507.00, 30),
('TB010', 'Komet', 101390.00, 15),
('KB011', 'Pemrograman Kotlin', 120000.00, 4),
('KB012', 'Pengembangan Aplikasi Android', 145000.00, 8),
('KB013', 'Pemrograman Ruby', 130000.00, 10),
('KB014', 'Framework Laravel', 140000.00, 6),
('KB015', 'Data Science dengan Python', 180000.00, 5),
('KB016', 'Pemrograman R', 150000.00, 7),
('KB017', 'Big Data Analytics', 200000.00, 4),
('KB018', 'Pemrograman PHP', 110000.00, 12),
('KB019', 'Pemrograman C++', 135000.00, 11),
('KB020', 'Cloud Computing', 175000.00, 6),
('KB021', 'Pemrograman Go', 125000.00, 5),
('KB022', 'Docker untuk Pemula', 145000.00, 10),
('KB023', 'Kubernetes Basics', 165000.00, 9),
('KB024', 'Pemrograman Swift', 140000.00, 7),
('KB025', 'Pemrograman Dart', 135000.00, 8),
('KB026', 'Framework Flutter', 160000.00, 6),
('KB027', 'Pemrograman Rust', 155000.00, 5),
('KB028', 'Pemrograman Scala', 145000.00, 4),
('KB029', 'Pemrograman Julia', 130000.00, 6),
('KB030', 'Blockchain Fundamentals', 190000.00, 3),
('KB031', 'Cryptocurrency Basics', 175000.00, 4),
('KB032', 'Pemrograman Solidity', 185000.00, 5),
('KB033', 'Smart Contracts', 200000.00, 6),
('KB034', 'Pemrograman Matlab', 145000.00, 10),
('KB035', 'Pemrograman VBA', 120000.00, 8),
('KB036', 'Statistika untuk Data Science', 160000.00, 6),
('KB037', 'Pemrograman JavaScript', 135000.00, 9),
('KB038', 'Framework ReactJS', 140000.00, 7),
('KB039', 'Framework Angular', 150000.00, 8),
('KB040', 'Framework VueJS', 130000.00, 10);
