


<style>
.text-center.p {
    margin: 0 auto;
    width: 48%;
}
.text-center.p h2 {
    margin-bottom: 16px;
}
</style>




<div class="breadcrumb-area">

		    <div class="container">

		        <div class="row">

		            <div class="col-12">

		                <div class="breadcrumb-content text-center">

                            <h1 class="breadmome-name"><?php echo $this->lang->line('l_login'); ?></h1>

		                    <ul>

		                        <li><a href="<?php echo base_url(); ?>home/index"><?php echo $this->lang->line('h_home'); ?></a></li>

		                        <li class="active"><?php echo $this->lang->line('l_login'); ?></li>

		                    </ul>

		                </div>

		            </div>

		        </div>

		    </div>

		</div>

        

<div class="innersection">

		    <div class="container">
            
            <div class="row">
            <div class="text-center p">
            	 <h2><?php echo $this->lang->line('l_login'); ?></h2>
            </div>
			</div>

		        <div class="row">

		            <div class="col-md-offset-3 col-md-6 rtl-login">

		                <div class="login-form">

		                    <div class="login-form-container">

		                        <div class="login-form">

		                            <form method="POST" id="login">

		                                <label><?php echo $this->lang->line('l_username'); ?></label>

                                        <input type="text" name="data[email]" placeholder="<?php echo $this->lang->line('l_p_username'); ?>">

                                        <label><?php echo $this->lang->line('l_password'); ?></label>

                                        <input type="password" name="data[password]" placeholder="<?php echo $this->lang->line('l_password'); ?>">

                                        <div class="button-box">

                                            <div class="login-toggle-btn">

                                                <!-- <input type="checkbox"> -->

                                                <!-- <label>Remember me</label> -->

                                                <p class="text-right"><a href="<?php echo base_url(); ?>home/forgot_password"><?php echo $this->lang->line('l_forgot'); ?> ?</a></p>

                                            </div>

                                            <button class="default-btn login" type="submit"><?php echo $this->lang->line('l_login'); ?></button>

                                        </div>

		                            </form>

		                            <div class="no-account">

		                                <a href="<?php echo base_url(); ?>home/register"><?php echo $this->lang->line('l_dont_have'); ?> ? <?php echo $this->lang->line('l_register'); ?></a>

		                            </div>

		                        </div>

		                    </div>

		                </div>

		            </div>

		        </div>

		    </div>

		</div>



<!-- footer-area-start -->


<style>



.category-menu-list { display:none; }

</style>

<!-- Required Jqurey -->
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.min.js"></script> 


<script>

	$("#login").validate({       
            rules: {
               
                "data[email]"       : "required",
                "data[password]"    : "required"
              
            },
                 
    });
	
$('.login').click(function(e){ 
    e.preventDefault();

    var validator = $("#login").validate();
    validator.form();

    if(validator.form() == true)
    {
         var formdata = new FormData($('#login')[0]); 
		// alert(formdata);
         
         $.ajax({
            url: "<?php echo base_url();?>home/getlogindata/users",
            type: "POST",
            data: formdata,
            dataType: 'text',
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            error:function(request,response){
                console.log(request);
            },                  
            success: function(result)
            { 
                json = JSON.parse(result);

                if(json.status=='1')
                {
                    $.notify({
                    // options
                      message: json.message
                    },{
                      // settings
                      type: 'success'
                    }); 

                    setTimeout(function()
                    { 
                      location.href = '<?php echo base_url() ; ?>admin/index' ; 

                    }, 1000);

                }
                else if(json.status=='2' || json.status=='3')
                {

                    $.notify({
                    // options
                      message: json.message
                    },{
                      // settings
                      type: 'success'
                    }); 

                    setTimeout(function()
                    { 
                      location.href = json.url ; 

                    }, 1000);
 
                }
                else
                {
                    $.notify({
                    // options
                      message: json.message
                    },{
                      // settings
                      type: 'danger'
                    }); 

                }
            }
        });
    }

 });
  
 
    </script>