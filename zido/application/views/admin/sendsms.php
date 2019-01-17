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
           <a class="nav-link  " data-toggle="tab" href="#user_s" role="tab"><i class=""></i>To Users </a>
            <div class="slide"></div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#sp_s" role="tab"><i class=""></i>To Service Providers</a>
            <div class="slide"></div>
        </li>
   
    </ul>
 
    
 
    <div class="tab-content">
        <div class="tab-pane active" id="user_s" role="tabpane">
                          <div class="card">
                            <div class="card-block">
                             <table id="advanced2-table" class="table dt-responsive table-striped table-bordered nowrap">

              <thead>

              <tr>

                <th>S NO</th>
                <th>Select <input type="checkbox" class="form-control" id="select_all_mem" name="select_all_mem" ></th>
                <th>User</th>
				<th>Email</th>
				<th>Phone Number</th>
                <th>Status</th>
            

              </tr>

              </thead>

              <tfoot>

               <tr>

                 <th>S NO</th>
                 <th>Select</th>
                <th>User</th>
				<th>Email</th>
				<th>Phone Number</th>
                <th>Status</th>
              

              </tr>

              </tfoot>

              <tbody>

                   <?php 

                      $counter = 1;

                      foreach($userslist as $key) {
                          //echo $key[request_type];

                          if ($key["approval_status"] == "1") {

                              $status = "tag tag-success" ;
                              $status1='Active';

                          } else {

                              $status = "tag tag-default" ;
                               $status1='InActive';

                          }
						  ?>
						  <tr id="hide<?php echo $key["id"];?>" >
						  <td><?php echo $counter;?></td>
						  <td><input type="checkbox" class="selected_mem" value="<?php echo $key["id"];?>"></td>
						  <td><?php echo ucfirst($key['username']);?></td>
						  <td><?php echo $key['email'];?></td>
						  <td><?php echo $key['phone_number'];?></td>
						  <!--<td><span class="<?php echo $status;?>"><?php echo $status1;?></span></td>-->
						  <td class="status" data-id="<?php echo $key["id"];?>"><a><span class="<?php echo $status;?>"><?php echo $status1;?></span></a>
								   <input type="hidden" id="status<?php echo $key["id"];?>" value="<?php echo $key["approval_status"];?>"></td>
						 
						  <!--<td><i class="fa fa-eye"></i></td>-->
						  
						  
						  </tr>
						  

                          

                      <?php  $counter++;}

                  ?> 

              

              

              </tbody>

            </table>
                            </div>
							
							<div class="card-block">
                                <form name="schedule_mail_mem" id="schedule_mail_mem">
                                <div class="alert alert-warning" id="member_slect_error" style="display:none;" >
                                      Please select at least one User
                                    </div>
                                    
                                    
                                    <div class="form-group row">
                                     <label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Message Text</label>
                                     <div class="col-sm-6">
                                      
										<textarea  name="data[message]" class="form-control"> </textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                 
                                     <div class="col-sm-6">
                                   <button type="submit" class="btn btn-primary schedule_mail_mem" style="margin-left: 370px;">Submit</button>
                                        </div>
                                    </div>
                                  
                                    <input type="hidden" name="data[user_ids]" id="midstosent" value="">
                                 
                                    
                                 
                                </form>
                            </div>
                          </div>
                        </div>
    
        <div class="tab-pane fade" id="sp_s" role="tabpane">
                          <div class="card">
                            <div class="card-block">
                              <table id="advanced3-table" class="table dt-responsive table-striped table-bordered nowrap">

              <thead>

              <tr>

                <th>S NO</th>
                <th>Select <input type="checkbox" class="form-control" id="select_all_mem1" name="select_all_mem1" ></th>
                <th>User</th>
				<th>Email</th>
				<th>Phone Number</th>
                <th>Status</th>
            

              </tr>

              </thead>

              <tfoot>

               <tr>

                 <th>S NO</th>
                 <th>Select</th>
                <th>User</th>
				<th>Email</th>
				<th>Phone Number</th>
                <th>Status</th>
              

              </tr>

              </tfoot>

              <tbody>

                    <?php 
             $counter = 1;

            foreach($sp as $user)
            {
                if ($key["approval_status"] == "1") {

                              $status = "tag tag-success" ;
                              $status1='Active';

                          } else {

                              $status = "tag tag-default" ;
                               $status1='InActive';

                          }
               
               ?>
                   <tr>
                   <td><?php echo $counter;?></td>
                    <td><input type="checkbox" class="selected_mem1" value="<?php echo $user["id"];?>"></td>
                   <td><?php echo ucfirst($user['username']);?></td>
                   <td><?php echo $user['email'];?></td>
                   <td><?php echo $user['phone_number'];?></td>
                  <td class="status" data-id="<?php echo $key["id"];?>"><a><span class="<?php echo $status;?>"><?php echo $status1;?></span></a>
					<input type="hidden" id="status<?php echo $key["id"];?>" value="<?php echo $key["approval_status"];?>"></td>
                   
                   
                   </tr>
                   
         <?php  
              $counter++;
           }
           ?>

              </tbody>

            </table>
                              </table>
                            </div>
                            	<div class="card-block">
                                <form name="schedule_mail_mem1" id="schedule_mail_mem1">
                                <div class="alert alert-warning" id="member_slect_error1" style="display:none;" >
                                      Please select at least one User
                                    </div>
                                    
                                    
                                    <div class="form-group row">
                                     <label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Message Text</label>
                                     <div class="col-sm-6">
                                      
										<!--<textarea  name="data[message]" class="form-control"> </textarea>-->
										<input type="text" name="data[message]"  class="form-control">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                 
                                     <div class="col-sm-6">
                                        <input type="submit" name="schedule_mail_mem1" value="Submit" class="btn btn-primary schedule_mail_mem1" style="margin-left: 370px;">
                                        </div>
                                    </div>
                                  
                                    <input type="hidden" name="data[user_ids]" id="midstosent1" value="">
                                 
                                    
                                 
                                </form>
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
       $("#select_all_mem").click(function () {
        $(".selected_mem").prop('checked', $(this).prop('checked'));
    });
       $("#select_all_mem1").click(function () {
        $(".selected_mem1").prop('checked', $(this).prop('checked'));
    });
// send sms to users

$("#schedule_mail_mem").validate({       

            rules: {
                "data[message]"             : "required"
            },
            messages : {
				
				"data[message]"             : "Enter Message"
            },      

});
$('.schedule_mail_mem').click(function(e){ 
	e.preventDefault();
    

        var validator = $("#schedule_mail_mem").validate();

            validator.form();

            if(validator.form() == true){

                  if($(".selected_mem").is(':checked')) {
				var data = new FormData($('#schedule_mail_mem')[0]); 						 
                  var ids = '';
                  $('input:checked').each(function () { ids += this.value + ',' });
                    $("#midstosent").val(ids);
                    $.ajax({
                      type : "POST",
                      url  : "<?php echo base_url('admin/sentsms');?>",
                      data : data,
					  cache : false,
    processData: false,
                      success : function(result) {
                        var obj = jQuery.parseJSON(result);
                        if (obj.status == "success") {
                            location.reload();
                        } 
                      }     
                    });
                } else {
                    $("#member_slect_error").css('display','block');
                    $('#member_slect_error').show().delay(2500).fadeOut('slow');
				}

            }

        });
//send sms to sp
$("#schedule_mail_mem1").validate({       

            rules: {
                "data[message]"             : "required"
            },
            messages : {
				
				"data[message]"             : "Enter Message"
            },      

});
$('.schedule_mail_mem1').click(function(e){ 
	e.preventDefault();
    

        var validator = $("#schedule_mail_mem1").validate();

            validator.form();

            if(validator.form() == true){

                  if($(".selected_mem1").is(':checked')) {
				var data = new FormData($('#schedule_mail_mem1')[0]); 						 
                  var ids = '';
                  $('input:checked').each(function () { ids += this.value + ',' });
                    $("#midstosent1").val(ids);
                    $.ajax({
                      type : "POST",
                      url  : "<?php echo base_url('admin/sentsms');?>",
                      data : data,
					  cache : false,
    processData: false,
                      success : function(result) {
                        var obj = jQuery.parseJSON(result);
                        if (obj.status == "success") {
                            location.reload();
                        } 
                      }     
                    });
                } else {
                    $("#member_slect_error1").css('display','block');
                    $('#member_slect_error1').show().delay(2500).fadeOut('slow');
				}

            }

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


 
