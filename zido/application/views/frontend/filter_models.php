<?php

        $max_price  = @$this->session->userdata('max_price');
        $min_price  = @$this->session->userdata('min_price');
        $color      = @$this->session->userdata('colors');
        $year       = @$this->session->userdata('year');
        $city       = @$this->session->userdata('city');

?>


<?php if($lang=='ar'){ ?>
  <style>
    .caregory span {
   color: #555;
   float: left;
    
  </style>

<?php } ?>

<style type="text/css">
.overlay {
   position: fixed;
   display: none;
   width: 31%;
   height: 25%;
   top: 36%;
   left: 35%;
   right: 0;
   bottom: 0;
   background-color: #496de2;
   z-index: 15;
   cursor: pointer;
   text-align: center;
   border-radius: 20px;
   color: white;
}

span.fa
{
   color: white;
   font-size: 21px;
   border: 1px solid #fff;
   padding: 7px 8px;
   border-radius: 30%;
   line-height: 23px;
}

.share div{
  background:#1d1d1d;
  color:#fff;
  padding:7px;
  border-radius:5px;
  position:absolute;
  min-width:50px;
  max-width:300px;
  display:none;
  margin-left: -28px;
  margin-top: -10px;
  width: 293px;
}

.share div:before{
  content:'';
  height:3px;
  width:0;
  border:7px solid transparent;
  border-bottom-color:#1d1d1d;
  position:absolute;
  top:-16px;
  left: 235px;
}

 .share1 div{
  background:#1d1d1d;
  color:#fff;
  padding:7px;
  border-radius:5px;
  position:absolute;
  min-width:50px;
  max-width:300px;
  display:none;
  margin-left: 294px;
  margin-top: -10px;
  width: 306px;
}

.share1 div:before{
  content:'';
  height:3px;
  width:0;
  border:7px solid transparent;
  border-bottom-color:#1d1d1d;
  position:absolute;
  top:-16px;
  left: 235px;
}

div a{
  color:#1884BC;
  text-decoration:none;
}

.diff_image
{
  transform: rotate(90deg);
}
</style>



<div class="breadcrumb-area">

  <div class="container">

    <div class="row">

      <div class="col-12">
        <div class="breadcrumb-content text-center">
          <h1 class="breadmome-name">All Brands list</h1>
          <ul>
            <li><a href="<?php echo base_url(); ?>home/index"><?php echo $this->lang->line('h_home'); ?></a></li>

            <li class="active"><?php if($products) { echo $products[0]['category_name'] ;} ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="innersection">

  <div class="container">

    <div class="row">

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

        <div class="bedroom-sideber bg-white">

          <div class="bedroom-title text-uppercase">

            <h4><?php echo $this->lang->line('fm_filter'); ?></h4>

          </div>

        </div>

        

        <!-- price-slider-area-start -->

        <form id="advanced_filter" name="advanced_filter_form" method="POST" action="<?php echo base_url();  ?>home/session_variables" >

        <!-- <input type="hidden" value="<?php echo current_url(); ?>" name='current_url'> -->

        <div class="price-slider-area filter-bg">

          <h3 class="bedroom-side-title"><?php echo $this->lang->line('fm_price'); ?> SAR</h3>

          <p>
            <input type="range" id="slider-range" min="500" max="100000" value="<?php echo ($max_price) ? $max_price : 25000 ; ?>" step="100" name="price_range" oninput="sliderChange(this.value)">
            <p style="border:0; color:#f6931f; font-weight:bold;">
              
              <input name="min_price" value="<?php echo ($min_price) ? $min_price : 500 ; ?>" style="width: 100px;border:none"> 

              <input name="max_price" id='change' style="float: right;width: 100px;border:none" class="text-right" value="<?php echo ($max_price) ? $max_price : 25000 ; ?>">
            </p>
          </p>

        </div>

      
        <!-- Category-start -->
        
        
        <!--<div class="category-area-start filter-bg">
						<div class="caregory manufacturer cli">
							<h3 class="bedroom-side-title brand" >Brand</h3>
							<ul>
								<li><a href="#"> Toyota <span><label class="c-container">
								 <input type="checkbox" >
  								<span class="checkmark"></span>
									</label></span></a></li>
								<li><a href="#"> Audi <span><label class="c-container">
								 <input type="checkbox" >
  								<span class="checkmark"></span>
									</label></span></a></li>
								<li><a href="#"> BMW <span><label class="c-container">
								 <input type="checkbox" >
  								<span class="checkmark"></span>
									</label></span></a></li>
								<li><a href="#">Mercedes Benz <span><label class="c-container">
								 <input type="checkbox" >
  								<span class="checkmark"></span>
									</label></span></a></li>
							</ul>
						</div>
					</div>-->


        

        <!-- Category-end -->

<!--         <div class="sideber-color filter-bg">

  <h3 class="bedroom-side-title">Color</h3>

  <ul>

    <li> <a href="#"></a> </li>

    <li class="bg-colo-3"> <a href="#"></a> </li>

    <li class="bg-colo-4"> <a href="#"></a> </li>

    <li class="bg-colo-5"> <a href="#"></a> </li>

    <li class="bg-colo-6"> <a href="#"></a> </li>

    <li class="bg-colo-6"> <a href="#"></a> </li>

    <li class="bg-colo-7"> <a href="#"></a> </li>

    <li class="bg-colo-8"> <a href="#"></a> </li>

    <li class="bg-colo-9"> <a href="#"></a> </li>

    <li class="bg-colo-10"> <a href="#"></a> </li>

  </ul>

</div> -->

        <div class="category-area-start filter-bg">
            <div class="caregory manufacturer cli">
              <h3 class="bedroom-side-title brand" ><?php echo $this->lang->line('fm_color'); ?></h3>
              <ul>
                <br>

                <?php foreach($colors as $key=>$color) { ?>
                  <li> <?php echo $color['color_'.$lang] ; ?> <span><label class="c-container">
                   <input type="checkbox" name="colors[]" value="<?php echo $color['id']; ?>"> <span class="checkmark"></span></label></span>
                  </li>
                  <br>
                <?php } ?>

              </ul>
            </div>
        </div>

        <!-- .sideber-color-end --> 


        <!-- sideber-ads-start -->
        
        <div class="category-area-start filter-bg">
						<div class="caregory manufacturer cli">
							<h3 class="bedroom-side-title brand" ><?php echo $this->lang->line('fm_year'); ?></h3>
              <br>
              <select class="cust-select" name='year' style="width: 200px;border: none">
              <option selected="selected" value=''>--<?php echo $this->lang->line('fm_select'); ?>--</option>
              
              <?php 

                $present_year = date('Y') - 2; 

                $past_year  = 1900 ;

                for($past_year; $past_year<=$present_year; $past_year+=10) { 
              ?>
                
               <option value="<?php echo $past_year; ?>"  <?php echo ($year==$past_year) ? 'selected' : '' ;  ?> >
                <?php echo $past_year;  ?> - <?php echo $past_year + 10; ?> 
               </option>

							<?php } ?>
              </select>
						</div>
					</div>

        <div class="category-area-start filter-bg">

          <div class="caregory manufacturer cli">

            <h3 class="bedroom-side-title brand"><?php echo $this->lang->line('fm_city'); ?></h3>
              <br>

              <select class="cust-select" name='city' style="width: 200px;border: none">
                  <option selected="selected" value=''>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                  <?php foreach($cities as $key=>$city) { ?>
                    <option value="<?php echo $city['id']; ?>"  <?php echo ($city==$city['id']) ? 'selected' : '' ;  ?>>
                     <?php echo $city['name_'.$lang] ;  ?> 
                    </option>
                  <?php } ?>
              </select>


          </div>

        </div>
        
        <button type="submit" class="btn btn-primary" style="float: right"><?php echo ($lang=='en') ? 'Filter' : 'منقي' ; ?> </button>

        </form>
        

        <!-- sideber-ads-end --> 

        

      </div>

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"> 

        

        <!-- category-products-area-start -->

        

        <div class="caregory-products-area">

          <div class="col-md-12 bg-white">
          
          <div class="row">

            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">

              <ul class="tab_menu">

                <li class="active"><a href="#viewed" data-toggle="tab"><i class="fa fa-th"></i></a></li>

                <li><a href="#random " data-toggle="tab"><i class="fa fa-list"></i></a></li>

              </ul>

            </div>

            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">

              <div class="product-option">

                <div class="porduct-option-left floatleft"> <span><?php echo $this->lang->line('fm_total_items'); ?> <?php echo sizeof($products); ?></span> </div>

                <div class="product-option-right floatright">

                <form  method="POST" action="<?php echo base_url(); ?>home/session_variables" >
                  <div class="sort-by">

                    <label><?php echo $this->lang->line('fm_sort_by'); ?>:</label>
                  
                  <input type="hidden" value="<?php echo current_url(); ?>" name="current_url">

                    <select class="cust-select" onchange="this.form.submit()" name='vars'>
                      <option selected="selected">--<?php echo $this->lang->line('fm_select'); ?>--</option>
                      <option value="1"> <?php echo $this->lang->line('fm_year'); ?>    – <?php echo $this->lang->line('fm_newest'); ?>   </option>
                      <option value='2'> <?php echo $this->lang->line('fm_year'); ?>    – <?php echo $this->lang->line('fm_oldest'); ?>   </option>
                      <!--<option value="3"> <?php// echo $this->lang->line('fm_mileage'); ?>  – <?php //echo $this->lang->line('fm_highest'); ?>  </option>-->
                      <option value="3"> <?php echo $this->lang->line('fm_newly_listed'); ?> </option>
                      <option value="4"> <?php echo $this->lang->line('fm_mileage'); ?> – <?php echo $this->lang->line('fm_lowest'); ?>   </option>
                      <option value="5"> <?php echo $this->lang->line('fm_price'); ?>   – <?php echo $this->lang->line('fm_highest'); ?>  </option>
                      <option value="6"> <?php echo $this->lang->line('fm_price'); ?>   – <?php echo $this->lang->line('fm_lowest'); ?>   </option>
                    </select>

                
                  </div>
              </form>

<!--                   <div class="sort-by">

  <label>Show:</label>

  <select class="cust-select cust-select-2">

    <option selected="selected">10</option>

    <option>50</option>

    <option>100</option>

    <option>150</option>

    <option>200</option>

  </select>

</div> -->

                </div>

              </div>

            </div>

          </div>
          
          </div>

          <div class="tab-content ptb-20">

            <div class="tab-pane active" id="viewed">

              <div class="row">

              <?php foreach ($products as $key => $product) { ?>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                  <div class="single-new-product">

                    <div class="product-img"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id'] ; ?>"> <img src="<?php echo base_url().$product['image']; ?>" style="object-fit: contain;" class="first_img <?php if($product['image_res_flag']) { echo 'diff_image' ;} ?>" alt="" /> </a> </div>

                    <div class="product-content text-center">

                      <h6 class="brand-title share"><?php echo $product['category_name']; ?>
                        <a href="javascript:" class="share-icon" onclick="share('<?php echo $key ; ?>')">
                          <i class="fa fa-share-alt" ></i>
                        </a>
                        <div>
                          <a href="<?php echo base_url(); ?>home/share_product/twitter/<?php echo $product['product_id']; ?>" class="btn btn-social-icon btn-twitter"  target="_blank">
                            <span><img src="<?php echo base_url(); ?>assets/social_icons/Twitter.png" ></span>
                          </a>
                          <a href="<?php echo base_url(); ?>home/share_product/facebook/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
                            <span><img src="<?php echo base_url(); ?>assets/social_icons/Facebook.png" ></span>
                          </a>
                          <a href="<?php echo base_url(); ?>home/share_product/linkedin/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
                            <span><img src="<?php echo base_url(); ?>assets/social_icons/linkedian.png" ></span>
                          </a>
                          <a href="<?php echo base_url(); ?>home/share_product/google/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
                            <span><img src="<?php echo base_url(); ?>assets/social_icons/gplus.png" ></span>
                          </a>
                        </div>
                      </h6>

                      <h3 class="brand-num"><?php echo $product['sub_category_name']; ?></h3>

                      <h5 class="location-year"><?php echo $product['country_name']; ?> <span><?php echo $product['year']; ?> Yr</span></h5>

                      <div class="price-bid">

                        <h4><?php echo $product['price']; ?> SAR <a class="view-deal" href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id'] ?>"><?php echo $this->lang->line('i_view_d'); ?></a></h4>

                      </div>
                      
                      <div class="posted-date">
                        <h6><?php echo $product['created_at']; ?></h6>
                      </div>
                      <div class="posted-date">
                          <h6>minimum bid - <?php echo $product['min_bid'] ; ?> SAR</h6>
                      </div>
                    </div>

                  </div>

                </div>

              <?php } ?>

              <?php if(!$products) { ?>
    
              <h1 class="text-center"><?php echo ($lang=='en') ? 'Sorry! No Products found' : 'نعتذر ال توجد سيارة بالمواصفات المطلوبة
'  ;?></h1>
  
              <?php } ?>

              </div>

            </div>
          

            <div class="tab-pane" id="random">

            <?php foreach ($products as $key => $product) {  ?>

              <div class="single-category-product filter-bg">

                <div class="single-category-product-img"> 
                  <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>"><img src="<?php echo base_url().$product['image']; ?>" style="height:300px;object-fit: contain;" class="<?php if($product['image_res_flag']) { echo 'diff_image' ;} ?>" alt="" /></a> 
                </div>

                <div class="single-category-product-info"> <a href="javascript:">

                  <h2 class="share1"><strong><?php echo $product['category_name']; ?></strong> 

                    <span class="share-icon" style="font-size: 20px !important"><i class="fa fa-share-alt"></i></span>
                    <div>
                          <a href="<?php echo base_url(); ?>home/share_product/twitter/<?php echo $product['product_id']; ?>" class="btn btn-social-icon btn-twitter"  target="_blank">
                            <span><img src="<?php echo base_url(); ?>assets/social_icons/Twitter.png" ></span>
                          </a>
                          <a href="<?php echo base_url(); ?>home/share_product/facebook/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
                            <span><img src="<?php echo base_url(); ?>assets/social_icons/Facebook.png" ></span>
                          </a>
                          <a href="<?php echo base_url(); ?>home/share_product/linkedin/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
                            <span><img src="<?php echo base_url(); ?>assets/social_icons/linkedian.png" ></span>
                          </a>
                          <a href="<?php echo base_url(); ?>home/share_product/google/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
                            <span><img src="<?php echo base_url(); ?>assets/social_icons/gplus.png" ></span>
                          </a>
                    </div>
                  </h2>

                  <h3 class="brand-num"><?php echo $product['sub_category_name']; ?></h3>

                  </a>

                  <div class="price category-price">

                    <h4><?php echo $product['price']; ?> SAR</h4>

                    <!--<h3 class="del-price"><del>450 SAR</del></h3>-->

                    <h5 class="location-yeasr"><?php echo $product['country_name']; ?> <span><?php echo $product['year']; ?> Yr</span></h5>

                  </div>
                  
                  <div class="posted-date">
                      <h6><?php echo $product['created_at']; ?></h6>
                  </div>
                  <div class="posted-date">
                      <h6>minimum bid - <?php echo $product['min_bid'] ; ?> SAR</h6>
                  </div>

                  <p><?php echo $product['description']; ?></p>

                  <div class="new-product-action2 category-cart"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>" class="bg-black">View Deal</a> </div>

                </div>

              </div>
            
            <?php } ?>
            
            <?php if(!$products) { ?>
    
              <h1 class="text-center">No Products found</h1>
  
            <?php } ?>

            </div>

          </div>

        </div>

        

        <!-- category-products-area-end --> 

        

        <!-- pagination-area-start --> 

        

        <!-- pagination-area-end --> 

        

      </div>

    </div>

  </div>

</div>



<!-- bedroom-all-product-area-end --> 

<!--

<?php foreach($products as $key=>$product){ ?>
    <div class="overlay<?php echo $key ; ?> hide">
          <span class="closeit<?php echo $key ; ?>" onclick="closeit('<?php echo $key ; ?>')" style="color: white;margin-left: 85%">x</span>
        <p>
          <a href="<?php echo base_url(); ?>home/share_product/twitter/<?php echo $product['product_id']; ?>" class="btn btn-social-icon btn-twitter "  target="_blank">
            <span class="fa fa-twitter" style="color: white;"></span>
          </a>
          <a href="<?php echo base_url(); ?>home/share_product/facebook/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
            <span class="fa fa-facebook " style="color: white;"></span>
          </a>
          <a href="<?php echo base_url(); ?>home/share_product/linkedin/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
            <span class="fa fa-linkedin " style="color: white;"></span>
          </a>
          <a href="<?php echo base_url(); ?>home/share_product/google/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
            <span class="fa fa-google-plus " style="color: white;"></span>
          </a>
        </p>
        <p style="color: white;font-size: 25px"><?php echo ($lang=='en') ? 'Share this Product' : 'شارك هذه السيارة
' ; ?> <?php echo $product['category_name'];  ?></p>    
    </div>
<?php } ?>

-->










<!-- contact-area-start -->



<style>



.category-menu-list { display:none; }

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  
function sliderChange(value)
{
  $('#change').val(value);
}


function share($key)
{

  var string = "overlay"+$key;

  $("."+string).removeClass('hide');
  $("."+string).fadeIn().addClass('overlay');

}

function closeit($key)
{
  var string = "overlay"+$key;

   $("."+string).addClass('hide');

   $("."+string).fadeOut('slow') ;
}


$(document).ready(function(){
  $('.share').click(function(){
  var pos = $(this).position();
  $(this).find('div').css('top', (pos.top)+50 + 'px').toggle();

  });
  $('.share1').click(function(){
  var pos = $(this).position();
  $(this).find('div').css('top', (pos.top)+50 + 'px').toggle();

  });
});
  


</script>