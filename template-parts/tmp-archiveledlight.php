<section>
    <div class="page-width">
        <?php
        $current_cat = get_queried_object();
        $cat_name = $current_cat->name;

        ?>
        <div class="ttl-content">
            <div class="ttl-animation js-trigger">
                <h2 class="sec-ttl ttl_bg"><span>取</span>扱商品</h2>
            </div>
        </div>
        <div id="category-box">
            <div class="category">
                <p class="sm-ttl">カテゴリー</p>
                <ul class="category__flex" id="filter_category">
                    <?php $terms = get_terms('ledlight_category'); ?>
                    <?php foreach ($terms as $term) : ?>
                        <?php if ($cat_name == $term->name) : ?>
                            <li class="active">
                                <a href="<?= home_url() ?>/ledlight"><?= $term->name ?></a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a class="catego-btn catego-btn-txt" href="<?= get_term_link($term->slug, 'ledlight_category') ?>"><?= $term->name ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php if (is_tax("ledlight_category")) : ?>
            <div class="itempage_return">
                <a href="<?php echo get_post_type_archive_link('ledlight'); ?>" class="mini-txt">取扱商品一覧へ戻る</a>
            </div>
        <?php endif; ?>
        <div id="section_product">
            <!-- 取扱商品表示エリア　========================================================================================================== -->

            <?php $args = array(
                'numberposts' => -1, //表示したい記事の数
                'post_type' => 'ledlight' //カスタム投稿で作成した投稿タイプ
            );
            $customPosts = new WP_Query($args);

            if (have_posts()) : while (have_posts()) : the_post();

                    $post_terms = get_the_terms($post->id, 'ledlight_category');
                    $recruit_category_id = -1;
                    $categorise = array();
                    foreach ($post_terms as $post_term) {
                        array_push($categorise, 'id' . $post_term->term_id);
                    }
                    $categorise = implode(" ", $categorise);
                    // カテゴリ―idを格納する配列を作成し、implode関数を使ってクラス名にしやすい形に変更 [0,1,2]　→ 0 1 2
            ?>

                    <article id="item_<?= get_the_ID(); ?>" class="item product_item <?php if (!empty($categorise)) echo $categorise ?>">
                        <div class="product-flex">
                            <div class="product-flex__left">
                                <!-- スライダーはswiperを使用しています。ご注意ください。 -->
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $gallery_group = SCF::get('ledlight_visual');
                                        foreach ($gallery_group as $fields) :
                                            $item = get_post_meta(get_the_ID(), 'ledlight_visual_image');
                                            $imgurl = wp_get_attachment_image_src($fields['ledlight_visual_image'], 'full');
                                        ?>
                                            <?php if (!$fields['ledlight_visual_text']) :  ?>
                                                <div class="swiper-slide">
                                                    <div class="product-img">
                                                        <img src="<?= $imgurl[0] ?>" alt="">
                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                <div class="swiper-slide">
                                                    <p class="format sm-ttl"><?= nl2br($fields['ledlight_visual_text']); ?></p>
                                                    <div class="product-img">
                                                        <img src="<?= $imgurl[0] ?>" alt="商品画像">
                                                    </div>
                                                </div>


                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="swiper__config">
                                        <!-- 必要に応じてナビボタン -->
                                        <div class="swiper-button-prev"></div>
                                        <!-- 必要に応じてページネーション -->
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-flex__right">
                                <?php
                                $post_terms = get_the_terms($post->ID, 'ledlight_category');
                                ?>
                                <ul class="ledlight_category-flex">
                                    <?php foreach ($post_terms as $term) : ?>
                                        <li>
                                            <a class="catego-btn catego-btn-txt" href="<?= get_term_link($term->slug, 'ledlight_category') ?>"><?= $term->name ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <p class="product-name sm-ttl"><?= nl2br(get_field('ledlight_title')) ?></p>
                                <p class="product-text txt"><?= nl2br(get_field('ledlight_text')) ?></p>

                                <?php $pdf = get_post_meta($post->ID, 'ledlight_file', true); ?>
                                <?php if ($pdf) : ?>
                                    <a class="btn btn-txt" target="_blank" href="<?= get_field('ledlight_file') ?>">PDFを見る</a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="product-details">
                            <h2 class="details-title sm-ttl white ac-parent">詳細情報<?php if (get_field('ledlight_detail_text')) : ?><span class="txt white"><?= get_field('ledlight_detail_text') ?></span><?php endif; ?></h2>
                            <div class="ac-child">
                                <div class="product-details__box">
                                    <?php
                                    $detail_group = SCF::get('ledlight_spec');
                                    foreach ($detail_group as $fields) :
                                    ?>
                                        <div class="product-details__box--info">
                                            <?php if (!empty($fields['ledlight_spec_title'])) : ?><p class="details-label mini-txt light-blue"><?= $fields['ledlight_spec_title'] ?></p><?php endif; ?>
                                            <?php if (!empty($fields['ledlight_spec_text'])) : ?><p class="details-text txt "><?= nl2br($fields['ledlight_spec_text']) ?></p><?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : //記事が無い場合
            ?>
                <p class="txt">カスタム投稿記事がありません。</p>
            <?php endif;
            wp_reset_postdata(); //クエリのリセット
            ?>




            <!-- 取扱商品表示エリア　========================================================================================================== -->
        </div>
        <?php
        if (is_tax()) {
            $term = get_queried_object();
            $count_custom_posts = $term->count; // 公開済の投稿数を表示
        } else {
            $count_custom_post = wp_count_posts('ledlight');
            $count_custom_posts = $count_custom_post->publish;
        }
        ?>
        <p class="resutl txt" id="testaaa"></p>
        <div id="progressbar"></div>
        <?php get_template_part('template-parts/infinity-scroll'); ?>
    </div>
</section>

<section class="service">
    <div class="page-width">
        <h3 class="sm-ttl">KnKのサービス</h3>
        <div class="service__flex">
            <div class="service__flex--streetlight">
                <p class="service-ttl sm-ttl white">街路灯の制作と設置</p>
                <a class="btn_w btn-txt_w" href="<?= home_url() ?>/streetlight">詳しく見る</a>
            </div>
            <div class="service__flex--otherlight">
                <p class="service-ttl sm-ttl white">その他照明に関する事業</p>
                <a class="btn_w btn-txt_w" href="<?= home_url() ?>/otherlight">詳しく見る</a>
            </div>
        </div>
    </div>
</section>


<script>
    const swiper = new Swiper(".swiper", {
        // ページネーションが必要なら追加
        pagination: {
            el: ".swiper-pagination",
            type: "fraction" /* この行を追加 */
        },
        // ナビボタンが必要なら追加
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
    });
</script>

<script>
    // progress.js ============================
    var bar = new ProgressBar.Line(progressbar, {
        strokeWidth: 1,
        easing: 'easeInOut',
        duration: 1400,
        color: '#F9C00D',
        trailColor: 'rgba(0,102,133,0.5)',
        trailWidth: 1,
        svgStyle: {
            width: '100%',
            height: '100%'
        },
        from: {
            color: '#F9C00D'
        },
        to: {
            color: '#ED6A5A'
        }
    });
    // progress.js ============================


    // 読み込み時のプログレスバー =======================
    $(function() {
        var count = $('article.item').length; //表示記事数
        var total_count = <?= $count_custom_posts ?>; //全記事数
        var prog = count / total_count; //表示記事数の割合
        $('#testaaa').text("表示" + count + "／" + total_count + "商品");
        bar.animate(prog); // Number from 0.0 to 1.0
    });
    // 読み込み時のプログレスバー =======================

    // infinity scroll ==================================================
    var infScroll = new InfiniteScroll('#section_product', { //大枠のセレクタ
        append: '.product_item', //読み込むボックスたちのセレクタ
        path: '.pagination .next', //次ページへ飛ぶための「次へ」ボタンのセレクタ
        hideNav: '.pagination', //ページネーションのセレクタ
        button: '.moreButton', //「もっと見る」ボタンのセレクタ
        scrollThreshold: false, //自動で次のページを読み込まないようにする
        status: '.scroller-status', // ステータスのセレクタ
        history: 'false', //読み込み後のURLを変更しない
    });
    infScroll.on('append', function(response, path, items) {
        //読み込み後に何かしたい場合はここに書く
        var total_count = <?= $count_custom_posts ?>;
        var count = $('article.item').length;
        var prog = count / total_count;
        bar.animate(prog); // Number from 0.0 to 1.0

        $('#testaaa').text("表示" + count + "／" + total_count + "商品");

        const swiper = new Swiper(".swiper", {
            // ページネーションが必要なら追加
            pagination: {
                el: ".swiper-pagination",
                type: "fraction" /* この行を追加 */
            },
            // ナビボタンが必要なら追加
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
        });

        $('.ac-parent').on('click', function() {
            /*クリックでコンテンツを開閉*/
            $(this).next().slideToggle(350);
            /*矢印の向きを変更*/
            $(this).toggleClass('open', 350);
        });
    });
    // infinity scroll ==================================================
</script>