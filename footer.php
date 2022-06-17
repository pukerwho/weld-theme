<footer class="footer">
  <div class="container">
    <div class="flex flex-wrap flex-col items-center">
      <div class="footer-logo">
        <a href="https://weld.money"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_full_110_40.svg" alt="Logo"></a>
      </div>
      <div class="footer-social mb-8">
        <?php get_template_part('template-parts/components/footer-social'); ?>
      </div>
      <div class="w-full lg:w-2/5 mx-auto">
        <div class="footer-text text-center">
          <?php _e('By using our site, you acknowledge that you have read and understand our', 'treba-wp'); ?> <a href="https://weld.money/privacy" target="_blank"><?php _e('Privacy and Cookie Policy', 'treba-wp'); ?></a>
        </div>
        <div class="footer-text text-center">
          © 2022 Weld. <?php _e('All Rights Reserved. ', 'treba-wp'); ?> 
          <a href="https://weld.money/terms" target="_blank"><?php _e('Terms of Use', 'treba-wp'); ?></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- MODAL -- MAIN MENU -->
<div class="modal" data-modal="menu">
  <div class="modal-wrap">
    <div class="modal-content">
      <div class="container">
        <div class="flex justify-between items-center pt-[20px] pb-[10px]">
          <div class="header-section flex items-center">
            <div class="menu-trigger inline-flex modal-close-js">
              <span class="icon-cross"></span>
              <span class="hidden">Close Menu</span>
            </div>
          </div>
          <div class="header-logo relative">
            <a href="https://weld.money" class="absolute-link"></a>
            <picture>
              <img class="header-logo-img" alt="Weld" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_full_110_40.svg">
            </picture>
          </div>
          <div class="text-white">
            <?php get_template_part('template-parts/components/lang'); ?>
          </div>
        </div>
        <div class="modal-menu">
          <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'div',
          ]); ?> 
        </div>
        <div class="flex justify-center mb-8"><a href="https://weld.money/getcard/" target="_blank" class="cardBtn cardBtn-big inline-block"><span><?php _e('Get Card', 'treba-wp'); ?></span></a></div>
        <div>
          <?php get_template_part('template-parts/components/footer-social'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL -- MAIN MENU -->

<?php wp_footer(); ?>

</body>
</html>