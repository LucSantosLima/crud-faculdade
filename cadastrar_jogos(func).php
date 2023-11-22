<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");

if(isset($_POST['cadastrar'])){
    $jogo = $_POST['nome_do_jogo'];
    $estilo = $_POST['genero_do_jogo'];
    $desenvol = $_POST['desenvolvedora'];
    $plat = $_POST['plataforma'];
    $classi = $_POST['classificacao'];
   

$query = mysqli_query($conn, "INSERT INTO jogos (nome_do_jogo, genero_do_jogo, desenvolvedora, plataforma, classificacao) VALUES ('$jogo', '$estilo', '$desenvol', '$plat', '$classi')");

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
                left: 335px;
            }

       </style>

    </head>
    <body>
   
        <div class="box">
        <form method="post">
            <fieldset>
                <legend><b>Formulário de Cadastro de Jogos</b></legend>
</br>
            <div class="inputbox">
            <label><b>Nome do jogo:</b></label></br>
            <input type="text"  name="nome_do_jogo" class="inputuser" placeholder="Qual o nome do jogo?"></br>
            </div>
</br>
<div class="inputbox">
            <label><b>Gênero do jogo:</b></label></br>
            <input type="text"  name="genero_do_jogo" class="inputuser" placeholder="Qual o nome do jogo?"></br>
            </div>
</br>

        </br>
            <div class="inputbox">
            <label><b>Desenvolvedora:</b></label></br>
            <input type="text" name="desenvolvedora" class="inputuser" placeholder="Qual a desenvolvedora do jogo? "></br>
            
            </div>

</br>
<div class="inputbox">
            <label><b>Plataforma:</b></label></br>
            <select name="plataforma" class="inputsexo">
            <option>Plataforma do jogo</option>
                <option>Nintendo 64</option>
                <option>Steam</option>
                <option>PSVITA</option>
                <option>PSP</option>
                <option>PS1</option>
                <option>PS2</option>
                <option>PS3</option>
                <option>PS4</option>
                <option>PS5</option>
                <option>XBOX 360</option>
                <option>XBOX S</option>
                <option>XBOX X</option>
                </select>

            
            </div>
</br>
<div class="inputbox">
            <label><b>Classificação:</b></label></br>
            <select name="classificacao" class="inputsexo">
            <option>Classificação do jogo</option>
                <option>L</option>
                <option>10</option>
                <option>14</option>
                <option>16</option>
                <option>18</option>
                </select>

            
            </div>
</br>
            
</br>
<button name="voltar" id="voltar"><a href="http://localhost/cadastrophp/painel.php"> Voltar </a></button>
            <button name="cadastrar" class="cadastrar">Cadastrar</button>
           
</br>

            </fieldset>
        </form>
    </body>
</html>