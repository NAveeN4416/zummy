<?php $job_status = array("0"=>"pending","1"=>"accepted","2"=>"rejected","3"=>"completed","4"=>"cancelled" );?>
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
            
             <ul class="nav nav-tabs md-tabs" role="tablist">
        <li class="nav-item active">
           <a class="nav-link " data-toggle="tab" href="#user_view" role="tab"><i class=""></i>Service Provider Profile</a>
            <div class="slide"></div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#user_trip" role="tab"><i class=""></i>Service Provider Request Details</a>
            <div class="slide"></div>
        </li>
   
    </ul>
 
    
 
    <div class="tab-content">
        <div class="tab-pane active" id="user_view" role="tabpanel">
          <div class="col-md-2">
            <img class="img-fluid width-100" src="<?php echo base_url(); ?>assets/uploads/user_profiles/profile.png"  alt="" style="">
          </div>
            <div class="col-md-8">
            
            <div class="form-group">
                <label class="control-label col-sm-3 text-right" for="email"><b>Name</b> &nbsp:</label>
                <div class="col-sm-6">  
                    <p class="edit-field"><?php echo ucwords($serviceuserdata['username']); ?></p>
                </div>
            </div>
            <div class="clearfix"></div> 

            <div class="form-group">
                <label class="control-label col-sm-3 text-right" for="email"><b>Phone No</b> &nbsp:</label>
                <div class="col-sm-6">  
                    <p class="edit-field"><?php echo $serviceuserdata['phone_number']; ?></p>
                </div>
            </div>

             <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-sm-3 text-right" for="email"><b>Email</b> &nbsp:</label>
                <div class="col-sm-6">  
                    <p class="edit-field"><?php echo $serviceuserdata['email']; ?></p>
                </div>
            </div>
           

           <div class="clearfix"></div>
           

            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-sm-3 text-right" for="email"><b>Country</b> &nbsp:</label>
                <div class="col-sm-6">  
                    <p class="edit-field"><?php echo ucfirst($serviceuserdata['country_name']); ?></p>
                </div>
            </div>
			
			<div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-sm-3 text-right" for="email"><b>Address</b> &nbsp:</label>
                <div class="col-sm-6">  
                    <p class="edit-field"><?php echo ucwords($serviceuserdata['address']); ?></p>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-sm-3 text-right" for="email"><b>Status</b>  &nbsp:</label>
                <div class="col-sm-6">  
                    <p class="edit-field"><?php if($serviceuserdata['approval_status'] ==1){echo 'Active';}else{echo 'InActive';} ?></p>
                </div>
            </div>
			
			<div class="clearfix"></div>
           <div class="form-group">
                <label class="control-label col-sm-3 text-right" for="email"><b>Image</b> &nbsp:</label>
                <div class="col-sm-6">  
                    <p class="edit-field"><img src="<?php echo base_url();?><?php echo $serviceuserdata['image'];?>" class="img-fluid img-circle p-absolute d-block text-center" alt="" style="width: 35px;height: 50px;"></p>
                </div>
            </div>
			
			<div class="clearfix"></div>
           <div class="form-group">
                <label class="control-label col-sm-3 text-right" for="email"><b>Services</b> &nbsp:</label>
                <div class="col-sm-6">  
                    <p class="edit-field"><?php $a='';$d='.';foreach($services as $data1){ $b= $data1['service_type_en'];
					$c=',';
					$a.=$b.$c;}
					echo $a;
					?></p>
                </div>
            </div>
			
           

        </div>
        </div>
    
        <div class="tab-pane fade" id="user_trip" role="tabpane">
                          <div class="card">
                            <div class="card-block">
                              <table id="advanced2-table" class="table dt-responsive table-striped table-bordered nowrap">
                                <thead>
                                <tr role="row">
                                <th>S NO</th>
                                <th>Request User</th>
								<th>Request Type</th>
                                <th>Service</th>
                                <th>Status</th>
                              </tr>
                                </thead>
                                <tfoot>
                                  
                                 <tr>
                                <th>S NO</th>
                                <th>Request User</th>
								<th>Request Type</th>
								<th>Service</th>
                                <th>Status</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                     <?php 
                                $counter = 1;
								foreach($requests as $data){
              
			$status=$data['request_status'];
			if($status=='1')
			{
				 $status='Accepted';
			}
			else if($status=='2')
			{
				 $status='Rejected';
			}
			else if($status=='3'){
				 $status='Completed';
			}
			else{
				$status='';
			}
                     ?>
					 <tr>
					 <td><?php echo $counter;?></td>
					 <td><?php echo $data['username'];?></td>
					 <td><?php echo $data['request_type'];?></td>
					 <td><?php echo $data['service_type_en'];?></td>
					 <td><?php echo $status;?></td>
					 
					 </tr>
					 
								<?php  $counter++;}?>
              
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
 <!-- CONTENT-WRAPPER-->
 <script type="text/javascript">
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
    width: calc(100% / 2);
  }
  .nav-tabs .slide {

    width: calc(100% / 2);
 }
 </style>
 <div class = "modal fade" id="showModal" tabindex = "-1" role = "dialog"  aria-labelledby = "myModalLabel" aria-hidden = "true">
                
              </div> 


 
