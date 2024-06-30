-- Este archivo contiene las instrucciones para crear la base de dato y tablas para el desarrollo del trabajo M3-E1


CREATE DATABASE MIPROYECTO2;
USE MIPROYECTO2;

CREATE TABLE categorias (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL
);

CREATE TABLE productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  descripcion TEXT,
  precio DECIMAL(10, 2) NOT NULL,
  categoria_id INT,
  FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);