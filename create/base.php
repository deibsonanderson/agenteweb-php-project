<?php
error_reporting ( E_ALL & ~ E_NOTICE & ~ E_DEPRECATED );

function conectarBanco() {
	$local = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "agenteweb";

	
	$conexao = mysqli_connect ( $local, $usuario, $senha ) or die ( "nao foi possivel conectar" );
	mysqli_set_charset ( $conexao, "utf8" );
	
	mysqli_select_db ( $conexao, $banco ) or die ( "Nao foi possivel selecionar o banco de dados" );
	return $conexao;
}
function fecharBanco($conexao) {
	mysqli_close ( $conexao );
}
function debug($valor) {
	echo "<pre>";
	var_dump ( $valor );
	die ();
}

?>