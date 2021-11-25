<?php
/**
 * front-page.php show the homepage at root and get the page set in wp gui settings (home)
 * This file simply gather and display the homepage selected in gui
 */
/*
Template Name: home
*/
?>

<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <section class="home">
      <?php
        // Punch line
        echo "<h1 class='home__heading'>" . get_post_meta( get_the_ID(), 'home_topbanner_punch-line', true ) . "</h1>";
        // Embeded video
        $embeded_video = get_field('home_topbanner_lien-video' );
        if($embeded_video) {
          echo "<div class=\"home__video\" >";
          echo $embeded_video;
          echo "</div>";
        }
        else {
          // Alternative image if no embeded video
          $image_src = get_field("home_topbanner_image-alt")["sizes"]["large"];
          if( $image_src ) {
            echo "<img alt='' src='" . $image_src . "'/>";
          }
        }
        // Show title of video
        // TODO show at bottom of play button
        //echo "<h3>" . get_post_meta( get_the_ID(), 'home_topbanner_titre-video', true ) . "</h3>";
        // Introduction text
      ?>
      <div class="home--flex">
        <div class="home--third">
          <?php echo "<h2 class=''>".get_field('home_introduction_intro')."</h2>"; ?>
        </div>
        <div class="home--third">
          <?php 
            echo "<h3>" . get_field('home_introduction_titre-liste-1') . "</h3>";
            echo "<ul class='home--third__ul'>";
            foreach(get_field('home_introduction_liste-1') as $li):
              echo "<li><em>".$li['home_introduction_liste-1_texte'] . "</em></li>";
            endforeach;
            echo "</ul>";
          ?>
        </div>
        <div class="home--third">
          <?php 
            echo "<h3>" . get_field('home_introduction_titre-liste-2') . "</h3>";
            echo "<ul class='home--third__ul'>";
            foreach(get_field('home_introduction_liste-2') as $li):
              echo "<li><em>".$li['home_introduction_liste-2_texte'] . "</em></li>";
            endforeach;
            echo "</ul>";
          ?>
        </div>
      </div>
      <?php
      // Big text
      echo "<h2 class='home--grand-texte'>" . get_field('home_introduction_grand-texte') . "</h2 class='home--grand-texte'>";

      // Sectors block
      ?>
      <div class="home--secteur">
        <?php
          // Sectors title
          echo "<h2 class='home--secteur__h2'>" . get_field('home_secteurs_titre') . "</h2>";
          // Sectors text
          echo "<em>" . get_field('home_secteurs_texte') . "</em>";
              
          // Display sectors
        ?>
        <section class="home--secteur--list home--flex">
          <article class="home--secteur--entreprises specific">
            <div class='img_image'></div>
            <h3>Image <em>(14)</em></h3>
          </article>
          <article class="home--secteur--entreprises specific">
            <div class='img_ar_vr'></div>
            <h3>AR / VR <em>(5)</em></h3>
          </article>
          <article class="home--secteur--entreprises specific">
            <div class='img_son'></div>
            <h3>Son <em>(8)</em></h3>
          </article>
          <article class="home--secteur--entreprises specific">
            <div class='img_digital'></div>
            <h3>Digital <em>(23)</em></h3>
          </article>
          <article class="home--secteur--entreprises specific">
            <div class='img_gaming'></div>
            <h3>Gaming <em>(23)</em></h3>
          </article>
          <article class="home--secteur--entreprises all">
            <div class='img_all_companies'></div>
            <p>Voir toutes les entreprises</p>
          </article>
        </section>
      </div>
      <div class="home--formations home--flex">            
        <?php
          $image_src = get_field('home_formations_image')["sizes"]["large"];
          if( $image_src ): 
        ?>
        <div class='home--formations__image'>
          <img alt='' src='<?= $image_src ?>'/>
        </div>
        <?php endif; ?>

        <div class='home--formations--content'>
          <div class="home--shrink">
            <h2 class="h2_size4"><?= get_field('home_formations_titre'); ?></h2>
            <h4><?= get_field('home_formations_intro'); ?></h4>
            <?= get_field('home_formations_texte');  // Wysiwyg Editor, give it's own html content ?>
          </div>
      
          <div class='home--flex'>
            <? // List 1 ?>
            <ul class='home--third__ul'>
              <?php foreach(get_field('home_formations_liste-1') as $li): ?>
                <li><em> <?= $li['home_formations_liste-1_texte'] ?> </em></li>
              <?php endforeach; ?>
            </ul>

            <? // List 2 ?>
            <ul class='home--third__ul'>
              <?php foreach(get_field('home_formations_liste-2') as $li): ?>
                <li><em> <?= $li['home_formations_liste-2_texte'] ?> </em></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php 
            // Exteral link updatable for the page. Not displayed if link empty
            $additional_link = get_field('home_formations_lien');
            if($additional_link["url"]): 
          ?>
          <a href="<?= $additional_link['url'] ?>" target="<?= $additional_link["target"] ?>">
            <button><?= $additional_link["title"] ?? $additional_link['url'] ?></button>
          </a>
          <?php endif; ?>
        </div>
      </div>
      <div class="home--entreprises">
        <br>
        <h3>Les entreprises</h3>
        <br>
        <ul>
          <?php 
          /**
           * Requête query pour récupérer les noms des entreprises
           * https://capitainewp.io/formations/developper-theme-wordpress/wp-query/
           */
          // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
          $args = array(
            'post_type' => 'entreprise',
            'posts_per_page' => 999,
            'order' => 'ASC',
          );

          // 2. On exécute la WP Query
          $my_query = new WP_Query( $args );

          // 3. On lance la boucle !
          if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
            echo "<li>";
              the_title();
            echo "</li>";
          endwhile;
          endif;

          // 4. On réinitialise à la requête principale (important)
          wp_reset_postdata();
          ?>
        </ul>
      </div>
      <?php
        // Display array of meta (debbug)
        // or http://127.0.0.1/wp-json/acf/v3/pages/9
        /* echo "<pre>";
        print_r($post_meta);
        echo "</pre>"; */        
      ?>   
    </section>     
	<?php endwhile; endif; ?> 
  
<?php get_footer(); ?>
