create database evoluti;

use evoluti;

create table if not exists evoluti.clinica (
    id_clinica int not null auto_increment,
    nome varchar(255) not null,
    clinica varchar(255) not null,
    email varchar(255) not null,
    senha varchar(255) not null,
    primary key (id_clinica)
);

create table if not exists evoluti.endereco (
    id_endereco int not null auto_increment,
    rua varchar(255) not null,
    numero int not null,
    bairro varchar(255) not null,
    cidade varchar(255) not null,
    cep char(9) not null,
    primary key (id_endereco)
);

create table if not exists evoluti.paciente(
    id_paciente int not null auto_increment,
    nome varchar(100),
    datanasc date,
    telefone int,
    email varchar(120),
    cpf bigint,
    rg bigint,
    genero varchar(100),
    fk_endereco int,
    primary key (id_paciente),
    foreign key (fk_endereco) references endereco(id_endereco)
);

create table if not exists evoluti.admin (
    id_admin int not null auto_increment,
    nome varchar(255) not null,
    user varchar(255) not null,
    senha varchar(255) not null,
    telefone varchar(9) not null,
    email varchar(255) not null,
    cpf char(11) not null,
    rg char(9) not null,
    genero varchar(255) not null,
    fk_endereco int not null,
    fk_clinica int not null,
    primary key (id_admin),
    foreign key (fk_endereco) references evoluti.endereco(id_endereco),
    foreign key (fk_clinica) references evoluti.clinica(id_clinica)
);

create table if not exists evoluti.estagiario(
    id_estagiario int not null auto_increment,
    nome varchar(255) not null,
    user varchar(255) not null,
    senha varchar(255) not null,
    telefone varchar(9) not null,
    email varchar(255) not null,
    cpf char(11) not null,
    rg char(9) not null,
    genero varchar(255) not null,
    instituicao varchar(255) not null,
    contrato_inicio date,
    contrato_fim date,
    fk_endereco int not null,
    fk_clinica int not null,
    primary key (id_estagiario),
    foreign key (fk_endereco) references evoluti.endereco(id_endereco),
    foreign key (fk_clinica) references evoluti.clinica(id_clinica)
);

create table if not exists evoluti.fisio(
    
    id_fisio int not null auto_increment,
    nome varchar(255) not null,
    user varchar(255) not null,
    senha varchar(255) not null,
    telefone varchar(9) not null,
    email varchar(255) not null,
    cpf char(11) not null,
    rg char(9) not null,
    genero varchar(255) not null,
    crefito bigint,
    datacrefito date,
    especialidade varchar(45),
    fk_endereco int not null,
    fk_clinica int not null,
    primary key (id_fisio),
    foreign key (fk_endereco) references evoluti.endereco(id_endereco),
    foreign key (fk_clinica) references evoluti.clinica(id_clinica)
);

create table if not exists evoluti.atendimento(
    id_atendimento int not null auto_increment,
    tipo_atendimento varchar(60),
    hd varchar(255),
    anexo varchar(255),
    dataatendimento date,
    descricao varchar(255),
    fk_paciente int not null,
    fk_fisio int not null,
    fk_estagiario int not null,
    primary key (id_atendimento),
    foreign key (fk_paciente) references paciente(id_paciente),
    foreign key (fk_fisio) references fisio(id_fisio),
    foreign key (fk_estagiario) references estagiario(id_estagiario)
);

CREATE TABLE IF NOT EXISTS arquivos (
    id_arquivo INT NOT NULL AUTO_INCREMENT,
    path VARCHAR(255) NOT NULL,
    tipo varchar(255),
    fk_paciente INT NOT NULL,
    PRIMARY KEY (id_arquivo),
    FOREIGN KEY (fk_paciente) REFERENCES paciente(id_paciente)
);
