<?php get_header(); ?> <!-- ouvrir header,php -->
<section id="home">
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="https://dummyimage.com/1600x850/3990a8/fff.png" alt="slider">
					<div class="carousel-caption">
						<h2>1 Lorem ipsum dolor sit amet,</h2>
						<h4> Aliquam tincidunt lectus in sapien sodales luctus.</h4>
						<a href="#contact">Savoir plus <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="https://dummyimage.com/1600x850/3990a8/fff.png" alt="slider">
          <div class="carousel-caption">
						<h2>2 Lorem ipsum dolor sit amet,</h2>
						<h4> Aliquam tincidunt lectus in sapien sodales luctus.</h4>
						<a href="#contact">Savoir plus <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="https://dummyimage.com/1600x850/3990a8/fff.png" alt="slider">
					<div class="carousel-caption">
            <h2>3 Lorem ipsum dolor sit amet,</h2>
						<h4> Aliquam tincidunt lectus in sapien sodales luctus.</h4>
						<a href="#contact">Savoir plus <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
    </section>


	<section id="about">
    <h2>Évenements</h2>
		<div class=" col-sm-12">
					<br><h2>About Evento</h2>
					<p>We have created an extremely positive and relaxed environment all geared towards developing your skills whether you are an absolute beginner trying to get off the ground or an accomplished player looking to move to the next level. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					<a href="#" class="btn btn-primary">S'inscrire</i></a>

		</div>
    <div class=" col-sm-12">
          <h2>About Evento</h2>
          <p>We have created an extremely positive and relaxed environment all geared towards developing your skills whether you are an absolute beginner trying to get off the ground or an accomplished player looking to move to the next level. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          <a href="#" class="btn btn-primary">S'inscrire</i></a>

    </div>
	</section><!--/#about-->



	<section id="sponsor">
		<div id="sponsor-carousel" class="carousel slide" data-interval="false">
			<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<h2>Partenaires</h2>
						<a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<ul>
									<li><a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/sponsor/sponsor1.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/sponsor/sponsor2.png" alt=""></a></li>
                  <li><a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/sponsor/sponsor3.png" alt=""></a></li>
								</ul>
							</div>
							<div class="item">
								<ul>
									<li><a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/sponsor/sponsor6.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/sponsor/sponsor5.png" alt=""></a></li>
                  <li><a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/sponsor/sponsor4.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="light">
				<img class="img-responsive" src="images/light.png" alt="">
			</div>
		</div>
	</section><!--/#sponsor-->
<?php get_footer(); ?>
