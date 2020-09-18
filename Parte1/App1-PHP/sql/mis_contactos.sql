/*              SQL

    SQL: Structure Query Language - Lenguaje Estructurado de Consulta

    Base de Datos: Una colección de datos que están organizados.

    Gestores o Manejadores de BD ó DB son los programas que nos permiten administrar los datos
    Ejemplos de gestores de BD:     
                                - Microsoft Acces
                                - Microsoft SQL Server
                                - Oracle
                                - Informix
                                - DBASE
                                - SQL Lite
                                - PostgreSQL
                                - MySQL


    Una sentencia SQL es una linea de código para trabajar con nuestra BD 
    Existen 2 tipos de sentencias:
        1.- Sentencias estructurales: Nos permiten crear, modificar o eliminar OBJETOS, usuarios y propiedades de nuestra BD
        2. Sentencias de Datos: Nos permiten insertar, eliminar, modificar y buscar INFORMACIÓN en nuestra BD.


    En MySQL existen 2 tipos de engine para tablas:
        1. MyISAM - Son tablas planas como su fuera a trabajar datos en excel.
        2. InnoDB - Tablas Relacionales como si fueras a trabajar datos en Access.
*/

CREATE DATABASE mis_contactos;

USE mis_contactos;

CREATE TABLE contactos(
    email VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    sexo CHAR(1),
    nacimiento DATE,
    telefono VARCHAR(13),
    pais VARCHAR(50) NOT NULL,
    imagen VARCHAR(50),
    PRIMARY KEY(email),          
    FULLTEXT KEY buscador(email, nombre, sexo, telefono, pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE pais(
    id_pais INT NOT NULL AUTO_INCREMENT,
    pais VARCHAR (50) NOT NULL,
    PRIMARY KEY (id_pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO pais(id_pais, pais) VALUES 
    (1, "México "),
    (2, "Colombia"),
    (3, "Alemania"),
    (4, "España"),
    (5, "Rusia"),
    (6, "Finlandia"),
    (7, "Noruega"),
    (8, "Suecia"),
    (9, "Brasil"),
    (10, "Japón"),
    (11, "China"),
    (12, "Argentina"),
    (13, "Costa Rica"),
    (14, "Ecuador"),
    (15, "Canada"),
    (16, "Nueva Zelanda"),
    (17, "Honduras"),
    (18, "Holanda"),
    (19, "Italia"),
    (20, "Inglaterra");

