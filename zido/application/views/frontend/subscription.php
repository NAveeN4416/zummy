

<style>
.text-center.p {
    margin: 0 auto;
    width: 60%;
}
</style>

<div class="breadcrumb-area">

  <div class="container">

    <div class="row">

      <div class="col-12">

        <div class="breadcrumb-content text-center">

          <h1 class="breadmome-name"><?php echo $this->lang->line('s_subscription'); ?></h1>

          <ul>

            <li><a href="<?php echo base_url(); ?>home/index"><?php echo $this->lang->line('h_home'); ?></a></li>

            <li class="active"><?php echo $this->lang->line('s_subscription'); ?></li>

          </ul>

        </div>

      </div>

    </div>

  </div>

</div>

<section id="plans">

  <div class="innersection">

    <div class="container">
    <div class="row">
    <div class="text-center p">
            	 <h2><?php echo $this->lang->line('s_subscription'); ?></h2>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloribus maxime eveniet quibusdam voluptates vel quos aspernatur doloremque illo impedit.</p>
            </div>
    </div>

        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-md-offset-2">

      <?php foreach ($packages as $key => $package) {  ?>

        <div class="col-md-5 text-center">

                    <div class="panel panel-danger panel-pricing">

                        <div class="panel-heading">

                            <h3><?php echo $package['name_'.$lang] ;  ?></h3>

                        </div>

                        <div class="panel-body text-center">

                            <p><strong><?php echo $package['price'] ;?> SAR / <?php echo $this->lang->line('s_monthly'); ?></strong></p>

                        </div>

                        <ul class="list-group text-center">

                            <li class="list-group-item"><i class="fa fa-check"></i> <?php echo $package['cars_quantity'] ;  ?> <?php echo $this->lang->line('s_car_only'); ?> </li>
                             <li class="list-group-item"><i class="fa fa-check"></i> <?php echo $package['bids_quantity'] ;  ?> <?php echo $this->lang->line('s_bids'); ?></li>

                        </ul>

                        <div class="panel-footer">

                            <button class="btn btn-lg btn-block btn-danger" onclick="subscribe('<?php echo $package['id']; ?>')"><?php echo $this->lang->line('s_buy'); ?></button>

                        </div>

                    </div>

        </div>
        <?php } ?>
                <!-- /item -->



                <!-- item -->

<!--                 <div class="col-md-5 text-center">

    <div class="panel panel-danger panel-pricing">

        <div class="panel-heading">

            <h3>Annually</h3>

        </div>

        <div class="panel-body text-center">

            <p><strong>499 SAR / Annually</strong></p>

        </div>

        <ul class="list-group text-center">

            <li class="list-group-item"><i class="fa fa-check"></i> 12 Cars only</li>
            
             <li class="list-group-item"><i class="fa fa-check"></i> Open Bids</li>

        </ul>

        <div class="panel-footer">

            <a class="btn btn-lg btn-block btn-danger" href="javascript:">BUY NOW!</a>

        </div>

    </div>

</div> -->

                <!-- /item -->

        </div>

    </div>

  </div>

</section>


<style>

.category-menu-list {

	display: none;

}

</style>

<!-- Required Jqurey -->
<!-- Required Jqurey -->
<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.min.js"></script>

<script type="text/javascript">
  
  $(document).ready(function(){

    $('div#cate-toggle').css({"display":"none"});// remove existing

  })


</script>


<script type="text/javascript">

function subscribe($package_id)
{
         $.ajax({
            url: "<?php echo base_url();?>home/package_subscription",
            type: "POST",
            data: {'package_id':$package_id},
            dataType: 'text',
            error:function(request,response){
                console.log(request);
            },                  
            success: function(result)
            { 
               $result = JSON.parse(result);

                $.notify({
                // options
                  message: $result.message
                },{
                  // settings
                  type: $result.status
                });

                if($result.status=='success')
                {
                  location.href = "<?php echo base_url(); ?>home/payment_page";
                }
            }

        });
    }
  
 
</script>