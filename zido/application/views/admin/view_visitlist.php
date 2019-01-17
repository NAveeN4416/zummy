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

                <span aria-hidden="true">Ã—</span>

            </button>

            <h4 class="modal-title" align="center">Package Visit List</h4>

        </div>

        <div class="modal-body">
            <p align="center" style="font-weight: bolder;font-size: 15px">Total No.of .Visits : <?php echo $count;?></p>
            <p align="center" style="font-weight: bolder;font-size: 15px">Total Visits Completed : <?php echo $visits_compl;?></p>
           <br> 
             <table>
            <!-- <tr><th>No.of .Visits: <?php echo $count;?></th></tr>
            <tr><th>Visits Completed: <?php echo $visits_compl;?></th></tr> -->
			<?php $i=1;
			foreach($value as $data){?>
			<tr><th>Visit : <?php echo $i;?> <?php echo ($data['visit_status']==1)? '( Completed )' :''; ?></th></tr>
			<tr><td>Visiting Date : <?php echo $data['visiting_date'];?></td>
<td>&nbsp;&nbsp;&nbsp;</td>			
            <td>Visiting Time : <?php echo $data['visiting_time'];?></td></tr>   
			<tr><td>Milestone : <?php echo $data['milestone'];?></td> <td>&nbsp;&nbsp;&nbsp;</td>	<td><?php if(@$data['sp_file']!=""){?> <a href="<?php echo base_url().$data['sp_file'];?>" target="_blank"> Check Pdf</a><?php }?></td></tr>
			
			<?php $i++;}?>
			</table>
			

        </div>

        <div class="modal-footer">


        </div>

    </div>

</div>



<script>



</script>