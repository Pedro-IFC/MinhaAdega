USE minhaadega;
CREATE TABLE ADMIN(
	idAdmin INT NOT NULL AUTO_INCREMENT,
    email varchar(140) NOT NULL,
    senha VARCHAR(120) NOT NULL,
     PRIMARY KEY (idAdmin)
); 
CREATE TABLE USUARIOS(
	idUsuario INT NOT NULL AUTO_INCREMENT,
    email varchar(140) NOT NULL,
    telefone varchar(12) NOT NULL,
    nome varchar(180) NOT NULL,
    dataNasc date NOT NULL,
    telefone varchar(12) NOT NULL,
    senha VARCHAR(120) NOT NULL,
     PRIMARY KEY (idUsuario)
); 
CREATE TABLE ADEGAS	(
	idAdega INT NOT NULL AUTO_INCREMENT,
    idUsuario INT NOT NULL,
    nomeAdega VARCHAR(180) NOT NULL, 
    FOREIGN KEY (idUsuario) REFERENCES USUARIOS(idUsuario),
	PRIMARY KEY (idAdega)
);
CREATE TABLE VINHOS(
	idVinho INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(190) NOT NULL,
    estoque INT NOT NULL,
    ativo BOOL NOT NULL,
	PRIMARY KEY (idAdega)
);
INSERT INTO admin values (0,"emailteste@gmail.com", "teste", "teste");
SELECT * FROM ADMIN WHERE senha = "teste" & email = "emailteste@gmail.com";