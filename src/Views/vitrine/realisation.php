<div id="main_realisation" class="contact-container">
    
    <h3>Nos</h3>
    <h2>Réalisation</h2>

    <section class="realisations">
        <div class="container-realisation">
            <?php foreach ($realisation as $r): ?>
                <div class="realisation-item">
                    <div class="realisation-image">
                        <img src="<?= htmlspecialchars($r['photo']) ?>" alt="Image de la réalisation">
                    </div>
                    <p class="realisation-commentaire">
                        <?= htmlspecialchars($r['commentaire']) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</div>