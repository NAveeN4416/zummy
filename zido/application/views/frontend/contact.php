

<div class="breadcrumb-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="breadcrumb-content text-center">
                            <h1 class="breadmome-name"><?php echo $this->lang->line('c_contact_us') ; ?></h1>
		                    <ul>
		                        <li><a href="<?php echo base_url(); ?>home/index"><?php echo $this->lang->line('h_home') ; ?></a></li>
		                        <li class="active"><?php echo $this->lang->line('c_contact_us') ; ?></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

        <?php
      //Getting message variable in from session
      
            $session = $this->session->userdata() ;

            $flag = (@$session['status']==1) ? 1 : 0 ;
            $message = @$session['message'];


            $this->session->unset_userdata('status');
            $this->session->unset_userdata('message');

         ?>

        
<div class="innersection">
		    <div class="container">
		        <div class="row">
             <div class="row">
            <div class="text-center p">
            	 <h2><?php echo $contact_us['title_'.$lang] ;  ?></h2>
                 <p><?php echo $contact_us['content_'.$lang] ;  ?></p>
            </div>
			</div>
            <div class="row contact-wrap"> 
                <div class="alert alert-success <?php if($flag==0) { echo 'hide' ; } ?>">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?php echo ($lang=='en') ? 'Message' : 'إشعار' ;?> : </strong> <?php echo $message ; ?>
                </div>
                <form action="<?php echo base_url(); ?>home/save_contact" method="post" class="contact-form" id="main-contact-form">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label><?php echo $this->lang->line('c_name') ; ?> *</label>
                            <input type="text" required="required" class="form-control" name="data[name]">
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('c_email') ; ?> *</label>
                            <input type="email" required="required" class="form-control" name="data[email]">
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('c_mobile') ; ?></label>
                            <input type="text" class="form-control" name='data[mobile]'>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><?php echo $this->lang->line('c_subject') ; ?> *</label>
                            <input type="text" required="required" class="form-control" name="data[subject]">
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('c_message') ; ?> *</label>
                            <textarea rows="8" class="form-control" required id="message" name="data[comment]"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button  class="btn btn-primary btn-lg" name="submit" type="submit"><?php echo $this->lang->line('c_submit') ; ?></button>
                        </div>
                    </div>
                </form> 
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