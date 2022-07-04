<?php

//acressentar o inicio do exibir produto

?>


<table border="1" width="30" cellspacing= "10">
    <tr>
        <td rowspan="5" align="center" ><img src="imagem/produto" <?php  echo $prod->getReferencia();?> width="200">

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