<?php

    require_once('conexao.inc');
    require_once('../classes/modeloLoja.inc');

    class FabricanteDao{
        private $con;

        function FbricanteDao() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function getFabricantes(){
            $rs = $this->con->query("SELECT * FROM fabricantes");

            $lista = array();
            while($row = $rs->fetch(PDO::FETCH_OBJ))
            {
            $lista[] = $row;
            }
            return $lista;
        }

}

?>        