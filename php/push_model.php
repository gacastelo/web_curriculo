<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    if ($tipo == "curriculum-vitae") {
        include "models/modelo1.php";
    } elseif ($tipo == "Colunas") {
        include "models/modelo2.php";
    } elseif ($tipo == "Blocos") {
        include "models/modelo3.php";
    } elseif ($tipo == "Minimalista") {
        include "models/modelo4.php";
    }
} else {
    echo "<p style='color: red; text-align: center;'>Nenhum currículo gerado ainda.</p>";
}
?>