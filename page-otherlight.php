<?php get_header(); ?>

<?php get_template_part('template-parts/mainvisual'); ?>
<div class="page-width">
    <?php get_template_part('template-parts/breadcrumb'); ?>
</div>

<main id="otherlight">
    <section class="ordermade">
        <div class="w-style_secod">
            <div class="ttl-content">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>オ</span>ーダーメイド</h2>
                </div>
            </div>
            <div class="flex-content">
                <div class="flex-content__box">
                    <?php for ($i = 0; $i <= 2; $i++) : ?>
                        <article class="flex-content__box--item">
                            <img class="icon-img" src="<?= get_field('otherlight_order_icon_0' . $i) ?>" alt="アイコン">
                            <p class="sm-ttl"><?= nl2br(get_field('otherlight_order_text_0' . $i)) ?></p>
                        </article>
                    <?php endfor; ?>
                </div>
                <div class="flex-content__txt">
                    <p class="sm-ttl"><?= get_field('otherlight_order_title') ?></p>
                    <p class="txt"><?= get_field('otherlight_order_subtext') ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="recruit">
        <div class="w-style_first w-reserve_first">
            <div class="ttl-content ttl-content_reserve">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>採</span>用事例</h2>
                </div>
            </div>
            <div class="common-flex flex-reserve">
                <div class="common-flex__txt txt-reserve">
                    <p class="common-title sm-ttl"><?= get_field('otherlight_case_title') ?></p>
                    <p class="common-text txt"><?= get_field('otherlight_case_subtext') ?></p>
                </div>
                <div class="common-flex__img img-reserve">
                    <img src="<?= get_field('otherlight_case_image') ?>" alt="採用情報写真">
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="page-width">
            <h3 class="sm-ttl">KnKのサービス</h3>
            <div class="service__flex">
                <div class="service__flex--streetlight">
                    <p class="service-ttl sm-ttl white">街路灯の制作と設置</p>
                    <a class="btn_w btn-txt_w" href="<?= home_url() ?>/streetlight">詳しく見る</a>
                </div>
                <div class="service__flex--ledlight">
                    <p class="service-ttl sm-ttl white">LED照明の販売</p>
                    <a class="btn_w btn-txt_w" href="<?= home_url() ?>/ledlight">詳しく見る</a>
                </div>
            </div>
    </section>
</main>

<?php get_template_part('template-parts/footer-contact'); ?>
<?php get_footer(); ?>