<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resumo de Pedido</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
        <h1>Programação Web II - Resumo do Pedido</h1>
        <a href="index.php">Inicial</a>
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          <div>
            <!-- Inclui o arquivo de busca de produtos -->
            <?php require_once('controller/produtos-resumo.php'); ?>
          </div>
        </div>
    </section>

  </body>
</html>
