DROP DATABASE IF EXISTS isProyecto;
CREATE DATABASE isProyecto;
USE isProyecto;

CREATE TABLE Persona (
	id INT PRIMARY KEY,
    nombre VARCHAR(30),
    correo_electronico VARCHAR(30),
    telefono VARCHAR(9));
    

 CREATE TABLE persona_organizador(
	id_persona INT PRIMARY KEY);   
    
ALTER TABLE persona_organizador
ADD FOREIGN KEY (id_persona) REFERENCES Persona(id);
    

CREATE TABLE persona_invitado(
	id_persona INT PRIMARY KEY,
    grado VARCHAR(20));
    
ALTER TABLE persona_invitado
ADD FOREIGN KEY (id_persona) REFERENCES Persona(id);


CREATE TABLE persona_usuario(
	id_persona INT PRIMARy KEY,
    cuenta VARCHAR(20),
    cantidad_evento INT);

ALTER TABLE persona_usuario
ADD FOREIGN KEY (id_persona) REFERENCES Persona(id);


    
CREATE TABLE persona_autor(
	id_persona INT PRIMARy KEY,
    nacionalidad VARCHAR(20));
    
ALTER TABLE persona_autor
ADD FOREIGN KEY (id_persona) REFERENCES Persona(id);

    
    -- Invalido
CREATE TABLE Sesion(
	id INT PRIMARY KEY,
	hora VARCHAR(6),
    fecha DATE,
    informacionExtra VARCHAR(30),
    id_evento INT);

CREATE TABLE Evento(
	id INT PRIMARY KEY,
    id_categoria INT,
    descripcion VARCHAR (50),
    pais VARCHAR(20));
    
ALTER TABLE Sesion
ADD FOREIGN KEY (id_evento) REFERENCES Evento(id);




CREATE TABLE Evento_Workshop(
	id INT PRIMARy KEY);

ALTER TABLE Evento_Workshop
ADD FOREIGN KEY (id) REFERENCES Evento(id);

CREATE TABLE Evento_Simposio(
	id INT PRIMARy KEY);
    
ALTER TABLE Evento_Simposio
ADD FOREIGN KEY (id) REFERENCES Evento(id);


CREATE TABLE Evento_Ponencia(
	id INT PRIMARy KEY);
    
ALTER TABLE Evento_Ponencia
ADD FOREIGN KEY (id) REFERENCES Evento(id);


CREATE TABLE documento(
	id INT PRIMARY KEY,
    titulo VARCHAR(30),
    archivo VARCHAR(30),
    cantidad_descargas INT);


-- Tablas n a n
    
CREATE TABLE Evento_Organizador(
	id_evento INT,
    id_organizador INT,
    PRIMARY KEY(id_evento,id_organizador));
    
ALTER TABLE Evento_Organizador
ADD FOREIGN KEY (id_evento) REFERENCES Evento(id);
ALTER TABLE Evento_Organizador
ADD FOREIGN KEY (id_organizador) REFERENCES persona_organizador(id_persona);
    
CREATE TABLE Evento_Invitado(
	id_evento INT,
    id_invitado INT,
    PRIMARY KEY(id_evento,id_invitado));   

ALTER TABLE Evento_Invitado
ADD FOREIGN KEY (id_evento) REFERENCES Evento(id);
ALTER TABLE Evento_Invitado
ADD FOREIGN KEY (id_invitado) REFERENCES persona_invitado(id_persona);
 
    
CREATE TABLE Evento_Documento(
	id_evento INT,
    id_documento INT,
    PRIMARY KEY(id_evento,id_documento));

ALTER TABLE Evento_Documento
ADD FOREIGN KEY (id_evento) REFERENCES Evento(id);
ALTER TABLE Evento_Documento
ADD FOREIGN KEY (id_documento) REFERENCES documento(id);
 

CREATE TABLE Evento_Sesion(
	id_evento INT,
    id_sesion INT,
    PRIMARY KEY(id_evento,id_sesion));

ALTER TABLE Evento_Sesion
ADD FOREIGN KEY (id_evento) REFERENCES Evento(id);
ALTER TABLE Evento_Sesion
ADD FOREIGN KEY (id_sesion) REFERENCES Sesion(id);
 
    
CREATE TABLE Sesion_Usuario(
	id_usuario INT,
    id_sesion INT,
    PRIMARY KEY(id_usuario,id_sesion));

ALTER TABLE Sesion_Usuario
ADD FOREIGN KEY (id_usuario) REFERENCES persona_usuario(id_persona);
ALTER TABLE Sesion_Usuario
ADD FOREIGN KEY (id_sesion) REFERENCES Sesion(id);
    
CREATE TABLE Autor_Documento(
	id_autor INT,
    id_documento INT,
    PRIMARY KEY(id_autor,id_documento));

ALTER TABLE Autor_Documento
ADD FOREIGN KEY (id_autor) REFERENCES persona_autor(id_persona);
ALTER TABLE Autor_Documento
ADD FOREIGN KEY (id_documento) REFERENCES documento(id);
    


