-- Geração do banco de dados
CREATE DATABASE IF NOT EXISTS diesel;
USE diesel;

-- Geraçao das Tabelas --------------------------------------
-- Tabela Cliente
CREATE TABLE IF NOT EXISTS usuario (
    id INT PRIMARY KEY,
    nome VARCHAR(255),
    senha VARCHAR(255),
    idade INT,
    saldo DECIMAL(10, 2),
    nacionalidade VARCHAR(255),
    lista_amigos TEXT
);

-- Tabela Jogos
CREATE TABLE IF NOT EXISTS jogos (
    id INT PRIMARY KEY,
    nome VARCHAR(255),
    desenvolvedor VARCHAR(255),
    publisher VARCHAR(255),
    url_imagem VARCHAR(255),
    nota_geral DECIMAL(3, 2),
    preco DECIMAL(10, 2),
    quantidade_vendas INT,
    generos TEXT
);

-- Tabela Desenvolvedor
CREATE TABLE IF NOT EXISTS desenvolvedor (
    cnpj VARCHAR(20) PRIMARY KEY,
    nome VARCHAR(255),
    senha VARCHAR(255),
    jogos_publicados TEXT
);

-- Tabela Eventos
CREATE TABLE IF NOT EXISTS eventos (
    id INT PRIMARY KEY,
    nome VARCHAR(255),
    duracao_dias INT,
    descricao TEXT,
    porcentagem_promocao DECIMAL(5, 2)
);
