<?php
function seo_description()
{
  if (is_front_page() or is_home()) {
    //トップページの場合の処理
    echo get_bloginfo('description');
  } elseif (is_post_type_archive('archive_intro') == true) {
    echo "実際の施工事例がご覧いただけます。「明るく・快適に・美しく」をコンセプトに制作した、LED照明や街路灯の導入事例をご覧ください。";
  } elseif (is_post_type_archive('ledlight') == true) {
    echo "KnK株式会社オリジナル商品をはじめ、既存のデザインを保ったままLED化が可能なボール型ランプや、片面発光タイプ、コーン型タイプの照明を取り扱っております。";
  } elseif (is_post_type_archive('post') == true) {
    echo "Knk株式会社が発信するお知らせ一覧です。最新の情報やメディア掲載などについて掲載しています。";
  } else {
    $description_str = "";
    if (is_page()) {
      // 固定ページの場合の処理
      $description_str = substr(strip_tags(get_the_excerpt()), 0, 200);
      $description_str =  mb_convert_encoding($description_str, "UTF-8");
      echo $description_str;
    }
    if (is_single()) {
      //投稿ページの場合の処理
      $description_str = substr(strip_tags(get_the_excerpt()), 0, 200);
      $description_str =  mb_convert_encoding($description_str, "UTF-8");
      echo $description_str;
    }
  }
}
