
	<div class="form-group <?php echo e(( $errors->first('name') ? 'has-error' : NULL)); ?>">
		<?php echo Form::label('name', 'Vardas', ['class' => 'control-label']); ?>

		<?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Jūsų vardas']); ?>


		<?php echo $errors->first('name', '<label class="control-label">:message</label>'); ?>

					
	</div>
	<div class="form-group <?php echo e(( $errors->first('name') ? 'has-error' : NULL)); ?>">
		<?php echo Form::label('surname', 'Pavardė', ['class' => 'control-label']); ?>

		<?php echo Form::text('surname', null, ['class' => 'form-control', 'placeholder' => 'Jūsų pavardė']); ?>


		<?php echo $errors->first('surname', '<label class="control-label">:message</label>'); ?>

	</div>
	<div class="form-group <?php echo e(( $errors->first('email') ? 'has-error' : NULL)); ?>">
		<?php echo Form::label('email', 'El. paštas', ['class' => 'control-label']); ?>

        <?php echo Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Jūsų el. pašto adresas']); ?>


		<?php echo $errors->first('email', '<label class="control-label">:message</label>'); ?>

	</div>

	<div class="form-group <?php echo e(( $errors->first('phone') ? 'has-error' : NULL)); ?>">
		<?php echo Form::label('phone', 'Telefonas', ['class' => 'control-label']); ?>

        <?php echo Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Jūsų telefono numeris']); ?>


		<?php echo $errors->first('phone', '<label class="control-label">:message</label>'); ?>

	</div>

	<div class="form-group <?php echo e(( $errors->first('address') ? 'has-error' : NULL)); ?>">
		<?php echo Form::label('address', 'Adresas', ['class' => 'control-label']); ?>

        <?php echo Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Jūsų registracijos adresas']); ?>


		<?php echo $errors->first('address', '<label class="control-label">:message</label>'); ?>

	</div>

	<div class="form-group <?php echo e(( $errors->first('zipcode') ? 'has-error' : NULL)); ?>">
		<?php echo Form::label('zipcode', 'Pašto kodas', ['class' => 'control-label']); ?>

        <?php echo Form::text('zipcode', '', ['class' => 'form-control', 'placeholder' => '99999']); ?>


		<?php echo $errors->first('zipcode', '<label class="control-label">:message</label>'); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('city', 'Miestas', ['class' => 'control-label']); ?>

		<?php echo Form::select('city',array('Vilnius'=>'Vilnius','Kaunas'=>'Kaunas','Klaipėda'=>'Klaipėda'),'1'); ?>

    </div>
	<div class="form-group">
		<?php echo Form::label('quantity', 'Kiekis', ['class' => 'control-label']); ?>

		<?php echo Form::select('quantity',array('1'=>'1','2'=>'2','3'=>'3'),'1'); ?>

	</div>	               
	<?php echo Form::submit('Užsakyti', ['class'=>'btn btn-primary']); ?>

	