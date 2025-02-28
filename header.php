<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="utf-8">
    <title>Тестовое задание для Travelline</title>
    <meta name="description" content="Тестовое задание для Travelline, выполненное Дмитрием.">
    <meta name="author" content="https://github.com/jkenix">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= esc_url(get_template_directory_uri()) ?>/sources/img/icons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?= esc_url(get_template_directory_uri()) ?>/sources/img/icons/favicon.svg" />
    <link rel="shortcut icon" href="<?= esc_url(get_template_directory_uri()) ?>/sources/img/icons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= esc_url(get_template_directory_uri()) ?>/sources/img/icons/apple-touch-icon.png" />
    <link rel="manifest" href="<?= esc_url(get_template_directory_uri()) ?>/site.webmanifest.json" />

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <div class="wrapper">
        <?= wp_get_attachment_image(25, 'full', false, [
            'class' => 'wrapper__img img-responsive'
        ]) ?>
