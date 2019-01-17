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

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />

<div class="modal-dialog" role="document">

    <div class="modal-content" style="overflow:hidden">

        <div class="modal-header" style="border-bottom-color: #ccc;">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">×</span>

            </button>

            <h4 class="modal-title" align="center">Add / Edit Promocode</h4>
        </div>  

        <div class="modal-body">

            <form id="insert_services">                         

             <div class="form-group row">
			
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Promocode</label>
                    <div class="col-sm-9">
                    <input type="text" id="promocode"  name="data[code]"  class="form-control" value="<?php echo @$value->code;?>">
                   
                    </div>
                </div>

		     </div>
			 
			  <div class="form-group row">
            
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">From Date</label>
                    <div class="col-sm-9">
                    <input type="date" id="date"  name="data[from_date]"  class="form-control" value="<?php echo @$value->from_date;?>">
                   
                    </div>
					<!--<label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">From Date</label>
                    <div class="col-sm-9">
					<div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="data[from_date]" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
				</div>-->
                </div>
				
				
				

             </div>
			 
			  <div class="form-group row">
            
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">To Date</label>
                    <div class="col-sm-9">
                    <input type="date" id="tdate"  name="data[to_date]"  class="form-control" value="<?php echo @$value->to_date;?>">
                   
                    </div>
                </div>

             </div>
			 
			  <div class="form-group row">
            
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">No of Usages</label>
                    <div class="col-sm-9">
                    <input type="number" id="percentage"  name="data[usage]"  class="form-control" value="<?php echo @$value->usage;?>">
                   
                    </div>
                </div>

             </div>

            <div class="form-group row">
            
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Percentage</label>
                    <div class="col-sm-9">
                    <input type="number" id="percentage"  name="data[percentage]"  class="form-control" value="<?php echo @$value->percentage;?>">
                   
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
            <button  type="submit" class="btn btn-primary waves-effect waves-light insert_services">Save changes</button>
        </div>

    </div>

</div>



<script>

$("#insert_services").validate({       

            rules: {
				
                "data[code]"             : "required",
                "data[percentage]"            : "required",
                "data[from_date]"            : "required",
                "data[to_date]"            : "required",
                "data[usage]"            : "required"

          
            },
			

            messages : {
				
				"data[code]"             : "required",
                "data[percentage]"            : "required",
                "data[from_date]"            : "required",
                "data[to_date]"            : "required",
                "data[usage]"            : "required"

            },      

    });

    $('.insert_services').click(function(){ 

    

        var validator = $("#insert_services").validate();

            validator.form();

            if(validator.form() == true){

                  var data = new FormData($('#insert_services')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_data/promocodes",

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
<script type="text/javascript">

 var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;	
    $('#date').attr('min', maxDate); 
    $('#tdate').attr('min', maxDate); 
</script>