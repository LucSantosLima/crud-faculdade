<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");


if(isset($_POST['alterar'])){
    $jogo = $_POST['nome_do_jogo'];
    $estilo = $_POST['genero_do_jogo'];
    $desenvol = $_POST['desenvolvedora'];
    $plat = $_POST['plataforma'];
    $classi = $_POST['classificacao'];
    
    $id = $_POST['alterar'];

$query = mysqli_query($conn, "UPDATE jogos SET nome_do_jogo='$jogo', genero_do_jogo='$estilo', desenvolvedora='$desenvol', plataforma='$plat', classificacao='$classi'  WHERE id='$id'");

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
   
            .alterar{
                position:absolute;
                left: 400px;
            }


    </style>
       

    </head>
    <body>
    
    <?php if (isset($_GET['id'])){
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM jogos WHERE id='$id'");
    foreach($result as $linha){
    ?>
        <div class="box">
        <form method="post">
            <fieldset>
                <legend><b>Formulário de Atualização de Jogos</b></legend>
</br>
            <div class="inputbox">
            <label><b>Nome do jogo:</b></label></br>
            <input type="text" value="<?php echo $linha['nome_do_jogo']; ?>"  name="nome_do_jogo" class="inputuser" placeholder="Qual o nome do jogo?"></br>
            </div>
</br>
    </br>

<div class="inputbox">
            <label><b>Gênero do jogo:</b></label></br>
            <input type="text" value="<?php echo $linha['genero_do_jogo']; ?>"  name="genero_do_jogo" class="inputuser" placeholder="Qual o gênero do jogo?"></br>
            </div>
    </br>
    </br>
    <div class="inputbox">
            <label><b>Desenvolvedora:</b></label></br>
            <input type="text" value="<?php echo $linha['desenvolvedora']; ?>"  name="desenvolvedora" class="inputuser" placeholder="Qual a desenvolvedora do jogo?"></br>
            </div>
            
            

        </br>
        <div class="inputbox">
            <label><b>Plataforma:</b></label></br>
            <select name="plataforma"  class="inputsexo">
                <option <?php if($linha['plataforma']=="Nintendo_64"){  echo 'selected';   }?> >Nintendo 64</option>
                <option <?php if($linha['plataforma']=="Steam"){  echo 'selected';   }?> >Steam</option>
                <option <?php if($linha['plataforma']=="PSVITA"){  echo 'selected';   }?> >PSVITA</option>
                <option <?php if($linha['plataforma']=="PSP"){  echo 'selected';   }?> >PSP</option>
                <option <?php if($linha['plataforma']=="PS1"){  echo 'selected';   }?> >PS1</option>
                <option <?php if($linha['plataforma']=="PS2"){  echo 'selected';   }?> >PS2</option>
                <option <?php if($linha['plataforma']=="PS3"){  echo 'selected';   }?> >PS3</option>
                <option <?php if($linha['plataforma']=="PS4"){  echo 'selected';   }?> >PS4</option>
                <option <?php if($linha['plataforma']=="PS5"){  echo 'selected';   }?> >PS5</option>
                <option <?php if($linha['plataforma']=="XBOX_360"){  echo 'selected';   }?> >XBOX 360</option>
                <option <?php if($linha['plataforma']=="XBOX_S"){  echo 'selected';   }?> >XBOX S</option>
                <option <?php if($linha['plataforma']=="XBOX_X"){  echo 'selected';   }?> >XBOX X </option>
            </select>
            </div>

</br>
<div class="inputbox">
            <label><b>Classificação:</b></label></br>
            <select name="classificacao"  class="inputsexo">
                <option <?php if($linha['classificacao']=="L"){  echo 'selected';   }?> >L</option>
                <option <?php if($linha['classificacao']=="10"){  echo 'selected';   }?> >10</option>
                <option <?php if($linha['classificacao']=="14"){  echo 'selected';   }?> >14</option>
                <option <?php if($linha['classificacao']=="16"){  echo 'selected';   }?> >16</option>
                <option <?php if($linha['classificacao']=="18"){  echo 'selected';   }?> >18</option>
                
            </select>
            </div>
    </br>
           
</br>
            
            
<button name="voltar" id="voltar"><a href="http://localhost/cadastrophp/tela-dono.php"> Voltar </a></button>            
<button name="alterar" class="alterar" value="<?php echo $id; ?>">Alterar Dados</button>
            

</br>
</br>

            </fieldset>
        </form>
        <?php } } ?>
        
    </body>
</html>