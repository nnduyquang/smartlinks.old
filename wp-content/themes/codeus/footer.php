<?php if(codeus_get_option('footer_active')) : ?>
	<footer id="footer">

		<?php
			$socials_icons = array('twitter' => codeus_get_option('twitter_active'), 'facebook' => codeus_get_option('facebook_active'), 'linkedin' => codeus_get_option('linkedin_active'), 'googleplus' => codeus_get_option('googleplus_active'), 'stumbleupon' => codeus_get_option('stumbleupon_active'), 'rss' => codeus_get_option('rss_active'));
		?>
		<?php if(codeus_get_option('follow_contacts_active')) : ?>
			<div id="contacts" class="clearfix">
				<div class="central-wrapper">

					<div class="panel clearfix">

						<div class="socials socials-icons center">
							<h2 class="bar-title"><?php if(codeus_get_option("follow_title")) { echo codeus_get_option("follow_title"); } else { _e('Follow Us', 'codeus'); } ?></h2>
							<?php if(codeus_get_option('follow_us_text')) : ?>
								<div class="text"><?php echo apply_filters('the_content', stripslashes(codeus_get_option('follow_us_text'))); ?></div>
							<?php endif; ?>
							<?php if(in_array(1, $socials_icons)) : ?>
								<ul class="styled">
									<?php foreach($socials_icons as $name => $active) : ?>
										<?php if($active) : ?>
											<li class="<?php echo $name; ?>"><a href="<?php echo codeus_get_option($name . '_link'); ?>" target="_blank" title="<?php echo $name; ?>"><?php echo $name; ?></a></li>
										<?php endif; ?>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div><!-- .social-icons -->

						<?php if(codeus_get_option("contacts_html")) : ?>
							<div class="contacts-info sidebar">
								<h2 class="bar-title"><?php if(codeus_get_option("contacts_title")) { echo codeus_get_option("contacts_title"); } else { _e('Contact Us', 'codeus'); } ?></h2>
								<?php echo apply_filters('widget_text', stripslashes(codeus_get_option("contacts_html"))); ?>
							</div>
						<?php endif; ?>
						
					</div><!-- .panel -->

				</div>
			</div><!-- #contacts -->
		<?php endif; ?>

		<div id="bottom-line">
			<div class="central-wrapper">

				<div class="panel">

					<div class="footer-nav center">
						<?php get_sidebar('footer'); ?>
						<?php if(has_nav_menu('footer_nav')) { wp_nav_menu(array('theme_location' => 'footer_nav', 'menu_class' => 'nav-menu styled')); } ?>
					</div><!-- .footer-nav -->

					<div class="site-info sidebar">
						<?php echo stripslashes(codeus_get_option("footer_html")); ?>
					</div><!-- .site-info -->

				</div>

			</div>
			<div class="clear"></div>
		</div><!-- #bottom-line -->

	</footer><!-- #footer -->
<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Google Code dành cho Thẻ tiếp thị lại -->
<!--------------------------------------------------
Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 949371713;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/949371713/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57f1af284a427d15742d30d4/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>