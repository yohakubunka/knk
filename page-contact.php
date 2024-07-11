<?php get_header(); ?>
<?php $theme_options = get_option('theme_option_name'); ?>
<?php get_template_part('template-parts/mainvisual'); ?>
<div class="page-width">
    <?php get_template_part('template-parts/breadcrumb'); ?>
</div>

<main id="contact">
    <section class="contact-tel">
        <div class="w-style_first">
            <div class="ttl-content">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>お</span>電話での<br class="sec-ttl_br">お問い合わせ</h2>
                </div>
            </div>
            <div class="common-flex">
                <div class="common-flex__img">
                    <img src="<?= get_field('contact_tell_image') ?>" alt="電話でお問い合わせ写真">
                </div>
                <div class="common-flex__txt">
                    <p class="common-title sm-ttl"><?= get_field('contact_tell_text') ?></p>
                    <div class="reception">
                        <p class="reception-time mini-txt"><?= $theme_options['op_8'] ?></p>
                        <a class="contact-btn contact-btn_txt" href="tel:<?= $theme_options['op_3']; ?>">TEL:<?= $theme_options['op_3'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="page-width">
            <div class="ttl-content ttl-content_reserve">
                <div class="ttl-animation js-trigger">
                    <h2 class="sec-ttl ttl_bg"><span>メ</span>ールでの<br class="sec-ttl_br">お問い合わせ</h2>
                </div>
            </div>
            <div class="contact-form__list">
                <p class="txt">「プライバシーポリシー」をお読みになり、同意のうえご記入ください。</p>
                <p class="txt">ご返信までに2～3日かかることもございますので、お急ぎの方はお電話にてお問い合わせください。</p>
                <p class="txt">返信メールをお受け取りいただけるよう、受信設定（迷惑メール設定）等をお確かめください。</p>
                <p class="txt">万一、こちらから返信がない場合は、大変お手数ですが再度ご連絡ください。</p>
            </div>
            <div class="contact-form__form-box">
                <?= do_shortcode('[contact-form-7 id="7" title="お問い合わせ"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/footer-contact'); ?>
<?php get_footer(); ?>