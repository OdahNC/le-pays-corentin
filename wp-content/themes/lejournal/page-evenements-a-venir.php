<?php get_header() ?>

<section class="row gap-5 justify-content-center text-center">
    <!-- wp:heading {"textAlign":"center","level":1} -->
    <h1 class="wp-block-heading has-text-align-center">Evènements a venir</h1>
    <!-- /wp:heading -->

    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'category_name' => 'evenements'
    );

    query_posts($args);
    ?>

    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php the_title() ?>
                    </h5>
                    <hr id="title-content-separator">
                    <p style="font-size: 13px;">Ecrit par :
                        <?php the_author() ?> - le
                        <?php echo get_the_date() ?>
                    </p>
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto; width:']) ?>
                    <p class="card-text">
                        <?php the_excerpt() ?>
                    </p>
                    <h6 class="card-subtitle mb-2 text-muted text-start">
                        <?php the_category() ?>
                    </h6>
                    <a href="<?php the_permalink() ?>" class="btn btn-dark">Lire la suite</a>
                </div>
            </div>
        <?php endwhile ?>
    <?php endif ?>
    <p class="d-flex justify-content-center"><a href="http://localhost/le-pays-corentin/evenements-a-venir/"
            style="text-decoration: none; color: white; border: 2px solid black; background-color: #292b2c; padding: 10px; border-radius: 8px">Voir
            plus</a></p>
    <?php wp_reset_query() ?>
</section>

<?php get_footer() ?>