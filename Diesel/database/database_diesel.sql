-- Geração do banco de dados
CREATE DATABASE IF NOT EXISTS diesel;
USE diesel;

-- Geraçao das Tabelas --------------------------------------
-- Tabela Cliente
CREATE TABLE IF NOT EXISTS usuario (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    idade INT NOT NULL,
    saldo DECIMAL(10, 2) NOT NULL,
    nacionalidade VARCHAR(255) NOT NULL,
    lista_amigos TEXT
);

-- Tabela Jogos
CREATE TABLE IF NOT EXISTS jogos (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    desenvolvedor VARCHAR(255) NOT NULL,
    publisher VARCHAR(255),
    url_imagem VARCHAR(255) NOT NULL,
    nota_geral DECIMAL(3, 2),
    preco DECIMAL(10, 2),
    quantidade_vendas INT,
    generos TEXT
);

-- Tabela Desenvolvedor
CREATE TABLE IF NOT EXISTS desenvolvedor (
    cnpj VARCHAR(20) PRIMARY KEY NOT NULL,
    nome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    jogos_publicados TEXT
);

-- Tabela Eventos
CREATE TABLE IF NOT EXISTS eventos (
    id INT PRIMARY KEY NOT NULL,
    nome VARCHAR(255) NOT NULL,
    duracao_dias INT NOT NULL,
    descricao TEXT,
    porcentagem_promocao DECIMAL(5, 2)
);
