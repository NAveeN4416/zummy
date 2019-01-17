<!-- CONTENT-WRAPPER-->

    <div class="content-wrapper">

        <!-- Container-fluid starts -->

         <div class="container-fluid">

    <!-- Row Starts -->

    <div class="row">

      <div class="col-sm-12">

        <div class="main-header">

          <h4>Website Request</h4>

          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">

            <li class="breadcrumb-item">

              <a href="#">

                <i class="icofont icofont-home">Home</i>

              </a>

            </li>

            <li class="breadcrumb-item"><a href="#:" >Website Request Details</a></li>

          </ol>

        </div>

      </div>

    </div>

    <!-- Row end -->

    

    <div class="row">

      <div class="col-sm-12">

        <div class="card">
		<div class="card-header"><h5 class="card-header-text">Website Request Details</div>

          <div class="card-block">

            <table id="advanced-table" class="table dt-responsive table-striped table-bordered nowrap">

              <thead>

              <tr>
                <th>S NO</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Email</th>
				        <th>Message</th>
              </tr>

              </thead>

              <tfoot>

                <tr>
                <th>S NO</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Email</th>
				        <th>Message</th>
              </tr>

              </tfoot>

              <tbody>

                   <?php 

                      $counter = 1;

                      foreach($contactdata as $key) {
                          //echo $key[request_type];
                            $cmnt = substr($key["comment"], 0, 100);
                          

                          echo '

                              <tr id="hide'.$key["id"].'">
                                  <td>'.$counter.'</td> 
                                  <td>'.ucfirst($key["name"]).'</td>
                                  <td>'.ucfirst($key["subject"]).'</td>
								                  <td>'.$key["email"].'</td>
								                  <td>'.ucfirst($cmnt).'</td>
                              </tr>

                          ';

                          $counter++;

                      }

                  ?> 

              

              

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

  
   
 