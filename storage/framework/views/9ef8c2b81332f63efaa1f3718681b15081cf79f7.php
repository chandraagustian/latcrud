<?php echo Form::model($car, ['action' => 'CarController@store']); ?>


    <div class="form-group">
      <?php echo Form::label('make', 'Make'); ?>

      <?php echo Form::text('make', '', ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
      <?php echo Form::label('model', 'Model'); ?>

      <?php echo Form::text('model', '', ['class' => 'form-control']); ?>

    </div>

    <button class="btn btn-success" type="submit">Add the Car!</button>

  <?php echo Form::close(); ?>

