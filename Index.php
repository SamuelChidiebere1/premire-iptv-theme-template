<?php
get_header();
?>

<section class="hero-section" id="home">
  <div class="container">
    <div class="hero-content">
      <h2><?php echo esc_html( get_field('hero_title') ); ?></h2>
      <p><?php echo esc_html( get_field('hero_subtitle') ); ?></p>
      <a href="<?php echo esc_url( get_field('hero_button_link') ); ?>" class="hero-button">
        <?php echo esc_html( get_field('hero_button_label') ); ?>
      </a>
    </div>
  </div>
</section>

<div class="container">
  <div class="feature-cards">
    <?php if( have_rows('feature_cards') ): ?>
      <?php while( have_rows('feature_cards') ) : the_row(); ?>
        <div class="feature-card">
          <h3><?php echo esc_html( get_sub_field('card_text') ); ?></h3>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<section id="pricing" class="container">
  <h2 class="section-title">CHOOSE YOUR BEST IPTV SUBSCRIPTION PLAN</h2>
  <div class="title-underline"></div>
  <div class="pricing-grid">
    <?php if( have_rows('plans') ): ?>
      <?php while( have_rows('plans') ) : the_row(); ?>
        <div class="pricing-card">
          <h3><?php echo esc_html( get_sub_field('plan_name') ); ?></h3>
          <div class="price"><?php echo esc_html( get_sub_field('plan_price') ); ?></div>
          <ul class="pricing-features">
            <?php
              $features = explode("\n", get_sub_field('plan_features'));
              foreach( $features as $feature ) {
                echo '<li>' . esc_html( trim($feature) ) . '</li>';
              }
            ?>
          </ul>
          <a href="<?php echo esc_url( get_sub_field('plan_link') ); ?>" class="pricing-button">
            <?php echo esc_html( get_sub_field('plan_button_label') ); ?>
          </a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<section class="faq-section container">
  <h2 class="section-title">Questions About Your IPTV Subscription</h2>
  <div class="title-underline"></div>
  <div class="faq-list">
    <?php if( have_rows('faq_items') ): ?>
      <?php while( have_rows('faq_items') ) : the_row(); ?>
        <div class="faq-item">
          <div class="faq-question"><?php echo esc_html( get_sub_field('question') ); ?></div>
          <div class="faq-answer"><?php echo esc_html( get_sub_field('answer') ); ?></div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
