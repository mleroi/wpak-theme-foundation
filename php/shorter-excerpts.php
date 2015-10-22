<?php

function wpak_ratchet_theme_shorter_excerpt( $excerpt_length ) {
	$excerpt_length = 15;
	return $excerpt_length;
}
add_filter( 'wpak_excerpt_length', 'wpak_ratchet_theme_shorter_excerpt' );

