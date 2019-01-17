<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
    {
        // Construct the parent class
         parent::__construct();		
		 $this->load->library('email');
		 $this->load->helper('mail');
		 $this->load->helper('notification');
		 $this->load->library('parser');
		 $this->load->library('session');

		//Let user redirect to login if not admin
		$this->user = ($this->session->userdata('userdetails')) ? $this->session->userdata('userdetails') : '' ;


		if($this->user)
		{
			$this->user = $this->admin_m->get_data('users',$this->user['id']);

			$this->user_id 	  = $this->user['id'] ;
			$this->auth_level = $this->user['auth_level'] ;

			$this->data['userdata']  = $this->user;
			$this->data['user_info'] = $this->user;
		}
		else
		{
			$this->user_id 	  = 0 ;
			$this->auth_level = 0 ;
		}

		$this->lang = 'en' ;
		$this->data['lang'] = 'en' ;


    }

    public function check_login()
    {
    	if($this->auth_level==9)
		{
			//Let the request go further
		}
		else
		{
			//redirect and break
			redirect('admin/logout');
			exit;
		}
    }


    public function getlogindata($table)
	{
		
		$error = array() ;
		$lang  = ($this->input->post('lang')) ? $this->input->post('lang'): "en";
		$data  = $this->input->post('data');

		if(!sizeof($data))
		{
			$message =  ($lang=='en') ? "Please provide valid credentials !" :"يرجى تقديم بيانات الاعتماد صالحة!";
			$result = ['status'=>0,'message'=>$message];
		}

		if(empty($error))
		{
			$password 		  = $data['password'];
		    $data['password'] = base64_encode($password);

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email',$data['email']);
			$this->db->or_where('username',$data['email']);
			$this->db->where('password',$data['password']);

			$user = $this->db->get()->row_array();

			if($user['auth_level']==9)
			{
				$this->session->set_userdata('userdetails',$user);
				$this->session->userdata('userdetails');
				
				$message =  ($lang=='en') ? "Welcome Admin :) " :"نرحب الادارية :)";
				$result = ['status'=>1,'message'=>$message];
		    }
		    elseif($user['auth_level']==1)
		    {
		    	$message =  ($lang=='en') ? "Welcome Mr.".$user['username']."  :) " :":) ".$user['username']." مرحبا بالسيد";
				$result = ['status'=>2,'message'=>$message];
		    }
		    else
		    {
		    	$message =  ($lang=='en') ? "Something went wrong Please try again !" :"حدث خطأ ما. أعد المحاولة من فضلك !";
				$result = ['status'=>0,'message'=>$message];
			}
		}

		$json = json_encode($result);

		echo $json ;

	}


	public function login()
	{
		if($this->auth_level==9)
		{ 
			redirect(base_url().'admin/index');
		}
		else
		{
			$this->load->view('home/login');
		}
	}
	
	public function logout()
	{
		session_destroy();
		redirect('home/login');
    }


	public function index()
	{		

		$this->check_login();

		$this->data['page_name'] = 'dashboard' ;

		$this->data['total_users']    = $this->db->where('auth_level',1)->get('users')->num_rows();
		$this->data['total_products'] = $this->db->get('products')->num_rows();
		$this->data['total_bids'] 	  = $this->db->get('bids')->num_rows();
		$this->data['total_packages'] = $this->db->where('status',1)->get('packages')->num_rows();
		$this->data['total_subscriptions'] = $this->db->where('status',1)->get('subscriptions')->num_rows();
		$this->data['total_categories']    = $this->db->where('status',1)->get('categories')->num_rows();
		$this->data['total_sub_categories'] = $this->db->where('status',1)->get('sub_categories')->num_rows();

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/index',$this->data);
	}


   public function profile($id="")
   {
		$this->check_login();

	
		$this->data['profiledata'] = $this->user;
	    $this->data['cities']      = $this->admin_m->get_data('cities');

	    $this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer');
	    $this->load->view('admin/profile',$this->data); 
   }
   
   public function updateusers($table)
   {
   		$this->check_login();

		$data = $this->input->post('data');
		$id   = $data['id'];
	
	    if(!empty($_FILES['image']['name']))
	    {
           $config['upload_path'] = 'assets/uploads/user_profiles/';
           $config['allowed_types'] = 'jpg|jpeg|png|gif';
           $config['file_name'] = $_FILES['image']['name'];
                  
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
        }
        else
        {
        	 $data['image'] = $this->input->post('old_image');
        }
		
		if($id)
		{
		   $this->session->set_flashdata('success','Profile Updated Successfully');
           $this->db->set($data)->where('id',$id)->update($table);
		   
		   echo json_encode(["status"=>"success","message"=>"Profile Updated successfully"]);
		}
	 
   }

   public function update_pwd($table)
   {
	 
    $data2=$this->input->post('data2');
	 //$data = $this->input->post('data2');
	 $id = $data2['id'];
	 $oldpassword =$data2['password'];
	 $password =$data2['new_pass'];
	 //$newpass =$data['new_pass'];
	 $data['password']=base64_encode($password);
	 //$data['new_pass']=base64_encode($newpass);
	 $res = $this->db->where('id',$id)->get('users')->row();

	 	$db_pass = base64_decode($res->password);

	 if($db_pass===$oldpassword)
	 {
	       $id = $data2['id'];
		   $this->session->set_flashdata('success','Password Updated Successfully');
        	$this->db->set($data)->where('id',$id)->update($table);
			echo json_encode(["status"=>"success","message"=>"Password Updated successfully"]);
			
	}
	else{
		echo json_encode(["status"=>"error","message"=>"Old Password is Incorrect !"]);
	}
	 
	   
   }

   public function forgotpassword()
   {
	    $this->load->view('admin/forgotpasswordform'); 
	}	
	
    public function forgotpasswordchangeform($id)
    {
	    $this->data['adminid'] = $id;
		$this->load->view('admin/forgotpasswordchangeform',$this->data);   
    }


//Start Navigation Links

    public function users()
    {
    	$this->check_login();

    	$this->data['page_name'] = 'users' ;
    	$this->data['users']	 = array_reverse($this->db->where('auth_level',1)->get('users')->result_array());

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/users',$this->data);

    }


    public function allow_free_access()
    {
    	$this->check_login();

    	$user_id = $this->input->post('user_id');
    	$status  = $this->input->post('status');

    	$flag = $this->db->set('free_access_flag',$status)->where('id',$user_id)->update('users');

    	if($flag && $status==1)
    	{
    		$package = $this->db->where('id',2)->get('packages')->row_array();

    		$flag = $this->db->set('package_selected',$package['id'])->where('id',$user_id)->update('users');

    		if($flag)
    		{
    			$i['user_id']     = $user_id ;
    			$i['package_id']  = $package['id'] ;
    			$i['total_items'] = $package['cars_quantity'] ;
    			$i['items_left']  = $package['cars_quantity'] ;
    			$i['bids_limit']  = $package['bids_quantity'] ;
    			$i['bids_left']   = $package['bids_quantity'] ;
    			$i['status']      = 1 ;

    			$this->db->insert('subscriptions',$i);
    		}
    	}
    	else
    	{
    		$set['free_access_flag'] = 0;
    		$set['package_selected'] = 0;

    		$flag = $this->db->set($set)->where('id',$user_id)->update('users');

    		if($flag)
    		{
    			$this->db->where('user_id',$user_id)->delete('subscriptions');
    		}
    	}

    	echo 1;

    }


    public function view_userdetails($id)
    {
      $this->check_login();

      $this->data['page_name'] = 'users' ;
	  $this->data['user']      = $this->admin_m->get_data('users',$id);
	  $lang      = $this->data['lang'];

	  	//User Package details
      	$this->data['package_details'] = $this->db->select('p.name_en as package_name,p.bids_quantity,p.duration,p.price,s.total_items,s.items_left,s.status')
                                               ->where('s.user_id',$id)
                                               ->from('subscriptions as s')
                                               ->join('packages as p','p.id=s.package_id')
                                               ->get()->row_array();


		$products  = $this->admin_m->get_products('',$lang);

		$filtered_products = array();

		//Setting Days ago  from created date
        foreach ($products as $key => $product) 
        {
            $created_at = $product['created_at'] ;

            $product['days_ago'] = days_ago($created_at) ;

            if($product['user_id']==$id)
            {
            	$filtered_products[] = $product ;
            }
        }

        $this->data['products'] = $filtered_products ;


        //User Bids
      	$user_bids = $this->admin_m->get_user_bids($id,$lang) ;

        //Setting Days ago  from created date
        foreach ($user_bids as $key => $bid)
        {
            $created_at = $bid['created_at'] ;

            $user_bids[$key]['days_ago'] = days_ago($created_at) ;
        }

      	$this->data['user_bids'] = $user_bids ;


      	//User favorite list
      	$user_favorites = $this->admin_m->get_user_favorites($id,$lang) ;

        //Setting Days ago  from created date
        foreach ($user_favorites as $key => $favorite) 
        {
            $created_at = $favorite['created_at'] ;

            $user_favorites[$key]['days_ago'] = days_ago($created_at) ;
        }

        $this->data['user_favorites'] = $user_favorites ;

      //echo "<pre>"; print_r($this->data['products']);exit;

	  $this->load->view('admin/includes/header',$this->data);
	  $this->load->view('admin/includes/footer',$this->data);
	  $this->load->view('admin/view_userdetails',$this->data);  

   }


    //Categories
    public function categories()
    {	
    	$this->check_login();

    	$this->data['page_name']    = 'categories' ;

		$this->data['categories'] 	= $this->admin_m->get_data('categories');
	
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/categories',$this->data);
	
    }


    public function add_category()
    {
    	$this->check_login();

    	$id = $this->input->post('id');

    	if($id)
    	{
    		$this->data['category'] = $this->admin_m->get_data('categories',$id);
    	}

    	$this->load->view('admin/add_category',$this->data);
    }

    //Sub Categories
    public function sub_categories()
    {	
    	$this->check_login();

    	$this->data['page_name']    = 'sub_categories' ;

		$this->data['sub_categories'] = $this->db->select('sc.*,c.image as cat_image,c.name_en as category_name')
												 ->order_by('c.id')
												 ->from('sub_categories as sc')
												 ->join('categories as c','c.id=sc.category_id')
												 ->get()->result_array();
		
		//echo "<pre>"; print_r($this->data['sub_categories']);exit;

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/sub_categories',$this->data);
	
    }


    public function add_sub_category()
    {
    	$this->check_login();

    	$id = $this->input->post('id');

    	$this->data['categories'] = $this->admin_m->get_data('categories');

    	if($id)
    	{
    		$this->data['sub_category'] = $this->admin_m->get_data('sub_categories',$id);
    	}

    	$this->load->view('admin/add_sub_category',$this->data);
    }

    //Packages
    public function packages()
    {	
    	$this->check_login();

    	$this->data['page_name']    = 'packages' ;

		$this->data['packages'] 	= $this->db->where_not_in('id','2')->get('packages')->result_array();
	
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/packages',$this->data);
    }

    public function add_package()
    {
    	$this->check_login();

    	$id = $this->input->post('id');

    	if($id)
    	{
    		$this->data['package'] = $this->admin_m->get_data('packages',$id);
    	}

    	$this->load->view('admin/add_package',$this->data);
    }


    //Categories
    public function car_types()
    {	
    	$this->check_login();

    	$this->data['page_name'] = 'car_types' ;

		$this->data['car_types'] = $this->admin_m->get_data('car_types');
	
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/car_types',$this->data);
	
    }


    public function add_car_type()
    {
    	$this->check_login();

    	$id = $this->input->post('id');

    	if($id)
    	{
    		$this->data['car_type'] = $this->admin_m->get_data('car_types',$id);
    	}

    	$this->load->view('admin/add_car_type',$this->data);
    }



    //Colors
    public function colors()
    {	
    	$this->check_login();

    	$this->data['page_name']    = 'colors' ;

		$this->data['colors'] 	= $this->admin_m->get_data('colors');
	
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/colors',$this->data);
	
    }


    public function add_color()
    {
    	$this->check_login();

    	$id = $this->input->post('id');

    	if($id)
    	{
    		$this->data['color'] = $this->admin_m->get_data('colors',$id);
    	}

    	$this->load->view('admin/add_color',$this->data);
    }

    //Countries
    public function countries()
    {	
    	$this->check_login();

    	$this->data['page_name']  = 'countries' ;
		$this->data['countries']  = $this->db->order_by('priority','desc')->get('countries')->result_array();
	
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/countries',$this->data);
    }


    public function add_country()
    {
    	$this->check_login();

    	$id = $this->input->post('id');

    	if($id)
    	{
    		$this->data['country'] = $this->admin_m->get_data('countries',$id);
    	}

    	$this->load->view('admin/add_country',$this->data);
    }


    //Cities
    public function cities()
    {	
    	$this->check_login();

    	$this->data['page_name'] = 'cities' ;
		$this->data['cities']    = $this->db->select('c.*,co.name as country_name')
											->from('cities as c')
											->join('countries as co','co.id=c.country_id')
											->get()->result_array();
		
	
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/cities',$this->data);
    }


    public function add_city()
    {	
    	$this->check_login();

    	$id = $this->input->post('id');

    	$this->data['countries'] = $this->admin_m->get_data('countries');

    	if($id)
    	{
    		$this->data['city'] = $this->admin_m->get_data('cities',$id);
    	}

    	$this->load->view('admin/add_city',$this->data);
    }



    //Products
    public function products()
    {	
    	$this->check_login();

    	$lang = $this->lang;

    	$this->data['page_name'] = 'products' ;

		$products = $this->admin_m->get_products('',$lang);


		//Setting Days ago  from created date
        foreach ($products as $key => $product) 
        {
            $created_at = $product['created_at'] ;

            $products[$key]['created_at'] = days_ago($created_at) ;

            //Adding car type
            $car_type = $this->db->where('id',$product['car_type'])->get('car_types')->row_array();

            $products[$key]['car_type'] = $car_type['name_en'];

        }

        $this->data['products'] = $products ;

        //echo "<pre>" ;print_r($car_type);exit;

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/products',$this->data);
    }

    //Bid Accepted Products
    public function accepted_products()
    {   
        $this->check_login();

        $lang = $this->lang;

        $this->data['page_name'] = 'accepted_products' ;

        $products = $this->admin_m->get_accepted_products($lang);


        //Setting Days ago  from created date
        foreach ($products as $key => $product) 
        {
            $created_at = $product['created_at'] ;

            $products[$key]['created_at'] = days_ago($created_at) ;

            //Adding car type
            $car_type = $this->db->where('id',$product['car_type'])->get('car_types')->row_array();

            $products[$key]['car_type'] = $car_type['name_en'];

        }

        $this->data['products'] = $products ;

        //echo "<pre>" ;print_r($car_type);exit;

        $this->load->view('admin/includes/header',$this->data);
        $this->load->view('admin/includes/footer',$this->data);
        $this->load->view('admin/accepted_products',$this->data);
    }




    //Categories
    public function banners()
    {	
    	$this->check_login();

    	$this->data['main_page_name'] = 'static';
    	$this->data['page_name'] = 'banners' ;

		$this->data['banners'] 	= $this->admin_m->get_data('banners');
	
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/banners',$this->data);
    }

    //Add Banner
    public function add_banner()
    {
    	$this->check_login();

    	$id = $this->input->post('id');

    	if($id)
    	{
    		$this->data['banner'] = $this->admin_m->get_data('banners',$id);
    	}

    	$this->load->view('admin/add_banner',$this->data);
    }



	//Save data
	public function save_data($table)
	{
		$this->check_login();

		$data = array();

		$data = $this->input->post('data');
		$id   = $this->input->post('id');

		//print_r($data); exit;
		if($table=='banners')
		{
			$path = 'assets/uploads/banners/' ;
		}
		elseif($table=='about_us')
		{
			$path = 'assets/uploads/about_us/' ;
		}
		elseif($table=='categories')
		{
			$path = 'assets/uploads/categories/' ;
		}
		elseif($table=='sub_categories')
		{
			$path = 'assets/uploads/sub_categories/' ;
		}
		elseif($table=='car_types')
		{
			$path = 'assets/uploads/car_types/' ;
		}
		else
		{
			$path = 'assets/uploads/user_profiles/' ;
		}



		if(isset($_FILES['image']))
		{
			if(!empty($_FILES['image']['name']))
		    {
	           $config['upload_path']   = $path;
	           $config['allowed_types'] = 'jpg|jpeg|png|gif';
	           $config['file_name'] 	= $_FILES['image']['name'];
	                  
	           $this->load->library('upload',$config);
	           $this->upload->initialize($config);
	             
	           if($this->upload->do_upload('image'))
	           {
		           $uploadData = $this->upload->data();
		           $data['image'] = $config['upload_path'].$uploadData['file_name'];


		           //Delete old image if exist
		           unlink(@$this->input->post('old_image'));
	           }
	           else
	           {
	          	  $data['image'] = '';
	           }
	        }
	        else
	        {
	        	$data['image'] = $this->input->post('old_image');
	        }
		}

		if($id)
		{
			$this->db->set($data)->where('id',$id)->update($table);
			$this->session->set_flashdata('success','Data Updated Successfully');
			echo 1;
		}
		else
		{
			$this->db->insert($table,$data);
			$this->session->set_flashdata('success','Data Inserted Successfully');
			echo 2;
		}

	}   

//End Navigation Links


/*	//Forgot Password
    public function send_link($table)
    {
       $data = $this->input->post('data');
       $email = $data['email'];

            if(!$this->check_user_email($email))
            {
                $data = $this->db->select('id as user_id,email,username')
                                 ->get_where('users',array("email"=>$email,'auth_level'=>9))
                                 ->row_array();

                            $this->load->library('email');                
                            $this->load->helper('crypt');
                            $this->load->helper('mail');

                                            
                            $recovery_code = $this->RandomString();

                            $this->db->set(array('passwd_recovery_code'=>$recovery_code,'passwd_recovery_date'=>date('Y-m-d h:i:s')))->where('id',$data['user_id'])->update('users');

                            $link_protocol   = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https' : 'http';
                            $link_uri        = 'home/reset_password/' . encrpt($data['user_id']) . '/' . $recovery_code.'/'.encrpt(time());

                           $this->data['special_link'] =  $link_uri ; 


                           $this->data['username']     = $data['username'];

                           //echo $this->data['special_link'] ;exit;

                           $template = $this->load->view('mail_template',$this->data,true); 

                           send_mail($data['email'],'Engineering Works Password Change',$template);

                          echo 1;
            }
            else
            {
                echo 0;
            }  
    }

   public  function RandomString()
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 50; $i++) 
    {
         $randstring = $randstring.$characters[rand(0, strlen($characters)-2)];
    }
    return $randstring;
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
*/
   public function getforgotdata($table)
   {
	  
	    $data=$this->input->post('data');
		 $this->load->library('email');
         $this->load->helper('mail');
		 $this->load->library('parser');
		$data1= $this->db->where('email',$data['email'])->where('auth_level',9)->get($table)->row_array();
		if($data1){
			$id = $data1['id'];
			$username=$data1['username'] ;
			$template_data['name'] = $data1['username'] ;
			$template_data['id'] = $data1['id'] ;
			//echo $template_data['link'] = 'base_url().admin/forgotpasswordchangeform' ;
			$email_id='kambamhimaja@gmail.com';
			$cc='';
			
			$message = $this->parser->parse("admin/forgotpasswordmailform.php", $template_data, TRUE);
			//echo $message;exit;
			$maail =send_mail($email_id,"Engineering",$message,$cc);
			$this->session->set_flashdata('success', 'Changed');
			
		 }	
		else{
			 $this->session->set_flashdata('success','This Email Not Exist');
			 echo 'failure';
		}
		
		
   }
   public function getforgotdata1($table)
   {
	  $data = $this->input->post('data');
	  $password=$data['password'];
	  $pass = base64_encode($password);
	  $id = $this->input->post('admin_id');
		
        if($id){
			 $this->session->set_flashdata('success','Password Changed Successfully');
        	$this->db->set('password',$pass)->where('id',$id)->update($table);
			echo json_encode(["status"=>"success","message"=>"Password Changed successfully"]);

        }
		/*else{
			$this->session->set_flashdata('success','Data Inserted Successfully');
        	$this->db->insert($table,$data);
			echo json_encode(["status"=>"success","message"=>"Data Inserted successfully"]);
			
		} */
	   
   }


   public function modal($value='')
   {
   		$this->check_login();

	    $data 			= array();

		$data['id'] 	= $this->input->post('id');

		if($data['id'])
		{
			$data['value']  = $this->admin_m->getservicedata($data['id']);
		}
		else
		{
			$data['value']  ='';	
		}

		$this->load->view('admin/add_services',$data);  
   }


  
/*   public function delete_sub_service()
   {
   		$this->check_login();

   	 	$sub_service_id  = $this->input->post('id');

   	 	$flag = $this->db->where('id',$sub_service_id)->delete('sub_services');

   	 	if($flag)
   	 	{
   	 		echo '1' ;
   	 	}
   	 	else
   	 	{
   	 		echo '0' ;
   	 	}
   }*/


 
   public function comission_mng()
   {
   		$this->check_login();

	   if($this->session->userdata('userdetails')) { 
	   if($this->session->userdata['userdetails']['auth_level']) 
	   { 
			if($this->session->userdata['userdetails']['role'] =='admin')
			{

				 $fromdate  = $this->input->post('from_date');
				 $from 		= date('Y-m-d',strtotime($fromdate));	
				 $todate 	= $this->input->post('to_date');
				 $to 		= date('Y-m-d',strtotime($todate));

				 if($from!='1970-01-01' && $to!='1970-01-01')
				 {
				 	$session_datesdata = array (
                									'fromdate'    => $from,
                									'todate'        => $to
                								);
				
			    	$this->session->set_userdata('searchfrom',$from);
			    	$this->session->set_userdata('searchto',$to);
			    	$this->data['searchdatedetails'] = $this->session->userdata['searchdates'];
				 
				 }

				$this->data['userdata'] 		   = $this->session->userdata['userdetails'];
				$this->data['serviceproviderdata'] = $this->db->where('banned',0)->where('auth_level',5)->get('users')->result_array();
				//print_r($this->data['serviceproviderdata']);
				//exit;
				$this->data['page_name'] = 'comission';

	           $this->data['subpage_name'] = 'total';  

				$this->load->view('admin/includes/header',$this->data);
				$this->load->view('admin/includes/footer');
				$this->load->view('admin/comission_mng',$this->data);
				
			}
			
	   }
	   }
	   else{
		   redirect(base_url().'admin/login');
		   
	   }  
	   
   }


   public function contactus()
   {
   		$this->check_login();

		$this->data['userdata']  = $this->session->userdata['userdetails'];
		$this->data['data']      = $this->admin_m->admincontact();
		$this->data['page_name'] = 'contact_us';
		$this->data['main_page_name'] = 'info';

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/admincontact',$this->data);
   }


   public function contact_details()
   {
   		$this->check_login();

		$this->data['userdata']    = $this->session->userdata['userdetails'];
		$this->data['contactdata'] = $this->admin_m->contact_details();
		$this->data['page_name']   = 'contact_details';
		$this->data['main_page_name'] = 'info';

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/contact_details',$this->data); 
   }


   public function careers_display()
   {
        $this->check_login();

        $this->data['userdata']       = $this->session->userdata['userdetails'];
        $this->data['careers']        = $this->db->get('careers')->result_array();
        $this->data['page_name']      = 'careers_display';
        $this->data['main_page_name'] = 'info';

        $this->load->view('admin/includes/header',$this->data);
        $this->load->view('admin/includes/footer',$this->data);
        $this->load->view('admin/careers_display',$this->data); 
   }


   public function privacy()
   {
   		$this->check_login();

		$this->data['userdata']  = $this->session->userdata['userdetails'];
		$this->data['page_name'] = 'privacy';
		$this->data['main_page_name'] = 'info';
		$this->data['getdata']   = $this->admin_m->privacydata();
		
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/privacy',$this->data);
			
   }

   public function about_us()
   {
   		$this->check_login();

		$this->data['userdata']  	  = $this->session->userdata['userdetails'];
		$this->data['page_name'] 	  = 'about_us';
		$this->data['main_page_name'] = 'static';
		$this->data['about_us']       = $this->admin_m->get_data('about_us',1);
		
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/about_us',$this->data);	
   }

   public function contact()
   {
   		$this->check_login();

		$this->data['userdata']  	  = $this->session->userdata['userdetails'];
		$this->data['page_name'] 	  = 'contact';
		$this->data['main_page_name'] = 'static';
		$this->data['contact_us']     = $this->admin_m->get_data('contact_us',1);
		
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/contact_us',$this->data);	
   }

   public function auction()
   {
   		$this->check_login();

		$this->data['userdata']  	  = $this->session->userdata['userdetails'];
		$this->data['page_name'] 	  = 'auction';
		$this->data['main_page_name'] = 'static';
		$this->data['auction']        = $this->admin_m->get_data('contact_us',2);
		
		//print_r($this->data);exit;

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/auction_car',$this->data);	
   }

   public function careers()
   {
        $this->check_login();

        $this->data['userdata']       = $this->session->userdata['userdetails'];
        $this->data['page_name']      = 'careers';
        $this->data['main_page_name'] = 'static';
        $this->data['contact_us']     = $this->admin_m->get_data('contact_us',3);
        
        $this->load->view('admin/includes/header',$this->data);
        $this->load->view('admin/includes/footer',$this->data);
        $this->load->view('admin/careers',$this->data);  
   }


   public function social_media()
   {
   		$this->check_login();

		$this->data['userdata']  	  = $this->session->userdata['userdetails'];
		$this->data['page_name'] 	  = 'social_media';
		$this->data['main_page_name'] = 'static';
		$this->data['social_media']   = $this->admin_m->get_data('social_media');
		
		//echo "<pre>"; print_r($this->data);exit;

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/social_media',$this->data);	
   }

   public function add_social_media()
   {
   		$this->check_login();

		$id = @$this->input->post('id');

		if($id)
		{
			$this->data['media']  = $this->admin_m->get_data('social_media',$id);
		}

		$this->load->view('admin/add_social_media',$this->data);  
   }


   public function save_privacy($table)
   {

   		$this->check_login();

	 $data = $this->input->post('data');
     $id = $this->input->post('pid');

		if($id)
		{
		 	$this->session->set_flashdata('success','Data Updated Successfully');
	     	$this->db->set($data)->where('id',$id)->update($table);
		 	echo json_encode(["status"=>"success","message"=>"Data Updated successfully"]);	
		}
		else
		{
			$this->session->set_flashdata('success','Data Inserted Successfully');
	        $this->db->insert($table,$data);
			echo json_encode(["status"=>"success","message"=>"Data Inserted successfully"]);
		}
	
   }

   public function terms()
   {
   		$this->check_login();

		$this->data['userdata']  = $this->session->userdata['userdetails'];
		$this->data['page_name'] = 'terms';
		$this->data['main_page_name'] = 'info';
		$this->data['getdata']   = $this->admin_m->termsdata();

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/terms',$this->data);
   }

   public function save_terms($table)
   {
   	 $this->check_login();


	 $data = $this->input->post('data');
     $id   = $this->input->post('pid');

		if($id)
		{
			$this->session->set_flashdata('success','Data Updated Successfully');
		    $this->db->set($data)->where('id',$id)->update($table);
			echo json_encode(["status"=>"success","message"=>"Data Updated successfully"]);	
		}
		else
		{
			$this->session->set_flashdata('success','Data Inserted Successfully');
	        $this->db->insert($table,$data);
			echo json_encode(["status"=>"success","message"=>"Data Inserted successfully"]);
		}
	
   }


   public function faq()
   {
   		$this->check_login();

		$this->data['userdata']  = $this->session->userdata['userdetails'];
		$this->data['page_name'] = 'faq';
		$this->data['main_page_name'] = 'info';
		$this->data['getdata']   = $this->db->get('faq')->row_array();

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/faq',$this->data);
   }

   public function save_faq($table)
   {
   	 $this->check_login();


	 $data = $this->input->post('data');
     $id   = $this->input->post('pid');

		if($id)
		{
			$this->session->set_flashdata('success','Data Updated Successfully');
		    $this->db->set($data)->where('id',$id)->update($table);
			echo json_encode(["status"=>"success","message"=>"Data Updated successfully"]);	
		}
		else
		{
			$this->session->set_flashdata('success','Data Inserted Successfully');
	        $this->db->insert($table,$data);
			echo json_encode(["status"=>"success","message"=>"Data Inserted successfully"]);
		}
	
   }

   public function help()
   {
   		$this->check_login();

		$this->data['userdata']  = $this->session->userdata['userdetails'];
		$this->data['page_name'] = 'help';
		$this->data['main_page_name'] = 'info';
		$this->data['getdata']   = $this->db->get('help')->row_array();

		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer',$this->data);
		$this->load->view('admin/help',$this->data);
   }

   public function save_help($table)
   {
   	 $this->check_login();


	 $data = $this->input->post('data');
     $id   = $this->input->post('pid');

		if($id)
		{
			$this->session->set_flashdata('success','Data Updated Successfully');
		    $this->db->set($data)->where('id',$id)->update($table);
			echo json_encode(["status"=>"success","message"=>"Data Updated successfully"]);	
		}
		else
		{
			$this->session->set_flashdata('success','Data Inserted Successfully');
	        $this->db->insert($table,$data);
			echo json_encode(["status"=>"success","message"=>"Data Inserted successfully"]);
		}
	
   }


// SMS Page
   public function sms_page()
   {
   		$this->check_login();

		$this->data['userdata'] 	= $this->session->userdata['userdetails'];
		$this->data['page_name'] 	= 'sms';

		$this->data['users']	= $this->admin_m->usersdata();
		$this->data['sp']	    = $this->admin_m->serviceproviders(); 

		//print_r($this->data['users']);exit;
		
		$this->load->view('admin/includes/header',$this->data);
		$this->load->view('admin/includes/footer');
		$this->load->view('admin/sms_page',$this->data);

   }


	public function delete($table)
	{	
		$this->check_login();

		$id = $this->input->post('id');


		if($table=='packages')
		{
			$images = $this->db->select('image')->where('id',$id)->get('packages')->result_array();

			delete_files($images,'image');
		}

		if($table=='categories')
		{
			$images = $this->db->select('image')->where('id',$id)->get('categories')->result_array();

			delete_files($images,'image');
		}

	   if($table=='sub_categories')
		{
			$images = $this->db->select('image')->where('id',$id)->get('sub_categories')->result_array();

			delete_files($images,'image');
		}

		if($table=='banners')
		{
			$images = $this->db->select('image')->where('id',$id)->get('banners')->result_array();

			delete_files($images,'image');
		}

		if($table=='products')
		{
			$images = $this->db->select('image')->where('product_id',$id)->get('product_images')->result_array();
			
			delete_files($images,'image');
		}


		if($id)
		{
			$this->db->delete($table, array('id' => $id));
			$this->session->set_flashdata('success','Data Deleted Successfully');
			echo 1;
		}
		else
		{
			echo 0 ;
		}
	
	}


	//Forgot Password
    public function send_link()
    {
       //$this->check_login();

       $table = 'users' ;

       $email = $this->input->post('email');

        $data = $this->db->select('id as user_id,email,username')
                         ->or_where('email',$email)
                         ->or_where("username",$email)
                         ->get('users')->row_array();

        //print_r($data);exit;

        $this->load->library('email');                
        $this->load->helper('crypt');
        $this->load->helper('mail');

                        
        $recovery_code = $this->RandomString();


        $this->db->set(array('passwd_recovery_code'=>$recovery_code,'passwd_recovery_date'=>date('Y-m-d h:i:s')))->where('id',$data['user_id'])->update('users');

        $link_protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https' : 'http';
        $link_uri      = 'home/reset_password/'.encrpt($data['user_id']).'/'.$recovery_code.'/'.encrpt(time());

        $this->data['special_link'] = $link_uri;

        $this->data['username']     = $data['username'];

        //echo $this->data['special_link'] ;exit;

        $template = $this->load->view('mail_template',$this->data,true); 

        //print_r($template);exit;

        $flag = send_mail($data['email'],'ZIDO Password Change',$template);

        echo $flag;
    }


	public  function RandomString()
	{
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randstring = '';
	    for ($i = 0; $i < 50; $i++) 
	    {
	         $randstring = $randstring.$characters[rand(0, strlen($characters)-2)];
	    }
	    return $randstring;
	}

}


function days_ago($date_time)
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

    if($days==0)
    {
        $days_ago = 'Today';
    }

    if($days>=1)
    {
       $days_ago  = $days.(($days==1) ? ' day ' : ' days ').'ago';
    }

/*        if($weeks>=1)
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
    }*/

    return $days_ago;
}


function delete_files($array_of_files,$type="")
{
	$type = ($type) ? $type : 'image' ;

	foreach ($array_of_files as $key => $file) 
	{
		$file = $file[$type] ;

		unlink($file);
	}
}