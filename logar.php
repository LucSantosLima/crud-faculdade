<?php session_start(); ?>

<html>
    <head>
        <html lang="pt-br">
            <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="estilocadastro.css"/>
        <style>
          
            .logar{
                position: absolute;
                left: 350px;
            }

        </style>
    </head>
    <body>
       
        <div class="box">            
            <?php if(isset( $_SESSION ['msg'])) {echo "<h4>" .$_SESSION ['msg']. "</h4>";} unset($_SESSION ['msg']) ?>
<form action="logar-usuario.php" method="post">
    <fieldset>
<legend><b>Tela de login</b></legend>
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

<button name="entrar"><a href="http://localhost/cadastrophp/login-dono.php">Logar como dono</a></button>
<button name="logar" class="logar">Entrar</button>

</div>




</fieldset>
       




</form>
</body>
</html>