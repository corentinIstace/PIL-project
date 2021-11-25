<?php get_header(); ?>
<main id="contact_main">
    <section id="page_contact_left">
        <?php echo "<h2>".get_field('contact_section1_title')."</h2>"; ?>
        <div id="page_contact_left_adress">
            <?php echo "<p>".get_field('contact_section1_adresse')."</p>"; ?>
        </div>
        <div id="page_contact_left_button">
            <a href="<?php the_field('contact_section1_button'); ?>" target="_blank">Itinéraire</a>
            <img id='page_contact_left_button_img' src="<?php echo get_template_directory_uri(); ?>/img/marker-map.svg" alt="emplacement">

        </div>
    </section>
    <section id="page_contact_right">
        <div id="page_contact_right_infos">
            <h2><a href='mailto:[acf field="contact_section2_mail"]'>info@lepole.be</a><h2>
            <h2><a href='tel:[acf field="contact_section2_phone"]'>+32 4 239 69 01</a><h2>
        </div>
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10122.725283500962!2d5.5868151!3d50.6330366!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x47f4b33cb5f3e2bf!2sBeCode%20Li%C3%A8ge!5e0!3m2!1sen!2sbe!4v1633332395413!5m2!1sen!2sbe" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</main>
<?php get_footer(); ?>



