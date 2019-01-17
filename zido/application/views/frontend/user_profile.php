<?php
      //Getting message variable in from session
      
    $session = $this->session->userdata() ;

    $status  = (@$session['status']==1) ? '1' : '0' ;
    $message = @$session['message'] ;

    $this->session->unset_userdata('status');
    $this->session->unset_userdata('message');

 ?>
	<style>
.error_resolved
{
	float: left;
	margin-top: 10px;
	padding: 0px !important;
}		

.btn-file {
	background: #fff none repeat scroll 0 0;
	border: 1px solid #ddd;
	border-radius: 10px;
	overflow: hidden;
	padding: 8px 10px;
	position: relative;
	text-align: left;
}

.btn-file input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	min-width: 100%;
	min-height: 100%;
	font-size: 100px;
	text-align: right;
	filter: alpha(opacity=0);
	opacity: 0;
	outline: none;
	cursor: inherit;
	display: block;
}

.tabs {
	background-color: #f5f5f5;
	padding-top: 30px;
	padding-bottom: 30px;
}

.tabs .tab-pane {
	margin-left: 20px;
}

.tabs h3 {
	font-size: 20px;
	margin-top: 10px;
	margin-bottom: 60px;
}

.tabs p {
	font-size: 14px;
}

.tabs a {
	font-size: 15px;
	font-family: OpenSans, sans-serif;
	font-weight: 700;
	color: #9a9a9a;
}

.tabs li {
	margin-top: 1px;
	text-align: justify;
	padding: 0px 20px;
	border-radius: 3px;
}

ul.nav.nav-pills.nav-stacked.flex-column {
	background: #fff;
	padding: 15px;
	border-radius: 5px;
	box-shadow: 0 0 2px 0 #cbcbcb;
	/*height:100vh;*/
}

.flex-column>li.active>a,
.flex-column>li.active>a:hover,
.flex-column>li.active>a:focus {
	color: #333;
	background: #fff !important;
}
/*.tab-info*/

.mad {
	background: #fff;
	padding: 20px 15px;
	border-radius: 5px;
	box-shadow: 0 0 2px 0 #cbcbcb;
}

.flex-column>li>a:hover {
	text-decoration: none;
	background-color: #fff;
}

.mad .single-category-product-img img {
	height: 190px;
}

.mad .single-category-product-img {
	float: left;
	width: 30%;
}

.mad .single-category-product {
	border: 1px solid #ddd;
	border-radius: 10px;
}

.single-close {
	margin-top: 20px;
}

.single-close i.fa {
	width: 20px;
	height: 20px;
	background: red;
	padding: 2px 4px;
	border-radius: 50%;
	color: #fff;
}

.error-notice {
	margin: 5px 5px;
	/* Making sure to keep some distance from all side */
}

.oaerror {
	width: 90%;
	/* Configure it fit in your design  */
	margin: 0 auto;
	/* Centering Stuff */
	background-color: #FFFFFF;
	/* Default background */
	padding: 20px;
	border: 1px solid #eee;
	border-left-width: 5px;
	border-radius: 3px;
	margin: 0 auto;
	font-family: 'Open Sans', sans-serif;
	font-size: 16px;
}

.danger {
	border-left-color: #d9534f;
	/* Left side border color */
	background-color: rgba(217, 83, 79, 0.1);
	/* Same color as the left border with reduced alpha to 0.1 */
}

.danger strong {
	color: #d9534f;
}

.warning {
	border-left-color: #f0ad4e;
	background-color: rgba(240, 173, 78, 0.1);
}

.warning strong {
	color: #f0ad4e;
}

.info {
	border-left-color: #5bc0de;
	background-color: rgba(91, 192, 222, 0.1);
}

.info strong {
	color: #5bc0de;
}

.success {
	border-left-color: #2b542c;
	background-color: rgba(43, 84, 44, 0.1);
}

.mm-top {
	margin-top: 20px;
}

.my-grp li.list-group-item {
	padding: 15px 20px;
}

.my-grp .list-group-item.active,
.my-grp .list-group-item.active:hover,
.my-grp .list-group-item.active:focus {
	z-index: 2;
	color: #fff;
	background-color: #ce9f49;
	border-color: #ce9f49;
}

.flex-column .fa {
	color: #9a9a9a;
	margin-right: 10px;
}

.flex-column .fa {
	color: #9a9a9a;
	margin-right: 10px;
}
.login-form.signup-0 {
background: #fff none repeat scroll 0 0;
border: 1px solid #ddd;
border-radius: 4px;
margin: 0 auto;
overflow: hidden;
padding: 20px;
    
}
		.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}

.diff_image
{
	transform: rotate(90deg);
}
	</style>
	<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
	<!------ Include the above in your HEAD tag ---------->
	<div class="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-content text-center">
						<h1 class="breadmome-name"><?php echo $this->lang->line('up_profile') ?></h1>
						<ul>
							<li><a href="<?php echo  base_url(); ?>home/index"><?php echo $this->lang->line('h_home') ?></a></li>
							<li class="active"><?php echo $this->lang->line('up_profile') ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class=" emp-profile">
		<div class="alert alert-success  <?php if($status=='0') { echo 'hide' ; } ?>"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Success ! </strong>
			<?php echo $message ; ?>
		</div>
		<!--
		
		<div class="tabs">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<ul class="nav nav-pills nav-stacked flex-column">
							<li class="active"><a href="#tab_a" data-toggle="pill">Profile</a></li>
							<li><a href="#tab_b" data-toggle="pill">Packages</a></li>
							<li><a href="#tab_c" data-toggle="pill">My Favorites</a></li>
							<li><a href="#tab_d" data-toggle="pill">My bids</a></li>
							<li><a href="#tab_e" data-toggle="pill">My Products</a></li>
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="tab-content">
							<div class="tab-pane active" id="tab_a" style="margin-bottom: 80px">
								<h3 class="text-center" style="color:blue"><strong>Profile</strong></h3>
								<form action="<?php echo base_url(); ?>home/change_profile_image" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-2">
											<div class="profile-img"> <img src="<?php echo base_url().$userdata['image']; ?>" alt="" />
												<div class="file btn btn-sm btn-primary"> Change Pic
													<input type="file" name="image" style="cursor: pointer" onchange="this.form.submit()" /> </div>
											</div>
										</div>
									</div>
								</form>
								<br>
								<div class="tab-pane  active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<div class="row">
										<div class="col-md-3">
											<label>User Id</label>
										</div>
										<div class="col-md-4">
											<p>
												<?php echo $userdata['id'] ; ?>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<label>Name</label>
										</div>
										<div class="col-md-4">
											<p>
												<?php echo $userdata['name'] ; ?>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<label>Email</label>
										</div>
										<div class="col-md-4">
											<p>
												<?php echo $userdata['email'] ; ?>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<label>Phone</label>
										</div>
										<div class="col-md-4">
											<p>
												<?php echo $userdata['phone_number'] ; ?>
											</p>
										</div>
									</div>
								</div>
								<hr>
								<h3 class="text-center" style="color:blue"><strong>Edit Profile</strong></h3>
								<div>
									<div class="col-md-2">
										<button type="button" class="btn btn-primary waves-effect waves-light add" data-toggle="modal" data-target="#add" data-id="<?php echo $userdata['id'] ;?>" style="float: none"> <span class="icofont icofont-ui-edit">Edit Details</span> </div>
									<div class="col-md-2">
										<button type="button" class="btn btn-primary waves-effect waves-light edit" data-toggle="modal" data-target="#add" data-id="<?php echo $userdata['id'] ;?>" style="float: none"> <span class="icofont icofont-ui-edit">Edit Password</span> </div>
								</div>
							</div>
							<div class="tab-pane" id="tab_b" style="margin-bottom: 80px">
								<h3 class="text-center" style="color:blue"><strong>Package Details</strong></h3>
								<div class="tab-pane active" role="tabpanel" aria-labelledby="profile-tab">
									<?php if($package_details) { ?>
										<div class="row">
											<div class="col-md-3">
												<label>Package Name</label>
											</div>
											<div class="col-md-4">
												<p>
													<?php echo $package_details['package_name'] ; ?>
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<label>Package Limit</label>
											</div>
											<div class="col-md-4">
												<p>
													<?php echo $package_details['total_items'] ; ?>
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<label>Items Left</label>
											</div>
											<div class="col-md-4">
												<p>Still
													<?php echo $package_details['items_left'] ; ?> cars you can sell</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<label>Duration</label>
											</div>
											<div class="col-md-4">
												<p>
													<?php echo $package_details['duration'] ; ?> months</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<label>Subscription Status</label>
											</div>
											<div class="col-md-4">
												<p style="color: <?php echo ($package_details['status']) ? 'green' : 'red' ; ?>">
													<?php echo  ($package_details['status']) ? 'Active' : 'InActive' ; ?>
												</p>
												<?php if(!$package_details['status']) { ?>
													<button type="button" class="btn btn-primary waves-effect waves-light activate" data-toggle="modal" data-target="#add" data-id="<?php echo $userdata['id'] ;?>" style="float: none"> <span class="icofont icofont-ui-edit">Make Payment</span></button>
													<br>
													<br> <span>If you want select new Package Subscribe here</span>
													<br>
													<button class="btn btn-primary waves-effect waves-light" href="<?php echo base_url(); ?>home/subscription">Subscribe</button>
													<?php } ?>
											</div>
										</div>
										<?php }else{ ?>
											<p>You don't have package yet ! Please Subscribe to enjoy our services :)</p>
											<p><a href="http://www.volive.in/zido/home/subscription" class="Subscrption-btn">Subscription</a></p>
											<?php } ?>
					</div>
							</div>
							<div class="tab-pane" id="tab_c">
								<h3 class="text-center" style="color:blue"><strong>My Favorites</strong></h3>
								<div class="row">
									<div class="tab-pane" id="random">
										<?php 
                                        if(@$my_favorites){

                                        foreach ($my_favorites as $key => $product) {  ?>
											<div class="single-category-product filter-bg">
												<div class="single-category-product-img"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>"><img src="<?php echo base_url().$product['image']; ?>" alt="" /></a> </div>
												<div class="single-category-product-info">
													<a href="<?php echo  base_url(); ?>home/view_deals">
														<h2 style="color: blue"><strong><?php echo $product['category_name']; ?></strong> <span class="share-icon"><i class="fa fa-share-alt"></i></span></h2>
														<h3 class="brand-num" style="color: blue"><?php echo $product['sub_category_name']; ?></h3> </a>
													<div class="price category-price">
														<h4><?php echo $product['price']; ?> SAR</h4>
														
														<h5 class="location-yeasr"><?php echo $product['country_name']; ?> <span><?php echo $product['year']; ?> </span></h5> </div>
													<div class="posted-date">
														<h6<?php echo $product[ 'created_at']; ?></h6>
													</div>
													<p>
														<?php echo $product['description']; ?>
													</p>
													<div class="new-product-action2 category-cart"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>" class="bg-black">View Deal</a> </div>
												</div>
											</div>
											<?php } }else{ ?>
												<p class='text-center'>You don't have any favorites !</p>
												<?php } ?>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_d">
								<h3 class="text-center" style="color:blue"><strong>My Bids</strong></h3>
								<div class="row">
									<div class="tab-pane" id="random">
										<?php 
                                        if(@$my_bids){

                                        foreach ($my_bids as $key => $product) {  ?>
											<div class="single-category-product filter-bg">
												<div class="single-category-product-img"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>"><img src="<?php echo base_url().$product['image']; ?>" alt="" /></a> </div>
												<div class="single-category-product-info">
													<a href="<?php echo  base_url(); ?>home/view_deals">
														<h2 style="color: blue"><strong><?php echo $product['category_name']; ?></strong> <span class="share-icon"><i class="fa fa-share-alt"></i></span></h2>
														<h3 class="brand-num" style="color: blue"><?php echo $product['sub_category_name']; ?></h3> </a>
													<div class="price category-price">
														<h4><?php echo $product['price']; ?> SAR</h4>
														
														<h5 class="location-yeasr"><?php echo $product['country_name']; ?> <span><?php echo $product['year']; ?> </span></h5> </div>
													<div class="posted-date">
														<h6<?php echo $product[ 'created_at']; ?></h6>
													</div>
													<p>
														<?php echo $product['description']; ?>
													</p>
													<div class="new-product-action2 category-cart"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>" class="bg-black">View Deal</a> </div>
												</div>
											</div>
											<?php } }else{ ?>
												<p class='text-center'>You don't have any favorites !</p>
												<?php } ?>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_e">
								<h3 class="text-center" style="color:blue"><strong>My Products</strong></h3>
								<div class="row">
									<div class="tab-pane" id="random">
										<?php 
                                        if(@$my_products){

                                        foreach ($my_products as $key => $product) {  ?>
											<div class="single-category-product filter-bg">
												<div class="single-category-product-img"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>"><img src="<?php echo base_url().$product['image']; ?>" alt="" /></a> </div>
												<div class="single-category-product-info">
													<a href="<?php echo  base_url(); ?>home/view_deals">
														<h2 style="color: blue"><strong><?php echo $product['category_name']; ?></strong> <span class="share-icon"><i class="fa fa-share-alt"></i></span></h2>
														<h3 class="brand-num" style="color: blue"><?php echo $product['sub_category_name']; ?></h3> </a>
													<div class="price category-price">
														<h4><?php echo $product['price']; ?> SAR</h4>
														
														<h5 class="location-yeasr"><?php echo $product['country_name']; ?> <span><?php echo $product['year']; ?></span></h5> </div>
													<div class="posted-date">
														<h6<?php echo $product[ 'created_at']; ?></h6>
													</div>
													<p>
														<?php echo $product['description']; ?>
													</p>
													<div class="new-product-action2 category-cart"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>" class="bg-black">View Deal</a> </div>
												</div>
											</div>
											<?php } }else{ ?>
												<p class='text-center'>You don't have any favorites !</p>
												<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
	</div>
	
	
	
	<div class="tabs">

		<div class="container">

			<div class="row">

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

					<ul class="nav nav-pills nav-stacked flex-column">
						<li class="active"><a href="#profile" data-toggle="pill"><i class="fa fa-user" aria-hidden="true"></i><?php echo $this->lang->line('up_profile') ?></a>
						</li>
						<li class="edit" data-toggle="modal" data-target="#add" data-id="<?php echo $userdata['id'] ;?>
						">
						<a href="javascript:" data-toggle="pill"><i class="fa fa-key" aria-hidden="true"></i><?php echo $this->lang->line('up_password') ?>
						</a></li>

						<li ><a href="#favorites" data-toggle="pill"><i class="fa fa-heart"></i><?php echo $this->lang->line('up_myfavorites') ?></a></li>

						<li ><a href="#products" data-toggle="pill"><i class="fa fa-plus-square-o" aria-hidden="true"></i><?php echo $this->lang->line('up_myproducts') ?></a></li>

						<li><a href="#bids" data-toggle="pill"><i class="fa fa-plus-square-o" aria-hidden="true"></i><?php echo $this->lang->line('up_mybids') ?></a></li>
					</ul>

				</div>

				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 tab-info">

					<div class="tab-content mad">

				<div class="tab-pane" id="favorites">
						<div class="entry-header">
							<h1 class="entry-title mb-20"><?php echo $this->lang->line('up_myfavorites') ?></h1>
						</div>

					
				
					<div class="row">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							<?php if(@$my_favorites){

                                foreach ($my_favorites as $key => $product) {  ?>


								<div class="single-category-product mt-40">
									<div class="single-category-product-img">
										<a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>"><img src="<?php echo base_url().$product['image']; ?>" class="<?php if($product['image_res_flag']) { echo 'diff_image' ;} ?>" alt="" style="object-fit: contain;" /></a>
									</div>
									<div class="single-category-product-info"><a href="javascript:"><h2><?php echo $product['category_name']; ?></h2></a>
										<div class="product-price-star"><span><?php echo $product['sub_category_name']; ?></span></div>
										<div class="price category-price">
											<h4><?php echo $product['price']; ?> SAR</h4>
										</div>
										<div class="posted-date">
											<h6><?php echo $product[ 'created_at']; ?></h6>
										</div>
					                    <div class="posted-date">
					                      <h6>minimum bid - <?php echo $product['min_bid'] ; ?> SAR</h6>
					                    </div>
										<br>
								
										<div class="new-product-action2 category-cart"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>" class="bg-black"><span class=""></span>

										<?php echo ($lang=='en') ? 'View Deal' : 'عرض المزاودة' ;?>

										</a> 

										</div>
									</div>

<!-- 									<div class="single-close">
	<a href="#"><i class="fa fa-times"></i></a>
</div> -->
								</div>
							<?php } }else{ ?>
									<p class='text-center'>

									<?php echo ($lang=='en') ?	"You don't have any favorites !" : "ليس لديك أي مفضلات!" ; ?>


									</p>
							<?php } ?>

						</div>

					</div>				
				</div>

				<div class="tab-pane" id="products">

						<div class="entry-header">
							<h1 class="entry-title mb-20"><?php echo $this->lang->line('up_myproducts') ?></h1>
						</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							<?php if(@$my_products){

                                foreach ($my_products as $key => $product) {  ?>
                                	<?php $id = 'product'.$key; ?>


								<div class="single-category-product mt-40">
									<div class="single-category-product-img">
										<a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>"><img src="<?php echo base_url().$product['image']; ?>" class="<?php if($product['image_res_flag']) { echo 'diff_image' ;} ?>" alt="" style="object-fit: contain;" /></a>
									</div>
									<div class="single-category-product-info"><a href="javascript:"><h2><?php echo $product['category_name']; ?></h2></a>
										<div class="product-price-star"><span><?php echo $product['sub_category_name']; ?></span></div>
										<div class="price category-price">
											<h4><?php echo $product['price']; ?> SAR</h4>
										</div>
										<div class="posted-date">
											<h6><?php echo $product[ 'created_at']; ?></h6>
										</div>
										<div class="posted-date">
						                    <h6>minimum bid - <?php echo $product['min_bid'] ; ?> SAR</h6>
						                </div>
										<br>
								
										<div class="new-product-action2 category-cart"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>" class="bg-black"><span class=""></span><?php echo ($lang=='en') ? 'View Deal' : 'عرض المزاودة' ;?></a>

										<a href="javascript:" class="bg-black" onclick="openNav('<?php echo $id; ?>')"><span style="cursor:pointer" ></span><?php echo ($lang=='en') ? 'View Bidders' : 'عرض المزاودين' ;?></a>
									<?php if(!$product['bid_acceptance_flag']){ ?>	
										<a href="<?php echo base_url(); ?>home/sell_product/<?php echo $product['product_id']; ?>" class="bg-black"><i class="fa fa-edit" ></i>Edit</a>
									<?php } ?>	
										</div>
									</div>

<!-- 									<div class="single-close">
	<a href="#"><i class="fa fa-times"></i></a>
</div> -->
								</div>
							<?php } }else{ ?>
										<p class='text-center'>
											<?php echo ($lang=='en') ? "You did't posted any products !" : 'لم تنشر أي منتجات!' ; ?>
										</p>
							<?php } ?>

						</div>
					</div>	
			</div>
			<div class="tab-pane" id="bids">

					<div class="entry-header">
						<h1 class="entry-title mb-20"><?php echo $this->lang->line('up_mybids') ?></h1>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							<?php if(@$my_bids){

                                foreach ($my_bids as $key => $product) {  ?>


								<div class="single-category-product mt-40">
									<div class="single-category-product-img">
										<a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>"><img src="<?php echo base_url().$product['image']; ?>" class="<?php if($product['image_res_flag']) { echo 'diff_image' ;} ?>" alt="" style="object-fit: contain;" /></a>
									</div>
									<div class="single-category-product-info"><a href="javascript:"><h2><?php echo $product['category_name']; ?></h2></a>
										<div class="product-price-star"><span><?php echo $product['sub_category_name']; ?></span></div>
										<div class="price category-price">
											<h4><?php echo $product['price']; ?> SAR</h4>
										</div>
										<div class="posted-date">
											<h6><?php echo $product[ 'created_at']; ?></h6>
										</div>
										<div class="posted-date">
						                    <h6>minimum bid - <?php echo $product['min_bid'] ; ?> SAR</h6>
						                    <h6>My bid value - <?php echo $product['my_bid_value'] ; ?> SAR</h6>
						                </div>
										<br>
								
										<div class="new-product-action2 category-cart"> <a href="<?php echo  base_url(); ?>home/view_deals/<?php echo $product['product_id']; ?>" class="bg-black"><span class=""></span><?php echo ($lang=='en') ? 'View Deal' : 'عرض الصفقة' ;?></a> 

										<!-- <a href="#" class="bg-black sold"><span class=""></span>Sold</a> -->
										</div>
									</div>

<!-- 									<div class="single-close">
	<a href="#"><i class="fa fa-times"></i></a>
</div> -->
								</div>
							<?php } }else{ ?>
										<p class='text-center'>

											<?php echo ($lang=='en') ? "You did't posted any products !" : 'لم تنشر أي منتجات!' ;?></p>
							<?php } ?>

						</div>
					</div>	
			</div>



				<div class="tab-pane active" id="profile">
					<div class="login-area ">

						<div class="entry-header">
						<h1 class="entry-title mb-20"><?php echo $this->lang->line('up_manage_acnt') ?></h1>
						</div>

						<div class="row mt-40">
								
							<div class=" col-lg-4 col-md-4 col-sm-12 col-xs-12">

								<div class="profile-img">
		                            <img src="<?php echo base_url().$userdata['image']; ?>" alt=""/>
									<form action="<?php echo base_url(); ?>home/change_profile_image" method="POST" enctype="multipart/form-data">
		                            <div class="file btn btn-lg btn-primary">
		                                <?php echo $this->lang->line('up_change_pic') ?>
		                                <input type="file" name="image" style="cursor: pointer" onchange="this.form.submit()"/>
		                            </div>
		                            </form>
		                            <div>
		                            </div>
		                        </div>
							</div>

							<div class=" col-lg-8 col-md-8 col-sm-12 col-xs-12">
							
								<div class="login-form signup-0">
									<div class="row">
										<div class="col-md-3">
											<label><?php echo $this->lang->line('up_user_id') ?></label>
										</div>
										<div class="col-md-4">
											<p>
												<?php echo $userdata['id'] ; ?>
											</p>
										</div>
										<div class="col-md-2" style="margin-left: 50px">
										<button type="button" class="btn btn-primary waves-effect waves-light add" data-toggle="modal" data-target="#add" data-id="<?php echo $userdata['id'] ;?>" style="float: none"> <span class="icofont icofont-ui-edit"><?php echo $this->lang->line('up_edit_details') ?></span>
										</button>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<label><?php echo $this->lang->line('up_name') ?></label>
										</div>
										<div class="col-md-4">
											<p>
												<?php echo $userdata['username'] ; ?>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<label><?php echo $this->lang->line('up_email') ?></label>
										</div>
										<div class="col-md-4">
											<p>
												<?php echo $userdata['email'] ; ?>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<label><?php echo $this->lang->line('up_mobile') ?></label>
										</div>
										<div class="col-md-4">
											<p>
												<?php echo $userdata['phone_number'] ; ?>
											</p>
										</div>
									</div>	
									<div class="row">
										<div class="col-md-3">
											<label><?php echo $this->lang->line('up_alerts') ?></label>
										</div>
										<div class="col-md-4">
											<p>	
												<?php $f = (@$userdata['notification_flag']==1)? '1': '0' ; ?>

												<input id="notification_flag"   type="checkbox" data-toggle="toggle" data-size="mini" data-offstyle="danger" data-onstyle="success" <?php echo (@$f) ? 'checked': '' ; ?> > 
												<sub id="switch"><?php echo ($f) ? $this->lang->line('btn_on_notify') : $this->lang->line('btn_off_notify') ; ?></sub>
											</p>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
						
						<hr>
						
						<div class="row">
							<div class="col-md-12">
								<div class="entry-header">
								<h1 class="entry-title mb-20"><?php echo $this->lang->line('up_pack_details'); ?></h2>
								</div>

								<div class="login-form signup-0">
	
									<?php if($package_details) { ?>
										<div class="row">
											<div class="col-md-3">
												<label><?php echo $this->lang->line('up_pack_name'); ?></label>
											</div>
											<div class="col-md-4">
												<p>
													<?php echo $package_details['package_name'] ; ?>
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<label><?php echo $this->lang->line('up_pack_limit') ;?></label>
											</div>
											<div class="col-md-4">
												<p><span style="font-size: 20px"><?php echo $package_details['total_items'] ; ?></span></p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<label><?php echo $this->lang->line('up_items_left') ?></label>
											</div>
											<div class="col-md-4">
												<p>Still <span style="font-size: 20px"><?php echo $package_details['items_left'] ; ?></span> cars you can sell</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<label><?php echo $this->lang->line('up_duration') ?></label>
											</div>
											<div class="col-md-4">
												<p>
													<?php echo $package_details['duration'] ; ?> months</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<label><?php echo $this->lang->line('up_status') ?></label>
											</div>
											<div class="col-md-4">
												<p style="color: <?php echo ($package_details['status']) ? 'green' : 'red' ; ?>">
													<?php echo  ($package_details['status']) ? 'Active' : 'InActive' ; ?>
												</p>
												<?php if(!$package_details['status']) { ?>
													<button type="button" class="btn btn-primary waves-effect waves-light activate" data-toggle="modal" data-target="#add" data-id="<?php echo $userdata['id'] ;?>" style="float: none"> <span class="icofont icofont-ui-edit">Make Payment</span></button>
													<br>
													<br> <span>If you want select new Package Select here</span>
													<br>
													<a style="color: white" class="btn btn-primary waves-effect waves-light" href="<?php echo base_url(); ?>home/subscription">Subscribe</a>
													<?php } ?>
											</div>
										</div>
										<?php }else{ ?>
											<p>You don't have package yet ! Please Subscribe to enjoy our services :)</p>
											<p><a style="color: white" href="http://www.volive.in/zido/home/subscription" class="Subscrption-btn">Subscription</a></p>
											<?php } ?>

								</div>
							</div>
						</div>

					</div>

		<!-- contuct-form-area-end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


		<!-- contuct-form-area-end -->
<section>
	<div class="modal fade" data-backdrop="static" data-keyboard="false" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Bidders of Product  -->

<style>

body {
    font-family: 'Lato', sans-serif;
}

.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 10;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
    margin-bottom: 100px;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: left;
    margin-top:0px;
    margin-left: 30px;
    
}

.overlay a, img {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: white;
    display: block;
    transition: 0.3s;
}

<?php if($lang=='ar') { ?>

 .overlay-content h2, h3{
	text-align: right;
}

<?php } ?>


.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

<?php if($lang=='en') { ?>

.overlay .closebtn {
    position: absolute;
    top: 70px;
    right: 45px;
    font-size: 60px;
}

<?php }else{ ?>

.overlay .closebtn {
    position: absolute;
    top: 70px;
    left: 45px;
    font-size: 60px;
}

<?php } ?>
@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>

<?php foreach ($total_bidders as $key => $product_bidder) { ?>
<?php $id = 'product'.$key; ?>
<div id="product<?php echo $key ; ?>" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav('<?php echo $id; ?>')">&times;</a>
  <div class="overlay-content" style="<?php if($lang=='ar') { echo 'margin-right: 30px !important;' ; } ?>">
  	<h2 style="color: white"><?php echo ($lang=='en') ? 'Bidders'  : 'المزاودين' ;  ?></h2>
  	<div class="container">
	<?php foreach ($product_bidder as $key => $bid) { ?>
		
		<?php if($key==0){ ?>
			<h3 style="color: white"><?php echo $bid['category_name']; ?> - <?php echo $bid['sub_category_name']; ?></h3><br>
		<?php } ?>	

		 <div class="row col-sm-4" >
		  <div style="<?php if($lang=='ar') { echo 'text-align: right' ; } ?>">
		  	<img style="height: 100px;width: 100px" src="<?php echo base_url().$bid['image']; ?>" height="50" width="100">
			<p style="color: white" class="heading"><?php echo $bid['username']; ?></p>
			<p style="color: white"><?php echo $bid['email']; ?></p>
			<p style="color: white"><?php echo $bid['phone_number']; ?></p>
			<?php for($i=1; $i<=5; $i++){ ?>
				
				<?php $str = ($i<=$bid['user_rating']) ? 'yellow' : 'white' ; ?>

				<p style="color: <?php echo $str ; ?>" class="fa fa-star"></p>
			<?php } ?>
			<p style="color: white">
				<?php echo $bid['bid_value'].' SAR' ;?>
			</p>
<!-- 			<p style="color: white">
	<?php echo $bid['created_at']; ?>
</p> -->

		  </div>
		</div> 
	<?php } ?>
   </div>
  </div>
</div>

<?php } ?>



<script>
function openNav($id) {
  document.getElementById($id).style.width = "100%";
}

function closeNav($id) {
  document.getElementById($id).style.width = "0%";
}
</script>





	<script>
		var $modal = $('#add');
		$('.add').on('click', function (event) {
			var id = $(this).data('id');
			event.stopPropagation();
			$('#add').load('<?php echo site_url('home/edit_profile');?>', {id: id}, 
				function () {
					/*$('.modal').replaceWith('');*/
					$modal.modal('show');
				});
		});

		var $modal = $('#add');
		$('.edit').on('click', function (event) {
			var id = $(this).data('id');
			event.stopPropagation();
			$('#add').load('<?php echo site_url('home/edit_password');?>', {id: id}, 
				function () {
					/*$('.modal').replaceWith('');*/
					$modal.modal('show');
				});
		});

		var $activate = $('#add');
		$('.activate').on('click', function (event) {
			var id = $(this).data('id');
			event.stopPropagation();
			$('#add').load('<?php echo site_url('home/payment_method ');?>', {id: id}, 
				function () {
					/*$('.modal').replaceWith('');*/
					$activate.modal('show');
				});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
			$('div#cate-toggle').css({
				"display": "none"
			}); // remove existing
		})
	</script>


<script type="text/javascript">


$('#notification_flag').change(function(){

    if($(this).is(':checked'))
    {
    	$status = 1 ;
    	$("#switch").html('<?php echo $this->lang->line('btn_on_notify') ;?>') ;
    }
    else
    {
    	$status = 0 ;
    	$("#switch").html("<?php echo $this->lang->line('btn_off_notify') ;?>") ;
    }

		$.ajax({
		    url: "<?php echo base_url();?>home/set_notify",
		    type: "POST",
		    data: {'status':$status},
		    dataType: 'text',
		    error:function(request,response){
		        console.log(request);
		    },                  
		    success: function(result)
		    { 

		    }
		});

});

</script>
