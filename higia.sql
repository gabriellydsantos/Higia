-- Criação do banco de dados
CREATE DATABASE higia;
USE higia;

-- Tabela de documentos
-- Esta tabela armazena informações sobre exames realizados, incluindo o nome do cliente, 
-- a carteirinha do paciente, a data do exame, o tipo de exame e o arquivo PDF do resultado.
CREATE TABLE documento (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Identificador único do documento
    nome_cliente VARCHAR(50) NOT NULL,      -- Nome do cliente
    carterinha VARCHAR(6) NOT NULL,         -- Carteirinha do paciente
    data DATE NOT NULL,                      -- Data do exame
    tipo_exame VARCHAR(15) NOT NULL,        -- Tipo de exame realizado
    pdf_arquivo MEDIUMBLOB NOT NULL          -- Arquivo PDF do exame
);

-- Tabela de clientes
-- Armazena informações sobre os clientes que podem incluir pacientes e suas características pessoais.
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Identificador único do cliente
    carterinha VARCHAR(6) NOT NULL,         -- Carteirinha do cliente
    nomeCompleto VARCHAR(80) NOT NULL,      -- Nome completo do cliente
    nomeSocial VARCHAR(80),                  -- Nome social do cliente (opcional)
    email VARCHAR(80) NOT NULL,              -- Email do cliente
    telefone VARCHAR(13) NOT NULL,           -- Telefone de contato do cliente
    nascimento DATE NOT NULL,                -- Data de nascimento do cliente
    idade INT NOT NULL,                      -- Idade do cliente
    deficiencia VARCHAR(50),                 -- Tipo de deficiência (se houver)
    doenca VARCHAR(50),                      -- Doença do cliente (se houver)
    cep VARCHAR(8) NOT NULL,                 -- CEP do endereço do cliente
    cpf VARCHAR(11) NOT NULL,                -- CPF do cliente
    rg VARCHAR(9) NOT NULL,                  -- RG do cliente
    genero VARCHAR(10) NOT NULL,             -- Gênero do cliente
    plano VARCHAR(10) NOT NULL                -- Plano de saúde do cliente
);

-- Tabela de usuários
-- Esta tabela armazena informações dos usuários do sistema, como administradores e outros.
CREATE TABLE tb_user (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Identificador único do usuário
    name VARCHAR(100) NOT NULL,              -- Nome do usuário
    image VARCHAR(100) NOT NULL               -- URL ou caminho da imagem do usuário
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de pacientes
-- Armazena informações detalhadas sobre os pacientes, incluindo dados pessoais e de contato.
CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Identificador único do paciente
    first_name VARCHAR(50) NOT NULL,        -- Primeiro nome do paciente
    last_name VARCHAR(50) NOT NULL,         -- Sobrenome do paciente
    username VARCHAR(50) NOT NULL UNIQUE,    -- Nome de usuário único para login
    phone VARCHAR(20) NOT NULL,              -- Telefone de contato
    email VARCHAR(100) NOT NULL UNIQUE,      -- Email único do paciente
    password VARCHAR(255) NOT NULL,          -- Senha do paciente (armazenada em hash)
    carteirinha VARCHAR(6) NOT NULL,        -- Carteirinha do paciente
    birth_date DATE NOT NULL,                -- Data de nascimento
    gender ENUM('Masculino', 'Feminino') NOT NULL, -- Gênero do paciente
    address TEXT NOT NULL,                   -- Endereço do paciente
    city VARCHAR(100) NOT NULL,              -- Cidade do paciente
    state VARCHAR(50) NOT NULL,              -- Estado do paciente
    country VARCHAR(50) NOT NULL,            -- País do paciente
    zipcode VARCHAR(20) NOT NULL,            -- CEP do paciente
    status ENUM('Ativa', 'Inativo') NOT NULL, -- Status do paciente (ativo ou inativo)
    image VARCHAR(255),                      -- Imagem do paciente (opcional)
    cpf VARCHAR(14),                         -- CPF do paciente
    rg VARCHAR(12),                          -- RG do paciente
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data de criação do registro
);

-- Tabela de médicos
-- Armazena informações sobre os médicos cadastrados no sistema.
CREATE TABLE doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Identificador único do médico
    first_name VARCHAR(50) NOT NULL,        -- Primeiro nome do médico
    last_name VARCHAR(50) NOT NULL,         -- Sobrenome do médico
    username VARCHAR(50) NOT NULL UNIQUE,    -- Nome de usuário único para login
    phone VARCHAR(20) NOT NULL,              -- Telefone de contato
    email VARCHAR(100) NOT NULL UNIQUE,      -- Email único do médico
    password VARCHAR(255) NOT NULL,          -- Senha do médico (armazenada em hash)
    carteirinha VARCHAR(6) NOT NULL,        -- Carteirinha do médico
    birth_date DATE NOT NULL,                -- Data de nascimento
    gender ENUM('Masculino', 'Feminino') NOT NULL, -- Gênero do médico
    department VARCHAR(50) NOT NULL,         -- Departamento do médico
    address VARCHAR(255) NOT NULL,           -- Endereço do médico
    zipcode VARCHAR(20) NOT NULL,            -- CEP do médico
    city VARCHAR(50) NOT NULL,               -- Cidade do médico
    state VARCHAR(50) NOT NULL,               -- Estado do médico
    country VARCHAR(50) DEFAULT 'Brasil',    -- País do médico
    status ENUM('Ativa', 'Inativo') NOT NULL, -- Status do médico (ativo ou inativo)
    image VARCHAR(255),                      -- Imagem do médico (opcional)
    cpf VARCHAR(14),                         -- CPF do médico
    rg VARCHAR(12),                          -- RG do médico
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data de criação do registro
);

-- Tabela de departamentos
-- Armazena informações sobre os departamentos disponíveis no sistema, incluindo a descrição e status.
CREATE TABLE departments (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Identificador único do departamento
    department_name VARCHAR(255) NOT NULL,  -- Nome do departamento
    doctor_carteirinha VARCHAR(6) NOT NULL, -- Carteirinha do médico responsável
    description TEXT NOT NULL,               -- Descrição do departamento
    department_date DATE NOT NULL,           -- Data de criação do departamento
    status ENUM('Ativo', 'Inativo') NOT NULL, -- Status do departamento
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data de criação do registro
);

-- Tabela de funcionários
-- Armazena informações sobre o pessoal administrativo do sistema.
CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Identificador único do funcionário
    first_name VARCHAR(50) NOT NULL,        -- Primeiro nome do funcionário
    last_name VARCHAR(50) NOT NULL,         -- Sobrenome do funcionário
    username VARCHAR(50) NOT NULL UNIQUE,    -- Nome de usuário único para login
    phone VARCHAR(20) NOT NULL,              -- Telefone de contato
    email VARCHAR(100) NOT NULL UNIQUE,      -- Email único do funcionário
    password VARCHAR(255) NOT NULL,          -- Senha do funcionário (armazenada em hash)
    carteirinha VARCHAR(6) NOT NULL,        -- Carteirinha do funcionário
    birth_date DATE NOT NULL,                -- Data de nascimento
    gender ENUM('Masculino', 'Feminino') NOT NULL, -- Gênero do funcionário
    address TEXT NOT NULL,                   -- Endereço do funcionário
    city VARCHAR(100) NOT NULL,              -- Cidade do funcionário
    state VARCHAR(50) NOT NULL,              -- Estado do funcionário
    country VARCHAR(50) NOT NULL,            -- País do funcionário
    zipcode VARCHAR(20) NOT NULL,            -- CEP do funcionário
    status ENUM('Ativa', 'Inativo') NOT NULL, -- Status do funcionário
    image VARCHAR(255),                      -- Imagem do funcionário (opcional)
    cpf VARCHAR(14),                         -- CPF do funcionário
    rg VARCHAR(12),                          -- RG do funcionário
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data de criação do registro
);

-- Tabela de Agendamentos
-- Armazena informações sobre os agendamentos realizados, incluindo o médico, departamento, data e hora.
CREATE TABLE agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,       -- Identificador único do agendamento
    doctor VARCHAR(50) NOT NULL,             -- Nome do médico agendado
    department VARCHAR(50) NOT NULL,         -- Departamento associado ao agendamento
    date DATE NOT NULL,                      -- Data do agendamento
    time TIME NOT NULL,                      -- Hora do agendamento
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data de criação do registro
);


SHOW CREATE TABLE agendamentos;
-- Armazenamento dos login

CREATE TABLE logged_patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    carteirinha VARCHAR(6) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    data_login DATETIME DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE patients ADD last_login TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

CREATE TABLE receita (
    id INT AUTO_INCREMENT PRIMARY KEY,
    doctor VARCHAR(50) NOT NULL,
    nome VARCHAR(50) NOT NULL,
	carteirinha VARCHAR(6) NOT NULL,
    receita VARCHAR(1000) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

CREATE TABLE guia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    carteirinha VARCHAR(6) NOT NULL,
    carteirinhaDoutor VARCHAR(6) NOT NULL,
    doctor varchar(50) not null,
    procedimento varchar(50) not null,
    sessoes varchar(50) not null,
    dataRetorno date not null,
    obs varchar (500)
);
CREATE TABLE contador (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contador INT NOT NULL
);

create table appointments (
id_appointments int not null primary key auto_increment,
data date not null,
horario time not null,
medico varchar (20) not null,
especialidade varchar (20) not null
);

-- Inserindo dados na tabela de pacientes
INSERT INTO patients (first_name, last_name, username, phone, email, password, carteirinha, birth_date, gender, address, city, state, country, zipcode, status, image, cpf, rg) VALUES
('Ana', 'Souza', 'ana.souza', '11976543210', 'ana@gmail.com', 'hashed_password_1', '111111', '1992-04-10', 'Feminino', 'Rua A, 123', 'São Paulo', 'SP', 'Brasil', '01000-000', 'Ativa', NULL, '12345678900', '12.345.678-X'),
('Carlos', 'Silva', 'carlos.silva', '11976543211', 'carlos@gmail.com', 'hashed_password_2', '222222', '1988-07-22', 'Masculino', 'Rua B, 456', 'Rio de Janeiro', 'RJ', 'Brasil', '02000-000', 'Ativa', NULL, '23456789001', '98.765.432-X'),
('Theo', 'Alves', 'alves.silva', '11976547411', 'theo@gmail.com', 'hashed_password_3', '222722', '1988-07-22', 'Masculino', 'Rua B, 456', 'Rio de Janeiro', 'RJ', 'Brasil', '02000-007', 'Ativa', NULL, '23456789701', '98.785.432-X');

-- Inserindo dados na tabela de médicos
INSERT INTO doctors (first_name, last_name, username, phone, email, password, carteirinha, birth_date, gender, department, address, zipcode, city, state, country, status, image, cpf, rg) VALUES
('Dr. Ricardo', 'Oliveira', 'dr.ricardo', '11912345678', 'ricardo@gmail.com', 'hashed_password_3', '333333', '1975-08-15', 'Masculino', 'Cardiologia', 'Av. C, 789', '03000-000', 'Belo Horizonte', 'MG', 'Brasil', 'Ativa', NULL, '34567890102', '11.222.333-Z'),
('Dra. Fernanda', 'Almeida', 'dra.fernanda', '11912345679', 'fernanda@gmail.com', 'hashed_password_4', '444444', '1980-03-30', 'Feminino', 'Pediatria', 'Av. D, 321', '04000-000', 'Curitiba', 'PR', 'Brasil', 'Ativa', NULL, '45678901203', '22.333.444-Y');

-- Inserindo dados na tabela de departamentos
INSERT INTO departments (department_name, doctor_carteirinha, description, department_date, status) VALUES
('Cardiologia', '333333', 'Departamento especializado em doenças cardíacas.', '2024-01-01', 'Ativo'),
('Pediatria', '444444', 'Departamento especializado no atendimento infantil.', '2024-01-01', 'Ativo');

-- Inserindo dados na tabela de funcionários
INSERT INTO staff (first_name, last_name, username, phone, email, password, carteirinha, birth_date, gender, address, city, state, country, zipcode, status, image, cpf, rg) VALUES
('Luana', 'Santos', 'luana.santos', '11987654330', 'luana@gmail.com', 'hashed_password_5', '555555', '1995-06-12', 'Feminino', 'Rua E, 654', 'Salvador', 'BA', 'Brasil', '05000-000', 'Ativa', NULL, '56789012304', '33.444.555-X'),
('Pedro', 'Lima', 'pedro.lima', '11987654331', 'pedro@gmail.com', 'hashed_password_6', '666666', '1982-11-29', 'Masculino', 'Rua F, 987', 'Fortaleza', 'CE', 'Brasil', '06000-000', 'Ativa', NULL, '67890123405', '44.555.666-Y');



drop database higia;