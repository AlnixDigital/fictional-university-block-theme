<?php
function relatedPostHTML($id)
{
    $postAboutThisProf = new WP_Query(array(
        'post_per_page' => -1,
        'post_type' => 'post',
        'meta_query' => array(
            array(
                'key' => 'featuredprofessor',
                'compare' => '=',
                'value' => $id
            )
        )
    ));

    ob_start();

    if ($postAboutThisProf->found_posts) { ?>
        <p><?php the_title(); ?> is mentioned in the following posts:</p>
        <ul>
            <?php
            while ($postAboutThisProf->have_posts()) {
                $postAboutThisProf->the_post(); ?>

                <li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>

            <?php }

            ?>
        </ul>
<?php }

    wp_reset_postdata();
    return ob_get_clean();
}
