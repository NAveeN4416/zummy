

<form action="<?php echo base_url(); ?>home/save_dummy" method="post" enctype="multipart/form-data"> 
	Upload : <input type="file" name="image" id="select">
	<input type="submit" value="submit">
</form>

<img id="preview">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>assets/image_resize_js/binaryajax.js"></script>
<script src="<?php echo base_url(); ?>assets/image_resize_js/exif.js"></script>
<script src="<?php echo base_url(); ?>assets/image_resize_js/jquery.exif.js"></script>
<script src="<?php echo base_url(); ?>assets/image_resize_js/jquery.canvasResize.js"></script>

<script src="<?php echo base_url(); ?>assets/image_resize_js/canvasResize.js"></script>


<script>
$('input[name=image]').change(function(e) {
    var file = e.target.files[0];
    canvasResize(file, {
          width: 200,
          height: 0,
          crop: false,
          quality: 80,
          rotate: 90,
          callback: function(data, width, height) {
          $("#preview").attr('src', data);
          }
    });
});
</script>