<link type="text/css" rel="stylesheet" href="css/jquery.galleryview-3.0.css">
<style type="text/css">
/*** set the width and height to match your images **/
    
.gv-panel > img {
  max-width: inherit;
}
#slideshow {
	position: relative;
	height: 185px;
}
#slideshow IMG {
	position: absolute;
	top: 0;
	left: 466;
	z-index: 8;
	opacity: 0.0;
}
#slideshow IMG.active {
	z-index: 10;
	opacity: 1.0;
}
#slideshow IMG.last-active {
	z-index: 9;
}
</style>
<style type="text/css">
#gallery_container {
	margin: 3em 0em;
}
#myGallery {
	margin: 0 auto;
}
pre {
	background: #eee;
	border: 2px solid #ccc;
	padding: 1em;
	overflow: auto;
	margin: 1em;
	max-height: 250px;
}
.style41 {
	font-family: Tahoma, verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #fff;
	line-height: 16px;
	text-decoration: none;
	font-weight: bold;
	text-align: right;
}
.style42 {
	font-family: Tahoma, verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #fff;
	line-height: 16px;
	text-decoration: none;
	font-weight: bold;
	text-align: left;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.timers-1.2.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.galleryview-3.0.js"></script>
<script type="text/javascript"> $(document).ready(function(){
$('#myGallery').galleryView({
panel_width: 669,
panel_height: 343,
frame_width: 300,
frame_height: 60 });
});
</script>
