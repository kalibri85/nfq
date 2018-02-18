

  <div class="form-group">
      <?php echo Form::label('city'); ?>

    <?php echo Form::text('city', null, ['class'=>'form-control'] ); ?>

</div>

<div class="form-group">
    <?php echo Form::submit('Create', ['class'=>'btn btn-primary']); ?>

</div>