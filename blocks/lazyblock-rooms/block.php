<?php
// Перебор массива для вывода id по порядку добавления
?>

    <div class="rooms">
        <div class="container rooms-container">

            <h1 class="rooms__title">
                Номера и цены
            </h1>

            <div class="rooms-wrap">
                <div class="swiper Tarrifs">

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
        </div>

    </div>
    </div>

<?php ?>
