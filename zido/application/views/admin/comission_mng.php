<!-- CONTENT-WRAPPER-->

    <div class="content-wrapper">

        <!-- Container-fluid starts -->

         <div class="container-fluid">

    <!-- Row Starts -->

    <div class="row">

      <div class="col-sm-12">

        <div class="main-header">

          <h4>Service Providers</h4>

          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">

            <li class="breadcrumb-item">

              <a href="#">

                <i class="icofont icofont-home">Home</i>

              </a>

            </li>

            <li class="breadcrumb-item"><a href="#:" >Service Providers</a></li>

          </ol>

        </div>

      </div>

    </div>

    <!-- Row end -->
<div class="row">
    <div class="col-sm-12">
     <div class="card">
     <div class="card-block">
     <div>
  <?php 
	  
    @$searchfrom=date('m/d/Y',strtotime($this->session->userdata['searchfrom']));
    @$searchto=date('m/d/Y',strtotime($this->session->userdata['searchto']));
   if(@$searchfrom == '01/01/1970')
   {
	 @$searchfrom='';  
   }
   if(@$searchto == '01/01/1970')
   {
	 @$searchto='';    
   }
	 ?>	 
   <div class="col-md-4"><label for="">  From Date:</label> &nbsp; <input type="text" id="fromdatepicker" name="fromdate" value="<?php echo $searchfrom;?>"> </div>
   <div class="col-md-4">  <label for="">To Date:</label> &nbsp; <input type="text" id="todatepicker" name="todate" value="<?php echo $searchto;?>"></div>
   	<div class="col-md-4">  <input type="button" class="btn btn-primary dataclear" value="Clear"></div>
		  </div>
     </div>
    </div>
    </div>
    </div>

   <div class="row">

      <div class="col-sm-12">

        <div class="card">

          <div class="card-header"><h5 class="card-header-text">View Service provider Details</h5></div>

          <div class="card-block">

            <table id="advanced-table" class="table dt-responsive table-striped table-bordered nowrap">

              <thead>

              <tr>

                <th>S NO</th>

                <th>Service Provider Name</th>
                
                <th>Email</th>
                 
                <th>Commission</th>
                 <th>Type</th>
                 
                <th>Action</th>


                

              </tr>

              </thead>

              <tfoot>

               <tr>

                 <th>S NO</th>

                 <th>Service Provider Name</th>
                
                 <th>Email</th>
                 <th>Commission</th>
                 <th>Type</th>
                 
				
                 
                <th>Action</th>


                

              </tr>

              </tfoot>

              <tbody>

                   <?php 

                      $counter = 1;

                      foreach($serviceproviderdata as $key) {
                          //echo $key[request_type];

                          $userid=$key["id"];
                           if ($key["approval_status"] == "1") {

                              $status = "tag tag-success" ;
                              $status1='Active';

                          } else {

                              $status = "tag tag-default" ;
                               $status1='InActive';

                          }
                        
                         ?>
                              <tr id="hide<?php echo $key["id"];?>">

                                  <td><?php echo $counter;?></td> 

                                  <td><?php echo ucfirst($key["username"]);?></td> 
                                  
                                  <td><?php echo $key["email"];?></td>
                                  
                                  <td><input type="text" class="form-control" name="commission" placeholder="Please Enter Commission" id="cm-<?php echo $key['id']; ?>" value="<?php echo $key['comission']; ?>" onkeypress="return isNumberKey(event);"></td>
								  <td><select name="type" class="form-control" id="ty-<?php echo $key['id']; ?>">
					           <option value="">--Select Type--</option>
					           <option value="1" <?php if($key['type']=='1'){ echo "selected";}?>>Percentage</option>
					           <option value="2" <?php if($key['type']=='2'){ echo "selected";}?>>Amount</option>
					   </select></td>
					     <td><a class="btn btn-success priceupdate" id="<?php echo $key['id'];?>">Update</a></td>
                              </tr>

                         

                        <?php  $counter++;

                      }

                  ?> 

              </tbody>

            </table>

          </div>

        </div>

      </div>

    </div>

  </div>

        <!-- Container-fluid ends -->

        

     </div>

 <!-- CONTENT-WRAPPER-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" > </script>
<script src="sha256-FSEeC+c0OJh+0FI23EzpCWL3xGRSQnNkRGV2UF5maXs=" > </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" integrity="sha256-FSEeC+c0OJh+0FI23EzpCWL3xGRSQnNkRGV2UF5maXs=" crossorigin="anonymous"></script>


   <script>     

//$( "#fromdatepicker" ).datepicker(); 

$('#fromdatepicker').datepicker({
    }).on('change', function(){
        $('.datepicker').hide();
    });
//$( "#todatepicker" ).datepicker();
$('#todatepicker').datepicker({
    }).on('change', function(){
        $('.datepicker').hide();
    });
	
$( "#todatepicker" ).change(function() {
	var todate=$('#todatepicker').val();
	 var fromdate=$('#fromdatepicker').val();
	 
	 if(Date.parse(fromdate)>Date.parse(todate))
    {
		    $.notify({
					message: 'Please select To Date Greaterthan From Date'
				},{
					type: 'danger'
				});
    }
	
	if(fromdate =='')
	{
		$.notify({
					message: 'Please select From Date'
				},{
					type: 'danger'
				});
	}
	if(fromdate!='' && todate!='')
	{
		if(Date.parse(fromdate)<=Date.parse(todate))
		{
	$.ajax({                
			url: "<?php echo base_url();?>admin/serviceprovider",
			type: "POST",
			data: {from_date:fromdate,to_date:todate},
			error:function(request,response){
				console.log(request);
			}, 
			success:function(data){
				location.reload();
				 
				 
			}
			
		   
		});
		}
	}

          
});
  
  
$('.dataclear').on('click',function(event){
var fromdate='';
var todate='';

                  $.ajax({                
                    url: "<?php echo base_url();?>admin/provider",
                    type: "POST",
                    data: {from_date:fromdate,to_date:todate},
                    error:function(request,response){
                        console.log(request);
                    }, 
					success:function(result){
						location.reload();
						
					}
					
                   
                });
   

   
 });  
 
 $('.status').on('click',function(event){ 

          

            var userid = $(this).data('id');
			var status=$('#status'+userid).val();
			
			
			 $.ajax({                
		url: "<?php echo base_url();?>admin/updatestatus",
		type: "POST",
		data: {id:userid,sta:status},
		error:function(request,response){
			console.log(request);
		},                  
		success: function(result){
		   if(result==1){
			  location.reload();
				
		   }else{
			 location.reload(); 
		   }
		 
		}
  });
			
		
});
       
//delete 

        $('.delete_team_mem').on('click',function(event){ 

          

            var id = $(this).data('id');
			

              $.ajax({                

                    url: "<?php echo base_url();?>admin/delete_data/users",

                    type: "POST",

                    data: {id:id},

                    error:function(request,response){

                        console.log(request);

                    },                  

                    success: function(result){

                        var res = jQuery.parseJSON(result);

                        if(res.status='success')
                        {
							              location.reload();
                            $("#hide"+id).hide();
                        }

                        

                    }

              });

  });   
         

  function ban($sp_id="",$ban_flag="")
  {
    var sp_id    = $sp_id;
    var ban_flag = $ban_flag;

    if(sp_id=="")
    {
      swal("User is Active !", "You can't ban him");
    }
    else
    {   

            $.ajax({                

                    url: "<?php echo base_url();?>admin/ban_sp",

                    type: "POST",

                    data: {'sp_id':sp_id,'ban_flag':ban_flag},

                    error:function(request,response)
                    {
                        console.log(request);
                      }, 

                    success:function(status)
                    {
                        if(status==1)
                        {
                           if(ban_flag)
                            { swal("User Banned!", "User has been Banned", "success");}
                            else 
                            { swal("Account Activated!", "User Account Activated", "success");}   

                            location.reload();
                        }
               
                        if(status==2)
                       {
                          swal("404 !", "User not found", "error");
                        }
              
                        if(status==0)
                        {
                          swal("404 !", "User id is Empty", "error");
                        }
               
                    }
                });
    }
  }

    </script>
 <script>
 $(".priceupdate").click(function(){
		var tid=$(this).attr("id");
		var cm=$("#cm-"+tid).val();
		var types=$("#ty-"+tid).val();
		var user='1';
		if(cm!="" && types!="" ){
				$.ajax({
					url:"<?php echo base_url();?>admin/update_comission",
					type:"POST",
					data:{tid:tid,commission:cm,ptye:types},
					success:function(data)
					{
						if(data==1){
							swal("Updated", "Vendor comission updated", "success");
						}
						else{
							swal("Info", "No New data/Comission not updated", "error");
						}
					}
				});
		}else{
			swal("404", "Please Enter comission/Type", "error");
		}
	});	
function isNumberKey(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode;
   if(charCode != 43 && charCode !=45 && charCode > 31 && (charCode < 48 || charCode > 57))
   return false;
  else
   return true;
   }	
 </script>

 