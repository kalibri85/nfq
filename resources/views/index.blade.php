	@extends('app')
	@section('content')
	<section class="tm-dark-bg tm-section" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img src="images/toshiba-satellite-radius-12.png" alt="Banner" class="img-responsive center-block">				
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-home-right">
						<h1 class="tm-home-title text-uppercase">Nešiojamas kompiuteris</h1>
						<h2 class="tm-home-subtitle tm-blue-text text-uppercase">Toshiba Satellite Radius 14 E45W-C4200X</h2>
						<div class="tm-home-description">
<p>
<span class="blue">Gaminio tipas:</span> Hibridinis (du viename)<br>
<span class="blue"> Forma:</span> Atlenkiamas (persilenkiantis)<br>
<span class="blue"> Procesoriaus šeima:</span> Penktos kartos „Intel® Core™ i3“<br>
<span class="blue"> Procesoriaus modelis:</span> i3-5015U<br>
<span class="blue"> Procesoriaus dažnis:</span> 2,1 GHz<br>
<span class="blue">Ekrano įstrižainė:</span> 35,6 cm (14&quot;)<br>
<span class="blue">Ekrano rezoliucija:</span> 1366 x 768 pikseliai, Lietimui jautrus ekranas.<br>
<span class="blue">Vidinė atmintis:</span> 6 GB<br>
<span class="blue">Iš viso talpa: </span>500 GB<br>
<span class="blue">Laikmena: </span> HDD. Integruotas grafikos adapteris.
</p>
<p><div class="col-md-10"></div><div class="col-md-2"><div class="price-tag"><div class="price">1200  €</div></div></div></p>
							
						</div>					
						<a href="#uzsakyti" class="tm-home-more tm-dark-text tm-blue-bg">Pateikti užsakymą</a>
					</div>					
				</div>
			</div>			
		</div>		
	</section>

	<section class="tm-section tm-blue-bg" id="uzsakyti">
		<img src="images/tm-border-black-top2.png" alt="Border" class="tm-border">
		<div class="container">
			<h1 class="text-uppercase text-center">Užsakymo forma</h1>
	<div class="row margin-top-50">
				<div class="col-lg-3 col-md-3 col-sm- col-xs-12">
	            </div>
	            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">


 {!! Form::open(['route' => 'order.store']) !!}
        @include('order._form')
    {!! Form::close()!!}
	            </div>
            </div>
		</div>
		<img src="images/tm-border-black-bottom.png" alt="Border" class="tm-border">
	</section> <!-- contact -->
	@endsection