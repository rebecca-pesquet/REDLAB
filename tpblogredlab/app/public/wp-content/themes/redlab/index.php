<?php
/*
Template Name: blog page
*/
?>

<?php
get_header();
?>

<div class="blog-img-on-top">
<img src="<?php bloginfo('template_url') ?>/images/blog-img-on-top.jpg" alt="no thumbnail">

<div class="rectangle-rouge"></div>

</div>

<div class="rectangle-blanc-titre">
    <h1 class="titre">Titre</h1>
    <h3 class="sous-titre">Sous-titre</h3>
</div>

<!--Pour avoir la liste des articles -->
<div class="rectangle-blanc-preview-article">
    <?php if(have_posts()): ?>
        <?php while (have_posts())  : the_post(); ?>
        <!--Alterner img a gauche puis droite -->
            <?php if(!is_sticky()) : ?>
                        <div class="article-mise-en-page <?php 
                            if($wp_query->current_post %2==0)
                                {
                                    echo "flex-reverse";
                                };
                            ?>">
        <!--Fin alternance-->
                            <div class="preview-article">
                                <h2><?php the_title() ?></h2>
                                    <div>
                                        <?php the_excerpt() ?>
                                        <a href="<?php the_permalink() ?>">En savoir plus</a>
                                    </div>
                            </div>
                                <div> 
                                    <?php the_post_thumbnail();?>
                                </div>
                        </div>
            <?php endif ?>
        <?php endwhile; ?>
    <?php endif ?>
</div>
<?php wp_get_archives();?>
<?php wp_list_categories( );?>
<?php get_search_form();?>

    <?php

get_footer();
