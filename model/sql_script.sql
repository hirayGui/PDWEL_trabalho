CREATE DATABASE db_pdwel;
USE bd_pdwel;

CREATE TABLE usuarios(
	id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    email VARCHAR(55) NOT NULL,
    senha VARCHAR(55) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    pix VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
	);
