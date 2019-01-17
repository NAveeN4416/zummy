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

                <span aria-hidden="true">×</span>

            </button>

            <h4 class="modal-title" align="center">Add / Edit Banner </h4>

        </div>

        <div class="modal-body">

            <form id="insert_banner">                         

                <div class="form-group row">
            
           <div class="form-group">
             <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Title En</label>
            <div class="col-sm-8">
                <input type="text" id="name_en"  name="data[title_en]"  class="form-control" value="<?php echo @$banner['title_en'];?>">
               
            </div>
        </div>
        </div>
         <div class="form-group row">
            
           <div class="form-group">
             <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Title Ar</label>
            <div class="col-sm-8">
                <input type="text" id="name_ar"  name="data[title_ar]"  class="form-control" value="<?php echo @$banner['title_ar'];?>">
               
            </div>
        </div>
        </div>

          <div class="form-group row">
                
                
                <?php  if(@$banner){ ?>
           <img src="<?php echo base_url();?><?php echo @$banner['image'];?>" height=100px;>
              <input type="hidden" name="old_image" value="<?php echo @$banner['image'];?>"> 
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

                      <option value="1" <?php if(isset($banner['status'])) { if($banner['status'] == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Active</option>

                      <option value="0" <?php if(isset($banner['status'])) { if($banner['status'] == "0"){ echo "selected";}} ?>>InActive</option>
                </select>

            </div>    

        </div>

        <input type="hidden" name="id" value="<?php echo @$banner['id']; ?>">    

            </form> 

        </div>

        <div class="modal-footer">

            <button type="submit" class="btn btn-primary waves-effect waves-light insert_banner">Save changes</button>

        </div>

    </div>

</div>



<script>

$("#insert_banner").validate({       

            rules: {

                <?php  $id=@$banner['id'];
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


    $('.insert_banner').click(function(){ 

    

        var validator = $("#insert_banner").validate();

            validator.form();

            if(validator.form() == true){

                  var data = new FormData($('#insert_banner')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_data/banners",
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

                        location.reload();
                    }

                });

            }

        });

   

    

</script>