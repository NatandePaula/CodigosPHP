<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/Produto.inc';

     session_start();
     $lista = $_SESSION['lista'];

     function formatarData($data){
          return date('d/m/Y', $data);
     }


?>
     <font face="Tahoma">
     <table border="1" cellspacing="2" cellpadding="1" width="50%">
     <tr>
          <th witdh="10%">ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Data de Fabricação</th>
          <th>Preço unitário</th>
          <th>Em Estoque</th>
          <th>Fabricante</th>
          <th>Operação</th>
     </tr>


<?php
     foreach($lista as $produto)
     {
          echo "<tr align='center'>";
          echo"<td>" . $produto->getIdProduto() ."</td>";
          echo"<td>" .$produto->getNomeProduto() ."</td>";
          echo "<td>" . $produto->getDescricao() ."</td>";
          echo "<td>" . formatarData($produto->getDataFabricacao())  ."</td>";
          echo "<td>" . $produto->getPreco() ."</td>";
          echo "<td>" . $produto->getEstoque() ."</td>";
          echo "<td>" . $produto->getCodFabricante() ."</td>";
          echo "<td><a href='#'>Alterar</a>&nbsp;" ;
          echo "<a href='../controlers/controlerProduto.php?opcao=4&id=". $produto->getIdProduto()."'>Excluir</a></td>";
          echo "</tr>";
     }
     ?>

     </font>
     </table>
<?php
     require_once 'includes/rodape.inc';
?>