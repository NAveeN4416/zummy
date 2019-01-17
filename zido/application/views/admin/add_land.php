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

            <h4 class="modal-title" align="center">Add / Edit Type Of Land</h4>
        </div>  

        <div class="modal-body">

            <form id="insert_services">                         

             <div class="form-group row">
			
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Land Type En</label>
                    <div class="col-sm-9">
                    <input type="text" id="name"  name="data[name_en]"  class="form-control" value="<?php echo @$value->name_en;?>">
                   
                    </div>
                </div>
			</div>
			<div class="form-group row">
				<div class="form-group">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Land Type Ar</label>
                    <div class="col-sm-9">
                    <input type="text" id="name_ar"  name="data[name_ar]"  class="form-control" value="<?php echo @$value->name_ar;?>">
                   
                    </div>
                </div>

		     </div>


                  <div class="form-group row">
                        <label class="col-xs-3 col-form-label form-control-label">Status</label>
                        <div class="col-sm-9">
                                <select class="form-control" name="data[status]">
                                  <option value="1" <?php if(isset($value->status)) { if($value->status == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Active</option>
                                  <option value="0" <?php if(isset($value->status)) { if($value->status == "0"){ echo "selected";}} ?>>Inactive</option>
                            </select>
                        </div>    
                 </div>

                <input type="hidden" name="data[id]" value="<?php echo @$value->id; ?>">

            </form> 
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary waves-effect waves-light insert_services">Save changes</button>
        </div>

    </div>

</div>



<script>

$("#insert_services").validate({       

            rules: {
				
                "data[name_en]"             : "required",
                "data[name_ar]"             : "required",

          
            },
			

            messages : {
				
				"data[name_en]"             : "Enter type of land in English",
				"data[name_ar]"             : "Enter type of land in Arabic",

            },      

    });

    $('.insert_services').click(function(){ 

    

        var validator = $("#insert_services").validate();

            validator.form();

            if(validator.form() == true){

                  var data = new FormData($('#insert_services')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_data/type_of_lands",

                    type: "POST",

                    data: data,

                    contentType: false,

                    cache: false,

                    processData:false,

                    error:function(request,response){

                        console.log(request);

                    },                  

                    success: function(status)
                    {
                        if (status == 1) 
                        {
                            location.reload();

                        } 

                    }

                });

            }

        });

   

    

</script>