<?php
// Перебор массива для вывода id по порядку добавления
?>

<section class="rooms">
    <div class="container rooms-container">

        <h1 class="rooms__title">
            Номера и цены
        </h1>

        <div class="rooms__content">

            <?php if (!empty($attributes['rooms'])) : ?>

                <?php
                $id = array_map(function ($item) {
                    return url_to_postid($item['rooms-url']);
                }, $attributes['rooms']);

                $args = array(
                    'numberposts' => -1,
                    'post_type' => 'rooms',
                    'post__in' => $id,        // Используем правильный параметр для ID
                    'orderby' => 'post__in'   // Чтобы сохранить порядок
                );

                $posts = get_posts($args);
                global $post;
                ?>

            <?php foreach ($posts as $post) : setup_postdata($post);

                    get_template_part('templates/room');

                endforeach;
                wp_reset_postdata(); // ВАЖНО вернуть global $post обратно
            endif;
            ?>

        </div>
    </div>

</section>
</div>

<?php ?>
