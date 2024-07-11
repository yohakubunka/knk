<?php

/**
 * schema.orgを使用したパンくずリスト
 *
 * ■ 使用方法
 * - 通常
 * <?php get_template_part('template-parts/breadcrumb'); ?>
 *
 *
 * - 表示が特殊で変数を使用する場合
 * <?php get_template_part('template-parts/breadcrumb', null, $var); ?>
 *
 * 変数を使用した場合引数で指定した値はbreadcrumb.php内で$argsに引き継がれます。
 *
 * ■ 機能の更新
 * gitで管理されています。
 * 案件ごとの部分的な修正ではなくベース機能の修正の場合『feature/breadcrumb』から変更してください。
 *
 */
?>

<?php

// ページ情報
$postId = $post->ID;
$parentPostArry = array_reverse(get_post_ancestors($post));
$postTypeObject = get_post_type_object(get_post_type());
$postTypeName = $postTypeObject->labels->name;
$taxonomySlug = get_query_var('taxonomy');
$termName = urldecode(get_query_var('term'));

// アロー設定
$arrow_option = '<img src="' . get_template_directory_uri() . '/images/svg/bread.svg">';
function breadcrumb_arrow($arrow_option)
{
  echo '<span class="breadcrumb__arrow">' . $arrow_option . '</span>';
}
?>

<?php if (is_front_page() || is_home()) : ?>
<?php else : ?>
  <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">

    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a href="<?php echo esc_url(home_url()); ?>" itemprop="item">
        <span itemprop="name" class="small-txt">トップ</span>
      </a>
      <meta itemprop="position" content="1" />
    </li>
    <?php breadcrumb_arrow($arrow_option) ?>
    <?php
    // 固定ページ -----------------------------------------------------------------------------------
    if (is_page()) :
    ?>
      <?php if ($post->post_parent) : // 子ページがある場合
        $parent_id = $post->post_parent; // 親ページのIDを取得
      ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="<?= get_permalink($parent_id) ?>" itemprop="item">
            <span itemprop="name" class="small-txt"><?= get_post($parent_id)->post_title ?></span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
        <?php breadcrumb_arrow($arrow_option) ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name" class="small-txt"><?= get_the_title() ?></span>
          <meta itemprop="position" content="3" />
        </li>
      <?php else : // 子ページがない場合
      ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name" class="small-txt"><?= get_the_title() ?></span>
          <meta itemprop="position" content="2" />
        </li>
      <?php endif; ?>
    <?php
    endif;
    // 固定ページend -------------------------------------------------------------------------------
    ?>

    <?php if (is_category()) : ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="<?= esc_url(home_url('/')); ?>news" itemprop="item">
          <span itemprop="name" class="small-txt">お知らせ</span>
        </a>
        <meta itemprop="position" content="2" />
      </li>
      <?php breadcrumb_arrow($arrow_option) ?>
      <?php
      $query_categoryslug = get_query_var('category_name');
      $category_object = get_category_by_slug($query_categoryslug);
      ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" class="small-txt"><?= $category_object->name ?></span>
        <meta itemprop="position" content="3" />
      </li>
    <?php endif; ?>



    <?php if (is_date() && !is_post_type_archive('archive_intro')) : ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="<?= esc_url(home_url('/')); ?>news" itemprop="item">
          <span itemprop="name" class="small-txt">お知らせ</span>
        </a>
        <meta itemprop="position" content="2" />
      </li>
      <?php breadcrumb_arrow($arrow_option) ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" class="small-txt"><?php the_time('Y年') ?></span>
        <meta itemprop="position" content="2" />
      </li>
    <?php endif; ?>

    <?php
    // カスタム投稿アーカイブページ (お知らせ)-----------------------------------------------------------------
    //実績ページ
    if (is_post_type_archive('archive_intro')) : ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" class="small-txt">実績紹介</span>
        <meta itemprop="position" content="2" />
      </li>
      <?php if (is_date()) : ?>
        <?php breadcrumb_arrow($arrow_option) ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name" class="small-txt"><?php the_time('Y年') ?></span>
          <meta itemprop="position" content="2" />
        </li>
      <?php endif; ?>
    <?php
    //ledページ
    elseif (is_post_type_archive('post')) : ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="<?= esc_url(home_url('/')); ?>news" itemprop="item">
          <span itemprop="name" class="small-txt">お知らせ</span>
        </a>
        <meta itemprop="position" content="2" />
      </li>
    <?php
    //ledページ
    elseif (is_post_type_archive('ledlight')) : ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" class="small-txt">LED照明の販売</span>
        <meta itemprop="position" content="2" />
      </li>
    <?php
    endif;
    // カスタム投稿アーカイブページend -------------------------------------------------------------
    ?>



    <?php
    // カスタム分類一覧 （カスタム投稿カテゴリ―別）------------------------------------------------------------------------------
    if (is_tax('archive_category')) :
    ?>
      <?php
      $tax_obj = get_queried_object();
      ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="<?= esc_url(home_url('/')); ?>archive_intro" itemprop="item">
          <span itemprop="name" class="small-txt">実績紹介</span>
        </a>
        <meta itemprop="position" content="2" />
      </li>
      <?php breadcrumb_arrow($arrow_option) ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" class="small-txt"><?= $tax_obj->name ?></span>
        <meta itemprop="position" content="3" />
      </li>

    <?php elseif (is_tax('ledlight_category')) : ?>
      <?php
      $tax_obj = get_queried_object();
      ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="<?= esc_url(home_url('/')); ?>archive_intro" itemprop="item">
          <span itemprop="name" class="small-txt">LED照明の販売</span>
        </a>
        <meta itemprop="position" content="2" />
      </li>
      <?php breadcrumb_arrow($arrow_option) ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" class="small-txt"><?= $tax_obj->name ?></span>
        <meta itemprop="position" content="3" />
      </li>


    <?php
    endif;
    // カスタム分類一覧end --------------------------------------------------------------------------
    ?>

    <?php
    // カスタム投稿シングルページ --------------------------------------------------------------------
    if (is_singular('post')) :
    ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="<?= esc_url(home_url('/')); ?>news" itemprop="item">
          <span itemprop="name" class="small-txt">お知らせ</span>
          <meta itemprop="position" content="2" />
        </a>
      </li>
      <?php breadcrumb_arrow($arrow_option) ?>
      <li class="third-title" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" class="small-txt"><?= single_post_title('', false) ?></span>
        <meta itemprop="position" content="3" />
      </li>

    <?php elseif (is_singular('archive_intro')) : ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="<?= esc_url(home_url('/')); ?>archive_intro" itemprop="item">
          <span itemprop="name" class="small-txt">実績紹介</span>
        </a>
      </li>
      <?php breadcrumb_arrow($arrow_option) ?>
      <li class="third-title" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" class="small-txt"><?= single_post_title('', false) ?></span>
        <meta itemprop="position" content="3" />
      </li>
    <?php
    endif;
    // カスタム投稿シングルページend ----------------------------------------------------------------
    ?>

    <?php
    // 検索結果ページ --------------------------------------------------------------------------------
    if (is_search()) :
    ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" class="small-txt">キーワード検索結果</span>
        <meta itemprop="position" content="2" />
      </li>
    <?php
    endif;
    // 検索結果ページend ----------------------------------------------------------------------------
    ?>

    <?php
    // 検索結果ページ --------------------------------------------------------------------------------
    if (is_404()) :
    ?>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" class="small-txt">ページが見つかりません</span>
        <meta itemprop="position" content="2" />
      </li>
    <?php
    endif;
    // 検索結果ページend ----------------------------------------------------------------------------
    ?>

    <?php
    // 引数指定があった場合 --------------------------------------------------------------------------
    if (isset($args)) :
    ?>

      <?php
      switch ($args):
        case '引数名':
      ?>
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name" class="small-txt">表示テキスト</span>
            <meta itemprop="position" content="2" />
          </li>
          <?php break; ?>
      <?php endswitch; ?>

    <?php
    endif;
    // 引数指定があった場合end ----------------------------------------------------------------------
    ?>

  </ol>
<?php endif ?>