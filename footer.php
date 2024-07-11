<?php $theme_options = get_option('theme_option_name'); ?>
<footer id="footer">
    <div class="footer page-width">
        <div id="page_top">
            <p><?php get_template_part('images/svg/page-top') ?></p>
        </div>
        <div class="footer__content">
            <nav class="footer__content--top">
                <div class="footer-flex">
                    <div>
                        <a class="sm-ttl white" href="<?= home_url() ?>"><?= $theme_options['op_0']; ?></a>
                    </div>
                    <ul class="nav-flex">
                        <li>
                            <p class="ac-parent txt white">サービス</p>
                            <div class="nav-in">
                                <a class="txt white" href="<?= home_url() ?>/ledlight">LED照明器具の販売</a>
                                <a class="txt white" href="<?= home_url() ?>/streetlight">街路灯の制作と設置</a>
                                <a class="txt white" href="<?= home_url() ?>/otherlight">その他照明に関する事業</a>
                            </div>
                        </li>
                        <li>
                            <a class="txt white" href="<?= home_url() ?>/archive_intro">実績紹介</a>
                        </li>
                        <li>
                            <a class="txt white" href="<?= home_url() ?>/about">会社情報</a>
                        </li>
                        <li>
                            <a class="txt white" href="<?= home_url() ?>/news">お知らせ</a>
                        </li>
                        <li>
                            <a class="txt white" href="<?= home_url() ?>/contact">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="footer__content--bottom">
                <div class="footer-data">
                    <p class="txt white"><?= $theme_options['op_1']; ?></p>
                    <p class="address txt white"><a target="_blank" href="https://www.google.co.jp/maps/place/<?= $theme_options['op_1'] . " " .  $theme_options['op_2'] ?> "><?= $theme_options['op_2']; ?><img src="<?= get_template_directory_uri() ?>/images/common/footer_map.svg" width="18px" height="24px" alt="マップアイコン"></a></p>
                    <p class="txt white">
                        <a href="tel:<?= $theme_options['op_3']; ?>">TEL:<?= $theme_options['op_3']; ?></a>
                    </p>
                </div>
                <p class="copy small-txt white">© <?= date('Y') ?> KnK株式会社</p>
            </div>
        </div>
    </div>
</footer>
<?php
if (WP_DEBUG && current_user_can('manage_options')) {
    get_template_part('debug/config-data');
}

wp_footer();
?>
</body>

</html>