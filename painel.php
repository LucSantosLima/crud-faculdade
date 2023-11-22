<!DOCTYPE html>
<html>
    <head>
        <html lang="pt-br">
            <meta charset="utf-8">
<title>painel</title>
<link rel=stylesheet href="estilo.css"/>
<style>
.body{
    background-color: #000;
}

                :root{
    --cor-fundo : rgb(15, 13, 29);
    --cor-hover:#5391c7;
    --cor-primaria: rgb(255, 255, 255);
}

.dp-menu ul{
    list-style-type: none;
    padding: 0;


}

.dp-menu ul{
    background-color: var(--cor-fundo);
    
}

.dp-menu ul li{
    display: inline;
    position: relative;
}

.dp-menu ul li a{
    color: var(--cor-primaria);
    text-decoration: none;
    display: inline-block;
    padding: 15px;
    transition: background .5s;
}

.dp-menu ul li a:hover{
    background-color: var(--cor-hover);
    }
    /*sub-menu*/
    .dp-menu ul ul{
    display: none;
    position: absolute;
}

.dp-menu ul li:hover ul{
    display: block;
   }
.dp-menu ul ul{
    width: 150px
}
.dp-menu ul ul li a{
    display: block;
   
}
               

</style>

</head>
<body>
<?php
session_start();
?>

<nav class="dp-menu">
    <ul>


<li><a href="http://localhost/cadastrophp/index.php">Cadastrar clientes</a></button></li>

<li><a href="http://localhost/cadastrophp/consultar_cliente.php">Consultar clientes</a></button></li>

<li><a href="http://localhost/cadastrophp/cadastrar_jogos(func).php">Cadastrar jogos</a></button></li>

<li><a href="http://localhost/cadastrophp/consultar_jogos(func).php">Consultar jogos</a></button></li>

<li><a href="http://localhost/cadastrophp/cadastrar_produtos(func).php">Cadastrar produtos</a></button></li>

<li><a href="http://localhost/cadastrophp/consultar_produtos(func).php">Consultar produtos</a></button></li>

<li><a href="http://localhost/cadastrophp/logar.php">Sair</a></li>

    </ul>
</nav>
<div>


</body>
</html>