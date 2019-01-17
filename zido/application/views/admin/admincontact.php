<!-- CONTENT-WRAPPER-->
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
    <div class="content-wrapper">

        <!-- Container-fluid starts -->

         <div class="container-fluid">

      <!-- Row Starts -->

    <div class="row">

      <div class="col-sm-12">

        <div class="main-header">

          <h4>Contact Form</h4>

          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">

            <li class="breadcrumb-item">

              <a href="#">

                <i class="icofont icofont-home">Home</i>

              </a>

            </li>
			<li class="breadcrumb-item"><a href="#:" >Contact US</a></li>

          

          </ol>

        </div>

      </div>

    </div>

    <!-- Row end -->

   

    

    <div class="row">

      <div class="col-sm-12">

        <div class="card">

          <div class="card-header"><h5 class="card-header-text">Contact Us</h5></div>

          <div class="card-block">


              <form id="insert_services">                         
              <div class="alert alert-warning" id="forgot_pwd_msg" style="display:none;">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<span  id="forgot_msg"> </span>
							</div>
             

                 <div class="form-group row">

                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Name*</label>

                    <div class="col-sm-9">

					 <input type="text" class="form-control" id="name" name="data[username]" value="<?php echo @$data[username];?>">
                       
                    </div>

                </div>



                <div class="form-group row">

                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Email*</label>

                    <div class="col-sm-9">

                      <input type="email" class="form-control" id="email" name="data[email]" value="<?php echo @$data[email];?>" >
                    </div>

                </div>
				 <div class="form-group row">

                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Phone Number*</label>

                    <div class="col-sm-9">

                      <input type="number" class="form-control" id="phone_number" name="data[phone_number]"  onchange="return ValidateNo()" value="<?php echo @$data[phone_number];?>">
                    </div>

                </div>
				
				 <div class="form-group row">

                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Address*</label>

                    <div class="col-sm-9">
					<textarea class="form-control" id="address" name="data[address]" rows="10" cols="10"><?php echo @$data[address];?></textarea>

                     
                    </div>

                </div>
				
				

                  

                <input type="hidden" id="pid" name="pid" value="<?php echo @$data['id']; ?>">

                   

            </form> 
				
				 <div class="modal-footer">

            <button type="submit" class="btn btn-primary waves-effect waves-light insert_services">Save changes</button>

        </div>


              
          </div>

        </div>

      </div>

    </div>



  </div>

        <!-- Container-fluid ends -->

        

     </div>

 <!-- CONTENT-WRAPPER-->

  <section>

   

    </section>

   <script>     
$("#insert_services").validate({       

           
		  
			rules: {
                
			    "data[username]"          : "required",
                "data[email]"             : "required",
                "data[phone_number]"      : "required",
				"data[address]"           : "required"

            },

            messages : {

            
				"data[username]"       : "Required",
                "data[email]"          : "Required",
				"data[phone_number]"   : "Required",
				"data[address]"        : "Required"

               

            },       

    });

    $('.insert_services').click(function(){ 

    

        var validator = $("#insert_services").validate();

            validator.form();

            if(validator.form() == true){
				
				var phoneNo = document.getElementById('phone_number');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter Phone No.");
    return false;
  }
   if (phoneNo.value.length < 8 || phoneNo.value.length > 9 ) {
	  $("#forgot_pwd_msg").css("display", "block");
			    $('#forgot_pwd_msg').show().delay(2500).fadeOut('slow');
				$("#forgot_msg").html('Mobile No. is not valid, Please Enter 8 Digit Mobile No.');
				$('#phone_number').focus();
   
    return false;
  }

              
                  var data = new FormData($('#insert_services')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_privacy/users",

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



                        var obj = jQuery.parseJSON(result);

                        if (obj.status == "success") {

                            location.reload();

                        } 

                    }

                });

            }

        });

   
function ValidateNo() {
  var phoneNo = document.getElementById('phone_number');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter Phone No.");
    return false;
  }
 // alert(phoneNo.value.length);
  if (phoneNo.value.length < 8 || phoneNo.value.length > 9 ) {
	  $("#forgot_pwd_msg").css("display", "block");
			    $('#forgot_pwd_msg').show().delay(2500).fadeOut('slow');
				$("#forgot_msg").html('Mobile No. is not valid, Please Enter 8 Digit Mobile No.');
				$('#phone_number').focus();
   
    return false;
  }

  
}
    

    </script>

 