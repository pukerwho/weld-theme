<div class="lang inline-flex items-center relative cursor-pointer lang-js">
  <span class="icon-earth"></span>
  <div class="lang-current">
    <?php echo pll_current_language('slug'); ?>
  </div>
  <div class="lang-list">
    <?php if (function_exists('pll_the_languages')) { 
      pll_the_languages(); 
    } ?>
  </div>
  <span class="icon-arrow-down"></span>
</div>