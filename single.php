<?php get_header(); ?>
<?php get_template_part('template-parts/mainvisual'); ?>

<div class="page-width">
  <?php get_template_part('template-parts/breadcrumb'); ?>
</div>

<section id="single">
  <div class="page-width">
    <div class="news-wrap">
      <article class="single-content">
        <div class="single-content__title">
          <p class="sm-ttl"><?php the_title(); ?></p>
        </div>
        <div class="data-category">
          <p class="data-category--date txt light-blue"><?= get_the_time('Y/m/d') ?></p>
          <ul>
            <li class="data-category--category catego-btn catego-btn-txt news-catego"><?php the_category(',') ?></li>
          </ul>
        </div>

        <div class="single-content__text">
          <?= the_content(); ?>
        </div>

        <div class="single-content__page">
          <?php previous_post_link('%link', '<i class="fas fa-chevron-left"></i>'); ?>
          <a href="<?= home_url("/news") ?>" class="tolist btn btn-txt">一覧に戻る</a>
          <?php next_post_link('%link', '<i class="fas fa-chevron-right"></i>'); ?>
        </div>

      </article>
      <?php get_template_part('template-parts/tmp-newssidebar'); ?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/footer-contact'); ?>
<?php get_footer(); ?>