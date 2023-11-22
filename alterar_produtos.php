<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");


if(isset($_POST['alterar'])){
    $tipo = $_POST['tipo_de_produto'];
    $tamanho = $_POST['tamanho_da_roupa'];
    $tema = $_POST['tema_do_produto'];
    
    $id = $_POST['alterar'];

$query = mysqli_query($conn, "UPDATE produtos SET tipo_de_produto='$tipo', tamanho_da_roupa='$tamanho', tema_do_produto='$tema'  WHERE id='$id'");

    if($query){
    echo 'Alteração realizada com sucesso';

    } else{
        echo 'Não foi possível realizar a alteração';

    }



}

?>
<html>
    <head>
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" href="cadastro-cliente.css"/>

        
<style>
   
.atualizar{
    position: absolute;
    left:400px;
}

    </style>
       

    </head>
    <body>
    
    <?php if (isset($_GET['id'])){
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM produtos WHERE id='$id'");
    foreach($result as $linha){
    ?>
        <div class="box">
        <form method="post">
            <fieldset>
                <legend><b>Formulário de Atualização de Produtos</b></legend>
</br>
            <div class="inputbox">
            <label><b>Tipo de produto:</b></label></br>
            <input type="text" value="<?php echo $linha['tipo_de_produto']; ?>"  name="tipo_de_produto" class="inputuser" placeholder="Qual o tipo de produto?"></br>
            </div>
</br>
            
            

        </br>
        <div class="inputbox">
            <label><b>Tamanho da roupa:</b></label></br>
            <select name="tamanho_da_roupa"  class="inputsexo">
                <option <?php if($linha['tamanho_da_roupa']=="-"){  echo 'selected';   }?> >-</option>
                <option <?php if($linha['tamanho_da_roupa']=="PP"){  echo 'selected';   }?> >PP</option>
                <option <?php if($linha['tamanho_da_roupa']=="P"){  echo 'selected';   }?> >P</option>
                <option <?php if($linha['tamanho_da_roupa']=="M"){  echo 'selected';   }?> >M</option>
                <option <?php if($linha['tamanho_da_roupa']=="G"){  echo 'selected';   }?> >G</option>
                <option <?php if($linha['tamanho_da_roupa']=="GG"){  echo 'selected';   }?> >GG</option>
                <option <?php if($linha['tamanho_da_roupa']=="XG"){  echo 'selected';   }?> >XG</option>
            </select>
            </div>

</br>
<div class="inputbox">
            <label><b>Tema do produto:</b></label></br>
            <input type="tema_do_produto" value="<?php echo $linha['tema_do_produto']; ?>" name="tema_do_produto" class="inputuser" placeholder="Qual o tema do produto?" ></br>
            </div>
    </br>
           
</br>
            
            
            <button name="alterar" class="atualizar" value="<?php echo $id; ?>">Alterar Dados</button>
            <button name="voltar" id="voltar"><a href="http://localhost/cadastrophp/tela-dono.php"> Voltar </a></button>

</br>
</br>

            </fieldset>
        </form>
        <?php } } ?>
        
    </body>
</html>