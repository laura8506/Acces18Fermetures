<?php

// Fonction onglet actif du menu
if (!function_exists('nav_item')) {
    function nav_item (string $lien, string $titre) : string
    {
        $classe = 'nav-item';
        if ($_SERVER['SCRIPT_NAME'] === $lien) {
            $classe = $classe . ' active';
        }
        return <<<HTML
                <a class="$classe" href="$lien">$titre</a>
HTML;
    }
}

?>


<?= nav_item ('/AccesFermetures2/menu/index.php','Accueil'); ?>
<?= nav_item ('/AccesFermetures2/menu/fenetres.php','Fenêtres'); ?>
<?= nav_item ('/AccesFermetures2/menu/volets.php', 'Volets'); ?>
<?= nav_item ('/AccesFermetures2/menu/portes_entree.php', 'Portes d\'entrée'); ?>
<?= nav_item ('/AccesFermetures2/menu/portes_garage.php', 'Portes de garage'); ?>
<?= nav_item ('/AccesFermetures2/menu/portails_clotures.php', 'Portails et clôtures'); ?>
<?= nav_item ('/AccesFermetures2/menu/stores.php', 'Stores'); ?>
<?= nav_item ('/AccesFermetures2/menu/rampes.php', 'Rampes et accessibillité'); ?>
<?= nav_item ('/AccesFermetures2/menu/nos_realisations.php', 'Nos réalisations'); ?>