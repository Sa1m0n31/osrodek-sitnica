<?php
get_header();
?>

<!-- PAGE -->
<div class="section section--page w">
    <h1 class="pageHeader">
        Wynajem domków letniskowych i pole kempingowe
    </h1>

    <div class="rooms">
        <?php
        $category = get_category_by_slug('domki');
        $category_id = $category->term_id;
        $i = 1;

        $args = array(
            'cat' => $category_id,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();

                $image_id = get_post_thumbnail_id(); // Pobranie ID zdjęcia wyróżniającego
                $image_url = wp_get_attachment_image_src($image_id, 'full'); // Pobranie pełnego URL obrazka
                $image_src = $image_url[0];

                ?>
                    <a class="rooms__item" href="<?php echo get_permalink(); ?>">
                        <img class="img" src="<?php echo $image_src; ?>" alt="domek" />

                        <div class="rooms__item__content">
                            <h2 class="rooms__item__content__header">
                                <?php echo the_title(); ?>
                            </h2>
                            <h3 class="rooms__item__content__text">
                                <?php echo get_field('wyposazenie'); ?>
                            </h3>
                            <span class="rooms__item__content__btn center">
                                Więcej informacji
                              </span>
                        </div>
                    </a>
                <?php
                $i++;
            }
        }

        wp_reset_postdata();
        ?>
    </div>
</div>

<?php
get_footer();
?>
