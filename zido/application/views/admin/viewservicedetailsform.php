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

            <h4 class="modal-title" align="center">View Service Details</h4>

        </div>

        <div class="modal-body">

            <form id="insert_services">                         


		<table>
		   <tr colspan="5">
		       
		       <td colspan="3" style="color:blue;">Services Name</td>
		       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		       <td style="color:blue;">Cost</td>
		   </tr>
		    
	
		 
        <?php foreach($servicedata as $data){
              $serviceid=$data['sp_service_id'];
              $servicename=$this->db->select('*')->where('id',$serviceid)->from('services')->get()->row_array();
              
            $cost=@$data['service_price'];
            if($cost)
            {
            $cost=number_format($cost,2);
            }
            else{
                $cost='';
            }
	?>
	<tr colspan="5">
	    <td colspan="3"><?php echo @$servicename['service_type_en'];?></td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	    <td><?php echo $cost;?></td>
	
	</tr>
	
	<?php 
             }
             ?>
             	</table>
          
              
            </form> 

        </div>

       

    </div>

</div>



