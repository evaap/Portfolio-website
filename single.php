<?php
$post = $wp_query->post;

if ( in_category( 'showcase' ) ) {
  include( TEMPLATEPATH.'/single-project.php' );
}
else {
  include( TEMPLATEPATH.'/single-galerij.php' );
}
?>
