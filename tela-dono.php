<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Tela do dono</title>
    <link rel="stylesheet" href="tela-dono.css"/>
    <style>
            

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
    
    <nav class="dp-menu">
    <ul>
        
        
<li><a  href="http://localhost/cadastrophp/cadastrar-funcionario.php">Cadastrar funcionário</a></li>
  
<li><a href="http://localhost/cadastrophp/consulta.php">Consultar funcionários</a></li>
        
<li><a href="http://localhost/cadastrophp/cadastrar_produtos.php">Cadastrar produtos</a></li>

<li><a href="http://localhost/cadastrophp/consultar_produtos.php">Consultar produtos</a></li>
       
<li><a href="http://localhost/cadastrophp/cadastrar_jogos.php">Cadastrar jogos</a></li>

<li><a href="http://localhost/cadastrophp/consultar_jogos.php">Consultar jogos</a></li>
        
<li><a href="http://localhost/cadastrophp/cadastro_clientes(dono).php">Cadastrar clientes</a></li>

<li><a href="http://localhost/cadastrophp/consultar_clientes(dono).php">Consultar clientes</a></li>

<li><a href="http://localhost/cadastrophp/con_desenvolvedor.html">Contato DEV</a></li>
       
<li><a class="word" a href="http://localhost/cadastrophp/login-dono.php">Sair</a></li>
        </ul>
    </nav>
    
</body>
</html>