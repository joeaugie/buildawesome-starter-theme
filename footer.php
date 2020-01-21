        <!-- Display widgets, these could also be added in a separate sidebar.php file. -->
        <aside id="sidebar">
          <?php if (is_active_sidebar('primary-widget-area')) : ?>
            <div id="primary" class="widget-area">
              <section class="widget">
                <?php dynamic_sidebar('primary-widget-area'); ?>
              </section>
            </div>
          <?php endif; ?>
        </aside>
      </div><!-- end #container -->
      <footer id="footer">
        <div id="copyright">
          <p>
            &copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?>
          </p>
        </div>
      </footer>
    </div><!-- end #wrapper -->
    <?php wp_footer(); ?>
  </body>
</html>
