<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services_m extends CI_Model
{

	function __construct() 
	{
		parent::__construct();
	}


	public function get_data($table,$where='')
	{
		if($where)
		{
			return $this->db->where($where)->get($table);
		}
		else
		{
			return $this->db->get($table);
		}
	}

	public function check_data($table,$at)
	{
		$count = $this->db->where($at)->get($table)->num_rows();

		if($count)
		{
			return true ;
		}
		else
		{
			return false ;
		}
	}

	
	public function search_products($at,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.milage,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

		if($at['category_id'])
		{
			$this->db->where('p.category_id',$at['category_id']);
		}

        if($at['sub_category_id'])
        {
          $this->db->where('p.sub_category_id',$at['sub_category_id']);
        }

        if($at['country_id'])
        {
          $this->db->where('p.country_id',$at['country_id']);
        }

        if($at['min_year'])
        {
          $this->db->where('p.year >=',$at['min_year']);
          $this->db->where('p.year <=',$at['max_year']);
        }


		$this->db->order_by('p.id','desc');
		

		$this->db->where('p.status',1);
        $this->db->from('products as p');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();

        //print_r($this->db->last_query());exit;
	}

	public function advanced_search_products($at,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.milage,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

		if($at['category_id'])
		{
			$this->db->where('p.category_id',$at['category_id']);
		}

        if($at['sub_category_id'])
        {
          $this->db->where('p.sub_category_id',$at['sub_category_id']);
        }

        if($at['exterior_color_id'])
        {
          $this->db->where('p.exterior_color_id',$at['exterior_color_id']);
        }

        if($at['interior_color_id'])
        {
          $this->db->where('p.interior_color_id',$at['interior_color_id']);
        }

        if(@$at['min_bid'])
        {
          $this->db->where('p.min_bid',$at['min_bid']);
        }

        if(@$at['car_type'])
        {
          $this->db->where('p.car_type',$at['car_type']);
        }

        if($at['country_id'])
        {
          $this->db->where_in('p.country_id',$at['country_id']);
        }

        if($at['seller_star'])
        {
          $this->db->where('u.user_rating',$at['seller_star']);
        }

        if($at['cylinders'])
        {
          $this->db->where('p.cylinders',$at['cylinders']);
        }

        if($at['gears'])
        {
          $this->db->where('p.gears',$at['gears']);
        }

        if($at['from_year'])
        {
          $this->db->where('p.year >=',$at['from_year']);
        }

        if($at['to_year'])
        {
          $this->db->where('p.year <=',$at['to_year']);
        }

        if($at['from_milage'])
        {
          $this->db->where('p.milage >=',$at['from_milage']);
        }

        if($at['to_milage'])
        {
          $this->db->where('p.milage <=',$at['to_milage']);
        }

        if($at['min_price'])
        {
          $this->db->where('p.price >=',$at['min_price']);
        }

        if($at['max_price'])
        {
          $this->db->where('p.price <=',$at['max_price']);
        }

        if($at['warranty'])
        {
          $this->db->where('p.warranty',$at['warranty']);
        }

        if($at['inspected'])
        {
          $this->db->where('p.inspected',$at['inspected']);
        }

        if($at['sun_roof'])
        {
          $this->db->where('p.sun_roof',$at['sun_roof']);
        }


		$this->db->where('p.status',1);
        $this->db->from('products as p');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');
        $this->db->join('users as u','u.id=p.user_id');

        return $this->db->get()->result_array();

        //print_r($this->db->last_query());exit;
	}


	public function sort_products($at,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.milage,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

		if($at['field'])
		{
			$this->db->order_by('p.'.$at['field'],$at['value']);
		}
		else
		{
			$this->db->order_by('p.id','desc');
		}

		if($at['sub_category_id'])
		{
			$this->db->where('p.sub_category_id',$at['sub_category_id']);
		}
		else
        {
           //Sending last 7 days products	
           $this_week = date('Y-m-d', strtotime('-7 days')) ;

           $this->db->where('p.created_at >=',$this_week);
           $this->db->limit(10);
        }

		$this->db->where('p.status',1);
        $this->db->from('products as p');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();

        //print_r($this->db->last_query());exit;
	}


	public function get_products($sub_category_id='',$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.milage,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');
          
        if($sub_category_id)
        {
           $this->db->where('p.sub_category_id',$sub_category_id);
        }
        else
        {
           //Sending last 7 days products	
           $this_week = date('Y-m-d', strtotime('-7 days')) ;

           $this->db->where('p.created_at >=',$this_week);
           $this->db->limit(10);
        }

        $this->db->order_by('p.id','desc');
        $this->db->where('p.status',1);
        $this->db->from('products as p');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();
	}

	public function get_favorite_products($user_id,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.milage,p.price,p.year,p.bid_acceptance_flag,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

        $this->db->where('f.user_id',$user_id);
        $this->db->where('p.status',1);
        $this->db->from('favorites as f');
        $this->db->join('products as p','p.id=f.product_id');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();
	}

	public function get_my_bids($user_id,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.milage,p.price,p.year,p.bid_acceptance_flag,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

        $this->db->where('b.user_id',$user_id);
        $this->db->where('p.status',1);
        $this->db->from('bids as b');
        $this->db->join('products as p','p.id=b.product_id');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();
	}

	public function get_my_items($user_id,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.milage,p.price,p.year,p.bid_acceptance_flag,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

        $this->db->where('p.user_id',$user_id);
        //$this->db->where('p.status',1);
        $this->db->from('products as p','p.id=b.product_id');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();
	}


	public function get_product_details($product_id,$lang='en')
	{
		$this->db->select('p.id as product_id,p.price,p.original_price,p.user_id as seller_id,p.year,p.milage,p.inspected,p.deal_title,p.other_info,p.cylinders,p.gears,p.gears_text,p.warranty,p.sun_roof,p.min_bid,p.serial_num,p.description,p.exterior_color_id,p.interior_color_id,c.name_'.$lang.' as country_name,cat.name_'.$lang.' as category_name ,sc.name_'.$lang.' as sub_category_name,ct.name_'.$lang.' as car_type');
		$this->db->where('p.id',$product_id);
		$this->db->from('products as p');
		$this->db->join('categories as cat','cat.id=p.category_id');
		$this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
		$this->db->join('cities as c','c.id=p.country_id');
		$this->db->join('car_types as ct','ct.id=p.car_type');
		return $this->db->get()->row_array();
	}

	public function get_product_images($product_id)
	{
				$this->db->where('product_id',$product_id);
		return  $this->db->get('product_images')->result_array();
	}


	public function update_device($user_update,$data)
	{
		return $this->db->set($user_update)
				 		  ->where('id',$data['user_id'])
				 		  ->update('users');
						 
	}


	public function login($data) 
	{

		$this->db->select("id as user_id,username,name,otp_verif_flag, email,phone_number,phone_code,auth_level,package_selected,role,approval_status,image,passwd_modified_at");
		$this->db->from("users");
		$this->db->group_start()->where('username',$data["email"])->or_where('email',$data["email"])->group_end();
		$this->db->where(array("auth_level"=>$data["auth_level"],'password'=>$data["password"]));	//$this->db->where(array("phone_number"=>$data["phone_number"],"auth_level"=>$data["auth_level"],'password'=>$data["password"]));

		$result = $this->db->get()->row_array();

		$otp = array('user_id'=>$result['user_id'],'phone_number'=>$result['phone_number'],'phone_code'=>$result['phone_code']);

		if (count($result)>0) 
		{
			if($result['otp_verif_flag']==1)
			{
				if ($result["approval_status"] == "0") 
				{
					$detail = ["status"=>2,"log_detail"=>[]];
				} 
				else 
				{   
					$detail = ["status"=>1,"log_detail"=>$result];
				}	
			}
			else
			{
				$detail = ["status"=>3,"log_detail"=>$otp];
			}
		}
		else
		{
			$detail = ["status"=>0,"log_detail"=>[]];
		} 

		return $detail;
	}


//Update Profile
	public function update_profile($user_data,$user_id)
	{
	  //Check For duplicates
		$row =  $this->db->group_start()
						 ->where('email',$user_data['email'])
						 ->or_where('phone_number',$user_data['phone_number'])
						 ->group_end()
						 ->where('id !=',$user_id)	
						 ->get('users')->num_rows();

		if($row==0)
		{
			$this->db->set($user_data);
			$this->db->where('id',$user_id);
			$this->db->update('users');
			return 1;
		}
		elseif($row>0)
		{
			return 0;
		}
		else
		{
			return 2;
		}
	}


//Getting Whole Table Data
	public function  get_all($table)
	{
      $rows = $this->db->get($table);

      return $rows->result_array(); 
	}

				//-----Requests Screen Model------

//Get user details
	public function user($user_id)
	{
		return $this->db->where('id',$user_id)->get('users')->row();
	}

}

?>