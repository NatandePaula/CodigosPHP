<?php

    require_once('conexao.inc');
    require_once('../classes/modeloLoja.inc');

    class ProdutoDao{
        private $con;

        function ProdutoDao() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirProduto(Produto $produto) {
            $sql = $this->con->prepare("insert into produtos (nome, descricao, data_fabricacao,
            preco, estoque, referencia, cod_fabricante)

            values (:nom, :desc, :data, :preco, :est, :ref, :fab)");

            $sql->bindValue(':nom', $produto->getNome());
            $sql->bindValue(':desc', $produto->getDescricao());
            $sql->bindValue(':preco', $produto->getPreco());
            $sql->bindValue(':est', $produto->getEstoque());
            $sql->bindValue(':ref', $produto->getReferencia());
            $sql->bindValue(':fab', $produto->getFabricante());
            $sql->bindValue(':data', $this->converteDataMysql($produto->getDataFabricacao()));
            $sql->execute();
        }

        function converteDataMysql ($data) {
            return date('Y-m-d',$data);
        }

        public function excluirProduto($id){

            $sql = $this->con->prepare("delete from produtos

            where produto_id = :id");

            $sql->bindValue(':id', $id);
            $sql->execute();
        }
        public function getProdutos(){
            $rs = $this->con->query("SELECT * FROM produtos");

            $lista = array();
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                $produto = new Produto();
                $produto->setProduto_id($row->produto_id);
                $produto->setReferencia($row->referencia);
                $produto->setNome($row->nome);
                $produto->setDescricao($row->descricao);
                $produto->setEstoque($row->estoque);
                $produto->setfabricante($row->cod_fabricante);
                $produto->setPreco($row->preco);

                $produto->setDataFabricacao($row->data_fabricacao);

                $lista[] = $produto;

            }
            return $lista;
        }

        
    } 
?>