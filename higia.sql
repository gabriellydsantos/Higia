-- Criação do banco de dados
CREATE DATABASE higia;

-- Usar a base de dados Higia
USE higia;

-- Tabela admin
CREATE TABLE admin (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de funcionários
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de departamentos
CREATE TABLE departments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_doutor INT NOT NULL,
    department_name VARCHAR(255) NOT NULL,
    doctor_carteirinha VARCHAR(6) NOT NULL,
    description TEXT NOT NULL,
    department_date DATE NOT NULL,
    status ENUM('Ativo', 'Inativo') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_doutor) REFERENCES doctors(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de documentos
CREATE TABLE documento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_paciente INT NOT NULL,
    nome_cliente VARCHAR(50) NOT NULL,
    carteirinha VARCHAR(6) NOT NULL,
    data DATE NOT NULL,
    tipo_exame VARCHAR(15) NOT NULL,
    pdf_arquivo MEDIUMBLOB NOT NULL,
    FOREIGN KEY (id_paciente) REFERENCES patients(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de usuários
CREATE TABLE tb_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de agendamentos
CREATE TABLE agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_paciente INT NOT NULL,
    id_medico INT NOT NULL,
    doctor VARCHAR(50) NOT NULL,
    paciente VARCHAR(50) NOT NULL,
    carteirinhaPaciente VARCHAR(6) NOT NULL,
    department VARCHAR(50) NOT NULL,
    date DATE NOT NULL,
    status ENUM('Concluído', 'Inconcluído', 'Cancelada') NOT NULL,
    time TIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_paciente) REFERENCES patients(id),
    FOREIGN KEY (id_medico) REFERENCES doctors(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de pacientes logados
CREATE TABLE logged_patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    carteirinha VARCHAR(6) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    data_login DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de receitas médicas
CREATE TABLE receita (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_paciente INT NOT NULL,
    id_medico INT NOT NULL,
    doctor VARCHAR(50) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    carteirinha VARCHAR(6) NOT NULL,
    receita VARCHAR(1000) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_paciente) REFERENCES patients(id),
    FOREIGN KEY (id_medico) REFERENCES doctors(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de guias médicas
CREATE TABLE guia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_paciente INT NOT NULL,
    id_medico INT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    carteirinha VARCHAR(6) NOT NULL,
    carteirinhaDoutor VARCHAR(6) NOT NULL,
    doctor VARCHAR(50) NOT NULL,
    procedimento VARCHAR(50) NOT NULL,
    sessoes VARCHAR(50) NOT NULL,
    dataRetorno DATE NOT NULL,
    obs VARCHAR(500),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_paciente) REFERENCES patients(id),
    FOREIGN KEY (id_medico) REFERENCES doctors(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela do contador
CREATE TABLE contador (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contador INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de horários médicos
CREATE TABLE appointments (
    id_appointments INT AUTO_INCREMENT PRIMARY KEY,
    id_medico INT NOT NULL,
    data DATE NOT NULL,
    horario TIME NOT NULL,
    medico VARCHAR(20) NOT NULL,
    especialidade VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_medico) REFERENCES doctors(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de eventos do Fullcalendar
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_medico INT NOT NULL,
    profissional VARCHAR(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    title VARCHAR(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    color VARCHAR(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    start DATETIME NOT NULL,
    end DATETIME NOT NULL,
    obs TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    FOREIGN KEY (id_medico) REFERENCES doctors(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserção inicial na tabela admin
INSERT INTO admin (
    first_name, 
    last_name, 
    username, 
    phone, 
    email, 
    password, 
    carteirinha, 
    birth_date, 
    gender, 
    address, 
    city, 
    state, 
    country, 
    zipcode, 
    status
) VALUES (
    'Admin', 
    'Higia', 
    'admin', 
    '(00) 90000-0000', 
    'admin@admin.com', 
    'admin', 
    'ADM000', 
    '2000-01-01', 
    'Masculino', 
    'Rua Principal', 
    'Cidade Central', 
    'Estado Central', 
    'Brasil', 
    '00000-000', 
    'Ativa'
);
