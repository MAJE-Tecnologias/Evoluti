-- Inserting data into EVOLUTI.CLINICA table
INSERT INTO EVOLUTI.CLINICA (NOME, CLINICA, EMAIL, SENHA) VALUES
('Clinica A', 'Local A', 'clinicaA@example.com', 'password1'),
('Clinica B', 'Local B', 'clinicaB@example.com', 'password2');

-- Inserting data into EVOLUTI.ENDERECO table
INSERT INTO EVOLUTI.ENDERECO (RUA, NUMERO, BAIRRO, CIDADE, CEP) VALUES
('Rua 1', 123, 'Bairro A', 'Cidade A', '12345-678'),
('Rua 2', 456, 'Bairro B', 'Cidade B', '98765-432');

-- Inserting data into EVOLUTI.PACIENTE table
INSERT INTO EVOLUTI.PACIENTE (NOME, DATANASC, TELEFONE, EMAIL, CPF, RG, GENERO, FK_ENDERECO) VALUES
('Paciente 1', '1990-01-01', 123456789, 'paciente1@example.com', 12345678901, 123456789, 'Male', 1),
('Paciente 2', '1985-02-15', 987654321, 'paciente2@example.com', 98765432101, 987654321, 'Female', 2);

-- Inserting data into EVOLUTI.ADMIN table
INSERT INTO EVOLUTI.ADMIN (NOME, USER, SENHA, TELEFONE, EMAIL, CPF, RG, GENERO, FK_ENDERECO, FK_CLINICA) VALUES
('Admin 1', 'admin1', 'adminpassword1', '111222333', 'admin1@example.com', '12345678901', '987654321', 'Non-Binary', 1, 1),
('Admin 2', 'admin2', 'adminpassword2', '444555666', 'admin2@example.com', '98765432101', '123456789', 'Male', 2, 2);

-- Inserting data into EVOLUTI.ESTAGIARIO table
INSERT INTO EVOLUTI.ESTAGIARIO (NOME, USER, SENHA, TELEFONE, EMAIL, CPF, RG, GENERO, INSTITUICAO, CONTRATO_INICIO, CONTRATO_FIM, FK_ENDERECO, FK_CLINICA) VALUES
('Estagiario 1', 'estagiario1', 'estpassword1', '777888999', 'est1@example.com', '12345678901', '987654321', 'Female', 'University A', '2023-01-01', '2023-12-31', 1, 1),
('Estagiario 2', 'estagiario2', 'estpassword2', '111222333', 'est2@example.com', '98765432101', '123456789', 'Male', 'University B', '2023-02-01', '2023-11-30', 2, 2);

-- Inserting data into EVOLUTI.FISIO table
INSERT INTO EVOLUTI.FISIO (NOME, USER, SENHA, TELEFONE, EMAIL, CPF, RG, GENERO, CREFITO, DATACREFITO, ESPECIALIDADE, FK_ENDERECO, FK_CLINICA) VALUES
('Fisio 1', 'fisio1', 'fisiopassword1', '555666777', 'fisio1@example.com', '12345678901', '987654321', 'Non-Binary', 1234567890, '2020-01-01', 'Orthopedics', 1, 1),
('Fisio 2', 'fisio2', 'fisiopassword2', '888999000', 'fisio2@example.com', '98765432101', '123456789', 'Female', 9876543210, '2021-02-01', 'Neurology', 2, 2);

-- Inserting data into EVOLUTI.ATENDIMENTO table
INSERT INTO EVOLUTI.ATENDIMENTO (TIPO_ATENDIMENTO, HD, ANEXO, DATAATENDIMENTO, DESCRICAO, FK_PACIENTE, FK_FISIO, FK_ESTAGIARIO) VALUES
('Type A', 'HD A', 'Anexo A', '2023-01-15', 'Description A', 1, 1, 1),
('Type B', 'HD B', 'Anexo B', '2023-02-20', 'Description B', 2, 2, 2);
