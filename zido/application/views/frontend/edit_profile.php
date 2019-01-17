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

            <h4 class="modal-title" align="center"><?php echo $this->lang->line('pr_edit_profile'); ?></h4>

        </div>

        <div class="modal-body">

            <form id="insert">                         

            <div class="form-group row">
                <div class="form-group">
                    <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label"><?php echo $this->lang->line('pr_name'); ?></label>
                    <div class="col-sm-8">
                        <input type="text" id="name"  name="data[name]"  class="form-control" value="<?php echo @$userdata['name'];?>">
                    </div>
                </div>

            </div>

            <div class="form-group row">
                <div class="form-group">
                    <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label"><?php echo $this->lang->line('pr_email'); ?></label>
                    <div class="col-sm-8">
                        <input type="email" id="email"  name="data[email]"  class="form-control" value="<?php echo @$userdata['email'];?>">
                    </div>
                </div>

            </div>

         <div class="form-group row">
            <div class="form-group">
             <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label"><?php echo $this->lang->line('pr_mobile'); ?></label>
             <div class="col-sm-8">
                <input type="text" id="phone_number"  name="data[phone_number]"  class="form-control" value="<?php echo @$userdata['phone_number'];?>">
               
             </div>
            </div>
        </div>


        <div class="form-group row">

            <label class="col-xs-4 col-form-label form-control-label"><?php echo $this->lang->line('pr_gender'); ?></label>

            <div class="col-sm-8">

                    <select class="form-control" name="data[gender]">

                      <option value="1" <?php if(isset($userdata['gender'])) { if($userdata['gender'] == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Male</option>

                      <option value="0" <?php if(isset($userdata['gender'])) { if($userdata['gender'] == "0"){ echo "selected";}} ?>>Female</option>
                </select>

            </div>    

        </div>

        <div class="form-group row">
            <div class="form-group">
             <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label"><?php echo $this->lang->line('pr_address'); ?></label>
             <div class="col-sm-8">
                <input type="text" id="address"  name="data[address]"  class="form-control" value="<?php echo @$userdata['address'];?>">
               
             </div>
            </div>
        </div>


<!--         <div class="form-group row">

    <label class="col-xs-4 col-form-label form-control-label">Status</label>

    <div class="col-sm-8">

            <select class="form-control" name="data[status]">

              <option value="1" <?php if(isset($color['status'])) { if($color['status'] == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Active</option>

              <option value="0" <?php if(isset($color['status'])) { if($color['status'] == "0"){ echo "selected";}} ?>>InActive</option>
        </select>

    </div>    

</div> -->

        <input type="hidden" name="id" value="<?php echo @$userdata['id']; ?>">    

            </form> 

        </div>

        <div class="modal-footer">

            <button type="submit" class="btn btn-primary waves-effect waves-light insert"><?php echo $this->lang->line('pr_save'); ?></button>

        </div>

    </div>

</div>



<script>

$("#insert").validate({       

            rules   : 
                    {
                        "data[name]"            : "required",
                        "data[phone_number]"    : "required",
                        "data[address]"         : "required",
                    },
            messages: 
                    {
                        "data[name]"            : "required",
                        "data[phone_number]"    : "required",
                        "data[address]"         : "required",
                    },      

    });

    $('.insert').click(function(){ 

    

        var validator = $("#insert").validate();

            validator.form();

            if(validator.form() == true){

                var data = new FormData($('#insert')[0]); 

                $.ajax({                

                    url: "<?php echo base_url();?>home/update_profile",

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

                        if (result==1) 
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