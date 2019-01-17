
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />

<style>
.text-center.p
	{
		
    width: 80%;
    margin: 0 auto;
}

#overlay 
{
  position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0; 
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgb(115, 115, 115); /* Black background with opacity */
  z-index: 10; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
  opacity: 0.9;
}



.loader 
{
  border: 5px solid #f3f3f3;
  border-radius: 50%;
  border-top: 5px solid #3498db;
  border-bottom: 8px solid #3498db;
  margin-top:15%;
  margin-left:45%;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.image1
{
   max-width: 100%;
   height: 150px;
   align-items: baseline;
   padding: 23px;
}


.close {
	position: absolute;
	top: 10px;
	right: 32px;
	color: red !important;
}

.image {
  position: relative;
  text-align: center;
  color: white;
  width: 200px;
}

</style>


<div id="overlay">
  
	<div class="loader">

	</div>
	<br>
	<h3 style="color: white;" class="text-center">Please wait.....</h3>
	<h3 style="color: white;" class="text-center">We are posting your product</h3>
</div>


<div class="breadcrumb-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="breadcrumb-content text-center">
                      <h1 class="breadmome-name"><?php echo $this->lang->line('s_sell_product') ; ?></h1>
	                    <ul>
	                        <li><a href="<?php echo  base_url(); ?>home/index"><?php echo $this->lang->line('h_home') ; ?></a></li>
	                        <li class="active"><?php echo $this->lang->line('s_sell_product') ; ?></li>
	                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

<?php
      //Getting message variable in from session
      
    $session = $this->session->userdata() ;

    $status  = (@$session['status']) ;
    $message = @$session['message'] ;

    print_r($status);

    if($status==0)
    {
      $status = '0' ;
    }
    elseif($status==1 || $status==2)
    {
      $status = ($status==1) ? 'success' : 'info'  ;
    }
    else
    {
      $status = 'danger' ;
    }


    $this->session->unset_userdata('status');
    $this->session->unset_userdata('message');

 ?>


        
<div class="innersection">
		    <div class="container">
		        <div class="row">
            <div class="text-center p">

                <div class="alert alert-<?php echo $status ; ?>  <?php if($status=='0') { echo 'hide' ; } ?>">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong><?php echo $status ; ?>!</strong> <?php echo $message ; ?>
                </div>
              
              <?php $flag = 0; if($status=='0') { if(!sizeof($subscription)) {  $flag = 1; ?>
                <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong><?php echo ($lang=='en') ? 'Info !' : 'معلومات!' ;?> !</strong><?php echo ($lang=='en') ? 'You don\'t have packages yet! Please subscribe' : 'ليس لديك حزم حتى الآن! يرجى الاشتراك' ;?> <a href="<?php echo base_url(); ?>home/subscription"><?php echo ($lang=='en') ? 'here' : 'هنا' ;?> </a>
                </div>
              <?php }elseif($subscription['status']=='0') {  $flag = 1; ?> 
                <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong>Info !</strong><?php echo ($lang=='en') ? ' Please complete the payment ' : 'يرجى استكمال الدفع ' ; ?> <a href="<?php echo base_url(); ?>home/user_profile" style="font-size: 25px">
                  <?php echo ($lang=='en') ?  'in your profile ' : 'في ملفك ' ; ?></a><?php echo ($lang=='en') ? ' to sell product ' : 'لبيع المنتج ' ; ?>
                </div>
              <?php } } ?> 


            	<h2><?php echo $auction['title_'.$lang] ; ?></h2>
	            <p><?php echo $auction['content_'.$lang] ; ?></p>
            </div>
	           
		            <div class="col-md-offset-1 col-md-10">
		                <div class="login-form">
		                    <div class="login-form-container">
		                        <div class="login-form">
		                            <form action="<?php echo base_url(); ?>home/save_product" name="sell_product" method="POST" enctype='multipart/form-data' onsubmit="call_ajax()">
                                  

                                  <?php if(@$product){ ?>
                                    
                                    <input type="hidden" name="category_id" value="<?php echo $product['category_id']; ?>">
                                    <input type="hidden" name="sub_category_id" value="<?php echo $product['sub_category_id']; ?>">
                                    <input type="hidden" name="exterior_color_id" value="<?php echo $product['exterior_color_id']; ?>">
                                    <input type="hidden" name="interior_color_id" value="<?php echo $product['interior_color_id']; ?>">
                                    <input type="hidden" name="year" value="<?php echo $product['year']; ?>">
                                    <input type="hidden" name="milage" value="<?php echo $product['milage']; ?>">
                                    <input type="hidden" name="gears" value="<?php echo $product['gears']; ?>">
                                    <input type="hidden" name="cylinders" value="<?php echo $product['cylinders']; ?>">
                                    <input type="hidden" name="country_id" value="<?php echo $product['country_id']; ?>">
                                    <input type="hidden" name="car_type" value="<?php echo $product['car_type']; ?>">
                                    <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                                    <input type="hidden" name="minimum_bid" value="<?php echo $product['min_bid']; ?>">
                                    <input type="hidden" name="serial_num" value="<?php echo $product['serial_num']; ?>">

                                    <input type="hidden" name="warranty" value="<?php echo ($product['warranty']==1) ? 'yes' : 'no' ; ?>">
                                    <input type="hidden" name="sun_roof" value="<?php echo ($product['sun_roof']==1) ? 'yes' : 'no' ; ?>">
                                    <input type="hidden" name="inspected" value="<?php echo ($product['inspected']==1) ? 'yes' : 'no' ; ?>">
                                    
                                  <?php } ?>





                                   <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_make'); ?></label>
                                    <select name="category_id" id="category_id" onchange="load_sub_cat(this.value);" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                        <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <?php foreach($categories as $key=>$category) { ?>  
                                        <option value="<?php echo $category['id'] ; ?>" <?php echo ($category['id']==@$product['category_id'])? 'selected' : '' ; ?> ><?php echo $category['name_'.$lang] ; ?></option>
                                      <?php } ?>
                                    </select>
                                   </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_model'); ?></label>
                                    <select name="sub_category_id" id="sub_category_id" disabled required="" <?php if(@$product){ echo 'disabled'; }?>>
                                      	<option value="">--<?php echo $this->lang->line('fm_select'); ?>--</option>
	                                    <?php if(@$product){ foreach($sub_categories as $key=>$sub_category) { ?>
                                          <option value="<?php echo $sub_category['id'] ; ?>" <?php echo ($sub_category['id']==@$product['sub_category_id'])? 'selected' : '' ; ?>><?php echo $sub_category['name_'.$lang] ; ?></option>
                                        <?php } } ?>
                                    </select>
                                   </div>
                                   
                                  
                                   
                                     <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_ext_color'); ?></label>
                                    <select name="exterior_color_id" id="exterior_color_id" required="" <?php if(@$product){ echo 'disabled'; }?>> 
                                    <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <?php foreach($colors as $key=>$color) { ?>  
                                        <option value="<?php echo $color['id'] ; ?>" <?php echo ($color['id']==@$product['exterior_color_id'])? 'selected' : '' ; ?> ><?php echo $color['color_'.$lang] ; ?>
                                        </option>
                                      <?php } ?>
                                    </select>
                                   </div>
                                   
                                   
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_int_color'); ?></label>
                                    <select name="interior_color_id" id="interior_color_id" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                    <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <?php foreach($colors as $key=>$color) { ?>  
                                        <option value="<?php echo $color['id'] ; ?>" <?php echo ($color['id']==@$product['interior_color_id'])? 'selected' : '' ; ?> ><?php echo $color['color_'.$lang] ; ?>
                                        </option>
                                      <?php } ?>
                                    </select>
                                   </div>
                                   
                                   
                                   <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_year'); ?></label>
                                    <!--<input type="text" name="year" id="year" required=""> -->
                                    <select name="year" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                      <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <?php for($i=1900; $i<=date('Y'); $i+=1) { ?>  
                                       <option value="<?php echo $i ; ?>" <?php echo ($i==@$product['year'])? 'selected' : '' ; ?> ><?php echo $i ; ?>
                                       </option>
                                      <?php } ?>
                                    </select>
                                   </div>
                                   
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_mileage'); ?>
                                      <sub class="milage_error hide" style="color: red"> 
                                        <?php echo ($lang=='en')? 'Please enter Positive Number *' : 'يرجى إدخال رقم موجب *' ; ?>
                                      </sub>
                                    </label>
                                    <input type="text" name="milage" id="milage" required="" value="<?php echo @$product['milage']; ?>" <?php if(@$product){ echo 'disabled'; }?> >

                                    <!--<select name="milage" id="milage">
                                      <option value="" selected>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                    <?php for($i=1000; $i<=10000; $i+=500) { ?>
                                      <option value="<?php echo $i; ?>"><?php echo $i; ?> kmph</option>
                                    <?php } ?>
                                  </select>-->
                                   </div>
                                   
                                   
                                     <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_warranty'); ?></label>
                                    <select name="warranty" id="warranty" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                      <option value="" selected>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <option value="yes"  <?php echo (@$product['warranty']==1)? 'selected' : '' ; ?>><?php echo ($lang=='en')? 'Yes' : 'نعم' ;?></option>
                                      <option value="no"   <?php echo (@$product['warranty']==0)? 'selected' : '' ; ?>><?php echo ($lang=='en')? 'No' : 'لا' ;?></option>
                                    </select>
                                   </div>
                                   
                                   
                                   
                                   <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_inspected'); ?></label>
                                    <select name="inspected" id="inspected" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                      <option value="" selected>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <option value="yes" <?php if(@$product['inspected']==1){ echo 'selected'  ;} ?>><?php echo ($lang=='en')? 'Yes' : 'نعم' ;?></option>
                                      <option value="no" <?php if(@$product['inspected']==0){ echo 'selected' ;} ?>><?php echo ($lang=='en')? 'No' : 'لا' ;?></option>
                                    </select>
                                   </div>
                                   
                                  
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_gears'); ?></label>
                                    <select name="gears" id="gears" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                      <option value="" selected>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <option value="1" <?php echo (@$product['gears']==1)? 'selected' : '' ; ?>>
                                        <?php echo ($lang=='en') ? 'Manual System' : 'نظام يدوي' ; ?>
                                      </option>
                                      <option value="0" <?php echo (@$product['gears']==0)? 'selected' : '' ; ?>>
                                      	<?php echo ($lang=='en') ? 'Auto System' : 'تلقائي' ; ?>
                                      </option>
                                    </select>
                                   </div>
                                   
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_cylinders'); ?></label>
                                    <select name="cylinders" id="cylinders" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                      <option value="" selected>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <option value="4"  <?php echo (@$product['cylinders']==4)? 'selected' : '' ; ?>>4</option>
                                      <option value="6"  <?php echo (@$product['cylinders']==6)? 'selected' : '' ; ?>>6</option>
                                      <option value="8"  <?php echo (@$product['cylinders']==8)? 'selected' : '' ; ?>>8</option>
                                      <option value="10" <?php echo (@$product['cylinders']==10)? 'selected' : '' ; ?>>10</option>
                                      <option value="12" <?php echo (@$product['cylinders']==12)? 'selected' : '' ; ?>>12</option>
                                    </select>
                                   </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_city'); ?></label>
                                   	
                                    <select name="country_id" id="country_id" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                      <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                    <?php foreach ($cities as $key => $country) { ?>
                                      <option value="<?php echo $country['id']; ?>" <?php echo ($country['id']==@$product['country_id'])? 'selected' : '' ; ?>>
                                      	<?php echo $country['name_'.$lang]; ?>
                                      </option>
                                    <?php } ?>

                                  <!-- <option value="">Riyadh</option>
                                  <option value="">Makkah</option>
                                  <option value="">Medina</option>
                                  <option value="">Jeddah</option>
                                  <option value="">Dammam</option>
                                  <option value="">Hail</option>
                                  <option value="">Tabuk</option>
                                  <option value="">Qassim</option>
                                  <option value="">Abha</option>
                                  <option value="">Baha</option>
                                  <option value="">Jazan</option>
                                  <option value="">Najran</option>
                                  <option value="">Rafha</option>
                                  <option value="">Bisha</option>
                                  <option value="">Arar</option>
                                  <option value="">Taif</option>
                                  <option value="">Hafar Al Batin </option>
                                  <option value="">Yanbu</option>
                                  <option value="">Sakaka</option>
                                  <option value="">Hasa</option>
                                  <option value="">Qurayyat</option>
                                  <option value="">Jubail</option>
                                  <option value="">Duwadmi</option>
                                  <option value="">Dubai</option>
                                  <option value="">Kuwait</option>
                                  <option value="">Bahrain</option>
                                  <option value="">Abu Dhabi </option>
                                  <option value="">Muscat</option> -->
                                  
                                    </select>
                                   </div>
                                   
                                    
                                    <div class="col-md-6">
                                   	<label style=""><?php echo $this->lang->line('s_pin_num'); ?></label>
                                    <input type="text" name="serial_num" value="<?php echo @$product['milage']; ?>" <?php if(@$product){ echo 'disabled'; }?>>
                                   </div>
                                   
                                    <div class="col-md-12">
                                   	<label><?php echo $this->lang->line('s_sun_roof'); ?></label>
                                    <select name="sun_roof" id="sun_roof" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                      <option value="">--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <option value="no" <?php echo (@$product['sun_roof']==0)? 'selected' : '' ; ?>><?php echo ($lang=='en')? 'No' : 'لا' ;?></option>
                                      <option value="yes" <?php echo (@$product['sun_roof']==1)? 'selected' : '' ; ?>><?php echo ($lang=='en')? 'Yes' : 'نعم' ;?></option>
                                    </select>
                                   </div>

                                    <div class="col-md-12">
                                    <label><?php echo $this->lang->line('s_deal_title'); ?></label>
                                    <input type="text" name="deal_title" id="deal_title" value="<?php echo @$product['deal_title']; ?>" required="" placeholder="<?php echo ($lang=='en') ? 'Ex. Mercedes Benz,S class,500,Good Condition' : 'مثال/ مرسيدس، اس 500 ، أسود، 2015 ' ; ?>">
                                   </div>

                                   <div class="col-md-12">
                                    <label><?php echo $this->lang->line('s_car_type'); ?></label>
                                    <select name="car_type" id="car_type" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                        <option value="">--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <?php foreach ($car_types as $key => $type) { ?>
                                        <option value="<?php echo $type['id']; ?>" <?php echo ($type['id']==@$product['car_type'])? 'selected' : '' ; ?>><?php echo $type['name_'.$lang]; ?></option>
                                      <?php } ?>
                                    </select>
                                   </div>
                                   
                                    <div class="col-md-12">
                                      <label><?php echo $this->lang->line('s_other_info'); ?></label>
                                      <textarea row="3" name="other_info" id="other_info" required="" placeholder="<?php echo ($lang=='en') ? 'Ex. I’m the first owner of the car' : 'مثال/ السيارة لم تستخدم الا بشكل قليل ' ; ?>"><?php echo @$product['other_info']; ?></textarea>
                                   </div>

                                   <div class="col-md-12">
                                   	<label><?php echo $this->lang->line('s_car_desc'); ?></label>
                  									<textarea row="3" name="description" id="description"  required="" placeholder="<?php echo ($lang=='en') ? '300 letters' : ' 300 حرف ' ; ?>"><?php echo @$product['description']; ?></textarea>
                                   </div>


		                                
                                    <div class="col-md-6">
                                   	<label style="color:red;"><?php echo $this->lang->line('s_bid_start'); ?> (SAR)</label>
                                   	<sub class="price_error hide" style="color: red"> 
                                        <?php echo ($lang=='en')? 'Please enter Positive Number *' : 'يرجى إدخال رقم موجب *' ; ?>
                                    </sub>
                                    <input type="text" name="price" id="price" required="" value="<?php echo @$product['price'] ; ?>" <?php if(@$product){ echo 'disabled'; }?>>
                                   </div>
                                        
                                           
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_bid_inc'); ?> (SAR)</label>
                                      <!-- <input type="Number" name="minimum_bid" id="minimum_bid" required=""> --> 
                                      <select name="minimum_bid" id="minimum_bid" required="" <?php if(@$product){ echo 'disabled'; }?>>
                                        <option value="100"   <?php echo (@$product['minimum_bid']==100)? 'selected' : '' ; ?>>100</option>
                                        <option value="500"   <?php echo (@$product['minimum_bid']==500)? 'selected' : '' ; ?>>500</option>
                                        <option value="1000"  <?php echo (@$product['minimum_bid']==1000)? 'selected' : '' ; ?>>1000</option>
                                        <option value="5000"  <?php echo (@$product['minimum_bid']==5000)? 'selected' : '' ; ?>>5000</option>
                                        <option value="10000" <?php echo (@$product['minimum_bid']==10000)? 'selected' : '' ; ?>>10000</option>
                                      </select>  
                                   </div>

                                    <div class="col-md-12">
                                     	<label><?php echo $this->lang->line('s_upload'); ?>
                                              <span style="color: red">
                                              <?php echo ($lang=='en') ? 'A Minimum of 1 image should be uploaded'  : 'يجب تحميل على األقل صورة واحدة' ?>
                                              </span>
                                      </label>
                                      <input type="file" name="images[]" id="images" multiple <?php if(!@$product){ echo 'required'; }?>>
                                    </div>

									<span id="message" style="color: green;display: none"><?php echo ($lang=='en') ? 'Image removed from the list' : 'تمت إزالة الصورة من القائمة' ; ?>
									</span>

									<div class="row">
										<?php if(@$product['product_images']){ foreach ($product['product_images'] as $key => $image) { ?>
										<div class="col-md-12 image" id="image<?php echo $image['image_id'] ; ?>">	
										  <img class="image1" src="<?php echo base_url().$image['image'];  ?>" height="100px">
                      <?php if($key!=0) {  ?>
										    <span class="close" title="delete image" onclick="delete_image('<?php echo $image['image_id']; ?>')">x</span>
                      <?php } ?>
										</div>  
										<?php } } ?>
                                    </div>  
									
									                   <input type="hidden" name="product_id" value="<?php echo @$product['id']; ?>" >		

                                    <div class="col-md-12">
                                      <button class="default-btn pull-right call_ajax" <?php echo ($flag==1 && !@$product['id']) ? 'disabled' : '' ; ?> ><?php echo $this->lang->line('s_next'); ?></button>
                                    </div>
									
		                            </form>

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>


<script type="text/javascript">
  
function load_sub_cat($category_id) 
{ 
 //alert($category_id); 
    $.ajax({
            url: "<?php echo base_url();?>home/load_sub_categories",
            type: "POST",
            data: {'category_id':$category_id},
/*            dataType: 'text',
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,*/
            error:function(request,response){
                console.log(request);
            },                  
            success: function(result)
            { 
              //alert(result);

              var json_obj = JSON.parse(result) ;

              var sub_categories = json_obj.sub_categories

              var str = '' ;

              var count = 1 ;
              
              for(var i in sub_categories)
              {
                if(count)
                {
                  str += "<option value=''>--Select--</option>" ;
                  count = 0 ;
                }

                var sub_category = sub_categories[i] ;

                str  += "<option value='"+sub_category['id']+"'>"+sub_category['name_<?php echo $lang ; ?>']+"</option>\n" ;
              }

              if(str!='')
              {
                $('#sub_category_id').html(str);
                $('#sub_category_id').removeAttr("disabled");
              }
              else
              {
                str = "<option value='' selected disabled>--SELECT--</option>" ;

                $('#sub_category_id').html(str);
                $('#sub_category_id').attr("disabled",true);
              }
            
            }  
          });

}



$('.save_product').click(function(e){ 

    var myvars = {} ;

    myvars['category_id']       = $('#category_id').val();
    myvars['sub_category_id']   = $('#sub_category_id').val();
    myvars['exterior_color_id'] = $('#exterior_color_id').val();
    myvars['interior_color_id'] = $('#interior_color_id').val();
    myvars['year']              = $('#year').val();
    myvars['milage']            = $('#milage').val();
    myvars['warranty']          = $('#warranty').val();
    myvars['inspected']         = $('#inspected').val();
    myvars['gears']             = $('#gears').val();
    myvars['country_id']        = $('#country_id').val();
    myvars['serial_num']        = $('#serial_num').val();
    myvars['sun_roof']          = $('#sun_roof').val();
    myvars['images']            = $('textarea#description').val();
    myvars['min_bid']           = $('#min_bid').val();
    myvars['price']             = $('#price').val();

    $null_count = 0

    for(var i in myvars)
    {
        if(myvars[i]==null)
        {
          $null_count += 1
        }
        else if(myvars[i]==undefined)
        {
          $null_count += 1 
        }
        else
        {

        }

        alert($num_count);
    }




});


</script>


<script type="text/javascript">
var todayDate = new Date().getDate();
$("#year").datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years",
    //changeMonth: true,
    changeYear: true,
    //maxDate: new Date(),
    //minDate: "-100Y",
	 yearRange: '-100:+0'
   
});

</script> 

<script type="text/javascript">
  
  $(document).ready(function(){

    $('div#cate-toggle').css({"display":"none"});// remove existing

  })



function call_ajax()
{

  $('#overlay').css('display','block');
}


$(document).ready(function()
{

  $("#milage").keyup(function(){
    if(!(Number.isInteger($("#milage").val())))
    {
      $(".milage_error").removeClass('hide');
      //$("#milage").val('');
    }
    else
    {
      $(".milage_error").addClass('hide');
    }
  })


   $("#price").keyup(function(){
    if(!(Number.isInteger($("#price").val())))
    {
      $(".price_error").removeClass('hide');
      //$("#price").val('');
    }
    else
    {
      $(".price_error").addClass('hide');
    }
  })


});


function delete_image($image_id)
{
	$.ajax({                
      url: "<?php echo base_url();?>home/delete_product_image",
      type: "POST",
      data: {'image_id':$image_id},
      error:function(request,response)
      {
        console.log(request);
      },                  
      success: function(result)
      {
        $('#image'+$image_id).remove();
        $("#message").fadeIn(1000).delay(4000).fadeOut('slow');
      }
  });
}

</script>
