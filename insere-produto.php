<?php
// Inclui o arquivo de conexão com o banco de dados
include_once ('controller/conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    // Inclui novamente o arquivo de conexão com o banco de dados (não é necessário, pois já foi incluído anteriormente)
    include_once ('controller/conexao.php');

    // Recebe os valores dos campos do formulário via POST
    $categoria = $_POST['seleciona_categoria'];
    $marca = $_POST['seleciona_marca'];
    $nome_produto = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $estoque = $_POST['estoque'];
    $preco = $_POST['preco'];

    // Monta a query para inserir os dados no banco de dados
    $grava_produto = "INSERT INTO produtos (IDCATEGORIA, IDMARCA, NOME, DESCRICAO, ESTOQUE, PRECO) VALUES ('$categoria','$marca','$nome_produto','$descricao','$estoque','$preco')";

    // Executa a query no banco de dados
    $result = mysqli_query($mysqli, $grava_produto);

    // Verifica se a query foi executada com sucesso
    if(mysqli_affected_rows($mysqli) != 0){
        // Se sim, exibe uma mensagem de sucesso e redireciona para a página produtos.php
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=produtos.php'>
        <script type=\"text/javascript\">
        alert('Produto cadastrado com sucesso!')
        </script>
        ";
    }else{
        // Se não, exibe uma mensagem de erro e redireciona para a página produtos.php
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=produtos.php'>
        <script type=\"text/javascript\">
        alert('Problema no cadastro do produto!')
        </script>
        ";
    }
    ?>
</body>

</html>