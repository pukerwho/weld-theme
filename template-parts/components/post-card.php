<div class="flex">
  <div class="post-card__thumb mr-4 xl:mr-8">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="aspect-square object-cover">
  </div>
  <div class="">
    <div class="post-card__title mb-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="flex items-center post-card__meta -mx-1 mb-8">
      <div class="px-1"><?php echo get_the_date('d.m.Y'); ?></div>
      <div class="px-1">·</div>
      <div class="px-1">4 min read</div>
    </div>
    <div class="post-card__description hidden xl:block">
      <?php $content_text = wp_strip_all_tags( get_the_content() );
      echo mb_strimwidth($content_text, 0, 130, '...'); ?>
    </div>
  </div>
</div>