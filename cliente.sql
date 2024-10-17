create database crud_hardness; --banco de dados criado em ambiente virtual local no XAMPP, com usuário host e sem senhas -- 
use crud_hardness;

CREATE TABLE cliente
(
	ID INT AUTO_INCREMENT,
	Nome VARCHAR (60) NOT NULL,
	Telefone VARCHAR (25) NOT NULL,
	Endereco VARCHAR (120) NOT NULL,
	PRIMARY KEY (ID) );
    