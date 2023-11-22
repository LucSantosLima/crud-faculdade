<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");

if (isset($_GET['id'])){
  $id = $_GET['id'];
  $deletar = mysqli_query($conn, "DELETE FROM funcionarios WHERE id='$id'");
  if ($deletar){
    echo 'Funcionário deletado com sucesso';

  }

}

?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="tela-dono.css"/>
      <style> 
        table{border: 1px solid #000; border-spacing: 0px;}
        table td, th{border: 1px solid #000; padding: 5px;}
        table{background-color: #fff;}

        .table{
          position: absolute;
          right: 300px;
        }
        
      </style>




    </head>
    <body>
    
    <table class="table">
      <thead>

    <tr><th>#</th><th>Nome</th><th>Sexo</th><th>Nascimento</th><th>Celular</th><th>Email</th><th>Senha</th><th><a href="http://localhost/cadastrophp/tela-dono.php">Voltar</a></th></tr>

      </thead>
      <tbody>

      <?php
      
      $resultado = mysqli_query($conn, "SELECT * FROM funcionarios");
      while ($linha = mysqli_fetch_array($resultado)){
      ?>

        <tr><td><?php echo $linha['id']?></td><td><?php echo $linha['nome']?></td><td><?php echo $linha['sexo']?></td><td><?php echo $linha['data_nascimento']?></td><td><?php echo $linha['celular']?></td><td><?php echo $linha['email']?><td><?php echo $linha['senha']?></td>
      <td><a href="alterar_funcionario.php?id=<?php echo $linha['id']; ?>">Editar</a> . <a href="?id=<?php echo $linha['id']; ?>">Excluir</a></td></tr>

        <?php } ?>
      </tbody>



    </table>


    
</br>
</br>



    </body>
  </html>