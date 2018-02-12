<?php
include_once('./classes/conexao.php');
include_once('./classes/DAO/UsuarioDAO.php');

//Há um GET?
if($_GET){
//Verifica se há valor no get, se nao ele será false
$idade = isset($_GET['idade'])? $_GET['idade']: false;
$sexo = isset($_GET['sexo'])? $_GET['sexo']: false;


//Testa de o GET tem valor válido.
if($idade && $sexo){
    $usuarios_index = new UsuarioDAO();
    $buscar = $usuarios_index->consultar_caracteristicas($idade, $sexo);
}else{
    echo 'Informe ambos os dados: Idade e Sexo';
    die();
}



//Vê se a consulta ao banco retornou algum resultado
if($buscar == true){    
        for($i=0; mysqli_num_rows($buscar) > $i; $i++){
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
        
        
    
}
//json_encode — Retorna a representação JSON de um valor
echo json_encode($resposta);

//Se não houver exibe a mensagem
}else{
   echo 'Paramentro não informado. Insira um ID para Buscar';
}

?>

