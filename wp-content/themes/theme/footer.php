<!-- Footer -->
<?php $footer = get_field('footer');?>
<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<?php if($footer['twitter_link']): ?>
							<li><a href="<?php echo $footer['twitter_link']?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<?php endif; ?>
						<?php if($footer['facebook_link']): ?>
							<li><a href="<?php echo $footer['facebook_link']?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<?php endif; ?>	
						<?php if($footer['instagram_link']): ?>
							<li><a href="<?php echo $footer['instagram_link']?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<?php endif; ?>	
						<?php if($footer['snapchat_link']): ?>
							<li><a href="<?php echo $footer['snapchat_link']?>" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
						<?php endif; ?>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
				</div>
			</footer>

		<?php wp_footer();?>

	</body>
</html>