<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Admin_m extends CI_Model {
		
	function __construct() 
	{
		parent::__construct();
	}
		
    public function get_data($table,$id='')
	{

		if($id)
		{
			return $this->db->where('id',$id)->get($table)->row_array();
		}
		else
		{
			return $this->db->get($table)->result_array();
		}	

	}


	public function get_products($sub_category_id='',$lang='en')
	{
		$this->db->select('p.id as product_id,p.user_id,p.car_type,p.image,p.milage,p.price,p.min_bid,p.year,p.other_info,p.deal_title,p.created_at,p.status,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');
          
        if($sub_category_id)
        {
          $this->db->where('p.sub_category_id',$sub_category_id);
        }

        $this->db->where('p.status',1);
        $this->db->order_by('p.id','desc');
        $this->db->from('products as p');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();
	}


	public function get_accepted_products($lang='en')
	{
		$this->db->select('p.id as product_id,p.user_id,p.car_type,p.image,p.milage,p.price,p.min_bid,p.year,p.other_info,p.deal_title,p.created_at,p.status,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

        $this->db->where('p.status',2);
        $this->db->order_by('p.id','desc');
        $this->db->from('products as p');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();
	}



	public function privacydata()
	{
		$this->db->select('*');
		$this->db->from('privacy');
		$this->db->where('id',1);
		return $this->db->get()->row_array();
	}

	public function termsdata()
	{
	    $this->db->select('*');
		$this->db->from('terms');
		$this->db->where('id',1);
		return $this->db->get()->row_array();	
	}

	public function admincontact()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('auth_level',9);
		return $this->db->get()->row_array();
	}

	public function contact_details()
	{
		return $this->db->order_by('id desc')->get('contact_list')->result_array();
	}

	public function get_user_bids($user_id,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.description,p.milage,p.price,p.year,p.other_info,p.deal_title,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name,b.bid_value');

        $this->db->where('b.user_id',$user_id);
        $this->db->where('p.status',1);
        $this->db->from('bids as b');
        $this->db->join('products as p','p.id=b.product_id');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();
	}

	public function get_user_favorites($user_id,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.description,p.milage,p.price,p.year,p.other_info,p.deal_title,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

        $this->db->where('f.user_id',$user_id);
        $this->db->where('p.status',1);
        $this->db->from('favorites as f');
        $this->db->join('products as p','p.id=f.product_id');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();
	}


}
