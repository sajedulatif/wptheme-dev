<?php
// Theme support function
add_action('after_setup_theme', 'wpthemedev_setup');

if(!function_exists('wpthemedev_setup')){

  function wpthemedev_setup(){
    load_theme_textdomain( 'wptheme-dev', get_template_directory().'/languages' );
    add_theme_support('title-tag');  
    add_theme_support('post-thumbnails', array('post', 'page'));
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
  
  
  
  
  
  }
    
};

// File including  files

if(!function_exists('wpthemedevscript')){
  
   function wpthemedevscript() { 

      // CSS
      wp_enqueue_style("bootstrap", get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("nice-select", get_template_directory_uri() . '/assets/css/nice-select.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("font-awesome", get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("icofont", get_template_directory_uri() . '/assets/css/icofont.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("slicknav", get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("owl-carousel", get_template_directory_uri() . '/assets/css/owl-carousel.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("datepicker", get_template_directory_uri() . '/assets/css/datepicker.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("animate", get_template_directory_uri() . '/assets/css/animate.min.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("magnific-popup", get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("normalize", get_template_directory_uri() . '/assets/css/normalize.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("custom", get_template_directory_uri() . '/assets/css/custom.css', array(), wp_get_theme()->get('Version'), 'all');
      wp_enqueue_style("responsive", get_template_directory_uri() . '/assets/css/responsive.css', array(), wp_get_theme()->get('Version'), 'all');

      // JS
      wp_enqueue_script("jquery");
      wp_enqueue_script("jquery-migrate", get_template_directory_uri() . "/assets/js/jquery-migrate-3.0.0.js", array('jquery'), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("jquery-ui", get_template_directory_uri() . "/assets/js/jquery-ui.min.js", array('jquery'), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("easing", get_template_directory_uri() . "/assets/js/Easing.js", array('jquery'), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("colors", get_template_directory_uri() . "/assets/js/colors.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("popper", get_template_directory_uri() . "/assets/js/popper.min.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("bootstrap-datepicker", get_template_directory_uri() . "/assets/js/bootstrap-datepicker.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("jquery-nav", get_template_directory_uri() . "/assets/js/jquery.nav.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("slicknav", get_template_directory_uri() . "/assets/js/slicknav.min.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("scrollup", get_template_directory_uri() . "/assets/js/jquery.scrollUp.min.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("niceselect", get_template_directory_uri() . "/assets/js/niceselect.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("tilt", get_template_directory_uri() . "/assets/js/tilt.jquery.min.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("owl-carousel", get_template_directory_uri() . "/assets/js/owl-carousel.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("counterup", get_template_directory_uri() . "/assets/js/jquery.counterup.min.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("steller", get_template_directory_uri() . "/assets/js/steller.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("wow", get_template_directory_uri() . "/assets/js/wow.min.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("magnific-popup", get_template_directory_uri() . "/assets/js/jquery.magnific-popup.min.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("counter-up", get_template_directory_uri() . "/assets/js/counter-up.js", array(), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/js/bootstrap.min.js", array('jquery'), wp_get_theme()->get('Version'), true);
      wp_enqueue_script("main", get_template_directory_uri() . "/assets/js/main.js", array(), wp_get_theme()->get('Version'), true);
  
   }

     
 }
add_action('wp_enqueue_scripts', 'wpthemedevscript');

   

