<?php
    class Produto {
        public $produto_id;
        public $nome;
        public $descricao;
        public $data_fabricacao;
        public $preco;
        public $estoque;
        public $referencia;
        public $fabricante;

        function setProduto($nome, $descricao, $data, $preco, $estoque, $referencia, $fabricante) {
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->preco = $preco;
            $this->estoque = $estoque;
            $this->referencia = $referencia;
            $this->fabricante = $fabricante;
            $this->data_fabricacao = strtotime(str_replace('/','-',$data));
        }
        

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of descricao
         */ 
        public function getDescricao()
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         *
         * @return  self
         */ 
        public function setDescricao($descricao)
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of data_fabricacao
         */ 
        public function getData_fabricacao()
        {
                return $this->data_fabricacao;
        }

        /**
         * Set the value of data_fabricacao
         *
         * @return  self
         */ 
        public function setData_fabricacao($data_fabricacao)
        {
                $this->data_fabricacao = $data_fabricacao;

                return $this;
        }

        /**
         * Get the value of preco
         */ 
        public function getPreco()
        {
                return $this->preco;
        }

        /**
         * Set the value of preco
         *
         * @return  self
         */ 
        public function setPreco($preco)
        {
                $this->preco = $preco;

                return $this;
        }

        /**
         * Get the value of estoque
         */ 
        public function getEstoque()
        {
                return $this->estoque;
        }

        /**
         * Set the value of estoque
         *
         * @return  self
         */ 
        public function setEstoque($estoque)
        {
                $this->estoque = $estoque;

                return $this;
        }

        /**
         * Get the value of referencia
         */ 
        public function getReferencia()
        {
                return $this->referencia;
        }

        /**
         * Set the value of referencia
         *
         * @return  self
         */ 
        public function setReferencia($referencia)
        {
                $this->referencia = $referencia;

                return $this;
        }

        /**
         * Get the value of fabricante
         */ 
        public function getFabricante()
        {
                return $this->fabricante;
        }

        /**
         * Set the value of fabricante
         *
         * @return  self
         */ 
        public function setDataFabricacao($pData) {
            return $this->data_fabricacao = strtotime($pData);
        }
    }    
?>  