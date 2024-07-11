<?php get_header(); ?>
<?php get_template_part('template-parts/mainvisual'); ?>
<div class="page-width">
  <?php get_template_part('template-parts/breadcrumb'); ?>
</div>
<main id="ledlight">
  <?= get_template_part('template-parts/tmp-archiveledlight') ?>
</main>
<?php get_template_part('template-parts/footer-contact'); ?>

<?php get_footer(); ?>