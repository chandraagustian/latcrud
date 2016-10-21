 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>



 	<!-- css -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- end -->
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }} "/> 
	  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }} "/>
 </head>
 <body>
  <h1>page upload</h1>

<div class="form-group">
    {!! Form::open() !!}
{!!Form::label('deskripsi', 'deskripsi');!!}
{!!Form::file('image');!!}
{!!Form::submit('upload' , ['class' => 'btn btn-raised btn-info']);!!}


{!! Form::close() !!}
</div>
<!-- {!! Form::open(['url' => 'foo/uy']) !!} -->

 </body>
 </html>




