# Sistema de Votação

## Configuração do Banco de dados

- Executar o seguinte script SQL:

` CREATE DATABASE SistemaVotacao; `
` USE SistemaVotacao; `

`` CREATE TABLE Enquetes (id INT NOT NULL AUTO_INCREMENT, titulo VARCHAR(255) NOT NULL, dataInicio DATETIME NOT NULL,dataTermino DATETIME NOT NULL, PRIMARY KEY (id)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci; ``


`` CREATE TABLE Opcoes (id INT NOT NULL AUTO_INCREMENT,nome VARCHAR(255) NOT NULL, numeroVotos INT NOT NULL, id_enquete INT NOT NULL, PRIMARY KEY (id), FOREIGN KEY (id_enquete) REFERENCES Enquetes(id) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci; ``


 - Informações adicionais:
    * **Hostname**: localhost
    * **Schema**: SistemaVotacao
    * **User**: root
    * **Password**: 12345



## Execução da Aplicação

  Dentro do diretório do projeto, execute o seguinte comando:

  `php -S localhost:8000 -t public` 

 O servidor estará recebendo requisições na porta 8000

 - Executar aplicação:

  Acesse através do navegador o endereço:

  `http://localhost:8000`