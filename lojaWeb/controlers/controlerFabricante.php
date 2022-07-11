<?php
    //require_once("../classes/Produto.inc");
    require_once("../dao/fabricanteDAO.inc");

    

    $opcao = (int)$_REQUEST['opcao'];

    if($opcao== 1){


    }else if($opcao == 2){
        $fabricanteDao = new FabricanteDao();
        $lista = $fabricanteDao->getFabricantes();
        
        session_start();
        $_SESSION['fabricantes'] = $lista;
        header("Location:../views/formProduto.php");
    }
?>