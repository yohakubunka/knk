<?php get_header(); ?>
<?php get_template_part('template-parts/mainvisual'); ?>
<div class="page-width">
    <?php get_template_part('template-parts/breadcrumb'); ?>
</div>
<main id="streetlight">
    <section class="construction">
        <div class="w-style_secod">
            <div class="ttl-content">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>街</span>路灯工事</h2>
                </div>
            </div>
            <div class="flex-content">
                <div class="flex-content__box">
                    <?php for ($i = 0; $i <= 5; $i++) : ?>
                        <article class="flex-content__box--item">
                            <img class="icon-img" src="<?= get_field('streetlight_const_icon_0' . $i) ?>" alt="">
                            <p class="sm-ttl"><?= nl2br(get_field('streetlight_const_text_0' . $i)) ?></p>
                        </article>
                    <?php endfor; ?>
                </div>
                <div class="flex-content__txt">
                    <p class="sm-ttl"><?= get_field('streetlight_const_title') ?></p>
                    <p><?= get_field('streetlight_const_subtext') ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="case">
        <div class="w-style_secod w-reserve_second">
            <div class="ttl-content ttl-content_reserve">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>採</span>用事例</h2>
                </div>
            </div>
            <div class="flex-content flex-content-reserve">
                <div class="flex-content__txt">
                    <p class="sm-ttl"><?= get_field('streetlight_case_title') ?></p>
                    <p><?= get_field('streetlight_case_subtext') ?></p>
                </div>
                <div class="flex-content__box box-reserve">
                    <?php for ($i = 0; $i <= 5; $i++) : ?>
                        <article class="flex-content__box--item">
                            <img class="icon-img" src="<?= get_field('streetlight_case_icon_0' . $i) ?>" alt="">
                            <p class="sm-ttl"><?= nl2br(get_field('streetlight_case_text_0' . $i)) ?></p>
                        </article>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="flow">
        <div class="w-style_first">
            <div class="ttl-content">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>施</span>工の流れ</h2>
                </div>
            </div>
            <div class="common-flex">
                <div class="common-flex__img">
                    <img src="<?= get_field('streetlight_flow_image') ?>" alt="">
                </div>
                <div class="common-flex__txt">
                    <?php for ($i = 1; $i <= 6; $i++) : ?>
                        <div class="flow-flex">
                            <p class="number sm-ttl light-blue">0<?= $i ?></p>
                            <p class="flow-ttl sm-ttl"><?= get_field('streetlight_flow_text_0' . $i) ?></p>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>




    <section class="works-slide">
        <div class="w-style_first w-reserve_first">
            <div class="title-flex slide-title">
                <div class="ttl-content ttl-content_reserve">
                    <div class="ttl-animation js-trigger">
                        <h2 class="sec-ttl ttl_bg"><span>関</span>連する<br class="sec-ttl_br">実績</h2>
                    </div>
                </div>
                <a class="btn btn-txt" href="<?= home_url() ?>/archive_category/街路灯の制作・設置">一覧を見る</a>
            </div>
            <?php
            $args = array(
                'post_type' => 'archive_intro',
                'posts_per_page' => '10',
                'orderby' => 'rand',
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'archive_category',
                        'field' => 'slug',
                        'terms' => ('街路灯の制作・設置'),
                        'operator' => 'IN'
                    )
                )
            );
            $wp_query = new WP_Query($args); ?>

            <div class="works-slide__content ">
                <div class="swiper cardSwiper ">
                    <div class="swiper-wrapper">

                        <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                <article class="swiper-slide">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (!has_post_thumbnail()) : ?>
                                            <div class="img">
                                                <img src="<?= get_template_directory_uri() ?>/images/dummy/dummy01.jpg" alt="">
                                            </div>
                                        <?php else : ?>
                                            <div class="img">
                                                <?php the_post_thumbnail('thumbnail'); ?>
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
                                        <p class="data-category--date txt light-blue"><?= get_the_time('Y/m/d') ?></p>
                                        <?php $category_terms = get_the_terms($post->ID, 'archive_category'); ?>
                                        <?php if (!empty($category_terms)) : ?>
                                            <ul>
                                                <li class="data-category--category">
                                                    <a class="catego-btn catego-btn-txt" href="<?= esc_url(get_term_link($category_terms[0]->term_id, 'archive_category')) ?>"><?= $category_terms[0]->name ?></a>
                                                </li>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </article>

                            <?php endwhile; ?>
                        <?php else : //記事が無い場合
                        ?>
                            <p class="txt">準備中</p>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <div class="swiper-pagination"></div>

                </div>
            </div>
        </div>
    </section>


    <section class="service">
        <div class="page-width">
            <h3 class="sm-ttl">KnKのサービス</h3>
            <div class="service__flex">
                <div class="service__flex--ledlight">
                    <p class="service-ttl sm-ttl white">LED照明の販売</p>
                    <a class="btn_w btn-txt_w" href="<?= home_url() ?>/ledlight">詳しく見る</a>
                </div>
                <div class="service__flex--otherlight">
                    <p class="service-ttl sm-ttl white">その他照明に関する事業</p>
                    <a class="btn_w btn-txt_w" href="<?= home_url() ?>/otherlight">詳しく見る</a>
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
<?php get_template_part('template-parts/footer-contact'); ?>
<?php get_footer(); ?>