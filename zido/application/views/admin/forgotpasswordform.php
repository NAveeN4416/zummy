<!DOCTYPE html>
<html lang="en">
<style>
 #loginform label.error {
        color:red; 
    }
    #loginform input.error,textarea.error,select.error {
        color:red; 
    }
    .popover {
    z-index: 2000;
    position:relative;
    }

</style>
<head>
	<title>:: AOUS ::</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords"
		  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" tppabs="http://ableproadmin.com/light/vertical/assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" tppabs="http://ableproadmin.com/light/vertical/assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font
	<link href="fonts.googleapis.com/css-family=Open+Sans-300,400,600,700,800.css" tppabs="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">-->

	<!-- Font Awesome -->
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" tppabs="http://ableproadmin.com/light/vertical/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/icofont.css" tppabs="http://ableproadmin.com/light/vertical/assets/icon/icofont/css/icofont.css">

	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css" tppabs="http://ableproadmin.com/light/vertical/assets/css/bootstrap.min.css">

	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/waves/css/waves.min.css" tppabs="http://ableproadmin.com/light/vertical/assets/plugins/waves/css/waves.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css" tppabs="http://ableproadmin.com/light/vertical/assets/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css" tppabs="http://ableproadmin.com/light/vertical/assets/css/responsive.css">

	

</head>
<body>

<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material" id="loginform" method="post">
					<div class="alert alert-warning" id="forgot_pwd_msg" style="display:none;">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<span  id="forgot_msg"> </span>
				    </div>
						<div class="text-center">
							<img src="<?php echo base_url();?>assets/images/logo_new.png" style="width:80px;">
						</div>
						<h3 class="text-center txt-primary">
							Forgot your password ?
						</h3>
						
						<div class="alert alert-danger" id="login_error_tab" style="display:none;">
					<a href="#" class="" data-dismiss="alert" style="float: right;margin-top: -20px;">&times;</a>
					<span  id="login_error_msg"> </span>
				</div>
						
						<div class="md-input-wrapper">
							<input type="email" class="md-form-control" id="email" name="data[email]" placeholder="Email" required/>
						</div>
						<!--<div class="md-input-wrapper">
							<input type="password" class="md-form-control" id="password" name="data[password]" placeholder="Password" required/>
							
						</div>-->
						<div class="row">
							<div class="col-sm-6 col-xs-12">
							<div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
								<label class="input-checkbox checkbox-primary">
									
								</label>
								<div class="captions"></div>

							</div>
								</div>
							
						</div>
						<div class="row">
							<div class="col-xs-12">
								
								<input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20 loginform" name="submit" value="Submit">
							</div>
						</div>
						<!-- <div class="card-footer"> 
						<div class="col-sm-12 col-xs-12 text-center">
							<span class="text-muted">Don't have an account?</span>
							<a href="register2.html" tppabs="http://ableproadmin.com/light/vertical/register2.html" class="f-w-600 p-l-5">Sign up Now</a>
						</div>-->

						<!-- </div> -->
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" > </script>
<script src="sha256-FSEeC+c0OJh+0FI23EzpCWL3xGRSQnNkRGV2UF5maXs=" > </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" integrity="sha256-FSEeC+c0OJh+0FI23EzpCWL3xGRSQnNkRGV2UF5maXs=" crossorigin="anonymous"></script>


<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js" tppabs="http://ableproadmin.com/light/vertical/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js" tppabs="http://ableproadmin.com/light/vertical/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js" ></script>
<!-- tether.js -->
<script src="<?php echo base_url();?>assets/js/tether.min.js" tppabs="http://ableproadmin.com/light/vertical/assets/js/tether.min.js"></script>
<!-- waves effects.js -->
<script src="<?php echo base_url();?>assets/plugins/waves/js/waves.min.js" tppabs="http://ableproadmin.com/light/vertical/assets/plugins/waves/js/waves.min.js"></script>
<!-- Required Framework -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" tppabs="http://ableproadmin.com/light/vertical/assets/js/bootstrap.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/pages/elements.js" tppabs="http://ableproadmin.com/light/vertical/assets/pages/elements.js"></script>
</body>
</html>
<script>
	$("#loginform").validate({       
            rules: {
               
                "data[email]"              : "required"
                //"data[password]"            : "required"
              
            },
                 
    });
	
$('.loginform').click(function(e){ 
    e.preventDefault();
    var validator = $("#loginform").validate();
    validator.form();
    if(validator.form() == true){
         var formdata = new FormData($('#loginform')[0]); 
		 //alert(formdata);
         
         $.ajax({
            url: "<?php echo base_url();?>admin/send_link/users",
            type: "POST",
            data: formdata,
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            error:function(request,response){
                console.log(request);
            },                  
            success: function(result){ 
   				
		           if(result==1)
		            { 
						/*$("#forgot_pwd_msg").css("display", "block");
					    $('#forgot_pwd_msg').show().delay(2500).fadeOut('slow');
						$("#forgot_msg").html('Please Check Your Mail');
						$('#email').val('');
		                $('#password').val('');*/
		                swal("Mail Sent Successfully", "Please Check Your email");
		            }  
		            else
		            {
						//alert('You are logged in successfully');   
	                     /*$("#forgot_pwd_msg").css("display", "block");			    
				         $('#forgot_pwd_msg').show().delay(2500).fadeOut('slow');				
				         $("#forgot_msg").html('No records found with this email');*/
				         swal("No Records Found !", "Please enter correct email");
		            }				
            }
        });
    }

 });
  
 
    </script>
    <?php 
    	if(isset($error)){ ?>

    	<script>
    		$("#login_error_tab").css("display", "block");
			$('#login_error_tab').show().delay(2500).fadeOut('slow');
			$("#login_error_msg").html('<?php echo $error;?>');
    	</script>

	<?php   $error=""; }
    ?>
	
