CREATE DATABASE db_pdwel;
USE db_pdwel;

CREATE TABLE usuarios(
	id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    email VARCHAR(55) NOT NULL,
    senha VARCHAR(55) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    pix VARCHAR(100) NOT NULL,
    valor_gasto DOUBLE(7,2) NOT NULL,
    PRIMARY KEY(id)
	);

//inserir um usuario na tabela para poder acessar a aplicacao
INSERT INTO usuarios (
    nome, 
    email, 
    senha, 
    telefone, 
    pix,
    valor_gasto
    )
VALUES (
    'nome', 
    'email', 
    'senha', 
    'telefone', 
    'chave pix',
    'valor gasto'
    );