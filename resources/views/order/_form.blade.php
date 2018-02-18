
	<div class="form-group {{ ( $errors->first('name') ? 'has-error' : NULL) }}">
		{!! Form::label('name', 'Vardas', ['class' => 'control-label']) !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Jūsų vardas']) !!}

		{!! $errors->first('name', '<label class="control-label">:message</label>') !!}
					
	</div>
	<div class="form-group {{ ( $errors->first('name') ? 'has-error' : NULL) }}">
		{!! Form::label('surname', 'Pavardė', ['class' => 'control-label']) !!}
		{!! Form::text('surname', null, ['class' => 'form-control', 'placeholder' => 'Jūsų pavardė']) !!}

		{!! $errors->first('surname', '<label class="control-label">:message</label>') !!}
	</div>
	<div class="form-group {{ ( $errors->first('email') ? 'has-error' : NULL) }}">
		{!! Form::label('email', 'El. paštas', ['class' => 'control-label']) !!}
        {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Jūsų el. pašto adresas']) !!}

		{!! $errors->first('email', '<label class="control-label">:message</label>') !!}
	</div>

	<div class="form-group {{ ( $errors->first('phone') ? 'has-error' : NULL) }}">
		{!! Form::label('phone', 'Telefonas', ['class' => 'control-label']) !!}
        {!! Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Jūsų telefono numeris']) !!}

		{!! $errors->first('phone', '<label class="control-label">:message</label>') !!}
	</div>

	<div class="form-group {{ ( $errors->first('address') ? 'has-error' : NULL) }}">
		{!! Form::label('address', 'Adresas', ['class' => 'control-label']) !!}
        {!! Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Jūsų registracijos adresas']) !!}

		{!! $errors->first('address', '<label class="control-label">:message</label>') !!}
	</div>

	<div class="form-group {{ ( $errors->first('zipcode') ? 'has-error' : NULL) }}">
		{!! Form::label('zipcode', 'Pašto kodas', ['class' => 'control-label']) !!}
        {!! Form::text('zipcode', '', ['class' => 'form-control', 'placeholder' => '99999']) !!}

		{!! $errors->first('zipcode', '<label class="control-label">:message</label>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('city', 'Miestas', ['class' => 'control-label']) !!}
		{!!Form::select('city',array('Vilnius'=>'Vilnius','Kaunas'=>'Kaunas','Klaipėda'=>'Klaipėda'),'1')!!}
    </div>
	<div class="form-group">
		{!! Form::label('quantity', 'Kiekis', ['class' => 'control-label']) !!}
		{!!Form::select('quantity',array('1'=>'1','2'=>'2','3'=>'3'),'1')!!}
	</div>	               
	{!! Form::submit('Užsakyti', ['class'=>'btn btn-primary']) !!}
	