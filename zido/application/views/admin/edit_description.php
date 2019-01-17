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

            <h4 class="modal-title" align="center">Edit Request Description</h4>
        </div>  

        <div class="modal-body">
            
            <form id="insert_services">                         

             <div class="form-group row">
			
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Description</label>
                    <div class="col-sm-9">
                    <input type="text" id="promocode"  name="data[description]"  class="form-control" value="<?php echo @$value['request_description'];?>">
                   
                    </div>
                </div>

		     </div>

                <input type="hidden" name="data[id]" value="<?php echo $value['request_id']; ?>">

            </form> 
        </div>

        <div class="modal-footer">
            <button  type="submit" class="btn btn-primary waves-effect waves-light insert_services">Update</button>
        </div>

    </div>

</div>



<script>

$("#insert_services").validate({       

            rules: {
				
                "data[description]"             : "required",

          
            },
			

            messages : {
				
			 "data[description]"             : "required",

            },      

    });

    $('.insert_services').click(function(){ 

    

        var validator = $("#insert_services").validate();

            validator.form();

            if(validator.form() == true){

                  var data = new FormData($('#insert_services')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/update_description/requests",

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