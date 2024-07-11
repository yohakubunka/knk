<?php get_header(); ?>
<?php get_template_part('template-parts/mainvisual'); ?>
<div class="page-width">
    <?php get_template_part('template-parts/breadcrumb'); ?>
</div>
<section id="single">
    <div class="page-width">
        <div class="works-wrap">
            <article class="single-content">
                <div class="single-content__title">
                    <p class="sm-ttl"><?php the_title(); ?></p>
                </div>
                <div class="data-category">
                    <p class="data-category--date txt light-blue"><?= get_the_time('Y/m/d') ?></p>
                    <?php // 投稿に紐づくタームの一覧を表示
                    $taxonomy_slug = 'archive_category'; // 任意のタクソノミースラッグを指定
                    $category_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タームの情報を取得
                    $term_name = array();

                    if (!empty($category_terms)) { // 変数が空でなければ true
                        if (!is_wp_error($category_terms)) { // 変数が WordPress Error でなければ true
                            echo '<ul class="multiple-category">';
                            foreach ($category_terms as $category_term) { // タームのループを開始
                                array_push($term_name,  $category_term->name);
                                echo '<li class="category"><a class="catego-btn catego-btn-txt" href="' . get_term_link($category_term->slug, $taxonomy_slug) . '">' . $category_term->name . '</a></li>'; // タームをリンク付きで表示
                            } // ループの終了
                            echo '</ul>';
                        }
                    }
                    ?>
                </div>

                <div class="single-content__text">

                    <div class="single-content__text--img">
                        <img src="<?= get_field('archive_images') ?>" alt="">
                    </div>

                    <?php
                    $field1 = get_field_object('archive_client');
                    $field2 = get_field_object('archive_content');
                    $field3 = get_field_object('archive_purpose');
                    ?>

                    <div class="achievements">
                        <div class="achievements-box">
                            <?php if (!empty(get_post_meta($post->ID, 'archive_client', true))) : ?>
                                <p class="label txt light-blue"><?= $field1["label"] ?></p>
                                <p class="txt"><?= get_field('archive_client') ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="achievements-box">
                            <?php if (!empty(get_post_meta($post->ID, 'archive_content', true))) : ?>
                                <p class="label txt light-blue"><?= $field2["label"] ?></p>
                                <p class="txt"><?= get_field('archive_content') ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="achievements-box">
                            <?php if (!empty(get_post_meta($post->ID, 'archive_purpose', true))) : ?>
                                <p class="label txt light-blue"><?= $field3["label"] ?></p>
                                <p class="txt"><?= get_field('archive_purpose') ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?= the_content(); ?>
                </div>

                <div class="single-content__page">
                    <?php previous_post_link('%link', '<i class="fas fa-chevron-left"></i>'); ?>
                    <a href="<?= home_url("/archive_intro") ?>" class="tolist btn btn-txt">一覧に戻る</a>
                    <?php next_post_link('%link', '<i class="fas fa-chevron-right"></i>'); ?>
                </div>
            </article>
            <?php get_template_part('template-parts/tmp-archivesidebar'); ?>
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
                    'terms' => $term_name,
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
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

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