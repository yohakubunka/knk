<?php $theme_options = get_option('theme_option_name'); ?>

<section class="footer-contact">
    <div class="page-width">
        <h3 class="sm-ttl white">お気軽にお問い合わせください</h3>
        <div class="footer-contact__content">
            <div class="footer-contact__content--tel">
                <p class="tel-txt mini-txt white"><?= $theme_options['op_8']; ?></p>
                <a class="contact-btn contact-btn_txt" href="tel:<?= $theme_options['op_3']; ?>">TEL:<?= $theme_options['op_3']; ?></a>
            </div>
            <div class="footer-contact__content--form">
                <p class="form-txt mini-txt white">24時間受付中</p>
                <a class="contact-btn contact-btn_txt" href="<?= home_url() ?>/contact">お問い合わせフォーム</a>
            </div>
        </div>
    </div>
</section>