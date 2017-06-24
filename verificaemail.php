<?php
    if (isset($_GET["email"])){
        include "conecta.php";
        $email = trim($_GET["email"]);
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
         $sql = "select * from cliente where email = ? limit 1";
         $consulta = $con->prepare($sql);
         $consulta->bindParam(1,$email);
         $consulta->execute();
         $dados = $consulta->fetch(PDO::FETCH_OBJ);
         
         // se ele não esta vazio
         if (!empty($dados->email)){
             echo "O e-mail digitado esta em uso";
         }
                 
        }else {
            //não é valido
            echo "Este E-mail é inválido";
        }
    }else {
        echo "Erro ao verificar";
    }