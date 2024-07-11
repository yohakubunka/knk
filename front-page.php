<?php get_header(); ?>

<?php get_template_part('template-parts/loading'); ?>
<?php get_template_part('template-parts/mainvisual'); ?>
<main id="front">
    <section class="illumination-charm">
        <div class="page-width">
            <div class="illumination-charm__content">
                <h2 class="sec-ttl white">LED照明の魅力</h2>
                <div class="illumination-charm__content--flex">
                    <div class="charm-item">
                        <?php get_template_part('images/svg/sort-amount-down-solid') ?>
                        <p class="sm-ttl white">省エネ</p>
                    </div>

                    <div class="charm-item">
                        <?php get_template_part('images/svg/history-solid') ?>
                        <p class="sm-ttl white">超寿命</p>
                    </div>

                    <div class="charm-item">
                        <?php get_template_part('images/svg/thermometer-half-solid') ?>
                        <p class="sm-ttl white">低発熱</p>
                    </div>

                    <div class="charm-item">
                        <?php get_template_part('images/svg/sun-solid') ?>
                        <p class="sm-ttl white">紫外線削減</p>
                    </div>

                    <div class="charm-item">
                        <?php get_template_part('images/svg/lightbulb-solid') ?>
                        <p class="sm-ttl white">瞬時点灯</p>
                    </div>

                    <div class="charm-item">
                        <?php get_template_part('images/svg/seedling-solid') ?>
                        <p class="sm-ttl white">環境改善</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="illumination-sale">
        <div class="w-style_first">
            <div class="ttl-content">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>L</span>ED照明の<br class="sec-ttl_br">販売</h2>
                </div>
            </div>
            <div class="common-flex">
                <div class="common-flex__img">
                    <img src="<?= get_template_directory_uri() ?>/images/front/top_sec01.jpg" alt="電球の写真">
                </div>
                <div class="common-flex__txt">
                    <p class="common-title sm-ttl"><?= get_theme_mod('top_ledsell_title') ?></p>
                    <p class="common-text txt"><?= get_theme_mod('top_ledsell_text') ?></p>
                    <a class="btn btn-txt" href="<?= home_url() ?>/ledlight">詳しく見る</a>
                </div>
            </div>
        </div>
    </section>

    <section class="illumination-work">
        <div class="w-style_first w-reserve_first">
            <div class="ttl-content ttl-content_reserve">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>街</span>路灯の<br class="sec-ttl_br">制作と設置</h2>
                </div>
            </div>
            <div class="common-flex flex-reserve">
                <div class="common-flex__txt txt-reserve">
                    <p class="common-title sm-ttl"><?= get_theme_mod('top_streetlight_title') ?></p>
                    <p class="common-text"><?= get_theme_mod('top_streetlight_text') ?></p>
                    <a class="btn btn-txt" href="<?= home_url() ?>/streetlight">詳しく見る</a>
                </div>
                <div class="common-flex__img img-reserve">
                    <img src="<?= get_template_directory_uri() ?>/images/front/top_sec03.jpg" alt="電球の写真">
                </div>
            </div>
        </div>
    </section>

    <section class="illumination-other">
        <div class="w-style_first">
            <div class="ttl-content">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>そ</span>の他照明に<br class="sec-ttl_br">関する事業</h2>
                </div>
            </div>
            <div class="common-flex">
                <div class="common-flex__img">
                    <img src="<?= get_template_directory_uri() ?>/images/front/top_sec02.jpg" alt="電球の写真">
                </div>
                <div class="common-flex__txt">
                    <p class="common-title sm-ttl"><?= get_theme_mod('top_otherwork_title') ?></p>
                    <p class="common-text"><?= get_theme_mod('top_otherwork_text') ?></p>
                    <a class="btn btn-txt" href="<?= home_url() ?>/otherlight">詳しく見る</a>
                </div>
            </div>
        </div>
    </section>

    <section class="works-slide">
        <div class="w-style_first w-reserve_first">
            <div class="title-flex slide-title">
                <div class="ttl-content ttl-content_reserve">
                    <div class="ttl-animation js-trigger">
                        <h2 class="sec-ttl ttl_bg"><span>実</span>績紹介</h2>
                    </div>
                </div>
                <a class="btn btn-txt" href="<?= home_url() ?>/archive_intro">一覧を見る</a>
            </div>
            <?php
            $args = array(
                'post_type' => 'archive_intro',
                'posts_per_page' => '10',
                'orderby' => 'rand',

            );
            $wp_query = new WP_Query($args); ?>

            <div class="works-slide__content ">
                <div class="swiper cardSwiper ">
                    <div class="swiper-wrapper">

                        <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                <article class="works-slide__content--article swiper-slide">
                                    <div class="work-item">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (!has_post_thumbnail()) : ?>
                                                <div class="img">
                                                    <img src="<?= get_template_directory_uri() ?>/images/dummy/dummy01.jpg" width="362px" height="362px" alt="ダミー画像">
                                                </div>
                                            <?php else : ?>
                                                <!-- <div class="img">
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            </div> -->
                                                <div class="img-wrap">
                                                    <div class="img" style="background-image: url(<?= wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>); ">
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <!-- 画像URLを取得する場合は以下のコードを使用して下さい。 -->
                                            <!-- <img src="<?php //echo wp_get_attachment_url(get_post_thumbnail_id($post_id));
                                                            ?>" alt=""> -->
                                            <div class="article-title">
                                                <p class="mini-txt"><?php the_title(); ?></p>
                                            </div>
                                        </a>
                                        <div class="data-category">
                                            <p class="data-category--date txt light-blue"><?= get_the_date(); ?></p>
                                            <?php $category_terms = get_the_terms($post->ID, 'archive_category'); ?>
                                            <?php if (!empty($category_terms)) : ?>
                                                <ul>
                                                    <li class="data-category--category">
                                                        <a class="catego-btn catego-btn-txt" href="<?= esc_url(get_term_link($category_terms[0]->term_id, 'archive_category')) ?>"><?= $category_terms[0]->name ?></a>
                                                    </li>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </article>

                            <?php endwhile; ?>
                        <?php else : //記事が無い場合
                        ?>
                            <p class="txt">準備中</p>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                    </div>
                    <div class="swiper-pagination">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="front-news">
        <div class="page-width">
            <div class="front-news__content">
                <div class="front-news__content--left">
                    <h3 class="sm-ttl white">KnK株式会社からの<br class="brmd">お知らせ</h3>
                    <a class="btn_w btn-txt_w" href="<?= home_url() ?>/news">一覧を見る</a>
                </div>
                <div class="front-news__content--right">
                    <div class="front-news-area">
                        <?php
                        $args = array(
                            'posts_per_page' => 3 // 表示件数
                        );
                        $posts = get_posts($args);
                        foreach ($posts as $post) : // ループの開始
                            setup_postdata($post); // 記事データの取得
                        ?>
                            <article class="front-news-area__row">
                                <a class="front-news-area__row--title" href="<?php the_permalink(); ?>">
                                    <p class="mini-txt white"><?= get_the_title(); ?></p>
                                </a>
                                <div class="data-category">
                                    <p class="front-news-area__row--date data-category--date txt white"><?= get_the_date(); ?></p>
                                    <?php $category = get_the_category(); ?>
                                    <?php if ($category[0]) : ?>
                                        <div class="front-news-area__row--category data-category--category">
                                            <a class="catego-btn_w catego-btn-txt_w" href="<?= get_category_link($category[0]->term_id) ?>"><?= $category[0]->cat_name ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </article>
                        <?php
                        endforeach; // ループの終了
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    var swiper = new Swiper(".cardSwiper", {
        slidesPerView: 1,
        loopedSlides: 10,
        spaceBetween: 0,
        breakpoints: {
            540: {
                slidesPerView: 2,
            },
            767: {
                slidesPerView: 4,
            }
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
<?php get_footer(); ?>