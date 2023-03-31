<?php get_header() ?>

<h1>
    <?php the_title() ?>
</h1>

<div id="auteur-et-date" class="row">
    <p>Article rédigé le :
        <span style="text-decoration: underline">
            <?= get_the_date() ?>
        </span>
    </p>
</div>

<article>
    <span>
        <?php the_content();
        ?>
    </span>
</article>

<div>

</div>

<?php get_footer() ?>