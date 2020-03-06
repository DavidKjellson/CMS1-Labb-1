<?php

/* Lägger till menyer, bilder, och titlar till sidan. */
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag'); 

/* Ger sidan dess CSS-mallar */
function includeStyles () {
  wp_enqueue_style('fontAwesome', get_template_directory_uri().'/css/font-awesome.css');
  wp_enqueue_style('bootStrap', get_template_directory_uri().'/css/bootstrap.css');
  wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
}

/* Ger sidan dess JavaScript-mallar */
function includeScript () {
  wp_enqueue_script('jQuery', get_template_directory_uri().'/js/jquery.js');
  wp_enqueue_script('javaScript', get_template_directory_uri().'/js/script.js', [], false, true);
}

/* Ger navbaren dess innehåll */
register_nav_menu('huvudmeny', ('Huvudmeny'));

/* Ger sidan dess widgets och sidebars */
function Widgets() {

  /* Om-delen på footern */
  register_sidebar(array(
    'name' => 'FooterAbout',
    'id' => 'footer-1',
    'before_widget' => '<ul class="menu-class">',
    'after_widget' => '</ul>',
    'before_title' => '<h4>',
    'afer_title' => '</h4>'
  ));

  /* Kontakt-delen på footern */
  register_sidebar(array(
    'name' => 'FooterContact',
    'id' => 'footer-2',
    'before_widget' => '<ul class="menu-class">',
    'after_widget' => '</ul>',
    'before_title' => '<h4>',
    'afer_title' => '</h4>'

  ));

  /* Länkarna till sociala medierna till footern */
  register_sidebar(array(
    'name' => 'FooterSocial',
    'id' => 'footer-3',
    'before_widget' => '<ul class="menu-class">',
    'after_widget' => '</ul>',
    'before_title' => '<h4>',
    'afer_title' => '</h4>'
  ));

  /* Copyright-delen längst ner i footern */
  register_sidebar(array(
    'name' => 'FooterCopyright',
    'id' => 'footer-4',
    'before_widget' => '<ul class="menu-class">',
    'after_widget' => '</ul>'
  ));

  /* Sidebaren till bloggen */
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',  
  ));

  /* Sökfältet till headern */
  register_sidebar(array(
    'name' => 'Searchbar',
    'id' => 'searchbar',
    'before_widget' => '<ul class="menu-class">',
    'after_widget' => '</ul>'
  ));
}

/* Ger sidan en snygg paginaton. Väldigt meckigt skall tilläggas. */
function pagination() {
  echo '<ul>';
    if (get_previous_posts_link()) {
      echo '<li>';
      echo  previous_posts_link('Föregående');
      echo '</li>';
    }
    if (get_next_posts_link()) {
      echo '<li>';
      echo next_posts_link('Nästa');
      echo '</li>';
    }
  echo '</ul>';
}

/* Lägger till paginationen. Namnet är en ordvits mellan function och funky. */
function funcy($template) {
  $template = '
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="pagination nav-links">%3$s</div>
	</nav>';
  return $template;
}

/* Filtrerar pagination och funcy. Också väldigt meckigt. */
add_filter('navigation_markup_template', 'funcy');

/* Importerar funktionerna till sidan */
add_action('widgets_init', 'Widgets');
add_action('wp_enqueue_scripts', 'includeStyles');
add_action('wp_enqueue_scripts', 'includeScript');

?>