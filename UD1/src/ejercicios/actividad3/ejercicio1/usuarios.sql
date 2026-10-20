-- Creamos el usuario si no existe.
CREATE USER IF NOT EXISTS 'usuarioBD'@'%' IDENTIFIED BY 'abc123';
GRANT ALL ON *.* TO 'usuarioBD'@'%';
-- Creamos la base de datos.
CREATE DATABASE IF NOT EXISTS usuarios;
USE usuarios;
CREATE TABLE IF NOT EXISTS usuario(
    nickname VARCHAR(30) PRIMARY KEY,
    nombre VARCHAR(60),
    apellido1 VARCHAR(100),
    apellido2 VARCHAR(100),
    email VARCHAR(320) UNIQUE NOT NULL,
    contrasena VARCHAR(256) NOT NULL
);