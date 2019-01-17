<?php
class Language extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        /*$this->load->library('session');*/
    }
 
   public function change_lang()
   {
        

        $lang =  $this->input->get('lang');
        $url  =  $this->input->get('url');

        $lang = ($lang!= "") ? $lang : "en";
        $this->session->set_userdata('lang', $lang);
        $url = trim($url,"'");

		redirect($url,'refresh');
    }
}
