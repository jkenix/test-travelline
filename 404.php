<?php get_header(); ?>

<div class="container main-pad-container container-404">

    <div class="row">
        <h1 style="text-align: center;">Страница не найдена! </h1>

        <img src="<?= esc_url(get_template_directory_uri()) ?>/sources/img/404-cat.gif" class="img-responsive" width="500" height="500" alt="cat-404-error">
    </div>


    <div class="row">
        <div class="col-12 mx-auto main-wrap">
            <p style="padding-top: 25px;font-size: 1.25rem; text-align: center;">Чтобы перейти в нужный раздел перейдите на <a href="/" class="txt-blue__w">главную станицу</a> или воспользуйтесь меню.</p>
        </div>
    </div>


</div>

<?php get_footer(); ?>