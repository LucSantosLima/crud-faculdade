<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");


if(isset($_POST['alterar'])){
    $nome = $_POST['nome'];
    $nascimento = $_POST['datanasc'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = $_POST['alterar'];

$query = mysqli_query($conn, "UPDATE clientes SET nome='$nome', data_nascimento='$nascimento', sexo='$sexo', cpf='$cpf', celular='$celular', email='$email', senha='$senha' WHERE id='$id'");

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
    left: 400px;
   }  


    </style>
       

    </head>
    <body>
    
    <?php if (isset($_GET['id'])){
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM clientes WHERE id='$id'");
    foreach($result as $linha){
    ?>
        <div class="box">
        <form method="post">
            <fieldset>
                <legend><b>Formulário de Atualização de Clientes</b></legend>
</br>
            <div class="inputbox">
            <label><b>Nome:</b></label></br>
            <input type="text" value="<?php echo $linha['nome']; ?>"  name="nome" class="inputuser" placeholder="Nome Completo"></br>
            </div>
</br>
            <div class="inputbox">
            <label><b>Data de nascimento:</b></label></br>
            <input type="date" name="datanasc" class="inputuser" placeholder="dd/mm/aa" value="<?php echo $linha['datanasc']; ?>"></br>
            </br>
            </div>
            
        

        </br>
        <div class="inputbox">
            <label><b>Sexo:</b></label></br>
            <select name="sexo"  class="inputsexo">
                <option <?php if($linha['sexo']=="Mulher"){  echo 'selected';   }?> >Mulher</option>
                <option <?php if($linha['sexo']=="Homem"){  echo 'selected';   }?> >Homem</option>
                <option <?php if($linha['sexo']=="Nao dizer"){  echo 'selected';   }?> >Nao dizer</option>
            </select>
            </div>

</br>
<div class="inputbox">
            <label><b>CPF:</b></label></br>
            <input type="cpf" value="<?php echo $linha['cpf']; ?>" name="cpf" class="inputuser" placeholder="xxx.xxx.xxx-xx" maxlength="14" size="20" onkeypress="formatar_mascara(this,'###.###.###-##')"></br>
            </div>
    </br>
            <div class="inputbox">
            <label><b>Celular:</b></label></br>
            <input type="tel" value="<?php echo $linha['celular']; ?>" name="celular" class="inputuser" placeholder="(ddd)xxxxx-xxxx"></br>
            </div>
</br>
            <div class="inputbox">
            <label><b>Email:</b></label></br>
            <input type="email" required="" value="<?php echo $linha['email']; ?>" name="email" class="inputuser" placeholder="Insira seu Email"></br>
            </div>
</br>
            <div class="inputbox">
            <label><b>Senha:</b></label></br>
            <input type="password" required="" value="<?php echo $linha['senha']; ?>" name="senha" class="inputuser" placeholder="Insira sua Senha"></br>
            </div>
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