<div style="max-width: 90%; margin: auto;">
    <article class="modelo2" style="display: flex; gap: 20px; border: 1px solid;" id="curriculo">
        <aside style="width: 40%; background: #f0f0f0; padding: 15px;">
            <h2>Contato</h2>
            <p><strong>Nome:</strong> <?php echo $nome; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
            <p><strong>Endereço:</strong> <?php echo $endereco; ?></p>
        </aside>
        <section style="width: 70%;">
            <h1 style="margin-top: 0;">Currículo de <?php echo $nome; ?></h1>
            <h3>Experiência Profissional</h3>
            <p><?php echo nl2br(htmlspecialchars($experience)); ?></p>
            <h3>Formação Acadêmica</h3>
            <p><?php echo nl2br(htmlspecialchars($academicidade)); ?></p>
            <h3>Habilidades</h3>
            <ul>
                <li><?php echo $habilidade1; ?></li>
                <li><?php echo $habilidade2; ?></li>
                <li><?php echo $habilidade3; ?></li>
            </ul>
        </section>
    </article>
    <footer>
            <p>&copy; Gabriel Castelo. Todos os direitos reservados.</p>
    </footer>
</div>