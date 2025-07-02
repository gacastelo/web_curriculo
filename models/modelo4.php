<div>
    <article class="modelo4"
        style="max-width: 800px; margin: auto; font-family: 'Segoe UI', sans-serif; border: 1px solid #ddd; border-radius: 8px; overflow: hidden;"
        id="curriculo">
        <div style="background-color: #222; color: white; padding: 20px;">
            <h1><?php echo $nome; ?></h1>
            <p><?php echo $email; ?> | <?php echo $telefone; ?></p>
            <p><?php echo $endereco; ?></p>
        </div>
        <div style="padding: 20px;">
            <section>
                <h2 style="color: #333;">Experiência</h2>
                <p><?php echo nl2br(htmlspecialchars($experience)); ?></p>
            </section>
            <section>
                <h2 style="color: #333;">Formação</h2>
                <p><?php echo nl2br(htmlspecialchars($academicidade)); ?></p>
            </section>
            <section>
                <h2 style="color: #333;">Habilidades</h2>
                <ul style="list-style-type: circle; padding-left: 20px;">
                    <li><?php echo $habilidade1; ?></li>
                    <li><?php echo $habilidade2; ?></li>
                    <li><?php echo $habilidade3; ?></li>
                </ul>
            </section>
        </div>
        <footer>
            <p>&copy; Gabriel Castelo. Todos os direitos reservados.</p>
        </footer>
    </article>
</div>