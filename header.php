<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrap">

<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-sm-6">
        <a class="logo" href="<?php echo home_url(); ?>"><?php echo get_bloginfo(''); ?></a>
      </div>
      <div class="col-sm-6 hidden-xs">
        <form id="searchform" class="searchform">
          <div>
            <?php get_search_form(); ?>
          </div>
        </form>
      </div>
      <div class="col-xs-4 text-right visible-xs">
        <div class="mobile-menu-wrap">
          <i class="fa fa-search"></i>
          <i class="fa fa-bars menu-icon"></i>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="mobile-search">
  <form id="searchform" class="searchform">
    <div>
      <label class="screen-reader-text">Sök efter:</label>
      <input type="text" />
      <input type="submit" value="Sök" />
    </div>
  </form>
</div>

<nav id="nav">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="menu">
        <?php wp_nav_menu( array(
          'theme_location' => 'huvudmeny'
        )); ?>
          <li class="current-menu-item">
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>