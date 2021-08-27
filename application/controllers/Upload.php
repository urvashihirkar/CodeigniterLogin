<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                 $this->load->helper('directory'); 
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('panel', array('error' => ' ' ));
        }

        public function do_upload()
        {

            $this->form_validation->set_rules('caption', 'Caption');
            $this->form_validation->set_rules('location', 'Location');

                $config['upload_path']          = 'upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
               // echo  $config['upload_path'] ;//die;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('userfile'))
                {

                    //echo $this->upload->display_errors();die;
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('panel', $error);
                }
                else
                {
                        $data =  $this->upload->data();
                        // echo "<pre>";
                        // print_r($data);
                        $insert_data = array(               
                            'user_fk_id' => $this->session->userdata('USER_ID'),
                            'caption' => $this->input->post('caption', TRUE),
                            'location' => $this->input->post('location', TRUE),
                            'file_name' => $data['file_name'],                         
                            'created_at' => time(),
                            'update_at' => time(),
                        );
                          // print_r($insert_data);die;
            /**
             * Load User Model
             */
            $this->load->model('Upload_model', 'UploadModel');
            $result = $this->UploadModel->insert_image_info($insert_data);

            if ($result == TRUE) {

                $this->session->set_flashdata('success_flashData', 'You have registered successfully.');
                redirect('Upload/gallery');

            } else {

               $this->session->set_flashdata('success_flashData', 'Successfully upload file.');
                        redirect('User/panel');

            }
                        
                        //$this->load->view('upload_success', $data);
                }
        }
     public function gallery() {  
   
        if (empty($this->session->userdata('USER_ID'))) {
            redirect('user/login');
        } 
            //echo "<pre>"; print_r($_GET);die;
         if(isset($_GET['location']) && !empty($_GET['location']) ){

            //echo "dd";
             $data = array(
                'userid' => $this->session->userdata('USER_ID'),
                'location' =>$_GET['location'],
            );
         }else{
             $data = array(
                'userid' => $this->session->userdata('USER_ID'),
            );
         }
      
       
        // print_r($dataI);die;
          $this->load->model('Upload_model', 'UploadModel');
           $result = $this->UploadModel->image_info($data);
        //echo "<pre>"; print_r($result);die;
            $location = $this->UploadModel->location($data);
        //echo "<pre>"; print_r($resultl);die;
        if (!empty($result['status']) && $result['status'] == 1) {
                
                $data['page_title'] = "Welcome to User gallery";
                $data['result'] =  $result;
                $data['imgurl'] =   base_url('upload/') ;
                $data['location'] =   $location ;

               


                $this->load->view('_Layout/home/header.php', $data); // Header File
                $this->load->view("user/gallery");
                $this->load->view('_Layout/home/footer.php'); // Footer File

            } else {
//http://localhost/CodeigniterLogin/application/upload/Screenshot_(11)10.png
                //$this->session->set_flashdata('error_flashData', 'Invalid Email/Password.');
                redirect('User/panel');
            }
       
    }
}
?>