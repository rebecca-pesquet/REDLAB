<?php
/*
Template Name: Auteur page
*/
?>

<?php 
// 1. On définit les arguments pour définir ce que l'on souhaite récupérer
$args = array(
    'post_type' => 'post',
    'author_name' => $_GET["auteur"], //chercher le champ de base de donnée des auteurs à aller chercher dans la base de donnée
    'posts_per_page' => 5,
);

// 2. On exécute la WP Query
$my_query = new WP_Query( $args );

// 3. On lance la boucle !
if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
    
    the_title();
    the_content();
    the_post_thumbnail();

endwhile;
endif;

// 4. On réinitialise à la requête principale (important)
wp_reset_postdata();