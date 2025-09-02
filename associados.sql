-- Criação da tabela
CREATE TABLE associados (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(20) NOT NULL,
    endereco TEXT NOT NULL,
    profissao VARCHAR(50) NOT NULL,
    instituicao VARCHAR(100) NOT NULL,
    nascimento DATE NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Exemplo de comando de inserção
INSERT INTO associados (nome, cpf, email, telefone, endereco, profissao, instituicao, nascimento)
VALUES ('João da Silva', '123.456.789-00', 'joao@email.com', '(11) 98888-7777', 'Rua Exemplo, 123', 'Professor', 'UFABC', '1980-05-10');