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
 <!-- Row Starts -->

    <div class="row">

      <div class="col-sm-12">

        <div class="main-header">

          <h4>Terms&Conditions</h4>

          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">

            <li class="breadcrumb-item">

              <a href="#">

                <i class="icofont icofont-home">Home</i>

              </a>

            </li>
			 <li class="breadcrumb-item"><a href="#:" >Terms&Conditions</a></li>


          

          </ol>

        </div>

      </div>

    </div>

    <!-- Row end -->

   

    

    <div class="row">

      <div class="col-sm-12">

        <div class="card">

          <div class="card-header"><h5 class="card-header-text">Terms&Conditions Management</h5></div>

          <div class="card-block">


              <form id="insert_services">                         

             

                 <div class="form-group row">

                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Terms Content(En)*</label>

                    <div class="col-sm-9">

                        <textarea  id="content_en" name="data[content_en]"  class="form-control ckeditor" placeholder="Content" rows="10" cols="10"><?php echo @$getdata[content_en];?></textarea>
                        

                    </div>

                </div>



                <div class="form-group row">

                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Terms Content(Ar)*</label>

                    <div class="col-sm-9">

                        <textarea  id="content_ar" name="data[content_ar]"  class="form-control ckeditor" placeholder="Content" rows="10" cols="10"><?php echo @$getdata[content_ar];?></textarea>

                        

                    </div>

                </div>
				

                  <!--<div class="form-group row">

                        <label class="col-xs-3 col-form-label form-control-label">Status</label>

                        <div class="col-sm-9">

                            

                                <select class="form-control" name="data[status]">

                                  <option value="active" <?php if(isset($getdata['status'])) { if($getdata['status'] == "active"){ echo "selected";}}  else { echo "selected"; } ?>>Active</option>

                                  <option value="inactive" <?php if(isset($getdata['status'])) { if($getdata['status'] == "inactive"){ echo "selected";}} ?>>Inactive</option>

                                                            

                            </select>

                        </div>    

                </div>-->
				

                <input type="hidden" id="pid" name="pid" value="<?php echo @$getdata['id']; ?>">

                   

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

           
		   ignore:[],
			rules: {
                
				"data[content_en]":{
				required: function(textarea) 
				 {
					 CKEDITOR.instances[textarea.id].updateElement();
					 var editorcontent = textarea.value.replace(/<[^>]*>/gi, '');
					 return editorcontent.length === 0;
				 }
			},
			"data[content_ar]":{
			 required: function(textarea) 
				 {
					 CKEDITOR.instances[textarea.id].updateElement();
					 var editorcontent = textarea.value.replace(/<[^>]*>/gi, '');
					 return editorcontent.length === 0;
				 }
            }

            },

            messages : {

            
				"data[content_en]"   : "Required",
                "data[content_ar]"   : "Required"

               

            },       

    });

    $('.insert_services').click(function(){ 

    

        var validator = $("#insert_services").validate();

            validator.form();

            if(validator.form() == true){

              
                  var data = new FormData($('#insert_services')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_terms/terms",

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

   

    

    </script>

 