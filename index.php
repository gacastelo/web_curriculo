<?php include("php/var.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do site">
    <link rel="stylesheet" href="config/style.css">
    <title>Meu Currículo</title>
</head>

<body>
    <main>
        <div class="container" id="gerador"
            style="<?php echo ($_SERVER['REQUEST_METHOD'] === 'POST') ? 'display:none;' : 'display:flex;'; ?>">

            <h1>Gerador de Meu Curriculo</h1>
            <form action="index.php" method="post">
                <div class="personal-info">
                    <h2>Informações Pessoais</h2>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required placeholder="Ex: Gabriel Castelo"
                        value="<?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : ''; ?>">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Ex: skibidi@example.com"
                        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}"
                        placeholder="(99) 99999-9999"
                        value="<?php echo isset($_POST['telefone']) ? htmlspecialchars($_POST['telefone']) : ''; ?>">

                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" required placeholder="Ex: Rua dos Bobos, 0"
                        value="<?php echo isset($_POST['endereco']) ? htmlspecialchars($_POST['endereco']) : ''; ?>">
                </div>

                <div class="work-experience">
                    <h2>Experiência Profissional</h2>
                    <textarea name="profissional" id="profissinal"
                        placeholder="Nome da Empresa, Cargo, Tempo de Trabalho"><?php
                        echo isset($_POST['profissional']) ? htmlspecialchars($_POST['profissional']) : '';
                        ?></textarea>
                </div>

                <div class="education">
                    <h2>Formação Acadêmica</h2>
                    <textarea name="education" id="education" placeholder="Instituição, Curso, Ano de Conclusão"><?php
                    echo isset($_POST['education']) ? htmlspecialchars($_POST['education']) : '';
                    ?></textarea>
                </div>

                <div class="skills">
                    <h2>Habilidades</h2>
                    <label for="habilidade1">Habilidade 1:</label>
                    <input type="text" id="habilidade1" name="habilidade1" required placeholder="Ex: HTML"
                        value="<?php echo isset($_POST['habilidade1']) ? htmlspecialchars($_POST['habilidade1']) : ''; ?>">

                    <label for="habilidade2">Habilidade 2:</label>
                    <input type="text" id="habilidade2" name="habilidade2" required placeholder="Ex: CSS"
                        value="<?php echo isset($_POST['habilidade2']) ? htmlspecialchars($_POST['habilidade2']) : ''; ?>">

                    <label for="habilidade3">Habilidade 3:</label>
                    <input type="text" id="habilidade3" name="habilidade3" required placeholder="Ex: JavaScript"
                        value="<?php echo isset($_POST['habilidade3']) ? htmlspecialchars($_POST['habilidade3']) : ''; ?>">
                </div>

                <label for="curriculum">Tipo de Curriculo</label>
                <select id="curriculum" name="curriculum">
                    <option value="curriculum-vitae" <?php echo (isset($_POST['curriculum']) && $_POST['curriculum'] == 'curriculum-vitae') ? 'selected' : ''; ?>>Curriculum Vitae</option>
                    <option value="Colunas" <?php echo (isset($_POST['curriculum']) && $_POST['curriculum'] == 'Colunas') ? 'selected' : ''; ?>>Colunas</option>
                    <option value="Blocos" <?php echo (isset($_POST['curriculum']) && $_POST['curriculum'] == 'Blocos') ? 'selected' : ''; ?>>Blocos</option>
                    <option value="Minimalista" <?php echo (isset($_POST['curriculum']) && $_POST['curriculum'] == 'Minimalista') ? 'selected' : ''; ?>>Minimalista</option>
                </select>

                <button type="submit" id="hide">Enviar</button>
            </form>
        </div>

        <div class="curriculum_gerado" id="curriculum_gerado"
            style="<?php echo ($_SERVER['REQUEST_METHOD'] === 'POST') ? 'display:block;' : 'display:none;'; ?>">
            <?php include("php/push_model.php"); ?>
            <div style="text-align: center;">
                <button onclick="MostrarGerador()" class="voltar">Voltar</button>
            </div>
        </div>
    </main>
    <script src="config/script.js"></script>
</body>

</html>