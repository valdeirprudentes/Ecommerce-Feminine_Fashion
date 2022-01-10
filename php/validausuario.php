<?php
include 'conexao.php';

session_start(); //Iniciando uma sessão

$vemail = $_POST['txtemail'];
$vsenha = $_POST['txtsenha'];

//echo $vemail.'<br>';
//echo $vsenha.'<br>';

$consulta = $cn->query("select cd_usuario, nm_usuario, ds_email, ds_senha, ds_status from tbl_usuario where ds_email = '$vemail' and ds_senha = '$vsenha'");

if($consulta->rowCount() == 1){ // Verifica se o usuário existe ou não
    $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);

    if($exibeUsuario['ds_status'] == 0){
        $_SESSION ['ID'] = $exibeUsuario['cd_usuario'];
        $_SESSION['Status'] =0;
        header('location:index.php');
    }
    else{
        $_SESSION ['ID'] = $exibeUsuario['cd_usuario'];
        $_SESSION['Status'] =1;
        header('location:index.php');
    }

}
else{
    header('location:erro.php');
}

?>