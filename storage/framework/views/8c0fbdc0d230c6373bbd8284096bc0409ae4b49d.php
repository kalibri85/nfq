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
    <link href="../../css/font-awesome.min.css" rel="stylesheet"><!-- FontAwesome Icons -->
	<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../../css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
<div id="responsive-menu">
        <ul class="menu-holder">
            <li><a href="#" class="active"><i class="fa fa-home"></i> Titulinis</a></li>
			<li><a href=""><i class="fa fa-list"></i> užsakymų sąrašas</a></li>
        </ul>
    </div>
	<div class="templatemo-header tm-orange-bg-transparent">
		<div class="templatemo-header-inner">					
			<div class="container">
				<h1 class="logo text-uppercase pull-left">Užduo<span class="logo2">tis Nr. 1</span></h1>
					
				<nav class="hidden-xs templatemo-nav pull-right text-uppercase">
				   
					<ul class="menu-holder">
						<li><a href="#" class="active"><i class="fa fa-home"></i> Titulinis</a></li>
						<li><a href=""><i class="fa fa-list"></i> užsakymų sąrašas</a></li>
					</ul>
					
				</nav>
				
<div class="text-right visible-xs">
                    <a href="#" id="mobile_menu"><span class="fa fa-bars"></span></a>
                </div>
	
			</div>
		</div> <!-- templatemo-header-inner -->
	</div> <!-- templatemo-header -->
	
	<?php echo $__env->yieldContent('content'); ?>
	<footer class="text-right tm-dark-bg">		
		<p class="text-uppercase container small">Copyright &copy; 2018</a></p>
	</footer>
	<script src="../../js/jquery-1.11.1.min.js"></script> 
    <script src="../../js/script.js"></script>
        </div>
    </body>
</html>
