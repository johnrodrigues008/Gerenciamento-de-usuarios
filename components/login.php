<?php
    require("conexao.php");

    /* Essa função serve para mostrar se o usuario existe */
    if(isset($_POST["email"]) && isset($_POST["senha"]) && $conexao!=null){
        /* echo "existe"; */
        $query = $conexao->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $query->execute(array($_POST["email"], $_POST["senha"]));

        if ($query->rowCount()){
            $user = $query->fetch(PDO::FETCH_ASSOC[0]);

            session_start();
            $_SESSION["usuario"] = array ($user["nome"], $user["adm"]);

            echo "<script>window.location = '../dashboard.php'</script>";
        }else{
            echo "<script>window.location = '../login.php'</script>";
        }
    } else{
        echo "<script>window.location = '../login.php'</script>";
    }




?>