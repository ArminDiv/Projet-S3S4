<div id="main-avis" class="avis_container">
    <h2>Vous pouvez nous faire <span class="highlight">CONFIANCE</span> </h2>
    <h3>EXCELLENT</h3>
    <img id="note" src="<?= BASE_URL ?>/public/assets/vitrine/img/stars-google.png" alt="rating">
    <p>Basé sur <strong>404 avis</strong></p>
    <img id="logo-google" src="<?= BASE_URL ?>/public/assets/vitrine/img/Google-logo.png" alt="logo-google">

<?php
$avis = [
    [
        'nom' => 'Luis Vasconcelos',
        'date' => '2025-06-02',
        'commentaire' => 'Très satisfait avec les travaux, la manutention et l’attention envers nous.',
        'photo' => BASE_URL . '/public/assets/vitrine/img/pp1.jpg'
    ],
    [
        'nom' => 'Sophie Martin',
        'date' => '2025-07-15',
        'commentaire' => 'Service impeccable, très professionnel et ponctuel.',
        'photo' => BASE_URL . '/public/assets/vitrine/img/pp1.jpg'
    ],
    [
        'nom' => 'Karim Benali',
        'date' => '2025-09-03',
        'commentaire' => 'Travail soigné et équipe sympathique, je recommande fortement !',
        'photo' => BASE_URL . '/public/assets/vitrine/img/pp1.jpg'
    ]
];
?>

    <div class="container-avis-google">
        <?php foreach ($avis as $a): ?>
            <div class="avis-google">
                <div class="avis-header">
                    <img class="pp" src="<?= htmlspecialchars($a['photo']) ?>" alt="photo de profil">
                    <div class="avis-info">
                        <p class="nom-client"><?= htmlspecialchars($a['nom']) ?></p>
                        <p class="date-avis"><?= htmlspecialchars($a['date']) ?></p>
                    </div>
                    <img class="logo-google" src="<?= BASE_URL ?>/public/assets/vitrine/img/google-logo-carre.png" alt="logo Google">
                </div>

                <div class="avis-note">
                    <img src="<?= BASE_URL ?>/public/assets/vitrine/img/stars-google.png" alt="notation" class="etoiles">
                    <img src="<?= BASE_URL ?>/public/assets/vitrine/img/certif.png" alt="vérifié" class="verifie">
                </div>

                <p class="commentaire-client">
                    <?= htmlspecialchars($a['commentaire']) ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>

</div>
