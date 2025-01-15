CREATE DATABASE dream;
use dream;
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