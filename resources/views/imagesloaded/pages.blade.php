
<html>
<head>
  <title>Page Uploads</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

 <link href="assets/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="assets/css/ripples.min.css" rel="stylesheet">

   

  <!-- jQuery -->
  
  <script src="assets/js/jquery/dist/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/carousel.js"></script>

 <style type="text/css">
body{
	background-color: white;

}
.container-fluid {
	background-color: #000066;
}

 </style>


</head>
<body>
	<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Pages Uploads</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
     
    
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="home.html">Home </a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
       																																																																																																																																																																								
       
    </div>
  
  </div>
</div>
<!-- <div style="margin-bottom:100px;"></div>   -->

</body>
</html>
<div class="form">
<h1>page uploads</h1>


{{ Form::open(array('route' => 'Page.store', 'class' => 'form',  'files'=>true, 'enctype' => 'multipart/form-data','class'=>'form-horizontal')) }}

<!-- {!! Form::open(['route' => 'Page.store','enctype' => 'multipart/form-data','class' => 'form-horizontal',  'files'=>true]) !!} -->

  <div class="row">

    <div class="col-md-4">

      <br/>

      {!! Form::text('deskripsi', null,array('class' => 'form-control','placeholder'=>'Add Title')) !!}

    </div>

    <div class="col-md-12">

      <br/>

      {!! Form::file('foto', array('class' => 'foto')) !!}


    </div>

    <div class="col-md-12">

      <br/>

      <button type="submit" class="btn btn-info">Upload Image</button>

    </div>

  </div>

 
{!! Form::close() !!}


</div>
 <!-- <li>{!! link_to(route('Dynamic.index'), "Article") !!}</li>  -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> -->
  <!-- Launch demo modal -->
<!-- </button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> -->
  <!-- <div class="modal-dialog" role="document"> -->
    <!-- <div class="modal-content"> -->
      <!-- <div class="modal-header"> -->
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
      <!-- </div> -->
      <!-- <div class="modal-body"> -->
       <!-- ... -->
      <!-- </div> -->
      <!-- <div class="modal-footer"> -->
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
<!-- </div> -->

