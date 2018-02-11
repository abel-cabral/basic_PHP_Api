<?php
    class UsuarioDAO{
        private $conexao;
        
        public function __construct(){
           $this->conexao = new Conexao(); 
        }
        
        //Busca todos os dados de todos no BD
        public function consultarTodosUsuarios(){
            $sql = "SELECT * FROM usuarios";
            $resultado = mysqli_query($this->conexao->getCon(), $sql);
            
            //Esse paramentro 'mysqli_num_rows' ve quantos resultados obtivemos
            if(mysqli_num_rows($resultado) > 0){//Aqui comparamos se é maior que 0
               return $resultado; 
            }else{//Se nao achar nada a função acaba.
                return false;
            }
        }
        
        //Busca via ID todos os dados relacionados
        public function consultarUsuario($id_user){
            $sql = "SELECT * FROM usuarios where id = '$id_user'";
            $resultado = mysqli_query($this->conexao->getCon(), $sql);
            
            //Esse paramentro 'mysqli_num_rows' ve quantos resultados obtivemos
            if(mysqli_num_rows($resultado) > 0){//Aqui comparamos se é maior que 0
               return $resultado; 
            }else{//Se nao achar nada a função acaba.
                return false;
            }
        }
        
        //Cruza dados informados usando parametros de idade e sexo
        public function consultar_caracteristicas($idade, $sexo){
            $sql = "SELECT * FROM usuarios where idade = '$idade' AND sexo = '$sexo'";
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