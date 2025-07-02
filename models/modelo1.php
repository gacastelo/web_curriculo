<div>
    <article class="modelo1" id="curriculo">
        <h1>Curriculum Vitae <?php echo $nome; ?></h1>
        <hr>
        <section class="contato">
            <h2>Contato</h2>
            <p>Email: <?php echo $email; ?></p>
            <p>Telefone: <?php echo $telefone; ?></p>
            <p>Endereço: <?php echo $endereco; ?></p>
        </section>
        <hr>
        <section class="informacoes-profissionais">
            <h2>Informações Profissionais</h2>
            <p><?php echo nl2br(htmlspecialchars($experience)); ?></p>
        </section>
        <hr>
        <section class="informacoes-academicas">
            <h2>Informações Acadêmicas</h2>
            <p><?php echo nl2br(htmlspecialchars($academicidade)); ?></p>
        </section>
        <hr>
        <section class="habilidades">
            <h2>Habilidades</h2>
            <div>
                <div class="skill">
                <div class="bola">1</div>
                <p><?php echo $habilidade1; ?></p>
                </div>
                <div class="skill">
                <div class="bola">2</div>
                <p><?php echo $habilidade2; ?></p>
                </div>
                <div class="skill">
                <div class="bola">3</div>
                <p><?php echo $habilidade3; ?></p>
                </div>
            </div>
        </section>
        <footer>
            <p>&copy; Gabriel Castelo. Todos os direitos reservados.</p>
        </footer>
    </article>
</div>
