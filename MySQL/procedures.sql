-- Criar Administrator
DELIMITER $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `InserirAdmin`(
    p_nome VARCHAR(255),
    p_user VARCHAR(255),
    p_senha VARCHAR(255),
    p_telefone VARCHAR(9),
    p_email VARCHAR(255),
    p_cpf CHAR(11),
    p_rg CHAR(9),
    p_genero VARCHAR(255),
    p_fk_endereco INT,
    p_fk_clinica INT
) BEGIN
INSERT INTO ADMIN (
        NOME,
        USER,
        SENHA,
        TELEFONE,
        EMAIL,
        CPF,
        RG,
        GENERO,
        FK_ENDERECO,
        FK_CLINICA
    )
VALUES (
        p_nome,
        p_user,
        p_senha,
        p_telefone,
        p_email,
        p_cpf,
        p_rg,
        p_genero,
        p_fk_endereco,
        p_fk_clinica
    );
END $$ DELIMITER;
-- Criar Fisio
DELIMITER $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `InserirFisio`(
    p_nome VARCHAR(255),
    p_user VARCHAR(255),
    p_senha VARCHAR(255),
    p_telefone VARCHAR(9),
    p_email VARCHAR(255),
    p_cpf CHAR(11),
    p_rg CHAR(9),
    p_genero VARCHAR(255),
    p_crefito BIGINT,
    p_datacrefito DATE,
    p_especialidade VARCHAR(45),
    p_fk_endereco INT,
    p_fk_clinica INT
) BEGIN
INSERT INTO FISIO (
        NOME,
        USER,
        SENHA,
        TELEFONE,
        EMAIL,
        CPF,
        RG,
        GENERO,
        CREFITO,
        DATACREFITO,
        ESPECIALIDADE,
        FK_ENDERECO,
        FK_CLINICA
    )
VALUES (
        p_nome,
        p_user,
        p_senha,
        p_telefone,
        p_email,
        p_cpf,
        p_rg,
        p_genero,
        p_crefito,
        p_datacrefito,
        p_especialidade,
        p_fk_endereco,
        p_fk_clinica
    );
END $$ DELIMITER;
-- Criar Estagiario
DELIMITER $$ CREATE DEFINER = `root` @`localhost` PROCEDURE `InserirEstagiario`(
    p_nome VARCHAR(255),
    p_user VARCHAR(255),
    p_senha VARCHAR(255),
    p_telefone VARCHAR(9),
    p_email VARCHAR(255),
    p_cpf CHAR(11),
    p_rg CHAR(9),
    p_genero VARCHAR(255),
    p_instituicao VARCHAR(255),
    p_contrato_inicio DATE,
    p_contrato_fim DATE,
    p_fk_endereco INT,
    p_fk_clinica INT
) BEGIN
INSERT INTO ESTAGIARIO (
        NOME,
        USER,
        SENHA,
        TELEFONE,
        EMAIL,
        CPF,
        RG,
        GENERO,
        INSTITUICAO,
        CONTRATO_INICIO,
        CONTRATO_FIM,
        FK_ENDERECO,
        FK_CLINICA
    )
VALUES (
        p_nome,
        p_user,
        p_senha,
        p_telefone,
        p_email,
        p_cpf,
        p_rg,
        p_genero,
        p_instituicao,
        p_contrato_inicio,
        p_contrato_fim,
        p_fk_endereco,
        p_fk_clinica
    );
END $$ DELIMITER;

-- Criar endereço

DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `InserirEndereco`(
    p_rua VARCHAR(255),
    p_numero INT,
    p_bairro VARCHAR(255),
    p_cidade VARCHAR(255),
    p_cep CHAR(9)
)
RETURNS INT
BEGIN
    DECLARE endereco_id INT;
    
    INSERT INTO ENDERECO (
        RUA,
        NUMERO,
        BAIRRO,
        CIDADE,
        CEP
    )
    VALUES (
        p_rua,
        p_numero,
        p_bairro,
        p_cidade,
        p_cep
    );

    SET endereco_id = LAST_INSERT_ID();

    RETURN endereco_id;
END$$
DELIMITER ;
