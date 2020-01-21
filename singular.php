<?php get_header(); ?>
<main id="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <header class="header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <!-- only show author/date if a single post -->
      <?php if (is_single()) { ?>
        <div class="entry-meta">
          <span class="author vcard"><?php the_author_posts_link(); ?></span>
          <span class="meta-sep"> | </span>
          <span class="entry-date"><?php the_time(get_option('date_format')); ?></span>
        </div>
      <?php } ?>
      <div class="entry-content">
        <?php if (has_post_thumbnail()) {
    the_post_thumbnail();
} ?>
        <?php the_content(); ?>
      </div>
      <!-- only show category/tag links and comments if a single post -->
      <?php if (is_single()) { ?>
      <footer class="entry-footer">
        <span class="cat-links">
          <?php the_category(', '); ?>
        </span>
        <span class="tag-links">
          <?php the_tags(); ?>
        </span>
        <?php if (comments_open() && ! post_password_required()) {
    comments_template('', true);
} ?>
      </footer>
      <?php } ?>
    </article>
<?php endwhile; endif; // end wp loop?>
</main>
<?php get_footer(); ?>
