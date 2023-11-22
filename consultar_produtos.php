<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");

if (isset($_GET['id'])){
  $id = $_GET['id'];
  $deletar = mysqli_query($conn, "DELETE FROM produtos WHERE id='$id'");
  if ($deletar){
    echo 'Produto deletado com sucesso';

  }

}

?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css"/>
      <style> 
        table{border: 1px solid #000; border-spacing: 0px;}
        table td, th{border: 1px solid #000; padding: 5px;}
        table{background-color: #fff;}

        .table{
          position: absolute;
          right: 450px;
          bottom: 550px;
        }
        
      </style>




    </head>
    <body>
    
    <table class="table">
      <thead>

    <tr><th>#</th><th>Tipo de produto</th><th>Tamanho da roupa</th><th>Tema do produto</th><th><a href="http://localhost/cadastrophp/tela-dono.php">Voltar</a></th></tr>

      </thead>
      <tbody>

      <?php
      
      $resultado = mysqli_query($conn, "SELECT * FROM produtos");
      while ($linha = mysqli_fetch_array($resultado)){
      ?>

        <tr><td><?php echo $linha['id']?></td><td><?php echo $linha['tipo_de_produto']?></td><td><?php echo $linha['tamanho_da_roupa']?></td><td><?php echo $linha['tema_do_produto']?></td>
      <td><a href="alterar_produtos.php?id=<?php echo $linha['id']; ?>">Editar</a> . <a href="?id=<?php echo $linha['id']; ?>">Excluir</a></td></tr>

        <?php } ?>
      </tbody>



    </table>


    
</br>
</br>
</body>
  </html>