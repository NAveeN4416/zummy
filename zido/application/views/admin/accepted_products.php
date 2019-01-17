
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

          <h4>Bid Accepted Products</h4>

          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">

            <li class="breadcrumb-item">

              <a href="#">

                <i class="icofont icofont-home">Home</i>

              </a>

            </li>
			
            <li class="breadcrumb-item"><a href="#:" >Manage Accepted Products</a></li>
			
          </ol>

        </div>

      </div>

    </div>

    <!-- Row end -->

    

    <div class="row">

      <div class="col-sm-12">

        <div class="card">

          <div class="card-header"><h5 class="card-header-text">Manage Accepted Products</h5>
            <!--  <span><button class="btn btn-success fa fa-plus add_package" data-name="<?php echo @$current_page; ?>" style="margin-left:69%"> Products </button></span>  -->
<!--             <span><button class="btn btn-success fa fa-plus add_category" data-name="<?php echo @$current_page; ?>"> Sub service </button></span> -->
          </div>

          <div class="card-block table-responsive">

            <table id="advanced-table" class="table  table-striped table-bordered nowrap">

              <thead>

              <tr>

                <th>S NO</th>
                <th>Product image</th>
                <th>Category</th>
                <th>Model</th>
                <th>Car Type</th>
                <th>Days Ago</th>
                <th>City</th>
                <th>Year</th>
                <th>Price SAR</th>
                <th>Minimum Bid  SAR</th>
                <th>Mileage Kmph</th>
                <th>Other Info</th>
                <th>Deal Title</th>
                <th>Action</th>

              </tr>

              </thead>

              <tfoot>

               <tr>

                <th>S NO</th>
                <th>Product image</th>
                <th>Category</th>
                <th>Model</th>
                <th>Car Type</th>
                <th>Days Ago</th>
                <th>City</th>
                <th>Year</th>
                <th>Price SAR</th>
                <th>Minimum Bid SAR</th>
                <th>Mileage Kmph</th>
                <th>Other Info</th>
                <th>Deal Title</th>
                <th>Action</th>

              </tr>

              </tfoot>

              <tbody>

                   <?php 

                      $counter = 1;

                      foreach($products as $product) {
                          //echo $key[request_type];

                          if ($product["status"] == "1") {

                              $status = "tag tag-success" ;
                              $status1='Active';

                          } else {

                              $status = "tag tag-default" ;
                               $status1='InActive';

                          } ?>
 
                              <tr id="hide<?php echo $product["product_id"] ; ?>">

                                  <td><?php echo $counter ; ?></td> 
                                  <td style="width:300px;"><img src="<?php echo base_url().$product['image'] ?>" height=50px ></td>
                                  <td style="width:300px;"><?php echo ucfirst($product["category_name"]) ; ?></td>
                                  <td style="width:300px;"><?php echo ucfirst($product["sub_category_name"]) ; ?></td>
                                  <td style="width:300px;"><?php echo ucfirst($product["car_type"]) ; ?></td>
                                  <td style="width:300px;"><?php echo ucfirst($product["created_at"]) ; ?></td>
                                  <td style="width:300px;"><?php echo ucfirst($product["country_name"]) ; ?></td>
                                  <td style="width:300px;"><?php echo ucfirst($product["year"]) ; ?></td>
                                  <td style="width:300px;"><?php echo ucfirst($product["price"]) ; ?></td>  
                                  <td style="width:300px;"><?php echo ucfirst($product["min_bid"]) ; ?></td>  
                                  <td style="width:300px;"><?php echo ucfirst($product["milage"]) ; ?></td>  
                                  <td style="width:300px;"><?php echo ucfirst($product["other_info"]) ; ?></td>  
                                  <td style="width:300px;"><?php echo ucfirst($product["deal_title"]) ; ?></td>  


                                  <!-- <td><span class="<?php echo $status ; ?>"><?php echo ucfirst($status1) ;?></span></td> -->

                                  <td style="white-space: nowrap; width: 1%;">
                                     <div class=" user-toolbar btn-toolbar" style="text-align: left;">
                                         <div class="btn-group btn-group-sm" style="float: none;">
<!--                                               <button type="button" class="btn btn-primary waves-effect waves-light add_package" data-toggle="modal"  data-target = "#add_package" data-id="<?php echo $product["product_id"] ;?>"  style="float: none;margin: 5px;">
<span class="icofont icofont-ui-edit"></span>
                                             </button> -->

                                             <button type="button" class="btn btn-primary waves-effect waves-light delete_package" data-id="<?php echo $product["product_id"] ; ?>" style="float: none;margin: 5px;"> 
                                                 <span class="icofont icofont-ui-delete"></span>
                                             </button>
                                         </div>                                                       
                                     </div>
                                </td> 
                              </tr>

                      <?php $counter++; } ?> 
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

    <div class = "modal fade" data-backdrop="static" data-keyboard="false" id = "add_package" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true"></div>

    </section>

   <script>     

        var $modal = $('#add_package');

        $('.add_package').on('click',function(event){ 

            var id = $(this).data('id');

            event.stopPropagation();

            $modal.load('<?php echo site_url('admin/add_packag');?>', {id: id},

            function(){

            /*$('.modal').replaceWith('');*/

            $modal.modal('show');

            });

        });



        //delete 

    $('.delete_package').on('click',function(event)
    { 

          var id = $(this).data('id');
                 
              swal({title: 'Delete This Product ?', showCancelButton: true}).then(result => {
                if (result.value) 
                {
                        //swal("Deleted!", "Cancelled.", "success")
                } 
                else 
                {
                         $.ajax({                
                              url: "<?php echo base_url();?>admin/delete/products",
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
                                      swal("Deleted!", "Product Deletion Is Success", "success"); 
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

<script>

$(function() {
   $( ".btnright" ).hide('');
 $('.btnleft').click(function () {

$( ".table-bordered" ).css('margin-left','-500px');
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