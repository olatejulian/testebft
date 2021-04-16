CREATE DATABASE dbbft;

CREATE TABLE usuarios (
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    email TEXT UNIQUE NOT NULL,
    senha TEXT UNIQUE NOT NULL
);

INSERT INTO usuarios (email, senha) VALUES ('teste@mail.com', 'abc123');