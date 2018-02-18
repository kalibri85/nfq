


<?php $__env->startSection('content'); ?>
	<section class="tm-dark-bg tm-section" id="home">
		<div class="container">
    <?php echo Form::open(['route' => 'city.store']); ?>

        <?php echo $__env->make('city._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

		</div>
		<img src="images/tm-border-black-bottom.png" alt="Border" class="tm-border">
	</section> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>