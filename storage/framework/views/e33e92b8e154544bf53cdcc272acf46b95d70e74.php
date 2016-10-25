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
<link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.css')); ?> "/> 
	  <link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?> "/>
 </head>
 <body>
  <h1>page upload</h1>

<div class="form-group">
    <?php echo Form::open(); ?>

<?php echo Form::label('deskripsi', 'deskripsi');; ?>

<?php echo Form::file('image');; ?>

<?php echo Form::submit('upload' , ['class' => 'btn btn-raised btn-info']);; ?>



<?php echo Form::close(); ?>

</div>
<!-- <?php echo Form::open(['url' => 'foo/uy']); ?> -->

 </body>
 </html>




