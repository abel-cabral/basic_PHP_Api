<?php
include_once('./classes/conexao.php');
include_once('./classes/DAO/UsuarioDAO.php');

$usuarios_index = new UsuarioDAO();
$buscar = $usuarios_index->consultarTodosUsuario();

//Vê se a consulta ao banco retornou algum resultado
if($buscar == true){
    //Aqui usamos um for pra fazer uma repetição baseado no nª de elementos encontrados
    for ($i = 0; $i < mysqli_num_rows($buscar); $i++){
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


?>

