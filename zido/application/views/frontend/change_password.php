


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

                            <h1 class="breadmome-name">Change Password ?</h1>

		                    <ul>

		                        <li><a href="<?php echo base_url(); ?>home/index">Home</a></li>

		                        <li class="active">Change Password</li>

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
            	 <h2>Change Password</h2>
            </div>
			</div>

		        <div class="row">

		            <div class="col-md-offset-3 col-md-6">

		                <div class="login-form">

		                    <div class="login-form-container">

		                        <div class="login-form">

		                            <form method="POST" id="login">

		                                <label>Enter</label>

                                        <input type="text" name="email" id="email" placeholder="email/username" onkeyup="check_user(this.value)">

                                        <p id="not_found" class="hide"></p>

                                        <div class="button-box">
                                            <button class="default-btn login" type="button">Submit</button>
                                        </div>

		                            </form>

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


	
function check_user($email)
{
         $.ajax({
            url: "<?php echo base_url();?>home/check_for_user",
            type: "POST",
            data: {'email':$email},
            dataType: 'text',
            error:function(request,response)
            {
              console.log(request);
            },                  
            success: function(result)
            { 
                if(result==1)
                {
                    $('#not_found').removeClass('hide').html('Email/Username found Click submit :)').css('color', 'green');
                }
                else
                {
                    $('#not_found').removeClass('hide').html('Email/Username not found !').css('color', 'red');
                }
            }
    });
}         

$('.login').click(function(){

    var email = $('#email').val();

         $.ajax({
            url: "<?php echo base_url();?>admin/send_link",
            type: "POST",
            data: {'email':email},
            dataType: 'text',
            error:function(request,response)
            {
              console.log(request);
            },                  
            success: function(result)
            { 

                alert(result);
/*                if(result==1)
                {
                    $('#not_found').removeClass('hide').html('Email/Username found Click submit :)').css('color', 'green');
                }
                else
                {
                    $('#not_found').removeClass('hide').html('Email/Username not found !').css('color', 'red');
                }*/
            }
    });

});


</script>