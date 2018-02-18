	@extends('app')
	@section('content')
	<section class="tm-dark-bg tm-section" id="orders">
		<div class="container">
	
          @if (count($orders))     
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		
				<h1 class="tm-list-title text-uppercase">UŽSAKYMAS NR #TSR{{request()->route('id')}} </h1>
				</div>
			@foreach($orders as $order)
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">	
                    <div class="col-md-8 tm-white-text"></div>
		            <div class="col-md-2 tm-white-text">Gavėjas:</div>
		            <div class="col-md-2 tm-white-text">{!! $order->customers->name !!} {!! $order->customers->surname !!}</div>
		        </div>	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">	
                    <div class="col-md-8 tm-white-text"></div>
		            <div class="col-md-2 tm-white-text">Adresas:</div>
		            <div class="col-md-2 tm-white-text">{!! $order->customers->address !!}, {!! $order->customers->city !!}, {!! $order->customers->zipcode !!}</div>
		        </div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">	
                    <div class="col-md-8 tm-white-text"></div>
		            <div class="col-md-2 tm-white-text">Tel.nr:</div>
		            <div class="col-md-2 tm-white-text">{!! $order->customers->phone !!}</div>
		        </div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">	
                    <div class="col-md-8 tm-white-text"></div>
		            <div class="col-md-2 tm-white-text">El.paštas:</div>
		            <div class="col-md-2 tm-white-text">{!! $order->customers->email !!}</div>
		        </div>
		        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border_b ">	
		            <div class="col-md-8 tm-white-text">Prekės pavadinimas</div>
		            <div class="col-md-1 tm-white-text">Kiekis</div>
		            <div class="col-md-1 tm-white-text">Kaina</div>
		            <div class="col-md-2 tm-white-text">Užsakymo data</div>
		        </div>	
				
				
		        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">	
		            <div class="col-md-8 tm-white-text">{!! $order->title !!}</div>
		            <div class="col-md-1 tm-white-text text-center">{!! $order->quantity !!}</div>
		            <div class="col-md-1 tm-white-text text-center">{!! $order->amount !!}</div>
		            <div class="col-md-2 tm-white-text">{!! date('Y-m-d', strtotime($order->created_at)) !!} </div>
		        </div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 list">	
		            <div class="col-md-9 tm-white-text"></div>
		            <div class="col-md-2 tm-white-text border_t">Bendra suma: </div>
		            <div class="col-md-1 tm-white-text border_t"><? 
		             $amount = $order->amount;
		             $quantyti = $order->quantity;
		             $price = $amount*$quantyti;
		             echo $price.' €';
		             ?>
		            </div>
		        </div>
				
            
            @endforeach
			  @else
        <div class="alert alert-warning">
            Tokio užsakymo nėra.
        </div>
    @endif
					
			</div>				
				
	</section>
        <section class="tm-section tm-blue-bg" id="uzsakyti">
		<img src="{!! asset('images/tm-border-black-top2.png') !!}" alt="Border" class="tm-border">
		<div class="container">
	     </div>
		<img src="{!! asset('images/tm-border-black-bottom.png') !!}" alt="Border" class="tm-border">
	</section>
@endsection

