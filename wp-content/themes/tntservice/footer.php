
<div class="footer">

	<div class="container">
		<div class="row mb4">
			<div class="col-sm-5">
				<img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/logo.png" class="mb3" alt="">
				<div class="mb3 mb4 line-height-extra">
					<div class="mb2">327 ถนนพรหมราษฎร์ แขวงบางบอน เขตบางบอน กรุงเทพฯ 10150</div>
					<div class="mb2"><strong>Phone:</strong> <a class="tel" href="tel:<?php the_field('phone','options')?>"><?php the_field('phone','options')?></a></div>
					<div class="mb2"><strong>Fax:</strong> <?php the_field('fax','options')?></div>
					<div class="mb2"><strong>Mobile:</strong> <a class="phone" href="tel:<?php the_field('hotline','options')?>"><?php the_field('hotline','options')?></a> , <a class="phone" href="tel:<?php the_field('mobile','options')?>"><?php the_field('mobile','options')?></a></div>
					<div class="mb2"><strong>Email:</strong> <a href="mailto:<?php the_field('email','options')?>"><?php the_field('email','options')?></a></div>
				</div>
			</div>
			<div class="col-sm-3 mb4">
				<h4 class="mb4">บริการของเรา</h4>
				<?php

				$the_query = new WP_Query( array('post_type' => 'service') ); ?>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="mb2"><a href="<?php the_permalink()?>"><i class="fa fa-angle-right"></i> <?php the_title()?></a></div>
				<?php endwhile; ?>


				<?php wp_reset_postdata(); ?>

			</div>
			<div class="col-sm-3 mb4">
				<h4 class="mb4">สินค้าของเรา</h4>
				<div class="mb2"><a href=""><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></div>
				<div class="mb2"><a href=""><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></div>
				<div class="mb2"><a href=""><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></div>
				<div class="mb2"><a href=""><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></div>
				<div class="mb2"><a href=""><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></div>

			</div>
		</div>
	</div>

	<div class="copyright c-white">
		<div class="container">Copyright 2016 TNT Service | All Rights Reserved</div>
	</div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo esc_url(get_template_directory_uri())?>/assets/js/bootstrap.min.js"></script>
<script>
	jQuery('.phone').text(function(i, text) {
		return text.replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');
	});
	jQuery('.tel').text(function(i, text) {
		return text.replace(/(\d{2})(\d{3})(\d{4})/, '$1-$2-$3');
	});
</script>
<?php wp_footer()?>

</body>
</html>