<!DOCTYPE html>
<html lang="en">
<head>
    <title>:: ZIDO  ::</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets//frontend/img/logo.png" tppabs="http://ableproadmin.com/light/vertical/assets/images/favicon.png" type="image/x-icon">
    <!-- <link rel="icon" href="assets/images/favicon.ico" tppabs="http://ableproadmin.com/light/vertical/assets/images/favicon.ico" type="image/x-icon"> -->

    <link href="http://volivesolutions.com/fonts.googleapis.com/css-family=Open+Sans-300,400,600,700,800.css" rel="stylesheet">
    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/icon/icofont/css/icofont.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/icon/simple-line-icons/css/simple-line-icons.css">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" >
    
  <!-- Chartlist chart css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/charts/chartlist/css/chartlist.css"  type="text/css" media="all">
    
    <!-- Echart js -->
    <script src="<?php echo base_url();?>assets/admin/plugins/charts/echarts/js/echarts-all.js"></script>
    
     <!-- Data Table Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/plugins/data-table/css/dataTables.bootstrap4.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/plugins/data-table/css/buttons.dataTables.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/plugins/data-table/css/responsive.bootstrap4.min.css" >
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/main.css" >
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/custom.css">
    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-datetimepicker.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/animate.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/alertify.css"/>
	<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <!--color css-->
    <style type="text/css">
        
        .sidebar-menu>li>a .inactive-arrow {
    float: right;
    position: relative;
    top: 5px;
}
.active-arrow{
display: none !important;
    float: right;
    position: relative;
    top: 5px;

}
li.dropdown.active .active-arrow  {
    display: block !important;

    transition: all ease-in-out .5s;
    -webkit-transition: display 2s; 
    transition: display 2s;
}
li.dropdown.active .inactive-arrow{
    display: none !important;
}
    </style>
</head>
<body class="sidebar-mini fixed">
   <!-- <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>-->
<div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
  </div> -->
    <!-- Navbar-->
    <header class="main-header-top hidden-print">
        <a href="<?php echo base_url();?>admin/index"  class="logo">
        <img src="<?php echo base_url();?>assets//frontend/img/logo.png"  style="height:85%;">
        </a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a href="javascript:" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                   
                    <!-- chat dropdown -->
                   
                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                    </li>
                    <!-- User Menu-->
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                            <span><img class="img-circle " src="<?php echo base_url((empty($user_info['image'])) ? "assets/uploads/user_profiles/profile.png": $user_info['image']); ?>" style="width:40px;" alt="User Image"></span>
                            <span><?php echo ucwords(@$userdata['username']); ?> <i class=" icofont icofont-simple-down"></i></span>
                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <!--<li><a href="javascript:void(0)"><i class="icon-settings"></i> Settings</a></li>-->
                            <li><a href="<?php echo base_url();?>admin/profile/<?php echo @$userdata['id'];?>"><i class="icon-user"></i> Profile</a></li>
                            <li class="p-0">
                                <div class="dropdown-divider m-0"></div>
                            </li>
                            
                            <li><a href="<?php echo base_url();?>admin/logout"><i class="icon-logout"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
          
            </div>
        </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="<?php echo base_url((empty($user_info['image'])) ? "assets/uploads/user_profiles/profile.png": $user_info['image']); ?>" alt="User Image" class="img-circle"></div>
                <div class="f-left info">
                    <p><?php echo ucwords(@$userdata[username]); ?></p>
                    <p class="designation"><?php echo ucwords(@$userdata[email]); ?></p>
                </div>
            </div>
            <!-- sidebar profile Menu-->
           
        

            <!-- Sidebar Menu-->
            <?php if(@$userdata['role']=='admin') { ?>

            <ul class="sidebar-menu">

                    <li class="<?php echo (@$page_name=='dashboard')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/index" >
                            <i class="fa fa-tachometer"></i><span> Dashboard</span></a>
                    </li>

                    <li class="<?php echo (@$main_page_name=='info')?'active':'';?>">
                        <a href="javascript:"><i class="fa fa-send"></i><span>Website Info</span><i class="icon-arrow-down"></i></a>

                        <ul class="treeview-menu"> 
<!--                             <li class="<?php echo (@$page_name=='contact_us')?'active':'';?>">
    <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/contactus" >
    <i class="fa fa-volume-control-phone"></i><span>Contact Us</span></a>
</li> -->

                            <li class="<?php echo (@$page_name=='privacy')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/privacy" >
                                <i class="fa fa-lock"></i><span>Privacy & Policy </span></a>  
                            </li>

                            <li class="<?php echo (@$page_name=='terms')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/terms" >
                                <i class="fa fa-at"></i><span>Terms & Conditions </span></a>  
                            </li>

                            <li class="<?php echo (@$page_name=='faq')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/faq" >
                                <i class="fa fa-at"></i><span>FAQ</span></a>  
                            </li>

                            <li class="<?php echo (@$page_name=='help')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/help" >
                                <i class="fa fa-at"></i><span>HELP</span></a>  
                            </li>

                            <li class="<?php echo (@$page_name=='contact_details')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/contact_details" >
                                <i class="fa fa-comments"></i><span>Website Requests</span></a>
                            </li>

                            <li class="<?php echo (@$page_name=='careers_display')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/careers_display" >
                                <i class="fa fa-comments"></i><span>Career List</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="<?php echo (@$main_page_name=='static')?'active':'';?>">
                        <a href="javascript:"><i class="fa fa-send"></i><span>Website Static</span><i class="icon-arrow-down"></i></a>

                        <ul class="treeview-menu"> 
                            <li class="<?php echo (@$page_name=='banners')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/banners" >
                                <i class="fa fa-volume-control-phone"></i><span>Banners</span></a>
                            </li>

                            <li class="<?php echo (@$page_name=='about_us')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/about_us" >
                                <i class="fa fa-lock"></i><span>About us Page</span></a>  
                            </li>

                            <li class="<?php echo (@$page_name=='contact')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/contact" >
                                <i class="fa fa-at"></i><span>Contact Page</span></a>  
                            </li>

                            <li class="<?php echo (@$page_name=='careers')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/careers" >
                                <i class="fa fa-at"></i><span>Careers Page</span></a>  
                            </li>

                            <li class="<?php echo (@$page_name=='auction')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/auction" >
                                <i class="fa fa-comments"></i><span>Auction car Page</span></a>
                            </li>
                            <li class="<?php echo (@$page_name=='social_media')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/social_media" >
                                <i class="fa fa-comments"></i><span>Social Media</span></a>
                            </li>
                        </ul>
                        
                    </li>
        


                    <li class="<?php echo (@$page_name=='users')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/users" >
                            <i class="fa fa-users"></i><span>Users</span></a>
                        
                    </li>

                    <li class="<?php echo (@$page_name=='packages')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/packages" >
                            <i class="fa fa-cubes"></i><span>Packages</span></a>
                    </li>

                    <li class="<?php echo (@$page_name=='car_types')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/car_types" >
                            <i class="fa fa-cubes"></i><span>Car Types</span></a>
                    </li>

                    <li class="<?php echo (@$page_name=='colors')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/colors" >
                            <i class="fa fa-paint-brush"></i><span>Colors</span></a>
                    </li>

                    <li class="<?php echo (@$page_name=='countries')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/countries" >
                            <i class="fa fa-flag"></i><span>Countries</span></a>
                    </li>

                    <li class="<?php echo (@$page_name=='cities')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/cities" >
                            <i class="fa fa-university"></i><span>Cities</span></a>
                    </li>
    
    				 <li class="<?php echo (@$page_name=='categories')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/categories" >
                            <i class="fa fa-object-ungroup"></i></i><span>Categories</span></a>
                    </li>
                     <li class="<?php echo (@$page_name=='sub_categories')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/sub_categories" >
                            <i class="fa fa-server"></i><span>Sub Categories</span></a>
                    </li>
                    <li class="<?php echo (@$page_name=='products')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/products" >
                            <i class="fa fa-product-hunt"></i><span>Products</span></a>
                    </li>
                    <li class="<?php echo (@$page_name=='accepted_products')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/accepted_products" >
                            <i class="fa fa-product-hunt"></i><span>Accepted Products</span></a>
                    </li>
                    

<!--                     <li class="<?php echo (@$page_name=='promocodes')?'active':'';?>">
    <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/promocodes" >
        <i class="fa fa-gift"></i><span>Promocodes</span></a>
    
</li> -->

                   
<!--                     <li class="<?php echo (@$page_name=='sp')?'active':'';?>">
                <a href="javascript:"><i class="fa fa-users"></i><span>Service Providers</span><i class="icon-arrow-down"></i></a>
<ul class="treeview-menu"> 

        <li class="<?php echo (@$subpage_name=='active')?'active':'';?>">
            <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/serviceprovider/1/0" >
        <i class="fa fa-toggle-on"></i><span>Approved</span></a>
    
        </li>

        <li class="<?php echo (@$subpage_name=='inactive')?'active':'';?>">
            <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/serviceprovider/0/0" >
        <i class="fa fa-toggle-off"></i><span>Waiting for Approval</span></a>
    
        </li>


        <li class="<?php echo (@$subpage_name=='banned_sp')?'active':'';?>">
            <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/banned_sp" >
        <i class="fa fa-ban"></i><span>Rejected</span></a>
    
        </li>

</ul>
                </li> -->
    				 <!--<li class="<?php echo (@$page_name=='serviceproviderorders')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/serviceproviderorders" >
                            <i class="fa fa-server"></i><span>Service Provider Orders</span></a>
                        
                    </li>
    				 <li class="<?php echo (@$page_name=='request_types')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/request_types" >
                            <i class="fa fa-address-book-o"></i><span>Request Types</span></a>
                        
                    </li>-->


                <!-- <li class="<?php echo (@$page_name=='requests')?'active':'';?>">
                                    <a href="javascript:"><i class="fa fa-send"></i><span>Requests</span><i class="icon-arrow-down"></i></a>
                      <ul class="treeview-menu"> 
                                        <li class="<?php echo (@$subpage_name=='admin_assign')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/admin_assign_requests" >
                            <i class="fa fa-server"></i><span>SP not Accepted</span></a>
                        
                        </li>
                        <li class="<?php echo (@$subpage_name=='waiting')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/waiting_requests" >
                            <i class="fa fa-server"></i><span>Waiting Requests</span></a>
                        
                        </li>
                        <li class="<?php echo (@$subpage_name=='pending')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/pending_requests" >
                            <i class="fa fa-server"></i><span>Accepted Requests</span></a>
                        
                        </li>
                         <li class="<?php echo (@$subpage_name=='completed')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/completed_requests" >
                            <i class="fa fa-server"></i><span>Completed Requests</span></a>
                        
                        </li>
                                        <li class="<?php echo (@$subpage_name=='rejected')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/rejected_requests" >
                            <i class="fa fa-server"></i><span>SP Rejected Requests</span></a>
                        
                        </li>
                        <li class="<?php echo (@$subpage_name=='cancelled')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/cancelled_requests" >
                            <i class="fa fa-server"></i><span>User Cancelled Requests</span></a>
                        
                        </li>
                
                    </ul>
                </li> -->



<!-- 
                 <li class="<?php echo (@$page_name=='comission')?'active':'';?>">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/comission_mng" >
                    <i class="fa fa-percent"></i><span>Comission Management</span></a>
                        
                </li>

                <li class="<?php echo (@$page_name=='sms')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/sendsms" >
                        <i class="fa fa-envelope"></i><span>Send SMS </span></a>
                            
                </li> -->
               
            </ul>
            <?php } ?>
        </section>
    </aside>
    <!-- Side-Nav-end-->
    