

<style type="text/css">
  ul.dropdown-menu.status_dropdown {
    min-width: 100px !important;
    height: auto;
    padding: 5px 0 0px 0px;
    text-align: center;
    font-size: 10px;
    font-weight: 100;

}
ul.dropdown-menu.status_dropdown  li a {
       font-size: 12px;
}
.tab-content {
    padding: 20px;
}
div#simpletable1_wrapper {
    overflow-x: auto;
}
.form-group {
    margin-bottom: 2rem;
}

.nav-tabs {
    border-bottom: none;
}

</style>


<!-- CONTENT-WRAPPER-->
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
         <div class="container-fluid">
    
    <div class="row" style="margin-top: 5%">
      <div class="col-sm-12">
        <div class="card">
         <!--  <div class="card-header"><h5 class="card-header-text">Customers Details</h5></div> -->
          <div class="card-block">
            
    <ul class="nav nav-tabs " role="tablist">
        <li class="nav-item active">
           <a class="nav-link " data-toggle="tab" href="#user_view" role="tab"><i class=""></i>User Profile</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#sale" role="tab"><i class=""></i>Items on Sale</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#bid" role="tab"><i class=""></i>Bidded Items</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#favorites" role="tab"><i class=""></i>Favorites</a>
            <div class="slide"></div>
        </li>
    </ul>
 
    
 
    <div class="tab-content">

        <div class="tab-pane active" id="user_view" role="tabpanel">

        		<?php if($user['image']){?>
                  <div class="col-md-2">
                    <img class="img-fluid width-100" src="<?php echo base_url().$user['image']; ?>"  alt="" style="">
                  </div>
        		<?php }else{?>
        		 <div class="col-md-2">
                    <img class="img-fluid width-100" src="<?php echo base_url(); ?>assets/uploads/user_profiles/profile.png"  alt="" style="">
                  </div>
        		
        		<?php }?>

            <div class="col-md-8">
    
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" for="email"><b>Name</b> &nbsp:</label>
                    <div class="col-sm-6">  
                        <p class="edit-field"><?php echo ucwords($user['username']); ?></p>
                    </div>
                </div>

                <div class="clearfix"></div> 
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" for="email"><b>Phone No</b> &nbsp:</label>
                    <div class="col-sm-6">  
                        <p class="edit-field"><?php echo $user['phone_number']; ?></p>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" for="email"><b>Email</b> &nbsp:</label>
                    <div class="col-sm-6">  
                        <p class="edit-field"><?php echo $user['email']; ?></p>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" for="email"><b>Status</b>  &nbsp:</label>
                    <div class="col-sm-6">  
                        <p class="edit-field"><?php if($user['approval_status'] ==1){echo 'Active';}else{echo 'InActive';} ?></p>
                    </div>
                </div>
    			     <hr>

    			     <div class="clearfix"></div>
               <p><h6>Package Details</h6></p>
              
              <?php if(@$package_details) { ?>


               <div class="form-group">
                    <label class="control-label col-sm-3 text-right" for="name"><b>Name</b>  &nbsp:</label>
                    <div class="col-sm-6">  
                        <p class="edit-field"><?php echo $package_details['package_name']; ?></p>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" for="name"><b>Total Items</b>  &nbsp:</label>
                    <div class="col-sm-6">  
                        <p class="edit-field"><span style="font-size: 25px"><?php echo $package_details['total_items']; ?></span>  Pacakge Limit</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" for="name"><b>Items Left</b>  &nbsp:</label>
                    <div class="col-sm-6">  
                        <p class="edit-field"><span style="font-size: 25px"><?php echo $package_details['items_left']; ?></span>  cars he can sell </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" for="name"><b>Duration</b>  &nbsp:</label>
                    <div class="col-sm-6">  
                        <p class="edit-field"><?php echo $package_details['duration']; ?> Months </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="control-label col-sm-3 text-right" for="name"><b>Status</b>  &nbsp:</label>
                    <div class="col-sm-6">  
                        <p class="edit-field"><?php echo ($package_details['status']==1)? '<span style="color:green">Active</span>' : '<span style="color:red">InActive</span>' ; ?> </p>
                    </div>
                </div>
              <?php }else{ ?>
                  
                  <p> No Packages found </p>      
    
              <?php } ?>  

        </div>
		
        </div>
		
    
                <div class="tab-pane" id="sale" role="tabpanel">
                      <div class="card">
                          <div class="card-block">
                            <table id="advanced2-table" class="table table-responsive table-striped table-bordered nowrap">
                                <thead>
                                  <tr role="row">
                                    <th>S NO</th>
                                    <th>Product Image</th>
                    								<th>Category</th>
                                    <th>Model</th>
                                    <th>Days ago</th>
                                    <th>Year</th>
                                    <th>Price</th>
                                    <th>Min Bid</th>
                                    <th>Mileage</th>
                                  </tr>
                                </thead>

                                <tfoot>
                                  <tr>
                                    <th>S NO</th>
                                    <th>Product Image</th>
                                    <th>Category</th>
                                    <th>Model</th>
                                    <th>Days ago</th>
                                    <th>Year</th>
                                    <th>Price</th>
                                    <th>Min Bid</th>
                                    <th>Mileage</th>
                                  </tr>
                                </tfoot>

                                <tbody>
                                    <?php foreach($products as $key=>$product){ ?>
                                      <tr>
                                        <td><?php echo $key + 1 ;  ?></td>
                                        <td><img src="<?php echo base_url().$product['image'];?>" width="100" height="100"></td>
                                        <td><?php echo $product['category_name']; ?></td>
                                        <td><?php echo $product['sub_category_name']; ?></td>
                                        <td><?php echo $product['days_ago']; ?></td>
                                        <td><?php echo $product['year']; ?></td>
                                        <td><?php echo $product['price']; ?></td>
                                        <td><?php echo $product['min_bid']; ?></td>
                                        <td><?php echo $product['milage']; ?></td>
                                        <td></td>
                                      </tr>
    								                <?php } ?>
                                </tbody>

                              </table>
                          </div>
                      </div>
                </div>

	              <div class="tab-pane " id="bid" role="tabpanel">
                      <div class="card">
                          <div class="card-block">
                            <table id="advanced3-table" class="table table-responsive table-striped table-bordered nowrap">
                                <thead>
                                  <tr role="row">
                                    <th>S NO</th>
                                    <th>Product Image</th>
                                    <th>Category</th>
                                    <th>Model</th>
                                    <th>Days ago</th>
                                    <th>Year</th>
                                    <th>Price</th>
                                    <th>Min Bid</th>
                                    <th>bidded</th>
                                  </tr>
                                </thead>

                                <tfoot>
                                  <tr>
                                    <th>S NO</th>
                                    <th>Product Image</th>
                                    <th>Category</th>
                                    <th>Model</th>
                                    <th>Days ago</th>
                                    <th>Year</th>
                                    <th>Price</th>
                                    <th>Min Bid</th>
                                    <th>bidded</th>
                                  </tr>
                                </tfoot>

                                <tbody>
                                  <?php foreach($user_bids as $key=>$product){ ?>
                                    <tr>
                                      <td><?php echo $key + 1 ;  ?></td>
                                      <td><img src="<?php echo base_url().$product['image'];?>" width="100" height="100"></td>
                                      <td><?php echo $product['category_name']; ?></td>
                                      <td><?php echo $product['sub_category_name']; ?></td>
                                      <td><?php echo $product['days_ago']; ?></td>
                                      <td><?php echo $product['year']; ?></td>
                                      <td><?php echo $product['price']; ?></td>
                                      <td><?php echo $product['min_bid']; ?></td>
                                      <td><?php echo $product['bid_value']; ?></td>
                                      <td></td>
                                    </tr>                                
                                  <?php } ?>
                                </tbody>
                          </table>
                       </div>
                    </div>
                </div>
            
            <div class="tab-pane " id="favorites" role="tabpanel">
                          <div class="card">
                            <div class="card-block">
                              <table id="advanced4-table" class="table table-responsive table-striped table-bordered nowrap">
                                <thead>
                                <tr role="row">
                                <th>S NO</th>
                                <th>Product Image</th>
                                <th>Category</th>
                                <th>Model</th>
                                <th>Days ago</th>
                                <th>Year</th>
                                <th>Price</th>
                                <th>Min Bid</th>
                                <th>Mileage</th>
                                <!--<th>Pdf Link</th>-->
                              </tr>
                                </thead>
                                <tfoot>
                                  
                                <tr>
                                  <th>S NO</th>
                                  <th>Product Image</th>
                                  <th>Category</th>
                                  <th>Model</th>
                                  <th>Days ago</th>
                                  <th>Year</th>
                                  <th>Price</th>
                                  <th>Min Bid</th>
                                  <th>Mileage</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                <?php foreach($user_favorites as $key=>$product){ ?>
                                  <tr>
                                    <td><?php echo $key + 1 ;  ?></td>
                                    <td><img src="<?php echo base_url().$product['image'];?>" width="100" height="100"></td>
                                    <td><?php echo $product['category_name']; ?></td>
                                    <td><?php echo $product['sub_category_name']; ?></td>
                                    <td><?php echo $product['days_ago']; ?></td>
                                    <td><?php echo $product['year']; ?></td>
                                    <td><?php echo $product['price']; ?></td>
                                    <td><?php echo $product['min_bid']; ?></td>
                                    <td><?php echo $product['milage']; ?></td>
                                    <td></td>
                                  </tr>
                                <?php } ?>

                                </tbody>
                              </table>
                          </div>
                      </div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
	
   <footer class="f-fix">
    <div class="footer-bg b-t-muted" style="text-align: center;"> Copyrights © <?php echo  date('Y');?> Volivesolutions. All Rights Reserved.
                   
                   
                    </div>
     </footer>
           </div>
  </div>
        <!-- Container-fluid ends -->
        
     </div>
	 
<section>

    <div class = "modal fade" data-backdrop="static" data-keyboard="false" id = "package_list" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true"></div>

    </section>

      

        
 <!-- CONTENT-WRAPPER-->
 <script type="text/javascript">
 var $modal = $('#package_list');

        $('.package_list').on('click',function(event){ 

            var id = $(this).data('id');
			//alert(id);
			event.stopPropagation();

            $modal.load('<?php echo site_url('admin/view_visitlist');?>', {id: id},

            function(){

            /*$('.modal').replaceWith('');*/

            $modal.modal('show');





            });


        });

     $(document).ready(function() {
      var advance = $('#advanced2-table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });

  // Setup - add a text input to each footer cell
      $('#advanced2-table tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<div class="md-input-wrapper"><input type="text" class="md-form-control" placeholder="Search '+title+'" /></div>');
      });
        // Apply the search
      advance.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
              if (that.search() !== this.value) {
                  that
                      .search( this.value)
                      .draw();
              }
          });
      });

      var advance3 = $('#advanced3-table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });

  // Setup - add a text input to each footer cell
      $('#advanced3-table tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<div class="md-input-wrapper"><input type="text" class="md-form-control" placeholder="Search '+title+'" /></div>');
      });
        // Apply the search
      advance3.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
              if (that.search() !== this.value) {
                  that
                      .search( this.value)
                      .draw();
              }
          });
      });
  });
     $(document).ready(function(e) {
      var $modal = $('#showModal');
  $(document).on('click','.view_job',function(){ 
    var id = $(this).data('id');
    event.stopPropagation();
    $modal.load('<?php echo site_url('admin/job_details');?>', {job_id: id},
    function(){
    /*$('.modal').replaceWith('');*/
    $modal.modal('show');

  });
   
  });
  });
 </script>
 <style>
 .md-tabs .nav-item {
    width: calc(100% / 4);
  }
  .nav-tabs .slide {

    width: calc(100% / 4);
    background: none !important;
 }
 </style>
 <div class = "modal fade" id="showModal" tabindex = "-1" role = "dialog"  aria-labelledby = "myModalLabel" aria-hidden = "true">
                
              </div> 


 
