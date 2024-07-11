<div id="side-bar">
    <div class="category">
        <p class="sm-ttl">カテゴリー</p>
        <?php
        // 親カテゴリーのものだけを一覧で取得
        $args = array(
            'parent' => 0,
            'orderby' => 'term_order',
            'order' => 'ASC'
        );
        $categories = get_categories($args);
        ?>
        <div class="category-flex">
            <?php foreach ($categories as $category) : ?>
                <p class="left-text-border catego-btn catego-btn-txt">
                    <a href="<?= get_category_link($category->term_id); ?>">
                        <?= $category->name; ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="archive">
        <p class="sm-ttl">アーカイブ</p>
        <ul class="monthly-list">
            <?php wp_get_archives('post_type=post&type=yearly'); ?>
        </ul>
    </div>
</div>