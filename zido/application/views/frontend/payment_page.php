

<style>

#insert_services label.error 
{
    color:red; 
}

#insert_services input.error,textarea.error,select.error 
{
    border:1px solid red;
    color:red; 
}

.popover 
{
    z-index: 2000;
    position:relative;
}

    

</style>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />

<div class="breadcrumb-area">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <div class="breadcrumb-content text-center">

                            <h1 class="breadmome-name"><?php echo ($lang=='en') ? 'Payment' : 'دفع' ; ?></h1>

                            <ul>

                                <li><a href="<?php echo base_url(); ?>home/index"><?php echo $this->lang->line('h_home'); ?></a></li>

                                <li class="active"><?php echo ($lang=='en') ? 'Payment Page' : 'صفحة الدفع' ; ?></li>

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
                 <h2><?php echo ($lang=='en')? 'Make Payment' : 'قم بالدفع' ; ?></h2>
            </div>
            </div>

                <div class="row">

                    <div class="col-md-offset-3 col-md-8">
                        <div class="login-form">
                            <div class="login-form-container">
                                <div class="login-form">
                                <p><?php echo ($lang=='en')? 'Package Selected' : 'حزمة مختارة' ; ?> : 
                                    <b style="color:blue"><?php echo $package_details['name_'.$lang]; ?></b>
                                </p>
                                <p><?php echo ($lang=='en') ? 'Amount to be Debited' : 'المبلغ المراد خصمه' ; ?> : 
                                    <b style="color:blue"><?php echo $package_details['price']; ?> SAR</b>
                                </p>
                                </div>
                            </div>
                        </div>    
                    </div>

                    <div class="col-md-offset-3 col-md-8">
                        <div class="login-form">
                            <div class="login-form-container">
                                <div class="login-form">
            <form id="insert_services">                         
              <input type="hidden" name="data[user_id]" value="<?php echo @$userdata['id']; ?>">
            <div class="form-group row">
            
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">
                        <?php echo ($lang=='en')? 'Name on card': 'الاسم على البطاقة' ;?>
                    </label>
                    <div class="col-sm-8">
                    <input type="text" id="name_on_card"  name="data[name_on_card]" required=""  class="form-control " value="<?php echo @$saved_card['name_on_card'];?>">
                   
                    </div>
                </div>

             </div>


             <div class="form-group row">
			
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">
                        <?php echo ($lang=='en')? 'Card Number': 'رقم البطاقة' ;?>
                    </label>
                    <div class="col-sm-8">
                    <input type="text" id="card_number"  name="data[card_number]" required=""   class="form-control " value="<?php echo @$saved_card['card_number'];?>">
                    </div>
                </div>

		     </div>
			 
			 
            <div class="form-group row">
            
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">
                        <?php echo ($lang=='en')? 'Card Expiry': 'انتهاء البطاقة' ;?>
                    </label>
                    <div class="col-sm-8">
                    <input type="text"  id="to"  name="exp_date"  class="form-control" required=""  value="<?php echo @$saved_card['exp_month'].'/'.@$saved_card['exp_year'];?>">
                    </div>
                </div>

            </div> 
	       

            <div class="form-group row">
            
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">CVV</label>
                    <div class="col-sm-8">
                    <input type="text" id="cvv"  name="data[cvv]"  class="form-control" required=""  value="<?php echo @$saved_card['cvv'];?>">
                   
                    </div>
                </div>

             </div>		 


<!--             <div class="form-group row">
            
               <div class="form-group">
                    <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">No of Usages</label>
                    <div class="col-sm-8">
                    <input type="number" id="percentage"  name="data[usage]"  class="form-control" value="<?php echo @$value->usage;?>">
                   
                    </div>
                </div>

            </div> -->


                <div class="form-group row">
                        <label class="col-xs-4 col-form-label form-control-label">
                            <?php echo ($lang=='en') ? 'Status' : 'الحالة' ;?>
                        </label>
                        <div class="col-sm-8">
                                <select class="form-control" name="data[status]">
                                  <option value="1" <?php if(isset($saved_card['status'])) { if($saved_card['status'] == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Active</option>
                                  <option value="0" <?php if(isset($saved_card['status'])) { if($saved_card['status'] == "0"){ echo "selected";}} ?>>InActive</option>
                            </select>
                        </div>    
                </div>

                <input type="hidden" name="card_id" value="<?php echo @$saved_card['id']; ?>">

            </form>

        <div class="modal-footer">
            <button  type="submit" class="btn btn-info waves-effect waves-light insert_services">
                <?php echo ($lang=='en') ? 'Pay' : 'دفع' ;?>
            </button>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<!-- Required Jqurey -->
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.min.js"></script> 


<script>

$("#insert_services").validate({       

            rules: {
				
                "data[name_on_card]"        : "required",
                "data[cvv]"                 : "required",
                "exp_date"                  : "required",
                "data[card_number]"         : "required",
            },
			

            messages : {
				
                "data[name_on_card]"        : "required",
                "data[cvv]"                 : "required",
                "exp_date"                  : "required",
                "data[card_number]"         : "required",
            },      

    });

    $('.insert_services').click(function(){ 

        var validator = $("#insert_services").validate();

            validator.form();

            if(validator.form() == true){

                  var data = new FormData($('#insert_services')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>home/make_payment",
                    type: "POST",
                    data: data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    error:function(request,response)
                    {
                        console.log(request);
                    },                  
                    success: function(result)
                    {
                        if(result)
                        {
                            $(".close").click();

                            $result = JSON.parse(result);

                            $.notify({
                            // options
                              message: $result.message
                            },{
                              // settings
                              type: $result.status
                            });

                            setTimeout(function(){ location.reload(); }, 1500);


                            location.href = '<?php echo $url ; ?>'
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
var startDate = new Date();
var fechaFin = new Date();
var FromEndDate = new Date();
var ToEndDate = new Date();


$('#to').datepicker({
    autoclose: true,
    minViewMode: 1,
    format: 'mm/yyyy',
    startDate: new Date()  
}).on('changeDate', function(selected){
        FromEndDate = new Date(selected.date.valueOf());
        FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
        $('.from').datepicker('setEndDate', FromEndDate);
    });


</script> 