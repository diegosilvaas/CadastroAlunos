<?php 

    try {
        $conexao = new PDO('mysql: host = localhost; dbname=cadastro_alunos', 'root', '');
    }  catch (Exception $erro) {
        try {
            $conexao = new PDO('mysql: dbname=alunos_rogado');
        } catch (Exception $e) {
            echo $erro -> getMessage();
            echo "<br>";
            echo $erro -> getCode();
        }

    }

?>