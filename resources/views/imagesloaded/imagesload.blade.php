<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- startcss -->

<link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.css') }} "/>
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }} "/>

	<!-- endofs\css -->

	<style type="text/css">
		
* { box-sizing: border-box; }

/* force scrollbar */
html { overflow-y: scroll; }

body { font-family: sans-serif; }

/* ---- grid ---- */

.grid {
  background: #DDD;
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .grid-item ---- */

.grid-sizer,
.grid-item {
  width: 33.333%;
}

.grid-item {
  float: left;
}

.grid-item img {
  display: block;
  max-width: 100%;
}

	</style>
<script type="text/javascript">
         <!--
            function sayHello() {
               alert("Hello World")
            }
         //-->
      </script>



	
</head>
<body>
<h1>Welcome</h1>

<!-- <div class="form-group"> -->
	<!-- {!! Form::open() !!} -->


<!-- {!!Form::label('deskripsi', 'deskripsi');!!} -->
 <!-- {!! Form::text('name', null, array('placeholder'=>'masukan deskripsi')) !!} -->
<!-- {!!Form::file('image');!!} -->
<!-- {!! Form::submit('upload' , ['class' => 'btn btn-raised btn-info']);!!} -->

 
<!-- {!! Form::close() !!} -->

<!-- <li>{!! link_to(route('Dynamic.index'), "Article") !!}</li> -->
<!-- </div> -->


<div class="grid">
  <div class="grid-sizer"></div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" onclick="sayHello()" value="Say Hello" />
  </div>
</div>

 @yield("content")
<button type="button" class="btn btn-primary" onclick="sayHello()" value="Say Hello">Open modal for @mdo</button>









	
<!--  

	// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
/*var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});  */
-->


<!-- <script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script> -->
 
 <!-- <script src="{{ URL::asset('js/bootstrap/bootstrap.js') }}"></script> -->

 <script src="/assets/js/bootstrap/bootstrap.js"></script>
<script src="/assets/js/jquery/jquery-2.2.4.js"></script>
<script src="/assets/js/jquery/jquery-2.2.4.min.js"></script>
     
<script src="/assets/js/mansory/masonry.pkgd.js"></script>

      <script src="/assets/js/mansory/masonry.pkgd.min.js"></script>

      <script src="/assets/js/custom/layout.js"></script>
 
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
</body>
</html>


