<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

		 <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
        <!-- Styles -->

	<link href="<?php echo e(asset('css/font-awesome.min.css')); ?> " rel="stylesheet" />
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?> " rel="stylesheet" />
        <link href="<?php echo e(asset('css/style.css')); ?> " rel="stylesheet" />

    </head>
    <body>
        <div class="flex-center position-ref full-height">
       
	<div class="header tm-blue-bg-transparent">
		<div class="header-inner">					
			<div class="container">
				<h1 class="logo text-uppercase pull-left">Užduo<span class="logo2">tis Nr. 1</span></h1>
					
				<nav class="nav pull-right text-uppercase">
				   
					<ul class="menu-holder">
						<li><a href="<?php echo e(url('/')); ?>" class="active"><i class="fa fa-home"></i> Titulinis</a></li>
						<li><a href="<?php echo e(url('/uzsakymu_sarasas')); ?>"><i class="fa fa-list"></i> užsakymų sąrašas</a></li>
					</ul>
					
				</nav>
				
	
			</div>
		</div> <!-- header-inner -->
	</div> <!-- header -->
	
	<?php echo $__env->yieldContent('content'); ?>
	<footer class="text-right tm-dark-bg">		
		<p class="text-uppercase container small">Copyright &copy; 2018</a></p>
	</footer>
	<script src="<?php echo e(asset('js/jquery-1.11.1.min.js')); ?>"></script> 
        <script src="<?php echo e(asset('js/script.js')); ?>"></script>
        </div>
    </body>
</html>
