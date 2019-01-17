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

            <h4 class="modal-title" align="center">Add / Edit City </h4>

        </div>

        <div class="modal-body">

            <form id="insert">                         


            
            
            <div class="form-group row">
            <label class="col-xs-4 col-form-label form-control-label">Country</label>
            <div class="col-sm-8">
                <select class="form-control" name="data[country_id]">
                    <option value=''>--Select--</option>
                <?php foreach($countries as $key=>$country) { ?>
                    <option value="1" <?php echo (@$country['id'] == @$city['country_id']) ? "selected" : '' ; ?>> <?php echo (@$country['name']) ; ?></option>
                <?php } ?>
                </select>
            </div>    
            </div>

            <div class="form-group row">
           <div class="form-group">
             <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">City Name En</label>
            <div class="col-sm-8">
                <input type="text" id="name_en"  name="data[name_en]" class="form-control" value="<?php echo @$city['name_en'];?>">
            </div>
            </div>
            </div>

            <div class="form-group row">
            <div class="form-group">
            <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">City Name Ar</label>
            <div class="col-sm-8">
               <input type="text" id="name_ar"  name="data[name_ar]"  class="form-control" value="<?php echo @$city['name_ar'];?>">
            </div>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-xs-4 col-form-label form-control-label">Status</label>
            <div class="col-sm-8">
                <select class="form-control" name="data[status]">
                    <option value="1" <?php echo (@$city['status'] == 0) ? "" : 'selected' ; ?> >Active</option>
                    <option value="0" <?php echo (@$city['status'] == 1) ? "" : 'selected' ; ?> >InActive</option>
                </select>
            </div>    
            </div>

            <input type="hidden" name="id" value="<?php echo @$city['id']; ?>">

            </form> 

        </div>

        <div class="modal-footer">

            <button type="submit" class="btn btn-primary waves-effect waves-light insert">Save changes</button>

        </div>

    </div>

</div>



<script>

$("#insert").validate({       

            rules: {
                        "data[name_en]"         : "required",
                        "data[name_ar]"         : "required",
                        "data[country_id]"      : "required",
                    },
            messages : 
                    {
                        "data[name_en]"         : "required",
                        "data[name_ar]"         : "required",
                        "data[country_id]"      : "required",
                    },      

    });

    $('.insert').click(function(){ 

        var validator = $("#insert").validate();
            validator.form();
            if(validator.form() == true){
                var data = new FormData($('#insert')[0]); 

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_data/cities",
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
                        //alert(result);
                        if (result) 
                        {
                            location.reload();
                        } 
                    }
                });

            }

        });


</script>