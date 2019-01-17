<style type="text/css">
  .btn-table {
   position: fixed;
   top: 400px;
   z-index: 99;
   right: 2px;
}

.btnleft, .btnright {
   background: #7ABAF2; !important;
}
</style>

<!-- CONTENT-WRAPPER-->

    <div class="content-wrapper">

        <!-- Container-fluid starts -->

         <div class="container-fluid">

    <!-- Row Starts -->

    <div class="row">

      <div class="col-sm-12">

        <div class="main-header">

          <h4>Admin Assingning Requests</h4>

          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">

            <li class="breadcrumb-item">

              <a href="#">

                <i class="icofont icofont-home">Home</i>

              </a>

            </li>

            <li class="breadcrumb-item"><a href="#:" >Admin Assingning Requests</a></li>

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
		

          <div class="card-header"><h5 class="card-header-text">Requests Waiting for Admin Assignment</h5></div>

          <div class="card-block table-responsive">

            <table id="advanced-table" class="table  table-striped table-bordered nowrap" style="overflow-y: auto">

              <thead>

              <tr>

                 <th>S NO</th>
                 <th>User</th>
				 <th>Order Id</th>
                 <th>Service Name</th>
                 <th>Description</th> 
				 <th>Requested Time</th>
                 <th>Cost SAR</th>
				 <th>Created At</th>
         <th>Assing Engineer</th>

              </tr>

              </thead>

              <tfoot>

               <tr>

                 <th>S NO</th>
                 <th>User</th>
				 <th>Order Id</th>
                 <th>Service Name</th>
                <th>Description</th> 
				 <th>Requested Time</th>
                <th>Cost SAR</th>
        <th>Created At</th>
				<th>Assing Engineer</th>
              </tr>

              </tfoot>

              <tbody>

                   <?php foreach($admin_requests as $key=>$request) { 
				    if($request->request_type==1)
					{
						 $request_type='Single Visit';
					}
					else{
					 $request_type='Package Visit';	
					}
				   $req_date=$request->requested_date;
				 $request_date=date('Y-m-d',strtotime($req_date));?>
					 <tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo ucfirst($request->requester); ?></td>
						<td><?php echo $request->order_id;?></td>
						<td><?php echo ucfirst($request->service_type_en); ?></td>
            <td><button class='btn btn-info btn-sm' onclick="popupYT('<?php echo base_url().$request->url ; ?>')">Click </button></td>
						<td><?php echo $request_date.' '.$request->requested_time; ?></td>
						<td><?php echo $request->request_cost; ?></td>
            <td><?php echo $request->request_created_at; ?></td>
						<td>
                 <button type="button" class="btn btn-primary waves-effect waves-light add_services" data-toggle="modal"  data-target = "#add_vehicle" data-id="<?php echo $request->request_id; ?>"  style="float: none;margin: 5px;"> 
                  <span class="icofont icofont-ui-reply"></span>
                 </button>
            </td>
					
					</tr>
                   <?php } ?> 

              </tbody>

            </table>

<div class="btn-table"><a hre="javascript:" class="btn btn-primary btnleft btn-sm" style=""><i class="fa fa-angle-right"></i></a></div>
<div class="btn-table"><a hre="javascript:" class="btn btn-primary btnright btn-sm" style="display: none;"><i class="fa fa-angle-left"></i></a></div>


          </div>

        </div>

      </div>

    </div>



  </div>

        <!-- Container-fluid ends -->

        

     </div>

 <!-- CONTENT-WRAPPER-->

 <section>

    <div class = "modal fade" data-backdrop="static" data-keyboard="false" id = "add_services" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true"></div>

    </section>

   <script>     
 var $modal = $('#add_services');

        $('.add_services').on('click',function(event){ 

            var id = $(this).data('id');
			//alert(id);
			event.stopPropagation();

            $modal.load('<?php echo site_url('admin/assign_sp');?>', {id: id},

            function(){

            /*$('.modal').replaceWith('');*/

            $modal.modal('show');





            });


        });

$( "#fromdatepicker" ).datepicker({
}).on('change', function(){
        $('.datepicker').hide();
    }); 
$( "#todatepicker" ).datepicker({
}).on('change', function(){
        $('.datepicker').hide();
    });
$( "#todatepicker" ).change(function() {
	var todate=$('#todatepicker').val();
   //alert(todate);
	 var fromdate=$('#fromdatepicker').val();
	 //alert(fromdate);
	 
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
		if(Date.parse(fromdate)<Date.parse(todate))
		{
	$.ajax({                
			url: "<?php echo base_url();?>admin/waiting_requests",
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


  function popupYT(url) 
  {
    window.open(url, 'popup', config='height=500,width=1000')
  }

</script>

 <script>
$(function() {
   $( ".btnright" ).hide('');
 $('.btnleft').click(function () {

$( ".table-bordered" ).css('margin-left','-92px');
$( ".btnleft" ).hide('');
$( ".btnright" ).show('');
});

$('.btnright').click(function () {

$( ".table-bordered" ).css('margin-left','0px');
$( ".btnright" ).hide('');
$( ".btnleft" ).show('');
});
});
</script>