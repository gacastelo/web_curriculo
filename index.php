<?php
    include("php/var.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do site">
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }   
        .container > * {
            margin-bottom: 20px;
        }
        .container > *:last-child {
            margin-bottom: 0;
        }
        .personal-info, .work-experience, .education, .skills {
            padding: 20px;
            border: 1px solid black;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 5px;
        }
    </style>
    <title>Meu Currículo</title>
</head>
<body>
    <div class="container"> 
        <h1>Gerador de Meu Curriculo</h1>
        <form action="index.php" method="post">
            <div class="personal-info">
            <h2>Informações Pessoais</h2>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required pattern="^\+\d{2} \(\d{2}\) \d{5}-\d{4}$">

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
        </div>
        <div class="work-experience">
            <h2>Experiência Profissional</h2>
            <textarea name="profissional" id="profissinal"></textarea>
        </div>
        <div class="education">
            <h2>Formação Acadêmica</h2>
            <textarea name="education" id="education"></textarea>
        </div>
        <div class="skills">
            <h2>Habilidades</h2>
            <label for="habilidade1">Habilidade 1:</label>
            <input type="text" id="habilidade1" name="habilidade1" required>

            <label for="habilidade2">Habilidade 2:</label>
            <input type="text" id="habilidade2" name="habilidade2" required>

            <label for="habilidade3">Habilidade 3:</label>
            <input type="text" id="habilidade3" name="habilidade3" required>
        </div>
            <label for="curriculum">Tipo de Curriculo</label>
            <select id="curriculum" name="curriculum">
                <option value="curriculum-vitae">Curriculum Vitae</option>
                <option value="Colunas">Colunas</option>
                <option value="Blocos">Blocos</option>
                <option value="Minimalista">Minimalista</option>
            </select>
        <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>