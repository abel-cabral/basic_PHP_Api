<?php
include_once('./classes/conexao.php');
include_once('./classes/DAO/UsuarioDAO.php');

//Há um GET?
if($_GET){
//Verifica se há valor no get, se nao ele será false
$id_user = isset($_GET['id'])? $_GET['id']: false;

if($id_user){
    $usuarios_index = new UsuarioDAO();
    $buscar = $usuarios_index->consultarUsuario($id_user);
}else{
    die();
}



//Vê se a consulta ao banco retornou algum resultado
if($buscar == true){    
        //Puxamos os resultados em forma de array
        $linha = mysqli_fetch_array($buscar, MYSQL_ASSOC);
        
        //Organizando a saida do array do SQL, para nosso Json de resposta.
        $resposta[] = array(
            'id' => $linha['id'],
            'nome' => $linha['nome'],
            'sobrenome' => $linha['sobrenome'],
            'idade' => $linha['idade'],
            'sexo' => $linha['sexo'],
        );        
    
}
//json_encode — Retorna a representação JSON de um valor
echo json_encode($resposta);
var_dump($resposta);
var_dump(json_encode($resposta));

//Se não houver exibe a mensagem
}else{
   echo 'Paramentro não informado. Insira um ID para Buscar';
}

?>

