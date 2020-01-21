<?php get_header(); ?>
<main id="content">
  <header class="header">
    <h1 class="entry-title">
      <!-- Returns the category, tag, or taxonomy title term from the archive. -->
      <?php single_term_title(); ?>
    </h1>
    <div class="archive-meta">
      <?php if (the_archive_description() != '') {
    echo esc_html(the_archive_description());
}
      ?>
    </div>
  </header>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- post title -->
    <article <?php post_class(); ?>>
      <header>
        <h2 class="entry-title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
            <?php the_title(); ?>
          </a>
        </h2>
      </header>
      <!-- post thumbnail -->
      <div class="entry-summary">
      <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      <?php endif; ?>
      <!-- post summary -->
      <?php the_excerpt(); ?>
      </div>
    </article>
  <!-- End WP Loop -->
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
