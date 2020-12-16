<!--Afficher un article-->

<?php
get_header();
?>

<div class="blog-img-on-top">
<img src="<?php bloginfo('template_url') ?>/images/blog-img-on-top.jpg" alt="no thumbnail">

<div class="rectangle-rouge"></div>

</div>

<div class="rectangle-blanc-titre">
<?php if(have_posts()): ?>
    <?php while (have_posts())  : the_post(); ?>
        <?php if(!is_sticky()) : ?>
                    <div>
                        <div>
                            <h2 class="titre"><?php the_title() ?></h2>
                        </div>
                        <div>
                            <div class="sous-titre"><?php the_date(); ?> par <a href="<?php echo get_permalink(55)?>?auteur=<?php the_author() ?>"><?php the_author() ?></a></div>
                        </div>
                    </div>
</div>

<div class="rectangle-blanc-article">
    <?php the_content() ?>
</div>
        <?php endif ?>
    <?php endwhile; ?>
<?php endif ?>


<?php comments_template(); ?>



    <?php

get_footer();
