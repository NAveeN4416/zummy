<div class="footer-area ptb-40">
  <div class="container">
    <div class="row">
   <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 mar_b-30">
        <div class="footer-wrapper">
          <div class="footer-logo"> <a href="<?php echo base_url(); ?>home/index"><img src="<?php echo base_url(); ?>assets/frontend/img/logo.png" alt="" /></a> </div>
          <p><?php echo $this->lang->line('f_got'); ?></p>
          <p><strong><?php echo $admin['phone_number'];  ?></strong></p>
         <!-- <a class="btn btn-lg btn-primary map-btn" href="https://www.google.com/maps/?q=<?php echo $about_us['latitude'].','.$about_us['longitude']; ?>" target='_blank'> <i class="fa fa-map-marker pull-left"></i><span><?php echo $this->lang->line('f_view_map'); ?></span></a>--> </div>
      </div>
      <div class="col-lg-4 col-md-3 hidden-sm col-xs-12 mar_b-30">
        <div class="footer-wrapper">
          <div class="footer-title"> <a href="#"><span><?php echo $this->lang->line('f_follow'); ?></span>
            <h3><?php echo $this->lang->line('f_social'); ?></h3>
            </a> </div>
          <div class="footer-wrapper">
            <ul class="footer-social">
              <?php if(@$social_media[0]['status']==1){ ?>
              <li><a href="<?php echo $social_media[0]['link'] ; ?>" target='_blank'  ><i class="fa fa-facebook"></i></a>
              </li>
              <?php } ?>
              <?php if(@$social_media[1]['status']==1){ ?>
              <li>
                <a href="<?php echo $social_media[1]['link'] ; ?>" target='_blank'  ><i class="fa fa-twitter"></i></a>
              </li>
              <?php } ?>
              <?php if(@$social_media[2]['status']==1){ ?>
              <li>
                <a href="<?php echo $social_media[2]['link'] ; ?>" target='_blank'  ><i class="fa fa-google-plus"></i></a>
              </li>
              <?php } ?>
              <?php if(@$social_media[3]['status']==1){ ?>
              <li>
                <a href="<?php echo $social_media[3]['link'] ; ?>" target='_blank'  ><i class="fa fa-youtube"></i></a>
              </li>
              <?php } ?>
              <?php if(@$social_media[4]['status']==1){ ?>
              <li>
                <a href="<?php echo $social_media[4]['link'] ; ?>" target='_blank'  ><i class="fa fa-instagram"></i></a>
              </li>
              <?php } ?>

            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-2 hidden-md hidden-sm col-xs-12 mar_b-30">
        <div class="footer-wrapper">
          <div class="footer-title"> <a href="#">
            <h3> <?php echo $this->lang->line('f_company'); ?></h3>
            </a> </div>
          <div class="footer-wrapper" style="<?php echo ($lang=='ar') ? 'margin-top: -41px' : '' ;?>">
            <ul>
              <li> <a href="<?php echo base_url(); ?>home/index"><?php echo $this->lang->line('i_home'); ?></a></li>
              <li> <a href="<?php echo base_url(); ?>home/about"><?php echo $this->lang->line('f_about'); ?></a> </li>
              <li><a href="<?php echo base_url(); ?>home/privacy_policy"><?php echo $this->lang->line('f_privacy'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>home/careers"><?php echo $this->lang->line('f_careers'); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <div class="footer-wrapper">
          <div class="footer-title"> <a href="#">
            <h3> <?php echo $this->lang->line('f_support'); ?></h3>
            </a> </div>
          <ul>
            <li> <a href="<?php echo base_url(); ?>home/terms_conditions"><?php echo $this->lang->line('f_terms'); ?></a></li>
            <li> <a href="<?php echo base_url(); ?>home/help"><?php echo $this->lang->line('f_help'); ?></a> </li>
            <li><a href="<?php echo base_url(); ?>home/faq"><?php echo $this->lang->line('f_faq'); ?></a></li>
            <li><a href="<?php echo base_url(); ?>home/view_brands"><?php echo $this->lang->line('f_cat'); ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- footer-area-end --> 

<!-- .copyright-area-start -->

<div class="copyright-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mar_b-30">
        <div class="copyright text-left">
          <p> &copy; 2018 ZIDO All Rights Reserved </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- .copyright-area-end --> 

<!-- all js here --> 

<!-- jquery latest version --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/vendor/jquery-1.12.0.min.js"></script> 

<!-- bootstrap js --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script> 


<!-- owl.carousel js --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/owl.carousel.min.js"></script> 

<!-- meanmenu js --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.meanmenu.js"></script> 

<!-- jquery-ui js --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/jquery-ui.min.js"></script> 

<!-- nivo.slider js --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.nivo.slider.js"></script> 

<!-- wow js --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/wow.min.js"></script> 

<!-- scrolly js --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.scrolly.js"></script> 

<!-- magnific-popup js --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.magnific-popup.min.js"></script> 

<!-- plugins js --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/plugins.js"></script> 

<!-- main js --> 

<script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />


<script>
$( '.drodown-show > a' ).on('click', function(e) {
    e.preventDefault();
    if($(this).hasClass('active')) {
        $( '.drodown-show > a' ).removeClass('active').siblings('.ht-dropdown').slideUp()
        $(this).removeClass('active').siblings('.ht-dropdown').slideUp();
    } else {
        $( '.drodown-show > a' ).removeClass('active').siblings('.ht-dropdown').slideUp()
        $(this).addClass('active').siblings('.ht-dropdown').slideDown();
    }
});
/*--------------------------
	 Category Menu Active
---------------------------- */
 $('.rx-parent').on('click', function(){
    $('.rx-child').slideToggle();
    $(this).toggleClass('rx-change');
});
//    category heading
$('.category-heading').on('click', function(){
    $('.category-menu-list').slideToggle(300);
});	
/*-- Category Menu Toggles --*/
function categorySubMenuToggle() {
    var screenSize = $(window).width();
    if ( screenSize <= 991) {
        $('#cate-toggle .right-menu > a').prepend('<i class="expand menu-expand"></i>');
        $('.category-menu .right-menu ul').slideUp();
//        $('.category-menu .menu-item-has-children i').on('click', function(e){
//            e.preventDefault();
//            $(this).toggleClass('expand');
//            $(this).siblings('ul').css('transition', 'none').slideToggle();
//        })
    } else {
        $('.category-menu .right-menu > a i').remove();
        $('.category-menu .right-menu ul').slideDown();
    }
}
categorySubMenuToggle();
$(window).resize(categorySubMenuToggle);

/*-- Category Sub Menu --*/
function categoryMenuHide(){
    var screenSize = $(window).width();
    if ( screenSize <= 991) {
        $('.category-menu-list').hide();
    } else {
        $('.category-menu-list').show();
    }
}
categoryMenuHide();
$(window).resize(categoryMenuHide);
$('.category-menu-hidden').find('.category-menu-list').hide();
$('.category-menu-list').on('click', 'li a, li a .menu-expand', function(e) {
    var $a = $(this).hasClass('menu-expand') ? $(this).parent() : $(this);
    if ($a.parent().hasClass('right-menu')) {
        if ($a.attr('href') === '#' || $(this).hasClass('menu-expand')) {
            if ($a.siblings('ul:visible').length > 0) $a.siblings('ul').slideUp();
            else {
                $(this).parents('li').siblings('li').find('ul:visible').slideUp();
                $a.siblings('ul').slideDown();
            }
        }
    }
    if ($(this).hasClass('menu-expand') || $a.attr('href') === '#') {
        e.preventDefault();
        return false;
    }
});
</script>

<style>
.innersection-1 {
    background-color: #f7f7f7;
    padding-top: 0px;
}
	.advanced-search-1 .modal-body {
    padding: 40px 20px;
}
	.login-form-container-1 {
     background: #f3f3f3 none repeat scroll 0 0; 
    /* border: 1px solid rgba(0, 0, 0, 0.125); */
    box-shadow: 2px 2px 11px 0 rgba(0, 0, 0, 0.1);
     margin-bottom: 0px !important; 
   
}
	.default-btn:hover{
		color: #fff !important;
	}
		
	
.login-form select {
    background: none;
    border: 1px solid #d0d0d0;
    color: #7d7d7d;
    height: 40px;
    margin-bottom: 20px;
    padding: 8px 15px;
    font-size: 14px;
    width: 100%;
    border-radius: 4px;
}

.select2-container
{
  width : 100% !important;
}

.select2-container .select2-selection--multiple
{
  height : 40px;
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered {
   box-sizing: border-box;
   list-style: none;
   margin: 0;
   padding: 0 5px;
   width: 100%;
   height: 32px !important;
   overflow: auto !important;
}

</style>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content advanced-search-1">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo ($lang=='en') ? 'Advanced Search' : 'البحث المتقدم' ; ?></h4>
        </div>
        <div class="modal-body">  
         <div class="">
		  
		        <div class="row">
		            <div class=" col-md-12">
		                <div class="login-form">
		                    <div class="">
		                        <div class="login-form">
		                            <form action="<?php echo base_url(); ?>home/search_products/2" method="post">
                                  
                                   <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Make' : 'الشركة' ; ?></label>
                                    <select name="category_id" id="category_id" onchange="load_sub_cat_foot(this.value);" >
                                        <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <?php foreach($categories as $key=>$category) { ?>  

                                        <option value="<?php echo $category['id'] ; ?>"><?php echo $category['name_'.$lang] ; ?></option>
                                      
                                      <?php } ?>
                                    </select>
                                   </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Modal' : 'النوع' ; ?></label>
                                    <select name="sub_category_id" id="sub_category_id_foot" disabled>
                                      <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
<!--                                     <?php foreach($sub_categories as $key=>$sub_category) { ?>
                                          <option value="<?php echo $sub_category['id'] ; ?>"><?php echo $sub_category['name_'.$lang] ; ?></option>
                                         <?php } ?>   -->
                                    </select>
                                   </div>
                                   
                                   
                                   
                                   <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Exterior Color' : 'اللون الخارجي' ; ?></label>
                                    <select name="exterior_color_id" id="exterior_color_id" >
                                    <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <?php foreach($colors as $key=>$color) { ?>  
                                        <option value="<?php echo $color['id'] ; ?>"><?php echo $color['color_'.$lang] ; ?>
                                        </option>
                                      <?php } ?>
                                    </select>
                                   </div>
                                   
                                  
                                    
                                     <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Interior Color' : 'اللون الداخلي' ; ?></label>
                                    <select name="interior_color_id" id="interior_color_id" >
                                    <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <?php foreach($colors as $key=>$color) { ?>  

                                        <option value="<?php echo $color['id'] ; ?>"><?php echo $color['color_'.$lang] ; ?></option>
                                      
                                      <?php } ?>
                                    </select>
                                   </div>
                                    
                                    <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Year From' : 'السنة' ; ?></label>
                                    <!-- <input type="text" name="from_year" id="from_year" > -->
                                       <select name="from_year" id="from_year">
                                        <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                        <?php for($i=1900; $i<=date('Y'); $i+=1) { ?>  
                                         <option value="<?php echo $i ; ?>"><?php echo $i ; ?></option>
                                        <?php } ?>
                                      </select>
                                   </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Year To' : 'الممشى' ; ?></label>
                                    <!-- <input type="text" name="to_year" id="to_year" > -->
                                    <select name="to_year" id="to_year" >
                                        <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                        <?php for($i=1900; $i<=date('Y'); $i+=1) { ?>  
                                         <option value="<?php echo $i ; ?>"><?php echo $i ; ?></option>
                                        <?php } ?>
                                      </select>
                                   </div>
                                    
                                  <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Mileage From' : 'الممشى من' ; ?></label>
                                    <input type="number" name="form_milage" id="form_milage" >
                                   </div>
                                   
                                  <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Mileage To' : 'الممشى إلى'; ?></label>
                                    <input type="number" name="to_milage" id="to_milage" >
                                  </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Minimum Price' : 'أقل سعر' ; ?></label>
                                    <input type="text" name="min_price" id="min_price" >
                                   </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Maximum Price' : 'أعلى سعر'; ?></label>
                                    <input type="text" name="max_price" id="max_price" >
                                   </div>
                                   
                                    
                                    <div class="col-md-6">
                                      <label><?php echo ($lang=='en') ? 'City' : 'المدينة' ; ?></label>
                                      <select name="city_id[]" id="city_id" class="js-example-basic-multiple" multiple="multiple">
                                        <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <?php foreach ($cities as $key => $city) { ?>
                                        <option value="<?php echo $city['id']; ?>"><?php echo $city['name_'.$lang]; ?></option>
                                      <?php } ?>
                                      </select>
									                  </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Warranty' : 'ضمان' ; ?></label>
                                    <select name="warranty" id="warranty">
                                      <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <option value="no"><?php echo ($lang=='en')? 'No' : 'لا' ;?></option>
                                      <option value="yes"><?php echo ($lang=='en')? 'Yes' : 'نعم' ;?></option>
                                    </select>
                                   </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Inspected' : 'مفحوصه' ; ?></label>
                                   <select name="inspected" id="inspected">
                                    <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <option value="no"><?php echo ($lang=='en')? 'No' : 'لا' ;?></option>
                                      <option value="yes"><?php echo ($lang=='en')? 'Yes' : 'نعم' ;?></option>
                                    </select>
                                   </div>
                                   
                                   <div class="col-md-6">
                                    <label><?php echo ($lang=='en') ? 'Sun Roof' : 'فتحة السقف' ; ?>*</label>
                                    <select name="sun_roof" id="sun_roof" >
                                    <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <option value="no"><?php echo ($lang=='en')? 'No' : 'لا' ;?></option>
                                      <option value="yes"><?php echo ($lang=='en')? 'Yes' : 'نعم' ;?></option>
                                    </select>
										               </div>
                                   
                                     <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Gears' : 'القير' ; ?></label>
                                    <select name="gears" id="gears" >
                                      <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <option value="1">
                                        <?php echo ($lang=='en') ? 'Manual System' : 'نظام يدوي' ; ?>
                                      </option>
                                      <option value="0"><?php echo ($lang=='en') ? 'Auto System' : 'تلقائي' ; ?></option>
                                    </select>
                                   </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Cylinders' : 'سرندل' ; ?></label>
                                    <select name="cylinders" id="cylinders" >
                                      <option value="" selected>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <option value="4">4</option>
                                      <option value="6">6</option>
                                      <option value="8">8</option>
                                      <option value="10">10</option>
                                      <option value="12">12</option>
                                    </select>
                                   </div>
                                   
                                   <div class="col-md-6">
                                    <label><?php echo ($lang=='en') ? 'Sellar Star' : 'سيلار ستار' ; ?></label>
                                    <select name="seller_star" id="">
                                    <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                    <option value="5">5 star</option>
                                    <option value="4">4 star</option>
                                    <option value="3">3 star</option>
                                    <option value="2">2 star</option>
                                    <option value="1">1 star</option>
                                    </select>
										               </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo ($lang=='en') ? 'Minimum Bid' : 'الحد األدنى للمزاودة' ; ?></label>
                                    <input type="text" name="minimum_bid" id="minimum_bid" >
<!--                                       <select name="minimum_bid" id="minimum_bid">
<?php for($i=100; $i<=1000;$i+=100){ ?>
  <option value="<?php echo $i; ?>"><?php echo $i; ?> SAR</option>
<?php } ?>
</select>   -->
                                   </div>
                                  <div class="col-md-6">
                                    <label><?php echo ($lang=='en') ? 'Car Type': 'نوع السيارة' ; ?></label>
                                    <select name="car_type" id="car_type" >
                                    <option value="" selected disabled>--<?php echo $this->lang->line('fm_select'); ?>--</option>
                                      <?php foreach($car_types as $key=>$type) { ?>
                                        <option value="<?php echo $type['id'] ; ?>"><?php echo $type['name_'.$lang] ; ?></option>
                                      <?php } ?>
                                    </select>
                                   </div>
                                  
                                    <div class="col-md-12">
                                        
                                            <button type="submit" class="default-btn pull-right"><?php echo ($lang=='en') ? 'Search' : 'بحث' ; ?></a>
                                        </div>
		                            </form>
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
   
  </div>
</body></html>


<!-- Required Jqurey -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js" ></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<!--multi select-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay_progress.min.js"></script>

<script type="text/javascript">

   $(function () {
   $(".js-example-basic-multiple").select2();
});
</script>


<!--end multiple select-->

<script type="text/javascript">
function load_sub_cat_foot($category_id) 
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
                $('#sub_category_id_foot').html(str);
                $('#sub_category_id_foot').removeAttr("disabled");
              }
              else
              {
                str = "<option value='' selected disabled>--SELECT--</option>" ;

                $('#sub_category_id_foot').html(str);
                $('#sub_category_id_foot').attr("disabled",true);
              }
            
            }  
          });

}

/*
$("#from_year").datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years",
    //changeMonth: true,
    changeYear: true,
    maxDate: "-16Y",
    minDate: "-100Y",
    yearRange: "-100:-16"
});


$("#to_year").datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years",
    //changeMonth: true,
    changeYear: true,
    maxDate: "-16Y",
    minDate: "-100Y",
    yearRange: "-100:-16"
});*/

</script> 

