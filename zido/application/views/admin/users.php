<style type="text/css">
:root {
  --active-bg: #2f9a2f;
  --inactive-bg: #cc3f3f;
  --switch-bg: #f2f2f2;
  --width: 40px;
  --height: calc(var(--width) / 2);
  --margin: 5px;
  --transition-time: 0.3s;
  --border: solid 5px #c2c2c2;
}

.switch {
  width: var(--width);
  height: var(--height);
  border: var(--border);
  position: relative;
  overflow: hidden;
  display: inline-block;
  border-radius: 25% / 50%;
}

.switch input[type='checkbox'] {
  display: none;
}

.switch input[type='checkbox'] + span {
  background-color: var(--inactive-bg);
  width: calc(var(--width) + calc(var(--width) / 2));
  height: var(--height);
  position: absolute;
  left: calc(var(--width) * -0.5);
  transition: var(--transition-time) left ease-out, var(--transition-time) background-color ease-out;
}

.switch input[type='checkbox'] + span:before {
  content: '';
  background-color: var(--switch-bg);
  width: calc(calc(var(--width) / 2) - calc(var(--margin) * 2));
  height: calc(var(--height) - calc(var(--margin) * 2));
  position: absolute;
  top: var(--margin);
  left: 50%;
  border-radius: 50%;
  transform: translate(-50%);
}

.switch input[type='checkbox']:checked + span {
  background-color: var(--active-bg);
  left: 0;
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

          <h4>Users</h4>

          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">

            <li class="breadcrumb-item">

              <a href="#">

                <i class="icofont icofont-home">Home</i>

              </a>

            </li>

            <li class="breadcrumb-item"><a href="#:" >Users List</a></li>

          </ol>

        </div>

      </div>

    </div>

    <!-- Row end -->

    

    <div class="row">

      <div class="col-sm-12">

        <div class="card">

          <div class="card-header"><h5 class="card-header-text">Users List</h5></div>

          <div class="card-block table-responsive">

            <table id="advanced-table" class="table  table-striped table-bordered nowrap">

              <thead>

              <tr>

                <th>S NO</th>
                <th>User</th>
				        <th>Email</th>
                <th>Phone Number</th>
				        <th>Registered Through</th>
                <th>Allow Free Access</th>
                <th>Status</th>
                <th>Action</th>

              </tr>

              </thead>

              <tfoot>

               <tr>

                 <th>S NO</th>
                <th>User</th>
				        <th>Email</th>
				        <th>Phone Number</th>
                <th>Registered Through</th>
                <th>Allow Free Access</th>
                <th>Status</th>
                <th>Action</th>

              </tr>

              </tfoot>

              <tbody>

                   <?php 

                      $counter = 1;

                      foreach($users as $k=>$key) {
                          //echo $key[request_type];

                          if ($key["approval_status"] == "1") 
                          {
                            $status = "tag tag-success" ;
                            $status1='Active';
                          }
                          else
                          {
                            $status = "tag tag-default" ;
                            $status1='InActive';
                          }
						  ?>
						  <tr id="hide<?php echo $key["id"];?>" >
						  <td><?php echo $counter;?></td>
						  <td><?php echo ucfirst($key['username']);?></td>
						  <td><?php echo $key['email'];?></td>
              <td><?php echo $key['phone_number'];?></td>
              
              <?php 
                     $mobile  = "<span class='tag tag-primary'>Mobile App</span>" ;
                     $website = "<span class='tag tag-info'>Website</span>" ;
              ?>


              <td><?php echo ($key['register_through']==1) ? $mobile : $website ;?></td>
              
              <?php if(!$key['package_selected'] || $key['free_access_flag']){ ?>
  						  <td>
                  <label for="example-switch<?php echo  $k ; ?>" class="switch">
                    <input id="example-switch<?php echo  $k ; ?>" type="checkbox" <?php echo ($key['free_access_flag']==1) ? 'checked' : '' ; ?> onchange="allow_free_access('<?php echo $key['id']; ?>','<?php echo $k; ?>')">
                    <span></span>
                  </label>
                  <sub id="notify<?php echo $k; ?>"><?php echo ($key['free_access_flag']==1) ? 'Allowed' : 'Not-Allowed' ; ?></sub>
                </td>
              <?php }else{ ?>
                <td>Already he has package</td>
              <?php } ?>

						  <td class="status" data-id="<?php echo $key["id"];?>"><a><span class="<?php echo $status;?>"><?php echo $status1;?></span></a>
								   <input type="hidden" id="status<?php echo $key["id"];?>" value="<?php echo $key["approval_status"];?>"></td>
						  <td><a class="btn btn-primary waves-effect waves-light" href="<?php echo base_url();?>admin/view_userdetails/<?php echo $key["id"];?>" role="button" data-toggle="tooltip" title="" data-original-title="View"><i class="icofont icofont-eye"></i></a>
						  
						   <a class="btn btn-primary waves-effect waves-light delete_team_mem" data-id="<?php echo $key["id"];?>" style="float: none;margin: 5px;"> 
                             <span class="icofont icofont-ui-delete"></span>
                             </a>
						  
						  </td>
						  <!--<td><i class="fa fa-eye"></i></td>-->
						  
						  
						  </tr>
                      <?php  $counter++;}?> 
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

  <section>

    <div class = "modal fade" data-backdrop="static" data-keyboard="false" id = "add_services" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true"></div>

    </section>

   <script>     

        var $modal = $('#add_services');

        $('.add_services').on('click',function(event){ 

          

            var id = $(this).data('id');

            event.stopPropagation();

            $modal.load('<?php echo site_url('admin/add_packages');?>', {id: id},

            function(){

            /*$('.modal').replaceWith('');*/

            $modal.modal('show');





            });

        });

        //delete 

        $('.delete_team_mem').on('click',function(event){ 

          

            var id = $(this).data('id');
			
            swal({title: 'Delete this user from DATABASE ?', showCancelButton: true}).then(result => {
                if (result.value) 
                {
                        //swal("Deleted!", "Cancelled.", "success")
                } 
                else 
                {
                  $.ajax({                
                            url: "<?php echo base_url();?>admin/delete/users",
                            type: "POST",
                            data: {id:id},
                            error:function(request,response)
                            {
                                console.log(request);
                            },                  
                            success: function(result)
                            {
                                var res = jQuery.parseJSON(result);
                                if(res.status='success')
                                {
                                  swal("Deleted!", "User Deletion Is Success", "success"); 
                                    location.reload();
                                    $("#hide"+id).hide();
                                }
                            }
                         });
                }
            }); 
        });   

$('.status').on('click',function(event){ 

      var user_id = $(this).data('id');
			var status  = $('#status'+userid).val();
			
			 $.ajax({                
            		url: "<?php echo base_url();?>admin/update_status",
            		type: "POST",
            		data: {'id':user_id,'status':status},
            		error:function(request,response)
                {
            			console.log(request);
            		},                  
            		success: function(result)
                {
            		   if(result==1)
                   {
            			  location.reload();
            		   }
                   else
                   {
            			   location.reload(); 
            		   }
            		 
            		}
            });
		
});  


function allow_free_access($user_id,$key)
{

  $flag = $("#example-switch"+$key+":checked").length;


    if($flag)
    {
      $("#notify"+$key).html('Allowed') ;
    }
    else
    {
      $("#notify"+$key).html("Not-Allowed") ;
    }

    $.ajax({
        url: "<?php echo base_url();?>admin/allow_free_access",
        type: "POST",
        data: {'user_id':$user_id,'status':$flag},
        dataType: 'text',
        error:function(request,response){
            console.log(request);
        },                  
        success: function(result)
        { 
          //alert(result);
        }
    });

}

</script>

