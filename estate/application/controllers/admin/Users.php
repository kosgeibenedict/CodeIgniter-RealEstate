<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
	    $this->load->view('front/index');    
	}
	public function register(){
	        
	}
	public function login(){
	        $username =$this->input->post('username');
	        $password=$this->input->post('password');
	        
	        $result=$this->Fetch_model->fetch_login_data($username,$password);
	        //echo $result;
	        if($result == 1){
	                $_SESSION['user'] = $username;
	                if($_SESSION['user']== 'admin'){
	                        ?>
	                        <script>
	                                window.location.href='<?= base_url()?>admin/admin';
	                        </script>
	                        <?php
	                }
	        }
	        else{
	                header('Location:index');
	        }
	}
	public function all_users(){
	         $data = array(
 
                    'title' => 'All Users', 
                );
                $data['users'] = $this->Fetch_model->get_users();
                $data['roles'] = $this->Fetch_model->get_roles();
		$this->template->load('default', 'admin/users', $data);
	}
	public function deactivate($id = null){
	        $this->db->set('status','0');
	        $this->db->where('id', $id);
	        $this->db->update('tbl_users');
	        ?>
	        <script>
	         window.location.href='<?= base_url()?>admin/users/all_users';
	        </script>
	       <?php
	}
		public function activate($id = null){
	        $this->db->set('status','1');
	        $this->db->where('id', $id);
	        $this->db->update('tbl_users');
	        ?>
	        <script>
	         window.location.href='<?= base_url()?>admin/users/all_users';
	        </script>
	       <?php
	}
	public function save_clients(){
	        $data = array(
	                'firstname' => $this->input->post('firstname'),
	                'lastname' => $this->input->post('lastname'),
	                'email' => $this->input->post('email'),
	                'phone' => $this->input->post('phone'),
	                'role' => $this->input->post('role'),
	                'username' => $this->input->post('username'),
	                'password' => $this->input->post('password'),
	                'id_no' => $this->input->post('id_no') 
	                );
	                $this->db->insert('tbl_users',$data);
	}
	public function update_user(){
	        $id = $this->input->post('id');
	        $data = array(
	                'firstname' => $this->input->post('firstname'),
	                'lastname' => $this->input->post('lastname'),
	                'email' => $this->input->post('email'),
	                'phone' => $this->input->post('phone'),
	                'role' => $this->input->post('role'),
	                'username' => $this->input->post('username'),
	                'password' => $this->input->post('password'),
	                'id_no' => $this->input->post('id_no') 
	                );
	                $this->db->where('id',$id);
	                $this->db->update('tbl_users',$data);
	        
	}
	public function delete_user($id = null){
	$this->db->where('id', $id);
	$this->db->delete('tbl_users');
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
	
}
