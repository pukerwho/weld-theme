<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
	Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'post' )
    ->add_fields( array(
      // Field::make( 'text', 'crb_post_timetoread', 'Time to read'),
  ) );
  // Container::make( 'post_meta', 'More' )
  //   ->where( 'post_type', '=', 'questions' )
  //   ->add_fields( array(
  //     Field::make( 'checkbox', 'crb_q_solved', 'Решено?' ),
  // ) );  
}

?>