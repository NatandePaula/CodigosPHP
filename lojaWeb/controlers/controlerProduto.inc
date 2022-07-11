<?php
    require_once("../classes/Produto.inc");
    require_once("../dao/ProdutoDAO.inc");

    

    $opcao = (int)$_REQUEST['opcao'];

    if($opcao == 1){
        
        $nome = $_REQUEST['nome'];
        $dataFabricacao = $_REQUEST['dataFabricacao'];
        $preco = $_REQUEST['preco'];
        $estoque = $_REQUEST['estoque'];
        $descricao = $_REQUEST['descricao'];
        $referencia = $_REQUEST['referencia'];
        $fabricante = $_REQUEST['fabricante'];
        
        // Criando o produto - objeto
        $produto = new Produto();
        $produto->setProduto($nome, $dataFabricacao, $preco, $estoque, $descricao, $referencia, $fabricante);


        // Incluindo o produto através da DAO
        $dao = new ProdutoDAO();
        $dao->setConexao();
        $dao->incluirProduto($produto);
        header("Location:controlerProduto.php?opcao=2");

    }
    
    else if($opcao == 2 || $opcao == 6) {

        $produtoDAO = new ProdutoDAO();
        $produtoDAO->setConexao();
        $lista = $produtoDAO->getProdutos();
        session_start();
        $_SESSION['lista'] = $lista;
        if($opcao == 2){
            header("Location:../views/exibirProdutos.php");
        }else{
            header("Location:../views/produtosVenda.php");
        }
        

    }else if($opcao == 3) {
        $id = (int)$_REQUEST['id'];
        $produtoDAO = new ProdutoDAO;
        $produto = $produtoDAO->getProduto($id);

        // falta o restante

        $SESSION['produto'];

    }    
    else if($opcao == 4) {
        $id = (int) $_REQUEST['id'];
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->setConexao();
        $produtoDAO->excluirProduto($id);
        header("Location:controlerProduto.php?opcao=2");
        
    }else if($opcao == 4) {
        $produto = new Produto();
        $produto->setProduto($_POST['pNome'], $_POST['pDescricao'], $_POST['pDataFabricacao'], $_POST['pPreco'],
            $_POST['pEstoque'], $_POST['pReferencia'], $_POST['pFabricante']);

        $produto->setProduto_id($_POST['pld']);

        $produtoDAO = new ProdutoDAO();
        $ProdutoDAO->atualizarProduto($produto);

        header("Location:controlerProduto.php? opcao=2);

    }    



    
?>