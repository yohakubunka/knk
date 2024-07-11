<?php
// メインビジュアル ================================================================================================
function my_theme_customize_register($wp_customize)
{
    $wp_customize->add_section(
        'top_section',
        [
            'title'           => 'トップページメインビジュアル',
            'priority'        => 1,
            'description' => 'トップページのメインビジュアルを編集します',
            //'active_callback' => 
        ]
    );
    $wp_customize->add_setting('top_mainvisual'); //設定項目を追加
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'top_mainvisual', array(
        'label' => 'メインビジュアル', //設定項目のタイトル
        'section' => 'top_section', //追加するセクションのID
        'settings' => 'top_mainvisual', //追加する設定項目のID
        'description' => 'メインビジュアルの画像を設定してください', //設定項目の説明
    )));

    $wp_customize->add_setting('top_mainvisual_sp'); //設定項目を追加
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'top_mainvisual_sp', array(
        'label' => 'メインビジュアル（スマートフォン、タブレット用）', //設定項目のタイトル
        'section' => 'top_section', //追加するセクションのID
        'settings' => 'top_mainvisual_sp', //追加する設定項目のID
        'description' => 'メインビジュアル（スマートフォン、タブレット用）の画像を設定してください', //設定項目の説明
    )));

    $wp_customize->add_setting('top_title');
    $wp_customize->add_control(
        "top_title",
        [
            'settings'    => 'top_title',
            'label'       => '画像に重なるタイトル',
            'section'     => 'top_section',
            'type'        => 'text'
        ]
    );

    $wp_customize->add_setting('top_introtext');
    $wp_customize->add_control(
        "top_introtext",
        [
            'settings'    => 'top_introtext',
            'label'       => '画像に重なるテキスト',
            'section'     => 'top_section',
            'type'        => 'textarea'
        ]
    );
}
add_action('customize_register', 'my_theme_customize_register');
// メインビジュアル ================================================================================================


// トップページセクション文章 ================================================================================================
function my_theme_customize_top_sections($wp_customize)
{
    $wp_customize->add_section(
        'top_sections',
        [
            'title'           => 'トップページセクションテキスト',
            'priority'        => 1,
            'description' => 'トップページのセクションテキストを編集します。',
            //'active_callback' => 
        ]
    );

    $wp_customize->add_setting('top_ledsell_title');
    $wp_customize->add_control(
        "top_ledsell_title",
        [
            'settings'    => 'top_ledsell_title',
            'label'       => 'LED照明の販売/サブタイトル',
            'section'     => 'top_sections',
            'type'        => 'textarea'
        ]
    );

    $wp_customize->add_setting('top_ledsell_text');
    $wp_customize->add_control(
        "top_ledsell_text",
        [
            'settings'    => 'top_ledsell_text',
            'label'       => 'LED照明の販売/テキスト',
            'section'     => 'top_sections',
            'type'        => 'textarea'
        ]
    );

    $wp_customize->add_setting('top_streetlight_title');
    $wp_customize->add_control(
        "top_streetlight_title",
        [
            'settings'    => 'top_streetlight_title',
            'label'       => '街路灯の制作と設置/サブタイトル',
            'section'     => 'top_sections',
            'type'        => 'textarea'
        ]
    );

    $wp_customize->add_setting('top_streetlight_text');
    $wp_customize->add_control(
        "top_streetlight_text",
        [
            'settings'    => 'top_streetlight_text',
            'label'       => '街路灯の制作と設置/テキスト',
            'section'     => 'top_sections',
            'type'        => 'textarea'
        ]
    );

    $wp_customize->add_setting('top_otherwork_title');
    $wp_customize->add_control(
        "top_otherwork_title",
        [
            'settings'    => 'top_otherwork_title',
            'label'       => 'その他照明に関する事業/タイトル',
            'section'     => 'top_sections',
            'type'        => 'textarea'
        ]
    );

    $wp_customize->add_setting('top_otherwork_text');
    $wp_customize->add_control(
        "top_otherwork_text",
        [
            'settings'    => 'top_otherwork_text',
            'label'       => 'その他照明に関する事業/テキスト',
            'section'     => 'top_sections',
            'type'        => 'textarea'
        ]
    );
}
add_action('customize_register', 'my_theme_customize_top_sections');
// トップページセクション文章 ================================================================================================


// LED照明の販売 ================================================================================================
function my_theme_customize_ledsell($wp_customize)
{
    $wp_customize->add_section(
        'ledsell_section',
        [
            'title'           => 'LED照明の販売メインビジュアル',
            'priority'        => 1,
            'description' => 'LED照明の販売メインビジュアルを編集します',
        ]
    );
    $wp_customize->add_setting('under_mainvisual_01');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_01', array(
        'label' => 'メインビジュアル',
        'section' => 'ledsell_section',
        'settings' => 'under_mainvisual_01',
        'description' => 'メインビジュアルの画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_01_sp');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_01_sp', array(
        'label' => 'メインビジュアル（スマートフォン、タブレット用）',
        'section' => 'ledsell_section',
        'settings' => 'under_mainvisual_01_sp',
        'description' => 'メインビジュアル（スマートフォン、タブレット用）の画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_01_title');
    $wp_customize->add_control(
        "under_mainvisual_01_title",
        [
            'settings'    => 'under_mainvisual_01_title',
            'label'       => '画像に重なるタイトル',
            'section'     => 'ledsell_section',
            'type'        => 'text'
        ]
    );
}
add_action('customize_register', 'my_theme_customize_ledsell');
// LED照明の販売 ================================================================================================


// 街路灯の制作と設置 ================================================================================================
function my_theme_customize_streetlight($wp_customize)
{
    $wp_customize->add_section(
        'streetlight_section',
        [
            'title'           => '街路灯の制作と設置メインビジュアル',
            'priority'        => 1,
            'description' => '街路灯の制作と設置メインビジュアルを編集します',
        ]
    );
    $wp_customize->add_setting('under_mainvisual_02');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_02', array(
        'label' => 'メインビジュアル',
        'section' => 'streetlight_section',
        'settings' => 'under_mainvisual_02',
        'description' => 'メインビジュアルの画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_02_sp');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_02_sp', array(
        'label' => 'メインビジュアル（スマートフォン、タブレット用）',
        'section' => 'streetlight_section',
        'settings' => 'under_mainvisual_02_sp',
        'description' => 'メインビジュアル（スマートフォン、タブレット用）の画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_02_title');
    $wp_customize->add_control(
        "under_mainvisual_02_title",
        [
            'settings'    => 'under_mainvisual_02_title',
            'label'       => '画像に重なるタイトル',
            'section'     => 'streetlight_section',
            'type'        => 'text'
        ]
    );
}
add_action('customize_register', 'my_theme_customize_streetlight');
// 街路灯の制作と設置 ================================================================================================


// その他照明に関する事業 ================================================================================================
function my_theme_customize_otherlight($wp_customize)
{
    $wp_customize->add_section(
        'otherlight_section',
        [
            'title'           => 'その他照明に関する事業メインビジュアル',
            'priority'        => 1,
            'description' => 'その他照明に関する事業メインビジュアルを編集します',
        ]
    );
    $wp_customize->add_setting('under_mainvisual_03');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_03', array(
        'label' => 'メインビジュアル',
        'section' => 'otherlight_section',
        'settings' => 'under_mainvisual_03',
        'description' => 'メインビジュアルの画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_03_sp');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_03_sp', array(
        'label' => 'メインビジュアル（スマートフォン、タブレット用）',
        'section' => 'otherlight_section',
        'settings' => 'under_mainvisual_03_sp',
        'description' => 'メインビジュアル（スマートフォン、タブレット用）の画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_03_title');
    $wp_customize->add_control(
        "under_mainvisual_03_title",
        [
            'settings'    => 'under_mainvisual_03_title',
            'label'       => '画像に重なるタイトル',
            'section'     => 'otherlight_section',
            'type'        => 'text'
        ]
    );
}
add_action('customize_register', 'my_theme_customize_otherlight');
// その他照明に関する事業 ================================================================================================

// 実績一覧 ================================================================================================
function my_theme_customize_archiveintro($wp_customize)
{
    $wp_customize->add_section(
        'archiveintro_section',
        [
            'title'           => '実績一覧のメインビジュアル',
            'priority'        => 1,
            'description' => '実績一覧のメインビジュアルを編集します',
        ]
    );
    $wp_customize->add_setting('under_mainvisual_04');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_04', array(
        'label' => 'メインビジュアル',
        'section' => 'archiveintro_section',
        'settings' => 'under_mainvisual_04',
        'description' => 'メインビジュアルの画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_04_sp');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_04_sp', array(
        'label' => 'メインビジュアル（スマートフォン、タブレット用）',
        'section' => 'archiveintro_section',
        'settings' => 'under_mainvisual_04_sp',
        'description' => 'メインビジュアル（スマートフォン、タブレット用）の画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_04_title');
    $wp_customize->add_control(
        "under_mainvisual_04_title",
        [
            'settings'    => 'under_mainvisual_04_title',
            'label'       => '画像に重なるタイトル',
            'section'     => 'archiveintro_section',
            'type'        => 'text'
        ]
    );
}
add_action('customize_register', 'my_theme_customize_archiveintro');
// 実績一覧 ================================================================================================

// 会社情報 ================================================================================================
function my_theme_customize_about($wp_customize)
{
    $wp_customize->add_section(
        'about_section',
        [
            'title'           => '会社情報のメインビジュアル',
            'priority'        => 1,
            'description' => '会社情報のメインビジュアルを編集します',
        ]
    );
    $wp_customize->add_setting('under_mainvisual_05');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_05', array(
        'label' => 'メインビジュアル',
        'section' => 'about_section',
        'settings' => 'under_mainvisual_05',
        'description' => 'メインビジュアルの画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_05_sp');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_05_sp', array(
        'label' => 'メインビジュアル（スマートフォン、タブレット用）',
        'section' => 'about_section',
        'settings' => 'under_mainvisual_05_sp',
        'description' => 'メインビジュアル（スマートフォン、タブレット用）の画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_05_title');
    $wp_customize->add_control(
        "under_mainvisual_05_title",
        [
            'settings'    => 'under_mainvisual_05_title',
            'label'       => '画像に重なるタイトル',
            'section'     => 'about_section',
            'type'        => 'text'
        ]
    );
}
add_action('customize_register', 'my_theme_customize_about');
// 会社情報 ================================================================================================

// お知らせ ================================================================================================
function my_theme_customize_news($wp_customize)
{
    $wp_customize->add_section(
        'news_section',
        [
            'title'           => 'お知らせのメインビジュアル',
            'priority'        => 1,
            'description' => 'お知らせのメインビジュアルを編集します',
        ]
    );
    $wp_customize->add_setting('under_mainvisual_06');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_06', array(
        'label' => 'メインビジュアル',
        'section' => 'news_section',
        'settings' => 'under_mainvisual_06',
        'description' => 'メインビジュアルの画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_06_sp');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_06_sp', array(
        'label' => 'メインビジュアル（スマートフォン、タブレット用）',
        'section' => 'news_section',
        'settings' => 'under_mainvisual_06_sp',
        'description' => 'メインビジュアル（スマートフォン、タブレット用）の画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_06_title');
    $wp_customize->add_control(
        "under_mainvisual_06_title",
        [
            'settings'    => 'under_mainvisual_06_title',
            'label'       => '画像に重なるタイトル',
            'section'     => 'news_section',
            'type'        => 'text'
        ]
    );
}
add_action('customize_register', 'my_theme_customize_news');
// お知らせ ================================================================================================

// お問い合わせ ================================================================================================
function my_theme_customize_contact($wp_customize)
{
    $wp_customize->add_section(
        'contact_section',
        [
            'title'           => 'お問い合わせのメインビジュアル',
            'priority'        => 1,
            'description' => 'お問い合わせのメインビジュアルを編集します',
        ]
    );
    $wp_customize->add_setting('under_mainvisual_07');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_07', array(
        'label' => 'メインビジュアル',
        'section' => 'contact_section',
        'settings' => 'under_mainvisual_07',
        'description' => 'メインビジュアルの画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_07_sp');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'under_mainvisual_07_sp', array(
        'label' => 'メインビジュアル（スマートフォン、タブレット用）',
        'section' => 'contact_section',
        'settings' => 'under_mainvisual_07_sp',
        'description' => 'メインビジュアル（スマートフォン、タブレット用）の画像を設定してください',
    )));

    $wp_customize->add_setting('under_mainvisual_07_title');
    $wp_customize->add_control(
        "under_mainvisual_07_title",
        [
            'settings'    => 'under_mainvisual_07_title',
            'label'       => '画像に重なるタイトル',
            'section'     => 'contact_section',
            'type'        => 'text'
        ]
    );
}
add_action('customize_register', 'my_theme_customize_contact');
// お問い合わせ ================================================================================================