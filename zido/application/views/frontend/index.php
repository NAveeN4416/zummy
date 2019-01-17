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
div a{
  color:#1884BC;
  text-decoration:none;
}


.diff_image
{
  transform: rotate(90deg);
}

</style>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<div class="slider-wrapper dotted-style">

  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3"> </div>
      <div class="col-lg-9 col-md-9 col-sm-9 mar_b-30"> 


        <!-- slider-area-start -->

        

        <div class="slider-area slider-area-4">
          
        
          <div class="slider_img"> 
            <?php foreach($banners as $key=>$banner) { ?>
              <img src="<?php echo base_url().$banner['image']; ?>" alt="" title="#caption<?php echo $key+1; ?>">
            <?php } ?>
          </div>
        
        
        <?php foreach($banners as $key=>$banner) { ?>
      
          <div id="caption<?php echo $key+1; ?>" class="nivo-html-caption ">

            <div class="slide_all_2 nivo_rtl_caption">

              <h3 class=" wow fadeInLeft rtl-head3" data-wow-delay=".4s" data-wow-duration="1.1s"><?php echo $this->lang->line('i_title1') ; ?> </h3>
              <h2 class="wow fadeInLeft rtl-head2" data-wow-delay=".5s" data-wow-duration="1.1s"><?php echo $this->lang->line('i_title2') ; ?></h2>
              <h1 class="wow fadeInLeft rtl-head1" data-wow-delay=".4s" data-wow-duration="1.5s"><?php echo $banner['title_'.$lang]; ?></h1>

              <div class="slider-btn  wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1.1s"> <a href="<?php echo base_url() ;  ?>home/view_brands"><?php echo $this->lang->line('i_view_c'); ?></a></div>

            </div>

          </div>

        <?php } ?>

<!--           <div id="caption2" class="nivo-html-caption slide-content-right">
  <div class="slide_all_2">
    <h3 class=" wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1.1s">World's </h3>
    <h2 class="wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.1s">Largest Market</h2>
    <h1 class="wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1.1s">for used products</h1>
    <div class="slider-btn  wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1.1s"> <a href="#">view collection</a> </div>
  </div>
</div> -->
<!--            <div id="caption3" class="nivo-html-caption slide-content-right">
 <div class="slide_all_2">
   <h3 class=" wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1.1s">World's </h3>
   <h2 class="wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.1s">Largest Market</h2>
   <h1 class="wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1.1s">for used products</h1>
   <div class="slider-btn  wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1.1s"> <a href="#">view collection</a> </div>
 </div>
          </div> -->


        </div>

        

        <!-- slider-area-end -->

        

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-l-no mt-10">

          <div class="single-static-banner">

            <div class="single-static-img"> <a href="<?php echo base_url() ;  ?>home/view_deals"><img src="<?php echo base_url(); ?>assets/frontend/img/banner-bottom1.png" alt=""></a>

              <div class="single-static-text single-static-text-2">

                <h3><?php echo $this->lang->line('i_all_brands') ; ?></h3>

                <p><?php echo $this->lang->line('i_cars_c') ; ?></p>

                <a href="<?php echo base_url() ;  ?>home/view_brands" class="view-collection"><?php echo $this->lang->line('i_view_c'); ?></a> </div>

            </div>

          </div>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-r-no mt-10">

          <div class="single-static-banner">

            <div class="single-static-img"> <a href="<?php echo base_url() ; ?>home/search_products"><img src="<?php echo base_url(); ?>assets/frontend/img/banner-bottom2.png" alt=""></a>

              <div class="single-static-text single-static-text-2">

                <h3><?php echo $this->lang->line('i_all_products') ; ?></h3>

                <p><?php echo $this->lang->line('i_cars_c') ; ?></p>

                <a href="<?php echo base_url() ;  ?>home/search_products" class="view-collection"><?php echo $this->lang->line('i_view_c'); ?></a> </div>

            </div>

          </div>

        </div>

      </div>


    </div>

  </div>

</div>
        <?php
      //Getting message variable in from session
      
            $session = $this->session->userdata() ;
            $status  = @$session['status'] ;
            $message = @$session['message'] ;
            $this->session->unset_userdata('status');
            $this->session->unset_userdata('message');
         ?>



        <div class="alert alert-<?php echo $status ; ?> <?php if($status!='success') { echo 'hide' ; } ?>">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Message : </strong> <?php echo $message ; ?>
        </div>

<div class="new-product-area new-product-area-3 pt-50 pb-50">

  <div class="container">

    <div class="container-inner">

      <div class="row">

        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">

          <div class="section-title">

            <h2><?php echo $this->lang->line('i_new_deals'); ?></h2>

          </div>

        </div>

        <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">

          <div class="mainmenu rtl-mainmenu">

            <nav>

              <ul>

                <li class="active"><a href="<?php echo base_url() ; ?>home/search_products"><?php echo $this->lang->line('i_all_deals'); ?></a></li>

              </ul>

            </nav>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="new-product-home-2-active">

        <?php foreach ($products as $key => $product) {  ?>

          <div class="col-lg-12">

            <div class="single-new-product">

              <div class="product-img"> <a href="<?php echo base_url() ;  ?>home/view_deals/<?php echo $product['product_id'] ; ?>"> <img src="<?php echo base_url().$product['image']; ?>" style="object-fit: contain;" class="first_img  <?php if(@$product['image_res_flag']==90) { echo 'diff_image' ; } ?>" alt=""  /> </a> </div>

              <div class="product-content text-center">

                <h6 class="brand-title share">
                  <?php echo $product['category_name'] ; ?>
                  <a href="javascript:" class="share-icon" onclick="share('<?php echo $key ; ?>')">
                    <i class="fa fa-share-alt"></i>
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

                <h3 class="brand-num"><?php echo $product['sub_category_name'] ; ?></h3>

                <div class="price-bid">

                  <h4><?php echo $product['price'] ; ?> SAR <a class="view-deal" href="<?php echo base_url() ;  ?>home/view_deals/<?php echo $product['product_id'] ; ?>"><?php echo $this->lang->line('i_view_d'); ?></a></h4>

                </div>
                
                <div class="posted-date">
                      <h6><?php echo $product['created_at'] ; ?></h6>
                </div>
                <div class="posted-date">
                      <h6>minimum bid - <?php echo $product['min_bid'] ; ?> SAR</h6>
                </div>

              </div>

            </div>

          </div>
        
        <?php } ?>


        </div>

      </div>

    </div>

  </div>

</div>

<!-- purchase-progress-area-start -->



<div class="purchase-progress-area pb-80 pt-80 back">

  <div class="container">

    <div class="row">

      <div class="col-lg-12 btn-flex">

        <div class="section-title text-center app">

          <div class="col-md-3">

            <div class="mobile-left"> <img src="<?php echo base_url(); ?>assets/frontend/img/mobile.png" alt="" /> </div>

          </div>

          <div class="col-md-9">

            <h1><?php echo $this->lang->line('i_get_app'); ?></h1>

            <p><?php echo $this->lang->line('i_fast'); ?></p>

            <p><?php echo $this->lang->line('i_all_takes'); ?></p>

            <ul class="ds-btn">

              <li> <a class="btn btn-lg btn-primary app-btn" href=""> <i class="fa fa-apple pull-left"></i><span><?php echo $this->lang->line('i_available'); ?><br>

                <small><?php echo $this->lang->line('i_app_store'); ?></small></span></a> </li>

              <li> <a class="btn btn-lg btn-primary app-btn" href=""> <i class="fa fa-play pull-left"></i><span><?php echo $this->lang->line('i_available'); ?><br>

                <small><?php echo $this->lang->line('i_google_play'); ?></small></span></a> </li>

            </ul>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>



<!-- purchase-progress-area-end --> 



<!-- contact-area-start -->



<div class="contact-area ptb-60">

  <div class="container">

    <div class="row">

      <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12 mar_b-30">

        <div class="contuct-info text-center pull-right">

          <div class="media">

            <div class="media-left"> <img src="<?php echo base_url(); ?>assets/frontend/img/newsletter.png" class="media-object" style="width:60px"> </div>

            <div class="media-body">

              <h4><?php echo $this->lang->line('i_newsletter'); ?></h4>

              <p><?php echo $this->lang->line('i_notify'); ?></p>

            </div>

          </div>

        </div>

      </div>

      <div class="col-lg-5 col-md-8 col-sm-12 col-lg-offset-1 col-xs-12">

        <div class="search-box">

          <form method="POST" action="<?php echo base_url(); ?>home/newsletter_subscriptions">

            <input type="email" name="email" placeholder="<?php echo $this->lang->line('i_enter'); ?>" required="" >

            <button type="submit"><?php echo $this->lang->line('i_submit'); ?></button>

          </form>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- Required Jqurey -->
<!--

<?php foreach($products as $key=>$product){ ?>
    <div class="overlay<?php echo $key ; ?> hide">
          <span class="closeit<?php echo $key ; ?>" onclick="closeit('<?php echo $key ; ?>')" style="color: white;margin-left: 85%">x</span>
        <p>
          <a href="<?php echo base_url(); ?>home/share_product/twitter/<?php echo $product['product_id']; ?>" class="btn btn-social-icon btn-twitter"  target="_blank">
            <span class="fa fa-twitter" style="color: white;"></span>
          </a>
          <a href="<?php echo base_url(); ?>home/share_product/facebook/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
            <span class="fa fa-facebook-f" style="color: white;"></span>
          </a>
          <a href="<?php echo base_url(); ?>home/share_product/linkedin/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
            <span class="fa fa-linkedin" style="color: white;"></span>
          </a>
          <a href="<?php echo base_url(); ?>home/share_product/google/<?php echo $product['product_id']; ?>"  class="btn btn-social-icon btn-twitter" target="_blank">
            <span class="fa fa-google-plus" style="color: white;"></span>
          </a>
        </p>
        <p style="color: white;font-size: 25px"><?php echo ($lang=='en') ? 'Share this Product' : 'شارك هذه السيارة
' ; ?> <?php echo $product['category_name'];  ?></p>    
    </div>
<?php } ?>

-->

<!-- contact-area-end --> 



<!-- footer-area-start -->

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


<script type="text/javascript">


function share($key)
{
  //alert("The paragraph was clicked.");


  var string = "overlay"+$key;

  //alert(typeof string);
  //$("."+string).removeClass('hide').fadeIn('slow').addClass('overlay');

  //$("."+string).fadeIn('slow').addClass('overlay');

}

function closeit($key)
{
  $(".overlay"+$key).fadeOut('slow').hide() ;
}


$('.share').click(function(){
  var pos = $(this).position();
  $(this).find('div').css('top', (pos.top)+50 + 'px').toggle();

});

</script>