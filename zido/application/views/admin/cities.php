<!-- CONTENT-WRAPPER-->

    <div class="content-wrapper">

        <!-- Container-fluid starts -->

         <div class="container-fluid">

    <!-- Row Starts -->

    <div class="row">

      <div class="col-sm-12">

        <div class="main-header">

          <h4>Cities</h4>

          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">

            <li class="breadcrumb-item">

              <a href="#">

                <i class="icofont icofont-home">Home</i>

              </a>

            </li>
			
            <li class="breadcrumb-item"><a href="#:" >Add/Edit City</a></li>
			
          </ol>

        </div>

      </div>

    </div>

    <!-- Row end -->

    

    <div class="row">

      <div class="col-sm-12">

        <div class="card">

          <div class="card-header"><h5 class="card-header-text">Add/Edit City</h5>
             <span><button class="btn btn-success fa fa-plus add" data-name="<?php echo @$current_page; ?>" style="margin-left:80%"> City </button></span> 
<!--             <span><button class="btn btn-success fa fa-plus add_category" data-name="<?php echo @$current_page; ?>"> Sub service </button></span> -->
          </div>

          <div class="card-block">

            <table id="advanced-table" class="table dt-responsive table-striped table-bordered nowrap">

              <thead>
              <tr>
                <th>S NO</th>
                <th>Coutries</th>
                <th>City</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>

              <tfoot>
               <tr>
                <th>S NO</th>
                <th>Coutries</th>
                <th>City</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </tfoot>

              <tbody>

                   <?php 

                      $counter = 1;

                      foreach($cities as $city) {
                          //echo $key[request_type];

                          if ($city["status"] == "1") {

                              $status = "tag tag-success" ;
                              $status1= 'Active';

                          } else {

                              $status = "tag tag-default" ;
                              $status1= 'InActive';

                          } ?>
 
                              <tr id="hide<?php echo $city["id"] ; ?>">

                                  <td><?php echo $counter ; ?></td> 

                                  <td style="width:300px;"><?php echo ucfirst($city["country_name"]) ; ?></td> 
                                  <td style="width:300px;"><?php echo ucfirst($city["name_en"]) ; ?></td> 

                                  <td><span class="<?php echo $status ; ?>"><?php echo ucfirst($status1) ;?></span></td>

                                   <td style="white-space: nowrap; width: 1%;">

                                    <div class=" user-toolbar btn-toolbar" style="text-align: left;">

                                        <div class="btn-group btn-group-sm" style="float: none;">

                                            <button type="button" class="btn btn-primary waves-effect waves-light add" data-toggle="modal"  data-target = "#add" data-id="<?php echo $city["id"] ;?>"  style="float: none;margin: 5px;"> 

                                                <span class="icofont icofont-ui-edit"></span>
                                            </button>
<!-- 
                                            <button type="button" class="btn btn-primary waves-effect waves-light delete_package" data-id="<?php echo $city["id"] ; ?>" style="float: none;margin: 5px;"> 

                                                <span class="icofont icofont-ui-delete"></span>

                                            </button> -->

                                         
                                        </div>                                                       

                                    </div>

                                </td>

                              </tr>

                      <?php $counter++; } ?> 
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

    <div class = "modal fade" data-backdrop="static" data-keyboard="false" id = "add" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true"></div>

    </section>

   <script>     

        var $modal = $('#add');

        $('.add').on('click',function(event){ 

            var id = $(this).data('id');

            event.stopPropagation();

            $modal.load('<?php echo site_url('admin/add_city');?>', {id: id},

            function(){

            /*$('.modal').replaceWith('');*/

            $modal.modal('show');

            });

        });



        //delete 

    $('.delete_package').on('click',function(event)
    { 

          var id = $(this).data('id');
                 
              swal({title: 'Delete This Service ?', showCancelButton: true}).then(result => {
                if (result.value) 
                {
                        //swal("Deleted!", "Cancelled.", "success")
                } 
                else 
                {
                         $.ajax({                
                              url: "<?php echo base_url();?>admin/delete_data/services",
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
                                      swal("Deleted!", "Service Deletion Is Success", "success"); 
                                      location.reload();
                                      $("#hide"+id).hide();
                                  }
                              }
                        });
                   }
              })

          });
  

    $('.delete_sub_service').on('click',function(event)
    { 

          var id = $(this).data('id');
                 
          swal({title: 'Delete This Sub Service ?', showCancelButton: true}).then(result => {

                if (result.value) 
                {
                        //swal("Deleted!", "Cancelled.", "success")
                } 
                else 
                {
                         $.ajax({                
                              url: "<?php echo base_url();?>admin/delete_sub_service",
                              type: "POST",
                              data: {id:id},
                              error:function(request,response)
                              {
                                  console.log(request);
                              },                  
                              success: function(result)
                              {

                                  if(result=='1')
                                  { 
                                      swal("Deleted !", "Sub Service Deletion Is Success", "success"); 
                                      location.reload();
                                  }
                                  else
                                  {
                                    swal("Failed !", "Something went wrong", "error"); 
                                  }
                              }
                        });
                   }
              })

          });



 $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii"
    });		

    </script>

 