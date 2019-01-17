<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct()
    {
            // Construct the parent class
        parent::__construct();

        $this->load->library('session');
        
        if($this->session->userdata('lang')) 
        {
          $language = $this->session->userdata('lang');
        } 
        else 
        {
          $this->session->set_userdata('lang','en');
          $language = 'en';
        }

        $this->lang->load('main', $language);

        //Let user redirect to login if not admin
        $this->user = ($this->session->userdata('userdetails')) ? $this->session->userdata('userdetails') : '' ;

        if($this->user)
        {
          $this->user = $this->admin_m->get_data('users',$this->user['id']);

          $this->user_id      = $this->user['id'] ;
          $this->auth_level   = $this->user['auth_level'] ;

          $this->data['userdata']  = $this->user;
          $this->data['user_info'] = $this->user;
          $this->data['user_id']   = $this->user_id ;
        }
        else
        {
          $this->user_id    = 0 ;
          $this->auth_level = 0 ;
        }

        //Checking for url in session
        $this->data['url'] = @$this->session->userdata['url'] ? $this->session->userdata['url'] : '' ;

        $this->data['categories'] = $this->db->where('status',1)->get('categories')->result_array();

        $this->data['countries']     = $this->db->where_in('priority','1,2')->get('countries')->result_array();
        $this->data['cities']        = $this->db->get('cities')->result_array();
        $this->data['colors']        = $this->home_m->get_data('colors')->result_array();
        $this->data['admin']         = $this->db->where('auth_level',9)->get('users')->row_array();
        $this->data['social_media']  = $this->db->get('social_media')->result_array();
        $this->data['about_us']      = $this->home_m->get_data('about_us')->row_array();
        $this->data['car_types']     = $this->home_m->get_data('car_types')->result_array();
        $this->data['lang']          = $language ;

    }

  public function index()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);


    $lang    = $this->data['lang'];
    $user_id = $this->user_id;

    $this->data['page'] = 'home' ;

    $tproducts = $this->home_m->get_products('',$lang);
    $products  = array();


    $num_of_prod = 0 ;


      //Setting Days ago  from created date
      foreach ($tproducts as $key => $product) 
      {
          $created_at = $product['created_at'] ;

          $product['created_at'] = days_ago($created_at,$lang) ;

          $days = explode(" ",$product['created_at']) ;


          ///////////Image rotation fixed  
              $image = $product['image'];

              $exif = exif_read_data($image,"EXIF");

              if($exif['Orientation']==6)
              {
                $product['image_res_flag'] = 90 ;  //assigning rotation value
              }
          //////////////////////////

          if($days[0]<=7 && $num_of_prod<20)
          {
            $products[] = $product ;

            $num_of_prod = sizeof($products);
          }
       }

      $this->data['products'] = $products ;

      //echo "<pre>";  print_r($products);exit;

      $this->data['banners'] = $this->db->where('status',1)->get('banners')->result_array();


    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/index',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }


  public function register()
  {
    //print_r($this->session->userdata('userdetails'));exit;

    if($this->user_id)
    {
       redirect('home/index') ;
       exit;
    }

    //PhoneCodes
    $phone_codes = $this->db->select('id,phonecode')
                                ->where_in('priority',array(1,2))
                                ->order_by("priority", "DESC")
                                ->get('countries')
                                ->result_array();

      foreach ($phone_codes as $key => $code)
      {
         $code['phonecode'] = '+'.$code['phonecode'];
         $filter_codes[]    = $code ;
      }

      $this->data['countries'] = $filter_codes;


      //Packages List
      $packages = $this->home_m->get_data('packages')->result_array();

      $this->data['packages'] = $packages;

      //echo "<pre>";  print_r($this->data);exit;

      $this->load->view('frontend/includes/header',$this->data);
      $this->load->view('frontend/register',$this->data);
      $this->load->view('frontend/includes/footer',$this->data);
    
  }

//Get User login
  public function getlogindata($table)
  {
    
    $error = array() ;
    $lang  = 'en';
    $data  = $this->input->post('data');

    if(empty($data['email']) || empty($data['password']))
    {
      $message =  ($lang=='en') ? "Please provide valid credentials !" :"يرجى تقديم بيانات الاعتماد صالحة!";
      $result  = ['status'=>0,'message'=>$message];
    }

    if(empty($error))
    {
      $password         = $data['password'];
      $data['password'] = base64_encode($password);

      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('email',$data['email']);
      $this->db->or_where('username',$data['email']);
      $this->db->where('password',$data['password']);

      $user = $this->db->get()->row_array();

      if($user)
      {
          $this->session->set_userdata('userdetails',$user);
          $this->session->userdata('userdetails');
      }


        if($user['auth_level']==9)
        {
          $message =  ($lang=='en') ? "Welcome Admin :) " :"نرحب الادارية :)";
          $result = ['status'=>1,'message'=>$message];
        }
        elseif($user['auth_level']==1)
        {
          $message =  ($lang=='en') ? "Welcome Mr.".$user['username']."  :) " :":) ".$user['username']." مرحبا بالسيد";

          $this->session->unset_userdata('url');

          $status = 2;
          $url = base_url().'home/index';

          if($this->data['url'])
          {
            $status = 3 ;
            $url = $this->data['url'];
          }

          $result = ['status'=>$status,'message'=>$message,'url'=>$url];
        }
        else
        {
          $message =  ($lang=='en') ? "Please provide valid credentials !" :"يرجى تقديم بيانات الاعتماد صالحة!";
          $result  = ['status'=>0,'message'=>$message];
        }
    }

    $json = json_encode($result);

    echo $json ;

  }


//Generate Username
    public function generate_username($username)
    {
        $org = $username ;

        $random = RandomString(3);

        $username = $username.$random;

        $at['username'] = $username;

        $flag = $this->home_m->check_data('users',$at);

        if($flag)
        {
           $this->generate_username($org);
        }
        else
        {
          return $username ;
        }
    }

  public function save_user()
  {
        $error = array();
        $data  = $this->input->post('data');

        //print_r($data);exit;

        //Reading data
        $lang             = $this->data['lang'];
        $username         = $data['username'];
        $name             = $data['name'];
        $mobile           = $data['phone_number'];
        $email            = $data['email'];
        $password         = $data['password'];
        $phonecode        = $data['phonecode_id'];
        $package_selected = @$data['package_id'];


        if($name=="")
        {
            $error[] =  ($lang=='en') ? "Name is Required" :"مطلوب اسم";
        }
        else
        {
            $user_data['name'] = $name;
        }

        if($phonecode=="")
        {
            $error[] = ($lang=='en')? "Phone Code id is Required" :"أدخل بريد إلكتروني صالحا";
        }
        else
        {
           $country =  $this->db->select('sortname,phonecode')
                                ->where('id',$phonecode)
                                ->get('countries')->row();

           $user_data["country_code"] =  $country->sortname;
           $user_data["phone_code"]   =  $country->phonecode;
        }

        if($mobile == "") 
        {
            $error[] =  ($lang=='en')? "Mobile is Required" :"أدخل بريد إلكتروني صالحا";
        } 
        else 
        {
            if ($this->check_user_mobile($mobile)) 
            {
              $user_data["phone_number"] = $mobile ;
              $user_data['otp']          = 1234 ;
            } 
            else 
            {
                $error[] = ($lang=='en')? "Mobile already in Use":"تم استخدام البريد الإلكتروني من قبل";
            }   
        }    


        if ($email != "") 
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $error['email'] =  ($lang=='en')? "Enter valid email" :"أدخل بريد إلكتروني صالحا";
            } 
            else 
            {
                if ($this->check_user_email($email))
                {
                  $user_data["email"] = $email;
                } 
                else 
                {
                  $error[] = ($lang=='en')? "Email already Used":"تم استخدام البريد الإلكتروني من قبل";
                }   
            }
        }    
        else 
        {
            $error[] = ($lang=='en')? "Email is Required" :"البريد الالكتروني مطلوب";
        }

//Password
        if($password!="")
         {  
            if($password<6)
            {
              $error[] = ($lang=='en')? 'Password should contain alteast 6 charaters !' : "يجب أن تحتوي كلمة المرور على مؤثرات alteast 6!";
            }

            $user_data['password']  =  base64_encode($password);
         } 
         else 
         {
            $error[] = ($lang=='en')? 'Password is required' : "كلمة المرور مطلوبة";
         }

//User Name
        if ($username!= "") 
        {
           $at['username'] = $username ;

           $exist_flag = $this->home_m->check_data('users',$at);

           if($exist_flag)
           {
              $suggestion = $this->generate_username($username);

              $error[] = ($lang=='en')? 'Username already exist you can use '.$suggestion : "كلمة المرور مطلوبة";
           }

           $user_data["username"] =  $username;

           unset($at);
        }
        else
        {
           $error['username'] =  ($lang=='en')? "User Name is required" : "مطلوب موبايل";
        }

        $user_data['created_at']       = date('Y-m-d H:i:s');
        $user_data["auth_level"]       = 1 ;
        $user_data["role"]             = "customer";
        $user_data["approval_status"]  = 1 ;
        $user_data["package_selected"] = ($package_selected) ? $package_selected : 0  ;

    if(empty($error)) 
    {

        $user_data['image'] = "assets/uploads/user_profiles/profile.png";

        $flag = $this->db->insert('users',$user_data);

        $user_id = $this->db->insert_id();


        if($user_id)
        {
              if($user_data['package_selected'])
              {
                  $at['id'] = $package_selected ;

                  $package_details = $this->home_m->get_data('packages',$at)->row_array();
                  
                  $insert['user_id']     = $user_id;
                  $insert['package_id']  = $package_selected;
                  $insert['total_items'] = $package_details['cars_quantity'];
                  $insert['items_left']  = $package_details['cars_quantity'];
                  $insert['status']      = 1 ;

                  $iflag = $this->db->insert('subscriptions',$insert);
              }
        }


        $user_data['image'] = $this->db->select('image')->where('id',$user_id)->get('users')->row()->image;

        $user_data['user_id']    = $user_id ;
        $user_data['phonecode']  = $phonecode ;

        $message[] = ($lang=='en')? "Registered successfully": "تم التسجيل بنجاح" ;

        $result = ["status"=>1,"message"=>$message];
    }
    else
    {
      $result = ['status'=>0,'message'=>$error];
    }

    $json_data = json_encode($result);

    echo $json_data ; exit;

}


//Check Username
public function check_username_post()
{
    $error     = "";
    $lang      = $this->data['lang'];
    $username  = $this->post('username');

      $at['username'] = $username ;

      $exist_flag = $this->services_m->check_data('users',$at);

      if($exist_flag)
      {
          $suggestion = $this->generate_username($username);

          $message = ($lang=='en') ? $username." already exist you can use ".$suggestion : $suggestion." موجودة بالفعل يمكنك استخدامها  ".$username ;

      }
      else
      {
          $message = ($lang=='en') ? $username." available " : " متاح  ".$username ;
      }

      $result = ["status"=>1,"message"=> $message,'base_url'=>base_url()];

      $this->response($result,REST_Controller::HTTP_OK);

}



//Check user email
public function check_user_email($email)
{
    if (count($this->db->get_where("users",array("email"=>$email))->row_array()) > 0) 
    {
        return FALSE;
     }
    else
    {
        return TRUE;
    }          
}

//Check user mobile    
    public function check_user_mobile($mobile) 
    {
        if (count($this->db->get_where("users",array("phone_number"=>$mobile))->row_array()) > 0) 
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }          
    }


  public function login()
  {
    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/login',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function models($category_id='')
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);


    $where['category_id'] = $category_id ;

    $this->data['models'] = $this->db->select('sc.*,c.name_en as category_name,c.image as category_image')
                                     ->where('sc.category_id',$category_id)
                                     ->from('sub_categories as sc')
                                     ->join('categories as c','c.id=sc.category_id')
                                     ->get()->result_array();

    //echo "<pre>" ; print_r($this->data['models']);exit;

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/models',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }


  public function view_brands()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/brands',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function about()
  {  
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);


    $this->data['page'] = 'who' ;

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/about',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function careers()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->data['careers'] = $this->db->where('id',3)->get('contact_us')->row_array();

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/careers',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }


  public function save_careers()
  {

    $data  = $this->input->post('data');
    $lang  = $this->data['lang'];

         $config['upload_path']   = 'assets/uploads/careers/';
         $config['allowed_types'] = '*';
         $config['file_name']     = $_FILES['file']['name'];
                
         $this->load->library('upload',$config);
         $this->upload->initialize($config);
         

         if($this->upload->do_upload('file'))
         {
           $uploadData = $this->upload->data();
           $data['file'] = $config['upload_path'].$uploadData['file_name'];
         }
         else
         {
            $data['file'] = '';
         }


    $this->db->insert('careers', $data);

    $message = ($lang=='en') ? "We have recieved your resume we will be in touch with you after checking your resume" : "لقد تلقينا سيرتك الذاتية وسوف نتصل بك بعد التحقق من سيرتك الذاتية";
     
    $result = ['status'=>1,'message'=>$message];

    $this->session->set_userdata($result);

    redirect('home/careers');
  }

  public function privacy_policy()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->data['privacy'] = $this->home_m->get_data('privacy')->row_array();

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/privacy',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function faq()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->data['faq'] = $this->home_m->get_data('faq')->row_array();

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/faq',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function help()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->data['help'] = $this->home_m->get_data('help')->row_array();

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/help',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function terms_conditions()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->data['terms'] = $this->home_m->get_data('terms')->row_array();

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/terms_conditions',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }


  public function contact()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->data['page'] = 'contact_us';

    $this->data['contact_us'] = $this->home_m->get_data('contact_us')->row_array();    

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/contact',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function view_all_brands()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/view_all_brands',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function view_deals($product_id='')
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());
    $lang = $this->data['lang'];

    $this->session->set_userdata($url);

    $user_id = $this->user_id ;

    if(!$product_id)
    {
       echo 'Sorry url not found ! Please go back....' ; 
       exit;
    }


    $product_details = $this->home_m->get_product_details($product_id,$lang);

    //echo "<pre>";  print_r($product_details);exit;

        //========== Colors Start =========================================================

            //Setting Colors of Product
            $where['id'] = $product_details['exterior_color_id'];

            $ext_color  = $this->home_m->get_data('colors',$where)->row_array();

            $where['id'] = $product_details['interior_color_id'];

            $int_color  = $this->home_m->get_data('colors',$where)->row_array();

            //release param 
            $where = array() ;
            

            //Remove these params from array 
            unset($product_details['exterior_color_id']);
            unset($product_details['interior_color_id']);


            $product_details['exterior_color'] = $ext_color['color'] ; 
            $product_details['interior_color'] = $int_color['color'] ; 

        //=========== Colors End ===========================================================


            //Setting inspection param
            $product_details['inspected'] = ($product_details['inspected']=='1') ? 'Yes' : 'No' ;
            $product_details['sun_roof']  = ($product_details['sun_roof']=='1') ? 'Yes' : 'No' ;
            $product_details['gears']     = ($product_details['gears']=='1') ? 'Manual' : 'Automatic' ;


            //Setting images of products
            $product_details['images'] = $this->home_m->get_product_images($product_id);

            foreach ($product_details['images'] as $key => $image) 
            {
              $product_details['images'][$key]['image_id'] = $image['id'];
              unset($product_details['images'][$key]['id']);


              //Image rotation fixed  
              $path = $image['image'];

              $exif = exif_read_data($path,"EXIF");

              if($exif['Orientation']==6)
              { 
                $product_details['images'][$key]['image_res_flag'] = 90 ;   //assigning rotation value
              }
              ///////////////////////////

            }


        //Seller details  Start =====================================================

            //Setting Seller Details
            $seller_id = $product_details['seller_id'] ;

            $product_details['seller_details'] = $this->db->select('username,user_rating,image')
                                                          ->where('id',$seller_id)
                                                          ->get('users')->row_array();
        //Seller Details End ========================================================

                                         
        //Bidder details  Start =====================================================

            //Setting Bidder Details
            $product_details['bidder_details'] = $this->db->select('u.username,u.user_rating,u.image,b.bid_value')
                                                        ->where('b.product_id',$product_id)
                                                        ->order_by('b.id','desc')
                                                        ->limit('1')
                                                        ->from('bids as b')
                                                        ->join('users as u','u.id=b.user_id')
                                                        ->get()->result_array();

        //Bidder details End ======================================================

        //Favorites Start =========================================================
              if($user_id)
              {
                //If user loggedin then send favorites of product
                $at['id'] = $user_id ;

                //Check for package selection
                $userdetails = $this->home_m->get_data('users',$at)->row_array();
                $subscription_flag = ($userdetails['package_selected']==0) ? 0 : 1 ;

                $where['user_id']    = $user_id;
                $where['product_id'] = $product_id;
                $favorite_flag = $this->home_m->get_data('favorites',$where)->num_rows();


                $product_details['is_favorite_flag']  = ($favorite_flag) ? 1 : 0 ;
                $product_details['subscription_flag'] = $subscription_flag ;
              }
              else
              {
                $product_details['is_favorite_flag']  = 0 ;
                $product_details['subscription_flag'] = 0 ;
              }
        //Favorites End ============================================================

              //Getting user subscription details
              unset($where);
              $where['user_id'] = $user_id ;
                    
              $subscription_status = $this->home_m->get_data('subscriptions',$where)->row_array()['status'];

              $this->data['subscription_status'] = $subscription_status ;

        $this->data['product_details'] = $product_details ;

        $this->data['packages']   = $this->db->where('user_id',$user_id)->get('subscriptions')->row_array();
        $this->data['share_flag'] = 'view_deal' ;

      //echo "<pre>";  print_r($this->data['product_details']);exit;

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/view_deal',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function view_bidders($product_id)
  {
      $lang    = $this->data['lang'];

      $bidders  = $this->db->select('u.username,u.user_rating,u.image,b.bid_value,b.created_at,b.comments')
                           ->where('b.product_id',$product_id)
                           ->order_by('b.id','desc')
                           ->from('bids as b')
                           ->join('users as u','u.id=b.user_id')
                           ->get()->result_array();

      //Setting Days ago  from created date
      foreach ($bidders as $key => $bid) 
      {
          $created_at = $bid['created_at'] ;

          $bidders[$key]['created_at'] = days_ago($created_at,$lang) ;
      }

      echo "<pre>"; print_r($bidders);
  }

  public function share_product($social_website,$product_id)
  {
      $product_details = $this->home_m->get_product_details($product_id);

      $this->data['product_details'] = $product_details ;
      $this->data['product_id']      = $product_id ;
      $this->data['website']         = $social_website ;

      //echo "<pre>"; print_r($product_details);exit;

      $this->load->view('frontend/social_media_sharing',$this->data);
  }




  public function sell_product($product_id="")
  {
    // Hold current url of this page in session for redirection purpose
      $url = array('url' => current_url());

      $this->session->set_userdata($url);

      $this->check_login();

      $this->data['page'] = 'sell_product';
      //$this->data['categories']     = $this->home_m->get_data('categories')->result_array();
      $this->data['sub_categories'] = $this->home_m->get_data('sub_categories')->result_array();
      $this->data['colors']         = $this->home_m->get_data('colors')->result_array();
      $this->data['car_types']      = $this->home_m->get_data('car_types')->result_array();
      $this->data['auction']        = $this->home_m->get_data('contact_us',array('id'=>2))->row_array();
      $this->data['subscription']   = $this->db->where('user_id',$this->user_id)->get('subscriptions')->row_array();
      
      if($product_id)
      {
        $product = $this->db->where('id',$product_id)->get('products')->row_array();

        $product_images = $this->db->select('id as image_id,image')->where('product_id',$product['id'])->get('product_images')->result_array();

        $product['product_images'] = $product_images;

        $this->data['product'] = $product ;
      }

      $this->load->view('frontend/includes/header',$this->data);
      $this->load->view('frontend/sell_product',$this->data);
      $this->load->view('frontend/includes/footer',$this->data);

      if($this->data['url'])
      {
        $this->session->unset_userdata('url');
      }
  }

  public function delete_product_image()
  {
    $image_id = $this->input->post('image_id');

    $d_flag = $this->db->where('id',$image_id)->delete('product_images');

    if($d_flag)
    {
       echo 1 ;
    }

  }

  public function load_sub_categories()
  {
    $where['category_id'] = $this->input->post('category_id');

    $sub_categories = $this->home_m->get_data('sub_categories',$where)->result_array();

    $array = ['status'=>1,'sub_categories'=>$sub_categories];

    $json = json_encode($array);

    echo $json ;

  }

  public function product_details()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/product_details',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function filter_models($products='')
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->data['products'] = $products ;

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/filter_models',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }

  public function subscription()
  {
    // Hold current url of this page in session for redirection purpose
    $url = array('url' => current_url());

    $this->session->set_userdata($url);

    $this->data['packages'] = $this->db->where('id!=',2)->get('packages')->result_array();

    $this->load->view('frontend/includes/header',$this->data);
    $this->load->view('frontend/subscription',$this->data);
    $this->load->view('frontend/includes/footer',$this->data);
  }



//Selling product by User
  public function save_product()
  {

      $lang       = $this->data['lang'];
      $message    = '';
      $product_id = @$this->input->post('product_id'); //While product updating

    //Reciveing DATA    
      $insert['user_id']            = $this->user_id ;
      $insert['category_id']        = $this->input->post('category_id');
      $insert['sub_category_id']    = $this->input->post('sub_category_id');
      $insert['exterior_color_id']  = $this->input->post('exterior_color_id');
      $insert['interior_color_id']  = $this->input->post('interior_color_id');
      $insert['year']               = $this->input->post('year');
      $insert['milage']             = $this->input->post('milage');
      $insert['warranty']           = $this->input->post('warranty');
      $insert['inspected']          = $this->input->post('inspected');
      $insert['gears']              = $this->input->post('gears');
      $insert['cylinders']          = $this->input->post('cylinders');
      $insert['country_id']         = $this->input->post('country_id');
      $insert['sun_roof']           = $this->input->post('sun_roof');
      $insert['deal_title']         = $this->input->post('deal_title');
      $insert['car_type']           = $this->input->post('car_type');
      $insert['description']        = $this->input->post('description');
      $insert['other_info']         = $this->input->post('other_info');
      $insert['price']              = $this->input->post('price');
      $insert['original_price']     = $this->input->post('price');
      $insert['min_bid']            = $this->input->post('minimum_bid');
      $insert['serial_num']         = $this->input->post('serial_num');


      $insert['description']        = trim($insert['description'],' ') ;
      $insert['other_info']         = trim($insert['other_info'],' ') ;


      //Manipulating DATA
      $insert['sun_roof']   = ($insert['sun_roof']=='yes')  ? 1 : 0 ;
      $insert['warranty']   = ($insert['warranty']=='yes')  ? 1 : 0 ;
      $insert['inspected']  = ($insert['inspected']=='yes') ? 1 : 0 ;
      $insert['gears_text'] = ($insert['gears']=='1') ? 'Manual' : 'Automatic' ;


        //Check weather user logged in or not
        if(!$this->user)
        {
            $message  = ($lang=='en')? "Please login first ! and Choose packages" : "الرجاء تسجيل الدخول أولا ! واختيار الحزم";

            $result = ["status"=>2,"message"=>$message];
            goto end ;
        }


        if(!$product_id)
        {
            $where['user_id'] = $insert['user_id'] ;
        
            //Checking wheather package limit for selling cars
            $user_subscription = $this->home_m->get_data('subscriptions',$where)->row_array();
            unset($where);


            if($user_subscription['status']==1)
            {
                //Decrease the items in user subscription package and update in table after successful insertion of product
                $set['items_left'] = $user_subscription['items_left'] - 1 ;
                
                if($set['items_left']==0)
                {
                  $set['status'] = 0 ;

                  //Update package_selected flag to package_id in users table
                  $this->db->set('package_selected',0)->where('id',$insert['user_id'])->update('users');
                }
            }
            else
            {
              //if subscription expired then terminate the request and send response

                $message  = ($lang=='en')? "You subscription expired, please reactivate or choose new package to enjoy our services" : "انتهت صلاحية اشتراكك ، يرجى إعادة تفعيل أو اختيار باقة جديدة للاستمتاع بخدماتنا";

                $result = ["status"=>3,"message"=>$message];

            }
        }


          if($_FILES['images']['name'][0]!='')
          {
            $filescount =  count($_FILES['images']['name']);
            
          }
          else
          {
              $filescount = 0;
          }


          if(!$product_id)
          {
              if($filescount<1)
              {
                $message  = ($lang=='en')? "Sorry minimum 1 image of product needed !" : "آسف الحد الأدنى 1 صور للمنتج المطلوب!";
                $result = ["status"=>3,"message"=>$message];
              }
          }


      if($message=='')
      {
          for($i = 0; $i < $filescount; $i++)
          {
            $file_name = $insert['user_id'].'_image'.time();

                $_FILES['image']['name']     = $_FILES['images']['name'][$i];
                $_FILES['image']['type']     = $_FILES['images']['type'][$i];
                $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i]; 
                $_FILES['image']['size']     = $_FILES['images']['size'][$i]; 

                $uploadPath              = 'assets/uploads/product_images/';
                $config['upload_path']   =  $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['file_name']     =  $file_name;

/////////////////Image Manipulation START////////////////////////////////


/*                
                $this->load->helper('image_manipulator');

                $manipulator = new ImageManipulator($_FILES['image']['tmp_name']);
    
                $width  = $manipulator->getWidth();
                  
                $height   = $manipulator->getHeight();
                $newImage = $manipulator->resample(332, 174);

                $var = $manipulator->save($uploadPath.$_FILES['image']['name']);
*/

/////////////////Image Manipulation END////////////////////////////////////


                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                
                if($this->upload->do_upload('image'))
                {
                    $fileData = $this->upload->data();

                    $uploadData[$i]['file_name'] = $fileData['file_name']; 
                }
                else
                {
                    $error_img = $this->upload->display_errors();

                    $result = ["status"=>0,"message"=> $error_img];

                    exit;
                }

                $product_images[] = array('image'=>$uploadPath.$fileData['file_name']); 
          }


          if(sizeof($product_images))
          {
            $insert['image'] = $product_images[0]['image'];
          }

          

          if($product_id) //Update the product 
          {
              //Insert $insert  data into products table
              $uflag = $this->db->set($insert)->where('id',$product_id)->update('products');

              //Inserting Images into product_images
              $pri['product_id'] = $product_id ;

              foreach($product_images as $key => $image) 
              {
                $pri['image'] = $image['image'];

                $this->db->insert('product_images',$pri);
              }

              $message  = ($lang=='en')? "Product Updated Successfully :)" : "تم تحديث المنتج بنجاح :)";
              $result   = ["status"=>1,"message"=>$message];
          }
          else           //Insert the new product
          {
              //Insert $insert  data into products table
              $iflag = $this->db->insert('products',$insert);

              $product_id = $this->db->insert_id();

              //Inserting Images into product_images
              $pri['product_id'] = $product_id ;

              foreach ($product_images as $key => $image) 
              {
                $pri['image'] = $image['image'];

                $this->db->insert('product_images',$pri);
              }

              $message  = ($lang=='en')? "Product posted Successfully :)" : "تم نشر المنتج بنجاح:";
              $result   = ["status"=>1,"message"=>$message];

              //Update the subscriptions tabel
              $this->db->set($set)->where('user_id',$insert['user_id'])->update('subscriptions');
          }

      }

      end:

      $message = array(
                        'status'  => $result['status'],
                        'message' => $result['message']
                      );

      $this->session->set_userdata($message);

      sleep(2);

      redirect('home/sell_product');

  }



  //User Profile
  public function user_profile()
  {
    $this->check_login();

    $lang    = $this->data['lang'];
    $user_id = $this->user_id;

    $this->data['page'] = 'user_profile' ;

      //User Package details
      $this->data['package_details'] = $this->db->select('p.name_'.$lang.' as package_name,p.bids_quantity,p.duration,p.price,s.total_items,s.items_left,s.status')
                                  ->where('s.user_id',$user_id)
                                  ->from('subscriptions as s')
                                  ->join('packages as p','p.id=s.package_id')
                                  ->get()->row_array();


      //User Product details
      $my_products = $this->home_m->get_my_items($user_id,$lang);

      $total_bidders = array();

        //Setting Days ago  from created date
        foreach ($my_products as $key => $product) 
        {
            $created_at = $product['created_at'] ;

            $my_products[$key]['created_at'] = days_ago($created_at,$lang) ;


            $path = $product['image'];

            //Image rotation fixed
              $exif = exif_read_data($path,"EXIF");

              if($exif['Orientation']==6)
              { 
                $my_products[$key]['image_res_flag'] = 90 ;   //assigning rotation value
              }
            ///////////////////////////


            $bidders = array() ;

            $bidders = $this->db->select('u.username,u.user_rating,u.phone_number,u.email,u.image,b.bid_value,b.created_at,b.comments,cat.name_en as category_name,scat.name_en as sub_category_name')
                                ->where('b.product_id',$product['product_id'])
                                ->order_by('b.id','desc')
                                ->from('bids as b')
                                ->join('products as p','p.id=b.product_id')
                                ->join('categories as cat','cat.id=p.category_id')
                                ->join('sub_categories as scat','scat.id=p.sub_category_id')
                                ->join('users as u','u.id=b.user_id')
                                ->get()->result_array();

            //Setting Days ago  from created date
            foreach ($bidders as $key => $bid) 
            {
                $created_at = $bid['created_at'] ;

                $bidders[$key]['created_at'] = days_ago($created_at,$lang) ;
            }

            $total_bidders[] = $bidders ;
         }

      //echo "<pre>" ;print_r($total_bidders);exit;

      $this->data['my_products']    = $my_products ;
      $this->data['count_products'] = count($my_products); 

      //Bids List
      $my_bids = $this->home_m->get_my_bids($user_id,$lang) ;

        //Setting Days ago  from created date
        foreach ($my_bids as $key => $bid)
        {
            $created_at = $bid['created_at'] ;

            $my_bids[$key]['created_at'] = days_ago($created_at,$lang) ;

            $path = $bid['image'];

            //Image rotation fixed
              $exif = exif_read_data($path,"EXIF");

              if($exif['Orientation']==6)
              { 
                $my_bids[$key]['image_res_flag'] = 90 ;   //assigning rotation value
              }
            ///////////////////////////

        }

      $this->data['my_bids']        = $my_bids ;
      $this->data['count_bids'] = count($my_bids); 


      //User favorite list
      $my_favorites = $this->home_m->get_favorite_products($user_id,$lang) ;

        //Setting Days ago  from created date
        foreach ($my_favorites as $key => $favorite) 
        {
            $created_at = $favorite['created_at'] ;

            $my_favorites[$key]['created_at'] = days_ago($created_at,$lang) ;

            $path = $favorite['image'];

            //Image rotation fixed

              $exif = exif_read_data($path,"EXIF");

              if($exif['Orientation']==6)
              { 
                $my_favorites[$key]['image_res_flag'] = 90 ;   //assigning rotation value
              }
            ///////////////////////////

        }


      $this->data['my_favorites']    = $my_favorites ;
      $this->data['count_favorites'] = count($my_favorites); 
      $this->data['total_bidders']   = $total_bidders; 

      //echo "<pre>" ; print_r($this->data);exit;

      $this->load->view('frontend/includes/header',$this->data);
      $this->load->view('frontend/user_profile',$this->data);
      $this->load->view('frontend/includes/footer',$this->data);
  }

  public function edit_profile()
  {
    $user_id = $this->input->post('id');

    $this->data['userdata'] = $this->db->where('id',$user_id)->get('users')->row_array();

    $this->load->view('frontend/edit_profile',$this->data) ;
  }


  public function update_profile()
  {
     $data    = $this->input->post('data');
     $user_id = $this->input->post('id');

     $name    = $data['name'];
     $address = $data['address'];

     $this->db->set($data)->where('id',$user_id)->update('users');

     echo 1 ; 

     $message = array(
                  'status'  => 1,
                  'message' => 'Profile Updated Successfully'
                );

      $this->session->set_userdata($message);

     exit;
  }

  public function set_notify()
  {
     $status    = $this->input->post('status');
     $user_id = $this->user_id;

     $this->db->set('notification_flag',$status)->where('id',$user_id)->update('users');

     echo 1 ; 

     exit;
  }

  public function change_profile_image()
  {
      $user_id  = $this->user_id;

         $config['upload_path']   = 'assets/uploads/user_profiles/';
         $config['allowed_types'] = 'jpg|jpeg|png|gif';
         $config['file_name']     = $_FILES['image']['name'];
                
         $this->load->library('upload',$config);
         $this->upload->initialize($config);
           
         if($this->upload->do_upload('image'))
         {
           $uploadData = $this->upload->data();
           $data['image'] = $config['upload_path'].$uploadData['file_name'];
         }
         else
         {
            $data['image'] = '';
         }

    $this->db->set($data)->where('id',$user_id)->update('users');


    $message = array(
                  'status'  => 1,
                  'message' => 'Profile Picture Update Successfully :)'
                );

    $this->session->set_userdata($message);

    redirect('home/user_profile');

  }

  public function edit_password()
  {
    $user_id = $this->input->post('id');

    $this->data['userdata'] = $this->db->where('id',$user_id)->get('users')->row_array();

    $this->load->view('frontend/edit_password',$this->data) ;

  }


  public function check_old_pass()
  {

    $old_password = $this->input->post('old_password');
    $user_id      = $this->user_id;

    //print_r($old_password);exit;

    $old_password = base64_encode($old_password) ;

    $db_password = $this->db->where('id',$user_id)->get('users')->row_array()['password'];

    if($db_password==$old_password)
    {
      echo 1 ; 
    }
    else
    {
      echo 0 ;
    }
  }

  public function update_password()
  {
     $password = $this->input->post('password');
     $user_id  = $this->input->post('id');

     $password = base64_encode($password);

     $this->db->set('password',$password)->where('id',$user_id)->update('users');

     echo 1 ; 

     $lang = $this->data['lang'];

      $message = array(
                        'status'  => 1,
                        'message' => ($lang=='en') ? 'Password Updated Successfully' : 'تم تحديث كلمة السر بنجاح'
                      );

      $this->session->set_userdata($message);

     exit;
  }

    //Bidding on product
  public function product_bidding()
  {
      $message    = "";
      $user_id    = $this->user_id;
      $lang       = $this->data['lang'];

      $data       = $this->input->post('data');
      $product_id = $data['product_id'];
      $bid_value  = $data['bid_value'];
      

      if($user_id=="")
      {
          $message  = ($lang=='en')? "Please Login First !" :"الرجاء تسجيل الدخول أولا !";
          $status   = 2;
      }

      if($product_id=="")
      {
          $message = ($lang=='en')? "Product Id Required" :"معرف المنتج مطلوب";
          $status  = 3;
      }
      else
      {
        $product_details = $this->home_m->get_product_details($product_id);

        if($product_details['seller_id']==$user_id)
        {
          $message  = ($lang=='en')? "You can't bid on your own product" :"لا يمكنك المزايدة على منتجك الخاص";
          $status   = 3;
        }
      }


      if($message=='')
      {
          //Check for already bidding by same user on same product
          $at['user_id']    = $user_id;
          $at['product_id'] = $product_id;

          $bid_flag = $this->db->where($at)->where_in('acceptance_flag','0,1')->get('bids')->num_rows();

          if(!$bid_flag)
          {
                $where['user_id'] = $user_id ;

                //Checking wheather package limit for selling cars
                $user_subscription = $this->db->where($where)->get('subscriptions')->row_array();

                unset($where);

                if($user_subscription) //If user subscribed
                {
                    if($user_subscription['status']==1)
                    {
                        //Decrease the items in user subscription package and update in table after successful insertion of product
                        $set['bids_left'] = $user_subscription['bids_left'] - 1 ;

                        $set['bids_left'] = ($set['bids_left']<0) ? 0 : $set['bids_left'] ;
                        
                        if($user_subscription['items_left']==0 && $set['bids_left']==0)
                        {
                          $set['status'] = 0 ;

                          //Update package_selected flag to package_id in users table
                          $this->db->set('package_selected',0)->where('id',$insert['user_id'])->update('users');
                        }
                    }
                }


              $where['id'] = $user_id ;

              $userdetails     = $this->home_m->get_data('users',$where)->num_rows();
              $sender_details  = $this->home_m->get_data('users',$where)->row_array();

              $insert['user_id']    = $user_id ;
              $insert['product_id'] = $product_id ;
              $insert['bid_value']  = $bid_value ;

              $iflag = $this->db->insert('bids',$insert);

              if($iflag)
              {
                //$product_details = $this->home_m->get_product_details($product_id);

                $affected_price = $product_details['price'] + $bid_value ; 

                $this->db->set('price',$affected_price)->where('id',$product_id)->update('products');


/*
                  //Get the last two bid value of this product
                  $last_two_bids = $this->db->where('product_id',$product_id)
                                            ->limit(2)
                                            ->order_by('id','desc')
                                            ->get('bids')->result_array();

                  if(sizeof($last_two_bids)==2)  //based on last two bids increase price of product
                  {
                    //if lastest is greater than preceding one then increase the price of product by difference of these two
                     if($last_two_bids[0]['bid_value']>$last_two_bids[1]['bid_value']) 
                     {
                        $diff = $last_two_bids[0]['bid_value'] - $last_two_bids[1]['bid_value'] ;

                        $affected_price = $product_details['price'] + $diff ;

                        $this->db->set('price',$affected_price)->where('id',$product_id)->update('products');
                     }
                  }
*/
                  $receiver_details = $this->db->select('u.*,p.id as product_id')
                                               ->where('p.id',$product_id)
                                               ->from('products as p')
                                               ->join('users as u','p.user_id=u.id')
                                               ->get()->row_array();


                  $title_en = 'New Bid by '.$sender_details['username'] ;
                  $title_ar = $sender_details['username'].' المزايدة الجديدة' ;

                  $message_en = 'New bid '. $bid_value .' SAR on '.$product_details['category_name'].' - '.$product_details['sub_category_name'] ;

                  $message_ar = $product_details['category_name'].' - '.$product_details['sub_category_name'].' SAR على '. $bid_value .' محاولة جديدة' ;


                  $s_data['user_id']      = $sender_details['id'];
                  $s_data['product_id']   = $product_id;
                  $s_data['username']     = $sender_details['username'];
                  $s_data['image']        = base_url().$sender_details['image'];
                  $s_data['date']         = date('Y-m-d H:i:s A');
                  $s_data['type']         = 'BID';
                  $s_data['title']        = ($lang=='en') ? $title_en   : $title_ar   ;
                  $s_data['body']         = ($lang=='en') ? $message_en : $message_ar ;
                  $s_data['message']      = ($lang=='en') ? $message_en : $message_ar ;

                  $this->load->helper('notification');

                  if($receiver_details['device_type']=='Android')
                  {
                    $re = send_notification_android($receiver_details['device_token'],$s_data);
                  }
                  
                  if($receiver_details['device_type']=='iOS')
                  {
                    $re = send_notification_ios($receiver_details['device_token'],$s_data);
                  }
              }

              $message  = ($lang=='en')? "Bid sent successfully" :"تم إرسال العطاء بنجاح";
              $status   = 1;
          }
          else
          {
              $message  = ($lang=='en')? "Sorry one can bid once on a product !" :"عذرا يمكنك مرة واحدة على منتج!";
              $status   = 3;
          }  
      }

      $message = array(
                        'status'  => $status,
                        'message' => $message
                      );

      $this->session->set_userdata($message);

      redirect('home/view_deals/'.$product_id);
  }


  //Favorite and Unfavorite Product
  public function favorite_unfavorite($flag,$product_id)
  {
      $message    = "";
      $user_id    = $this->user_id;
      $lang       = $this->data['lang'];


      if($user_id=="")
      {
          $message  = ($lang=='en')? "Please Login First !" :"الرجاء تسجيل الدخول أولا !";
          $status   = 2;
      }


      if($message=='')
      {
          $where['user_id']    = $user_id;
          $where['product_id'] = $product_id;

          //Check wheather the product is already in favorite list
          $count = $this->home_m->get_data('favorites',$where)->num_rows();

          //if is there then unfavorite the product ( delete )
          if($count)
          {
              $flag = $this->db->where($where)->delete('favorites');

              if($flag)
              {
                $message = ($lang=='en')? "Removed from favorites list" :"تمت إزالته من قائمة المفضلة";
                $status = 1 ;
              }
          }
          else
          {
              $flag = $this->db->insert('favorites',$where);

              //else add favorites
              if($flag)
              {
                $message = ($lang=='en')? "Added to favorites list" :"أضيفت إلى قائمة المفضلة";
                $status = 1 ;
              }

          }

          if(!$flag)
          {
            $message = ($lang=='en')? "Something went wrong please try again !" :"حدث خطأ ما. أعد المحاولة من فضلك !";
            $status = 3;
          }

      }

      $message = array(
                        'status'  => $status,
                        'message' => $message
                      );

      $this->session->set_userdata($message);

      redirect('home/view_deals/'.$product_id);

  }


//Setting session variables for products
  public function session_variables($url='')
  {

    $var    = @$this->input->post('vars');  // for Sorting

    $max_price  = @$this->input->post('max_price');
    $min_price  = @$this->input->post('min_price');
    $colors     = @$this->input->post('colors');
    $year       = @$this->input->post('year');
    $city       = @$this->input->post('city');


      if($var) //for sorting
      {
          // newyear     - New CARS
          // oldyear     - Old CARS
          // highmileage - More Mileage CARS
          // lowmileage  - Low Mileage  CARS
          // highprice   - High Price  CARS
          // lowprice    - Low Price  CARS

          $sort['hyear']     = ($var==1) ? 1 : 0 ;
          $sort['lyear']     = ($var==2) ? 1 : 0 ;
          /*$sort['hmilage']   = ($var==3) ? 1 : 0 ;*/
          $sort['hnewly']    = ($var==3) ? 1 : 0 ;
          $sort['lmilage']   = ($var==4) ? 1 : 0 ;
          $sort['hprice']    = ($var==5) ? 1 : 0 ;
          $sort['lprice']    = ($var==6) ? 1 : 0 ;



           if($var!=3)
           {
                    //Search in  
                $in[0]  = 'year';
                $in[1]  = 'milage';
                $in[2]  = 'price' ;

                foreach($sort as $key => $value) 
                {
                  if($value==1)
                  {
                    foreach($in as $k => $field)
                    {
                        if(strpos($key,$field))
                        {
                          $explode = explode($key,$field) ;
                          $flag    = $explode[0] ;

                          $vars['sort_field']  = $field ;
                          $vars['sort_value']  = ($key[0]=='h') ? 'desc' : 'asc' ;
                        }
                    } 
                    break;
                  }
                }
            }
            else
            {
               $vars['sort_field']  = 'id' ;
               $vars['sort_value']  = 'desc' ;
            }

        }

      $vars['max_price']  = ($max_price) ? $max_price : 0 ;
      $vars['min_price']  = ($min_price) ? $min_price : 0 ;
      $vars['colors']     = ($colors)    ? $colors : 0 ;
      $vars['year']       = ($year)      ? $year  : 0 ;
      $vars['city']       = ($city)      ? $city  : 0 ;

      //print_r($vars);exit;

      $this->session->set_userdata($vars);

      //echo "<pre>"; print_r($this->session->userdata());exit;

      $current_url = @$this->input->post('current_url');

      if($current_url)
      {
        redirect($current_url);
      }
      else
      {
        redirect('home/search_products');
      }

  }


//Searching Products
    public function search_products($search_flag='',$sub_category_id='',$category_id='',$input_search='')
    {
        $error = "";
        $at    = array();
        $lang  = $this->data['lang'] ;

        $at['sort_field'] = @$this->session->userdata('sort_field');
        $at['sort_type']  = @$this->session->userdata('sort_value');  //Asc or Desc


        if($search_flag==1) //for normal searching
        {

            //Searching with user input  and category id
            $at['category_id'] = $category_id ;
            $at['field']       = $input_search ;

            //echo "<pre>" ; print_r($at);exit;

            $products = $this->home_m->search_products($at,$lang);

            unset($at) ;

        }
        elseif($search_flag==2) //for advanced searching
        {
          $at['category_id']       = (@$this->input->post('category_id'))       ? $this->input->post('category_id')       : 0 ;
          $at['sub_category_id']   = (@$this->input->post('sub_category_id'))   ? $this->input->post('sub_category_id')   : 0 ;
          $at['exterior_color_id'] = (@$this->input->post('exterior_color_id')) ? $this->input->post('exterior_color_id') : 0 ;
          $at['interior_color_id'] = (@$this->input->post('interior_color_id')) ? $this->input->post('interior_color_id') : 0 ;
          $at['country_id']        = (@$this->input->post('city_id'))           ? $this->input->post('city_id')           : 0 ;
          $at['min_bid']           = (@$this->input->post('minimum_bid'))       ? $this->input->post('minimum_bid')       : 0 ;
          $at['seller_star']       = (@$this->input->post('seller_star'))       ? $this->input->post('seller_star')       : 0 ; 

          $at['from_year']         = (@$this->input->post('from_year')) ? $this->input->post('from_year') : 0 ;
          $at['to_year']           = (@$this->input->post('to_year'))   ? $this->input->post('to_year')   : 0 ;

          $at['from_milage']       = (@$this->input->post('from_milage')) ? $this->input->post('from_milage') : 0 ;
          $at['to_milage']         = (@$this->input->post('to_milage'))   ? $this->input->post('to_milage')   : 0 ;
          
          $at['min_price']         = (@$this->input->post('min_price')) ? $this->input->post('min_price') : 0;
          $at['max_price']         = (@$this->input->post('max_price')) ? $this->input->post('max_price') : 0;

          $at['gears']             = (@$this->input->post('gears'))       ? $this->input->post('gears')       : 0 ;
          $at['cylinders']         = (@$this->input->post('cylinders'))   ? $this->input->post('cylinders')   : 0 ;

          $at['warranty']          = (@$this->input->post('warranty')=='yes')  ? 1 : 0 ;       
          $at['inspected']         = (@$this->input->post('inspected')=='yes') ? 1 : 0 ;       
          $at['sun_roof']          = (@$this->input->post('sun_roof')=='yes')  ? 1 : 0 ; 

          
          //echo "<pre>" ; print_r($at);exit;
 
          $products = $this->home_m->advanced_search_products($at,$lang);

          unset($at) ;
        }
        else
        {
            //echo $sub_category_id; exit;

            $products = $this->home_m->get_products($sub_category_id,$lang);
        }


       // $products = $this->services_m->get_products($sub_category_id,$lang);

        //Setting Days ago  from created date
        foreach ($products as $key => $product) 
        {
            $created_at = $product['created_at'] ;

            $products[$key]['created_at'] = days_ago($created_at,$lang) ;

            //Image rotation fixed  
              $image = $product['image'];

              $exif = exif_read_data($image,"EXIF");

              if($exif['Orientation']==6)
              {
                $products[$key]['image_res_flag'] = 90 ;  //assigning rotation value
              }
            ///////////////////////////
        }


        //echo "<pre>" ; print_r($products); exit;

        $this->data['products'] = $products ;

        $this->load->view('frontend/includes/header',$this->data);
        $this->load->view('frontend/filter_models',$this->data);
        $this->load->view('frontend/includes/footer',$this->data);

        //redirect('home/filter_models/'.$products);

        $this->session->unset_userdata('max_price');
        $this->session->unset_userdata('min_price');
        $this->session->unset_userdata('colors');
        $this->session->unset_userdata('year');
        $this->session->unset_userdata('city');
    }


    public function payment_method()
    {
      $user_id = $this->input->post('id');

      $this->data['userdata'] = $this->db->where('id',$user_id)->get('users')->row_array();

      $this->load->view('frontend/payment_method',$this->data) ;

    }

    public function payment_page()
    {
      $this->check_login();

      $user_id = $this->user_id;

      $this->data['userdata'] = $this->db->where('id',$user_id)->get('users')->row_array();

      //print_r($this->data['userdata']);exit;

      $this->data['package_details'] = $this->db->where('id',$this->data['userdata']['package_selected'])->get('packages')->row_array();

      $this->load->view('frontend/includes/header',$this->data);
      $this->load->view('frontend/payment_page',$this->data) ;
      $this->load->view('frontend/includes/footer',$this->data);

    }


    //Subscribing to Package
    public function package_subscription()
    {
/*      $url = array('url' => current_url());

      $this->session->set_userdata($url);*/

        $error       = "";
        $message     = "";

        $lang        = $this->data['lang'];
        $package_id  = @$this->input->post('package_id');
        $user_id     = $this->user_id ;


        if($user_id=="")
        {
            $message = 'Please Login ! ' ; 
            $status  = 'info' ;
        }
        elseif($package_id=="")
        {
            $message = 'Package Id required ! ' ; 
            $status  = 'info' ;
        }
        else
        {
              if($error=="")
              {

                $at['id'] = $package_id ;

                $package_details = $this->home_m->get_data('packages',$at)->row_array();

                //Check for already existance
                $where['user_id'] = $user_id;

                $subscription_details = $this->home_m->get_data('subscriptions',$where)->row_array();
                $where = array() ;

                //if user already subscribed
                if($subscription_details)
                {
                   if($subscription_details['status']!=0)
                   {
                      $message = 'Already you have a package ! you can\'t subscribe more than one' ;
                      $status  = 'danger' ;
                   }
                   else
                   {
                      $this->db->where('user_id',$user_id)->delete('subscriptions');
                   }
                }

                if($message=='')
                {
                    $insert['user_id']     = $user_id;
                    $insert['package_id']  = $package_id;
                    $insert['total_items'] = $package_details['cars_quantity'];
                    $insert['items_left']  = $package_details['cars_quantity'];
                    $insert['status']      = 0;

                    $iflag = $this->db->insert('subscriptions',$insert);

                    if($iflag)
                    {
                      //Update package_selected flag to package_id in users table
                        $this->db->set('package_selected',$package_id)->where('id',$user_id)->update('users');

                        $message =  'Successfully selected package Please complete payment in your profile  :)' ; 
                        $status  = 'success' ;
                    }
                    else
                    {
                        $message = 'Something went wrong !  Please try again' ; 
                        $status  = 'danger' ;
                    }
                }

              }
        }

        $res['message'] = $message ;
        $res['status']  = $status  ; 

        echo json_encode($res);

    }


  public function make_payment()
  {
        $error       = "";
        $lang        = $this->data['lang'];
        $user_id     = $this->user_id ;


        if($user_id=="")
        {
            $message = 'Please Login ! ' ; 
            $status  = 'info' ;
        }
        else
        {
            if($error=="")
            {
                //Check for already existance
                $where['user_id'] = $user_id;

                $subscription_details = $this->home_m->get_data('subscriptions',$where)->row_array();
                $where = array() ;

                //if user already subscribed
                if($subscription_details)
                {
                   if($subscription_details['status']==0)
                   {
                      $at['items_left'] =  $subscription_details['total_items'] ;
                      $at['status']     =  1 ;

                      $this->db->set($at)->where('id',$subscription_details['id'])->update('subscriptions');
                      $at = array();

                      $message = 'Subscription Activated  :)' ;
                      $status  = 'success' ;
                   }
                }
            } 
        }

        $res['message'] = $message ;
        $res['status']  = $status  ; 

        echo json_encode($res);
  } 




  public function newsletter_subscriptions()
  {  
      $lang = $this->data['lang'] ;


      $data['email'] = $this->input->post('email');
      
      $this->db->insert('newsletter_subscriptions',$data);

      $message = ($lang=='en') ? "You will get notify with our News and Upgrades :)" :"سوف تحصل على إخطار لدينا أخبار وترقيات :)";
     
      $result = ['status'=>'success','message'=>$message];

      $this->session->set_userdata($result);

      redirect('home/index');
  }


   public function forgot_password()
   {
      $this->load->view('frontend/includes/header',$this->data);
      $this->load->view('frontend/forgot_pass_form');
      $this->load->view('frontend/includes/footer',$this->data);
   } 
  
   public function forgotpasswordchangeform($id)
   {
      $this->data['adminid'] = $id;
      $this->load->view('admin/forgotpasswordchangeform',$this->data);   
   }

    //Check for user email/username
    public function check_for_user()
    {
      $email = $this->input->post('email');

      $count = $this->db->or_where('email',$email)->or_where('username',$email)->get('users')->row_array();

        if ($count > 0) 
        {
            echo 1 ; exit;
         }
        else
        {
            echo  0 ; exit;
        }          
    }


  public function reset_password($user_id,$reciv_recov_code,$time)
  {
    $this->load->helper('crypt');
                                 
    $user_id  = decrpt($user_id);
    $time     = decrpt($time);



       $reciv_date  = date('Y-m-d',$time);                  
       $present     = date('Y-m-d');
     
       $diff        = strtotime($present)-strtotime($reciv_date);


       $years  = floor($diff / (365*60*60*24));
       $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
       $days   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


      $db_recov_code = $this->db->select('passwd_recovery_code')
              ->where('id',$user_id)
              ->get('users')->row()->passwd_recovery_code;

      if($user_id)
      {           
          if( ($reciv_recov_code == $db_recov_code) && $days<=2)
          {
            $data['user'] = $this->db->where('id',$user_id)->get('users')->row();

            $this->load->view('change_password',$data);
          }
          elseif(($reciv_recov_code != $db_recov_code) && $db_recov_code!='')
          {
            echo 'You have redirected with wrong link.......' ;
          }
          else if($days>=2)
          {
            echo 'This Link is Expired.....';
          }
          else
          {
            echo 'You can Use this link only one time.....';
          }
      }    
      else
      {
        echo 'You Are Not The Authorized User.......';
      }

  }

  public function change_password()
  {
    $data        =  $this->input->post('data');

    $user_id       = base64_decode($data['user_id']);
    $new_password  = base64_encode($data['password']);

    $result = $this->db->set(array('password'=>$new_password,'passwd_recovery_code'=>NULL,'passwd_modified_at'=>date('Y-m-d h:i:s')))->where('id',$user_id)->update('users');

    echo $result;
  }


  public function save_contact()
  {
    $table = 'contact_list';
    $data  = $this->input->post('data');
    $lang  = $this->data['lang'];


    $this->db->insert($table, $data);

    $message = ($lang=='en') ? "We have recieved your message we will be in touch with you" : "لقد استلمنا رسالتك وسنتواصل معك";
     
    $result = ['status'=>1,'message'=>$message];

    $this->session->set_userdata($result);

    redirect('home/contact');
  }

  public function change_lang($lan,$page="",$qry="",$i="")
  {
    $this->session->set_userdata("lang",$lan);
    if($page!="" && $qry!="" && $i!=""){
      redirect("home/".$page.'/'.$qry.'/'.$i);
    }
     else if($page!=""){
      redirect("home/".$page.'/'.$qry);
    }else{
      redirect("home/index");
    }
  }

  public function save_servingmails($table)
  {
    
    $data = $this->input->post('data');
    $data1['email']= $data['email'];
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where('email',$data1['email']);
    $data2=$this->db->get()->row_array();
     if($data2){
      echo 'failure'; 
     }
     else{
    $this->db->insert($table, $data1);
    echo 'success';
     }
    
  }
  public function subscribe()
  {
    $email = $this->input->post('email1');
    if($email=='')
    {
    $this->data['msg'] = 'please enter email';
    $this->load->view('index',$this->data);
    }
  }

  public function check_login()
  {
    if($this->auth_level==1)
    {
      //Let the request go further
    }
    else
    {
      //redirect and break
      redirect('home/login');
      exit;
    }
  }



    public function save_dummy()
    { 
        $image = $_FILES['image']['name'];

            $this->load->library('image_lib');

            $config['image_library']  = 'gd2';
            $config['source_image']   = '/uploads/dummy/'.$image;
            $config['create_thumb']   = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']          = 75;
            $config['height']         = 50;

            $this->image_lib->clear();
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
    }


    public function dummy()
    { 
        $this->load->view('frontend/dummy');
    }


}


  function RandomString($size='')
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';

    if($size=='')
    {
      for ($i = 0; $i < 50; $i++) 
      {
          $randstring = $randstring.$characters[rand(0, strlen($characters)-2)];
      }
    }
    else
    {
      for ($i = 0; $i < $size; $i++)
      {
          $randstring = $randstring.$characters[rand(0, strlen($characters)-2)];
      }
      
    }
    return $randstring;
  }


  function days_ago($date_time,$lang='en')
  {
     //Calculating Days
        $past_date  = strtotime($date_time) ;

        $past_date    = date('Y-m-d',$past_date);
        $present_date = date('Y-m-d');
       
        $diff     = strtotime($present_date)-strtotime($past_date);

        $years  = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $weeks  = floor($days/7);

        $days_ago = '';


        if($lang=='en')
        {
            if($days==0)
            {
                $days_ago = 'Today';
            }

            if($days>=1)
            {
               $days_ago  = $days.(($days==1) ? ' day ' : ' days ').'ago';
            }

            if($weeks>=1)
            {
               $days_ago  = $weeks.(($weeks==1) ? ' Week ' : ' Weeks ').'ago';
            }

            if($months>=1)
            {
              $days_ago  = $months.(($months==1) ? ' Month ' : ' Months ').'ago';
            }

            if($years>=1)
            {
              $days_ago  = $years.(($years==1) ? ' Year ' : ' Years ').'ago';
            }
        }
        else
        {
            if($days==0)
            {
                $days_ago = 'اليوم';
            }

            if($days>=1)
            {
               $days_ago  = (($days==1) ? ' يوم ' : ' أيام ').$days.' منذ  ';
            }

            if($weeks>=1)
            {
               $days_ago  = (($weeks==1) ? ' أسبوع  ' : ' أسابيع  ').$weeks.' منذ  ';
            }

            if($months>=1)
            {
              $days_ago   = (($months==1) ? ' شهر ' : ' الشهور  ').$months.' منذ  ';
            }

            if($years>=1)
            {
              $days_ago   = (($years==1) ? ' عام ' : ' سنوات  ').$years.' منذ  ';
            }
        }

        return $days_ago;
   }
