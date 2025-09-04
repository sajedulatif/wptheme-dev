<?php
// Theme support function
add_action('after_setup_theme', 'wpthemedev_setup');

if(!function_exists('wpthemedev_setup')){

  function wpthemedev_setup(){
        
    add_theme_support('post-thumbnails', array('post', 'page'));
    
  }
    
};

// File including  files
    add_action('wp_enqueue_scripts', 'wpthemedevscript');

    if(!function_exists('wpthemedevscript')){
      function wpthemedevscript(){
        //defult stylesheet include system
        wp_enqueue_style("defult_css", get_stylesheet_uri());
        //custom stylesheet include system
        // wp_enqueue_style("main_css", get_template_directory_uri()."/assets/css/main.css"); /*ei baveo kora jay*/
        // wp_enqueue_style("main_css", get_parent_theme_file_uri('assets/css/main.css'));
        wp_enqueue_style("main_css",get_parent_theme_file_uri('assets/css/main.css'),array(),wp_get_theme()->get('Version'),'all' );

        // inline style add system       
        wp_add_inline_style(
          'main_css', 'body{background-color: #d14242ff;} h1{color:blue;}'

        );
       
        // js include system 

        wp_enqueue_script("main_js", get_template_directory_uri(). "/assets/js/main.js",array(),wp_get_theme()->get('Version'),true);


        wp_add_inline_script(
          'main_js', 'console.log("hello world");'
        );
    }
  }