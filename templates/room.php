<?php // Добавлять reversed класс, если номер забронирован
?>
<div class="rooms-card <?php echo (!empty(get_field("rooms-reversed")) ? 'rooms-card--reversed' : ''); ?>">

    <?php
    // Если поставлена галочка вывода мотиватора, то выводить его
    if (get_field("rooms-motivator") === true) :
    ?>
        <div class="rooms-card__motivator">
            <div class="rooms-card__motivator-content">Гарантия лучшей цены!</div>
            <div class="rooms-card__motivator-badge">
                <img src="<?= get_template_directory_uri() ?>/sources/img/icons/icon-discount.svg" width="36" height="30" alt="icon-discount">
            </div>
        </div>
    <?php endif; ?>

    <?php $url = wp_get_attachment_url(get_post_thumbnail_id()); // Получаем url миниатюры поста комнаты
    $image_id = attachment_url_to_postid($url); // Получаем id миниатюры поста комнаты
    // Выводим миниатюру:
    ?>
    <div class="rooms-card__bg-wrap" itemscope itemtype="https://schema.org/ImageObject">
        <?= wp_get_attachment_image(
            $image_id,
            'full',
            null,
            ['class' => 'rooms-card__bg img-responsive', 'itemprop' => 'image']
        ) ?>
    </div>

    <?php // Добавлять reversed класс, если номер забронирован
    ?>
    <div class="rooms-card__content <?php echo (!empty(get_field("rooms-reversed")) ? 'rooms-card__content--reversed' : ''); ?>">

        <?php
        // Если задан заголовок, то вывести
        if (!empty(get_field("rooms-title"))) : ?>
            <a class="rooms-card__title rooms-card__item" href="<?php echo esc_url(get_permalink()); ?>" target="_blank"><?php echo esc_html(get_field("rooms-title")); ?> </a>
        <?php
        // Иначе вывести заголовок поста
        else: ?>
            <a class="rooms-card__title rooms-card__item" href="<?php echo esc_url(get_permalink()); ?>" target="_blank"><?php echo the_title(); ?> </a>
        <?php endif; ?>

        <?php
        // Если задано описание, то вывести
        if (!empty(get_field("rooms-desc"))) : ?>
            <p class="rooms-card__desc rooms-card__item"><?php echo get_field("rooms-desc"); ?> </p>
        <?php endif; ?>

        <?php
        // Если задана цена, то вывести блок с информацией
        if (!empty(get_field("rooms-price"))) :
        ?>
            <div class="rooms-card__info">
                <div class="rooms-card__info--payment">
                    <div class="info">Номер зарезервирован</div>
                    <div class="check-pay">
                        Перейти к
                        <a class="pay" href="#payment" target="_blank">оплате</a>
                    </div>
                </div>
                <div class=" rooms-card__info--price">
                    <span class="rooms-card__info--price--desc">Цена за сутки</span>
                    <div class="rooms-card__info--price--value">
                        <span class="from">от</span>
                        <span class="number"><?php echo esc_html(get_field("rooms-price")); ?></span>
                        <span class="val">₽</span>
                    </div>
                </div>

                <button class="btn rooms-card__btn">Забронировать</button>

            </div>
        <?php endif; ?>

    </div>
</div>
