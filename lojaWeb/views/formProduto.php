<?php

    require_once 'includes/cabecalho.inc';

    session_start();

    $fabricantes = $_SESSION['fabricantes'];

?>

<select name="pFabricante">
    <option value='0'>-</option>" // primeiro item, nulo para não aparecer de
    cara um fabricante
    <?php
        foreach($fabricantes as $fab){
            echo "<option value='$fab->codigo'>$fab->nome</option>";
            // colocamos o código como valor a ser enviado
        }
    ?>
</select>

<table border="1" width="30" cellspacing= "10">
    <tr>
        <td rowspan="5" align="center" ><img src="imagem/produto"
             <?php  echo $prod->getReferencia();?> width="200">

        </td>
    </tr>

    <tr align= "left">
        <td colspan="2">NOME AQUI </td>

    </tr>
    <tr>
        <td style="text-align:justify" colspan="2">Descrição</td>
    </tr>
    <tr>
        <td colspan="2"> FABRICANTE</td>
    </tr>
    <TD>preco aqui</TD>
    <td colspan="2">Imagem de compar </td>

</table>