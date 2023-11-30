CREATE TABLE if not exists usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(200) NOT NULL,
    UNIQUE KEY (username)
);

CREATE TABLE if not exists rutas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50),
    nombre_ruta VARCHAR(100),
    kilometros FLOAT,
    duracion FLOAT,
    desnivel FLOAT,
    FOREIGN KEY (usuario) REFERENCES usuarios(username)
);

CREATE TABLE if not exists tiempo (
    ciudad VARCHAR(30) PRIMARY KEY,
    tiempo VARCHAR(50) NOT NULL,
    temperatura VARCHAR(10) NOT NULL,
    humedad VARCHAR(10) NOT NULL,
    UNIQUE KEY (ciudad)
);
