<div class="post-card relative">
  <a href="<?php the_permalink(); ?>" class="absolute-link"></a>
  <div class="post-card__bigthumb relative mb-8">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" loading="lazy" class="w-full h-full object-cover">
    <div class="w-full h-full absolute left-0 top-0 bg-gradient-to-b from-transparent to-black/75"></div>
    <div class="absolute left-8 right-8 bottom-8 text-white text-3xl xl:text-2xl z-1"><?php the_title(); ?></div>
  </div>
  
  <div class="flex items-center post-card__meta -mx-1 mb-4">
    <div class="px-1"><?php echo get_the_date('d.m.Y'); ?></div>
    <div class="px-1">·</div>
    <div class="px-1">4 min read</div>
  </div>
  <div class="post-card__description">
    <?php $content_text = wp_strip_all_tags( get_the_content() );
    echo mb_strimwidth($content_text, 0, 130, '...'); ?>
  </div>
</div>