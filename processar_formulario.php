<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
       $nome = $_POST["nome"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];
    }

    if(empty($nome) || empty($email) || empty($senha)){
      echo "Todos os campos devem ser preenchido";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       echo "Email invalido";
    } else{
        echo "Registro realizado com sucesso";
    }
?>