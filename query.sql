CREATE DATABASE dbbft;

CREATE TABLE usuarios (
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    email TEXT UNIQUE NOT NULL,
    senha TEXT UNIQUE NOT NULL
);

INSERT INTO usuarios (email, senha) VALUES ('teste@mail.com', 'abc123');

ALTER TABLE usuarios 
    DROP CONSTRAINT usuarios_senha_key;