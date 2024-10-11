<?php get_header(); // Include the header ?>

<div id="main-content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); // Post title ?></h1>

            <div class="post-content">
                <?php the_content(); // Full content of the post ?>
            </div>

            <div class="post-meta">
                <p>Posted on: <?php the_date(); // Post date ?></p>
                <p>Author: <?php the_author(); // Post author ?></p>
            </div>

        <?php endwhile;
    endif;
    ?>
</div>

<?php get_footer(); // Include the footer ?>
<style>
    
    /* Styling for the single post page */
#main-content {
    width: 90%;
    margin: 0 auto;
    padding: 20px;
}

.post-content {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.post-meta {
    margin-top: 30px;
    font-size: 14px;
    color: #777;
}

</style>