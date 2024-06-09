CREATE DATABASE kullanici_veritabani;

USE kullanici_veritabani;

CREATE TABLE kullanicilar (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    isim VARCHAR(30) NOT NULL,
    soyisim VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    sifre VARCHAR(255) NOT NULL,
    dogumTarihi DATE NOT NULL,
    cinsiyet VARCHAR(10) NOT NULL
);
