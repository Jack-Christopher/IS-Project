describe DATA;
DROP DATABASE IF EXISTS mainDB;
CREATE DATABASE mainDB;
USE mainDB;

CREATE TABLE Organizador (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30),
    correo_electronico VARCHAR(30),
    nombre_de_usuario VARCHAR(20), 
    clave VARCHAR(30),
    telefono VARCHAR(9)
);

CREATE TABLE Invitado (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30),
    correo_electronico VARCHAR(30),
    telefono VARCHAR(9),
    grado VARCHAR(20)
);
    
CREATE TABLE Usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30),
    correo_electronico VARCHAR(30),
    nombre_de_usuario VARCHAR(20), 
    clave VARCHAR(30),
    telefono VARCHAR(9),
    cantidad_evento INT
);
   
CREATE TABLE Autor (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30),
    correo_electronico VARCHAR(30),
    telefono VARCHAR(9),
    nacionalidad VARCHAR(20)
);

CREATE TABLE Categoria(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(8)
);

CREATE TABLE Evento(
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_categoria INT,
    descripcion VARCHAR (50),
    pais VARCHAR(20),
    cantidad_asistentes INT,
    FOREIGN KEY (id_categoria) REFERENCES Categoria(id)
);

CREATE TABLE Sesion(
	id INT PRIMARY KEY AUTO_INCREMENT,
	hora TIME,
    fecha DATE,
    informacionExtra VARCHAR(30),
    id_evento INT,
    FOREIGN KEY (id_evento) REFERENCES Evento(id)
);

CREATE TABLE Documento(
	id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(30),
    archivo BLOB, 
    cantidad_descargas INT
);


-- Tablas n a n

CREATE TABLE Evento_Organizador(
	id_evento INT,
    id_organizador INT,
    PRIMARY KEY(id_evento,id_organizador),
    FOREIGN KEY (id_evento) REFERENCES Evento(id),
    FOREIGN KEY (id_organizador) REFERENCES Organizador(id)
);
    
CREATE TABLE Evento_Invitado(
	id_evento INT,
    id_invitado INT,
    PRIMARY KEY(id_evento,id_invitado),
    FOREIGN KEY (id_evento) REFERENCES Evento(id),
    FOREIGN KEY (id_invitado) REFERENCES Invitado(id)
);
    
CREATE TABLE Evento_Documento(
	id_evento INT,
    id_documento INT,
    PRIMARY KEY(id_evento,id_documento),
    FOREIGN KEY (id_evento) REFERENCES Evento(id),
    FOREIGN KEY (id_documento) REFERENCES Documento(id)
);

CREATE TABLE Evento_Sesion(
	id_evento INT,
    id_sesion INT,
    PRIMARY KEY(id_evento,id_sesion),
    FOREIGN KEY (id_evento) REFERENCES Evento(id),
    FOREIGN KEY (id_sesion) REFERENCES Sesion(id)
);

CREATE TABLE Sesion_Usuario(
	id_usuario INT,
    id_sesion INT,
    PRIMARY KEY(id_usuario,id_sesion),
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id),
    FOREIGN KEY (id_sesion) REFERENCES Sesion(id)
);
    
CREATE TABLE Autor_Documento(
	id_autor INT,
    id_documento INT,
    PRIMARY KEY(id_autor,id_documento),
    FOREIGN KEY (id_autor) REFERENCES Autor(id),
    FOREIGN KEY (id_documento) REFERENCES Documento(id)
);
