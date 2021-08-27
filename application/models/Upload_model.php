<?php 

class Upload_model extends CI_Model {

    protected $User_table_name = "user_images";
    
    public function insert_image_info($insertdata) {

        return $this->db->insert($this->User_table_name, $insertdata);
    }

    public function image_info($userData) {

    	//print_r($userData);die;
          if(isset($userData['location'])){
          	  // $check = $this->db->where($where)->or_where('dep_code', $this->input->post('code'))->get('departments');
          	 $query = $this->db->get_where($this->User_table_name, array('user_fk_id' => $userData['userid'] , 'location' => $userData['location']));
          }else{
          	   $query = $this->db->get_where($this->User_table_name, array('user_fk_id' => $userData['userid']));
          }
      
     	 if ($this->db->affected_rows() > 0) {
	         $row = $query->row_array();
	        
	        $result_array = array();
	     	foreach ($query->result_array() as $row){
	     			array_push( $result_array , $row);
			}

                return [
                    'status' => TRUE,
                    'data' => $result_array,
                ];
        } else {
            return ['status' => FALSE,'data' => FALSE];
        }
    }

 	public function location($userData) {
     	$this->db->select('location');
		$this->db->distinct();
	 	$query = $this->db->get_where($this->User_table_name, array('user_fk_id' => $userData['userid']));
		$row = $query->row_array();	        
        $result_array = array();
     	foreach ($query->result_array() as $row){
     			array_push( $result_array , $row['location']);
		}
		return $result_array;
    }

}
