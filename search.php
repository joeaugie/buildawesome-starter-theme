<?php get_header(); ?>
<main id="content">
  <header class="header">
    <h1 class="entry-title">Search Results for:
      <?php echo get_search_query(); ?>
    </h1>
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
  <?php endwhile; ?>
  <?php else : ?>
  <article class="post no-results not-found">
    <header class="header">
      <h2 class="entry-title">Nothing Found</h2>
    </header>
    <div class="entry-content">
      <p>Sorry, nothing matched your search. Please try again.</p>
      <?php get_search_form(); ?>
    </div>
  </article>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
