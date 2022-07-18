<?php
     require_once 'includes/cabecalho.inc';
     require_once("../views/includes/autenticar.inc");

     $fabricante = new $_SESSION['fabricante'];
?>

    <h2>Informações do Produto</h2>
    <p>
    <form action="../controlers/controlerProduto.php" method="POST" >
        <p> Nome <input type="text" name="nome" size="10">
        <p> Data de Fabricação <input type="date" name="dataFabricacao" size="10">
        <p> Preço <input type="text" name="preco" size="10">
        <p> Quantidade no Estoque <input type="text" name="estoque" size="10">
        <p> Descrição <input type="text" name="descricao" size="10">
        <p> Referência <input type="text" name="referencia" size="10">
        <p> <input type="hidden" name="opcao" value="1">
        <select name="fabricante">
            <option value="0"></option>
            <?php
                foreach ($fabricantes as $fab) {
                    echo "<option value='$fab->codigo'>$fab->nome</option>";
                }
            ?>
        </select>
        <p>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Cancelar">
    </form>
    <p>

<?php
     require_once 'includes/rodape.inc';
?>