CREATE DATABASE hy;
use hy;
CREATE Table books(
    id_buku INT PRIMARY KEY,
    kode_buku VARCHAR(255),
    judul VARCHAR(255),
    pengarang VARCHAR(255),
    penerbit VARCHAR(255),
    harga DECIMAL(10,2),
    stok int
);

INSERT INTO books (id_buku,kode_buku, judul, pengarang, penerbit, harga, stok) VALUES
    (1,'KB-001','Lookism','ptj','saya',9000.00,10),
    (2,'KB-002','ggwp',',me','lj',10000.00,25);