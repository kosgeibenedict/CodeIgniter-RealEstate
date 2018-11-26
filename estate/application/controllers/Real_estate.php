<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Real_estate extends CI_Controller {

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
	{       $data['properties']=$this->Fetch_model->fetch_listed_rental_property();
		$this->load->view('front/index',$data);
	}
	public function property_detail($id=''){
	        $id=$_GET['id'];
	        $data['property_head']=$this->Fetch_model->get_this_property($id);
	        $this->load->view('front/property-detail',$data);
	}
	public function buysalerent(){
	        $type=$_GET['type'];
	        $data['data_type']=$type;
	        $data['types']=$this->Fetch_model->find_property_category($type);
	       $this->load->view('front/buysalerent',$data); 
	} 
	public function page(){
	        $data['title']=$_GET['i'];
	        if($_GET['i']=='agents'){
	        $data['agents']=$this->Fetch_model->get_agents();
	        }
	        $this->load->view('front/'.$_GET['i'],$data);
	}
	public function register(){
	        $this->load->view('front/register');
	}
}
