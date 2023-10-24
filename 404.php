<?php get_header(); // Ceci inclut votre fichier header.php ?>

<main id="main-content" role="main">
    <section class="contenuprincipal error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Oops! Cette page est introuvable.', 'text-domain' ); ?></h1>
        </header>

        <div class="page-content">
            <p><?php esc_html_e( 'Il semble que rien n’ait été trouvé à cette adresse. Essayez d’utiliser la recherche ou l’un des liens ci-dessous.', 'text-domain' ); ?></p>

            <?php get_search_form(); ?>

    </section>
</main>

<?php get_footer(); ?>
