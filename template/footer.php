<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template
 */

?>

	<footer class="footer">
		<div class="footer-contacts">
			<div class="container">
				<div class="footer-contacts__map-wrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d150505.92958309173!2d27.453285966964405!3d53.88455846269856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfd35b1e6ad3%3A0xb61b853ddb570d9!2z0JzQuNC90YHQug!5e0!3m2!1sru!2sby!4v1642085951693!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="footer-contacts__content-wrapper">
					<h3 class="footer-contacts__title">Свяжитесь с нами</h3>
					<div class="footer-contacts__tels">
						<a href="tel:+375291175617" class="footer-contacts__tel-link">+375 (29) 117 56 17</a>
					</div>
					<div class="footer-contacts__emails">
						<a href="mailto:arhidominvest@yandex.ru" class="footer-contact__email-link">arhidominvest@yandex.ru</a>
					</div>
					<div class="footer-contacts__addresses">
						<div class="footer-contacts__address-wrapper">
							<p class="footer-contacts__address-title">Офис в Минске:</p>
							<p class="footer-contacts__address">Беларусь, Минск</p>
						</div>
					</div>
					<ul class="footer-contacts__social-list">
						<li>
							<a href=""></a>
						</li>
						<li>
							<a href=""></a>
						</li>
						<li>
							<a href=""></a>
						</li>
						<li>
							<a href=""></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-content">
			<div class="container">
				<div class="footer-item">
					<a href="<?= get_home_url() ?>" class="footer-logo">
            			<i class="fa fa-home footer-logo__icon" aria-hidden="true"></i>
            			<span class="footer-logo__txt">АРХИДОМ</br>ИНВЕСТ</span>
        			</a>
				</div>
				<div class="footer-item">
				<?php 
            		wp_nav_menu( [
            		    'theme_location'  => 'footer-menu',
            		    'menu'            => 'Меню в подвале',
            		    'container'       => 'div',
            		    'container_class' => 'footer__menu-wrapper',
            		    'container_id'    => '',
            		    'menu_class'      => 'footer-menu',
            		    'menu_id'         => '',
            		    'echo'            => true,
            		    'fallback_cb'     => 'wp_page_menu',
            		    'before'          => '',
            		    'after'           => '',
            		    'link_before'     => '',
            		    'link_after'      => '',
            		    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            		    'depth'           => 0,
            		    'walker'          => '',
            		] );
        		?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
