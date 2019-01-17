<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript">
  
  $(document).ready(function(){

    $('div#cate-toggle').css({"display":"none"});// remove existing

  })


</script>




<style>
.rating-body  {
    width: 35%;
    margin: 0 auto;
}
.rating-star-block {
    padding-top: 40px;
    text-align: left;
}
.rating-star-block h3 { padding-bottom:10px; }


.overlay {
   position: fixed;
   display: none;
   width: 31%;
   height: 16%;
   top: 36%;
   left: 0;
   right: 0;
   bottom: 0;
   background-color: #232427;
   z-index: 15;
   cursor: pointer;
   text-align: center;
   border-radius: 20px;
   color: white;
   margin: 0 auto;
}

span.fa
{
   color: white;
   font-size: 21px;
   border: 1px solid #fff;
   padding: 7px 8px;
   border-radius: 50%;
   line-height: 23px;
   margin-left: 93%;
}

.diff_image
{
  transform: rotate(90deg) !important;
}

</style>


        <?php
      //Getting message variable in from session
      
            $session = $this->session->userdata() ;

            $flag = (@$session['status']) ? 1 : 0 ;

            $status  = @$session['status'] ;
            $message = @$session['message'] ;

            if($status==3)
            {
              $style = 'danger' ;
            }
            elseif($status==1)
            {
              $style = 'success' ;
            }
            else
            {
              $style = 'info' ;
            }


            $this->session->unset_userdata('status');
            $this->session->unset_userdata('message');

         ?>





<div class="breadcrumb-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-content text-center">
          <h1 class="breadmome-name"><?php echo $this->lang->line('v_deal'); ?></h1>
          <ul>
            <li><a href="<?php echo base_url(); ?>home/index"><?php echo $this->lang->line('h_home'); ?></a></li>
            <li class="active"><?php echo $this->lang->line('v_deal'); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="all-hyperion-page innersection">
  <div class="container">

        <div class="alert alert-<?php echo $style ; ?> <?php if($flag=='0') { echo 'hide' ; } ?>">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a>
            <strong>Message : </strong> <?php echo $message ; ?>
        </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
        <!-- product-simple-area-start -->
        <div class="product-simple-area pb-40">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="tab-content">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <?php foreach ($product_details['images'] as $key => $product) { ?>
                          <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php if($key==0) { echo 'active' ; } ?>"></li>
                         <?php } ?>
                      </ol>
                    
                    <div class="carousel-inner">
                      <?php foreach ($product_details['images'] as $key => $product) { ?>

                        <div class="tab-pane item <?php if($key==0) { echo 'active' ; } ?>" id="view<?php echo $key+1; ?>"> <a class="image-link" href="<?php echo base_url().$product['image']; ?>" alt="Image">
                          <img class="<?php if(@$product['image_res_flag']==90) { echo 'diff_image' ; } ?>"   height="350" width="450" style="height: 240px;width: 500px;object-fit: contain;" src="<?php echo base_url().$product['image']; ?>" alt=""></a>
                        </div>
                      <?php } ?>
                    </div>

                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-double-left" style="color:blue"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-double-right" style="color:blue"></i>
                        <span class="sr-only">Next</span>
                      </a>

                </div>
              </div>
              <!-- Nav tabs -->

              <ul class="sinple-tab-menu" role="tablist">
              
              <?php foreach ($product_details['images'] as $key => $product) { ?>
                  <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php if($key==0) { echo 'active' ; } ?>">
                    <a href="#view<?php echo $key+1; ?>" data-toggle="tab">
                    <img src="<?php echo base_url().$product['image']; ?>"  class="<?php if(@$product['image_res_flag']==90) { echo 'diff_image' ; } ?>" alt="image<?php echo $key+1; ?>" height="100" style="height: 40px;width: 300px;object-fit: contain;"/>
                    </a>
                  </li>
              <?php

              //Display only four sub images
              if($key==4)
              {
                break;
              }


               } ?>

              </ul>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="product-simple-content">
                <div class="sinple-c-title">
                  <h3><?php echo  $product_details['category_name'] ; ?>
                  <div class="action-heiper pull-right"> 
                    <a href="javascript:" id="overlay">
                      <span>
                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                      </span>
                    </a> 
  
                    <a href="<?php echo base_url(); ?>home/favorite_unfavorite/<?php echo $flag ; ?>/<?php echo $product_details['product_id'] ; ?>">
                      <span  title="<?php echo  (@$product_details['is_favorite_flag']) ? 'Your favorite' :'' ; ?>" >
                        <input type="hidden" name="image" style="cursor: pointer" onclick="this.form.submit()">
                        <i class="fa fa-heart<?php echo  (@$product_details['is_favorite_flag']) ? '' :'-o' ; ?>" aria-hidden=""></i>
                      </span>
                  </a> 

                </div>
              </h3>

                <h2><?php echo  $product_details['sub_category_name'] ; ?> 2018</h2>
                </div>
                <h4 class="price-tag"><?php echo  $product_details['price'] ; ?> SAR </h4>

                <div class="new-product-action2 category-cart"> 
                  <button style="color: white" class="bg-black btn-lg" data-toggle="modal" data-target="#bidding">
                    <?php echo ($lang=='en') ? 'Bid' : 'المزاودة' ; ?>
                  </button>
                 </div>
              </div>
            </div>
          </div>
        </div>

        <!-- product-simple-area-end -->

        <div class="product-info-detailed pb-80">

          <div class="row">
            <div class="col-lg-12">
              <div class="product-info-tab"> 
                <!-- Nav tabs -->
                <ul class="product-info-tab-menu" role="tablist">

                  <li class="active"><a class="rtl-vehicleview" href="#reviews" data-toggle="tab"><?php echo $this->lang->line('v_overview'); ?></a></li>
                  <?php if(@$user_id && @$subscription_status){ ?>
                    <li><a href="#details" data-toggle="tab"><?php echo $this->lang->line('v_car_info'); ?></a></li>
                  <?php } ?>
                  <li><a href="#reviews1" data-toggle="tab"><?php echo $this->lang->line('v_sell_bid_info'); ?></a></li>

                </ul>

                <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="reviews">
        <div class="customer-review-top">
                      <!--<h5 class="heading-info">Vehical Overview</h5>-->
          <div class="col-md-12">

          <div class="col-md-3">
            <div class="media">
							<div class="media-left"> <img src="<?php echo base_url(); ?>assets/frontend/img/icons/1.png" class="media-object" > </div>
							<div class="media-body rtl-review">
								<h4><?php echo  $product_details['category_name'] ; ?></h4>
								<p><?php echo $this->lang->line('v_make'); ?></p>
							</div>
						</div>
          </div>

          <div class="col-md-3">
            <div class="media">
							<div class="media-left"> <img src="<?php echo base_url(); ?>assets/frontend/img/icons/2.png" class="media-object" > </div>
							<div class="media-body rtl-review">
								<h4><?php echo  $product_details['sub_category_name'] ; ?></h4>
								<p><?php echo $this->lang->line('v_model'); ?></p>
							</div>
						</div>
          </div>

          <div class="col-md-3">
            <div class="media">
							<div class="media-left"> <img src="<?php echo base_url(); ?>assets/frontend/img/icons/3.png" class="media-object" > </div>
							<div class="media-body rtl-review">
								<h4><?php echo  $product_details['year'] ; ?></h4>
								<p><?php echo $this->lang->line('v_year'); ?></p>
							</div>
					  </div>
          </div>

          <div class="col-md-3">
            <div class="media">
              <div class="media-left"> <img src="<?php echo base_url(); ?>assets/frontend/img/icons/4.png" class="media-object"> </div>
							<div class="media-body rtl-review">
								<h4><?php echo  $product_details['milage'] ; ?></h4>
								<p><?php echo $this->lang->line('v_mileage'); ?></p>
							</div>
						</div>
          </div>

      </div>   

                      <!-- service-area-start -->

		<div class="pt-80">

      <div class="col-md-12">

				<div class="row properties-list">	
						<div class="col-lg-4">
							<div class="single-service text-center">
								<h3><?php echo $this->lang->line('v_ext_color'); ?></h3>
                <h4><?php echo  $product_details['exterior_color'] ; ?></h4>
							</div>						
						</div>
						<div class="col-lg-4">
							<div class="single-service text-center">
								<h3><?php echo $this->lang->line('v_int_color'); ?></h3>
                <h4><?php echo  $product_details['interior_color'] ; ?></h4>
							</div>						
						</div>
						<div class="col-lg-4">
							<div class="single-service text-center">
								<h3><?php echo $this->lang->line('v_inspected'); ?></h3>
                <h4><?php echo  $product_details['inspected'] ; ?></h4>
							</div>						
						</div>
						<div class="col-lg-4">
							<div class="single-service text-center">
								<h3><?php echo $this->lang->line('v_cylinder'); ?></h3>
                <h4><?php echo  $product_details['cylinders'] ; ?></h4>
							</div>						
						</div>
						<div class="col-lg-4">
							<div class="single-service text-center">
                   <!-- <i class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i> -->
                   <h3><?php echo $this->lang->line('v_gear'); ?></h3>
                  <h4><?php echo  $product_details['gears'] ; ?></h4>
							</div>						
						</div>
						<div class="col-lg-4">
							<div class="single-service text-center">
								<h3><?php echo $this->lang->line('v_sun_roof'); ?></h3>
                <h4><?php echo  $product_details['sun_roof'] ; ?></h4>
							</div>						
						</div>
            <div class="col-lg-4">
							<div class="single-service text-center">
								<h3><?php echo $this->lang->line('v_min_bid'); ?></h3>
                <h4><?php echo  $product_details['min_bid'] ; ?> SAR</h4>
							</div>						
						</div>
            <div class="col-lg-4">
							<div class="single-service text-center">
								<h3><?php echo $this->lang->line('v_region'); ?></h3>
                <h4><?php echo  $product_details['country_name'] ; ?></h4>
							</div>						
						</div>
            <div class="col-lg-4">
                <div class="single-service text-center text-red">
                  <h3><?php echo $this->lang->line('v_pin_num'); ?></h3>
                  <h4><?php echo  $product_details['serial_num'] ; ?></h4>
                </div>
            </div>
				</div>
			</div>

		</div>

		<!-- service-area-end -->

    </div>

    </div>

    <div class="tab-pane" id="details">
        <div class="product-info-tab-content">

              <!--<h5 class="heading-info">Car Information</h5>-->
              <h5><?php echo ($lang=='en') ? 'Car Type' : 'نوع السيارة' ; ?></h5>
                <p><?php echo  @$product_details['car_type'] ; ?></p> <br>  
              <h5><?php echo ($lang=='en') ? 'Deal Title' : 'عنوان العرض ' ; ?></h5>
                <p><?php echo  @$product_details['deal_title'] ; ?></p> <br>
              <h5><?php echo ($lang=='en') ? 'Other Info' : 'معلومات اخرى' ; ?></h5>  
                <p><?php echo  @$product_details['other_info'] ; ?></p> <br>
              <h5><?php echo ($lang=='en') ? 'Description' : 'وصف' ; ?></h5>  
                <p><?php echo  @$product_details['description'] ; ?></p> 
 <!--                <ul>
   <li> Lorem ipsum dolor sit amet.</li>
   <li>Lorem ipsum dolor sit amet.</li>
   <li>Lorem ipsum dolor sit amet.</li>
 </ul> -->
              </div>
    </div>

  <div class="tab-pane" id="reviews1">

    <div class="customer-review-top">
      <!--<h5 class="heading-info">Sellar Details</h5>-->
    </div>
					<div class="row">
              <div class="col-md-12">
                    <div class="col-md-5 sleer-details br-right">
                        <h2 class="bidder-name"><?php echo $this->lang->line('v_sellar'); ?></h2>
                        <div class="media-left"> 
                        
                        <?php if(@$user_id && @$subscription_status){ ?>
                          <img src="<?php echo base_url().$product_details['seller_details']['image']; ?>" class="media-object" > 
                        <?php }else{ ?>
                          <img src="http://www.volive.in/zido/assets/uploads/user_profiles/profile.png" class="media-object" > 
                        <?php } ?>

                        </div>
          							<div class="media-body">
          								<h4><?php echo  $product_details['seller_details']['username'] ; ?></h4>

          								<div class="single-customer-rating"> 
                            <i class="fa fa-star-o"></i> 
                            <i class="fa fa-star-o"></i> 
                            <i class="fa fa-star-o"></i> 
                            <i class="fa fa-star-o"></i> 
                            <i class="fa fa-star-o"></i> 

                          </div>
          							</div>
                    </div>

                  <?php if(!$packages){ ?>

                    <div class="col-md-6 sleer-details">
                        <h2 class="bidder-name">

                          <?php echo ($lang=='en') ? 'If you want to see the Seller Info' : 'إذا كنت ترغب في الاطلاع على معلومات البائع' ;?>


                        </h2>
                        <a href="<?php echo base_url(); ?>home/subscription" class="Subscrption-btn">

                        <?php echo ($lang=='en') ? 'Subscription' : 'اشتراك' ; ?>

                      </a>
                    </div>
                  
                  <?php }else{ if($packages['status']==0) { ?>

                      <p>

                        <?php echo ($lamg=='en') ? 'Your Package is' : 'الحزمة الخاصة بك' ; ?>  


                        <span style="color: red"> InActive </span>


                        <?php echo ($lang=='en') ? 'Please complete payment to enjoy our services :)' : 'يرجى استكمال الدفع للاستمتاع بخدماتنا :)' ; ?>

                        </p>
                      

                      <button type="button" class="btn btn-primary waves-effect waves-light activate" data-toggle="modal"  data-target = "#add" data-id="<?php echo $userdata['id'] ;?>"  style="float: none">
                      <span class="icofont icofont-ui-edit">Activate</span></button>
                      <br><br>
                      <p>

                      <?php echo ($lang=='en') ? 'If you want select new Package Subscribe here' : 'إذا كنت تريد اختيار حزمة جديدة اشترك هنا' ; ?>

                    </p>
                      <a class="btn btn-primary waves-effect waves-light" href="<?php echo base_url(); ?>home/subscription">
                      <?php echo ($lang=='en') ? 'Subscription' : 'اشتراك' ; ?>
                    </a>
                      

                  <?php }else{ ?>
                  
                    <div class="col-md-6 sleer-details">
                        <h2 class="bidder-name">
                        <?php echo ($lang=='en') ? 'Thanks for using ZIDO' : 'شكرا لاستخدام ZIDO' ; ?>
                      </h2>
                    </div>

                  <?php  } } ?>

              </div>
          </div>

        <?php if(@$product_details['bidder_details']) { ?>
          <div class="row">
            <h2 class="bidder-name"><?php echo $this->lang->line('v_last_bid'); ?></h2>
          </div>
        <?php } ?>

        <?php foreach ($product_details['bidder_details'] as $key => $bidder) {   ?>

          <div class="row">
            <div class="col-md-12">
                <div class="col-md-5 sleer-details">
                    <!-- <h2 class="bidder-name">Last Bidder Name</h2> -->
                    <div class="media-left"> <img src="<?php echo base_url().$bidder['image'] ; ?>" class="media-object" > </div>
                              <div class="media-body">
                                <h4><?php echo $bidder['username'] ; ?><p style="color: blue;font-size: 13px"><?php echo $bidder['bid_value']; ?> SAR</p></h4>

                                <div class="single-customer-rating"> 
                                
                                <?php for($i=1; $i<=5;$i++) { 

                                      if($i<=$bidder['user_rating']){ ?>

                                        <i class="fa fa-star"></i>

                                      <?php }else{ ?>   

                                        <i class="fa fa-star-o"></i>
                                        
                                <?php } } ?>
                                </div>
                              </div>
                </div>
            </div>
          </div>

        <?php  } ?>

      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="bidding" role="dialog">

    <div class="modal-dialog">

      <!-- Modal content-->

      <div class="modal-content advanced-search">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="<?php echo ($lang=='ar') ? 'float: left;' : '' ;?> ?>">&times;</button>
          <h4 class="modal-title"><?php echo ($lang=='en') ? 'Bidding' : 'المزاودة' ; ?></h4>
        </div>
        
        <div class="modal-body">
        <form method="POST" action="<?php echo base_url(); ?>home/product_bidding">
          <div class="input-group">
<!--<p class="error-msg">System does not accept lessthan the minimum Bid</p>-->
                <input type="hidden" name="data[product_id]" value="<?php echo $product_details['product_id'] ;  ?>" id="product_id">
                
                <span id="bid_validation" style="color: red"></span>
                <input type="number" id="bid_value" onkeyup="check_min_bid(this.value)" class="form-control" name="data[bid_value]" placeholder="<?php echo ($lang=='en') ? 'Enter bid value' : 'ادخل مبلغ المزاودة' ; ?>" required="">  


<!--                 <?php $min_bid  =  $product_details['min_bid'] ; $count = 1;  ?>

<select class="form-control" name="data[bid_value]">
    <option value="" selected disabled>--SELECT--</option>
  <?php while ($min_bid) {  if($min_bid>$product_details['price']) { break ; }   ?>

    <option value="<?php echo $min_bid ; ?>"><?php echo $min_bid ; ?> SAR</option>

  <?php $min_bid += 100 ; $count += 1;  } ?>  
</select> -->

                <!--<input type="text" class="form-control" name="x" placeholder="Not Less than 250.00 SAR">-->
                <div class="col-md-12 text-center">
                <!--<a href="javascript:" class="Bid-btn" data-toggle="modal" data-target="#bidding2">Bid</a>-->
                <?php if(!@$user_id){ ?>
                  <br>
                    <span style="color: red">

                     <?php echo ($lang=='en')? 'Please login to bid this product !' : 'الرجاء تسجيل الدخول للمزايدة على هذا المنتج!' ;?>

                  </span>
                <?php }elseif(@$subscription_status==0){ ?>
                  <br>
                      <span style="color: red">
                      <?php echo ($lang=='en')? 'Please Subscribe to bid this product !' : 'الرجاء الاشتراك في محاولة هذا المنتج!' ;?>
                    </span>
                 <?php }else{ ?> 
                  <button type="submit" class="Bid-btn" id="bid_btn"><?php echo ($lang=='en') ? 'Bid' : 'زاود' ; ?></button>
                <?php } ?>
                </div>
          </div>
        </form>
        </div>

      </div>

    </div>

  </div>
  
  
<div class="modal fade" id="bidding2" role="dialog">
    <div class="modal-dialog">


      <!-- Modal content-->



      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rating</h4>
        </div>
        <div class="modal-body rating-body">
<div class="row">
	
		<div class="col-md-12 sleer-details">


                    <div class="media-left"> <img src="<?php echo base_url(); ?>assets/frontend/img/icons/seller.png" class="media-object"> </div>



							<div class="media-body  ">



								<h4>Vijay</h4>



								<div class="single-customer-rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>

<div class="rating-star-block">
    <h3>Good</h3>
    <div class="single-customer-rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></div>

							</div>



	</div>
</div>

                <a href="javascript:" class="Bid-btn">Submit</a>
                </div>

            </div>

        </div>

      </div>

    </div>

  </div>



<section>

  <div class = "modal fade" data-backdrop="static" data-keyboard="false" id="add" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true"></div>

</section>


<!-- bedroom-all-product-area-end --> 


<div class="overlay">
  <span class="closeit" style="color: white;margin-left: 85%">x</span>
  <p>
    <a href="https://twitter.com/intent/tweet?text=<?php echo current_url(); ?>" class="btn btn-social-icon btn-twitter"  target="_blank">
      <span><img src="<?php echo base_url(); ?>assets/social_icons/Twitter.png" ></span>
    </a>
    <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
      <span><img src="<?php echo base_url(); ?>assets/social_icons/Facebook.png" ></span>
    </a>
    <a href="https://www.linkedin.com/cws/share?url=<?php echo current_url(); ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
      <span><img src="<?php echo base_url(); ?>assets/social_icons/linkedian.png" ></span>
    </a>
    <a href="https://plus.google.com/share?url=<?php echo current_url(); ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
      <span><img src="<?php echo base_url(); ?>assets/social_icons/gplus.png" ></span>
    </a>
  </p><!-- 
  <p style="color: white;font-size: 25px"><?php echo ($lang=='en') ? 'Share this Product' : 'شارك هذه السيارة
  ' ; ?> <?php echo $product_details['category_name'];  ?></p>   -->  
</div>




<!-- contact-area-start -->


<style>


.category-menu-list { display:none; }



</style>

<script type="text/javascript">

        var $activate = $('#add');

        $('.activate').on('click',function(event){ 

            var id = $(this).data('id');

            event.stopPropagation();

            $('#add').load('<?php echo site_url('home/payment_method');?>', {id: id},

            function(){

            /*$('.modal').replaceWith('');*/

            $activate.modal('show');

            });

        });


function check_min_bid($entered)
{
    var min_bid = '<?php echo $product_details['min_bid']; ?>' ;

    $entered = parseInt($entered);
    min_bid  = parseInt(min_bid) ;


    if(!Number.isInteger($entered))
    {
      alert('Please enter Number');
      $("#bid_value").val('');
    }

    if($entered < min_bid)
    {
      var message = "<?php echo ($lang=='en') ? ' Bid value should be greater than ' : ' يجب أن تكون قيمة العطاء أكبر من ' ;?>"

        $('#bid_validation').html(message+min_bid+' SAR');
        $('#bid_btn').attr('disabled',true);
    }
    else
    {
        $('#bid_validation').html('');
        $('#bid_btn').removeAttr('disabled');
    }
}

$(document).ready(function(){

  $(".overlay").hide() ;

})


$("#overlay").click(function(){

  //alert("The paragraph was clicked.");
  $(".overlay").fadeIn('slow').css('display','block');

})


$(".closeit").click(function(){

  $(".overlay").fadeOut('slow') ;

})


</script>