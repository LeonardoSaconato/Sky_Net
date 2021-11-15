<?php

//--*------------------------------------------*--
//--* dir parent	: php	     	   	 	   *--
//--* File name		: ProcessMsg.php     	   *--
//--* Created by 	: Ricardo Italo		       *--
//--* Discord		: ShadowJr#5627			   *--
//--*------------------------------------------*--

session_start();
include_once 'conexao.php';


$SendContact = filter_input(INPUT_POST, 'SendContact', FILTER_SANITIZE_STRING);
if($SendContact){
    //Receive form data
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
    
    //Insert no BD
    $result = "INSERT INTO Project (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
    
    $insert_msg = $conn->prepare($result);
    $insert_msg->bindParam(':nome', $nome);
    $insert_msg->bindParam(':email', $email);
	$insert_msg->bindParam(':mensagem', $mensagem);
    
    if($insert_msg->execute()){
        $_SESSION['msg'] = "<b style='color:green;'>Mensagem enviada com sucesso</b>";
        ?><script><?php echo("location.href = 'index.php?msg=$msg';");?></script><?php
    }else{
        $_SESSION['msg'] = "<b style='color:red;'>Mensagem não foi enviada com sucesso</b>";
        header("Location: index.php");
    }    
}else{
    $_SESSION['msg'] = "<b style='color:red;'>Mensagem não foi enviada com sucesso</b>";
    header("Location: index.php");
}