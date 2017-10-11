<?php

function add_theme_scripts() {
	wp_enqueue_style( 'xjsu-style', get_stylesheet_uri() );
	wp_enqueue_style( 'xjsu-style-animate', get_theme_file_uri( '/assets/css/animate.css' ) );
	wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/dist/js/jquery-3.1.1.min.js' ), [], '3.1.1' );
	if (is_home()) {
		wp_enqueue_script( 'xjsu-js-index', get_theme_file_uri( '/assets/js/index.js' ), [ 'jquery' ], false, true );
	}
	wp_enqueue_script( 'xjsu-js-animate', get_theme_file_uri( '/assets/js/animate.js' ), [ 'jquery' ], false, true );
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function xjsu_insert_categories() {
	$categories = [
		[ 'slug' => 'news', 'name' => '新闻公告' ],
		[ 'slug' => 'push', 'name' => '精品推送' ],
		[ 'slug' => 'presidium', 'name' => '主席团风采' ],
		[ 'slug' => 'minister', 'name' => '部门介绍' ],
		[ 'slug' => 'activity', 'name' => '品牌活动' ],
		[ 'slug' => 'apply', 'name' => '审批资料下载' ],
		[ 'slug' => 'perspective', 'name' => '微视角' ],
		[ 'slug' => 'freshman', 'name' => '新生手册' ],
	];
	foreach ( $categories as $category ) {
		if ( ! get_category_by_slug( $category['slug'] ) ) {
			wp_insert_term( $category['name'], 'category', [
				'slug' => $category['slug'],
			] );
		}
	}
}

function xjsu_setup() {
	if ( ! get_option( 'xjsu_installed' ) ) {
		xjsu_insert_categories();
		update_option( 'xjsu_installed', 1 );
	}
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'xjsu_setup' );
