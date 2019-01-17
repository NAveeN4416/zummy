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

                <span aria-hidden="true">x</span>

            </button>

            <h4 class="modal-title" align="center">Add / Edit Sub Services </h4>

        </div>

        <div class="modal-body">

            <form id="insert_services">                         

            <div class="form-group row">
                <label class="col-xs-3 col-form-label form-control-label">Main Service</label>
                <div class="col-sm-9">
                    <select class="form-control" name="data[main_service]" <?php if(@$value['main_service']) { echo 'disabled' ; } ?>>
                        <option value=''>--Select--</option>
                    <?php foreach ($services as $key => $service) { ?>
                        <option value="<?php echo $service['id'] ; ?>" <?php echo (@$value['main_service']==$service['id']) ? 'selected' : '' ; ?> >
                            <?php echo $service['service_type_en'] ; ?>
                        </option>
                    <?php } ?>
                    </select>
                </div>    
            </div>

            <div class="form-group row">
           <div class="form-group">
             <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Sub Service En</label>
            <div class="col-sm-9">
                <input type="text" id="sub_service_en"  name="data[sub_service_en]"  class="form-control" value="<?php echo @$value['sub_service_en'];?>">
               
            </div>
        </div>
        </div>
         <div class="form-group row">
            
           <div class="form-group">
             <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Sub Service Ar</label>
            <div class="col-sm-9">
                <input type="text" id="sub_service_ar"  name="data[sub_service_ar]"  class="form-control" value="<?php echo @$value['sub_service_ar'];?>">
               
            </div>
        </div>
        </div>


        <!-- <div class="form-group row">
            
           <div class="form-group">
             <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Description En</label>
            <div class="col-sm-9">
                <input type="text" id="description_en" name="data[description_en]"  class="form-control" value="<?php echo @$value[description_en];?>">
               
            </div>
        </div>
        </div>
         <div class="form-group row">
            
           <div class="form-group">
             <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Description Ar</label>
            <div class="col-sm-9">
                <input type="text" id="description_ar"  name="data[description_ar]"  class="form-control" value="<?php echo @$value[description_ar];?>">
               
            </div>
        </div>
        </div>
          <div class="form-group row">
                
                
                <?php  if(@$value){ ?>
           <img src="<?php echo base_url();?><?php echo @$value[icon];?>" height=100px;>
              <input type="hidden" name="old_image" value="<?php echo @$value[icon];?>"> 
           <?php   } ?>
        <div class="form-group">
             <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Choose Image</label>
            <div class="col-sm-9">
                <input type="file" id="file"  name="image" value="" class="form-control">
               
            </div>
        </div>
        
        </div> -->
         <div class="form-group row">
            
           <div class="form-group">
             <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Cost</label>
            <div class="col-sm-9">
               <input type="number" id="sub_service_cost"  name="data[sub_service_cost]"  class="form-control" value="<?php echo @$value['sub_service_cost'];?>">
            </div>
        </div>
        </div>


        <div class="form-group row">
            <label class="col-xs-3 col-form-label form-control-label">Status</label>
            <div class="col-sm-9">
                <select class="form-control" name="data[status]">

                      <option value="1" <?php if(isset($value['status'])) { if($value['status'] == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Active</option>

                      <option value="0" <?php if(isset($value['status'])) { if($value['status'] == "0"){ echo "selected";}} ?>>InActive</option>
                </select>
            </div>    
        </div>

        <input type="hidden" name="id" value="<?php echo @$value['id']; ?>">    

            
        </form> 

        </div>

        <div class="modal-footer">

            <button type="submit" class="btn btn-primary waves-effect waves-light insert_services">Save changes</button>

        </div>

    </div>

</div>



<script>

$("#insert_services").validate({       

            rules: {

                <?php  $id=@$value[id];
                if($id==''){ ?>
                    "image"                         : "required",
              <?php }?>
                "data[sub_service_en]"              : "required",
                "data[main_service]"                : "required",
                "data[sub_service_ar]"              : "required",
                "data[description_ar]"              : "required",
                "data[description_en]"              : "required",
                "data[sub_service_cost]"            : "required"

          
            },
            

            messages : {
                
                 <?php  if($id==''){ ?>
                "image"                            : "Required",

           
               <?php }?>

                "data[sub_service_en]"             : "Required",
                "data[sub_service_ar]"             : "Required",
                "data[description_ar]"             : "required",
                "data[description_en]"             : "required",
                "data[sub_service_cost]"           : "required"

            },      

    });

    $('.insert_services').click(function(){ 

    

        var validator = $("#insert_services").validate();

            validator.form();

            if(validator.form() == true){

                  var data = new FormData($('#insert_services')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_sub_services/sub_services",

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

                        if (result == "1") 
                        {
                            swal("Successfully ", "Inserted Data", "success");
                            location.reload();
                        }
                        else if (result=='2')
                        {
                            swal("Successfully ", "Updated Data", "success");
                            location.reload();
                        }
                        else
                        {
                            swal("Error ! ", "Something went wrong", "error");
                            //location.reload();
                        }

                    }

                });

            }

        });

   

    

</script>