<?php
class registration_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    
public function insert_value($data){
    $this->db->insert('user_data',$data);
    return $insert_id=$this->db->insert_id();
}    
 
    
    public function get_data(){
    $query=$this->db->query('select * from user_data');
        return $result=$query->result();
    }
    
    public function get_individual_data($id){
    $query=$this->db->query('select * from user_data where id='.$id);
        return $result=$query->result();
    }
    
    public function update_data($data,$id){
        $this->db->where('id',$id);
        return $this->db->update('user_data',$data);
    }
    
    public function delete_data($id){
        $this->db->where('id',$id);
        return $this->db->delete('user_data');
    }
}





?>