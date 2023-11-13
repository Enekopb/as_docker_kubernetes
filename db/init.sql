CREATE DATABASE database;
use database;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(200) NOT NULL
);

CREATE TABLE rutas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50),
    nombre_ruta VARCHAR(100),
    kilometros FLOAT,
    FOREIGN KEY (usuario) REFERENCES usuarios(username)
);
