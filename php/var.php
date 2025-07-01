<?php 
        $tipo = isset($_POST["curriculum"]) ? $_POST["curriculum"] : '';
        $curriculum = isset($_POST['curriculum']) ? $_POST['curriculum'] : '';
        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
        $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
        $academicidade = isset($_POST['education']) ? $_POST['education'] : '';
        $experience = isset($_POST['profissional']) ? $_POST['profissional'] : '';
        $habilidade1 = isset($_POST['habilidade1']) ? $_POST['habilidade1'] : '';
        $habilidade2 = isset($_POST['habilidade2']) ? $_POST['habilidade2'] : '';
        $habilidade3 = isset($_POST['habilidade3']) ? $_POST['habilidade3'] : '';
        if ($tipo == "curriculum-vitae") {
            include "models/modelo1.php";
        } elseif ($tipo == "Colunas") {
            include "models/modelo2.php";
        } elseif ($tipo == "Blocos") {
            include "models/modelo3.php";   
        } elseif ($tipo == "Minimalista") {
            include "models/modelo4.php";
        }
?>