	
	<?php $__env->startSection('content'); ?>
	<section class="tm-dark-bg tm-section" id="orders">
		<div class="container">
		<div class="row">
		<?php echo $orders->links(); ?>	
                 <?php echo Form::open([ 'method' => 'get', 'class' => 'form-inline']); ?>

		   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sort-white">	
		<div class="form-group col-md-4"><?php echo Form::text('id', null, ['class' => 'form-control', 'placeholder' => 'Užsakymo nr']); ?></div>
	   
		<div class="form-group col-md-6">
		<?php echo Form::select('sort',array(''=>'Rikiuoti pagal:', 'desc'=>'užsakymo datą (mažėjimo tvarka)','asc'=>'užsakymo datą (didėjimo tvarka)')); ?></div>
		
		<div class="form-group col-md-2"><?php echo Form::submit('Ieškoti', ['class'=>'btn btn-primary']); ?></div>
		</div>
    <?php echo Form::close(); ?>  <?//Input::get('income')?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		
				<h1 class="tm-list-title text-uppercase">UŽSAKYMŲ SĄRAŠAS</h1>
				</div>
		        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border_b ">	
                    <div class="col-md-1 tm-white-text">Užsakymo Nr</div> 
		            <div class="col-md-5 tm-white-text">Prekės pavadinimas</div>
		            <div class="col-md-1 tm-white-text">Kiekis</div>
		            <div class="col-md-1 tm-white-text">Kaina</div>
		            <div class="col-md-1 tm-white-text">Bendra suma</div>
		            <div class="col-md-2 tm-white-text">Užsakymo data</div>
					<div class="col-md-1 tm-white-text"></div>
		        </div>	
				
				<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">	
                    <div class="col-md-1 tm-white-text"> <a href="<?php echo route('order.detail',[$order->id]); ?>">#TSR<?php echo $order->id; ?></a></div> 
		            <div class="col-md-5 tm-white-text"><?php echo $order->title; ?></div>
		            <div class="col-md-1 tm-white-text text-center"><?php echo $order->quantity; ?></div>
		            <div class="col-md-1 tm-white-text text-center"><?php echo $order->amount; ?></div>
		            <div class="col-md-1 tm-white-text text-center"><? 
		             $amount = $order->amount;
		             $quantyti = $order->quantity;
		             $price = $amount*$quantyti;
		             echo $price.' €';
		             ?>
		            </div>
		            <div class="col-md-2 tm-white-text"><?php echo date('Y-m-d', strtotime($order->created_at)); ?> </div>
					<div class="col-md-1 tm-white-text"><a href="<?php echo route('order.detail',[$order->id]); ?>" class="btn btn-primary">Peržiūrėti</a></div>
		        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
			</div>				
		</div>		
	</section>


    <section class="tm-section tm-blue-bg" id="uzsakyti">
		<img src="images/tm-border-black-top2.png" alt="Border" class="tm-border">
		<div class="container">
		  <?php echo $orders->links(); ?>	
	     </div>
		<img src="images/tm-border-black-bottom.png" alt="Border" class="tm-border">
	</section>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>