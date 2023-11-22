<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");

if(isset($_POST['cadastrar'])){
    $produto = $_POST['produto'];
    $roupa = $_POST['tamanho'];
    $temap = $_POST['tema'];

$query = mysqli_query($conn, "INSERT INTO produtos (tipo_de_produto, tamanho_da_roupa, tema_do_produto) VALUES ('$produto', '$roupa', '$temap')");

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
        <link rel="stylesheet" href="cadastro-funcionario.css"/>
       <style>
        
            .cadastrar{
                position: absolute;
                left: 280px;
            }

       </style>

    </head>
    <body>
   
        <div class="box">
        <form method="post">
            <fieldset>
                <legend><b>Formulário de Cadastro de Produtos</b></legend>
</br>
            <div class="inputbox">
            <label><b>Tipo de produto:</b></label></br>
            <input type="text"  name="produto" class="inputuser" placeholder="Qual produto será cadastrado?"></br>
            </div>
</br>
            <div class="inputbox">
            <label><b>Tamanho da roupa:</b></label></br>
            <select name="tamanho" class="inputsexo">
            <option>Tamanho da roupa</option>
                <option>-</option>
                <option>PP</option>
                <option>P</option>
                <option>M</option>
                <option>G</option>
                <option>XG</option>
                </select>

            
            </div>
</br>

        </br>
            <div class="inputbox">
            <label><b>Tema do produto:</b></label></br>
            <input type="text" name="tema" class="inputuser" placeholder="Qual o tema do produto?"></br>
            </br>
            </div>

</br>


<button name="voltar" id="voltar"><a href="http://localhost/cadastrophp/painel.php"> Voltar </a></button>
<button name="cadastrar" class="cadastrar">Cadastrar produto</button>
            
</br>
</br>

            </fieldset>
        </form>
    </body>
</html>