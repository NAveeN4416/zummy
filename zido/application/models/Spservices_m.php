<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spservices_m extends CI_Model
{

	function __construct() 
	{
		parent::__construct();
	}


	public function get_services($lang)
	{
		if($lang=="en")
		{
			return $this->db->select('id,service_type_en as service_type,service_cost,status,created_at')
				 	        ->get('services')->result_array();	
		}
		else
		{
			return $this->db->select('id,service_type_ar as service_type,service_cost,status,created_at')
				 	        ->get('services')->result_array();
		}
	}

	public function get_spservices($lang="",$sp_user_id)
	{
		$this->db->select('s.service_type_'.$lang.' as service_name');
		$this->db->where('sp_user_id',$sp_user_id);
		$this->db->from('sp_services as sps');
		$this->db->join('services as s','sps.sp_service_id=s.id','left');
		return $this->db->get()->result();
	}


	public function login($data) {

	$this->db->select("id,username, email,phone_number,auth_level,role,approval_status,image,passwd_modified_at");
		$this->db->from("users");
		$this->db->where(array("email"=>$data["email"],"auth_level"=>$data["auth_level"],'password'=>$data["password"]));


		$result = $this->db->get()->row_array();

		if (count($result)>0) 
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
			$detail = ["status"=>0,"log_detail"=>[]];
		} 

		return $detail;
	}


	public function update_device($user_update,$data)
	{
		return   $this->db->set($user_update)
				 		  ->where('email',$data['email'])
				 		  ->update('users');
	}





//Get latest 5 pending requests of SP 
   public function sp_latest_requests($sp_user_id,$lang='en')
   {

   	 
     return    $this->db->select('r.id as request_id,r.requester_user_id,r.service_id,requested_time,r.requested_date,r.payment_status,r.request_cost,u.image,u.username,s.service_type_'.$lang.' as service_type')
     					->where('r.sp_user_id',$sp_user_id)
        		 	    ->where_in('r.request_status','1,6',FALSE)
        		 		->order_by('r.request_created_at','DESC')
        		 		->from('requests as r')
        		 		->join('users as u','u.id=r.requester_user_id')
        		 		->join('services as s','s.id=r.service_id')
        		 		->limit(5)
        		 		->get()
        		 		->result_array();
   }



//Update Profile
	public function update_profile($user_data,$user_id)
	{
	  //Check For duplicates
		$row =  $this->db->group_start()->where('email',$user_data['email'])
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


//Service-Provider  Requests Screen 
	public function pending_completed_requests($sp_user_id,$status,$lang="")
	{
		  if( $sp_user_id!="" )
		  {	
					$this->db->select('u.username,u.image,r.payment_status,r.request_cost,r.requested_time,r.requested_date,r.id as request_id,r.sp_user_id,r.request_type,r.service_id,s.service_type_'.$lang.' as service_type');

					$this->db->where('r.sp_user_id',$sp_user_id);
					$this->db->order_by('r.request_created_at','DESC');

				//Accepted  or  Pending
				if($status==1)
				 {
				 	$this->db->where('r.request_status',1);
				 }

				 //Completed
				 if($status==3)
				 {
				 	$this->db->where('r.request_status',3);
				 }
					$this->db->from('requests as r');
		    		$this->db->join('users as u','u.id=r.requester_user_id','left');
		    		$this->db->join('services as s','s.id=r.service_id','left');
		    return	$this->db->get()->result_array();
		   }
		   else
		   {
		   	  return 0 ;
		   }
 
    }

//Waiting Requests 
    public function user_requests($user_id,$lang="",$request_status)
    {
		//get sp created_date
		$sp_date  = $this->db->select('created_at')->where('id',$user_id)->get('users')->row_array();
		$this->db->select('r.id as request_id,r.requester_user_id,r.service_id,r.sub_service_id,requested_time,r.requested_date,r.payment_status,r.request_cost,u.image,u.username,s.service_type_'.$lang.' as service_type,');

		if($request_status==0)
		{
			$this->db->where('r.request_created_at>=',$sp_date['created_at']);
		}
		else
		{
			$this->db->where('r.sp_user_id',$user_id);
		}

			$this->db->order_by('r.request_created_at','DESC');

		if($request_status==1)
		{
			$this->db->where_in('r.request_status','1,6',FALSE);
		}
		else
		{
			$this->db->where('r.request_status',$request_status);
		}
			$this->db->from('requests as r');
			$this->db->join('users as u','u.id=r.requester_user_id','left');
			$this->db->join('services as s','s.id=r.service_id','left');
	    	return  $this->db->get()->result_array();
    }

//Single Visit Request Details Screen
    public function request_details($request_id="",$lang="")
    {
    		    $this->db->select("u.username,u.image,u.email,u.phone_number,CONCAT(r.request_address,' ',r.request_house,' ',r.request_landmark) as address,r.requested_time,r.device_details,r.repair_details,r.payment_status,r.requested_date,r.sub_service_id,s.service_type_".$lang." as service_type,r.description,r.request_cost,r.quantity,r.id as request_id,r.order_id,r.url");
    		    $this->db->where('r.id',$request_id);
    		    $this->db->from('requests as r');
    		    $this->db->join('services as s','s.id=r.service_id','left');
    			$this->db->join('users as u','u.id=r.requester_user_id','left');
    			//$this->db->join('type_of_lands as l','l.id=r.type_of_land','left');
    	return  $this->db->get()->row_array();
    }


//Package Visit Request Details Screen
    public function package_requests_details($request_id="",$lang="")
    {
    			$this->db->select('request_id,visiting_number,visiting_time,visiting_date,description,visit_status');
 			    $this->db->where('request_id',$request_id);		
    	return  $this->db->get('package_requests')->result_array();
    }


//Tracking User-Sp  GPS 
    public function track($request_id="",$lang="")
    {
		    	$this->db->select('r.id as request_id,r.request_location_lat as user_lat,r.request_location_long as user_long,sp.sp_location_lat as sp_lat,sp.sp_location_long as sp_long');
		    	$this->db->where('r.id',$request_id);
		    	$this->db->from('requests as r');
		    	$this->db->join('sp_info as sp','sp.sp_user_id=r.sp_user_id','left');
		    	$this->db->join('users as u','u.id=r.sp_user_id');
		return  $this->db->get()->row_array();
    }


//User details for tracking Screen
    public function requester_details($request_id="")
   {

     /* $request_type = $this->db->select('request_type')->where('id',$request_id)->get('requests')->row()->request_type;*/

		$this->db->select('r.id as request_id,u.username,u.image,r.requested_time,r.requested_date,r.request_type');
		$this->db->where('r.id',$request_id);
		$this->db->from('requests as r');
		$this->db->join('users as u','u.id=r.requester_user_id','left');
		return	$this->db->get()->row_array();

/*	   	else
	   	{
	   		$this->db->select('r.id as request_id,u.username,u.image,pr.visiting_time as requested_time,pr.visiting_date as requested_date,pr.visiting_number,pr.visit_status,r.request_type');
	   		$this->db->where('r.id',$request_id);
	   		$this->db->where('pr.visit_status',0);
	   		$this->db->from('requests as r');
	   		$this->db->join('users as u','u.id=r.requester_user_id','left');
	   		$this->db->join('package_requests as pr','pr.request_id=r.id','left');
	   		return	$this->db->get()->row_array();
	   	}*/

   }




}

?>