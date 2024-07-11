<section id="mv-section">
    <?php if (is_home() || is_front_page()) : ?>
        <div class="mainvisual top-mainvisual">
            <div class="mv-pc">
                <?php if (get_theme_mod('top_mainvisual')) : ?>
                    <img class="mainvisual__image" src="<?= get_theme_mod('top_mainvisual'); ?>" alt="メインビジュアル">
                <?php else : ?>
                    <img src="https://placehold.jp/1554x992.png" alt="メインビジュアルダミー">
                <?php endif; ?>
            </div>
            <div class="mv-sp">
                <?php if (get_theme_mod('top_mainvisual_sp')) : ?>
                    <img class="mainvisual__image" src="<?= get_theme_mod('top_mainvisual_sp'); ?>" alt="メインビジュアル">
                <?php else : ?>
                    <img src="https://placehold.jp/1554x992.png" alt="メインビジュアルダミー">
                <?php endif; ?>
            </div>
            <div class="top-catch catch-copy">
                <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('top_title'); ?></h1>
                <p class="sm-ttl white"><?= nl2br(get_theme_mod('top_introtext')); ?></p>
                <a class="btn_w btn-txt_w" href="<?= home_url() ?>/about">会社情報を見る</a>
            </div>
        </div>
    <?php elseif (is_post_type_archive('ledlight') || is_tax('ledlight_category')) : ?>
        <div class="mainvisual">
            <div class="mv-pc">
                <?php if (get_theme_mod('under_mainvisual_01')) : ?>
                    <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_01'); ?>" alt="メインビジュアル">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_01_title'); ?></h1>
                    </div>
                <?php else : ?>
                    <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_01_title'); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mv-sp">
                <?php if (get_theme_mod('under_mainvisual_01_sp')) : ?>
                    <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_01_sp'); ?>" alt="メインビジュアル">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_01_title'); ?></h1>
                    </div>
                <?php else : ?>
                    <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_01_title'); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php elseif (is_page('streetlight')) : ?>
        <div class="mainvisual">
            <div class="mv-pc">
                <?php if (get_theme_mod('under_mainvisual_02')) : ?>
                    <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_02'); ?>" alt="メインビジュアル">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_02_title'); ?></h1>
                    </div>
                <?php else : ?>
                    <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_02_title'); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mv-sp">
                <?php if (get_theme_mod('under_mainvisual_02_sp')) : ?>
                    <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_02_sp'); ?>" alt="メインビジュアル">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_02_title'); ?></h1>
                    </div>
                <?php else : ?>
                    <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_02_title'); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="mv-pc">
        <?php elseif (is_page('otherlight')) : ?>
            <div class="mainvisual">
                <div class="mv-pc">
                    <?php if (get_theme_mod('under_mainvisual_03')) : ?>
                        <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_03'); ?>" alt="メインビジュアル">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_03_title'); ?></h1>
                        </div>
                    <?php else : ?>
                        <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_03_title'); ?></h1>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mv-sp">
                    <?php if (get_theme_mod('under_mainvisual_03_sp')) : ?>
                        <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_03_sp'); ?>" alt="メインビジュアル">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_03_title'); ?></h1>
                        </div>
                    <?php else : ?>
                        <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_03_title'); ?></h1>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php elseif (is_post_type_archive('archive_intro') || is_tax('archive_category') || is_singular('archive_intro')) : ?>
        <div class="mainvisual">
            <?php if (is_date()) :  ?>
                <div class="mv-pc">
                    <?php if (get_theme_mod('under_mainvisual_04')) : ?>
                        <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_04'); ?>" alt="メインビジュアル">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_04_title'); ?></h1>
                        </div>
                    <?php else : ?>
                        <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_04_title'); ?></h1>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mv-sp">
                    <?php if (get_theme_mod('under_mainvisual_04_sp')) : ?>
                        <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_04_sp'); ?>" alt="メインビジュアル">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_04_title'); ?></h1>
                        </div>
                    <?php else : ?>
                        <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_04_title'); ?></h1>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else : ?>
                <div class="mv-pc">
                    <?php if (get_theme_mod('under_mainvisual_04')) : ?>
                        <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_04'); ?>" alt="メインビジュアル">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_04_title'); ?></h1>
                        </div>
                    <?php else : ?>
                        <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_04_title'); ?></h1>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mv-sp">
                    <?php if (get_theme_mod('under_mainvisual_04_sp')) : ?>
                        <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_04_sp'); ?>" alt="メインビジュアル">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_04_title'); ?></h1>
                        </div>
                    <?php else : ?>
                        <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                        <div class="catch-copy">
                            <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_04_title'); ?></h1>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php elseif (is_page('about')) : ?>
        <div class="mainvisual">
            <div class="mv-pc">
                <?php if (get_theme_mod('under_mainvisual_05')) : ?>
                    <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_05'); ?>" alt="メインビジュアル">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_05_title'); ?></h1>
                    </div>
                <?php else : ?>
                    <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_05_title'); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mv-sp">
                <?php if (get_theme_mod('under_mainvisual_05_sp')) : ?>
                    <img class="mainvisual__image" src="<?= get_theme_mod('under_mainvisual_05_sp'); ?>" alt="メインビジュアル">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?= get_theme_mod('under_mainvisual_05_title'); ?></h1>
                    </div>
                <?php else : ?>
                    <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?php echo get_theme_mod('under_mainvisual_05_title'); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php elseif (is_page('contact')) : ?>
        <div class="mainvisual">
            <div class="mv-pc">
                <?php if (get_theme_mod('under_mainvisual_07')) : ?>
                    <img class="mainvisual__image" src="<?php echo get_theme_mod('under_mainvisual_07'); ?>" alt="メインビジュアル">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?php echo get_theme_mod('under_mainvisual_07_title'); ?></h1>
                    </div>
                <?php else : ?>
                    <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?php echo get_theme_mod('under_mainvisual_07_title'); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mv-sp">
                <?php if (get_theme_mod('under_mainvisual_07_sp')) : ?>
                    <img class="mainvisual__image" src="<?php echo get_theme_mod('under_mainvisual_07_sp'); ?>" alt="メインビジュアル">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?php echo get_theme_mod('under_mainvisual_07_title'); ?></h1>
                    </div>
                <?php else : ?>
                    <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?php echo get_theme_mod('under_mainvisual_07_title'); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php elseif (is_archive() && !is_post_type_archive('ledlight') || !is_singular('archive_intro')) : ?>
        <div class="mainvisual">
            <div class="mv-pc">
                <?php if (get_theme_mod('under_mainvisual_06')) : ?>
                    <img class="mainvisual__image" src="<?php echo get_theme_mod('under_mainvisual_06'); ?>" alt="メインビジュアル">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?php echo get_theme_mod('under_mainvisual_06_title'); ?></h1>
                    </div>
                <?php else : ?>
                    <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?php echo get_theme_mod('under_mainvisual_06_title'); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mv-sp">
                <?php if (get_theme_mod('under_mainvisual_06_sp')) : ?>
                    <img class="mainvisual__image" src="<?php echo get_theme_mod('under_mainvisual_06_sp'); ?>" alt="メインビジュアル">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?php echo get_theme_mod('under_mainvisual_06_title'); ?></h1>
                    </div>
                <?php else : ?>
                    <img src="https://placehold.jp/1554x763.png" alt="メインビジュアルダミー">
                    <div class="catch-copy">
                        <h1 class="catch-copy__top mv-ttl"><?php echo get_theme_mod('under_mainvisual_06_title'); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    <?php endif; ?>
</section>