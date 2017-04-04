<?php

// third party scripts
function enqueue_jaydot2_styles() {
    wp.enqueue_jaydot2_scripts('foundation-js', 'js/foundation.js', array('jquery'));
    wp_enqueue_style('foundation-css', 'css/foundation.css');
}
add_action("wp_enqueue_scripts", "enqueue_jaydot2_styles");

/**
 * Setup the items for the Jaydot2 theme
 */ 
function jaydot2_setup() {
    //
}

?>