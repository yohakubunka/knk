<div class="works page-width">
    <div id="category-box">
        <div class="category">
            <p class="sm-ttl">カテゴリー</p>
            <ul class="category__flex">
                <?php
                $terms = get_terms('archive_category');
                foreach ($terms as $term) {
                    echo '<li><a class="catego-btn catego-btn-txt" href="' . get_term_link($term->slug, 'archive_category') . '">' . $term->name . '</a></li>';
                }
                ?>
            </ul>
        </div>
        <div class="archive">
            <p class="sm-ttl">アーカイブ</p>
            <ul class="monthly-list">
                <?php wp_get_archives('type=yearly&post_type=archive_intro'); ?>
            </ul>
        </div>
    </div>

    <div class="works__content">
        <div class="works__content--flex">
            <?php
            if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <article class="works-box">
                        <a class="img-wrap" href="<?php the_permalink(); ?>">
                            <?php if (!has_post_thumbnail()) : ?>
                                <div class="works-pic">
                                    <img src="<?= get_template_directory_uri() ?>/images/dummy/dummy01.jpg" alt="ダミー画像">
                                </div>
                            <?php else : ?>
                                <!-- <div class="author-img" style="background-image: url(<?= wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>);">
                                </div> -->
                                <div class="works-pic">
                                    <?php the_post_thumbnail(array(362, 362)); ?>
                                </div>

                            <?php endif; ?>
                            <!-- 画像URLを取得する場合は以下のコードを使用して下さい。 -->
                            <!-- <img src="<?= wp_get_attachment_url(get_post_thumbnail_id($post_id));
                                            ?>" alt=""> -->
                            <div class="works-title">
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
        </div>
    </div>

    <?php get_template_part('template-parts/pagination'); ?>
</div>