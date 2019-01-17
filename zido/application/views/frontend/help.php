

<div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h1 class="breadmome-name">HELP</h1>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>home/index"><?php echo $this->lang->line('h_home'); ?></a></li>
                                <li class="active"><?php echo $this->lang->line('f_help'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<div class="innersection">
            <div class="container">
                <div class="row">
             <div class="row">

            <div class="text-center p">
                 <h2>HELP</h2>
                 <p><?php echo $help['content_'.$lang] ; ?></p>
            </div>
            </div>

                </div>
            </div>
        </div>

<!-- footer-area-start -->

<style>

.category-menu-list { display:none; }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">
  
  $(document).ready(function(){

    $('div#cate-toggle').css({"display":"none"});// remove existing

  })


</script>