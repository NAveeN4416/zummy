<style>
.text-center.p {
    margin: 0 auto;
    width: 48%;
}
	.s4 {
    padding-left: 0;
}
		.s8 {
    padding-right: 0;
}
legend {
    background-color: #4a6de3;
    color: #fff;
    padding: 3px 6px;
	border-radius:4px;
}

.login-form-container .output {
    font: 1rem;
}

.login-form-container fieldset input {
    margin: .4rem;
}
.login-form-container fieldset {
    border: 1px solid #c0c0c0 !important;
    margin: 0 2px 20px !important;
    padding: 0.35em 0.625em 0.75em !important;
}
.login-form-container legend {
    margin-bottom: 10px;
}
.login-form-container fieldset i { color:#4a6de3; padding-right:5px; }
.login-form-container .checkmark {
    background-color: #ffffff;
    height: 18px;
    left: 20px;
    position: absolute;
    top: 2px;
    width: 18px;
}
span.package-box {
    margin-top: 10px !important;
    display: inline-block;
    font-size: 14px;
}
.c-container .checkmark::after {
    border-color: #4a6de3 !important;
}
.c-container input:checked ~ .checkmark {
    background-color: #fff !important;
}
.c-container .checkmark::after {
    left: 7px;
    top: 3px;
}

input[type="radio"]
{
    height: 20px;
    width: 18px;
    position: relative;
    top: 5px;
}


</style>

<div class="breadcrumb-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-content text-center">
          <h1 class="breadmome-name"><?php echo $this->lang->line('r_register'); ?></h1>
          <ul>
            <li><a href="<?php echo base_url(); ?>home/index"><?php echo $this->lang->line('h_home'); ?></a></li>
            <li class="active"><?php echo $this->lang->line('r_register'); ?></li>
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
        <h2><?php echo $this->lang->line('r_register'); ?></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloribus maxime eveniet quibusdam voluptates.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-3 col-md-6 rtl-login">
        <div class="login-form">
          <div class="login-form-container">
            <div class="login-form">
              <form id='register'>
                <label><?php echo $this->lang->line('r_username'); ?></label>
                <input type="text" name="data[username]">
                 <p id='check_username' class='hidden'></p>
                <div class="col-md-4 s4">
                  <label><?php echo $this->lang->line('r_country'); ?></label>
                  <select name="data[phonecode_id]" >
                    <?php foreach ($countries as $key => $country) {  ?>
                      <option value="<?php echo $country['id']; ?>"><?php echo $country['phonecode']; ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="col-md-8 s8">
                  <label><?php echo $this->lang->line('r_mobile'); ?></label>
                  <input type="text" name="data[phone_number]">
                </div>

                <label><?php echo $this->lang->line('r_email'); ?></label>
                <input type="text" name="data[email]">

                <label><?php echo $this->lang->line('r_name'); ?></label>
                <input type="text" name="data[name]">

                <label><?php echo $this->lang->line('r_password'); ?></label>
                <input type="password" name="data[password]">

                <label><strong><?php echo $this->lang->line('r_subscribe'); ?></strong> :</label>
                
                    <?php foreach ($packages as $key => $package) { ?>
                    	<fieldset>
                  			<legend><label>
								          <input class="radiobt" type="radio" name='data[package_id]' value="<?php echo $package['id'] ; ?>">
      								    </label> <span class="package-box"><?php echo $package['price']; ?> SAR / <?php echo $package['name_'.$lang]; ?></span>
      							    </legend>
                  			<div>
                    			<label for="scales"><i class="fa fa-check-circle" style="<?php echo ($lang=='ar') ? "padding-left: 10px;" : '' ; ?>"></i><?php echo $package['cars_quantity']; ?> <?php echo $this->lang->line('r_car_only'); ?></label>
                 			  </div>
	                  		<div>
	                   			 <label for="horns"><i class="fa fa-check-circle" style="<?php echo ($lang=='ar') ? "padding-left: 10px;" : '' ; ?>"></i><?php echo $package['bids_quantity']; ?></label>
	                 		  </div>
                		</fieldset>
			

<!--                       <input  type="radio" name='data[package_id]' id="pack<?php echo $package['id'] ; ?>" value="<?php echo $package['id'] ; ?>">
  <fieldset>
    <legend><label class="c-container">
            								<span class="radio"></span>
          									</label> <span class="package-box"><?php echo $package['price']; ?> SAR / <?php echo $package['name_en']; ?></span>
    </legend>
    <div>
      <label for="scales"><i class="fa fa-check-circle"></i><?php echo $package['cars_quantity']; ?> Cars only</label>
    </div>
    <div>
      <label for="horns"><i class="fa fa-check-circle"></i><?php echo $package['bids_quantity']; ?></label>
    </div>
  </fieldset> -->
                    
                    <?php } ?>  

                  <!--  <fieldset>
                          <legend><label class="c-container">
          								  <input type="checkbox" >
            								<span class="checkmark"></span>
          									</label> <span class="package-box">499 SAR / Annually</span>
                          </legend>
                          <div>
                            <label for="scales"><i class="fa fa-check-circle"></i>12 Cars only</label>
                          </div>
                          <div>
                            <label for="horns"><i class="fa fa-check-circle"></i> Open Bids</label>
                          </div>
                        </fieldset> -->

                <div class="button-box">
                  <div class="login-toggle-btn">
                    <input type="checkbox">
                    <label><?php echo $this->lang->line('r_agree'); ?></label>
                  </div>
                </div>

                <div class="button-box row">
                  <button class="default-btn mr-20 register" type="button"><?php echo $this->lang->line('r_create'); ?></button>
                </div>

              </form>

              <div class="no-account"><!-- Already account ?  --><a href="<?php echo base_url(); ?>home/login">  <?php echo $this->lang->line('r_here'); ?></a> </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>



.category-menu-list { display:none; }

</style>



<!-- Required Jqurey -->
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.min.js"></script> 



<script>

  $("#register").validate({ 
            ignore: [],      
             rules: {
                        "data[email]"           : "required",
                        "data[password]"        : "required",
                        "data[name]"            : "required",
                        "data[username]"        : "required",
                        "data[phone_number]"    : "required",
                    },
           messages:{
                        "data[email]"           : "required",
                        "data[password]"        : "required",
                        "data[name]"            : "required",
                        "data[username]"        : "required",
                        "data[phone_number]"    : "required",
                    } 
                 
    });
  
$('.register').click(function(e)
{ 
    e.preventDefault();
    var validator = $("#register").validate();
    validator.form();

    if(validator.form() == true)
    {
         var formdata = new FormData($('#register')[0]); 
    // alert(formdata);
         
         $.ajax({
            url: "<?php echo base_url();?>home/save_user",
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
              //alert(result);

                json = JSON.parse(result);

                if(json.status=='0')
                {
                  obj = json.message

                  for (var key in obj) 
                  {
                    if (obj.hasOwnProperty(key)) 
                    {
                          $.notify({
                          // options
                            message: json.message[key]
                          },{
                            // settings
                            type: 'danger'
                          }); 
                        }
                    }
                }
                else
                {

                    $.notify({
                    // options
                      message: 'Registered successfully Please login to continue'
                    },{
                      // settings
                      type: 'success'
                    }); 

                    setTimeout(function()
                    { 
                      location.href = '<?php echo base_url() ; ?>home/login' ; 

                    }, 1000);

                    
                      
                }
            }
        
        });
    }

 });
  
 
    </script>