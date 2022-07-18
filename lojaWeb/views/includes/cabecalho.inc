<HTML>
<HEAD>
 <TITLE>Loja Virtual Desweb</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</HEAD>
<BODY>
<div class="topo">
<img src="imagens/capa12.png">
</div>
<?php
    session_start();

    $estado = $_SESSION['logado'];
    if(!$estado || !isset($_SESSION['logado'])):?>
                <div class="barra">
                <nav>
                <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Quem somos?</a></li>
                
                <li><a href="#">Produtos</a>
                        <ul>
                                
                                <li><a href="#">Consultar Todos</a>
                                <li><a href="#">Paginação</a>
                        </ul>
                </li>
                <li><a href="#">Vendas</a>
                        <ul>
                                <li><a href="#">Relação de produtos</a></li>
                                <li><a href="#">Ver carrinho</a></li>
                                <li><a href="#">Esvaziar carrinho</a></li>
                        </ul>
                        </li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="views/formLogin.php">Login</a></li>
                </ul>
                </nav>
                </div>
    <?php else:?>
                <div class="barra">
                <nav>
                <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Quem somos?</a></li>
                <li><a href="#">Clientes</a>
                        <ul>
                                <li><a href="#">Cadastrar</a></li>
                                <li><a href="#">Consultar Todos</a></li>
                        </ul>
                </li>
                <li><a href="#">Produtos</a>
                        <ul>
                                <li><a href="../views/formProduto.php">Cadastrar</a></li>
                                <li><a href="#">Cadastrar Vários</a>
                                <li><a href="../controlers/controlerProduto.php?opcao=2">Consultar Todos</a>
                                <li><a href="../controlers/controlerProduto.php?opcao=4">Exluir</a>
                                <li><a href="#">Paginação</a>
                        </ul>
                </li>
                <li><a href="#">Vendas</a>
                        <ul>
                                <li><a href="#">Relação de produtos</a></li>
                                <li><a href="#">Ver carrinho</a></li>
                                <li><a href="#">Esvaziar carrinho</a></li>
                        </ul>
                        </li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="views/formLogin.php">Login</a></li>
                </ul>
                </nav>
                </div>
        <?php endif;?>
<p>&nbsp;