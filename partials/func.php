<?php
require 'settings.php';

function selected( $webPage_name ) {
    $page = $_SERVER['SCRIPT_FILENAME'];
    $page_file = basename( $page );
    if ( $webPage_name == $page_file ) {
        return 'class="selected"';
    }
}

function main_nav() {
    global $navigation;
    foreach ( $navigation as $item ) {
        echo '<li '. selected($item[0]) .'>';
        if ( $item[0] == 'gallery.php' ) echo '  <a href="'. $item[0] .'?page=obrazy">';
        else echo '  <a href="'. $item[0] .'">';
        echo 		$item[1];
        echo '  </a>';
        echo '</li>';
    }
}

function footer_nav() {
    global $navigation;
    foreach ( $navigation as $item ) {
        echo '<li '. $item[0]. '>';
        if ( $item[0] == 'gallery.php' ) echo '  <a href="'. $item[0] .'?page=obrazy"'. selected($item[0]) .'>';
        else echo '  <a href="'. $item[0] .'" '. selected($item[0]) .'>';
        echo 		$item[1];
        echo '  </a>';
        echo '</li>';
    }
}

function gallery_nav() {
    $script_list = glob('gallery/*.php');
    $key = array_search( 'gallery/obrazy.php', $script_list);
    $obrazy = array_splice($script_list, $key, 1);
    $obrazy = $obrazy[0];
    array_unshift( $script_list, $obrazy);

    foreach ( $script_list as $file) {
        $file_name_links = basename($file, '.php');
        $file_name = basename($file, '.php');

        if ( $file_name == 'obrazy' ) {
            $file_name = 'obrazy';
        }

        if ( $file_name_links ==  $_GET['page'] ) {
            echo '<li class="selected"><a href="gallery.php?page='. $file_name_links .'">'. ucfirst($file_name) .'</a></li>';
        }
        else {
            echo '<li><a href="gallery.php?page='. $file_name_links .'">'. ucfirst($file_name) .'</a></li>';
        }
    }
}