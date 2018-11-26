<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {

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
	public function index()
	{ 
	        
	}
	public function send_enquiry(){
	        $data = array(
	                'fullname' =>$this->input->post('fullname'),
	                'email_address' =>$this->input->post('email'),
	                'contact_number' =>$this->input->post('phone_no'),
	                'message' =>$this->input->post('message'),
	                'date' => date('Y-m-d'),
	                'property_id' =>$this->input->post('property_id') 
	                );
	                $this->db->insert('tbl_enquiries', $data);
	        
	}
	public function gallery(){
	        $data = array(
 
                    'title' => 'Gallery', 
                );
                $data['users'] = $this->Fetch_model->get_users(); 
		$this->template->load('default', 'admin/gallery', $data);
	}
	public function update_enquiry(){
	        $id = $this->input->post('id');
	        $comment = $this->input->post('comments');
	        $this->db->set('comments', $comment);
	        $this->db->where('id', $id);
	        $this->db->update('tbl_enquiries');
	}
	public function lease_property(){
	        $data = array( 
                    'title' => 'Lease'
                ); 
                $data['propss']= $this->Fetch_model->get_all_property();
                $data['lease_prop']=$this->Fetch_model->get_lease_property();
                $data['clients']=$this->Fetch_model->get_clients();
		$this->template->load('default', 'admin/lease', $data);
	}
		public function save_lease(){
	        $data = array( 

	                'property_id'=>$this->input->post("property_name"),
	                'client_id'=>$this->input->post("client_name"),
	                'lease_price'=>$this->input->post("payment_amount"),
	                'date_of_issue'=>$this->input->post("date"),
	                'exit_date'=>$this->input->post("exit_date"),
	                'payment_date'=>$this->input->post("repayment"), 
	                'requirements'=>$this->input->post("requirement"),
	                );
	                $this->db->insert('tbl_lease',$data);
	        
	}
		public function update_lease(){
		$id = $this->input->post("id");
	        $data = array( 
	                'property_id'=>$this->input->post("property_name"),
	                'client_id'=>$this->input->post("client_name"),
	                'lease_price'=>$this->input->post("payment_amount"),
	                'date_of_issue'=>$this->input->post("date"),
	                'exit_date'=>$this->input->post("exit_date"),
	                'payment_date'=>$this->input->post("repayment"), 
	                'requirements'=>$this->input->post("requirement"),
	                );
	                $this->db->where("id", $id);
	                $this->db->update('tbl_lease',$data);
	        
	}
	public function delete_lease($id = null){
	$this->db->where('id', $id);
	$this->db->delete('tbl_lease');
	}
}
