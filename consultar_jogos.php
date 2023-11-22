<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");

if (isset($_GET['id'])){
  $id = $_GET['id'];
  $deletar = mysqli_query($conn, "DELETE FROM jogos WHERE id='$id'");
  if ($deletar){
    echo 'Jogo deletado com sucesso';

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
          left: 315px;
        }
       
    
    
      </style>




    </head>
    <body>
    
    <table class="table">
      <thead>

    <tr><th>#</th><th>Nome do jogo</th><th>Gênero do jogo</th><th>Desenvolvedora</th><th>Plataforma</th><th>Classificação</th><th><a href="http://localhost/cadastrophp/tela-dono.php"> Voltar </a></th></tr>

      </thead>
      <tbody>

      <?php
      
      $resultado = mysqli_query($conn, "SELECT * FROM jogos");
      while ($linha = mysqli_fetch_array($resultado)){
      ?>
        <tr><td><?php echo $linha['id']?></td><td><?php echo $linha['nome_do_jogo']?></td><td><?php echo $linha['genero_do_jogo']?></td><td><?php echo $linha['desenvolvedora']?></td><td><?php echo $linha['plataforma']?></td><td><?php echo $linha['classificacao']?></td>
      <td><a href="alterar_jogos.php?id=<?php echo $linha['id']; ?>">Editar</a> . <a href="?id=<?php echo $linha['id']; ?>">Excluir</a></td></tr>

        
        <?php } ?>
      </tbody>



    </table>


    
</br>
</br>



    </body>
  </html>