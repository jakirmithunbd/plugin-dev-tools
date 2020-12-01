<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {

    die;

}

// Delete DB data

$books = get_posts(array('post_type' => 'book', 'numberposts'=> -1));

foreach ($books as $book) {
    wp_delete_post($book->ID, true);
}

//global $wpdb;
//
//$wpdb->query("DELETE FROM  wp_posts WHERE post_type = 'book'");
//$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELETE id FROM wp_posts)");
