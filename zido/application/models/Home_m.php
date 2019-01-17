<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Home_m extends CI_Model {
		
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

/*    public function get_data($table,$id='')
	{

		if($id)
		{
			return $this->db->where('id',$id)->get($table)->row_array();
		}
		else
		{
			return $this->db->get($table)->result_array();
		}	

	}*/

	
	public function get_products($sub_category_id='',$lang='en')
	{
		$at['sort_field'] = @$this->session->userdata('sort_field');
        $at['sort_type']  = @$this->session->userdata('sort_value');  //Asc or Desc

        $at['max_price']  = @$this->session->userdata('max_price');
        $at['min_price']  = @$this->session->userdata('min_price');
        $at['colors'] 	  = @$this->session->userdata('colors');
        $at['year']   	  = @$this->session->userdata('year');
        $at['city']   	  = @$this->session->userdata('city');


		$this->db->select('p.id as product_id,p.image,p.description,p.milage,p.min_bid,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');
        
		//For sorting
		if($at['sort_field'])
		{
			$this->db->order_by('p.'.$at['sort_field'],$at['sort_type']); //Asc or Desc
		}
		else
		{
			$this->db->order_by('p.id','desc');
		}

		if($at['city'])
		{
			$this->db->where('p.country_id',$at['city']);
		}

		if($at['colors'])
		{
			$this->db->where_in('p.exterior_color_id',$at['colors']);
		}


		if($at['max_price'])
		{
			$this->db->group_start();
			$this->db->where('p.price >=',$at['min_price']);
			$this->db->where('p.price <=',$at['max_price']);
			$this->db->group_end();
		}

		if($at['year'])
		{
			$this->db->group_start();
			$this->db->where('p.year >=',$at['year']);
			$this->db->where('p.year <=',(string) ($at['year'] + 10));
			$this->db->group_end();
		}

        if($sub_category_id)
        {
          $this->db->where('p.sub_category_id',$sub_category_id);
        }



        $this->db->where('p.status',1);
        $this->db->from('products as p');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');
        $this->db->join('colors as clr','clr.id=p.exterior_color_id');

        return $this->db->get()->result_array();

       //print_r($this->db->last_query());exit;
	}

	public function get_favorite_products($user_id,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.description,p.milage,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

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
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.description,p.milage,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name,b.bid_value as my_bid_value');

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
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.milage,p.bid_acceptance_flag,p.description,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

        $this->db->where('p.user_id',$user_id);
        $this->db->where('p.status',1);
        $this->db->from('products as p','p.id=b.product_id');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();
	}


	public function get_product_details($product_id,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.price,p.description,p.deal_title,p.other_info,p.user_id as seller_id,p.year,p.milage,p.inspected,p.cylinders,p.gears,p.gears_text,p.sun_roof,p.min_bid,p.serial_num,p.description,p.exterior_color_id,p.interior_color_id,c.name_'.$lang.' as country_name,cat.name_'.$lang.' as category_name ,sc.name_'.$lang.' as sub_category_name,ct.name_'.$lang.' as car_type');
		$this->db->where('p.id',$product_id);
		$this->db->from('products as p');
		$this->db->join('categories as cat','cat.id=p.category_id');
		$this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
		$this->db->join('cities as c','c.id=p.country_id');
		$this->db->join('car_types as ct','p.car_type=ct.id');
		return $this->db->get()->row_array();
	}

	public function get_product_images($product_id)
	{
				$this->db->where('product_id',$product_id);
		return  $this->db->get('product_images')->result_array();
	}


	public function search_products($at,$lang='en')
	{


		$this->db->select('p.id as product_id,p.description,p.image,p.min_bid,p.milage,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');


		//For sorting
		if($at['sort_field'])
		{
			$this->db->order_by('p.'.$at['sort_field'],$at['sort_type']); //Asc or Desc
		}
		else
		{
			$this->db->order_by('p.id','desc');
		}

		if($at['category_id'])
		{
			$this->db->where('p.category_id',$at['category_id']);
		}


		if($at['field'])
		{
			$this->db->group_start();

			if($at['field'])
			{
				$this->db->like('clr.color_en',$at['field'],'both');
			}

			if($at['field'])
			{
				$this->db->or_like('c.name_en',$at['field'],'both');
			}

			if($at['field'])
			{
				$this->db->or_like('sc.name_en',$at['field'],'both');
			}

			if($at['field'])
			{
				$this->db->or_like('cat.name_en',$at['field'],'both');
			}

			$this->db->group_end();
		}

		$this->db->where('p.status',1);
        $this->db->from('products as p');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');
        $this->db->join('colors as clr','clr.id=p.exterior_color_id');

        return $this->db->get()->result_array();

        //print_r($this->db->last_query());exit;
	}


	public function advanced_search_products($at,$lang='en')
	{
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.description,p.milage,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');


		//For sorting
		if($at['sort_field'])
		{
			$this->db->order_by('p.'.$at['sort_field'],$at['sort_type']); //Asc or Desc
		}
		else
		{
			$this->db->order_by('p.id','desc');
		}

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

        if($at['min_bid'])
        {
          $this->db->where('p.min_bid',$at['min_bid']);
        }

        if($at['country_id'])
        {
          $this->db->where_in('p.country_id',$at['country_id']);
        }

        if($at['seller_star'])
        {
          $this->db->where('u.user_rating',$at['seller_star']);
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

        if($at['gears'])
        {
          $this->db->where('p.gears',$at['gears']);
        }

        if($at['cylinders'])
        {
          $this->db->where('p.cylinders',$at['cylinders']);
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
		$this->db->select('p.id as product_id,p.image,p.min_bid,p.description,p.milage,p.price,p.year,p.created_at,c.name_'.$lang.' as country_name,sc.name_'.$lang.' as sub_category_name,cat.name_'.$lang.' as category_name');

		if($at['field'])
		{
			$this->db->where('p.'.$at['field'],$at['value']);
		}

		$this->db->where('p.status',1);
        $this->db->from('products as p');
        $this->db->join('cities as c','c.id=p.country_id');
        $this->db->join('sub_categories as sc','sc.id=p.sub_category_id');
        $this->db->join('categories as cat','cat.id=p.category_id');

        return $this->db->get()->result_array();

        //print_r($this->db->last_query());exit;
	}


}
