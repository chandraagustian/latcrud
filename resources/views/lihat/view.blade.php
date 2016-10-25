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
<h3>this is page views</h3>
<div class=''>
<div id="gambar">
  @foreach($pages as $page)
  
  
 
  <div class="item">
   <img src="{!! '/upload_gambar/'. $page->id . '/thumb_' . $page->foto !!}" />
    <p>{!! $page->deskripsi !!}</p>
  </div>
  
  @endforeach
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