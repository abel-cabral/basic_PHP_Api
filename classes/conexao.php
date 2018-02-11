<?php
class Conexao{
    private $usuario = "root";
    private $senha = "";
    private $caminho = "localhost";
    private $banco = "webapi";
    private $con;
    
    public function __construct(){
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die('Falha na Conexão com o Banco de Dados'. mysqli_erro($this->con));
        mysqli_select_db($this->con, $this->banco) or die ('Conexão com o Banco Falhou'. mysqli_error($this->con));
    }
    
    public function getCon(){
        return $this->con;
    }
}


?>

