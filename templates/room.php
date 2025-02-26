<article class="rooms-card">

    <?php $url = wp_get_attachment_url(get_post_thumbnail_id()); // Получаем url миниатюры фуршетного меню
    $image_id = attachment_url_to_postid($url); // Получаем id миниатюры фуршетного меню
    ?>

    <?= wp_get_attachment_image(
        $image_id,
        'full',
        null,
        ['class' => 'rooms-card__bg img-responsive', 'itemprop' => 'image']
    ) ?>

    <div class="rooms-card__content">
        <a class="rooms-card__title" href="#" target="_blank"><?php echo the_title(); ?> </a>

    </div>
</article>
