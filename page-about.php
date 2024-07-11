<?php get_header(); ?>
<?php $theme_options = get_option('theme_option_name'); ?>
<?php get_template_part('template-parts/mainvisual'); ?>
<div class="page-width">
    <?php get_template_part('template-parts/breadcrumb'); ?>
</div>
<main id="about">
    <section class="philosophy">
        <div class="w-style_secod">
            <div class="ttl-content">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>K</span>nKの<br class="sec-ttl_br">企業理念</h2>
                </div>
            </div>
            <div class="flex-content">
                <div class="flex-content__box">
                    <?php for ($i = 0; $i <= 2; $i++) : ?>
                        <article class="flex-content__box--item">
                            <img class="icon-img" src="<?= get_field('about_philosophy_icon_0' . $i) ?>" alt="">
                            <p class="sm-ttl"><?= nl2br(get_field('about_philosophy_text_0' . $i)) ?></p>
                        </article>
                    <?php endfor; ?>
                </div>
                <div class="flex-content__txt">
                    <p class="sm-ttl"><?= get_field('about_philosophy_text') ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="sdgs">
        <div class="w-style_secod w-reserve_second">
            <div class="ttl-content ttl-content_reserve">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>S</span>DGsへの<br class="sec-ttl_br">取り組み</h2>
                </div>
            </div>
            <div class="flex-content flex-content-reserve">
                <div class="flex-content__txt">
                    <p class="sm-ttl"><?= nl2br(get_field('about_sdgs_icon_title'))  ?></p>
                </div>
                <div class="flex-content__box box-reserve">
                    <?php for ($i = 0; $i <= 7; $i++) : ?>
                        <div class="sdgs-img">
                            <img src="<?= get_field('about_sdgs_icon_icon_0' . $i) ?>" alt="">
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="overview">
        <div class="w-style_first">
            <div class="ttl-content">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>会</span>社概要</h2>
                </div>
            </div>
            <div class="common-flex">
                <div class="common-flex__img">
                    <img src="<?= get_field('about_overview_image') ?>" alt="">
                </div>
                <div class="common-flex__txt">
                    <div class="overview-box">
                        <p class="company-label mini-txt light-blue">会社名</p>
                        <p class="txt"><?= $theme_options['op_0']; ?></p>
                    </div>
                    <div class="overview-box address">
                        <p class="company-label mini-txt light-blue">所在地</p>
                        <p class="txt"><?= $theme_options['op_1']; ?><br><a target="_blank" href="https://www.google.co.jp/maps/place/<?= $theme_options['op_1'] . " " .  $theme_options['op_2'] ?> "><?= $theme_options['op_2']; ?><img src="<?= get_template_directory_uri() ?>/images/about/map_icon.svg" width="18px" height="24px" alt="マップアイコン"></a></p>
                    </div>
                    <div class="overview-box">
                        <p class="company-label mini-txt light-blue">電話番号</p>
                        <p class="txt"><?= $theme_options['op_3']; ?></p>
                    </div>
                    <div class="overview-box">
                        <p class="company-label mini-txt light-blue">FAX</p>
                        <p class="txt"><?= $theme_options['op_4']; ?></p>
                    </div>
                    <div class="overview-box">
                        <p class="company-label mini-txt light-blue">メール</p>
                        <p class="txt"><?= $theme_options['op_5']; ?></p>
                    </div>
                    <div class="overview-box">
                        <p class="company-label mini-txt light-blue">資本金</p>
                        <p class="txt"><?= $theme_options['op_6']; ?></p>
                    </div>
                    <div class="overview-box">
                        <p class="company-label mini-txt light-blue">代表者</p>
                        <p class="txt"><?= $theme_options['op_7']; ?></p>
                    </div>
                    <div class="overview-box">
                        <p class="company-label mini-txt light-blue">業務内容</p>
                        <p class="txt">
                            <?php $business_text = scf::get('about_business'); ?>
                            <?= nl2br($business_text); ?>
                        </p>
                    </div>
                    <div class="overview-box">
                        <p class="company-label mini-txt light-blue">沿革</p>
                        <ul>
                            <?php $history = SCF::get('about_history');
                            foreach ($history as $fields) : ?>
                                <li>
                                    <p class="txt"><?= $fields['history_year'] ?></p>
                                    <p class="txt"><?= $fields['history_text'] ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/footer-contact'); ?>
<?php get_footer(); ?>