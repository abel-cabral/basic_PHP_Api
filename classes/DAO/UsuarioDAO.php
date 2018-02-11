<?php
    class UsuarioDAO{
        private $conexao;
        
        public function __construct(){
           $this->conexao = new Conexao(); 
        }
        public function consultarTodosUsuario(){
            $sql = "SELECT * FROM usuarios";
            $resultado = mysqli_query($this->conexao->getCon(), $sql);
            
            //Esse paramentro 'mysqli_num_rows' ve quantos resultados obtivemos
            if(mysqli_num_rows($resultado) > 0){//Aqui comparamos se é maior que 0
               return $resultado; 
            }else{//Se nao achar nada a função acaba.
                return false;
            }
        }
    }
?>