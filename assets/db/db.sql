create database registro_usuario;
use registro_usuario;
DROP database registro_usuario;


CREATE TABLE `USUARI` (
    
    Codigo int(50)  AUTO_INCREMENT,
    Cargo varchar(253) CHARACTER SET utf8 NOT NULL,
     Nombre varchar(253) CHARACTER SET utf8 DEFAULT NULL,
    Identific varchar(50) DEFAULT NULL,
    FechaNa int(10) DEFAULT NULL,
    Foto varchar(255) DEFAULT NULL,
    Correo varchar(255) DEFAULT NULL,
	passCorreo varchar(255) DEFAULT NULL,

    PRIMARY KEY (Codigo));
   
   describe  USUARIO;
   
   CREATE TABLE `USUARIO` (
    
    Codigo int(50)  AUTO_INCREMENT,
	Nombre varchar(253) CHARACTER SET utf8 DEFAULT NULL,
    Identific varchar(50) DEFAULT NULL,
    FechaNa int(10) DEFAULT NULL,
    Foto blob (500) DEFAULT NULL,
    Correo varchar(255) DEFAULT NULL,
	passCorreo varchar(255) DEFAULT NULL,

    PRIMARY KEY (Codigo));
    
		 CREATE TABLE `Gerente` (
		
		Codigo int(50)  AUTO_INCREMENT,
		usuario varchar(255) DEFAULT NULL,
		dia_semana varchar(253) CHARACTER SET utf8 DEFAULT NULL,
		
		hora_inicio varchar(50) DEFAULT NULL,
		hora_fin varchar(10) DEFAULT NULL,
		
		

		PRIMARY KEY (Codigo));