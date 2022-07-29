<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function register() {
		
		$data['title'] = 'Sign Up | '.app_name;
		$this->load->view('register', $data);
	}

	public function reg(){
		if($_POST) {
			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$gender = $this->input->post('gender');
			$image = $this->input->post('image');
			$dept = $this->input->post('dept');
			$matric_no = $this->input->post('matric_no');
			$level = $this->input->post('level');
			$phone = $this->input->post('phone');

			$Error = '';
			if($this->Crud->check('email', $email, 'user') > 0) {$Error .= 'Email Taken <br/>';}

			if (empty($image)) {
				echo $this->Crud->msg('danger', 'Please Take a snapshot of user before submitting the form.');
			} else {
				if($Error) {
					echo $this->Crud->msg('danger', $Error);
					die;
				}

				$myimg = $_POST['image'];
			    $destinationPath = "assets/images/users/";
			  
			    $web_capture_part = explode(";base64,", $myimg);
			    $image_type_aux = explode("image/", $web_capture_part[0]);
			    $image_type = $image_type_aux[1];
			  
			    $image_base64 = base64_decode($web_capture_part[1]);
			    $myimgName = uniqid() . '.png';
			  
			    $file = $destinationPath . $myimgName;
			    file_put_contents($file, $image_base64);
			    
			    ///Upload Image to DB
				if(!empty($file)){
					//save picture in system
					$pics_data = array(
						'user_id' => '0',
						'pics' => $file
					);
					$pics_ins = $this->Crud->create('image', $pics_data);
					// update in user table
					if($pics_ins) {
						$img_id = $pics_ins;
						//echo $this->Crud->msg('success', 'Picture Saved');
					}
				}
				/// end profile picture upload


				//unlink("assets/images/jstree.png");
				$ins_data['email'] = $email;
				$ins_data['name'] = $name;
				$ins_data['phone'] = $phone;
				$ins_data['gender'] = $gender;
				$ins_data['dept'] = $dept;
				$ins_data['level'] = $level;
				$ins_data['matric_no'] = $matric_no;
				$ins_data['img_id'] = $img_id;
				
				$ins_id = $this->Crud->create('user', $ins_data);
				if($ins_id > 0) {
					$up_data['user_id'] = $ins_id;
					$this->Crud->update('id', $img_id, 'image', $up_data);
					echo $this->Crud->msg('success', 'Student Created<br>');
					echo '<script>location.reload(false);</script>';
				} else {
					echo $this->Crud->msg('danger', 'Please Try Again Later');
				}

				die;
			}
		}

	}


	public function login() {
		if(!empty($this->session->userdata('fa_user_id'))) {
			redirect(base_url('dashboard'), 'refresh');
		}

		$data['title'] = 'Sign In | '.app_name;
		$this->load->view('login', $data);
	}

	public function logout() {
		if(!empty($this->session->userdata('fa_user_id'))) {
			$user_id = $this->session->userdata('fa_user_id');
			$this->session->set_userdata('fa_user_id', '');
			$this->session->sess_destroy();
			
		}
		
		$data['title'] = 'Sign Out | '.app_name;
		$this->load->view('login', $data);
	}


	public function save(){
		$myimg = $_POST['image'];
	    $destinationPath = "assets/images/test/";
	  
	    $web_capture_part = explode(";base64,", $myimg);
	    $image_type_aux = explode("image/", $web_capture_part[0]);
	    $image_type = $image_type_aux[1];
	  
	    $image_base64 = base64_decode($web_capture_part[1]);
	    $myimgName = uniqid() . '.png';
	  
	    $file = $destinationPath . $myimgName;
	    file_put_contents($file, $image_base64);
	    
	    /////////////Image Captured from User///////////////////////////////
		$path1 = base_url($file);
		$type1 = pathinfo($path1, PATHINFO_EXTENSION);
		$data1 = file_get_contents($path1); //echo $data1;
		$base641 = 'data:image/' . $type1 . ';base64,' . base64_encode($data1); //echo $base641;
		////////////////////////////////END////////////////////////////////////////


		///////////Images From DB///////////////////////////////////////////////////////
		$ret = $this->Crud->read('image');
		if (empty($ret)) {
			echo $this->Crud->msg('Please Fill the User Table');
		} else {
			$count = 0;
			$co = 0;
			foreach ($ret as $key) {
				$id = $key->user_id;
				$imag = $key->pics; 
				$path2 = base_url($imag);
				$type2 = pathinfo($path2, PATHINFO_EXTENSION);
				$data2 = $this->Crud->url_get_contents($path2);// echo $data2.'<br>';
				$base642 = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);
				
				$ver = $this->Crud->face_verify($base641, $base642);
				echo $ver.'<br>';

				if ($ver > 0) {
					$count++;
					if ($count > 1) {
					
					} else {
						echo $this->Crud->msg('success', 'Face Matched Success.<br>Login Successful!!');
						$user_id = $id;
					
						// save user_id in session
						echo $this->session->set_userdata('fa_user_id', $user_id);
			  			//echo $user_id;
						echo $this->Crud->msg('success', 'Login Successful');

						// redirect
						echo '<script>window.location.replace("'.base_url('dashboard').'");</script>';
					}
				} else {
					$co++;
					if ($co > 1) {
					
					} else {
						echo $this->Crud->msg('warning', 'Face Matched Failed. Login Failed.<br>Please Try Again Later.');	
					}
					
				}

			}
		}
		unlink($file);
		///////////////////////////////////////////////////////////////////////////////////

		//echo $base642.'<br><br><br><br><br> '.$base641;
		   
	}

}
