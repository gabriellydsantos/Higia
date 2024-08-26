-- Criação do banco de dados
CREATE DATABASE higia;
USE higia;

-- Tabela de documentos
CREATE TABLE documento (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_cliente VARCHAR(50) NOT NULL,
    carterinha INT(6) NOT NULL,
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
    idade INT(3) NOT NULL,
    deficiencia VARCHAR(50) NOT NULL,
    doenca VARCHAR(50) NOT NULL,
    cep VARCHAR(8) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    rg VARCHAR(9) NOT NULL,
    genero VARCHAR(10) NOT NULL,
    plano VARCHAR(10) NOT NULL
);

-- Selecionar todos os dados da tabela clientes
SELECT * FROM clientes;

-- Inserção de dados na tabela clientes
INSERT INTO clientes (carterinha, nomeCompleto, nomeSocial, email, telefone, nascimento, idade, deficiencia, doenca, cep, cpf, rg, genero, plano)
VALUES ('123456', 'Gabriela Silva de Araújo', 'Gabriela Silva de Araújo', 'gabriela@email.com', '1141425642', '2007-04-19', 17, 'Nenhuma', 'Nenhuma', '06661234', '12345678901', '111111111', 'feminino', 'plus');

-- Tabela de usuários
CREATE TABLE tb_user (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
    carteirinha VARCHAR(50) NOT NULL,
    birth_date DATE NOT NULL,
    gender ENUM('Masculino', 'Feminino') NOT NULL,
    address TEXT NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(50) NOT NULL,
    country VARCHAR(50) NOT NULL,
    zipcode VARCHAR(20) NOT NULL,
    status ENUM('Ativa', 'Inativo') NOT NULL,
    image VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Descrição da tabela patients
DESCRIBE patients;
ALTER TABLE patients MODIFY status VARCHAR(10);





-- Mostrar colunas da tabela patients
SHOW COLUMNS FROM patients LIKE 'status';

-- Inserção de dados na tabela patients
INSERT INTO patients (first_name, last_name, username, phone, email, password, carteirinha, birth_date, gender, address, city, state, country, zipcode, status, image)
VALUES ('John', 'Doe', 'johndoe', '1234567890', 'john.doe@example.com', 'password123', '12345', '2000-01-01', 'Masculino', '123 Street', 'City', 'State', 'Country', '12345', 'Inativo', 'image/path');

-- Selecionar todos os dados da tabela patients onde o status é 'Inativo'
SELECT * FROM patients WHERE status = 'Inativo';

-- Selecionar todos os dados da tabela patients
SELECT * FROM patients;

-- Remover o banco de dados higia
DROP DATABASE higia;
