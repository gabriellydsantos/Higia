create database higia;

use higia;

create table clientes (
	id int auto_increment primary key,
    carteirinha text (6) not null,
    nomeCompleto varchar (80) not null,
    nomeSocial varchar (80),
    email varchar (80) not null,
    telefone int (13) not null,
    nascimento date not null,
    idade int (3) not null,
    deficiencia varchar (50) not null,
    doenca varchar (50) not null,
    cep text (8) not null,
    cpf text (11) not null,
    rg text (9) not null,
    genero varchar (10) not null,
    plano varchar (10) not null
);

select * from documento;

INSERT INTO `higia`.`clientes` (`id`, `carteirinha`, `nomeCompleto`, `nomeSocial`, `email`, `telefone`, `nascimento`, `idade`, `deficiencia`, `doenca`, `cep`, `cpf`, `rg`, `genero`, `plano`)
 VALUES (1, 123456, 'Gabriela Silva de Araújo', 'Gabriela Silva de Araújo', 'gabriela@email.com', 1141425642, '2007-04-19', 17, 'Nenhuma', 'Nenhuma', 06661234, 12345678901, 111111111, 'feminino', 'plus');

create table documento(
	id int primary key auto_increment, 
	nome_cliente varchar(50) not null, 
    carteirinha int (6) not null,
    data varchar (11) not null,
    tipo_exame varchar (15) not null,
	pdf_arquivo mediumblob not null
);

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
drop database higia;