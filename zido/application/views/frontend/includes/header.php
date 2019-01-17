<!doctype html>

<html class="no-js" lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>.::Zido::.</title>

<meta name="description" content="">

<meta name="viewport" content="width=device-width, initial-scale=1">


<?php if(@$share_flag=='view_deal'){ ?>
    <meta property="og:url"         content="<?php echo current_url(); ?>" />
    <meta property="og:type"        content="article" />
    <meta property="og:title"       content="<?php echo  $product_details['category_name'] ; ?>" />
    <meta property="og:description" content="<?php echo  $product_details['sub_category_name'] ; ?>" />
    <meta property="og:image"       content="<?php echo  base_url().$product_details['image'] ; ?>" />
<?php } ?>



<?php if($lang=='en'){ ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<?php } ?>


<!-- all css here -->


<!-- bootstrap v3.3.6 css -->



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css">



<!-- animate css -->



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/animate.css">



<!-- jquery-ui.min css -->



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/jquery-ui.min.css">





<!-- meanmenu css -->



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/meanmenu.min.css">



<!-- nivo-slider css -->



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/nivo-slider.css">



<!-- magnific-popup css -->



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/magnific-popup.css">



<!-- owl.carousel css -->



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/owl.carousel.css">



<!--linearicons css -->



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/linearicons-icon-font.min.css">



<!-- font-awesome css -->



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.min.css">



<!-- style css -->

<?php if($lang=='en'){ ?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/style.css">
<?php }else{ ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/rtl.css">

<?php } ?>
<!-- responsive css -->



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" />



<!-- modernizr css -->



<script src="<?php echo base_url(); ?>assets/frontend/js/vendor/modernizr-2.8.3.min.js"></script>

<!--multiple select-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<!--end -->



<style>

.input-group-btn .btn-group {

	display: flex !important;

	height: 55px;

}

.my-control 
{

	height: 55px;

}

.menu-search-box .btn-default 
{
	border-color: #e8e8e8;
}

.menu-search-box .btn-group .btn + .btn, .menu-search-box .btn-group .btn + .menu-search-box .btn-group, .menu-search-box .btn-group .btn-group + .btn, .menu-search-box .btn-group .btn-group + .btn-group 
{
	margin-left: 5px;
	padding: 6px 20px;
}

.menu-search-box-2 
{
	display: flex;
	width: 80%;
	margin-bottom: 20px;
}

.menu-search-box-3 form input 
{
	text-align: center;
}

.header-left-menu ul 
{
  max-height: 250px;
  overflow-y: auto;
}

</style>


    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets//frontend/img/logo.png" tppabs="http://ableproadmin.com/light/vertical/assets/images/favicon.png" type="image/x-icon">
</head>



<body>

<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]--> 
<!-- Add your site or application content here --> 
<!-- header-start -->

<header>

  <div class="header-top-area hidden-xs">

    <div class="container">

      <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8"> 

           <div class="dropdown header-left-menu">
        
            <!--<button class="btn btn-default header-left-menu dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <?php echo ($lang=='en') ? 'City' : 'مدينة' ; ?> <i class="fa fa-angle-down"></i>-->   </button>

            <ul class="dropdown-menu rtl-city">

              <?php foreach ($cities as $key => $city) {  ?>
                      
        				<li><a href="#"><?php echo $city['name_'.$lang] ; ?></a></li>

              <?php } ?>  

            </ul>

          </div>
          
          <div class="dropdown header-left-menu">

          <?php $curl = current_url(); ?>

          <?php if($lang=='en') { ?>
            
            <a class="btn btn-default header-left-menu dropdown-toggle" href="<?php echo base_url(); ?>language/change_lang?lang=ar&url='<?php echo $curl ; ?>'"> عربى  
            <!-- <i class="fa fa-angle-down"></i> -->
            </a>

          <?php }else{ ?>
            
            <a class="btn btn-default header-left-menu dropdown-toggle" href="<?php echo base_url(); ?>language/change_lang?lang=en&url='<?php echo $curl ; ?>'">English
            <!-- <i class="fa fa-angle-down"></i> -->
            </a>
          
          <?php } ?>

<!--             <ul class="dropdown-menu">

  <li><a href="<?php echo base_url(); ?>language/change_lang?lang=en&url='<?php echo $curl ; ?>'"> English</a></li>

  <li><a href="<?php echo base_url(); ?>language/change_lang?lang=ar&url='<?php echo $curl ; ?>'"> عربى  </a></li>

</ul> -->

          </div>

        </div>

        <div class="col-lg-3 col-md-4 col-sm-4">

          <div class="header-top-right">

            <ul>

              <?php if(!@$userdata) { ?>
                <li><a href="<?php echo base_url(); ?>home/register"><?php echo $this->lang->line('h_signup'); ?></a></li>
                <li><a href="<?php echo base_url(); ?>home/login"><?php echo $this->lang->line('h_login'); ?></a></li>
              <?php }else{ ?>  
                <?php if(@$userdata['auth_level']==1){ ?>
                <li><a href="<?php echo base_url(); ?>home/user_profile"><?php echo $this->lang->line('h_profile'); ?></a></li>
                <?php } ?>
                <li><a href="<?php echo base_url(); ?>admin/logout"><?php echo $this->lang->line('h_logout'); ?></a></li>
              <?php } ?>

            </ul>

          </div>

        </div>

      </div>

    </div>

  </div>

  <div class="header-bottom-area ptb-30" id="main_h">

    <div class="container">

      <div class="row">

        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

          <div class="logo"> <a href="<?php echo base_url(); ?>home/index"><img src="<?php echo base_url(); ?>assets/frontend/img/logo.png" alt="" /></a> </div>

        </div>

        <div class="col-lg-7 col-md-7 col-sm-7 hidden-xs">

          <div class="mainmenu hidden-xs pull-right">

            <nav>

              <ul>

                <li class="<?php echo (@$page=='home') ? 'active' : '' ; ?>"><a href="<?php echo  base_url(); ?>home/index"><?php echo $this->lang->line('h_home'); ?></a> </li>

               <!-- <li><a href="javascript:">Today Deals</a> </li>

                <li><a href="javascript:">Top Deals </a> </li>-->
                
                <li class="<?php echo (@$page=='sell_product') ? 'active' : '' ; ?>"><a href="<?php echo  base_url(); ?>home/search_products"><?php echo $this->lang->line('h_new_deals'); ?></a> </li>

                <li class="<?php echo (@$page=='who') ? 'active' : '' ; ?>"><a href="<?php echo  base_url(); ?>home/about"><?php echo $this->lang->line('h_who'); ?></a> </li>

                <li class="<?php echo (@$page=='contact_us') ? 'active' : '' ; ?>"><a href="<?php echo  base_url(); ?>home/contact"><?php echo $this->lang->line('h_contact_us'); ?></a></li>

              </ul>

            </nav>

          </div>

        </div>

      </div>

    </div>

  </div>

</header>



<!-- header-end --> 



<!-- mainmenu-area-start -->


<div class="mainmenu-area ">

  <div class="container">

    <div class="row">

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

        <div class="menu-search-box menu-search-box-1">

          <div class="category-menu">

            <div class="category-heading">

              <h2 class="categories-toggle"><span><?php echo $this->lang->line('h_all_brands'); ?></span><i class="fa fa-angle-down"></i></h2>

            </div>

            <div class="category-menu-list" id="cate-toggle">

              <ul>
                <?php foreach ($categories as $key => $category) {  ?>

                  <li class="right-menu"><a href="<?php echo base_url(); ?>home/models/<?php echo $category['id'] ; ?>"> 
                    <img class="error_resolved" src="<?php echo base_url().$category['image']; ?>" alt="" /> <?php echo $category['name_'.$lang]; ?></a> </li>

                <?php } ?>
              </ul>

            </div>

          </div>

        </div>

      </div>

      <div class="col-lg-6 col-md-6 col-sm-6">
      
        <div class="menu-search-box menu-search-box-2">

          <input type="text" id="search" class="form-control my-control" 
            placeholder="<?php echo ($lang=='en') ? 'Eg: Red, model, city, year' : 'مثال/ النوع، المديل، اللون، المدينة' ; ?>" />

          <div class="input-group-btn">

            <div class="btn-group dropdown">

              <button type="submit" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php echo $this->lang->line('h_all_brands'); ?><span class="caret"></span> </button>

              <!-- <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button> -->

              <ul class="dropdown-menu" role="menu">

                <?php foreach ($categories as $key => $category) {  ?>

                  <li onclick="submit_form(<?php echo $category['id'] ; ?>)" style="cursor: pointer;padding-left: 2px"><?php echo $category['name_'.$lang]; ?></li>

                <?php } ?>

              </ul>

            </div>

          </div>

        </div>

      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 p-l-no">

        <div class="menu-search-box menu-search-box-3">

          <div class="dropdown first-box">

            <button class="btn btn-primary " type="button"  data-toggle="modal" data-target="#myModal"><?php echo $this->lang->line('h_advanced_search'); ?>

            <?php //echo $this->lang->line('h_search'); ?></button>

          </div>

          <div class="dropdown first-box lastbox">

            <a class="btn btn-primary auction-car" href="<?php echo base_url(); ?>home/sell_product"><?php echo $this->lang->line('h_list_your_car'); ?></a>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>


<script type="text/javascript">
  
function submit_form($category_id='')
{

  $search = $('#search').val()

  var url =  '<?php echo base_url(); ?>home/search_products/1/'+" "+'/'+$category_id+'/'+$search+''

  window.location.href = url ;

  return false ;
}


</script>