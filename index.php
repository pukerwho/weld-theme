<?php get_header(); ?>

<div class="container">
  <div class="w-full xl:w-11/12">
    <!-- TOP POST -->
    <div class="flex flex-wrap flex-col xl:flex-row border-b mb-12 pb-12 md:pt-12 xl:pt-16">
      <div class="w-full xl:w-2/12 mb-5 xl:mb-0">
        <div class="nav-subtitle"><?php _e('New post', 'treba-wp'); ?></div>
      </div>
      <div class="w-full xl:w-9/12">
        <?php 
          $query = new WP_Query( array( 
            'post_type' => 'post', 
            'posts_per_page' => 1,
            'order'    => 'ASC',
          ) );
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
          <div class="w-full">
            <?php get_template_part('template-parts/components/post-top-card'); ?>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>
    <!-- END TOP POST -->

    <!-- LATEST POSTS -->
    <div class="flex flex-wrap flex-col xl:flex-row">
      <div class="w-full xl:w-2/12 mb-5 xl:mb-0">
        <div class="nav-subtitle"><?php _e('Latest posts', 'treba-wp'); ?></div>
      </div>
      <div class="w-full xl:w-10/12">
        <?php 
          $query = new WP_Query( array( 
            'post_type' => 'post', 
            'posts_per_page' => 5,
            'offset' => 1,
            'order'    => 'ASC',
          ) );
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
          <div class="w-full mb-8 xl:mb-10">
            <?php get_template_part('template-parts/components/post-card'); ?>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>
    <!-- END LATEST POSTS -->
  </div>
</div>

<?php get_footer(); ?>