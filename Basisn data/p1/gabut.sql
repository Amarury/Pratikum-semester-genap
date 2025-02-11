CREATE DATABASE jj;
use jj;
CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin', 'kasir') 
);

INSERT INTO users(id_user, username, password, role) 
VALUES
(1,"Admin","admin55",'admin'),
(2, "Kasir", "kasir123","kasir");

CREATE TABLE books (
    id_buku INT AUTO_INCREMENT PRIMARY KEY,
    kode_buku VARCHAR(20) UNIQUE,
    judul VARCHAR(100),
    pengarang VARCHAR(100),
    penerbit VARCHAR(100),
    harga DECIMAL(10, 2),
    stok INT 
);

CREATE TABLE transactions (
    id_transaksi INT AUTO_INCREMENT PRIMARY KEY,
    tanggal DATETIME  DEFAULT CURRENT_TIMESTAMP,
    total_harga DECIMAL(15, 2),
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES users(id_user)
);

CREATE TABLE transaction_details (
    id_detail INT AUTO_INCREMENT PRIMARY KEY,
    id_transaksi INT,
    id_buku INT,
    jumlah INT,
    subtotal DECIMAL(15, 2),
    FOREIGN KEY (id_transaksi) REFERENCES transactions(id_transaksi),
    FOREIGN KEY (id_buku) REFERENCES books(id_buku)
);

-- Tabel Diskon
CREATE TABLE discounts (
    id_diskon INT AUTO_INCREMENT PRIMARY KEY,
    nama_diskon VARCHAR(100),
    deskripsi TEXT,
    jenis_diskon ENUM('persentase', 'nominal'),    
    nilai_diskon DECIMAL(10, 2),   
    minimal_pembelian DECIMAL(10, 2) DEFAULT 0,
    tanggal_mulai DATETIME,
    tanggal_selesai DATETIME, 
    aktif BOOLEAN DEFAULT TRUE 
);


SELECT role FROM users WHERE username = @username AND password = @passwords


DROP TABLE books;

SELECT*FROM books;