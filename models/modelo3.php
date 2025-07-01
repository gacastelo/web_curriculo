<article class="modelo3" style="font-family: Arial; background: #fff; padding: 20px; border: 1px solid #ccc;">
    <header style="background: #007BFF; color: white; padding: 10px;">
        <h1>CV - <?php echo $nome; ?></h1>
    </header>

    <section style="margin-top: 20px;">
        <h2 style="border-bottom: 1px solid #ddd;">Contato</h2>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
        <p><strong>Endereço:</strong> <?php echo $endereco; ?></p>
    </section>

    <section style="margin-top: 20px;">
        <h2 style="border-bottom: 1px solid #ddd;">Experiência</h2>
        <p><?php echo nl2br(htmlspecialchars($experience)); ?></p>
    </section>

    <section style="margin-top: 20px;">
        <h2 style="border-bottom: 1px solid #ddd;">Formação</h2>
        <p><?php echo nl2br(htmlspecialchars($academicidade)); ?></p>
    </section>

    <section style="margin-top: 20px;">
        <h2 style="border-bottom: 1px solid #ddd;">Habilidades</h2>
        <p><?php echo implode(' | ', [$habilidade1, $habilidade2, $habilidade3]); ?></p>
    </section>
</article>
