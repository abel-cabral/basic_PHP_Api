<?php
class Conexao{
    private $usuario = "nilsucoaxv8m24p8";
    private $senha = "gl67cvb3mfjqwu3u";
    private $caminho = "ffn96u87j5ogvehy.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $banco = "kl8n8dwgeg07w204";
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

