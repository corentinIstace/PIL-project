<?php get_header(); ?>
<main id="main">
    <section id="top-banner">
        <?php echo "<h1>".get_field('espaces_topbanner_titre')."</h1>"; ?>
        <img id='top-banner_img' src="<?php echo get_template_directory_uri(); ?>/img/top_banner.jpg" alt="bureau">
    </section>
    <section id="nos_espaces">
        <div id="nos_espaces_left">
            <?php echo "<h1>".get_field('espaces_nos_espaces_titre')."</h1>"; ?>
            <?php echo "<p>".get_field('espaces_nos_espaces_texte')."</p>"; ?>
        </div>
        <div id="nos_espaces_right">
            <?php echo "<p>".get_field('espaces_nos_espaces_grand_texte')."</p>"; ?>
            <a href="<?php the_field('espaces_nos_espaces_lien'); ?>" target="_blank">Réservez votre espace</a>
        </div>
    </section>
    <section id="outils">
        <div id="outils_top">
            <div id="outils_top_title">
                <?php echo "<h1>".get_field('espaces_production_titre')."</h1>"; ?>
            </div>
            <div id="outils_top_text">
                <?php echo "<p>".get_field('espaces_production_introduction')."</p>"; ?>
            </div>
        </div>
        <div id="outils_footer">
            <img id='outils_img' src="<?php echo get_template_directory_uri(); ?>/img/outils.jpg" alt="pc">
            <p><?php the_field('espaces_production_liste_daccordeons'); ?></p>
        </div>
    </section>
    <section id="cta">
    <?php echo "<p>".get_field('espaces_cta_petit_titre')."</p>"; ?>
    <?php echo "<h2>".get_field('espaces_cta_grand_titre')."</h2>"; ?>
    <a id="espace_cta_link" href="/espaces/" class="nav-link">
        <img id='cta_link' src="<?php echo get_template_directory_uri(); ?>/img/arrow-conctact.svg" alt="arrow">
      </a>    </section>
</main>
<?php get_footer();?>
