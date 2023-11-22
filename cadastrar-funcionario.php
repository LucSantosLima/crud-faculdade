<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $nascimento = $_POST['datanasc'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

$query = mysqli_query($conn, "INSERT INTO funcionarios (nome, sexo, data_nascimento, celular, email, senha) VALUES ('$nome', '$sexo', '$nascimento', '$celular', '$email', '$senha')");

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
                left: 325px;
            }

       </style>

    </head>
    <body>
    
        <div class="box">
            <form method="post">
                <fieldset>
                    <legend><b>Formulário de cadastro de funcionários</b></legend>
</br>
            <div class="inputbox">
                <label><b>Nome completo:</b></label>
            <input type="text"  name="nome" class="inputuser" placeholder="Nome Completo">
            </div>
</br>
            
            <div class="inputbox">
                <label><b>Sexo:<b></label>
            <select name="sexo" class="inputsexo">
                <option>Sexo</option>
                <option>Mulher</option>
                <option>Homem</option>
                <option>Nao dizer</option>
                </select>
                </div>
</br>

            <div class="inputbox">
                <label><b>Data de nascimento:</b></label> 
            <input type="date" name="datanasc" class="inputuser" placeholder="Insira sua data de nascimento">
            </div>

</br>
            <div class="inputbox">
            <label><b>Número de celular:</b></label>         
            <input type="tel" name="celular" class="inputuser" placeholder="Insira seu número de celular">
            </div>
</br>
            <div class="inputbox">
            <label><b>Email:</b></label> 
            <input type="email" required="" name="email" class="inputuser" placeholder="Insira seu Email">
            </div>
</br>
            <div class="inputbox">
            <label><b>Senha:</b></label> 
            <input type="password" required="" name="senha" class="inputuser" placeholder="Insira sua Senha">
            </div>
</br>
</br>
</br>
<button name="voltar" id="voltar"> <a href="http://localhost/cadastrophp/tela-dono.php"> Voltar </a></button>            
<button name="cadastrar" id="submit" class="cadastrar">Cadastrar</a></button>            
</br>
</br>
                </fieldset>
        </form>
        </body>
</html>