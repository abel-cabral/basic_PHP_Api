<?php
class Conexao{
    private $usuario = "ge9a21rppwa1w037";
    private $senha = "t9gkjy17v4xb5aga";
    private $caminho = "lgg2gx1ha7yp2w0k.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $banco = "rn2t98tcjev4rd32";
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

