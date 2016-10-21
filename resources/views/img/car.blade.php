{!! Form::model($car, ['action' => 'CarController@store']) !!}

    <div class="form-group">
      {!! Form::label('make', 'Make') !!}
      {!! Form::text('make', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('model', 'Model') !!}
      {!! Form::text('model', '', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success" type="submit">Add the Car!</button>

  {!! Form::close() !!}
