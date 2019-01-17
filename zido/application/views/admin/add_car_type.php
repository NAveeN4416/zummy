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
            <h4 class="modal-title" align="center">Add/Edit Car Type </h4>
        </div>

        <div class="modal-body">
            <form id="insert_categories">                         
                <div class="form-group row">
            
           <div class="form-group">
             <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Name En</label>
            <div class="col-sm-8">
                <input type="text" id="name_en"  name="data[name_en]"  class="form-control" value="<?php echo @$car_type['name_en'];?>">
               
            </div>
        </div>
        </div>
         <div class="form-group row">
            
           <div class="form-group">
             <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Name Ar</label>
            <div class="col-sm-8">
                <input type="text" id="name_ar"  name="data[name_ar]"  class="form-control" value="<?php echo @$car_type['name_ar'];?>">
               
            </div>
        </div>
        </div>

          <div class="form-group row">
                
                
                <?php  if(@$car_type){ ?>
           <img src="<?php echo base_url();?><?php echo @$car_type['image'];?>" height=100px;>
              <input type="hidden" name="old_image" value="<?php echo @$car_type['image'];?>"> 
           <?php   } ?>
        <div class="form-group">
             <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Choose Image</label>
            <div class="col-sm-8">
                <input type="file" id="file"  name="image" value="" class="form-control">
               
            </div>
        </div>

        </div>

        <div class="form-group row">

            <label class="col-xs-4 col-form-label form-control-label">Status</label>

            <div class="col-sm-8">

                    <select class="form-control" name="data[status]">

                      <option value="1" <?php if(isset($car_type['status'])) { if($car_type['status'] == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Active</option>

                      <option value="0" <?php if(isset($car_type['status'])) { if($car_type['status'] == "0"){ echo "selected";}} ?>>InActive</option>
                </select>

            </div>    

        </div>

        <input type="hidden" name="id" value="<?php echo @$car_type['id']; ?>">    

            </form> 

        </div>

        <div class="modal-footer">

            <button type="submit" class="btn btn-primary waves-effect waves-light insert_categories">Save changes</button>

        </div>

    </div>

</div>



<script>

$("#insert_categories").validate({       

            rules: {

                <?php  $id=@$car_type[id];
                if($id==''){ ?>
                    "image"                 : "required",

                <?php }?>
                
                "data[name_en]"             : "required",
                "data[name_ar]"             : "required",
                            },
            

            messages : {
                
                 <?php  if($id==''){ ?>
                "image"                     : "Required",

           
               <?php }?>

                "data[name_en]"             : "required",
                "data[name_ar]"             : "required",

            },      

    });

    $('.insert_categories').click(function(){ 

    

        var validator = $("#insert_categories").validate();

            validator.form();

            if(validator.form() == true){

                  var data = new FormData($('#insert_categories')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_data/car_types",
                    type: "POST",
                    data: data,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData:false,
                    error:function(request,response)
                    {
                        console.log(request);
                    },                  
                    success: function(result)
                    {
                        if (result) 
                        {
                            location.reload();
                        } 
                    }
                });
            }
        });
    
</script>