<div id="side-bar">
    <div class="category">
        <p class="sm-ttl">カテゴリー</p>
        <div class="category-flex">
            <?php
            $terms = get_terms('archive_category');
            ?>
            <?php foreach ($terms as $term) : ?>
                <p class="left-text-border catego-btn catego-btn-txt">
                    <a href="<?php get_term_link($term->slug, 'archive_category'); ?>">
                        <?= $term->name; ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="archive">
        <p class="sm-ttl">アーカイブ</p>
        <ul class="monthly-list">
            <?php wp_get_archives('type=yearly&post_type=archive_intro'); ?>
        </ul>
    </div>
</div>