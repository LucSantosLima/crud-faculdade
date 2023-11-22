<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $nascimento = $_POST['datanasc'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

$query = mysqli_query($conn, "INSERT INTO clientes (nome, data_nascimento, sexo, cpf, celular, email, senha) VALUES ('$nome', '$nascimento', '$sexo', '$cpf', '$celular', '$email', '$senha')");

    if($query){
    echo 'Cadastro realizado com sucesso';

    } else{
        echo 'Não foi possível cadastrar-lo';

    }



}


?>
<html>
    <head>
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" href="estilocadastro.css"/>
        <style>
            
            .cadastrar{
                position: absolute;
                left: 330px;

            }

        </style>

    </head>
    <body>
   
        <div class="box">
        <form method="post">
            <fieldset>
                <legend><b>Formulário de Cadastro</b></legend>
</br>
            <div class="inputbox">
            <label><b>Nome:</b></label></br>
            <input type="text"  name="nome" class="inputuser" placeholder="Nome Completo"></br>
            </div>
</br>
            <div class="inputbox">
            <label><b>Data de nascimento:</b></label></br>
            <input type="date" name="datanasc" class="inputuser" placeholder="dd/mm/aa"></br>
            </div>
</br>
            <div class="inputbox">
            <label><b>Sexo:</b></label></br>
            <select name="sexo" class="inputsexo">
                <option>Sexo</option>
                <option>Mulher</option>
                <option>Homem</option>
                <option>Nao dizer</option>
            </select></br>
            </div>
</br>
            <div class="inputbox">
            <label><b>CPF:</b></label></br>
            <input type="cpf" required="" name="cpf" class="inputuser" placeholder="Insira seu CPF"></br>
            </div>
</br>
            <div class="inputbox">
            <label><b>Celular:</b></label></br>
            <input type="tel" name="celular" class="inputuser" placeholder="Insira seu número de celular"></br>
            </div>
</br>
            <div class="inputbox">
            <label><b>Email:</b></label></br>
            <input type="email" required="" name="email" class="inputuser" placeholder="Insira seu Email"></br>
            </div>
</br>
            <div class="inputbox">
            <label><b>Senha:</b></label></br>
            <input type="password" required="" name="senha" class="inputuser" placeholder="Insira sua Senha"></br>
            </div>
</br>
<button name="logar" id="logar"><a href="http://localhost/cadastrophp/painel.php">Voltar</a></button>            
<button name="cadastrar" class="cadastrar">Cadastrar</button>

            </fieldset>
        </form>
    </body>
</html>