<?php
// Internet Explorer で開かれた場合はedgeへ開くように通知を出す
$edge_open = true;

if ($edge_open && $_COOKIE['view_ie'] != 'on') {
  if (get_browser_name() == "ie") { ?>
    <script>
      MoveCheck();

      function MoveCheck() {
        if (confirm("ご利用のウェブページはInternet Explorerでの表示を推奨していません。Microsoft Edgeで表示しますか？")) {
          var url = location.href;
          url = "microsoft-edge:" + url;
          window.location.href = url;
        } else {
          alert("Internet Explorerでの表示を続行します。");
        }
      }
    </script>
<?php
    // ページ推移先で通知が出続けないようにクッキーにInternet Explorerで閲覧したフラグを残す
    // クッキーの有効時間 : 1時間
    setcookie('view_ie', 'on', time() + 60 * 60);
  }
}
?>
<!DOCTYPE html>
<html class="fwHtml" <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php seo_description(); ?>">
  <link rel="icon" type="image/x-icon" href="<?= get_theme_file_uri() ?>/images/favicon/favicon.ico">
  <!-- googlefonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700;900&display=swap" rel="stylesheet">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- lottie cdn -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.6/lottie.min.js" type="text/javascript"></script> -->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-5BP3P824W4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-5BP3P824W4');
  </script>

  <script>
    (function(d) {
      var config = {
          kitId: 'qfe0qrf',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>

</head>

<!-- get template directory uri for Javascript -->
<header id="header">
  <nav class="header">
    <div class="header__logo">
      <a href="<?= home_url() ?>">
        <img src="<?= get_template_directory_uri() ?>/images/common/logo.svg" width="172px" height="40px" alt="KnK株式会社">
      </a>
    </div>
    <ul class="header__nav">
      <li class="header__nav--list">
        <p class="ac-parent mini-txt">サービス</p>
        <div class="nav-in">
          <a class="mini-txt" href="<?= home_url() ?>/ledlight">LED照明の販売</a>
          <a class="mini-txt" href="<?= home_url() ?>/streetlight">街路灯の制作と設置</a>
          <a class="mini-txt" href="<?= home_url() ?>/otherlight">その他照明に関する事業</a>
        </div>
      </li>
      <li class="header__nav--list"><a class="mini-txt" href="<?= home_url() ?>/archive_intro">実績紹介</a></li>
      <li class="header__nav--list"><a class="mini-txt" href="<?= home_url() ?>/about">会社情報</a></li>
      <li class="header__nav--list"><a class="mini-txt" href="<?= home_url() ?>/news">お知らせ</a></li>
      <li class="header__nav--list"><a class="contact-btn contact-cbtn-txt" href="<?= home_url() ?>/contact">お問い合わせ</a></li>
      <div class="menu-btn">
        <div class="openbtn">
          <span></span>
          <span></span>
          <p class="small-txt">メニュー</p>
        </div>
        <div class="menu-open">
          <ul class="menu-open__inner">
            <li class="menu-open__inner--list"><a class="mini-txt" href="<?= home_url() ?>/ledlight">LED照明の販売</a></li>
            <li class="menu-open__inner--list"><a class="mini-txt" href="<?= home_url() ?>/streetlight">街路灯の制作と設置</a></li>
            <li class="menu-open__inner--list"><a class="mini-txt" href="<?= home_url() ?>/otherlight">その他照明に関する事業</a></li>
            <li class="menu-open__inner--list"><a class="mini-txt" href="<?= home_url() ?>/archive_intro">実績紹介</a></li>
            <li class="menu-open__inner--list"><a class="mini-txt" href="<?= home_url() ?>/about">会社情報</a></li>
            <li class="menu-open__inner--list"><a class="mini-txt" href="<?= home_url() ?>/news">お知らせ</a></li>
            <li class="menu-open__inner--list inner-contact"><a class="btn btn-txt" href="<?= home_url() ?>/contact">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </ul>
  </nav>
</header>
<div id="cursor"></div>

<body class="body_<?php echo get_page_slug() ?> fwWrap">