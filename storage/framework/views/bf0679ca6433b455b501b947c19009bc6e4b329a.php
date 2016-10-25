<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	
* { box-sizing: border-box; }

/* force scrollbar */
html { overflow-y: scroll; }

body {
  font-family: sans-serif;
}

/* ---- isotope ---- */



</style>
<script src="/assets/js/jquery/dist/jquery.js"></script>


	
<!-- or -->
<!-- <script src="/public/asset/css/layout.css"></script> -->

</head>
<body>
<script src="/assets/js/masonry/masonry.pkgd.min.js"></script>



<h1>welcome</h1>
<h3>this is views page </h3>
<div class=''>
<div id="gambar">
  <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
  
  
 
  <div class="item">
   <img src="<?php echo '/upload_gambar/'. $page->id . '/thumb_' . $page->foto; ?>" />
    <p><?php echo $page->deskripsi; ?></p>
  </div>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
 </div>
 </div>
<script type="text/javascript">

$('#gambar').masonry({
  // options
  itemSelector: '.item',
  columnWidth: 200
});
	
</script>







</body>
</html>