<!-- CONTENT-WRAPPER-->

    <div class="content-wrapper">

        <!-- Container-fluid starts -->

         <div class="container-fluid">

    <!-- Row Starts -->

    <div class="row">
      <div class="col-sm-12">
        <div class="main-header">
          <h4>Careers Lists</h4>
          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
            <li class="breadcrumb-item">
              <a href="#">
                <i class="icofont icofont-home">Home</i>
              </a>
            </li>
            <li class="breadcrumb-item"><a href="#:" >Careers Lists</a></li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Row end -->

    

    <div class="row">

      <div class="col-sm-12">

        <div class="card">
		<div class="card-header"><h5 class="card-header-text">Careers List</div>

          <div class="card-block">

            <table id="advanced-table" class="table dt-responsive table-striped table-bordered nowrap">

              <thead>

              <tr>
                <th>S.NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Comment</th>
				        <th>Resume</th>
              </tr>

              </thead>

              <tfoot>

                <tr>
                <th>S.NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Comment</th>
				        <th>Resume</th>
              </tr>

              </tfoot>

              <tbody>

                   <?php 

                      $counter = 1;

                      foreach($careers as $k=>$career) { ?>
                            
                          <tr id="hide'.$key["id"].'">
                            <td><?php echo $k+1; ?></td>
                            <td><?php echo $career['name']; ?></td>
                            <td><?php echo $career['email']; ?></td>
                            <td><?php echo $career['mobile']; ?></td>
                            <td><?php echo substr($career['comment'],0,100); ?></td>
                            <td>
                              <a class="btn btn-sm btn-info" href="<?php echo base_url().$career['file']; ?>" target="_blank">View Resume</a>
                            </td>
                          </tr>

                      <?php  $counter++; } ?> 

              </tbody>

            </table>

          </div>

        </div>

      </div>

    </div>



  </div>

        <!-- Container-fluid ends -->


     </div>

 <!-- CONTENT-WRAPPER-->

  
   
 