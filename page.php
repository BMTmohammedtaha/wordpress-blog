<?php get_header(); ?>
<div class="page_container">
<?php while (have_posts()) : the_post();  ?>
        <h1>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <p>
        <?php the_content(''); ?>   
       </p>
    <?php endwhile; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>