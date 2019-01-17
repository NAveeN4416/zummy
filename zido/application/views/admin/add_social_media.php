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

            <h4 class="modal-title" align="center">Edit Social Media </h4>

        </div>

        <div class="modal-body">

        <form id="insert">                         

            <div class="form-group row">  
            <div class="form-group">
                 <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Title</label>
                <div class="col-sm-8">
                    <input type="text" id="color_titleen"  name="data[title]"  class="form-control" value="<?php echo @$media['title'];?>">
                </div>
            </div>
            </div>

            <div class="form-group row">
            <div class="form-group">
                 <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Link</label>
                <div class="col-sm-8">
                    <input type="text" id="link"  name="data[link]"  class="form-control" value="<?php echo @$media['link'];?>">
                </div>
            </div>

            </div>

            <div class="form-group row">
                <label class="col-xs-4 col-form-label form-control-label">Status</label>
                <div class="col-sm-8">
                        <select class="form-control" name="data[status]">
                          <option value="1" <?php if(isset($media['status'])) { if($media['status'] == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Active</option>
                          <option value="0" <?php if(isset($media['status'])) { if($media['status'] == "0"){ echo "selected";}} ?>>InActive</option>
                    </select>
                </div>    
            </div>

            <input type="hidden" name="id" value="<?php echo @$media['id']; ?>">    
        </form> 

        </div>

        <div class="modal-footer">

            <button type="submit" class="btn btn-primary waves-effect waves-light insert">Save changes</button>

        </div>

    </div>

</div>



<script>

$("#insert").validate({       

            rules: {
                        "data[title]"        : "required",
                        "data[link]"         : "required",

                    },
            messages : 
                    {
         
                        "data[title]"        : "required",
                        "data[link]"         : "required",
                    },      

    });

    $('.insert').click(function(){ 

        var validator = $("#insert").validate();
            validator.form();
            if(validator.form() == true)
            {
                var data = new FormData($('#insert')[0]); 

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_data/social_media",
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

   
function set($val)
{
    $("#hid").val($val);
}
    

</script>