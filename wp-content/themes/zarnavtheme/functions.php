<?php

function zarnavtheme_setup() {

/*
    * Add post-formats support.
*/
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
        add_theme_support( 'post-thumbnails' );

/*
    * Register Nav Menus
*/

register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu', 'zarnavtheme' ),
    )
);

}

add_action( 'after_setup_theme', 'zarnavtheme_setup' );

/*
    * Register Widgets Area
*/

function twenty_twenty_one_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'twentytwentyone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );
