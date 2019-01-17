<style>

    #insert_services label.error {

        color:red; 

    }

    #insert_services input.error,textarea.error,select.error {

        border:1px solid red;

        color:red; 

    }

    .popover {

    z-index: 2000;

    position:relative;

    }

    

</style>



<div class="modal-dialog" role="document">

    <div class="modal-content" style="overflow:hidden">

        <div class="modal-header" style="border-bottom-color: #ccc;">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">X</span>

            </button>

            <h4 class="modal-title" align="center">Assign Engineer for this Request</h4>

        </div>

        <div class="modal-body" style="height: 550px;overflow-y: auto;">
    
            <form id="insert_services">                         
            
             <table style="width: 100%;text-align: center;"> 
                <div class="form-group row">
                    <div class="form-group">
                      <?php foreach ($service_providers as $key => $sp) {  ?>
                        <tr>    
                            <td style="padding: 10px">
                                <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label"><?php echo $sp['sp_name']; ?></label>
                            </td>
                            <td style="padding: 10px">
                                <div class="col-sm-9">
                                    <input class="btn btn-primary" onclick="send(<?php echo $request_id; ?>,<?php  echo $sp['sp_user_id'] ;?>)" value="Assign" type="button">
                                </div>
                            </td>    
                        </tr>
                    <?php } ?>
                </div>
            </div> 
        </table>    

            </form> 

        </div>

        <!-- <div class="modal-footer">
        
            <button type="submit" class="btn btn-primary waves-effect waves-light insert_services">Send Request</button>
        
        </div> -->

    </div>

</div>



<script>

$("#insert_services").validate({       

            rules: {

                <?php  $id=@$value[id];
                if($id==''){ ?>
                    "image"                         : "required",

              <?php }?>
                
                "data[service_type_en]"             : "required",
                "data[service_type_ar]"             : "required",
                "data[description_ar]"              : "required",
                "data[description_en]"              : "required",
                "data[service_cost]"                : "required"

          
            },
            

            messages : {
                
                 <?php  if($id==''){ ?>
                "image"                             : "Required",

           
               <?php }?>

                "data[service_type_en]"             : "Required",
                "data[service_type_ar]"             : "Required",
                "data[description_ar]"             : "required",
                "data[description_en]"             : "required",
                "data[service_cost]"                : "required"

            },      

    });

    $('.insert_services').click(function(){ 

    

        var validator = $("#insert_services").validate();

            validator.form();

            if(validator.form() == true){

                  var data = new FormData($('#insert_services')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_services/services",

                    type: "POST",

                    data: data,

                    mimeType: "multipart/form-data",

                    contentType: false,

                    cache: false,

                    processData:false,

                    error:function(request,response){

                        console.log(request);

                    },                  

                    success: function(result){



                        var obj = jQuery.parseJSON(result);

                        if (obj.status == "success") {

                            location.reload();

                        } 

                    }

                });

            }

        });


function send($request_id,$sp_user_id)
{
    swal({title: 'Assign this engineer ?', showCancelButton: true}).then(result => {
    if (result.value) 
    {
            //swal("Deleted!", "Cancelled.", "success")
    } 
    else 
    {
                $.ajax({                
                        url: "<?php echo base_url();?>admin/assign",
                        type: "POST",
                        data: {'request_id':$request_id,'sp_user_id':$sp_user_id},
                        //mimeType: "multipart/form-data",
                        cache: false,
                        error:function(request,response)
                        {
                            console.log(request);
                        },                  
                        success: function(result)
                        {
                          //alert(result);
                          if (result=='0') 
                          {
                            swal("Request already accepted !", " Refresh and try again ", "error");
                            //location.reload();
                          }
                          else
                          {
                            swal("Succes !", " Request Assigned Successfully ", "success");
                            location.reload();
                          }
                        }
                });
        }
   }); 


}
   

    

</script>