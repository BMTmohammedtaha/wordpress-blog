<?php get_header(); ?>
<div class="article_container">
    <?php while (have_posts()) : the_post();  ?>
            <div class="article">
                <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
                <div>
                <h2><?php the_time(); ?></h2> 
                </div>
                <p>
                <?php the_content(''); ?>  
                </p>
            </div>
    <?php endwhile; ?>        
</div>
<?php get_sidebar(); ?>
<!-- <?php comments_template(); ?> -->
<?php get_footer(); ?>