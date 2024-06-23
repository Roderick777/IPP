-- Crear la base de datos Escuela
CREATE DATABASE IF NOT EXISTS Escuela;
USE Escuela;

-- Crear la tabla alumnos
CREATE TABLE IF NOT EXISTS alumnos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Insertar registros en la tabla alumnos
INSERT INTO alumnos (nombre, apellido, email) VALUES
('Juan', 'Perez', 'juan.perez@example.com'),
('Maria', 'Gomez', 'maria.gomez@example.com'),
('Carlos', 'Lopez', 'carlos.lopez@example.com'),
('Ana', 'Martinez', 'ana.martinez@example.com'),
('Pedro', 'Rodriguez', 'pedro.rodriguez@example.com');

-- Crear la tabla profesores
CREATE TABLE IF NOT EXISTS profesores (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Insertar registros en la tabla profesores
INSERT INTO profesores (nombre, apellido, email) VALUES
('Luis', 'Gonzalez', 'luis.gonzalez@example.com'),
('Laura', 'Diaz', 'laura.diaz@example.com'),
('Miguel', 'Sanchez', 'miguel.sanchez@example.com'),
('Elena', 'Lopez', 'elena.lopez@example.com'),
('Diego', 'Martinez', 'diego.martinez@example.com');

-- Crear la tabla cursos
CREATE TABLE IF NOT EXISTS cursos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    ciclo_lectivo VARCHAR(255) NOT NULL
);

-- Insertar registros en la tabla cursos
INSERT INTO cursos (nombre, ciclo_lectivo) VALUES
('Matemáticas', '2024'),
('Historia', '2024'),
('Literatura', '2024'),
('Ciencias', '2024'),
('Inglés', '2024');
