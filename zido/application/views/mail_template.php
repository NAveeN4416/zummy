<!doctype html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Forgot Password</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body style='font-family: 'Open Sans',sans-serif; margin:0px auto; font-size:15px; width:100%;''>
  <div class='main-div'  style='width: 60%;margin:20px auto; height:auto;border: 1px solid #ccc;'>
    <div class='content' style='width:100%; margin:0px auto;'>
      <div class='top-header' style='width: 100%;padding-bottom: 100px;padding-top: 10px;background: #4568F0;border-bottom: 1px solid #ccc;'>
        <div class='logo' style=' float:left; width:22%'> <a href='https://www.volive.in/zido'>
          <img src='http://volive.in/zido/assets/frontend/img/logo.png' alt='logo' style='width:110px !important;margin-left: 10px;'></a> </div>
          <div class='header-content' style=' float:left; width:70%'>
            <p style='margin-bottom: 0px;font-size: 25px;color: #fff;font-weight: 600;line-height: 18px;margin-top: 34px;  text-transform: uppercase;text-align: center;'>ZIDO</p>
          </div>
        </div>
        <div class='content' style='width:81%;padding: 15px 20px;'>
          <p style='width:90%;'><strong>Hello, <?php echo $username ; ?></strong></p>
          <p style='width:90%;margin-bottom: 0px;'>Please find the link below to recover your Account Password.</p>
          <p style='margin-top:28px; margin-bottom:28px;width:90%;margin-top: 13px;'>
            <p style="word-wrap: break-word;">
               <a href="<?php echo base_url().$special_link ; ?>"><button>Change Password Here</button></a>
               </p>

            <h3>This Link Will Expires in 2 days.</h3>
            <p>Thank you for using ZIDO </p>
          </p>
        </div>
        <div style='background-color: #ddd; padding: 2px 20px;'>
          <p><a href='https://www.volive.in/zido' style='font-size:13px;font-weight:bold;width:90%;'>Any questions ? Feel free to Contact us</a></p>
          <p><a href="https://www.volive.in/zido">ZIDO.com</a></p>
        </div>
      </div>
    </div>
  </body>
  </html>