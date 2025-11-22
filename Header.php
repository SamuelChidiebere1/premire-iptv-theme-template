<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="iptv-header">
    <div class="container">
      <div class="header-container">
        <div class="logo-area">
          <div class="language-flags">
            <div class="flag" style="background: linear-gradient(to bottom, #B22234 0%, #B22234 50%, white 50%, white 100%);"></div>
            <div class="flag" style="background: linear-gradient(to right, #002395 0%, #002395 33%, white 33%, white 66%, #ED2939 66%, #ED2939 100%);"></div>
          </div>
          <div class="logo">
            <h1>IP<span>.tv</span> PREMIRE</h1>
          </div>
        </div>
        <nav class="main-nav">
          <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#subscription">Subscription Iptv</a></li>
            <li><a href="#contact">CONTACT US</a></li>
            <li><a href="#channel">CHANNEL</a></li>
            <li><a href="#price">PRICE</a></li>
          </ul>
        </nav>
        <a href="<?php echo esc_url( get_field('hero_button_link') ); ?>" class="cta-button">
          <?php echo esc_html( get_field('hero_button_label') ); ?>
        </a>
      </div>
    </div>
  </header>
