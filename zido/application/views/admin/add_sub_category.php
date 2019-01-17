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

            <h4 class="modal-title" align="center">Add / Edit Sub Category </h4>

        </div>

        <div class="modal-body">

            <form id="insert_categories">                         

            <div class="form-group row">
            
                <label class="col-xs-4 col-form-label form-control-label">Categories</label>
                <div class="col-sm-8">
                    <select class="form-control" name="data[category_id]" <?php if(@$sub_category['category_id']) { echo 'disabled' ;} ?>>
                        <?php foreach ($categories as $key => $category) { ?>
                          <option value="<?php echo $category['id']; ?>"
                            <?php if($category['id']==@$sub_category['category_id']){echo 'selected' ; } ?>>
                            <?php echo  $category['name_en']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>    
            </div>

            <div class="form-group row">

            <div class="form-group">
                 <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Sub Category Name En</label>
                <div class="col-sm-8">
                    <input type="text" id="name_en"  name="data[name_en]"  class="form-control" value="<?php echo @$sub_category['name_en'];?>">
                   
                </div>
            </div>
            </div>

         <div class="form-group row">
            
           <div class="form-group">
                <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Sub Category Name Ar</label>
                <div class="col-sm-8">
                <input type="text" id="name_ar"  name="data[name_ar]"  class="form-control" value="<?php echo @$sub_category['name_ar'];?>">
               
                </div>
            </div>
        </div>

          <div class="form-group row">
                
                
                <?php  if(@$sub_category){ ?>
           <img src="<?php echo base_url();?><?php echo @$sub_category['image'];?>" height=100px;>
              <input type="hidden" name="old_image" value="<?php echo @$sub_category['image'];?>"> 
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

                      <option value="1" <?php if(isset($sub_category['status'])) { if($sub_category['status'] == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Active</option>

                      <option value="0" <?php if(isset($sub_category['status'])) { if($sub_category['status'] == "0"){ echo "selected";}} ?>>InActive</option>
                </select>

            </div>    

        </div>

        <input type="hidden" name="id" value="<?php echo @$sub_category['id']; ?>">    

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
                        <?php  $id=@$sub_category[id];
                        if($id==''){ ?>
                            "image"                         : "required",

                        <?php }?>
                        
                        "data[name_en]"             : "required",
                        "data[name_ar]"             : "required",
                    },
        
            messages : {
                
                     <?php  if($id==''){ ?>
                    "image"                             : "Required",

               
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

                    url: "<?php echo base_url();?>admin/save_data/sub_categories",

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

                        if (result) {

                            location.reload();

                        } 

                    }

                });

            }

        });

   

    

</script>