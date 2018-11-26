<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch_model extends CI_Model {

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
	  public function __construct() {
        parent::__construct();
        $this->load->library('template');
    }
	public function fetch_login_data($username,$password){
	        $data=array(
	                'username'=>$username, 
	                'password'=>$password
	                );
	       return $this->db->where($data)->get('tbl_users')->num_rows();
	}
	
	public function fetch_listed_rental_property(){
	        return $this->db->select('*')->where('type','rent')->order_by('date_added','DESC')->get('tbl_property')->result();
	}
		public function get_users(){
	        $this->db->select('*'); 
	        $this->db->select('tbl_users.id as ids'); 
	        $this->db->join("tbl_roles","tbl_roles.id = tbl_users.role");
	        $query = $this->db->get('tbl_users');
	        return $query->result();
	}
	public function get_roles(){
	        $this->db->select('*'); 
	        $query = $this->db->get('tbl_roles');
	        return $query->result();  
	}
	public function fetch_hot_properties(){
	        return $this->db->select('*')->where('featured',1)->get('tbl_property')->result();
	}
	public function fetch_all_properties(){
	        return $this->db->select('*')->get('tbl_property')->num_rows();
	}
	public function fetch_admin(){
	   return $this->db->select('*')->where('role',1)->get('tbl_users')->num_rows();  
	}
	public function fetch_agent(){
	   return $this->db->select('*')->where('role',2)->get('tbl_users')->num_rows();  
	}
	public function fetch_client(){
	   return $this->db->select('*')->where('role',3)->get('tbl_users')->num_rows();  
	}
	public function fetch_enquiries(){
	        $this->db->select('*');
	        $this->db->select('tbl_enquiries.id as ids');
	        $this->db->join('tbl_property', 'tbl_property.id =  tbl_enquiries.property_id');
	        return $this->db->get('tbl_enquiries')->result();
	        
	}
	public function get_this_property($id){
	        $this->db->select('*');
	        $this->db->select('tbl_property.image as property_image');
	        $this->db->join('tbl_users','tbl_users.id=tbl_property.agent_id');
	        return $this->db->where('tbl_property.id',$id)->get('tbl_property')->result();
	}
	public function get_all_property(){
	        return $this->db->select('*')->from('tbl_property')->get()->result();
	}
	public function fetch_gallery_images(){
	        return $this->db->select('*')->get('tbl_gallery')->result();
	}
	public function get_role_name($id){
	        return $this->db->select('*')->where('id',$id)->get('tbl_roles')->row_array();
	}
	public function get_lease_property(){
	        $this->db->select('*');
	        $this->db->select('tbl_lease.id as ids'); 
	        $this->db->join('tbl_property','tbl_property.id = tbl_lease.property_id');
	       // $this->db->join('tbl_users','tbl_users.id = tbl_lease.client_id');
	        //$this->db->where('tbl_users.role','3');
	        return $this->db->get('tbl_lease')->result();
	}
	public function get_clients(){
	        
	        return $this->db->select('*')->select('id as id_user')->where('role','3')->get('tbl_users')->result();
	}
	public function fetch_config_items($config){
	     return   $this->db->select('*')->where('config_item',$config)->from('tbl_config')->get()->row_array();
	}
	public function find_property_category($type){
	        $data=array(
	                'type'=>$type
	                );
	       return $this->db->select('*')->where($data)->get('tbl_property')->result();
	}
	
	public function get_agents(){
	       return $this->db->where('role',2)->select('*')->get('tbl_users')->result();
	}
}
