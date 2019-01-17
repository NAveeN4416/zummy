
<div class="breadcrumb-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="breadcrumb-content text-center">
                            <h1 class="breadmome-name">Categories</h1>
		                    <ul>
		                        <li><a href="<?php echo  base_url(); ?>home/index"><?php echo $this->lang->line('h_home') ?></a></li>
		                        <li class="active"><?php echo $this->lang->line('b_all_cat'); ?></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        
<div class="innersection">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
                    <div class="new-product-area new-product-area-3 pt-20 pb-50">
  <div class="container">
      <div class="row"> 
          
        <?php if(@$categories) { 

              foreach ($categories as $key => $category) { ?>

          <div class="col-lg-3">
            <div class="single-new-product">
              <div class="product-img"> <a href="<?php echo  base_url(); ?>home/models/<?php echo $category['id'] ;  ?>"> <img src="<?php echo  base_url().$category['image']; ?>" class="first_img" alt="" /> </a> </div>
              <div class="product-content text-center">
                <!-- <h6 class="brand-title"><?php echo $category['name_'.$lang]; ?></h6> -->
                <h3 class="brand-num"><?php echo $category['name_en']; ?></h3>
              </div>
            </div>
          </div>

        <?php } }else { ?>
      
        <h2 class='text-center'>Sorry no Categories found</h2>  
      
        <?php } ?>

<!--           <div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/2.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota Q7</h3>
      
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/3.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota i8</h3>
      
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/4.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota</h3>
      
    </div>
  </div>
</div>

<div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/4.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota</h3>
      
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/2.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota Q7</h3>
      
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/1.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota 86 2018</h3>
      
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/3.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota i8</h3>
      
    </div>
  </div>
</div>

<div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/1.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota 86 2018</h3>
      
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/2.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota Q7</h3>
      
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/3.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota i8</h3>
      
    </div>
  </div>
</div>
<div class="col-lg-3">
  <div class="single-new-product">
    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/filter_models"> <img src="<?php echo  base_url(); ?>assets/frontend/img/brands/4.png" class="first_img" alt="" /> </a> </div>
    <div class="product-content text-center">
      <h6 class="brand-title">Toyota</h6>
      <h3 class="brand-num">Toyota</h3>
      
    </div>
  </div>
</div> -->

      </div>
  </div>
</div>
		            </div>
		        </div>
		    </div>
		</div>



<!-- footer-area-start -->


<style>

.category-menu-list { display:none; }
</style>

<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js" tppabs="http://ableproadmin.com/light/vertical/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js" tppabs="http://ableproadmin.com/light/vertical/assets/js/jquery-ui.min.js"></script>

<script type="text/javascript">
  
  $(document).ready(function(){

    $('div#cate-toggle').css({"display":"none"});// remove existing

  })


</script>
