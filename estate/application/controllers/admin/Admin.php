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
	  public function __construct() {
        parent::__construct();
        $this->load->library('template'); 
    }
	public function index()
	{
	        $data = array( 
                    'title' => 'Joshina International Properties', 
                );
                $data['properties'] = $this->Fetch_model->fetch_all_properties();
                $data['admins'] = $this->Fetch_model->fetch_admin();
                $data['clients'] = $this->Fetch_model->fetch_client();
                $data['agents'] = $this->Fetch_model->fetch_agent();
                $data['enquiries'] = $this->Fetch_model->fetch_enquiries();
		$this->template->load('default', 'admin/index', $data);
		//$this->template->load('default', 'front/index', $data);
	}
	
	public function add_rental_property(){
	        $data = array(
 
                    'title' => 'Add Rental Property', 
                );
		$this->template->load('default', 'admin/add_property', $data);
	}
	
	public function rental_property(){
	        $data = array(
                    'listed_properties'=>$this->Fetch_model->fetch_listed_rental_property(),
                    'title' => 'All Rental Property', 
                );
		$this->template->load('default', 'admin/all_property', $data);
	}
	
	public function add_new_property(){
	        print_r($_POST);
	        $property_name=$this->input->post('property_name');
	        $address=$this->input->post('address');
	        $unit_no=$this->input->post('unit_no');
	        $property=$this->input->post('property_type');
	        $rent_price=$this->input->post('rent_price');
	        $deposit=$this->input->post('deposit');
	        $beds=$this->input->post('beds');
	        $baths=$this->input->post('baths');
	        $size=$this->input->post('size');
	        $duration=$this->input->post('duration');
	        $date_available=$this->input->post('date_available');
	        $lease_terms=$this->input->post('lease_terms');
	        //contact details
	        $name=$this->input->post('name');
	        $email=$this->input->post('email');
	        $phone=$this->input->post('phone');
	        $renter=$this->input->post('renter');
	        
	        $main_image=''; 
	        //social amenities
	        if(isset($_POST['amenities'])){
	       $amenities=implode(',',$this->input->post('amenities'));
	        }else{
	                $amenities='';
	        }
	        if(isset($_POST['parking'])){
	       $parking=1;
	        }else{
	                $parking=0;
	        } 
	       //Upload images 
	       
	        //image entry
        $target_path = "assets/images/properties/";
        $validextensions = array('jpeg', 'JPEG', 'GIF', 'jpg', 'JPG', 'PNG', 'png');
        $ext = explode('.', basename($_FILES['main_photo']['name']));
        $file_extension = end($ext);
        $image_name = md5(uniqid()) . "." . $ext[count($ext) - 1];
        $target_path2 = $target_path . $image_name;

        if (($_FILES["main_photo"]["size"] < 1000000000000000000000000000000) && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['main_photo']['tmp_name'], $target_path2)) {
                $path = $image_name;
                $config['source_image'] = $target_path2; //$fileTmpLoc;
                $config['wm_text'] = '';
                $config['quality'] = 150;
                $config['wm_font_path'] = './system/fonts/texb.ttf';
                $config['wm_font_size'] = '15';
                $config['wm_font_color'] = 'ffffff';
                $config['wm_vrt_alignment'] = 'top';
                $config['wm_hor_alignment'] = 'center'; 
                $config['wm_padding'] = '50';
                $config['wm_shadow_color'] = '27AE60';
                $config['wm_shadow_distance'] = 5;
                $config['width'] = 75;
                $config['height'] = 50;
                // $this->image_lib->initialize($config);
                //$this->image_lib->watermark();

                $main_image = $image_name;
            }
        }
	       
	       //end of upload image
	        
	        $data=array(
	                'address'=>$address,
	                'name'=>$property_name,
	                'unit_no'=>$unit_no,
	                'property_type'=>$property,
	                'price'=>$rent_price,
	                'type'=>'rent',
	                'deposit'=>$deposit,
	                'bedrooms'=>$beds,
	                'baths'=>$baths,
	                'duration'=>$duration,
	                'lease_terms'=>$lease_terms,
	                'date_available'=>$date_available, 
	                'image'=>$main_image,
	                'status'=>0,
	                'amenities'=>$amenities,
	                'parking'=>$parking,
	                'date'=>date('y-m-d'),
	                'added_by'=>$_SESSION['user']
	                );
	                
	     $this->db->insert('tbl_property',$data);
	     
	     header('Location: index');
	}
	
	public function company_settings(){
	        $data = array( 
                    'title' => 'Company Settings', 
                );
		$this->template->load('default', 'admin/company_settings', $data);
	}
	
	public function company_details(){
	        print_r($_POST);
	        for($i=0;$i<count($_POST['company']);$i++){ 
	                    $data=array(
	                            'config_item'=>$this->input->post('company')[$i],
	                            'value'=>$this->input->post('val')[$i]
	                            );
	                            $this->db->set($data)->where('config_item',$this->input->post('company')[$i]);
	                            $this->db->update('tbl_config',$data); 
	        }
	        if(isset($_FILES)){
	                       //image entry
        $target_path = "assets/images/company_infor/";
        $validextensions = array('jpeg', 'JPEG', 'GIF', 'jpg', 'JPG', 'PNG', 'png');
        $ext = explode('.', basename($_FILES['image']['name']));
        $file_extension = end($ext);
        $image_name = $_FILES['image']['name'];
        $target_path2 = $target_path . $image_name;   

        if (($_FILES["image"]["size"] < 1000000000000000000000000000000) && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path2)) {
                $path = $image_name;
                $config['source_image'] = $target_path2; //$fileTmpLoc;
                $config['wm_text'] = '';
                $config['quality'] = 150;
                $config['wm_font_path'] = './system/fonts/texb.ttf';
                $config['wm_font_size'] = '15';
                $config['wm_font_color'] = 'ffffff'; 
                $config['wm_vrt_alignment'] = 'top';
                $config['wm_hor_alignment'] = 'center'; 
                $config['wm_padding'] = '50';
                $config['wm_shadow_color'] = '27AE60';
                $config['wm_shadow_distance'] = 5;
                $config['width'] = 75;
                $config['height'] = 50;
                // $this->image_lib->initialize($config);
                //$this->image_lib->watermark();

                $main_image = $image_name;
            }
            //echo($main_image); 
        }
	        }
	        header('Location: index');
	}
	
	public function general_settings(){
	      $data = array(
 
                    'title' => 'General Settings', 
                );
		$this->template->load('default', 'admin/general_settings', $data);
	}
	
	public function general_settings_add(){
	        $b_background=$this->input->post('business_background');
	        $c_profile=$this->input->post('company_profile');
	        $data=array( 
	                'config_item'=>'business_background'
	                );
	       $datax=array( 
	                'config_item'=>'company_profile' 
	                ); 
	       $value=array(
	               'value'=>$b_background
	               );
	       $valuex=array(
	               'value'=>$c_profile
	               );
	               if(strlen($b_background)>0){
	               $this->db->where($data)->set($value)->update('tbl_config');
	               }
	               if(strlen($c_profile)>0){
	               $this->db->where($datax)->set($valuex)->update('tbl_config');
	               }
	                header('Location: index');
	}
}
