	
	<?php $__env->startSection('content'); ?>
	<section class="tm-dark-bg tm-section" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img src="images/templatemo-banner.png" alt="Banner" class="img-responsive center-block">				
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-home-right">
						<h1 class="tm-home-title text-uppercase">Lorem ipsum dolor</h1>
						<h2 class="tm-home-subtitle tm-orange-text text-uppercase">consec stur adipiscing elit</h2>
						<div class="tm-home-description">
							<p>Roller HTML5 Template is free responsive layout by <span class="blue">template</span><span class="green">mo</span>. You can download, modify and apply this layout for any of your website. Credits go to <a rel="nofollow" href="http://www.smashingmagazine.com/2012/11/20/art-professions-icons-png/">Art Professions</a> Icon and <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for images.</p>
							<p>Rvel blandit mi condimentum. Aenean finibus eros orci, eget fini noemer stbus .raesent sagittis velit eget dui accumsan pharetra.</p>
						</div>					
						<a href="#contact" class="tm-home-more tm-dark-text tm-orange-bg">Užsakyti</a>
					</div>					
				</div>
			</div>			
		</div>		
	</section>

	<section class="tm-section tm-orange-bg" id="contact">
		<img src="images/tm-border-black-top2.png" alt="Border" class="tm-border">
		<div class="container">
			<h1 class="text-uppercase text-center">Užsakymo forma</h1>
			<p class="text-center margin-top-50">Phasellus sed rutrum quam. Aenean mollis nec metus quis fringilla. Aliquam interdum risus quis sem rhoncus, vel iaculis lorem pulvinar. Maecenas in lorem non quam bibendum auctor vel lobortis sem.</p>
			<div class="row margin-top-50">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	            	<div id="map-canvas"></div>	
	            </div>
	            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		            <form action="#" method="post" class="tm-contact-form">
		                <div class="form-group">
		                    <input type="text" id="contact_name" class="form-control" placeholder="NAME..." />
		                </div>
		                <div class="form-group">
		                    <input type="text" id="contact_email" class="form-control" placeholder="EMAIL..." />
		                </div>
		                <div class="form-group">
		                    <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT..." />
		                </div>
		                <div class="form-group">
		                    <textarea id="contact_message" class="form-control" rows="8" placeholder="WRITE A MESSAGE..."></textarea>
		                </div>
		                <button type="submit" class="btn text-uppercase tm-dark-bg tm-orange-text tm-send-btn">Send</button>
		            </form>
	            </div>
            </div>
		</div>
		<img src="images/tm-border-black-bottom.png" alt="Border" class="tm-border">
	</section> <!-- contact -->
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>