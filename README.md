# Cadastro de Corretores

---

## Descrição do Projeto  
O **Cadastro de Corretores** é um sistema web desenvolvido para gerenciar o cadastro de corretores, permitindo a inserção, exibição e exclusão de registros em uma interface amigável. O sistema utiliza uma tabela para exibir os dados cadastrados e é integrado a um banco de dados para armazenar as informações de forma persistente.

---

## Funcionalidades  
- **Cadastro de Corretores**:  
  Os usuários podem inserir informações como CPF, Creci e Nome através de um formulário simples e intuitivo.  

- **Listagem de Corretores**:  
  Os registros são exibidos em uma tabela com ID, Nome, CPF e Creci, permitindo fácil visualização.  

- **Exclusão de Corretores**:  
  Cada registro na tabela possui uma ação de exclusão que permite remover o corretor tanto da interface quanto do banco de dados.  

---

## Tecnologias Utilizadas  
- **Frontend**:  
  - HTML5  
  - CSS3  
  - Bootstrap (para estilização e responsividade)  

- **Backend**:  
  - PHP (para a lógica do servidor e integração com o banco de dados)  

- **Banco de Dados**:  
  - MySQL  

---

## Como Configurar o Projeto  

1. **Clone o Repositório**  
   ``
   git clone <URL-DO-REPOSITÓRIO>
  ``

---


## Configuração do Banco de Dados

- Crie um banco de dados no MySQL.
- Importe o arquivo database.sql (caso disponível no repositório) para criar a tabela necessária.
Exemplo de comando para criar a tabela:

```
CREATE TABLE corretores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    creci VARCHAR(20) NOT NULL
);
```

--- 

##Configuração do Backend

Atualize o arquivo de configuração do banco de dados (config.php, se existente) com suas credenciais de acesso ao MySQL.
```
<?php
$host = "localhost";
$user = "seu_usuario";
$password = "sua_senha";
$database = "nome_do_banco";
$conn = mysqli_connect($host, $user, $password, $database);
?>
```
---

## Execução do Projeto

- Coloque os arquivos do projeto em um servidor local (como o XAMPP ou WAMP).
- Inicie o servidor Apache e o MySQL.
- Acesse o sistema através do navegador no endereço:
```
http://localhost/caminho_do_projeto
```
---
## Demonstração do Sistema
- Tela Inicial:
  - Exibe o formulário para cadastro de corretores e a tabela para listagem.

- Cadastro:
  - Preencha o formulário e clique em "Enviar" para adicionar um corretor.

- Exclusão:
  - Clique no botão "Excluir" ao lado de um registro para removê-lo.

---

## Autores
- Desenvolvido por: RafaelDevProjects

- Email: rafael.almeida.sigoli@gmail.com
