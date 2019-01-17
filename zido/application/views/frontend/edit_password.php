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

                <span aria-hidden="true" id="close">X</span>

            </button>

            <h4 class="modal-title" align="center"><?php echo $this->lang->line('p_edit_pass') ?></h4>

        </div>

        <div class="modal-body">

            <form id="insert">                         

        <div class="form-group row">

           <div class="form-group">
            <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label"><?php echo $this->lang->line('p_old_pass') ?></label>
            <div class="col-sm-8">
                <input type="password" id="old_password"  name="old_password" onkeyup="check_old_pass(this.value)"  class="form-control" placeholder="<?php echo $this->lang->line('p_old_pass') ?>">
                <p id="pass_error" class="hide"></p>
            </div>
            </div>

        </div>

         <div class="form-group row">
            <div class="form-group">
             <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label"><?php echo $this->lang->line('p_new_pass') ?></label>
             <div class="col-sm-8">
                <p id="valid_error" class="hide" style="color: red"><?php echo ($lang=='en') ? 'Password should contain atleast 6 chars !' : 'يجب أن تحتوي كلمة المرور على 6 أحرف على الأقل!' ;?></p>
                <input type="password" id="new_password" placeholder="<?php echo $this->lang->line('p_new_pass') ?>"  name="password" onkeyup="check_new_pass(this.value)""  class="form-control" disabled="">
             </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="form-group">
             <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label"><?php echo $this->lang->line('p_confirm_pass') ?></label>
             <div class="col-sm-8">
                <input type="password" id="confirm_password" placeholder="<?php echo $this->lang->line('p_confirm_pass') ?>" onkeyup="confirm_pass(this.value)"  name="confirm_password"  class="form-control" disabled="">
                <p id="confirm_error" class="hide"></p>
             </div>
            </div>
        </div>

<!-- 
        <div class="form-group row">

            <label class="col-xs-4 col-form-label form-control-label">Gender</label>

            <div class="col-sm-8">

                    <select class="form-control" name="data[gender]">

                      <option value="1" <?php if(isset($userdata['gender'])) { if($userdata['gender'] == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Male</option>

                      <option value="0" <?php if(isset($userdata['gender'])) { if($userdata['gender'] == "0"){ echo "selected";}} ?>>Female</option>
                </select>

            </div>    

        </div> -->



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

            <button type="submit" class="btn btn-primary waves-effect waves-light insert" id="save_pass" disabled=""><?php echo ($lang=='en') ? 'Save Changes' : 'حفظ التغيرات'  ; ?></button>

        </div>

    </div>

</div>

<!-- Required Jqurey -->

<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.min.js"></script> 

<script>

$("#insert").validate({       

            rules   : 
                    {
                        "password"         : "required",
                        "confirm_password" : "required",
                    },
            messages: 
                    {
                        "password"         : "required",
                        "confirm_password" : "required",
                    },      

    });

    $('.insert').click(function(){ 

        var validator = $("#insert").validate();

            validator.form();

            if(validator.form() == true){

                var data = new FormData($('#insert')[0]); 

                $.ajax({                

                    url: "<?php echo base_url();?>home/update_password",
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
                        if (result==1) 
                        {
                          $('#close').click();
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
    
function confirm_pass($confirm_password)
{
    $new_password = $('#new_password').val();

    if($new_password.length<6)
    {
        $('#valid_error').removeClass('hide');
        $('#save_pass').attr('disabled',true);
        $('#confirm_error').addClass('hide') ;
        return false ;
    }
    else
    {
        $('#valid_error').addClass('hide');
        $('#confirm_error').addClass('hide');
        //return true; 
    }

    if($confirm_password==$new_password)
    {
       $('#save_pass').removeAttr('disabled');
       $('#confirm_error').removeClass('hide').html('Matched !').css('color', 'Green');
    }
    else
    {
        $('#save_pass').attr('disabled',true);
        $('#confirm_error').removeClass('hide').html('Password not matched !').css('color', 'red');
    }
}

function check_new_pass($new_password)
{
    if($new_password.length<6)
    {
        $('#valid_error').removeClass('hide');
        $('#save_pass').attr('disabled',true);
        return false ;
    }
    else
    {
        $('#valid_error').addClass('hide');
    }

    $confirm_password = $('#confirm_password').val();

    if($confirm_password)
    {
        if($confirm_password==$new_password)
        {
           $('#save_pass').removeAttr('disabled');
           $('#confirm_error').removeClass('hide').html('Matched :)').css('color', 'Green');
        }
        else
        {
            $('#save_pass').attr('disabled',true);
            $('#confirm_error').removeClass('hide').html('Password not matched !').css('color', 'red');
        }
    }
}



function check_old_pass($old_password)
{
        $.ajax({    

        url: "<?php echo base_url();?>home/check_old_pass",
        type: "POST",
        data: {'old_password':$old_password},
        error:function(request,response)
        {
            console.log(request);
        },                  
        success: function(result)
        {   
            console.log(result);

            if (result==0) 
            {
               $('#new_password').attr('disabled',true);
               $('#confirm_password').attr('disabled',true);

               $('#pass_error').removeClass('hide').html('Wrong Password !').css('color', 'red');
            }
            else
            {
               $('#new_password').removeAttr('disabled');
               $('#confirm_password').removeAttr('disabled');

               $('#pass_error').removeClass('hide').html('Please enter New Password :)').css('color', 'green');
               $('#new_password').focus();

/*                $.notify({
                // options
                  message: 'Please enter New Password'
                },{
                  // settings
                  type: 'info'
                });*/
            }
        }

    });
}




</script>