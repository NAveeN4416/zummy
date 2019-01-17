

<div class="breadcrumb-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="breadcrumb-content text-center">
                            <h1 class="breadmome-name">About Us</h1>
		                    <ul>
		                        <li><a href="<?php echo base_url(); ?>home/index"><?php echo $this->lang->line('h_home'); ?></a></li>
		                        <li class="active"><?php echo $this->lang->line('f_about'); ?></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        
<div class="innersection">
		    <div class="container">
		        <div class="row">
             <div class="row">
            <div class="text-center p">
                 <?php if($lang=='en'){ ?> 
            	    <h2><?php echo $about_us['title1_'.$lang] ; ?></h2>
                    <p><?php echo $about_us['content1_en'] ; ?></p>
                 <?php } ?> 
            </div>
			</div>
            <div class="row">
                <div class="col-md-7">
                    <div class="about-img">
                        <img alt="" src="<?php echo base_url().$about_us['image'] ;?>">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2><?php echo $about_us['title2_'.$lang] ; ?></h2>
                        <p><?php echo $about_us['content2_'.$lang] ; ?></p>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">
  
  $(document).ready(function(){

    $('div#cate-toggle').css({"display":"none"});// remove existing

  })


</script>