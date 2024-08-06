# Projeto cadEcommerce

**cadEcommerce** é um sistema completo de gerenciamento de e-commerce que permite cadastrar produtos, visualizar o carrinho de compras, adicionar marcas dos produtos, adicionar produtos ao estoque e muito mais. Este projeto foi desenvolvido utilizando PHP e um banco de dados MySQL.

## Funcionalidades
* **Cadastro de Produtos:** Permite adicionar, editar e remover produtos do catálogo.
* **Gerenciamento de Marcas:** Adicione, edite e remova marcas associadas aos produtos.
* **Visualização do Carrinho de Compras:** Exibe os itens adicionados ao carrinho e permite a finalização da compra.
* **Gestão de Estoque:** Adicione produtos ao estoque e monitore a quantidade disponível.
* **Banco de Dados:** Conexão com um banco de dados MySQL para armazenar todas as informações.

### Tecnologias Utilizadas
* **Linguagem de Programação:** PHP
* **Banco de Dados:** MySQL
* **HTML/CSS:** Para a estrutura e estilo das páginas
* **JavaScript:** Para funcionalidades dinâmicas

### Instalação
**1. Clone o repositório:**

 ```ruby
git clone https://github.com/seu-usuario/cadEcommerce.git
 ```
**2. Configure o banco de dados:**

Crie um banco de dados no MySQL.
Importe o arquivo banco.sql localizado na pasta do projeto para criar as tabelas necessárias.
Configure a conexão com o banco de dados:

Edite o arquivo controller/conexao.php com as credenciais do seu banco de dados.
 ```ruby
php
Copiar código
<?php
$servername = "localhost";
$username = "seu-usuario";
$password = "sua-senha";
$dbname = "nome-do-banco";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
 ```
### Execute o projeto:

* Coloque todos os arquivos do projeto em um servidor web (como Apache).
* Acesse o projeto pelo navegador: `http://localhost/cadEcommerce`.
## Estrutura do Projeto
index.php: Página inicial do e-commerce.
* `carrinho.php:` Página do carrinho de compras.
* `produtos.php:` Página de listagem dos produtos.
* `adicionar_produto.php:` Página para adicionar novos produtos.
* `adicionar_marca.php:` Página para adicionar novas marcas.
* `controller/:` Contém os arquivos de lógica do backend, incluindo a conexão com o banco de dados.

## Métodos PHP Utilizados
### Cadastro de Produtos
**Código:** `adicionar_produto.php`
 ```ruby
<?php
include('controller/conexao.php');

// Recebe os dados do formulário
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$marca_id = $_POST['marca_id'];

// Insere os dados no banco de dados
$sql = "INSERT INTO produtos (nome, preco, marca_id) VALUES ('$nome', '$preco', '$marca_id')";
if ($conn->query($sql) === TRUE) {
    echo "Novo produto adicionado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
```
### Exemplo de Uso:
1. Acesse a página adicionar_produto.php pelo navegador.
2. Preencha o formulário com os dados do produto.
3. Clique no botão de submissão para adicionar o produto ao banco de dados.

## Visualização do Carrinho de Compras
Código: `carrinho.php`

```ruby
<?php
include('controller/conexao.php');

// Seleciona todos os produtos no carrinho
$sql = "SELECT * FROM carrinho";
$result = $conn->query($sql);

// Exibe os produtos no carrinho
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Produto: " . $row["nome"]. " - Preço: " . $row["preco"]. "<br>";
    }
} else {
    echo "Carrinho vazio";
}

$conn->close();
?>
```
###Exemplo de Uso:
Acesse a página carrinho.php pelo navegador para visualizar os itens no carrinho de compras.

## php
``` ruby
<?php
$servername = "localhost";
$username = "seu-usuario";
$password = "sua-senha";
$dbname = "nome-do-banco";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
```

**Explicação:** O arquivo conexao.php é responsável por estabelecer a conexão entre o sistema PHP e o banco de dados MySQL. Ele utiliza as credenciais fornecidas (servidor, nome de usuário, senha e nome do banco de dados) para criar uma nova conexão. Se a conexão falhar, uma mensagem de erro será exibida.

**Exemplo de Uso:** Ao incluir include('controller/conexao.php'); no seu código, você garante que a conexão com o banco de dados seja estabelecida e possa ser utilizada para executar operações como inserções, atualizações, seleções e deleções de dados.

## Imagens da Aplicação
Tela Inicial:
![imagem]()

Página de Produtos

Banco de Dados

Referências
Documentação oficial do PHP: php.net
Tutorial de MySQL: w3schools.com

---

Contribuição
Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests.

Licença
Este projeto está licenciado sob a Licença MIT - veja o arquivo LICENSE para mais detalhes.
