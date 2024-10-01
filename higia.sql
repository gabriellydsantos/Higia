-- Criação do banco de dados

CREATE DATABASE higia;
USE higia;

-- Tabela de documentos
CREATE TABLE documento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(50) NOT NULL,
    carterinha VARCHAR(6) NOT NULL,
    data DATE NOT NULL,
    tipo_exame VARCHAR(15) NOT NULL,
    pdf_arquivo MEDIUMBLOB NOT NULL
);

-- Tabela de clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    carterinha VARCHAR(6) NOT NULL,
    nomeCompleto VARCHAR(80) NOT NULL,
    nomeSocial VARCHAR(80),
    email VARCHAR(80) NOT NULL,
    telefone VARCHAR(13) NOT NULL,
    nascimento DATE NOT NULL,
    idade INT NOT NULL,
    deficiencia VARCHAR(50),
    doenca VARCHAR(50),
    cep VARCHAR(8) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    rg VARCHAR(9) NOT NULL,
    genero VARCHAR(10) NOT NULL,
    plano VARCHAR(10) NOT NULL
);

-- Tabela de usuários
CREATE TABLE tb_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de pacientes
CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    carteirinha VARCHAR(6) NOT NULL,
    birth_date DATE NOT NULL,
    gender ENUM('Masculino', 'Feminino') NOT NULL,
    address TEXT NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(50) NOT NULL,
    country VARCHAR(50) NOT NULL,
    zipcode VARCHAR(20) NOT NULL,
    status ENUM('Ativa', 'Inativo') NOT NULL,
    image VARCHAR(255),
    cpf VARCHAR(14),
    rg VARCHAR(12),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- ALTER TABLE patients MODIFY COLUMN cpf VARCHAR(14);


-- Tabela de médicos
CREATE TABLE doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    carteirinha VARCHAR(6) NOT NULL,
    birth_date DATE NOT NULL,
    gender ENUM('Masculino', 'Feminino') NOT NULL,
    department VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    zipcode VARCHAR(20) NOT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    country VARCHAR(50) DEFAULT 'Brasil',
    status ENUM('Ativa', 'Inativo') NOT NULL,
    image VARCHAR(255),
    cpf VARCHAR(14),
    rg VARCHAR(12),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Tabela de departamentos
CREATE TABLE departments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    department_name VARCHAR(255) NOT NULL,
    doctor_carteirinha VARCHAR(6) NOT NULL,
    description TEXT NOT NULL,
    department_date DATE NOT NULL,
    status ENUM('Ativo', 'Inativo') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    carteirinha VARCHAR(6) NOT NULL,
    birth_date DATE NOT NULL,
    gender ENUM('Masculino', 'Feminino') NOT NULL,
    address TEXT NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(50) NOT NULL,
    country VARCHAR(50) NOT NULL,
    zipcode VARCHAR(20) NOT NULL,
    status ENUM('Ativa', 'Inativo') NOT NULL,
    image VARCHAR(255),
    cpf VARCHAR(14),
    rg VARCHAR(12),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Agendamentos


CREATE TABLE agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    doctor VARCHAR(50) NOT NULL,
    department VARCHAR(50) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



drop database higia;