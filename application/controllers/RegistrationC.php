<?php
class RegistrationC extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('registration_model');
        $this->load->library('upload');
    }
    
    
    public function registration(){
        if(isset($_POST['submit'])){
        if(!empty($_FILES['profile']['name'])){
           
            $config['upload_path']='uploads/';
            $config['allowed_types']='gif|jpg|jpeg|png';
            $config['max_size']='50000';
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('profile')){
                $error=array('error'=>$this->upload->display_error());
                $data['img_error']=$error['error'];
            }else{
            $image = array('upload_data'=>$this->upload->data());
                }
        }
            
        if ((empty($data['img_error']))) {
           $data=array(
           'name'=>$this->input->post('name'),
           'email'=>$this->input->post('email'),
           'mobile'=>$this->input->post('mobile'),
           'gender'=>$this->input->post('gender'),
           'languages'=>implode(',',$this->input->post('languages[]')),
           'address'=>$this->input->post('address'),
           'city'=>$this->input->post('city'),
           'profile'=> $image['upload_data']['file_name'],
           'DOB'=>$this->input->post('DOB'),
           'status'=>$this->input->post('status'),
           );
           //print_r($data);
            $insert_data=$this->registration_model->insert_value($data);
            
            if($insert_data){
                 redirect(base_url() . 'home', 'refresh');
            }else
            {
                echo "Data Not Inserted";
            }
        }
            
        }else{
        $this->load->view('registration');
            }
    }
    public function list_view(){
        $data['result']=$this->registration_model->get_data();
        $this->load->view('List_view',$data);
    }
    public function item_view($id){
        $data['result']=$this->registration_model->get_individual_data($id);
        $this->load->view('view',$data);
    }
    public function edit($id){
        $userdata['result']=$this->registration_model->get_individual_data($id);
        
        if(isset($_POST['submit'])){
            $data=array(
           'name'=>$this->input->post('name'),
           'email'=>$this->input->post('email'),
           'mobile'=>$this->input->post('mobile'),
           'gender'=>$this->input->post('gender'),
           'languages'=>implode(',',$this->input->post('languages[]')),
           'address'=>$this->input->post('address'),
           'city'=>$this->input->post('city'),
           'DOB'=>$this->input->post('DOB'),
           'status'=>$this->input->post('status'),
            );
            $update=$this->registration_model->update_data($data,$id);
            if($update){
                redirect(base_url().'home','refresh');
            }else{
                echo "Failed to Insert";
            }
        }else{
        $this->load->view('edit',$userdata);
            }
    }

    public function delete($id){
        $delete=$this->registration_model->delete_data($id);
        if($delete){
            redirect(base_url().'home','refresh');
        }
    }
}
    

?>