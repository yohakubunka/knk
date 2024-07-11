<?php get_template_part('template-parts/pagination') ?>

<?php
// 現在のページ数
global $paged;
if (empty($paged)) $paged = 1;

// 全ページ数
global $wp_query;
$pages = $wp_query->max_num_pages;
if (!$pages) {
    $pages = 1;
}
// ページが1ページのみ＆最後のページでは表示しない
if ($pages != 1 && $paged < $pages) {
    echo '
    <div class="moreButton"><button class="btn btn-txt" id="more-button" type="button">さらに読み込む</button></div>
    <div class="scroller-status">
        <div class="infinite-scroll-request txt">読み込み中</div>
        <p class="infinite-scroll-last txt"></p>
        <p class="infinite-scroll-error txt">読み込むページはありません</p>
    </div>
    ';
}
?>