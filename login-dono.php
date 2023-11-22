<?php session_start(); ?>

<html>
    <head>
        <html lang="pt-br">
            <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="estilocadastro.css"/>
        <style>
            .img{
                height: 300px;
                width: 450px;
                position: absolute;
                bottom: 450px;
            }
            .logar{
                position: absolute;
                left: 350px;
                
            }
        </style>
    </head>
    <body>
        <div class="box">
        <?php if(isset( $_SESSION ['msg'])) {echo "<h4>" .$_SESSION ['msg']. "</h4>";} unset($_SESSION ['msg']) ?>
<form action="logar-dono.php" method="post">
    <fieldset>
    <legend><b>Tela de login (Dono)</b></legend>
</br>
<div class="inputbox">
    <label><b>Email:</b></label>
<input type="email" required="" name="email" placeholder="Insira seu Email" class="inputuser">
</div>
</br>
<div class="inputbox">
    <label><b>Senha:</b></label>
<input type="password" required="" name="senha" placeholder="Insira sua Senha" class="inputuser">
</div>
</br>
</br>
</br>

<button name="voltar-dono"><a href="http://localhost/cadastrophp/logar.php">Voltar ao login dos funcionários</a></button>
<button name="logar-dono" class="logar">Entrar</button>


</div>




</fieldset>
</form>


    </body>
</html>