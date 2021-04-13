<?php

	$conexao = mysqli_connect("localhost", "root", "", "") or die ("Erro");
	mysqli_query($conexao,"set names 'utf8'");
	 $nome_cad = $_POST ["nome_cad"];
  	$email_cad = $_POST ["email_cad"];
	$men_cad = $_POST ["men_cad"];	
	
	function cadastrar($nome_cad,$email_cad,$men_cad){
            $nome_cad=($nome_cad);
            $sql = "SELECT nome_cad FROM usuario";
            $resultado = mysqli_query($conexao, $sql);
            if($resultado !== $nome_usuario ){
				$sql = $resultado->prepare("INSERT INTO usuario (nome_cad,email_cad,men_cad) VALUES ('$nome_cad','$email_cad,'$men_cad')");
                $sql->execute();
                return true;
            }else{
                return false;
            }
    }
?>
