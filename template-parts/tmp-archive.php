<?php get_header(); ?>
<?php get_template_part('template-parts/mainvisual'); ?>

<div class="page-width">
    <?php get_template_part('template-parts/breadcrumb'); ?>
</div>

<section id="news">
    <div class="page-width">
        <div class="news-wrap">
            <div class="news-wrap__list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article>
                            <a href="<?php the_permalink(); ?>">
                                <p class="article-title"><?= get_the_title(); ?></p>
                            </a>
                            <div class="data-category">
                                <p class="data-category--date txt light-blue"><?= get_the_date(); ?></p>

                                <?php $category = get_the_category(); ?>
                                <?php if ($category[0]) : ?>
                                    <div class="front-news-area__row--category data-category--category">
                                        <a class="catego-btn catego-btn-txt" href="<?= get_category_link($category[0]->term_id) ?>"><?= $category[0]->cat_name ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php get_template_part('template-parts/pagination'); ?>

            </div>
            <?php get_template_part('template-parts/tmp-newssidebar'); ?>

        </div>
    </div>
</section>

<?php get_template_part('template-parts/footer-contact'); ?>
<?php get_footer(); ?>